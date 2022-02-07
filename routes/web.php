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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/{admin?}', function () {
    return redirect()->route('admin.login');
});

Route::prefix('/admin/')->name('admin.')->group(function () {
    Route::get('login', [App\Http\Controllers\Admin\Auth\LoginController::class, 'showLoginForm'])->name('login');
    Route::post('login', [App\Http\Controllers\Admin\Auth\LoginController::class, 'attemptLogin'])->name('login.post');
    Route::post('logout', [App\Http\Controllers\Admin\Auth\LoginController::class, 'logout'])->name('logout');
    // Password Reset Routes...
    /* Route::get('password/reset', [App\Http\Controllers\Admin\Auth\ForgotPasswordController::class, 'showLinkRequestForm'])->name('password.request');
    Route::post('password/email', [App\Http\Controllers\Admin\Auth\ForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.email');
    Route::get('password/reset/{token}', [App\Http\Controllers\Admin\Auth\ResetPasswordController::class, 'showResetForm'])->name('password.reset');
    Route::post('password/reset', [App\Http\Controllers\Admin\Auth\ResetPasswordController::class, 'reset'])->name('password.update');
     */
    Route::get('dashboard', [App\Http\Controllers\AdminController::class, 'index'])->name('dashboard');

    Route::resource('category', App\Http\Controllers\Admin\CategoryController::class);

    Route::get('receiver', [App\Http\Controllers\AdminController::class, 'getReceiver'])->name('receiver');
    Route::get('provider', [App\Http\Controllers\AdminController::class, 'getProvider'])->name('provider');
});


Route::prefix('/client/')->name('client.')->group(function () {
    Route::get('login', [App\Http\Controllers\Client\Auth\LoginController::class, 'showLoginForm'])->name('login');
    Route::post('login', [App\Http\Controllers\Client\Auth\LoginController::class, 'attemptLogin'])->name('login.post');
    Route::post('logout', [App\Http\Controllers\Client\Auth\LoginController::class, 'logout'])->name('logout');

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

    Route::view('/job-board','client.jobs.job-board')->name('job-board');
    Route::view('/job-schedule','client.jobs.job-schedule')->name('job-schedule');
    Route::view('/job-applicant','client.jobs.job-applicant')->name('job-applicant');

    
     
    Route::get('dashboard', [App\Http\Controllers\ClientController::class, 'index'])->name('dashboard');
});

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
