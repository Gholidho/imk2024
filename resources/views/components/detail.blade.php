<div class="card">
    <div class="card-header">
        <h4>{{ $berita->judul }}</h4>
        @if ($berita->desc)
            <span class="desc-card-dashboard-sikoko">{{ $berita->desc }}</span>
        @endif
    </div>
    <div class="card-body">
        <a href="{{ route('berita.detail', $berita->id) }}">
            <img class="img-fluid my-2" src="{{ asset('storage/' . $berita->tumbnail_berita) }}" alt="">
        </a>

        <div class="px-4">
            <div class="d-flex flex-row align-items-center mt-2 mb-3">
                <div class="d-flex align-items-center">
                    <i class="fa-solid fa-newspaper"></i>
                    <span>{{ $berita->kategoriBerita->nama_kategori_berita }} - </span>
                </div>
                <div class="d-flex align-items-center ml-3">
                    <i class="fa-regular fa-calendar"></i>
                    <span>- {{ $berita->tanggal_berita }}</span>
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
        </div>
    </div>
</div>
