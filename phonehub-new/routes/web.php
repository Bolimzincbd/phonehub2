<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PhoneController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CompareController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\AdminController;

// Public pages
Route::get('/', [HomeController::class, 'index']);
Route::get('/phone/{id}', [PhoneController::class, 'show']);

// Compare
Route::get('/compare', [CompareController::class, 'index']);
Route::post('/compare/add/{id}', [CompareController::class, 'add']);
Route::post('/compare/remove/{id}', [CompareController::class, 'remove']);

// Blog
Route::get('/blog', [BlogController::class, 'index']);
Route::get('/blog/{id}', [BlogController::class, 'show']);

// Auth
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/register', [AuthController::class, 'showRegister']);
Route::post('/register', [AuthController::class, 'register']);
Route::post('/logout', [AuthController::class, 'logout']);

// User Profile
Route::middleware('auth')->group(function () {
    Route::get('/profile', [AuthController::class, 'profile']);
});

// Admin dashboard and CRUD
Route::middleware('auth')->prefix('admin')->group(function () {
    Route::get('/', [AdminController::class, 'dashboard']);
    
    Route::get('/phones', [AdminController::class, 'phones']);
    Route::post('/phones/add', [AdminController::class, 'addPhone']);
    Route::get('/phones/edit/{id}', [AdminController::class, 'editPhone']);
    Route::post('/phones/update/{id}', [AdminController::class, 'updatePhone']);
    Route::post('/phones/delete/{id}', [AdminController::class, 'deletePhone']);

    Route::get('/stores', [AdminController::class, 'stores']);
    Route::post('/stores/add', [AdminController::class, 'addStore']);
    Route::get('/stores/edit/{id}', [AdminController::class, 'editStore']);
    Route::post('/stores/update/{id}', [AdminController::class, 'updateStore']);
    Route::post('/stores/delete/{id}', [AdminController::class, 'deleteStore']);

    Route::get('/prices', [AdminController::class, 'prices']);
    Route::post('/prices/add', [AdminController::class, 'addPrice']);
    Route::post('/prices/delete/{id}', [AdminController::class, 'deletePrice']);

    Route::get('/blogs', [AdminController::class, 'blogs']);
    Route::post('/blogs/add', [AdminController::class, 'addBlog']);
    Route::get('/blogs/edit/{id}', [AdminController::class, 'editBlog']);
    Route::post('/blogs/update/{id}', [AdminController::class, 'updateBlog']);
    Route::post('/blogs/delete/{id}', [AdminController::class, 'deleteBlog']);
});