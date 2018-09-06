@extends('layouts.admin')

@section('content')
<div class="row">
    <ol class="breadcrumb">
        <li><a href="{{route('admin.dashboard')}}">
            <em class="fa fa-home"></em>
        </a></li>
        <li><a href="{{route('admin.offers.index')}}">Offers
        </a></li>
        <li class="active">Edit</li>
    </ol>
</div>

<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Edit Offer</h1>
    </div>
</div>
<div class="panel panel-default">
    <div class="panel-heading">
        Edit Offer
    </div>
    <div class="panel-body">
        <form class="form-horizontal" method="POST" action="{{route('admin.offers.update', ['id' => $offer->id])}}">
            <input name="_method" type="hidden" value="PUT">
            {{ csrf_field() }}
            <fieldset>
                <div class="form-group">
                    <label class="col-md-2 control-label" for="name">Name</label>
                    <div class="col-md-10">
                        <input id="name" name="name" placeholder="" class="form-control input-md" required="" type="text" value="{{$offer->name}}">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-2 control-label" for="name">Active</label>
                    <div class="col-md-10">
                        <input id="is_active" name="is_active" placeholder="" class="input-md" required="" type="checkbox" value="1" {{$offer->is_active?'checked="checked"':''}}>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-2 control-label" for="name">Rank</label>
                    <div class="col-md-10">
                        <input id="rank" name="rank" placeholder="" class="input-md form-control" required="" type="number" value="{{$offer->rank}}" min="0">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-2 control-label" for="name">Category</label>
                    <div class="col-md-10">
                        <select id="category_id" name="category_id" class="input-md form-control">
                            <option value="0">Select a category</option>
                            @foreach($categories as $category )
                                <option value="{{$category->id}}" {{$category->id==$offer->category_id ? 'selected' : ''}}>{{$category->name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-2 control-label" for="description">Description</label>
                    <div class="col-md-10">
                        <textarea class="form-control" id="description" name="description" rows="10">{{$offer->description}}</textarea>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-2 control-label" for="image_50">50x50 Image</label>
                    <div class="col-md-10">
                        <input id="image_50" name="image_50" placeholder="http://"  value="{{$offer->image_50}}" class="form-control input-md" type="text">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-2 control-label" for="image_350">350x500 Image</label>
                    <div class="col-md-10">
                        <input id="image_350" name="image_350" placeholder="http://" class="form-control input-md" value="{{$offer->image_350}}" type="text">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-2 control-label" for="link">Link</label>
                    <div class="col-md-10">
                        <input id="link" name="link" placeholder="http://" class="form-control input-md" type="text" value="{{$offer->link}}">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-2 control-label" for="submit"></label>
                    <div class="col-md-2">
                        <button id="submit" name="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>

            </fieldset>
        </form>
    </div>
</div>
@endsection