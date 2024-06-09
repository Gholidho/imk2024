@extends('layout.main')

@section('styles')
<style>
    .contact .info-item {
        padding: 20px;
        /* padding-top: 20px; */
    }

    .contact .info-item .social-icon i {
        font-size: 10px;
    }

    .contact .info-item img {
        width: auto;
        height: 38px;
    }

    .social-icon a,
    .info-item a {
        color: #E84545;
    }
</style>
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
@endsection

@section('container')
<main class="main">

    <!-- Page Title -->
    <div class="page-title" data-aos="fade">
        <div class="heading">
            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Pengaduan</h2>
                <p>Layanan Aspirasi dan Pengaduan Online Rakyat</p>
            </div><!-- End Section Title -->
            <nav class="breadcrumbs">
                <div class="container">
                    <ol>
                        <li><a href="index.html">Home</a></li>
                        <li class="current">Pengaduan</li>
                    </ol>
                </div>
            </nav>

            <div class="container">
                <div class="row d-flex justify-content-center text-center">
                    <div class="col-lg-12">
                        <section id="contact" class="contact section">
                            <div class="container" data-aos="fade-up" data-aos-delay="100">
                                <div class="row gy-4">
                                    <div class="col-lg-6">
                                        <div class="row gy-4">
                                            <div class="col-md-6">
                                                <div class="info-item" data-aos="fade" data-aos-delay="200">
                                                    <i class="bi bi-geo-alt"></i>
                                                    <h3>Alamat</h3>
                                                    <p>Ngemplak, Sumbergedong</p>
                                                    <p>Kec. Trenggalek, Kab. Trenggalek</p>
                                                    <p>Jawa Timur, 66315</p>
                                                </div>
                                            </div><!-- End Info Item -->

                                            <div class="col-md-6">
                                                <div class="info-item" data-aos="fade" data-aos-delay="400">
                                                    <i class="bi bi-whatsapp"></i>
                                                    <h3>Sosial Media</h3>
                                                    <!-- <p class="social-icon"><i class="fab fa-facebook-f"></i> disdukcapil.trenggalek</p>
                          <p class="social-icon"><i class="fab fa-instagram"></i> disdukcapil.trenggalek</p>
                          <p class="social-icon"><i class="fab fa-youtube"></i> disdukcapil trenggalek</p> -->
                                                    <p class="social-icon"><a href="https://www.facebook.com/disdukcapil.trenggalek"><i class="fab fa-facebook-f"></i> disdukcapil.trenggalek</a></p>
                                                    <p class="social-icon"><a href="https://www.instagram.com/disdukcapil.trenggalek"><i class="fab fa-instagram"></i> disdukcapil.trenggalek</a></p>
                                                    <p class="social-icon"><a href="https://www.youtube.com/channel/UCEEESG__YcRnf9qXKIxcIwQ"><i class="fab fa-youtube"></i> disdukcapil trenggalek</a></p>

                                                </div>
                                            </div><!-- End Info Item -->

                                            <div class="col-md-6">
                                                <div class="info-item" data-aos="fade" data-aos-delay="300">
                                                    <i class="bi bi-telephone"></i>
                                                    <h3>Telepon</h3>
                                                    <p>+62 81 55959 5758</p>
                                                </div>
                                            </div><!-- End Info Item -->

                                            <div class="col-md-6">
                                                <div class="info-item" data-aos="fade" data-aos-delay="400">
                                                    <i class="bi bi-envelope"></i>
                                                    <h3>Alamat Email</h3>
                                                    <p><a href="mailto:disdukcapil.trenggalek@gmail.com">disdukcapil.trenggalek@gmail.com</a></p>
                                                </div>
                                            </div><!-- End Info Item -->


                                            <div class="col-md-6">
                                                <div class="info-item" data-aos="fade" data-aos-delay="400">
                                                    <img src="img/lapor.png" alt="Alternative text for the image">
                                                    <h3>Laporan Pengaduan</h3>
                                                    <p><a href="https://www.lapor.go.id/">Lapor.id</a></p><br>
                                                </div>
                                            </div><!-- End Info Item -->

                                            <div class="col-md-6">
                                                <div class="info-item" data-aos="fade" data-aos-delay="500">
                                                    <i class="bi bi-clock"></i>
                                                    <h3>Jam Buka</h3>
                                                    <p>Senin - Kamis : 07.30 - 15.30 WIB</p>
                                                    <p>Jumat : 07.00 - 15.30 WIB</p>
                                                </div>
                                            </div><!-- End Info Item -->

                                        </div>

                                    </div>

                                    <div class="col-lg-6">
                                        <form action="forms/contact.php" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="200" style="padding: 10px 20px;">
                                            <div class="row gy-4">
                                                <h3 style="font-size: 25px; font-weight: bold;">Form Aduan</h3>
                                                <div class="col-md-12">
                                                    <input type="text" name="name" class="form-control" placeholder="Nama" required="">
                                                </div>

                                                <div class="col-md-12 ">
                                                    <input type="text" class="form-control" name="nik" placeholder="NIK" required="">
                                                </div>

                                                <div class="col-md-12 ">
                                                    <input type="email" class="form-control" name="email" placeholder="Email" required="">
                                                </div>

                                                <div class="col-md-12">
                                                    <input type="text" class="form-control" name="subject" placeholder="Persoalan" required="">
                                                </div>

                                                <div class="col-md-12">
                                                    <textarea class="form-control" name="message" rows="6" placeholder="Deskripsi Aduan" required=""></textarea>
                                                </div>

                                                <div class="col-md-12 text-center">
                                                    <div class="loading">Loading</div>
                                                    <div class="error-message"></div>
                                                    <div class="sent-message">Form Terkirim, Terima Kasih!</div>

                                                    <button type="submit">Kirim</button>
                                                </div>

                                            </div>
                                        </form>
                                    </div><!-- End Contact Form -->

                                </div>

                            </div>

                        </section><!-- /Contact Section -->

                    </div>
                </div>
            </div>
        </div>
    </div><!-- End Page Title -->
</main>
@endsection