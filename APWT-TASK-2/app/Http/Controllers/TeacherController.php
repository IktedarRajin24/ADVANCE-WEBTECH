<?php

namespace App\Http\Controllers;

use App\Models\teacher;
use Illuminate\Http\Request;
use App\Http\Requests\StoreteacherRequest;
use App\Http\Requests\UpdateteacherRequest;
use App\Models\Courses;

class TeacherController extends Controller
{
    public Function teacherCreate(){
        return view('pages.teacher.teacherCreate');
    }
    public function teacherCreateSubmitted(Request $request)
    {
            $validate = $request->validate([
                'name'=>'required|min:5|max:20',
                'email'=>'required|email',
                'phone'=>'required|regex:/^([0-9\s\-\+\(\)]*)$/'
            ],
            [
                'name.required'=>'Please put your name',
                'name.min'=>'Name must be greater than 5 charcters',
                'name.max'=>'Name can not be greater than 20 charcters',
                'email.required'=>'Please put your email'
            ]
            );
            //return "ok";

            $teacher = new teacher();
            $teacher->name = $request->name;
            $teacher->email = $request->email;
            $teacher->phone = $request->phone;
            $teacher->save();
            return redirect()->route('teacherList');

    }

    public function teacherList(){
        $teachers = teacher::all();
        return view('pages.teacher.teacherList')-> with('teachers', $teachers);
    }

    public function teacherDelete(Request $request){

        $teacher = teacher::where('id', $request->id)->first();
        $teacher->delete();

        return redirect()->route('teacherList');
    }

    public function teacherCourses(Request $request){

        $t = Teacher::where('id',$request->id)->first();
        // return $t->id;
        //hasmany
        // return $t->courses;

        //eloquent
        return $t->assignedCourses();
    }

}
