<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class History extends Model
{
    protected $fillable = [
        'visitor_id',
        'p_of_visit',
        'whom_to_see',
        'date',
        'time_in',
        'time_out',
        'admin'

    ];
}
