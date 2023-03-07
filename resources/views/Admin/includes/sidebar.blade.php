
<div class="sidebar-bg"></div>
	<!-- begin #sidebar -->
    <div id="sidebar" class="sidebar">
        <!-- begin sidebar scrollbar -->
        <div data-scrollbar="true" data-height="100%">
            <!-- begin sidebar user -->
            <ul class="nav">
                <li class="nav-profile">
                    <a href="javascript:;" data-toggle="nav-profile">
                        <div class="cover with-shadow"></div>
                        <div class="image">
                            <img src="{{asset("AdminAssets/img/user/download.png")}}" alt="" />
                        </div>
                        <div class="info">
                            <b class="caret pull-right"></b>Last Chance Ticket
                            <small>All rights reserved</small>
                        </div>
                    </a>
                </li>
                <li>
                    {{-- <ul class="nav nav-profile">
                        <li><a href="javascript:;"><i class="fa fa-cog"></i> Settings</a></li>
                        <li><a href="javascript:;"><i class="fa fa-pencil-alt"></i> Send Feedback</a></li>
                        <li><a href="javascript:;"><i class="fa fa-question-circle"></i> Helps</a></li>
                    </ul> --}}
                </li>
            </ul>
            <!-- end sidebar user -->
            <!-- begin sidebar nav -->
            <ul class="nav"><li class="nav-header">Navigation</li>
                <li class="has-sub">
                    <a href="javascript:;">
                        <b class="caret"></b>
                        <i class="fa fa-gem"></i>
                        <span>LCT Dashboard</span>
                    </a>
                    <ul class="sub-menu">
                        <li><a href="{{ URL('/Admin-Panel/Dashboard') }}">Dashboard</a></li>
                    </ul>
                </li>
                <li class="has-sub">
                    <a href="javascript:;">
                        <b class="caret"></b>
                        <i class="fa fa-hdd"></i>
                        <span>Events</span>
                    </a>
                    <ul class="sub-menu">
                        
                        <li><a href="{{ URL('/Admin-Panel/add-event') }}">Add Event</a></li>
                        <li><a href="{{ URL('/Admin-Panel/All-event') }}">All Events</a></li>
                        <li>
                            <a href="{{ URL('Admin-Panel/event-listing-form') }}">Add Event Listings</a>
                        </li>
                        <li>
                            <a href="{{ URL('Admin-Panel/event-listing') }}">All Event Listings</a>
                        </li>
                    </ul>
                    <a href="javascript:;">
                        <b class="caret"></b>
                        <i class="fab fa-simplybuilt"></i>
                        <span>Event Requests</span>
                    </a>
                    <ul class="sub-menu">
                        
                        <li>
                            <a href="{{ route('admin.request.show') }}">Requests</a>
                        </li>
                    </ul>
                    
                </li>
               
                <li class="has-sub">
                    <a href="javascript:;">
                        <b class="caret"></b>
                        <i class="fa fa-cubes"></i>
                        <span>Categories</span>
                    </a>
                    <ul class="sub-menu">
                        <li>
                            <a href="{{ URL('/Admin-Panel/add-category') }}">Add Category</a>
                        </li>
                    </ul>
                </li>
                <li class="has-sub">
                    <a href="javascript:;">
                        <b class="caret"></b>
                        <i class="fa fa-map"></i>
                        <span>Venues</span>
                    </a>
                    <ul class="sub-menu">
                        <li><a href="{{ URL('/Admin-Panel/add-venue') }}">Add Venue</a></li>
                        <li><a href="{{URL('/Admin-Panel/venue/all-venues')}}">All Venues</a></li>
                        <li>
                            <a href="{{ route('admin.sections.index') }}"
                                >Add Sections</a
                            >
                        </li>
                        <li>
                            <a href="{{ route('admin.section_rows.index') }}"
                                >Add Rows</a
                            >
                        </li>
                        <li>
                            <a href="{{ route('admin.sellerCategory.index') }}"
                                >Add Seller Category</a
                            >
                        </li>
                    </ul>
                </li>
                <li class="has-sub">
                    <a href="javascript:;">
                        <b class="caret"></b>
                        <i class="fa fa-image"></i>
                        <span>Currency</span>
                    </a>
                    <ul class="sub-menu">
                        
                        
                        <li>
                            <a href="{{ route('admin.currency.index') }}"
                                >Add Currency</a
                            >
                        </li>
                    </ul>
                </li>
             <li class="has-sub">
                <a href="javascript:;">
                    <b class="caret"></b>
                    <i class="fa fa-list-ol"></i>
                    <span>Tickets</span>
                </a>
                <ul class="sub-menu">
            
                    <li>
                        <a href="{{ URL('Admin-Panel/') }}">Paper Tickets</a>
                    </li>
                    
                    <li>
                        <a href="{{ URL('Admin-Panel/E_tickets') }}">E-Tickets</a>
                    </li>
                    <li>
                        <a href="{{ URL('Admin-Panel/Mobile_tickets') }}">Mobile-Tickets</a>
                    </li>
                </ul>
             </li>
                <li class="has-sub">
                    <a href="javascript:;">
                        <b class="caret"></b>
                        <i class="fa fa-align-left"></i>
                        <span>Sales</span>
                    </a>
                    <ul class="sub-menu">
                        <li><a href="{{route('admin.sales.show')}}">All Sales</a></li>
                       
                    </ul>
                </li>
                <li class="has-sub">
                    <a href="javascript:;">
                        <b class="caret"></b>
                        <i class="fa fa-align-left"></i>
                        <span>Contact Us Detail</span>
                    </a>
                    <ul class="sub-menu">
                        <li><a href="{{URL('/Admin-Panel/Contact-Us')}}">Contact Us</a></li>
                       
                    </ul>
                </li>
                <li class="has-sub">
                    <a href="javascript:;">
                        <b class="caret"></b>
                        <i class="fa fa-align-left"></i>
                        <span>Footer Events</span>
                    </a>
                    <ul class="sub-menu">
                        <li><a href="{{URL('/Admin-Panel/EventsForFooter')}}">Popular Events</a></li>
                        <li><a href="{{URL('/Admin-Panel/HotTickets')}}">Hot Tickets</a></li>
                    </ul>
                </li>
                <li class="has-sub">
                    <a href="javascript:;">
                        <b class="caret"></b>
                        <i class="fa fa-align-left"></i>
                        <span>Visitors Analytic</span>
                    </a>
                    <ul class="sub-menu">
                        <li><a href="{{ URL('/Admin-Panel/Event-Visitors') }}">Event Visitors</a></li>
                        <li><a href="{{ URL('/Admin-Panel/EventListing-Visitors') }}">Event Listing Visitors</a></li>
                        <li><a href="{{ URL('/Admin-Panel/Ticket-Visitors') }}">Tickets Visitors</a></li>
                    </ul>
                </li>
              
                <!-- begin sidebar minify button -->
                <li><a href="javascript:;" class="sidebar-minify-btn" data-click="sidebar-minify"><i class="fa fa-angle-double-left"></i></a></li>
                <!-- end sidebar minify button -->
            </ul>
            <!-- end sidebar nav -->
        </div>
        <!-- end sidebar scrollbar -->
    </div>
    <div class="sidebar-bg"></div>
    <!-- end #sidebar -->
