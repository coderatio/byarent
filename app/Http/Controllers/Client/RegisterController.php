<?php

namespace App\Http\Controllers\Client;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'email' => 'required|unique:users',
            'password' => 'min:6',
            'confirmPassword' => 'min:6|same:password'
        ]);

        $user = new User();
        $user->email = $request->email;
        $user->name = "{$request->fname} {$request->lname}";
        $user->password = bcrypt($request->password);
        $user->avatar = 'users/default.png';

        if ($user->save()) {

            Auth::login($user);

            return back()->withMessage('Registration was successful');
        }

        return back()->withInput()->withError('Registration failed.');
    }

    public function checkEmailExist(Request $request)
    {
        return User::whereEmail($request->email)->first()
            ? json_encode('Email already in registered.')
            : json_encode('true');
    }
}
