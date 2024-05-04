<!-- resources/views/dashboard/pubdok/berita/detail-berita.blade.php -->

<x-home.partials.main>
    <x-slot name="css">
        <!-- Include your additional stylesheets here -->
    </x-slot>

    <main id="main">
        <section id="portfolio" class="portfolio section-bg">
            <div data-aos="fade-up">

                <div class="breadcrumbs mb-5" data-aos="zoom-out" data-aos-delay="200">
                    <nav class="nav-breadcrumbs">
                        <div class="container">
                            <ol>
                                <li><a href="{{ route('pubdok.berita.index') }}">Berita</a></li>
                                <li>Detail berita</li>
                            </ol>
                        </div>
                    </nav>
                </div>

                <!-- Blog Section -->
                <div id="blogs" class="blog">
                    <div class="container">
                        <div class="row">

                            <!-- Berita Details -->
                            <div class="col-lg-8">
                                <x-home.partials.berita.detail :berita="$berita" />
                            </div>

                            <!-- Berita Populer -->
                            <div class="col-lg-4">
                                <x-card.card judul='Berita Populer'>
                                    <x-home.partials.berita.item-pop :berita="$populer" />
                                </x-card.card>
                            </div>
                        </div>
                    </div>
                </div><!-- End Blog Section -->

            </div>
        </section>
    </main><!-- End #main -->

    <x-slot name="js">
        <!-- Include your additional scripts here -->
    </x-slot>
</x-home.partials.main>
