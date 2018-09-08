@extends('layouts.main')

@section('pageStyle','offers-list-page')

@section('content')
    <section style="margin-bottom: 50px;">
        <div class="container">
            <H1 class="text-center">Offers</H1>
            <form method="GET" action="{{route('offers.index')}}" >
                <div class="form-group">
                    <input type="text" name="q" id="q" class="form-control" placeholder="Search" value="{{ app('request')->input('q') }}">                    
                </div>
                <button class="btn btn-primary pull-right" type="submit">Search</button>
            </form>
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

                @if($offers)
                    <p class="text-center">There are no offers that matches your search</p>
                @endif
            </div>
        </div>
    </section>

@endsection