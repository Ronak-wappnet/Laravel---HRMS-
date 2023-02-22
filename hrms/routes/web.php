<?php

use App\Http\Controllers\EmployeeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;



Route::get('dashboard', [AuthController::class, 'dashboard'])->name('dashboard'); 
Route::get('login', [AuthController::class, 'index'])->name('login');
Route::post('user-login', [AuthController::class, 'userLogin'])->name('userLogin'); 
Route::get('register', [AuthController::class, 'registration'])->name('register');
Route::post('user-registration', [AuthController::class, 'userRegistration'])->name('userRegister'); 
Route::get('signout', [AuthController::class, 'signOut'])->name('signout');
