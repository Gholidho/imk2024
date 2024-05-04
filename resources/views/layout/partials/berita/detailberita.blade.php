<div class="card">
    <a href="{{ route('home.detail-berita', $berita->id) }}">
        <img class="img-fluid my-2" src="{{ asset('storage/' . $berita->tumbnail_berita) }}" alt="">
    </a>

    <div class="px-4">
        <div class="d-flex flex-row align-items-center mt-2 mb-3">
            <div class="d-flex align-items-center">
                <i class="fa-solid fa-newspaper"></i> {{ $berita->kategoriBerita->nama_kategori_berita }}
            </div>
            <div class="d-flex align-items-center">
                <i class="fa-regular fa-calendar"></i> {{ $berita->tanggal_berita }}
            </div>
        </div>

        {{-- Konten narasi berita --}}
        <div>
            <p>
                <?php
                // Remove HTML tags and keep only the text
                $textOnly = strip_tags($berita->narasi_berita);
                echo $textOnly;
                ?>
            </p>
        </div>

        <div>
            <h5><strong>Dokumentasi {{ $berita->judul }}</strong></h5>

            {{-- Display images from CKEditor content --}}
            <?php
            $dom = new DOMDocument();
            libxml_use_internal_errors(true);
            $dom->loadHtml($berita->narasi_berita, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
            libxml_clear_errors();
            $images = $dom->getElementsByTagName('img');
            ?>

            @foreach ($images as $index => $image)
                <img class="img-fluid my-2" src="{{ $image->getAttribute('src') }}" alt="">
                <p>Gambar {{ $index + 1 }} -- {{ $berita->judul }}</p>
            @endforeach
        </div>

    </div>
</div>
