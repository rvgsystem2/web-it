<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\blogController;
use App\Http\Controllers\ChooseController;
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
Route::get('/faqs', [HomeController::class, 'faq'])->name('faq');
Route::get('/career', [HomeController::class, 'career'])->name('career');
Route::get('/careerByCategory/{category}', [HomeController::class, 'careerByCategory'])->name('careerByCategory');
Route::get('/abouts', [HomeController::class, 'about'])->name('about');
Route::get('/jobs', [HomeController::class, 'jobs'])->name('jobs');
Route::get('/employee', [HomeController::class, 'employee'])->name('employee');
Route::get('/services', [HomeController::class, 'service'])->name('service');
Route::get('/appdevelopment', [HomeController::class, 'appdevelopment'])->name('appdevelopment');
Route::get('/bussiness_process', [HomeController::class, 'bussiness_process'])->name('bussiness_process');
Route::get('/bussiness_solution', [HomeController::class, 'bussiness_solution'])->name('bussiness_solutiom');
Route::get('/cyber_security', [HomeController::class, 'cyber_security'])->name('cyber_security');
Route::get('/web_development', [HomeController::class, 'web_development'])->name('web_development');
Route::get('/iande_design', [HomeController::class, 'iande_design'])->name('iande_design');
Route::get('/blogs', [HomeController::class, 'blog'])->name('blog');
Route::get('/blog-details/{blog}', [HomeController::class, 'blogDetails'])->name('blog.details');
Route::get('/teams', [HomeController::class, 'team'])->name('team');
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


        // about
        Route::controller(AboutController::class)->name('about.')->prefix('about')->group(function(){
            Route::get('/', 'index')->name('index');
            Route::get('create', 'create')->name('create');
            Route::post('store', 'store')->name('store');
            Route::get('edit/{about}', 'edit')->name('edit');
            Route::post('update/{about}', 'update')->name('update');
            Route::get('delete/{about}', 'delete')->name('delete');
        });

        // Choose
        Route::controller(ChooseController::class)->name('chooses.')->prefix('choose')->group(function(){
            Route::get('/', 'index')->name('index');
            Route::get('create', 'create')->name('create');
            Route::post('store', 'store')->name('store');
            Route::get('edit/{choose}', 'edit')->name('edit');
            Route::post('update/{choose}', 'update')->name('update');
            Route::get('delete/{choose}', 'delete')->name('delete');
        });

        // Choose Feature
        Route::controller(\App\Http\Controllers\ChooseFetureController::class)->name('choose-features.')->prefix('choose-feature')->group(function(){
            Route::get('/', 'index')->name('index');
            Route::get('create', 'create')->name('create');
            Route::post('store', 'store')->name('store');
            Route::get('edit/{feature}', 'edit')->name('edit');
            Route::post('update/{feature}', 'update')->name('update');
            Route::get('delete/{feature}', 'delete')->name('delete');
        });

        // Service
        Route::controller(\App\Http\Controllers\ServiceController::class)->name('services.')->prefix('service')->group(function(){
            Route::get('/', 'index')->name('index');
            Route::get('create', 'create')->name('create');
            Route::post('store', 'store')->name('store');
            Route::get('edit/{service}', 'edit')->name('edit');
            Route::post('update/{service}', 'update')->name('update');
            Route::get('delete/{service}', 'delete')->name('delete');
        });

        // Service Feature
        Route::controller(\App\Http\Controllers\ServiceFeatureController::class)->name('service-features.')->prefix('service-feature')->group(function(){
            Route::get('/', 'index')->name('index');        
            Route::get('create', 'create')->name('create');
            Route::post('store', 'store')->name('store');   
            Route::get('edit/{feature}', 'edit')->name('edit');
            Route::post('update/{feature}', 'update')->name('update');
            Route::get('delete/{feature}', 'delete')->name('delete');
        });


        // Testimonial  

        Route::controller(\App\Http\Controllers\TestimonialController::class)->name('testimonials.')->prefix('testimonial')->group(function(){
            Route::get('/', 'index')->name('index');
            Route::get('create', 'create')->name('create');
            Route::post('store', 'store')->name('store');
            Route::get('edit/{testimonial}', 'edit')->name('edit');
            Route::post('update/{testimonial}', 'update')->name('update');
            Route::get('delete/{testimonial}', 'delete')->name('delete');
        });

        // Logo
        Route::controller(\App\Http\Controllers\LogoController::class)->name('logos.')->prefix('logo')->group(function(){
            Route::get('/', 'index')->name('index');
            Route::get('create', 'create')->name('create'); 
            Route::post('store', 'store')->name('store');
            Route::get('edit/{logo}', 'edit')->name('edit');
            Route::post('update/{logo}', 'update')->name('update');
            Route::get('delete/{logo}', 'delete')->name('delete');
        });


        // Team
        Route::controller(\App\Http\Controllers\TeamController::class)->name('teams.')->prefix('team')->group(function(){
            Route::get('/', 'index')->name('index');
            Route::get('create', 'create')->name('create');
            Route::post('store', 'store')->name('store');
            Route::get('edit/{team}', 'edit')->name('edit');
            Route::post('update/{team}', 'update')->name('update');
            Route::get('delete/{team}', 'delete')->name('delete');
        });

        // faq
        Route::controller(\App\Http\Controllers\FaqController::class)->name('faqs.')->prefix('faq')->group(function(){
            Route::get('/', 'index')->name('index');
            Route::get('create', 'create')->name('create');
            Route::post('store', 'store')->name('store');
            Route::get('edit/{faq}', 'edit')->name('edit');
            Route::post('update/{faq}', 'update')->name('update');
            Route::get('delete/{faq}', 'delete')->name('delete');
        });

        // Blog

        Route::controller(blogController::class)->name('blogs.')->prefix('blog')->group(function(){
            Route::get('/', 'index')->name('index');
            Route::get('create', 'create')->name('create');
            Route::post('store', 'store')->name('store');
            Route::get('edit/{blog}', 'edit')->name('edit');
            Route::post('update/{blog}', 'update')->name('update');
            Route::get('delete/{blog}', 'delete')->name('delete');
        });

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
           Route::get('delete', 'delete')->name('delete');
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
