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
                            Create Assets
                        </div>
                    </div>
                    @if ($errors->any())
                        <div class="alert alert-solid-danger alert-dismissible fade show">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"><i
                                    class="bi bi-x"></i></button>
                        </div>
                    @endif
                    <div class="card-body">
                        <div class="col">
                            <form action="{{ route('assets.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf

                                <div class="row">
                                    <div class="col-md-12">
                                        <label for="theme_id" class="form-label">Select Theme</label>
                                        <select class="form-control" id="theme_id" name="theme_id" required>
                                            <option value="" selected disabled>Select Theme</option>
                                            @foreach ($themes as $theme)
                                                <option value="{{ $theme->id }}">{{ $theme->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="row g-2">
                                    <div class="col-sm-6">
                                        <label for="assets_img" class="form-label">Assets Image</label>
                                        <input type="file" id="assets_img" name="assets_img[]" class="form-control"
                                            multiple required>
                                    </div>
                                </div>

                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- End Input --}}
    <!-- End::app-content -->

    {{-- Preview Image JS START --}}
    {{-- <script>
        document.addEventListener('DOMContentLoaded', function() {
            FilePond.registerPlugin(
                FilePondPluginImagePreview
            );

            const inputElement = document.getElementById('assets_img');
            const pond = FilePond.create(inputElement, {
                allowMultiple: true,
                imagePreviewHeight: 150 // Sesuaikan dengan ukuran yang diinginkan untuk tampilan pratinjau
                // ...konfigurasi lainnya
            });
        });
    </script> --}}
    {{-- Preview Image JS END --}}

@endsection
