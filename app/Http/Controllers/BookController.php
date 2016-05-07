<?php

namespace App\Http\Controllers;

use App\Book;
use App\Book_pic;
use App\Http\Requests\BookRequest;
use App\User;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;

class BookController extends Controller
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

    public function index()
    {
        $books = Auth::user()->books;
        return view('book.index',compact('books'));
    }

    public function create()
    {
        return view('book.create');
    }

    public function store(BookRequest $request)
    {
        $book = new Book;
        $book->name = $request->name;
        $book->year = $request->year == 'none'?null:$request->year;
        $book->branch_id = $request->branch=='none'?null:$request->branch;
        $book->type = $request->type;
        $book->need = 'sell';
        if($book->type == 'books') {
            $book->author = $request->author;
            $book->publication = $request->publication;
            $book->publication_year = $request->publication_year;
        }
        else {
            $book->no_of_pages = $request->no_of_pages;
        }
        $book->description = $request->description;
        $book->price = $request->price;
        $book->user()->associate(Auth::user());
        $book->save();
        for($i=1,$j = 1;$i<=6;$i++)
        {
            if($request->hasFile('pic'.$i))
            {
                $destinationFolder = 'uploads/images';
                $name = 'BookPics_'.$book->id.'id'.$j;
                $j++;
                $extension = $request->file('pic'.$i)->getClientOriginalExtension();
                $original_name = $request->file('pic'.$i)->getClientOriginalName();
                $mime = $request->file('pic'.$i)->getClientMimeType();
                $size = $request->file('pic'.$i)->getClientSize();
                $request->file('pic'.$i)->move($destinationFolder,$name.'.'.$extension);
                $pic = new Book_pic;
                $pic->name = $name;
                $pic->size = $size;
                $pic->original_name = $original_name;
                $pic->extension = $extension;
                $pic->mime = $mime;
                $pic->book()->associate($book);
                $pic->save();
            }
        }

        return redirect()->route('home');
    }

    /*public function show($id)
    {
        $book = Auth::user()->books->find($id);
        return view('book.show',compact('book'));
    }*/

    public function edit($id)
    {
        $book = Auth::user()->books()->find($id);
        return view('book.edit',compact('book'));
    }

    public function update($id,BookRequest $request)
    {
        $book = Auth::user()->books()->find($id);
        $book->name = $request->name;
        $book->year = $request->year == 'none'?null:$request->year;
        $book->branch_id = $request->branch=='none'?null:$request->branch;
        $book->author = $request->author;
        $book->publication = $request->publication;
        $book->publication_year = $request->publication_year;
        $book->need = 'sell';
        $book->type = $request->type;
        $book->no_of_pages = $request->no_of_pages;
        $book->description = $request->description;
        $book->price = $request->price;
        $book->save();

        return redirect()->route('book.index');
    }

    public function delete($id)
    {
        $book = Auth::user()->books->find($id);
        $book->delete();

        return redirect()->route('book.index');
    }
}
