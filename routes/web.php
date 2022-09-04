<?php

use App\Http\Controllers\HomeController;
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
});


Route::get('/admin', function(){
    return view('screens.backend.dashboard');
})->name('admin');


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

