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
        @include('Admin.includes.header')
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
                    <h1 class="text-center">Mobile Tickets</h1>
                    <!-- begin panel -->
                    <div class="panel panel-inverse" data-sortable-id="form-validation-1">
                        <!-- begin panel-body -->
                        <div class="panel-body">
                            
                            <table class="table mt-3">
                                <thead class="thead-dark">
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">title</th>
                                        <th scope="col">Event</th>
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
                                        <th scope="col" >Action</th>
                                    </tr>
                                </thead>
                                <tbody>
										@foreach($mobile_tickets as $m_ticket)
											@if($m_ticket->ticket_type == "mobile-ticket")
												<tr>
													<td>{{$m_ticket->id}}</td>
													<td>{{$m_ticket->title}}</td>
													<td>{{$m_ticket->event->title}}</td>
													<td>{{$m_ticket->price}}</td>
													<td>{{$m_ticket->currency}}</td>
													<td>{{$m_ticket->quantity}}</td>
													<td>{{$m_ticket->section}}</td>
													<td>{{$m_ticket->row}}</td>
													<td>{{$m_ticket->seat_from}}</td>
													<td>{{$m_ticket->seat_to}}</td>
														<td>{{$m_ticket->ticket_type}}</td>
												
													<td>{{$m_ticket->ticket_restrictions}}</td>
													<td>{{$m_ticket->status}}</td>
													<td>
														<form action="{{ url('/toggle-approve') }}" method="POST">
															@csrf
															<input <?php
															if ($m_ticket->approve == 1) {
																echo 'checked';
															}
															?> type="checkbox"
																name="approve" class="mr-2">
															<input type="hidden" name="ticket_id" id=""
																value="{{ $m_ticket->id }}">
															<input type="submit" class="btn btn-primary"
																name="" value="Approve" id="">
														</form>

														{{-- <a
															class="btn btn-primary"
															href="{{route('admin.section_rows.edit',$ticket->id)}}"
															>edit</a
														> --}}
														<a
															class="btn btn-danger"
															href="{{route('admin.section_rows.destroy',$m_ticket->id)}}"
															><i class="fa fa-trash" aria-hidden="true"></i></a
														>
													</td>
												</tr>
											@endif
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