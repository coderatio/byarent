<?php

namespace App\Http\Controllers\Client;

use App\Cart;
use App\Facades\ByarentCart;
use App\User;
use DemeterChain\C;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function authenticate(Request $request)
    {
        $credentials = [
            'email' => $request->email,
            'password' => $request->password
        ];

        $user = User::where(['email' => $request->email])->first();

        if (Auth::attempt($credentials)) {
            Auth::login($user);
            ByarentCart::synchronizeTemporaryWithDBCart();

            return back()->with(['message' => "Welcome back, <b>{$user->name}</b>!"]);
        }

        return back()->withInput()
            ->with(['error' => 'Wrong credentials entered!']);
    }
}
