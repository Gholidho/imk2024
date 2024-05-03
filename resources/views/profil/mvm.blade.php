@extends('layout.main')

@section('styles')
    <style>
        /* .col-lg-8.ps-lg-5 h3 {
                                text-align: center;
                            } */

        .col-lg-8.ps-lg-5 p {
            text-align: justify;
        }
    </style>
@endsection

@section('container')
    <main class="main">

        <!-- Page Title -->
        <div class="page-title" data-aos="fade">
            <div class="heading">
                <div class="container">
                    <div class="row d-flex justify-content-center text-center">
                        <div class="col-lg-8">
                            <h1 class="">PROFIL</h1>
                            <p class="mb-0">Odio et unde deleniti. Deserunt numquam exercitationem. Officiis quo odio
                                sint voluptas consequatur ut a odio voluptatem. Sit dolorum debitis veritatis natus
                                dolores. Quasi ratione sint. Sit quaerat ipsum dolorem.</p>
                        </div>
                    </div>
                </div>
            </div>
            <nav class="breadcrumbs">
                <div class="container">
                    <ol>
                        <li><a href="index.html">Home</a></li>
                        <li class="current">Profil</li>
                    </ol>
                </div>
            </nav>
        </div><!-- End Page Title -->

        <!-- Service Details Section -->
        <section id="service-details" class="service-details section">

            <div class="container">

                <div class="row gy-5">

                    <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">

                        @include('profil.partials.service-list')

                        {{-- <div class="service-box">
                            <h4>Download Catalog</h4>
                            <div class="download-catalog">
                                <a href="#"><i class="bi bi-filetype-pdf"></i><span>Catalog PDF</span></a>
                                <a href="#"><i class="bi bi-file-earmark-word"></i><span>Catalog DOC</span></a>
                            </div>
                        </div><!-- End Services List --> --}}

                        {{-- <div class="help-box d-flex flex-column justify-content-center align-items-center">
                            <i class="bi bi-headset help-icon"></i>
                            <h4>Have a Question?</h4>
                            <p class="d-flex align-items-center mt-2 mb-0"><i class="bi bi-telephone me-2"></i>
                                <span>+1 5589 55488 55</span>
                            </p>
                            <p class="d-flex align-items-center mt-1 mb-0"><i class="bi bi-envelope me-2"></i> <a
                                    href="mailto:contact@example.com">contact@example.com</a></p>
                        </div> --}}

                    </div>

                    <div class="col-lg-8 ps-lg-5" data-aos="fade-up" data-aos-delay="200">
                        <img src="assets/img/services.jpg" alt="" class="img-fluid services-img">
                        <h3>Motto</h3>
                        <p style="text-align: center">
                            Membahagiakan Masyarakat
                        </p>
                        <h3>Visi</h3>
                        <p>
                            "TERWUJUDNYA KABUPATEN TRENGGALEK YANG MAJU MELALUI EKONOMI INKLUSIF, SUMBERDAYA MANUSIA KREATIF
                            DAN PEMBANGUNAN BERKELANJUTAN (SUSTAINABLE DEVELOPMENT)"
                        </p>
                        <h3>Misi</h3>
                        <p>
                            Mewujudkan Pemerintahan kolaboratif, dalam rangka memastikan pelayanan publik yang prima,
                            khususnya pelayanan Adminduk, Pendidikan dan Kesehatan berbasis Big Data satu data besar;
                            Tujuan RPJMD : Meningkatkan kualitas tata kelola pemerintahan dan pelayanan publik berbasis Big
                            Data
                            Sasaran RPJMD : Meningkatnya kualitas penyelenggaraan pemerintahan daerah yang bersih, kompeten,
                            profesional, kreatif dan kolaboratif demi pembangunan yang efektif dan efisien dan
                            menunjang pelayanan publik yang prima
                            Tujuan Renstra : Meningkatkan kualitas layanan E Government
                            Sasaran Renstra : 1. Meningkatnya kualitas penyelenggaraan Informasi dan Komunikasi Publik;
                            2. Meningkatnya kualitas penyelenggaraan Statistik Sektoral.

                            Mewujudkan Infrastruktur Dasar dan Infrastruktur Digital yang handal dan berwawasan lingkungan.
                            Tujuan RPJMD : Meningkatkan kualitas Infrastruktur Dasar, Infrastruktur Digital dan Lingkungan
                            Hidup
                            Sasaran RPJMD : Meningkatnya kualitas layanan Infrastuktur Dasar dan Digital
                            Tujuan Renstra : Meningkatkan kualitas layanan E Government
                            Sasaran Renstra : 1. Meningkatnya kualitas Sistem Pengembangan Aplikasi Informatika;
                            2. Meningkatnya kualitas penyelenggaraan Persandian untuk Keamanan Informasi.
                        </p>
                    </div>

                </div>

            </div>

        </section><!-- /Service Details Section -->

    </main>
@endsection
