<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [App\Http\Controllers\villaController::class , 'home']);

Route::get('/one-bedroom', [App\Http\Controllers\villaController::class , 'oneBedroom']);
Route::get('/two-bedroom', [App\Http\Controllers\villaController::class , 'twoBedroom']);

Route::get('/dining', [App\Http\Controllers\villaController::class , 'dining']);
Route::get('/gallery', [App\Http\Controllers\villaController::class , 'gallery']);

Route::get('/last-minute', [App\Http\Controllers\villaController::class , 'lastMinute']);
Route::get('/hot-deals', [App\Http\Controllers\villaController::class , 'hotDeals']);
Route::get('/early-bird', [App\Http\Controllers\villaController::class , 'earlyBird']);
Route::get('/two-night-honeymoon', [App\Http\Controllers\villaController::class , 'twoNightHoneymoon']);
Route::get('/three-night-honeymoon', [App\Http\Controllers\villaController::class , 'threeNightHoneymoon']);
Route::get('/family-package', [App\Http\Controllers\villaController::class , 'familyPackage']);

