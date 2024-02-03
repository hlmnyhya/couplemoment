{{-- <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Profile') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.update-profile-information-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.update-password-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.delete-user-form')
                </div>
            </div>
        </div>
    </div>
</x-app-layout> --}}


@extends('admin.admin_dashboard')

@section('content')
    <!--APP-CONTENT START-->
    <div class="main-content app-content">
        <div class="container-fluid">

            <!-- PAGE-HEADER -->
            <div class="page-header">
                <h1 class="page-title my-auto">Profile</h1>
                <div>
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item">
                            <a href="javascript:void(0)">Pages</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Profile</li>
                    </ol>
                </div>
            </div>
            <!-- PAGE-HEADER END -->


            <!-- Start::row-1 -->
            <div class="row">
                <div class="col-xxl-3">
                    <div class="card custom-card overflow-hidden">
                        <div class="card-body border-bottom">
                            <div class="d-sm-flex  main-profile-cover">
                                <span class="avatar avatar-xxl online me-3">
                                    <img src="{{ asset('backend') }}/dist/assets/images/faces/5.jpg" alt=""
                                        class="avatar avatar-xxl">
                                </span>
                                <div class="flex-fill main-profile-info my-auto">
                                    <h5 class="fw-semibold mb-1 ">Json Taylor</h5>
                                    <div>
                                        <p class="mb-1 text-muted">Chief Executive Officer (C.E.O)</p>
                                        <p class="fs-12 op-7 mb-0">
                                            <span class="me-3 d-inline-flex align-items-center"><i
                                                    class="ri-building-line me-1 align-middle"></i>Tanah Laut</span>
                                            <span class="d-inline-flex align-items-center"><i
                                                    class="ri-map-pin-line me-1 align-middle"></i>Kalimatan Selatan</span>
                                        </p>
                                    </div>
                                </div>

                                <div class="btn-group" style="height: fit-content">
                                    <button type="button" class="btn btn-success dropdown-toggle" data-bs-toggle="dropdown"
                                        aria-expanded="false">
                                        Aksi
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="javascript:void(0);">Edit Profile</a></li>
                                        {{-- <li>
                                            <hr class="dropdown-divider">
                                        </li> --}}
                                        <li><a class="dropdown-item" href="javascript:void(0);">Ganti Password</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="card-body p-0 main-profile-info">
                            <div class="d-flex align-items-center justify-content-between w-100">
                                <div class="py-3 border-end w-100 text-center">
                                    <p class="fw-bold fs-20  text-shadow mb-0">113</p>
                                    <p class="mb-0 fs-12 text-muted ">Tema</p>
                                </div>
                                <div class="py-3 border-end w-100 text-center">
                                    <p class="fw-bold fs-20  text-shadow mb-0">12.2k</p>
                                    <p class="mb-0 fs-12 text-muted ">Kouta Undangan</p>
                                </div>
                                <div class="py-3 w-100 text-center">
                                    <p class="fw-bold fs-20  text-shadow mb-0">128</p>
                                    <p class="mb-0 fs-12 text-muted ">Undangan yang di publish</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xxl-3">
                        <div class="card custom-card">
                            <div class="p-4 border-bottom border-block-end-dashed">
                                <p class="fs-15 mb-2 fw-semibold">Progres Profile :</p>
                                <p class="fw-semibold mb-2">Profile 60% completed - <a href="javscript:void(0);"
                                        class="text-primary fs-12">Selesaikan Sekarang</a></p>
                                <div class="progress progress-sm progress-animate ">
                                    <div class="progress-bar bg-primary  ronded-1" role="progressbar" aria-valuenow="60"
                                        aria-valuemin="0" aria-valuemax="100" style="width: 60%"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card custom-card">
                        <div class="p-4  border-bottom border-block-end-dashed">
                            <p class="fs-15 mb-2 me-4 fw-semibold">Biodata Pengguna :</p>
                            <ul class="list-group">
                                <li class="list-group-item border-0">
                                    <div class="d-flex flex-wrap align-items-center">
                                        <div class="me-2 fw-semibold">
                                            Nama Lengkap :
                                        </div>
                                        <span class="fs-12 text-muted">Sonya Taylor</span>
                                    </div>
                                </li>
                                <li class="list-group-item border-0">
                                    <div class="d-flex flex-wrap align-items-center">
                                        <div class="me-2 fw-semibold">
                                            Umur :
                                        </div>
                                        <span class="fs-12 text-muted">18 Tahun</span>
                                    </div>
                                </li>
                                <li class="list-group-item border-0">
                                    <div class="d-flex flex-wrap align-items-center">
                                        <div class="me-2 fw-semibold">
                                            Status :
                                        </div>
                                        <span class="fs-12 text-muted">Personal</span>
                                    </div>
                                </li>
                                <li class="list-group-item border-0">
                                    <div class="d-flex flex-wrap align-items-center">
                                        <div class="me-2 fw-semibold">
                                            Membuat akun :
                                        </div>
                                        <span class="fs-12 text-muted"> Selasa, 16 januari 2023</span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="p-4 border-bottom border-block-end-dashed">
                            <p class="fs-15 mb-2 me-4 fw-semibold">Informasi Kontak:</p>
                            <div class="text-muted">
                                <p class="mb-3">
                                    <span class="avatar avatar-sm avatar-rounded me-2 bg-info-transparent">
                                        <i class="ri-mail-line align-middle fs-14"></i>
                                    </span>
                                    sonyataylor2531@gmail.com
                                </p>
                                <p class="mb-3">
                                    <span class="avatar avatar-sm avatar-rounded me-2 bg-warning-transparent">
                                        <i class="ri-phone-line align-middle fs-14"></i>
                                    </span>
                                    +(555) 555-1234
                                </p>
                                <div class="d-flex">
                                    <p class="mb-0">
                                        <span class="avatar avatar-sm avatar-rounded me-2 bg-success-transparent">
                                            <i class="ri-map-pin-line align-middle fs-14"></i>
                                        </span>
                                    </p>
                                    <p class="mb-0">
                                        MIG-1-11, Monroe Street, Georgetown, Washington D.C, USA,20071 </p>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--End::row-1 -->

        </div>
    </div>
    <!--APP-CONTENT CLOSE-->
@endsection
