<?php

use App\Http\Controllers\SessionController;
use App\Http\Controllers\SignUpController;
use App\Models\TvShow;
use App\RouteNames;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $tvShows = TvShow::latest()->get();
    return view('index', [
        'trendingTvShows' => $tvShows,
        'premierTvShows' => $tvShows->sortByDesc('vote_average')
    ]);
})->name(RouteNames::HOME);

Route::middleware('guest')->group(function () {
    Route::get('/sign-in', [SessionController::class, 'create'])->name(RouteNames::CREATE_SIGN_IN);
    Route::post('/sign-in', [SessionController::class, 'store'])->name(RouteNames::STORE_SIGN_IN);

    Route::get('/sign-up', [SignUpController::class, 'create'])->name(RouteNames::CREATE_SIGN_UP);
    Route::post('/sign-up', [SignUpController::class, 'store'])->name(RouteNames::STORE_SIGN_UP);
});

Route::middleware('auth')->group(function () {
    Route::delete('/sign-out', [SessionController::class, 'destroy'])->name(RouteNames::SIGN_OUT);
});

Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();
    return redirect(route(RouteNames::HOME));
})->middleware(['auth', 'signed'])->name('verification.verify');
