<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

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

Route::post('/prosesLogin', [AuthController::class, 'prosesLogin']);
Route::get('/login', [AuthController::class, 'getLogin'])->name('login');
Route::get('/logout', [AuthController::class, 'Logout'])->name('logout');
Route::post('/cek', [AuthController::class, 'Logout'])->name('logout');

Route::get('/register', [AuthController::class, 'getRegister'])->name('register');
Route::get('/forgot', [AuthController::class, 'getForgot'])->name('forgot');