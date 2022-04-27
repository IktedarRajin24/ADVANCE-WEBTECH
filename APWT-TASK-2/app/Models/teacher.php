<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class teacher extends Model
{
    public $timestamps = false;
    use HasFactory;

    public function courses(){
        return $this->hasMany(Course::class,'teacherId');
    }

    //using eloquent
    public function assignedCourses(){
        return Courses::where('teacherId', $this->id)->get();
    }
}
