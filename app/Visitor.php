<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Visitor extends Model
{
    protected $fillable = [
        'first_name',
        'last_name',
        'gender',
        'phone',
        'email',
        'address',
        'title',
        'company'
    ];


    public static function hasSession($id)
    {
        $visit  = History::where([
            ['visitor_id',$id],
            ['date',Carbon::today()]
        ])->first();
        if($visit !== null && $visit->time_out == null)
        {
            //the visitor has a session that is one
            //oe he has not signed out yet so
            //no need to sign him again
            return true;
        }else{
            //The visitor does not have a session
            //so we can sign them
            return false;
        }

    }
}
