@extends('layouts.master')

@section('content')
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
<style type="text/css" media="screen">
    .row{
        font-family: 'Overlock', serif;
    }
    
    body
    {
        margin: 0;
        /*font-family: 'Candara';*/
        /*font-family: "proxima-nova-soft", "Proxima Nova Soft", Helvetica, Arial, sans-serif;*/
        /*font-family: 'Tangerine', serif;*/
        font-family: 'Overlock', serif;
        /*font-family: 'Maven Pro', serif;*/
        /*font-family: 'Courgette', serif;*/
        /*font-family: 'Montserrat', serif;*/
        font-size: 18px;
        min-height: 100%;
    }
    .container
    {
        margin: 0px;
        width:100%;
        /*background-color: white;*/
        background: url("../uploads/bg-1.jpg");
        background-repeat:none;
        background-size: cover;
        /*background: -webkit-linear-gradient(top, deepskyblue, #19F39A );*/
        /*background: -o-linear-gradient(bottom, deepskyblue, #19F39A);*/
        /*background: -moz-linear-gradient(bottom, deepskyblue, #19F39A );*/
        /*background: linear-gradient(to right bottom, #03085D, deepskyblue 70%, #19F39A);*/
        position:absolute;
        top: 110px;
        padding-bottom: 15px;
    }
    .main-container{
        background:inherit;
        /*border-radius: 40px 40px 10px 10px;*/
/*        margin-top: 8px;
*/        padding-bottom: 10px;
        min-height: 350px;
/*        box-shadow: 3px 3px 3px gray,-3px 3px 3px gray;
        border:1px solid gray;
        border: 2px solid lime;
*/  }
    .margin-auto{
        margin-top:20px;
        margin-bottom: 20px;
    }
    .logo{
        float: left;
        height: 147px;
        width:147px;
        margin-left: -30px;
        z-index: 9999;
        text-align: right;
    }
    .logo2{
        float: left;
        height: 107px;
        width:107px;
        margin-left: -30px;
        z-index: 9999;
        text-align: right;
    }
    .title{
        text-align: left;
        margin-left: -60px;
        float: left;
        margin-top: 20px;
        z-index: 9999;

    }
    .title2{
        text-align: left;
        margin-left: -50px;
        float: left;
        margin-top: 5px;
        z-index: 9999;

    }
    .image-logo{
        max-height: 100%;
        max-width: 100%;
    }
    .nav-bar{
        background-color: seagreen;
        /*background: -webkit-linear-gradient(left, deepskyblue,deepskyblue, #10A787 50%);*/
        /*background: -o-linear-gradient(right, deepskyblue,deepskyblue, #10A787 50%);*/
        /*background: -moz-linear-gradient(right, deepskyblue,deepskyblue, #10A787 50%);*/
        /*background: linear-gradient(to right, deepskyblue,deepskyblue, #10A787 50%);*/
        border-radius: 0;
        border:0;
        box-sizing: border-box;
        -webkit-transition: top 0.6s;
        -moz-transition: top 0.6s;
        transition: top 0.6s;
        height: 107px;
        box-shadow: 0 4px 4px #aaa;
        }



    .book, .smiley{
        color: white; 
        font-weight: bold;
        font-size: 40px;
/*        text-transform: uppercase;
*/        text-shadow: 2px 2px 2px #aaa;
        /*font-family: 'Tangerine', serif;*/
    }
    
    .smiley{
        color:greenyellow;
    }

    .lelo{
        color: white;
/*        text-transform: uppercase;
*/        text-shadow: 2px 2px 2px #aaa;
        font-weight: bold;
        font-size: 40px;
        /*font-family: 'Tangerine', serif;*/
    }
    .search-div{
        /*width:100%;*/
        background-color: seagreen;
    }
    .search-bar{
        border: solid 2px inherit;
        font-size: 19px;
        width:100%;
        margin-left:0px;
        height:50px;
        border-radius: 5px;
        margin-top: 28px;
        color:deepskyblue;
        padding-left: 20px;
        float: left;
        transition: all 500ms ease-in-out;
        -webkit-transition: all 500ms ease-in-out;
        -moz-transition: all 500ms ease-in-out;
        -o-transition: all 500ms ease-in-out;
    }
    .search-icon{
        left:-70px;
        bottom:0px;
        margin-top: 43px;
        position:relative;
        color: seagreen;
    }
    
/*    li.dropdown-list:hover{
        background-color: lime;
        border: 1px solid green;
    }*/
    .hr{border:1px solid #03085D;}


    #list, #list:focus, #list:active, #list:before, #list:after{
        background-color: seagreen;
        transition: background-color 400ms ease-out;
        -webkit-transition: background-color 400ms ease-out;
        -moz-transition: background-color 400ms ease-out;
        -o-transition: background-color 400ms ease-out;
    }
    #list a.dropdown-toggle:hover, #list a.class-a:hover{
        background-color: inherit;
        /*border-bottom: 4px solid #DE1A1A;  !*32F0ED*!*/
        transition:background-color 400ms linear;
        -webkit-transition:background-color 400ms linear;
        -moz-transition:background-color 400ms linear;
        -o-transition:background-color 400ms linear;
        border-radius: 7px 7px 0 0;
    }
    .dropdown-menu{
        background-color: seagreen;
    }
    .dropdown-item{
        background-color: seagreen;
        padding-left:10px;
        width: 100%;
        height: 30px;
    }
    .dropdown-item:hover{
        background-color: #000;
    }
    .dropdown-item:hover .dropdown-name a{
        text-decoration: none;
    }
    .dropdown-text{
        color:white;
        font-family: 'Alegreya Sans SC', serif;
        font-size: 18px;
        font-weight: bold;
    }
    .dropdown-text:hover{
        color:greenyellow;
    }
    a.dropdown-name, .dropdown-name a{
        color: white;
        font-weight: bold;
    }
    .dropdown-name{
/*      float: left;*/
        padding-left: 8px;
        overflow: hidden;
        white-space: nowrap;
        text-overflow: ellipsis;
        width: 90%;
        height: 30px;
        line-height: 30px;
        color: deepskyblue;
        font-weight:bold;
/*      background-color: yellow;
*/  }
    .dropdown-checkbox{
        float: left;
        padding-top: 5px;
    }
    .format-glyph{
        color: white;
    }
    .glyph-btn{
        border-color: white;
        background-color: black;
    }
    .glyph-btn:hover{
        background-color: seagreen;
    }

    .threads{
        height:125px;
        overflow: hidden;
        overflow-type:ellipsis;
        padding-bottom: 10px;
    }
    .threads-holder{
        height: 800px;
        padding:10px 0px 10px 0px;
        font-family: 'Overlock', serif;
    }
    .conversation-holder{
        background-color: ;
        height: 800px;
        font-family: 'Overlock', serif;
    }

    #list{
        margin-top: -45px;
    }
    .right-nav{
        padding-top: 35px;
    }
/*  .col-lg-4 {
    width: 18.333%;
}
.col-lg-8 {
    width: 80.667%;
}*/
    .threads{
        border-bottom:1px solid black;
    }
    .threads:hover{
        background-color: #f2f2f2;
    }
</style>
    <link rel="stylesheet/css" href="{{ asset('css/bootstrap.min.css') }}">
</head>

<body>

<div class="">

<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 threads-holder">
    <?php $i=1; ?>
    
        @foreach($threads as $thread)
        <div class="col-lg-12 threads">
        <?php $class = $thread->isUnread($currentUserId) ? 'alert-info' : '';
        ?>

        <a href="{{ url('/messages/'.$thread->id) }}"target="qwerty" style="text-decoration:none;" id="{{ $thread->id }}">
        <div class="media alert {!!$class!!}">
        <h4>{{ $t[$i] }}</h4>
        <?php
        $i++;
        ?>
            <p>{!! $thread->latestMessage->body !!}</p>
            {{-- <p><small><strong>Creator:</strong> {!! $thread->creator()->name !!}</small></p>
            <p><small><strong>Participants:</strong> {!! $thread->participantsString(Auth::id()) !!}</small></p> --}}
        </div>
        </a>
        </div>
        @endforeach
</div>

<div class="col-lg-9 col-md-9 col-sm-9 col-xs-12 conversation-holder">

    <iframe id="conversation3" name="qwerty" style="width:100%;height:100%;" frameborder="0" scrolling="yes" src="{{ url('/messages/'.$threads[0]->id) }}">

    </iframe>

</div>

</div>
@endsection