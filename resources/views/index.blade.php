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
	.ad-row:hover {
		border-radius: 20px;
		border: 1px solid blue;

	}
</style>



@section('content')

<div class="col-lg-10 col-md-10 col-xs-10 col-sm-8 col-lg-offset-1">
	<br>
	<div class="search-div row">
		<input type="text" class="search-bar" />
		<span class="search-icon glyphicon glyphicon-search"></span>
		<br><br>
		<div class="radio-search">

		</div>
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
		<a href="#" class="btn btn-primary" data-toggle="modal" data-target="{{ Auth::check()?'#post_ad_modal':'#loginModal' }}">Post an Ad</a>
	</div>
	{{--END POST AD BUTTON --}}
</div>

{{--START POST AD MODAL--}}
<div class="modal fade" id="post_ad_modal" role="dialog">
<div class="modal-dialog">
	<br>
	<div class="panel panel-default modal-content">
		<div class="panel-heading modal-header" id="mdl-head">
			<button type="button" class="close" data-dismiss="modal">&times;</button>
			Post an ad
		</div>
		<div class="panel-body modal-body">
			{!! Form::open(['route' => 'book.store','files' => true,'class' => 'form-horizontal','role' => 'form','id' => 'post_ad_form']) !!}
			<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
				{!! Form::label('name','Title',['class' => 'col-md-4 control-label labelId']) !!}
				<div class="col-md-6">
					{!! Form::text('name','',['class' => 'form-control textboxId','required' => true]) !!}
					@if ($errors->has('name'))
						<span class="help-block">
							<strong class="requiredId"><span class="glyphicon glyphicon-exclamation-sign"></span>&nbsp;&nbsp;&nbsp;{{ $errors->first('name') }}</strong>
						</span>
					@endif
				</div>
			</div>
			<div class="form-group">
				{!! Form::label('pic','Pics',['class' => 'col-md-4 control-label labelId']) !!}
				<div class="col-md-6">
					@for($i=1;$i<=6;$i++)
						{!! Form::file('pic'.$i,['class' => 'form-control textboxId']) !!}
					@endfor
				</div>
			</div>
			<div class="form-group{{ $errors->has('type') ? ' has-error' : '' }}">
				{!! Form::label('type','Type',['class' => 'col-md-4 control-label labelId']) !!}
				<div class="col-md-6">
					{!! Form::select('type',['books' => 'Books','notes' => 'Notes'],'books',['class' => 'form-control textboxId']) !!}
					@if ($errors->has('type'))
						<span class="help-block">
							<strong class="requiredId"><span class="glyphicon glyphicon-exclamation-sign"></span>&nbsp;&nbsp;&nbsp;{{ $errors->first('type') }}</strong>
						</span>
					@endif
				</div>
			</div>
			<div class="form-group{{ $errors->has('author') ? ' has-error' : '' }}">
				{!! Form::label('author','Author Name',['class' => 'col-md-4 control-label labelId']) !!}
				<div class="col-md-6">
					{!! Form::text('author','',['class' => 'form-control textboxId']) !!}
					@if ($errors->has('author'))
						<span class="help-block">
							<strong class="requiredId"><span class="glyphicon glyphicon-exclamation-sign"></span>&nbsp;&nbsp;&nbsp;{{ $errors->first('author') }}</strong>
						</span>
					@endif
				</div>
			</div>
			<div class="form-group{{ $errors->has('publication') ? ' has-error' : '' }}">
				{!! Form::label('publication','Publication',['class' => 'col-md-4 control-label labelId']) !!}
				<div class="col-md-6">
					{!! Form::text('publication','',['class' => 'form-control textboxId']) !!}
					@if ($errors->has('publication'))
						<span class="help-block">
							<strong class="requiredId"><span class="glyphicon glyphicon-exclamation-sign"></span>&nbsp;&nbsp;&nbsp;{{ $errors->first('publication') }}</strong>
						</span>
					@endif
				</div>
			</div>
			<div class="form-group{{ $errors->has('publication_year') ? ' has-error' : '' }}">
				{!! Form::label('publication_year','Publication Year',['class' => 'col-md-4 control-label labelId']) !!}
				<div class="col-md-6">
					{!! Form::number('publication_year','',['class' => 'form-control textboxId']) !!}
					@if ($errors->has('publication_year'))
						<span class="help-block">
							<strong class="requiredId"><span class="glyphicon glyphicon-exclamation-sign"></span>&nbsp;&nbsp;&nbsp;{{ $errors->first('publication_year') }}</strong>
						</span>
					@endif
				</div>
			</div>
			<div class="form-group{{ $errors->has('branch') ? ' has-error' : '' }}">
				{!! Form::label('branch','Branch',['class' => 'col-md-4 control-label labelId']) !!}
				<div class="col-md-6">
					<select name='branch' class='form-control textboxId'>
						<option value="none">None</option>
					@foreach(App\Branch::all() as $branch)
						<option value={{ $branch->id }}>{{ $branch->name }}</option>
					@endforeach
					</select>
				</div>
			</div>
			<div class="form-group{{ $errors->has('year') ? ' has-error' : '' }}">
				{!! Form::label('year','Course Year',['class' => 'col-md-4 control-label labelId']) !!}
				<div class="col-md-6">
					{!! Form::select('year',['none' => 'None','1st' => '1st','2nd' => '2nd','3rd' => '3rd','4th' => '4th'],'none',['class' => 'form-control textboxId']) !!}
					@if ($errors->has('year'))
						<span class="help-block">
							<strong class="requiredId"><span class="glyphicon glyphicon-exclamation-sign"></span>&nbsp;&nbsp;&nbsp;{{ $errors->first('year') }}</strong>
						</span>
					@endif
				</div>
			</div>
			<div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
				{!! Form::label('description','Description',['class' => 'col-md-4 control-label labelId']) !!}
				<div class="col-md-6">
					{!! Form::textarea('description','',['class' => 'form-control textboxId']) !!}
					@if ($errors->has('description'))
						<span class="help-block">
							<strong class="requiredId"><span class="glyphicon glyphicon-exclamation-sign"></span>&nbsp;&nbsp;&nbsp;{{ $errors->first('description') }}</strong>
						</span>
					@endif
				</div>
			</div>
			<div class="form-group{{ $errors->has('price') ? ' has-error' : '' }}">
				{!! Form::label('price','Price',['class' => 'col-md-4 control-label labelId']) !!}
				<div class="col-md-6">
					{!! Form::number('price','',['class' => 'form-control textboxId','required' => true]) !!}
					@if ($errors->has('price'))
						<span class="help-block">
							<strong class="requiredId"><span class="glyphicon glyphicon-exclamation-sign"></span>&nbsp;&nbsp;&nbsp;{{ $errors->first('price') }}</strong>
						</span>
					@endif
				</div>
			</div>
			<div class="form-group">
				<div class="col-md-6 col-md-offset-4">
					<button id="submit_ad" type="submit" class="btn btn-primary">
						<i class="fa fa-btn fa-user"></i>Post
					</button>
				</div>
			</div>
			{!! Form::close() !!}
		</div>
	</div>
</div>
</div>
{{--END POST AD MODAL	--}}

@stop

@section('script')
	<script type="text/javascript" src="{{ asset('js/ajax_sort_post.js') }}"></script>
@stop
