<?php


namespace App\Contracts;

use Illuminate\Http\Request;

interface CartInterface
{
    public function store(Request $request);
    public function items() ;
    public function item($itemID) : array ;
    public function addOrUpdate(array $items);
    public function remove($itemID);
    public function exist($itemID);
    public function incrementQuantity($itemID, $quantity);
    public function decrementQuantity($itemID, $quantity = 1);
    public function hasItems() : bool ;
    public function count() : int ;
    public function get() : array ;
    public function getDropdownTable($items) : string ;
    public function clear() : void ;

}
