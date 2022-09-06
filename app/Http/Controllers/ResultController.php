<?php

namespace App\Http\Controllers;

use App\Models\Lesson;
use App\Models\Quiz;
use App\Models\QuizResult;
use App\Models\User;
use Illuminate\Http\Request;

class ResultController extends Controller
{
    public function index($quiz_id, $check_essay = false)
    {
        $quizResults = QuizResult::where([
            ['user_id', '=', 1],
            ['quiz_id', '=', $quiz_id],
        ])->orderBy('id', 'DESC')->get();
        $user = User::select('avatar')->where('id', $quizResults[0]->user_id)->first();
        $quiz = Quiz::select('title')->where('id', $quizResults[0]->quiz_id)->first();
        $data = [
            'quizResults' => $quizResults,
            'user' => $user,
            'quiz' => $quiz,
            'check_essay' => $check_essay
        ];
        return view('screens.frontend.result.result', $data);
    }
}
