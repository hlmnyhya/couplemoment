@extends('admin.admin_dashboard')

@section('content')
    <!--APP-CONTENT START-->
    <div class="main-content app-content">
        <div class="container-fluid">

            <!-- PAGE-HEADER -->
            <div class="page-header">
                <h1 class="page-title my-auto">Halaman Edit Profile</h1>
                <div>
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item">
                            <a href="javascript:void(0)">Profile</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Edit Profile</li>
                    </ol>
                </div>
            </div>
            <!-- PAGE-HEADER END -->


            <!-- Start:: row-1 -->
            <div class="row">
                <div class="col-xl-12">
                    <div class="card custom-card">
                        <div class="card-header justify-content-between">
                            {{-- <div class="card-title">
                                Halaman Edit
                            </div> --}}
                        </div>
                        @if (session('success'))
                            <div class="alert alert-solid-success alert-dismissible fade show">
                                {{ session('success') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"><i
                                        class="bi bi-x"></i></button>
                            </div>
                        @endif
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
                            <form method="post" action="{{ route('profile.update') }}" enctype="multipart/form-data">
                                @csrf
                                @method('put')
                                <div class="row gy-4">
                                    <div class="col-xl-5 col-lg-6 col-md-6 col-sm-12">
                                        <label for="name" class="form-label">Nama Lengkap :</label>
                                        <input type="text" class="form-control" id="name" name="name"
                                            value="{{ $user->name }}">
                                    </div>

                                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                        <label for="photo" class="form-label">Foto Profile</label>
                                        <input type="file" class="form-control" id="photo" name="photo"
                                            onchange="previewImage(event)" value="{{ $user->photo }}">
                                    </div>

                                    <div class="col-sm-6">
                                        @if ($user->photo)
                                            <img id="image_preview" src="{{ asset($user->photo) }}"
                                                class="img-fluid rounded mt-2" alt="Current Image"
                                                style="max-width: 250px; max-height: 200px;">
                                        @else
                                            <img id="image_preview"
                                                src="{{ asset('backend') }}/dist/assets/images/media/media-49.jpg"
                                                class="img-fluid rounded mt-2" alt="Preview"
                                                style="max-width: 250px; max-height: 200px;">
                                        @endif
                                    </div>


                                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                                        <label for="birth" class="form-label">Tanggal Lahir</label>
                                        <input type="date" class="form-control" id="birth" name="birth"
                                            value="{{ $user->birth }}">
                                    </div>

                                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                                        <label for="phone" class="form-label">Nomor Telepon</label>
                                        <input type="tel" class="form-control" id="phone" name="phone"
                                            placeholder="+1100-2031-1233" value="{{ $user->phone }}">
                                    </div>

                                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                                        <label for="input-email" class="form-label">Email</label>
                                        <input type="email" class="form-control" id="input-email"
                                            placeholder="Email@xyz.com" disabled value="{{ $user->email }}">
                                    </div>

                                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6">
                                        <label for="province" class="form-label">Provinsi</label>
                                        <input type="text" class="form-control" id="proince" name="province"
                                            placeholder="Provinsi" value="{{ $user->province }}">
                                    </div>

                                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6">
                                        <label for="regency" class="form-label">Kabupaten</label>
                                        <input type="text" class="form-control" id="regency" name="regency"
                                            placeholder="Kabupaten" value="{{ $user->regency }}">
                                    </div>



                                    <div class="col-xl-12 col-lg-6 col-md-6 col-sm-12">
                                        <label for="address" class="form-label">Alamat :</label>
                                        <textarea class="form-control" id="address" name="address">{{ $user->address }}</textarea>
                                    </div>


                                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                        {{-- <label for="input-submit" class="form-label">Type Submit</label> --}}
                                        <input type="submit" class="btn btn-primary" id="input-submit" value="Submit">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
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
