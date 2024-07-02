@extends('admin.admin_dashboard')
<!-- Start::app-content -->
@section('content')
    <div class="main-content app-content">
        <div class="container-fluid">

            <!-- PAGE-HEADER -->
            <div class="page-header">
                <h1 class="page-title my-auto">SoundBank</h1>
                <div>
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item">
                            <a href="javascript:void(0)">SoundBank</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Create</li>
                    </ol>
                </div>
            </div>
            <!-- PAGE-HEADER END -->
            {{-- Start Input --}}
            <div class="col-xl-12">
                <div class="card custom-card">
                    <div class="card-header justify-content-between">
                        <div class="card-title">
                            SoundBank
                        </div>
                    </div>
                    @if ($errors->any())
                        <div class="alert alert-solid-danger alert-dismissible fade show">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"><i
                                    class="bi bi-x"></i></button>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"><i
                                    class="bi bi-x"></i></button>
                        </div>
                    @endif
                    <div class="card-body">
                        <div class="col">
                            <form action="{{ route('soundbank.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf

                                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-lg-12 mb-3">
                                    <label for="title" class="form-label">Title</label>
                                    <input type="text" class="form-control" id="title" name="title"
                                        placeholder="Title">
                                </div>

                                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-lg-12 mb-3">
                                    <label for="singer" class="form-label">Singer</label>
                                    <input type="text" class="form-control" id="singer" name="singer"
                                        placeholder="Singer">
                                </div>

                                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-lg-12 mb-3">
                                    <label for="formFile" class="form-label">Music</label>
                                    <input class="form-control" type="file" id="formFile" name="file_mp3">
                                </div>

                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>

                            {{-- End Input --}}
                        </div>
                    </div>
                </div>
            </div>
            <!-- End::app-content -->

        @endsection
