<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('pages.home');
});

Route::get('/Home', [PageController::class, 'welcome']);
Route::get('/SignIn', [PageController::class, 'signin']);
Route::get('/Login', [PageController::class, 'login']);
Route::get('/Products', [PageController::class, 'products']);
Route::get('/Dashboard', [PageController::class,'userDashboard']);
Route::get('/Splash', [PageController::class,'splashscreen']);


Route::post('/SignIn', [UserController::class, 'signinPost']);
Route::post('/Logout', [UserController::class, 'logout']);
Route::post('/Login', [UserController::class, 'loginPost']);
Route::post('/user/update', [UserController::class, 'updateProfile']);