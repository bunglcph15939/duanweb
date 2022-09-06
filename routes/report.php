<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ReportProgressController;

Route::prefix('admin/report')->name('report.')->group(function () {
    Route::get('/report_user',function(){
        return view('screens.backend.report.report_user');
    })->name('report_user');
    Route::get('/report_course/{course}',[ReportProgressController::class,'report_course'])->name('report_course');
});
