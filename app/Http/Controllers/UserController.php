<?php

namespace App\Http\Controllers;

use App\Branch;
use App\College;
use App\Http\Requests\EditProfileRequest;
use App\Http\Requests;
use App\User;

class UserController extends Controller
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

    public function edit()
    {
        $branches = Branch::all();
        $colleges = College::all();
        return view('user.edit')->with('branches',$branches)->with('colleges',$colleges);
    }

    public function update(EditProfileRequest $request)
    {
        $user = User::find(Auth::user()->id);
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->start_year = $request->start_year;
        $user->end_year = $request->duration + $request->start_year;
        $user->address = $request->address;
        $user->contact = $request->contact;
        $user->save();
        return redirect()->route('home');
    }
}
