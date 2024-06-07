@extends('layout.main')

@section('styles')
    <style>
        #blogs {
            z-index: 9999;
        }

        .input-group .mb-3 {
            margin-bottom: -20px;
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
                                                    <div class="input-group mb-3">
                                                        <input type="text" id="search-all" class="form-control"
                                                            placeholder="Cari berita...">
                                                        <span class="input-group-text"><i class="bi bi-search"></i></span>
                                                    </div>
                                                    <div id="all-results">
                                                        <x-item :berita="$semuaBerita" />
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="nav-artikel">
                                                    <input type="text" id="search-artikel" class="form-control"
                                                        placeholder="Cari artikel...">
                                                    <div id="artikel-results">
                                                        <x-item :berita="$artikel" />
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="nav-berita-daerah">
                                                    <input type="text" id="search-daerah" class="form-control"
                                                        placeholder="Cari berita daerah...">
                                                    <div id="daerah-results">
                                                        <x-item :berita="$beritaDaerah" />
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="nav-berita-nasional">
                                                    <input type="text" id="search-nasional" class="form-control"
                                                        placeholder="Cari berita nasional...">
                                                    <div id="nasional-results">
                                                        <x-item :berita="$beritaNasional" />
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="nav-dokumen-perencanaan">
                                                    <input type="text" id="search-perencanaan" class="form-control"
                                                        placeholder="Cari dokumen perencanaan...">
                                                    <div id="perencanaan-results">
                                                        <x-item :berita="$dokumenPerencanaan" />
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="nav-info-penting">
                                                    <input type="text" id="search-penting" class="form-control"
                                                        placeholder="Cari info penting...">
                                                    <div id="penting-results">
                                                        <x-item :berita="$infoPenting" />
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="nav-pengumuman-perkawinan">
                                                    <input type="text" id="search-perkawinan" class="form-control"
                                                        placeholder="Cari pengumuman perkawinan...">
                                                    <div id="perkawinan-results">
                                                        <x-item :berita="$pengumumanPerkawinan" />
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="nav-renstra">
                                                    <input type="text" id="search-renstra" class="form-control"
                                                        placeholder="Cari renstra...">
                                                    <div id="renstra-results">
                                                        <x-item :berita="$renstra" />
                                                    </div>
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
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- End Blog Section -->
        </section>
    </main><!-- End #main -->

    <script>
        $(document).ready(function() {
            function liveSearch(category, inputSelector, resultsSelector) {
                $(inputSelector).on('keyup', function() {
                    let keyword = $(this).val();
                    $.ajax({
                        url: '{{ route('news.search') }}',
                        type: 'GET',
                        data: {
                            keyword: keyword,
                            category: category
                        },
                        success: function(data) {
                            $(resultsSelector).html(data);
                        }
                    });
                });
            }

            liveSearch('BR01', '#search-artikel', '#artikel-results');
            liveSearch('BR02', '#search-daerah', '#daerah-results');
            liveSearch('BR03', '#search-nasional', '#nasional-results');
            liveSearch('BR04', '#search-perencanaan', '#perencanaan-results');
            liveSearch('BR05', '#search-penting', '#penting-results');
            liveSearch('BR06', '#search-perkawinan', '#perkawinan-results');
            liveSearch('BR07', '#search-renstra', '#renstra-results');
            liveSearch(null, '#search-all', '#all-results');
        });
    </script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // Mengambil semua elemen dengan kelas 'max-content'
            var elements = document.querySelectorAll('.badge-custom');

            // Menghitung lebar maksimum dari semua elemen
            var maxWidth = 0;
            elements.forEach(function(element) {
                var width = element.offsetWidth;
                if (width > maxWidth) {
                    maxWidth = width;
                }
            });

            // Menerapkan lebar maksimum ke semua elemen
            elements.forEach(function(element) {
                element.style.width = maxWidth + 1 + 'px';
            });
        });
    </script>
@endsection
