@extends('layouts.admin')

@section('content')
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="{{route('admin.dashboard')}}">
                <em class="fa fa-home"></em>
            </a></li>
            <li class="active">Offers</li>
        </ol>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Offers</h1>
        </div>
    </div>

    <div class="panel panel-default">
        <div class="panel-heading">
            Offers
            <div class="pull-right">
                <a href="/admin/offers/create">
                    <i class="fa fa-plus"></i>
                </a>
            </div>
        </div>

        <div class="panel-body">

            <table class="table table-striped table-hover ">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th class="text-center">Active</th>
                        <th class="text-center">Rank</th>
                        <th class="text-center">Ratings</th>
                        <th class="text-center">Created</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($offers as $offer)
                    <tr>
                        <td>{{ $offer->id }} </td>
                        <td>{{ $offer->name }} </td>
                        <td class="text-center"><i class="fa {{ $offer->is_active? 'fa-check' : 'fa-square-o'}}"></i></td>
                        <td class="text-center">{{ $offer->rank }}</td>
                        <td class="text-center">{{$offer->ratings()->count() ?? $offer->ratings()->sum('rating')/$offer->ratings()->count()}}</td>
                        <td class="text-center">{{ $offer->created_at->toFormattedDateString() }}</td>
                        <td>
                            <a href="{{route('admin.offers.show', ['id'=>$offer->id])}}">View</a> |
                            <a href="{{route('admin.offers.edit', ['id'=>$offer->id])}}">Modify</a> |
                            <a href="{{route('admin.offers.destroy', ['id'=>$offer->id])}}">Delete</a>
                        </td>
                    </tr>
                    @endforeach
                    @if($offers->count()==0)
                        <tr>
                            <td colspan="3" class="text-center">There are current no offers avaliable</td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
    
    </script>
@endsection