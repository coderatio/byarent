<?php


namespace App\Supports;


use App\Contracts\CartInterface;
use App\House;
use App\Services\Money;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Cart as CartModel;
use Illuminate\Support\Str;

class ByarentCart implements CartInterface
{
    public $itemsInCart = [];
    public $cartInstance = 'temporary-cart-items';
    protected $cart;

    public function __construct()
    {
        $this->itemsInCart = Cart::instance($this->cartInstance)->content();

        if (auth()->check()) {
            $this->itemsInCart = $this->dbClonedCartContents();
        }

        $this->cart = Cart::instance($this->cartInstance);
    }

    public function instance()
    {
        return $this->cart;
    }

    public function store(Request $request): self
    {
        $item = House::find($request->itemID);

        Cart::instance($this->cartInstance)->add([
            'id' => $item->id,
            'price' => $item->parsedPrice,
            'qty' => 1,
            'name' => $item->name,
            'options' => [
                'formattedPrice' => $this->formattedPrice($item->parsedPrice),
                'house' => $item
            ]
        ]);

        return $this->updateItemsInCart();
    }

    public function updateQuantity($itemID, $quantity)
    {
        if ($this->exist($itemID)) {
            $item = $this->getCartByItemID($itemID);

            Cart::instance($this->cartInstance)->update($item->rowId, $quantity);
        }

        return $this;
    }

    protected function updateItemsInCart()
    {
        $this->itemsInCart = Cart::instance($this->cartInstance)->content();

        return $this;
    }

    public function items(): Collection
    {
        return $this->hasItems() ? $this->itemsInCart : $this->collect([]);
    }

    public function item($itemID)
    {
        return $this->getCartByItemID($itemID);
    }

    protected function getCartByItemID($itemID)
    {
        if ($this->hasItems()) {
            foreach (Cart::instance($this->cartInstance)->content() as $cart) {
                if ($cart->id == $itemID) {
                    return $cart;
                }
            }

            return false;
        }
    }

    public function remove($itemID): bool
    {
        if ($this->exist($itemID)) {
            $this->cart->remove($this->getCartByItemID($itemID)->rowId);

            return true;
        }

        return false;
    }

    public function exist($itemID): bool
    {
        $item = $this->getCartByItemID($itemID);
        if ($item && $item->id == $itemID) {
            return true;
        }

        return false;
    }

    public function incrementQuantity($itemID, $quantity = 1) : self
    {
        if ($this->getCartByItemID($itemID)) {
            $item = $this->getCartByItemID($itemID);
            $item->qty += $quantity;
            $this->cart->update($item->rowId, $item->qty);
        }

        return $this;
    }

    /**
     * @param $itemID
     * @param int $quantity
     * @return ByarentCart
     */
    public function decrementQuantity($itemID, $quantity = 1) : self
    {
        if ($this->getCartByItemID($itemID)) {
            $item = $this->getCartByItemID($itemID);
            $item->qty -= $quantity;
            $this->cart->update($item->rowId, $item->qty);
        }

        return $this;
    }

    public function synchronizeTemporaryWithDBCart()
    {
        if ($this->hasItems()) {
            foreach ($this->items() as $item) {
                $user = Auth::user();
                $cartItem = $this->item($item->id);
                $particulars = ['userID' => $user->id, 'itemID' => $item->id];
                $carts = CartModel::where($particulars)->get();
                if ($carts) {
                    CartModel::updateOrCreate($particulars, [
                        'itemID' => $item->id,
                        'rowID' => $cartItem->rowId,
                        'userID' => $user->id,
                        'qty' => $carts->count() + $item->qty,
                        'itemName' => $item->name
                    ]);

                } else {
                    CartModel::updateOrCreate($particulars, [
                        'rowID' => $cartItem->rowId,
                        'itemID' => $item->id,
                        'userID' => $user->id,
                        'itemName' => $item->name
                    ]);
                }
            }

            $this->clear();
        }

        return $this;
    }

    public function dbClonedCartContents()
    {
        foreach (CartModel::all() as $cart) {
            $house = House::find($cart->itemID);

            if ($this->exist($house->id)) {
                $item = $this->item($house->id);
                $cart->update(['rowID' => $item->rowId]);
                Cart::instance($this->cartInstance)->update($item->rowId, ['qty' => $cart->qty]);
            } else {
                Cart::instance($this->cartInstance)->add([
                    'id' => $cart->itemID,
                    'name' => $house->name,
                    'qty' => $cart->qty,
                    'price' => $house->parsedPrice,
                    'options' =>  [
                        'house' => $house,
                        'formattedPrice' => $house->parsedPrice
                    ]
                ]);
            }
        }

        /*if (CartModel::count() === 0) {
            $this->clear();
        }*/

        $this->itemsInCart = Cart::instance($this->cartInstance)->content();
        return $this->itemsInCart;
    }

    public function clear(): bool
    {
        if (Cart::instance($this->cartInstance)->destroy()) {
            return true;
        };

        return false;
    }

    public function hasItems(): bool
    {
        return $this->count() ? true : false;
    }

    public function count(): int
    {
        return Cart::instance($this->cartInstance)->count();
    }

    public function get(): Collection
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
