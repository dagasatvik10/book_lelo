@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="row">
            <h3 class="text-center">My Books</h3>
        </div>
        @foreach($books as $book)
            <div class="row">
                <a class="" href={{ route('show',['id' => $book->id]) }}>
                    <div class="col-sm-3">
                        @if($book->book_pics->first() != null)
							<img class="img-responsive img-thumbnail"
								 src={{ '/uploads/images/'.$book->book_pics->first()->name.'.'.$book->book_pics->first()->extension }}>
						@endif
                    </div>
                    <div class="col-sm-4">
                        <div class="row">{{ $book->name }}</div>
                        <div class="row">
							@if(!empty($book->branch_id) or $book->branch_id == '0')
								{{ $book->branch->name }}
							@endif
							@if($book->year != null)
								{{ $book->year }} year
							@endif
						</div>
					</div>
                    <div class="col-sm-3">
                        {{ $book->price }}
                    </div>
                </a>
                <div class="col-sm-2">
                    <ul style="list-style-type: none">
                        <li><a class="btn btn-link" href='{{ route('book.edit',['id' => $book->id]) }}'>Edit</a></li>
                        <li><a class="btn btn-link" href='{{ route('book.delete',['id' => $book->id]) }}'
									data-method="delete" data-token="{{csrf_token()}}" data-confirm="Are you sure?">Delete
							</a>
						</li>
                    </ul>
                </div>
            </div>
			<br>
        @endforeach
    </div>
@stop

@section('script')
<script type="text/javascript" src='{{ asset('js/laravel.js') }}'></script>
@stop