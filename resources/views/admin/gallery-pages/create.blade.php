@extends('admin.admin_dashboard')

@section('content')
    <div class="main-content app-content">
        <div class="container-fluid">
            <!-- PAGE-HEADER -->
            <div class="page-header">
                <h1 class="page-title my-auto">Manage Gallery</h1>
                <div>
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item">
                            <a href="javascript:void(0)">Gallery</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Tambah Gallery</li>
                    </ol>
                </div>
            </div>
            <!-- PAGE-HEADER END -->

            <!-- Start:: row-1 -->
            <div class="row">
                <form action="{{ route('gallery.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="col-xl-12">
                        <div class="card custom-card">
                            <div class="card-header justify-content-between">
                                <div class="card-title">
                                    Tambah Gallery Foto
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="mb-3">
                                    <label for="invitation_id">Invitation:</label>
                                    <select class="form-control" name="invitation_id" id="invitation_id">
                                        @foreach ($invitations as $invitation)
                                            <option value="{{ $invitation->id }}">
                                                {{ $invitation->title_invitation }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="gallery_name" class="form-label fs-14 text-dark">Nama Gallery</label>
                                    <input type="text" name="gallery_name" class="form-control" id="gallery_name"
                                        placeholder="">
                                </div>
                                <div class="mb-3">
                                    <label for="photos" class="form-label fs-14 text-dark">Tambah Foto Disini</label>
                                    <input type="file" name="photos[]" id="inputPhoto" multiple
                                        class="form-control @error('photos') is-invalid @enderror">
                                    <div id="imagePreview" class="mt-2"></div>
                                    @error('photos')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <button class="btn btn-primary" type="submit">Submit</button>
                            </div>
                            <div class="card-footer d-none border-top-0">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <!-- End:: row-1 -->

            <!-- Tampilkan pesan jika ada -->
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @elseif(session('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
            @endif

        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    {{-- jquery ui --}}
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>

    <script>
        $(document).ready(function() {

            // Display old values on form submission failure
            var oldGalleryName = "{{ old('gallery_name') }}";
            $('#gallery_name').val(oldGalleryName);



            // Fungsi untuk menangani perubahan pada input file
            $('#inputPhoto').change(function() {
                // Membaca file input
                var input = this;

                // Mengecek apakah browser mendukung FileReader
                if (window.FileReader) {
                    // Menghapus pratinjau gambar yang ada
                    $('#imagePreview').empty();

                    // Iterasi setiap file yang dipilih
                    $.each(input.files, function(i, file) {
                        // Membuat objek FileReader
                        var reader = new FileReader();

                        // Menetapkan fungsi callback ketika pembacaan selesai
                        reader.onload = function(e) {
                            // Menampilkan pratinjau gambar
                            var imageContainer = $('<div class="image-container"><img src="' + e
                                .target.result +
                                '" alt="Preview"/><span class="remove-image" data-index="' +
                                i + '">&times;</span></div>');

                            // Menambahkan gaya CSS ke elemen yang baru dibuat
                            imageContainer.css({
                                'display': 'inline-block',
                                'position': 'relative',
                                'margin-right': '10px',
                                'width': '200px', // Ganti dengan lebar yang diinginkan
                                'height': '200px', // Ganti dengan tinggi yang diinginkan
                                'overflow': 'hidden'
                            });

                            imageContainer.find('img').css({
                                'width': '100%',
                                'height': '100%',
                                'object-fit': 'contain' // Menggunakan 'contain'
                            });

                            imageContainer.find('.remove-image').css({
                                'position': 'absolute',
                                'top': '0',
                                'right': '0',
                                'background-color': '#fff',
                                'color': '#ff0000',
                                'cursor': 'pointer',
                                'padding': '2px 5px'
                            });

                            // Menambahkan elemen ke dalam kontainer pratinjau gambar
                            $('#imagePreview').append(imageContainer);
                        };

                        // Membaca data URL dari file gambar
                        reader.readAsDataURL(file);
                    });
                }
            });

            // Fungsi untuk menghapus pratinjau gambar
            $(document).on('click', '.remove-image', function() {
                var index = $(this).data('index');
                var inputPhoto = $('#inputPhoto')[0];

                // Create a new FileList without the deleted file
                var newFileList = new DataTransfer();
                $.each(inputPhoto.files, function(i, file) {
                    if (i !== index) {
                        newFileList.items.add(file);
                    }
                });

                // Assign the new FileList to the input element
                inputPhoto.files = newFileList.files;

                // Remove the preview container
                $(this).parent().remove();
            });

            // Function to check if a file already exists in the input files
            function fileExists(newFile) {
                var inputPhoto = $('#inputPhoto')[0];
                for (var i = 0; i < inputPhoto.files.length; i++) {
                    var existingFile = inputPhoto.files[i];
                    if (existingFile.name === newFile.name && existingFile.size === newFile.size && existingFile
                        .type === newFile.type) {
                        return true;
                    }
                }
                return false;
            }
        });
    </script>
@endsection
