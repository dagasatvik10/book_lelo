<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use Auth;

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
    protected $redirectTo = '/';

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware($this->guestMiddleware(), ['except' => 'logout']);
    }
/*
'first_name'    => 'required|max:255|min:2',
            'last_name'     => 'required|max:255,|min:2',*/
    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {

        return Validator::make($data, [
            'name'                   => 'required|max:255|min:2',
            'email'                  => 'required|email|max:255|unique:users',
            'password'               => 'required|min:6|same:password_confirmation',
            'password_confirmation'  => 'required',
            'branch_id'              => 'required|exists:branches,id',
            'college_id'             => 'required|exists:colleges,id',
            'batch'                  => 'required',
            'contact'                => 'required|min:10|max:12',

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
            'name'          => $data['name'],
            'email'         => $data['email'],
            'password'      => bcrypt($data['password']),
            'college_id'    => $data['college_id'],
            'branch_id'     => $data['branch_id'],
            'batch'         => $data['batch'],
            'contact'       => $data['contact'],
            'details'       => 0
        ]);
    }

    public function redirect($provider = 'google')
    {
        return Socialite::with($provider)->redirect();
    }

    public function oauthlogin($provider = 'google')
    {
        $user = Socialite::with($provider)->user();
        $createduser = User::checkOrCreateUser($user);
        if(!($createduser->details)){
          return redirect()->route('auth.complete_registration',[$createduser]);
        }
        Auth::login($createduser, true);
        return redirect('/');
    }

    public function complete_registration($id){
      $user=User::find($id)->first();
      return view('auth.oauth',compact('user'));
    }

    public function complete_registration_post(Request $request){
      $user = User::where('email',$request->get('email'))->first();
      $user->update([
        'college_id' => $request->get('college_id'),
        'branch_id'  => $request->get('branch_id'),
        'contact'    => $request->get('contact'),
        'batch'      => $request->get('batch'),
        'details'    => 1,
      ]);
      Auth::login($user, true);
      return redirect('/');
    }
}
