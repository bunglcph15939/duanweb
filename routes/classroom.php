<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ClassroomController;

/**
 * Users Role Route
 */

Route::prefix('admin/classroom')->name('classroom.')->group(function () {
    Route::get('/',[ClassroomController::class,'index'])->name('index');
    Route::get('/form_store_classroom',[ClassroomController::class,'create'])->name('form_store_classroom');
    Route::post('/store/',[ClassroomController::class,'store_classroom'])->name('store');
    Route::get('change_status',[ClassroomController::class,'change_status']);
    Route::get('form_update_classroom/{classroom}',[ClassroomController::class,'form_update'])->name('form_update_classroom');
    Route::put('/update/{classroom}',[ClassroomController::class,'update_classroom'])->name('update');
    Route::get('/search_name',[ClassroomController::class,'search']);
    Route::get('/fillter',[ClassroomController::class,'fillter']);
});
