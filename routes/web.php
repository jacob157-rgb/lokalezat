<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\SocialiteController;
use Laravel\Fortify\Http\Controllers\EmailVerificationNotificationController;
use Laravel\Fortify\Http\Controllers\PasswordResetLinkController;

Route::get('auth/{provider}', [SocialiteController::class, 'redirectToProvider'])->name('socialite.redirect');   
Route::get('auth/{provider}/callback', [SocialiteController::class, 'handleProviderCallback']);

$fplimiter = config('fortify.limiters.forgot-password');
$limiter = config('fortify.limiters.verification');

Route::post(config('fortify.prefix', 'fortify') . '/forgot-password', [PasswordResetLinkController::class, 'store'])
    ->middleware(['guest', 'throttle:' . $fplimiter])
    ->name('password.email');
Route::post(config('fortify.prefix', 'fortify') . 'email/verification-notification', [EmailVerificationNotificationController::class, 'store'])
    ->middleware(['guest', 'throttle:' . $limiter])
    ->name('verification.send');


Route::view('/', 'home')->middleware(['auth', 'verified']);
Route::get('/home', function() {
    return view('web.frontend.layouts.landing');
});
