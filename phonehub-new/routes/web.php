<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PhoneController;

Route::get('/', [PhoneController::class, 'index']);
Route::get('/phone/{id}', [PhoneController::class, 'show']);

Route::get('/about', function () {
    return view('about');
});

Route::get('/login', function () {
    return view('login');
});

// Add this line so the login button stop make error
Route::post('/login-post', function () {
    return "Login button click success! We make real login system later.";
});