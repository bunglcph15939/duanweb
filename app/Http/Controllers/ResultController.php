<?php

namespace App\Http\Controllers;

use App\Models\Answer;
use App\Models\Lesson;
use App\Models\Quiz;
use App\Models\QuizResult;
use App\Models\User;
use Illuminate\Http\Request;

class ResultController extends Controller
{
    public function index($quiz_id, $check_essay = false)
    {
        $quizResult = QuizResult::where([
            ['user_id', '=', 1],
            ['quiz_id', '=', $quiz_id],
        ])->orderBy('id', 'DESC')->first();
        $user = User::select('name', 'avatar')->where('id', $quizResult->user_id)->first();
        $quiz = Quiz::select('title')->where('id', $quizResult->quiz_id)->first();
        $data = [
            'quizResult' => $quizResult,
            'user' => $user,
            'quiz' => $quiz,
            'check_essay' => $check_essay
        ];
        return view('screens.frontend.result.result', $data);
    }
}
