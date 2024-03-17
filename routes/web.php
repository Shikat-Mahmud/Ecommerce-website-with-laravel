<?php

use App\Http\Controllers\backend\ColorController;
use App\Http\Controllers\backend\ProductController;
use App\Http\Controllers\backend\SizeController;
use App\Http\Controllers\frontend\ProductDetailController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\SuperAdminController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\SubCategoryController;
use App\Http\Controllers\Backend\BrandController;
use App\Http\Controllers\Backend\UnitController;



//============== admin route ==============//
Route::get('/admin', [AdminController::class, 'index']);
Route::post('/admin-dashboard',[AdminController::class,'showDashboard']);

Route::get('/dashboard',[SuperAdminController::class,'dashboard']);
Route::get('/logout',[SuperAdminController::class,'logout']);



//============== backend route ==============//

//category routes
Route::resource('categories', CategoryController::class);
Route::get('/cat-status/{category}', [CategoryController::class, 'changeStatus'])->name('change-status');

//sub category routes
Route::resource('sub-categories', SubCategoryController::class);
Route::get('/subcat-status/{subcategory}', [SubCategoryController::class, 'changeStatus'])->name('change-status');

//brand routes
Route::resource('brands', BrandController::class);
Route::get('/brand-status/{brand}', [BrandController::class, 'changeStatus'])->name('change-status');

//unit routes
Route::resource('units', UnitController::class);
Route::get('/unit-status/{unit}', [UnitController::class, 'changeStatus'])->name('change-status');

//size routes
Route::resource('sizes', SizeController::class);
Route::get('/size-status/{size}', [SizeController::class, 'changeStatus'])->name('change-status');

//color routes
Route::resource('colors', ColorController::class);
Route::get('/color-status/{color}', [ColorController::class, 'changeStatus'])->name('change-status');

//product routes
Route::resource('products', ProductController::class);
Route::get('/product-status/{product}', [ProductController::class, 'changeStatus'])->name('change-status');
Route::get('/fetch-subcategories', [ProductController::class, 'fetchSubcategories'])->name('fetch.subcategories');





//============== fronten route ==============//
Route::get('/',[HomeController::class,'index']);

Route::get('/product-detail/{id}',[ProductDetailController::class,'productDetail'])->name('product.detail');

