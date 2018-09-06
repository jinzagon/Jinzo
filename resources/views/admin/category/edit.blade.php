@extends('layouts.admin')

@section('content')
<div class="row">
    <ol class="breadcrumb">
        <li><a href="{{route('admin.dashboard')}}">
                <em class="fa fa-home"></em>
            </a></li>
        <li><a href="{{route('admin.categories.index')}}">
                Categories
            </a></li>
        <li class="active">Edit</li>
    </ol>
</div>

<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Edit Category </h1>
    </div>
</div>

<div class="panel panel-default">
    <div class="panel-body">
        <form class="" method="POST" action="{{route('admin.categories.update', ['id'=>$category->id])}}">
            <input name="_method" type="hidden" value="PUT">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" name="name" value="{{$category->name}}">
            </div>
            <div class="form-group">
                <label for="name">Description</label>
                <textarea type="text" class="form-control" name="description">{{$category->description}}</textarea>
            </div>
            <button class="btn btn-primary" type="submit">Submit</button>
        </form>
    </div>
</div>



@endsection