<?php

use App\Http\Controllers\Auth\Login;
use App\Http\Controllers\Auth\Logout;
use App\Http\Controllers\Auth\Register;
use App\Http\Controllers\ChirperController;
use Illuminate\Support\Facades\Route;

Route::middleware('auth')->group(function () {
    Route::get('/', [ChirperController::class, 'index']);

    Route::post('/chirps', [ChirperController::class, 'store']);

    Route::get('/chirps/{chirp}/edit', [ChirperController::class, 'edit']);
    Route::put('/chirps/{chirp}', [ChirperController::class, 'update']);

    Route::delete('/chirps/{chirp}', [ChirperController::class, 'destroy']);

});

// Auth Necessary things
Route::view('/register', 'auth.register')->middleware('guest')->name('register');
Route::post('/register', Register::class)->middleware('guest');

// Auth Neccessary things Login
Route::view('/login', 'auth.login')->middleware('guest')->name('login');
Route::post('/login', Login::class)->middleware('guest');

// Auth Neccessary things Logout
Route::post('/logout', Logout::class)->middleware('auth')->name('logout');
