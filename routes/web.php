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

use App\Http\Controllers\Client\AccountController;
use App\Http\Controllers\Client\CartController;
use App\Http\Controllers\Client\CheckoutController;
use App\Http\Controllers\Client\HomeController;
use App\Http\Controllers\Client\HouseController;
use App\Http\Controllers\Client\HousesController;
use App\Http\Controllers\Client\ItemsInCartController;
use App\Http\Controllers\Client\LoginController;
use App\Http\Controllers\Client\LogoutController;
use App\Http\Controllers\Client\OrdersController;
use App\Http\Controllers\Client\RegisterController;
use App\Http\Controllers\Client\ShoppingCartsController;


Route::get('/', [HomeController::class, 'index'])->name('home.index');
Route::get('houses/{type?}', [HousesController::class, 'index'])->name('houses.index');
Route::get('house/{id}/view', [HouseController::class, 'index'])->name('house.index');
Route::get('cart/{id?}', [CartController::class, 'index'])->name('cart.index');
Route::get('checkout/{cartID?}', [CheckoutController::class, 'index'])->name('checkout.index');

Route::get('orders', [OrdersController::class, 'index'])->name('orders.index');
Route::post('orders/store', [OrdersController::class, 'store'])->name('orders.store');

Route::post('carts/store', [ShoppingCartsController::class, 'store'])->name('carts.store');
Route::post('carts/remove', [ShoppingCartsController::class, 'destroy'])->name('carts.destroy');
Route::post('carts/clear', [ShoppingCartsController::class, 'clear'])->name('carts.clear');
Route::post('carts/update', [ShoppingCartsController::class, 'update'])->name('carts.update');

Route::post('items-in-cart/update', [ItemsInCartController::class, 'update'])->name('items-in-cart.update');


Route::group(['prefix' => 'user'], function () {
   Route::post('login', [LoginController::class, 'authenticate'])->name('login.authenticate');
   Route::post('logout', [LogoutController::class, 'index'])->name('logout.index');
   Route::post('register', [RegisterController::class, 'store'])->name('register.store');
   Route::get('register/check-email-exist', [RegisterController::class, 'checkEmailExist'])->name('register.check-email');
   Route::get('account/{type?}', [AccountController::class, 'index'])->name('account.index');
   Route::post('account/update', [AccountController::class, 'update'])->name('account.update');
});

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
