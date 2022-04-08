<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function studentList(){
        $student = array();

        for($i= 0; $i< 10; $i++){
            $student = array(
                "name"=> "Student".($i+1),
                "id"=> "00".($i+1),
                "dob"=> "11-11-11"
            );

            $students[]= (object)$student;
        }

        return view('pages.student.list')-> with('students', $students);
    }
}
