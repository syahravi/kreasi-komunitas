<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/masuk', function(){
    return view('auth.sign-in');
})->name('sign-in');

Route::get('/mendaftar', function(){
    return view('auth.sign-up');
})->name('sign-up');

Route::get('/lupa-password', function(){
    return view('auth.reset-password');
})->name('reset-password');

Route::get('/username', function () {
    return view('profiles.show');
})->name('profiles');