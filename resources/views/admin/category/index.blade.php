@extends('layouts.admin')

@section('content')
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="{{route('admin.dashboard')}}">
                <em class="fa fa-home"></em>
            </a></li>
            <li class="active">Categories</li>
        </ol>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Categories</h1>
        </div>
    </div>
    
    <div class="panel panel-default">
        <div class="panel-body">
            <div class="text-right">
                <a class="btn btn-primary" href="{{route('admin.categories.create')}}">Create</a>
            </div>
            <div class="table-responsive">
                <table class="table table-hover table-striped">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Created</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($categories  as $category)
                        <tr>
                            <td>{{$category->id}}</td>
                            <td>{{$category->name}}</td>
                            <td>{{$category->created_at->toFormattedDateString()}}</td>
                            <td>
                                <a href="{{route('admin.categories.edit',['id'=>$category->id])}}">Modify</a> |
                                <a href="{{route('admin.categories.destroy',['id'=>$category->id])}}">Delete</a>
                            </td>
                        </tr>
                        @endforeach
                        @if($categories->count()==0)
                            <tr>
                                <td class="text-center" colspan="4">There are no categories</td>
                            </tr>
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    
    

@endsection