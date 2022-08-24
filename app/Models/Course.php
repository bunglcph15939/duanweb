<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'content',
        'thumbnail',
        'status',
        'config',
        'category_id'
    ];

    public function users(){
        return $this->belongsToMany(
            User::class,
            'user_course',
            'course_id',
            'user_id'
        );
    }

    public function category(){
        return $this->belongsTo(CourseCategory::class,'category_id','id');
    }

    public function classrooms(){
        return $this->belongsToMany(
            Classroom::class,
            'class_course',
            'course_id',
            'classroom_id'
        );
    }

    //1 khóa học có nhiều phần
    public function sections(){
        return $this->hasMany(Section::class,'course_id','id');
    }

    //1 khóa học có nhiều bài học
    public function lessons(){
        return $this->hasMany(Lesson::class,'course_id','id');
    }
}
