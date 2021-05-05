<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    protected $fillable = [
        'job_title', 'employer', 'city', 'state', 'start_date', 'end_date'
    ];
}
