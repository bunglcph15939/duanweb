<?php

use App\Http\Controllers\Admin\CourseController;
use App\Models\CourseCategory;
use Illuminate\Support\Facades\Route;


/**
 * Users Role Route
 */

Route::prefix('admin/courses')->name('admin.course.')->group(function () {
    Route::get('/', [CourseController::class, 'index'])->name('list');
    Route::get('/add', [CourseController::class, 'create'])->name('create');
    Route::post('/add', [CourseController::class, 'store'])->name('store');
    Route::get('/{course}', [CourseController::class, 'edit'])->name('edit');
    Route::put('/{course}', [CourseController::class, 'update'])->name('update');
    Route::patch('/{course}', [CourseController::class, 'changeStatus'])->name('changestatus');
    Route::delete('/{course}', [CourseController::class, 'destroy'])->name('delete');
});