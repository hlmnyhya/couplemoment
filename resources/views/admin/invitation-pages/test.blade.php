<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Test Invitation</title>
    <link rel="stylesheet" href="{{ asset('css/invitation.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
</head>
<body>
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
                <div class="animate__animated animate__fadeInUp">07 JANUARI 2023</div>
            </div>
            <div class="text6">
                <div class="animate__animated animate__fadeInUp">KEPADA YTH. <br> BAPAK/IBU/SAUDARA/I</div>
            </div>
            <div class="text7">
                <div class="animate__animated animate__fadeInUp">NAMA TAMU</div>
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
