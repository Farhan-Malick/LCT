@php $sidebarClass = !empty($sidebarTransparent) ? 'sidebar-transparent' : '';
@endphp
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
                        <img src="../assets/img/user/user-13.jpg" alt="" />
                    </div>
                    <div class="info">
                        <b class="caret pull-right"></b>Sean Ngu
                        <small>Front end developer</small>
                    </div>
                </a>
            </li>
            <li>
                <ul class="nav nav-profile">
                    <li>
                        <a href="javascript:;"
                            ><i class="fa fa-cog"></i> Settings</a
                        >
                    </li>
                    <li>
                        <a href="javascript:;"
                            ><i class="fa fa-pencil-alt"></i> Send Feedback</a
                        >
                    </li>
                    <li>
                        <a href="javascript:;"
                            ><i class="fa fa-question-circle"></i> Helps</a
                        >
                    </li>
                </ul>
            </li>
        </ul>
        <!-- end sidebar user -->
        <!-- begin sidebar nav -->
        <ul class="nav">
            <li class="nav-header">Navigation</li>
            <li class="has-sub">
                <a href="javascript:;">
                    <b class="caret"></b>
                    <i class="fa fa-gem"></i>
                    <span>Events</span>
                </a>
                <ul class="sub-menu">
                    <li><a href="/Admin-Panel/add-event">Add Event</a></li>
                    <li><a href="/Admin-Panel/All-event">All Events</a></li>
                </ul>
            </li>
            <li class="has-sub">
                <a href="javascript:;">
                    <b class="caret"></b>
                    <i class="fa fa-list-ol"></i>
                    <span>Categories</span>
                </a>
                <ul class="sub-menu">
                    <li>
                        <a href="/Admin-Panel/add-category">Add Category</a>
                    </li>
                </ul>
            </li>
            <li class="has-sub">
                <a href="javascript:;">
                    <b class="caret"></b>
                    <i class="fa fa-list-ol"></i>
                    <span>Venues</span>
                </a>
                <ul class="sub-menu">
                    <li><a href="/Admin-Panel/add-venue">Add Venue</a></li>
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
                </ul>
            </li>
            <li class="has-sub">
                <a href="javascript:;">
                    <b class="caret"></b>
                    <i class="fa fa-list-ol"></i>
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
                    <i class="fa fa-list-ol"></i>
                    <span>Tickets</span>
                </a>
                <ul class="sub-menu">
                    <li>
                        <a href="{{ URL('Admin-Panel/tickets/ticket-listing-form') }}">Add Ticket Listings</a>
                    </li>
                    <li>
                        <a href="{{ URL('Admin-Panel/tickets/ticket-listing') }}">All Ticket Listings</a>
                    </li>
                    <li>
                        <a href="{{ route('admin.tickets.show') }}">Total Tickets</a>
                    </li>
                </ul>
            </li>
            <li class="has-sub">
                <a href="javascript:;">
                    <b class="caret"></b>
                    <i class="fa fa-list-ol"></i>
                    <span>Sales</span>
                </a>
                <ul class="sub-menu">
                    <li><a href="{{route('admin.sales.show')}}">All Sales</a></li>
                   
                </ul>
            </li>
        </ul>
        <!-- end sidebar nav -->
    </div>
    <!-- end sidebar scrollbar -->
</div>
<div class="sidebar-bg"></div>
<!-- end #sidebar -->
