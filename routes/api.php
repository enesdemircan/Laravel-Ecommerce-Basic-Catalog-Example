<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\ProductsController;
use App\Http\Controllers\Api\CategoriesController;
use App\Http\Controllers\Api\FavoritesController;
use App\Http\Controllers\Api\UsersController;
use App\Http\Controllers\Api\CartController;
use App\Http\Controllers\Api\OrdersController;

Route::group(['middleware' => ['cors', 'json.response']], function () {
    Route::post('/login', [AuthController::class, 'login'])->name('login.api');
    Route::post('/register',[AuthController::class, 'register'])->name('register.api');


    Route::resource('products', ProductsController::class);
    Route::resource('categories', CategoriesController::class);
    Route::resource('users', UsersController::class);


});


Route::middleware('auth:api')->group(function () {
    Route::resource('orders', OrdersController::class);
    Route::resource('cart', CartController::class);
    Route::resource('favorites', FavoritesController::class);
    Route::post('logout', [AuthController::class, 'logout'])->name('logout.api');
});

