<?php

use App\Http\Controllers\Admin\DashboardController;

use App\Http\Controllers\PermissionController;
use App\Http\Controllers\ProfileController;

use App\Http\Controllers\RoleController;

use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Route;




// Route::get('/', function () {
//     return view('frontend.index');
// });




Route::get('/dashboard', [DashboardController::class, 'dashboard'])->middleware(['auth','verified'])->name('dashboard');

// FORNTEND ROUTES:::::::
Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::get('/faq', [HomeController::class, 'faq'])->name('faq');
Route::get('/career', [HomeController::class, 'career'])->name('career');
Route::get('/about', [HomeController::class, 'about'])->name('about');

// Routes that require authentication
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Permission Routes
    Route::get('permission/index',[PermissionController::class,'index'])->name('permission.index');
    Route::get('permission/create',[PermissionController::class,'create'])->name('permission.create');
    Route::post('permission/store',[PermissionController::class,'store'])->name('permission.store');
    Route::get('permission/edit/{permission}',[PermissionController::class,'edit'])->name('permission.edit');
    Route::post('permission/update/{permission}',[PermissionController::class,'update'])->name('permission.update');
    Route::get('permission/delete/{permission}',[PermissionController::class,'delete'])->name('permission.delete');

    // Role Routes
    Route::get('role/index',[RoleController::class,'index'])->name('role.index');
    Route::get('role/create',[RoleController::class,'create'])->name('role.create');
    Route::post('role/store',[RoleController::class,'store'])->name('role.store');
    Route::get('role/edit/{role}',[RoleController::class,'edit'])->name('role.edit');
    Route::post('role/update/{role}',[RoleController::class,'update'])->name('role.update');
    Route::get('role/delete/{role}',[RoleController::class,'delete'])->name('role.delete');

    // User Routes
    Route::get('user/index',[UserController::class,'index'])->name('user.index');
    Route::get('user/create',[UserController::class,'create'])->name('user.create');
    Route::post('user/store',[UserController::class,'store'])->name('user.store');
    Route::get('user/edit/{user}',[UserController::class,'edit'])->name('user.edit');
    Route::post('user/update/{user}',[UserController::class,'update'])->name('user.update');
    Route::get('user/delete/{user}',[UserController::class,'delete'])->name('user.delete');
    Route::get('/user/permissions/{user}', [UserController::class, 'assignPermissionForm'])->name('user.permission.form');
    Route::post('/user/permissions/{user}', [UserController::class, 'assignPermissionToUser'])->name('user.assign-permission');


    Route::controller(\App\Http\Controllers\CategoryController::class)->name('category.')->prefix('category')->group(function(){
        Route::get('/', 'index')->name('index');
        Route::get('create', 'create')->name('create');
        Route::post('store', 'store')->name('store');
        Route::get('edit/{category}', 'edit')->name('edit');
        Route::post('update/{category}', 'update')->name('update');
        Route::post('delete/{category}', 'delete')->name('delete');
    });

    Route::controller(\App\Http\Controllers\JobController::class)->name('job.')->prefix('job')->group(function(){
       Route::get('/', 'index')->name('index');
       Route::get('create', 'create')->name('create');
       Route::post('store', 'store')->name('store');
       Route::get('edit/{job}', 'edit')->name('edit');
       Route::post('update/{job}', 'update')->name('update');
       Route::post('delete/{job}', 'delete')->name('delete');
    });




});

require __DIR__.'/auth.php';
