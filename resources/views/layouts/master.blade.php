<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>BookLelo</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
	<script src="js/jquery.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
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
	.labelId
	{
		color: dodgerblue;
	}
	.textboxId{
		border-color: dodgerblue;
		border-radius: 5px;
		color:dodgerblue;
	}
	.requiredId{
		color: #34459e;
	}
</style>

<script>
	$(document).ready( function()
	{
	    $('[data-toggle="popover"]').popover();   
		// $('#loginModal').modal();
	});

</script>
</head>
<body>

<nav class="navbar navbar-inverse nav-bar navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle glyph-btn" data-toggle="collapse" data-target="#Navbar">
        <span class="format-glyph glyphicon glyphicon-chevron-down"></span> 
      </button>
      <a class="navbar-brand" href="{{ url('/') }}">
      	<div class="title"><font class="book">Book</font><font class="lelo">Lelo</font></div>
      	<div class="smiley-rotate"><font class="smiley">:)</font></div>
      </a>
    </div>
    <br><br>
    <div class="collapse navbar-collapse" id="Navbar">
      <ul class="nav navbar-nav">
         <!-- APPLY LOOP HERE FOR HEADINGS -->
      
      	<li class="dropdown">
        	<a class="dropdown-toggle" data-toggle="dropdown" href="#">
        		<font class="dropdown-text">Publications</font>
        	<span class="caret"></span></a>
        	<ul class="dropdown-menu">
          		<!-- APPLY NESTED LOOP HERE FOR DATA -->
          		<li>
          			<div class="dropdown-item">
          				<div class="dropdown-checkbox"><input type="checkbox"/></div>
          				<div class="dropdown-name"> <a href="#" data-toggle="popover" data-trigger="hover" data-content="Publication 2PublicationPublicationPublication 2Publication 2Publication 2" data-placement="bottom">Publication 2 PublicationPublicationPublication 2Publication 2Publication 2</a></div>
          			</div>
          		</li>
				<!--END NESTED LOOP HERE FOR DATA -->
        	</ul>
      	</li>
      	<!-- END LOOP FOR HEADINGS -->
      </ul>
      <ul class="nav navbar-nav navbar-right">
      @if(Auth::guest())
        <li><a href="#" data-toggle="modal" data-target="#signupModal"><font class="dropdown-text"><span class="glyphicon glyphicon-user"></span>  Sign Up</font></a></li>
        <li><a href="#" data-toggle="modal" data-target="#loginModal"><font class="dropdown-text"><span class="glyphicon glyphicon-log-in"></span>  Login</font></a></li>
      @else
<!--         <li><a href="{{ url('/logout') }}"><font class="dropdown-text"><span class="glyphicon glyphicon-log-in"></span>Sign Out</font></a></li>
 -->     
<a href="#" class="dropdown-toggle" data-toggle="dropdown" style="text-decoration:none;padding-right:10px;"><font class="dropdown-text"><span class="glyphicon glyphicon-user"></span> {{ Auth::user()->first_name}} {{ Auth::user()->last_name }}</font><b class="caret"></b></a>
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

	{{--START REGISTER MODAL--}}

	<div class="modal fade" id="signupModal" role="dialog">
        <div class="modal-dialog">
        <br>
            <div class="panel panel-default modal-content">
                <div class="panel-heading modal-header" id="mdl-head">
	               	<button type="button" class="close" data-dismiss="modal">&times;</button>
					Register
				</div>
                <div class="panel-body modal-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
                        {!! csrf_field() !!}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label labelId">Name</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control textboxId" name="name" value="{{ old('name') }}">

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong class="requiredId"><span class="glyphicon glyphicon-exclamation-sign"></span>&nbsp;&nbsp;&nbsp;{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

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

                        <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label labelId">Confirm Password</label>

                            <div class="col-md-6">
                                <input type="password" class="form-control textboxId" name="password_confirmation">

                                @if ($errors->has('password_confirmation'))
                                    <span class="help-block">
                                        <strong class="requiredId"><span class="glyphicon glyphicon-exclamation-sign"></span>&nbsp;&nbsp;&nbsp;<span class="glyphicon glyphicon-exclamation-sign"></span>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

 						<div class="form-group{{ $errors->has('branch_id') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label labelId">Branch</label>

                            <div class="col-md-6">
                                <select name="branch_id" class="form-control textboxId" value="{{ old('branch_id') }}" required>
                                <option value="">----SELECT BRANCH----</option>

                                @foreach(\App\Branch::all() as $branch)
                                <option value="{{ $branch->id }}">{{ $branch->name }}</option>
                                @endforeach
                                </select>
                                @if ($errors->has('branch_id'))
                                    <span class="help-block">
										<strong class="requiredId"><span class="glyphicon glyphicon-exclamation-sign">
									</span>&nbsp;&nbsp;&nbsp;<span class="glyphicon glyphicon-exclamation-sign"></span>{{ $errors->first('branch_id') }}</strong>                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group{{ $errors->has('college_id') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label labelId">College</label>

                        <div class="col-md-6">
                                <select name="college_id" class="form-control textboxId" value="{{ old('college_id') }}" required>
                                <option value="">----SELECT COLLEGE----</option>
                                @foreach(\App\College::all() as $college)
                                <option value="{{ $college->id }}">{{ $college->name }}</option>
                                @endforeach
                                </select>
                                @if ($errors->has('college_id'))
                                    <span class="help-block">
										<strong class="requiredId"><span class="glyphicon glyphicon-exclamation-sign">
									</span>&nbsp;&nbsp;&nbsp;<span class="glyphicon glyphicon-exclamation-sign"></span>{{ $errors->first('college_id') }}</strong>                                    </span>
                                @endif
                            </div>
                        </div>

                        {{--<div class="form-group{{ $errors->has('start_year') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label" id="labelId">Start year</label>

                            <div class="col-md-6">
                                <select class="form-control"  name="start_year" id="textboxId" value="{{ old('start_year') }}" required>
                                <option selected="selected">----Enter Year of Admission----</option>
                                <option value ="{{ \Carbon\Carbon::now()->format('Y') }}">{{ \Carbon\Carbon::now()->format('Y') }}</option>
                                <option value ="{{ \Carbon\Carbon::now()->format('Y')-1 }}">{{ \Carbon\Carbon::now()->format('Y')-1 }}</option>
                                <option value ="{{ \Carbon\Carbon::now()->format('Y')-2 }}">{{ \Carbon\Carbon::now()->format('Y')-2 }}</option>
                                <option value ="{{ \Carbon\Carbon::now()->format('Y')-3 }}">{{ \Carbon\Carbon::now()->format('Y')-3 }}</option>
                                </select>
                                @if ($errors->has('start_year'))
                                    <span class="help-block">
<strong id="requiredId"><span class="glyphicon glyphicon-exclamation-sign"></span>&nbsp;&nbsp;&nbsp;<span class="glyphicon glyphicon-exclamation-sign"></span>{{ $errors->first('start_year') }}</strong>                                    </span>
                                @endif
                            </div>
                        </div>

                          <div class="form-group{{ $errors->has('duration') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label" id="labelId">Duration</label>

                            <div class="col-md-6">
                                <select class="form-control" min="1" max="4" name="duration" id="textboxId" value="{{ old('duration') }}" required>
                                <option selected="selected">----Ex. 4 Years for B.Tech----</option>
                                <option value="1">1 year</option>
                                <option value="2">2 years</option>
                                <option value="3">3 years</option>
                                <option value="4">4 years</option>
                                </select>
                                @if ($errors->has('duration'))
                                    <span class="help-block">
<strong id="requiredId"><span class="glyphicon glyphicon-exclamation-sign"></span>&nbsp;&nbsp;&nbsp;<span class="glyphicon glyphicon-exclamation-sign"></span>{{ $errors->first('duration') }}</strong>                                    </span>
                                @endif
                            </div>
                        </div> --}}

                          <div class="form-group{{ $errors->has('start_year') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label labelId">Select Batch</label>
                        <div class="col-md-3">
                                <select  class="form-control textboxId"  name="start_year" value="{{ old('start_year') }}" required>
                                <option selected="selected">Start Year</option>
                                @for($i=\Carbon\Carbon::now()->format('Y');$i>= \Carbon\Carbon::now()->format('Y')-4;$i--)
                                <option value ="{{ $i }}">{{ $i }}</option>
                                @endfor
                                </select>
                                @if ($errors->has('start_year'))
                                    <span class="help-block">
                                    <strong class="requiredId"><span class="glyphicon glyphicon-exclamation-sign"></span>&nbsp;&nbsp;&nbsp;<span class="glyphicon glyphicon-exclamation-sign"></span>{{ $errors->first('start_year') }}</strong>                                    </span>
                                @endif
                            </div>
                            <!-- <label class="col-md-4 control-label">End Year</label> -->
                            <div class="col-md-3">
                                <select class="form-control textboxId"  name="end_year" value="{{ old('end_year') }}" required>
                                <option selected="selected">End Year</option>
                                @for($i=\Carbon\Carbon::now()->format('Y');$i<= \Carbon\Carbon::now()->format('Y')+4;$i++)                                
                                <option value ="{{ $i }}">{{ $i }}</option>
                                @endfor
                                </select>
                                @if ($errors->has('end_year'))
                                    <span class="help-block">
                                    <strong class="requiredId"><span class="glyphicon glyphicon-exclamation-sign"></span>&nbsp;&nbsp;&nbsp;<span class="glyphicon glyphicon-exclamation-sign"></span>{{ $errors->first('end_year') }}</strong>                                    </span>
                                @endif
                            </div>
                        </div>

                         <div class="form-group{{ $errors->has('address') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label labelId">Address</label>
                            <div class="col-md-6">
                            
                            <textarea class="form-control textboxId" placeholder="Enter Residence Address" name="address" cols="50" rows="10" id="address"></textarea>
                                @if ($errors->has('address'))
                                    <span class="help-block">
										<strong class="requiredId"><span class="glyphicon glyphicon-exclamation-sign">
									</span>&nbsp;&nbsp;&nbsp;<span class="glyphicon glyphicon-exclamation-sign"></span>{{ $errors->first('address') }}</strong>                                    </span>
                                @endif
                            </div>
                        </div>

                            <div class="form-group{{ $errors->has('contact') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label labelId">Contact No</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control textboxId" placeholder="Enter your contact number" name="contact" required>

                                @if ($errors->has('contact'))
                                    <span class="help-block">
<strong class="requiredId"><span class="glyphicon glyphicon-exclamation-sign"></span>&nbsp;&nbsp;&nbsp;<span class="glyphicon glyphicon-exclamation-sign"></span>{{ $errors->first('contact') }}</strong>                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-user"></i>Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

	{{--END REGISTER MODAL--}} 

<div class="container">
	<div class="col-lg-10 col-md-10 col-sm-10 col-xs-10 col-lg-offset-1 col-md-offset-1 col-sm-offset-1 col-xs-offset-1">
		 <div class="main-container">
		@yield('content')
		</div> 
	</div>
</div>
</body>
</html>