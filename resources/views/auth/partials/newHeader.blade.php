<header class="header-area header-sticky" style="margin-bottom: 150px">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** -->
                    <a href="{{URL('/')}}" class="logo">
                        <img src="{{asset('assets/images/logo1.png')}}" style=" margin-top:13px" alt="">
                    </a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul style="" class="nav">
                        <li>
                            <a
                            class="nav-link"
                            href="{{ route('request.show') }}"
                            >Request Event</a
                        >
                        </li>
                        @auth
                        <li class="dropdown ">
                            <a class="nav-link dropdown-toggle mean-expand" href="#" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                My Account
                            </a>
                            <style>
                                  @media (max-width: 560px) {
                                    .example-element{
                                        inset: auto auto 0px 0px;
                                            margin: 0px;

                                    }
                                    #example-element2{
                                        padding-left: 20px;

                                    }
                                        a.mean-expand {
                                            /* margin-top: 3px; */
                                            width: 100%;
                                            height: 24px;
                                            padding: 12px !important;
                                            /* text-align: right; */
                                            /* position: absolute; */
                                            right: 0;
                                            top: 0;
                                            z-index: 2;
                                            font-weight: 700;
                                            background: 0 0;
                                            border: none !important;
                                        }
                                    .dropdown-menu{
                                        --bs-dropdown-min-width: 10rem;
                                            --bs-dropdown-padding-x: 0;
                                            --bs-dropdown-padding-y: 0.5rem;
                                            --bs-dropdown-spacer: 0.125rem;
                                            --bs-dropdown-font-size: 1rem;
                                            --bs-dropdown-color: #212529;
                                            --bs-dropdown-bg: #fff;
                                            --bs-dropdown-border-color: var(--bs-border-color-translucent);
                                            --bs-dropdown-border-radius: 0.375rem;
                                            --bs-dropdown-border-width: 1px;
                                            --bs-dropdown-inner-border-radius: calc(0.375rem - 1px);
                                            --bs-dropdown-divider-bg: var(--bs-border-color-translucent);
                                            --bs-dropdown-divider-margin-y: 0.5rem;
                                            --bs-dropdown-box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15);
                                            --bs-dropdown-link-color: #212529;
                                            --bs-dropdown-link-hover-color: #1e2125;
                                            --bs-dropdown-link-hover-bg: #e9ecef;
                                            --bs-dropdown-link-active-color: #fff;
                                            --bs-dropdown-link-active-bg: #0d6efd;
                                            --bs-dropdown-link-disabled-color: #adb5bd;
                                            --bs-dropdown-item-padding-x: 1rem;
                                            --bs-dropdown-item-padding-y: 0.25rem;
                                            --bs-dropdown-header-color: #6c757d;
                                            --bs-dropdown-header-padding-x: 1rem;
                                        --bs-dropdown-header-padding-y: 0.5rem;
                                        /* position: relative; */
                                        z-index: 1000;
                                        display: none;
                                        min-width: var(--bs-dropdown-min-width);
                                        padding: var(--bs-dropdown-padding-y) var(--bs-dropdown-padding-x);
                                        margin: 0;
                                        font-size: var(--bs-dropdown-font-size);
                                        color: var(--bs-dropdown-color);
                                        text-align: center;
                                        list-style: none;
                                        background-color: var(--bs-dropdown-bg);
                                        background-clip: padding-box;
                                        border: var(--bs-dropdown-border-width) solid var(--bs-dropdown-border-color);
                                        border-radius: var(--bs-dropdown-border-radius);
                                    }
                                    }
                            </style>
                            <ul id="" class="dropdown-menu example-element" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item text-dark " href="{{ URL('/dashboard') }}">My Profile</a></li>
                                {{-- <li><a class="dropdown-item text-dark" href="{{ URL('/dashboard') }}">Settings</a></li> --}}
                                <li >
                                    <a href="#" id="example-element2" class="dropdown-item  text-dark" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                                    <form id="logout-form" method="POST" action="{{ route('logout') }}">
                                        @csrf
                                    </form>
                                </li>
                            </ul>
                        </li>
                      
                        @endauth @guest
                        <li class="nav-item">
                            <a
                                 class="nav-link"
                                href="{{ route('login') }}"
                                >Login</a
                            >
                        </li>
                        @endguest
                        <li class="nav-item">
                            <a class="nav-link" href="{{URL('/contact-us')}}"
                                >Contact us</a
                            >
                        </li>
                        <li class="nav-item">
                            <a
                                class="nav-link btn btn-sm primary-btn px-3"
                                href="{{ URL('Sell-tickets') }}"
                                >Sell Tickets</a
                            >
                        </li>
                        
                    </ul>   
                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>
                    <!-- ***** Menu End ***** -->
                </nav>

               
            </div>
        </div>
    </div>
  </header>