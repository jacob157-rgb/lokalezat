<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function index() {
        $user = Auth::user();

        if($user) {
            if($user->roles == '1') {
                return redirect()->intended('web.backend.layouts.tokokuliner');
            }
            elseif ($user->roles == "2") {
                return redirect()->intended('web.backend.layouts.tokokuliner');
            }
            elseif ($user->roles == "3") {
                return redirect()->intended('web.frontend.layouts.landing');
            }
        }
        return view('web.login');
    }
    
    public function proses_login(Request $request) {
        $request->validate([
            'email'=>'required',
            'password'=>'required',
        ]);

        $credential = $request->only('email', 'password');

        if (Auth::attempt($credential)) {
            $user = Auth::user();

            if($user->roles == '1') {
                return redirect()->intended('web.backend.layouts.tokokuliner');
            }
            elseif ($user->roles == "2") {
                return redirect()->intended('web.backend.layouts.tokokuliner');
            }
            elseif ($user->roles == "3") {
                return redirect()->intended('web.frontend.layouts.landing');
            }
            return redirect('/');
        }
        return redirect('web.login')->withInput()->withErrors(['login_gagal'=>'These credentials does not match our records']);
    }

    public function register() {
        return view('web.register');
    }

    public function prosses_register(Request $request) {
        $validator = Validator::make($request->all(),[
            'nama'=>'required',
            'email'=>'required|unique:users',
            'password'=>'required'
        ]);

        if ($validator->fails()) {
            return redirect('/register')->withErrors($validator)->withInput();
        }
        $request['roles'] = 2;
        $request['password'] = bcrypt($request->password);

        User::create($request->all());

        return redirect()->route('login');
    }
    public function logout(Request $request) {
        $request->session()->flush();
        Auth::logout();
        return redirect('login');
    }
}
