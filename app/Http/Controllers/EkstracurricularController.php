<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ekstracurricular;
class EkstracurricularController extends Controller
{
    public function showAllEkstracurriculars()
    {
        return view("viewEkstracurricular",[
            "pagetitle"=>"Ekstracurricular",
            "maintitle"=>"Ekstracurricular",
            "ekstracurriculars"=> Ekstracurricular::all()
        ]);
    }
}
