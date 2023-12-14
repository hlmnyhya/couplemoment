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
                            Create Theme
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
                            <form action="{{ route('theme.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf

                                <div class="row g-2">
                                    <div class="col-sm-6">
                                        <label for="background_img" class="form-label">Background Image</label>
                                        <input type="file" class="form-control" id="background_img" name="background_img"
                                            placeholder="Background Image" onchange="previewImage(event)" required>
                                    </div>
                                    <div class="col-sm-6">
                                        <img id="image_preview"
                                            src="{{ asset('backend') }}/dist/assets/images/media/media-49.jpg"
                                            class="img-fluid rounded" alt="Preview"
                                            style="max-width: 250px; max-height: 200px;">
                                    </div>
                                </div>

                                <div class="row g-2 mt-3">
                                    <div class="col-sm-6">
                                        <label for="code" class="form-label">Code</label>
                                        <input type="text" class="form-control" id="code" name="code"
                                            placeholder="Code" required>
                                    </div>
                                    <div class="col-sm-6">
                                        <label for="status" class="form-label">Status</label>
                                        <select class="form-select" id="status" name="status" required>
                                            <option value="0">Free</option>
                                            <option value="1">Membership</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-lg-12 mb-3">
                                    <label for="name" class="form-label">Name</label>
                                    <input type="text" class="form-control" id="name" name="name"
                                        placeholder="Name" required>
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
