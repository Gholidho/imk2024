@extends('layout.main')

@section('styles')
    <style>
        #blogs {
            z-index: 9999;
        }
    </style>
@endsection

@section('container')
    <main id="main">
        <section id="portfolio" class="portfolio section-bg">
            <div class="page-title" data-aos="fade">
                <nav class="breadcrumbs">
                    <div class="container">
                        <ol>
                            <li class="upper"><a href="index.html">Home</a></li>
                            <li class="current">Berita</li>
                        </ol>
                    </div>
                </nav>
            </div>

            <br><br>
            <!-- ======= Blog Section ======= -->
            <div id="blogs" class="blog">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="row gy-4 posts-list">
                                <div class="row">
                                    <!-- List Berita -->
                                    <div class="col-lg-8">
                                        <x-card judul='Daftar Berita'>
                                            <!-- Navigasi kategori -->
                                            <nav style="margin-top: 10px">
                                                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                                    <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab"
                                                        data-bs-target="#nav-all" type="button" role="tab"
                                                        aria-controls="nav-all" aria-selected="true">Semua</button>
                                                    <button class="nav-link" id="nav-home-tab" data-bs-toggle="tab"
                                                        data-bs-target="#nav-artikel" type="button" role="tab"
                                                        aria-controls="nav-artikel" aria-selected="false">Artikel</button>
                                                    <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab"
                                                        data-bs-target="#nav-berita-daerah" type="button" role="tab"
                                                        aria-controls="nav-berita-daerah"
                                                        aria-selected="false">Daerah</button>
                                                    <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab"
                                                        data-bs-target="#nav-berita-nasional" type="button" role="tab"
                                                        aria-controls="nav-berita-nasional"
                                                        aria-selected="false">Nasional</button>
                                                    <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab"
                                                        data-bs-target="#nav-dokumen-perencanaan" type="button"
                                                        role="tab" aria-controls="nav-dokumen-perencanaan"
                                                        aria-selected="false">Perencanaan</button>
                                                    <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab"
                                                        data-bs-target="#nav-info-penting" type="button" role="tab"
                                                        aria-controls="nav-info-penting"
                                                        aria-selected="false">Penting</button>
                                                    <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab"
                                                        data-bs-target="#nav-pengumuman-perkawinan" type="button"
                                                        role="tab" aria-controls="nav-pengumuman-perkawinan"
                                                        aria-selected="false">Perkawinan</button>
                                                    <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab"
                                                        data-bs-target="#nav-renstra" type="button" role="tab"
                                                        aria-controls="nav-renstra" aria-selected="false">Renstra</button>
                                                </div>
                                            </nav>

                                            <!-- Berita per kategori -->
                                            <div class="tab-content mt-2">
                                                <div class="tab-pane fade show active" id="nav-all">
                                                    <x-item :berita="$semuaBerita" />
                                                </div>
                                                <div class="tab-pane fade" id="nav-artikel">
                                                    <x-item :berita="$artikel" />
                                                </div>
                                                <div class="tab-pane fade" id="nav-berita-daerah">
                                                    <x-item :berita="$beritaDaerah" />
                                                </div>
                                                <div class="tab-pane fade" id="nav-berita-nasional">
                                                    <x-item :berita="$beritaNasional" />
                                                </div>
                                                <div class="tab-pane fade" id="nav-dokumen-perencanaan">
                                                    <x-item :berita="$dokumenPerencanaan" />
                                                </div>
                                                <div class="tab-pane fade" id="nav-info-penting">
                                                    <x-item :berita="$infoPenting" />
                                                </div>
                                                <div class="tab-pane fade" id="nav-pengumuman-perkawinan">
                                                    <x-item :berita="$pengumumanPerkawinan" />
                                                </div>
                                                <div class="tab-pane fade" id="nav-renstra">
                                                    <x-item :berita="$renstra" />
                                                </div>
                                            </div>
                                        </x-card>
                                    </div>

                                    <!-- Berita Populer -->
                                    <div class="col-lg-4">
                                        <x-card judul='Berita Populer'>
                                            <x-item-pop :berita="$populer" />
                                        </x-card>
                                        <x-card judul='Berita Terbaru'>
                                            <x-item-pop :berita="$terbaru" />
                                        </x-card>
                                    </div>
                                </div><!-- End blog posts list -->
                            </div>
                        </div><!-- End blog sidebar -->
                    </div>

                </div>
            </div>
        </section>
    </main>
@endsection
