<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class HomeController extends Controller
{
    public function index()
    {
        $user = auth()->user()->load(['courses' => fn($q) => $q->with('lessons')->where('status', 1), 'classrooms' => fn($q) => $q->with(['author', 'users' => fn($q) => $q->where('user_id', '!=', auth()->user()->id)])]);
        return view('screens.frontend.index', compact('user'));
    }
}
