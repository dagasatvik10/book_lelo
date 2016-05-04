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
				<h4>Seller : {{ $book->user->first_name}} {{ $book->user->last_name }}</h4>
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