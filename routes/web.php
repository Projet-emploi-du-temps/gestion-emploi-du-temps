<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\FormateurController;

Route::get('/login', [AuthController::class,'showLogin'])->name('login');
Route::post('/login', [AuthController::class,'login'])->name('login.post');


Route::get('/register', [AuthController::class, 'showRegister'])->name('register');

Route::post('/register', [AuthController::class, 'register']);


Route::post('/logout',[AuthController::class,'logout'])->middleware('auth');


Route::get('/admin/dashboard',[AdminController::class,'showDashboard']);


Route::get('/formateur/dashboard',[FormateurController::class,'dashboard']);

Route::get('/', function () {
    return view('welcome');
});

