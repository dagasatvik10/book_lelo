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
        //$file=Input::file('public/uploads/images/BookPics_1id1.jpg');
        $books = Book::orderBy('created_at','desc')->get();

        return view('index',compact('books'));
    }

    public function test()
    {

    }

}
