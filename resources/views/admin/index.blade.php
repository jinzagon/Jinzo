@extends('layouts.admin')

@section('content')
<div class="row">
    <ol class="breadcrumb">
        <li><a href="#">
            <em class="fa fa-home"></em>
        </a></li>
        <li class="active">Dashboard</li>
    </ol>
</div><!--/.row-->

<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Dashboard</h1>
    </div>
</div><!--/.row-->

<div class="row">
    <div class="col-xs-6 col-md-3">
        <div class="panel panel-default">
            <div class="panel-body ">
                <h4 class="text-center">Account</h4>
            </div>
        </div>
    </div>
    <div class="col-xs-6 col-md-3">
        <div class="panel panel-default">
            <div class="panel-body ">
                <h4 class="text-center">Offers</h4>
            </div>
        </div>
    </div>
    <div class="col-xs-6 col-md-3">
        <div class="panel panel-default">
            <div class="panel-body ">
                <h4 class="text-center">Settings</h4>
            </div>
        </div>
    </div>
    <div class="col-xs-6 col-md-3">
        <div class="panel panel-default">
            <div class="panel-body">
                <h4 class="text-center">Visitors</h4>
            </div>
        </div>
    </div>
</div><!--/.row-->
@endsection

@section('scripts')
<script>
</script>
    
@endsection
