<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ekstracurricular;

class EkstracurricularController extends Controller {
    public function showAllEkstracurriculars() {
        return view("Ekstracurricular.view", [
            "ekstracurriculars" => Ekstracurricular::all()
        ]);
    }

    public function create() {
        return view ('Ekstracurricular.create');
    }
}
