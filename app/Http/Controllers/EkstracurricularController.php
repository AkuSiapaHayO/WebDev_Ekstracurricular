<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ekstracurricular;

class EkstracurricularController extends Controller
{
    public function showAllEkstracurriculars()
    {
        return view("Ekstracurricular.view", [
            "ekstracurriculars" => Ekstracurricular::all()
        ]);
    }

    public function create()
    {
        return view('Ekstracurricular.create');
    }

    public function store(Request $request)
    {
        Ekstracurricular::create([
            'name' => $request->name,
            'requirement' => $request->requirement,
            'price' => $request->price,
            'tutor_name' => $request->tutor
        ]);

        return redirect()->route('viewEkstracurricular');
    }

    public function edit(Ekstracurricular $ekstracurricular)
    {
        $ekstracurricularEdit = Ekstracurricular::where('id', $ekstracurricular->id)->first();
        return view("Ekstracurricular.edit", compact('ekstracurricularEdit'));
    }

    public function update(Request $request, Ekstracurricular $ekstracurricular)
    {
        $ekstracurricular->update([
            'name' => $request->name,
            'requirement' => $request->requirement,
            'price' => $request->price,
            'tutor_name' => $request->tutor
        ]);
        return redirect()->route('viewEkstracurricular');
    }

    public function destroy(Ekstracurricular $ekstracurricular)
    {
        $ekstracurricular->delete();
        return redirect()->route('viewEkstracurricular');
    }
}
