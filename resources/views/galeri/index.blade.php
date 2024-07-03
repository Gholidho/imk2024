@extends('layout.main')

@section('styles')
    <style>
        .carousel-item img {
            width: auto;
            max-width: 600px;
            height : auto;
            max-height: 600px; 
            margin: 0 auto; 
        }

        .carousel-item {
            transition: transform 0.6s ease, filter 0.6s ease; 
        }

        .carousel-item.active img {
            filter: brightness(100%); 
        }

        .carousel-item:not(.active) img {
            filter: brightness(50%); 
        }

        .carousel-inner {
            overflow: hidden; 
            position: relative; 
            width: 100%; 
        }
        .carousel-control-prev-icon {
            background-color: transparent; 
            filter: invert(100%) sepia(100%) saturate(0%) hue-rotate(190deg) brightness(100%) contrast(100%);
            
        }

        .carousel-control-next-icon {
            background-color: transparent; 
            filter: invert(100%) sepia(100%) saturate(0%) hue-rotate(190deg) brightness(100%) contrast(100%);
           
        }

        
        .carousel-control-prev, 
        .carousel-control-next {
            background-color: rgba(0, 0, 0, 0.5); 
            border-radius: 50%; 
            width: 40px; 
            height: 40px; 
            display: flex; 
            align-items: center; 
            justify-content: center; 
        }

        .carousel-control-prev:hover,
        .carousel-control-next:hover {
            background-color: rgba(0, 0, 0, 0.7); 
        }

        .carousel-control-next, .carousel-control-prev{
            top: 50%;
            bottom: 50%;
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
                            <h1 class="">GALERI</h1>
                            <p class="mb-0">Dokumentasi kegiatan pelayanan yang telah dilaksanakan oleh Dinas Kependudukan Kabupaten Trenggalek</p>
                        </div>
                    </div>
                </div>
            </div>
            <nav class="breadcrumbs">
                <div class="container">
                    <ol>
                        <li class="upper"><a href="/">Home</a></li>
                        <li class="current">Galeri</li>
                    </ol>
                </div>
            </nav>
        </div><!-- End Page Title -->
<br>
        <div class="container">
            <div class="card">
                <div class="card-header color-secondary">
                <div class="card-title">
                    <h4> <strong> Jempol Keren </strong> </h4>
                </div>
                </div>
                    <!-- Carousel Pertama -->
                    <div id="carouselJempolKeren" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="{{ asset('/img/galeri/anticidro_25032021.jpg') }}" class="d-block w-100" alt="klak">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('/img/galeri/jempolkeren_.jpg') }}" class="d-block w-100" alt="error">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('/img/galeri/palingoke_24062021.jpg') }}" class="d-block w-100" alt="unknown">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('/img/galeri/pelitamahir_12072021.jpg') }}" class="d-block w-100" alt="unfound">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselJempolKeren" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="false"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselJempolKeren" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="false"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
            </div>
            
            <br>

            <div class="card">
                <div class="card-header color-secondary">
                <div class="card-title">
                    <h4> <strong> Anticidro </strong> </h4>
                </div>
                </div>
                    <!-- Carousel Kedua -->
                    <div id="carouselAnticidro" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="{{ asset('/img/galeri/anticidro/anticidro_1.jpg') }}" class="d-block w-100" alt="klak">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('/img/galeri/anticidro/anticidro_0.jpg') }}" class="d-block w-100" alt="error">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('/img/galeri/anticidro/anticidro_2.jpg') }}" class="d-block w-100" alt="unknown">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('/img/galeri/anticidro/anticidro_3.jpg') }}" class="d-block w-100" alt="unfound">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselAnticidro" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="false"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselAnticidro" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="false"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>

            </div>

            <br>

            <div class="card">
                <div class="card-header color-secondary">
                <div class="card-title">
                    <h4> <strong> Paling Oke </strong> </h4>
                </div>
                </div>
                    <!-- Carousel Ketiga -->
                    <div id="carouselPalingoke" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="{{ asset('/img/galeri/palingoke/palingoke_1.jpg') }}" class="d-block w-100" alt="klak">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('/img/galeri/palingoke/palingoke_2.jpg') }}" class="d-block w-100" alt="error">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('/img/galeri/palingoke/palingoke3.jpg') }}" class="d-block w-100" alt="unknown">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('/img/galeri/anticidro/anticidro_3.jpg') }}" class="d-block w-100" alt="unfound">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselPalingoke" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="false"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselPalingoke" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="false"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                    
            </div>
            <br>


        </div>
    </main>
@endsection

@section('scripts')
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script>
         document.addEventListener('DOMContentLoaded', function () {
        var carouselElements = document.querySelectorAll('.carousel');
        carouselElements.forEach(function(carouselElement) {
            var carousel = new bootstrap.Carousel(carouselElement, {
                interval: 2000, 
                ride: 'carousel'
            });

            carouselElement.addEventListener('slide.bs.carousel', function (event) {
                console.log('Carousel item ' + event.to + ' is now visible');
            });
        });
    });
    </script>
@endsection
