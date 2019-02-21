<?php


namespace App\Contracts;

use Illuminate\Http\Request;
use Illuminate\Support\Collection;

interface CartInterface
{
    public function store(Request $request);
    public function items() ;
    public function item($itemID) : Collection ;
    public function remove($itemID);
    public function exist($itemID);
    public function incrementQuantity($itemID, $quantity);
    public function decrementQuantity($itemID, $quantity = 1);
    public function hasItems() : bool ;
    public function count() : int ;
    public function get() : Collection ;
    public function getDropdownTable($items) : string ;
    public function clear() : void ;

}
