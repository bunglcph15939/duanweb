<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ClassroomController;

/**
 * Users Role Route
 */

Route::prefix('admin/classroom')->name('classroom.')->group(function () {
    Route::get('/',[ClassroomController::class,'index']);
    Route::post('/store/',[ClassroomController::class,'store_classroom']);
    Route::get('change_status',[ClassroomController::class,'change_status']);
    Route::post('/update',[ClassroomController::class,'update_classroom']);
    Route::get('/search_name',[ClassroomController::class,'search']);
    Route::get('/fillter',[ClassroomController::class,'fillter']);
});
