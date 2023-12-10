<aside class="app-sidebar sticky" id="sidebar">

    <!-- Start::main-sidebar-header -->
    <div class="main-sidebar-header">
        <a href="index.html" class="header-logo">
            <img src="{{asset('backend')}}/dist/assets/images/brand-logos/desktop-logo.png" alt="logo" class="desktop-logo">
            <img src="{{asset('backend')}}/dist/assets/images/brand-logos/toggle-logo.png" alt="logo" class="toggle-logo">
            <img src="{{asset('backend')}}/dist/assets/images/brand-logos/desktop-dark.png" alt="logo" class="desktop-dark">
            <img src="{{asset('backend')}}/dist/assets/images/brand-logos/toggle-dark.png" alt="logo" class="toggle-dark">
            <img src="{{asset('backend')}}/dist/assets/images/brand-logos/desktop-white.png" alt="logo" class="desktop-white">
            <img src="{{asset('backend')}}/dist/assets/images/brand-logos/toggle-white.png" alt="logo" class="toggle-white">
        </a>
    </div>
    <!-- End::main-sidebar-header -->

    <!-- Start::main-sidebar -->
    <div class="main-sidebar" id="sidebar-scroll">

        <!-- Start::nav -->
        <nav class="main-menu-container nav nav-pills flex-column sub-open">
            <div class="slide-left" id="slide-left">
                <svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24" height="24" viewBox="0 0 24 24"> <path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z"></path> </svg>
            </div>
            <ul class="main-menu">
                <!-- Start::slide__category -->
                <li class="slide__category"><span class="category-name">Main</span></li>
                <!-- End::slide__category -->

                <!-- Start::slide -->
                <li class="slide">
                    <a href="{{ route('admin-dashboard') }}" class="side-menu__item">
                        <i class="fe fe-home side-menu__icon"></i>
                        <span class="side-menu__label">Dashboard</span>
                    </a>
                </li>
                <!-- End::slide -->

                <!-- Start::slide -->
                <li class="slide">
                    <a href="{{ route('my-undangan') }}" class="side-menu__item">
                        <i class="fe fe-folder side-menu__icon"></i>
                        <span class="side-menu__label">My Undangan</span>
                    </a>
                </li>
                <!-- End::slide -->

                <!-- Start::slide -->
                <li class="slide">
                    <a href="{{ route('invoice') }}" class="side-menu__item">
                        <i class="fe fe-inbox side-menu__icon"></i>
                        <span class="side-menu__label">Invoice</span>
                    </a>
                </li>
                <!-- End::slide -->

                <!-- Start::slide -->
                <li class="slide">
                    <a href="index.html" class="side-menu__item">
                        <i class="fe fe-video side-menu__icon"></i>
                        <span class="side-menu__label">Tutorial</span>
                    </a>
                </li>
                <!-- End::slide -->

                <!-- Start::slide__category -->
                <li class="slide__category"><span class="category-name">Affiliate</span></li>
                <!-- End::slide__category -->

                <!-- Start::slide -->
                <li class="slide">
                    <a href="{{ route('affiliate') }}" class="side-menu__item">
                        <i class="fe fe-share side-menu__icon"></i>
                        <span class="side-menu__label">Affiliate</span>
                    </a>
                </li>
                <!-- End::slide -->

                <!-- Start::slide -->
                <li class="slide">
                    <a href="{{ route('history-bonus') }}" class="side-menu__item">
                        <i class="fe fe-percent side-menu__icon"></i>
                        <span class="side-menu__label">History Bonus</span>
                    </a>
                </li>
                <!-- End::slide -->

                <!-- Start::slide -->
                <li class="slide">
                    <a href="index.html" class="side-menu__item">
                        <i class="fe fe-credit-card side-menu__icon"></i>
                        <span class="side-menu__label">History Penarikan</span>
                    </a>
                </li>
                <!-- End::slide -->

                <!-- Start::slide__category -->
                <li class="slide__category"><span class="category-name">Account</span></li>
                <!-- End::slide__category -->

                <!-- Start::slide -->
                <li class="slide">
                    <a href="index.html" class="side-menu__item">
                        <i class="fe fe-user side-menu__icon"></i>
                        <span class="side-menu__label">Edit Profile</span>
                    </a>
                </li>
                <!-- End::slide -->

                <!-- Start::slide -->
                <li class="slide">
                    <a href="index.html" class="side-menu__item">
                        <i class="fe fe-log-out side-menu__icon"></i>
                        <span class="side-menu__label">Logout</span>
                    </a>
                </li>
                <!-- End::slide -->

            </ul>
            <div class="slide-right" id="slide-right"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24" height="24" viewBox="0 0 24 24"> <path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z"></path> </svg></div>
        </nav>
        <!-- End::nav -->

    </div>
    <!-- End::main-sidebar -->

</aside>
