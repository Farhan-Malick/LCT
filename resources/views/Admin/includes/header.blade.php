{{-- @php
	$headerClass = (!empty($headerInverse)) ? 'navbar-inverse ' : 'navbar-default ';
	$headerMenu = (!empty($headerMenu)) ? $headerMenu : '';
	$headerMegaMenu = (!empty($headerMegaMenu)) ? $headerMegaMenu : ''; 
	$headerTopMenu = (!empty($headerTopMenu)) ? $headerTopMenu : '';
@endphp --}}
<!-- begin #header -->
<div id="header" class="header navbar-default">
	<!-- begin navbar-header -->
	<div class="navbar-header">
		<button type="button" class="navbar-toggle collapsed navbar-toggle-left" data-click="sidebar-minify">
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>
		<a href="{{URL('Admin-Panel/')}}" class="navbar-brand">
			<b class="mr-1">Last-Chance-Ticket</b> 
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
