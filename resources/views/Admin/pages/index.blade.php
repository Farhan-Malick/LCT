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
				@include('Admin.includes.misPoints')
				<!-- end col-3 -->
			</div>
			<!-- end row -->
			<!-- begin row -->
            <div class="row">
                <!-- begin col-6 -->
                <div class="col-xl-12">
                    <!-- begin panel -->
					<h1 class="text-center">Paper Tickets</h1>
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
                                        <th scope="col">Event Name</th>
                                        <th scope="col">Event Listing Name</th>
                                        <th scope="col">price</th>
                                        {{-- <th scope="col">currency</th> --}}
                                        <th scope="col">quantity</th>
										<th scope="col">category</th>
                                        <th scope="col">section</th>
                                        <th scope="col">row</th>
                                        <th scope="col">seat from</th>
                                        <th scope="col">seat to</th>
                                        <th scope="col">ticket type</th>
                                        <th scope="col">ticket restrictions</th>
                                        <th scope="col">status</th>
                                        <th scope="col" >Approval</th>
										<th scope="col" >Action</th>
                                    </tr>
                                </thead>
                                <tbody>
										@foreach($tickets as $ticket)
											@if($ticket->ticket_type == "paper-ticket")
												<tr>
													<td>{{$ticket->id}}</td>
													<td>{{$ticket->eventListing->title}}</td>
													<td>{{$ticket->event->event_name}}</td>
													<td>${{$ticket->price}}</td>
													{{-- <td>{{$ticket->currency}}</td> --}}
													
													<td>{{$ticket->quantity}}</td>
													<td>{{$ticket->categories}}</td>
													<td>{{$ticket->section_name}}</td>
													<td>{{$ticket->row}}</td>
													<td>{{$ticket->seat_from}}</td>
													<td>{{$ticket->seat_to}}</td>
														<td>{{$ticket->ticket_type}}</td>
													<td>{{$ticket->ticket_restrictions}}</td>
													<td>{{$ticket->status}}</td>
													<td>
														@if($ticket->approve == null || $ticket->approve == 0)
                                                        <form action="{{ url('/toggle-approve') }}" method="POST">
															@csrf
															<input type="hidden" name="ticket_id" id=""
																value="{{ $ticket->id }}" >
															<input type="submit" class="btn btn-primary"
																name="" value="Approve" id="" >
														</form>
														@elseif ($ticket->approve == 2)
														<button class="btn btn-primary" disabled="disabled">Cant Approve now</button>
																@else
														<button class="btn btn-success" disabled="disabled">Approved</button>
                                                        @endif
														{{-- <a
															class="btn btn-primary"
															href="{{route('admin.section_rows.edit',$ticket->id)}}"
															>edit</a
														> --}}
													</td>
													<td>
															@if($ticket->approve == 1 || $ticket->approve == 2)
																<button type="button" class="btn btn-danger" disabled="disabled" data-id="{{ $ticket->id }}" data-toggle="modal" data-target="#rejectionModal">
																	Reject
																</button>	
																@elseif ($ticket->approve == null )
																<button type="button" class="btn btn-danger" data-id="{{ $ticket->id }}" data-toggle="modal" data-target="#rejectionModal" >
																	Reject
																</button>
															@endif
														    {{-- @if($ticket->approve != 2 || $ticket->approve == 0)
															<button type="button" class="btn btn-danger" data-id="{{ $ticket->id }}" data-toggle="modal" data-target="#rejectionModal" >
																<i class="fa fa-times" aria-hidden="true"></i>
															</button>
															@endif --}}
														{{-- <a
															class="btn btn-success"
															href="{{URL('/Admin-Panel/Ticket/Edit',$ticket->id)}}"
															><i class="fa fa-edit" aria-hidden="true"></i></a
														> --}}
														<a
															class="btn btn-danger"
															href="{{route('admin.ticket.destroy',$ticket->id)}}"
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