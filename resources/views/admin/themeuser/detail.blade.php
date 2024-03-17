@extends('admin.admin_dashboard')

@section('content')
    <!-- Start::app-content -->
    <div class="main-content app-content">
        <div class="container-fluid">

            <!-- PAGE-HEADER -->
            <div class="page-header">
                <h1 class="page-title my-auto">Details Tema</h1>
                <div>
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item">
                            <a href="javascript:void(0)">Menu Tema</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page"> Details</li>
                    </ol>
                </div>
            </div>
            <!-- PAGE-HEADER END -->



            <!-- Start::row-1 -->
            <div class="row">
                <div class="col-xl-12">
                    <div class="card custom-card">
                        <div class="card-body">
                            <div class="row ">
                                <div class="col-xxl-4 col-xl-12">
                                    <div class="row">
                                        <div class="col-xxl-12 col-xl-6 col-lg-6 col-md-6 col-sm-12 mb-md-5 mb-3">
                                            <div class="">
                                                <div class="swiper swiper-preview-details bd-gray-100 product-details-page">
                                                    <div class="swiper-wrapper">
                                                        <div class="swiper-slide" id="img-container">
                                                            <img class="img-fluid" src="{{ $theme->cover }}" alt="img">
                                                        </div>
                                                        {{-- <div class="swiper-slide image-container">
                                                            <img class="img-fluid"
                                                                src="{{ asset('backend') }}/dist/assets/images/ecommerce/7.png"
                                                                alt="img">
                                                        </div>
                                                        <div class="swiper-slide image-container">
                                                            <img class="img-fluid"
                                                                src="{{ asset('backend') }}/dist/assets/images/ecommerce/8.png"
                                                                alt="img">
                                                        </div>
                                                        <div class="swiper-slide image-container">
                                                            <img class="img-fluid"
                                                                src="{{ asset('backend') }}/dist/assets/images/ecommerce/9.png"
                                                                alt="img">
                                                        </div> --}}
                                                    </div>
                                                    {{-- <div class="swiper-button-next"></div>
                                                    <div class="swiper-button-prev"></div> --}}
                                                </div>
                                                {{-- <div class="swiper swiper-view-details mt-2">
                                                    <div class="swiper-wrapper">
                                                        <div class="swiper-slide">
                                                            <img class="img-fluid"
                                                                src="{{ asset('backend') }}/dist/assets/images/ecommerce/6.png"
                                                                alt="img">
                                                        </div>
                                                        <div class="swiper-slide">
                                                            <img class="img-fluid"
                                                                src="{{ asset('backend') }}/dist/assets/images/ecommerce/7.png"
                                                                alt="img">
                                                        </div>
                                                        <div class="swiper-slide">
                                                            <img class="img-fluid"
                                                                src="{{ asset('backend') }}/dist/assets/images/ecommerce/8.png"
                                                                alt="img">
                                                        </div>
                                                        <div class="swiper-slide">
                                                            <img class="img-fluid"
                                                                src="{{ asset('backend') }}/dist/assets/images/ecommerce/9.png"
                                                                alt="img">
                                                        </div>
                                                    </div>
                                                </div> --}}
                                            </div>
                                        </div>
                                        <div class="col-xxl-12 col-xl-6 col-lg-6 col-md-6 col-sm-12 mb-md-5 mb-3">
                                            <div class="card custom-card bg-transparent shadow-none border rounded">
                                                <div class="card-header flex-between justify-content-between">
                                                    <div class="card-title">{{ $theme->name }}</div>
                                                </div>
                                                <div class="card-body">
                                                    <div class="d-flex justify-content-evenly mt-4">
                                                        <div class="">
                                                            <div class="text-center">
                                                                <div class="avatar avatar-xxl bg-light p-1">
                                                                    <img src="{{ $theme->background_img }}" alt="">
                                                                </div>
                                                                <h5 class="mb-1 fs-12 fw-semibold   mt-1">
                                                                    {{ $theme->code }}</h5>
                                                                <p class="mb-0 text-muted fs-12 px-3">
                                                                    @foreach ($categories as $category)
                                                                        {{ $category->name }},
                                                                    @endforeach
                                                                </p>
                                                                <div class="flex-fill mb-1">
                                                                    <span class="badge bg-success rounded-1">4.4<i
                                                                            class="ri-star-s-fill ms-1"></i></span>
                                                                    <span class="text-muted ms-1">(256)</span>
                                                                </div>
                                                                {{-- <div class="d-flex  justify-content-center mb-1">
                                                                    <h6 class="mb-0 fw-semibold">
                                                                        $1,099
                                                                    </h6>
                                                                </div> --}}
                                                            </div>
                                                        </div>
                                                        {{-- <div class=" d-flex ">
                                                            <span class="text-muted fs-25 fw-semibold"><i
                                                                    class="bx bx-plus"></i></span>
                                                        </div>
                                                        <div class="">
                                                            <div class="text-center">
                                                                <div class="avatar avatar-xxl bg-light p-1">
                                                                    <img src="{{ asset('backend') }}/dist/assets/images/ecommerce/8.png"
                                                                        alt="">
                                                                </div>
                                                                <h5 class="mb-1 fs-12 fw-semibold   mt-1">Omega Blue Mens
                                                                    Jacket</h5>
                                                                <p class="mb-0 text-muted fs-12 px-3">Aluminium Case with
                                                                    Multiple Featured Band - Regular</p>
                                                                <div class="flex-fill mb-1">
                                                                    <span class="badge bg-success rounded-1">4.0<i
                                                                            class="ri-star-s-fill ms-1"></i></span>
                                                                    <span class="text-muted ms-1">(156)</span>
                                                                </div>
                                                                <div class="d-flex  justify-content-center mb-1">
                                                                    <h6 class="mb-0 fw-semibold">
                                                                        $2,099
                                                                    </h6>
                                                                </div>
                                                            </div>
                                                        </div> --}}
                                                    </div>

                                                </div>
                                                <div class="card-footer">
                                                    <div class="d-flex mt-2">
                                                        {{-- <div class="">
                                                            <h6>Total Price</h6>
                                                            <h5 class="mb-0 fw-semibold">$4,099 </h5>
                                                        </div> --}}
                                                        {{-- {{ $theme->status }} --}}
                                                        <div class="ms-auto">
                                                            <div class="">
                                                                @if (Auth::user()->status == 1)
                                                                    <a href="{{ route('invitation.index', ['theme_id' => $theme->id]) }}"
                                                                        target="_blank" class="btn btn-primary">Buat
                                                                        Undangan</a>
                                                                @elseif (Auth::user()->status == 0 && $theme->status == 'Free')
                                                                    <a href="{{ route('invitation.index', ['theme_id' => $theme->id]) }}"
                                                                        target="_blank" class="btn btn-primary">Buat
                                                                        Undangan</a>
                                                                @else
                                                                    Anda dapat berlangganan lebih dahulu!
                                                                @endif
                                                            </div>
                                                        </div>



                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-8 col-xl-12 ">
                                    <div class="row product-scroll  rounded-3 border p-3">
                                        <div class="col-xl-8 mt-xxl-0 mt-3">
                                            <div>
                                                <p class="fs-18 fw-semibold mb-0">{{ $theme->name }}
                                                    ({{ $theme->code }}).
                                                </p>
                                                <p class="fs-18 mb-4">
                                                    <i class="ri-star-s-fill text-warning align-middle"></i>
                                                    <i class="ri-star-s-fill text-warning align-middle"></i>
                                                    <i class="ri-star-s-fill text-warning align-middle"></i>
                                                    <i class="ri-star-s-fill text-warning align-middle"></i>
                                                    <i class="ri-star-half-s-fill text-warning align-middle"></i>
                                                    <span class="fw-semibold text-muted ms-1">4.3<a class="text-info"
                                                            href="javascript:void(0);">(2.4k Reviews)</a></span>
                                                </p>
                                                {{-- <div class="row mb-4">
                                                    <div class="col-xxl-3 col-xl-12">
                                                        <p class="mb-1 lh-1 fs-11 text-success fw-semibold">Special Offer
                                                        </p>
                                                        <div class="d-flex">
                                                            <h3 class="mb-1 fw-semibold"><span>$229.00<span
                                                                        class="text-muted text-decoration-line-through ms-1  fs-16 op-6">$2,799</span></span>
                                                            </h3>
                                                        </div>
                                                        <span class="rounded-1 fs-11 badge bg-danger-transparent">50%
                                                            Off</span>
                                                    </div>
                                                </div>
                                                <div class="mb-4">
                                                    <div class="row">
                                                        <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                                            <p class="fs-15 fw-semibold mb-2">Colors :</p>
                                                            <p class="mb-0 d-flex">
                                                                <a aria-label="anchor"
                                                                    class="color-1 product-colors selected"
                                                                    href="javascript:void(0)">
                                                                    <i class="ri-checkbox-blank-circle-fill"></i>
                                                                </a>
                                                                <a aria-label="anchor" class="color-2 product-colors"
                                                                    href="javascript:void(0)">
                                                                    <i class="ri-checkbox-blank-circle-fill"></i>
                                                                </a>
                                                                <a aria-label="anchor" class="color-3 product-colors"
                                                                    href="javascript:void(0)">
                                                                    <i class="ri-checkbox-blank-circle-fill"></i>
                                                                </a>
                                                                <a aria-label="anchor" class="color-4 product-colors"
                                                                    href="javascript:void(0)">
                                                                    <i class="ri-checkbox-blank-circle-fill"></i>
                                                                </a>
                                                                <a aria-label="anchor" class="color-5 product-colors"
                                                                    href="javascript:void(0)">
                                                                    <i class="ri-checkbox-blank-circle-fill"></i>
                                                                </a>
                                                            </p>
                                                        </div>
                                                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 mt-md-0 mt-3">
                                                            <p class="fs-15 fw-semibold mb-2">Size(in inches) :</p>
                                                            <p class="mb-0 d-flex">
                                                                <a class="color-1 product-sizes selected"
                                                                    href="javascript:void(0)">
                                                                    44
                                                                </a>
                                                                <a class="color-2 product-sizes"
                                                                    href="javascript:void(0)">
                                                                    40
                                                                </a>
                                                                <a class="color-3 product-sizes"
                                                                    href="javascript:void(0)">
                                                                    38
                                                                </a>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div> --}}
                                                <div class="mb-4">
                                                    {{-- <a href="cart.html" class="btn btn-warning me-2 mb-2">Masukan
                                                        Keranjang</a> --}}
                                                    <a href="{{ route('demo.theme', ['id' => $theme->id]) }}"
                                                        class="btn btn-success me-2 mb-2" target="_blank">Demo Undangan</a>

                                                </div>
                                                {{-- <div class="mb-4">
                                                    <p class="fs-15 fw-semibold mb-1"><i
                                                            class="ti ti-discount-2 fs-17 me-1 text-success"></i>Fitur apa
                                                        saja yang dimuat:
                                                    </p>
                                                    <p class="text-muted mb-0 ps-2 mt-2">
                                                        <i class="ti ti-discount-2 fs-14 text-success d-inline-flex"></i>
                                                        <span>
                                                            20% off upto 300 on min purchase of $555
                                                        </span>
                                                    </p>
                                                    <p class="text-muted mb-0 ps-2 mt-2">
                                                        <i class="ti ti-discount-2 fs-14 text-success d-inline-flex"></i>
                                                        <span>
                                                            starting from ₹101 monthView Plans
                                                        </span>
                                                    </p>
                                                    <p class="text-muted mb-0 ps-2 mt-2">
                                                        <i class="ti ti-discount-2 fs-14 text-success d-inline-flex"></i>
                                                        <span>
                                                            No cost emi on selected bank card on min purchase of $1,499
                                                        </span>
                                                    </p>
                                                    <p class="text-muted mb-0 ps-2 mt-2">
                                                        <i class="ti ti-discount-2 fs-14 text-success d-inline-flex"></i>
                                                        <span>
                                                            Free delivery on first orderView.
                                                        </span>
                                                    </p>
                                                    <p class="text-muted mb-0 ps-2 mt-2">
                                                        <i class="ti ti-discount-2 fs-14 text-success d-inline-flex"></i>
                                                        <span>
                                                            Offer upto 30% on grosery on purchase of this itemT&amp;C.
                                                        </span>
                                                    </p>
                                                    <div class="collapse " id="more-offers">
                                                        <p class="text-muted mb-0 ps-2 mt-2">
                                                            <i
                                                                class="ti ti-discount-2 fs-14 text-success d-inline-flex"></i>
                                                            <span>
                                                                Buy 4 and get 20% Off oN smart Travel bages
                                                            </span>
                                                        </p>
                                                        <p class="text-muted mb-0 ps-2 mt-2">
                                                            <i
                                                                class="ti ti-discount-2 fs-14 text-success d-inline-flex"></i>
                                                            <span>
                                                                No Cost EMI available.
                                                            </span>
                                                        </p>

                                                    </div>
                                                    <a class="text-success fs-12 ps-2" data-bs-toggle="collapse"
                                                        href="#more-offers" aria-expanded="false"><u>View More</u></a>

                                                </div> --}}
                                                <div class="mb-4">
                                                    <p class="fs-15 fw-semibold mb-1">Deskripsi Undangan :</p>
                                                    <p class="text-muted mb-0">
                                                        {{ $theme->description }}
                                                    </p>
                                                </div>

                                                {{-- START REVIEW SECTION --}}
                                                {{-- <div class="border p-3 rounded-3 mb-0">
                                                    <p class="fs-15 fw-semibold mb-3">Reviews &amp; Ratings :</p>
                                                    <div class="row">
                                                        <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                                            <div class="d-flex align-items-top mb-3">
                                                                <div class="me-2 lh-1">
                                                                    <i class="ri-star-fill fs-25 text-warning"></i>
                                                                </div>
                                                                <div class="lh-1">
                                                                    <p class="mb-1 fw-semibold fs-18">4.5 out of 5</p>
                                                                    <p class="mb-0 text-muted fs-11">Based on (23,435)
                                                                        ratings</p>
                                                                </div>
                                                            </div>
                                                            <div class="d-flex align-items-center mb-3">
                                                                <div class="fs-12 me-2 fw-semibold">5 <i
                                                                        class="ri-star-fill fs-10"></i></div>
                                                                <div class="progress progress-xs flex-fill">
                                                                    <div class="progress-bar bg-success" role="progressbar"
                                                                        style="width: 55%" aria-valuenow="55"
                                                                        aria-valuemin="0" aria-valuemax="100">
                                                                    </div>
                                                                </div>
                                                                <div class="text-muted ms-2 fs-12">(10,893)</div>
                                                            </div>
                                                            <div class="d-flex align-items-center mb-3">
                                                                <div class="fs-12 me-2 fw-semibold">4 <i
                                                                        class="ri-star-fill fs-10"></i></div>
                                                                <div class="progress progress-xs flex-fill">
                                                                    <div class="progress-bar bg-success"
                                                                        role="progressbar" style="width: 22%"
                                                                        aria-valuenow="22" aria-valuemin="0"
                                                                        aria-valuemax="100">
                                                                    </div>
                                                                </div>
                                                                <div class="text-muted ms-2 fs-12">(6,534)</div>
                                                            </div>
                                                            <div class="d-flex align-items-center mb-3">
                                                                <div class="fs-12 me-2 fw-semibold">3 <i
                                                                        class="ri-star-fill fs-10"></i></div>
                                                                <div class="progress progress-xs flex-fill">
                                                                    <div class="progress-bar bg-success"
                                                                        role="progressbar" style="width: 8%"
                                                                        aria-valuenow="8" aria-valuemin="0"
                                                                        aria-valuemax="100">
                                                                    </div>
                                                                </div>
                                                                <div class="text-muted ms-2 fs-12">(4,342)</div>
                                                            </div>
                                                            <div class="d-flex align-items-center mb-3">
                                                                <div class="fs-12 me-2 fw-semibold">2 <i
                                                                        class="ri-star-fill fs-10"></i></div>
                                                                <div class="progress progress-xs flex-fill">
                                                                    <div class="progress-bar bg-warning"
                                                                        role="progressbar" style="width: 9%"
                                                                        aria-valuenow="9" aria-valuemin="0"
                                                                        aria-valuemax="100">
                                                                    </div>
                                                                </div>
                                                                <div class="text-muted ms-2 fs-12">(1,432)</div>
                                                            </div>
                                                            <div class="d-flex align-items-center">
                                                                <div class="fs-12 me-2 fw-semibold">1 <i
                                                                        class="ri-star-fill fs-10"></i></div>
                                                                <div class="progress progress-xs flex-fill">
                                                                    <div class="progress-bar bg-danger" role="progressbar"
                                                                        style="width: 6%" aria-valuenow="6"
                                                                        aria-valuemin="0" aria-valuemax="100">
                                                                    </div>
                                                                </div>
                                                                <div class="text-muted ms-2 fs-12">(1,453)</div>
                                                            </div>
                                                        </div>
                                                        <div class="border-top my-3"></div>
                                                        <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                                            <div class="">
                                                                <div class="d-sm-flex d-block align-items-top">
                                                                    <div class="d-flex flex-fill">
                                                                        <div class="me-2">
                                                                            <span class="avatar avatar-sm avatar-rounded">
                                                                                <img src="../assets/images/faces/15.jpg"
                                                                                    alt="">
                                                                            </span>
                                                                        </div>
                                                                        <div class="">
                                                                            <h6 class="">Alex Carey
                                                                                <span
                                                                                    class="badge bg-warning-transparent mb-0 rounded-1"><i
                                                                                        class="ri-star-s-fill">4.5</i></span>
                                                                            </h6>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="ps-sm-4 ps-0 mb-3">
                                                                    <p class="fw-semibold mb-1 ps-2">Wonderful
                                                                        product&#128512;</p>
                                                                    <p class="mb-0 fs-12 text-muted ps-2">Really this
                                                                        product is very good quality and best for daily
                                                                        use... It supports Spo2.. Very well.. </p>
                                                                </div>
                                                                <div class="product-images ps-sm-4 ps-0">
                                                                    <div class="row">
                                                                        <div class="col-xl-6">
                                                                            <div class="products-review-images">
                                                                                <a aria-label="anchor"
                                                                                    href="javascript:void(0);">
                                                                                    <img src="{{ asset('backend') }}/dist/assets/images/ecommerce/11.png"
                                                                                        alt="">
                                                                                </a>
                                                                                <a aria-label="anchor"
                                                                                    href="javascript:void(0);">
                                                                                    <img src="{{ asset('backend') }}/dist/assets/images/ecommerce/10.png"
                                                                                        alt="">
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                        <div
                                                                            class="col-xl-6 d-flex align-items-end justify-content-sm-end mt-sm-0 mt-2">
                                                                            <button aria-label="button" type="button"
                                                                                class="btn btn-sm btn-icon btn-primary-light me-2">
                                                                                <i class="ri-thumb-up-line"></i>
                                                                            </button>
                                                                            <button aria-label="button" type="button"
                                                                                class="btn btn-sm btn-icon btn-primary-light">
                                                                                <i class="ri-thumb-down-line"></i>
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="border-top my-3"></div>
                                                        <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                                            <div class="">
                                                                <div class="d-sm-flex d-block align-items-top">
                                                                    <div class="d-flex flex-fill">
                                                                        <div class="me-2">
                                                                            <span class="avatar avatar-sm avatar-rounded">
                                                                                <img src="../assets/images/faces/3.jpg"
                                                                                    alt="">
                                                                            </span>
                                                                        </div>
                                                                        <div class="">
                                                                            <h6 class="">Robin mathe
                                                                                <span
                                                                                    class="badge bg-warning-transparent mb-0 rounded-1"><i
                                                                                        class="ri-star-s-fill">4</i></span>
                                                                            </h6>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="ps-sm-4 ps-0 mb-3">
                                                                    <p class="fw-semibold mb-1 ps-2">Good product</p>
                                                                    <p class="mb-0 fs-12 text-muted ps-2">Really this
                                                                        product is very good quality and best for daily
                                                                        use... It supports Spo2.. Very well.. </p>
                                                                </div>
                                                                <div class="product-images ps-sm-4 ps-0">
                                                                    <div class="row justify-content-end">
                                                                        <div
                                                                            class="col-xl-6 d-flex align-items-end justify-content-sm-end mt-sm-0 mt-2">
                                                                            <button aria-label="button" type="button"
                                                                                class="btn btn-sm btn-icon btn-primary-light me-2">
                                                                                <i class="ri-thumb-up-line"></i>
                                                                            </button>
                                                                            <button aria-label="button" type="button"
                                                                                class="btn btn-sm btn-icon btn-primary-light">
                                                                                <i class="ri-thumb-down-line"></i>
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div> --}}
                                                {{-- END REVIEW SECTION --}}

                                            </div>
                                        </div>
                                        <div class="col-xl-4 mt-xxl-0 mt-3">
                                            {{-- <div class="mb-3 border p-3 rounded-3 ">
                                                <p class="fs-15 fw-semibold mb-2">Features :</p>
                                                <div class="row">
                                                    <div class="col-xl-12">
                                                        <ul class="ps-3 mb-0 list-unstyled">
                                                            <li class="text-muted mb-2">
                                                                <i class="bx bxs-circle fs-7 me-2 op-5"></i>
                                                                height: 6.1 inch
                                                            </li>
                                                            <li class="text-muted mb-2">
                                                                <i class="bx bxs-circle fs-7 me-2 op-5"></i>
                                                                width: 24 inch
                                                            </li>
                                                            <li class="text-muted mb-2">
                                                                <i class="bx bxs-circle fs-7 me-2 op-5"></i>
                                                                Depth : 6.1 inch
                                                            </li>
                                                            <li class="text-muted mb-2">
                                                                <i class="bx bxs-circle fs-7 me-2 op-5"></i>
                                                                Other Dimensions : 15.5*15.5*24CM
                                                            </li>
                                                            <li class="text-muted mb-2">
                                                                <i class="bx bxs-circle fs-7 me-2 op-5"></i>
                                                                Care Instructions: Machine Wash
                                                            </li>
                                                            <li class="text-muted mb-2">
                                                                <i class="bx bxs-circle fs-7 me-2 op-5"></i>
                                                                Fit Type: Regular
                                                            </li>
                                                            <li class="text-muted mb-2">
                                                                <i class="bx bxs-circle fs-7 me-2 op-5"></i>
                                                                Country of origin: India
                                                            </li>
                                                            <li class="text-muted">
                                                                <i class="bx bxs-circle fs-7 me-2 op-5"></i>
                                                                1-year warranty
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div> --}}

                                            <div class="border p-3 rounded-3 mb-3">
                                                <p class="fs-16 fw-semibold mb-2">Details Tema :</p>
                                                <div class="row">
                                                    <div class="col-xl-12">
                                                        <div class="row">
                                                            <div class="col-xl-5">
                                                                <span class="fs-14 fw-semibold">{{ $theme->name }}</span>
                                                            </div>
                                                            <div class="col-xl-7">
                                                                <p class="text-muted fs-14">Orange.Inc</p>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-xl-5">
                                                                <span class="fs-14 fw-semibold">Kode Tema</span>
                                                            </div>
                                                            <div class="col-xl-7">
                                                                <p class="text-muted fs-14"> {{ $theme->code }}</p>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-xl-5">
                                                                <span class="fs-14 fw-semibold">Palet Warna</span>
                                                            </div>
                                                            <div class="col-xl-7">
                                                                <p class="text-muted fs-14">Red</p>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-xl-5">
                                                                <span class="fs-14 fw-semibold">Kategori</span>
                                                            </div>
                                                            <div class="col-xl-7">
                                                                @foreach ($categories as $category)
                                                                    {{ $category->name }},
                                                                @endforeach
                                                            </div>
                                                        </div>
                                                        {{-- <div class="row">
                                                            <div class="col-xl-5">
                                                                <span class="fs-14 fw-semibold">Department </span>
                                                            </div>
                                                            <div class="col-xl-7">
                                                                <p class="text-muted fs-14">Men</p>
                                                            </div>
                                                        </div> --}}
                                                    </div>
                                                </div>
                                            </div>
                                            {{-- <div class="border rounded-3 p-3 mb-3">
                                                <div class="d-flex align-items-center mb-3">
                                                    <div class="avatar avatar-lg bg-light p-2">
                                                        <svg xmlns="http://www.w3.org/2000/svg" class="svg-primary"
                                                            viewBox="0 0 64 64" id="free-shipping">
                                                            <g data-name="21">
                                                                <path fill="#546e7a"
                                                                    d="m61.79 32.39-7-9A1 1 0 0 0 54 23h-9v-4a5 5 0 0 0-5-5H7a5 5 0 0 0-5 5v21a5 5 0 0 0 5 5 1 1 0 0 0 0-2 3 3 0 0 1-3-3v-4h39v7H22.91a6 6 0 1 0 0 2h23.18a6 6 0 0 0 11.82 0H61a1 1 0 0 0 1-1V33a1 1 0 0 0-.21-.61Z">
                                                                </path>
                                                                <path fill="#e7f5f3"
                                                                    d="M4 34V19a3 3 0 0 1 3-3h33a3 3 0 0 1 3 3v15Z"></path>
                                                                <circle cx="17" cy="44" r="4"
                                                                    fill="#09ad95"></circle>
                                                                <circle cx="52" cy="44" r="4"
                                                                    fill="#09ad95"></circle>
                                                                <path fill="#e7f5f3"
                                                                    d="M60 43h-2.09a6 6 0 0 0-11.82 0H45V25h8.51L60 33.34Z">
                                                                </path>
                                                                <path fill="#546e7a"
                                                                    d="M52 27h-4a1 1 0 0 0-1 1v6a1 1 0 0 0 1 1h9a1 1 0 0 0 .77-1.64l-5-6A1 1 0 0 0 52 27Z">
                                                                </path>
                                                                <path fill="#09ad95" d="M49 33v-4h2.53l3.34 4H49z"></path>
                                                                <path fill="#546e7a"
                                                                    d="M23 23.5a3.5 3.5 0 0 0-3.5-3.5H17a1 1 0 0 0-1 1v8a1 1 0 0 0 2 0v-2h1.46l1.71 2.55A1 1 0 0 0 22 30a.94.94 0 0 0 .55-.17 1 1 0 0 0 .28-1.38l-1.37-2.06A3.49 3.49 0 0 0 23 23.5zM18 22h1.5a1.5 1.5 0 0 1 0 3H18zm-5 0a1 1 0 0 0 0-2H9a1 1 0 0 0-1 1v8a1 1 0 0 0 2 0v-3h3a1 1 0 0 0 0-2h-3v-2zm17 0a1 1 0 0 0 0-2h-4a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h4a1 1 0 0 0 0-2h-3v-2h3a1 1 0 0 0 0-2h-3v-2zm8 0a1 1 0 0 0 0-2h-4a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h4a1 1 0 0 0 0-2h-3v-2h3a1 1 0 0 0 0-2h-3v-2z">
                                                                </path>
                                                            </g>
                                                        </svg>
                                                    </div>
                                                    <div class="ms-3">
                                                        <span class="fs-14 fw-semibold mb-0">Free Shipping</span>
                                                    </div>
                                                </div>
                                                <div class="d-flex align-items-center mb-3">
                                                    <div class="avatar avatar-lg bg-light p-2">
                                                        <svg xmlns="http://www.w3.org/2000/svg" class="svg-primary"
                                                            viewBox="0 0 64 64" id="guarantee">
                                                            <g data-name="3">
                                                                <path fill="#546e7a"
                                                                    d="M32 60a1 1 0 0 1-.45-.11l-9.15-4.57A27.86 27.86 0 0 1 7 30.4V8a1 1 0 0 1 .49-.86 1 1 0 0 1 1 0l.51.24a20.18 20.18 0 0 0 22.37-2.15 1 1 0 0 1 1.26 0A20.18 20.18 0 0 0 55 7.38l.49-.26A1 1 0 0 1 57 8v22.4a27.86 27.86 0 0 1-15.4 24.92l-9.15 4.57A1 1 0 0 1 32 60Z">
                                                                </path>
                                                                <path fill="#e7f5f3"
                                                                    d="M9 9.64V30.4a25.88 25.88 0 0 0 14.3 23.13l8.7 4.35 8.7-4.35A25.88 25.88 0 0 0 55 30.4V9.64a22.13 22.13 0 0 1-23-2.37A22.13 22.13 0 0 1 9 9.64Z">
                                                                </path>
                                                                <path fill="#546e7a"
                                                                    d="M28 40a1 1 0 0 1-.71-.29l-12-12a1 1 0 0 1 1.42-1.42l11.35 11.35 19.29-16.4a1 1 0 1 1 1.3 1.52l-20 17A1 1 0 0 1 28 40Z">
                                                                </path>
                                                            </g>
                                                        </svg>
                                                    </div>
                                                    <div class="ms-3">
                                                        <span class="fs-14 fw-semibold mb-0">3 Years warranty</span>
                                                    </div>
                                                </div>
                                                <div class="d-flex align-items-center mb-3">
                                                    <div class="avatar avatar-lg bg-light p-2">
                                                        <svg xmlns="http://www.w3.org/2000/svg" class="svg-primary"
                                                            viewBox="0 0 64 64" id="refund">
                                                            <g data-name="7">
                                                                <path fill="#546e7a"
                                                                    d="M59 5.94a.78.78 0 0 0 0-.16v-.19a.35.35 0 0 0 0-.08l-.07-.12-.11-.11-.1-.09-.15-.08-.08-.05h-.17L58 5H22a1 1 0 0 0-.71.29l-16 16a1.32 1.32 0 0 0-.19.29v.09a1.31 1.31 0 0 0-.06.27S5 22 5 22v32a5 5 0 0 0 5 5h30a5 5 0 0 0 5-5V22.38L57 8.66v29.47a7 7 0 0 1-1.6 4.45L47 52.85a1 1 0 0 0 1.54 1.27L57 43.85a9 9 0 0 0 2-5.72V5.94Z">
                                                                </path>
                                                                <path fill="#09ad95"
                                                                    d="M38.34 7H55.8L43.55 21H27.18l11.1-13.88a.45.45 0 0 0 .06-.12zM22.41 7h13.41l-11.1 13.88a.45.45 0 0 0-.06.12H8.41z">
                                                                </path>
                                                                <path fill="#e7f5f3"
                                                                    d="M43 54a3 3 0 0 1-3 3H10a3 3 0 0 1-3-3V23h36v31Z">
                                                                </path>
                                                                <path fill="#546e7a"
                                                                    d="m50.21 25.21 4-4a1 1 0 0 0-1.42-1.42l-4 4a1 1 0 0 0 0 1.42 1 1 0 0 0 1.42 0zM31 30H11a1 1 0 0 0 0 2h20a7 7 0 0 1 0 14H13.41l2.3-2.29a1 1 0 0 0-1.42-1.42l-4 4a1 1 0 0 0-.21.33 1 1 0 0 0 0 .76 1 1 0 0 0 .21.33l4 4a1 1 0 0 0 1.42 0 1 1 0 0 0 0-1.42L13.41 48H31a9 9 0 0 0 0-18z">
                                                                </path>
                                                            </g>
                                                        </svg>
                                                    </div>
                                                    <div class="ms-3">
                                                        <span class="fs-14 fw-semibold mb-0">7 days returnable</span>
                                                    </div>
                                                </div>
                                                <div class="d-flex align-items-center">
                                                    <div class="avatar avatar-lg bg-light p-2">
                                                        <svg xmlns="http://www.w3.org/2000/svg" class="svg-primary"
                                                            viewBox="0 0 64 64" id="verified-payment">
                                                            <g data-name="23">
                                                                <rect width="58" height="32" x="3" y="22"
                                                                    fill="#e7f5f3" rx="1"></rect>
                                                                <path fill="#546e7a"
                                                                    d="M61 21h-3.29a16 16 0 1 0 .29 3v-1h2v30H4V23h18.76a1 1 0 1 0 0-2H3a1 1 0 0 0-1 1v32a1 1 0 0 0 1 1h58a1 1 0 0 0 1-1V22a1 1 0 0 0-1-1Z">
                                                                </path>
                                                                <circle cx="42" cy="24" r="14"
                                                                    fill="#09ad95"></circle>
                                                                <path fill="#546e7a"
                                                                    d="m39.47 28.64-7.12-7.11a1 1 0 0 0-1.41 1.41l7.77 7.77a1 1 0 0 0 1.35.05l12.94-11a1 1 0 0 0 .11-1.41 1 1 0 0 0-1.4-.11zM21 30a1 1 0 0 0 0-2h-4v-2a1 1 0 0 0-2 0v2a5 5 0 0 0-5 5v1a5 5 0 0 0 5 5v7h-4a1 1 0 0 0 0 2h4v2a1 1 0 0 0 2 0v-2a5 5 0 0 0 5-5v-1a5 5 0 0 0-5-5v-7zm-1 12v1a3 3 0 0 1-3 3v-7a3 3 0 0 1 3 3zm-5-5a3 3 0 0 1-3-3v-1a3 3 0 0 1 3-3z">
                                                                </path>
                                                            </g>
                                                        </svg>
                                                    </div>
                                                    <div class="ms-3">
                                                        <span class="fs-14 fw-semibold mb-0">Cash on Delivery</span>
                                                    </div>
                                                </div>
                                            </div> --}}
                                            <div class="border rounded-3 p-3">
                                                <p class="fs-15 fw-semibold mb-2">Chat Admin Mengenai Template:</p>
                                                {{-- <p class="fs-12 text-muted">Min 7 days return and exchange policy. Return
                                                    Policies may vary based on products and promotions.
                                                    For full details on our Returns Policies, please
                                                </p> --}}
                                                <a href="javascript:void(0);" class="text-primary">click here</a>․
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- START RECOMENDATION SECTION --}}
                {{-- <div class="col-xl-12">
                    <div class="card custom-card">
                        <div class="card-header">
                            <div class="card-title">Rekomendasi Tema</div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-xl-2 col-12 my-2">
                                    <div class="text-center">
                                        <div class="similar-products-image me-2">
                                            <img src="{{ asset('backend') }}/dist/assets/images/ecommerce/6.png"
                                                alt="">
                                        </div>
                                        <h5 class="my-2 fs-14 fw-semibold">Omega Mens Branded Jacket</h5>
                                        <div class="d-flex align-items-center justify-content-center mb-2">
                                            <h5 class="mb-0 fw-semibold">
                                                $1,099
                                            </h5>
                                            <p class="mb-0 text-muted">
                                                <span class="text-success fs-11 ms-1">25% off</span>
                                            </p>
                                        </div>
                                        <div class="flex-fill">
                                            <span class="badge bg-success rounded-1">4.4<i
                                                    class="ri-star-s-fill ms-1"></i></span>
                                            <span class="text-muted ms-1">(13,256)</span>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-xl-2 col-12 my-2">
                                    <div class="text-center">
                                        <div class="similar-products-image me-2">
                                            <img src="{{ asset('backend') }}/dist/assets/images/ecommerce/7.png"
                                                alt="">
                                        </div>
                                        <h5 class="my-2 fs-14 fw-semibold">Omega Mens Branded Jacket</h5>
                                        <div class="d-flex align-items-center justify-content-center mb-2">
                                            <h5 class="mb-0 fw-semibold">
                                                $2,099
                                            </h5>
                                            <p class="mb-0 text-muted">
                                                <span class="text-success fs-11 ms-1">20% off</span>
                                            </p>
                                        </div>
                                        <div class="flex-fill">
                                            <span class="badge bg-success rounded-1">4.0<i
                                                    class="ri-star-s-fill ms-1"></i></span>
                                            <span class="text-muted ms-1">(13,256)</span>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-xl-2 col-12 my-2">
                                    <div class="text-center">
                                        <div class="similar-products-image me-2">
                                            <img src="{{ asset('backend') }}/dist/assets/images/ecommerce/8.png"
                                                alt="">
                                        </div>
                                        <h5 class="my-2 fs-14 fw-semibold">Omega Mens Branded Jacket</h5>
                                        <div class="d-flex align-items-center justify-content-center mb-2">
                                            <h5 class="mb-0 fw-semibold">
                                                $15,099
                                            </h5>
                                            <p class="mb-0 text-muted">
                                                <s>$8,759</s>
                                                <span class="text-success fs-11 ms-1">55% off</span>
                                            </p>
                                        </div>
                                        <div class="flex-fill">
                                            <span class="badge bg-success rounded-1">4.3<i
                                                    class="ri-star-s-fill ms-1"></i></span>
                                            <span class="text-muted ms-1">(18,256)</span>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-xl-2 col-12 my-2">
                                    <div class="text-center">
                                        <div class="similar-products-image me-2">
                                            <img src="{{ asset('backend') }}/dist/assets/images/ecommerce/9.png"
                                                alt="">
                                        </div>
                                        <h5 class="my-2 fs-14 fw-semibold">Omega Mens Branded Jacket</h5>
                                        <div class="d-flex align-items-center justify-content-center mb-2">
                                            <h5 class="mb-0 fw-semibold">
                                                $4,099
                                            </h5>
                                            <p class="mb-0 text-muted">
                                                <s>$2,759</s>
                                                <span class="text-success fs-11 ms-1">40% off</span>
                                            </p>
                                        </div>
                                        <div class="flex-fill">
                                            <span class="badge bg-success rounded-1">4.4<i
                                                    class="ri-star-s-fill ms-1"></i></span>
                                            <span class="text-muted ms-1">(19,256)</span>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-xl-2 col-12 my-2">
                                    <div class="text-center">
                                        <div class="similar-products-image me-2">
                                            <img src="{{ asset('backend') }}/dist/assets/images/ecommerce/10.png"
                                                alt="">
                                        </div>
                                        <h5 class="my-2 fs-14 fw-semibold">Omega Mens Branded Jacket</h5>
                                        <div class="d-flex align-items-center justify-content-center mb-2">
                                            <h5 class="mb-0 fw-semibold">
                                                $5,099
                                            </h5>
                                            <p class="mb-0 text-muted">
                                                <span class="text-success fs-11 ms-1">20% off</span>
                                            </p>
                                        </div>
                                        <div class="flex-fill">
                                            <span class="badge bg-success rounded-1">4.4<i
                                                    class="ri-star-s-fill ms-1"></i></span>
                                            <span class="text-muted ms-1">(13,256)</span>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-xl-2 col-12 my-2">
                                    <div class="text-center">
                                        <div class="similar-products-image me-2">
                                            <img src="{{ asset('backend') }}/dist/assets/images/ecommerce/11.png"
                                                alt="">
                                        </div>
                                        <h5 class="my-2 fs-14 fw-semibold">Omega Mens Branded Jacket</h5>
                                        <div class="d-flex align-items-center justify-content-center mb-2">
                                            <h5 class="mb-0 fw-semibold">
                                                $6,099
                                            </h5>
                                            <p class="mb-0 text-muted">
                                                <s>$1,759</s>
                                                <span class="text-success fs-11 ms-1">35% off</span>
                                            </p>
                                        </div>
                                        <div class="flex-fill">
                                            <span class="badge bg-success rounded-1">3.5<i
                                                    class="ri-star-s-fill ms-1"></i></span>
                                            <span class="text-muted ms-1">(19,256)</span>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}
                {{-- END RECOMENDATION SECTION --}}

            </div>
            <!--End::row-1 -->

        </div>
    </div>
    <!-- End::app-content -->
@endsection
