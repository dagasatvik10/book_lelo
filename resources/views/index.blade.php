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
	<div class="search-div">
		<input type="text" class="search-bar" />
		<span class="search-icon glyphicon glyphicon-search"></span>
		<br><br>
		<div class="radio-search">
	</div>
</div>
<div class="col lg-8">
<h2 class="page-header">Trending Ads</h2>
{{--START AD--}}
@foreach($books as $book)
<a href='{{ route('show',['id' => $book->id]) }}'>
<div class="row">
    <div class="col-md-6">
            <img src="{{ '/uploads/images/'.$book->book_pics()->first()->name.'.'.$book->book_pics()->first()->extension }}"
				 class="img-responsive" alt="" width="300px" height="300px">
    </div>
    <div class="col-md-6">
        <h3>{{ $book->name }}</h3>
        <h4>{{ $book->branch->name }}</h4>
        <h4>Seller : {{ $book->user->first_name}} {{ $book->user->last_name }}</h4>
        <h4>College : {{ $book->user()->getResults()['college']['name']}}</h4>
        {{--<p>Address :
        @if(strlen($book->user()->getResults()['address']) > $predefinedAddressLength)
        	{{ substr($book->user()->getResults()['address'], 0, $predefinedAddressLength) }}...
        @else
        	{{ $book->user()->getResults()['address'] }}
        @endif
        </p>--}}
    </div>
</div>
</a>
@endforeach
{{--END AD--}}
</div>
</div>
{{--START POST AD MODAL--}}


{{--END POST AD MODAL	--}}


@stop

<script type="text/javascript">

</script>