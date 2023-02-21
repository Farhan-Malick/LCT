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
				@include('Admin.includes.misPoints')
				<!-- end col-3 -->
			</div>
			<!-- end row -->
			<div id="content" class="">
				<!-- begin breadcrumb -->
				<ol class="breadcrumb float-xl-right">
					<li class="breadcrumb-item"><a href="javascript:;">Home</a></li>
					<li class="breadcrumb-item"><a href="javascript:;">Tickets</a></li>
					<li class="breadcrumb-item active">Managed E-Tickets</li>
				</ol>
				<!-- end breadcrumb -->
				<!-- begin page-header -->
				<div class="row">
					<div class="col-lg-12">
						   <!-- begin panel -->
							<h4 class="">E-Tickets</h4>
							@if ($message = Session::get('msg2'))
									<div class="alert alert-Primary alert-block">
										<strong>{{ $message }}</strong>
									</div>
							@endif
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
					</div>
				</div>
				<!-- end page-header -->
				<!-- begin panel -->
				<div class="panel panel-inverse">
					<!-- begin panel-heading -->
					<div class="panel-heading">
						<h4 class="panel-title">Data Table : E - Ticket</h4>
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
						<table id="data-table-default" class="table table-striped table-bordered table-td-valign-middle">
							<thead class="thead-dark">
								<tr>
									<th scope="col">#</th>
									{{-- <th scope="col">title</th> --}}
									<th scope="col">Event Title</th>
									<th scope="col">price</th>
									{{-- <th scope="col">currency</th> --}}
									<th scope="col">quantity</th>
									<th scope="col">category</th>
									<th scope="col">section</th>
									<th scope="col">row</th>
									<th scope="col">seat from</th>
									<th scope="col">seat to</th>
									<th scope="col">Booking Confirmation</th>
									
									<th scope="col">ticket restrictions</th>
									<th scope="col">Benefits</th>
									<th scope="col">Fans Section</th>
									<th scope="col">status</th>
									<th scope="col">ticket type</th>
									<th scope="col" >Approval</th>
									<th scope="col" >Action</th>
								</tr>
							</thead>
							<tbody>
								@foreach($tickets as $e_ticket)
								@if($e_ticket->ticket_type == "E-Ticket")
									<tr>
										<td>{{$e_ticket->id}}</td>
										{{-- <td>{{$e_ticket->title}}</td> --}}
										<td>{{$e_ticket->event->event_name}}</td>
										<td>${{$e_ticket->price}}</td>
										{{-- <td>{{$e_ticket->currency	}}</td> --}}
										{{-- <td>{{$e_ticket->Currency->currency_type}}</td> --}}
										<td>{{$e_ticket->quantity}}</td>
										<td>
											{{$e_ticket->type_cat}}
										</td>
										<td>{{$e_ticket->type_sec}}</td>
										<td>{{$e_ticket->type_row}}</td>
										<td>{{$e_ticket->seat_from}}</td>
										<td>{{$e_ticket->seat_to}}</td>
										<td>
											@if ($e_ticket->simple_pdf === null)
											 <p class="text-success">I have a ticket</p>
											 @else
											 <a class="text-primary" href="{{URL('view-PDF-File/'.$e_ticket->id)}}">{{$e_ticket->simple_pdf}}</a>
											@endif
										</td>
										<td>{{$e_ticket->ticket_restrictions}}</td>
										<td>{{$e_ticket->ticket_benefits}}</td>
											<td>{{$e_ticket->fan_section}}</td>
										<td>{{$e_ticket->status}}</td>
										<td>{{$e_ticket->ticket_type}}</td>
										<td>
											@if($e_ticket->approve == null || $e_ticket->approve == 0)
											<form action="{{ url('/toggle-approve') }}" method="POST">
												@csrf
												<input type="hidden" name="ticket_id" id=""
													value="{{ $e_ticket->id }}" >
												<input type="submit" class="btn btn-primary"
													name="" value="Approve" id="" >
											</form>
											@elseif ($e_ticket->approve == 2)
											<button class="btn btn-primary" disabled="disabled">Cant Approve now</button>
													@else
											<button class="btn btn-success" disabled="disabled">Approved</button>
											@endif
											{{-- <a
												class="btn btn-primary"
												href="{{route('admin.section_rows.edit',$e_ticket->id)}}"
												>edit</a
											> --}}
										</td>
										<td>
												@if($e_ticket->approve == 1 || $e_ticket->approve == 2)
													<button type="button" class="btn btn-danger" disabled="disabled" data-id="{{ $e_ticket->id }}" data-toggle="modal" data-target="#rejectionModal">
														Reject
													</button>	
													@elseif ($e_ticket->approve == null )
													<button type="button" class="btn btn-danger" data-id="{{ $e_ticket->id }}" data-toggle="modal" data-target="#rejectionModal" >
														Reject
													</button>
												@endif
												{{-- @if($e_ticket->approve != 2 || $e_ticket->approve == 0) --}}
													{{-- <button type="button" class="btn btn-danger" data-id="{{ $e_ticket->id }}" data-toggle="modal" data-target="#rejectionModal" >
														<i class="fa fa-times" aria-hidden="true"></i>
													</button> --}}
												{{-- @endif --}}
														@if ($e_ticket->book_eticket === "Yes")
														<a
														class="btn btn-primary"
														href="{{route('admin.ticket.view',$e_ticket->id)}}"
														><i class="fa fa-eye" aria-hidden="true"></i></a
													>
														@endif
											<a
												class="btn btn-success"
												href="{{URL('/Admin-Panel/Edit-E_Ticket',$e_ticket->id)}}"
												><i class="fa fa-edit" aria-hidden="true"></i></a
											>
											<a
												class="btn btn-danger"
												href="{{route('admin.ticket.destroy',$e_ticket->id)}}"
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
    <div class="modal fade" id="rejectionModal" tabindex="-1" role="dialog" aria-labelledby="Rejection Modal" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Rejection Reason</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form action="{{ url('/toggle-reject') }}" method="POST" >
                @csrf
                <input type="hidden" name="ticket_id" id="ticket_id" value="" >
                <div class="modal-body">
                    <div class="form-row">
                        <textarea name="reason" class="form-control" placeholder="Please Enter reason for rejection" required></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                <button type="submit" class="btn btn-danger">Reject</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </form>
          </div>
        </div>
    </div>
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