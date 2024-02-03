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
                        <div class="card-body">
                            <div class="row gy-4">
                                <div class="col-xl-8 col-lg-6 col-md-6 col-sm-12">
                                    <label for="input-label" class="form-label">Nama Lengkap :</label>
                                    <input type="text" class="form-control" id="input">
                                </div>

                                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                    <label for="input-date" class="form-label">Tanggal Lahir</label>
                                    <input type="date" class="form-control" id="input-date">
                                </div>

                                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                                    <label for="input-tel" class="form-label">Nomor Telepon</label>
                                    <input type="tel" class="form-control" id="input-tel" placeholder="+1100-2031-1233">
                                </div>

                                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                                    <label for="input-email" class="form-label">Email</label>
                                    <input type="email" class="form-control" id="input-email" placeholder="Email@xyz.com">
                                </div>

                                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 ">
                                    <label for="" class="form-label">Kabupaten</label>
                                    <select id="" class="form-select">
                                        <option>Kabupaten</option>
                                    </select>
                                </div>

                                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 ">
                                    <label for="" class="form-label">Provinsi</label>
                                    <select id="" class="form-select">
                                        <option>Provinsi</option>
                                    </select>
                                </div>

                                <div class="col-xl-12 col-lg-6 col-md-6 col-sm-12">
                                    <label for="input-label" class="form-label">Alamat :</label>
                                    <textarea class="form-control" id="input"></textarea>
                                </div>


                                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                    {{-- <label for="input-submit" class="form-label">Type Submit</label> --}}
                                    <input type="submit" class="btn btn-primary" id="input-submit" value="Submit">
                                </div>
                            </div>
                        </div>
                    @endsection
