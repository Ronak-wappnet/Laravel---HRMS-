<?php

use App\Http\Controllers\EmployeeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\AuthController;



Route::get('dashboard', [AuthController::class, 'dashboard']); 
Route::get('login', [AuthController::class, 'index'])->name('login');
Route::post('user-login', [AuthController::class, 'customLogin'])->name('userLogin'); 
Route::get('register', [AuthController::class, 'registration'])->name('register');
Route::post('user-registration', [AuthController::class, 'customRegistration'])->name('userRegister'); 
Route::get('signout', [AuthController::class, 'signOut'])->name('signout');

Route::view('index','index');
Route::view('index2','index2');
Route::view('index3','index3');
Route::view('index4','index4');


// Route::post('register/emp',[AuthenticationController::class,'empRegistration'])->name('empRegister');
// Route::post('login/emp',[AuthenticationController::class,'empLogin'])->name('empLogin');
// Route::view('login','login')->name('login');
// Route::view('register','register')->name('register');
// Route::view('/','welcome')->name('homepage');






