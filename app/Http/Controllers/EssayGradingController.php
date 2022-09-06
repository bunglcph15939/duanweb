<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EssayGradingController extends Controller
{
    public function index(){
        return view('screens.frontend.essaygrading.essaygrading');
    }
}
