@extends('layouts.admin')

@section('content')

<div class="row">
    <ol class="breadcrumb">
        <li><a href="{{route('admin.dashboard')}}">
            <em class="fa fa-home"></em>
        </a></li>
        <li><a href="{{route('admin.offers.index')}}">
                Offers
        </a></li>
        <li class="active">Detail</li>
    </ol>
</div>

<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Offer Detail</h1>
    </div>
</div>

<div class="panel panel-default">
    <div class="panel-heading">
        {{$offer->name}}
        <a href="{{route('admin.offers.edit',['id'=>$offer->id])}}" class="pull-right">Edit</a>
    </div>

    <div class="panel-body">
        <div class="container">
            <img src="{{ $offer->image_350 }}" alt="{{ $offer->name}}" class="image-responsive pull-left" style="padding:15px">
            <h3><a href="{{$offer->link}}" target="_blank">{{$offer->name}}</a></h3>
            <p style="white-space: pre-line;">{{$offer->description}}</p>
            <a href="{{$offer->link}}" target="_blank">{{$offer->link}}</a>
            
        </div>
    </div>
</div>
@endsection