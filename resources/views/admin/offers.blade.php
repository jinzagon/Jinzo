@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-default">
        <div class="panel-heading">
          Manage those offers
          <div class="pull-right">
            <a href="/admin/offers/create">
              <i class="fas fa-plus"></i>
            </a>
          </div>
        </div>

        <div class="panel-body">

          <table class="table table-striped table-hover ">
            <thead>
              <tr>
                <th>#</th>
                <th>Name</th>
                <th>Actions</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($offers as $offer)
              <tr>
                <td>{{ $offer->id }} </td>
                <td>{{ $offer->name }}</td>
                <td><a href="#">View</a> | <a href="#">Modify</a> | <a href="#">Delete</a></td>
              </tr>
              @endforeach
            </tbody>
          </table>

        </div>
      </div>
    </div>
  </div>
</div>
@endsection
