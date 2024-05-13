<?php

use App\Http\Controllers\backend\FaqController;
use App\Http\Controllers\backend\LinkController;
use App\Http\Controllers\backend\SettingController;
use App\Http\Controllers\frontend\UserProfileController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\backend\ColorController;
use App\Http\Controllers\backend\ProductController;
use App\Http\Controllers\backend\SizeController;
use App\Http\Controllers\backend\SubscriberContrller;
use App\Http\Controllers\frontend\AllProductController;
use App\Http\Controllers\frontend\ProductDetailController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\SuperAdminController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\SubCategoryController;
use App\Http\Controllers\Backend\BrandController;
use App\Http\Controllers\Backend\UnitController;


//============== profile route ==============//
Route::middleware('auth')->group(function () {
    Route::get('/profile', [UserProfileController::class, 'index'])->name('profile');
    Route::get('/update-password', [UserProfileController::class, 'updatePass'])->name('update.password');
    Route::get('/profile-edit', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


//============== frontend route ==============//
Route::get('/',[HomeController::class,'index']);

Route::get('/all-product',[AllProductController::class, 'index'])->name('all.product');

Route::get('/product-modal/{id}',[ProductDetailController::class,'modalProductShow'])->name('product.modal');

Route::middleware('auth')->group(function () {
Route::get('/product-detail/{id}',[ProductDetailController::class,'productDetail'])->name('product.detail');
Route::get('/product_by_category/{id}',[ProductDetailController::class,'productByCat'])->name('product.by.category');
});

Route::get('/about',[HomeController::class, 'about'])->name('about');

Route::get('/contact',[HomeController::class, 'contact'])->name('contact');

Route::get('/faq',[HomeController::class, 'faq'])->name('faq');



//============== admin route ==============//
Route::get('/admin-login', [AdminController::class, 'index']);
Route::post('/admin-dashboard',[AdminController::class,'showDashboard']);

Route::get('/admin',[AdminController::class,'dashboard']);
Route::get('/admin-logout',[AdminController::class,'adminLogout']);



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

//subscriber routes
Route::get('/subscribers',[SubscriberContrller::class, 'index'])->name('subscribers');
Route::post('/subscribe',[SubscriberContrller::class, 'store'])->name('subscribe');

//faq routes
Route::resource('faqs', FaqController::class);
Route::get('/faq-status/{faq}', [FaqController::class, 'changeStatus'])->name('change-status');

//setting routes
Route::get('/setting', [SettingController::class, 'index'])->name('setting');
Route::post('/setting-update', [SettingController::class, 'update'])->name('setting-update');
Route::get('application-cache-clear', [SettingController::class, 'cachClear'])->name('application.cache.clear');

//links routes
Route::get('/about-us', [LinkController::class, 'aboutUs'])->name('about.us');
Route::get('/edit-about-us/{about}', [LinkController::class, 'editAboutUs'])->name('edit.about.us');
Route::post('/update-about-us/{about}', [LinkController::class, 'updateAboutUs'])->name('update.about.us');
Route::get('/contact-us', [LinkController::class, 'contactUs'])->name('contact.us');
Route::post('/contact-us',[LinkController::class, 'storeContact'])->name('store.contact');


require __DIR__.'/auth.php';
