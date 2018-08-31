@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Offer Detail
                    <a href="{{route('admin.offers.edit',['id'=>$offer->id])}}" class="pull-right">Edit</a>
                </div>

                <div class="panel-body">

                    <ol class="breadcrumb">
                        <li>
                            <a href="{{route('admin.offers.index')}}">Offers</a>
                        </li>
                        <li class="active">Detail</li>
                    </ol>
                    <div class="row">
                        <div class="col-md-6">
                            <img src="{{ $offer->image_350 }}" alt="{{ $offer->name}}" class="image-responsive">
                        </div>
                        <div class="col-md-6">
                            <h3><a href="{{$offer->link}}" target="_blank">{{$offer->name}}</a></h3>
                            <p style="white-space: pre-line;">{{$offer->description}}</p>
                            <a href="{{$offer->link}}" target="_blank">{{$offer->link}}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection