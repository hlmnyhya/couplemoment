@extends('admin.admin_dashboard')

@section('content')
    <!-- Start::app-content -->
    <div class="main-content app-content">
        <div class="container-fluid">
            <!-- PAGE-HEADER -->
            <div class="page-header">
                <h1 class="page-title my-auto">Detail Gallery</h1>
                <div>
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item">
                            <a href="javascript:void(0)">Gallery</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Detail Gallery</li>
                    </ol>
                </div>
            </div>
            <!-- PAGE-HEADER END -->

            <!-- Start::row-1 -->
            <div class="row">
                <div class="col-xl-12">
                    <div class="card custom-card">
                        <div class="card-header">
                            <div class="card-title">
                                Detail {{ $gallery->gallery_name }}
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="table" class="table table-bordered text-nowrap w-100">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Gallery Name</th>
                                            <th>filename</th>
                                            <th>filepath</th>
                                            <th>preview</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($gallery->photos as $photo)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $gallery->gallery_name }}</td>
                                                <td>{{ $photo->file_name }}</td>
                                                <td>{{ $photo->file_path }}</td>
                                                <td>
                                                    {{-- Display preview here --}}
                                                    <img src="{{ asset($photo->file_path) }}" alt="Preview" width="100px"
                                                        height="100px">
                                                </td>
                                                <td>
                                                    {{-- detail --}}
                                                    {{-- <a href="" class="btn btn-primary btn-sm justify-center">Detail</a> --}}
                                                    {{-- hapus --}}
                                                    <a id="delete" href="{{ route('photo.delete', $photo->id) }}"
                                                        class="btn btn-danger btn-sm justify-center">Delete</a>

                                                </td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td colspan="6" class="text-center">No Data Found</td>
                                            </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End::row-1 -->
        </div>
    </div>
    <!-- End::app-content -->
@endsection
