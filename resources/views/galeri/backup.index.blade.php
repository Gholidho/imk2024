@extends('layout.main')

@section('styles')
    <style>
        .swiper-slide img {
            width: 100%; /* Atur lebar gambar sesuai kebutuhan, bisa juga menggunakan nilai absolut seperti '200px' */
            height: auto; /* Menjaga rasio aspek gambar */
            max-width: 300px; /* Maksimal lebar gambar */
            display: block;
            margin: 0 auto; /* Pusatkan gambar dalam slide */
        }
    </style>
@endsection

@section('container')
    <main class="main">

        <!-- Page Title -->
        <div class="page-title" data-aos="fade">
            <div class="heading">
                <nav class="breadcrumbs">
                    <div class="container">
                        <ol>
                            <li class="upper"><a href="index.html">Home</a></li>
                            <li class="current">Galeri</li>
                        </ol>
                        <div class="row d-flex justify-content-center text-center">
                            <div class="col-lg-8">
                                <h1 class="">GALERI</h1>
                                <p class="mb-0">Dokumentasi kegiatan pelayanan yang telah dilaksanakan oleh Dinas Kependudukan Kabupaten Trenggalek</p>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </div><!-- End Page Title -->

        <div class="container">
          
          <div class="card">
                  <div class="portfolio-details-slider swiper">
                      <script type="application/json" class="swiper-config">
                          {
                              "loop": true,
                              "speed": 600,
                              "autoplay": {
                                  "delay": 5000
                              },
                              "slidesPerView": "auto",
                              "navigation": {
                                  "nextEl": ".swiper-button-next",
                                  "prevEl": ".swiper-button-prev"
                              },
                              "pagination": {
                                  "el": ".swiper-pagination",
                                  "type": "bullets",
                                  "clickable": true
                              }
                          }
                      </script>
                    <div class="card-header color-secondary">
                        <div class="card-title">
                            <h4><strong>Jempol Keren</strong></h4>
                        </div>
                        <span class="desc-card-dashboard-sikoko">Lorem ipsum dolor sir amet</span>
                    </div>
                    <div class="card-body">
                        <div class="swiper-wrapper align-items-center">
                            <div class="swiper-slide">
                                <img src="{{ asset('/img/galeri/anticidro_25032021.jpg') }}" alt="klak">
                            </div>
                            <div class="swiper-slide">
                                <img src="{{ asset('/img/galeri/jempolkeren_.jpg') }}" alt="error">
                            </div>
                            <div class="swiper-slide">
                                <img src="{{ asset('/img/galeri/palingoke_24062021.jpg') }}" alt="unknown">
                            </div>
                            <div class="swiper-slide">
                                <img src="{{ asset('/img/galeri/pelitamahir_12072021.jpg') }}" alt="unfound">
                            </div>
                          Lorem ipsum
                        </div>
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-button-next"></div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection

@section('scripts')
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const swiperConfig = document.querySelector('.swiper-config');
            const config = JSON.parse(swiperConfig.textContent);

            new Swiper('.swiper', config);
        });
    </script>
@endsection
