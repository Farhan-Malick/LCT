<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, shrink-to-fit=9">
        <meta name="description" content="Gambolthemes">
        <meta name="author" content="Gambolthemes">
        <title>Last Chance Ticket</title>
        <link rel="icon" type="image/png" href="images/fav.png">
        <link rel="preconnect" href="https://fonts.googleapis.com/">
        <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&amp;display=swap" rel="stylesheet">
        <link href='vendor/unicons-2.0.1/css/unicons.css' rel='stylesheet'>
        <link href="{{asset('AdminAssets/plugins/datatables.net-bs4/css/dataTables.bootstrap4.min.css')}}" rel="stylesheet" />
         <link href="{{asset('AdminAssets/plugins/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css')}}" rel="stylesheet" />
        <link rel="stylesheet" href="{{asset('newAssets/assets/css/templatemo-woox-travel.css')}}">
        <link href="{{asset('profile/css/style.css')}}" rel="stylesheet">
        <link href="{{asset('profile/css/responsive.css')}}" rel="stylesheet">
        <link href="{{asset('profile/css/night-mode.css')}}" rel="stylesheet">
        <link href="{{asset('profile/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet">
        <link href="{{asset('profile/vendor/OwlCarousel/assets/owl.carousel.css')}}" rel="stylesheet">
        <link href="{{asset('profile/vendor/OwlCarousel/assets/owl.theme.default.min.css')}}" rel="stylesheet">
        <link href="{{asset('profile/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
        <link href="{{asset('profile/vendor/bootstrap-select/dist/css/bootstrap-select.min.css')}}" rel="stylesheet">
     </head>
<body>
    @include('auth.partials.newHeader');
    <div class="container" style="margin-top: 80px;margin-bottom: 80px;">
        <div class="row">
            <div class="col-md-12">
                <h5 class="card-title fw-600">All Listings Here</h5>
                <table id="data-table-default"  class="table border 1px table-xl table-stripped ">
                  <thead>
                     <tr>
                     <th scope="col">#</th>
                     {{-- <th scope="col">title</th> --}}
                     <th scope="col">Event</th>
                     <th scope="col">price</th>
                     {{-- <th scope="col">currency</th> --}}
                     <th scope="col">Qty</th>
                     <th scope="col">Sec</th>
                     <th scope="col">row</th>
                     <th scope="col">S.From</th>
                     <th scope="col">S.To</th>
                     <th scope="col">Ticket</th>
                     <th scope="col">Created</th>
                     <th scope="col">Restrictions</th>
                     <th scope="col">Deactive</th>
                     <th scope="col">Set Price</th>
                     </tr>
                  </thead>
                  <tbody class="table-group-divider">
                     @foreach ($active_tickets as $ticket)
                           @if ($ticket->approve == 1)
                              <tr>
                                 <th>{{$ticket->id}}</th>
                                 {{-- <td>{{$ticket->title}}</td> --}}
                                 <td>{{$ticket->event->event_name}}</td>
                                 <td>{{$ticket->price}}</td>
                                 {{-- <td>{{$ticket->currency}}</td> --}}
                                 <td>{{$ticket->quantity}}</td>
                                 <td>{{$ticket->type_sec}}</td>
                                 <td>{{$ticket->type_row}}</td>
                                 <td>{{$ticket->seat_from}}</td>
                                 <td>{{$ticket->seat_to}}</td>
                                    <td>{{$ticket->ticket_type}}</td>
                                    <td>{{$ticket->created_at}}</td>
                                 <td>  {{implode(',', json_decode($ticket->ticket_restrictions, true))}}</td>
                                 {{-- <td>{{$ticket->status}}</td> --}}
                                 <td>
                                    <form action="{{ url('/toggle-deactivate') }}" method="POST">
                                       @csrf
                                       <input type="hidden" name="ticket_id" id=""
                                          value="{{ $ticket->id }}" >
                                          <input type="submit" class="btn btn-danger"
                                          name="" value="Deactive" id="" >
                                    </form>
                                    {{-- <a class="btn btn-danger" href="{{route('dashboard.ticket.Deactivate',$ticket->id)}}">Deactivate</a> --}}
                                 </td>
                                 <td>
                                    <a href="{{URL('/dashboard/Set-Price/'.$ticket->id)}}" class="btn btn-primary"><i class="fa fa-edit" aria-hidden="true"></i></a>
                                 </td>
                              </tr>
                           @endif
                     @endforeach
                  </tbody>
               </table>
            </div>
        </div>

         {{-- @include('auth.partials.footer'); --}}

    </div>

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
    <script data-cfasync="false" src="../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="js/jquery-3.6.0.min.js"></script>
    <script src="{{asset('profile/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('profile/vendor/OwlCarousel/owl.carousel.js')}}"></script>
    <script src="{{asset('profile/vendor/bootstrap-select/dist/js/bootstrap-select.min.js')}}"></script>
    <script src="{{asset('profile/js/custom.js')}}"></script>
    <script src="{{asset('profile/js/night-mode.js')}}"></script>
</body>
</html>
