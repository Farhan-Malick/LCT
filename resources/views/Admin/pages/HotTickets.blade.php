<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>Last-Chance-Ticket Admin | Dashboard V2</title>
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />
	
	<!-- ================== BEGIN BASE CSS STYLE ================== -->
	<link href="{{asset('AdminAssets/plugins/datatables.net-bs4/css/dataTables.bootstrap4.min.css')}}" rel="stylesheet" />
	<link href="{{asset('AdminAssets/plugins/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css')}}" rel="stylesheet" />
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
		
			<!-- end breadcrumb -->
			<!-- begin page-header -->
			{{-- <h1 class="page-header">Last-Chance-Ticket Dashboard </h1> --}}
			<!-- end page-header -->
			<!-- begin row -->
			<div class="row">
				<!-- begin col-3 -->
				{{-- @include('Admin.includes.misPoints') --}}
				<!-- end col-3 -->
			</div>
			<!-- end row -->
			<div id="content" class="">
				<!-- begin breadcrumb -->
				<ol class="breadcrumb float-xl-right">
					<li class="breadcrumb-item"><a href="javascript:;">Home</a></li>
					<li class="breadcrumb-item"><a href="javascript:;">Tables</a></li>
					<li class="breadcrumb-item active">Managed Tables</li>
				</ol>
				<!-- end breadcrumb -->
				<!-- begin page-header -->
				<div class="row">
					<div class="col-lg-12">
                        <h4>All Events Listings For Hot Tickets</h4>
                        @if ($message = Session::get('msg'))
                        <div class="alert alert-success alert-block">
                            <button type="button" class="close" data-dismiss="alert">×</button>
                            <strong>{{ $message }}</strong>
                        </div>
                    @endif
					</div>
				</div>
				<!-- end page-header -->
				<!-- begin panel -->
				<div class="panel panel-inverse">
					<!-- begin panel-heading -->
					<div class="panel-heading">
						<h4 class="panel-title">Data Table - Default</h4>
						<div class="panel-heading-btn">
							<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
							<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-redo"></i></a>
							<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
							<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
						</div>
					</div>
					<!-- end panel-heading -->
				
					<!-- begin panel-body -->
					<div class="panel-body">
						@if (session('approve'))
                        <div class="col-sm-6 mx-auto " style="text-align: center;  font-size:20px">
                            {{ session('approve') }}</div>
                    @endif
						<table id="data-table-default" class="table table-striped table-bordered table-td-valign-middle">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Event Title</th>
                                    <th scope="col">Event</th>
                                    <th scope="col">Venue</th>
                                    <th scope="col">Start Time</th>
                                    <th scope="col">End Time</th>
                                    <th scope="col">Location</th>
                                    <th scope="col">Event Category</th>
                                    {{-- <th scope="col">Status</th> --}}
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($listing as $ticket)
                                <tr>
                                    <td>{{$ticket->id}}</td>
                                    <td>{{$ticket->event_name}}</td>
                                    <td>{{$ticket->events->title}}</td>
                                    <td>{{$ticket->venue_name}}</td>
                                    <td>{{$ticket->start_time}}</td>
                                    <td>{{$ticket->end_time}}</td>
                                    <td>{{$ticket->location}}</td>
                                    <td>{{$ticket->category_event}}</td>
                                    {{-- <td>{{$ticket->status}}</td> --}}
                                    <td>
										@if($ticket->Footerapprove == null || $ticket->Footerapprove == 0)
                                                <form action="{{ url('/toggle-Footerapprove-HotTickets') }}" method="POST">
													@csrf
													<input type="hidden" name="buyer_id" id=""
														value="{{ $ticket->id }}" >
													<input type="submit" class="btn btn-primary"
														name="" value="Add to Hot Tickets" id="" >
												</form>
                                       @endif
									   @if($ticket->Footerapprove == 1)
                                                <form action="{{ url('/toggle-Footerapprove-HotTickets-remove') }}" method="POST">
													@csrf
													<input type="hidden" name="buyer_id" id=""
														value="{{ $ticket->id }}" >
													<input type="submit" class="btn btn-danger"
														name="" value="Remove From Hot Tickets" id="" >
												</form>
                                       @endif
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
			<!-- begin row -->
            
			<!-- end row -->
		</div>
		<!-- end #content -->
	
		<!-- begin scroll to top btn -->
		<a href="javascript:;" class="btn btn-icon btn-circle btn-success btn-scroll-to-top fade" data-click="scroll-top"><i class="fa fa-angle-up"></i></a>
		<!-- end scroll to top btn -->
	</div>
	<!-- end page container -->
	{{-- Modal For rejection --}}
   
    {{-- Modal for rejectio end --}}
	<!-- ================== BEGIN BASE JS ================== -->
	<script src="{{asset("AdminAssets/js/app.min.js")}}"></script>
	<script src="{{asset("AdminAssets/js/theme/google.min.js")}}"></script>
	<!-- ================== END BASE JS ================== -->
	
	<!-- ================== BEGIN PAGE LEVEL JS ================== -->
	<script src="{{asset('AdminAssets/plugins/datatables.net/js/jquery.dataTables.min.js')}}"></script>
	<script src="{{asset('AdminAssets/plugins/datatables.net-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
	<script src="{{asset('AdminAssets/plugins/datatables.net-responsive/js/dataTables.responsive.min.js')}}"></script>
	<script src="{{asset('AdminAssets/plugins/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js')}}"></script>
	<script src="{{asset('AdminAssets/js/demo/table-manage-default.demo.js')}}"></script>
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
    <script>
        $('#rejectionModal').on('show.bs.modal', function (e) {
            $("#ticket_id").val($(e.relatedTarget).data('id'));
        });
    </script>
	<!-- ================== END PAGE LEVEL JS ================== -->
</body>
</html>