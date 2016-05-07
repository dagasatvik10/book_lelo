@extends('layouts.master')

<style>

	nav{
		position: absolute;
		top:98px;
		color:white;
		font-weight: bold;
		height:100px;
		background-color: #DE1A1A;
	}
	.top-holder{
		background-color: ;
		margin: 0;
	}
	.search-div{
/*		width:100%;
		background-color: lightslategrey;*/
		height: 80px;
	}
	.search-bar{
		border: solid 2px #DE1A1A;
		font-size: 19px;
		width:100%;
		height:50px;
		border-radius: 5px;
		margin-top: 13px;
		color:#DE1A1A;
		padding-left: 20px;
		transition: all 500ms ease-in-out;
		-webkit-transition: all 500ms ease-in-out;
		-moz-transition: all 500ms ease-in-out;
		-o-transition: all 500ms ease-in-out;
	}
	.search-bar:focus {
		box-shadow: 2px 0px 2px lightskyblue,-2px 0px 2px lightskyblue,0px 2px 2px lightskyblue,0px -2px 2px lightskyblue	;
		transition: all 500ms ease-in-out;
		-webkit-transition: all 500ms ease-in-out;
		-moz-transition: all 500ms ease-in-out;
		-o-transition: all 500ms ease-in-out;
	}
	.search-icon{
		left:-70px;
		bottom:-40px;
		margin-top: 28px;
		position:relative;
		color: #DE1A1A;

	}


	.trending-ads{
		/*background-color: #E4FFFE;*/
		color: #DE1A1A;
		width:100%;
		border-radius: 5px;
		/*border:1px solid deepskyblue;*/
		margin-top: 20px;
		text-align: center;
		font-weight: bold;
	}
	.ad{
		background-color: #ffffff;
        /*background-color: #83FFFA;*/
		/*background: -webkit-linear-gradient(right, lightgreen , #C7FFC7);
        background: -o-linear-gradient(left, lightgreen, #C7FFC7);
        background: -moz-linear-gradient(left, lightgreen, #C7FFC7);
        background: linear-gradient(to left, lightgreen, #C7FFC7);border: 1px solid limegreen;
        border-radius: 5px;*/
		margin-top: 10px;
		text-align: left;
	}
	.ad:hover{
		background-color:;
	}
	.ad-image-holder{
		text-align: center;
		width: 100%;
		height:135px;
		overflow: hidden;
		margin-top: 20px;
		margin-bottom: 20px;
	}
	.ad-image{
		border-radius: 5px;
		max-width:100%;
		max-height:100%;
		border:1px solid #DE1A1A;
	}
	.ad-data{
		color:#DE1A1A;

	}
	.ad-heads{
		text-shadow:1px 1px 2px black;
	}
	.pagination{
		color:white;
		border: solid 1px white;
		width: 90%;
		height:35px;
		line-height: 35px;
		margin-bottom: 10px;
	}
	.post{
		width:100%;
		padding-top:20px;
	}
</style>

<nav class="col-md-12 col-md-12 col-sm-12 col-xs-12">
</nav>

@section('content')
<!-- search div containing search bar and post ad button -->
<div class="col-lg-12 col-md-12 col-xs-12 col-sm-12 top-holder" style="width:100%; margin-left:0;">
	<br>
	<div class="search-div col-lg-9 col-md-9 col-sm-9 col-xs-12">
		{!! Form::open(['route' => 'search']) !!}
		<div class="col-md-11 col-xs-11 col-lg-11 col-sm-11"><input type="text" class="search-bar" placeholder="Search Your Books Here!"/></div>
		<div class="col-md-1 col-xs-1 col-lg-1 col-sm-1"><span class="search-icon glyphicon glyphicon-search"></span></div>
		<br>
		{!! Form::close() !!}}
	</div>

	<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
		@if(Auth::check())
			<center><a href="{{ url('/user/book/create') }}"><button type="button" class="post-ad-button">POST FREE AD!</button></a></center>
		@else
			<center><a class="class-a" href="#" data-toggle="modal" data-target="#loginModal "><button type="button" class="post-ad-button">POST FREE AD!</button></a></center>
		@endif
	</div>
</div>
<!-- /search div containing search bar and post ad button -->


	 {{--<div class="row">--}}
{{--		{!! Form::open(['class' => 'form-inline','role' => 'form','id' => 'sort_form','route' => 'book_sort']) !!}
		<div class="form-group">
			<select class="form-control sort_elements" name="year">
				<option value='none'>Year</option>
				<option value="1st">1st</option>
				<option value="2nd">2nd</option>
				<option value="3rd">3rd</option>
				<option value="4th">4th</option>
			</select>
		</div>
		<div class="form-group">
			<select class="form-control sort_elements" name="branch">
				<option value="none">Branch</option>
				@foreach(App\Branch::all() as $branch)
					<option value={{ $branch->id }}>{{ $branch->name }}</option>
				@endforeach
			</select>
		</div>
		<div class="form-group">
			<select class="form-control sort_elements" name="college">
				<option value="none">College</option>
				@foreach(App\College::all() as $college)
					<option value="{{ $college->id }}">{{ $college->name }}</option>
				@endforeach
			</select>
		</div>
		<div class="form-group">
			{!! Form::radio('order','asc','',['class' => 'sort_elements']) !!}Ascending<br>
			{!! Form::radio('order','desc',true,['class' => 'sort_elements']) !!}Descending
		</div>
		{!! Form::submit('post') !!}
		{!! Form::close() !!}
	</div>--}}

	<div class="col-lg-8 col-sm-8 col-md-8 col-xs-12 trending-ads">
		<h1>TRENDING ADS</h1>
		{{--START AD--}}
		@foreach($books as $book)
			<a href='{{ route('show',['id' => $book->id]) }}'>
				<div class="row ad col-lg-10 col-md-10 col-xs-12 col-sm-10 col-lg-offset-1 col-md-offset-1 col-sm-offset-1">
					<div class="col-md-4 col-lg-4 col-sm-4 col-xs-12">
						@if($book->book_pics->first() != null)
							<div class="ad-image-holder col-md-12 col-lg-12 col-xs-12 col-sm-12">
							<img src="{{ '/uploads/images/'.$book->book_pics()->first()->name.'.'.$book->book_pics()->first()->extension }}"
								 class="img-responsive ad-image" alt="">
							</div>
						@endif
					</div>
					<div class="col-md-8 col-lg-8 col-sm-8 col-xs-12">
						<h3 class="ad-heads ad-data">{{ $book->name }}</h3>
						<hr style="box-shadow:1px 1px 2px #DE1A1A;">
						<h4 class="ad-data">
							@if(!empty($book->branch_id) or $book->branch_id == '0')
								{{ $book->branch->name }}
							@endif
							@if($book->year != null)
								{{ $book->year }} year
							@endif
						</h4>
						<h4 class="ad-data">Seller : {{ $book->user->name}} </h4>
						<h4 class="ad-data">College : {{ $book->user->college->name}}</h4>
					</div>
				</div>
			</a>
			<br>
		@endforeach
		{{--END AD--}}
		<div align="center" class="">
			{!! $books->links() !!}
		</div>
	</div>
@if(Auth::guest())
<div class="col-lg-4 col-sm-4 col-md-4 col-xs-12" style="margin-top:115px;">
	<div class="headingClass">
		Login
	</div>
  <div class="panel-body panelBodyClass">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                        {!! csrf_field() !!}
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label class="col-md-6 labelClass">E-Mail Address</label>

                            <div class="col-md-12">
                                <input type="email" class="form-control textboxClass" name="email" value="{{ old('email') }}">

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong class="requiredClass"><span class="glyphicon glyphicon-exclamation-sign"></span>&nbsp;&nbsp;&nbsp;{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label class="col-md-6 labelClass">Password</label>

                            <div class="col-md-12">
                                <input type="password" class="form-control textboxClass" name="password">

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong class="requiredClass"><span class="glyphicon glyphicon-exclamation-sign"></span>&nbsp;&nbsp;&nbsp;{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8">
                                <div class="checkbox">
                                    <label class="labelClass">
                                        <input type="checkbox" name="remember"> Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-1">
                                <button type="submit" class="btn submit-button">
                                    <i class="fa fa-btn fa-sign-in"></i>Login
                                </button>

                                <a class="forgot" href="{{ url('/password/reset') }}"><br><br>Forgot Your Password?</a>
                            </div>
                        </div>
                    </form>
                </div>

</div>
@endif

@stop

@section('script')
	<script type="text/javascript" src="{{ asset('js/ajax_sort_post.js') }}"></script>
@stop
