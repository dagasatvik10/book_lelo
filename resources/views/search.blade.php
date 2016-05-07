@extends('layouts.master')

@section('content')
<br><br><br><br>
<form action="{{ url('/search') }}" method="POST" role="form">
	{!! csrf_field() !!}
	<div class="form-group">
	<input type="text" name="search" placeholder="Search Book">
	</div>
	<div class="row">
		@if(!empty($search))
		@foreach($search as $book)
		<ul>
		<li>{{ $book->name }}</li>
		</ul>
		@endforeach
		@endif
	</div>
	</div>
</form>

@endsection