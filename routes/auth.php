<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Auth\ForgotController;
use Illuminate\Support\Facades\Route;

/**
 * Users Register Route
 */
Route::prefix('/register')->name('auth.')->group(function () {
    Route::get('/', [AuthController::class, 'register'])->name('register');
    Route::post('/processRegister', [AuthController::class, 'processRegister'])->name('processRegister');
});

/**
 * Users login Route
 */
Route::prefix('/login')->name('auth.')->group(function () {
    Route::get('/', [AuthController::class, 'login'])->name('login');
    Route::post('/processLogin', [AuthController::class, 'processLogin'])->name('processLogin');
});



/**
 * Reset Password Email Route
 */
Route::prefix('/forgot-password')->name('forgotPassword.')->group(function () {
    Route::get('', [ForgotController::class, 'forgotPassword'])->name('forgotPasswordForm');
    Route::post('', [ForgotController::class, 'processForgotPassword'])->name('processForgotPassword');
    
});


/**
 * Reset Password Route
 */
Route::prefix('/reset-password')->name('reset-password.')->group(function () {
    // Route::get('/reset/{token}', [ForgotController::class, 'resetPassword'])->name('resetPassword');
    // Route::post('/reset/{token}', [ForgotController::class, 'processResetPassword'])->name('processResetPassword');

    Route::get('{userId}/{token}', [ForgotController::class, 'resetPassword'])->name('resetPassword');
    Route::post('{userId}/{token}', [ForgotController::class, 'processResetPassword'])->name('process-password');
});


/**
 * Change Password Route
 */
Route::prefix('/change-password')->group(function () {

});




