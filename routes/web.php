<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\signupController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\homeController;



Route::get('/',[signupController::class, 'signup']);
Route::post('/',[signupController::class, 'signupValidate']);
Route::get('/login',[loginController::class, 'Login']);
Route::post('/login',[loginController::class, 'LoginVerify']);
Route::get('/home',[homeController::class, 'goHome']);