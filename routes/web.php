<?php

use App\Http\Controllers\PusherNotificationController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Provider\ProviderController;

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


Route::get('send', [PusherNotificationController::class, 'notification']);
Route::get('/', function () {
    return view('welcome');
});


Route::get('/{admin?}', function () {
    return redirect()->route('admin.login');
});

Route::prefix('/admin/')->name('admin.')->group(function () {
    Route::get('login', [App\Http\Controllers\Admin\Auth\LoginController::class, 'showLoginForm'])->name('login');
    Route::post('login', [App\Http\Controllers\Admin\Auth\LoginController::class, 'attemptLogin'])->name('login.post');
    Route::get('logout', [App\Http\Controllers\Admin\Auth\LoginController::class, 'logout'])->name('logout');
    Route::post('logout', [App\Http\Controllers\Admin\Auth\LoginController::class, 'logout'])->name('logout.post');
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

Route::prefix('/receiver/')->name('receiver.')->group(function () {
    Route::get('dashboard', [App\Http\Controllers\Receiver\ReceiverController::class, 'index'])->name('dashboard');
    Route::get('apply_job/{id}', [App\Http\Controllers\Receiver\JobController::class, 'apply_job'])->name('apply_job');
    Route::get('remove_apply/{id}', [App\Http\Controllers\Receiver\JobController::class, 'remove_apply'])->name('remove_apply');
    Route::get('favourite-jobs', [App\Http\Controllers\Receiver\JobController::class, 'favourite'])->name('favourite');
    Route::get('login', [App\Http\Controllers\Receiver\Auth\LoginController::class, 'showLoginForm'])->name('login');
    Route::post('login', [App\Http\Controllers\Receiver\Auth\LoginController::class, 'attemptLogin'])->name('login.post');
    Route::get('logout', [App\Http\Controllers\Receiver\Auth\LoginController::class, 'logout'])->name('logout');
    Route::post('logout', [App\Http\Controllers\Receiver\Auth\LoginController::class, 'logout'])->name('logout.post');
    Route::get('register', [App\Http\Controllers\Receiver\Auth\RegisterController::class, 'showRegistrationForm'])->name('register');
    Route::post('register', [App\Http\Controllers\Receiver\Auth\RegisterController::class, 'register'])->name('register.post');
    // Password Reset Routes...
    // Route::get('password/reset', [App\Http\Controllers\Receiver\Auth\ForgotPasswordController::class, 'showLinkRequestForm'])->name('password.request');
    Route::get('password/reset', [App\Http\Controllers\Receiver\Auth\ForgotPasswordController::class, 'showLinkRequestForm'])->name('password.request');
    Route::get('password/reset/{token}', [App\Http\Controllers\Receiver\Auth\ResetPasswordController::class, 'showResetForm'])->name('password.reset');
    Route::post('password/email', [App\Http\Controllers\Receiver\Auth\ForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.email');
    Route::post('password/reset', [App\Http\Controllers\Receiver\Auth\ResetPasswordController::class, 'reset'])->name('password.update');
    Route::view('/verification', 'receiver.auth.verification')->name('verification');
    Route::view('/verification', 'receiver.auth.verification')->name('verification');
    Route::view('/password-reset', 'receiver.auth.password-reset')->name('password-reset');
    Route::view('/new-password', 'receiver.auth.new-password')->name('new-password');
    // Route::group(['middleware' => 'auth'], function () {
        // profile routes
        Route::get('profile',[App\Http\Controllers\Receiver\ProfileController::class,'profile'])->name('profile');
        Route::get('profile/{slug}',[App\Http\Controllers\Receiver\ProfileController::class,'other_profile'])->name('otherprofile');
        Route::get('profile-edit',[App\Http\Controllers\Receiver\ProfileController::class,'profileEdit'])->name('profileEdit');
        Route::post('profile-update',[App\Http\Controllers\Receiver\ProfileController::class,'profileUpdate'])->name('profileUpdate');
        Route::get('password-change',[App\Http\Controllers\Receiver\ProfileController::class,'passwordChange'])->name('passwordChange');
        Route::post('password-change-process',[App\Http\Controllers\Receiver\ProfileController::class,'passwordChangeProcess'])->name('passwordChangeProcess');
        Route::get('profile-membership',[App\Http\Controllers\Receiver\ProfileController::class,'profileMembership'])->name('profileMembership');
        Route::get('job-type',[App\Http\Controllers\Receiver\jobController::class,'jobtype'])->name('jobtype');
     
        Route::resource('job', App\Http\Controllers\Receiver\jobController::class);
        Route::view('/job-schedule','receiver.jobs.job-schedule')->name('job-schedule');
        Route::view('/job-applicant','receiver.jobs.job-applicant')->name('job-applicant');
        Route::get('dashboard', [App\Http\Controllers\Receiver\ReceiverController::class, 'index'])->name('dashboard');
    // });
    Route::view('/job-board', 'receiver.jobs.job-board')->name('job-board');
    Route::view('/job-schedule', 'receiver.jobs.job-schedule')->name('job-schedule');
    Route::view('/job-applicant', 'receiver.jobs.job-applicant')->name('job-applicant');

});



// service provider routes

Route::prefix('/provider/')->name('provider.')->group(function () {
    Route::get('dashboard', [App\Http\Controllers\Provider\ProviderController::class, 'index'])->name('dashboard');
    Route::get('apply_job/{id}', [App\Http\Controllers\Provider\JobController::class, 'apply_job'])->name('apply_job');
    Route::get('remove_apply/{id}', [App\Http\Controllers\Provider\JobController::class, 'remove_apply'])->name('remove_apply');
    Route::get('job-profile/{slug}', [App\Http\Controllers\Provider\JobController::class, 'job_profile'])->name('job_profile');
    Route::get('favourite-jobs', [App\Http\Controllers\Provider\JobController::class, 'favourite'])->name('favourite');
    Route::get('login', [App\Http\Controllers\Provider\Auth\LoginController::class, 'showLoginForm'])->name('login');
    Route::post('login', [App\Http\Controllers\Provider\Auth\LoginController::class, 'attemptLogin'])->name('login.post');
    Route::get('logout', [App\Http\Controllers\Provider\Auth\LoginController::class, 'logout'])->name('logout');
    Route::post('logout', [App\Http\Controllers\Provider\Auth\LoginController::class, 'logout'])->name('logout.post');
    Route::get('register', [App\Http\Controllers\Provider\Auth\RegisterController::class, 'showRegistrationForm'])->name('register');
    Route::post('register', [App\Http\Controllers\Provider\Auth\RegisterController::class, 'register'])->name('register.post');
    // Password Reset Routes...
    // Route::get('password/reset', [App\Http\Controllers\Provider\Auth\ForgotPasswordController::class, 'showLinkRequestForm'])->name('password.request');
    Route::get('password/reset', [App\Http\Controllers\Provider\Auth\ForgotPasswordController::class, 'showLinkRequestForm'])->name('password.request');
    Route::get('password/reset/{token}', [App\Http\Controllers\Provider\Auth\ResetPasswordController::class, 'showResetForm'])->name('password.reset');
    Route::post('password/email', [App\Http\Controllers\Provider\Auth\ForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.email');
    Route::post('password/reset', [App\Http\Controllers\Provider\Auth\ResetPasswordController::class, 'reset'])->name('password.update');
    Route::view('/verification', 'provider.auth.verification')->name('verification');
    Route::view('/verification', 'provider.auth.verification')->name('verification');
    Route::view('/password-reset', 'provider.auth.password-reset')->name('password-reset');
    Route::view('/new-password', 'provider.auth.new-password')->name('new-password');
    // Route::group(['middleware' => 'auth'], function () {
        // profile routes
        Route::get('profile',[App\Http\Controllers\Provider\ProfileController::class,'profile'])->name('profile');
        Route::get('profile/{slug}',[App\Http\Controllers\Provider\ProfileController::class,'other_profile'])->name('otherprofile');
        Route::get('profile-edit',[App\Http\Controllers\Provider\ProfileController::class,'profileEdit'])->name('profileEdit');
        Route::post('profile-update',[App\Http\Controllers\Provider\ProfileController::class,'profileUpdate'])->name('profileUpdate');
        Route::get('password-change',[App\Http\Controllers\Provider\ProfileController::class,'passwordChange'])->name('passwordChange');
        Route::post('password-change-process',[App\Http\Controllers\Provider\ProfileController::class,'passwordChangeProcess'])->name('passwordChangeProcess');
        Route::get('profile-membership',[App\Http\Controllers\Provider\ProfileController::class,'profileMembership'])->name('profileMembership');
        Route::get('job-type',[App\Http\Controllers\Provider\jobController::class,'jobtype'])->name('jobtype');
        // Provider.jobs.job-board
        Route::resource('job', App\Http\Controllers\Provider\jobController::class);
        Route::view('/job-schedule','provider.jobs.job-schedule')->name('job-schedule');
        Route::view('/job-applicant','provider.jobs.job-applicant')->name('job-applicant');
        Route::get('dashboard', [App\Http\Controllers\Provider\ProviderController::class, 'index'])->name('dashboard');
    // });
    Route::view('/job-board', 'provider.jobs.job-board')->name('job-board');
    Route::view('/job-schedule', 'provider.jobs.job-schedule')->name('job-schedule');
    Route::view('/job-applicant', 'provider.jobs.job-applicant')->name('job-applicant');
    // Route::get('dashboard', [App\Http\Controllers\ProviderController::class, 'index'])->name('dashboard');
});

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
