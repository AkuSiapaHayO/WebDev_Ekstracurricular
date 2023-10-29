<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ekstracurricular extends Model
{
    use HasFactory;

    protected $fillable = [
        "name",
        "requirement",
        "price",
        "tutor_name",
    ] ;
}
