<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/',[UserController::class,'index'])->name('user.index');
Route::get('/login',[UserController::class,'login'])->name('login');
Route::get('/register',[UserController::class,'register'])->name('user.register');

Route::post('/store',[UserController::class, 'store'])->name('user.store');
Route::get('/user',[UserController::class, 'alluser'])->middleware('auth')->name('user');
Route::get('user/userlist',[UserController::class, 'view'])->name('userlist');
Route::get ('user/{id}/delete',[UserController::class ,'delete'])->name('userdel');
