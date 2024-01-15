<!DOCTYPE html>
<html lang="en" dir="ltr" data-nav-layout="vertical" data-theme-mode="light" data-header-styles="light"
    data-menu-styles="light" data-toggled="close">

<head>

    <!-- Meta Data -->
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title> Daftar </title>
    <meta name="Description" content="Bootstrap Responsive Admin Web Dashboard HTML5 Template">
    <meta name="Author" content="Spruko Technologies Private Limited">
    <meta name="keywords"
        content="admin dashboard,dashboard design htmlbootstrap admin template,html admin panel,admin dashboard html,admin panel html template,bootstrap dashboard,html admin template,html dashboard,html admin dashboard template,bootstrap dashboard template,dashboard html template,bootstrap admin panel,dashboard admin bootstrap,bootstrap admin dashboard">

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('frontend/images/icon-park-oval-love-two.png') }}">

    <!-- Main Theme Js -->
    <script src="{{ asset('backend') }}/dist/assets/js/authentication-main.js"></script>

    <!-- Bootstrap Css -->
    <link id="style" href="{{ asset('backend') }}/dist/assets/libs/bootstrap/css/bootstrap.min.css"
        rel="stylesheet">

    <!-- Style Css -->
    <link href="{{ asset('backend') }}/dist/assets/css/styles.css" rel="stylesheet">

    <!-- Icons Css -->
    <link href="{{ asset('backend') }}/dist/assets/css/icons.min.css" rel="stylesheet">


</head>

<body>
    <!-- Loader -->
    <div id="loader">
        <img src="{{ asset('backend') }}/dist/assets/images/media/loader.svg" alt="">
    </div>
    <!-- Loader -->

    <div class="autentication-bg">

        <div class="container-lg">
            <div class="row justify-content-center authentication authentication-basic align-items-center h-100">
                <div class="col-xxl-5 col-xl-5 col-lg-5 col-md-6 col-sm-8 col-12">
                    <div class="my-4 d-flex justify-content-center">
                        <a href="index.html">
                            <img src="{{ asset('backend/dist/assets/images/landing/Logo.png') }}" alt="logo">
                        </a>
                    </div>
                    <div class="card custom-card">
                        <div class="card-body p-5">
                            <p class="h5 fw-semibold mb-2 text-center">Sign Up</p>
                            <p class="mb-4 text-muted op-7 fw-normal text-center"> Hai, daftar sekarang dan mulai
                                petualangan cintamu !</p>
                            <div class="row gy-3">
                                <div class="col-xl-12">
                                    <label for="signup-namalengkap" class="form-label text-default">Nama Lengkap</label>
                                    <input type="text" class="form-control form-control-lg" id="signup-namalengkap"
                                        placeholder="masukan nama anda">
                                </div>
                                <div class="col-xl-12">
                                    <label for="signup-email" class="form-label text-default">Email</label>
                                    <input type="text" class="form-control form-control-lg" id="signup-email"
                                        placeholder="email">
                                </div>
                                <div class="col-xl-12">
                                    <label for="signup-password" class="form-label text-default">Password</label>
                                    <div class="input-group">
                                        <input type="password" class="form-control form-control-lg" id="signup-password"
                                            placeholder="minimal 8 karakter">
                                        <button aria-label="button" class="btn btn-light"
                                            onclick="createpassword('signup-password',this)" type="button"
                                            id="button-addon2"><i class="ri-eye-off-line align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="col-xl-12 mb-2">
                                    <label for="signup-confirmpassword" class="form-label text-default">Confirm
                                        Password</label>
                                    <div class="input-group">
                                        <input type="password" class="form-control form-control-lg"
                                            id="signup-confirmpassword" placeholder="ulangi password">
                                        <button aria-label="button" class="btn btn-light"
                                            onclick="createpassword('signup-confirmpassword',this)" type="button"
                                            id="button-addon21"><i class="ri-eye-off-line align-middle"></i></button>
                                    </div>
                                    <div class="form-check mt-3">
                                        <input class="form-check-input" type="checkbox" value=""
                                            id="defaultCheck1">
                                        <label class="form-check-label text-muted fw-normal" for="defaultCheck1">
                                            Saya menyetujui <a href="terms_conditions.html"
                                                class="text-danger"><u>syarat penggunaan</u></a></a>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-xl-12 d-grid mt-2">
                                    <button type="button" class="btn btn-lg btn-primary">Daftar Akun</button>
                                </div>
                            </div>
                            <div class="text-center">
                                <p class="text-muted mt-3">Sudah Punya Akun ? <a href="{{ route('login-page') }}"
                                        class="text-primary">Masuk disini</a></p>
                            </div>
                            {{-- <div class="text-center my-3 authentication-barrier">
                                <span>OR</span>
                            </div>
                            <div class="btn-list text-center">
                                <button type="button" aria-label="button" class="btn btn-icon btn-primary-transparent">
                                    <i class="ri-facebook-fill"></i>
                                </button>
                                <button type="button" aria-label="button" class="btn btn-icon btn-primary-transparent">
                                    <i class="ri-google-fill"></i>
                                </button>
                                <button type="button" aria-label="button" class="btn btn-icon btn-primary-transparent">
                                    <i class="ri-twitter-fill"></i>
                                </button>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Custom-Switcher JS -->
    <script src="{{ asset('backend') }}/dist/assets/js/custom-switcher.min.js"></script>

    <!-- Bootstrap JS -->
    <script src="{{ asset('backend') }}/dist/assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Show Password JS -->
    <script src="{{ asset('backend') }}/dist/assets/js/show-password.js"></script>

</body>

</html>
