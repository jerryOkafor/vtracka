<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\RegistersUsers;

use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;
    


    /**
     * Where to redirect users after login / registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
    */


    public function __construct()
    {
        $this->middleware('auth');

    }

//    public function index()
//    {
//        return view('register');
//
//        return (Auth::user()->role == 2)? view('register') : view('home');
//
//    }
    

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'phone' => 'required|max:255',
            'address' => 'required|max:255',
            'role' => 'required',
            'password' => 'required|min:6|confirmed',
           

        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        

        if($data['role'] == 'Admin'){
            $data['role'] = 2;
        }else{
           if($data['role'] == 'User'){
            $data['role'] = 1;
            }
        }

        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'phone' => $data['phone'],
            'address' => $data['address'],
            'role' => $data['role'],
            'password' => bcrypt($data['password']),
        ]);
    }
}
