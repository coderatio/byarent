<?php

namespace App\Http\Controllers\Client;

use App\Facades\ByarentCart;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Supports\ByarentCart as ByarentCartService;

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
        //ByarentCart::clear();

        try {

            $this->cart->store($request);

            return response()->json([
                'items' => [
                    'count' => $this->cart->count(),
                    'items' => $this->cart->items()
                ],
                'contents' => $this->cart->getDropdownTable($this->cart->items())
            ]);

        } catch (\Exception $exception) {

        }
    }

    public function destroy(Request $request)
    {
        try {
            $item = $this->cart->item($request->itemID);

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

    public function clear(Request $request)
    {
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
