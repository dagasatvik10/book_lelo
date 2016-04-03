<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use DB;
use App\User;
use Auth;
use App\Http\Requests\EditProfileRequest;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function editProfile()
    {
        $branches = DB::table('branchs')->orderBy('name')->get();
       $colleges = DB::table('colleges')->orderBy('name')->get();
        return view('user.edit_profile')->with('branches',$branches)->with('colleges',$colleges);   
    }

    public function updateProfile(EditProfileRequest $request)
    {
        $user = User::find(Auth::user()->id);
        $user->first_name = $request['first_name'];
        $user->last_name = $request['last_name'];
        $user->start_year = $request['start_year'];
        $user->end_year = $request['duration']+$request['start_year'];
        $user->address = $request['address'];
        $user->contact = $request['contact'];
        $user->save();
        return redirect('home');
    }
}
