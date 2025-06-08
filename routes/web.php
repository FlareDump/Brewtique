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
Route::get('/Splash', [PageController::class, 'splashscreen'])->name('splashscreen');
Route::get('/Dashboard/Admin', [PageController::class, 'adminDashboard'])->name('adminDashboard');
Route::get('/Dashboard/Admin/Products', [PageController::class, 'adminProducts'])->name('admin.products');
Route::put('/Dashboard/Admin/Products/{id}', [PageController::class, 'updateProduct'])->name('admin.products.update');
Route::delete('/Dashboard/Admin/Products/{id}', [PageController::class, 'deleteProduct'])->name('admin.products.delete');
Route::get('/Dashboard/Admin/Orders', [PageController::class, 'adminOrders'])->name('admin.orders');
Route::get('/Dashboard/Admin/Users', [PageController::class, 'adminUsers'])->name('admin.users');

// Admin user management delete route only
Route::delete('/Dashboard/Admin/Users/{id}', [PageController::class, 'deleteUser'])->name('admin.users.delete');

Route::post('/SignIn', [UserController::class, 'signinPost']);
Route::post('/logout', [UserController::class, 'logout'])->name('logout');
Route::post('/Login', [UserController::class, 'loginPost']);
Route::post('/user/update', [UserController::class, 'updateProfile']);
Route::post('/addCart', [CartController::class, 'addtocart'])->name('cart.add');
Route::delete('/cart/{id}', [App\Http\Controllers\CartController::class, 'destroy'])->name('cart.delete');
Route::post('/checkout-cart', [App\Http\Controllers\CartController::class, 'checkoutCart'])->name('cart.checkout');
