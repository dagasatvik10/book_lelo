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
    public function index()
    {
        $books = Auth::user()->books;
        return view('book.show',compact('books'));
    }

    public function create()
    {
        Auth::login(User::all()->first());
        return view('book.create');
    }

    public function store(BookRequest $request)
    {
        $book = new Book;
        $book->name = $request->name;
        $book->year = $request->year;
        $book->branch_id = $request->branch;
        $book->author = $request->author;
        $book->publication = $request->publication;
        $book->publication_year = $request->publication_year;
        $book->need = 'sell';
        $book->type = $request->type;
        $book->no_of_pages = $request->no_of_pages;
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
        return $book;
    }

    public function show($id)
    {
        $book = Auth::user()->books->find($id);
        return view('book.show',compact('book'));
    }

    public function edit($id)
    {
        $book = Auth::user()->books()->find($id);
        return view('book.edit',compact('book'));
    }

    public function update($id)
    {
        $book = Auth::user()->books()->find($id);

    }

    public function delete($id)
    {

    }
}