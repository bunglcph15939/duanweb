<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\User;
class ReportProgressController extends Controller
{
   public function report_course(Course $course){

    $user=User::all();
    // dd($course->users);
    return view('screens.backend.report.report_course',[
        'user'=>$user,
        'course'=>$course
    ]);
   }
}
