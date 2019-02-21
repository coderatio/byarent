<?php


namespace App\Supports;


use App\Contracts\CartInterface;
use App\House;
use App\Services\Money;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Session;

class TemporaryCart implements CartInterface
{
    protected $itemsInCart = [];
    public $sessionKey = 'temporary-cart-items';

    public function __construct()
    {
        $this->itemsInCart = !empty(session($this->sessionKey)) ?: [];
    }

    public function store(Request $request): self
    {
        $this->itemsInCart = \session($this->sessionKey);

        $house = House::find($request->itemID);

        if (empty($this->itemsInCart)) {
            $this->itemsInCart[] = [
                'quantity' => 1,
                'id' => $house->id,
                'price' => $house->parsedPrice,
                'formattedPrice' => $this->formattedPrice($house->parsedPrice),
                'item' => $house
            ];

            $this->addOrUpdate($this->itemsInCart);

            return $this;
        }

        if ($this->exist($house->id)) {
            return $this->incrementQuantity($house->id);
        } else {
            $this->itemsInCart[] = [
                'quantity' => 1,
                'id' => $house->id,
                'price' => $house->parsedPrice,
                'formattedPrice' => $this->formattedPrice($house->parsedPrice),
                'item' => $house
            ];

            return $this->addOrUpdate($this->itemsInCart);
        }

        return $this;
    }

    public function items(): array
    {
        $this->itemsInCart = $this->hasItems() ? \session($this->sessionKey) : [];

        return $this->itemsInCart;
    }

    public function item($itemID): array
    {
        if ($this->count() > 0) {
            foreach ($this->items() as $item) {
                if (isset($item['id']) && $item['id'] == $itemID) {
                    return $item;
                }
            }
        }

        return [];
    }

    public function addOrUpdate(array $items): self
    {
        $this->itemsInCart = $items;

        Session::put($this->sessionKey, $this->itemsInCart);

        return $this;
    }

    public function remove($itemID): self
    {
        $newItems = [];
        foreach ($this->items() as $item) {
            if (isset($item['id']) && $item['id'] != $itemID) {
                $newItems[] = $item;
            }
        }

        return $this->addOrUpdate($newItems);
    }

    public function exist($itemID): bool
    {
        $sessionItem = $this->item($itemID);
        if ($sessionItem && $sessionItem['id'] === $itemID) {
            return true;
        }

        return false;
    }

    public function incrementQuantity($itemID, $quantity = 1) : self
    {
        if ($this->hasItems()) {
            $newItems = [];

            foreach ($this->items() as $sessionItem) {
                if (isset($sessionItem['id']) && $sessionItem['id'] == $itemID) {
                    $item = House::find($itemID);
                    $sessionItem['quantity'] += $quantity;
                    $sessionItem['item'] = $item;
                    $sessionItem['price'] = $item->parsedPrice * $sessionItem['quantity'];
                    $sessionItem['formattedPrice'] = $this->formattedPrice($sessionItem['price']);
                }

                $newItems[] = $sessionItem;
            }

            $this->addOrUpdate($newItems);

        }

        return $this;
    }

    /**
     * @param $itemID
     * @param int $quantity
     * @return TemporaryCart
     */
    public function decrementQuantity($itemID, $quantity = 1) : self
    {
        if ($this->hasItems()) {
            $newItems = [];

            foreach ($this->items() as $sessionItem) {
                if (isset($sessionItem['id']) && $sessionItem['id'] == $itemID) {
                    if ($sessionItem['quantity'] > $quantity) {
                        $item = House::find($itemID);
                        $sessionItem['quantity'] -= $quantity;
                        $sessionItem['item'] = $item;
                        $sessionItem['price'] = $item->parsedPrice * $quantity;
                        $sessionItem['formattedPrice'] = $this->formattedPrice($sessionItem['price']);
                    }

                    $newItems[] = $sessionItem;
                }
            }

            if ($this->item($itemID)) {
                $item = $this->item($itemID);
                if ($quantity === 0 || $item['quantity'] < $quantity) {
                    return $this->remove($itemID);
                }
            }

            $this->addOrUpdate($newItems);
        }

        return $this;
    }

    public function clear(): void
    {
        \session()->forget($this->sessionKey);
    }

    public function hasItems(): bool
    {
        return !empty($this->itemsInCart) ? true : false;
    }

    public function count(): int
    {
        return count($this->items());
    }

    public function get(): array
    {
        return $this->itemsInCart;
    }

    /**
     * @return \Illuminate\Support\Collection
     */
    public function collect() : Collection
    {
        return collect($this->itemsInCart);
    }

    public function getDropdownTable($items): string
    {
        $contents = view('components.card-dropdown-table', [
            'items' => $items
        ])->render();

        return $contents;
    }

    public function formattedPrice($price): string
    {
        return setting('payments.currency_symbol') . Money::shorten($price);
    }
}
