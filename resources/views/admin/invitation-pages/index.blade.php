@extends('admin.admin_dashboard')
<!-- Start::app-content -->
@section('content')
    <div class="main-content app-content">
        <div class="container-fluid">

            <!-- PAGE-HEADER -->
            <div class="page-header">
                <h1 class="page-title my-auto">Invitation </h1>
                <div>
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item">
                            <a href="javascript:void(0)">Invitation </a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Invitation </li>
                    </ol>
                </div>
            </div>
            <!-- PAGE-HEADER END -->

            {{-- START INPUT --}}
            <form action="{{ route('invitation.store') }}" method="POST">
                @csrf
                <div class="col-xl-12">
                    <div class="card custom-card">
                        <div class="card-header justify-content-between">
                            <div class="card-title">
                                Data Invitation
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>

                        <div class="card-body">

                            @if ($errors->any())
                                <div class="alert alert-solid-danger alert-dismissible fade show">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"><i
                                            class="bi bi-x"></i></button>
                                </div>
                            @endif

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
                                <img id="image_preview" src="{{ asset('theme') }}/media-49.jpg" class="img-fluid rounded"
                                    alt="Preview" style="max-width: 250px; max-height: 200px;">
                            </div>

                            <div class="row g-2">
                                <div class="col-sm-6">
                                    <label for="soundbank_id" class="form-label">Soundbank</label>
                                    <select class="form-select" id="soundbank_id" name="soundbank_id" required>
                                        <option value="">Select Sound</option>
                                        @foreach ($soundbanks as $soundbank)
                                            <option value="{{ $soundbank->id }}">{{ $soundbank->title }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-sm-6">
                                    <audio controls>
                                        <source src="" type="audio/mp3">
                                        Your browser does not support the audio element.
                                    </audio>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="title_invitation" class="form-label">Title Invitation</label>
                                <input type="text" class="form-control" id="title_invitation" name="title_invitation"
                                    required placeholder="Enter Title Invitation">
                            </div>

                            <div class="mb-3">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" class="form-control" id="name" name="name" required
                                    placeholder="Enter Name">
                            </div>

                            <div class="mb-3">
                                <label for="url" class="form-label">Url</label>
                                <input type="text" class="form-control" id="url" name="url" required
                                    placeholder="Enter URL">
                            </div>

                            <div class="mb-3">
                                <label for="description" class="form-label">Description</label>
                                <textarea type="text" class="form-control" id="description" name="description" required
                                    placeholder="Enter Description"></textarea>
                            </div>

                            <div class="row g-3">
                                <div class="col-sm-4">
                                    <label for="date_invitation" class="form-label">Date</label>
                                    <input type="date" class="form-control" id="date_invitation" name="date_invitation"
                                        required placeholder="Select Date">
                                </div>
                                <div class="col-sm-4">
                                    <label for="time_invitation" class="form-label">Time</label>
                                    <input type="time" class="form-control" id="time_invitation"
                                        name="time_invitation" required placeholder="Select Time">
                                </div>
                                <div class="col-sm-4">
                                    <label for="timezone" class="form-label">Timezone</label>
                                    <input type="text" class="form-control" id="timezone" name="timezone" required
                                        placeholder="Enter Timezone">
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="address_invitation" class="form-label">Address</label>
                                <textarea type="text" class="form-control mb-3" id="address_invitation" name="address_invitation" required
                                    placeholder="Enter Address"></textarea>
                                <input type="text" class="form-control mb-3" id="address_url" name="address_url"
                                    required placeholder="Enter Address URL">
                                <textarea type="text" class="form-control mb-3" id="address_maps" name="address_maps" required
                                    placeholder="Enter Address on Maps"></textarea>
                            </div>

            </form>
        </div>
    </div>
    </div>
    {{-- End INPUT --}}
    </div>
    </div>
    <!-- End::app-content -->

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
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Ambil elemen dropdown soundbank
            const soundbankSelect = document.getElementById('soundbank_id');
            // Ambil elemen audio
            const audioPreview = document.querySelector('audio');

            // Tambahkan event listener untuk perubahan pada dropdown soundbank
            soundbankSelect.addEventListener('change', function() {
                // Ambil nilai soundbank yang dipilih
                const selectedSoundbankId = soundbankSelect.value;

                // Kirim permintaan AJAX ke endpoint untuk mendapatkan data soundbank yang dipilih
                fetch(`/get-soundbank/${selectedSoundbankId}`)
                    .then(response => response.json())
                    .then(data => {
                        console.log(data);
                        // Perbarui nilai src audio dengan audio soundbank yang dipilih
                        if (data.audio_src) {
                            audioPreview.src = `/${data.audio_src}`;
                        } else {
                            // Jika tidak ada audio yang ditemukan, tampilkan pesan atau reset audio
                            console.log('No audio found in response.');
                            audioPreview.src = ''; // Set default audio URL or show an error message
                        }
                    })
                    .catch(error => console.error('Error:', error));
            });
        });
    </script>
@endsection
