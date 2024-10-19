<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Geopark Ijen</title>
    <link rel="shortcut icon" href="{{ asset('assets/logo-ijen.png') }}" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('destinasi.css') }}">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
</head>

<body>
    @include('layouts.navbar')
    <div class="section2">
        <div class="content2">
            <div class="back-btn">
                <a href="index.html">
                    <i class='bx bx-arrow-back'></i>
                    <p>Kembali</p>
                </a>
            </div>
            <div class="col-galeri-detail">
                <div class="left-galeri">
                    <div>
                        <img src="assets/unnamed.jpg" alt="">
                        <div class="bg-shadow"></div>
                    </div>
                    <div>
                        <img src="assets/unnamed2.jpg" alt="">
                        <div class="bg-shadow"></div>
                    </div>

                </div>
                <div class="right-galeri">
                    <img src="assets/cats-c997a1bc4550cfe565c06ce35a546443.jpg" alt="">
                    <div class="bg-shadow"></div>
                </div>
            </div>
            <div class="title-destinasi">Kawah Wurung</div>
            <div class="col-lokasi-destinasi">
                <div class="lokasi-destinasi">Ijen Geopark, Jawa Timur</div>
                <img src="assets/Group 27.png" alt="">
            </div>
            <div class="col-deskripsi">
                <div class="left-deskripsi">
                    <div class="title-deskripsi">Deskripsi</div>
                    <div class="deskripsi">Kawah Wurung adalah destinasi wisata alam yang berada di Kabupaten Bondowoso,
                        Jawa Timur, tidak jauh dari kawasan Ijen Geopark. Meski namanya mengandung kata "kawah", Kawah
                        Wurung sebenarnya merupakan kaldera atau cekungan luas yang terbentuk dari aktivitas vulkanik
                        namun tidak menjadi kawah aktif. Pemandangannya didominasi oleh hamparan padang rumput hijau dan
                        perbukitan yang indah, menjadikannya tempat yang sempurna untuk trekking atau sekadar menikmati
                        suasana alam yang tenang.</div>
                    <div class="content-footer-box-footer">
                        <div class="box-sosmed"><i class='bx bxl-twitter'></i></div>
                        <div class="box-sosmed"><i class='bx bxl-instagram'></i></div>
                        <div class="box-sosmed"><i class='bx bxl-telegram'></i></div>
                        <div class="box-sosmed"><i class='bx bxl-facebook'></i></div>
                    </div>
                </div>
                <div class="right-deskripsi">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7900.720293772197!2d114.15258237770995!3d-8.064698400000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd13534fdbc47a5%3A0x5c5b0e5a9e8d9955!2sKawah%20Wurung!5e0!3m2!1sid!2sid!4v1729136722012!5m2!1sid!2sid"
                        width="260" height="200" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('destinasi.js') }}"></script>
</body>

</html>
