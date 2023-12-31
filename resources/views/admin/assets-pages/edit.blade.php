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
                        <li class="breadcrumb-item active" aria-current="page">Edit</li>
                    </ol>
                </div>
            </div>
            <!-- PAGE-HEADER END -->

            {{-- Start Input --}}
            <div class="col-xl-12">
                <div class="card custom-card">
                    <div class="card-header justify-content-between">
                        <div class="card-title">
                            Edit Assets
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
                            <form action="{{ route('assets.update', $assets->id) }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PUT')

                                <div class="row">
                                    <div class="col-md-12">
                                        <label for="theme_id" class="form-label">Select Theme</label>
                                        <select class="form-control" id="theme_id" name="theme_id" required>
                                            <option value="" selected disabled>Select Theme</option>
                                            @foreach ($themes as $theme)
                                                <option value="{{ $theme->id }}"
                                                    {{ $assets->theme_id == $theme->id ? 'selected' : '' }}>
                                                    {{ $theme->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="row g-2">
                                    <div class="col-sm-6">
                                        <label for="assets_img" class="form-label">Background Image</label>
                                        <input type="file" class="form-control" id="assets_img" name="assets_img"
                                            placeholder="Background Image" onchange="previewImage(event)">
                                    </div>
                                    <div class="col-sm-6">
                                        @if ($assets->assets_img)
                                            <img id="image_preview"
                                                src="{{ asset('uploads/assets/' . $assets->assets_img) }}"
                                                class="img-fluid rounded mt-2" alt="Current Image"
                                                style="max-width: 250px; max-height: 200px;">
                                        @else
                                            <img id="image_preview"
                                                src="{{ asset('backend') }}/dist/assets/images/media/media-49.jpg"
                                                class="img-fluid rounded mt-2" alt="Preview"
                                                style="max-width: 250px; max-height: 200px;">
                                        @endif
                                    </div>
                                </div>

                                <button type="submit" class="btn btn-primary">Update</button>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
            {{-- End Input --}}
            <!-- End::app-content -->

        </div>
    </div>

    {{-- Preview Image JS START --}}
    <script>
        function previewImage(event) {
            var reader = new FileReader();
            reader.onload = function() {
                var imgElement = document.getElementById('image_preview');
                imgElement.src = reader.result;
                imgElement.style.display = 'block';
            };
            reader.readAsDataURL(event.target.files[0]);
        }
    </script>
    {{-- Preview Image JS END --}}

@endsection
