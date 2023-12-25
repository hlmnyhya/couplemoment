<header class="app-header">

    <!-- Start::main-header-container -->
    <div class="main-header-container container-fluid">

        <!-- Start::header-content-left -->
        <div class="header-content-left">

            <!-- Start::header-element -->
            <div class="header-element">
                <div class="horizontal-logo">
                    <a href="index.html" class="header-logo">
                        <img src="{{asset('backend')}}/dist/assets/images/brand-logos/desktop-logo.png" alt="logo" class="desktop-logo">
                        <img src="{{asset('backend')}}/dist/assets/images/brand-logos/toggle-logo.png" alt="logo" class="toggle-logo">
                        <img src="{{asset('backend')}}/dist/assets/images/brand-logos/desktop-dark.png" alt="logo" class="desktop-dark">
                        <img src="{{asset('backend')}}/dist/assets/images/brand-logos/toggle-dark.png" alt="logo" class="toggle-dark">
                        <img src="{{asset('backend')}}/dist/assets/images/brand-logos/desktop-white.png" alt="logo" class="desktop-white">
                        <img src="{{asset('backend')}}/dist/assets/images/brand-logos/toggle-white.png" alt="logo" class="toggle-white">
                    </a>
                </div>
            </div>
            <!-- End::header-element -->

            <!-- Start::header-element -->
            <div class="header-element">
                <!-- Start::header-link -->
                <a aria-label="Hide Sidebar" class="sidemenu-toggle header-link animated-arrow hor-toggle horizontal-navtoggle" data-bs-toggle="sidebar" href="javascript:void(0);"><span></span></a>
                <!-- End::header-link -->
            </div>
            <!-- End::header-element -->
        </div>
        <!-- End::header-content-left -->

        <!-- Start::header-content-right -->
        <div class="header-content-right">

            <!-- Start::header-element -->
            <div class="header-element header-search d-lg-none d-block">
                <!-- Start::header-link -->
                <a aria-label="anchor" href="javascript:void(0);" class="header-link" data-bs-toggle="modal" data-bs-target="#searchModal">
                    <i class="fe fe-search header-link-icon"></i>
                </a>
                <!-- End::header-link -->
            </div>
            <!-- End::header-element -->

            <!-- Start::header-element -->
            <div class="header-element header-theme-mode">
                <!-- Start::header-link|layout-setting -->
                <a aria-label="anchor" href="javascript:void(0);" class="header-link layout-setting">
                    <span class="light-layout">
                        <!-- Start::header-link-icon -->
                    <i class="fe fe-moon header-link-icon"></i>
                        <!-- End::header-link-icon -->
                    </span>
                    <span class="dark-layout">
                        <!-- Start::header-link-icon -->
                    <i class="fe fe-sun header-link-icon"></i>
                        <!-- End::header-link-icon -->
                    </span>
                </a>
                <!-- End::header-link|layout-setting -->
            </div>

            {{-- Button Buat Undangan --}}
<div class="header-element notifications-dropdown">
    <!-- Start::header-link|dropdown-toggle -->
    <a aria-label="anchor" href="{{ route('invitation.index') }}" class="header-link dropdown-toggle" aria-expanded="false">
        <button class="btn btn-primary label-btn"><i class="ti ti-square-plus label-btn-icon me-2"></i> Buat Undangan</button>
    </a>
    <!-- End::header-link|dropdown-toggle -->
</div>
<!-- End::header-element -->


            {{-- End Button Buat Undangan --}}

            <!-- Start::header-element -->
            <div class="header-element main-profile-user">
                <!-- Start::header-link|dropdown-toggle -->
                <a href="#" class="header-link dropdown-toggle" id="mainHeaderProfile" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
                    <div class="d-flex align-items-center">
                        <div class="me-xxl-2 me-0">
                            <img src="{{asset('backend')}}/dist/assets/images/faces/9.jpg" alt="img" width="32" height="32" class="rounded-circle">
                        </div>
                        <div class="d-xxl-block d-none my-auto">
                            <h6 class="fw-semibold mb-0 lh-1 fs-14">Json Taylor</h6>
                            <span class="op-7 fw-normal d-block fs-11 text-muted">Web Designer</span>
                        </div>
                    </div>
                </a>
                <!-- End::header-link|dropdown-toggle -->
                <ul class="main-header-dropdown dropdown-menu pt-0 header-profile-dropdown dropdown-menu-end" aria-labelledby="mainHeaderProfile">
                    <li class="drop-heading d-xxl-none d-block">
                         <div class="text-center">
                            <h5 class="text-dark mb-0 fs-14 fw-semibold">Json Taylor</h5>
                            <small class="text-muted">Web Designer</small>
                        </div>
                    </li>
                    <li class="dropdown-item"><a class="d-flex w-100" href="profile.html"><i class="fe fe-user fs-18 me-2 text-primary"></i>Profile</a></li>
                    <li class="dropdown-item"><a class="d-flex w-100" href="mail.html"><i class="fe fe-mail fs-18 me-2 text-primary"></i>Inbox <span class="badge bg-danger ms-auto">25</span></a></li>
                    <li class="dropdown-item"><a class="d-flex w-100" href="mail-settings.html"><i class="fe fe-settings fs-18 me-2 text-primary"></i>Settings</a></li>
                    <li class="dropdown-item"><a class="d-flex w-100" href="chat.html"><i class="fe fe-headphones fs-18 me-2 text-primary"></i>Support</a></li>
                    <li class="dropdown-item"><a class="d-flex w-100" href="lockscreen.html"><i class="fe fe-lock fs-18 me-2 text-primary"></i>Lockscreen</a></li>
                    <li class="dropdown-item"><a class="d-flex w-100" href="sign-in.html"><i class="fe fe-info fs-18 me-2 text-primary"></i>Log Out</a></li>
                </ul>
            </div>
            <!-- End::header-element -->
        </div>
        <!-- End::header-content-right -->

    </div>
    <!-- End::main-header-container -->

</header>