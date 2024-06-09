@extends('layout.main')

@section('styles')
    <style>
        .about .icon-box {
            padding: 20px;
            height: 12rem;
        }

        .about .icon-box i {
            margin-bottom: 0;
        }

        .about .icon-box h3 {
            font-size: 20px;
        }

        a {
            color: #e84545 !important;
        }

        a:hover .about .icon-box {
            background-color: #e84545;
            color: white;
            text-decoration: underline;
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
                            <h1 class="">Layanan Informasi</h1>
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
                        <li class="current">Layanan</li>
                    </ol>
                </div>
            </nav>
        </div><!-- End Page Title -->

        <section id="about" class="about section">
            <div class="container justify-content-center text-center">
                <div class="row align-items-xl-center gy-5">
                    <div class="row gy-4 icon-boxes">
                        <div class="col-md-3" data-aos="fade-up" data-aos-delay="200">
                            <a href="{{ route('layanan.detail') }}">
                                <div class="icon-box">
                                    <i class="fas fa-baby"></i>
                                    <h3>Akta Pengesahan Anak</h3>
                                    {{-- <p>Magni repellendus vel ullam hic officia accusantium ipsa dolor omnis dolor voluptatem</p> --}}
                                </div>
                            </a>
                        </div> <!-- End Icon Box -->

                        <div class="col-md-3" data-aos="fade-up" data-aos-delay="300">
                            <a href="{{ route('layanan.detail') }}">
                                <div class="icon-box">
                                    <i class="fas fa-hands-holding-child"></i>
                                    <h3>Akta Pengakuan Anak</h3>
                                    {{-- <p>Autem saepe animi et aut aspernatur culpa facere. Rerum saepe rerum voluptates quia</p> --}}
                                </div>
                            </a>
                        </div> <!-- End Icon Box -->

                        <div class="col-md-3" data-aos="fade-up" data-aos-delay="400">
                            <a href="{{ route('layanan.detail') }}">
                                <div class="icon-box">
                                    <i class="fa-solid fa-heart-crack"></i>
                                    <h3>Akta Perceraian</h3>
                                    {{-- <p>Omnis perferendis molestias culpa sed. Recusandae quas possimus. Quod consequatur corrupti</p> --}}
                                </div>
                            </a>
                        </div> <!-- End Icon Box -->

                        <div class="col-md-3" data-aos="fade-up" data-aos-delay="500">
                            <a href="{{ route('layanan.detail') }}">
                                <div class="icon-box">
                                    <i><img width="48" height="48"
                                            src="https://img.icons8.com/windows/64/couple-man-woman.png"
                                            alt="couple-man-woman" /></i>
                                    <h3>Akta Perkawinan</h3>
                                    {{-- <p>Sint et dolor voluptas minus possimus nostrum. Reiciendis commodi eligendi omnis quideme lorenda</p> --}}
                                </div>
                            </a>
                        </div> <!-- End Icon Box -->

                    </div>

                </div>
            </div>

        </section><!-- /About Section -->

        </div>
        </div>
        </div>
        </div>
        </div><!-- End Page Title -->
    </main>
@endsection
