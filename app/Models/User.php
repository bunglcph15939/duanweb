<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'avatar',
        'status'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    //1 User có nhiều classroom
    public function classrooms(){
        return $this->belongsToMany(
            Classroom::class,
            'user_classroom',
            'user_id',
            'classroom_id'
        );
    }

    //Tác giả có nhiều lớp học
    public function classroom(){
        return $this->hasMany(Classroom::class, 'user_id','id');
    }

    //1 User có nhiều khóa học
    public function courses(){
        return $this->belongsToMany(
            Course::class,
            'user_course',
            'user_id',
            'course_id'
        );
    }

    //1 User có nhiều kết quả bài quiz
    public function quiz_results(){
        return $this->hasMany(QuizResult::class,'user_id','id');
    }
}
