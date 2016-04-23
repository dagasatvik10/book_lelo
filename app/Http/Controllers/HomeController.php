<?php

namespace App\Http\Controllers;

use App\Book;
use App\Branch;
use App\College;
use App\Http\Requests;
use App\User;
use App\Http\Requests\EditProfileRequest;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Auth::check()) {
            $books = Book::where('user_id', '!=', Auth::user()->id)->orderBy('created_at', 'desc')->get();
        }
        else{
            $books = Book::orderBy('created_at','desc')->get();
        }
        return view('home',compact('books'));
    }

    public function show($id)
    {
        $book = Book::find($id);
        return view('book.show',compact('book'));
    }
}
