@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Modify Offer
                </div>
                <div class="panel-body">
                    <ol class="breadcrumb">
                        <li>
                            <a href="{{route('admin.offers.index')}}">Offers</a>
                        </li>
                        <li>
                            <a href="{{route('admin.offers.show',['id'=>$offer->id])}}">Detail</a>
                        </li>
                        <li class="active">Edit</li>
                    </ol>
                    <form class="form-horizontal" method="POST" action="{{route('admin.offers.update', ['id' => $offer->id])}}">
                        <input name="_method" type="hidden" value="PUT">
                        {{ csrf_field() }}
                        <fieldset>
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="name">Name</label>
                                <div class="col-md-8">
                                    <input id="name" name="name" placeholder="" class="form-control input-md" required="" type="text" value="{{$offer->name}}">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label" for="description">Description</label>
                                <div class="col-md-8">
                                    <textarea class="form-control" id="description" name="description" rows="10">{{$offer->description}}</textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label" for="image_50">50x50 Image</label>
                                <div class="col-md-8">
                                    <input id="image_50" name="image_50" placeholder="http://"  value="{{$offer->image_50}}" class="form-control input-md" type="text">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label" for="image_350">350x500 Image</label>
                                <div class="col-md-8">
                                    <input id="image_350" name="image_350" placeholder="http://" class="form-control input-md" value="{{$offer->image_350}}" type="text">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label" for="link">Link</label>
                                <div class="col-md-8">
                                    <input id="link" name="link" placeholder="http://" class="form-control input-md" type="text" value="{{$offer->link}}">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label" for="submit"></label>
                                <div class="col-md-4">
                                    <button id="submit" name="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </div>

                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection