@extends('admin.admin_dashboard')

@section('content')

<div class="page">
    <!-- Start::app-content -->
    <div class="main-content app-content">
        <div class="container-fluid">

            <!-- Start::row-1 -->
            <div class="row">
                <div class="col-xl-12">
                    <div class="card custom-card mt-4">
                        <div class="card-body">
                            <div class="contact-header">
                                <div class="d-sm-flex d-block align-items-center justify-content-between">
                                    <div class="h5 fw-semibold mb-0">My Undangan</div>
                                    <div class="d-flex mt-sm-0 mt-2 align-items-center">
                                        <div class="input-group">
                                            <input type="text" class="form-control bg-light border-0" placeholder="Search Contact" aria-describedby="search-contact-member">
                                            <button class="btn btn-light" type="button" id="search-contact-member"><i class="ri-search-line text-muted"></i></button>
                                        </div>
                                        <div class="dropdown ms-2">
                                            <button class="btn btn-icon btn-primary-light btn-wave" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="ti ti-dots-vertical"></i>
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#">Delete All</a></li>
                                                <li><a class="dropdown-item" href="#">Copy All</a></li>
                                                <li><a class="dropdown-item" href="#">Move To</a></li>
                                            </ul>
                                        </div>
                                        <button class="btn btn-icon btn-secondary-light ms-2" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Add Contact"><i class="ri-add-line"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-xl-6 col-lg-6 col-md-6 col-sm-12">
                    <div class="card custom-card">
                        <div class="card-body contact-action">
                            <div class="contact-overlay"></div>
                            <div class="d-flex align-items-top ">
                                <div class="d-flex flex-fill flex-wrap gap-2">
                                    <div class="avatar avatar-xl avatar-rounded me-3">
                                        <img src="{{ asset('backend') }}/dist/assets/images/faces/4.jpg" alt="">
                                    </div>
                                    <div>
                                        <h6 class="mb-1 fw-semibold">
                                            Melissa Jane
                                        </h6>
                                        <p class="mb-1 text-muted contact-mail text-truncate">melissajane2134@gmail.com</p>
                                        <p class="fw-semibold fs-11 mb-0 text-primary">
                                            +1(555) 354 2345
                                        </p>
                                    </div>
                                </div>
                                <div>
                                    <i class="ri-heart-3-fill fs-16 text-danger"></i>
                                </div>
                            </div>
                            <div class="d-flex align-items-center justify-content-center gap-2 contact-hover-buttons">
                                <button type="button" class="btn btn-sm btn-light contact-hover-btn">
                                    View Contact
                                </button>
                                <div class="dropdown contact-hover-dropdown">
                                    <button class="btn btn-sm btn-icon btn-light btn-wave" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="ri-more-2-fill"></i>
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#"><i class="ri-share-line me-2 align-middle d-inline-block"></i>Share</a></li>
                                        <li><a class="dropdown-item" href="#"><i class="ri-phone-line me-2 align-middle d-inline-block"></i>Call</a></li>
                                        <li><a class="dropdown-item" href="#"><i class="ri-chat-2-line me-2 align-middle d-inline-block"></i>Message</a></li>
                                        <li><a class="dropdown-item" href="#"><i class="ri-video-chat-line me-2 align-middle d-inline-block"></i>Video Call</a></li>
                                        <li><a class="dropdown-item" href="#"><i class="ri-delete-bin-5-line me-2 align-middle d-inline-block"></i>Delete</a></li>
                                        <li><a class="dropdown-item" href="#"><i class="ri ri-heart-3-line me-2 align-middle d-inline-block"></i>Favourite</a></li>
                                    </ul>
                                </div>
                                <button aria-label="button" class="btn btn-sm btn-icon btn-light contact-hover-dropdown1" type="button">
                                    <i class="ri-heart-3-fill text-danger"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-xl-6 col-lg-6 col-md-6 col-sm-12">
                    <div class="card custom-card">
                        <div class="card-body contact-action">
                            <div class="contact-overlay"></div>
                            <div class="d-flex align-items-top ">
                                <div class="d-flex flex-fill flex-wrap gap-2">
                                    <div class="avatar avatar-xl avatar-rounded me-3">
                                        <img src="{{ asset('backend') }}/dist/assets/images/faces/15.jpg" alt="">
                                    </div>
                                    <div>
                                        <h6 class="mb-1 fw-semibold">
                                            Simon Cowall
                                        </h6>
                                        <p class="mb-1 text-muted contact-mail text-truncate">simoncowal111@gmail.com</p>
                                        <p class="fw-semibold fs-11 mb-0 text-primary">
                                            +1(555) 873 8923
                                        </p>
                                    </div>
                                </div>
                                <div>
                                    <i class="ri-heart-3-line fs-16 text-muted"></i>
                                </div>
                            </div>
                            <div class="d-flex align-items-center justify-content-center gap-2 contact-hover-buttons">
                                <button type="button" class="btn btn-sm btn-light contact-hover-btn">
                                    View Contact
                                </button>
                                <div class="dropdown contact-hover-dropdown">
                                    <button class="btn btn-sm btn-icon btn-light btn-wave" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="ri-more-2-fill"></i>
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#"><i class="ri-share-line me-2 align-middle d-inline-block"></i>Share</a></li>
                                        <li><a class="dropdown-item" href="#"><i class="ri-phone-line me-2 align-middle d-inline-block"></i>Call</a></li>
                                        <li><a class="dropdown-item" href="#"><i class="ri-chat-2-line me-2 align-middle d-inline-block"></i>Message</a></li>
                                        <li><a class="dropdown-item" href="#"><i class="ri-video-chat-line me-2 align-middle d-inline-block"></i>Video Call</a></li>
                                        <li><a class="dropdown-item" href="#"><i class="ri-delete-bin-5-line me-2 align-middle d-inline-block"></i>Delete</a></li>
                                        <li><a class="dropdown-item" href="#"><i class="ri ri-heart-3-line me-2 align-middle d-inline-block"></i>Favourite</a></li>
                                    </ul>
                                </div>
                                <button aria-label="button" class="btn btn-sm btn-icon btn-light contact-hover-dropdown1" type="button">
                                    <i class="ri-heart-3-fill text-danger"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-xl-6 col-lg-6 col-md-6 col-sm-12">
                    <div class="card custom-card">
                        <div class="card-body contact-action">
                            <div class="contact-overlay"></div>
                            <div class="d-flex align-items-top">
                                <div class="d-flex flex-fill flex-wrap gap-2">
                                    <div class="avatar avatar-xl avatar-rounded me-3">
                                        <img src="{{ asset('backend') }}/dist/assets/images/faces/2.jpg" alt="">
                                    </div>
                                    <div>
                                        <h6 class="mb-1 fw-semibold">
                                            Susana Sane
                                        </h6>
                                        <p class="mb-1 text-muted contact-mail text-truncate">susanasane@gmail.com</p>
                                        <p class="fw-semibold fs-11 mb-0 text-primary">
                                            +1(555) 347 0923
                                        </p>
                                    </div>
                                </div>
                                <div>
                                    <i class="ri-heart-3-fill fs-16 text-danger"></i>
                                </div>
                            </div>
                            <div class="d-flex align-items-center justify-content-center gap-2 contact-hover-buttons">
                                <button type="button" class="btn btn-sm btn-light contact-hover-btn">
                                    View Contact
                                </button>
                                <div class="dropdown contact-hover-dropdown">
                                    <button class="btn btn-sm btn-icon btn-light btn-wave" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="ri-more-2-fill"></i>
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#"><i class="ri-share-line me-2 align-middle d-inline-block"></i>Share</a></li>
                                        <li><a class="dropdown-item" href="#"><i class="ri-phone-line me-2 align-middle d-inline-block"></i>Call</a></li>
                                        <li><a class="dropdown-item" href="#"><i class="ri-chat-2-line me-2 align-middle d-inline-block"></i>Message</a></li>
                                        <li><a class="dropdown-item" href="#"><i class="ri-video-chat-line me-2 align-middle d-inline-block"></i>Video Call</a></li>
                                        <li><a class="dropdown-item" href="#"><i class="ri-delete-bin-5-line me-2 align-middle d-inline-block"></i>Delete</a></li>
                                        <li><a class="dropdown-item" href="#"><i class="ri ri-heart-3-line me-2 align-middle d-inline-block"></i>Favourite</a></li>
                                    </ul>
                                </div>
                                <button aria-label="button" class="btn btn-sm btn-icon btn-light contact-hover-dropdown1" type="button">
                                    <i class="ri-heart-3-fill text-danger"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-xl-6 col-lg-6 col-md-6 col-sm-12">
                    <div class="card custom-card">
                        <div class="card-body contact-action">
                            <div class="contact-overlay"></div>
                            <div class="d-flex align-items-top">
                                <div class="d-flex flex-fill flex-wrap gap-2">
                                    <div class="avatar avatar-xl avatar-rounded me-3">
                                        <img src="{{ asset('backend') }}/dist/assets/images/faces/13.jpg" alt="">
                                    </div>
                                    <div>
                                        <h6 class="mb-1 fw-semibold">
                                            Sahne Watson
                                        </h6>
                                        <p class="mb-1 text-muted contact-mail text-truncate">shanewatson@gmail.com</p>
                                        <p class="fw-semibold fs-11 mb-0 text-primary">
                                            +1(555) 674 7824
                                        </p>
                                    </div>
                                </div>
                                <div>
                                    <i class="ri-heart-3-line fs-16 text-muted"></i>
                                </div>
                            </div>
                            <div class="d-flex align-items-center justify-content-center gap-2 contact-hover-buttons">
                                <button type="button" class="btn btn-sm btn-light contact-hover-btn">
                                    View Contact
                                </button>
                                <div class="dropdown contact-hover-dropdown">
                                    <button class="btn btn-sm btn-icon btn-light btn-wave" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="ri-more-2-fill"></i>
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#"><i class="ri-share-line me-2 align-middle d-inline-block"></i>Share</a></li>
                                        <li><a class="dropdown-item" href="#"><i class="ri-phone-line me-2 align-middle d-inline-block"></i>Call</a></li>
                                        <li><a class="dropdown-item" href="#"><i class="ri-chat-2-line me-2 align-middle d-inline-block"></i>Message</a></li>
                                        <li><a class="dropdown-item" href="#"><i class="ri-video-chat-line me-2 align-middle d-inline-block"></i>Video Call</a></li>
                                        <li><a class="dropdown-item" href="#"><i class="ri-delete-bin-5-line me-2 align-middle d-inline-block"></i>Delete</a></li>
                                        <li><a class="dropdown-item" href="#"><i class="ri ri-heart-3-line me-2 align-middle d-inline-block"></i>Favourite</a></li>
                                    </ul>
                                </div>
                                <button aria-label="button" class="btn btn-sm btn-icon btn-light contact-hover-dropdown1" type="button">
                                    <i class="ri-heart-3-fill text-danger"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-xl-6 col-lg-6 col-md-6 col-sm-12">
                    <div class="card custom-card">
                        <div class="card-body contact-action">
                            <div class="contact-overlay"></div>
                            <div class="d-flex align-items-top">
                                <div class="d-flex flex-fill flex-wrap gap-2">
                                    <div class="avatar avatar-xl avatar-rounded me-3">
                                        <img src="{{ asset('backend') }}/dist/assets/images/media/media-39.jpg" alt="">
                                    </div>
                                    <div>
                                        <h6 class="mb-1 fw-semibold">
                                            Dwayne Happy
                                        </h6>
                                        <p class="mb-1 text-muted contact-mail text-truncate">dwaynehappy235@gmail.com</p>
                                        <p class="fw-semibold fs-11 mb-0 text-primary">
                                            +1(555) 985 2893
                                        </p>
                                    </div>
                                </div>
                                <div>
                                    <i class="ri-heart-3-line fs-16 text-muted"></i>
                                </div>
                            </div>
                            <div class="d-flex align-items-center justify-content-center gap-2 contact-hover-buttons">
                                <button type="button" class="btn btn-sm btn-light contact-hover-btn">
                                    View Contact
                                </button>
                                <div class="dropdown contact-hover-dropdown">
                                    <button class="btn btn-sm btn-icon btn-light btn-wave" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="ri-more-2-fill"></i>
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#"><i class="ri-share-line me-2 align-middle d-inline-block"></i>Share</a></li>
                                        <li><a class="dropdown-item" href="#"><i class="ri-phone-line me-2 align-middle d-inline-block"></i>Call</a></li>
                                        <li><a class="dropdown-item" href="#"><i class="ri-chat-2-line me-2 align-middle d-inline-block"></i>Message</a></li>
                                        <li><a class="dropdown-item" href="#"><i class="ri-video-chat-line me-2 align-middle d-inline-block"></i>Video Call</a></li>
                                        <li><a class="dropdown-item" href="#"><i class="ri-delete-bin-5-line me-2 align-middle d-inline-block"></i>Delete</a></li>
                                        <li><a class="dropdown-item" href="#"><i class="ri ri-heart-3-line me-2 align-middle d-inline-block"></i>Favourite</a></li>
                                    </ul>
                                </div>
                                <button aria-label="button" class="btn btn-sm btn-icon btn-light contact-hover-dropdown1" type="button">
                                    <i class="ri-heart-3-fill text-danger"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-xl-6 col-lg-6 col-md-6 col-sm-12">
                    <div class="card custom-card">
                        <div class="card-body contact-action">
                            <div class="contact-overlay"></div>
                            <div class="d-flex align-items-top">
                                <div class="d-flex flex-fill flex-wrap gap-2">
                                    <div class="avatar avatar-xl avatar-rounded me-3">
                                        <img src="{{ asset('backend') }}/dist/assets/images/faces/5.jpg" alt="">
                                    </div>
                                    <div>
                                        <h6 class="mb-1 fw-semibold">
                                            Meisha Tite
                                        </h6>
                                        <p class="mb-1 text-muted contact-mail text-truncate">meishatite456@gmail.com</p>
                                        <p class="fw-semibold fs-11 mb-0 text-primary">
                                            +1(555) 675 4680
                                        </p>
                                    </div>
                                </div>
                                <div>
                                    <i class="ri-heart-3-line fs-16 text-muted"></i>
                                </div>
                            </div>
                            <div class="d-flex align-items-center justify-content-center gap-2 contact-hover-buttons">
                                <button type="button" class="btn btn-sm btn-light contact-hover-btn">
                                    View Contact
                                </button>
                                <div class="dropdown contact-hover-dropdown">
                                    <button class="btn btn-sm btn-icon btn-light btn-wave" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="ri-more-2-fill"></i>
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#"><i class="ri-share-line me-2 align-middle d-inline-block"></i>Share</a></li>
                                        <li><a class="dropdown-item" href="#"><i class="ri-phone-line me-2 align-middle d-inline-block"></i>Call</a></li>
                                        <li><a class="dropdown-item" href="#"><i class="ri-chat-2-line me-2 align-middle d-inline-block"></i>Message</a></li>
                                        <li><a class="dropdown-item" href="#"><i class="ri-video-chat-line me-2 align-middle d-inline-block"></i>Video Call</a></li>
                                        <li><a class="dropdown-item" href="#"><i class="ri-delete-bin-5-line me-2 align-middle d-inline-block"></i>Delete</a></li>
                                        <li><a class="dropdown-item" href="#"><i class="ri ri-heart-3-line me-2 align-middle d-inline-block"></i>Favourite</a></li>
                                    </ul>
                                </div>
                                <button aria-label="button" class="btn btn-sm btn-icon btn-light contact-hover-dropdown1" type="button">
                                    <i class="ri-heart-3-fill text-danger"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-xl-6 col-lg-6 col-md-6 col-sm-12">
                    <div class="card custom-card">
                        <div class="card-body contact-action">
                            <div class="contact-overlay"></div>
                            <div class="d-flex align-items-top">
                                <div class="d-flex flex-fill flex-wrap gap-2">
                                    <div class="avatar avatar-xl avatar-rounded me-3">
                                        <img src="{{ asset('backend') }}/dist/assets/images/faces/10.jpg" alt="">
                                    </div>
                                    <div>
                                        <h6 class="mb-1 fw-semibold">
                                            Andrew Gerfield
                                        </h6>
                                        <p class="mb-1 text-muted contact-mail text-truncate">andrewgerfield00@gmail.com</p>
                                        <p class="fw-semibold fs-11 mb-0 text-primary">
                                            +1(555) 765 8937
                                        </p>
                                    </div>
                                </div>
                                <div>
                                    <i class="ri-heart-3-line fs-16 text-muted"></i>
                                </div>
                            </div>
                            <div class="d-flex align-items-center justify-content-center gap-2 contact-hover-buttons">
                                <button type="button" class="btn btn-sm btn-light contact-hover-btn">
                                    View Contact
                                </button>
                                <div class="dropdown contact-hover-dropdown">
                                    <button class="btn btn-sm btn-icon btn-light btn-wave" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="ri-more-2-fill"></i>
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#"><i class="ri-share-line me-2 align-middle d-inline-block"></i>Share</a></li>
                                        <li><a class="dropdown-item" href="#"><i class="ri-phone-line me-2 align-middle d-inline-block"></i>Call</a></li>
                                        <li><a class="dropdown-item" href="#"><i class="ri-chat-2-line me-2 align-middle d-inline-block"></i>Message</a></li>
                                        <li><a class="dropdown-item" href="#"><i class="ri-video-chat-line me-2 align-middle d-inline-block"></i>Video Call</a></li>
                                        <li><a class="dropdown-item" href="#"><i class="ri-delete-bin-5-line me-2 align-middle d-inline-block"></i>Delete</a></li>
                                        <li><a class="dropdown-item" href="#"><i class="ri ri-heart-3-line me-2 align-middle d-inline-block"></i>Favourite</a></li>
                                    </ul>
                                </div>
                                <button aria-label="button" class="btn btn-sm btn-icon btn-light contact-hover-dropdown1" type="button">
                                    <i class="ri-heart-3-fill text-danger"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-xl-6 col-lg-6 col-md-6 col-sm-12">
                    <div class="card custom-card">
                        <div class="card-body contact-action">
                            <div class="contact-overlay"></div>
                            <div class="d-flex align-items-top">
                                <div class="d-flex flex-fill flex-wrap gap-2">
                                    <div class="avatar avatar-xl avatar-rounded me-3">
                                        <img src="{{ asset('backend') }}/dist/assets/images/faces/21.jpg" alt="">
                                    </div>
                                    <div>
                                        <h6 class="mb-1 fw-semibold">
                                            Samantha Melon
                                        </h6>
                                        <p class="mb-1 text-muted contact-mail text-truncate">samanthamelon@gmail.com</p>
                                        <p class="fw-semibold fs-11 mb-0 text-primary">
                                            +1(555) 890 5687
                                        </p>
                                    </div>
                                </div>
                                <div>
                                    <i class="ri-heart-3-line fs-16 text-muted"></i>
                                </div>
                            </div>
                            <div class="d-flex align-items-center justify-content-center gap-2 contact-hover-buttons">
                                <button type="button" class="btn btn-sm btn-light contact-hover-btn">
                                    View Contact
                                </button>
                                <div class="dropdown contact-hover-dropdown">
                                    <button class="btn btn-sm btn-icon btn-light btn-wave" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="ri-more-2-fill"></i>
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#"><i class="ri-share-line me-2 align-middle d-inline-block"></i>Share</a></li>
                                        <li><a class="dropdown-item" href="#"><i class="ri-phone-line me-2 align-middle d-inline-block"></i>Call</a></li>
                                        <li><a class="dropdown-item" href="#"><i class="ri-chat-2-line me-2 align-middle d-inline-block"></i>Message</a></li>
                                        <li><a class="dropdown-item" href="#"><i class="ri-video-chat-line me-2 align-middle d-inline-block"></i>Video Call</a></li>
                                        <li><a class="dropdown-item" href="#"><i class="ri-delete-bin-5-line me-2 align-middle d-inline-block"></i>Delete</a></li>
                                        <li><a class="dropdown-item" href="#"><i class="ri ri-heart-3-line me-2 align-middle d-inline-block"></i>Favourite</a></li>
                                    </ul>
                                </div>
                                <button aria-label="button" class="btn btn-sm btn-icon btn-light contact-hover-dropdown1" type="button">
                                    <i class="ri-heart-3-fill text-danger"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-xl-6 col-lg-6 col-md-6 col-sm-12">
                    <div class="card custom-card">
                        <div class="card-body contact-action">
                            <div class="contact-overlay"></div>
                            <div class="d-flex align-items-top">
                                <div class="d-flex flex-fill flex-wrap gap-2">
                                    <div class="avatar avatar-xl avatar-rounded me-3">
                                        <img src="{{ asset('backend') }}/dist/assets/images/faces/11.jpg" alt="">
                                    </div>
                                    <div>
                                        <h6 class="mb-1 fw-semibold">
                                            Elisha Smith
                                        </h6>
                                        <p class="mb-1 text-muted contact-mail text-truncate">elishasmith@gmail.com</p>
                                        <p class="fw-semibold fs-11 mb-0 text-primary">
                                            +1(555) 972 9883
                                        </p>
                                    </div>
                                </div>
                                <div>
                                    <i class="ri-heart-3-line fs-16 text-muted"></i>
                                </div>
                            </div>
                            <div class="d-flex align-items-center justify-content-center gap-2 contact-hover-buttons">
                                <button type="button" class="btn btn-sm btn-light contact-hover-btn">
                                    View Contact
                                </button>
                                <div class="dropdown contact-hover-dropdown">
                                    <button class="btn btn-sm btn-icon btn-light btn-wave" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="ri-more-2-fill"></i>
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#"><i class="ri-share-line me-2 align-middle d-inline-block"></i>Share</a></li>
                                        <li><a class="dropdown-item" href="#"><i class="ri-phone-line me-2 align-middle d-inline-block"></i>Call</a></li>
                                        <li><a class="dropdown-item" href="#"><i class="ri-chat-2-line me-2 align-middle d-inline-block"></i>Message</a></li>
                                        <li><a class="dropdown-item" href="#"><i class="ri-video-chat-line me-2 align-middle d-inline-block"></i>Video Call</a></li>
                                        <li><a class="dropdown-item" href="#"><i class="ri-delete-bin-5-line me-2 align-middle d-inline-block"></i>Delete</a></li>
                                        <li><a class="dropdown-item" href="#"><i class="ri ri-heart-3-line me-2 align-middle d-inline-block"></i>Favourite</a></li>
                                    </ul>
                                </div>
                                <button aria-label="button" class="btn btn-sm btn-icon btn-light contact-hover-dropdown1" type="button">
                                    <i class="ri-heart-3-fill text-danger"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-xl-6 col-lg-6 col-md-6 col-sm-12">
                    <div class="card custom-card">
                        <div class="card-body contact-action">
                            <div class="contact-overlay"></div>
                            <div class="d-flex align-items-top">
                                <div class="d-flex flex-fill flex-wrap gap-2">
                                    <div class="avatar avatar-xl avatar-rounded me-3">
                                        <img src="{{ asset('backend') }}/dist/assets/images/media/media-63.jpg" alt="">
                                    </div>
                                    <div>
                                        <h6 class="mb-1 fw-semibold">
                                            Devon Convoy
                                        </h6>
                                        <p class="mb-1 text-muted contact-mail text-truncate">devonconvoy65@gmail.com</p>
                                        <p class="fw-semibold fs-11 mb-0 text-primary">
                                            +1(555) 693 7836
                                        </p>
                                    </div>
                                </div>
                                <div>
                                    <i class="ri-heart-3-fill fs-16 text-danger"></i>
                                </div>
                            </div>
                            <div class="d-flex align-items-center justify-content-center gap-2 contact-hover-buttons">
                                <button type="button" class="btn btn-sm btn-light contact-hover-btn">
                                    View Contact
                                </button>
                                <div class="dropdown contact-hover-dropdown">
                                    <button class="btn btn-sm btn-icon btn-light btn-wave" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="ri-more-2-fill"></i>
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#"><i class="ri-share-line me-2 align-middle d-inline-block"></i>Share</a></li>
                                        <li><a class="dropdown-item" href="#"><i class="ri-phone-line me-2 align-middle d-inline-block"></i>Call</a></li>
                                        <li><a class="dropdown-item" href="#"><i class="ri-chat-2-line me-2 align-middle d-inline-block"></i>Message</a></li>
                                        <li><a class="dropdown-item" href="#"><i class="ri-video-chat-line me-2 align-middle d-inline-block"></i>Video Call</a></li>
                                        <li><a class="dropdown-item" href="#"><i class="ri-delete-bin-5-line me-2 align-middle d-inline-block"></i>Delete</a></li>
                                        <li><a class="dropdown-item" href="#"><i class="ri ri-heart-3-line me-2 align-middle d-inline-block"></i>Favourite</a></li>
                                    </ul>
                                </div>
                                <button aria-label="button" class="btn btn-sm btn-icon btn-light contact-hover-dropdown1" type="button">
                                    <i class="ri-heart-3-fill text-danger"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-xl-6 col-lg-6 col-md-6 col-sm-12">
                    <div class="card custom-card">
                        <div class="card-body contact-action">
                            <div class="contact-overlay"></div>
                            <div class="d-flex align-items-top">
                                <div class="d-flex flex-fill flex-wrap gap-2">
                                    <div class="avatar avatar-xl avatar-rounded me-3 bg-primary">
                                        SJ
                                    </div>
                                    <div>
                                        <h6 class="mb-1 fw-semibold">
                                            Shensovic Jeremy
                                        </h6>
                                        <p class="mb-1 text-muted contact-mail text-truncate">shensovicjeremy@gmail.com</p>
                                        <p class="fw-semibold fs-11 mb-0 text-primary">
                                            +1(555) 238 2342
                                        </p>
                                    </div>
                                </div>
                                <div>
                                    <i class="ri-heart-3-line fs-16 text-muted"></i>
                                </div>
                            </div>
                            <div class="d-flex align-items-center justify-content-center gap-2 contact-hover-buttons">
                                <button type="button" class="btn btn-sm btn-light contact-hover-btn">
                                    View Contact
                                </button>
                                <div class="dropdown contact-hover-dropdown">
                                    <button class="btn btn-sm btn-icon btn-light btn-wave" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="ri-more-2-fill"></i>
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#"><i class="ri-share-line me-2 align-middle d-inline-block"></i>Share</a></li>
                                        <li><a class="dropdown-item" href="#"><i class="ri-phone-line me-2 align-middle d-inline-block"></i>Call</a></li>
                                        <li><a class="dropdown-item" href="#"><i class="ri-chat-2-line me-2 align-middle d-inline-block"></i>Message</a></li>
                                        <li><a class="dropdown-item" href="#"><i class="ri-video-chat-line me-2 align-middle d-inline-block"></i>Video Call</a></li>
                                        <li><a class="dropdown-item" href="#"><i class="ri-delete-bin-5-line me-2 align-middle d-inline-block"></i>Delete</a></li>
                                        <li><a class="dropdown-item" href="#"><i class="ri ri-heart-3-line me-2 align-middle d-inline-block"></i>Favourite</a></li>
                                    </ul>
                                </div>
                                <button aria-label="button" class="btn btn-sm btn-icon btn-light contact-hover-dropdown1" type="button">
                                    <i class="ri-heart-3-fill text-danger"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-xl-6 col-lg-6 col-md-6 col-sm-12">
                    <div class="card custom-card">
                        <div class="card-body contact-action">
                            <div class="contact-overlay"></div>
                            <div class="d-flex align-items-top">
                                <div class="d-flex flex-fill flex-wrap gap-2">
                                    <div class="avatar avatar-xl avatar-rounded me-3">
                                        <img src="{{ asset('backend') }}/dist/assets/images/faces/12.jpg" alt="">
                                    </div>
                                    <div>
                                        <h6 class="mb-1 fw-semibold">
                                            Jason Mama
                                        </h6>
                                        <p class="mb-1 text-muted contact-mail text-truncate">jasonmama96@gmail.com</p>
                                        <p class="fw-semibold fs-11 mb-0 text-primary">
                                            +1(555) 875 6789
                                        </p>
                                    </div>
                                </div>
                                <div>
                                    <i class="ri-heart-3-line fs-16 text-muted"></i>
                                </div>
                            </div>
                            <div class="d-flex align-items-center justify-content-center gap-2 contact-hover-buttons">
                                <button type="button" class="btn btn-sm btn-light contact-hover-btn">
                                    View Contact
                                </button>
                                <div class="dropdown contact-hover-dropdown">
                                    <button class="btn btn-sm btn-icon btn-light btn-wave" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="ri-more-2-fill"></i>
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#"><i class="ri-share-line me-2 align-middle d-inline-block"></i>Share</a></li>
                                        <li><a class="dropdown-item" href="#"><i class="ri-phone-line me-2 align-middle d-inline-block"></i>Call</a></li>
                                        <li><a class="dropdown-item" href="#"><i class="ri-chat-2-line me-2 align-middle d-inline-block"></i>Message</a></li>
                                        <li><a class="dropdown-item" href="#"><i class="ri-video-chat-line me-2 align-middle d-inline-block"></i>Video Call</a></li>
                                        <li><a class="dropdown-item" href="#"><i class="ri-delete-bin-5-line me-2 align-middle d-inline-block"></i>Delete</a></li>
                                        <li><a class="dropdown-item" href="#"><i class="ri ri-heart-3-line me-2 align-middle d-inline-block"></i>Favourite</a></li>
                                    </ul>
                                </div>
                                <button aria-label="button" class="btn btn-sm btn-icon btn-light contact-hover-dropdown1" type="button">
                                    <i class="ri-heart-3-fill text-danger"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-xl-6 col-lg-6 col-md-6 col-sm-12">
                    <div class="card custom-card">
                        <div class="card-body contact-action">
                            <div class="contact-overlay"></div>
                            <div class="d-flex align-items-top">
                                <div class="d-flex flex-fill flex-wrap gap-2">
                                    <div class="avatar avatar-xl avatar-rounded me-3">
                                        <img src="{{ asset('backend') }}/dist/assets/images/faces/1.jpg" alt="">
                                    </div>
                                    <div>
                                        <h6 class="mb-1 fw-semibold">
                                            Monika Karen
                                        </h6>
                                        <p class="mb-1 text-muted contact-mail text-truncate">monikakaren@gmail.com</p>
                                        <p class="fw-semibold fs-11 mb-0 text-primary">
                                            +1(555) 568 9234
                                        </p>
                                    </div>
                                </div>
                                <div>
                                    <i class="ri-heart-3-line fs-16 text-muted"></i>
                                </div>
                            </div>
                            <div class="d-flex align-items-center justify-content-center gap-2 contact-hover-buttons">
                                <button type="button" class="btn btn-sm btn-light contact-hover-btn">
                                    View Contact
                                </button>
                                <div class="dropdown contact-hover-dropdown">
                                    <button class="btn btn-sm btn-icon btn-light btn-wave" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="ri-more-2-fill"></i>
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#"><i class="ri-share-line me-2 align-middle d-inline-block"></i>Share</a></li>
                                        <li><a class="dropdown-item" href="#"><i class="ri-phone-line me-2 align-middle d-inline-block"></i>Call</a></li>
                                        <li><a class="dropdown-item" href="#"><i class="ri-chat-2-line me-2 align-middle d-inline-block"></i>Message</a></li>
                                        <li><a class="dropdown-item" href="#"><i class="ri-video-chat-line me-2 align-middle d-inline-block"></i>Video Call</a></li>
                                        <li><a class="dropdown-item" href="#"><i class="ri-delete-bin-5-line me-2 align-middle d-inline-block"></i>Delete</a></li>
                                        <li><a class="dropdown-item" href="#"><i class="ri ri-heart-3-line me-2 align-middle d-inline-block"></i>Favourite</a></li>
                                    </ul>
                                </div>
                                <button aria-label="button" class="btn btn-sm btn-icon btn-light contact-hover-dropdown1" type="button">
                                    <i class="ri-heart-3-fill text-danger"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-xl-6 col-lg-6 col-md-6 col-sm-12">
                    <div class="card custom-card">
                        <div class="card-body contact-action">
                            <div class="contact-overlay"></div>
                            <div class="d-flex align-items-top">
                                <div class="d-flex flex-fill flex-wrap gap-2">
                                    <div class="avatar avatar-xl avatar-rounded me-3">
                                        <img src="{{ asset('backend') }}/dist/assets/images/media/media-13.jpg" alt="">
                                    </div>
                                    <div>
                                        <h6 class="mb-1 fw-semibold">
                                            Tom Holland
                                        </h6>
                                        <p class="mb-1 text-muted contact-mail text-truncate">tomholland98@gmail.com</p>
                                        <p class="fw-semibold fs-11 mb-0 text-primary">
                                            +1(555) 892 4334
                                        </p>
                                    </div>
                                </div>
                                <div>
                                    <i class="ri-heart-3-line fs-16 text-muted"></i>
                                </div>
                            </div>
                            <div class="d-flex align-items-center justify-content-center gap-2 contact-hover-buttons">
                                <button type="button" class="btn btn-sm btn-light contact-hover-btn">
                                    View Contact
                                </button>
                                <div class="dropdown contact-hover-dropdown">
                                    <button class="btn btn-sm btn-icon btn-light btn-wave" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="ri-more-2-fill"></i>
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#"><i class="ri-share-line me-2 align-middle d-inline-block"></i>Share</a></li>
                                        <li><a class="dropdown-item" href="#"><i class="ri-phone-line me-2 align-middle d-inline-block"></i>Call</a></li>
                                        <li><a class="dropdown-item" href="#"><i class="ri-chat-2-line me-2 align-middle d-inline-block"></i>Message</a></li>
                                        <li><a class="dropdown-item" href="#"><i class="ri-video-chat-line me-2 align-middle d-inline-block"></i>Video Call</a></li>
                                        <li><a class="dropdown-item" href="#"><i class="ri-delete-bin-5-line me-2 align-middle d-inline-block"></i>Delete</a></li>
                                        <li><a class="dropdown-item" href="#"><i class="ri ri-heart-3-line me-2 align-middle d-inline-block"></i>Favourite</a></li>
                                    </ul>
                                </div>
                                <button aria-label="button" class="btn btn-sm btn-icon btn-light contact-hover-dropdown1" type="button">
                                    <i class="ri-heart-3-fill text-danger"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-xl-6 col-lg-6 col-md-6 col-sm-12">
                    <div class="card custom-card">
                        <div class="card-body contact-action">
                            <div class="contact-overlay"></div>
                            <div class="d-flex align-items-top">
                                <div class="d-flex flex-fill flex-wrap gap-2">
                                    <div class="avatar avatar-xl avatar-rounded me-3">
                                        <img src="{{ asset('backend') }}/dist/assets/images/media/media-36.jpg" alt="">
                                    </div>
                                    <div>
                                        <h6 class="mb-1 fw-semibold">
                                            Anelica Julie
                                        </h6>
                                        <p class="mb-1 text-muted contact-mail text-truncate">angelicajulie@gmail.com</p>
                                        <p class="fw-semibold fs-11 mb-0 text-primary">
                                            +1(555) 882 3445
                                        </p>
                                    </div>
                                </div>
                                <div>
                                    <i class="ri-heart-3-line fs-16 text-muted"></i>
                                </div>
                            </div>
                            <div class="d-flex align-items-center justify-content-center gap-2 contact-hover-buttons">
                                <button type="button" class="btn btn-sm btn-light contact-hover-btn">
                                    View Contact
                                </button>
                                <div class="dropdown contact-hover-dropdown">
                                    <button class="btn btn-sm btn-icon btn-light btn-wave" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="ri-more-2-fill"></i>
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#"><i class="ri-share-line me-2 align-middle d-inline-block"></i>Share</a></li>
                                        <li><a class="dropdown-item" href="#"><i class="ri-phone-line me-2 align-middle d-inline-block"></i>Call</a></li>
                                        <li><a class="dropdown-item" href="#"><i class="ri-chat-2-line me-2 align-middle d-inline-block"></i>Message</a></li>
                                        <li><a class="dropdown-item" href="#"><i class="ri-video-chat-line me-2 align-middle d-inline-block"></i>Video Call</a></li>
                                        <li><a class="dropdown-item" href="#"><i class="ri-delete-bin-5-line me-2 align-middle d-inline-block"></i>Delete</a></li>
                                        <li><a class="dropdown-item" href="#"><i class="ri ri-heart-3-line me-2 align-middle d-inline-block"></i>Favourite</a></li>
                                    </ul>
                                </div>
                                <button aria-label="button" class="btn btn-sm btn-icon btn-light contact-hover-dropdown1" type="button">
                                    <i class="ri-heart-3-fill text-danger"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-xl-6 col-lg-6 col-md-6 col-sm-12">
                    <div class="card custom-card">
                        <div class="card-body contact-action">
                            <div class="contact-overlay"></div>
                            <div class="d-flex align-items-top">
                                <div class="d-flex flex-fill flex-wrap gap-2">
                                    <div class="avatar avatar-xl avatar-rounded me-3">
                                        <img src="{{ asset('backend') }}/dist/assets/images/faces/8.jpg" alt="">
                                    </div>
                                    <div>
                                        <h6 class="mb-1 fw-semibold">
                                            Aneera Khan
                                        </h6>
                                        <p class="mb-1 text-muted contact-mail text-truncate">aneerakhan@gmail.com</p>
                                        <p class="fw-semibold fs-11 mb-0 text-primary">
                                            +1(555) 973 8734
                                        </p>
                                    </div>
                                </div>
                                <div>
                                    <i class="ri-heart-3-line fs-16 text-muted"></i>
                                </div>
                            </div>
                            <div class="d-flex align-items-center justify-content-center gap-2 contact-hover-buttons">
                                <button type="button" class="btn btn-sm btn-light contact-hover-btn">
                                    View Contact
                                </button>
                                <div class="dropdown contact-hover-dropdown">
                                    <button class="btn btn-sm btn-icon btn-light btn-wave" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="ri-more-2-fill"></i>
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#"><i class="ri-share-line me-2 align-middle d-inline-block"></i>Share</a></li>
                                        <li><a class="dropdown-item" href="#"><i class="ri-phone-line me-2 align-middle d-inline-block"></i>Call</a></li>
                                        <li><a class="dropdown-item" href="#"><i class="ri-chat-2-line me-2 align-middle d-inline-block"></i>Message</a></li>
                                        <li><a class="dropdown-item" href="#"><i class="ri-video-chat-line me-2 align-middle d-inline-block"></i>Video Call</a></li>
                                        <li><a class="dropdown-item" href="#"><i class="ri-delete-bin-5-line me-2 align-middle d-inline-block"></i>Delete</a></li>
                                        <li><a class="dropdown-item" href="#"><i class="ri ri-heart-3-line me-2 align-middle d-inline-block"></i>Favourite</a></li>
                                    </ul>
                                </div>
                                <button aria-label="button" class="btn btn-sm btn-icon btn-light contact-hover-dropdown1" type="button">
                                    <i class="ri-heart-3-fill text-danger"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-xl-6 col-lg-6 col-md-6 col-sm-12">
                    <div class="card custom-card">
                        <div class="card-body contact-action">
                            <div class="contact-overlay"></div>
                            <div class="d-flex align-items-top">
                                <div class="d-flex flex-fill flex-wrap gap-2">
                                    <div class="avatar avatar-xl avatar-rounded me-3">
                                        <img src="{{ asset('backend') }}/dist/assets/images/faces/21.jpg" alt="">
                                    </div>
                                    <div>
                                        <h6 class="mb-1 fw-semibold">
                                            Linda Simson
                                        </h6>
                                        <p class="mb-1 text-muted contact-mail text-truncate">lindasimson@gmail.com</p>
                                        <p class="fw-semibold fs-11 mb-0 text-primary">
                                            +1(555) 234 9345
                                        </p>
                                    </div>
                                </div>
                                <div>
                                    <i class="ri-heart-3-fill fs-16 text-danger"></i>
                                </div>
                            </div>
                            <div class="d-flex align-items-center justify-content-center gap-2 contact-hover-buttons">
                                <button type="button" class="btn btn-sm btn-light contact-hover-btn">
                                    View Contact
                                </button>
                                <div class="dropdown contact-hover-dropdown">
                                    <button class="btn btn-sm btn-icon btn-light btn-wave" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="ri-more-2-fill"></i>
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#"><i class="ri-share-line me-2 align-middle d-inline-block"></i>Share</a></li>
                                        <li><a class="dropdown-item" href="#"><i class="ri-phone-line me-2 align-middle d-inline-block"></i>Call</a></li>
                                        <li><a class="dropdown-item" href="#"><i class="ri-chat-2-line me-2 align-middle d-inline-block"></i>Message</a></li>
                                        <li><a class="dropdown-item" href="#"><i class="ri-video-chat-line me-2 align-middle d-inline-block"></i>Video Call</a></li>
                                        <li><a class="dropdown-item" href="#"><i class="ri-delete-bin-5-line me-2 align-middle d-inline-block"></i>Delete</a></li>
                                        <li><a class="dropdown-item" href="#"><i class="ri ri-heart-3-line me-2 align-middle d-inline-block"></i>Favourite</a></li>
                                    </ul>
                                </div>
                                <button aria-label="button" class="btn btn-sm btn-icon btn-light contact-hover-dropdown1" type="button">
                                    <i class="ri-heart-3-fill text-danger"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-xl-6 col-lg-6 col-md-6 col-sm-12">
                    <div class="card custom-card">
                        <div class="card-body contact-action">
                            <div class="contact-overlay"></div>
                            <div class="d-flex align-items-top">
                                <div class="d-flex flex-fill flex-wrap gap-2">
                                    <div class="avatar avatar-xl avatar-rounded me-3">
                                        <img src="{{ asset('backend') }}/dist/assets/images/faces/14.jpg" alt="">
                                    </div>
                                    <div>
                                        <h6 class="mb-1 fw-semibold">
                                            Umaga Nigel
                                        </h6>
                                        <p class="mb-1 text-muted contact-mail text-truncate">umaganigel89@gmail.com</p>
                                        <p class="fw-semibold fs-11 mb-0 text-primary">
                                            +1(555) 783 0213
                                        </p>
                                    </div>
                                </div>
                                <div>
                                    <i class="ri-heart-3-line fs-16 text-muted"></i>
                                </div>
                            </div>
                            <div class="d-flex align-items-center justify-content-center gap-2 contact-hover-buttons">
                                <button type="button" class="btn btn-sm btn-light contact-hover-btn">
                                    View Contact
                                </button>
                                <div class="dropdown contact-hover-dropdown">
                                    <button class="btn btn-sm btn-icon btn-light btn-wave" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="ri-more-2-fill"></i>
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#"><i class="ri-share-line me-2 align-middle d-inline-block"></i>Share</a></li>
                                        <li><a class="dropdown-item" href="#"><i class="ri-phone-line me-2 align-middle d-inline-block"></i>Call</a></li>
                                        <li><a class="dropdown-item" href="#"><i class="ri-chat-2-line me-2 align-middle d-inline-block"></i>Message</a></li>
                                        <li><a class="dropdown-item" href="#"><i class="ri-video-chat-line me-2 align-middle d-inline-block"></i>Video Call</a></li>
                                        <li><a class="dropdown-item" href="#"><i class="ri-delete-bin-5-line me-2 align-middle d-inline-block"></i>Delete</a></li>
                                        <li><a class="dropdown-item" href="#"><i class="ri ri-heart-3-line me-2 align-middle d-inline-block"></i>Favourite</a></li>
                                    </ul>
                                </div>
                                <button aria-label="button" class="btn btn-sm btn-icon btn-light contact-hover-dropdown1" type="button">
                                    <i class="ri-heart-3-fill text-danger"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-xl-6 col-lg-6 col-md-6 col-sm-12">
                    <div class="card custom-card">
                        <div class="card-body contact-action">
                            <div class="contact-overlay"></div>
                            <div class="d-flex align-items-top">
                                <div class="d-flex flex-fill flex-wrap gap-2">
                                    <div class="avatar avatar-xl avatar-rounded me-3">
                                        <img src="{{ asset('backend') }}/dist/assets/images/media/media-8.jpg" alt="">
                                    </div>
                                    <div>
                                        <h6 class="mb-1 fw-semibold">
                                            Json Taylor
                                        </h6>
                                        <p class="mb-1 text-muted contact-mail text-truncate">jsontaylor@gmail.com</p>
                                        <p class="fw-semibold fs-11 mb-0 text-primary">
                                            +1(555) 234 2452
                                        </p>
                                    </div>
                                </div>
                                <div>
                                    <i class="ri-heart-3-fill fs-16 text-danger"></i>
                                </div>
                            </div>
                            <div class="d-flex align-items-center justify-content-center gap-2 contact-hover-buttons">
                                <button type="button" class="btn btn-sm btn-light contact-hover-btn">
                                    View Contact
                                </button>
                                <div class="dropdown contact-hover-dropdown">
                                    <button class="btn btn-sm btn-icon btn-light btn-wave" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="ri-more-2-fill"></i>
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#"><i class="ri-share-line me-2 align-middle d-inline-block"></i>Share</a></li>
                                        <li><a class="dropdown-item" href="#"><i class="ri-phone-line me-2 align-middle d-inline-block"></i>Call</a></li>
                                        <li><a class="dropdown-item" href="#"><i class="ri-chat-2-line me-2 align-middle d-inline-block"></i>Message</a></li>
                                        <li><a class="dropdown-item" href="#"><i class="ri-video-chat-line me-2 align-middle d-inline-block"></i>Video Call</a></li>
                                        <li><a class="dropdown-item" href="#"><i class="ri-delete-bin-5-line me-2 align-middle d-inline-block"></i>Delete</a></li>
                                        <li><a class="dropdown-item" href="#"><i class="ri ri-heart-3-line me-2 align-middle d-inline-block"></i>Favourite</a></li>
                                    </ul>
                                </div>
                                <button aria-label="button" class="btn btn-sm btn-icon btn-light contact-hover-dropdown1" type="button">
                                    <i class="ri-heart-3-fill text-danger"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-xl-6 col-lg-6 col-md-6 col-sm-12">
                    <div class="card custom-card">
                        <div class="card-body contact-action">
                            <div class="contact-overlay"></div>
                            <div class="d-flex align-items-top">
                                <div class="d-flex flex-fill flex-wrap gap-2">
                                    <div class="avatar avatar-xl avatar-rounded me-3">
                                        <img src="{{ asset('backend') }}/dist/assets/images/faces/7.jpg" alt="">
                                    </div>
                                    <div>
                                        <h6 class="mb-1 fw-semibold">
                                            Karizma Tope
                                        </h6>
                                        <p class="mb-1 text-muted contact-mail text-truncate">Karizmatope@gmail.com</p>
                                        <p class="fw-semibold fs-11 mb-0 text-primary">
                                            +1(555) 890 2455
                                        </p>
                                    </div>
                                </div>
                                <div>
                                    <i class="ri-heart-3-line fs-16 text-muted"></i>
                                </div>
                            </div>
                            <div class="d-flex align-items-center justify-content-center gap-2 contact-hover-buttons">
                                <button type="button" class="btn btn-sm btn-light contact-hover-btn">
                                    View Contact
                                </button>
                                <div class="dropdown contact-hover-dropdown">
                                    <button class="btn btn-sm btn-icon btn-light btn-wave" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="ri-more-2-fill"></i>
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#"><i class="ri-share-line me-2 align-middle d-inline-block"></i>Share</a></li>
                                        <li><a class="dropdown-item" href="#"><i class="ri-phone-line me-2 align-middle d-inline-block"></i>Call</a></li>
                                        <li><a class="dropdown-item" href="#"><i class="ri-chat-2-line me-2 align-middle d-inline-block"></i>Message</a></li>
                                        <li><a class="dropdown-item" href="#"><i class="ri-video-chat-line me-2 align-middle d-inline-block"></i>Video Call</a></li>
                                        <li><a class="dropdown-item" href="#"><i class="ri-delete-bin-5-line me-2 align-middle d-inline-block"></i>Delete</a></li>
                                        <li><a class="dropdown-item" href="#"><i class="ri ri-heart-3-line me-2 align-middle d-inline-block"></i>Favourite</a></li>
                                    </ul>
                                </div>
                                <button aria-label="button" class="btn btn-sm btn-icon btn-light contact-hover-dropdown1" type="button">
                                    <i class="ri-heart-3-fill text-danger"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-xl-6 col-lg-6 col-md-6 col-sm-12">
                    <div class="card custom-card">
                        <div class="card-body contact-action">
                            <div class="contact-overlay"></div>
                            <div class="d-flex align-items-top">
                                <div class="d-flex flex-fill flex-wrap gap-2">
                                    <div class="avatar avatar-xl avatar-rounded me-3">
                                        <img src="{{ asset('backend') }}/dist/assets/images/media/media-34.jpg" alt="">
                                    </div>
                                    <div>
                                        <h6 class="mb-1 fw-semibold">
                                            Gahaskar Shaik
                                        </h6>
                                        <p class="mb-1 text-muted contact-mail text-truncate">gahaskarshaik@gmail.com</p>
                                        <p class="fw-semibold fs-11 mb-0 text-primary">
                                            +1(555) 982 7648
                                        </p>
                                    </div>
                                </div>
                                <div>
                                    <i class="ri-heart-3-line fs-16 text-muted"></i>
                                </div>
                            </div>
                            <div class="d-flex align-items-center justify-content-center gap-2 contact-hover-buttons">
                                <button type="button" class="btn btn-sm btn-light contact-hover-btn">
                                    View Contact
                                </button>
                                <div class="dropdown contact-hover-dropdown">
                                    <button class="btn btn-sm btn-icon btn-light btn-wave" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="ri-more-2-fill"></i>
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#"><i class="ri-share-line me-2 align-middle d-inline-block"></i>Share</a></li>
                                        <li><a class="dropdown-item" href="#"><i class="ri-phone-line me-2 align-middle d-inline-block"></i>Call</a></li>
                                        <li><a class="dropdown-item" href="#"><i class="ri-chat-2-line me-2 align-middle d-inline-block"></i>Message</a></li>
                                        <li><a class="dropdown-item" href="#"><i class="ri-video-chat-line me-2 align-middle d-inline-block"></i>Video Call</a></li>
                                        <li><a class="dropdown-item" href="#"><i class="ri-delete-bin-5-line me-2 align-middle d-inline-block"></i>Delete</a></li>
                                        <li><a class="dropdown-item" href="#"><i class="ri ri-heart-3-line me-2 align-middle d-inline-block"></i>Favourite</a></li>
                                    </ul>
                                </div>
                                <button aria-label="button" class="btn btn-sm btn-icon btn-light contact-hover-dropdown1" type="button">
                                    <i class="ri-heart-3-fill text-danger"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-xl-6 col-lg-6 col-md-6 col-sm-12">
                    <div class="card custom-card">
                        <div class="card-body contact-action">
                            <div class="contact-overlay"></div>
                            <div class="d-flex align-items-top">
                                <div class="d-flex flex-fill flex-wrap gap-2">
                                    <div class="avatar avatar-xl avatar-rounded me-3">
                                        <img src="{{ asset('backend') }}/dist/assets/images/media/media-21.jpg" alt="">
                                    </div>
                                    <div>
                                        <h6 class="mb-1 fw-semibold">
                                            Balvinder Singh
                                        </h6>
                                        <p class="mb-1 text-muted contact-mail text-truncate">balvindersingh@gmail.com</p>
                                        <p class="fw-semibold fs-11 mb-0 text-primary">
                                            +1(555) 002 1239
                                        </p>
                                    </div>
                                </div>
                                <div>
                                    <i class="ri-heart-3-line fs-16 text-muted"></i>
                                </div>
                            </div>
                            <div class="d-flex align-items-center justify-content-center gap-2 contact-hover-buttons">
                                <button type="button" class="btn btn-sm btn-light contact-hover-btn">
                                    View Contact
                                </button>
                                <div class="dropdown contact-hover-dropdown">
                                    <button class="btn btn-sm btn-icon btn-light btn-wave" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="ri-more-2-fill"></i>
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#"><i class="ri-share-line me-2 align-middle d-inline-block"></i>Share</a></li>
                                        <li><a class="dropdown-item" href="#"><i class="ri-phone-line me-2 align-middle d-inline-block"></i>Call</a></li>
                                        <li><a class="dropdown-item" href="#"><i class="ri-chat-2-line me-2 align-middle d-inline-block"></i>Message</a></li>
                                        <li><a class="dropdown-item" href="#"><i class="ri-video-chat-line me-2 align-middle d-inline-block"></i>Video Call</a></li>
                                        <li><a class="dropdown-item" href="#"><i class="ri-delete-bin-5-line me-2 align-middle d-inline-block"></i>Delete</a></li>
                                        <li><a class="dropdown-item" href="#"><i class="ri ri-heart-3-line me-2 align-middle d-inline-block"></i>Favourite</a></li>
                                    </ul>
                                </div>
                                <button aria-label="button" class="btn btn-sm btn-icon btn-light contact-hover-dropdown1" type="button">
                                    <i class="ri-heart-3-fill text-danger"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-xl-6 col-lg-6 col-md-6 col-sm-12">
                    <div class="card custom-card">
                        <div class="card-body contact-action">
                            <div class="contact-overlay"></div>
                            <div class="d-flex align-items-top">
                                <div class="d-flex flex-fill flex-wrap gap-2">
                                    <div class="avatar avatar-xl avatar-rounded me-3">
                                        <img src="{{ asset('backend') }}/dist/assets/images/faces/6.jpg" alt="">
                                    </div>
                                    <div>
                                        <h6 class="mb-1 fw-semibold">
                                            Ramika Missi
                                        </h6>
                                        <p class="mb-1 text-muted contact-mail text-truncate">ramikamissi@gmail.com</p>
                                        <p class="fw-semibold fs-11 mb-0 text-primary">
                                            +1(555) 982 4834
                                        </p>
                                    </div>
                                </div>
                                <div>
                                    <i class="ri-heart-3-line fs-16 text-muted"></i>
                                </div>
                            </div>
                            <div class="d-flex align-items-center justify-content-center gap-2 contact-hover-buttons">
                                <button type="button" class="btn btn-sm btn-light contact-hover-btn">
                                    View Contact
                                </button>
                                <div class="dropdown contact-hover-dropdown">
                                    <button class="btn btn-sm btn-icon btn-light btn-wave" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="ri-more-2-fill"></i>
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#"><i class="ri-share-line me-2 align-middle d-inline-block"></i>Share</a></li>
                                        <li><a class="dropdown-item" href="#"><i class="ri-phone-line me-2 align-middle d-inline-block"></i>Call</a></li>
                                        <li><a class="dropdown-item" href="#"><i class="ri-chat-2-line me-2 align-middle d-inline-block"></i>Message</a></li>
                                        <li><a class="dropdown-item" href="#"><i class="ri-video-chat-line me-2 align-middle d-inline-block"></i>Video Call</a></li>
                                        <li><a class="dropdown-item" href="#"><i class="ri-delete-bin-5-line me-2 align-middle d-inline-block"></i>Delete</a></li>
                                        <li><a class="dropdown-item" href="#"><i class="ri ri-heart-3-line me-2 align-middle d-inline-block"></i>Favourite</a></li>
                                    </ul>
                                </div>
                                <button aria-label="button" class="btn btn-sm btn-icon btn-light contact-hover-dropdown1" type="button">
                                    <i class="ri-heart-3-fill text-danger"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <nav aria-label="Page navigation">
                    <ul class="pagination justify-content-end">
                        <li class="page-item disabled"><a class="page-link" href="#">Previous</a></li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">Next</a></li>
                    </ul>
                </nav>
            </div>
            <!--End::row-1 -->

        </div>
    </div>
    <!-- End::app-content -->

    <div class="modal fade" id="searchModal" tabindex="-1" aria-labelledby="searchModal" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-body">
              <div class="input-group">
                <a href="javascript:void(0);" class="input-group-text" id="Search-Grid"><i class="fe fe-search header-link-icon fs-18"></i></a>
                <input type="search" class="form-control border-0 px-2" placeholder="Search" aria-label="Username">
                <a href="javascript:void(0);" class="input-group-text" id="voice-search"><i class="fe fe-mic header-link-icon"></i></a>
                <a href="javascript:void(0);" class="btn btn-light btn-icon" data-bs-toggle="dropdown" aria-expanded="false">
                  <i class="fe fe-more-vertical"></i>
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">Separated link</a></li>
                </ul>
              </div>
              <div class="mt-4">
                <p class="font-weight-semibold text-muted mb-2">Are You Looking For...</p>
                <span class="search-tags"><i class="fe fe-user me-2"></i>People<a href="javascript:void(0)" class="tag-addon"><i class="fe fe-x"></i></a></span>
                <span class="search-tags"><i class="fe fe-file-text me-2"></i>Pages<a href="javascript:void(0)" class="tag-addon"><i class="fe fe-x"></i></a></span>
                <span class="search-tags"><i class="fe fe-align-left me-2"></i>Articles<a href="javascript:void(0)" class="tag-addon"><i class="fe fe-x"></i></a></span>
                <span class="search-tags"><i class="fe fe-server me-2"></i>Tags<a href="javascript:void(0)" class="tag-addon"><i class="fe fe-x"></i></a></span>
              </div>
              <div class="my-4">
                <p class="font-weight-semibold text-muted mb-2">Recent Search :</p>
                <div class="p-2 border br-5 d-flex align-items-center text-muted mb-2 alert">
                  <a href="notifications.html"><span>Notifications</span></a>
                  <a class="ms-auto lh-1" href="javascript:void(0);" data-bs-dismiss="alert" aria-label="Close"><i class="fe fe-x text-muted"></i></a>
                </div>
                <div class="p-2 border br-5 d-flex align-items-center text-muted mb-2 alert">
                  <a href="alerts.html"><span>Alerts</span></a>
                  <a class="ms-auto lh-1" href="javascript:void(0);" data-bs-dismiss="alert" aria-label="Close"><i class="fe fe-x text-muted"></i></a>
                </div>
                <div class="p-2 border br-5 d-flex align-items-center text-muted mb-0 alert">
                  <a href="mail.html"><span>Mail</span></a>
                  <a class="ms-auto lh-1" href="javascript:void(0);" data-bs-dismiss="alert" aria-label="Close"><i class="fe fe-x text-muted"></i></a>
                </div>
              </div>
            </div>
            <div class="modal-footer">
              <div class="btn-group ms-auto">
                <button class="btn btn-sm btn-primary-light">Search</button>
                <button class="btn btn-sm btn-primary">Clear Recents</button>
              </div>
            </div>
          </div>
        </div>
    </div>
    <!-- Start Switcher -->
    <div class="offcanvas offcanvas-end" tabindex="-1" id="sidebar-right" aria-labelledby="offcanvasRightLabel2">
        <div class="offcanvas-header border-bottom bg-primary text-fixed-white">
            <h6 class="offcanvas-title d-inline-flex text-fixed-white" id="offcanvasRightLabel2">
                <span class=" me-2 d-inline-flex">
                    <i class="fe fe-bell my-auto"></i> <span class=" pulse w-9 h-9 bg-success rounded-circle"></span>
                </span>
                Notifications
            </h6>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body p-0">
            <nav class="nav nav-tabs nav-justified" role="tablist">
                <button class="nav-link active" id="sidebar-side1" data-bs-toggle="tab" data-bs-target="#sidebar-slidepane-1"
                    type="button" role="tab" aria-controls="sidebar-slidepane-1" aria-selected="true"><i class="d-inline-flex fe fe-settings me-1"></i> Feeds</button>
                <button class="nav-link" id="sidebar-side2" data-bs-toggle="tab" data-bs-target="#sidebar-slidepane-2"
                    type="button" role="tab" aria-controls="sidebar-slidepane-2" aria-selected="false"><i class="d-inline-flex fe fe-message-circle me-1"></i>Chat</button>
                <button class="nav-link" id="sidebar-side3" data-bs-toggle="tab" data-bs-target="#sidebar-slidepane-3"
                    type="button" role="tab" aria-controls="sidebar-slidepane-3" aria-selected="false"><i class="d-inline-flex fe fe-anchor me-1"></i>Timeline</button>
            </nav>
            <div class="tab-content">
                <div class="tab-pane fade show active border-0 p-0" id="sidebar-slidepane-1" role="tabpanel" aria-labelledby="sidebar-side1" tabindex="0">
                    <div class="p-3 fw-semibold">Feeds</div>
                    <div class="py-3 px-4 pt-0">
                        <div class="row mb-3">
                            <div class="col-sm-2 mb-sm-0 mb-3">
                                <span class="feeds avatar avatar-sm avatar-rounded bg-primary-transparent"><i class="fe fe-user text-primary"></i></span>
                            </div>
                            <div class="col-sm-10 ps-sm-0 my-auto">
                                <div class="d-flex align-items-end justify-content-between ms-2">
                                    <h6 class="mb-0 fw-normal fs-14">New user registered</h6>
                                    <div>
                                        <a aria-label="anchor" href="javascript:void(0)" class="text-primary"><i class="fe fe-settings me-1"></i></a>
                                        <a aria-label="anchor" href="javascript:void(0)" class="text-primary"><i class="fe fe-x"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-sm-2 mb-sm-0 mb-3">
                                <span class="feeds avatar avatar-sm avatar-rounded bg-secondary-transparent"><i class="fe fe-shopping-cart text-secondary"></i></span>
                            </div>
                            <div class="col-sm-10 ps-sm-0 my-auto">
                                <div class="d-flex align-items-end justify-content-between ms-2">
                                    <h6 class="mb-0 fw-normal fs-14">New order delivered</h6>
                                    <div>
                                        <a aria-label="anchor" href="javascript:void(0)" class="text-primary"><i class="fe fe-settings me-1"></i></a>
                                        <a aria-label="anchor" href="javascript:void(0)" class="text-primary"><i class="fe fe-x"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-sm-2 mb-sm-0 mb-3">
                                <span class="feeds avatar avatar-sm avatar-rounded bg-danger-transparent"><i class="fe fe-bell text-danger"></i></span>
                            </div>
                            <div class="col-sm-10 ps-sm-0 my-auto">
                                <div class="d-flex align-items-end justify-content-between ms-2">
                                    <h6 class="mb-0 fw-normal fs-14">You have pending tasks</h6>
                                    <div>
                                        <a aria-label="anchor" href="javascript:void(0)" class="text-primary"><i class="fe fe-settings me-1"></i></a>
                                        <a aria-label="anchor" href="javascript:void(0)" class="text-primary"><i class="fe fe-x"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-sm-2 mb-sm-0 mb-3">
                                <span class="feeds avatar avatar-sm avatar-rounded bg-warning-transparent"><i class="fe fe-gitlab text-warning"></i></span>
                            </div>
                            <div class="col-sm-10 ps-sm-0 my-auto">
                                <div class="d-flex align-items-end justify-content-between ms-2">
                                    <h6 class="mb-0 fw-normal fs-14">New version arrived</h6>
                                    <div>
                                        <a aria-label="anchor" href="javascript:void(0)" class="text-primary"><i class="fe fe-settings me-1"></i></a>
                                        <a aria-label="anchor" href="javascript:void(0)" class="text-primary"><i class="fe fe-x"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-sm-2 mb-sm-0 mb-3">
                                <span class="feeds avatar avatar-sm avatar-rounded bg-pink-transparent"><i class="fe fe-database text-pink"></i></span>
                            </div>
                            <div class="col-sm-10 ps-sm-0 my-auto">
                                <div class="d-flex align-items-end justify-content-between ms-2">
                                    <h6 class="mb-0 fw-normal fs-14">Server #1 overloaded</h6>
                                    <div>
                                        <a aria-label="anchor" href="javascript:void(0)" class="text-primary"><i class="fe fe-settings me-1"></i></a>
                                        <a aria-label="anchor" href="javascript:void(0)" class="text-primary"><i class="fe fe-x"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-2 mb-sm-0 mb-3">
                                <span class="feeds avatar avatar-sm avatar-rounded bg-info-transparent"><i class="fe fe-check-circle text-info"></i></span>
                            </div>
                            <div class="col-sm-10 ps-sm-0 my-auto">
                                <div class="d-flex align-items-end justify-content-between ms-2">
                                    <h6 class="mb-0 fw-normal fs-14">New project launched</h6>
                                    <div>
                                        <a aria-label="anchor" href="javascript:void(0)" class="text-primary"><i class="fe fe-settings me-1"></i></a>
                                        <a aria-label="anchor" href="javascript:void(0)" class="text-primary"><i class="fe fe-x"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="p-3 fw-semibold">Settings</div>
                    <div class="py-3 px-4 pt-0">
                        <div class="row mb-3">
                            <div class="col-sm-2 mb-sm-0 mb-3">
                                <span class="feeds avatar avatar-sm avatar-rounded bg-primary-transparent"><i class="fe fe-settings text-primary"></i></span>
                            </div>
                            <div class="col-sm-10 ps-sm-0 my-auto">
                                <div class="d-flex align-items-end justify-content-between ms-2">
                                    <h6 class="mb-0 fw-normal fs-14">General Settings</h6>
                                    <div>
                                        <a aria-label="anchor" href="javascript:void(0)" class="text-primary"><i class="fe fe-settings"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-sm-2 mb-sm-0 mb-3">
                                <span class="feeds avatar avatar-sm avatar-rounded bg-secondary-transparent"><i class="fe fe-map-pin text-secondary"></i></span>
                            </div>
                            <div class="col-sm-10 ps-sm-0 my-auto">
                                <div class="d-flex align-items-end justify-content-between ms-2">
                                    <h6 class="mb-0 fw-normal fs-14">Map Settings</h6>
                                    <div>
                                        <a aria-label="anchor" href="javascript:void(0)" class="text-primary"><i class="fe fe-settings"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-sm-2 mb-sm-0 mb-3">
                                <span class="feeds avatar avatar-sm avatar-rounded bg-danger-transparent"><i class="fe fe-headphones text-danger"></i></span>
                            </div>
                            <div class="col-sm-10 ps-sm-0 my-auto">
                                <div class="d-flex align-items-end justify-content-between ms-2">
                                    <h6 class="mb-0 fw-normal fs-14">Support Settings</h6>
                                    <div>
                                        <a aria-label="anchor" href="javascript:void(0)" class="text-primary"><i class="fe fe-settings"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-sm-2 mb-sm-0 mb-3">
                                <span class="feeds avatar avatar-sm avatar-rounded bg-warning-transparent"><i class="fe fe-credit-card text-warning"></i></span>
                            </div>
                            <div class="col-sm-10 ps-sm-0 my-auto">
                                <div class="d-flex align-items-end justify-content-between ms-2">
                                    <h6 class="mb-0 fw-normal fs-14">Payment  Settings</h6>
                                    <div>
                                        <a aria-label="anchor" href="javascript:void(0)" class="text-primary"><i class="fe fe-settings"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-2 mb-sm-0 mb-3">
                                <span class="feeds avatar avatar-sm avatar-rounded bg-pink-transparent"><i class="fe fe-bell text-pink"></i></span>
                            </div>
                            <div class="col-sm-10 ps-sm-0 my-auto">
                                <div class="d-flex align-items-end justify-content-between ms-2">
                                    <h6 class="mb-0 fw-normal fs-14">Notification Settings</h6>
                                    <div>
                                        <a aria-label="anchor" href="javascript:void(0)" class="text-primary"><i class="fe fe-settings"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade border-0 p-0" id="sidebar-slidepane-2" role="tabpanel" aria-labelledby="sidebar-side2" tabindex="0">
                    <div class="p-3 fw-semibold">Today</div>
                    <div class="d-flex align-items-center py-3 px-3 pt-0">
                        <div class="me-2">
                            <span class="avatar avatar-md avatar-rounded cover-image"  data-bs-image-src="{{ asset('backend') }}/dist/assets/images/faces/2.jpg"></span>
                        </div>
                        <div class="">
                            <a href="chat.html">
                                <div class="fw-semibold text-dark" >Addie Minstra</div>
                                <p class="mb-0 fs-12 text-muted"> Hey! there I' am available.... </p>
                            </a>
                        </div>
                    </div>
                    <div class="d-flex align-items-center py-3 px-3 pt-0">
                        <div class="me-2">
                            <span class="avatar avatar-md online avatar-rounded cover-image"  data-bs-image-src="{{ asset('backend') }}/dist/assets/images/faces/11.jpg"></span>
                        </div>
                        <div class="">
                            <a href="chat.html">
                                <div class="fw-semibold text-dark">Rose Bush</div>
                                <p class="mb-0 fs-12 text-muted"> Okay...I will be waiting for you </p>
                            </a>
                        </div>
                    </div>
                    <div class="d-flex align-items-center py-3 px-3 pt-0">
                        <div class="me-2">
                            <span class="avatar avatar-md avatar-rounded cover-image"  data-bs-image-src="{{ asset('backend') }}/dist/assets/images/faces/10.jpg"></span>
                        </div>
                        <div class="">
                            <a href="chat.html">
                                <div class="fw-semibold text-dark">Claude Strophobia</div>
                                <p class="mb-0 fs-12 text-muted"> Hi we can explain our new project......</p>
                            </a>
                        </div>
                    </div>
                    <div class="d-flex align-items-center py-3 px-3 pt-0">
                        <div class="me-2">
                            <span class="avatar avatar-md avatar-rounded cover-image"  data-bs-image-src="{{ asset('backend') }}/dist/assets/images/faces/13.jpg"></span>
                        </div>
                        <div class="">
                            <a href="chat.html">
                                <div class="fw-semibold text-dark">Eileen Dover</div>
                                <p class="mb-0 fs-12 text-muted"> New product Launching...</p>
                            </a>
                        </div>
                    </div>
                    <div class="d-flex align-items-center py-3 px-3 pt-0">
                        <div class="me-2">
                            <span class="avatar avatar-md online avatar-rounded cover-image"  data-bs-image-src="{{ asset('backend') }}/dist/assets/images/faces/12.jpg"></span>
                        </div>
                        <div class="">
                            <a href="chat.html">
                                <div class="fw-semibold text-dark">Willie Findit</div>
                                <p class="mb-0 fs-12 text-muted"> Okay...I will be waiting for you </p>
                            </a>
                        </div>
                    </div>
                    <div class="d-flex align-items-center py-3 px-3 pt-0">
                        <div class="me-2">
                            <span class="avatar avatar-md avatar-rounded cover-image"  data-bs-image-src="{{ asset('backend') }}/dist/assets/images/faces/15.jpg"></span>
                        </div>
                        <div class="">
                            <a href="chat.html">
                                <div class="fw-semibold text-dark">Manny Jah</div>
                                <p class="mb-0 fs-12 text-muted">  Hi we can explain our new project......</p>
                            </a>
                        </div>
                    </div>
                    <div class="d-flex align-items-center py-0 px-3">
                        <div class="me-2">
                            <span class="avatar avatar-md avatar-rounded cover-image"  data-bs-image-src="{{ asset('backend') }}/dist/assets/images/faces/4.jpg"></span>
                        </div>
                        <div class="">
                            <a href="chat.html">
                                <div class="fw-semibold text-dark">Cherry Blossom</div>
                                <p class="mb-0 fs-12 text-muted"> Hey! there I' am available....</p>
                            </a>
                        </div>
                    </div>
                    <div class="p-3 fw-semibold">Yesterday</div>
                    <div class="d-flex align-items-center py-3 px-3 pt-0">
                        <div class="me-2">
                            <span class="avatar avatar-md online avatar-rounded cover-image"  data-bs-image-src="{{ asset('backend') }}/dist/assets/images/faces/7.jpg"></span>
                        </div>
                        <div class="">
                            <a href="chat.html">
                                <div class="fw-semibold text-dark">Simon Sais</div>
                                <p class="mb-0 fs-12 text-muted">Schedule Realease...... </p>
                            </a>
                        </div>
                    </div>
                    <div class="d-flex align-items-center py-3 px-3 pt-0">
                        <div class="me-2">
                            <span class="avatar avatar-md avatar-rounded cover-image"  data-bs-image-src="{{ asset('backend') }}/dist/assets/images/faces/9.jpg"></span>
                        </div>
                        <div class="">
                            <a href="chat.html">
                                <div class="fw-semibold text-dark">Laura Biding</div>
                                <p class="mb-0 fs-12 text-muted">Hi we can explain our new project...... </p>
                            </a>
                        </div>
                    </div>
                    <div class="d-flex align-items-center py-3 px-3 pt-0">
                        <div class="me-2">
                            <span class="avatar avatar-md online avatar-rounded cover-image"  data-bs-image-src="{{ asset('backend') }}/dist/assets/images/faces/2.jpg"></span>
                        </div>
                        <div class="">
                            <a href="chat.html">
                                <div class="fw-semibold text-dark">Addie Minstra</div>
                                <p class="mb-0 fs-12 text-muted">Contact me for details....</p>
                            </a>
                        </div>
                    </div>
                    <div class="d-flex align-items-center py-3 px-3 pt-0">
                        <div class="me-2">
                            <span class="avatar avatar-md avatar-rounded cover-image"  data-bs-image-src="{{ asset('backend') }}/dist/assets/images/faces/9.jpg"></span>
                        </div>
                        <div class="">
                            <a href="chat.html">
                                <div class="fw-semibold text-dark">Ivan Notheridiya</div>
                                <p class="mb-0 fs-12 text-muted">Hi we can explain our new project......</p>
                            </a>
                        </div>
                    </div>
                    <div class="d-flex align-items-center py-3 px-3 pt-0">
                        <div class="me-2">
                            <span class="avatar avatar-md avatar-rounded cover-image"  data-bs-image-src="{{ asset('backend') }}/dist/assets/images/faces/14.jpg"></span>
                        </div>
                        <div class="">
                            <a href="chat.html">
                                <div class="fw-semibold text-dark">Dulcie Veeta</div>
                                <p class="mb-0 fs-12 text-muted"> Okay...I will be waiting for you</p>
                            </a>
                        </div>
                    </div>
                    <div class="d-flex align-items-center py-3 px-3 pt-0">
                        <div class="me-2">
                            <span class="avatar avatar-md avatar-rounded cover-image"  data-bs-image-src="{{ asset('backend') }}/dist/assets/images/faces/11.jpg"></span>
                        </div>
                        <div class="">
                            <a href="chat.html">
                                <div class="fw-semibold text-dark">Florinda Carasco</div>
                                <p class="mb-0 fs-12 text-muted">New product Launching...</p>
                            </a>
                        </div>
                    </div>
                    <div class="d-flex align-items-center py-3 px-3 pt-0">
                        <div class="me-2">
                            <span class="avatar avatar-md online avatar-rounded cover-image"  data-bs-image-src="{{ asset('backend') }}/dist/assets/images/faces/11.jpg"></span>
                        </div>
                        <div class="">
                            <a href="chat.html">
                                <div class="fw-semibold text-dark">Cherry Blossom</div>
                                <p class="mb-0 fs-12 text-muted">cherryblossom@gmail.com</p>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade border-0 p-3" id="sidebar-slidepane-3" role="tabpanel" aria-labelledby="sidebar-side3" tabindex="0">
                    <ul class="task-list timeline-task">
                        <li class="d-sm-flex">
                            <div>
                                <i class="task-icon1"></i>
                                <h6 class="fw-semibold fs-14">Task Finished<span
                                        class="text-muted fs-11 mx-2 fw-normal">09 July 2021</span></h6>
                                <p class="text-muted fs-12 mb-0">Adam Berry finished task on<a href="javascript:void(0)" class="fw-semibold text-primary"> Project Management</a></p>
                            </div>
                            <div class="ms-auto d-md-flex task-icon-link">
                                <a aria-label="anchor" href="javascript:void(0)" class="text-muted me-2"><i class="fe fe-edit"></i></a>
                                <a aria-label="anchor" href="javascript:void(0)" class="text-muted"><i class="fe fe-trash-2 fs-12"></i></a>
                            </div>
                        </li>
                        <li class="d-sm-flex">
                            <div>
                                <i class="task-icon1"></i>
                                <h6 class="fw-semibold fs-14">New Comment<span
                                        class="text-muted fs-11 mx-2 fw-normal">05 July 2021</span></h6>
                                <p class="text-muted fs-12 mb-0">Victoria commented on Project <a href="javascript:void(0)"
                                        class="fw-semibold text-primary"> AngularJS Template</a></p>
                            </div>
                            <div class="ms-auto d-md-flex task-icon-link">
                                <a aria-label="anchor" href="javascript:void(0)" class="text-muted me-2"><i class="fe fe-edit"></i></a>
                                <a aria-label="anchor" href="javascript:void(0)" class="text-muted"><i class="fe fe-trash-2 fs-12"></i></a>
                            </div>
                        </li>
                        <li class="d-sm-flex">
                            <div>
                                <i class="task-icon1"></i>
                                <h6 class="fw-semibold fs-14">New Comment<span
                                        class="text-muted fs-11 mx-2 fw-normal">25 June 2021</span></h6>
                                <p class="text-muted fs-12 mb-0">Victoria commented on Project <a href="javascript:void(0)"
                                        class="fw-semibold text-primary"> AngularJS Template</a></p>
                            </div>
                            <div class="ms-auto d-md-flex task-icon-link">
                                <a aria-label="anchor" href="javascript:void(0)" class="text-muted me-2"><i class="fe fe-edit"></i></a>
                                <a aria-label="anchor" href="javascript:void(0)" class="text-muted"><i class="fe fe-trash-2 fs-12"></i></a>
                            </div>
                        </li>
                        <li class="d-sm-flex">
                            <div>
                                <i class="task-icon1"></i>
                                <h6 class="fw-semibold fs-14">Task Overdue<span
                                        class="text-muted fs-11 mx-2 fw-normal">14 June 2021</span></h6>
                                <p class="text-muted mb-0 fs-12">Petey Cruiser finished task <a href="javascript:void(0)"
                                        class="fw-semibold text-primary"> Integrated management</a></p>
                            </div>
                            <div class="ms-auto d-md-flex task-icon-link">
                                <a aria-label="anchor" href="javascript:void(0)" class="text-muted me-2"><i class="fe fe-edit"></i></a>
                                <a aria-label="anchor" href="javascript:void(0)" class="text-muted"><i class="fe fe-trash-2 fs-12"></i></a>
                            </div>
                        </li>
                        <li class="d-sm-flex">
                            <div>
                                <i class="task-icon1"></i>
                                <h6 class="fw-semibold fs-14">Task Overdue<span
                                        class="text-muted fs-11 mx-2 fw-normal">29 June 2021</span></h6>
                                <p class="text-muted mb-0 fs-12">Petey Cruiser finished task <a href="javascript:void(0)"
                                        class="fw-semibold text-primary"> Integrated management</a></p>
                            </div>
                            <div class="ms-auto d-md-flex task-icon-link">
                                <a aria-label="anchor" href="javascript:void(0)" class="text-muted me-2"><i class="fe fe-edit"></i></a>
                                <a aria-label="anchor" href="javascript:void(0)" class="text-muted"><i class="fe fe-trash-2 fs-12"></i></a>
                            </div>
                        </li>
                        <li class="d-sm-flex">
                            <div>
                                <i class="task-icon1"></i>
                                <h6 class="fw-semibold fs-14">Task Finished<span
                                        class="text-muted fs-11 mx-2 fw-normal">09 July 2021</span></h6>
                                <p class="text-muted fs-12 mb-0">Adam Berry finished task on<a href="javascript:void(0)"
                                        class="fw-semibold text-primary"> Project Management</a></p>
                            </div>
                            <div class="ms-auto d-md-flex task-icon-link">
                                <a aria-label="anchor" href="javascript:void(0)" class="text-muted me-2"><i class="fe fe-edit"></i></a>
                                <a aria-label="anchor" href="javascript:void(0)" class="text-muted"><i class="fe fe-trash-2 fs-12"></i></a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Switcher -->


    <!-- Footer Start -->
    <footer class="footer mt-auto py-3 text-center">
        <div class="container">
            <span class=""> Copyright © <span id="year"></span> <a
                    href="javascript:void(0);" class="text-primary">Sash</a>.
                Designed with <span class="bi bi-heart-fill text-danger"></span> by <a href="javascript:void(0);">
                    <span class="text-primary">Spruko</span>
                </a> All
                rights
                reserved
            </span>
        </div>
    </footer>
    <!-- Footer End -->

</div>
@endsection
