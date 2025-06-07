<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\BagController;

Route::get('/', function () {
    return view('pages.home');
});

Route::get('/Home', [PageController::class, 'welcome']);
Route::get('/SignIn', [PageController::class, 'signin']);
Route::get('/Login', [PageController::class, 'login']);
Route::get('/AllProducts', [PageController::class, 'allproducts'])->name('all.products');
Route::get('/ColdProductsPage', [PageController::class, 'coldproducts'])->name('cold.products');

Route::get('/HotProductsPage', [PageController::class, 'hotproducts'])->name('hot.products');
Route::get('/Dashboard/User', [PageController::class, 'userDashboard']);
Route::get('/Dashboard/Order-History', [PageController::class, 'orderHistory']);
Route::get('/Dashboard/My-Bag', [PageController::class, 'mybag']);
Route::get('/Dashboard/Notifications', [PageController::class, 'notification']);
Route::get('/Dashboard/Vouchers', [PageController::class, 'voucher']);
Route::get('/Splash', [PageController::class, 'splashscreen']);

Route::post('/SignIn', [UserController::class, 'signinPost']);
Route::post('/logout', [UserController::class, 'logout'])->name('logout');
Route::post('/Login', [UserController::class, 'loginPost']);
Route::post('/user/update', [UserController::class, 'updateProfile']);
Route::post('/addCart', [CartController::class, 'addtocart'])->name('cart.add');
Route::delete('/cart/{id}', [App\Http\Controllers\CartController::class, 'destroy'])->name('cart.delete');
