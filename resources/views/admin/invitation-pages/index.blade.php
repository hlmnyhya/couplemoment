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

                            {{-- <div class="row g-2">
                                <div class="col-sm-6">
                                    <label for="theme_id" class="form-label">Tema</label>
                                    <select class="form-select" id="theme_id" name="theme_id" required>
                                        <option value="">Pilih Tema</option>
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
                            </div> --}}

                            <div class="row g-2">
                                <div class="col-sm-6">
                                    <label for="theme_id" class="form-label">Tema</label>
                                    <select class="form-select" id="theme_id" name="theme_id" required>
                                        <option value="">Pilih Tema</option>
                                        @foreach ($themes as $theme)
                                            <option value="{{ $theme->id }}"
                                                @if ($theme->id == request()->input('theme_id')) selected @endif>{{ $theme->name }}
                                            </option>
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
                                <div class="col-sm-6 mb-3">
                                    <label for="soundbank_id" class="form-label">Musik / Backsound</label>
                                    <select class="form-select" id="soundbank_id" name="soundbank_id" required>
                                        <option value="">Pilih Musik</option>
                                        @foreach ($soundbanks as $soundbank)
                                            <option value="{{ $soundbank->id }}">{{ $soundbank->title }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-sm-6 mt-4">
                                    <audio controls>
                                        <source src="" type="audio/mp3">
                                        Your browser does not support the audio element.
                                    </audio>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="title_invitation" class="form-label">Judul Undangan</label>
                                <input type="text" class="form-control" id="title_invitation" name="title_invitation"
                                    required placeholder="Masukan Nama Undangan">
                            </div>

                            <div class="row g-3">
                                <div class="col-sm-6 mb-3">
                                    <label for="panggilan_pria" class="form-label">Nama Panggilan Mempelai
                                        Pria</label>
                                    <input type="text" class="form-control" id="panggilan_pria" name="panggilan_pria"
                                        required placeholder="Masukan Nama Panggilan Mempelai Pria">
                                </div>
                                <div class="col-sm-6 mb-3">
                                    <label for="panggilan_perempuan" class="form-label">Nama Panggilan Mempelai
                                        Perempuan</label>
                                    <input type="text" class="form-control" id="panggilan_perempuan"
                                        name="panggilan_perempuan" required
                                        placeholder="Masukan Nama Panggilan Mempelai Perempuan">
                                </div>
                            </div>

                            <div class="row g-3">
                                <div class="col-sm-6 mb-3">
                                    <label for="name" class="form-label">Nama Lengkap Mempelai Pria</label>
                                    <input type="text" class="form-control" id="name" name="name" required
                                        placeholder="Masukan Nama Lengkap Mempelai Pria">
                                </div>
                                <div class="col-sm-6 mb-3">
                                    <label for="name2" class="form-label">Nama Lengkap Mempelai Perempuan</label>
                                    <input type="text" class="form-control" id="name2" name="name2" required
                                        placeholder="Masukan Nama Lengkap Mempelai Perempuan">
                                </div>
                            </div>

                            <div class="row g-3">
                                <div class="col-sm-6 mb-3">
                                    <label for="wali_name2" class="form-label">Wali Mempelai Pria</label>
                                    <input type="text" class="form-control" id="wali_name2" name="wali_name2"
                                        required placeholder="Masukan Nama Wali Mempelai Pria">
                                </div>
                                <div class="col-sm-6 mb-3">
                                    <label for="wali_name" class="form-label">Wali Mempelai Wanita</label>
                                    <input type="text" class="form-control" id="wali_name" name="wali_name" required
                                        placeholder="Masukan Nama Wali Mempelai Wanita">
                                </div>
                            </div>

                            {{-- <div class="mb-3">
                                <label for="url" class="form-label">Url</label>
                                <input type="text" class="form-control" id="url" name="url" required
                                    placeholder="Enter URL">
                            </div> --}}

                            <div class="mb-3">
                                <label for="description" class="form-label">Deskripsi</label>
                                <textarea type="text" class="form-control" id="description" name="description" required
                                    placeholder="Masukan Deskripsi"></textarea>
                            </div>

                            <div class="row g-3">
                                <div class="col-sm-4 mb-3">
                                    <label for="date_invitation" class="form-label">Tanggal Pernikahan</label>
                                    <input type="date" class="form-control" id="date_invitation"
                                        name="date_invitation" required placeholder="">
                                </div>
                                <div class="col-sm-4 mb-3">
                                    <label for="time_invitation" class="form-label">Jam</label>
                                    <input type="time" class="form-control" id="time_invitation"
                                        name="time_invitation" required placeholder="Select Time">
                                </div>
                                <div class="col-sm-4 mb-3">
                                    <label for="timezone" class="form-label">Zona Waktu</label>
                                    <select class="form-control" id="timezone" name="timezone" required>
                                        <option>Pilih Zona Waktu</option>
                                        <option value="WIT">WIT (Waktu Indonesia Timur)</option>
                                        <option value="WITA">WITA (Waktu Indonesia Tengah)</option>
                                        <option value="WIB">WIB (Waktu Indonesia Barat)</option>
                                    </select>
                                </div>

                            </div>

                            <div class="row g-3">
                                <div class="col-sm-4 mb-3">
                                    <label for="nama_bank" class="form-label">Nama Bank</label>
                                    <select class="form-control" id="nama_bank" name="nama_bank" required>
                                        <option value="" disabled selected>Pilih Bank</option>
                                        <option value="BCA">BCA</option>
                                        <option value="Mandiri">Mandiri</option>
                                        <option value="BRI">BRI</option>
                                        <option value="BNI">BNI</option>
                                        <option value="Bank Syariah Indonesia">Bank Syariah Indonesia</option>
                                        <option value="Bank Kalsel">Bank Kalsel</option>
                                    </select>
                                </div>

                                <div class="col-sm-4 mb-3">
                                    <label for="no_rekening" class="form-label">No Rekening</label>
                                    <input type="text" class="form-control" id="no_rekening" name="no_rekening"
                                        required placeholder="08xxx">
                                </div>
                                <div class="col-sm-4 mb-3">
                                    <label for="name_rekening" class="form-label">Nama Rekening</label>
                                    <input type="text" class="form-control" id="name_rekening" name="name_rekening"
                                        required placeholder="A. N ....">
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="address_invitation" class="form-label">Alamat</label>
                                <textarea type="text" class="form-control mb-3" id="address_invitation" name="address_invitation" required
                                    placeholder="Masukan Alamat Lengkap"></textarea>
                                <input type="text" class="form-control mb-3" id="address_url" name="address_url"
                                    required placeholder="Masukan URL Alamat">
                                {{-- <textarea type="text" class="form-control mb-3" id="address_maps" name="address_maps" required
                                    placeholder="Enter Address on Maps"></textarea> --}}
                            </div>

            </form>
        </div>
    </div>
    </div>
    {{-- End INPUT --}}
    </div>
    </div>
    <!-- End::app-content -->

    {{-- <script>
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
    </script> --}}

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Ambil elemen dropdown tema
            const themeSelect = document.getElementById('theme_id');
            // Ambil elemen input kode
            const codeInput = document.getElementById('code');
            // Ambil elemen pratinjau gambar
            const imagePreview = document.getElementById('image_preview');

            // Cek apakah ada parameter theme_id dalam URL
            const urlParams = new URLSearchParams(window.location.search);
            const selectedThemeId = urlParams.get('theme_id');

            // Jika ada theme_id dalam URL, pilih tema yang sesuai dalam dropdown
            if (selectedThemeId) {
                themeSelect.value = selectedThemeId;

                // Kirim permintaan AJAX ke endpoint untuk mendapatkan data tema yang dipilih
                fetch(`/get-theme/${selectedThemeId}`)
                    .then(response => response.json())
                    .then(data => {
                        // Perbarui nilai input kode dengan kode tema yang dipilih
                        codeInput.value = data.code;

                        // Periksa apakah respons memiliki data background_img
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
            }

            // Tambahkan event listener untuk perubahan pada dropdown tema
            themeSelect.addEventListener('change', function() {
                // Ambil nilai tema yang dipilih
                const selectedThemeId = themeSelect.value;

                // Kirim permintaan AJAX ke endpoint untuk mendapatkan data tema yang dipilih
                fetch(`/get-theme/${selectedThemeId}`)
                    .then(response => response.json())
                    .then(data => {
                        // Perbarui nilai input kode dengan kode tema yang dipilih
                        codeInput.value = data.code;

                        // Periksa apakah respons memiliki data background_img
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

    {{-- soundbank --}}
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
