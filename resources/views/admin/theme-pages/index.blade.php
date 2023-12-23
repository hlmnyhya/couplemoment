@extends('admin.admin_dashboard')

@section('content')
    <div class="main-content app-content">
        <div class="container-fluid">

            <!-- PAGE-HEADER -->
            <div class="page-header">
                <h1 class="page-title my-auto">Theme</h1>
                <div>
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item">
                            <a href="javascript:void(0)">Theme</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Theme</li>
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
                            Data Theme
                        </div>
                        <div class="prism-toggle">
                            <a href="{{ route('theme.create') }}" class="btn btn-sm btn-primary-light">Add
                                Theme
                                <i class="ri-soundcloud-line"></i>
                            </a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="responsiveDataTable" class="table table-bordered text-nowrap w-100">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Background Image</th>
                                        <th>Name</th>
                                        <th>Code</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($themes as $theme)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>
                                                <img style="max-width:200px; max-height:200px"
                                                    src="{{ asset('' . $theme->background_img) }}">
                                            </td>
                                            <td>{{ $theme->name }}</td>
                                            <td>{{ $theme->code }}</td>
                                            <td>{{ $theme->status }}</td>
                                            <td>
                                                <div class="btn-group" role="group" aria-label="Theme Actions">
                                                    <a href="{{ route('theme.edit', $theme->id) }}"
                                                        class="btn btn-sm btn-primary">
                                                        <i class="ri-edit-2-line"></i>
                                                    </a> &nbsp;

                                                    <form action="{{ route('theme.destroy', $theme->id) }}" method="POST"
                                                        id="delete-form-{{ $theme->id }}">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="button" class="btn btn-sm btn-danger"
                                                            onclick="confirmDelete({{ $theme->id }})">
                                                            <i class="ri-delete-bin-line"></i>
                                                        </button>
                                                    </form>

                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            {{-- End Table --}}




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
