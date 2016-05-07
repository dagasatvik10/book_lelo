@extends('layouts.master')
<style type="text/css">
    .slider{
        height:350px;
        /*border: 2px solid limegreen;
        border-radius: 5px;
        background-color: lightgreen;*/
    }
    .slider-images{
        height:350px;
        width: 100%;
        float: left;
        padding-top: 1%;
    }
    .img-slider{
        max-width: 100%;
        max-height: 96%;
        box-shadow: 2px 0px 5px gray, 0px 2px 3px gray, -2px 0px 3px gray, 0px -2px 3px gray;
    }
    .main-img{
        height:345px;
        width: 100%;
    }
    .second-main-img{
/*        margin-top: -22px;
*/        height:345px;
        width: 100%;
    }
    .left{
        color:white;
        opacity:0.8;
        float: left;
        width: 4%;
        height: 350px;
    }
    .right{
        color:white;
        opacity:0.8;
        float: right;
        width: 4%;
        height: 350px;
    }
    .btn-chevron{
        width: 98%;
        height:40px;
        margin-top: 155px;
        background-color: white;
        border: 3px solid limegreen;
        margin-right: 1%;
    }
    .fglyph{
        color:black;
    }
    .thumbnails{
        margin-top: 18px;
        margin-bottom: 18px;
        background-color: white;
/*        border: 1px solid limegreen;
*/        border-radius: 4px;
    }
    .thumbs{
        height:140px;
        background-color:;
        border-radius: 5px;
        border:1px solid transparent;
        float: left;
        margin-top: 10px;
    }
    .white-shadow:hover{
        cursor: pointer;
    }
    .white-shadow{
        margin-top:5%;
        height: 90%;
        width: 90%;
    }
    .img-hidden{
        display: none;
    }
    .data-book{
        /*border: 2px solid limegreen;
        border-radius: 5px;
        background-color: white;*/
        margin-top: 21px;
        overflow: hidden;
    }
    .heads{
        color:#DE1A1A;
        font-weight: bold;
        font-size: 24px;
    }
    .tale{
        color:#DE1A1A;
        font-weight: bold;
        font-size: 33px;
        text-shadow:1px 1px 1px black;
    }
</style>
<script type="text/javascript">

    function showImg(imgid)
    {
        // alert(imgid);
        document.getElementById("main").style.display="none";
        var e=parseInt(imgid+6);
        // alert(e);
        for(i=1; i<6; i++)
        {
            var f=parseInt(i+6);
            document.getElementById(e).style.display="block";
            document.getElementById(f).style.display="none";                
        }
    }
</script>
@section('content')
<div style="margin-top: auto;">
            <div>
            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                <br>
                <div align="center" class="slider">
                    
                   <!--  <div align="center" class="left">
                        <button class="btn btn-chevron"><span class="fglyph glyphicon glyphicon-chevron-left"></button>
                    </div> -->

                    <div align="center" class="slider-images">
                        @if($book->book_pics->first() != null)
                            <div id="main" class="main-img"><img class="img-rounded img-responsive img-thumbnail img-slider" src={{ '/uploads/images/'.$book->book_pics->first()->name.'.'.$book->book_pics->first()->extension }} }}></div>
                        @endif
                        <?php $ids=7; ?>
                        @foreach($book->book_pics as $pic)
                            <div id="{{$ids}}" class="img-hidden second-main-img"><img class="img-thumbnail img-resposive img-rounded img-slider" src={{ '/uploads/images/'.$pic->name.'.'.$pic->extension }}></div>
                        <?php $ids++; ?>
                        @endforeach
                    </div>

                    <!-- <div align="center" class="right">
                        <button class="btn btn-chevron"><span class="fglyph glyphicon glyphicon-chevron-right"></button>
                    </div> -->
                </div>
            </div>

            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 data-book">
                    <div style="box-shadow:0px 2px 0px #DE1A1A;" >
                        <font class="tale">{{ $book->name }}</font>                    
                        @if(Auth::check())
                            @if($book->user->id === Auth::user()->id)
                                <!-- <div class="col-sm-4"> --><a class="" href={{ route('book.edit',['id' => $book->id]) }}>Edit</a><!-- </div> -->
                                <!-- <div class="col-sm-4"> --><a class="" href={{ route('book.delete',['id' => $book->id]) }}>Delete</a><!-- </div> -->
                            @endif 
                        @endif
                        <font class="written-data" style="font-size:22px;"><br>By {{ $book->author }}<br><br></font>
                    </div>    
                        @if(!empty($book->branch_id) or $book->branch_id == '0')
                                <br>    <font class="written-data" style="font-size:18px;">A Book for {{ $book->branch->name }}</font>
                            @endif
                            @if($book->year != null)
                                <font class="written-data" style="font-size:18px;"><br>For Year{{ $book->year }}</font>
                        @endif
                        <font class="written-data" style="font-size:22px;"><br><font class="heads">Seller :</font> {{ $book->user->name }}</font>
                        <font class="written-data" style="font-size:22px;"><br><font class="heads">Publication :</font> {{ $book->publication }}</font>
                        <font class="written-data" style="font-size:22px;"><br><font class="heads">Publication Year :</font> {{ $book->publication_year }}</font>
                        <font class="written-data" style="font-size:29px;"><br>Rs {{ $book->price }}/-</font>
                        <p><font class="written-data" style="font-size:16px;"><br>{{ $book->description }}</font>
                        </p>                      
                </div>
            </div>
            </div>
            <hr>

            <div align="center" class="col-lg-8 col-md-8 col-sm-8 col-xs-12 thumbnails">
                <?php $idt=1;?>
                @foreach($book->book_pics as $pic)
                <div class="thumbs">
                    <div id="{{$idt}}" onclick="showImg({{$idt}})" class="white-shadow">
                        <img class="img-thumbnail img-rounded img-slider" src={{ '/uploads/images/'.$pic->name.'.'.$pic->extension }}>
                    </div>
                </div>
                <?php $idt++; ?>
                @endforeach
            </div>

{{--
            <div class="col-lg-8 col-sm-8">
                    <div class="row">
                        <div class="col-sm-4">
                            <font class="written-data-headings">Name:</font> <font class="written-data">{{ $book->name }}</font>
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
            </div>
            <div class="col-lg-4 col-sm-4">
                <div class="row">
                    <h3>Rs {{ $book->price }}</h3>
                </div>
                <div class="row">
                    <h3>
                        {{ $book->user->name }}
                    </h3>
                    @if(Auth::check())
                    <form action="{{url('/messages/create')}}" role="form" method="POST">
                    {!! csrf_field() !!}
                    <input type="hidden" name="seller" value="{{ $book->user->id }}">
                    <input type="submit" value="Send Message">
                    </form>
                    @endif
                </div>
            </div>


	<div  style="background-color:red;" class="col-lg-10 col-md-10 col-sm-10 col-xs-10 col-lg-offset-1 col-md-offset-1 col-sm-offset-1">
                    <div>
                    @if($book->book_pics->first() != null)
                    <img class="img-responsive img-rounded" src={{ '/uploads/images/'.$book->book_pics->first()->name.'.'.$book->book_pics->first()->extension }} }}>
                    @endif
                    </div>
    </div>
    <div class="row col-sm-6">
                    @foreach($book->book_pics as $pic)
                        <img class="img-thumbnail img-rounded col-sm-2" src={{ '/uploads/images/'.$pic->name.'.'.$pic->extension }}>
                    @endforeach
    </div> --}}

    
</div>
@stop
    