<?php

namespace App\Http\Controllers\Client;

use App\House;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
        $houses = House::orderBy('created_at', 'desc')->take(6)->offset(0)->get();
        
        return view('home')->withHouses($houses);
    }
}
