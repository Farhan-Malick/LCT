<div id="sidebar" class="sidebar">
    <!-- begin sidebar scrollbar -->
    <div data-scrollbar="true" data-height="100%">
        <!-- begin sidebar user -->
        <ul class="nav">
            <li class="nav-profile">
                <a href="javascript:;" data-toggle="nav-profile">
                    <div class="cover with-shadow"></div>
                    <div class="image">
                        <img src="{{asset("AdminAssets/img/user/user-13.jpg")}}" alt="" />
                    </div>
                    <div class="info">
                        <b class="caret pull-right"></b>Admin (LCT)
                        <small>Designed By LCT</small>
                    </div>
                </a>
            </li>
            <li>
                <ul class="nav nav-profile">
                    <li><a href="javascript:;"><i class="fa fa-cog"></i> Settings</a></li>
                    <li><a href="javascript:;"><i class="fa fa-pencil-alt"></i> Send Feedback</a></li>
                    <li><a href="javascript:;"><i class="fa fa-question-circle"></i> Helps</a></li>
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
                    <span>LCT Dashboard</span>
                </a>
                <ul class="sub-menu">
                    <li><a href="{{ URL('/Admin-Panel/Dashboard') }}">Dashboard</a></li>
                    </li>
                </ul>
            </li>
            <li class="has-sub">
                <a href="javascript:;">
                    <b class="caret"></b>
                    <i class="fa fa-gem"></i>
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
                    <i class="fa fa-list-ol"></i>
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
                    <i class="fa fa-list-ol"></i>
                    <span>Sales</span>
                </a>
                <ul class="sub-menu">
                    <li><a href="{{route('admin.sales.show')}}">All Sales</a></li>
                   
                </ul>
            </li>
        </ul>
        {{-- <ul class="nav"><li class="nav-header">Navigation</li>
            <li class="has-sub active">
                <a href="javascript:;">
                    <b class="caret"></b>
                    <i class="material-icons">home</i>
                    <span>Dashboard</span>
                </a>
                <ul class="sub-menu">
                    <li class="active"><a href="{{URL("Admin-Panel")}}">LCT-Dashboard </a></li>
                </ul>
            </li>
            <li class="has-sub">
                <a href="javascript:;">
                    <span class="badge pull-right">10</span>
                    <i class="material-icons">inbox</i>
                    <span>Email</span>
                </a>
                <ul class="sub-menu">
                    <li><a href="email_inbox.html">Inbox</a></li>
                    <li><a href="email_compose.html">Compose</a></li>
                    <li><a href="email_detail.html">Detail</a></li>
                </ul>
            </li>
            <li>
                <a href="widget.html">
                    <i class="material-icons">extension</i>
                    <span>Widgets <span class="label label-theme">NEW</span></span> 
                </a>
            </li>
            <li class="has-sub">
                <a href="javascript:;">
                    <b class="caret"></b>
                    <i class="material-icons">toys</i>
                    <span>UI Elements <span class="label label-theme">NEW</span></span> 
                </a>
                <ul class="sub-menu">
                    <li><a href="ui_general.html">General <i class="fa fa-paper-plane text-theme"></i></a></li>
                    <li><a href="ui_typography.html">Typography</a></li>
                    <li><a href="ui_tabs_accordions.html">Tabs & Accordions</a></li>
                    <li><a href="ui_unlimited_tabs.html">Unlimited Nav Tabs</a></li>
                    <li><a href="ui_modal_notification.html">Modal & Notification <i class="fa fa-paper-plane text-theme"></i></a></li>
                    <li><a href="ui_widget_boxes.html">Widget Boxes</a></li>
                    <li><a href="ui_media_object.html">Media Object</a></li>
                    <li><a href="ui_buttons.html">Buttons <i class="fa fa-paper-plane text-theme"></i></a></li>
                    <li><a href="ui_icons.html">Icons</a></li>
                    <li><a href="ui_simple_line_icons.html">Simple Line Icons</a></li>
                    <li><a href="ui_ionicons.html">Ionicons</a></li>
                    <li><a href="ui_tree.html">Tree View</a></li>
                    <li><a href="ui_language_bar_icon.html">Language Bar & Icon</a></li>
                    <li><a href="ui_social_buttons.html">Social Buttons</a></li>
                    <li><a href="ui_tour.html">Intro JS</a></li>
                </ul>
            </li>
            <li>
                <a href="bootstrap_4.html">
                    <div class="icon-img">
                        <img src="{{asset("AdminAssets/img/logo/logo-bs4.png")}}" alt="" />
                    </div>
                    <span>Bootstrap 4 <span class="label label-theme">NEW</span></span> 
                </a>
            </li>
            <li class="has-sub">
                <a href="javascript:;">
                    <b class="caret"></b>
                    <i class="material-icons">insert_drive_file</i>
                    <span>Form Stuff <span class="label label-theme">NEW</span></span> 
                </a>
                <ul class="sub-menu">
                    <li><a href="form_elements.html">Form Elements <i class="fa fa-paper-plane text-theme"></i></a></li>
                    <li><a href="form_plugins.html">Form Plugins <i class="fa fa-paper-plane text-theme"></i></a></li>
                    <li><a href="form_slider_switcher.html">Form Slider + Switcher</a></li>
                    <li><a href="form_validation.html">Form Validation</a></li>
                    <li><a href="form_wizards.html">Wizards</a></li>
                    <li><a href="form_wizards_validation.html">Wizards + Validation</a></li>
                    <li><a href="form_wysiwyg.html">WYSIWYG</a></li>
                    <li><a href="form_editable.html">X-Editable</a></li>
                    <li><a href="form_multiple_upload.html">Multiple File Upload</a></li>
                    <li><a href="form_summernote.html">Summernote</a></li>
                    <li><a href="form_dropzone.html">Dropzone</a></li>
                </ul>
            </li>
            <li class="has-sub">
                <a href="javascript:;">
                    <b class="caret"></b>
                    <i class="material-icons">grid_on</i>
                    <span>Tables</span>
                </a>
                <ul class="sub-menu">
                    <li><a href="table_basic.html">Basic Tables</a></li>
                    <li class="has-sub">
                        <a href="javascript:;"><b class="caret"></b> Managed Tables</a>
                        <ul class="sub-menu">
                            <li><a href="table_manage.html">Default</a></li>
                            <li><a href="table_manage_autofill.html">Autofill</a></li>
                            <li><a href="table_manage_buttons.html">Buttons</a></li>
                            <li><a href="table_manage_colreorder.html">ColReorder</a></li>
                            <li><a href="table_manage_fixed_columns.html">Fixed Column</a></li>
                            <li><a href="table_manage_fixed_header.html">Fixed Header</a></li>
                            <li><a href="table_manage_keytable.html">KeyTable</a></li>
                            <li><a href="table_manage_responsive.html">Responsive</a></li>
                            <li><a href="table_manage_rowreorder.html">RowReorder</a></li>
                            <li><a href="table_manage_scroller.html">Scroller</a></li>
                            <li><a href="table_manage_select.html">Select</a></li>
                            <li><a href="table_manage_combine.html">Extension Combination</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li class="has-sub">
                <a href="javascript:;">
                    <b class="caret"></b>
                    <i class="material-icons">polymer</i>
                    <span>Front End</span>
                </a>
                <ul class="sub-menu">
                    <li><a href="../../../frontend/template/template_one_page_parallax/index.html" target="_blank">One Page Parallax</a></li>
                    <li><a href="../../../frontend/template/template_blog/index.html" target="_blank">Blog</a></li>
                    <li><a href="../../../frontend/template/template_forum/index.html" target="_blank">Forum</a></li>
                    <li><a href="../../../frontend/template/template_e_commerce/index.html" target="_blank">E-Commerce</a></li>
                </ul>
            </li>
            <li class="has-sub">
                <a href="javascript:;">
                    <b class="caret"></b>
                    <i class="material-icons">email</i>
                    <span>Email Template</span>
                </a>
                <ul class="sub-menu">
                    <li><a href="email_system.html">System Template</a></li>
                    <li><a href="email_newsletter.html">Newsletter Template</a></li>
                </ul>
            </li>
            <li class="has-sub">
                <a href="javascript:;">
                    <b class="caret"></b>
                    <i class="material-icons">insert_chart</i>
                    <span>Chart <span class="label label-theme">NEW</span></span>
                </a>
                <ul class="sub-menu">
                    <li><a href="chart-flot.html">Flot Chart</a></li>
                    <li><a href="chart-morris.html">Morris Chart</a></li>
                    <li><a href="chart-js.html">Chart JS</a></li>
                    <li><a href="chart-d3.html">d3 Chart</a></li>
                    <li><a href="chart-apex.html">Apex Chart <i class="fa fa-paper-plane text-theme"></i></a></li>
                </ul>
            </li>
            <li>
                <a href="calendar.html">
                    <i class="material-icons">date_range</i> 
                    <span>Calendar</span>
                </a>
            </li>
            <li class="has-sub">
                <a href="javascript:;">
                    <b class="caret"></b>
                    <i class="material-icons">place</i>
                    <span>Map</span>
                </a>
                <ul class="sub-menu">
                    <li><a href="map_vector.html">Vector Map</a></li>
                    <li><a href="map_google.html">Google Map</a></li>
                </ul>
            </li>
            <li class="has-sub">
                <a href="javascript:;">
                    <b class="caret"></b>
                    <i class="material-icons">camera</i>
                    <span>Gallery</span>
                </a>
                <ul class="sub-menu">
                    <li><a href="gallery.html">Gallery v1</a></li>
                    <li><a href="gallery_v2.html">Gallery v2</a></li>
                </ul>
            </li>
            <li class="has-sub">
                <a href="javascript:;">
                    <b class="caret"></b>
                    <i class="material-icons">settings</i>
                    <span>Page Options <span class="label label-theme">NEW</span></span>
                </a>
                <ul class="sub-menu">
                    <li><a href="page_blank.html">Blank Page</a></li>
                    <li><a href="page_with_footer.html">Page with Footer</a></li>
                    <li><a href="page_without_sidebar.html">Page without Sidebar</a></li>
                    <li><a href="page_with_right_sidebar.html">Page with Right Sidebar</a></li>
                    <li><a href="page_with_minified_sidebar.html">Page with Minified Sidebar</a></li>
                    <li><a href="page_with_two_sidebar.html">Page with Two Sidebar</a></li>
                    <li><a href="page_with_line_icons.html">Page with Line Icons</a></li>
                    <li><a href="page_with_ionicons.html">Page with Ionicons</a></li>
                    <li><a href="page_full_height.html">Full Height Content</a></li>
                    <li><a href="page_with_small_sidebar.html">Page with Small Sidebar</a></li>
                    <li><a href="page_with_dark_sidebar.html">Page with Dark Sidebar</a></li>
                    <li><a href="page_with_mega_menu.html">Page with Mega Menu</a></li>
                    <li><a href="page_with_top_menu.html">Page with Top Menu</a></li>
                    <li><a href="page_with_boxed_layout.html">Page with Boxed Layout</a></li>
                    <li><a href="page_with_mixed_menu.html">Page with Mixed Menu</a></li>
                    <li><a href="page_boxed_layout_with_mixed_menu.html">Boxed Layout with Mixed Menu</a></li>
                    <li><a href="page_with_transparent_sidebar.html">Page with Transparent Sidebar</a></li>
                    <li><a href="page_with_search_sidebar.html">Page with Search Sidebar <i class="fa fa-paper-plane text-theme"></i></a></li>
                </ul>
            </li>
            <li class="has-sub">
                <a href="javascript:;">
                    <b class="caret"></b>
                    <i class="material-icons">card_giftcard</i>
                    <span>Extra <span class="label label-theme">NEW</span></span>
                </a>
                <ul class="sub-menu">
                    <li><a href="extra_timeline.html">Timeline</a></li>
                    <li><a href="extra_coming_soon.html">Coming Soon Page</a></li>
                    <li><a href="extra_search_results.html">Search Results</a></li>
                    <li><a href="extra_invoice.html">Invoice</a></li>
                    <li><a href="extra_404_error.html">404 Error Page</a></li>
                    <li><a href="extra_profile.html">Profile Page</a></li>
                    <li><a href="extra_scrum_board.html">Scrum Board <i class="fa fa-paper-plane text-theme"></i></a></li>
                    <li><a href="extra_cookie_acceptance_banner.html">Cookie Acceptance Banner <i class="fa fa-paper-plane text-theme"></i></a></li>
                </ul>
            </li>
            <li class="has-sub">
                <a href="javascript:;">
                    <b class="caret"></b>
                    <i class="material-icons">lock</i>
                    <span>Login & Register</span>
                </a>
                <ul class="sub-menu">
                    <li><a href="login.html">Login</a></li>
                    <li><a href="login_v2.html">Login v2</a></li>
                    <li><a href="login_v3.html">Login v3</a></li>
                    <li><a href="register_v3.html">Register v3</a></li>
                </ul>
            </li>
            <li class="has-sub">
                <a href="javascript:;">
                    <b class="caret"></b>
                    <i class="material-icons">apps</i>
                    <span>Version <span class="label label-theme">NEW</span></span>
                </a>
                <ul class="sub-menu">
                    <li><a href="../template_html/index_v3.html">HTML</a></li>
                    <li><a href="../template_ajax/">AJAX</a></li>
                    <li><a href="../template_angularjs/">ANGULAR JS</a></li>
                    <li><a href="../template_angularjs8/">ANGULAR JS 8</a></li>
                    <li><a href="../template_laravel/">LARAVEL</a></li>
                    <li><a href="../template_vuejs/">VUE JS</a></li>
                    <li><a href="../template_reactjs/">REACT JS</a></li>
                    <li><a href="../template_material/index_v3.html">MATERIAL DESIGN</a></li>
                    <li><a href="../template_apple/index_v3.html">APPLE DESIGN</a></li>
                    <li><a href="../template_transparent/index_v3.html">TRANSPARENT DESIGN <i class="fa fa-paper-plane text-theme"></i></a></li>
                    <li><a href="../template_facebook/index_v3.html">FACEBOOK DESIGN <i class="fa fa-paper-plane text-theme"></i></a></li>
                    <li><a href="../template_google/index_v3.html">GOOGLE DESIGN <i class="fa fa-paper-plane text-theme"></i></a></li>
                </ul>
            </li>
            <li class="has-sub">
                <a href="javascript:;">
                    <b class="caret"></b>
                    <i class="material-icons">help</i>
                    <span>Helper</span>
                </a>
                <ul class="sub-menu">
                    <li><a href="helper_css.html">Predefined CSS Classes</a></li>
                </ul>
            </li>
            <li class="has-sub">
                <a href="javascript:;">
                    <b class="caret"></b>
                    <i class="material-icons">list</i>
                    <span>Menu Level</span>
                </a>
                <ul class="sub-menu">
                    <li class="has-sub">
                        <a href="javascript:;">
                            <b class="caret"></b>
                            Menu 1.1
                        </a>
                        <ul class="sub-menu">
                            <li class="has-sub">
                                <a href="javascript:;">
                                    <b class="caret"></b>
                                    Menu 2.1
                                </a>
                                <ul class="sub-menu">
                                    <li><a href="javascript:;">Menu 3.1</a></li>
                                    <li><a href="javascript:;">Menu 3.2</a></li>
                                </ul>
                            </li>
                            <li><a href="javascript:;">Menu 2.2</a></li>
                            <li><a href="javascript:;">Menu 2.3</a></li>
                        </ul>
                    </li>
                    <li><a href="javascript:;">Menu 1.2</a></li>
                    <li><a href="javascript:;">Menu 1.3</a></li>
                </ul>
            </li>
        </ul> --}}
        <!-- end sidebar nav -->
    </div>
    <!-- end sidebar scrollbar -->
</div>
<div class="sidebar-bg"></div>
<!-- begin #sidebar -->
{{-- <div id="sidebar" class="sidebar">
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
                    <li><a href="{{ URL('/Admin-Panel/add-event') }}">Add Event</a></li>
                    <li><a href="{{ URL('/Admin-Panel/All-event') }}">All Events</a></li>
                    <li>
                        <a href="{{ URL('Admin-Panel/event-listing-form') }}">Add Event Listings</a>
                    </li>
                    <li>
                        <a href="{{ URL('Admin-Panel/event-listing') }}">All Event Listings</a>
                    </li>
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
                        <a href="{{ URL('/Admin-Panel/add-category') }}">Add Category</a>
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
<div class="sidebar-bg"></div> --}}
<!-- end #sidebar -->
