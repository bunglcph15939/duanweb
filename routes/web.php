<?php

use App\Http\Controllers\HomeController;
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

Route::prefix('/')->middleware('auth','verified')->name('frontend.')->group(function(){
    Route::get('/', [HomeController::class, 'index'])->name('home');
});


Route::get('/admin', function(){
    return view('screens.backend.dashboard');
})->middleware(['auth', 'role:admin|teacher'])->name('admin');



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

