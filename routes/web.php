<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\SuperAdminController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\SubCategoryController;

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


//============== admin route ==============//
Route::get('/admin', [AdminController::class, 'index']);
Route::post('/admin-dashboard',[AdminController::class,'showDashboard']);

Route::get('/dashboard',[SuperAdminController::class,'dashboard']);
Route::get('/logout',[SuperAdminController::class,'logout']);



//============== fronten route ==============//
Route::get('/',[HomeController::class,'index']);



//============== backend route ==============//

//category routes
Route::resource('categories', CategoryController::class);
Route::get('/cat-status/{category}', [CategoryController::class, 'changeStatus'])->name('change-status');


//sub category routes
Route::resource('sub-categories', SubCategoryController::class);
Route::get('/subcat-status/{subcategory}', [SubCategoryController::class, 'changeStatus'])->name('change-status');

