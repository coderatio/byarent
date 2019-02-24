<?php

namespace App\Http\Controllers\Client;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AccountController extends Controller
{
    public function index($type = '')
    {
        return view('accounts.index', ['checkout' => false, 'type' => $type]);
    }

    public function update(Request $request)
    {
        $user = User::find($request->userID);

        abort_if(!$user, 404, 'User no longer exist.');

        $user->name = "{$request->fname} {$request->lname}";
        if ($user->save()) {
            return back()->withMessage('Profile updated successfully');
        }

        return back()->withInput()->withError('Failed to update profile.');
    }
}
