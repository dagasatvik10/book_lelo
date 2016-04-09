@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <h3 class="text-center">My Books</h3>
        </div>
        @foreach($books as $book)
            <div class="row">
                <a class="" href={{ route('book.show',['id' => $book->id]) }}>
                    <div class="col-sm-3">
                        <img class="img-responsive img-thumbnail" src={{ '/uploads/images/'.$book->book_pics->first()->name.
                    '.'.$book->book_pics->first()->extension }}>
                    </div>
                    <div class="col-sm-4">
                        <div class="row">{{ $book->name }}</div>
                        <div class="row">For {{ $book->branch->name." ".$book->year." year" }} </div>
                    </div>
                    <div class="col-sm-3">
                        {{ $book->price }}
                    </div>
                </a>
                <div class="col-sm-2">
                    <ul style="list-style-type: none">
                        <li><a class="btn btn-link" href={{ route('book.edit',['id' => $book->id]) }}>Edit</a></li>
                        <li><a class="btn btn-link" href={{ route('book.delete',['id' => $book->id]) }}>Delete</a></li>
                    </ul>
                </div>
            </div>
        @endforeach
    </div>
@stop