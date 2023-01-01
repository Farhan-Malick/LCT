<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>LCT Admin | Register Page</title>
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />
	
	<!-- ================== BEGIN BASE CSS STYLE ================== -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
	
	<link href="{{asset("AdminAssets/css/default/app.min.css")}}" rel="stylesheet" />
	<!-- ================== END BASE CSS STYLE ================== -->
</head>
<body class="pace-top">
	<!-- begin #page-loader -->
	<div id="page-loader" class="fade show">
		<span class="spinner"></span>
	</div>
	<!-- end #page-loader -->
	
	<!-- begin #page-container -->
	<div id="page-container" class="fade">
		<!-- begin register -->
		<div class="register register-with-news-feed">
			<!-- begin news-feed -->
			<div class="news-feed">
				<div class="news-image" style="background-image: url(AdminAssets/img/login-bg/login-bg-15.jpg)"></div>
				<div class="news-caption">
					<h4 class="caption-title"><b>LCT</b> Admin App</h4>
					<p>
						As a LCT Admin app administrator, you use the LCT Admin console to manage your organization’s account, such as add new users, manage security settings, and turn on the services you want your team to access.
					</p>
				</div>
			</div>
			<!-- end news-feed -->
			<!-- begin right-content -->
			<div class="right-content">
				<!-- begin register-header -->
				<h1 class="register-header">
					Sign Up
					<small>Create your LCT Admin Account. It’s free and always will be.</small>
				</h1>
				<!-- end register-header -->
				<!-- begin register-content -->
				<div class="register-content">
					{{-- <form action="index.html" method="GET" class="margin-bottom-0"> --}}
						<form  class="margin-bottom-0" action="{{ route('/admin/registerForm') }}"
							method="post">
							@csrf
								<label class="control-label">Email <span class="text-danger">*</span></label>
								<div class="row m-b-15">
									<div class="col-md-12">
										<input type="text" class="form-control" name="email" placeholder="Email address" required />
									</div>
								</div>
								<label class="control-label">Password <span class="text-danger">*</span></label>
								<div class="row m-b-15">
									<div class="col-md-12">
										<input type="password" class="form-control" name="password" placeholder="Password" required />
									</div>
								</div>
								<label class="control-label">
									Status <span class="text-danger">*</span>
								</label>
								<div class="row m-b-15">
									<div class="col-md-12">
										<input class="form-control" type="tel" placeholder="Status"  name="status" required>
									</div>
								</div>
								<div class="checkbox checkbox-css m-b-30">
									<div class="checkbox checkbox-css m-b-30">
										<input type="checkbox" id="agreement_checkbox" value="">
										<label for="agreement_checkbox">
										By clicking Sign Up, you agree to our <a href="javascript:;">Terms</a> and that you have read our <a href="javascript:;">Data Policy</a>, including our <a href="javascript:;">Cookie Use</a>.
										</label>
									</div>
								</div>
								<div class="col-sm-12 text-dark" style="text-align: center; ">{{ session('success') }}</div>
								<div class="register-buttons">
									<button class="btn btn-primary btn-block btn-lg">Sign Up</button>
								</div>
								<div class="m-t-30 m-b-30 p-b-30">
									Already a member? Click <a href="login_v3.html">here</a> to login.
								</div>
								<hr />
								<p class="text-center mb-0">
									&copy; LCT Admin All Right Reserved 2022
								</p>
						</form>
				</div>
				<!-- end register-content -->
			</div>
			<!-- end right-content -->
		</div>
		<!-- end register -->
		
		
		
		<!-- begin scroll to top btn -->
		<a href="javascript:;" class="btn btn-icon btn-circle btn-success btn-scroll-to-top fade" data-click="scroll-top"><i class="fa fa-angle-up"></i></a>
		<!-- end scroll to top btn -->
	</div>
	<!-- end page container -->
	
	<!-- ================== BEGIN BASE JS ================== -->
	<script src="{{asset("AdminAssets/js/app.min.js")}}"></script>
	<script src="{{asset("AdminAssets/js/theme/default.min.js")}}"></script>
	<!-- ================== END BASE JS ================== -->
</body>
</html>