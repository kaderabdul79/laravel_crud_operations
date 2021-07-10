<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\signupController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\homeController;
use App\Http\Controllers\logoutController;


Route::get('/',[signupController::class, 'signup']);
Route::post('/',[signupController::class, 'signupValidate']);
Route::get('/login',[loginController::class, 'Login'])->name('login.Login');
Route::post('/login',[loginController::class, 'LoginVerify'])->name('login.LoginVerify');
Route::get('/home',[homeController::class, 'goHome'])->name('home.goHome');
Route::get('/create/user',[homeController::class, 'createUser'])->name('home.createUser');
Route::post('/create/user',[homeController::class, 'newUserVerify'])->name('home.newUserVerify');
Route::get('/users/list',[homeController::class, 'allUsersList'])->name('home.allUsersList');
Route::get('/logout',[logoutController::class, 'Logout'])->name('louout.Logout');
Route::post('/logout',[loginController::class, 'LoginVerify'])->name('login.LoginVerify');

Route::get('/myprofile',[homeController::class, 'myProfile'])->name('home.myProfile');