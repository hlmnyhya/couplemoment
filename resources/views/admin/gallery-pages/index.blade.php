@extends('admin.admin_dashboard')

@section('content')
<<<<<<< HEAD

<div class="main-content app-content">
    <div class="container-fluid">
        <!-- PAGE-HEADER -->
        <div class="page-header">
            <div class="d-flex justify-content-between align-items-center">
                <h1 class="page-title my-auto">Manage Gallery</h1>
            </div>
            <div>
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item">
                        <a href="javascript:void(0)">Gallery</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">List Gallery</li>
                </ol>
            </div>
        </div>
        <!-- PAGE-HEADER END -->

        <!-- Display Galleries and Images -->
        <div class="row row-sm">
            <div class="col-xl-12">
                <div class="card custom-card mt-4">
                    <div class="card-body">
                        <div class="contact-header">
                            <div class="d-sm-flex d-block align-items-center justify-content-between">
                                <div class="h5 fw-semibold mb-0">Gallery</div>
                                <div class="d-flex mt-sm-0 mt-2 align-items-center">
                                    <div class="input-group">
                                        <form action="{{ route('gallery.index') }}" method="GET" class="d-flex" id="searchForm">
                                            <input type="text" class="form-control bg-light border-0" name="search" placeholder="Search Gallery" aria-describedby="search-contact-member" value="{{ request('search') }}">
                                            <button class="btn btn-light" type="submit" id="search-contact-member">
                                                <i class="ri-search-line text-muted"></i>
                                            </button>
                                        </form>
                                    </div>
                                    <div class="dropdown ms-2">
                                        <button class="btn btn-icon btn-primary-light btn-wave" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="ti ti-dots-vertical"></i>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a  class="dropdown-item" href="{{route('gallery.delete-all')}}" id="delete">Delete All</a></li>
                                        </ul>
                                    </div>
                                    <a href="{{ route('gallery.create') }}" class="btn btn-icon btn-secondary-light ms-2" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Add Gallery"><i class="ri-add-line"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @forelse ($galleries as $gallery)
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-4 col-xxl-2">
                    <div class="card custom-card overflow-hidden">
                        @if ($gallery->photos->isNotEmpty())
                        <a href=" {{ route('gallery.show', $gallery->id) }}">
                                <img src="{{ asset($gallery->photos[0]->file_path) }}" alt="Gallery Image" class="file-manager-list w-100">
                            </a>
                            <div class="card-footer">
                                <div class="d-flex">
                                    <div class="">
                                        <h6 class="mb-0 fw-semibold text-break">{{ $gallery->gallery_name }}</h6>
                                    </div>
                                    <div class="ms-auto my-auto">
                                        <span class="text-muted mb-0">{{ $gallery->totalSize() }} KB</span>
                                    </div>
                                </div>
                            </div>
                        @else
                            <div class="card-body text-center">
                                <p class="text-muted mb-0">No images in this gallery</p>
                            </div>
                        @endif
                    </div>
                </div>
            @empty
                <div class="col-xl-12">
                    <div class="card custom-card mt-4">
                        <div class="card-body text-center">
                            <p class="text-muted mb-0">No galleries available</p>
                        </div>
                    </div>
                </div>
            @endforelse
        </div>
        <!-- End Display Galleries and Images -->
    </div>
</div>

=======
    <div class="main-content app-content">
        <div class="container-fluid">
            <!-- PAGE-HEADER -->
            <div class="page-header">
                <div class="d-flex justify-content-between align-items-center">
                    <h1 class="page-title my-auto">Manage Gallery</h1>
                </div>
                <div>
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item">
                            <a href="javascript:void(0)">Gallery</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">List Gallery</li>
                    </ol>
                </div>
            </div>
            <!-- PAGE-HEADER END -->

            <!-- Display Galleries and Images -->
            <div class="row row-sm">
                <div class="col-xl-12">
                    <div class="card custom-card mt-4">
                        <div class="card-body">
                            <div class="contact-header">
                                <div class="d-sm-flex d-block align-items-center justify-content-between">
                                    <div class="h5 fw-semibold mb-0">Gallery</div>
                                    <div class="d-flex mt-sm-0 mt-2 align-items-center">
                                        <div class="input-group">
                                            <form action="{{ route('gallery.index') }}" method="GET" class="d-flex"
                                                id="searchForm">
                                                <input type="text" class="form-control bg-light border-0" name="search"
                                                    placeholder="Search Gallery" aria-describedby="search-contact-member"
                                                    value="{{ request('search') }}">
                                                <button class="btn btn-light" type="submit" id="search-contact-member">
                                                    <i class="ri-search-line text-muted"></i>
                                                </button>
                                            </form>
                                        </div>
                                        <div class="dropdown ms-2">
                                            <button class="btn btn-icon btn-primary-light btn-wave" type="button"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="ti ti-dots-vertical"></i>
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="{{ route('gallery.delete-all') }}"
                                                        id="delete">Delete All</a></li>
                                            </ul>
                                        </div>
                                        <a href="{{ route('gallery.create') }}"
                                            class="btn btn-icon btn-secondary-light ms-2" data-bs-toggle="tooltip"
                                            data-bs-placement="top" data-bs-title="Add Gallery"><i
                                                class="ri-add-line"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @forelse ($galleries as $gallery)
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-4 col-xxl-2">
                        <div class="card custom-card overflow-hidden">
                            @if ($gallery->photos->isNotEmpty())
                                <a href=" {{ route('gallery.show', $gallery->id) }}">
                                    <img src="{{ asset($gallery->photos[0]->file_path) }}" alt="Gallery Image"
                                        class="file-manager-list w-100">
                                </a>
                                <div class="card-footer">
                                    <div class="d-flex">
                                        <div class="">
                                            <h6 class="mb-0 fw-semibold text-break">{{ $gallery->gallery_name }}</h6>
                                        </div>
                                        <div class="ms-auto my-auto">
                                            <span class="text-muted mb-0">{{ $gallery->totalSize() }} KB</span>
                                        </div>
                                    </div>
                                </div>
                            @else
                                <div class="card-body text-center">
                                    <p class="text-muted mb-0">No images in this gallery</p>
                                </div>
                            @endif
                        </div>
                    </div>
                @empty
                    <div class="col-xl-12">
                        <div class="card custom-card mt-4">
                            <div class="card-body text-center">
                                <p class="text-muted mb-0">No galleries available</p>
                            </div>
                        </div>
                    </div>
                @endforelse
            </div>
            <!-- End Display Galleries and Images -->
        </div>
    </div>
>>>>>>> 7fa8e2330ce2d1ca7174b041708d2cf92c2c11e9
@endsection
