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
                        <div class="card-body">
                            <div class="row gy-4">
                                <div class="row">
                                    <div class="col-xl-6">
                                        <label for="inputPassword5" class="form-label">Password Baru</label>
                                        <input type="password" id="inputPassword5" class="form-control"
                                            aria-describedby="passwordHelpBlock" placeholder="Masukan Password Baru">
                                    </div>

                                    <div class="col-xl-6">
                                        <label for="inputPassword5" class="form-label">Konfimasi Password</label>
                                        <input type="password" id="inputPassword5" class="form-control"
                                            aria-describedby="passwordHelpBlock" placeholder="Masukan Password Kembali">
                                            <div id="passwordHelpBlock" class="form-text" style="margin-bottom: 10px">
                                                Kata Sandi Anda harus sepanjang 8-20 karakter, mengandung huruf dan angka,
                                                dan
                                                tidak boleh mengandung spasi, karakter khusus, atau emoji.
                                            </div>
                                        </div>
                                        
                                        <div class="col-xl-12 col-lg-6 col-md-6 col-sm-12">
                                        <input type="submit" class="btn btn-primary" id="input-submit" value="Submit">
                                        {{-- <label for="input-submit" class="form-label">Type Submit</label> --}}
                                    </div>
                                </div>
                            @endsection
