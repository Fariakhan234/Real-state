<div class="pcoded-container navbar-wrapper">
    <style>
        .custom-navbar {
            padding: 6px 15px;
            min-height: 60px;
            background-color: #fff;
            border-bottom: 1px solid #ddd;
        }

        .navbar-wrapper.custom-wrapper {
            display: flex;
            justify-content: space-between;
            align-items: center;
            width: 100%;
        }

        .navbar-logo.custom-logo-group {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .custom-logo-group img {
            max-height: 40px;
        }

        .mobile-search .input-group {
            height: 32px;
        }

        .navbar-container {
            display: flex;
            justify-content: flex-end;
            align-items: center;
            flex-grow: 1;
        }

        .custom-nav-right {
            display: flex;
            align-items: center;
            gap: 15px;
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .custom-avatar {
            height: 35px;
            width: 35px;
            border-radius: 50%;
        }

        .custom-nav-right li a {
            display: flex;
            align-items: center;
            padding: 6px 10px;
        }

        .show-notification {
            display: none;
            position: absolute;
            background: #fff;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
            width: 280px;
            z-index: 999;
            margin-top: 8px;
        }

        .header-notification:hover .show-notification,
        .user-profile:hover .show-notification {
            display: block;
        }

        .media {
            display: flex;
            align-items: center;
            gap: 10px;
            padding: 10px;
        }

        .media-body h5,
        .media-body p,
        .media-body span {
            margin: 0;
            font-size: 13px;
        }

        .media-body p {
            color: #666;
        }

        .media-body span {
            font-size: 11px;
            color: #aaa;
        }
    </style>

    <nav class="navbar header-navbar pcoded-header custom-navbar">
        <div class="navbar-wrapper custom-wrapper">

            <!-- Left Section -->
            <div class="navbar-logo custom-logo-group">
                <a class="mobile-menu" id="mobile-collapse" href="#!">
                    <i class="ti-menu"></i>
                </a>

                <div class="mobile-search">
                    <div class="header-search">
                        <div class="main-search morphsearch-search">
                            <div class="input-group">
                                <span class="input-group-prepend search-close">
                                    <i class="ti-close input-group-text"></i>
                                </span>
                                <input type="text" class="form-control" placeholder="Enter Keyword">
                                <span class="input-group-append search-btn">
                                    <i class="ti-search input-group-text"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>

                <a href="{{ route('dashboard') }}">
                    <img src="{{ asset('/assets/images/logo.png') }}" alt="Theme-Logo" />
                </a>

                <a class="mobile-options" href="#!">
                    <i class="ti-more"></i>
                </a>
            </div>

            <!-- Right Section -->
            <div class="navbar-container">
                <ul class="custom-nav-right">
                    <!-- Notification -->
                    <li class="header-notification">
                        <a href="#!">
                            <i class="ti-bell fa-2x"></i>
                            <span class="badge bg-c-red"></span>
                        </a>
                        <ul class="show-notification">
                            <li>
                                <h6>Notifications</h6>
                                <label class="label label-danger">New</label>
                            </li>
                            <li>
                                <div class="media">
                                    <img class="custom-avatar" src="assets/images/avatar-2.jpg" alt="User">
                                    <div class="media-body">
                                        <h5>John Doe</h5>
                                        <p>Lorem ipsum dolor sit amet.</p>
                                        <span>30 mins ago</span>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </li>

                    <!-- User Profile -->
                        <a href="#!">
                            <img src="{{ asset('assets/images/avatar-4.jpg') }}" class="custom-avatar" alt="User">
                            {{-- <span>John Doe</span> --}}
                            {{-- <i class=""></i> --}}
                        </a>
                        <ul class="show-notification profile-notification">
                            <li><a href="settings.html"><i class="ti-settings"></i> Settings</a></li>
                            <li><a href="user-profile.html"><i class="ti-user"></i> Profile</a></li>
                            <li><a href="email-inbox.html"><i class="ti-email"></i> My Messages</a></li>
                            <li><a href="auth-lock-screen.html"><i class="ti-lock"></i> Lock Screen</a></li>
                            <li><a href="auth-normal-sign-in.html"><i class="ti-layout-sidebar-left"></i> Logout</a></li>
                        </ul>
                    </li>
                </ul>
            </div>

        </div>
    </nav>
</div>
