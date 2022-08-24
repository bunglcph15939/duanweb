<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quiz extends Model
{
    use HasFactory;
    protected $table = 'quizs';

    protected $fillable = [
        'title',
        'duration',
        'limit',
        'lesson_id',
    ];

    //Quiz thuộc lesson
    public function lesson(){
        return $this->belongsTo(Lesson::class,'lesson_id','id');
    }

    //1 bài quiz có nhiều câu hỏi
    public function questions(){
        return $this->belongsToMany(
            Question::class,
            'question_quiz',
            'quiz_id',
            'question_id'
        );
    }

    //Kết quả của quiz do học sinh làm
    public function quiz_results(){
        return $this->hasMany(QuizResult::class,'quiz_id','id');
    }
}
