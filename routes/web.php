<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/sign-in', function () {
    return view('auth.sign-in');
});

Route::post('/sign-in', function () {
    dd(request());
});

Route::get('/sign-up', function () {
    return view('auth.sign-up');
});

Route::post('/sign-up', function () {
    dd(request());
});
