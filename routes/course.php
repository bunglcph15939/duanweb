<?php

use App\Http\Controllers\Admin\CourseController;
use App\Models\CourseCategory;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CourseController as FrontendCourseController;

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

Route::get('/c/{id}-{slug}/learning/{lesson?}', [FrontendCourseController::class, 'learn'])->name('course-learn')->where(['id' => '\d+', 'slug' => '.*']);

Route::get('/c/{id}-{slug}', [FrontendCourseController::class, 'show'])->name('course-detail')->where(['id' => '\d+', 'slug' => '.*']);

Route::get('/courses', [FrontendCourseController::class, 'index'])->name('course-list');
