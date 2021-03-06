<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <title>{{ config('app.name', 'Offers Example') }}</title>
    
    <!-- Styles -->
    <link href="{{url('templates/lumino/css/bootstrap.min.css')}}" rel="stylesheet">
	<link href="{{url('templates/lumino/css/font-awesome.min.css')}}" rel="stylesheet">
	<link href="{{url('templates/lumino/css/datepicker3.css')}}" rel="stylesheet">
	<link href="{{url('templates/lumino/css/styles.css')}}" rel="stylesheet">
	
</head>
<body>
    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse"><span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span></button>
				<a class="navbar-brand" href="{{url('/')}}"><span>Offers</span>Example</a>
				<ul class="nav navbar-top-links navbar-right">
					<!-- <li class="dropdown"><a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
						<em class="fa fa-envelope"></em><span class="label label-danger">15</span>
					</a>
						<ul class="dropdown-menu dropdown-messages">
							<li>
								<div class="dropdown-messages-box"><a href="profile.html" class="pull-left">
									<img alt="image" class="img-circle" src="http://placehold.it/40/30a5ff/fff">
									</a>
									<div class="message-body"><small class="pull-right">3 mins ago</small>
										<a href="#"><strong>John Doe</strong> commented on <strong>your photo</strong>.</a>
									<br /><small class="text-muted">1:24 pm - 25/03/2015</small></div>
								</div>
							</li>
							<li class="divider"></li>
							<li>
								<div class="dropdown-messages-box"><a href="profile.html" class="pull-left">
									<img alt="image" class="img-circle" src="http://placehold.it/40/30a5ff/fff">
									</a>
									<div class="message-body"><small class="pull-right">1 hour ago</small>
										<a href="#">New message from <strong>Jane Doe</strong>.</a>
									<br /><small class="text-muted">12:27 pm - 25/03/2015</small></div>
								</div>
							</li>
							<li class="divider"></li>
							<li>
								<div class="all-button"><a href="#">
									<em class="fa fa-inbox"></em> <strong>All Messages</strong>
								</a></div>
							</li>
						</ul>
					</li>
					<li class="dropdown"><a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
						<em class="fa fa-bell"></em><span class="label label-info">5</span>
					</a>
						<ul class="dropdown-menu dropdown-alerts">
							<li><a href="#">
								<div><em class="fa fa-envelope"></em> 1 New Message
									<span class="pull-right text-muted small">3 mins ago</span></div>
							</a></li>
							<li class="divider"></li>
							<li><a href="#">
								<div><em class="fa fa-heart"></em> 12 New Likes
									<span class="pull-right text-muted small">4 mins ago</span></div>
							</a></li>
							<li class="divider"></li>
							<li><a href="#">
								<div><em class="fa fa-user"></em> 5 New Followers
									<span class="pull-right text-muted small">4 mins ago</span></div>
							</a></li>
						</ul>
					</li> -->
				</ul>
			</div>
		</div><!-- /.container-fluid -->
	</nav>
	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<div class="profile-sidebar">
			<div class="profile-userpic">
				<img src="{{url('imgs/user-male.png')}}" class="img-responsive" alt="">
			</div>
			<div class="profile-usertitle">
				<div class="profile-usertitle-name text-capitalize">{{Auth::user()->name}}</div>
				<div class="profile-usertitle-status"><span class="indicator label-success"></span>Online</div>
			</div>
			<div class="clear"></div>
		</div>
		<div class="divider"></div>
		<!-- <form role="search">
			<div class="form-group">
				<input type="text" class="form-control" placeholder="Search">
			</div>
		</form> -->
		<ul class="nav menu">
			<li><a href="{{route('admin.dashboard')}}"><em class="fa fa-dashboard">&nbsp;</em> Dashboard</a></li>
			<li><a href="{{route('admin.offers.index')}}"><em class="fa fa-tags">&nbsp;</em> Offers</a></li>
			<li><a href="{{route('admin.categories.index')}}"><em class="fa fa-list">&nbsp;</em> Categories</a></li>
			<li>
				<a href="{{ route('logout') }}"
					onclick="event.preventDefault();
							 document.getElementById('logout-form').submit();">
					<em class="fa fa-power-off">&nbsp;</em> 
					Logout
				</a>

				<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
					{{ csrf_field() }}
				</form>
			</li>
		</ul>
	</div><!--/.sidebar-->
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		@yield('content');
	</div>	<!--/.main-->
	

    <!-- Scripts -->
    <script src="{{url('templates/lumino/js/jquery-1.11.1.min.js')}}"></script>
	<script src="{{url('templates/lumino/js/bootstrap.min.js')}}"></script>
	<script src="{{url('templates/lumino/js/chart.min.js')}}"></script>
	<script src="{{url('templates/lumino/js/chart-data.js')}}"></script>
	<script src="{{url('templates/lumino/js/bootstrap-datepicker.js')}}"></script>
	<script src="{{url('templates/lumino/js/custom.js')}}"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    @yield('scripts')
</body>
</html>
