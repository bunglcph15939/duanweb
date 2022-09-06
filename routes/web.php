<?php

use App\Http\Controllers\ClassroomDetailController;
use App\Http\Controllers\CourseListController;
use App\Http\Controllers\DoQuizController;
use App\Http\Controllers\EssayGradingController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ResultController;
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

Route::name('frontend.')->group(function(){
    Route::get('/', [HomeController::class, 'index'])->name('home');
    Route::get('/classroom-detail', function () {
        return view('screens.frontend.classroom-detail');
    });

    Route::get('/course-detail/1',[DoQuizController::class,'index'])->name('coursedetail');
    Route::post('/doquiz',[DoQuizController::class,'doquiz'])->name('doquiz');
    Route::get('/essay-grading',[EssayGradingController::class,'index'])->name('essaygrading');
    Route::get('/result/{quiz_id}/{check_essay?}',[ResultController::class,'index'])->name('result');
});

Route::get('/', function () {
    return view('screens.frontend.index');
})->name('home');

Route::get('/admin', function(){
    return view('screens.backend.dashboard');
});

// preview pdf
Route::get('/pdf/{file}', function ($file) {
    // file path
   $path = public_path('documents\pdf\lesson\\' . $file);
    // header
   $header = [
     'Content-Type' => 'application/pdf',
     'Content-Disposition' => 'inline; filename="' . $file . '"'
   ];
  return response()->file($path, $header);
})->name('pdf');

