<?php

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


Route::get('/{admin?}', function () {
    return redirect()->route('admin.login');
});



Route::prefix('/admin/')->name('admin.')->group(function () {
    Route::get('login', [App\Http\Controllers\Admin\Auth\LoginController::class, 'showLoginForm'])->name('login');
    Route::post('login', [App\Http\Controllers\Admin\Auth\LoginController::class, 'attemptLogin'])->name('login.post');
    Route::get('logout', [App\Http\Controllers\Admin\Auth\LoginController::class, 'logout'])->name('logout');
    // Password Reset Routes...
    /* Route::get('password/reset', [App\Http\Controllers\Admin\Auth\ForgotPasswordController::class, 'showLinkRequestForm'])->name('password.request');
    Route::post('password/email', [App\Http\Controllers\Admin\Auth\ForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.email');
    Route::get('password/reset/{token}', [App\Http\Controllers\Admin\Auth\ResetPasswordController::class, 'showResetForm'])->name('password.reset');
    Route::post('password/reset', [App\Http\Controllers\Admin\Auth\ResetPasswordController::class, 'reset'])->name('password.update');
     */
    Route::get('dashboard', [App\Http\Controllers\Admin\AdminController::class, 'index'])->name('dashboard');

    Route::resource('category', App\Http\Controllers\Admin\CategoryController::class);

    Route::resource('responsibility', App\Http\Controllers\Admin\ResponsibilityController::class);
    Route::resource('requirement', App\Http\Controllers\Admin\RequirementController::class);
    

    Route::get('profile',[App\Http\Controllers\Admin\ProfileController::class,'profile'])->name('profile');
    Route::get('profile-edit',[App\Http\Controllers\Admin\ProfileController::class,'profileEdit'])->name('profileEdit');
    Route::post('profile-update',[App\Http\Controllers\Admin\ProfileController::class,'profileUpdate'])->name('profileUpdate');
    Route::get('password-change',[App\Http\Controllers\Admin\ProfileController::class,'passwordChange'])->name('passwordChange');
    Route::post('password-change-process',[App\Http\Controllers\Admin\ProfileController::class,'passwordChangeProcess'])->name('passwordChangeProcess');


    Route::get('receiver', [App\Http\Controllers\Admin\AdminController::class, 'getReceiver'])->name('receiver');
    Route::get('provider', [App\Http\Controllers\Admin\AdminController::class, 'getProvider'])->name('provider');
});


Route::prefix('/client/')->name('client.')->group(function () {
    Route::get('dashboard', [App\Http\Controllers\Client\ClientController::class, 'index'])->name('dashboard');
    Route::get('favourite-jobs', [App\Http\Controllers\Client\JobController::class, 'favourite'])->name('favourite');


    Route::get('login', [App\Http\Controllers\Client\Auth\LoginController::class, 'showLoginForm'])->name('login');
    Route::post('login', [App\Http\Controllers\Client\Auth\LoginController::class, 'attemptLogin'])->name('login.post');
    Route::get('logout', [App\Http\Controllers\Client\Auth\LoginController::class, 'logout'])->name('logout');

    Route::get('register', [App\Http\Controllers\Client\Auth\RegisterController::class, 'showRegistrationForm'])->name('register');
    Route::post('register', [App\Http\Controllers\Client\Auth\RegisterController::class, 'register'])->name('register.post');

    // Password Reset Routes...
    Route::get('password/reset', [App\Http\Controllers\Client\Auth\ForgotPasswordController::class, 'showLinkRequestForm'])->name('password.request');
    Route::get('password/reset/{token}', [App\Http\Controllers\Client\Auth\ResetPasswordController::class, 'showResetForm'])->name('password.reset');
    Route::get('password/reset', [App\Http\Controllers\Client\Auth\ForgotPasswordController::class, 'showLinkRequestForm'])->name('password.request');
    Route::post('password/email', [App\Http\Controllers\Client\Auth\ForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.email');
    
    Route::post('password/reset', [App\Http\Controllers\Client\Auth\ResetPasswordController::class, 'reset'])->name('password.update');

    Route::view('/verification','client.auth.verification')->name('verification');

    Route::view('/verification','client.auth.verification')->name('verification');
    Route::view('/password-reset','client.auth.password-reset')->name('password-reset');
    Route::view('/new-password','client.auth.new-password')->name('new-password');


    // Route::group(['middleware' => 'auth'], function () {
        // profile routes
        Route::get('profile',[App\Http\Controllers\ProfileController::class,'profile'])->name('profile');
        Route::get('profile/{slug}',[App\Http\Controllers\ProfileController::class,'other_profile'])->name('otherprofile');

        Route::get('profile-edit',[App\Http\Controllers\ProfileController::class,'profileEdit'])->name('profileEdit');
        Route::post('profile-update',[App\Http\Controllers\ProfileController::class,'profileUpdate'])->name('profileUpdate');
        Route::get('password-change',[App\Http\Controllers\ProfileController::class,'passwordChange'])->name('passwordChange');
        Route::post('password-change-process',[App\Http\Controllers\ProfileController::class,'passwordChangeProcess'])->name('passwordChangeProcess');

        Route::get('profile-membership',[App\Http\Controllers\ProfileController::class,'profileMembership'])->name('profileMembership');
        

        Route::get('job-type',[App\Http\Controllers\Client\jobController::class,'jobtype'])->name('jobtype');

        // client.jobs.job-board

        Route::resource('job', App\Http\Controllers\Client\jobController::class);
        
        Route::view('/job-schedule','client.jobs.job-schedule')->name('job-schedule');
        Route::view('/job-applicant','client.jobs.job-applicant')->name('job-applicant');
     
        Route::get('dashboard', [App\Http\Controllers\Client\ClientController::class, 'index'])->name('dashboard');
    // });
});

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
