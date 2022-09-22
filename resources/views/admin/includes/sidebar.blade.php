<div class="sidebar sidebar-white sidebar-fixed" id="sidebar">
    <div class="sidebar-brand d-none d-md-flex">
        <h5 class="sidebar-brand-full text-center" width="118" height="46">Dairy Farm Management</h5>

    </div>
    <ul class="sidebar-nav" data-coreui="navigation" data-simplebar="">
        <li class="nav-item"><a class="nav-link" href="{{route('home')}}">
                <svg class="nav-icon">
                    <use xlink:href="{{asset('UI/vendors/@coreui/icons/svg/free.svg#cil-speedometer')}}"></use>
                </svg> Dashboard<span class="badge badge-sm bg-info ms-auto">NEW</span></a></li>
        <li class="nav-title">Admin</li>
        <li class="nav-item"><a class="nav-link" href="colors.html">
                <svg class="nav-icon">
                    <use xlink:href="{{asset('UI/vendors/@coreui/icons/svg/free.svg#cil-drop')}}">
                    </use>
                </svg> Users
            </a>
        </li>
        <li class="nav-item"><a class="nav-link" href="typography.html">
                <svg class="nav-icon">
                    <use xlink:href="{{asset('UI/vendors/@coreui/icons/svg/free.svg#cil-pencil')}}"></use>
                </svg>
                Farm-Details
            </a>
        </li>
        <li class="nav-title">Components</li>
        <li class="nav-group">
            <a class="nav-link nav-group-toggle" href="#">
                <svg class="nav-icon">
                    <use xlink:href="{{asset('UI/vendors/@coreui/icons/svg/free.svg#cil-animal')}}"></use>
                </svg>
                Cow-Management
            </a>
            <ul class="nav-group-items">
                <li class="nav-item">
                    <a class="nav-link" href="{{route('cow.index')}}"><span class="nav-icon"></span>
                        Cattle-List
                    </a>
                </li>
            </ul>
        </li>
        <li class="nav-group">
            <a class="nav-link nav-group-toggle" href="#">
                <svg class="nav-icon">
                    <use xlink:href="{{asset('UI/vendors/@coreui/icons/svg/free.svg#cil-airplay')}}">
                    </use>
                </svg>
                Cow Monitoring
            </a>
            <ul class="nav-group-items">
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        Routine Monitor
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('vaccine.index')}}">
                        Vaccines Monitor
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('pregnancy.index')}}">
                        Animal Pregnancy
                    </a>
                </li>
            </ul>
        </li>
        <li class="nav-group">
            <a class="nav-link nav-group-toggle" href="#">
                <svg class="nav-icon">
                    <use xlink:href="{{asset('UI/vendors/@coreui/icons/svg/free.svg#cil-drop')}}">
                    </use>
                </svg>
                Milk Parlour
            </a>
            <ul class="nav-group-items">
                <li class="nav-item">
                    <a class="nav-link" href="{{route('milk.index')}}">
                        Collect Milk
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        Sale Milk
                    </a>
                </li>
            </ul>
        </li>
      
            <a class="nav-link" href="{{route('calf.index')}}">
                <svg class="nav-icon">
                    <use xlink:href="{{asset('UI/vendors/@coreui/icons/svg/free.svg#cil-paw')}}">
                    </use>
                </svg>
                Calf-Manage
            </a>
       
        <li class="nav-group"><a class="nav-link nav-group-toggle" href="#">
                <svg class="nav-icon">
                    <use xlink:href="{{asset('UI/vendors/@coreui/icons/svg/free.svg#cil-restaurant')}}"></use>
                </svg> Feed Monitoring
            </a>
            <ul class="nav-group-items">
                <li class="nav-item"><a class="nav-link" href="{{asset('UI/icons/coreui-icons-free.html')}}"> CoreUI
                        Icons<span class="badge badge-sm bg-success ms-auto">Free</span></a>
                </li>
            </ul>
        </li>
        <li class="nav-group"><a class="nav-link nav-group-toggle" href="#">
                <svg class="nav-icon">
                    <use xlink:href="{{asset('UI/vendors/@coreui/icons/svg/free.svg#cil-bell')}}"></use>
                </svg> Cow Sale</a>
            <ul class="nav-group-items">
                <li class="nav-item">
                    <a class="nav-link" href="#">
                     Alerts
                    </a>
                </li>
            </ul>
        </li>

        <li class="nav-divider"></li>
        <li class="nav-title">Reports</li>
        {{-- <li class="nav-title">Plugins</li> --}}
        <li class="nav-group">
            <a class="nav-link nav-group-toggle" href="#">
                <svg class="nav-icon">
                    <use xlink:href="{{asset('UI/vendors/@coreui/icons/svg/free.svg#cil-info')}}">
                    </use>
                </svg>
                plugins
            </a>

            <ul class="nav-group-items">
                <li class="nav-item">
                    <a class="nav-link" href="login.html" target="_top">
                        <svg class="nav-icon">
                            <use xlink:href="{{asset('UI/vendors/@coreui/icons/svg/free.svg#cil-account-logout')}}">
                            </use>
                        </svg>
                        Add-Breed
                    </a>
                </li>
                <li class="nav-item"><a class="nav-link" href="{{route('vaccines.index')}}" target="_top">
                        <svg class="nav-icon">
                            <use xlink:href="{{asset('UI/vendors/@coreui/icons/svg/free.svg#cil-list-filter')}}">
                            </use>
                        </svg>
                        Vaccines
                    </a>
                </li>
                <li class="nav-item"><a class="nav-link" href="404.html" target="_top">
                        <svg class="nav-icon">
                            <use xlink:href="{{asset('UI/vendors/@coreui/icons/svg/free.svg#cil-bug')}}"></use>
                        </svg>
                        Error 404
                    </a>
                </li>
                <li class="nav-item"><a class="nav-link" href="500.html" target="_top">
                        <svg class="nav-icon">
                            <use xlink:href="{{asset('UI/vendors/@coreui/icons/svg/free.svg#cil-bug')}}"></use>
                        </svg>
                        Error 500
                    </a>
                </li>
            </ul>
        </li>
    </ul>
    <button class="sidebar-toggler" type="button" data-coreui-toggle="unfoldable"></button>
</div>