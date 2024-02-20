@extends('admin.admin_dashboard')

@section('content')

    <!--APP-CONTENT START-->
    <div class="main-content app-content">
        <div class="container-fluid">

            <!-- PAGE-HEADER -->
            <div class="page-header">
                <h1 class="page-title my-auto">Halaman Ganti Password</h1>
                <div>
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item">
                            <a href="javascript:void(0)">Profile</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Ganti Password</li>
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
                            <form method="POST" action="{{ route('profile.update-password') }}">
                                @csrf

                                <div class="form-group row">
                                    <label for="current_password"
                                        class="col-md-4 col-form-label text-md-right">{{ __('Masukan Password Sebelumnya') }}</label>

                                    <div class="col-md-6 mb-3">
                                        <input id="current_password" type="password" class="form-control"
                                            name="current_password" required autocomplete="current-password">
                                        @error('current_password')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                        @if (session('error'))
                                            <span class="text-danger">{{ session('error') }}</span>
                                        @endif
                                    </div>

                                    <label for="password"
                                        class="col-md-4 col-form-label text-md-right">{{ __('Password Baru') }}</label>

                                    <div class="col-md-6 mb-3 ">
                                        <input id="password" type="password" class="form-control" name="password" required
                                            autocomplete="new-password">
                                        @error('password')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <label for="password_confirmation"
                                        class="col-md-4 col-form-label text-md-right">{{ __('Konfirmasi Password Baru') }}</label>

                                    <div class="col-md-6 mb-3 ">
                                        <input id="password_confirmation" type="password" class="form-control"
                                            name="password_confirmation" required autocomplete="new-password">
                                        @error('password_confirmation')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row mb-0">
                                    <div class="col-md-6 offset-md-4">
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('Change Password') }}
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
