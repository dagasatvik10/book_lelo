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

<div class="col-lg-10 col-md-10 col-xs-10 col-sm-8 col-lg-offset-1">
	<br>
	<div class="search-div row">
		<form action="{{ url('/search') }}" method="POST" role="form">
		<input type="text" class="search-bar" name="search" />
			{!! csrf_field() !!}
		<span class="search-icon glyphicon glyphicon-search"></span>
		<br><br>
		</form>
	</div>
	<div class="row">
		{!! Form::open(['class' => 'form-inline','role' => 'form','id' => 'sort_form','route' => 'book_sort']) !!}
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
		{{--{!! Form::submit('post') !!}--}}
		{!! Form::close() !!}
	</div>

	<div class="col-lg-8" id="trendingAds">
		<h2 class="page-header">Trending Ads</h2>
		{{--START AD--}}
		@foreach($books as $book)
			<a href='{{ route('show',['id' => $book->id]) }}'>
				<div class="row">
					<div class="col-md-6">
						@if($book->book_pics->first() != null)
							<img src="{{ '/uploads/images/'.$book->book_pics()->first()->name.'.'.$book->book_pics()->first()->extension }}"
								 class="img-responsive" alt="" width="300px" height="300px">
						@endif
					</div>
					<div class="col-md-6">
						<h3>{{ 	$book->name }}</h3>
						<h4>
							@if(!empty($book->branch_id) or $book->branch_id == '0')
								{{ $book->branch->name }}
							@endif
							@if($book->year != null)
								{{ $book->year }} year
							@endif
						</h4>
						<h4>Seller : {{ $book->user->name}}</h4>
						<h4>College : {{ $book->user->college->name}}</h4>
					</div>
				</div>
			</a>
			<br>
		@endforeach
		{{--END AD--}}
		<div class="pagination-centered">
			{!! $books->links() !!}
		</div>
	</div>
	{{--POST AD BUTTON --}}
	<div class="col-lg-2 col-lg-offset-2">
		<a href="{{ url('/user/book/create')}}" class="btn btn-primary">Post an Ad</a>
	</div>
	{{--END POST AD BUTTON --}}
</div>
@stop

@section('script')
	<script type="text/javascript" src="{{ asset('js/ajax_sort_post.js') }}"></script>
@stop
