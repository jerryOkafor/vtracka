<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;

use App\Http\Requests;

use Illuminate\Support\Facades\Auth;

use App\User;

use App\Visitor as Visitor;

use App\History;

use App\Floor;

class AdminController extends Controller
{

    public function __construct(){
       //return (Auth::user()->role == 2)? view('adminDashboard') : view('home');
        // return (Auth::user()->role !== 2)? back() : '' ;
    }

    public function index()
    {
        return (Auth::user()->role == 2)? view('adminDashboard') : view('home');
       // return view('adminDashboard');
    }
    
    
    

    public function adminProfile(){
               
        $admins = User::all()->where('role','2');   

       return (Auth::user()->role == 2)? view('viewAdmin', compact('admins')) : view('home');
      // return view('viewAdmin', compact('admins'));
    }

    
    
    public function userProfile(){

        $users = User::all()->where('role','1');

        return (Auth::user()->role == 2)? view('viewUser', compact('users')) : view('home');
    }

    
    
    public function todayVisits(){

            $todayvisits = History::where('date', Carbon::today())->get();

            return (Auth::user()->role == 2) ? view('adminDashboard', compact('todayvisits')) : view('home');
    }


    public function visitorHistory(){
       
        $visitHistories = History::all();
        //return view('visitorHistory', compact('visitHistories'));

        return (Auth::user()->role == 2)? view('visitorHistory', compact('visitHistories')) : view('home');
    }


    public function addFloor(){
        $addedFloors = Floor::all();
       return view('floor', compact($addedFloors, 'addedFloors'));

    }


    public function submitFloor(Request $request){

        $floors = new Floor();
        $floors->name = $request->name;
        $floors->tag = $request->tag;
        $floors->save();

        return redirect('floor/add');
    }


    

}
