<?php

use Bitsoftsol\LaravelAdministration\Http\Controllers\Auth\LoginController;
use Bitsoftsol\LaravelAdministration\Http\Controllers\Auth\RegisterController;
use Bitsoftsol\LaravelAdministration\Http\Controllers\Auth\ResetPasswordController;
use Illuminate\Support\Facades\Route;
use Bitsoftsol\LaravelAdministration\Http\Controllers\UserController;
use Bitsoftsol\LaravelAdministration\Http\Controllers\AuthGroupController;
use Bitsoftsol\LaravelAdministration\Http\Controllers\AuthUserGroupController;
use Bitsoftsol\LaravelAdministration\Http\Controllers\DashboardController;
use Bitsoftsol\LaravelAdministration\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Auth;

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

Route::get('/', function () {
    return redirect()->to('admin');
});


// Clear Cache Route
Route::get('clear-cache/{flag?}', function($flag = null){
    Artisan::call('optimize');
    Artisan::call('cache:clear');
    Artisan::call('config:clear');
    return "Cache cleared successfully";
});

Route::get('api/doc', function(){
    Artisan::call('l5-swagger:generate');
    return redirect()->to(url('api/documentation'));
});

Route::get('hello', function(){
    dd("Hello is running");
});

// Auth Routes
// Auth::routes();

// Cutomize the AuthRoutes
// Customize the routes with your custom controllers
// Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
// Route::post('/login', [LoginController::class, 'login']);
// Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
// Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
// Route::post('/register', [RegisterController::class, 'register']);
// Route::get('/password/reset', [ResetPasswordController::class, 'showLinkRequestForm'])->name('password.request');
// Route::post('/password/email', [ResetPasswordController::class, 'sendResetLinkEmail'])->name('password.email');
// Route::get('/password/reset/{token}', [ResetPasswordController::class, 'showResetForm'])->name('password.reset');
// Route::post('/password/reset', [ResetPasswordController::class, 'reset']);

Route::get('login', function () {
    return redirect()->to('admin');
})->name('login');

// Admin route, if user is authenticated then it will be login page otherwise it is dashboard page
Route::get('admin', [DashboardController::class, 'dashboard'])->middleware('web');

// Here are admin routes with admin prefix, without crud
Route::middleware(['web', 'auth'])->prefix('admin')->group(function() {

    Route::get('change-password', [ProfileController::class, "changePasswordForm"]);
    Route::post('change-password', [ProfileController::class, "changePassword"]);
    Route::resource('users', UserController::class);
    Route::resource('auth_groups', AuthGroupController::class);
    Route::resource('auth_user_group', AuthUserGroupController::class);
});



