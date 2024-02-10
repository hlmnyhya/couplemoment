@extends('admin.admin_dashboard')

@section('content')
    <!-- Start::app-content -->
    <div class="main-content app-content">
        <div class="container-fluid">

            <!-- PAGE-HEADER -->
            <div class="page-header">
                <h1 class="page-title my-auto">Tema</h1>
                <div>
                    <ol class="breadcrumb mb-0">
                        {{-- <li class="breadcrumb-item">
                            <a href="javascript:void(0)">Ecommerce</a>
                        </li> --}}
                        <li class="breadcrumb-item active" aria-current="page">Menu Tema</li>
                    </ol>
                </div>
            </div>
            <!-- PAGE-HEADER END -->



            <!-- Start::row-1 -->
            <div class="row">
                <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-12">
                    <div class="card custom-card">
                        <div class="card-header">
                            <div class="card-title">
                                CATEGORIES
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="form-check mb-2">
                                <input class="form-check-input" type="checkbox" value="" id="electronics">
                                <label class="form-check-label" for="electronics">
                                    Electronics
                                </label>
                                <span class="badge bg-light text-muted float-end">2,712</span>
                            </div>
                            <div class="form-check mb-2">
                                <input class="form-check-input" type="checkbox" value="" id="Accesories">
                                <label class="form-check-label" for="Accesories">
                                    Accesories
                                </label>
                                <span class="badge bg-light text-muted float-end">536</span>
                            </div>
                            <div class="form-check mb-2">
                                <input class="form-check-input" type="checkbox" value="" id="clothing" checked>
                                <label class="form-check-label" for="clothing">
                                    Clothing
                                </label>
                                <span class="badge bg-light text-muted float-end">18,289</span>
                            </div>
                            <div class="form-check mb-2">
                                <input class="form-check-input" type="checkbox" value="" id="fashion">
                                <label class="form-check-label" for="fashion">
                                    Fashion
                                </label>
                                <span class="badge bg-light text-muted float-end">3,453</span>
                            </div>
                            <div class="collapse" id="category-more">
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="checkbox" value="" id="furniture">
                                    <label class="form-check-label" for="furniture">
                                        Furniture
                                    </label>
                                    <span class="badge bg-light text-muted float-end">7,165</span>
                                </div>
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="checkbox" value="" id="footwear">
                                    <label class="form-check-label" for="footwear">
                                        Footwear
                                    </label>
                                    <span class="badge bg-light text-muted float-end">5,964</span>
                                </div>
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="checkbox" value="" id="mobiles">
                                    <label class="form-check-label" for="mobiles">
                                        Mobiles
                                    </label>
                                    <span class="badge bg-light text-muted float-end">2,123</span>
                                </div>
                            </div>
                            <a class="ecommerce-more-link" data-bs-toggle="collapse" href="#category-more"
                                aria-expanded="false" aria-controls="category-more">MORE</a>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-9 col-xl-8 col-lg-8 col-md-12">
                    <div class="row">
                        <div class="col-xxl-4 col-xl-6 col-lg-6 col-md-6 col-sm-12">
                            <div class="card custom-card product-card">
                                <div class="card-body">
                                    <a href="product-details.html" class="product-image">
                                        <img src="../assets/images/ecommerce/products/1.jpg" class="card-img mb-3"
                                            alt="...">
                                    </a>
                                    <div class="product-icons">
                                        <a href="wishlist.html" class="wishlist"><i class="ri-heart-line"></i></a>
                                        <a href="cart.html" class="cart"><i class="ri-shopping-cart-line"></i></a>
                                        <a href="product-details.html" class="view"><i class="ri-eye-line"></i></a>
                                    </div>
                                    <p
                                        class="product-name fw-semibold mb-0 d-flex align-items-center justify-content-between">
                                        Nama Tema<span class="float-end text-warning fs-12">4.2<i
                                                class="ri-star-s-fill align-middle ms-1 d-inline-block"></i></span></p>
                                    <p class="product-description fs-11 text-muted mb-2">Kategori Tema</p>
                                    <p class="mb-1 fw-semibold fs-16 d-flex align-items-center justify-content-between">
                                        <span>harga diskon<span
                                                class="text-muted text-decoration-line-through ms-1 d-inline-block op-6">harga
                                                asli</span></span><span
                                            class="badge bg-secondary-transparent float-end fs-10">50% off</span>
                                    </p>
                                    <p class="fs-11 text-success fw-semibold mb-0 d-flex align-items-center">
                                        <i class="ti ti-discount-2 fs-16 me-1"></i>paket apa (premium)
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-4 col-xl-6 col-lg-6 col-md-6 col-sm-12">
                            <div class="card custom-card product-card">
                                <div class="card-body">
                                    <a href="product-details.html" class="product-image">
                                        <img src="../assets/images/ecommerce/products/2.jpg" class="card-img mb-3"
                                            alt="...">
                                    </a>
                                    <div class="product-icons">
                                        <a href="wishlist.html" class="wishlist"><i class="ri-heart-line"></i></a>
                                        <a href="cart.html" class="cart"><i class="ri-shopping-cart-line"></i></a>
                                        <a href="product-details.html" class="view"><i class="ri-eye-line"></i></a>
                                    </div>
                                    <p
                                        class="product-name fw-semibold mb-0 d-flex align-items-center justify-content-between">
                                        Running Shoes for men<span class="float-end text-warning fs-12">4.0<i
                                                class="ri-star-s-fill align-middle ms-1 d-inline-block"></i></span></p>
                                    <p class="product-description fs-11 text-muted mb-2">laborum et dolorum fuga</p>
                                    <p class="mb-1 fw-semibold fs-16 d-flex align-items-center justify-content-between">
                                        <span>$599<span
                                                class="text-muted text-decoration-line-through ms-1 d-inline-block op-6">$2,499</span></span><span
                                            class="badge bg-secondary-transparent float-end fs-10">75% off</span>
                                    </p>
                                    <p class="fs-11 text-success fw-semibold mb-0 d-flex align-items-center">
                                        <i class="ti ti-discount-2 fs-16 me-1"></i>Offer Price $599
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-4 col-xl-6 col-lg-6 col-md-6 col-sm-12">
                            <div class="card custom-card product-card">
                                <div class="card-body">
                                    <a href="product-details.html" class="product-image">
                                        <img src="../assets/images/ecommerce/products/3.jpg" class="card-img mb-3"
                                            alt="...">
                                    </a>
                                    <div class="product-icons">
                                        <a href="wishlist.html" class="wishlist"><i class="ri-heart-line"></i></a>
                                        <a href="cart.html" class="cart"><i class="ri-shopping-cart-line"></i></a>
                                        <a href="product-details.html" class="view"><i class="ri-eye-line"></i></a>
                                    </div>
                                    <p
                                        class="product-name fw-semibold mb-0 d-flex align-items-center justify-content-between">
                                        Flower Pot for Home Decor<span class="float-end text-warning fs-12">4.5<i
                                                class="ri-star-s-fill align-middle ms-1 d-inline-block"></i></span></p>
                                    <p class="product-description fs-11 text-muted mb-2">laborum et dolorum fuga</p>
                                    <p class="mb-1 fw-semibold fs-16 d-flex align-items-center justify-content-between">
                                        <span>$1,199<span
                                                class="text-muted text-decoration-line-through ms-1 d-inline-block op-6">$3,299</span></span><span
                                            class="badge bg-secondary-transparent float-end fs-10">62% off</span>
                                    </p>
                                    <p class="fs-11 text-success fw-semibold mb-0 d-flex align-items-center">
                                        <i class="ti ti-discount-2 fs-16 me-1"></i>Offer Price $1,199
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-4 col-xl-6 col-lg-6 col-md-6 col-sm-12">
                            <div class="card custom-card product-card">
                                <div class="card-body">
                                    <a href="product-details.html" class="product-image">
                                        <img src="../assets/images/ecommerce/products/4.jpg" class="card-img mb-3"
                                            alt="...">
                                    </a>
                                    <div class="product-icons">
                                        <a href="wishlist.html" class="wishlist"><i class="ri-heart-line"></i></a>
                                        <a href="cart.html" class="cart"><i class="ri-shopping-cart-line"></i></a>
                                        <a href="product-details.html" class="view"><i class="ri-eye-line"></i></a>
                                    </div>
                                    <p
                                        class="product-name fw-semibold mb-0 d-flex align-items-center justify-content-between">
                                        Men shirt for party wear<span class="float-end text-warning fs-12">4.2<i
                                                class="ri-star-s-fill align-middle ms-1 d-inline-block"></i></span></p>
                                    <p class="product-description fs-11 text-muted mb-2">laborum et dolorum fuga</p>
                                    <p class="mb-1 fw-semibold fs-16 d-flex align-items-center justify-content-between">
                                        <span>$349<span
                                                class="text-muted text-decoration-line-through ms-1 d-inline-block op-6">$1,299</span></span><span
                                            class="badge bg-secondary-transparent float-end fs-10">60% off</span>
                                    </p>
                                    <p class="fs-11 text-success fw-semibold mb-0 d-flex align-items-center">
                                        <i class="ti ti-discount-2 fs-16 me-1"></i>Offer Price $349
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-4 col-xl-6 col-lg-6 col-md-6 col-sm-12">
                            <div class="card custom-card product-card">
                                <div class="card-body">
                                    <a href="product-details.html" class="product-image">
                                        <img src="../assets/images/ecommerce/products/5.jpg" class="card-img mb-3"
                                            alt="...">
                                    </a>
                                    <div class="product-icons">
                                        <a href="wishlist.html" class="wishlist"><i class="ri-heart-line"></i></a>
                                        <a href="cart.html" class="cart"><i class="ri-shopping-cart-line"></i></a>
                                        <a href="product-details.html" class="view"><i class="ri-eye-line"></i></a>
                                    </div>
                                    <p
                                        class="product-name fw-semibold mb-0 d-flex align-items-center justify-content-between">
                                        Black Digital Camera<span class="float-end text-warning fs-12">4.5<i
                                                class="ri-star-s-fill align-middle ms-1 d-inline-block"></i></span></p>
                                    <p class="product-description fs-11 text-muted mb-2">laborum et dolorum fuga</p>
                                    <p class="mb-1 fw-semibold fs-16 d-flex align-items-center justify-content-between">
                                        <span>$1,899<span
                                                class="text-muted text-decoration-line-through ms-1 d-inline-block op-6">$3,799</span></span><span
                                            class="badge bg-secondary-transparent float-end fs-10">50% off</span>
                                    </p>
                                    <p class="fs-11 text-success fw-semibold mb-0 d-flex align-items-center">
                                        <i class="ti ti-discount-2 fs-16 me-1"></i>Offer Price $1,899
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-4 col-xl-6 col-lg-6 col-md-6 col-sm-12">
                            <div class="card custom-card product-card">
                                <div class="card-body">
                                    <a href="product-details.html" class="product-image">
                                        <img src="../assets/images/ecommerce/products/6.jpg" class="card-img mb-3"
                                            alt="...">
                                    </a>
                                    <div class="product-icons">
                                        <a href="wishlist.html" class="wishlist"><i class="ri-heart-line"></i></a>
                                        <a href="cart.html" class="cart"><i class="ri-shopping-cart-line"></i></a>
                                        <a href="product-details.html" class="view"><i class="ri-eye-line"></i></a>
                                    </div>
                                    <p
                                        class="product-name fw-semibold mb-0 d-flex align-items-center justify-content-between">
                                        Light pink nail polish<span class="float-end text-warning fs-12">4.1<i
                                                class="ri-star-s-fill align-middle ms-1 d-inline-block"></i></span></p>
                                    <p class="product-description fs-11 text-muted mb-2">laborum et dolorum fuga</p>
                                    <p class="mb-1 fw-semibold fs-16 d-flex align-items-center justify-content-between">
                                        <span>$1,499<span
                                                class="text-muted text-decoration-line-through ms-1 d-inline-block op-6">$2,499</span></span><span
                                            class="badge bg-secondary-transparent float-end fs-10">38% off</span>
                                    </p>
                                    <p class="fs-11 text-success fw-semibold mb-0 d-flex align-items-center">
                                        <i class="ti ti-discount-2 fs-16 me-1"></i>Offer Price $1,499
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-4 col-xl-6 col-lg-6 col-md-6 col-sm-12">
                            <div class="card custom-card product-card">
                                <div class="card-body">
                                    <a href="product-details.html" class="product-image">
                                        <img src="../assets/images/ecommerce/products/7.jpg" class="card-img mb-3"
                                            alt="...">
                                    </a>
                                    <div class="product-icons">
                                        <a href="wishlist.html" class="wishlist"><i class="ri-heart-line"></i></a>
                                        <a href="cart.html" class="cart"><i class="ri-shopping-cart-line"></i></a>
                                        <a href="product-details.html" class="view"><i class="ri-eye-line"></i></a>
                                    </div>
                                    <p
                                        class="product-name fw-semibold mb-0 d-flex align-items-center justify-content-between">
                                        Stylish Rockerz 255 Ear Pods<span class="float-end text-warning fs-12">4.4<i
                                                class="ri-star-s-fill align-middle ms-1 d-inline-block"></i></span></p>
                                    <p class="product-description fs-11 text-muted mb-2">laborum et dolorum fuga</p>
                                    <p class="mb-1 fw-semibold fs-16 d-flex align-items-center justify-content-between">
                                        <span>$299<span
                                                class="text-muted text-decoration-line-through ms-1 d-inline-block op-6">$399</span></span><span
                                            class="badge bg-secondary-transparent float-end fs-10">35% off</span>
                                    </p>
                                    <p class="fs-11 text-success fw-semibold mb-0 d-flex align-items-center">
                                        <i class="ti ti-discount-2 fs-16 me-1"></i>Offer Price $299
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-4 col-xl-6 col-lg-6 col-md-6 col-sm-12">
                            <div class="card custom-card product-card">
                                <div class="card-body">
                                    <a href="product-details.html" class="product-image">
                                        <img src="../assets/images/ecommerce/products/8.jpg" class="card-img mb-3"
                                            alt="...">
                                    </a>
                                    <div class="product-icons">
                                        <a href="wishlist.html" class="wishlist"><i class="ri-heart-line"></i></a>
                                        <a href="cart.html" class="cart"><i class="ri-shopping-cart-line"></i></a>
                                        <a href="product-details.html" class="view"><i class="ri-eye-line"></i></a>
                                    </div>
                                    <p
                                        class="product-name fw-semibold mb-0 d-flex align-items-center justify-content-between">
                                        Candy Pure Rose Water<span class="float-end text-warning fs-12">3.8<i
                                                class="ri-star-s-fill align-middle ms-1 d-inline-block"></i></span></p>
                                    <p class="product-description fs-11 text-muted mb-2">laborum et dolorum fuga</p>
                                    <p class="mb-1 fw-semibold fs-16 d-flex align-items-center justify-content-between">
                                        <span>$2,399<span
                                                class="text-muted text-decoration-line-through ms-1 d-inline-block op-6">$5,699</span></span><span
                                            class="badge bg-primary-transparent float-end fs-10">72% off</span>
                                    </p>
                                    <p class="fs-11 text-success fw-semibold mb-0 d-flex align-items-center">
                                        <i class="ti ti-discount-2 fs-16 me-1"></i>Offer Price $2,399
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-4 col-xl-6 col-lg-6 col-md-6 col-sm-12">
                            <div class="card custom-card product-card">
                                <div class="card-body">
                                    <a href="product-details.html" class="product-image">
                                        <img src="../assets/images/ecommerce/products/9.jpg" class="card-img mb-3"
                                            alt="...">
                                    </a>
                                    <div class="product-icons">
                                        <a href="wishlist.html" class="wishlist"><i class="ri-heart-line"></i></a>
                                        <a href="cart.html" class="cart"><i class="ri-shopping-cart-line"></i></a>
                                        <a href="product-details.html" class="view"><i class="ri-eye-line"></i></a>
                                    </div>
                                    <p
                                        class="product-name fw-semibold mb-0 d-flex align-items-center justify-content-between">
                                        White Tshirt for Men<span class="float-end text-warning fs-12">4.0<i
                                                class="ri-star-s-fill align-middle ms-1 d-inline-block"></i></span></p>
                                    <p class="product-description fs-11 text-muted mb-2">laborum et dolorum fuga</p>
                                    <p class="mb-1 fw-semibold fs-16 d-flex align-items-center justify-content-between">
                                        <span>$1,899<span
                                                class="text-muted text-decoration-line-through ms-1 d-inline-block op-6">$3,299</span></span><span
                                            class="badge bg-primary-transparent float-end fs-10">60% off</span>
                                    </p>
                                    <p class="fs-11 text-success fw-semibold mb-0 d-flex align-items-center">
                                        <i class="ti ti-discount-2 fs-16 me-1"></i>Offer Price $1,899
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--End::row-1 -->

            <!-- Pagination -->
            <ul class="pagination justify-content-end">
                <li class="page-item disabled">
                    <a class="page-link">Previous</a>
                </li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                    <a class="page-link" href="#">Next</a>
                </li>
            </ul>
            <!-- Pagination -->

        </div>
    </div>
    <!-- End::app-content -->
@endsection
