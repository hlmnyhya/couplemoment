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
                            Edit Theme
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
                            <form action="{{ route('theme.update', $theme->id) }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PUT')

                                <div class="row g-2">
                                    <div class="col-sm-6">
                                        <label for="cover" class="form-label">Cover</label>
                                        <input type="file" class="form-control" id="cover" name="cover"
                                            placeholder="Cover Image" onchange="previewImage_1(event)">
                                    </div>
                                    <div class="col-sm-6">
                                        @if ($theme->cover)
                                            <img id="image_preview_1" src="{{ asset($theme->cover) }}"
                                                class="img-fluid rounded mt-2" alt="Current Image"
                                                style="max-width: 250px; max-height: 200px;">
                                        @else
                                            <img id="image_preview_1"
                                                src="{{ asset('backend') }}/dist/assets/images/media/media-49.jpg"
                                                class="img-fluid rounded mt-2" alt="Preview"
                                                style="max-width: 250px; max-height: 200px;">
                                        @endif
                                    </div>
                                </div>

                                <div class="row g-2 mt-3">
                                    <div class="col-sm-6">
                                        <label for="background_img" class="form-label">Background Image</label>
                                        <input type="file" class="form-control" id="background_img" name="background_img"
                                            placeholder="Background Image" onchange="previewImage(event)">
                                    </div>
                                    <div class="col-sm-6">
                                        @if ($theme->background_img)
                                            <img id="image_preview" src="{{ asset($theme->background_img) }}"
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

                                <div class="row g-2 mt-3">
                                    <div class="col-sm-6">
                                        <label for="code" class="form-label">Code</label>
                                        <input type="text" class="form-control" id="code" name="code"
                                            placeholder="Code" value="{{ $theme->code }}" required>
                                    </div>
                                    <div class="col-sm-6">
                                        <label for="status" class="form-label">Status</label>
                                        <select class="form-select" id="status" name="status" required>
                                            <option value="0" {{ $theme->status == 0 ? 'selected' : '' }}>
                                                Free</option>
                                            <option value="1" {{ $theme->status == 1 ? 'selected' : '' }}>
                                                Membership</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-lg-12 mb-3">
                                    <label for="name" class="form-label">Name</label>
                                    <input type="text" class="form-control" id="name" name="name"
                                        placeholder="Name" value="{{ $theme->name }}" required>
                                </div>

                                <!-- Tampilkan kategori yang sudah dipilih sebelumnya -->
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-lg-12 mb-3">
                                    <label for="categories" class="form-label">Categories</label>
                                    <select class="form-control" name="categories[]" id="categories" multiple>
                                        @foreach ($categories as $category)
                                            <option value="{{ $category->id }}"
                                                @if (in_array($category->id, $selectedCategories)) selected @endif>{{ $category->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-lg-12 mb-3">
                                    <label for="color_palette" class="form-label">Color Palette</label>
                                    <select class="form-select" id="color_palette" name="color_palette" required>
                                        <option value="dark" {{ $theme->color_palette == 'dark' ? 'selected' : '' }}>
                                            Dark</option>
                                        <option value="light" {{ $theme->color_palette == 'light' ? 'selected' : '' }}>
                                            Light</option>
                                    </select>
                                </div>

                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-lg-12 mb-3">
                                    <label for="description" class="form-label">Description</label>
                                    <textarea class="form-control" id="description" name="description" placeholder="Description" required
                                        cols="30" rows="10">{{ $theme->description }}</textarea>
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
        function previewImage_1(event) {
            var reader = new FileReader();
            reader.onload = function() {
                var imgElement = document.getElementById('image_preview_1');
                imgElement.src = reader.result;
                imgElement.style.display = 'block';
            };
            reader.readAsDataURL(event.target.files[0]);
        }
    </script>
    {{-- Preview Image JS END --}}

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
