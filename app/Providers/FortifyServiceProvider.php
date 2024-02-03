<?php

namespace App\Providers;

use App\Actions\Fortify\CreateNewUser;
use App\Actions\Fortify\ResetUserPassword;
use App\Actions\Fortify\UpdateUserPassword;
use App\Actions\Fortify\UpdateUserProfileInformation;
use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Str;
use Laravel\Fortify\Fortify;
use Laravel\Fortify\Contracts\LoginResponse;
use Auth;

class FortifyServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->instance(
            LoginResponse::class,
            new class implements LoginResponse
            {
                public function toResponse($request)
                {
                    dd(Auth::user()->getRoleNames(), Auth::user()->getAllPermissions());
                    if (Auth::user()->hasRole('admin')) {
                        return $request->wantsJson()
                            ? response()->json(['two_factor' => false])
                            : redirect()->intended(config('fortify.home-admin'));
                    }
        
                    if (Auth::user()->hasRole('seller')) {
                        return $request->wantsJson()
                            ? response()->json(['two_factor' => false])
                            : redirect()->intended(config('fortify.home-seller'));
                    }
        
                    // Assuming 'user' is the default role
                    return $request->wantsJson()
                        ? response()->json(['two_factor' => false])
                        : redirect()->intended(config('fortify.home'));
                }
            }
        );
        
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        
        // $this->app->singleton(
        //     \Laravel\Fortify\Contracts\LoginResponse::class,
        //     \App\Http\Responses\LoginResponse::class
        // );

        Fortify::createUsersUsing(CreateNewUser::class);
        Fortify::updateUserProfileInformationUsing(UpdateUserProfileInformation::class);
        Fortify::updateUserPasswordsUsing(UpdateUserPassword::class);
        Fortify::resetUserPasswordsUsing(ResetUserPassword::class);

        // Register
        Fortify::registerView(function () {
            return view('web.auth.register');
        });
        // End Register

        // Verify Email
        Fortify::verifyEmailView(function () {
            return view('web.auth.verify');
        });
        // End Verify Email

        // Password Reset
        Fortify::requestPasswordResetLinkView(function () {
            return view('web.auth.forgot');
        });
        // End Password Reset

        // Password Reset View
        Fortify::resetPasswordView(function ($request) {
            return view('web.auth.reset', ['request' => $request]);
        });
        // End Password Reset View

        // Login
        Fortify::loginView(function () {
            return view('web.auth.login');
        });
        // End Login


        RateLimiter::for('login', function (Request $request) {
            $throttleKey = Str::transliterate(Str::lower($request->input(Fortify::username())).'|'.$request->ip());
            return Limit::perMinute(5)->by($throttleKey);
        });

        RateLimiter::for('forgot-password', function (Request $request) {
            return Limit::perMinute(5)->by($request->ip());
        });

        RateLimiter::for('verification', function (Request $request) {
            return Limit::perMinute(3)->by($request->ip());
        });
    }
}
