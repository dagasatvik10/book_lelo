@extends('layouts.master')

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
					@if(Auth::check())
                    @if($book->user->id === Auth::user()->id)
                        <div class="col-sm-4"><a class="" href={{ route('book.edit',['id' => $book->id]) }}>Edit</a></div>
                        <div class="col-sm-4"><a class="" href={{ route('book.delete',['id' => $book->id]) }}>Delete</a></div>
                    @endif
					@endif
                </div>
                <div class="row">
					<h5>
						@if(!empty($book->branch_id) or $book->branch_id == '0')
							Branch: {{ $book->branch->name }}
						@endif
						@if($book->year != null)
							&nbsp Year: {{ $book->year }}
						@endif
					</h5>
				</div>
                <div class="row">
					@if($book->book_pics->first() != null)
                    <img class="img-responsive img-rounded" src={{ '/uploads/images/'.$book->book_pics->first()->name.
                    '.'.$book->book_pics->first()->extension }} }}>
					@endif
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