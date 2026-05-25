<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{

    protected $fillable = [

        'student',
        'classroom',
        'subject',
        'grade1',
        'grade2',
        'average'

    ];

}
