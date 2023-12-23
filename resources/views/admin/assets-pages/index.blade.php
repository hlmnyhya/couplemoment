@extends('admin.admin_dashboard')

@section('content')
    <div class="main-content app-content">
        <div class="container-fluid">

            <!-- PAGE-HEADER -->
            <div class="page-header">
                <h1 class="page-title my-auto">Assets</h1>
                <div>
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item">
                            <a href="javascript:void(0)">Assets</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Assets</li>
                    </ol>
                </div>
            </div>
            <!-- PAGE-HEADER END -->

            @if (session('success'))
                <div class="alert alert-solid-success alert-dismissible fade show">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"><i
                            class="bi bi-x"></i></button>
                </div>
            @endif

            {{-- Start Table --}}
            <div class="col-xl-12">
                <div class="card custom-card">
                    <div class="card-header justify-content-between">
                        <div class="card-title">
                            Data Assets
                        </div>
                        <div class="search-button" style="margin-left: 520px;">
                            <form id="searchForm" action="{{ route('assets.search') }}" method="GET">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search by Theme Name"
                                        name="theme_name" id="searchInput">
                                    <button class="btn btn-outline-secondary" type="submit"
                                        style="display: none;">Search</button>
                                </div>
                            </form>
                        </div>
                        <div class="prism-toggle">
                            <a href="{{ route('assets.create') }}" class="btn btn-sm btn-primary-light">Add
                                Assets
                                <i class="ri-soundcloud-line"></i>
                            </a>
                        </div>
                    </div>
                    {{-- <div class="card-body">
                     
                    </div> --}}
                </div>
            </div>
            {{-- End Table --}}

            <!-- Start:: row- -->
            <div class="row">
                @foreach ($assets as $asset)
                    <div class="col-xl-4">
                        <div class="card custom-card">
                            <div class="card-header">
                                <div class="card-title">
                                    Theme Name : {{ $asset->theme->name }}
                                </div>
                                <div class="dropdown ms-2 position-absolute top-50 end-0 translate-middle-y">
                                    <button aria-label="button" type="button"
                                        class="btn btn-icon btn-light btn-wave waves-light" data-bs-toggle="dropdown"
                                        aria-expanded="false">
                                        <i class="ti ti-dots-vertical"></i>
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="{{ route('assets.edit', $asset->id) }}">Edit</a>
                                        </li>
                                        <form action="{{ route('assets.destroy', $asset->id) }}" method="POST"
                                            id="delete-form-{{ $asset->id }}">
                                            @csrf
                                            @method('DELETE')
                                            <li>
                                                <button type="button" class="dropdown-item"
                                                    onclick="confirmDelete({{ $asset->id }})">
                                                    Delete
                                                </button>
                                            </li>
                                        </form>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-body text-center">
                                <img style="max-width:100px; max-height:100px"
                                    src="{{ asset('uploads/assets/' . $asset->assets_img) }}">
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <!-- End:: row- -->


        </div>
    </div>
    <!-- End::app-content -->

    <script>
        function confirmDelete(themeId) {
            if (confirm("Are you sure you want to delete this theme?")) {
                document.getElementById('delete-form-' + themeId).submit();
            }
        }
    </script>
@endsection
