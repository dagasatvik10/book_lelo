<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>BookLeLow</title>
    <link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css" />
	<script src="/js/jquery.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
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
		width:100%;
        min-height: 100%;
        /*background-color: darkred;*/
        /*background: -webkit-linear-gradient(top, deepskyblue, #19F39A );*/
        /*background: -o-linear-gradient(bottom, deepskyblue, #19F39A);*/
        /*background: -moz-linear-gradient(bottom, deepskyblue, #19F39A );*/
        /*background: linear-gradient(to bottom, deepskyblue, #19F39A);*/
        position:absolute;
		top:195px;
        padding-bottom: 20px;
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
	.nav-bar{
		background-color: #f2f2f2;
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
		height: 97px
/*		box-shadow: 0 4px 4px gray;
*/	}



    .book, .smiley{
        color: white;
        font-weight: bold;
        font-size: 35px;
        text-shadow: 2px 2px 2px red;
    }

    .lelo{
        color: red;
        text-shadow: 2px 2px 2px gray;
        font-weight: bold;
        font-size: 35px;
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
/*    li.dropdown-list:hover{
        background-color: lime;
        border: 1px solid green;
    }*/
    #list, #list:focus, #list:active{
        background-color: inherit;
        transition: background-color 400ms ease-out;
        -webkit-transition: background-color 400ms ease-out;
        -moz-transition: background-color 400ms ease-out;
        -o-transition: background-color 400ms ease-out;
    }
    #list a.dropdown-toggle:hover, #list a.class-a:hover{
        background-color: inherit;
        color: black;
        border-bottom: 4px solid #DE1A1A;  /*32F0ED*/
        transition:background-color 400ms linear;
        -webkit-transition:background-color 400ms linear;
        -moz-transition:background-color 400ms linear;
        -o-transition:background-color 400ms linear;
        border-radius: 7px 7px 0 0;
    }
    .dropdown-item{
/*		background-color: blue;
*/		padding-left:10px;
		width: 100%;
		height: 30px;
        cursor: pointer;
	}
	.dropdown-item:hover{
		background-color: #DE1A1A;
        cursor: pointer;
        color: #000;
	}
	.dropdown-item:hover .dropdown-name a{
		text-decoration: none;
	}
	.dropdown-text{
		color:#DE1A1A;
        font-size: 18px;
        font-weight: bold;
	}
	.dropdown-text:hover{
		color:red;
	}
    a.dropdown-name, .dropdown-name a{
        color: #DE1A1A;
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
        color: lime;
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
		background-color: #DE1A1A;
	}
	#mdl-head{
        background-color: orangered;
        color:white;
        text-shadow: 2px 2px 3px black,-2px 2px 3px black;
        font-weight: bold;
        border-bottom: solid 1px #DE1A1A;
    }
	.headingClass
    {
        background-color: #DE1A1A;
        color: white;
        border:solid 1px #DE1A1A;
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
        border:  solid 1px #DE1A1A;
        border-radius: 0 0 3px 3px;
        background-color: white;
        border-top:none;
    }
    .labelClass
    {
        color: #DE1A1A;
        margin-left: 30px;
    }
    .textboxClass{
        border-color: #DE1A1A;
        border-radius: 5px;
        color:#DE1A1A;
        width:80%;
        margin-left: 30px;

    }
    .textboxClass:focus{
        box-shadow: 2px 0px 2px #DE1A1A,-2px 0px 2px #DE1A1A,0px 2px 2px #DE1A1A,0px -2px 2px #DE1A1A	;
    }
    .requiredClass{
        color: blue;
    }
    .submit-button{
        background: #DE1A1A;
        /*background: -webkit-linear-gradient(top, #32F0ED, #D9F7F6, #32F0ED);*/
        /*background: -o-linear-gradient(bottom, #32F0ED, #D9F7F6, #32F0ED);*/
        /*background: -moz-linear-gradient(bottom, #32F0ED, #D9F7F6, #32F0ED);*/
        /*background: linear-gradient(to bottom, #32F0ED, #D9F7F6, #32F0ED);*/
        color: white;
    }
    .forgot
    {
        color: #DE1A1A;
        font-size: 15px;
    }
    .forgot:hover
    {
        color: red;
    }
    .written-data{
        color: #DE1A1A;
    }
    .written-data-headings{
        color: black;
        font-weight: bold;
    }

    .post-ad-button {
        color: white;
        height:60px;
        width:100%;
        background: #DE1A1A;
        /*background: -webkit-linear-gradient(top, #32F0ED, #D9F7F6, #32F0ED);*/
        /*background: -o-linear-gradient(bottom, #32F0ED, #D9F7F6, #32F0ED);*/
        /*background: -moz-linear-gradient(bottom, #32F0ED, #D9F7F6, #32F0ED);*/
        /*background: linear-gradient(to bottom, #32F0ED, #D9F7F6, #32F0ED);*/
        display: inline-block;
        margin-top: 13px;
        font-size: 19px;
        line-height: 54px;
        font-weight: bold;
        text-align: center;
/*        text-shadow: 2px 2px 2px black;
*/        cursor: pointer;
        border: 1px solid #DE1A1A;
        border-radius: 8px;
        transition: all 400ms ease-in-out;
        -webkit-transition: all 400ms ease-in-out;
        -moz-transition: all 400ms ease-in-out;
        -o-transition: all 400ms ease-in-out;
    }
    .post-ad-button:hover{
        background: red;
        /*background: -webkit-linear-gradient(top, #32F0ED, #D9F7F6, #32F0ED);*/
        /*background: -o-linear-gradient(bottom, #32F0ED, #D9F7F6, #32F0ED);*/
        /*background: -moz-linear-gradient(bottom, #32F0ED, #D9F7F6, #32F0ED);*/
        /*background: linear-gradient(to bottom, #32F0ED, #D9F7F6, #33F0ED);*/
        text-shadow: 2px 2px 2px black,-2px -2px 2px black;
        color: white;
        transition: all 400ms ease-in-out;
        -webkit-transition: all 400ms ease-in-out;
        -moz-transition: all 400ms ease-in-out;
        -o-transition: all 400ms ease-in-out;
    }

	.requiredId{
		color: #34459e;
	}
</style>
</head>
<body>

<header class="navbar nav-bar navbar-fixed-top">
	<div class="container-fluid">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle glyph-btn" data-toggle="collapse" data-target="#Navbar">
				<span class="format-glyph glyphicon glyphicon-chevron-down"></span>
			</button>
			<a class="navbar-brand" href="{{ url('/') }}">
				<div class="title"><font class="book">Book </font><font class="lelo">LeLow </font></div>
				<div class="smiley-rotate"><font class="smiley">&nbsp;:)</font></div>
			</a>
			<br>

		</div>
		<br><br>
		<div class="collapse navbar-collapse" id="Navbar">

			{!! Form::open(['route' => 'book_sort','role' => 'form','id' => 'sort_form']) !!}
			<ul class="nav navbar-nav">
				<li class="dropdown dropdown-list" id="list">
					<a class="dropdown-toggle" data-toggle="dropdown" href="#">
						<font class="dropdown-text">BRANCH<span class="caret"></span></a></font>

					<ul class="dropdown-menu">
						<!-- APPLY NESTED LOOP HERE FOR DATA -->
						<li>
							<div class="dropdown-item">
								<div class="dropdown-checkbox">
									<input type="radio" class="sort_elements" name="branch" value="none" checked/>
								</div>
								<div class="dropdown-name">
									<a href="#" data-toggle="popover" data-trigger="hover" data-content="none" data-placement="bottom">All Branches</a>
								</div>
							</div>
						</li>
						@foreach(App\Branch::all()->take(6) as $branch)
							<li>
								<div class="dropdown-item">
									<div class="dropdown-checkbox">
										<input type="radio" class="sort_elements" name="branch" value="{{ $branch->id }}"/>
									</div>
									<div class="dropdown-name">
										<a href="#" data-toggle="popover" data-trigger="hover" data-content="{{ $branch['name'] }}" data-placement="bottom">{{ $branch['name'] }}</a>
									</div>
								</div>
							</li>
							@endforeach
									<!--END NESTED LOOP HERE FOR DATA -->
							<hr style="width:100%;">
							<li>
								<div class="dropdown-item">
									<div class="dropdown-name"> <a href="#" data-toggle="modal" data-target="#dropdownBranchModal">View More...</a></div>
								</div>
							</li>

					</ul>
				</li>


				<li class="dropdown dropdown-list" id="list">
					<a class="dropdown-toggle" data-toggle="dropdown" href="#">
						<font class="dropdown-text">YEAR<span class="caret"></span></font>
					</a>
					<ul class="dropdown-menu">
						<!-- APPLY NESTED LOOP HERE FOR DATA -->
						<li>
							<div class="dropdown-item">
								<div class="dropdown-checkbox"><input type="radio" class="sort_elements" name="year" value="none" checked/></div>
								<div class="dropdown-name">All Years</div>
							</div>
							<div class="dropdown-item">
								<div class="dropdown-checkbox"><input type="radio" class="sort_elements" name="year" value="1st"/></div>
								<div class="dropdown-name">1st Year</div>
							</div>
							<div class="dropdown-item">
								<div class="dropdown-checkbox"><input type="radio" class="sort_elements" name="year" value="2nd"/></div>
								<div class="dropdown-name">2nd Year</div>
							</div>
							<div class="dropdown-item">
								<div class="dropdown-checkbox"><input type="radio" class="sort_elements" name="year" value="3rd"/></div>
								<div class="dropdown-name">3rd Year</div>
							</div>
							<div class="dropdown-item">
								<div class="dropdown-checkbox"><input type="radio" class="sort_elements" name="year" value="4th"/></div>
								<div class="dropdown-name">4th Year</div>
							</div>
						</li>
					</ul>
				</li>

				<li class="dropdown dropdown-list" id="list">
					<a class="dropdown-toggle" data-toggle="dropdown" href="#">
						<font class="dropdown-text">COLLEGE<span class="caret"></span></font>
					</a>
					<ul class="dropdown-menu">
						<li>
							<div class="dropdown-item">
								<div class="dropdown-checkbox"><input type="radio" class="sort_elements" name="college" value="none" checked/></div>
								<div class="dropdown-name">
									<a href="#" data-toggle="popover" data-trigger="hover" data-content="none" data-placement="bottom">All Colleges</a>
								</div>
							</div>
						</li>
						@foreach(App\College::all()->take(6) as $college)
							<li>
								<div class="dropdown-item">
									<div class="dropdown-checkbox"><input type="radio" class="sort_elements" name="college" value="{{ $college->id }}"/></div>
									<div class="dropdown-name">
										<a href="#" data-toggle="popover" data-trigger="hover" data-content="{{ $college['name'] }}" data-placement="bottom">{{ $college['name'] }}</a>
									</div>
								</div>
							</li>
						@endforeach
						<hr style="width:100%;">
						<li>
							<div class="dropdown-item">
								<div class="dropdown-name"> <a href="#" data-toggle="modal" data-target="#dropdownCollegeModal">View More...</a></div>
							</div>
						</li>
					</ul>
				</li>
			</ul>
			{!! Form::close() !!}

			<ul class="nav navbar-nav navbar-right">
				<li id="list"><a class="class-a" href="{{ url('/') }}"><font class="dropdown-text"><span class="glyphicon glyphicon-home"></span> Home</font></a></li>
				@if(Auth::guest())
					<li id="list"><a class="class-a" href="{{ url('/register') }}"><font class="dropdown-text"><span class="glyphicon glyphicon-user"></span>  Sign Up</font></a></li>
					<li id="list" style="margin-right:125px;"><a class="class-a" href="#" data-toggle="modal" data-target="#loginModal " ><font class="dropdown-text"><span class="glyphicon glyphicon-log-in"></span>  Login</font></a></li>
				@else
					<li  id="list" class="dropdown dropdown-list" style="margin-right:100px;">

						<a href="#" class="dropdown-toggle" data-toggle="dropdown" style="text-decoration:none;padding-right:10px;">
							<font class="dropdown-text"><span class="glyphicon glyphicon-user"></span>
								{{ Auth::user()->name}} <b class="caret"></b></font>
						</a>
						<ul class="dropdown-menu">
							<li>
								<div class="dropdown-item" >
									<div class="dropdown-name">
										<a href="{{url('/user')}}"><i class="fa fa-fw fa-user"></i>My Profile</a>
									</div>
								</div>
							</li>
							<li>
								<div class="dropdown-item" >
									<div class="dropdown-name">
										<a href="#"><i class="fa fa-fw fa-envelope"></i>My Ads</a>
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
                                    <i class="fa fa-btn fa-sign-in"></i>Login
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
                    <select class="form-control textboxClass sort_elements" name="branch">
                        <option value="none">Select <!-- name from database --></option>
                        <!-- loop here -->
                        @foreach(App\Branch::all() as $branch)
                            <option value='{{ $branch->id }}'>{{ $branch->name }}</option>
                        @endforeach
                        <!-- end loop here -->
                    </select>
                </div>
            </div>
        </div>
    </div>

    {{--END DROPDOWN (Branch) VIEW MORE MODAL--}} 
    {{--START DROPDOWN (College) VIEW MORE MODAL--}}

    <div class="modal fade" id="dropdownCollegeModal" role="dialog">
        <div class="modal-dialog">
        <br>
            <div class="panel panel-default modal-content">
                <div class="panel-heading modal-header" id="mdl-head">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <!-- heading from database --> Select College
                </div>
                <div class="panel-body modal-body">
                    <select class="form-control textboxClass sort_elements" name="college">
                        <option value="none">Select <!-- name from database --></option>
                        <!-- loop here -->
                        @foreach(App\College::all() as $college)
                            <option value="{{ $college->id }}">{{ $college['name'] }}</option>
                        @endforeach
                        <!-- end loop here -->
                    </select>
                </div>
            </div>
        </div>
    </div>

    {{--END DROPDOWN (College) VIEW MORE MODAL--}} 


<div class="container">
	{{--<div class="col-lg-10 col-md-10 col-sm-10 col-xs-12 col-lg-offset-1 col-md-offset-1 col-sm-offset-1 main-container">--}}
            @yield('content')   
    {{--</div>--}}
</div>

<script>
</script>
@yield('script')
</body>
</html>
<script type="text/javascript">
    $(document).ready(function(){
		@if($errors->any())
				$("#loginModal").modal('show');
		@endif

		$('[data-toggle="popover"]').popover();
		// $('#loginModal').modal();

		sortBooksList();

		$('.dropdown-item').click(function (e){
			var cur = $(this).find('input[type=checkbox]');
			if(cur.prop("checked"))
			{
				$(this).find('input[type=checkbox]').prop("checked", false);
			}
			else
			{
				$(this).find('input[type=checkbox]').prop("checked", true);
			}
		});
});
</script>