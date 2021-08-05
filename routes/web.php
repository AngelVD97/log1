<?php

use Illuminate\Validation\ValidationException;
use App\Http\Controllers\LoginController;
Use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});
Route::view('/', 'wellcome');
Route::view('login', 'login')->name('login')->middleware('guest');
Route::view('dashboard', 'dashboard')->middleware('auth');

Route::POST('login', [LoginController::class, 'Login'] );