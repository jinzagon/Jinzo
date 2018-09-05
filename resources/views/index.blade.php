@extends('layouts.main')

@section('pageStyle','landing-page')
@section('navbarStyle', 'navbar-fixed-top')

@section('content')

<div class="jumbotron">
	<div class="container text-center">
		<div>
			<h1>Top Offers</h1>
			<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
				<!-- Wrapper for slides -->
				<div class="carousel-inner" role="listbox">
					
					@foreach($topOffers as $key => $offer)
						<div class="item {{$key==0? 'active':''}}">
							<div class="carousel-content">

								<h4>
									<a href="{{route('offers.show', ['id'=>$offer->id])}}">{{ $offer->name}}</a></p>
								</h4>
							</div>							
						</div>
					@endforeach
				</div>
				<!-- Indicators -->
				<ol class="carousel-indicators">
					@foreach($topOffers as $key => $offer)
						<li data-target="#carousel-example-generic" data-slide-to="{{$key}}" class="{{$key==0?'Active':''}}"></li>
					@endforeach
				</ol>
			</div>
			<div class="input-group">
				<input type="text" name="search" id="search" class="form-control" placeholder="What are you searching for">
				<div class="input-group-addon">
					Search
				</div>
			</div>
		</div>
	</div>
</div>

<section class="bg-light offers-list text-center">

	<div class="section-heading">
		<h3>Top offers for the month</h3>
		<p>Discover the top offers in the music department for the month</p>

	</div>
	<div class="container">
		<div class="row offers">
			@foreach ($offers as $offer)
			<div class="col-md-4 ">
				<div class="card">
					<div class="image-container">
						<div class="details">
							<h3><a href="{{route('offers.show',['id'=>$offer->id])}}">{{$offer->name}}</a></h3>
						</div>
						<img src="{{url($offer->image_350)}}" alt="Avatar" class="img-responsive ">

					</div>
					<div class="reviews">
						<span>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star-half-o"></i>
							<i class="fa fa-star-o"></i>

						</span>
						<span class="text-muted">({{$offer->ratings->count()}} Reviews)</span>
					</div>
				</div>
			</div>
			@endforeach
		</div>
	</div>
</section>

<section class="site-stats  container-fluid">
	<div class="container">
		<div class="row">
			<div class="col-md-4 text-center">
				<h1>{{$numOffers}}</h1>
				<p>Offers</p>
			</div>
			<div class="col-md-4 text-center">
				<h1>{{$numUsers}}</h1>
				<p>Users</p>
			</div>
			<div class="col-md-4 text-center">
				<h1>{{$vistors}}</h1>
				<p>Visitors</p>
			</div>
		</div>
	</div>
</section>

<section>
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<h1>Get YOU UPDATE</h1>
			</div>
			<div class="col-md-8">
				<div class="form-group" style="margin-top:23px">
					<div class="input-group">
						<input type="text" class="form-control" placeholder="Your Email Address" >
						
						<div class="input-group-addon"><i class="fa fa-paper-plane"></i></div>						
					</div>
				</div>
			</div>
		</div>


	</div>
</section>

<footer  class="footer">
	<div class="container ">
		<div class="row">
			<div class="col-md-4 text-center">
				<h1>Final Words</h1>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt </p>
			</div>
			<div class="col-md-4 text-center">
				<h1>Contact Us</h1>
				<p>contact@gmail.com</p>
		</div>
			<div class="col-md-3 text-center">
				<h1>Need Mobile Apps?</h1>
				<p>Subscribe here for you wil be notified when mobile apps are avaliable</p>
				
				<div class="input-group">
					<input type="text" placeholder="Your Email" class="form-control">
					
					<div class="input-group-addon"><i class="fa fa-paper-plane"></i></div>
					
					
				</div>
				
			</div>
		</div>
	</div>
	<div class="text-center darker">
		<p>Copyright © 2018. All rights reserved</p>
	</div>
</footer>
@endsection

@section('scripts')
<script type="text/javascript">
	$(function($) {
		function fixDiv() {
			var $navbar = $('#main-navbar');
			console.log($(window).scrollTop());
			if ($(window).scrollTop() > 0){
				$navbar.removeClass('invisible-navbar');

			}
			else{
				$navbar.addClass('invisible-navbar');

			}
   		}
 		$(window).scroll(fixDiv);
		fixDiv();
   });
</script>
@endsection