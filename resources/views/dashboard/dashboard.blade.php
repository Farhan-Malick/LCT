<!DOCTYPE html>
<html lang="en" class="h-100">
   <!-- Mirrored from www.gambolthemes.net/html-items/barren-html/disable-demo-link/organiser_profile_view.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 08 Feb 2023 14:25:01 GMT -->
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

      
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.4/dist/sweetalert2.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.4/dist/sweetalert2.all.min.js"></script>
   </head>
   <body class="d-flex flex-column h-100">
    
      @include("auth.partials.darkheader")
      <div class="wrapper">
         <div class="profile-anner">
           
            <div class="user-dt-block">
               <div class="container">
                  <div class="row">
                     <div class="col-lg-12">
                        @if(session('message'))
                              <script>
                                 Swal.fire({
                                    icon: 'success',
                                    title: '{{ session('message') }}',
                                    showConfirmButton: false,
                                    timer: 5000
                                 });
                              </script>
                        @endif
                        @if (Session::has('message'))
                           <div class="alert alert-primary text-center ">
                                 <p class="text-dark">{{ Session::get('message') }}</p>
                           </div>
                        @endif
                        @if ($message = Session::get('SuccssMessage'))
                        <div class="alert alert-primary">
                            <center><strong>{{ $message }}</strong></center>
                        </div>
                        @endif
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-xl-4 col-lg-5 col-md-12">
                        <div class="main-card user-left-dt" style="margin-top: 1px">
                           <div class="user-avatar-img">
                              <img src="{{asset('profile/images/profile-imgs/img-13.jpg')}}" alt="">
                              <div class="avatar-img-btn">
                                 <input type="file" id="avatar-img">
                                 <label for="avatar-img"><i class="fa-solid fa-camera"></i></label>
                              </div>
                           </div>
                           <div class="user-dts">
                              <h4 class="user-name">{{ Auth::user()->first_name }} {{ Auth::user()->last_name }}<span class="verify-badge"><i class="fa-solid fa-circle-check"></i></span></h4>
                              <span class="user-email">{{ Auth::user()->email }}</span>
                           </div>
                           <div class="ff-block">
                              <a href="#" class="" role="button" data-bs-toggle="modal" data-bs-target="#FFModal"><span>Country Code</span>{{ Auth::user()->primary_phone }} </a>
                              <a href="#" class="" role="button" data-bs-toggle="modal" data-bs-target="#FFModal"><span>Phone</span>{{ Auth::user()->phone }}</a>
                           </div>
                           <div class="ff-block">
                              <a href="#" class="" role="button" data-bs-toggle="modal" data-bs-target="#FFModal"><span>Nationality</span>{{ Auth::user()->nationality }} </a>
                              <a href="#" class="" role="button" data-bs-toggle="modal" data-bs-target="#FFModal"><span>Country</span>{{ Auth::user()->country }}</a>
                           </div>
                           <div class="user-description">
                              <p>Hey I am {{ Auth::user()->first_name }} {{ Auth::user()->last_name }}</p>
                           </div>
                           <div class="user-btns">
                              <a href="{{URL('User-Edit/' . Auth::user()->id ) }}" class="co-main-btn co-btn-width min-width d-inline-block h_40">Edit Profile<i class="fa-solid fa-right-left ms-3"></i></a>
                           </div>
                         
                        </div>
                     </div>
                     <div class="col-xl-8 col-lg-7 col-md-12">
                        <div class="right-profile">
                           <div class="profile-tabs">
                              <ul class="nav nav-pills nav-fill p-2 garren-line-tab" id="myTab" role="tablist">
                                 <li class="nav-item">
                                    <a class="nav-link " id="feed-tab" data-bs-toggle="tab" href="#feed" role="tab" aria-controls="feed" aria-selected="true"><i class="fa-solid fa-house"></i>Listings</a>
                                 </li>
                                 
                                 <li class="nav-item">
                                  <a class="nav-link active" id="orders-tab" data-bs-toggle="tab" href="#orders" role="tab" aria-controls="orders" aria-selected="false"><i class="fa-solid fa-box"></i>My Orders</a>
                               </li>
                                 <li class="nav-item">
                                    <a class="nav-link" id="about-tab" data-bs-toggle="tab" href="#about" role="tab" aria-controls="about" aria-selected="false"><i class="fa-solid fa-circle-info"></i>My Sales</a>
                                 </li>
                                 <li class="nav-item">
                                    <a class="nav-link" id="payment-tab" data-bs-toggle="tab" href="#payment" role="tab" aria-controls="payment" aria-selected="false"><i class="fa-solid fa-circle-info"></i>Payment Section</a>
                                 </li>
                                 <li class="nav-item">
                                    <a class="nav-link" id="setting-tab" data-bs-toggle="tab" href="#setting" role="tab" aria-controls="setting" aria-selected="false"><i class="fa-solid fa-gear"></i>Setting</a>
                                 </li>
                              </ul>
                              <div class="row">
                                 <div class="col-lg-12">
                                    @if ($message = Session::get('msg'))
                                    <div class="alert alert-primary alert-block">
                                       <strong>{{ $message }}</strong>
                                    </div>
                                    @endif
                                       @if ($message = Session::get('deactivate'))
                                       <div class="alert alert-primary alert-block">
                                          <strong>{{ $message }}</strong>
                                       </div>
                                       @endif
                                       @if ($message = Session::get('activate'))
                                       <div class="alert alert-primary alert-block">
                                          <strong>{{ $message }}</strong>
                                       </div>
                                       @endif
                                 </div>
                              </div>
                            <div class="row">
                              <div class="col-lg-12">
                                 <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane fade active show" id="orders" role="tabpanel" aria-labelledby="orders-tab">
                                  
                                       <div class="card shadow-sm mt-3">
                                          <div class="card-body">
                                              <h5 class="card-title fw-600">All Orders Here</h5>
                                              <table class="table">
                                                  <thead class="thead-light">
                                                    <tr>
                                                      <th>#</th>
                                                      <th >Event</th>
                                                      <th >Qty</th>
                                                      <th>S.Date</th>
                                                      {{-- <th >Price</th> --}}
                                                      {{-- <th>Shiping & Service</th> --}}
                                                      <th >Total</th>
                                                      <th>Purchased Date</th>
                                                    </tr>
                                                  </thead>
                                                  <tbody>
                                                      @foreach($purchases as $purchase)
                                                    <tr>
                                                      
                                                      <td>{{$purchase->id}}</td>
                                                      <td>{{$purchase->event_name}}</td>
                                                      <td>{{$purchase->quantity}}</td>
                                                      <td>{{$data->start_date}}</td>
                                                      {{-- <td>{{$purchase->price}}</td> --}}
                                                      {{-- <td>@if ($purchase->Type === 'Paper-Ticket')
                                                         ${{$purchase->shipingCharges}} +
                                                         @else
                                                         $00 +
                                                      @endif ${{$purchase->webChargeforBuyer}}</td> --}}
                                                      <td>${{$purchase->grand_total2}}</td>
                                                      <td>{{$data->created_at}}</td>
                                                    </tr>
                                                    
                                                    @endforeach
                                                  </tbody>
                                                </table>
                                              <div class="accordion accordion-flush" id="accordionFlushExample">
                                                  <!-- <div class="accordion-item">
                                                      <h2 class="accordion-header" id="flush-headingOne">
                                                          <button class="accordion-button collapsed fw-700" type="button"
                                                              data-bs-toggle="collapse"
                                                              data-bs-target="#flush-collapseOne" aria-expanded="false"
                                                              aria-controls="flush-collapseOne">
                                                              You need an access code to view your order
                                                          </button>
                                                      </h2>
                                                      <div id="flush-collapseOne" class="accordion-collapse collapse"
                                                          aria-labelledby="flush-headingOne"
                                                          data-bs-parent="#accordionFlushExample">
                                                          <div class="accordion-body">
                                                              <p>If you do, we already sent your code to the email address
                                                                  you used to buy your tickets. Check your inbox.</p>
                                                          </div>
                                                      </div>
                                                  </div> -->
                                              </div>
                                          </div>
                                      </div>
                                    </div>
                                    <div class="tab-pane fade " id="feed" role="tabpanel" aria-labelledby="feed-tab">
                                       <div class="nav my-event-tabs mt-4" role="tablist">
                                          <button class="event-link active" data-bs-toggle="tab" data-bs-target="#saved" type="button" role="tab" aria-controls="saved" aria-selected="true"><span class="event-count">1</span><span>Active</span></button>
                                          <button class="event-link" data-bs-toggle="tab" data-bs-target="#organised" type="button" role="tab" aria-controls="organised" aria-selected="false"><span class="event-count">2</span><span>De-Activated</span></button>
                                          <button class="event-link" data-bs-toggle="tab" data-bs-target="#attending" type="button" role="tab" aria-controls="attending" aria-selected="false"><span class="event-count">3</span><span>Pending</span></button>
                                       </div>
                                       <div class="tab-content">
                                          <div class="tab-pane fade show active" id="saved" role="tabpanel">
                                                <div class="card shadow-sm mt-3">
                                                   <div class="card-body">
                                                      <div class="row mb-4">
                                                         <div class="col-lg-12">  <a class="btn btn-secondary ml-5 " style="text-decoration: none; float-right" href="{{route('dashboard/ticket/Deactivation-view')}}">View All Listing In Detail</a></div>
                                                      </div>
                                                      <table id=""  class="table  table-sm  ">
                                                        <thead>
                                                           <tr>
                                                           <th scope="col">#</th>
                                                           {{-- <th scope="col">title</th> --}}
                                                           <th scope="col">Event</th>
                                                           <th scope="col">price</th>
                                                           {{-- <th scope="col">currency</th> --}}
                                                           {{-- <th scope="col">Qty</th>
                                                           <th scope="col">Sec</th>
                                                           <th scope="col">row</th>
                                                           <th scope="col">S.From</th>
                                                           <th scope="col">S.To</th> 
                                                           <th scope="col">Restrictions</th> --}}
                                                           <th scope="col">Ticket</th>
                                                           <th scope="col">Created</th>
                                                           <th scope="col">Action</th>
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
                                                                       {{-- <td>{{$ticket->quantity}}</td>
                                                                       <td>{{$ticket->type_sec}}</td>
                                                                       <td>{{$ticket->type_row}}</td>
                                                                       <td>{{$ticket->seat_from}}</td>
                                                                       <td>{{$ticket->seat_to}}</td> 
                                                                       <td>  {{implode(',', json_decode($ticket->ticket_restrictions, true))}}</td> --}}
                                                                          <td>{{$ticket->ticket_type}}</td>
                                                                          <td>{{$ticket->created_at}}</td>
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
                                                                    </tr>
                                                                 @endif
                                                           @endforeach
                                                        </tbody>
                                                     </table>

                                                       <div class="accordion accordion-flush" id="accordionFlushExample">
                                                           <!-- <div class="accordion-item">
                                                               <h2 class="accordion-header" id="flush-headingOne">
                                                                   <button class="accordion-button collapsed fw-700" type="button"
                                                                       data-bs-toggle="collapse"
                                                                       data-bs-target="#flush-collapseOne" aria-expanded="false"
                                                                       aria-controls="flush-collapseOne">
                                                                       You need an access code to view your order
                                                                   </button>
                                                               </h2>
                                                               <div id="flush-collapseOne" class="accordion-collapse collapse"
                                                                   aria-labelledby="flush-headingOne"
                                                                   data-bs-parent="#accordionFlushExample">
                                                                   <div class="accordion-body">
                                                                       <p>If you do, we already sent your code to the email address
                                                                           you used to buy your tickets. Check your inbox.</p>
                                                                   </div>
                                                               </div>
                                                           </div> -->
                                                           
                                                       </div>
                                                   </div>
                                               </div>
                                             </div>
                                          
                                          <div class="tab-pane fade" id="organised" role="tabpanel">
                                             <div class="row">
                                                <div class="col-md-12">
                                                   <div class="main-card mt-4">
                                                    
                                                      <div class="card shadow-sm mb-3">
                                                         <div class="card-body">
                                                            <h5
                                                               class="card-title fw-600 text-center"
                                                               >
                                                               All Deactivated Listings here
                                                            </h5>
                                                            <table id="data-table-default2"  class="table  table-sm table-bordered table-td-valign-middle">
                                                                <thead>
                                                                  <tr>
                                                                    <th scope="col">#</th>
                                                                    {{-- <th scope="col">title</th> --}}
                                                                    <th scope="col">Event</th>
                                                                    <th scope="col">price</th>
                                                                    {{-- <th scope="col">currency</th> --}}
                                                                    <th scope="col">quantity</th>
                                                                    <th scope="col">section</th>
                                                                    <th scope="col">row</th>
                                                                    <th scope="col">seat from</th>
                                                                    <th scope="col">seat to</th>
                                                                    <th scope="col">ticket type</th>
                                                                    <th scope="col">ticket restrictions</th>
                                                                    <th scope="col">Action</th>
                                                                  </tr>
                                                                </thead>
                                                                <tbody class="table-group-divider">
                                                                    @foreach ($active_tickets as $ticket)
                                                                        @if ($ticket->approve == 4)
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
                                                                              <td>  {{implode(',', json_decode($ticket->ticket_restrictions, true))}}</td>
                                                                              {{-- <td>{{$ticket->status}}</td> --}}
                                                                              <td>
                                                                                 <form action="{{ url('/toggle-Active') }}" method="POST">
                                                                                    @csrf
                                                                                    <input type="hidden" name="ticket_id" id=""
                                                                                       value="{{ $ticket->id }}" >
                                                                                    <input type="submit" class="btn btn-success"
                                                                                       name="" value="Active" id="" >
                                                                                 </form>
                                                                                 {{-- <a class="btn btn-danger" href="{{route('dashboard.ticket.Deactivate',$ticket->id)}}">Deactivate</a> --}}
                                                                              </td>
                                                                           </tr>
                                                                        @endif
                                                                    @endforeach
                                                                </tbody>
                                                              </table>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="tab-pane fade" id="attending" role="tabpanel">
                                             <div class="row">
                                                <div class="col-md-12">
                                                   <div class="card shadow-sm mb-3" >
                                                      <div class="card-body">
                                                         {{-- <h5
                                                            class="card-title fw-600 text-center"
                                                            >
                                                            You don't have any pending listings 
                                                         </h5> --}}
                                                         <div class="card-body">
                                                            <h5
                                                               class="card-title fw-600 text-center"
                                                               >
                                                               All Pending Listings here
                                                            </h5>
                                                            <table id="data-table-default3"  class="table  table-sm table-bordered table-td-valign-middle" >
                                                                <thead>
                                                                  <tr>
                                                                    <th scope="col">#</th>
                                                                    {{-- <th scope="col">title</th> --}}
                                                                    <th scope="col">Event</th>
                                                                    <th scope="col">price</th>
                                                                    {{-- <th scope="col">currency</th> --}}
                                                                    <th scope="col">quantity</th>
                                                                    <th scope="col">section</th>
                                                                    <th scope="col">row</th>
                                                                    <th scope="col">seat from</th>
                                                                    <th scope="col">seat to</th>
                                                                    <th scope="col">ticket type</th>
                                                                    {{-- <th scope="col">ticket restrictions</th> --}}
                                                                    
                                                                    {{-- <th scope="col">status</th> --}}
                                                                  </tr>
                                                                </thead>
                                                                <tbody class="table-group-divider">
                                                                    @foreach ($active_tickets as $ticket)
                                                                        @if ($ticket->approve == null)
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
                                                                              {{-- <td>  {{implode(',', json_decode($ticket->ticket_restrictions, true))}}</td> --}}
                                                                              {{-- <td>{{$ticket->status}}</td> --}}
                                                                           </tr>
                                                                        @endif
                                                                    @endforeach
                                                                </tbody>
                                                              </table>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="tab-pane fade" id="about" role="tabpanel" aria-labelledby="about-tab">
                                       <div class="card shadow-sm mb-3 mt-3">
                                          <div class="card-body">
                                              <h5 class="card-title fw-600 text-center">My Sales</h5>
   
                                              <table class="table">
                                                  <thead class="thead-light">
                                                    <tr>
                                                      <th>#</th>
                                                      <th >Purchaser</th>
                                                      <th >Event Name</th>
                                                      {{-- <th >Ticket Name</th> --}}
                                                      {{-- <th >Ticket Type</th> --}}
                                                      <th >Qty</th>
                                                      <th >Total</th>
                                                      <th >Sales Date</th>
                                                   </tr>
                                                  </thead>
                                                  <tbody>
                                                      @foreach($sales as $sale)
                                                      <tr>
                                                        
                                                        <td>{{$sale->id}}</td>
                                                        <td>{{$sale->first_name}}</td>
                                                        {{-- <td>{{$sale->event->title}}</td> --}}
                                                        <td>{{$sale->event_name}}</td>
                                                        {{-- <td>{{$sale->ticket_type}}</td> --}}
                                                        <td>{{$sale->quantity}}</td>
                                                        <td>{{$sale->grand_total}}</td>
                                                        <td>{{$sale->created_at}}</td>
                                                        
                                                      </tr>
                                                      
                                                      @endforeach
                                                    
                                                  </tbody>
                                                </table>
                                          </div>
                                      </div>
                                    </div>
                                    <div class="tab-pane fade" id="payment" role="tabpanel" aria-labelledby="payment-tab">
                                       <div class="row">
                                          <div class="col-lg-12">
                                             <div class="main-card mt-4 p-0">
                                                <div class="nav custom-tabs" role="tablist">
                                                   {{-- <button class="tab-link active" data-bs-toggle="tab" data-bs-target="#tab-01" type="button" role="tab" aria-controls="tab-01" aria-selected="true"><i class="fa-solid fa-envelope me-3"></i>Email Preferences</button> --}}
                                                   <button class="tab-link active" data-bs-toggle="tab" data-bs-target="#tab-02" type="button" role="tab" aria-controls="tab-02" aria-selected="true"><i class="fa-solid fa-key me-3"></i>Add Bank Details</button>
                                                   {{-- <button class="tab-link" data-bs-toggle="tab" data-bs-target="#tab-03" type="button" role="tab" aria-controls="tab-03" aria-selected="false"><i class="fa-solid fa-gear me-3"></i>Privacy Settings</button> --}}
                                                </div>
                                             </div>
                                          </div>
                                          <div class="col-lg-12">
                                             <div class="main-card mt-4">
                                                <div class="tab-content">
                                                   <div class="tab-pane fade show active" id="tab-02" role="tabpanel">
                                                      <div class="bp-title">
                                                         <h4>Payment Section</h4>
                                                      </div>
                                                      <div class="password-setting p-4">
                                                         <div class="password-des">
                                                            <h4>Add Details</h4>
                                                            <p>You can add your bank details here for the payments.</p>
                                                         </div>
                                                         <div class="change-password-form">
                                                            <form action="{{ URL('bank_details') }}" method="POST">
                                                               @csrf
                                                               <div class="form-group mt-4">
                                                                  <label class="form-label">Bank Name*</label>
                                                                  <div class="loc-group position-relative">
                                                                     <input class="form-control h_50" type="text" id="bank_name" name="bank_name" placeholder="Enter Bank Name.">
                                                                     {{-- <span class="pass-show-eye"><i class="fas fa-eye-slash" id="togglePassword"></i></span> --}}
                                                                  </div>
                                                               </div>
                                                               <div class="form-group mt-4">
                                                                  <label class="form-label">IBAN*</label>
                                                                  <div class="loc-group position-relative">
                                                                     <input class="form-control h_50" type="text" id="iban" name="iban" placeholder="Enter IBAN.">
                                                                     {{-- <span class="pass-show-eye"><i class="fas fa-eye-slash" id="togglePassword"></i></span> --}}
                                                                  </div>
                                                               </div>
                                                               <div class="form-group mt-4">
                                                                  <label class="form-label">Swift Number*</label>
                                                                  <div class="loc-group position-relative">
                                                                     <input class="form-control h_50" type="text" id="swift_number" name="swift_number" placeholder="Enter Swift Number.">
                                                                     {{-- <span class="pass-show-eye"><i class="fas fa-eye-slash" id="togglePassword"></i></span> --}}
                                                                  </div>
                                                               </div>
                                                               
                                                               {{-- <div class="form-group mt-4">
                                                                  <label class="form-label">Confirm new password*</label>
                                                                  <div class="loc-group position-relative">
                                                                     <input class="form-control h_50" type="password" placeholder="Enter your password">
                                                                     <span class="pass-show-eye"><i class="fas fa-eye-slash"></i></span>
                                                                  </div>
                                                               </div> --}}
                                                               <button class="main-btn btn-hover w-100 mt-5" type="submit">Submit Info</button>
                                                         </form>
                                                         </div>
                                                      </div>
                                                   </div>
                                                  
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="tab-pane fade" id="setting" role="tabpanel" aria-labelledby="setting-tab">
                                       <div class="row">
                                          <div class="col-lg-12">
                                             <div class="main-card mt-4 p-0">
                                                <div class="nav custom-tabs" role="tablist">
                                                   {{-- <button class="tab-link active" data-bs-toggle="tab" data-bs-target="#tab-01" type="button" role="tab" aria-controls="tab-01" aria-selected="true"><i class="fa-solid fa-envelope me-3"></i>Email Preferences</button> --}}
                                                   <button class="tab-link active" data-bs-toggle="tab" data-bs-target="#tab-02" type="button" role="tab" aria-controls="tab-02" aria-selected="true"><i class="fa-solid fa-key me-3"></i>Password Settings</button>
                                                   {{-- <button class="tab-link" data-bs-toggle="tab" data-bs-target="#tab-03" type="button" role="tab" aria-controls="tab-03" aria-selected="false"><i class="fa-solid fa-gear me-3"></i>Privacy Settings</button> --}}
                                                </div>
                                             </div>
                                          </div>
                                          <div class="col-lg-12">
                                             <div class="main-card mt-4">
                                                <div class="tab-content">
                                                   <div class="tab-pane fade show active" id="tab-02" role="tabpanel">
                                                      <div class="bp-title">
                                                         <h4>Password Settings</h4>
                                                      </div>
                                                      <div class="password-setting p-4">
                                                         <div class="password-des">
                                                            <h4>Change password</h4>
                                                            <p>You can update your password from here. If you can't remember your current password, just log out and click on Forgot password.</p>
                                                         </div>
                                                         <div class="change-password-form">
                                                            {{-- <div class="form-group mt-4">
                                                               <label class="form-label">Current password*</label>
                                                               <div class="loc-group position-relative">
                                                                  <input class="form-control h_50" type="password" placeholder="Enter your password">
                                                                  <span class="pass-show-eye"><i class="fas fa-eye-slash"></i></span>
                                                               </div>
                                                            </div> --}}
                                                            <form action="{{ route('reset') }}" method="POST">
                                                               @csrf
                                                               <div class="form-group mt-4">
                                                                  <label class="form-label">New password*</label>
                                                                  <div class="loc-group position-relative">
                                                                     <input class="form-control h_50" type="password" id="password" name="password" placeholder="Enter your password">
                                                                     <span class="pass-show-eye"><i class="fas fa-eye-slash" id="togglePassword"></i></span>
                                                                  </div>
                                                               </div>
                                                               {{-- <div class="form-group mt-4">
                                                                  <label class="form-label">Confirm new password*</label>
                                                                  <div class="loc-group position-relative">
                                                                     <input class="form-control h_50" type="password" placeholder="Enter your password">
                                                                     <span class="pass-show-eye"><i class="fas fa-eye-slash"></i></span>
                                                                  </div>
                                                               </div> --}}
                                                               <button class="main-btn btn-hover w-100 mt-5" type="submit">Update Password</button>
                                                         </form>
                                                         </div>
                                                      </div>
                                                   </div>
                                                  
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                  
                                 </div>
                              </div>
                            </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
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

      <script>
         const togglePassword = document
             .querySelector('#togglePassword');
   
         const password = document.querySelector('#password');
   
         togglePassword.addEventListener('click', () => {
   
             // Toggle the type attribute using
             // getAttribure() method
             const type = password
                 .getAttribute('type') === 'password' ?
                 'text' : 'password';
                   
             password.setAttribute('type', type);
   
             // Toggle the eye and bi-eye icon
             this.classList.toggle('bi-eye');
         });
     </script>


   </body>
   <!-- Mirrored from www.gambolthemes.net/html-items/barren-html/disable-demo-link/organiser_profile_view.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 08 Feb 2023 14:26:58 GMT -->
</html>