<?php

namespace App\Http\Controllers;

use App\Models\Answer;
use App\Models\Quiz;
use App\Models\QuizResult;
use App\Models\QuizResultDetail;
use Illuminate\Http\Request;

class DoQuizController extends Controller
{
    public function index($id = 1)
    {
        // for ($i=1; $i < 12; $i++) { 
        //     Quiz::find(1)->questions()->attach($i);
        // }
        $quiz = Quiz::find($id);
        $data = [
            'quiz' => $quiz
        ];
        return view('screens.frontend.coursedetail.course-detail', $data);
    }

    public function doquiz(Request $request)
    {
        date_default_timezone_set("Asia/Ho_Chi_Minh");
        $endTime =  substr_replace(date("Y-m-d h:i:sa"), '', -2);
        $startTime =  substr_replace(date("Y-m-d h:i:sa", strtotime("-10 minutes", strtotime($endTime))), '', -2);
        $score = 0;
        $answer_correct_true = [];
        $answer_clicked = [];
        $index_essay = 0;
        if (!$request->answer_id) {
            QuizResult::create([
                'score' => 0,
                'start_time' => $startTime,
                'end_time' => $endTime,
                'user_id' => 1,
                'quiz_id' => $request->quiz_id
            ]);
            return response()->json($request->quiz_id, 200);
        }
        $answers = Answer::whereIn('id', $request->answer_id)->get();

        foreach ($answers as $answer) {
            if ($answer->question->type == 2) {
                $answer_clicked[] = $answer->id;
                foreach ($answer->question->answers as $ans) {
                    if ($ans->is_correct == 1) {
                        $answer_correct_true[] = $ans->id;
                    }
                }
            } else if ($answer->question->type == 3) {
                $answer_update = Answer::find($answer->id);
                $answer_update->id = $request->content_answer_essay[$index_essay];
                $index_essay++;
            } else {
                if ($answer->is_correct == 1) {
                    $score++;
                }
            }
            $var = array_diff($answer_clicked, $answer_correct_true);
        }
        if (empty($var)) {
            $score++;
        }
        $score = $score / count($request->question_id) * 10;
        QuizResult::create([
            'score' => $score,
            'start_time' => $startTime,
            'end_time' => $endTime,
            'user_id' => 1,
            'quiz_id' => $request->quiz_id
        ]);
        $QuizResultId = QuizResult::select('id')->max('id');
        foreach ($answers as $answer) {
            QuizResultDetail::create([
                'question_id' => $answer->question->id,
                'answer_id' => $answer->id,
                'quiz_result_id' =>  $QuizResultId
            ]);
        }
        return response()->json($request->quiz_id, 200);
    }
}
