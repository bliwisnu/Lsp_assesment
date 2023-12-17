<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AddressController;
use Illuminate\Support\Facades\Route;

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

// Login & Register
Route::get('/register', [AuthController::class, 'register'])->middleware('guest')->name('register');
Route::post('/register', [AuthController::class, 'registerPost'])->middleware('guest')->name('register');
Route::get('/login', [AuthController::class, 'login'])->middleware('guest')->name('login');
Route::post('/login', [AuthController::class, 'loginPost'])->middleware('guest')->name('login.auth');

//Profile
// Route::post('', [ProfileController::class,
// routes/web.php
Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');
    Route::get('/listUser', [DashboardController::class, 'listUser'])->name('listUser');
    // Route::get('/updateUser', [DashboardController::class, 'updateUser'])->name('updateUser');
    Route::get('/updateUser/{id}', [DashboardController::class, 'updateUser'])->name('updateUser');

    Route::resource('/dashboard/users', UserController::class);

    Route::get('/profile', [ProfileController::class, 'profile'])->name('profile');
    // Route::post('/profile', [ProfileController::class, 'storeProfile'])->name('profile.store');
    Route::post('/profile/tambah', [ProfileController::class, 'storeProfile']);
    Route::put('/profile/store/{id}', [ProfileController::class, 'updateProfile'])->name('profileUpdate.store');

    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
    Route::get('/delete/{id}', [AuthController::class, 'delete']);
});
// Route::post('/store-form-data', [FormController::class, 'storeFormData'])->name('storeFormData');

Route::get('/getProvinces', [AddressController::class, 'provinces']);
Route::get('/getRegencies/{id}', [AddressController::class, 'regencies']);
Route::get('/getDistricts/{id}', [AddressController::class, 'districts']);


// Dashboard
