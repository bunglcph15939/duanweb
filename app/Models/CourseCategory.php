<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseCategory extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'parent_id',
        'thumbnail',
    ];

    // 1 danh mục khóa học có nhiều khóa học
    public function courses()
    {
        return $this->hasMany(Course::class,'category_id','id');
    }

    // child
    public function child()
    {
        return $this->hasMany(Course::class, 'parent_id', 'id');
    }
}
