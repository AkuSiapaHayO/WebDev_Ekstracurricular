<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function showAllStudents(Request $request)
    {

        if ($request->has('search')) {
            $students = Student::where('name', 'like', '%'.$request->search.'%')->get();
        } else {
            $students = Student::paginate(20);
        }

        return view("viewStudents", [
            "pagetitle"=> "Students",
            "maintitle" => "Students",
            "students"=> $students
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
