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
        'profession',
        'company',
        
    ];
    
   
//    public function history(){
//        return $this->hasMany('App\History');
//    }


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

    /**
     * Gets the Current Visit by the visitor
     * @param $id
     * @return History
     */
    public static function currentVisit($id)
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
            return $visit;
        }else{
            //The visitor does not have a session
            //so we can sign them
            return null;
        }

    }
}
