<?php

namespace App\Http\Controllers;

use App\Branch;
use App\College;
use App\Http\Requests\EditProfileRequest;
use App\Http\Requests;
use App\User;
use Request;
use Input;
use Hash;
use Auth;
use Validator;

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
         $validator = Validator::make(Input::all(), [
        'password' => 'required|min:6|same:password_confirmation',
        ]);
        if ($validator->fails()) 
        {
            return redirect()->route('user.deleteconfirm')
            ->withErrors($validator);
        }
        else
        {
            $user=User::find(Auth::user()->id);
            if(Hash::check(Input::get('password'), $user->password))
            {
                Auth::logout();
                $user->delete();
                return redirect()->route('home');
            }
            else
            {
                $message='Password Entered is Incorrect';
                return redirect()->route('user.deleteconfirm')
                ->withErrors($message);
            }
        }
    }
}
