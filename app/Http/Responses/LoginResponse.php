<?php

namespace App\Http\Responses;

use Illuminate\Support\Facades\Auth;
use Laravel\Fortify\Contracts\LoginResponse as LoginResponseContract;

class LoginResponse implements LoginResponseContract
{

    public function toResponse($request)
    {
        $home = '/'; // Default

        if ($request->user()) {
            $roles = $request->user()->getRoleNames()->toArray();
            if (in_array('admin', $roles)) {
                $home = '/admin';
            } elseif (in_array('seller', $roles)) {
                $home = '/seller';
            }
        }
        // dd($home);

        return $request->wantsJson()
            ? response()->json(['two_factor' => false])
            : redirect()->intended($home);

    }

}