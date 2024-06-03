<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\LoginController;

Route::get('/', function () {
    return view('home');
});



Route::get('/reg', [RegistrationController::class, 'index']);
Route::get('/reg/view', [RegistrationController::class, 'congratulation']);
Route::post('/reg',[RegistrationController::class, 'store']);




Route::get('/login', [LoginController::class, 'index']);

Route::post('/login', [LoginController::class, 'store']);

Route::get('/logout', function () {
    session()->forget('key');
    return view('login');
});
