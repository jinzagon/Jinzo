@extends('layouts.main')

@section('pageStyle','offers-list-page')

@section('content')
    <section>
        <div class="container">
            <H1 class="text-center">Offers</H1>
        </div>
    </section>

    
    <section class="bg-light offers-list">
        <div class="container">
            <div class="row offers">
                @foreach ($offers as $offer)
                <div class="col-md-4 ">
                    <div class="card">
                        <div class="image-container">
                            <div class="details">
                                <h3><a href="{{route('offers.show',['id'=>$offer->id])}}">{{$offer->name}}</a></h3>
                                @if(!is_null($offer->category))
                                    <span class="badge">{{ $offer->category->name}}</span>
                                @endif
                            </div>
                            <img src="{{url($offer->image_350)}}" alt="Avatar">
    
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

@endsection