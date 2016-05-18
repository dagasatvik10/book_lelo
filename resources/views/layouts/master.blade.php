<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>BookLeLow</title>
    <link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="/css/animate.min.css" />
    <link rel="stylesheet" type="text/css" href="/css/fontawesome/font-awesome.min.css" />
	<script src="/js/jquery.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Tangerine">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Overlock">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Alegreya+Sans+SC">
    {{--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>--}}
    {{--{!! HTML::script('https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js') !!}--}}


            <!--     <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"> -->
<style type="text/css">


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
        top: 150px;
        padding-bottom: 0px;
	}
	.main-container{
		background-color: #f2f2f2;
        /*border-radius: 40px 40px 10px 10px;*/
        margin-top: 8px;
        padding-bottom: 10px;
        box-shadow: 3px 3px 3px gray,-3px 3px 3px gray;
        border:1px solid gray;
/*		border: 2px solid lime;
*/	}
    .margin-auto{
        margin-top:20px;
        margin-bottom: 20px;
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
		height: 147px;
        box-shadow: 0 4px 4px #aaa;
        }



    .book, .smiley{
        color: white;
        font-weight: bold;
        font-size: 40px;
        text-transform: uppercase;
        text-shadow: 2px 2px 2px #aaa;
        /*font-family: 'Tangerine', serif;*/
    }
    
    .smiley{
        display: none;
    }

    .lelo{
        color: white;
        text-transform: uppercase;
        text-shadow: 2px 2px 2px #aaa;
        font-weight: bold;
        font-size: 40px;
        /*font-family: 'Tangerine', serif;*/
    }

	.title{
		float: left;
	}
	.smiley-rotate{
		float: right;
		padding-left: 0;
		transform:rotate(0deg);
		-webkit-transform:rotate(0deg);
		-moz-transform:rotate(0deg);
		-o-transform:rotate(0deg);
		transition:all 400ms ease-in;
		-webkit-transition:all 400ms ease-in;
		-moz-transition:all 400ms ease-in;
		-o-transition:all 400ms ease-in;
	}
	.smiley-rotate:hover, .smiley:hover{
		transform:rotate(90deg);
		-webkit-transform:rotate(90deg);
		-moz-transform:rotate(90deg);
		-o-transform:rotate(90deg);
		padding-left: 5px;
		transition:all 400ms ease-in;
		-webkit-transition:all 400ms ease-in;
		-moz-transition:all 400ms ease-in;
		-o-transition:all 400ms ease-in;
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
		float: left;
		padding-left: 8px;
		overflow: hidden;
		white-space: nowrap;
		text-overflow: ellipsis;
		width: 90%;
        height: 30px;
        line-height: 30px;
        color: deepskyblue;
        font-weight:bold;
/*		background-color: yellow;
*/	}
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
	#mdl-head{
        background-color: greenyellow;
        color:white;
        text-shadow: 2px 2px 3px black,-2px 2px 3px black;
        font-weight: bold;
        border-bottom: solid 1px #3a5795;
    }

    .search-div{
        /*width:100%;*/
        background-color: inherit;
        height: 80px;
        z-index: 9999;
    }
    .search-bar{
        border: solid 2px inherit;
        font-size: 19px;
        width:98%;
        height:50px;
        border-radius: 5px;
        margin-top: 13px;
        color:deepskyblue;
        padding-left: 20px;
        transition: all 500ms ease-in-out;
        -webkit-transition: all 500ms ease-in-out;
        -moz-transition: all 500ms ease-in-out;
        -o-transition: all 500ms ease-in-out;
    }
    .search-bar:focus {
        /*box-shadow: 2px 0px 2px #FF9900,-2px 0px 2px #FF9900,0px 2px 2px #FF9900,0px -2px 2px #FF9900	;*/
        transition: all 500ms ease-in-out;
        -webkit-transition: all 500ms ease-in-out;
        -moz-transition: all 500ms ease-in-out;
        -o-transition: all 500ms ease-in-out;
    }
    .search-icon{
        left:-80px;
        bottom:0px;
        margin-top: 28px;
        position:relative;
        color: seagreen;

    }
	.headingClass
    {
        background-color:inherit; /*#9EA4DE;*/
        color: darkblue;
        border:solid 1px darkblue;
        font-weight:bold;
        font-size: 20px;
        border-bottom: none;
        text-align: center;
        border-radius: 3px 3px 0 0;
        height:50px;
        line-height: 50px;
    }

    .panelBodyClass
    {
        border:  solid 1px darkblue;
        border-radius: 0 0 3px 3px;
        background-color: inherit;
        /*background: -webkit-linear-gradient(top, #9EA4DE , #FFF);*/
        /*background: -o-linear-gradient(bottom, #9EA4DE, #FFF);*/
        /*background: -moz-linear-gradient(bottom, #9EA4DE, #FFF);*/
        /*background: linear-gradient(to bottom, #9EA4DE, #FFF);*/
        border-top:none;
        height: 100%;
    }
    .labelClass
    {
        color: #03085D;
        margin-left: 30px;
    }
    .textboxClass{
        border-color: #03085D;
        border-radius: 5px;
        color:#03085D;
        width:80%;
        margin-left: 30px;

    }
    .textboxClassSort{
        border-radius: 5px;
        border:2px solid #03085D;
        color:#3a5795;
        font-weight: bold;
        width:100%;
    }
    .textboxClass:focus{
        box-shadow: 2px 0px 4px #03085D,-2px 0px 4px #03085D,0px 2px 4px #03085D,0px -2px 4px #03085D	;
    }
    .textboxClassSort:focus{

    }
    .requiredClass{
        color: blue;
    }
    .submit-button{
        background: #03085D;
        /*background: -webkit-linear-gradient(top, #32F0ED, #D9F7F6, #32F0ED);*/
        /*background: -o-linear-gradient(bottom, #32F0ED, #D9F7F6, #32F0ED);*/
        /*background: -moz-linear-gradient(bottom, #32F0ED, #D9F7F6, #32F0ED);*/
        /*background: linear-gradient(to bottom, #32F0ED, #D9F7F6, #32F0ED);*/
        color: deepskyblue;
    }
    .submit-button:hover{
        color:white;
    }
    .forgot
    {
        color: darkblue;
        font-size: 15px;
    }
    .forgot:hover
    {
        color: #03085D  ;
    }
    .written-data{
        color: ;
    }
    .white-data{
        color:white;
    }
    .written-data-headings{
        color: black;
        font-weight: bold;
    }

    .post-ad-button {
        color: white;
        height:60px;
        width:100%;
        background: darkblue; /*#3a5795;*/
        /*background: -webkit-linear-gradient(top, #32F0ED, #D9F7F6, #32F0ED);*/
        /*background: -o-linear-gradient(bottom, #32F0ED, #D9F7F6, #32F0ED);*/
        /*background: -moz-linear-gradient(bottom, #32F0ED, #D9F7F6, #32F0ED);*/
        /*background: linear-gradient(to bottom, #32F0ED, #D9F7F6, #32F0ED);*/
        display: inline-block;
        margin-top: 0px;
        font-size: 19px;
        line-height: 54px;
        font-weight: bold;
        text-align: center;
/*        text-shadow: 2px 2px 2px black;
*/        cursor: pointer;
        border: 1px solid darkblue;
        transition: all 400ms ease-in-out;
        -webkit-transition: all 400ms ease-in-out;
        -moz-transition: all 400ms ease-in-out;
        -o-transition: all 400ms ease-in-out;
    }
    .post-ad-button:hover{
        background: white;
        /*background: -webkit-linear-gradient(top, #03085D, dodgerblue);*/
        /*background: -o-linear-gradient(bottom, #03085D, dodgerblue);*/
        /*background: -moz-linear-gradient(bottom, #03085D, dodgerblue);*/
        /*background: linear-gradient(to bottom, #03085D, dodgerblue);*/
        /*text-shadow: 2px 2px 2px black,-2px -2px 2px black;*/
        color: black;
        border: 1px solid #03085D;
        transition: all 400ms ease-in-out;
        -webkit-transition: all 400ms ease-in-out;
        -moz-transition: all 400ms ease-in-out;
        -o-transition: all 400ms ease-in-out;
    }

	.requiredId{
		color: #34459e;
	}


    .img-slider{
        max-width: 100%;
        max-height: 96%;
        box-shadow: 2px 0px 5px gray, 0px 2px 3px gray, -2px 0px 3px gray, 0px -2px 3px gray;
    }

    footer{
        color:white;
        font-weight: bold;
        height:200px;
        margin-top: 20px;
        /*background-color: #333333;*/
        background: url("/uploads/gray.jpg");
        width: 100%;
        text-align: left;
    }
    .recommend-books-holder{
        background-color: black;
        min-height: 60px;
        line-height: 60px;
    }
    .recommend-books{
        width: 100%;
        height:30px;
        margin-top:15px;
        color: deepskyblue;
        margin-bottom: 15px;
        border-radius: 4px;
        padding-left: 10px;
    }
    footer .footnote-left ul{
        list-style: none;
    }
    footer .footnote-left ul li{
        border-left:3px solid white;
        padding-left: 12px;
        height: 50px;
        line-height: 50px;
    }
    footer .footnote-left ul li a{
        text-decoration: none;
        color:white;
    }
    footer .footnote-left ul li a:hover{
        color: seagreen;
        cursor: pointer;
    }
    #full{
        width: 100%;
        padding: 0;
        margin: 0;
    }
</style>
</head>
<body>

<header class="navbar nav-bar navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle glyph-btn" data-toggle="collapse" data-target="#Navbar">
         <i class="fa fa-caret-down format-glyph"></i>
      </button>
      <a class="navbar-brand" href="{{ url('/') }}">
      	<div class="title">
            <font class="book">Book </font><font class="lelo">LeLow </font>
            <div class="smiley-rotate"><font class="smiley">&nbsp;:)</font></div>
        </div>
      </a>
        <br>

    </div>
    <br><br>
      
    <div class="collapse navbar-collapse" id="Navbar">

      <ul class="nav navbar-nav">

          {{--<li class="dropdown dropdown-list" id="list">--}}
              {{--<a class="dropdown-toggle" data-toggle="dropdown" href="#">--}}
                  {{--<font class="dropdown-text">Branch<span class="caret"></span></a></font>--}}

              {{--<ul class="dropdown-menu">--}}
                  {{--<!-- APPLY NESTED LOOP HERE FOR DATA -->--}}
                  {{--@foreach(App\Branch::all()->take(6) as $branch)--}}
                      {{--<li>--}}
                          {{--<div class="dropdown-item">--}}
                              {{--<div class="dropdown-checkbox"><input type="checkbox" value="{{ $branch->id }}"/></div>--}}
                              {{--<div class="dropdown-name">--}}
                                  {{--<a href="#" data-toggle="popover" data-trigger="hover" data-content="{{ $branch['name'] }}" data-placement="bottom">{{ $branch['name'] }}</a>--}}
                              {{--</div>--}}
                          {{--</div>--}}
                      {{--</li>--}}
                      {{--@endforeach--}}
                              {{--<!--END NESTED LOOP HERE FOR DATA -->--}}
                      {{--<hr style="width:100%;">--}}
                      {{--<li>--}}
                          {{--<div class="dropdown-item">--}}
                              {{--<div class="dropdown-name"> <a href="#" data-toggle="modal" data-target="#dropdownBranchModal">View More...</a></div>--}}
                          {{--</div>--}}
                      {{--</li>--}}

              {{--</ul>--}}
          {{--</li>--}}


          {{--<li class="dropdown dropdown-list" id="list">--}}
              {{--<a class="dropdown-toggle" data-toggle="dropdown" href="#">--}}
                  {{--<font class="dropdown-text">Year<span class="caret"></span></font>--}}
              {{--</a>--}}
              {{--<ul class="dropdown-menu">--}}
                  {{--<!-- APPLY NESTED LOOP HERE FOR DATA -->--}}
                  {{--<li>--}}
                      {{--<div class="dropdown-item">--}}
                          {{--<div class="dropdown-checkbox"><input type="checkbox"/></div>--}}
                          {{--<div class="dropdown-name">1st Year</div>--}}
                      {{--</div>--}}
                      {{--<div class="dropdown-item">--}}
                          {{--<div class="dropdown-checkbox"><input type="checkbox"/></div>--}}
                          {{--<div class="dropdown-name">2nd Year</div>--}}
                      {{--</div>--}}
                      {{--<div class="dropdown-item">--}}
                          {{--<div class="dropdown-checkbox"><input type="checkbox"/></div>--}}
                          {{--<div class="dropdown-name">3rd Year</div>--}}
                      {{--</div>--}}
                      {{--<div class="dropdown-item">--}}
                          {{--<div class="dropdown-checkbox"><input type="checkbox"/></div>--}}
                          {{--<div class="dropdown-name">4th Year</div>--}}
                      {{--</div>--}}
                  {{--</li>--}}
              {{--</ul>--}}
          {{--</li>--}}

          {{--<li class="dropdown dropdown-list" id="list">--}}
              {{--<a class="dropdown-toggle" data-toggle="dropdown" href="#">--}}
                  {{--<font class="dropdown-text">College<span class="caret"></span></font>--}}
              {{--</a>--}}
              {{--<ul class="dropdown-menu">--}}
                  {{--@foreach(App\College::all()->take(6) as $college)--}}
                      {{--<li>--}}
                          {{--<div class="dropdown-item">--}}
                              {{--<div class="dropdown-checkbox"><input type="checkbox" value="{{ $college->id }}"/></div>--}}
                              {{--<div class="dropdown-name">--}}
                                  {{--<a href="#" data-toggle="popover" data-trigger="hover" data-content="{{ $college['name'] }}" data-placement="bottom">{{ $college['name'] }}</a>--}}
                              {{--</div>--}}
                          {{--</div>--}}
                      {{--</li>--}}
                  {{--@endforeach--}}
                  {{--<hr style="width:100%;">--}}
                  {{--<li>--}}
                      {{--<div class="dropdown-item">--}}
                          {{--<div class="dropdown-name"> <a href="#" data-toggle="modal" data-target="#dropdownCollegeModal">View More...</a></div>--}}
                      {{--</div>--}}
                  {{--</li>--}}
              {{--</ul>--}}
          {{--</li>--}}
      </ul>
        <div class="search-div col-lg-8 col-md-8 col-sm-8 col-xs-12">
            <form action="{{ url('/search') }}" method="post">
                {!! csrf_field() !!}
                <div class="col-md-11 col-xs-11 col-lg-11 col-sm-11"><input type="text" name="search" class="search-bar" placeholder="Search Books, Authors and Publication Here!"/></div>
                <div class="col-md-1 col-xs-1 col-lg-1 col-sm-1"><i class="fa fa-search search-icon"></i> </div>
                <br>
            </form>

        </div>
        <ul class="nav navbar-nav navbar-right">

            <li id="list"><a class="class-a" href="{{ url('/') }}"><font class="dropdown-text"><i class="fa fa-home"></i> Home</font></a></li>
@if(Auth::guest())
        <li id="list"><a class="class-a" href="{{ url('/register') }}"><font class="dropdown-text"><i class="fa fa-user"></i>  Sign Up</font></a></li>
        <li id="list" style="padding-right:125px;"><a class="class-a" href="#" data-toggle="modal" data-target="#loginModal " ><font class="dropdown-text"><i class="fa fa-sign-in"></i>  Login</font></a></li>
@else   
        <li  id="list" class="dropdown dropdown-list" style="margin-right:100px;">

                <a href="#" class="dropdown-toggle" data-toggle="dropdown" style="text-decoration:none;padding-right:10px;">
                    <font style="color:greenyellow; margin-top: -16px;"> Welcome,</font>
                    <font class="dropdown-text">
                    {{ Auth::user()->name}} <b class="caret"></b></font>
                </a>
                <ul class="dropdown-menu">
                    <li>
                        <div class="dropdown-item" >
                            <div class="dropdown-name">
                                <a href="{{url('/user')}}"><i class="fa fa-fw fa-user"></i> My Profile</a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="dropdown-item" >
                            <div class="dropdown-name">
                                <a href="{{url('/user/book')}}"><i class="fa fa-book fa-fw"></i> My Ads</a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="dropdown-item" >
                            <div class="dropdown-name">
                                <a href="{{url('/messages')}}"><i class="fa fa-envelope-o fa-fw"></i>&nbsp; </i> Inbox</a>
                            </div>
                        </div>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <div class="dropdown-item" >
                            <div class="dropdown-name">
                                <a href="{{ url('/logout') }}"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                            </div>
                        </div>
                    </li>
                </ul>
        </li>
@endif
        </ul>
    </div>
  </div>
</header>


{{--START LOGIN MODAL--}}

<div class="modal fade" id="loginModal" role="dialog">
        <div class="modal-dialog">
            <div class="panel panel-default modal-content">
                <div class="panel-heading modal-header" id="mdl-head">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    Login
                </div>
                <div class="panel-body modal-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                        {!! csrf_field() !!}
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label labelClass">E-Mail Address</label>

                            <div class="col-md-6">
                                <input type="email" class="form-control textboxClass" name="email" value="{{ old('email') }}">

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong class="requiredClass"><span class="glyphicon glyphicon-exclamation-sign"></span>&nbsp;{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label labelClass">Password</label>

                            <div class="col-md-6">
                                <input type="password" class="form-control textboxClass" name="password">

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong class="requiredClass"><span class="glyphicon glyphicon-exclamation-sign"></span>&nbsp;&nbsp;&nbsp;{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label class="labelClass">
                                        <input type="checkbox" name="remember"> Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn submit-button">
                                    <i class="fa fa-btn fa-sign-in"></i> Login
                                </button>

                                <a class="forgot" href="{{ url('/password/reset') }}">Forgot Your Password?</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    {{--END LOGIN MODAL--}}

    {{--START DROPDOWN (Branch) VIEW MORE MODAL--}}

    <div class="modal fade" id="dropdownBranchModal" role="dialog">
        <div class="modal-dialog">
        <br>
            <div class="panel panel-default modal-content">
                <div class="panel-heading modal-header" id="mdl-head">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <!-- heading from database --> Select Branch
                </div>
                <div class="panel-body modal-body">
                    <select class="form-control textboxClass">
                        <option>Select <!-- name from database --></option>
                        <!-- loop here -->
                        @foreach(App\Branch::all() as $branch)
                            <option>{{ $branch->name }}</option>
                        @endforeach
                        <!-- end loop here -->
                    </select>
                </div>
            </div>
        </div>
    </div>

    {{--END DROPDOWN (Branch) VIEW MORE MODAL--}} 
    {{--START DROPDOWN (College) VIEW MORE MODAL--}}

    <div class="modal " id="dropdownCollegeModal" role="dialog">
        <div class="modal-dialog">
        <br>
            <div class="panel panel-default modal-content">
                <div class="panel-heading modal-header" id="mdl-head">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <!-- heading from database --> Select College
                </div>
                <div class="panel-body modal-body">
                    <select class="form-control textboxClass">
                        <option>Select <!-- name from database --></option>
                        <!-- loop here -->
                        @foreach(App\College::all() as $college)
                            <option>{{ $college['name'] }}</option>
                        @endforeach
                        <!-- end loop here -->
                    </select>
                </div>
            </div>
        </div>
    </div>

    {{--END DROPDOWN (College) VIEW MORE MODAL--}} 


<div class="container container-fluid" id="full">
	{{--<div class="col-lg-10 col-md-10 col-sm-10 col-xs-12 col-lg-offset-1 col-md-offset-1 col-sm-offset-1 main-container">--}}
            @yield('content')
    {{--</div>--}}

    <footer class="col-md-12 col-md-12 col-sm-12 col-xs-12 animated fadeInLeft" id="full">
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 footnote-left margin-auto">
                <ul>
                    <li><a> Yahooo 1</a></li>
                    <li><a> Yahooo 2</a></li>
                </ul>
        </div>

        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 footnote-right margin-auto">

        </div>
    </footer>
</div>

<script>
	$(document).ready( function()
	{
		$('[data-toggle="popover"]').popover();
		// $('#loginModal').modal();
		sortBooksList();
	});
</script>
@yield('script')
</body>
</html>
@if($errors->any())
<script type="text/javascript">
$(document).ready(function(){
    $("#loginModal").modal('show');
});
</script>
@endif