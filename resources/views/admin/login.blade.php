<!DOCTYPE html>
<html lang="en" dir="ltr" data-nav-layout="vertical" data-theme-mode="light" data-header-styles="light"
    data-menu-styles="light" data-toggled="close">

<head>

    <!-- Meta Data -->
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title> Masuk</title>
    <meta name="Description" content="Bootstrap Responsive Admin Web Dashboard HTML5 Template">
    <meta name="Author" content="Spruko Technologies Private Limited">
    <meta name="keywords"
        content="admin dashboard,dashboard design htmlbootstrap admin template,html admin panel,admin dashboard html,admin panel html template,bootstrap dashboard,html admin template,html dashboard,html admin dashboard template,bootstrap dashboard template,dashboard html template,bootstrap admin panel,dashboard admin bootstrap,bootstrap admin dashboard">


    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('frontend/images/icon-park-oval-love-two.png') }}">

    <!-- Main Theme Js -->
    <script src="{{ asset('backend') }}dist/assets/js/authentication-main.js"></script>

    <!-- Bootstrap Css -->
    <link id="style" href="{{ asset('backend') }}/dist/assets/libs/bootstrap/css/bootstrap.min.css"
        rel="stylesheet">

    <!-- Style Css -->
    <link href="{{ asset('backend') }}/dist/assets/css/styles.css" rel="stylesheet">

    <!-- Icons Css -->
    <link href="{{ asset('backend') }}/dist/assets/css/icons.css" rel="stylesheet">


</head>

<body>
    <div class="autentication-bg">
        <div class="container-lg">
            <div class="row justify-content-center authentication authentication-basic align-items-center h-100">
                <div class="col-xxl-4 col-xl-5 col-lg-5 col-md-6 col-sm-8 col-12">
                    <div class="my-4 d-flex justify-content-center">
                        <a href="index.html">
                            <img src="{{ asset('backend/dist/assets/images/landing/Logo.png') }}" alt="logo">
                        </a>
                    </div>
                    <div class="card custom-card">
                        <div class="card-body p-5">
                            <p class="h5 fw-semibold mb-2 text-center" style="color: #ff477e; font-size: x-large;">Sign
                                In</p>
                            <p class="mb-4 text-muted op-7 fw-normal text-center">Hai, selamat datang di Couple Moment.
                            </p>
                            <x-auth-session-status class="mb-4" :status="session('status')" />
                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="row gy-3">
                                    <div class="col-xl-12">
                                        <label for="signin-username" class="form-label text-default">Email</label>
                                        <input type="email" class="form-control form-control-lg" id="email"
                                            name="email" :value="old('email')" required autofocus
                                            autocomplete="username" placeholder="Email">
                                        <x-input-error style="color:red" :messages="$errors->get('email')" class="mt-2" />
                                    </div>
                                    <div class="col-xl-12 mb-2">
                                        <label for="signin-password" class="form-label text-default d-block">Password
                                            {{-- <a href="{{ route('password.request') }}" class="float-end text-danger">Lupa
                                                Password
                                                ?</a> --}}
                                        </label>
                                        <div class="input-group">
                                            <input type="password" class="form-control form-control-lg" id="password"
                                                name="password" required autocomplete="current-password"
                                                placeholder="Password">
                                            {{-- <button aria-label="button" class="btn btn-light"
                                                onclick="createpassword('signin-password',this)" type="button"
                                                id="button-addon2"><i class="ri-eye-off-line align-middle"></i></button> --}}
                                        </div>
                                        <x-input-error style="color:red" :messages="$errors->get('password')" class="mt-2" />
                                        <div class="mt-2">
                                            {{-- <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="defaultCheck1">
                                                <label class="form-check-label text-muted fw-normal" for="defaultCheck1"
                                                    style="font-size: smaller">
                                                    Ingat Password ?
                                                </label>
                                            </div> --}}
                                        </div>
                                    </div>
                                    <div class="col-xl-12 d-grid mt-2">
                                        <button type="submit" class="btn btn-lg btn-primary">Masuk</button>
                                    </div>
                                </div>
                            </form>
                            <div class="text-center">
                                <p class="text-muted mt-3">Belum Punya Akun? <a href="{{ route('register') }}"
                                        class="text-primary">Daftar Disini</a></p>
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
    <script src="{{ asset('backend') }}dist/assets/js/custom-switcher.min.js"></script>

    <!-- Bootstrap JS -->
    <script src="{{ asset('backend') }}dist/assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Show Password JS -->
    <script src="{{ asset('backend') }}dist/assets/js/show-password.js"></script>

</body>

</html>
