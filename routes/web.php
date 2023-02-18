<?php

use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome'); // page loaded from resource/views/
});

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// users
Route::get('/user', [UsersController::class, 'users'])->name('user');
