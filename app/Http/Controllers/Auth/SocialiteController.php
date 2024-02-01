<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Facades\Socialite;

use function PHPUnit\Framework\returnSelf;

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
            $providerUser = Socialite::driver($provider)->user();
            $userExist = User::where('provider_id', $providerUser->getId())->first();

            if ($userExist) {
                return redirect('/');
            } elseif ($providerUser->user['email_verified'] === true) {
                $newUser = User::updateOrCreate(
                    ['provider_id' => $providerUser->getId()],
                    [
                        'name' => $providerUser->getName(),
                        'email' => $providerUser->getEmail(),
                        'password' => bcrypt(Hash::make($providerUser->getId())),
                        'avatar' => $providerUser->getAvatar(),
                    ]
                );
                $newUser->markEmailAsVerified();
                $newUser->syncRoles('user');
                Auth::login($newUser);
                session()->regenerate();
                return redirect('/');
            } else {
                $newUser = User::updateOrCreate(
                    ['provider_id' => $providerUser->getId()],
                    [
                        'name' => $providerUser->getName(),
                        'email' => $providerUser->getEmail(),
                        'password' => bcrypt(Hash::make($providerUser->getId())),
                        'avatar' => $providerUser->getAvatar(),
                    ]
                );
                $newUser->syncRoles('user');
                Auth::login($newUser);
                session()->regenerate();
                return redirect('/');
            }

            return redirect('/'); // Redirect to the root after creating/updating the user
        } catch (\Throwable $th) {
            dd($th);
            return redirect('/login')->with('error', 'Authentication failed.'); // Redirect to login with an error message
        }
    }
}