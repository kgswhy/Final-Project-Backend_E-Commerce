<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\SubCategoryController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified','role:user'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

route::middleware(['auth','role:admin'])->group(function(){
    Route::controller(DashboardController::class)->group(function(){
        route::get('/admin/dashboard','index')->name('admindashboard');
    });

    Route::controller(CategoryController::class)->group(function(){
        route::get('/admin/all-category','index')->name('allcategory');
        route::get('/admin/add-category','Addcategory')->name('addcategory');
        Route::post('/admin/store-category', 'StoreCategory')->name('storecategory');
        route::get('admin/edit-category/{id}','EditCategory')->name('editcategory');
        Route::post('/admin/update-category', 'UpdateCategory')->name('updatecategory');
        route::get('admin/delete-category/{id}','DeleteCategory')->name('deletecategory');
    });

    Route::controller(SubCategoryController::class)->group(function(){
        route::get('/admin/all-subcategory','index')->name('allsubcategory');
        route::get('/admin/add-subcategory','Addsubcategory')->name('addsubcategory');
        route::post('/admin/store-subcategory','StoreSubCategory')->name('storesubcategory');
        route::get('/admin/edit-subcategory/{id}','EditSubCat')->name('editsubcat');
        route::get('/admin/delete-subcategory/{id}','DeleteSubCat')->name('deletesubcat');
        route::post('/admin/update-subcate','UpdateSubCat')->name('updatesubcat');
    });

    Route::controller(ProductController::class)->group(function(){
        route::get('/admin/all-Product','index')->name('allproduct');
        route::get('/admin/add-Product','Addproduct')->name('addproduct');
    });

    Route::controller(OrderController::class)->group(function(){
        route::get('/admin/pending-order','index')->name('pendingorder');
    });
});


require __DIR__.'/auth.php';

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
