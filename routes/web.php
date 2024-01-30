<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\SocialiteController;
use Laravel\Fortify\Http\Controllers\EmailVerificationNotificationController;
use Laravel\Fortify\Http\Controllers\PasswordResetLinkController;

// Socialite routes
Route::get('auth/{provider}', [SocialiteController::class, 'redirectToProvider'])
    ->name('socialite.redirect');   
Route::get('auth/{provider}/callback', [SocialiteController::class, 'handleProviderCallback']);

// Fortify routes
$fortifyPrefix = config('fortify.prefix', 'fortify');
$limiters = [
    'forgotPassword' => config('fortify.limiters.forgot-password'),
    'verification' => config('fortify.limiters.verification'),
];

Route::middleware(['guest', 'throttle:' . $limiters['forgotPassword']])->group(function () use ($fortifyPrefix) {
    // Forgot Password
    Route::post("$fortifyPrefix/forgot-password", [PasswordResetLinkController::class, 'store'])
        ->name('password.email');

    // Email Verification
    Route::post("$fortifyPrefix/email/verification-notification", [EmailVerificationNotificationController::class, 'store'])
        ->name('verification.send');
});

// Authenticated and verified user routes
Route::middleware(['auth', 'verified'])->group(function () {
    Route::view('/', 'home');
    Route::get('home', function () {
        return view('web.frontend.layouts.landing');
    });
});

