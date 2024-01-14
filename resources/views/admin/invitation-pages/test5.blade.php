<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Test Invitation</title>
    <link rel="stylesheet" href="{{ asset('css/invitation5.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
</head>

<body>
    <div class="image-container-d">
        <div class="image-column-d">
            {{-- Section 3 --}}
            <div class="animate__animated">
                <img src="{{ asset('theme/4.webp') }}" alt="">
                <img class="ring-a animate__animated animate__fadeInUp" src="{{ asset('theme/ring.png') }}"
                    alt="">
            </div>
            <div class="text1-e">
                <div class="animate__animated animate__fadeInUp">Resepsi</div>
            </div>
            <div class="text2-e">
                <div class="animate__animated animate__fadeInUp">Minggu</div>
            </div>
            <div class="text3-e">
                <div class="animate__animated animate__fadeInUp">Januari</div>
            </div>
            <div class="text4-e">
                <div class="animate__animated animate__fadeInUp">7</div>
            </div>
            <div class="text5-e">
                <div class="animate__animated animate__fadeInUp">Pukul 09:00 WITA</div>
            </div>
            <div class="text6-e">
                <div class="animate__animated animate__fadeInUp">Lokasi Acara</div>
            </div>
            <div class="text7-e">
                <div class="animate__animated animate__fadeInUp">Kediaman Mempelai Wanita</div>
            </div>
            <div class="text8-e">
                <div class="animate__animated animate__fadeInUp">Jl. Sungai Jelai, Desa Sungai Jelai <br> Kec. Tambang
                    Ulang</div>
            </div>

            {{-- <div class="countdown-container"> --}}
            <div class="countdown-container">
                <div class="text9-d">
                    <div class="hari animate__animated animate__fadeInUp" id="days" style="font-family: DM SERIF DISPLAY"> <br> Hari</div>
                </div>
                <div class="text10-d">
                    <div class="jam animate__animated animate__fadeInUp" id="hours" style="font-family: DM SERIF DISPLAY">0 <br> Jam</div>
                </div>
                <div class="text11-d">
                    <div class="menit animate__animated animate__fadeInUp" id="minutes" style="font-family: DM SERIF DISPLAY">0 <br> Menit</div>
                </div>
                <div class="text12-d">
                    <div class="detik animate__animated animate__fadeInUp" id="seconds" style="font-family: DM SERIF DISPLAY">0 <br> Detik</div>
                </div>
            </div>
            {{-- </div> --}}
            {{-- End of Section 3 --}}
        </div>
    </div>
</body>

</html>

<script>
    var countdownDate = new Date("Jan 7, 2024 09:00:00 GMT+0800").getTime();

    var x = setInterval(function() {
        var now = new Date().getTime();
        var distance = countdownDate - now;

        var days = Math.floor(distance / (1000 * 60 * 60 * 24));
        var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((distance % (1000 * 60)) / 1000);

        document.getElementById("days").innerHTML = days + " <br> Hari";
        document.getElementById("hours").innerHTML = hours + " <br> Jam";
        document.getElementById("minutes").innerHTML = minutes + " <br> Menit";
        document.getElementById("seconds").innerHTML = seconds + " <br> Detik";

        if (distance < 0) {
            clearInterval(x);
            document.getElementById("days").innerHTML = "EXPIRED";
            document.getElementById("hours").innerHTML = "";
            document.getElementById("minutes").innerHTML = "";
            document.getElementById("seconds").innerHTML = "";
        }
    }, 1000);
</script>
