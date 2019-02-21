<?php

namespace App\Http\Controllers\Client;

use App\House;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HousesController extends Controller
{
    public function index($type = '')
    {
        $houses = House::orderBy('created_at', 'desc')->paginate(6);

        if (!empty($type)) {
            $houses = House::orderBy('created_at', 'desc')->where('type', $type)->paginate(6);
        }

        return view('houses.index', compact('type', 'houses'));
    }
}
