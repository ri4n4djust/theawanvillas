<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [App\Http\Controllers\villaController::class , 'home']);
Route::get('/villas', [App\Http\Controllers\villaController::class , 'villas']);
Route::get('/gallery', [App\Http\Controllers\villaController::class , 'gallery']);
