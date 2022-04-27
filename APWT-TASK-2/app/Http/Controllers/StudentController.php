<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\student;

class StudentController extends Controller
{
    public Function studentCreate(){
        return view('pages.student.studentCreate');
    }

    public Function login(){
        return view('pages.student.login');
    }

    public Function contact(){
        return view('pages.student.contact');
    }

    public function loginsubmitted(Request $request){
        $validate = $request->validate([
            'uname'=>'required|min:5|max:10',
            'password'=> 'required'
        ],
        [
            'uname.min'=>'Username must be greater than 5 charcters',
            'uname.max'=>'Username can not be greater than 10 charcters'
        ]
    );
        return "login successful";
    }
    public function contactsubmitted(Request $request){
        $validate = $request->validate([
            'email'=>'required|email',
            'message'=> 'required'
        ]
    );
        return "Message sent,";
    }

    public function studentCreatesubmitted(Request $request){
        $validate = $request->validate([
            'name'=>'required|min:5|max:20',
            'email'=>'required|email',
            'id'=>'required',
            'dob'=>'required',
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

        $student = new student();
        $student->name = $request->name;
        $student->student_id = $request->id;
        $student->email = $request->email;
        $student->save();
        return redirect()->route('studentList');
    }
    
    public function studentList(){
        $students = student::all();

        /*for($i= 0; $i< 10; $i++){
            $student = array(
                "name"=> "Student".($i+1),
                "id"=> "00".($i+1),
                "dob"=> "11-11-11"
            );

            $students[]= (object)$student;
        }*/

        //return $student;

        return view('pages.student.list')-> with('students', $students);
    }
    public function studentEdit(Request $request){

        $student = student::where('id', $request->id)->first();
        return view('pages.student.studentEdit')-> with('student', $student);
    }
    public function studentEditSubmitted(Request $request){

        $student = student::where('id', $request->id)->first();
        $student->name = $request->name;
        $student->student_id = $request->student_id;
        $student->email = $request->email;
        $student->save();

        return redirect()->route('studentList');
    }

    public function studentDelete(Request $request){

        $student = student::where('id', $request->id)->first();
        $student->delete();

        return redirect()->route('studentList');
    }
}


