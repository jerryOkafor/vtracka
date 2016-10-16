<?php

namespace App\Http\Controllers;

use App\History;
use App\Http\Requests;
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
        $phoneEmail = $data['emailPhone'];
        $visitor = Visitor::where('phone', $phoneEmail)
            ->orWhere('email', $phoneEmail)->first();

        $vId = $visitor->id;
        if (Visitor::hasSession($vId)) {
            //the visitor has a session already so simply
            //take him to the sign out page
            return redirect('visitor/visit/out/'.$vId);
        } else {
            //no session so we can check he has a record
            //or not and go ahead and sign them in
            if ($visitor) {
                //visitor exists in the database
                return view('oldVisitor')->withVisitor($visitor);

            } else {
                //the visitor's details is not in the database
                //he/she is visiting for the first time,
                //so we show him the sign in page
                return view('newVisitor');
            }
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
     */
    public function signOut()
    {
        echo "Tomorrow i will sign out the user";
    }
}
