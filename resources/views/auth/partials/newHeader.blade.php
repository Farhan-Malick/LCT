
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