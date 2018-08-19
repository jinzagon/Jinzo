@extends('layouts.web')

@section('content')

<div class="row">
	@foreach ($offers as $offer)
	<div class="col-sm">
		<div class="card" style="width: 18rem; margin-bottom: 1rem;">
			<div class="card-body">
				<h5 class="card-title">{{ $offer->name }}</h5>
				<p class="card-text">{{ $offer->description }}</p>
				<a href="{{ $offer->link }}" class="card-link">Link</a>
			</div>
		</div>
	</div>
	@endforeach
</div>

@endsection