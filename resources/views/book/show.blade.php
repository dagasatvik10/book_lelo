@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-8">
                <div class="row">
                    <div class="col-sm-4">
                        <h3>
                            {{ $book->name }}
                        </h3>
                    </div>
                    @if($book->user->id === Auth::user()->id)
                        <div class="col-sm-4"><a class="" href={{ route('book.edit',['id' => $book->id]) }}>Edit</a></div>
                        <div class="col-sm-4"><a class="" href={{ route('book.delete',['id' => $book->id]) }}>Delete</a></div>
                    @endif
                </div>
                <div class="row"><h5>Branch: {{ $book->branch->name }} &nbsp Year: {{ $book->year }}</h5></div>
                <div class="row">
                    <img class="img-responsive img-rounded" src={{ '/uploads/images/'.$book->book_pics->first()->name.
                    '.'.$book->book_pics->first()->extension }} }}>
                </div>
                <br>
                <div class="row">
                    @foreach($book->book_pics as $pic)
                        <img class="img-thumbnail img-rounded col-sm-2" src={{ '/uploads/images/'.$pic->name.
                    '.'.$pic->extension }}>
                    @endforeach
                </div>
            </div>
            <div class="col-sm-4">
                <div class="row">
                    <h3>Rs {{ $book->price }}</h3>
                </div>
                <div class="row">
                    <h3>
                        {{ $book->user->name }}
                    </h3>
                </div>
            </div>
        </div>
    </div>
@stop