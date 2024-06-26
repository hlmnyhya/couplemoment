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
<<<<<<< HEAD
=======

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

>>>>>>> 7fa8e2330ce2d1ca7174b041708d2cf92c2c11e9
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

<<<<<<< HEAD
            <!-- Start::header-element -->
=======
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
>>>>>>> 7fa8e2330ce2d1ca7174b041708d2cf92c2c11e9
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
<<<<<<< HEAD

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
=======
            <!-- End::header-element --> --}}

            {{-- <!-- Start::header-element -->
            <div class="header-element cart-dropdown">
                <!-- Start::header-link|dropdown-toggle -->
                <a href="javascript:void(0);" class="header-link dropdown-toggle" data-bs-auto-close="outside"
                    data-bs-toggle="dropdown">
                    <i class="fe fe-shopping-cart header-link-icon"></i>
                    <span class="badge bg-secondary rounded-pill header-icon-badge" id="cart-icon-badge">4</span>
                </a>
                <!-- End::header-link|dropdown-toggle -->
                <!-- Start::main-header-dropdown -->
                <div class="main-header-dropdown dropdown-menu dropdown-menu-end" data-popper-placement="none">
                    <div class="p-3">
                        <div class="d-flex align-items-center justify-content-between">
                            <p class="mb-0 fs-16 fw-semibold">My Shopping Cart</p>
                            <span class="badge bg-danger-transparent fs-14" id="cart-data">Hurry Up!</span>
                        </div>
                    </div>
                    <div>
                        <hr class="dropdown-divider">
                    </div>
                    <ul class="list-unstyled mb-0" id="header-cart-items-scroll">
                        <li class="dropdown-item">
                            <div class="d-flex align-items-start cart-dropdown-item">
                                <img src="{{ asset('backend') }}/dist/assets/images/ecommerce/orders/11.jpg"
                                    alt="img" class="avatar avatar-xl br-5 me-3">
                                <div class="flex-grow-1">
                                    <div class="d-flex align-items-start mb-0">
                                        <div>
                                            <a class="mb-0 fs-13 text-dark fw-semibold" href="cart.html">Flower Pot
                                                for Home Decor</a>
                                            <div class="min-w-fit-content">
                                                <span>Status: <span class="text-success">In Stock</span></span>
                                                <p class="fs-13 text-muted mb-0">Quantity: 01</p>
                                            </div>
                                        </div>
                                        <div class="ms-auto text-end d-flex fs-16">
                                            <span class="fs-16 text-dark mb-1">$438</span>
                                            <a aria-label="anchor" href="javascript:void(0);"
                                                class="header-cart-remove dropdown-item-close btn"><i
                                                    class="ti ti-trash"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="dropdown-item">
                            <div class="d-flex align-items-start cart-dropdown-item">
                                <img src="{{ asset('backend') }}/dist/assets/images/ecommerce/orders/1.jpg"
                                    alt="img" class="avatar avatar-xl br-5 me-3">
                                <div class="flex-grow-1">
                                    <div class="d-flex align-items-start mb-0">
                                        <div>
                                            <a class="mb-0 fs-13 text-dark fw-semibold" href="cart.html">Black Digital
                                                Camera</a>
                                            <div class="min-w-fit-content">
                                                <span>Status: <span class="text-danger">Out Stock</span></span>
                                                <p class="fs-13 text-muted mb-0">Quantity: 06</p>
                                            </div>
                                        </div>
                                        <div class="ms-auto text-end d-flex fs-16">
                                            <span class="fs-16 text-dark mb-1">$867</span>
                                            <a aria-label="anchor" href="javascript:void(0);"
                                                class="header-cart-remove dropdown-item-close btn"><i
                                                    class="ti ti-trash"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="dropdown-item">
                            <div class="d-flex align-items-start cart-dropdown-item">
                                <img src="{{ asset('backend') }}/dist/assets/images/ecommerce/orders/15.jpg"
                                    alt="img" class="avatar avatar-xl br-5 me-3">
                                <div class="flex-grow-1">
                                    <div class="d-flex align-items-start mb-0">
                                        <div>
                                            <a class="mb-0 fs-13 text-dark fw-semibold" href="cart.html">Stylish
                                                Rockerz 255 Ear Pods</a>
                                            <div class="min-w-fit-content">
                                                <span>Status: <span class="text-success">In Stock</span></span>
                                                <p class="fs-13 text-muted mb-0">Quantity: 05</p>
                                            </div>
                                        </div>
                                        <div class="ms-auto text-end d-flex fs-16">
                                            <span class="fs-16 text-dark mb-1">$323</span>
                                            <a aria-label="anchor" href="javascript:void(0);"
                                                class="header-cart-remove dropdown-item-close btn"><i
                                                    class="ti ti-trash"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="dropdown-item">
                            <div class="d-flex align-items-start cart-dropdown-item">
                                <img src="{{ asset('backend') }}/dist/assets/images/ecommerce/orders/12.jpg"
                                    alt="img" class="avatar avatar-xl br-5 me-3">
                                <div class="flex-grow-1">
                                    <div class="d-flex align-items-start mb-0">
                                        <div>
                                            <a class="mb-0 fs-13 text-dark fw-semibold" href="cart.html">Women Party
                                                Wear Dress</a>
                                            <div class="min-w-fit-content">
                                                <span>Status: <span class="text-success">In Stock</span></span>
                                                <p class="fs-13 text-muted mb-0">Quantity: 05</p>
                                            </div>
                                        </div>
                                        <div class="ms-auto text-end d-flex fs-16">
                                            <span class="fs-16 text-dark mb-1">$867</span>
                                            <a aria-label="anchor" href="javascript:void(0);"
                                                class="header-cart-remove dropdown-item-close btn"><i
                                                    class="ti ti-trash"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <div class="p-3 empty-header-item border-top d-flex">
                        <a href="checkout.html" class="btn btn-primary btn-pill w-sm btn-sm  fs-16"><i
                                class="fe fe-check-circle me-2 d-inline-flex"></i>checkout</a>
                        <h6 class="ms-auto fs-17 fw-semibold my-auto">Total: $6789</h6>
                    </div>
                    <div class="p-5 empty-item d-none">
                        <div class="text-center">
                            <span class="avatar avatar-xl avatar-rounded bg-warning-transparent">
                                <i class="ri-shopping-cart-2-line fs-2"></i>
                            </span>
                            <h6 class="fw-bold mb-1 mt-3">Your Cart is Empty</h6>
                            <span class="mb-3 fw-normal fs-13 d-block">Add some items to make me happy :)</span>
                            <a href="products.html" class="btn btn-primary btn-wave m-1" data-abc="true">continue
                                shopping <i class="bi bi-arrow-right ms-1"></i></a>
                        </div>
                    </div>
                </div>
                <!-- End::main-header-dropdown -->
            </div>
            <!-- End::header-element --> --}}

            {{-- <!-- Start::header-element -->
            <div class="header-element notifications-dropdown">
                <!-- Start::header-link|dropdown-toggle -->
                <a aria-label="anchor" href="javascript:void(0);" class="header-link dropdown-toggle"
                    data-bs-toggle="dropdown" data-bs-auto-close="outside" id="messageDropdown"
                    aria-expanded="false">
                    <i class="fe fe-bell header-link-icon"></i>
                    <span class="w-9 h-9 p-0 bg-success rounded-pill header-icon-badge pulse pulse-success"
                        id="notification-icon-badge"></span>
                </a>
                <!-- End::header-link|dropdown-toggle -->
                <!-- Start::main-header-dropdown -->
                <div class="main-header-dropdown dropdown-menu dropdown-menu-end" data-popper-placement="none">
                    <div class="p-3">
                        <div class="d-flex align-items-center justify-content-between">
                            <p class="mb-0 fs-17 fw-semibold">Notifications</p>
                            <span class="badge bg-secondary-transparent" id="notifiation-data">5 Unread</span>
                        </div>
                    </div>
                    <div class="dropdown-divider"></div>
                    <ul class="list-unstyled mb-0" id="header-notification-scroll">
                        <li class="dropdown-item">
                            <div class="d-flex align-items-start">
                                <div class="pe-2">
                                    <span class="avatar avatar-md bg-primary avatar-rounded"><i
                                            class="fe fe-mail fs-18"></i></span>
                                </div>
                                <div class="flex-grow-1 d-flex align-items-center my-auto">
                                    <div>
                                        <p class="mb-0 fw-semibold"><a href="notifications.html">New Application
                                                received</a></p>
                                        <span class="text-muted fw-normal fs-12 header-notification-text">3 days
                                            ago</span>
                                    </div>
                                    <div class="ms-auto my-auto">
                                        <a aria-label="anchor" href="javascript:void(0);"
                                            class="min-w-fit-content text-muted me-1 dropdown-item-close1"><i
                                                class="ti ti-x fs-16"></i></a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="dropdown-item">
                            <div class="d-flex align-items-start">
                                <div class="pe-2">
                                    <span class="avatar avatar-md bg-secondary avatar-rounded"><i
                                            class="fe fe-check-circle fs-18"></i></span>
                                </div>
                                <div class="flex-grow-1 d-flex align-items-center my-auto">
                                    <div>
                                        <p class="mb-0 fw-semibold"><a href="notifications.html">Project has been
                                                approved</a></p>
                                        <span class="text-muted fw-normal fs-12 header-notification-text">2 hours
                                            ago</span>
                                    </div>
                                    <div class="ms-auto my-auto">
                                        <a aria-label="anchor" href="javascript:void(0);"
                                            class="min-w-fit-content text-muted me-1 dropdown-item-close1"><i
                                                class="ti ti-x fs-16"></i></a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="dropdown-item">
                            <div class="d-flex align-items-start">
                                <div class="pe-2">
                                    <span class="avatar avatar-md bg-success avatar-rounded"><i
                                            class="fe fe-shopping-cart fs-18"></i></span>
                                </div>
                                <div class="flex-grow-1 d-flex align-items-center my-auto">
                                    <div>
                                        <p class="mb-0 fw-semibold"><a href="notifications.html">Your Product
                                                Delivered</a></p>
                                        <span class="text-muted fw-normal fs-12 header-notification-text">30 min
                                            ago</span>
                                    </div>
                                    <div class="ms-auto my-auto">
                                        <a aria-label="anchor" href="javascript:void(0);"
                                            class="min-w-fit-content text-muted me-1 dropdown-item-close1"><i
                                                class="ti ti-x fs-16"></i></a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="dropdown-item">
                            <div class="d-flex align-items-start">
                                <div class="pe-2">
                                    <span class="avatar avatar-md bg-pink avatar-rounded"><i
                                            class="fe fe-shopping-cart fs-18"></i></span>
                                </div>
                                <div class="flex-grow-1 d-flex align-items-center my-auto">
                                    <div>
                                        <p class="mb-0 fw-semibold"><a href="notifications.html">Friend Requests</a>
                                        </p>
                                        <span class="text-muted fw-normal fs-12 header-notification-text">10 min
                                            ago</span>
                                    </div>
                                    <div class="ms-auto my-auto">
                                        <a aria-label="anchor" href="javascript:void(0);"
                                            class="min-w-fit-content text-muted me-1 dropdown-item-close1"><i
                                                class="ti ti-x fs-16"></i></a>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <div class="p-3 empty-header-item1 border-top text-center">
                        <a href="notifications.html" class="">View All Notifications</a>
                    </div>
                    <div class="p-5 empty-item1 d-none">
                        <div class="text-center">
                            <span class="avatar avatar-xl avatar-rounded bg-secondary-transparent">
                                <i class="ri-notification-off-line fs-2"></i>
                            </span>
                            <h6 class="fw-semibold mt-3">No New Notifications</h6>
                        </div>
                    </div>
                </div>
                <!-- End::main-header-dropdown -->
            </div>
            <!-- End::header-element --> --}}

            <!-- Start::header-element -->
            {{-- <div class="header-element message-dropdown">
                <!-- Start::header-link|dropdown-toggle -->
                <a aria-label="anchor" href="javascript:void(0);" class="header-link dropdown-toggle"
                    data-bs-toggle="dropdown" data-bs-auto-close="outside" id="messageDropdown2"
                    aria-expanded="false">
                    <i class="fe fe-message-square header-link-icon"></i>
                    <span class="w-9 h-9 p-0 bg-danger rounded-pill header-icon-badge pulse pulse-danger"
                        id="message-icon-badge"></span>
                </a>
                <!-- End::header-link|dropdown-toggle -->
                <!-- Start::main-header-dropdown -->
                <div class="main-header-dropdown dropdown-menu dropdown-menu-end" data-popper-placement="none">
                    <div class="p-3">
                        <div class="d-flex align-items-center justify-content-between">
                            <p class="mb-0 fs-17 fw-semibold">Messages</p>
                            <span class="badge bg-secondary-transparent" id="message-data">5 Unread</span>
                        </div>
                    </div>
                    <div class="dropdown-divider"></div>
                    <ul class="list-unstyled mb-0" id="header-message-scroll">
                        <li class="dropdown-item">
                            <div class="d-flex align-items-start">
                                <div class="pe-2">
                                    <img src="{{ asset('backend') }}/dist/assets/images/faces/1.jpg" alt="img"
                                        class="avatar avatar-md avatar-rounded">
                                </div>
                                <div class="w-100">
                                    <div class="flex-grow-1 d-flex align-items-centermy-auto">
                                        <div>
                                            <h6 class="mb-0 fw-semibold fs-14"><a href="chat.html">Peter Theil</a>
                                            </h6>
                                        </div>
                                        <div class="ms-auto text-end">
                                            <p class="text-muted mb-0">
                                                6:45am
                                            </p>
                                        </div>
                                    </div>
                                    <div class="flex-grow-1 d-flex align-items-centermy-auto">
                                        <div>
                                            <span class="text-muted fw-normal fs-12">Commented on file Guest
                                                list....</span>
                                        </div>
                                        <div class="ms-auto text-end">
                                            <a aria-label="anchor" href="javascript:void(0);"
                                                class="min-w-fit-content text-muted me-1 dropdown-item-close2"><i
                                                    class="ti ti-x fs-16"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="dropdown-item">
                            <div class="d-flex align-items-start">
                                <div class="pe-2">
                                    <img src="{{ asset('backend') }}/dist/assets/images/faces/15.jpg" alt="img"
                                        class="avatar avatar-md avatar-rounded">
                                </div>
                                <div class="w-100">
                                    <div class="flex-grow-1 d-flex align-items-centermy-auto">
                                        <div>
                                            <h6 class="mb-0 fw-semibold fs-14"><a href="chat.html">Abagael Luth</a>
                                            </h6>
                                        </div>
                                        <div class="ms-auto text-end">
                                            <p class="text-muted mb-0">10:35am</p>
                                        </div>
                                    </div>
                                    <div class="flex-grow-1 d-flex align-items-centermy-auto">
                                        <div>
                                            <span class="text-muted fw-normal fs-12">New Meetup Started......</span>
                                        </div>
                                        <div class="ms-auto text-end">
                                            <a aria-label="anchor" href="javascript:void(0);"
                                                class="min-w-fit-content text-muted me-1 dropdown-item-close2"><i
                                                    class="ti ti-x fs-16"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="dropdown-item">
                            <div class="d-flex align-items-start">
                                <div class="pe-2">
                                    <img src="{{ asset('backend') }}/dist/assets/images/faces/12.jpg" alt="img"
                                        class="avatar avatar-md avatar-rounded">
                                </div>
                                <div class="w-100">
                                    <div class="flex-grow-1 d-flex align-items-centermy-auto">
                                        <div>
                                            <h6 class="mb-0 fw-semibold fs-14"><a href="chat.html">Brizid Dawson</a>
                                            </h6>
                                        </div>
                                        <div class="ms-auto text-end">
                                            <p class="text-muted mb-0">02:17am</p>
                                        </div>
                                    </div>
                                    <div class="flex-grow-1 d-flex align-items-centermy-auto">
                                        <div>
                                            <span class="text-muted fw-normal fs-12">Brizid is in the
                                                Warehouse...</span>
                                        </div>
                                        <div class="ms-auto text-end">
                                            <a aria-label="anchor" href="javascript:void(0);"
                                                class="min-w-fit-content text-muted me-1 dropdown-item-close2"><i
                                                    class="ti ti-x fs-16"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="dropdown-item">
                            <div class="d-flex align-items-start">
                                <div class="pe-2">
                                    <img src="{{ asset('backend') }}/dist/assets/images/faces/4.jpg" alt="img"
                                        class="avatar avatar-md avatar-rounded">
                                </div>
                                <div class="w-100">
                                    <div class="flex-grow-1 d-flex align-items-centermy-auto">
                                        <div>
                                            <h6 class="mb-0 fw-semibold fs-14"><a href="chat.html">Shannon Shaw</a>
                                            </h6>
                                        </div>
                                        <div class="ms-auto text-end">
                                            <p class="text-muted mb-0">7:55pm</p>
                                        </div>
                                    </div>
                                    <div class="flex-grow-1 d-flex align-items-centermy-auto">
                                        <div>
                                            <span class="text-muted fw-normal fs-12">New Product Realease......</span>
                                        </div>
                                        <div class="ms-auto text-end">
                                            <a aria-label="anchor" href="javascript:void(0);"
                                                class="min-w-fit-content text-muted me-1 dropdown-item-close2"><i
                                                    class="ti ti-x fs-16"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="dropdown-item">
                            <div class="d-flex align-items-start">
                                <div class="pe-2">
                                    <img src="{{ asset('backend') }}/dist/assets/images/faces/3.jpg" alt="img"
                                        class="avatar avatar-md avatar-rounded">
                                </div>
                                <div class="w-100">
                                    <div class="flex-grow-1 d-flex align-items-centermy-auto">
                                        <div>
                                            <h6 class="mb-0 fw-semibold fs-14"><a href="chat.html">Cherry Blossom</a>
                                            </h6>
                                        </div>
                                        <div class="ms-auto text-end">
                                            <p class="text-muted mb-0">7:55pm</p>
                                        </div>
                                    </div>
                                    <div class="flex-grow-1 d-flex align-items-centermy-auto">
                                        <div>
                                            <span class="text-muted fw-normal fs-12">You have appointment
                                                on......</span>
                                        </div>
                                        <div class="ms-auto text-end">
                                            <a aria-label="anchor" href="javascript:void(0);"
                                                class="min-w-fit-content text-muted me-1 dropdown-item-close2"><i
                                                    class="ti ti-x fs-16"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <div class="p-3 empty-header-item2 border-top text-center">
                        <a href="chat.html" class="">View All Messages</a>
                    </div>
                    <div class="p-5 empty-item2 d-none">
                        <div class="text-center">
                            <span class="avatar avatar-xl avatar-rounded bg-danger-transparent">
                                <i class="ri-message-2-line fs-2"></i>
                            </span>
                            <h6 class="fw-semibold mt-3">No New Messages</h6>
                        </div>
                    </div>
                </div>
                <!-- End::main-header-dropdown -->
            </div>
            <!-- End::header-element --> --}}

            {{-- <!-- Start::header-element -->
            <div class="header-element header-fullscreen">
                <!-- Start::header-link -->
                <a aria-label="anchor" onclick="openFullscreen();" href="#" class="header-link">
                    <i class="fe fe-minimize full-screen-open header-link-icon"></i>
                    <i class="fe fe-minimize-2 full-screen-close header-link-icon d-none"></i>
                </a>
                <!-- End::header-link -->
            </div>
            <!-- End::header-element --> --}}

            {{-- <!-- Start::header-element -->
            <div class="header-element">
                <!-- Start::header-link|dropdown-toggle -->
                <a aria-label="anchor" href="javascript:void(0);" class="header-link dropdown-toggle"
                    data-bs-toggle="offcanvas" data-bs-target="#sidebar-right">
                    <i class="fe fe-align-right header-link-icon"></i>
                </a>
                <!-- End::header-link|dropdown-toggle -->
            </div> --}}
            <!-- End::header-element -->

            {{-- Button Buat Undangan --}}
            <div class="header-element notifications-dropdown">
                <!-- Start::header-link|dropdown-toggle -->
                <a aria-label="anchor" href="{{ route('invitation.index') }}" class="header-link dropdown-toggle"
                    aria-expanded="false">
                    <button class="btn btn-primary label-btn"><i class="ti ti-square-plus label-btn-icon me-2"></i>
                        Buat Undangan</button>
                </a>
                <!-- End::header-link|dropdown-toggle -->
            </div>
            <!-- End::header-element -->
>>>>>>> 7fa8e2330ce2d1ca7174b041708d2cf92c2c11e9


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
<<<<<<< HEAD
=======

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
            <!-- End::header-element -->

            {{-- <!-- Start::header-element -->
            <div class="header-element">
                <!-- Start::header-link|switcher-icon -->
                <a aria-label="anchor" href="#" class="header-link switcher-icon" data-bs-toggle="offcanvas"
                    data-bs-target="#switcher-canvas">
                    <i class="bx bx-cog header-link-icon"></i>
                </a>
                <!-- End::header-link|switcher-icon -->
            </div>
            <!-- End::header-element --> --}}

>>>>>>> 7fa8e2330ce2d1ca7174b041708d2cf92c2c11e9
        </div>
        <!-- End::header-content-right -->

    </div>
    <!-- End::main-header-container -->

</header>
