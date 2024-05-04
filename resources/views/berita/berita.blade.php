@extends('layout.main')

@section('container')
    <main id="main">
        <section id="portfolio" class="portfolio section-bg">
            <div data-aos="fade-up">

                <br><br>
                <header class="section-title-header">
                    <h2>Berita</h2>
                </header>

                <!-- ======= Blog Section ======= -->
                <div id="blogs" class="blog">
                    <div class="container">

                        <div class="row">

                            <div class="col-lg-12">

                                <div class="row gy-4 posts-list">
                                    <div class="row">

                                        {{-- List Berita --}}
                                        <div class="col-lg-8">
                                            <x-card.card judul='Daftar Berita'>

                                                {{-- Navigasi kategori --}}
                                                <nav>
                                                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                                        <button class="nav-link active" id="nav-home-tab"
                                                            data-bs-toggle="tab" data-bs-target="#nav-all" type="button"
                                                            role="tab" aria-controls="nav-all"
                                                            aria-selected="true">Semua</button>
                                                        <button class="nav-link" id="nav-home-tab" data-bs-toggle="tab"
                                                            data-bs-target="#nav-artikel" type="button" role="tab"
                                                            aria-controls="nav-artikel"
                                                            aria-selected="false">Artikel</button>
                                                        <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab"
                                                            data-bs-target="#nav-berita-daerah" type="button"
                                                            role="tab" aria-controls="nav-berita-daerah"
                                                            aria-selected="false">Berita Daerah</button>
                                                        <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab"
                                                            data-bs-target="#nav-berita-nasional" type="button"
                                                            role="tab" aria-controls="nav-berita-nasional"
                                                            aria-selected="false">Berita Nasional</button>
                                                        <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab"
                                                            data-bs-target="#nav-dokumen-perencanaan" type="button"
                                                            role="tab" aria-controls="nav-dokumen-perencanaan"
                                                            aria-selected="false">Dokumen Perencanaan</button>
                                                        <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab"
                                                            data-bs-target="#nav-info-penting" type="button" role="tab"
                                                            aria-controls="nav-info-penting" aria-selected="false">Info
                                                            Penting</button>
                                                        <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab"
                                                            data-bs-target="#nav-pengumuman-perkawinan" type="button"
                                                            role="tab" aria-controls="nav-pengumuman-perkawinan"
                                                            aria-selected="false">Pengumuman Pencatatan
                                                            Perkawinan</button>
                                                        <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab"
                                                            data-bs-target="#nav-renstra" type="button" role="tab"
                                                            aria-controls="nav-renstra"
                                                            aria-selected="false">Renstra</button>
                                                    </div>
                                                </nav>

                                                {{-- Berita per kategori --}}
                                                <div class="tab-content mt-2">
                                                    <div class="tab-pane fade show active" id="nav-all">
                                                        <x-home.partials.berita.item :berita="$semua_berita" />
                                                    </div>
                                                    <div class="tab-pane fade" id="nav-artikel">
                                                        <x-home.partials.berita.item :berita="$artikel" />
                                                    </div>
                                                    <div class="tab-pane fade" id="nav-berita-daerah">
                                                        <x-home.partials.berita.item :berita="$berita_daerah" />
                                                    </div>
                                                    <div class="tab-pane fade" id="nav-berita-nasional">
                                                        <x-home.partials.berita.item :berita="$berita_nasional" />
                                                    </div>
                                                    <div class="tab-pane fade" id="nav-dokumen-perencanaan">
                                                        <x-home.partials.berita.item :berita="$dokumen_perencanaan" />
                                                    </div>
                                                    <div class="tab-pane fade" id="nav-info-penting">
                                                        <x-home.partials.berita.item :berita="$info_penting" />
                                                    </div>
                                                    <div class="tab-pane fade" id="nav-pengumuman-perkawinan">
                                                        <x-home.partials.berita.item :berita="$pengumuman_perkawinan" />
                                                    </div>
                                                    <div class="tab-pane fade" id="nav-renstra">
                                                        <x-home.partials.berita.item :berita="$renstra" />
                                                    </div>
                                                </div>

                                            </x-card.card>
                                        </div>

                                        {{-- Berita Populer --}}
                                        <div class="col-lg-4">
                                            <x-card.card judul='Berita Populer'>
                                                <x-home.partials.berita.item-pop :berita="$populer" />
                                            </x-card.card>
                                        </div>
                                    </div>


                                </div><!-- End blog posts list -->

                            </div>

                        </div>

                    </div>
                </div><!-- End Blog Section -->

            </div>
        </section>
    </main><!-- End #main -->
@endsection
