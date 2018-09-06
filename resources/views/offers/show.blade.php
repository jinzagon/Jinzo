@extends('layouts.main')

@section('pageStyle','offer-page')

@section('navbarStyle','default')

@section('content')
    <div class="container" style="padding:15px;background: white">
        <div class="row">
            <div class="col-md-6">
                <div class="image-container">

                    <img src="{{ $offer->image_350 }}" alt="{{ $offer->name}}">
                </div>

            </div>
            <div class="col-md-6">
                <h1>{{$offer->name}}</h1>
                @if(!is_null($offer->category))
                    <span class="badge">{{ $offer->category->name}}</span>
                @endif
                <br>
                <p style="white-space: pre-line;">{{$offer->description}}</p>
                <a href="{{$offer->link}}" target="_blank">{{$offer->link}}</a>
                
        
                <div class="reviews text-right">
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
    </div>

@endsection