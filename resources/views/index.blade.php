@extends('layouts.main')

@section('content')

<!-- <div class="row">
	@foreach ($offers as $offer)
	<div class="col-lg-4">
		<div class="card">
			<div class="card-body">
				<h5 class="card-title">{{ $offer->name }}</h5>
				<p class="card-text" style="white-space: pre-line;">{{ $offer->description }}</p>
				<a href="{{ $offer->link }}" class="card-link">Link</a>
			</div>
		</div>
	</div>
	@endforeach
</div> -->
<div class="jumbotron">
	<div class="container text-center">
		<div>
			<h1>Top Offers</h1>
			<p>Cillum cupidatat laborum non ipsum sunt cillum ad ea excepteur nostrud proident est. Cillum commodo dolor ea incididunt pariatur voluptate est in. Excepteur ex mollit ullamco eiusmod dolore. Laboris est ullamco ex eiusmod et. Labore voluptate voluptate mollit laboris. Ipsum eu nisi in aute minim minim dolore nulla consequat.</p>
			<div class="input-group">
				<input type="text" name="search" id="search" class="form-control" placeholder="What are you searching for">
				<div class="input-group-addon">
					Search
				</div>
			</div>
		</div>
	</div>
</div>

<section class="bg-light top-offers text-center">

	<div class="section-heading">
		<h3>Top offers for the month</h3>
		<p>Discover the top offers in the music department for the month</p>

	</div>
	<div class="container">
		<div class="row offers">
			@foreach ($offers as $offer)
				<div class="col-md-4 ">
					<div class="card">
						<img src="{{url($offer->image_350)}}" alt="Avatar" style="width:100%">
						<div class="reviews">
							<span>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>

							</span>
							<span class="text-muted">(12 Reviews)</span>
						</div>
					</div>
				</div>
			@endforeach
		</div>  
	</div>
</section>

@endsection