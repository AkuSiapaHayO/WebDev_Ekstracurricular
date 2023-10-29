<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EkstracurricularSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB ::table("ekstracurriculars")->insert([
            "name" => "Basketball",
            "requirement"=> "Athletic clothing, proper basketball shoes, and a water bottle.",
            "price"=> 20,
            "tutor_name"=> "Michael Johnson"
        ]);
        DB ::table("ekstracurriculars")->insert([
            "name" => "Soccer",
            "requirement"=> "Soccer cleats, shin guards, a soccer ball, and a water bottle.",
            "price"=> 25,
            "tutor_name"=> "Sarah Davis"
        ]);
        DB ::table("ekstracurriculars")->insert([
            "name" => "K-pop Dance",
            "requirement"=> "Comfortable dance attire and shoes, enthusiasm for K-pop music and dance.",
            "price"=> 15,
            "tutor_name"=> "Lisa Kim"
        ]);
        DB ::table("ekstracurriculars")->insert([
            "name" => "Theatre",
            "requirement"=> "No specific requirements. Just an interest in acting and drama.",
            "price"=> 10,
            "tutor_name"=> "Alex Smith"
        ]);
        DB ::table("ekstracurriculars")->insert([
            "name" => "Painting",
            "requirement"=> "Painting supplies (canvas, brushes, paints), an apron, and a desire to explore your artistic side.",
            "price"=> 30,
            "tutor_name"=> "Emily Turner"
        ]);
    }
}
