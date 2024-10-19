<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Geopark Ijen</title>
    <link rel="shortcut icon" href="{{ asset('assets/logo-ijen.png') }}" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('berita.css') }}">
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
            <div class="isi-content">
                <div class="left-isi-content">
                    <div class="title-berita"> Geopark Masuk Sekolah di SMPN 3 Maesan Bondowoso</div>
                    <div class="col-kalender">
                        <div class="kalender"><i class='bx bx-calendar'></i> <span>29 Agustus 2024</span></div>
                        <div class="lokasi"><i class='bx bx-map'></i> <span>Ijen Geopark, Jawa Timur</span></div>
                    </div>
                    <div class="img-berita">
                        <img src="assets/gambar-sekolah 1.png" alt="">
                    </div>
                    <div class="col-pembuat">
                        <div>Dibuat oleh <span>Bintang Agustiano</span></div>
                        <div class="content-footer-box-footer">
                            <div class="box-sosmed"><i class='bx bxl-twitter'></i></div>
                            <div class="box-sosmed"><i class='bx bxl-instagram'></i></div>
                            <div class="box-sosmed"><i class='bx bxl-telegram'></i></div>
                            <div class="box-sosmed"><i class='bx bxl-facebook'></i></div>
                        </div>
                    </div>
                    <div class="deskripsi">
                        Sebanyak 215 siswa dari kelas 7-8 SMPN 2 Maesan Bondowoso mengikuti kegiatan Geopark Masuk
                        Sekolah yang diselenggarakan oleh Ijen Geopark. Kegiatan ini merupakan rangkaian P5 (Pendidikan,
                        Penelitian, Perlindungan, Promosi, dan Pemberdayaan Masyarakat) yang bertujuan untuk mengenalkan
                        Ijen Geopark kepada masyarakat, khususnya siswa-siswi SMPN 2 Maesan Bondowoso. Kegiatan ini
                        dilaksanakan pada tanggal 13 November 2023 di SMPN 3 Bondowoso.
                    </div>
                </div>

                <div class="right-isi-content">
                    <div>Berita lainnya</div>
                    <div class="col-berita">
                        <div class="left-berita">
                            <img src="assets/green_camp.jpg" alt="">
                        </div>
                        <div class="right-berita">
                            <div class="kalender"><i class='bx bx-calendar'></i> <span>29 Agustus 2024</span></div>
                            <div> Ijen Geopark - Kaldera Perkemahan Hijau</div>
                        </div>
                    </div>
                    <div class="col-berita">
                        <div class="left-berita">
                            <img src="assets/WhatsApp_Image_2022-06-13_at_11_26_30.jpeg" alt="">
                        </div>
                        <div class="right-berita">
                            <div class="kalender"><i class='bx bx-calendar'></i> <span>29 Agustus 2024</span></div>
                            <div> Kedatangan Tim Asesor UNESCO di Kawasan Ijen Geopark</div>
                        </div>
                    </div>
                    <div class="col-berita">
                        <div class="left-berita">
                            <img src="assets/maxresdefault.jpg" alt="">
                        </div>
                        <div class="right-berita">
                            <div class="kalender"><i class='bx bx-calendar'></i> <span>29 Agustus 2024</span></div>
                            <div> Perjalanan Hari Kedua Asesor UNESCO di Ijen Geopark</div>
                        </div>
                    </div>
                    <div class="col-berita">
                        <div class="left-berita">
                            <img src="assets/download.jfif" alt="">
                        </div>
                        <div class="right-berita">
                            <div class="kalender"><i class='bx bx-calendar'></i> <span>29 Agustus 2024</span></div>
                            <div> Perjalanan Hari Ketiga Asesor UNESCO di Ijen Geopark</div>
                        </div>
                    </div>
                    <div class="col-berita">
                        <div class="left-berita">
                            <img src="assets/download (1).jfif" alt="">
                        </div>
                        <div class="right-berita">
                            <div class="kalender"><i class='bx bx-calendar'></i> <span>29 Agustus 2024</span></div>
                            <div> Perjalanan Hari Keempat Asesor UNESCO di Ijen Geopark</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('berita.js') }}"></script>
</body>

</html>
