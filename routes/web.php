<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('web.frontend.layouts.landing');
});

Route::get('/login', [AuthController::class, 'getLogin'])->name('login');
Route::get('/register', [AuthController::class, 'getRegister'])->name('register');