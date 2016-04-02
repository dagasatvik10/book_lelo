<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    use AuthenticatesAndRegistersUsers, ThrottlesLogins;

    /**
     * Where to redirect users after login / registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware($this->guestMiddleware(), ['except' => 'logout']);
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {

        return Validator::make($data, [
            'first_name'    => 'required|max:255|min:2',
            'last_name'     => 'required|max:255,|min:2',
            'email'         => 'required|email|max:255|unique:users',
            'password'      => 'required|min:6|same:password_confirmation',
            'password_confirmation' => 'required',
            'branch_id'        => 'required|exists:branchs,id',
            'college_id'       => 'required|exists:colleges,id',
            'start_year'    => 'required',
            'duration'      => 'required|in:1,2,3,4',
            'address'       => 'required|min:5|max:255',
            'contact'       => 'required|min:10|max:12',

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
        return User::create([
            'first_name'    => $data['first_name'],
            'last_name'     => $data['last_name'],
            'email'         => $data['email'],
            'password'      => bcrypt($data['password']),
            'college_id'    => $data['college_id'],
            'branch_id'     => $data['branch_id'],
            'start_year'    => $data['start_year'],
            'end_year'      => $data['start_year']+$data['duration'],
            'address'       => $data['address'],
            'contact'       => $data['contact'],
        ]);
    }
}
