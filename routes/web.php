<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use App\Http\Controllers\Client\CartController;
use App\Http\Controllers\Client\CheckoutController;
use App\Http\Controllers\Client\HomeController;
use App\Http\Controllers\Client\HouseController;
use App\Http\Controllers\Client\HousesController;
use App\Http\Controllers\Client\OrdersController;
use App\Http\Controllers\Client\TemporaryCartsController;


// TODO: Remove or update routes parameters
Route::get('/', [HomeController::class, 'index'])->name('home.index');
Route::get('houses/{type?}', [HousesController::class, 'index'])->name('houses.index');
Route::get('house/{id}/view', [HouseController::class, 'index'])->name('house.index');
Route::get('cart/{id?}', [CartController::class, 'index'])->name('cart.index');
Route::get('checkout/{cartID}', [CheckoutController::class, 'index'])->name('checkout.index');
Route::get('order/{id}', [OrdersController::class, 'index'])->name('order.index');

Route::post('temporary-carts/store', [TemporaryCartsController::class, 'store'])->name('temporary-carts.store');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
