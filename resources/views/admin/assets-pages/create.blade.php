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

                                <div class="row g-2">
                                    <div class="col-sm-6">
                                        <label for="theme_id" class="form-label">Theme</label>
                                        <select class="form-select" id="theme_id" name="theme_id" required>
                                            <option value="">Select Theme</option>
                                            @foreach ($themes as $theme)
                                                <option value="{{ $theme->id }}">{{ $theme->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-sm-6">
                                        <label for="code" class="form-label">Code</label>
                                        <input type="text" class="form-control" id="code" name="code" disabled>
                                    </div>
                                </div>

                                <div class="mb-3 mt-3">
                                    <img id="image_preview" src="{{ asset('theme') }}/media-49.jpg"
                                        class="img-fluid rounded" alt="Preview"
                                        style="max-width: 250px; max-height: 200px;">
                                </div>

                                <div class="row g-2 mb-3">
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

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Ambil elemen dropdown tema
            const themeSelect = document.getElementById('theme_id');
            // Ambil elemen input kode
            const codeInput = document.getElementById('code');
            // Ambil elemen pratinjau gambar
            const imagePreview = document.getElementById('image_preview');

            // Tambahkan event listener untuk perubahan pada dropdown tema
            themeSelect.addEventListener('change', function() {
                // Ambil nilai tema yang dipilih
                const selectedThemeId = themeSelect.value;

                // Kirim permintaan AJAX ke endpoint untuk mendapatkan data tema yang dipilih
                fetch(`/get-theme/${selectedThemeId}`)
                    .then(response => response.json())
                    .then(data => {
                        // console.log(data);
                        // Perbarui nilai input kode dengan kode tema yang dipilih
                        codeInput.value = data.code;

                        // Periksa apakah respons memiliki data backround_img
                        if (data.background_img) {
                            // Perbarui src gambar pratinjau dengan gambar tema yang dipilih
                            imagePreview.src = `${data.background_img}`;
                        } else {
                            // Jika tidak ada gambar yang ditemukan, tampilkan pesan atau tetap gunakan gambar default
                            console.log('No image found in response.');
                            // imagePreview.src = ''; // Set default image URL or show an error message
                        }
                    })
                    .catch(error => console.error('Error:', error));
            });
        });
    </script>
@endsection
