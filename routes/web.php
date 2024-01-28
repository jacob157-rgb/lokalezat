<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\SocialiteController;

Route::get('auth/{provider}', [SocialiteController::class, 'redirectToProvider'])->name('socialite.redirect');   
Route::get('auth/{provider}/callback', [SocialiteController::class, 'handleProviderCallback']);


Route::view('/', 'home')->middleware(['auth', 'verified']);
Route::get('/home', function() {
    return view('web.frontend.layouts.landing');
});
