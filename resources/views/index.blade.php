<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Geopark Ijen</title>
    <link rel="shortcut icon" href="{{ asset('assets/logo-ijen.png') }}" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('style.css') }}">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
</head>

<body>
    @include('layouts.navbar')
    <div class="section2">
        <div class="content2">
            <div class="pengalaman-nyata">Pengalaman Nyata</div>
            <div class="title">Jelajahi Ijen Geopark Sekarang</div>
            <a href="#section3" class="col-btn-content2">
                <button>SELANJUTNYA</button>
                <div><i class='bx bx-right-arrow-alt'></i></div>
            </a>
        </div>
    </div>
    <div class="section3" id="section3">
        <div class="content3">
            <div class="left3">
                <div class="tentang-kami" data-aos="fade-up">Tentang Kami</div>
                <div class="title3" data-aos="fade-up">IJEN GEOPARK</div>
                <div class="deskripsi3" data-aos="fade-up">
                    Ijen Geopark Bondowoso adalah kawasan yang menjadi bagian dari Geopark Ijen, mencakup wilayah di
                    Bondowoso dan Banyuwangi, Jawa Timur. Geopark ini terkenal dengan fenomena alamnya yang menakjubkan
                </div>
                <div class="box" data-aos="fade-up">
                    <div class="left-box">
                        <img src="assets/fire.png" width="45">
                    </div>
                    <div class="right-box">
                        <div class="title-box">Fenomena Api Biru</div>
                        <div class="deskripsi-box">Saksikan salah satu keajaiban dunia, api biru di Kawah Ijen yang
                            hanya ada di beberapa tempat di dunia.</div>
                    </div>
                </div>
                <div class="box" data-aos="fade-up">
                    <div class="left-box">
                        <img src="assets/lokasi.png" width="48">
                    </div>
                    <div class="right-box">
                        <div class="title-box">Bondowoso Jawa Timur</div>
                        <div class="deskripsi-box">Ijen Geopark terletak di perbatasan Kabupaten Bondowoso dan Kabupaten
                            Banyuwangi, Provinsi Jawa Timur, Indonesia. </div>
                    </div>
                </div>
            </div>
            <div class="right3">
                <img src="assets/Group 1.png" width="500">
            </div>
        </div>
    </div>
    <div class="section4" id="section4">
        <div class="content4">
            <div class="left4">
                <div class="destinasi" data-aos="fade-up">Destinasi</div>
                <div class="title3" data-aos="fade-up">IJEN GEOPARK</div>
                <div class="deskripsi4" data-aos="fade-up">
                    Para wisatawan dapat menjelajahi keindahan alam Ijen Geopark, mulai dari fenomena api biru yang
                    langka, hutan tropis yang lebat, air terjun alami, hingga perkebunan kopi yang memikat</div>
                <div class="col-box4">
                    <div class="box4">
                        <div class="top-box4">
                            <div class="angka2">6 </div><span class="plus">+</span>
                        </div>
                        <div class="bottom-box4">Destinasi</div>
                    </div>
                    <div class="box4">
                        <div class="top-box4">
                            <div class="angka1">300 </div> <span class="plus">+</span>
                        </div>
                        <div class="bottom-box4">Total Akomodasi</div>
                    </div>
                </div>
            </div>
            <div class="right4">
                <div class="parent-box4">
                    <div class="box-right4 first-card">
                        <div class="col-rating">
                            <img src="assets/Rate-PNG.png" width="15" height="15">
                            <div>5.0</div>
                        </div>
                        <img src="assets/blue_fire.jpg" class="thumbnail" alt="">
                        <div class="bg-shadow"></div>
                        <div class="col-box4-footer">
                            <div>Fenomena api biru</div>
                            <div class="col-btn-box4-footer">
                                <button>Lihat detail</button>
                                <div><i class='bx bx-right-arrow-alt'></i></div>
                            </div>
                        </div>
                    </div>
                    <div class="box-right4 second-card">
                        <div class="col-rating">
                            <img src="assets/Rate-PNG.png" width="15" height="15">
                            <div>5.0</div>
                        </div>
                        <img src="assets/kawahwurung.jpg" class="thumbnail" alt="">
                        <!-- <div class="bg-shadow"></div> -->
                        <div class="col-box4-footer">
                            <div>Kawah Wurung</div>
                            <div class="col-btn-box4-footer">
                                <button>Lihat detail</button>
                                <div><i class='bx bx-right-arrow-alt'></i></div>
                            </div>
                        </div>
                    </div>
                    <div class="box-right4 third-card">
                        <div class="col-rating">
                            <img src="assets/Rate-PNG.png" width="15" height="15">
                            <div>5.0</div>
                        </div>
                        <img src="assets/Sendang-3-1.jpg" class="thumbnail" alt="">
                        <div class="bg-shadow"></div>
                        <div class="col-box4-footer">
                            <div>Air terjun kalipait</div>
                            <div class="col-btn-box4-footer">
                                <button>Lihat detail</button>
                                <div><i class='bx bx-right-arrow-alt'></i></div>
                            </div>
                        </div>
                    </div>
                    <div class="box-right4 for-card">
                        <div class="col-rating">
                            <img src="assets/Rate-PNG.png" width="15" height="15">
                            <div>5.0</div>
                        </div>
                        <img src="assets/(FILEminimizer)_Geo_Kawah_ijen.jpg" class="thumbnail" alt="">
                        <div class="bg-shadow"></div>
                        <div class="col-box4-footer">
                            <div>Kawah Ijen</div>
                            <div class="col-btn-box4-footer">
                                <button>Lihat detail</button>
                                <div><i class='bx bx-right-arrow-alt'></i></div>
                            </div>
                        </div>
                    </div>
                    <div class="box-right4 five-card">
                        <div class="col-rating">
                            <img src="assets/Rate-PNG.png" width="15" height="15">
                            <div>5.0</div>
                        </div>
                        <img src="assets/cats-c997a1bc4550cfe565c06ce35a546443.jpg" class="thumbnail" alt="">
                        <div class="bg-shadow"></div>
                        <div class="col-box4-footer">
                            <div>Air terjun blawan</div>
                            <div class="col-btn-box4-footer">
                                <button>Lihat detail</button>
                                <div><i class='bx bx-right-arrow-alt'></i></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section5" id="section5">
        <div class="content5">
            <div class="berita-terkini"><span>BERITA</span> TERKINI</div>
            <div class="deskripsi5">Dapatkan informasi terbaru dan terpercaya seputar perkembangan Ijen Geopark.</div>
            <div class="col-searching">
                <div class="icon-searching"><i class='bx bx-search'></i></div>
                <input type="text" class="searching" placeholder=" Cari berita"></input>
            </div>
            <div class="col-card">
                <div class="card">
                    <div class="header">
                        <img src="assets/gambar-sekolah 1.png">
                    </div>
                    <div class="content-card1">
                        <div class="col-tanggal">
                            <div>21</div>
                            <div>Oktober</div>
                        </div>
                        <div class="col-lokasi">
                            <img src="assets/Vector.png" width="15">
                            <div>Ijen Geopark, Jawa Timur</div>
                        </div>
                    </div>
                    <div class="content-card2">
                        <div>
                            Geopark Masuk Sekolah di SMPN 3 Maesan Bondowoso</div>
                    </div>
                    <div class="footer-card">
                        <div class="col-btn-card-footer">
                            <button>Baca selengkapnya</button>
                            <div><i class='bx bx-right-arrow-alt'></i></div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="header">
                        <img src="assets/green_camp.jpg">
                    </div>
                    <div class="content-card1">
                        <div class="col-tanggal">
                            <div>21</div>
                            <div>Oktober</div>
                        </div>
                        <div class="col-lokasi">
                            <img src="assets/Vector.png" width="15">
                            <div>Ijen Geopark, Jawa Timur</div>
                        </div>
                    </div>
                    <div class="content-card2">
                        <div>Ijen Geopark - Kaldera Perkemahan Hijau</div>
                    </div>
                    <div class="footer-card">
                        <div class="col-btn-card-footer">
                            <button>Baca selengkapnya</button>
                            <div><i class='bx bx-right-arrow-alt'></i></div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="header">
                        <img src="assets/WhatsApp_Image_2022-06-13_at_11_26_30.jpeg">
                    </div>
                    <div class="content-card1">
                        <div class="col-tanggal">
                            <div>21</div>
                            <div>Oktober</div>
                        </div>
                        <div class="col-lokasi">
                            <img src="assets/Vector.png" width="15">
                            <div>Ijen Geopark, Jawa Timur</div>
                        </div>
                    </div>
                    <div class="content-card2">
                        <div>Kedatangan Tim Asesor UNESCO di Kawasan Ijen Geopark</div>
                    </div>
                    <div class="footer-card">
                        <div class="col-btn-card-footer">
                            <button>Baca selengkapnya</button>
                            <div><i class='bx bx-right-arrow-alt'></i></div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="header">
                        <img src="assets/maxresdefault.jpg">
                    </div>
                    <div class="content-card1">
                        <div class="col-tanggal">
                            <div>21</div>
                            <div>Oktober</div>
                        </div>
                        <div class="col-lokasi">
                            <img src="assets/Vector.png" width="15">
                            <div>Ijen Geopark, Jawa Timur</div>
                        </div>
                    </div>
                    <div class="content-card2">
                        <div>Perjalanan Hari Kedua Asesor UNESCO di Ijen Geopark</div>
                    </div>
                    <div class="footer-card">
                        <div class="col-btn-card-footer">
                            <button>Baca selengkapnya</button>
                            <div><i class='bx bx-right-arrow-alt'></i></div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="header">
                        <img src="assets/download.jfif">
                    </div>
                    <div class="content-card1">
                        <div class="col-tanggal">
                            <div>21</div>
                            <div>Oktober</div>
                        </div>
                        <div class="col-lokasi">
                            <img src="assets/Vector.png" width="15">
                            <div>Ijen Geopark, Jawa Timur</div>
                        </div>
                    </div>
                    <div class="content-card2">
                        <div>Perjalanan Hari Ketiga Asesor UNESCO di Ijen Geopark</div>
                    </div>
                    <div class="footer-card">
                        <div class="col-btn-card-footer">
                            <button>Baca selengkapnya</button>
                            <div><i class='bx bx-right-arrow-alt'></i></div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="header">
                        <img src="assets/download (1).jfif">
                    </div>
                    <div class="content-card1">
                        <div class="col-tanggal">
                            <div>21</div>
                            <div>Oktober</div>
                        </div>
                        <div class="col-lokasi">
                            <img src="assets/Vector.png" width="15">
                            <div>Ijen Geopark, Jawa Timur</div>
                        </div>
                    </div>
                    <div class="content-card2">
                        <div>Perjalanan Hari Keempat Asesor UNESCO di Ijen Geopark</div>
                    </div>
                    <div class="footer-card">
                        <div class="col-btn-card-footer">
                            <button>Baca selengkapnya</button>
                            <div><i class='bx bx-right-arrow-alt'></i></div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="section6" id="section6">
        <div class="content6">
            <div class="col-line">
                <div class="line"></div>
                <div class="line"></div>
            </div>
            <div class="galeri-title">GALERI <span>IJEN GEOPARK</span></div>
            <div class="col-galeri">
                <div class="left-galeri">
                    <div class="bg-shadow-galeri">
                        <button class="btn-share">LIHAT DETAIL</button>

                    </div>
                    <div class="col-card-text-footer">
                        <div>Fenomena api biru</div>
                        <div>Ijen Geopark Bondowoso </div>
                    </div>
                    <div class="box-decoration"></div>
                </div>
                <div class="right-galeri">
                    <div class="header-galery">
                        <div class="left-header-galeri">
                            <div class="bg-shadow-galeri">
                                <button class="btn-share2">LIHAT DETAIL</button>

                            </div>
                            <div class="col-card-text-footer">
                                <div>Kawah Wurung</div>
                                <div>Ijen Geopark Bondowoso </div>
                            </div>
                            <div class="box-decoration2"></div>

                        </div>
                        <div class="right-header-galeri">
                            <div class="bg-shadow-galeri">
                                <button class="btn-share3">LIHAT DETAIL</button>

                            </div>
                            <div class="col-card-text-footer">
                                <div>Kawah Ijen</div>
                                <div>Ijen Geopark Bondowoso </div>
                            </div>
                            <div class="box-decoration3"></div>

                        </div>
                    </div>
                    <div class="footer-galery">
                        <div class="bg-shadow-galeri">
                            <button class="btn-share4">LIHAT DETAIL</button>

                        </div>
                        <div class="col-card-text-footer">
                            <div>Kawah Ijen</div>
                            <div>Ijen Geopark Bondowoso </div>
                        </div>
                        <div class="box-decoration4"></div>
                    </div>
                </div>
            </div>
            <div class="didukung-oleh"><span>DI DUKUNG</span>
                <div>OLEH</div>
            </div>

            <div class="caraousel-startup">
                <div class="col-item">
                    <div class="img-logo2"><img src="assets/logo-support9.png" alt=""></div>
                    <div class="img-logo3"><img src="assets/logo-support1.png" alt=""></div>
                    <div class="img-logo4"><img src="assets/logo-support3.png" alt=""></div>
                    <div class="img-logo5"><img src="assets/logo-support6.png" alt=""></div>
                </div>
                <div class="col-item">
                    <div class="img-logo2"><img src="assets/logo-support9.png" alt=""></div>
                    <div class="img-logo3"><img src="assets/logo-support1.png" alt=""></div>
                    <div class="img-logo4"><img src="assets/logo-support3.png" alt=""></div>
                    <div class="img-logo5"><img src="assets/logo-support6.png" alt=""></div>
                </div>
                <div class="col-item">
                    <div class="img-logo2"><img src="assets/logo-support9.png" alt=""></div>
                    <div class="img-logo3"><img src="assets/logo-support1.png" alt=""></div>
                    <div class="img-logo4"><img src="assets/logo-support3.png" alt=""></div>
                    <div class="img-logo5"><img src="assets/logo-support6.png" alt=""></div>
                </div>
            </div>
        </div>
    </div>

    @include('layouts.footer')

    <script src="{{ asset('app.js') }}"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>
