<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    protected $fillable = [
        'matric_school',
        'matric_degree',
        'matric_percentage',
        'from_year_matric',
        'to_year_matric',

    ];
}
