<header class="app-header">

    <!-- Start::main-header-container -->
    <div class="main-header-container container-fluid">

        <!-- Start::header-content-left -->
        <div class="header-content-left">

            <!-- Start::header-element -->
            <div class="header-element">
                <div class="horizontal-logo">
                    <a href="index.html" class="header-logo">
                        <img src="{{ asset('backend') }}/dist/assets/images/brand-logos/desktop-logo.svg" alt="logo"
                            class="desktop-logo">
                        <img src="{{ asset('backend') }}/dist/assets/images/brand-logos/toggle-logo.svg" alt="logo"
                            class="toggle-logo">
                        <img src="{{ asset('backend') }}/dist/assets/images/brand-logos/desktop-dark.svg" alt="logo"
                            class="desktop-dark">
                        <img src="{{ asset('backend') }}/dist/assets/images/brand-logos/toggle-dark.svg" alt="logo"
                            class="toggle-dark">
                        <img src="{{ asset('backend') }}/dist/assets/images/brand-logos/desktop-logo.svg" alt="logo"
                            class="desktop-white">
                        <img src="{{ asset('backend') }}/dist/assets/images/brand-logos/toggle-logo.svg" alt="logo"
                            class="toggle-white">
                    </a>
                </div>
            </div>
            <!-- End::header-element -->

            <!-- Start::header-element -->
            <div class="header-element">
                <!-- Start::header-link -->
                <a aria-label="Hide Sidebar"
                    class="sidemenu-toggle header-link animated-arrow hor-toggle horizontal-navtoggle"
                    data-bs-toggle="sidebar" href="javascript:void(0);"><span></span></a>
                <!-- End::header-link -->
            </div>
            <!-- End::header-element -->

            <!-- Start::header-element -->
            <div class="main-header-center  d-none d-lg-block header-link">
                <input type="text" class="form-control" id="typehead" placeholder="Search for results..."
                    autocomplete="off">
                <button type="button" aria-label="button" class="btn pe-1"><i class="fe fe-search"
                        aria-hidden="true"></i></button>
                <div id="headersearch" class="header-search">
                    <div class="p-3">
                        <div class="">
                            <p class="fw-semibold text-muted mb-2 fs-13">Recent Searches</p>
                            <div class="ps-0">
                                <a href="javascript:void(0)" class="search-tags"><i
                                        class="fe fe-search me-2"></i>People<span></span></a>
                                <a href="javascript:void(0)" class="search-tags"><i
                                        class="fe fe-search me-2"></i>Pages<span></span></a>
                                <a href="javascript:void(0)" class="search-tags"><i
                                        class="fe fe-search me-2"></i>Articles<span></span></a>
                            </div>
                        </div>
                        <div class="mt-3">
                            <p class="fw-semibold text-muted mb-3 fs-13">Apps and pages</p>
                            <ul class="ps-0">
                                <li class="p-1 d-flex align-items-center text-muted mb-3 search-app">
                                    <a class="d-inline-flex align-items-center" href="full-calendar.html"><i
                                            class="fe fe-calendar me-2 fs-14 bg-primary-transparent p-2 rounded-circle"></i><span>Calendar</span></a>
                                </li>
                                <li class="p-1 d-flex align-items-center text-muted mb-3 search-app">
                                    <a class="d-inline-flex align-items-center" href="mail.html"><i
                                            class="fe fe-mail me-2 fs-14 bg-primary-transparent p-2 rounded-circle"></i><span>Mail</span></a>
                                </li>
                                <li class="p-1 d-flex align-items-center text-muted mb-3 search-app">
                                    <a class="d-inline-flex align-items-center" href="buttons.html"><i
                                            class="fe fe-globe me-2 fs-14 bg-primary-transparent p-2 rounded-circle"></i><span>Buttons</span></a>
                                </li>
                            </ul>
                        </div>
                        <div class="mt-3">
                            <p class="fw-semibold text-muted mb-2 fs-13">Links</p>
                            <ul class="ps-0 list-unstyled mb-0">
                                <li class="p-1 align-items-center text-muted mb-1 search-app">
                                    <a href="javascript:void(0)"
                                        class="text-primary"><u>http://spruko/spruko.com</u></a>
                                </li>
                                <li class="p-1 align-items-center text-muted mb-0 pb-0 search-app">
                                    <a href="javascript:void(0)"
                                        class="text-primary"><u>http://spruko/spruko.com</u></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="py-3 border-top px-0">
                        <div class="text-center">
                            <a href="javascript:void(0)" class="text-primary text-decoration-underline fs-15">View
                                all</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End::header-element -->

        </div>
        <!-- End::header-content-left -->

        <!-- Start::header-content-right -->
        <div class="header-content-right">

            <!-- Start::header-element -->
            <div class="header-element header-search d-lg-none d-block">
                <!-- Start::header-link -->
                <a aria-label="anchor" href="javascript:void(0);" class="header-link" data-bs-toggle="modal"
                    data-bs-target="#searchModal">
                    <i class="fe fe-search header-link-icon"></i>
                </a>
                <!-- End::header-link -->
            </div>
            <!-- End::header-element -->

            {{-- <!-- Start::header-element -->
            <div class="header-element country-selector">
                <!-- Start::header-link|dropdown-toggle -->
                <a href="javascript:void(0);" class="header-link dropdown-toggle" data-bs-auto-close="outside"
                    data-bs-toggle="dropdown">
                    <img src="{{ asset('backend') }}/dist/assets/images/flags/us_flag.jpg" alt="img"
                        class="rounded-circle">
                </a>
                <!-- End::header-link|dropdown-toggle -->
                <ul class="main-header-dropdown dropdown-menu dropdown-menu-end" data-popper-placement="none">
                    <li>
                        <a class="dropdown-item d-flex align-items-center" href="javascript:void(0);">
                            <span class="avatar avatar-xs lh-1 me-2">
                                <img src="{{ asset('backend') }}/dist/assets/images/flags/us_flag.jpg" alt="img">
                            </span>
                            English
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-item d-flex align-items-center" href="javascript:void(0);">
                            <span class="avatar avatar-xs lh-1 me-2">
                                <img src="{{ asset('backend') }}/dist/assets/images/flags/spain_flag.jpg"
                                    alt="img">
                            </span>
                            Spanish
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-item d-flex align-items-center" href="javascript:void(0);">
                            <span class="avatar avatar-xs lh-1 me-2">
                                <img src="{{ asset('backend') }}/dist/assets/images/flags/french_flag.jpg"
                                    alt="img">
                            </span>
                            French
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-item d-flex align-items-center" href="javascript:void(0);">
                            <span class="avatar avatar-xs lh-1 me-2">
                                <img src="{{ asset('backend') }}/dist/assets/images/flags/germany_flag.jpg"
                                    alt="img">
                            </span>
                            German
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-item d-flex align-items-center" href="javascript:void(0);">
                            <span class="avatar avatar-xs lh-1 me-2">
                                <img src="{{ asset('backend') }}/dist/assets/images/flags/italy_flag.jpg"
                                    alt="img">
                            </span>
                            Italian
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-item d-flex align-items-center" href="javascript:void(0);">
                            <span class="avatar avatar-xs lh-1 me-2">
                                <img src="{{ asset('backend') }}/dist/assets/images/flags/russia_flag.jpg"
                                    alt="img">
                            </span>
                            Russian
                        </a>
                    </li>
                </ul>
            </div>
            <!-- End::header-element --> --}}

            {{-- <!-- Start::header-element -->
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


            {{-- End Button Buat Undangan --}}

            <!-- Start::header-element -->
            <div class="header-element main-profile-user">
                <!-- Start::header-link|dropdown-toggle -->
                <a href="#" class="header-link dropdown-toggle" id="mainHeaderProfile"
                    data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
                    <div class="d-flex align-items-center">
                        <div class="me-xxl-2 me-0">
                            <img src="{{ auth()->user()->photo }}" alt="img" width="32" height="32"
                                class="rounded-circle">
                        </div>
                        <div class="d-xxl-block d-none my-auto">
                            <h6 class="fw-semibold mb-0 lh-1 fs-14">{{ ucfirst(auth()->user()->name) }}</h6>
                            <span
                                class="op-7 fw-normal d-block fs-11 text-muted">{{ ucfirst(auth()->user()->role) }}</span>
                        </div>
                    </div>
                </a>
                <!-- End::header-link|dropdown-toggle -->
                <ul class="main-header-dropdown dropdown-menu pt-0 header-profile-dropdown dropdown-menu-end"
                    aria-labelledby="mainHeaderProfile">
                    <li class="drop-heading d-xxl-none d-block">
                        <div class="text-center">
                            <h5 class="text-dark mb-0 fs-14 fw-semibold">{{ ucfirst(auth()->user()->name) }}</h5>
                            <small class="text-muted">{{ ucfirst(auth()->user()->role) }}</small>
                        </div>
                    </li>
                    <li class="dropdown-item"><a class="d-flex w-100" href="{{ route('profile.index') }}"><i
                                class="fe fe-user fs-18 me-2 text-primary"></i>Profile</a></li>
                    <li class="dropdown-item"><a class="d-flex w-100" href="mail.html"><i
                                class="fe fe-mail fs-18 me-2 text-primary"></i>Inbox <span
                                class="badge bg-danger ms-auto">25</span></a></li>
                    {{-- <li class="dropdown-item"><a class="d-flex w-100" href="mail-settings.html"><i
                                class="fe fe-settings fs-18 me-2 text-primary"></i>Settings</a></li> --}}
                    <li class="dropdown-item"><a class="d-flex w-100" href="chat.html"><i
                                class="fe fe-headphones fs-18 me-2 text-primary"></i>Support</a></li>
                    {{-- <li class="dropdown-item"><a class="d-flex w-100" href="lockscreen.html"><i
                                class="fe fe-lock fs-18 me-2 text-primary"></i>Lockscreen</a></li> --}}
                    <li class="dropdown-item"><a class="d-flex w-100" href="{{ route('logout') }}"><i
                                class="fe fe-info fs-18 me-2 text-primary"></i>Log Out</a></li>
                </ul>
            </div>
            <!-- End::header-element -->
        </div>
        <!-- End::header-content-right -->

    </div>
    <!-- End::main-header-container -->

</header>
