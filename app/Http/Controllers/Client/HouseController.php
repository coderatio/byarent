<?php

namespace App\Http\Controllers\Client;

use App\House;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HouseController extends Controller
{
    public function index($houseID)
    {
        $house = House::find($houseID);

        abort_if(!$house, 404, 'The house you are looking for does not exist.');

        $relatedHouses = House::orderBy('created_at', 'desc')
            ->where('type', $house->type)
            ->where('id', '!=', $house->id)
            ->take(6)->offset(0)->get();

        return view('house.index', compact(
            'house', 'relatedHouses'
        ));
    }
}
