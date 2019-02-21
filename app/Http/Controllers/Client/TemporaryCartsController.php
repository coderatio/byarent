<?php

namespace App\Http\Controllers\Client;

use App\Facades\ByarentCart;
use App\House;
use App\Services\Money;
use Gloudemans\Shoppingcart\Exceptions\InvalidRowIDException;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class TemporaryCartsController extends Controller
{
    protected $itemsInCart = [];
    /**
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */

    public function store(Request $request): JsonResponse
    {
        //TemporaryCart::clear();

        $house = House::find($request->itemID);
        try {

            $cart = ByarentCart::store($request);

            $cartG = $this->getCartByItemID($request->itemID);
            return response()->json($cart->items());

        } catch (\Exception $exception) {

        }

        /*$temporaryCart = Cart::add([
            'id' => $request->itemID
        ]);*/

        /*return response()->json([
            'items' => $temporaryCart->get(),
            'contents' => $temporaryCart->getDropdownTable(TemporaryCart::items())
        ]);*/
    }

    public function getCartByItemID($itemID)
    {
        if (Cart::count() > 0) {
            foreach (Cart::instance('shopping')->content() as $cart) {
                if ($cart->id == $itemID) {
                    return $cart;
                }
            }

            return false;
        }
    }
}
