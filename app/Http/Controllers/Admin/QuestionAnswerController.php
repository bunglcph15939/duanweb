<?php

namespace App\Http\Controllers\Admin;

use App\helpers\Helpers;
use App\Http\Controllers\Controller;
use App\Http\Requests\QuestionAnswerRequest;
use App\Http\Services\UploadService;
use App\Models\Answer;
use App\Models\Question;
use Illuminate\Http\Request;

class QuestionAnswerController extends Controller
{
    // hiển thị danh sách questions và answers
    public function index()
    {
        return view('screens.backend.questionquiz.list');
    }

    public function datalist(int $sort,$title)
    {
        $questions = Question::select('id', 'title', 'type', 'attachment', 'tag');
        if($sort == 0){
            $questions =  $questions->orderBy('id', 'DESC');
        }
        else{
            $questions =  $questions->orderBy('id', 'ASC');
        }
        if($title != 0){
            $questions =  $questions->where('title','LIKE','%'.$title.'%');
        }
        $questions = $questions->paginate(6);
        $data = [
            'questions' =>  $questions
        ];
        $table = view('screens.backend.questionquiz.components.layout.table',$data)->render();
        return response()->json($table, 200);
    }

    //hiển thị form thêm câu hỏi câu trả lời
    public function create($type)
    {
        $data = [
            'type' => $type
        ];
        $data = view('screens.backend.questionquiz.components.forms.create', $data)->render();
        return response()->json($data, 200);
    }
    // tạo question và answers
    public function store(QuestionAnswerRequest $request)
    {
        $request_array = $request->all();
        //-------add image in storage--------
        if ($request->hasFile('attachment')) {
            $img = $request->attachment;
            $request_array['attachment'] =  UploadService::upload($img, 'question');
        }
        //-------add question--------
        Question::create($request_array);
        //get maxid into question_id
        $question_id = Question::select('id')->max('id');

        //--------add answer----------

        if ($request->content == '') {
            //thêm câu trả lời với loại câu hỏi đúng/sai
            if (!$request->is_correct) {
                $this->add_answer($request, $question_id);
                return response()->json('', 201);
            }
            //thêm câu trả lời với loai câu hỏi tự luận
            $this->add_answer($request, $question_id);
            return response()->json('', 201);
        }
        //thêm câu trả lời với loai câu hỏi có trên 2 đáp án
        $this->add_answers($request, $question_id);
        return response()->json('', 201);
    }

    //hiển thị form cập nhật câu hỏi câu trả lời
    public function update($id)
    {
        $question =  Question::select(
            'id',
            'title',
            'type',
            'attachment',
            'tag',
        )
            ->where('id', $id)->first();
        $data = [
            'question' => $question,
            'type' => $question->type
        ];
        $data = view('screens.backend.questionquiz.components.forms.update', $data)->render();
        return response()->json($data, 200);
    }

    // cập nhật lại question và answers
    // có thể cập nhật lại hoặc thêm answers
    public function edit(QuestionAnswerRequest $request)
    {
        //---------section update question-------------
        $question_id = $request->id;
        $question = Question::find($question_id);
        $question->title = $request->title;
        $question->type = $request->type;
        if ($request->hasFile('attachment')) {
            $question->attachment = UploadService::upload($request->attachment, 'question');
        }
        $question->tag = $request->tag;
        $question->save();
        //-----------section update answers----------------
        $contentAnswers = $request->content;
        $id_answers = $request->id_answer;
        if ($request->type == 0) {
            //cập nhật câu trả lời với loại câu hỏi đúng/sai
            $this->put_answer($id_answers[0], $request);
            $data = [
                'question' => $question,
                'type' => $question->type
            ];
            $html = view('screens.backend.questionquiz.components.forms.update', $data)->render();
            return response()->json($html, 201);
            // >>>>loai câu hỏi tự luận không cần sửa chỉ cần sửa câu hỏi
        }
        //cập nhật câu trả lời với loai câu hỏi có trên 2 đáp án
        if ($id_answers) {
            foreach ($id_answers as $key => $id) {
                if ($contentAnswers[$key]) {
                    $PutAnswer = Answer::find($id);
                    $PutAnswer->content = $contentAnswers[$key];
                    unset($contentAnswers[$key]);
                    $PutAnswer->is_correct = $request->is_correct[$key];
                    $PutAnswer->save();
                }
            }
        }
        //add new answer if contentAnswers is array null
        if (!empty($contentAnswers)) {
            foreach ($contentAnswers as $key => $contentAnswer) {
                $this->add_answer_queries($contentAnswer, $request->is_correct[$key], $question_id, $key);
            }
        }
        $data = [
            'question' => $question,
            'type' => $question->type
        ];
        $html = view('screens.backend.questionquiz.components.forms.update', $data)->render();
        return response()->json($html, 201);
    }

    // xóa answer
    public function destroyAnswer($id)
    {
        Answer::destroy($id);
        return response()->json('', 205);
    }
    // xóa question
    public function destroyQuestion($id)
    {
        $data = Question::select('title')->where('id',$id)->get();
        Question::destroy($id);
        return response()->json(['data' => $data], 205);
    }


    //-------------------------------------------------------------------
    public function add_answers($request, $question_id)
    {
        //add answers
        foreach ($request->content as $key => $val) {
            $this->add_answer_queries($val, $request->is_correct[$key], $question_id);
        }
    }

    public function add_answer_queries(string $val, int $is_correct, int $question_id): void
    {
        $answer = new Answer();
        $answer->content = $val;
        $answer->is_correct = $is_correct;
        $answer->question_id = $question_id;
        $answer->save();
    }

    public function add_answer($request, $question_id)
    {
        $answer = new Answer();
        $answer->is_correct = $request->is_correct ? $request->is_correct[0] : 1;
        $answer->question_id = $question_id;
        $answer->save();
    }

    public function put_answer($id, $request)
    {
        $Answer = Answer::find($id);
        $Answer->is_correct = $request->is_correct[0];
        $Answer->save();
    }
}
