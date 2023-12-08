<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function showAllStudents(Request $request)
    {

        if ($request->has('search')) {
            $students = Student::where('name', 'like', '%'.$request->search.'%')->orWhere('nationality', 'like', '%'.$request->search.'%')->paginate(10)->withQueryString();
        } else {
            $students = Student::paginate(10);
        }

        return view("student.view", [
            "students"=> $students
        ]);
    }

    public function showStudentDetails($id)
    {
        // $student = Student::find($id);
        return view("student.detail",[
            "pagetitle"=> "Details",
            "maintitle" => "Details",
            "student" => Student::find($id)
        ]);
    }
}
