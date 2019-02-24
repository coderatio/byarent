<?php

namespace App\Http\Controllers\Client;

use App\Facades\ByarentCart;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class CheckoutController extends Controller
{
    public function index()
    {
        //auth()->logout();

        if (!ByarentCart::hasItems()) {
            return redirect()->route('cart.index');
        }

        return view('checkout.index');
    }
}
