<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Aldy & Rinta</title>

    <!-- Favicons -->
    <link href="{{ asset('theme/2.jpeg') }}" rel="icon">
    <link href="{{ asset('theme/2.jpeg') }}" rel="apple-touch-icon">

    <link rel="stylesheet" href="{{ asset('css/invitation.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css" integrity="sha512-b2QcS5SsA8tZodcDtGRELiGv5SaKSk1vDHDaQRda0htPYWZ6046lr3kJ5bAAQdpV2mmA/4v0wQF9MyU6/pDIAg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap-grid.min.css"
        integrity="sha512-EAgFb1TGFSRh1CCsDotrqJMqB2D+FLCOXAJTE16Ajphi73gQmfJS/LNl6AsjDqDht6Ls7Qr1KWsrJxyttEkxIA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <!-- Audio Player -->
    <audio id="audioPlayer" style="display: none" controls autoplay >
        <source src="{{ asset('audio/Kenny G - The Moment (Official Video).mp3') }}" type="audio/mpeg">
        Your browser does not support the audio element.
    </audio>

    <!-- Tombol Floating di Pojok Kanan Bawah -->
    <button id="floatingButton" onclick="toggleAudio()"><i class="bi bi-music-note-list"></i></button>


    <div class="image-container">
        <div class="image-column">
            {{-- Section 1 --}}
            <div class="animate__animated">
                <img src="{{ asset('theme/4.webp') }}" alt="">
            </div>
            <div class="text1">
                <div class="animate__animated animate__fadeInUp">THE WEDDING OF</div>
            </div>
            <div class="text2">
                <div class="animate__animated animate__fadeInUp">Aldy</div>
            </div>
            <div class="text3">
                <div class="animate__animated animate__fadeInUp">&</div>
            </div>
            <div class="text4">
                <div class="animate__animated animate__fadeInUp">Rinta</div>
            </div>
            <div class="text5">
                <div class="animate__animated animate__fadeInUp">7 JANUARI 2024</div>
            </div>
            <div class="text6">
                <div class="animate__animated animate__fadeInUp">KEPADA YTH. <br> BAPAK/IBU/SAUDARA/I</div>
            </div>
            <div class="text7">
                <div class="animate__animated animate__fadeInUp"></div>
            </div>
            <div class="text8">
                <a href="#" class="bukaUndangan animate__animated animate__fadeInUp">BUKA UNDANGAN</a>
            </div>
            {{-- End of Section 1 --}}
            @include('admin.invitation-pages.test2')
            @include('admin.invitation-pages.test3')
            @include('admin.invitation-pages.test4')
            @include('admin.invitation-pages.test5')
            @include('admin.invitation-pages.test6')
            @include('admin.invitation-pages.test7')
            @include('admin.invitation-pages.test8')
            @include('admin.invitation-pages.test9')
        </div>
    </div>
</body>

</html>

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.min.js"
    integrity="sha512-3dZ9wIrMMij8rOH7X3kLfXAzwtcHpuYpEgQg1OA4QAob1e81H8ntUQmQm3pBudqIoySO5j0tHN4ENzA6+n2r4w=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.8/dist/umd/popper.min.js"></script>

<!-- Skrip JavaScript -->
<script>
    var audioPlayer = document.getElementById('audioPlayer');
    var floatingButton = document.getElementById('floatingButton');

    // Function untuk memulai atau menghentikan audio
    function toggleAudio() {
        if (audioPlayer.paused) {
            audioPlayer.play();
            floatingButton.innerHTML = '<i class="bi bi-volume-mute-fill"></i>';
        } else {
            audioPlayer.pause();
            audioPlayer.currentTime = 0;
            floatingButton.innerHTML = '<i class="bi bi-volume-up-fill"></i>';
        }
    }

    // Event listener untuk mengubah teks tombol saat audio selesai
    audioPlayer.addEventListener('ended', function() {
        floatingButton.innerHTML = 'Putar Lagu';
    });

    // Floating Button Follow Scroll
    window.onscroll = function() {
        floatingButton.style.bottom = '70px';
        floatingButton.style.right = '14px';
    };
</script>
