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





// FORNTEND ROUTES:::::::
Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::post('/contact/store', [\App\Http\Controllers\ContactController::class, 'store'])->name('contact.store');
Route::get('/faq', [HomeController::class, 'faq'])->name('faq');
Route::get('/career', [HomeController::class, 'career'])->name('career');
Route::get('/careerByCategory/{category}', [HomeController::class, 'careerByCategory'])->name('careerByCategory');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/jobs', [HomeController::class, 'jobs'])->name('jobs');
Route::get('/employee', [HomeController::class, 'employee'])->name('employee');
Route::get('/service', [HomeController::class, 'service'])->name('service');
Route::get('/appdevelopment', [HomeController::class, 'appdevelopment'])->name('appdevelopment');
Route::get('/bussiness_process', [HomeController::class, 'bussiness_process'])->name('bussiness_process');
Route::get('/bussiness_solution', [HomeController::class, 'bussiness_solution'])->name('bussiness_solutiom');
Route::get('/cyber_security', [HomeController::class, 'cyber_security'])->name('cyber_security');
Route::get('/web_development', [HomeController::class, 'web_development'])->name('web_development');
Route::get('/iande_design', [HomeController::class, 'iande_design'])->name('iande_design');
Route::get('/blog', [HomeController::class, 'blog'])->name('blog');
Route::get('/team', [HomeController::class, 'team'])->name('team');
Route::get('/privacy_policy', [HomeController::class, 'privacy_policy'])->name('privacy_policy');
Route::get('/terms_condition', [HomeController::class, 'terms_condition'])->name('terms_condition');



// Routes that require authentication
Route::middleware('auth')->group(function () {
    Route::get('/applyForJob/{job}', [HomeController::class, 'applyForJob'])->name('applyForJob');
    Route::get('/userProfile', [HomeController::class, 'profile'])->name('userProfile');
    Route::post('/userProfile/update/{id}', [HomeController::class, 'profileUpdate'])->name('userProfile.update');
    Route::post('application/store/{id}', [\App\Http\Controllers\JobApplicationController::class, 'store'])->name('application.store');

    Route::middleware(\App\Http\Middleware\RoleMiddleware::class)->group(function(){
        Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');

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

        Route::controller(\App\Http\Controllers\JobApplicationController::class)->name('application.')->prefix('application')->group(function(){
            Route::get('/', 'index')->name('index');
            Route::get('create', 'create')->name('create');
            Route::get('edit/{application}', 'edit')->name('edit');
            Route::post('update/{application}', 'update')->name('update');
            Route::post('delete/{application}', 'delete')->name('delete');
            Route::get('show/{application}', 'show')->name('show');
            Route::post('status/{application}', 'status')->name('status');
        });
        Route::controller(\App\Http\Controllers\ContactController::class)->name('contact.')->prefix('contact')->group(function(){
           Route::get('index', 'index')->name('index');
           Route::get('show/{contact}', 'show')->name('show');
           Route::post('delete', 'delete')->name('delete');
        });

        Route::controller(\App\Http\Controllers\BannerController::class)->name('banner.')->prefix('banner')->group(function(){
            Route::get('/', 'index')->name('index');
            Route::get('create', 'create')->name('create');
            Route::post('store', 'store')->name('store');
            Route::get('edit/{banner}', 'edit')->name('edit');
            Route::post('update/{banner}', 'update')->name('update');
            Route::post('delete/{banner}', 'delete')->name('delete');
            Route::post('status/{banner}', 'status')->name('status');
        });
    });
});

require __DIR__.'/auth.php';
