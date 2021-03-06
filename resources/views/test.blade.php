@if(count($books)>0)
	@foreach($books as $book)
		<div>
			<a href='{{ route('show',['id' => $book->id]) }}'>
				<div class="row ad col-lg-12 col-md-12 col-xs-12 col-sm-12">
					<div class="col-md-3 col-lg-3 col-sm-3 col-xs-12">
						@if($book->book_pics->first() != null)
							<div class="ad-image-holder col-md-12 col-lg-12 col-xs-12 col-sm-12">
								<img src="{{ asset('uploads/images/'.$book->book_pics()->first()->name.'.'.$book->book_pics()->first()->extension) }}"
									 class="img-responsive ad-image" alt="">
							</div>
						@else
							<div class="ad-image-holder col-md-12 col-lg-12 col-xs-12 col-sm-12">
								<img src="{{ asset('uploads/notfound.png') }}"
									 class="img-responsive ad-image" alt="">
							</div>
						@endif
					</div>
					<div class="col-md-9 col-lg-9 col-sm-9 col-xs-12">
						<h3 class="ad-heads ad-data">{{ $book->name }}<font style="font-size:18px; color:black; text-shadow: none;"> &nbsp;By {{ $book->author }}</font></h3>
						<hr class="hr">
						<h4 class="ad-data">
							@if(!empty($book->branch_id) or $book->branch_id == '0')
								{{ $book->branch->name }}
							@endif
							@if($book->year != null)

								@if($book->year==1)
									<font class="book-data" style="font-size:18px;"><br>For 1st Year</font>
								@endif
								@if($book->year==2)
									<font class="book-data" style="font-size:18px;"><br>For 2nd Year</font>
								@endif
								@if($book->year==3)
									<font class="book-data" style="font-size:18px;"><br>For 3rd Year</font>
								@endif
								@if($book->year==4)
									<font class="book-data" style="font-size:18px;"><br>For 4th Year</font>
								@endif
							@endif
						</h4>
						<h4 class="ad-data">Seller : {{ $book->user->name}} </h4>
						<h4 class="ad-data">College : {{ $book->user->college->name}}</h4>
					</div>
				</div>
			</a>
		</div>
	@endforeach
@else
	<div class="row ad col-lg-12 col-md-12 col-xs-12 col-sm-12">
		<h2>No Results Found</h2>
	</div>
@endif