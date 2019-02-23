<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $fillable = ['itemID', 'userID', 'itemName', 'qty', 'rowID'];

    public static function getUserCart($itemID, $userID)
    {
        return self::where(['itemID' => $itemID, 'userID' => $userID])->first();
    }

    public static function getUserCarts($userID)
    {
        return self::where('userID',$userID)->get();
    }
}
