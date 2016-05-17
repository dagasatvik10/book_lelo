<?php

namespace App\Http\Controllers;

use App\Book;
use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Request as RequestFacade;

class HomeController extends Controller
{
    public function index($search = null)
    {
        $books = Book::orderBy('created_at', RequestFacade::input('order'))
            ->branchSort(RequestFacade::input('branch'))
            ->collegeSort(RequestFacade::input('college'))
            ->yearSort(RequestFacade::input('year'))
            ->authUserSort();

        if($search != null) {
            $books = $books->search($search, null, true);
        }

        $books = $books->paginate(1);

        if (RequestFacade::ajax()) {
            $html = view('test',compact('books'))->render();
            return response()->json(['success' => $books,'html' => $html]);
        }

        return view('index',compact('books'));
    }

    public function show($id)
    {
        $book = Book::find($id);
        return view('book.show',compact('book'));
    }

    /*public function book_sort(Request $request)
    {
        $books = Book::orderBy('created_at',$request->order)
            ->branchSort($request->branch)
            ->collegeSort($request->college)
            ->yearSort($request->year)
            ->authUserSort();

        if($request->college != 'none') {
            $college_id = (int)$request->college;
            //dd($college_id);
            $books = $books->whereHas('user',function($query) use($college_id) {
                $query->where('college_id',$college_id);
            });
        }

        if(Auth::check()) {
            $books = $books->where('user_id', '!=', Auth::user()->id);
        }

        if($request->branch != 'none') {
            //foreach($request->input('branch') as $branch_id){
            $books = $books->branchSort($request->branch);
        }

        if($request->year != 'none') {
            $books = $books->where('year',$request->year);
        }

        $books = $books->paginate(1);

        if ($request->ajax()) {
            $html = view('test',compact('books'))->render();
            return response()->json(['success' => $books,'html' => $html]);
        }

        //$html = view('test',compact('books'))->render();
        //return response()->json(['success' => $books,'html' => $html]);
        //return redirect('/');
        return view('index',compact('books'));
    }*/

    public function search(Request $request)
    {
        $search = $request->input('search');
        //$books = Book::search($query, null, true)->paginate(1);

        //return view('index',compact('books'));
        return redirect()->route('home',['search' => $search]);
    }

}
