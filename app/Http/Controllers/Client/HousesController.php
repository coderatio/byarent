<?php

namespace App\Http\Controllers\Client;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HousesController extends Controller
{
    public function index($type = '')
    {
        return view('houses.index');
    }
}
