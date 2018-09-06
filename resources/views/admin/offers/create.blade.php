@extends('layouts.admin')

@section('content')
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="{{route('admin.dashboard')}}">
                <em class="fa fa-home"></em>
            </a></li>
            <li><a href="{{route('admin.offers.index')}}">
            </a>Offers</li>
            <li class="active">Create</li>
        </ol>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Create Offer</h1>
        </div>
    </div>

    <div class="panel panel-default">
        <div class="panel-heading">
            Create a New Offer
        </div>

        <div class="panel-body">
            <form class="form-horizontal" method="POST" action="{{route('admin.offers.store')}}">
                <fieldset>

                    {{ csrf_field() }}

                    <div class="form-group">
                        <label class="col-md-2 control-label" for="name">Name</label>
                        <div class="col-md-10">
                            <input id="name" name="name" placeholder="" class="form-control input-md" required=""
                                type="text">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label" for="name">Active</label>
                        <div class="col-md-10">
                            <input id="is_active" name="is_active" placeholder="" class="input-md" required="" type="checkbox" value="1">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label" for="name">Rank</label>
                        <div class="col-md-10">
                            <input id="rank" name="rank" placeholder="" class="input-md form-control" required="" type="number"  min="0">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-2 control-label" for="name">Category</label>
                        <div class="col-md-10">
                            <select id="category_id" name="category_id" class="input-md form-control">
                                <option value="0">Select a category</option>
                                @foreach($categories as $category )
                                    <option value="{{$category->id}}">{{$category->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-2 control-label" for="description">Description</label>
                        <div class="col-md-10">
                            <textarea class="form-control" id="description" name="description" rows="10"></textarea>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-2 control-label" for="image_50">50x50 Image</label>
                        <div class="col-md-10">
                            <input id="image_50" name="image_50" placeholder="http://" class="form-control input-md"
                                required="" type="text">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-2 control-label" for="image_350">350x500 Image</label>
                        <div class="col-md-10">
                            <input id="image_350" name="image_350" placeholder="http://" class="form-control input-md"
                                required="" type="text">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-2 control-label" for="link">Link</label>
                        <div class="col-md-10">
                            <input id="link" name="link" placeholder="http://" class="form-control input-md"
                                required="" type="text">
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