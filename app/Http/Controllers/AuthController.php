<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function getLogin() {
        return view('web.auth.login');
    }
    public function getRegister() {
        return view('web.auth.register');
    }
    public function getForgot() {
        return view('web.auth.forgot');
    }
}
