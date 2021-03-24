<?php

use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\CarpetaController;
use App\Http\Controllers\ClientDashboardController;
use App\Http\Controllers\PricinController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;



Auth::routes();
Route::resource('usuario', UserController::class);
Route::resource('admin', AdminDashboardController::class);
Route::resource('pricing', PricinController::class);
Route::resource('panel', ClientDashboardController::class); 
Route::resource('carpetas', CarpetaController::class);  
Route::get('carpetas/actualizacion-tributaria/{id}', [CarpetaController::class,'showAt'])->name('carpetas.at'); 
Route::get('carpetas/estado-financiero/{id}', [CarpetaController::class,'showEf'])->name('carpetas.ef'); 

Route::get('/', [HomeController::class, 'index'])->name('home');


