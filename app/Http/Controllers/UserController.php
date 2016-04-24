<?php

namespace App\Http\Controllers;

use App\Branch;
use App\College;
use App\Http\Requests\EditProfileRequest;
use App\Http\Requests;
use App\User;
use Request;

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
        return view('user.edit');
    }

    public function update(EditProfileRequest $request)
    {
        $user = User::find(Auth::user()->id);
        $user->name = $request->name;
        $user->batch = $request->batch;
        $user->contact = $request->contact;
        $user->save();
        return redirect()->route('home');
    }

    public function show()
    {
         return view('user.show');
    }

    public function deleteconfirm()
    {
        return view('user.deleteconfirm');
    }

    public function delete()
    {
       /* $rules = array(
            'password' => 'required|min:6|same:password_confirmation'
    );

        $validator = Validator::make(Input::all(), $rules);

        if ($validator->fails()) 
        {
            return redirect()->route('user.deleteconfirm')
            ->withErrors($validator); // send back all errors to the login form
        }
        else
        {
            $user=User::find(Auth::user()->id);
            $user->delete();
            return redirect()->route('home');
        }*/
    }
}
