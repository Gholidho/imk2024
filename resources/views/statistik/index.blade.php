@extends('layout.main')

@section('styles')
    <style>
        .about .icon-box {
            padding: 20px;
            box-shadow: 0px 0px 10px 5px rgba(0, 0, 0, 0.1);
        }

        .about .icon-box i {
            margin-bottom: 0;
        }

        .about .icon-box h3 {
            font-size: 20px;
        }

        #about button {
            text-decoration: none;
        }

        #about button .icon-box:hover {
            background-color: #e84545;
        }

        #about button .icon-box:hover h3 {
            color: white;
        }

        #about button .icon-box:hover p {
            color: white;
        }

        .about .icon-box:hover i {
            background-color: white;
            color: #e84545;
        }

        section,
        .section {
            background-color: white;
        }

        .container a {
            color: #e84545;
        }

        /* Style untuk modal pop-up */
        .modal {
            display: none;
            position: fixed;
            z-index: 1500;
            padding-top: 2em;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgb(0, 0, 0);
            background-color: rgba(0, 0, 0, 0.9);
        }

        .modal-content {
            margin: auto;
            display: block;
            width: 90%;
            /* Adjusted to be larger */
            max-width: 1000px;
            /* Adjusted to allow larger images */
        }

        @media screen and (max-width: 700px) {
            .modal-content {
                width: 100%;
                /* Full width for smaller screens */
            }
        }

        .modal-content,
        .close {
            animation-name: zoom;
            animation-duration: 0.6s;
        }

        .modal-content.zoom {
            cursor: zoom-out;
            transition: transform 0.5s ease;
        }

        .modal-content.zoom:hover {
            transform: scale(2);
            /* Adjust the scale factor as needed */
        }


        @keyframes zoom {
            from {
                transform: scale(0)
            }

            to {
                transform: scale(1)
            }
        }

        .close {
            position: absolute;
            top: 0;
            right: 50px;
            color: #fff;
            font-size: 40px;
            font-weight: bold;
            transition: 0.3s;
            cursor: pointer;
        }

        .close:hover,
        .close:focus {
            color: #bbb;
            text-decoration: none;
            cursor: pointer;
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
                            <h1 class="">Statistik</h1>
                            <p class="mb-0">Data Penduduk Kabupaten Trenggalek</p>
                        </div>
                    </div>
                </div>
            </div>
            <nav class="breadcrumbs">
                <div class="container">
                    <ol>
                        <li><a href="/">Home</a></li>
                        <li class="current">Statistik</li>
                    </ol>
                </div>
            </nav>
        </div><!-- End Page Title -->

        <section id="chart" class="chart section">
            <div class="container section-title" data-aos="fade-up">
                <h2>Jumlah Penduduk di Kabupaten Trenggalek Berdasarkan Kecamatan</h2>
            </div>
            <h3>Chart di sini</h3>
        </section>
        <section id="about" class="about section">
            <div class="container section-title" data-aos="fade-up">
                <h2>Jumlah Penduduk di Kabupaten Trenggalek</h2>
            </div>
            <div class="container justify-content-center text-center">
                <div class="row align-items-xl-center gy-5">
                    <div class="row gy-4 icon-boxes">
                        <div class="col-md-3" data-aos="fade-up" data-aos-delay="200">
                            <button id="myBtn" class="btn">
                                <div class="icon-box">
                                    <i class="fa-regular fa-calendar"></i>
                                    <h3>Usia</h3>
                                    <p>Klik untuk lihat dokumen...</p>
                                </div>
                            </button>
                        </div> <!-- End Icon Box -->
                        <div class="col-md-3" data-aos="fade-up" data-aos-delay="200">
                            <button id="myBtn" class="btn">
                                <div class="icon-box">
                                    <i class="fa-solid fa-venus-mars"></i>
                                    <h3>Jenis Kelamin</h3>
                                    <p>Klik untuk lihat dokumen...</p>
                                </div>
                            </button>
                        </div> <!-- End Icon Box -->
                        <div class="col-md-3" data-aos="fade-up" data-aos-delay="200">
                            <button id="myBtn" class="btn">
                                <div class="icon-box">
                                    <i class="fa-solid fa-school"></i>
                                    <h3>Pendidikan</h3>
                                    <p>Klik untuk lihat dokumen...</p>
                                </div>
                            </button>
                        </div> <!-- End Icon Box -->
                        <div class="col-md-3" data-aos="fade-up" data-aos-delay="200">
                            <button id="myBtn" class="btn">
                                <div class="icon-box">
                                    <i class="fa-solid fa-address-card"></i>
                                    <h3>Kepemilikan KIA</h3>
                                    <p>Klik untuk lihat dokumen...</p>
                                </div>
                            </button>
                        </div> <!-- End Icon Box -->
                    </div>
                </div>
            </div>
        </section><!-- /About Section -->
        <!-- Pop-up modal -->
        <div id="imageModal" class="modal">
            <span class="close">&times;</span>
            <embed src="https://drive.google.com/file/d/1GfZ_osds7edJ9deGJsrzDmJbuCD0KPBR/preview" class="modal-content" id="pdfContent" type="application/pdf" width="100%" height="600px"/>
        </div>
    </main>
    <script>
        function initModal() {
            // Dapatkan modal
            var modal = document.getElementById("imageModal");

            // Dapatkan tombol yang membuka modal
            var btn = document.getElementById("myBtn");

            // Dapatkan elemen <span> yang menutup modal
            var span = document.getElementsByClassName("close")[0];

            // Ketika user mengklik tombol, buka modal 
            btn.onclick = function() {
                modal.style.display = "block";
            }

            // Ketika user mengklik <span> (x), tutup modal
            span.onclick = function() {
                modal.style.display = "none";
            }

            // Ketika user mengklik di luar modal, tutup modal
            window.onclick = function(event) {
                if (event.target == modal) {
                    modal.style.display = "none";
                }
            }
        }

        // Inisialisasi pertama kali
        document.addEventListener("DOMContentLoaded", initModal);

        // Pantau perubahan DOM pada elemen tertentu
        var targetNode = document.getElementById('service-content');
        var observer = new MutationObserver(function(mutationsList, observer) {
            for (var mutation of mutationsList) {
                if (mutation.type === 'childList') {
                    initModal();
                }
            }
        });

        observer.observe(targetNode, {
            attributes: false,
            childList: true,
            subtree: false
        });
    </script>
@endsection
