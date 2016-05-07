<?php

namespace App\Http\Controllers;

use App\Book;
use App\Http\Requests;
use Illuminate\Http\Request;
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
            $books = Book::where('user_id', '!=', Auth::user()->id)->orderBy('created_at', 'desc')->paginate(5);
        }
        else{
            $books = Book::orderBy('created_at','desc')->paginate(5);
        }
        //dd($books->first()->book_pics->first() == null);
        return view('index',compact('books'));
    }

    public function show($id)
    {
        $book = Book::find($id);
        return view('book.show',compact('book'));
    }

    public function book_sort(Request $request)
    {
        //return response()->json(['html' => $request->college]);
        if($request->college != 'none') {
            $college_id = (int)$request->college;
            //dd($college_id);
            $books = Book::whereHas('user',function($query) use($college_id) {
                $query->where('college_id',$college_id);
            })->orderBy('created_at', $request->order);
        }
        else {
            $books = Book::orderBy('created_at', $request->order);
        }

        if(Auth::check()) {
            $books = $books->where('user_id', '!=', Auth::user()->id)->paginate(3);
        }


        if($request->branch != 'none') {
            $branch_id = (int)$request->branch;
            //dd($branch_id);
            $books = $books->where('branch_id',$branch_id);
        }

        if($request->year != 'none') {
            $books = $books->where('year',$request->year);
        }

        $books = $books->paginate(3);

        $html = view('test',compact('books'))->render();
        return response()->json(['success' => true,'html' => $html]);
//        return view('index',compact('books'));
    }
}
