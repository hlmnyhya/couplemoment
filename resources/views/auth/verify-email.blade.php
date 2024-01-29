<!DOCTYPE html>
<html lang="en" dir="ltr" data-nav-layout="vertical" data-theme-mode="light" data-header-styles="light"
    data-menu-styles="light" data-toggled="close">

<head>

    <!-- Meta Data -->
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title> Verifikasi Email</title>
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
                            <p class="h5 fw-semibold mb-2 text-center" style="color: #ff477e; font-size: x-large;">
                                Verifikasi E-mail</p>
                            <p class="mb-4 text-muted op-7 fw-normal text-center">Silahkan memverifikasi email anda
                                terlebih dahulu.</p>

                            <div class="mb-4 text-sm text-gray-600" style="text-align: justify">
                                {{ __('Terima kasih telah mendaftar! Sebelum memulai, bisakah Anda memverifikasi alamat email Anda dengan mengeklik tautan yang baru saja kami kirimkan melalui email kepada Anda? Jika Anda tidak menerima email tersebut, kami dengan senang hati akan mengirimkan email lainnya kepada Anda.') }}
                            </div>

                            @if (session('status') == 'verification-link-sent')
                                <div class="mb-4 font-medium text-sm text-green-600">
                                    {{ __('A new verification link has been sent to the email address you provided during registration.') }}
                                </div>
                            @endif

                            <div class="mt-4 flex items-center justify-between">
                                <div class=" btn-group">
                                    <form method="POST" action="{{ route('verification.send') }}">
                                        @csrf
                                        <button type="submit"
                                            class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150"
                                            style="border-radius: 7px;">
                                            Mengirim ulang email verifikasi
                                        </button>
                                    </form>

                                    <form action="{{ route('logout') }}">
                                        @csrf
                                        <button type="submit"
                                            class="underline text-sm text-danger-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                                            style="color: red;border: none;background-color: #ffffff;text-decoration: underline;margin-left: 59px;">
                                            Keluar
                                        </button>
                                    </form>
                                </div>
                            </div>
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
