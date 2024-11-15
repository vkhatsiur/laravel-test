<?php

use App\Http\Controllers\SessionController;
use App\Http\Controllers\SignUpController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::middleware('guest')->group(function () {
    Route::get('/sign-in', [SessionController::class, 'create'])->name('create-sign-in');
    Route::post('/sign-in', [SessionController::class, 'store'])->name('store-sign-in');

    Route::get('/sign-up', [SignUpController::class, 'create'])->name('create-sign-up');
    Route::post('/sign-up', [SignUpController::class, 'store'])->name('store-sign-up');
});

Route::middleware('auth')->group(function () {
    Route::get('/sign-out', [SessionController::class, 'destroy'])->name('sign-out');
});
