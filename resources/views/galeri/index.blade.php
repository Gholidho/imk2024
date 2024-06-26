@extends('layout.main')

@section('styles')
    <style>
        .carousel-item img {
            width: auto;
            max-width: 600px;
            height : auto;
            max-height: 600px; /* Atur tinggi gambar sesuai kebutuhan */
            margin: 0 auto; /* Pusatkan gambar */
        }

        .carousel-item {
            transition: transform 0.6s ease, filter 0.6s ease; /* Animasi pergeseran dan efek gelap */
        }

        .carousel-item.active img {
            filter: brightness(100%); /* Gambar aktif dalam kondisi normal */
        }

        .carousel-item:not(.active) img {
            filter: brightness(50%); /* Gambar tidak aktif lebih gelap */
        }

        .carousel-inner {
            overflow: hidden; /* Pastikan overflow tersembunyi untuk menghindari scroll horizontal */
            position: relative; /* Atur posisi relatif untuk menyediakan referensi yang memungkinkan untuk absolute */
            width: 100%; /* Sesuaikan lebar */
        }
        .carousel-control-prev-icon {
            background-color: transparent; /* Hapus latar belakang default */
            filter: invert(100%) sepia(100%) saturate(0%) hue-rotate(190deg) brightness(100%) contrast(100%);
            /* Filter ini mengubah warna ikon menjadi putih. Ubah sesuai kebutuhan Anda */
        }

        /* Gaya untuk tombol Next */
        .carousel-control-next-icon {
            background-color: transparent; /* Hapus latar belakang default */
            filter: invert(100%) sepia(100%) saturate(0%) hue-rotate(190deg) brightness(100%) contrast(100%);
            /* Filter ini mengubah warna ikon menjadi putih. Ubah sesuai kebutuhan Anda */
        }

        /* Ubah warna latar belakang tombol */
        .carousel-control-prev, 
        .carousel-control-next {
            background-color: rgba(0, 0, 0, 0.5); /* Ubah latar belakang tombol menjadi semi transparan */
            border-radius: 50%; /* Membuat tombol menjadi lingkaran */
            width: 40px; /* Sesuaikan ukuran tombol */
            height: 40px; /* Sesuaikan ukuran tombol */
            display: flex; /* Pusatkan ikon dalam tombol */
            align-items: center; /* Pusatkan ikon secara vertikal */
            justify-content: center; /* Pusatkan ikon secara horizontal */
        }

        .carousel-control-prev:hover,
        .carousel-control-next:hover {
            background-color: rgba(0, 0, 0, 0.7); /* Ubah warna latar belakang tombol saat di-hover */
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
            <div class=card>
                <div class="card-header color-secondary">
                <div class="card-title">
                    <h4> <strong> Jempol Keren </strong> </h4>
                </div>
                </div>
                    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
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
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="false"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="false"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
            </div>
        </div>
    </main>
@endsection

@section('scripts')
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script>
         document.addEventListener('DOMContentLoaded', function () {
        var carouselElement = document.querySelector('#carouselExampleControls');
        if (carouselElement) {
            // Inisialisasi carousel dengan Bootstrap
            var carousel = new bootstrap.Carousel(carouselElement, {
                interval: 2000, // Waktu pergeseran otomatis, bisa disesuaikan
                ride: 'carousel'
            });

            // Tambahkan event listener untuk debugging
            carouselElement.addEventListener('slide.bs.carousel', function (event) {
                console.log('Carousel item ' + event.to + ' is now visible');
            });
        }
    });
    </script>
@endsection
