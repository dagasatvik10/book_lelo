@extends('layouts.master')

<style>
	.search-div{
		width:100%;
/*		background-color: lightslategrey;*/
	}
	.search-bar{
		border: solid 2px dodgerblue;
		width:65%;
		height:40px;
		border-radius: 5px;
		margin: 13px;
		color:dodgerblue;
		padding-left: 10px;
		transition: all 500ms ease-in-out;
		-webkit-transition: all 500ms ease-in-out;
		-moz-transition: all 500ms ease-in-out;
		-o-transition: all 500ms ease-in-out;

	}
	.search-bar:focus {
		border:solid 2px #34459e;
		width: 80%;
		transition: all 500ms ease-in-out;
		-webkit-transition: all 500ms ease-in-out;
		-moz-transition: all 500ms ease-in-out;
		-o-transition: all 500ms ease-in-out;
	}
	.search-icon{
		left:-40px;
		position:relative;
	}
	.radio-search{
		height:20px;
/*		float: left;
*/	}
	.trending-ads{
		background: #d8d8d8;
		margin-top: 10px;
		color: white;
		width:100%;
		border-radius: 5px;
		/*height: 500px;*/
	}
	.ad{
		/*background-color: #FFF;*/
		border: solid 1px black;
		height: 100px;
		width: 90%;
		margin: 15px;
		border-radius: 5px;
		padding: 1%;
	}
	.ad-image{
		border-radius: 5px;
		width: 20%;
/*		background-color: red;
*/		height: 100%;
		float: left;
	}
	.ad-info{
/*		background-color: green;
*/		border-radius: 5px;
		width: 80%;
		height: 100%;
		float: left;
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
		/*height: 500px;*/
		/*background-color: #000;*/
		padding-top:20px;
	}
	.free-ad{
		width: 50%;
		margin-left: 25%;
		margin-top: -5px;
		border-radius: 5px;
/*		border: solid 2px royalblue;
*/		text-align: center;
		background-color: #34495e;
		background: -webkit-linear-gradient(left top, #34495e, deepskyblue, white);
		background: -o-linear-gradient(bottom right, #34495e, deepskyblue, white );
		background: -moz-linear-gradient(bottom right, #34495e, deepskyblue, white);
		background: linear-gradient(to bottom right, #34495e, deepskyblue, white);
		color:white;
	}
	.ad-row {
		border-radius: 20px;
		border: 1px solid #CEECF5;
	}
	.ad-row:hover {
		border-radius: 20px;
		border: 1px solid deepskyblue;
	}
		.post-ad-button
	{
	color: #fff;
    background-color: #d9534f;
    border-color
	display: inline-block;
    padding: 17px 30px;
    margin-bottom: 0;
    font-size: 17px;
    font-weight: normal;
    line-height: 1.428571;
    text-align: center;
    white-space: nowrap;
    vertical-align: middle;
    cursor: pointer;
    background-image: none;
    border: 1px solid transparent;
    border-radius: 0px;
    margin-top: -78px;
    margin-right: -10px;
	}
</style>

@section('content')

<div class="col-lg-10 col-md-10 col-xs-10 col-sm-10 col-lg-offset-1 col-md-offset-1 col-sm-offset-1 col-xs-offset-1">
	<br>
	<div class="search-div">
		<input type="text" class="search-bar" />
		<span class="dropdown-text search-icon glyphicon glyphicon-search"></span>
		<br><br>
	<a href="{{ url('/user/book/create') }}"><button type="button" class="post-ad-button" style="float:right;">Post Ad</button></a>
		<div class="radio-search"></div>
	</div>
</div>
@if(App\Book::get()->count())
 <h2 class="page-header">Trending Ads</h2>
 @endif
 <div class="row">
 
{{--START AD--}}
@if(App\Book::get()->count())
@foreach(App\Book::all() as $book)
<div class="col-md-8">
<a href="#">
<div class="row ad-row col-lg-10 col-md-10">
    <div class="col-md-4">
    	<div style="height:auto; margin-top:20%; margin-bottom:20%; line-height:100%;">
            <img src="{{asset('uploads/images/').'/'.$book->book_pics()->getResults()['0']->name.'.'.$book->book_pics()->getResults()['0']->extension }}" class="img-responsive img-rounded" alt="" height="300" style="height:142px; width:170px;">
    	</div>
    </div>
    <div class="col-md-8">
        <h3>{{ $book->name }}-{{ $book->author }}</h3>
        <h4>{{ $book->branch['name'] }}</h4>
        <h4>Seller : {{ $book->user()->getResults()['name'] }}</h4>
        <h4>College : {{ $book->user()->getResults()['college']['name']}}</h4>
        <p>
        </p>
    </div>
</div>
</a>
</div>
@endforeach
@else
<div class="col-md-8">
<div class="row ad-row col-lg-10 col-md-10">
    <h2>No Ads to Show</h2>
</div>
</div>
@endif
{{--END AD--}}
@if(Auth::guest())
<div class="col-md-4">
  <div class="panel-body modal-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                        {!! csrf_field() !!}
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label labelClass">E-Mail Address</label>

                            <div class="col-md-6">
                                <input type="email" class="form-control textboxClass" name="email" value="{{ old('email') }}">

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong class="requiredClass"><span class="glyphicon glyphicon-exclamation-sign"></span>&nbsp;&nbsp;&nbsp;{{ $errors->first('email') }}</strong>
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
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-sign-in"></i>Login
                                </button>

                                <a class="btn btn-link" href="{{ url('/password/reset') }}">Forgot Your Password?</a>
                            </div>
                        </div>
                    </form>
                </div>

</div>
@endif
</div>
{{--START POST AD MODAL--}}


{{--END POST AD MODAL	--}}


@stop

<script type="text/javascript">

</script>