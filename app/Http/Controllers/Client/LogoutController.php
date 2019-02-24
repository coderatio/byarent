<?php

namespace App\Http\Controllers\Client;

use App\Cart;
use App\Facades\ByarentCart;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LogoutController extends Controller
{
    public function index()
    {
        //ByarentCart::clear();

        //Auth::user()->carts()->delete();

        Auth::logout();

        return back()->withMessage('You are now logged out!');
    }
}
