<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function showAllStudents()
    {
        return view("viewStudents", [
            "pagetitle"=> "Students",
            "maintitle" => "Students",
            "students"=> student::all()
        ]);
    }

    public function showStudentDetails($id)
    {
        // $student = Student::find($id);
        return view("viewStudentDetails",[
            "pagetitle"=> "Details",
            "maintitle" => "Details",
            "student" => Student::find($id)
        ]);
    }
}
