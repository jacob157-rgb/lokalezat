<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use function PHPUnit\Framework\returnSelf;

class AuthController extends Controller
{
    public function getLogin() {
        return view('web.auth.login');
    }
    
    public function prosesLogin(Request $request) {
        dd('login');
        request()->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $credential = $request->only('email', 'password');

        if (Auth::attempt($credential)) {
            $user = Auth::user();
            switch ($user->roles) {
                case 1:
                    return redirect()->intended('superadmin');
                break;

                case 2:
                    return redirect()->intended('admin');
                break;

                default:
                    return redirect()->intended('user');
                break;
            }
        }
        return redirect('login')->withInput()->withErrors(['Login_failed' => "These Credentials doesn't match our records."]);
    }
    public function Logout(Request $request) {
        $request->session()->flush();
        Auth::logout();
        return redirect('login');
    }
    public function getRegister() {
        return view('web.auth.register');
    }
    public function getForgot() {
        return view('web.auth.forgot');
    }
}
