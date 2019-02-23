<?php

namespace App\Http\Controllers\Client;

use App\Cart;
use App\Facades\ByarentCart;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Supports\ByarentCart as ByarentCartService;
use Illuminate\Support\Facades\Auth;

class ShoppingCartsController extends Controller
{
    protected $itemsInCart = [];

    protected $cart;

    public function __construct(ByarentCartService $cart)
    {
        $this->cart = $cart;
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Request $request): JsonResponse
    {
        $this->cart->store($request);

        return response()->json([
            'items' => [
                'count' => $this->cart->count(),
                'items' => $this->cart->items()
            ],
            'contents' => $this->cart->getDropdownTable($this->cart->items())
        ]);
    }

    public function destroy(Request $request) : JsonResponse
    {
        try {
            $item = $this->cart->item($request->itemID);

            if (Auth::check()) {
                $cartItem = Cart::getUserCart($item->id);
                
                if ($cartItem) {
                    $cartItem->delete();
                }
            }

            if (!$this->cart->remove($item->id)) {
                return response()->json(['deleted' => false, 'error' => 'Item not found!']);
            }

            return response()->json([
                'deleted' => true,
                'error' => null,
                'items' => [
                    'count' => $this->cart->count(),
                    'item' => $item,
                ],
                'newContents' => ByarentCart::getDropdownTable(ByarentCart::items())
            ]);

        } catch (\Exception $exception) {
            return response()->json(['deleted' => false, 'error' => $exception->getMessage()]);
        }

    }

    public function update(Request $request) : JsonResponse
    {
        foreach ($request->items as $id) {
            $item = $this->cart->item($id);
            if ($item) {
                $quantity = \request("itemQuantity{$id}");

                if (Auth::check()) {
                    $cartItem = Cart::getUserCart($item->id, Auth::user()->id);

                    if ($cartItem) {
                        $cartItem->update(['qty' => $quantity]);
                        if ($quantity < 1) {
                            $cartItem->delete();
                        }
                    }
                }

                $this->cart->instance()->update($item->rowId, $quantity);
            }
        }

        $contents = view('components.cart-items')
            ->withItems(ByarentCart::items())
            ->render();

        return response()->json([
            'items' => [
                'count' => ByarentCart::count(),
                'items' => ByarentCart::items(),
            ],
            'dropdownContents' => ByarentCart::getDropdownTable(ByarentCart::items()),
            'contents' => $contents
        ]);
    }

    public function clear(Request $request) : JsonResponse
    {
        if (Auth::check()) {
            Auth::user()->carts()->delete();
        }

        if ($this->cart->clear()) {

            return response()->json([
                'cleared' => true,
                'items' => [
                    'count' => 0
                ],
                'contents' => $this->cart->getDropdownTable([])
            ]);
        }

        return response()->json(['cleared' => false]);
    }
}
