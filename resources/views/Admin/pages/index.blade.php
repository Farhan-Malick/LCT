<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>Last-Chance-Ticket Admin | Dashboard V2</title>
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />
	
	<!-- ================== BEGIN BASE CSS STYLE ================== -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet" />
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
	<link href="{{asset("AdminAssets/css/google/app.min.css")}}" rel="stylesheet" />
	<!-- ================== END BASE CSS STYLE ================== -->
	
	<!-- ================== BEGIN PAGE LEVEL CSS STYLE ================== -->
	<link href="{{asset("AdminAssets/plugins/jvectormap-next/jquery-jvectormap.css")}}" rel="stylesheet" />
	<link href="{{asset("AdminAssets/plugins/bootstrap-calendar/css/bootstrap_calendar.css")}}" rel="stylesheet" />
	<link href="{{asset("AdminAssets/plugins/gritter/css/jquery.gritter.css")}}"  rel="stylesheet" />
	<link href="{{asset("AdminAssets/plugins/nvd3/build/nv.d3.css")}}"  rel="stylesheet" />
</head>
<body>
	<!-- begin #page-loader -->
	<div id="page-loader" class="fade show">
		<span class="spinner"></span>
	</div>
	<!-- end #page-loader -->
	
	<!-- begin #page-container -->
	<div id="page-container" class="fade page-sidebar-fixed page-header-fixed page-with-wide-sidebar page-with-light-sidebar">
		<!-- begin #header -->
		<div id="header" class="header navbar-default">
			<!-- begin navbar-header -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed navbar-toggle-left" data-click="sidebar-minify">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a href="index.html" class="navbar-brand">
					<b class="mr-1">Last-Chance-Ticket</b> 
					<span class="navbar-logo">
						<span class="text-blue">G</span>
						<span class="text-red">o</span>
						<span class="text-orange">o</span>
						<span class="text-blue">g</span>
						<span class="text-green">l</span>
						<span class="text-red">e</span>
					</span>
				</a>
				<button type="button" class="navbar-toggle" data-click="sidebar-toggled">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
			</div>
			<!-- end navbar-header --><!-- begin header-nav -->
			<ul class="navbar-nav d-flex flex-grow-1">
				<li class="navbar-form flex-grow-1">
					<form action="" method="POST" name="search">
						<div class="form-group">
							<input type="text" class="form-control" placeholder='Try searching "Users Today"' />
							<button type="submit" class="btn btn-search"><i class="fa fa-search"></i></button>
						</div>
					</form>
				</li>
				<li class="dropdown">
					<a href="#" data-toggle="dropdown" class="dropdown-toggle">
						<i class="fa fa-bell"></i>
						<span class="label label-primary">5</span>
					</a>
					<div class="dropdown-menu media-list dropdown-menu-right">
						<div class="dropdown-header">Notifications (5)</div>
						<a href="javascript:;" class="dropdown-item media">
							<div class="media-left">
								<i class="fa fa-bug media-object bg-silver-darker"></i>
							</div>
							<div class="media-body">
								<h6 class="media-heading">Server Error Reports <i class="fa fa-exclamation-circle text-danger"></i></h6>
								<div class="text-muted f-s-12">3 minutes ago</div>
							</div>
						</a>
						<a href="javascript:;" class="dropdown-item media">
							<div class="media-left">
								<img src="{{asset("AdminAssets/img/user/user-1.jpg")}}" class="media-object" alt="" />
								<i class="fab fa-facebook-messenger text-blue media-object-icon"></i>
							</div>
							<div class="media-body">
								<h6 class="media-heading">John Smith</h6>
								<p>Quisque pulvinar tellus sit amet sem scelerisque tincidunt.</p>
								<div class="text-muted f-s-12">25 minutes ago</div>
							</div>
						</a>
						<a href="javascript:;" class="dropdown-item media">
							<div class="media-left">
								<img src="{{asset("AdminAssets/img/user/user-2.jpg")}}" class="media-object" alt="" />
								<i class="fab fa-facebook-messenger text-blue media-object-icon"></i>
							</div>
							<div class="media-body">
								<h6 class="media-heading">Olivia</h6>
								<p>Quisque pulvinar tellus sit amet sem scelerisque tincidunt.</p>
								<div class="text-muted f-s-12">35 minutes ago</div>
							</div>
						</a>
						<a href="javascript:;" class="dropdown-item media">
							<div class="media-left">
								<i class="fa fa-plus media-object bg-silver-darker"></i>
							</div>
							<div class="media-body">
								<h6 class="media-heading"> New User Registered</h6>
								<div class="text-muted f-s-12">1 hour ago</div>
							</div>
						</a>
						<a href="javascript:;" class="dropdown-item media">
							<div class="media-left">
								<i class="fa fa-envelope media-object bg-silver-darker"></i>
								<i class="fab fa-google text-warning media-object-icon f-s-14"></i>
							</div>
							<div class="media-body">
								<h6 class="media-heading"> New Email From John</h6>
								<div class="text-muted f-s-12">2 hour ago</div>
							</div>
						</a>
						<div class="dropdown-footer text-center">
							<a href="javascript:;">View more</a>
						</div>
					</div>
				</li>
				<li class="dropdown navbar-user">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">
						<img src="{{asset("AdminAssets/img/user/user-13.jpg")}}" alt="" /> 
						<span class="d-none d-md-inline">Farhan Malik</span> <b class="caret"></b>
					</a>
					<div class="dropdown-menu dropdown-menu-right">
						<a href="javascript:;" class="dropdown-item">Edit Profile</a>
						<a href="javascript:;" class="dropdown-item"><span class="badge badge-danger pull-right">2</span> Inbox</a>
						<a href="javascript:;" class="dropdown-item">Calendar</a>
						<a href="javascript:;" class="dropdown-item">Setting</a>
						<div class="dropdown-divider"></div>
						<a href="javascript:;" class="dropdown-item">Log Out</a>
					</div>
				</li>
			</ul>
			<!-- end header-nav -->
		</div>
		<!-- end #header -->
		
		<!-- begin #sidebar -->
		@include('Admin.includes.sidebar')
		<!-- end #sidebar -->
		
		<!-- begin #content -->
		<div id="content" class="content">
			<!-- begin breadcrumb -->
			<ol class="breadcrumb float-xl-right">
				<li class="breadcrumb-item"><a href="javascript:;">Home</a></li>
				<li class="breadcrumb-item"><a href="javascript:;">Dashboard</a></li>
				<li class="breadcrumb-item active">Last-Chance-Ticket</li>
			</ol>
			<!-- end breadcrumb -->
			<!-- begin page-header -->
			<h1 class="page-header">Last-Chance-Ticket Dashboard </h1>
			<!-- end page-header -->
			<!-- begin row -->
			<div class="row">
				<!-- begin col-3 -->
				<div class="col-xl-3 col-md-6">
					<div class="widget widget-stats bg-blue">
						<div class="stats-icon stats-icon-lg"><i class="fa fa-globe fa-fw"></i></div>
						<div class="stats-content">
							<div class="stats-title">TODAY'S VISITS</div>
							<div class="stats-number">7,842,900</div>
							<div class="stats-progress progress">
								<div class="progress-bar" style="width: 70.1%;"></div>
							</div>
							<div class="stats-desc">Better than last week (70.1%)</div>
						</div>
					</div>
				</div>
				<!-- end col-3 -->
				<!-- begin col-3 -->
				<div class="col-xl-3 col-md-6">
					<div class="widget widget-stats bg-blue">
						<div class="stats-icon stats-icon-lg"><i class="fa fa-dollar-sign fa-fw"></i></div>
						<div class="stats-content">
							<div class="stats-title">TODAY'S PROFIT</div>
							<div class="stats-number">180,200</div>
							<div class="stats-progress progress">
								<div class="progress-bar" style="width: 40.5%;"></div>
							</div>
							<div class="stats-desc">Better than last week (40.5%)</div>
						</div>
					</div>
				</div>
				<!-- end col-3 -->
				<!-- begin col-3 -->
				<div class="col-xl-3 col-md-6">
					<div class="widget widget-stats bg-blue">
						<div class="stats-icon stats-icon-lg"><i class="fa fa-archive fa-fw"></i></div>
						<div class="stats-content">
							<div class="stats-title">NEW ORDERS</div>
							<div class="stats-number">38,900</div>
							<div class="stats-progress progress">
								<div class="progress-bar" style="width: 76.3%;"></div>
							</div>
							<div class="stats-desc">Better than last week (76.3%)</div>
						</div>
					</div>
				</div>
				<!-- end col-3 -->
				<!-- begin col-3 -->
				<div class="col-xl-3 col-md-6">
					<div class="widget widget-stats bg-blue">
						<div class="stats-icon stats-icon-lg"><i class="fa fa-comment-alt fa-fw"></i></div>
						<div class="stats-content">
							<div class="stats-title">NEW COMMENTS</div>
							<div class="stats-number">3,988</div>
							<div class="stats-progress progress">
								<div class="progress-bar" style="width: 54.9%;"></div>
							</div>
							<div class="stats-desc">Better than last week (54.9%)</div>
						</div>
					</div>
				</div>
				<!-- end col-3 -->
			</div>
			<!-- end row -->
			<!-- begin row -->
            <div class="row">
                <!-- begin col-6 -->
                <div class="col-xl-12">
                    <!-- begin panel -->
                    <div class="panel panel-inverse" data-sortable-id="form-validation-1">
                        <!-- begin panel-body -->
                        <div class="panel-body">
                            
                            <table class="table mt-3">
                                <thead class="thead-dark">
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">title</th>
                                        {{-- <th scope="col">Event</th> --}}
                                        <th scope="col">price</th>
                                        <th scope="col">currency</th>
                                        <th scope="col">quantity</th>
                                        <th scope="col">section</th>
                                        <th scope="col">row</th>
                                        <th scope="col">seat from</th>
                                        <th scope="col">seat to</th>
                                        <th scope="col">ticket type</th>
                                        <th scope="col">ticket restrictions</th>
                                        <th scope="col">status</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($tickets as $ticket)
                                    <tr>
                                        <td>{{$ticket->id}}</td>
                                        <td>{{$ticket->title}}</td>
                                        {{-- <td>{{$ticket->event->title}}</td> --}}
                                        <td>{{$ticket->price}}</td>
                                        <td>{{$ticket->currency}}</td>
                                        <td>{{$ticket->quantity}}</td>
                                        <td>{{$ticket->section}}</td>
                                        <td>{{$ticket->row}}</td>
                                        <td>{{$ticket->seat_from}}</td>
                                        <td>{{$ticket->seat_to}}</td>
                                        <td>{{$ticket->ticket_type}}</td>
                                        <td>{{$ticket->ticket_restrictions}}</td>
                                        <td>{{$ticket->status}}</td>
                                        <td>
                                            <a
                                                class="btn btn-primary"
                                                href="{{route('admin.section_rows.edit',$ticket->id)}}"
                                                >edit</a
                                            >
            
                                            <a
                                                class="btn btn-danger"
                                                href="{{route('admin.section_rows.destroy',$ticket->id)}}"
                                                >Delete</a
                                            >
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- end panel-body -->
                    </div>
                    <!-- end panel -->
                </div>
                <!-- end col-6 -->
            </div>
			<!-- end row -->
		</div>
		<!-- end #content -->
	
		<!-- begin scroll to top btn -->
		<a href="javascript:;" class="btn btn-icon btn-circle btn-success btn-scroll-to-top fade" data-click="scroll-top"><i class="fa fa-angle-up"></i></a>
		<!-- end scroll to top btn -->
	</div>
	<!-- end page container -->
	
	<!-- ================== BEGIN BASE JS ================== -->
	<script src="{{asset("AdminAssets/js/app.min.js")}}"></script>
	<script src="{{asset("AdminAssets/js/theme/google.min.js")}}"></script>
	<!-- ================== END BASE JS ================== -->
	
	<!-- ================== BEGIN PAGE LEVEL JS ================== -->
	<script src="{{asset("AdminAssets/plugins/d3/d3.min.js")}}"></script>
	<script src="{{asset("AdminAssets/plugins/nvd3/build/nv.d3.min.js")}}"></script>
	<script src="{{asset("AdminAssets/plugins/jvectormap-next/jquery-jvectormap.min.js")}}"></script>
	<script src="{{asset("AdminAssets/plugins/jvectormap-next/jquery-jvectormap-world-mill.js")}}"></script>
	<script src="{{asset("AdminAssets/plugins/bootstrap-calendar/js/bootstrap_calendar.min.js")}}"></script>
	<script src="{{asset("AdminAssets/plugins/gritter/js/jquery.gritter.js")}}"></script>
	<script>
		COLOR_BLUE = COLOR_INDIGO = COLOR_RED = COLOR_ORANGE = COLOR_LIME = COLOR_TEAL = 'rgba(0,0,0,0.5)';
		COLOR_AQUA = COLOR_DARK_LIGHTER = COLOR_GREEN = 'rgba(0,0,0,0.75)';
	</script>
	
	<script src="{{asset("AdminAssets/js/demo/dashboard-v2.js")}}"></script>
	<!-- ================== END PAGE LEVEL JS ================== -->
</body>
</html>