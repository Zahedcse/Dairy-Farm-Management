<header class="header header-sticky mb-4">
    <div class="container-fluid">
        <button class="header-toggler px-md-0 me-md-3" type="button"
            onclick="coreui.Sidebar.getInstance(document.querySelector('#sidebar')).toggle()">
            <svg class="icon icon-lg">
                <use xlink:href="{{asset('UI/vendors/@coreui/icons/svg/free.svg#cil-menu')}}">
                </use>
            </svg>
        </button>
        <ul class="header-nav ms-auto">
        <!-- Notifications -->
            <li class="nav-item dropdown">
                <a class="nav-link " data-coreui-toggle="dropdown" href="#" role="button" aria-haspopup="true"
                    aria-expanded="false">
                    <svg class="icon icon-lg">
                        <use xlink:href="{{asset('UI/vendors/@coreui/icons/svg/free.svg#cil-bell')}}">
                        </use>
                    </svg>
                </a>
                <div class="dropdown-menu dropdown-menu-end pt-0">
                   
                    <div class="dropdown-divider"></div>
                </div>   
            </li>
            {{-- <li class="nav-item dropdown">
                <a class="nav-link" href="#">
                    <svg class="icon icon-lg">
                        <use xlink:href="{{asset('UI/vendors/@coreui/icons/svg/free.svg#cil-bell')}}">
                        </use>
                    </svg>
                </a>
        
            </li> --}}
        <!-- Notifications ends here-->
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <svg class="icon icon-lg">
                        <use xlink:href="{{asset('UI/vendors/@coreui/icons/svg/free.svg#cil-list-rich')}}">
                        </use>
                    </svg>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <svg class="icon icon-lg">
                        <use xlink:href="{{asset('UI/vendors/@coreui/icons/svg/free.svg#cil-envelope-open')}}">
                        </use>
                    </svg>
                </a>
            </li>
          </ul>
        <a class="header-brand d-md-none" href="#">
            <svg width="118" height="46" alt="CoreUI Logo">
                <use xlink:href="{{asset('UI/assets/brand/coreui.svg#full')}}">
                </use>
            </svg>
        </a>
        <ul class="header-nav ms-3">
            <li class="nav-item dropdown">
                <a class="nav-link py-0" data-coreui-toggle="dropdown" href="#" role="button" aria-haspopup="true"
                    aria-expanded="false">
                    <div class="avatar avatar-md">
                        <img class="avatar-img" src="{{asset('UI/assets/img/avatars/8.jpg')}}" alt="user@email.com">
                    </div>
                </a>
                <div class="dropdown-menu dropdown-menu-end pt-0">
                    <div class="dropdown-header bg-light py-2">
                        <div class="fw-semibold">
                            {{auth()->User()->name}}
                        </div>
                    </div>
                    <a class="dropdown-item" href="#">
                        <svg class="icon me-2">
                            <use xlink:href="{{asset('UI/vendors/@coreui/icons/svg/free.svg#cil-user')}}">
                            </use>
                        </svg>
                        Profile
                    </a>
                    <a class="dropdown-item" href="#">
                        <svg class="icon me-2">
                            <use xlink:href="{{asset('UI/vendors/@coreui/icons/svg/free.svg#cil-settings')}}">
                            </use>
                        </svg> Settings
                    </a>
                    <a class="dropdown-item" href="#">
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="{{route('logout')}}">
                            <svg class="icon me-2">
                                <use xlink:href="{{asset('UI/vendors/@coreui/icons/svg/free.svg#cil-account-logout')}}">
                                </use>
                            </svg> Logout
                        </a>
                    </a>
                </div>   
            </li>
        </ul>
    </div>
    <div class="header-divider"></div>
    <div class="container-fluid">
        <nav aria-label="breadcrumb">
            @yield('breadcrumb')
        </nav>
    </div>
</header>