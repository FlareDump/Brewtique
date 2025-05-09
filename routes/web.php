<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/', function () {
    return view('pages/home');
});

Route::get('/Home', [PageController::class, 'welcome']);
Route::get('/SignIn', [PageController::class, 'signin']);
Route::get('/Login', [PageController::class, 'login']);
Route::get('/Promo', function () {
    return view('pages.promo');
})->name('Promo');