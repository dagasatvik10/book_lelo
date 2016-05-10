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