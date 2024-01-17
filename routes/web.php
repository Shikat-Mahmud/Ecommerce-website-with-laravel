<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\SuperAdminController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


// backend route
Route::get('/admin', [AdminController::class, 'index']);
Route::post('/admin-dashboard',[AdminController::class,'showDashboard']);

Route::get('/dashboard',[SuperAdminController::class,'dashboard']);
Route::get('/logout',[SuperAdminController::class,'logout']);

// frontend route
Route::get('/',[HomeController::class,'index']);