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

                {{-- CATEGORIES --}}
                <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-12">
                    <div class="card custom-card">
                        <div class="card-header">
                            <div class="card-title">
                                CATEGORIES
                            </div>
                        </div>
                        <div class="card-body">
                            @foreach ($categoriesWithCount as $category)
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="checkbox" value=""
                                        id="{{ $category->name }}">
                                    <label class="form-check-label" for="{{ $category->name }}">
                                        {{ $category->name }}
                                    </label>
                                    <span class="badge bg-light text-muted float-end">{{ $category->themes_count }}</span>
                                </div>
                            @endforeach
                        </div>

                    </div>
                </div>
                {{-- END CATEGORIES --}}

                @foreach ($themes as $theme)
                    <div class="col-xxl-9 col-xl-8 col-lg-8 col-md-12">
                        <div class="row">

                            <div class="col-xxl-4 col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                <div class="card custom-card product-card">
                                    <div class="card-body">
                                        <a href="product-details.html" class="product-image">
                                            <img src="{{ asset('' . $theme->cover) }}" class="card-img mb-3" alt="...">
                                        </a>
                                        <div class="product-icons">
                                            <a href="wishlist.html" class="wishlist"><i class="ri-heart-line"></i></a>
                                            <a href="cart.html" class="cart"><i class="ri-shopping-cart-line"></i></a>
                                            <a href="{{ route('theme.detail', $theme->id) }}" class="view"><i
                                                    class="ri-eye-line"></i></a>
                                        </div>
                                        <p
                                            class="product-name fw-semibold mb-0 d-flex align-items-center justify-content-between">
                                            {{ $theme->name }}<span class="float-end text-warning fs-12">4.2<i
                                                    class="ri-star-s-fill align-middle ms-1 d-inline-block"></i></span></p>
                                        <p class="product-description fs-11 text-muted mb-2">Kategori Tema :
                                            @foreach ($theme->categories as $category)
                                                <span class="badge bg-secondary">{{ $category->name }}</span>
                                            @endforeach
                                        </p>
                                        {{-- <p
                                            class="mb-1 fw-semibold fs-16 d-flex align-items-center justify-content-between">
                                            <span>harga diskon<span
                                                    class="text-muted text-decoration-line-through ms-1 d-inline-block op-6">harga
                                                    asli</span></span><span
                                                class="badge bg-secondary-transparent float-end fs-10">50% off</span>
                                        </p> --}}
                                        <p class="fs-11 text-success fw-semibold mb-0 d-flex align-items-center">
                                            <i class="ti ti-discount-2 fs-16 me-1"></i>{{ $theme->status }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                @endforeach

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
