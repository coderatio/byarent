<?php

namespace App\Http\Controllers\Client;

use App\Facades\ByarentCart;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ItemsInCartController extends Controller
{
    public function update(Request $request)
    {
        $contents = view('components.cart-items')
            ->withItems(ByarentCart::items())
            ->render();

        $checkoutSummary = view('checkout.cart-summary')
            ->withItems(ByarentCart::items())
            ->render();

        return response()->json([
            'items' => [
                'count' => ByarentCart::count(),
                'items' => ByarentCart::items(),
            ],
            'checkoutSummary' => $checkoutSummary,
            'contents' => $contents
        ]);
    }
}
