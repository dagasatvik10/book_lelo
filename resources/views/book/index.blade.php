@extends('layouts.master')
<style>
    .myBook-holder{
        background-color: white;
        border: 1px solid #03085D;
        text-align: center;
        height: 40px;
        line-height: 40px;
    }
    .posted-book-holder{
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
    #suggested{
        display: none;
    }
</style>
<script type="text/javascript">
    function change(val)
    {
        if(val=="buy")
        {
        document.getElementById("suggested").style.display="block";
        document.getElementById("posted").style.display="none";
        }
        else
        {
        document.getElementById("suggested").style.display="none";
        document.getElementById("posted").style.display="block";
        }
    }
</script>

@section('content')
<div class="col-lg-10 col-md-10 col-sm-10 col-xs-12 col-lg-offset-1 col-md-offset-1 col-sm-offset-1 margin-auto">
        <select onchange="change(this.value)" class='textboxClass'>
            <option value="sell">Posted Books</option>
            <option value="buy">Suggested Books</option>
        </select>
        <br><br>
        <div id="posted">
            <div class="headingClass">
                <h3 class="text-center">My Books</h3>
            </div>
            <div class="panelBodyClass">
            @if(count($books)!=0)
            @foreach($books as $book)
                <a class="" href={{ route('show',['id' => $book->id]) }}>
                    <div class="posted-book-holder col-lg-12">
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
                @else
                <div class="col-lg-12">
                        <p><font class="written-data" style="font-size:16px; text-align:center; font-size:23px;">You have no Books!</font>
                        </p>
                        </div>            
                @endif
            </div>
        </div>

        <div id="suggested">
            <div class="headingClass">
                <h3 class="text-center">My Books</h3>
            </div>
            <div class="panelBodyClass">
            @if(count($suggestions)!=0)
            @foreach($suggestions as $suggestion)
                <a class="" href={{ route('show',['id' => $suggestion->id]) }}>
                    <div class="myBook-holder col-md-12 col-xs-12">
                        <div class="col-md-6 col-xs-6">
                            <div class="written-data">Name : {{ $suggestion->name }}</div>
                        </div>
                        <div class="col-md-6 col-xs-6">
                                <a class="btn submit-button" style="float: right;" href='{{ route('book.deletesuggestion',['id' => $suggestion->id]) }}'
                                   data-method="delete" data-token="{{csrf_token()}}" data-confirm="Are you sure?"><i class="fa fa-trash-o"></i> Delete
                                </a>
                        </div>
                    </div>
                </a>
                @endforeach
                @else
                <div class="col-lg-12">
                        <p><font class="written-data" style="font-size:16px; text-align:center; font-size:23px;">You have not suggested any Book!</font>
                        </p>
                        </div>            
                @endif
            </div>
        </div>
</div>
@stop

@section('script')
<script type="text/javascript" src='{{ asset('js/laravel.js') }}'></script>
@stop