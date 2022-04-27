<?php

namespace App\Http\Controllers;

use App\Models\courses;
use App\Http\Requests\StorecoursesRequest;
use App\Http\Requests\UpdatecoursesRequest;
use App\Models\Teacher;

class CoursesController extends Controller
{
    public function courseTeacher(Request $request){

        $c = Course::where('code',$request->code)->first();
        // return $c->teacherId;
        //belongsto
        // return $c->teacher;
        //Eloquent
        return $c->assignedTeacher();

    }
}
