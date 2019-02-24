<?php

namespace App\Http\Controllers\Client;

use App\Facades\ByarentCart;
use App\Order;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class OrdersController extends Controller
{
    public function index()
    {
        if (!session()->has('order-placed')) {
            return redirect()->route('home.index');
        }

        return view('orders.index');
    }

    public function store(Request $request)
    {
        if (!auth()->check()) {
            return back()->withError('<b>Sorry.</b> You must be logged in to place order.');
        }

        DB::beginTransaction();

        try {
            $user = auth()->user();
            $orderID = $this->generateRandomNumbers(6);

            $order = new Order();
            $order->externalID = $orderID;
            $order->contents = json_encode(ByarentCart::items());
            $order->itemName = 'Order placed by ' . $user->name . ' on ' . now();
            $order->userID = $user->id;
            $order->save();

            // Cleanup cart;
            $this->cleanUpUserCarts();

            DB::commit();

            return redirect()->route('orders.index')
                ->with(['order-placed' => "Your order <b>#{$orderID}</b>, was received and is been processed."]);
        } catch (\Exception $exception) {
            DB::rollBack();

            return back()->withError("Failed to place order: {$exception->getMessage()}");
        }

    }

    protected function cleanUpUserCarts()
    {
        ByarentCart::clear();
        auth()->user()->carts()->delete();

        return $this;
    }

    protected function generateRandomNumbers($length)
    {
        return substr(str_shuffle(str_repeat('0123456789', $length)), 0, $length);
    }
}
