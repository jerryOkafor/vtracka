<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class History extends Model
{
    protected $fillable = [
        'visitor_id',
        'p_of_visit',
        'whom_to_see',
        'floor',
        'date',
        'time_in',
        'time_out',
        'admin'
    ];

    //the visitor table is been called within the history model
    public function visitor(){
        return $this->belongsTo('App\Visitor');
    }
}
