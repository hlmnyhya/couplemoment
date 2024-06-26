@extends('admin.admin_dashboard')

@section('content')
<<<<<<< HEAD

<!-- Start::app-content -->
        <div class="main-content app-content">
            <div class="container-fluid">
                <!-- PAGE-HEADER -->
                <div class="page-header">
                  <h1 class="page-title my-auto">File Details</h1>
                  <div>
                    <ol class="breadcrumb mb-0">
                      <li class="breadcrumb-item">
                        <a href="javascript:void(0)">Pages</a>
                      </li>
                      <li class="breadcrumb-item active" aria-current="page">File Details</li>
                    </ol>
                  </div>
                </div>
                <!-- PAGE-HEADER END -->

                <!-- Start::row-1 -->
                <div class="row">
                    <div class="col-xl-8">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="card custom-card">
                                    <div class="card-body">
                                        <a href="javascript:void(0);">
                                            <img src="{{asset('backend')}}/dist/assets/images/media/files/08.jpg" class="br-7 w-100" alt="...">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12">
                                <div class="card custom-card">
                                    <div class="card-header justify-content-between">
                                        <div class="card-title">
                                            Related Files
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="row mb-3">
                                            <div class="col-xxl-3 col-xl-6 col-lg-6 col-md-6">
                                                <div class="card border custom-card shadow-none">
                                                    <div class="card-body ">
                                                        <div class="mb-4 folder-svg-container d-flex justify-content-between align-items-top">
                                                            <div>
                                                                <span class="avatar avatar-xl">
                                                                    <img src="{{asset('backend')}}/dist/assets/images/media/files/documents/5.png" alt="">
                                                                </span>
                                                            </div>
                                                            <div>
                                                                <div class="dropdown">
                                                                    <button class="btn btn-sm btn-icon btn-light" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                                        <i class="ri-more-2-fill"></i>
                                                                    </button>
                                                                    <ul class="dropdown-menu">
                                                                        <li><a class="dropdown-item" href="javascript:void(0);">Delete</a></li>
                                                                        <li><a class="dropdown-item" href="javascript:void(0);">Rename</a></li>
                                                                        <li><a class="dropdown-item" href="javascript:void(0);">Hide Folder</a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <p class="fs-14 fw-semibold mb-1 lh-1">
                                                            <a href="javascript:void(0);">Images</a>
                                                        </p>
                                                        <div class="d-flex align-items-center justify-content-between flex-wrap">
                                                            <div>
                                                                <span class="text-muted fs-12">
                                                                    246 Files
                                                                </span>
                                                            </div>
                                                            <div>
                                                                <span class="text-default fw-semibold">
                                                                    214.32MB
                                                                </span>
                                                            </div>
=======
    <!-- Start::app-content -->
    <div class="main-content app-content">
        <div class="container-fluid">
            <!-- PAGE-HEADER -->
            <div class="page-header">
                <h1 class="page-title my-auto">File Details</h1>
                <div>
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item">
                            <a href="javascript:void(0)">Pages</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">File Details</li>
                    </ol>
                </div>
            </div>
            <!-- PAGE-HEADER END -->

            <!-- Start::row-1 -->
            <div class="row">
                <div class="col-xl-8">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="card custom-card">
                                <div class="card-body">
                                    <a href="javascript:void(0);">
                                        <img src="{{ asset('backend') }}/dist/assets/images/media/files/08.jpg"
                                            class="br-7 w-100" alt="...">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-12">
                            <div class="card custom-card">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">
                                        Related Files
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="row mb-3">
                                        <div class="col-xxl-3 col-xl-6 col-lg-6 col-md-6">
                                            <div class="card border custom-card shadow-none">
                                                <div class="card-body ">
                                                    <div
                                                        class="mb-4 folder-svg-container d-flex justify-content-between align-items-top">
                                                        <div>
                                                            <span class="avatar avatar-xl">
                                                                <img src="{{ asset('backend') }}/dist/assets/images/media/files/documents/5.png"
                                                                    alt="">
                                                            </span>
                                                        </div>
                                                        <div>
                                                            <div class="dropdown">
                                                                <button class="btn btn-sm btn-icon btn-light" type="button"
                                                                    data-bs-toggle="dropdown" aria-expanded="false">
                                                                    <i class="ri-more-2-fill"></i>
                                                                </button>
                                                                <ul class="dropdown-menu">
                                                                    <li><a class="dropdown-item"
                                                                            href="javascript:void(0);">Delete</a></li>
                                                                    <li><a class="dropdown-item"
                                                                            href="javascript:void(0);">Rename</a></li>
                                                                    <li><a class="dropdown-item"
                                                                            href="javascript:void(0);">Hide Folder</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <p class="fs-14 fw-semibold mb-1 lh-1">
                                                        <a href="javascript:void(0);">Images</a>
                                                    </p>
                                                    <div
                                                        class="d-flex align-items-center justify-content-between flex-wrap">
                                                        <div>
                                                            <span class="text-muted fs-12">
                                                                246 Files
                                                            </span>
                                                        </div>
                                                        <div>
                                                            <span class="text-default fw-semibold">
                                                                214.32MB
                                                            </span>
>>>>>>> 6046cce4b268caee4da34dfe670fa94f3793067b
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
<<<<<<< HEAD

                                    </div>
=======
                                    </div>

>>>>>>> 6046cce4b268caee4da34dfe670fa94f3793067b
                                </div>
                            </div>
                        </div>
                    </div>
<<<<<<< HEAD
                    <div class="col-xl-4">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="card custom-card">
                                    <div class="card-header justify-content-between">
                                        <div class="card-title">
                                            File Information
                                        </div>
                                    </div>
                                    <div class="card-body ">
=======
                </div>
                <div class="col-xl-4">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="card custom-card">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">
                                        File Information
                                    </div>
                                </div>
                                <div class="card-body ">
>>>>>>> 6046cce4b268caee4da34dfe670fa94f3793067b
                                    <div class="table-responsive">
                                        <table class="table table-bordered text-nowrap mb-0">
                                            <tbody class="top-selling">
                                                <tr>
                                                    <th class="">
                                                        <span class="fw-semibold fs-13">File Name</span>
                                                    </th>
                                                    <td><span class=" text-muted fs-13 fw-normal">Nature.jpg</span></td>
                                                </tr>
                                                <tr>
                                                    <th class="">
                                                        <span class="fw-semibold fs-13">File Size</span>
                                                    </th>
                                                    <td><span class=" text-muted fs-13 fw-normal">799KB</span></td>
                                                </tr>
                                                <tr>
                                                    <th class="">
                                                        <span class="fw-semibold fs-13">Created Date</span>
                                                    </th>
                                                    <td><span class=" text-muted fs-13 fw-normal">1-10-2023</span></td>
                                                </tr>
                                                <tr>
                                                    <th class="">
                                                        <span class="fw-semibold fs-13">Modified Date</span>
                                                    </th>
                                                    <td><span class=" text-muted fs-13 fw-normal">10-10-2023</span></td>
                                                </tr>
                                                <tr>
                                                    <th class="">
                                                        <span class="fw-semibold fs-13">File Location</span>
                                                    </th>
<<<<<<< HEAD
                                                    <td><span class=" text-muted fs-13 fw-normal">Location/file/Images/Nature.jpg</span></td>
=======
                                                    <td><span
                                                            class=" text-muted fs-13 fw-normal">Location/file/Images/Nature.jpg</span>
                                                    </td>
>>>>>>> 6046cce4b268caee4da34dfe670fa94f3793067b
                                                </tr>
                                                <tr>
                                                    <th class="">
                                                        <span class="fw-semibold fs-13">Height</span>
                                                    </th>
                                                    <td><span class=" text-muted fs-13 fw-normal">500px</span></td>
                                                </tr>
                                                <tr>
                                                    <th class="">
                                                        <span class="fw-semibold fs-13">Width</span>
                                                    </th>
                                                    <td><span class=" text-muted fs-13 fw-normal">750px</span></td>
                                                </tr>
                                                <tr>
                                                    <th class=" ">
                                                        <span class="fw-semibold fs-13">Uploaded by</span>
                                                    </th>
                                                    <td><span class=" text-muted fs-13 fw-normal">Ali AronJohn</span></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="mt-4 text-center">
<<<<<<< HEAD
                                        <button type="button" class="btn btn-icon  btn-info-light me-2 bradius"><i class="fe fe-edit"></i></button>
                                        <button type="button" class="btn btn-icon  btn-danger-light me-2 bradius"><i class="fe fe-trash"></i></button>
                                        <button type="button" class="btn btn-icon  btn-success-light me-2 bradius"><i class="fe fe-download fs-14"></i></button>
                                        <button type="button" class="btn btn-icon  btn-warning-light bradius"><i class="fe fe-share-2 fs-14"></i></button>
                                    </div>
                                </div>
                                </div>
=======
                                        <button type="button" class="btn btn-icon  btn-info-light me-2 bradius"><i
                                                class="fe fe-edit"></i></button>
                                        <button type="button" class="btn btn-icon  btn-danger-light me-2 bradius"><i
                                                class="fe fe-trash"></i></button>
                                        <button type="button" class="btn btn-icon  btn-success-light me-2 bradius"><i
                                                class="fe fe-download fs-14"></i></button>
                                        <button type="button" class="btn btn-icon  btn-warning-light bradius"><i
                                                class="fe fe-share-2 fs-14"></i></button>
                                    </div>
                                </div>
>>>>>>> 6046cce4b268caee4da34dfe670fa94f3793067b
                            </div>
                        </div>
                    </div>
                </div>
<<<<<<< HEAD
                <!--End::row-1 -->

            </div>
        </div>
        <!-- End::app-content -->

@endsection
=======
            </div>
            <!--End::row-1 -->

        </div>
    </div>
    <!-- End::app-content -->
@endsection
>>>>>>> 6046cce4b268caee4da34dfe670fa94f3793067b
