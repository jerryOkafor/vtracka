<?php

namespace App\Http\Controllers;

use App\History;
use App\Http\Requests;
use App\User;
use App\Visitor;
use Carbon\Carbon;
use Illuminate\Http\Request;

class VisitorsController extends Controller
{
    /**
     * Check if the required visitor exists in the
     * database an return the sign form if they exist
     * or a sign up form if they don't exist
     * or a sign out form if the have a session that is open.
     *
     *
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */

    public function check(Request $request)
    {
        $data = $request->all();
        if($data) {
            $phoneEmail = $data['emailPhone'];
            $visitor = Visitor::where('phone', "$phoneEmail")
                ->orWhere('email', $phoneEmail)->first();


            if ($visitor) {
                //visitor exists in the database
                $vId = $visitor->id;
                if (Visitor::hasSession($vId)) {
                    //the visitor has a session already so simply
                    //take him to the sign out page
                    return redirect('visitor/visit/out/' . $vId);
                } else {
                    //no session so we can check he has a record
                    //or not and go ahead and sign them in

                    return view('oldVisitor')->withVisitor($visitor);

                }

            } else {
                //the visitor's details is not in the database
                //he/she is visiting for the first time,
                //so we show him the sign in page
                return view('newVisitor')->withMessage('No record found, add the user!');


            }
        }else{
            return view('newVisitor')->withMessage('No record found, add the user!');
        }

    }

    /*
     * Intercept the new visit request and uses it to
     * create a new visit into the histories table
     * */
    public function newVisit(Request $request)
    {
        $data = $request->all();
        $vId = $data['visitor_id'];
        if (Visitor::hasSession($vId)) {
            //no need to sign them in,
            //they need to sign out first

            return redirect('visitor/visit/out/'.$vId);

        } else {
            //no session, so sign them in
            History::create([
                'visitor_id' => $data['visitor_id'],
                'p_of_visit' => $data['p_of_visit'],
                'whom_to_see' => $data['whom_to_see'],
                'floor'=>$data['floor'],
                'date' => Carbon::now(),
                'time_in' => Carbon::now(),
                'time_out' => null,
                'admin' => auth()->user()->name

            ]);

            return redirect('/home')->with('message', ['New Visitor Signed In']);

        }


    }

    /*
     * This shows the sign out page for the particular visitor*/
    public function signOutView($id)
    {
        $visitor = Visitor::find($id);
        return view('signOut')->withVisitor($visitor);

    }

    /**
     * Handles the sign out of the visitor
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function signOut(Request $request)
    {
        $data  = $request->all();
        $visit = Visitor::currentVisit($data['visitor_id']);
        $visit->time_out = Carbon::now();

        $visit->save();
        return redirect()->to('home');

    }


    public function signUp(Request $request)
    {

        $visitorsModel = new Visitor;
//        $avatar='img/img_placeholder_avatar.jpg';
//        if($request->gender == 0){ //0 == female
//            $avatar = 'img/img_placeholder_avatar_female.jpg';
//        }
        $visitorsModel->first_name = $request->first_name;
        $visitorsModel->last_name = $request->last_name;
        $visitorsModel->gender = $request->gender;
        $visitorsModel->phone = $request->phone;
        $visitorsModel->email = $request->email;
        $visitorsModel->avatar_url = $avatar;
        $visitorsModel->address = $request->address;
        $visitorsModel->title = $request->title;
        $visitorsModel->company = $request->company;
        $visitorsModel->save();

      
        return redirect('home');
        //return view('home')->with('message', ['New Visitor Registered']);
        //return redirect('/home')->with('message', ['New Visitor Registered']);
        // echo "Sign out the user and return to the home page";

    }

}
