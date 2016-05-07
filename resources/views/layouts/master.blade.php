<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>BookLeLow</title>
	<link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css" />
	<script src='{{ asset("js/jquery.min.js") }}''></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	{{--<link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">--}}
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<style type="text/css">
	
	body
	{
		margin: 0;
		font-family: 'Candara';
		font-size: 16px;
	}
	.container
	{
		margin: 0px;
		height:1000px; 
		width:100%;
		background-color: #f6f6f6;
		position:absolute; 
		top:75px;
	}
	.main-container{
		width:100%;
		background-color: #CEECF5;
		height: 100%;
		border-left: solid 2px dodgerblue;
		border-right: solid 2px dodgerblue;
	}
	.nav-bar{
		background-color: black;
		border-radius: 0;
		border:0;
/*		height: 75px;*/		
		box-shadow: 0 4px 4px gray;
	}

	.book{
		color: white;
		font-size: 25px;
	}
	.smiley{
		color: white;
		font-size: 25px;
	}

	.lelo{
		color: dodgerblue;
		font-size: 25px;
	}
	.title{
		float: left;
	}
	.smiley-rotate{
		float: left;
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
	.dropdown-item{
/*		background-color: blue;
*/		padding-left:10px;
		width: 100%;
		height: 30px;
	}
	.dropdown-item:hover{
		background-color: #e2e2e2;
		}
	.dropdown-item:hover .dropdown-name a{
		text-decoration: none;
	}
	.dropdown-text{
		color:dodgerblue;
	}
	.dropdown-text:hover{
		color:white;
	}
	.dropdown-name{
		float: left;
		padding-left: 8px;
		overflow: hidden;
		white-space: nowrap;
		text-overflow: ellipsis;
		width: 90%;
/*		background-color: yellow;
*/	}
	.dropdown-checkbox{
		float: left;
/*		background-color: green;
*/	}
	.format-glyph{
		color: white;
	}
	.glyph-btn{
		border-color: white;
		background-color: black;
	}
	.glyph-btn:hover{
		background-color: green;
	}
	#mdl-head{
		background-color: dodgerblue;
		color:white;
	}
	.labelClass
	{
		color: dodgerblue;
	}
	.textboxClass{
		border-color: dodgerblue;
		border-radius: 5px;
		color:dodgerblue;
	}
	.requiredId{
		color: #34459e;
	}
</style>
</head>
<body>

<nav class="navbar navbar-inverse nav-bar navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle glyph-btn" data-toggle="collapse" data-target="#Navbar">
        <span class="format-glyph glyphicon glyphicon-chevron-down"></span> 
      </button>
      <a class="navbar-brand" href="{{ url('/') }}">
      	<div class="title"><font class="book">Book</font><font class="lelo">LeLow</font></div>
      	<div class="smiley-rotate"><font class="smiley">:)</font></div>
      </a>
    </div>
    <br><br>
    <div class="collapse navbar-collapse" id="Navbar">
      <ul class="nav navbar-nav">
         <!-- APPLY LOOP HERE FOR HEADINGS -->
      
      	<li class="dropdown">
        	<a class="dropdown-toggle" data-toggle="dropdown" href="#">
        		<font class="dropdown-text">Branch</font>
        	<span class="caret"></span></a>
        	<ul class="dropdown-menu">
          		<!-- APPLY NESTED LOOP HERE FOR DATA -->
          		@foreach(App\Branch::all()->take(10) as $branch)
          		<li>
          			<div class="dropdown-item">
          				<div class="dropdown-checkbox"><input type="checkbox"/></div>
          				<div class="dropdown-name"> 
                            <a href="#" data-toggle="popover" data-trigger="hover" data-content="{{ $branch['name'] }}" data-placement="bottom">{{ $branch['name'] }}</a>
                        </div>
          			</div>
          		</li>
          		@endforeach
				<!--END NESTED LOOP HERE FOR DATA -->
        	    <hr style="width:80%;">
                <li>
                    <div class="dropdown-item">
                        <div class="dropdown-name"> <a href="#" data-toggle="modal" data-target="#dropdownModal">View More...</a></div>
                    </div>
                </li>

            </ul>
      	</li>

      	<!-- END LOOP FOR HEADINGS -->
      </ul>
      <ul class="nav navbar-nav navbar-right">
@if(Auth::guest())
        <li><a href="{{ url('/register') }}"><font class="dropdown-text"><span class="glyphicon glyphicon-user"></span>  Sign Up</font></a></li>
        <li><a href="#" data-toggle="modal" data-target="#loginModal"><font class="dropdown-text"><span class="glyphicon glyphicon-log-in"></span>  Login</font></a></li>
@else   
	<a href="#" class="dropdown-toggle" data-toggle="dropdown" style="text-decoration:none;padding-right:10px;"><font class="dropdown-text"><span class="glyphicon glyphicon-user"></span> {{ Auth::user()->name }}</font><b class="caret"></b></a>
  	<ul class="dropdown-menu">
        <li>
            <a href="{{url('/user')}}"><i class="fa fa-fw fa-user"></i>My Profile</a>
        </li>
        <li>
           <a href="#"><i class="fa fa-fw fa-envelope"></i>My Ads</a>
        </li>
        <li class="divider"></li>
        <li>
        	<a href="{{ url('/logout') }}"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
        </li>
    </ul>
@endif
      </ul>
    </div>
  </div>
</nav>

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
                            <label class="col-md-4 control-label labelId">E-Mail Address</label>

                            <div class="col-md-6">
                                <input type="email" class="form-control textboxId" name="email" value="{{ old('email') }}">

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong class="requiredId"><span class="glyphicon glyphicon-exclamation-sign"></span>&nbsp;&nbsp;&nbsp;{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label labelId">Password</label>

                            <div class="col-md-6">
                                <input type="password" class="form-control textboxId" name="password">

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong class="requiredId"><span class="glyphicon glyphicon-exclamation-sign"></span>&nbsp;&nbsp;&nbsp;{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label class="labelId">
                                        <input type="checkbox" name="remember"> Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-sign-in"></i>Login
                                </button>

                                <a class="btn btn-link" href="{{ url('/password/reset') }}">Forgot Your Password?</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

	{{--END LOGIN MODAL--}}


    {{--START DROPDOWN VIEW MORE MODAL--}}

    <div class="modal fade" id="dropdownModal" role="dialog">
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
                            <option>{{ $branch['name'] }}</option>
                        @endforeach
                        <!-- end loop here -->
                    </select>
                </div>
            </div>
        </div>
    </div>

    {{--END DROPDOWN VIEW MORE MODAL--}} 


<div class="container">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
		@yield('content')   
    </div>
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