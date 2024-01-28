<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;

class SocialiteController extends Controller
{
    /**
     * Redirect the user to the specified social provider.
     *
     * @param  string  $provider
     * @return \Illuminate\Http\Response
     */
    public function redirectToProvider($provider)
    {
        return Socialite::driver($provider)->redirect();
    }

    /**
     * Obtain the user information from the social provider.
     *
     * @param  string  $provider
     * @return \Illuminate\Http\Response
     */
    public function handleProviderCallback($provider)
    {
        try {
            $user = Socialite::driver($provider)->user();
            dd($user);
        } catch (\Exception $e) {
            // Handle exception if user cancels the authorization or an error occurs
            return redirect('/login')->with('error', 'Unable to fetch user details from ' . ucfirst($provider) . '.');
        }

        // You can now use $user to get user details and log in the user or register them.
        // For example, you might want to check if the user with this email already exists in your database.

        // Auth::login($user); // Log in the user (optional)

        return redirect('/home'); // Redirect to the desired page after successful login
    }
}
