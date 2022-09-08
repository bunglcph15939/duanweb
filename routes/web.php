<?php

use App\Http\Controllers\ClassroomDetailController;
use App\Http\Controllers\CourseListController;
use App\Http\Controllers\DoQuizController;
use App\Http\Controllers\EssayGradingController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ResultController;
use GuzzleHttp\Psr7\MimeType;
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

Route::prefix('/')->name('frontend.')->group(function(){
    Route::get('/', [HomeController::class, 'index'])->name('home');
    Route::get('/classroom-detail', function () {
        return view('screens.frontend.classroom-detail');
    });

    Route::get('/course-detail/{quiz_id}',[DoQuizController::class,'index'])->name('coursedetail');
    Route::post('/doquiz',[DoQuizController::class,'doquiz'])->name('doquiz');
    Route::get('/essay-grading/{quiz_id}',[EssayGradingController::class,'index'])->name('essaygrading');
    Route::get('/result/{quiz_id}',[ResultController::class,'index'])->name('result');
});


Route::get('/admin', function(){
    return view('screens.backend.dashboard');
})->name('admin');


// preview pdf
Route::get('/doc-viewer/{file}', function ($file) {
    // file path
   $path = public_path($file);
  //  dd($path);
  $mimeType = MimeType::fromFilename($path);
    // header
   $header = [
     'Content-Type' => $mimeType,
     'Content-Disposition' => 'inline; filename="' . $file . '"'
   ];
  return response()->file($path, $header);
})->name('doc-viewer')->where('file', '.*');