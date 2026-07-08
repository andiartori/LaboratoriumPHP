<?php

use App\Http\Controllers\ChirperController;
use Illuminate\Support\Facades\Route;

Route::get( '/' , [ChirperController::class, 'index'] );

Route::get('/' , [ChirperController::class, 'store'] );

Route::get('/chirp/{chirp}/edit', [ChirperController::class, 'edit']);
Route::put('/chirp/{chirp}', [ChirperController::class, 'update']);

Route::delete('/chirp/{chirp}', [ChirperController::class, 'destroy']);

