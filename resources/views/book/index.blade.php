@extends('layouts.master')
<style>
    .myBook-holder{
        background-color: white;
        border: 1px solid #03085D;
        text-align: center;
    }
    .myBook-holder:hover{
        background-color: #f5f5f5;
    }
    .image-holder{
        margin: 10px;
        height: 160px;
        width: 120px;
    }
</style>

@section('content')
<div class="col-lg-10 col-md-10 col-sm-10 col-xs-12 col-lg-offset-1 col-md-offset-1 col-sm-offset-1 margin-auto">
        <div class="headingClass">
            <h3 class="text-center">My Books</h3>
        </div>
        <div class="panelBodyClass">
        @foreach($books as $book)
            <a class="" href={{ route('show',['id' => $book->id]) }}>
                <div class="myBook-holder col-lg-12">
                    <div class="col-lg-5 image-holder">
                        @if($book->book_pics->first() != null)
							    <img class="img-thumbnail img-slider"
								 src={{ '/uploads/images/'.$book->book_pics->first()->name.'.'.$book->book_pics->first()->extension }}>
						@endif
                    </div>
                    <div class="col-lg-5">
                        <div class="written-data">Name : {{ $book->name }}</div>
                        <div class="">
							@if(!empty($book->branch_id) or $book->branch_id == '0')
								for {{ $book->branch->name }}
							@endif
							@if($book->year != null)
								of {{ $book->year }} year
							@endif
						</div>
					</div>
                    <br><br><br>
                    <div class="col-lg-2">
                        <font style="font-size: 28px;"><i class="fa fa-inr"></i> {{ $book->price }}</font>
                    </div>
                    <div class=" col-lg-4">
                            <a class="btn btn-primary" style="float: left;" href='{{ route('book.edit',['id' => $book->id]) }}'><i class="fa fa-pencil"></i> Edit</a>
                            <a class="btn submit-button" style="float: right;" href='{{ route('book.delete',['id' => $book->id]) }}'
                               data-method="delete" data-token="{{csrf_token()}}" data-confirm="Are you sure?"><i class="fa fa-trash-o"></i> Delete
                            </a>
                    </div>
                    <div class="col-lg-12">
                    <p><font class="written-data" style="font-size:16px;"><br>{{ $book->description }}</font>
                    </p>
                    </div>

                </div>

            </a>


            @endforeach
        </div>
</div>
@stop

@section('script')
<script type="text/javascript" src='{{ asset('js/laravel.js') }}'></script>
@stop