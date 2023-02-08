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
   <body class="d-flex flex-column h-100">
    
      @include("auth.partials.darkheader")
      <div class="wrapper">
         <div class="profile-anner">
           
            <div class="user-dt-block">
               <div class="container">
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
                              <a href="#" class="" role="button" data-bs-toggle="modal" data-bs-target="#FFModal"><span>Country</span>{{ Auth::user()->primary_phone }} </a>
                              <a href="#" class="" role="button" data-bs-toggle="modal" data-bs-target="#FFModal"><span>Phone</span>{{ Auth::user()->phone }}</a>
                           </div>
                           <div class="user-description">
                              <p>Hey I am a {{ Auth::user()->first_name }} {{ Auth::user()->last_name }}</p>
                           </div>
                           <div class="user-btns">
                              <a href="#" class="co-main-btn co-btn-width min-width d-inline-block h_40">My Profile<i class="fa-solid fa-right-left ms-3"></i></a>
                           </div>
                         
                        </div>
                     </div>
                     <div class="col-xl-8 col-lg-7 col-md-12">
                        <div class="right-profile">
                           <div class="profile-tabs">
                              <ul class="nav nav-pills nav-fill p-2 garren-line-tab" id="myTab" role="tablist">
                                 <li class="nav-item">
                                    <a class="nav-link active" id="feed-tab" data-bs-toggle="tab" href="#feed" role="tab" aria-controls="feed" aria-selected="true"><i class="fa-solid fa-house"></i>Listings</a>
                                 </li>
                                 
                                 <li class="nav-item">
                                  <a class="nav-link" id="orders-tab" data-bs-toggle="tab" href="#orders" role="tab" aria-controls="orders" aria-selected="false"><i class="fa-solid fa-box"></i>My Orders</a>
                               </li>
                                 <li class="nav-item">
                                    <a class="nav-link" id="about-tab" data-bs-toggle="tab" href="#about" role="tab" aria-controls="about" aria-selected="false"><i class="fa-solid fa-circle-info"></i>My Sales</a>
                                 </li>
                                 <li class="nav-item">
                                    <a class="nav-link" id="setting-tab" data-bs-toggle="tab" href="#setting" role="tab" aria-controls="setting" aria-selected="false"><i class="fa-solid fa-gear"></i>Setting</a>
                                 </li>
                              </ul>
                              <div class="row">
                                 <div class="col-lg-12">
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
                              <div class="tab-content" id="myTabContent">
                                 <div class="tab-pane fade active show" id="feed" role="tabpanel" aria-labelledby="feed-tab">
                                    <div class="nav my-event-tabs mt-4" role="tablist">
                                       <button class="event-link active" data-bs-toggle="tab" data-bs-target="#saved" type="button" role="tab" aria-controls="saved" aria-selected="true"><span class="event-count">1</span><span>Active</span></button>
                                       <button class="event-link" data-bs-toggle="tab" data-bs-target="#organised" type="button" role="tab" aria-controls="organised" aria-selected="false"><span class="event-count">2</span><span>De-Activated</span></button>
                                       <button class="event-link" data-bs-toggle="tab" data-bs-target="#attending" type="button" role="tab" aria-controls="attending" aria-selected="false"><span class="event-count">3</span><span>Pending</span></button>
                                    </div>
                                    <div class="tab-content">
                                       <div class="tab-pane fade show active" id="saved" role="tabpanel">
                                          <div class="row">
                                             <div class="col-md-12">
                                                <div class="main-card mt-4">
                                                   <div class="card-top p-4">
                                                    
                                                   <div class="card shadow-sm mb-3">
                                                      <div class="card-body">
                                                         <h5
                                                            class="card-title fw-600 text-center"
                                                            >
                                                            All Active Listings here
                                                         </h5>
                                                         <table class="table">
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
                                                                     @if ($ticket->approve == 1)
                                                                        <tr>
                                                                           <th>{{$ticket->id}}</th>
                                                                           {{-- <td>{{$ticket->title}}</td> --}}
                                                                           <td>{{$ticket->event->event_name}}</td>
                                                                           <td>{{$ticket->price}}</td>
                                                                           {{-- <td>{{$ticket->currency}}</td> --}}
                                                                           <td>{{$ticket->quantity}}</td>
                                                                           <td>{{$ticket->section_name}}</td>
                                                                           <td>{{$ticket->row}}</td>
                                                                           <td>{{$ticket->seat_from}}</td>
                                                                           <td>{{$ticket->seat_to}}</td>
                                                                              <td>{{$ticket->ticket_type}}</td>
                                                                           <td>{{$ticket->ticket_restrictions}}</td>
                                                                           {{-- <td>{{$ticket->status}}</td> --}}
                                                                           <td>
                                                                              <form action="{{ url('/toggle-deactivate') }}" method="POST">
                                                                                 @csrf
                                                                                 <input type="hidden" name="ticket_id" id=""
                                                                                    value="{{ $ticket->id }}" >
                                                                                 <input type="submit" class="btn btn-danger"
                                                                                    name="" value="Deactivate" id="" >
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
                                                         <table class="table">
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
                                                                           <td>{{$ticket->section_name}}</td>
                                                                           <td>{{$ticket->row}}</td>
                                                                           <td>{{$ticket->seat_from}}</td>
                                                                           <td>{{$ticket->seat_to}}</td>
                                                                              <td>{{$ticket->ticket_type}}</td>
                                                                           <td>{{$ticket->ticket_restrictions}}</td>
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
                                                         <table class="table" >
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
                                                                           <td>{{$ticket->section_name}}</td>
                                                                           <td>{{$ticket->row}}</td>
                                                                           <td>{{$ticket->seat_from}}</td>
                                                                           <td>{{$ticket->seat_to}}</td>
                                                                              <td>{{$ticket->ticket_type}}</td>
                                                                           <td>{{$ticket->ticket_restrictions}}</td>
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
                                                   
                                                   <th >Event Name</th>
                                                   <th >Ticket Name</th>
                                                   {{-- <th >Ticket Type</th> --}}
                                                   <th >Quantity</th>
                                                   <th >Price</th>
                                                 </tr>
                                               </thead>
                                               <tbody>
                                                   @foreach($sales as $sale)
                                                   <tr>
                                                     
                                                     <td>{{$sale->id}}</td>
                                                     <td>{{$sale->event->title}}</td>
                                                     <td>{{$sale->event_name}}</td>
                                                     {{-- <td>{{$sale->ticket_type}}</td> --}}
                                                     <td>{{$sale->quantity}}</td>
                                                     <td>{{$sale->price}}</td>
                                                     
                                                   </tr>
                                                   
                                                   @endforeach
                                                 
                                               </tbody>
                                             </table>
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
                                                         <div class="form-group mt-4">
                                                            <label class="form-label">Current password*</label>
                                                            <div class="loc-group position-relative">
                                                               <input class="form-control h_50" type="password" placeholder="Enter your password">
                                                               <span class="pass-show-eye"><i class="fas fa-eye-slash"></i></span>
                                                            </div>
                                                         </div>
                                                         <div class="form-group mt-4">
                                                            <label class="form-label">New password*</label>
                                                            <div class="loc-group position-relative">
                                                               <input class="form-control h_50" type="password" placeholder="Enter your password">
                                                               <span class="pass-show-eye"><i class="fas fa-eye-slash"></i></span>
                                                            </div>
                                                         </div>
                                                         <div class="form-group mt-4">
                                                            <label class="form-label">Confirm new password*</label>
                                                            <div class="loc-group position-relative">
                                                               <input class="form-control h_50" type="password" placeholder="Enter your password">
                                                               <span class="pass-show-eye"><i class="fas fa-eye-slash"></i></span>
                                                            </div>
                                                         </div>
                                                         <button class="main-btn btn-hover w-100 mt-5" type="submit">Update Password</button>
                                                      </div>
                                                   </div>
                                                </div>
                                               
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="tab-pane fade" id="orders" role="tabpanel" aria-labelledby="orders-tab">
                                    <div class="main-card mt-4">
                                       <div class="card-top p-4">
                                          <div class="card-event-img">
                                             <img src="{{asset('assets/images/t1.webp')}}" style="width: 80%" alt="">
                                          </div>
                                          <div class="card-event-dt">
                                             <h3>{{$data->event_name}}</h3>
                                             <div class="invoice-id">Order Id :  <span>{{$data->id}}</span></div>
                                          </div>
                                       </div>
                                       <div class="card-bottom">
                                          <div class="card-bottom-item">
                                             <div class="card-icon">
                                                <i class="fa-solid fa-calendar-days"></i>
                                             </div>
                                             <div class="card-dt-text">
                                                <h6>Event Starts on</h6>
                                                <span>{{$data->start_date}}</span>
                                             </div>
                                          </div>
                                          <div class="card-bottom-item">
                                             <div class="card-icon">
                                                <i class="fa-solid fa-ticket"></i>
                                             </div>
                                             <div class="card-dt-text">
                                                <h6>Total Tickets</h6>
                                                <span>{{$data->quantity}}</span>
                                             </div>
                                          </div>
                                          <div class="card-bottom-item">
                                             <div class="card-icon">
                                                <i class="fa-solid fa-money-bill"></i>
                                             </div>
                                             <div class="card-dt-text">
                                                <h6>Paid Amount</h6>
                                                <span>$ {{$data->price}}.00</span>
                                             </div>
                                          </div>
                                          <div class="card-bottom-item">
                                             <div class="card-icon">
                                                <i class="fa-solid fa-money-bill"></i>
                                             </div>
                                             <div class="card-dt-text">
                                                <h6>Invoice</h6>
                                                <a href="#">Download</a>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="card shadow-sm mt-3">
                                       <div class="card-body">
                                           <h5 class="card-title fw-600">All Orders Here</h5>
                                           <table class="table">
                                               <thead class="thead-light">
                                                 <tr>
                                                   <th>#</th>
                                                   <th >Ticket Name</th>
                                                   <th >Quantity</th>
                                                   <th>Start Date</th>
                                                   <th >Price</th>
                                                 </tr>
                                               </thead>
                                               <tbody>
                                                   @foreach($purchases as $purchase)
                                                 <tr>
                                                   
                                                   <td>{{$purchase->id}}</td>
                                                   <td>{{$purchase->event_name}}</td>
                                                   <td>{{$purchase->quantity}}</td>
                                                   <td>{{$data->start_date}}</td>
                                                   <td>{{$purchase->price}}</td>
                                                   
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
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <script data-cfasync="false" src="../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="js/jquery-3.6.0.min.js"></script>
      <script src="{{asset('profile/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
      <script src="{{asset('profile/vendor/OwlCarousel/owl.carousel.js')}}"></script>
      <script src="{{asset('profile/vendor/bootstrap-select/dist/js/bootstrap-select.min.js')}}"></script>
      <script src="{{asset('profile/js/custom.js')}}"></script>
      <script src="{{asset('profile/js/night-mode.js')}}"></script>
   </body>
   <!-- Mirrored from www.gambolthemes.net/html-items/barren-html/disable-demo-link/organiser_profile_view.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 08 Feb 2023 14:26:58 GMT -->
</html>