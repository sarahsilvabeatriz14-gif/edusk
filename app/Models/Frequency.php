<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Frequency extends Model
{

    protected $fillable = [

        'student',
        'classroom',
        'date',
        'status'

    ];

}