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
				@include('Admin.includes.misPoints')
			</div>
			<!-- end row -->
			<!-- begin row -->
            <div class="row">
                <!-- begin col-6 -->
                <div class="col-xl-12">
                    <!-- begin panel -->
					<h1 class="text-center">All Purchased Tickets</h1>
					@if ($message = Session::get('msg'))
                            <div class="alert alert-danger alert-block">
                                <strong>{{ $message }}</strong>
                            </div>
					@endif
					@if ($message = Session::get('approve'))
					<div class="alert alert-primary alert-block">
						<strong>{{ $message }}</strong>
					</div>
					@endif
					@if ($message = Session::get('update'))
					<div class="alert alert-success alert-block">
						<strong>{{ $message }}</strong>
					</div>
					@endif
                    <div class="panel panel-inverse" data-sortable-id="form-validation-1">
                        <!-- begin panel-body -->
                        <div class="panel-body">
                            
                            <table class="table mt-3">
                                <thead class="thead-dark">
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Purchaser</th>
                                        <th scope="col">Event name</th>
                                        <th scope="col">Ticket name</th>
                                        <th scope="col">Total price</th>
                                        <th scope="col">Quantity</th>
                                        <th scope="col">Approval</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($purchases as $purchase) 
                                    <tr>
                                        <td>{{$purchase->id}}</td>
                                        <td>{{$purchase->user->first_name}}</td>
                                        <td>{{$purchase->event->title}}</td>
                                        <td>{{$purchase->ticket_id}}</td>
                                        <td>{{$purchase->price}}</td>
                                        <td>{{$purchase->quantity}}</td>
                                        <td>
                                            <form action="{{ url('/toggle-approve') }}" method="POST">
                                                @csrf
                                                <input <?php
                                                if ($purchase->approve == 1) {
                                                    echo 'checked';
                                                }
                                                ?> type="checkbox" 
                                                    name="approve" class="mr-2">
                                                <input type="hidden" name="ticket_id" id=""
                                                    value="{{ $purchase->id }}" >
                                                <input type="submit" class="btn btn-primary"
                                                    name="" value="approve" id="">
                                            </form>
                                            {{-- <a
                                                class="btn btn-primary"
                                                href="{{route('admin.section_rows.edit',$ticket->id)}}"
                                                >edit</a
                                            > --}}
                                        </td>
                                        <td>
                                            {{-- <a
                                                class="btn btn-success"
                                                href="{{URL('/Admin-Panel/Ticket/Edit',$purchase->id)}}"
                                                ><i class="fa fa-edit" aria-hidden="true"></i></a
                                            > --}}
                                            <a
                                                class="btn btn-danger"
                                                href="{{route('admin.purchase.ticket.destroy',$purchase->id)}}"
                                                ><i class="fa fa-trash" aria-hidden="true"></i> Delete</a
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