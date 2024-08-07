<!doctype html>
<html lang="en" data-bs-theme="dark">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $invitation->name }} & {{ $invitation->name2 }}</title>
    <meta name="title" content="">
    <link rel="icon" type="image/png" sizes="192x192" href="{{ asset('frontend/img/icon-couple.png') }}">
    {{-- <link rel="shortcut icon" href="{{ asset('frontend/images/icon-park-oval-love-two.png') }}"> --}}
    <meta name="theme-color" content="#212529">
    <meta name="color-scheme" content="dark">
    <meta property="og:title" content="">
    <meta property="og:description" content="Website  Secara Online">
    <meta property="og:type" content="website">
    <meta property="og:locale" content="id_ID">
    <meta property="og:site_name" content="Undangan">
    <meta property="og:url" content="https://endahabdullah.github.io/undangan/">
    <link rel="preconnect" href="https://cdn.jsdelivr.net" crossorigin="anonymous">
    <link rel="preconnect" href="https://undangan-api-gules.vercel.app" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com" crossorigin="anonymous">
    <link rel="preconnect" href="https://gstatic.com" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.1/normalize.css"
        integrity="sha256-WAgYcAck1C1/zEl5sBl5cfyhxtLgKGdpI3oKyJffVRI=" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
        integrity="sha256-fx038NkLY4U1TCrBDiu5FWPEa9eiZu01EiLryshJbCo=" crossorigin="anonymous">
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.4.0/css/all.min.css"
        integrity="sha256-HtsXJanqjKTc8vVQjO4YMhiqFoXkfBsjBWcX91T1jr8=" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css"
        integrity="sha256-GqiEX9BuR1rv5zPU5Vs2qS/NSHl1BJyBcjQYJ6ycwD4=" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Sacramento&display=swap">
    <link rel="stylesheet" href="{{ asset('invitation/css/app.css') }}">

    <style>
        body {
            background-image: url("{{ $invitation->theme->background_img }}");
            background-size: cover;
            /* background-position: center; */
            background-repeat: no-repeat;
            background-attachment: fixed;
            margin: 0;
            padding: 0;
            font-family: "Josefin Sans", sans-serif;
            overflow-y: scroll;
            -ms-overflow-style: none;
            scrollbar-width: none;
        }
      
        @media (min-width: 320px) and (max-width: 768px) {
            #exampleModal .modal-content {
        background-size: cover; /* Mengatur background untuk memenuhi seluruh area elemen */
        background-position: center; /* Mengatur posisi background agar tetap di tengah */
    }
    body {
        background-image: url("{{ $invitation->theme->background_img }}");
        background-size: cover; /* Mengatur background untuk memenuhi seluruh area elemen */
        background-position: center; /* Mengatur posisi background agar tetap di tengah */
        width: 100vw; /* Mengatur lebar elemen body sama dengan lebar layar */
        height: 100vh; /* Mengatur tinggi elemen body sama dengan tinggi layar */
    }
}

    </style>
</head>

{{-- <body data-email="user@example.com" data-password="12345678" data-url="https://undangan-api-gules.vercel.app"> --}}
<body>
    <nav class="navbar navbar-dark bg-dark navbar-expand fixed-bottom rounded-top-4 p-0" id="navbar-example2">
        <ul class="navbar-nav nav-justified w-100 align-items-center">
            <li class="nav-item">
                <a class="nav-link" href="#home">
                    <i class="fas fa-home"></i>
                    <span class="d-block" style="font-size: 0.7rem;">Home</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#mempelai">
                    <i class="fa-solid fa-user-group"></i>
                    <span class="d-block" style="font-size: 0.7rem;">Mempelai</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#tanggal">
                    <i class="fa-solid fa-calendar-check"></i>
                    <span class="d-block" style="font-size: 0.7rem;">Tanggal</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#galeri">
                    <i class="fa-solid fa-images"></i>
                    <span class="d-block" style="font-size: 0.7rem;">Galeri</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#ucapan">
                    <i class="fa-solid fa-comments"></i>
                    <span class="d-block" style="font-size: 0.7rem;">Ucapan</span>
                </a>
            </li>
        </ul>
    </nav>

    <main class="scrollspy-example text-light" data-bs-spy="scroll" data-bs-target="#navbar-example2"
        data-bs-root-margin="0px 0px -40%" data-bs-smooth-scroll="true" tabindex="0">

        <section class="container" id="home">
            <div class="text-center pt-4">
                <h1 class="font-estetik my-4" style="font-size: 2.2rem; color: <?= $invitation->theme->color_palette === 'dark' ? '#FFD700' : '#000000' ?>">Undangan Pernikahan</h1>

                <div class="py-4">
                    <div
                    class="cropper border border-3 {{ $invitation->theme->color_palette === 'light' ? 'border-dark' : 'border-light' }} shadow my-4 mx-auto">
                        @foreach ($filteredPhotos as $photo)
                            @if ($photo->is_primary_photo)
                                <img src="{{ asset($photo->file_path) }}" alt="{{ $photo->file_name }}" onclick="modalFoto(this)">
                            @endif @endforeach
                    </div>
                </div>
                <h1 class="font-estetik
        my-4"
        style="font-size: 2.5rem; color: <?= $invitation->theme->color_palette === 'dark' ? '#FFD700' : '#000000' ?>;">
    {{ $invitation->name }}</h1>
    <h1 class="font-estetik my-4"
        style="font-size: 2.5rem; color: <?= $invitation->theme->color_palette === 'dark' ? '#FFD700' : '#000000' ?>;">&
    </h1>
    <h1 class="font-estetik my-4"
        style="font-size: 2.5rem; color: <?= $invitation->theme->color_palette === 'dark' ? '#FFD700' : '#000000' ?>;">
        {{ $invitation->name2 }}</h1>
    <h4 style="color: <?= $invitation->theme->color_palette === 'dark' ? '#FFD700' : '#000000' ?>;">
        {{ $formattedDate }}</h4>

    <a class="btn btn-outline-<?= $invitation->theme->color_palette === 'dark' ? 'light' : 'dark' ?> btn-sm shadow rounded-pill px-3 my-2"
        target="_blank" href="#"></i>Save The Date
    </a>

    <div class="d-flex justify-content-center align-items-center mt-4 mb-2">
        <div class="mousey"
            style="border-color: <?= $invitation->theme->color_palette === 'dark' ? '#FFD700' : '#000000' ?>;">
            <div class="scroller"
                style="background-color: <?= $invitation->theme->color_palette === 'dark' ? '#FFD700' : '#000000' ?>;">
            </div>
        </div>
    </div>

    <p class="m-0" style="color: <?= $invitation->theme->color_palette === 'dark' ? '#FFD700' : '#000000' ?>">Scroll
        Down</p>

    </section>
    @if ($invitation->theme->color_palette === 'dark')
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#111111" fill-opacity="1"
                d="M0,160L48,144C96,128,192,96,288,106.7C384,117,480,171,576,165.3C672,160,768,96,864,96C960,96,1056,160,1152,154.7C1248,149,1344,75,1392,37.3L1440,0L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
            </path>
        </svg>
    @endif

    <section
        style="background-color: <?= $invitation->theme->color_palette === 'dark' ? '#111111' : '' ?> !important; margin-top: -5px; margin-bottom: -5px;"
        id="mempelai">

        <div class="text-center">
            <h1 class="font-arabic py-4 px-2"
                style="font-size: 2rem; color: <?= $invitation->theme->color_palette === 'dark' ? '#FFD700' : '#000000' ?>">
                بِسْمِ اللّٰهِ الرَّحْمٰنِ الرَّحِيْمِ</h1>
            <h1 class="font-estetik py-4 px-2"
                style="color: <?= $invitation->theme->color_palette === 'dark' ? '#FFD700' : '#000000' ?>">
                Assalamualaikum Warahmatullahi Wabarakatuh</h1>

            <p class="pb-3 px-3" style="color: <?= $invitation->theme->color_palette === 'light' ? '#000000' : '' ?>">
                Tanpa mengurangi rasa hormat. Kami mengundang Bapak/Ibu/Saudara/i serta kerabat
                sekalian untuk menghadiri acara pernikahan kami:
            </p>


            <div class="overflow-x-hidden">
                <div data-aos="fade-right" data-aos-duration="2000">
                    <div
                        class="cropper border border-3 <?= $invitation->theme->color_palette === 'light' ? 'border-dark' : 'border-light' ?> shadow my-4 mx-auto">

                        @foreach ($filteredPhotos as $photo)
                            @if ($photo->is_groom_photo)
                                <img src="{{ asset($photo->file_path) }}" alt="{{ $photo->file_name }}"
                                    onclick="modalFoto(this)">
                            @endif
                        @endforeach
                    </div>
                    <h1 class="font-estetik1"
                        style="font-size: 2.3rem; color: <?= $invitation->theme->color_palette === 'dark' ? '#FFD700' : '#000000' ?>">
                        {{ $invitation->name }}</h1>
                    <h5 class="mt-3 mb-0"
                        style="color: <?= $invitation->theme->color_palette === 'light' ? '#000000' : '' ?>">Putra</h5>
                    <p class="mb-0"
                        style="color: <?= $invitation->theme->color_palette === 'light' ? '#000000' : '' ?>">
                        {{ $invitation->wali_name }}</p>

                </div>

                <h1 class="font-estetik my-4"
                    style="font-size: 4rem; color: <?= $invitation->theme->color_palette === 'dark' ? '#FFD700' : '#000000' ?>">
                    &</h1>

                <div data-aos="fade-left" data-aos-duration="2000">
                    <div
                        class="cropper border border-3 <?= $invitation->theme->color_palette === 'light' ? 'border-dark' : 'border-light' ?> shadow my-4 mx-auto">
                        @foreach ($filteredPhotos as $photo)
                            @if ($photo->is_bride_photo)
                                <img src="{{ asset($photo->file_path) }}" alt="{{ $photo->file_name }}"
                                    onclick="modalFoto(this)">
                            @endif
                        @endforeach
                    </div>
                    <h1 class="font-estetik1"
                        style="font-size: 2.3rem; color: <?= $invitation->theme->color_palette === 'dark' ? '#FFD700' : '#000000' ?>">
                        {{ $invitation->name2 }}</h1>
                    <h5 class="mt-3 mb-0"
                        style="color: <?= $invitation->theme->color_palette === 'light' ? '#000000' : '' ?>">Putri</h5>
                    <p class="mb-0"
                        style="color: <?= $invitation->theme->color_palette === 'light' ? '#000000' : '' ?>">
                        {{ $invitation->wali_name2 }}</p>
                </div>
            </div>
        </div>
    </section>

    @if ($invitation->theme->color_palette === 'dark')
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#111111" fill-opacity="1"
                d="M0,192L40,181.3C80,171,160,149,240,149.3C320,149,400,171,480,165.3C560,160,640,128,720,128C800,128,880,160,960,186.7C1040,213,1120,235,1200,218.7C1280,203,1360,149,1400,122.7L1440,96L1440,0L1400,0C1360,0,1280,0,1200,0C1120,0,1040,0,960,0C880,0,800,0,720,0C640,0,560,0,480,0C400,0,320,0,240,0C160,0,80,0,40,0L0,0Z">
            </path>
        </svg>
    @endif


    <div class="container">
        <div class="text-center">
            <h1 class="font-estetik mt-0 mb-3"
                style="font-size: 2rem; color: <?= $invitation->theme->color_palette === 'light' ? '#000000' : '#FFD700' ?>">
                Allah Subhanahu Wa Ta'ala berfirman</h1>
            <p style="font-size: 0.9rem; color: <?= $invitation->theme->color_palette === 'light' ? '#000000' : '' ?>"
                class="px-2" data-aos="fade-up" data-aos-duration="1500">
                Dan di antara tanda-tanda (kebesaran)-Nya ialah Dia menciptakan pasangan-pasangan untukmu dari
                jenismu sendiri, agar kamu cenderung dan merasa tenteram kepadanya, dan Dia menjadikan di antaramu
                rasa kasih dan sayang. Sungguh, pada yang demikian itu benar-benar terdapat tanda-tanda
                (kebesaran Allah) bagi kaum yang berpikir.
            </p>
            <span class="mb-0"
                style="color: <?= $invitation->theme->color_palette === 'light' ? '#000000' : '#FFD700' ?>"
                data-aos="fade-up"><strong>QS. Ar-Rum Ayat 21</strong></span>
        </div>
    </div>
    @if ($invitation->theme->color_palette === 'dark')
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#111111" fill-opacity="1"
                d="M0,96L30,106.7C60,117,120,139,180,154.7C240,171,300,181,360,186.7C420,192,480,192,540,181.3C600,171,660,149,720,154.7C780,160,840,192,900,208C960,224,1020,224,1080,208C1140,192,1200,160,1260,138.7C1320,117,1380,107,1410,101.3L1440,96L1440,320L1410,320C1380,320,1320,320,1260,320C1200,320,1140,320,1080,320C1020,320,960,320,900,320C840,320,780,320,720,320C660,320,600,320,540,320C480,320,420,320,360,320C300,320,240,320,180,320C120,320,60,320,30,320L0,320Z">
            </path>
        </svg>
    @endif


    <section
        style="background-color: <?= $invitation->theme->color_palette === 'dark' ? '#111111' : '' ?> !important; margin-top: -5px; margin-bottom: -5px;"
        id="tanggal">
        <div class="container">
            <div class="text-center">
                <h1 class="font-estetik py-3"
                    style="font-size: 2rem; color: {{ $invitation->theme->color_palette === 'light' ? '#000000' : '#FFD700' }}">
                    Waktu Menuju Acara</h1>

                <div class="border rounded-pill shadow py-2 px-4 mx-2 mb-4">
                    <div class="row justify-content-center" data-waktu="2024-01-28 00:00:00" id="tampilan-waktu">
                        <div class="col-3 p-1">
                            <h2 class="d-inline m-0 p-0" id="hari"
                                style="color: {{ $invitation->theme->color_palette === 'light' ? '#000000' : '#fff' }}">
                                0</h2>
                            <small class="ms-1 me-0 my-0 p-0 d-inline">Hari</small>
                        </div>
                        <div class="col-3 p-1">
                            <h2 class="d-inline m-0 p-0" id="jam"
                                style="color: {{ $invitation->theme->color_palette === 'light' ? '#000000' : '#fff' }}">
                                0</h2>
                            <small class="ms-1 me-0 my-0 p-0 d-inline">Jam</small>
                        </div>
                        <div class="col-3 p-1">
                            <h2 class="d-inline m-0 p-0" id="menit"
                                style="color: {{ $invitation->theme->color_palette === 'light' ? '#000000' : '#fff' }}">
                                0</h2>
                            <small class="ms-1 me-0 my-0 p-0 d-inline">Menit</small>
                        </div>
                        <div class="col-3 p-1">
                            <h2 class="d-inline m-0 p-0" id="detik"
                                style="color: {{ $invitation->theme->color_palette === 'light' ? '#000000' : '#fff' }}">
                                0</h2>
                            <small class="ms-1 me-0 my-0 p-0 d-inline">Detik</small>
                        </div>
                    </div>
                </div>

                <p style="font-size: 0.9rem; color: {{ $invitation->theme->color_palette === 'light' ? '#000000' : '#fff' }}"
                    class="mt-4 py-2">
                    Dengan memohon rahmat dan ridho Allah Subhanahu Wa Ta'ala, insyaAllah kami akan menyelenggarakan
                    acara :
                </p>



                <div class="overflow-x-hidden">
                    {{-- <div class="py-2" data-aos="fade-left" data-aos-duration="1500">
                            <h1 class="font-estetik" style="font-size: 2rem;">Akad</h1>
                            <p>Pukul 10.00 WIB - Selesai</p>
                        </div> --}}

                    <div class="py-2" data-aos="fade-right" data-aos-duration="1500">
                        <h1 class="font-estetik"
                            style="font-size: 2rem; color: {{ $invitation->theme->color_palette === 'light' ? '#000000' : '#fff' }}">
                            Resepsi</h1>
                        <p style="color:{{ $invitation->theme->color_palette === 'light' ? '#000000' : '' }}">
                            Pukul {{ $formattedTime }} {{ $invitation->timezone }}</p>

                    </div>
                </div>

                <div class="py-2" data-aos="fade-up" data-aos-duration="1500">
                    <a href="{{ $invitation->address_url }}" target="_blank"
                        class="btn btn-outline-light btn-sm rounded-pill shadow-sm mb-2 px-3"
                        style="color:{{ $invitation->theme->color_palette === 'light' ? '#000000' : '#FFD700' }}; border-color:{{ $invitation->theme->color_palette === 'light' ? '#000000' : '#FFD700' }}">
                        <i class="fa-solid fa-map-location-dot me-2"
                            style="color:{{ $invitation->theme->color_palette === 'light' ? '#000000' : '#FFD700' }}"></i>Lihat
                        Google Maps
                    </a>

                    <p class="mb-0 mt-1 mx-1 pb-4"
                        style="font-size: 0.9rem; color:{{ $invitation->theme->color_palette === 'light' ? '#000000' : '' }}">
                        {{ $invitation->address_invitation }}
                    </p>

                </div>
            </div>
        </div>
    </section>

    <section
        style="background-color: <?= $invitation->theme->color_palette === 'dark' ? '#111111' : '' ?> !important; margin-top: -5px; margin-bottom: -5px;"
        id="galeri">
        <div class="container pb-2 pt-4">
            <div class="card-body border rounded-4 shadow p-3">
                <h1 class="font-estetik text-center py-3" data-aos="fade-down" data-aos-duration="1500"
                    style="font-size: 2rem; color:{{ $invitation->theme->color_palette === 'light' ? '#000000' : '#FFD700' }}">
                    Galeri
                </h1>

                <div id="carouselExampleIndicators" data-aos="fade-up" data-aos-duration="1500"
                    class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                            class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                            aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                            aria-label="Slide 3"></button>
                    </div>

                    <div class="carousel-inner rounded-4">
                        @foreach ($ascendingPhotos as $key => $photo)
                            <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                                <img src="{{ asset($photo->file_path) }}" class="d-block w-100"
                                    onclick="modalFoto(this)">
                            </div>
                        @endforeach
                    </div>

                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>

                </div>

                <div id="carousel2" data-aos="fade-up" data-aos-duration="1500" class="carousel slide mt-4"
                    data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carousel2" data-bs-slide-to="0" class="active"
                            aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carousel2" data-bs-slide-to="1"
                            aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carousel2" data-bs-slide-to="2"
                            aria-label="Slide 3"></button>
                    </div>

                    <div class="carousel-inner rounded-4">
                        @foreach ($descendingPhotos as $key => $photo)
                            <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                                <img src="{{ asset($photo->file_path) }}" class="d-block w-100"
                                    onclick="modalFoto(this)">
                            </div>
                        @endforeach
                    </div>

                    <button class="carousel-control-prev" type="button" data-bs-target="#carousel2"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carousel2"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>

                </div>
            </div>
        </div>
    </section>

    @if ($invitation->theme->color_palette === 'dark')
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#111111" fill-opacity="1"
                d="M0,96L30,106.7C60,117,120,139,180,154.7C240,171,300,181,360,186.7C420,192,480,192,540,181.3C600,171,660,149,720,154.7C780,160,840,192,900,208C960,224,1020,224,1080,208C1140,192,1200,160,1260,138.7C1320,117,1380,107,1410,101.3L1440,96L1440,0L1410,0C1380,0,1320,0,1260,0C1200,0,1140,0,1080,0C1020,0,960,0,900,0C840,0,780,0,720,0C660,0,600,0,540,0C480,0,420,0,360,0C300,0,240,0,180,0C120,0,60,0,30,0L0,0Z">
            </path>
        </svg>
    @endif

    <div class="container">
        <div class="py-4">
            <div class="text-center">
                <h1 class="font-estetik mt-0 mb-3"
                    style="font-size: 3rem; color:{{ $invitation->theme->color_palette === 'light' ? '#000000' : '#FFD700' }}">
                    Love Gift</h1>

                <p class="mb-1"
                    style="font-size: 0.9rem; color:{{ $invitation->theme->color_palette === 'light' ? '#000000' : '' }}">
                    Tanpa mengurangi rasa hormat, bagi anda yang ingin memberikan tanda kasih untuk kami, dapat melalui
                    :
                </p>


                <div class="overflow-x-hidden">
                    <div class="row justify-content-center">
                        {{-- <div class="col-12 card-body border rounded-4 shadow p-3 m-3" style="max-width: 25rem;"
                                data-aos="fade-down" data-aos-duration="1500">
                                <img src="https://upload.wikimedia.org/wikipedia/id/thumb/5/55/BNI_logo.svg/1200px-BNI_logo.svg.png"
                                    class="img-fluid rounded" width="150" alt="bni">
                                <p class="card-text mt-3 mb-0" style="font-size: 0.9rem;">
                                    No. Rekening 123456789
                                </p>
                                <p class="card-text" style="font-size: 0.9rem;">
                                    a.n Lorem ipsum dolor
                                </p>
                                <button class="btn btn-light btn-sm rounded-4" data-nomer="123456789"
                                    onclick="salin(this)" autofocus>Salin No. Rekening</button>
                            </div> --}}

                        <div class="col-12 card-body border rounded-4 shadow p-3 m-3"
                            style="max-width: 25rem; background-color:#fff" data-aos="fade-down"
                            data-aos-duration="1500">
                            <img src="{{ asset('invitation/assets/bank/' . $invitation->nama_bank . '.png') }}"
                                alt="{{ $invitation->nama_bank }}" class="img-fluid rounded" width="150"
                                alt="bank">
                            <p class="card-text mt-3 mb-0" style="font-size: 0.9rem;color: #000;font-weight: bold;">
                                No. Rekening {{ $invitation->no_rekening }}
                            </p>
                            <p class="card-text" style="font-size: 0.9rem;color: #000;font-weight: bold;">
                                a.n {{ $invitation->name_rekening }}
                            </p>
                            <button class="btn btn-light btn-sm rounded-4" data-nomer="023901016984532"
                                onclick="salin(this)" autofocus=""
                                style="background-color: #00519d; color: #FFF;">Salin No. Rekening</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <section class="m-0 p-0" id="ucapan">
        <div class="container">
            <form id="form-ucapan" method="post" action="{{ route('simpan_ucapan') }}">
                @csrf
                <div class="card-body border rounded-4 shadow p-3">
                    <h1 class="font-estetik text-center mb-3"
                        style="font-size: 3rem; color:{{ $invitation->theme->color_palette === 'light' ? '#000000' : '#FFD700' }}">
                        Ucapan & Doa</h1>

                    <input type="hidden" id="idbalasan">
                    <div class="mb-1" id="balasan"></div>
                    <div class="mb-3">
                        <label for="formnama" class="form-label"
                            style="color: {{ $invitation->theme->color_palette === 'light' ? '#000000' : '' }}">Nama</label>
                        <input type="text" class="form-control shadow-sm" id="formnama" name="formnama"
                            placeholder="Isikan Nama Anda"
                            style="color: {{ $invitation->theme->color_palette === 'light' ? '#000000' : '' }}">
                    </div>
                    <div class="mb-3">
                        <label for="hadiran" class="form-label" id="labelhadir"
                            style="color: {{ $invitation->theme->color_palette === 'light' ? '#000000' : '' }}">Kehadiran</label>
                        <select class="form-select shadow-sm" aria-label="selectkehadiran" id="hadiran"
                            name="hadiran"
                            style="color: {{ $invitation->theme->color_palette === 'light' ? '#FFFFFF' : '' }}">
                            <option value="0" selected>Konfirmasi Kehadiran</option>
                            <option value="1">Hadir</option>
                            <option value="2">Berhalangan</option>
                        </select>

                    </div>
                    <div class="mb-3">
                        <label for="formpesan" class="form-label"
                            style="color: {{ $invitation->theme->color_palette === 'light' ? '#000000' : '' }}">Ucapan
                            & Doa</label>
                        <textarea class="form-control shadow-sm" id="formpesan" name="formpesan" rows="4"
                            placeholder="Tulis Ucapan & Doa"
                            style="color: {{ $invitation->theme->color_palette === 'light' ? '#FFFFFF' : '#000000' }};
                                   caret-color: {{ $invitation->theme->color_palette === 'light' ? '#FFFFFF' : '#000000' }};
                                   ::placeholder {{ $invitation->theme->color_palette === 'light' ? '' : '{color: #000000;}' }}">
                        </textarea>


                    </div>

                    <div class="d-grid mb-2">
                        <button class="btn btn-primary btn-sm rounded-4 shadow"
                            style="background-color: {{ $invitation->theme->color_palette === 'light' ? '#000000' : '#FFD700' }}; border-color: {{ $invitation->theme->color_palette === 'light' ? '#000000' : '#FFD700' }}"
                            type="submit">
                            Kirim<i class="fa-solid fa-paper-plane ms-1"></i>
                        </button>
                    </div>

                </div>
            </form>

            {{-- Tampilkan Data dari ucapan --}}
            @foreach ($invitationGreetings as $invitationGreeting)
                <div class="rounded-4 mt-4 mb-2">
                    <div class="card-body bg-light shadow p-3 m-0 rounded-4">
                        <div class="d-flex flex-wrap justify-content-between align-items-center">
                            <p class="text-dark text-truncate m-0 p-0" style="font-size: 0.95rem;">
                                <strong class="me-1">{{ $invitationGreeting->greeting->nama }}</strong>
                                @if ($invitationGreeting->greeting->kehadiran == 'hadir')
                                    <i class="fa-solid fa-circle-check text-success"></i>
                                @elseif ($invitationGreeting->greeting->kehadiran == 'berhalangan')
                                    <i class="fa-solid fa-circle-xmark text-danger"></i>
                                @endif
                            </p>
                            <small class="text-dark m-0 p-0"
                                style="font-size: 0.75rem;">{{ \Carbon\Carbon::parse($invitationGreeting->greeting->created_at)->diffForHumans() }}</small>
                        </div>
                        <hr class="text-dark my-1">
                        <p class="text-dark mt-0 mb-1 mx-0 p-0" style="white-space: pre-line">
                            {{ $invitationGreeting->greeting->ucapan_doa }}</p>
                    </div>
                </div>
                <hr>
            @endforeach



        </div>
    </section>

    @if ($invitation->theme->color_palette === 'dark')
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#111111" fill-opacity="1"
                d="M0,224L34.3,234.7C68.6,245,137,267,206,266.7C274.3,267,343,245,411,234.7C480,224,549,224,617,213.3C685.7,203,754,181,823,197.3C891.4,213,960,267,1029,266.7C1097.1,267,1166,213,1234,192C1302.9,171,1371,181,1406,186.7L1440,192L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z">
            </path>
        </svg>
    @endif

    <div
        style="background-color: <?= $invitation->theme->color_palette === 'dark' ? '#111111' : '' ?> !important; margin-top: -5px; padding-bottom: 4rem;">
        <div class="container">
            <div class="text-center">
                <p style="font-size: 0.9rem; color: <?= $invitation->theme->color_palette === 'light' ? 'black' : '' ?>;"
                    class="pt-2 pb-1 px-2" data-aos="fade-up" data-aos-duration="1500">
                    Merupakan suatu kehormatan dan kebahagiaan bagi kami apabila, Bapak / Ibu / Saudara / i.
                    berkenan hadir untuk memberikan do'a restunya kami ucapkan terimakasih.
                </p>

                <h1 class="font-estetik"
                    style="color: <?= $invitation->theme->color_palette === 'dark' ? '#FFD700' : 'black' ?>"
                    data-aos="fade-up" data-aos-duration="2000">
                    Wassalamualaikum
                    Warahmatullahi Wabarakatuh
                </h1>

                <hr class="mt-3 mb-2">
                <div class="row align-items-center justify-content-between flex-column flex-sm-row">
                    <div class="col-auto">
                        <small class="text-light">
                            <center>
                                <a href="https://couplemoment.com/" target="_blank"
                                    style="color: <?= $invitation->theme->color_palette === 'dark' ? '#fff' : 'black' ?>">
                                    By Couple Moment.
                                </a>
                            </center>
                        </small>
                    </div>
                    {{-- <div class="col-auto">
                            <small>
                                <i class="fa-brands fa-github me-1"></i><a target="_blank"
                                    href="https://github.com/endahabdullah/undangan">endahabdullah</a>
                            </small>
                        </div> --}}
                </div>
            </div>
        </div>
    </div>
    </main>

    <button type="button" id="tombol-musik" style="display: none;"
        class="btn btn-light btn-sm rounded-circle btn-music" onclick="play(this)" data-status="true"
        data-url="{{ asset('') . $invitation->soundbank->file_mp3 }}">

        {{-- <button type="button" id="tombol-musik" style="display: none;"
        class="btn btn-light btn-sm rounded-circle btn-music" onclick="play(this)" data-status="true"
        data-url="{{ asset('invitation/assets/music/sound2.mp3') }}"> --}}
        <i class="fa-solid fa-circle-pause"></i>
    </button>

    <div class="loading hidden" id="loading" style="opacity: 1;">
        <div class="d-flex justify-content-center align-items-center" style="height: 100vh !important;">
            <div class="progress w-75" role="progressbar">
                <div class="progress-bar" id="bar" style="width: 0%">0%</div>
            </div>
        </div>
    </div>

    <!-- Preloader Section -->
    <div class="preloader">
        <img src="{{ asset('invitation/assets/images/icon-park_oval-love-two.svg') }}" alt="Couple Moment">
        <p class="couple-moment-text">Couple Moment</p>
    </div>

    <div class="modal fade" id="modalFoto" tabindex="-1" aria-labelledby="modalFotoLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="d-flex justify-content-center align-items-center" style="height: 100%;">
                        <img src="" class="w-100" alt="foto" id="showModalFoto">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal" id="exampleModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-fullscreen m-0">
            <div class="modal-content m-0 p-0"
                style="background-image: url({{ $invitation->theme->background_img }}); background-size: cover; background-repeat: no-repeat;">
                <div class="d-flex justify-content-center align-items-center" style="height: 100vh !important;">
                    <div class="text-center">
                        <h1 class="font-estetik mb-4"
                            style="font-size: 2.2rem; color: <?= $invitation->theme->color_palette === 'dark' ? '#FFD700' : '#000000' ?>">
                            The Wedding Of</h1>


                        <div
                            class="cropper border border-3 {{ $invitation->theme->color_palette === 'light' ? 'border-dark' : 'border-light' }} shadow my-4 mx-auto">
                            @foreach ($filteredPhotos as $photo)
                                @if ($photo->is_title_photo)
                                    <img src="{{ asset($photo->file_path) }}" alt="{{ $photo->file_name }}"
                                        style="width: 100%; height: auto;">
                                @endif
                            @endforeach
                        </div>

                        <h1 class="font-estetik my-4"
                            style="font-size: 2.5rem; color: <?= $invitation->theme->color_palette === 'dark' ? '#fff' : 'black' ?>">

                            {{ $invitation->panggilan_pria }}
                            & {{ $invitation->panggilan_perempuan }}</h1>
                        {{-- <h1 class="font-estetik1 my-4" style="font-size: 2.5rem; color:#fff;">{{ $invitation->name }}
                        </h1>
                        <h1 class="font-estetik my-4" style="font-size: 2.5rem; color:#fff;">&</h1>
                        <h1 class="font-estetik1 my-4" style="font-size: 2.5rem; color:#fff;">
                            {{ $invitation->name2 }}</h1> --}}
                        <div id="namatamu"></div>
                        <div>
                            <p class="mt-0 mb-1 mx-0 p-0 <?= $invitation->theme->color_palette === 'dark' ? 'text-light' : '' ?>"
                                style="<?= $invitation->theme->color_palette === 'light' ? 'color: black;' : '' ?>">
                                Kepada Yth Bapak/Ibu/Saudara/i</p>

                            @if (Route::currentRouteName() === 'show_invitation')
                                <h2
                                    class="<?= $invitation->theme->color_palette === 'light' ? 'text-dark' : 'text-light' ?>">
                                    {{ $guestbook->guest_name }}
                                </h2>
                            @else
                                <br>
                            @endif
                        </div>
                        <button type="button"
                            class="btn <?= $invitation->theme->color_palette === 'dark' ? 'btn-light text-dark' : 'btn-dark text-light' ?> shadow rounded-4 mt-4"
                            style="background-color: <?= $invitation->theme->color_palette === 'dark' ? '#fff' : '#212529' ?>;"
                            data-bs-toggle="modal" data-bs-target="#exampleModal" onclick="buka()">
                            <i class="fa-solid fa-envelope-open me-2"></i>Buka Undangan
                        </button>

                    </div>
                </div>
            </div>
        </div>
    </div>



    <script src="https://cdnjs.cloudflare.com/ajax/libs/flipcountdown/3.0.5/jquery.flipcountdown.min.js"
        integrity="sha512-F0FIfRwSAll6Re1pINfu3ROOuk5q3WoRXsN4Ex6t42AV1hllPS2cFwHyNxra/pbMQb2lK9ip/ZEEvkDmEbPBsQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha256-qlPVgvl+tZTCpcxYJFdHB/m6mDe84wRr+l81VoYPTgQ=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"
        integrity="sha256-pQBbLkFHcP1cy0C8IhoSdxlm0CtcH5yJ2ki9jjgR03c=" crossorigin="anonymous"></script>
    <script src="{{ asset('invitation/js/app.js') }}"></script>

    <script>
        $(document).ready(function() {
            $('#form-ucapan').submit(function(e) {
                e.preventDefault(); // Mencegah form melakukan submit biasa

                $.ajax({
                    type: 'POST',
                    url: $(this).attr('action'),
                    data: $(this).serialize(),
                    success: function(response) {
                        console.log(response);
                        alert('Ucapan berhasil disimpan.');
                        $('#formnama').val('');
                        $('#hadiran').val('');
                        $('#formpesan').val('');
                        $('#ucapan').append(`
    <div class="rounded-4 mt-4 mb-2">
        <div class="card-body bg-light shadow p-3 m-0 rounded-4">
            <div class="d-flex flex-wrap justify-content-between align-items-center">
                <p class="text-dark text-truncate m-0 p-0" style="font-size: 0.95rem;">
                    <strong class="me-1">${response.greeting.nama}</strong>
                    ${response.greeting.kehadiran == 1 ? '<i class="fa-solid fa-circle-check text-success"></i>' : '<i class="fa-solid fa-circle-xmark text-danger"></i>'}
                </p>
                <small class="text-dark m-0 p-0" style="font-size: 0.75rem;">Baru saja</small>
            </div>
            <hr class="text-dark my-1">
            <p class="text-dark mt-0 mb-1 mx-0 p-0" style="white-space: pre-line">${response.greeting.ucapan_doa}</p>
        </div>
    </div>
    <hr>
`);

                    },
                    error: function(xhr, status, error) {
                        alert('Terjadi kesalahan. Silakan coba lagi.');
                    }
                });


            });
        });
    </script>

    </body>

</html>

<script>
    // Set the date we're counting down to
    var countDownDate = new Date("{{ $formattedDateTime }}").getTime();

    // Update the countdown every 1 second
    var x = setInterval(function() {

        // Get the current date and time
        var now = new Date().getTime();

        // Calculate the remaining time
        var distance = countDownDate - now;

        // Calculate days, hours, minutes, and seconds
        var days = Math.floor(distance / (1000 * 60 * 60 * 24));
        var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((distance % (1000 * 60)) / 1000);

        // Display the countdown in the HTML elements
        document.getElementById("hari").innerHTML = days;
        document.getElementById("jam").innerHTML = hours;
        document.getElementById("menit").innerHTML = minutes;
        document.getElementById("detik").innerHTML = seconds;

        // If the countdown is over, display a message
        if (distance < 0) {
            clearInterval(x);
            document.getElementById("tampilan-waktu").innerHTML =
                "<h2 style=\"color:{{ $invitation->theme->color_pallete === 'light' ? '#FFD700' : '#000000' }}\">Waktu Acara Telah Dimulai</h2>";

        }
    }, 1000);
</script>
