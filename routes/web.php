<?php

use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\PricinController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;




Auth::routes();
Route::resource('usuario', UserController::class);
Route::resource('admin', AdminDashboardController::class);
Route::resource('pricing', PricinController::class);
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


