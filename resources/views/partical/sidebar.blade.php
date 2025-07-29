<!-- SIDEBAR START -->
<nav class="pcoded-navbar">
    <div class="sidebar_toggle"><a href="#"><i class="icon-close icons"></i></a></div>
    <div class="pcoded-inner-navbar main-menu">

        <!-- User Profile Section -->
        {{-- <div class="main-menu-header">
            <img class="img-80 img-radius" src="assets/images/avatar-4.jpg" alt="User-Profile-Image">
            <div class="user-details">
                <span id="more-details">John Doe<i class="fa fa-caret-down"></i></span>
            </div>
        </div> --}}
        <div class="main-menu-content">
            <ul>
                <li class="more-details">
                    <a href="user-profile.html"><i class="ti-user"></i>View Profile</a>
                    <a href="#"><i class="ti-settings"></i>Settings</a>
                    <a href="auth-normal-sign-in.html"><i class="ti-layout-sidebar-left"></i>Logout</a>
                </li>
            </ul>
        </div>

        <!-- Navigation Links -->
        {{-- <div class="pcoded-navigation-label">Navigation</div>
    

        <div class="pcoded-navigation-label">UI Element</div> --}}
        {{-- <ul class="pcoded-item pcoded-left-item"> --}}
            {{-- <li class="pcoded-hasmenu">
                <a href="javascript:void(0)" class="waves-effect waves-dark">
                    <span class="pcoded-micon"><i class="ti-layout-grid2-alt"></i></span>
                    <span class="pcoded-mtext">Basic</span>
                </a>
                <ul class="pcoded-submenu">
                    <li><a href="breadcrumb.html">Breadcrumbs</a></li>
                    <li><a href="button.html">Button</a></li>
                    <li><a href="accordion.html">Accordion</a></li>
                    <li><a href="tabs.html">Tabs</a></li>
                    <li><a href="color.html">Color</a></li>
                    <li><a href="label-badge.html">Label Badge</a></li>
                    <li><a href="tooltip.html">Tooltip & Popover</a></li>
                    <li><a href="typography.html">Typography</a></li>
                    <li><a href="notification.html">Notifications</a></li>
                </ul>
            </li> --}}
        {{-- </ul> --}}

        <div class="pcoded-navigation-label mt-2">Properties</div>
        <ul class="pcoded-item pcoded-left-item">
            <li>
                <a href=" {{route('properties.index')}}" class="waves-effect waves-dark">
                    <span class="pcoded-micon"><i class="ti-layers"></i></span>
                    <span class="pcoded-mtext">Properties</span>
                </a>
            </li>
        </ul>

        
        <div class="pcoded-navigation-label">Category And Type</div>
        <ul class="pcoded-item pcoded-left-item">
            <li>
                <a href="{{ route('categories.index') }}" class="waves-effect waves-dark">
                    <span class="pcoded-micon"><i class="fa-regular fa-folder-open"></i></span>
                    <span class="pcoded-mtext">Category</span>
                </a>
            </li>
            <li>
                <a href="map-google.html" class="waves-effect waves-dark">
                    <span class="pcoded-micon"></span>
                    <span class="pcoded-mtext">Types</span>
                </a>
            </li>
        </ul>
        <div class="pcoded-navigation-label">Categorey</div>
        <ul class="pcoded-item pcoded-left-item">
            <li>
                <a href="bs-basic-table.html" class="waves-effect waves-dark">
                    <span class="pcoded-micon"><i class="ti-receipt"></i></span>
                    <span class="pcoded-mtext">Categorey</span>
                </a>
            </li>
        </ul>

        <div class="pcoded-navigation-label">Chart And Maps</div>
        <ul class="pcoded-item pcoded-left-item">
            <li>
                <a href="chart-morris.html" class="waves-effect waves-dark">
                    <span class="pcoded-micon"><i class="ti-bar-chart-alt"></i></span>
                    <span class="pcoded-mtext">Charts</span>
                </a>
            </li>
            <li>
                <a href="map-google.html" class="waves-effect waves-dark">
                    <span class="pcoded-micon"><i class="ti-map-alt"></i></span>
                    <span class="pcoded-mtext">Maps</span>
                </a>
            </li>
        </ul>

        <div class="pcoded-navigation-label">Pages</div>
        <ul class="pcoded-item pcoded-left-item">
            <li class="pcoded-hasmenu">
                <a href="javascript:void(0)" class="waves-effect waves-dark">
                    <span class="pcoded-micon"><i class="ti-id-badge"></i></span>
                    <span class="pcoded-mtext">Pages</span>
                </a>
                <ul class="pcoded-submenu">
                    <li><a href="auth-normal-sign-in.html">Login</a></li>
                    <li><a href="auth-sign-up.html">Registration</a></li>
                    <li><a href="sample-page.html">Sample Page</a></li>
                </ul>
            </li>
        </ul>

    </div>
</nav>
<!-- SIDEBAR END -->
