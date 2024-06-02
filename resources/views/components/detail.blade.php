<x-card judul="{{ $berita->judul }}">
    <a href="{{ route('berita.detail', $berita->id) }}">
        <img class="img-fluid my-2" src="{{ asset('storage/' . $berita->tumbnail_berita) }}" alt="">
    </a>

    <div class="px-4">
        <span class="d-flex flex-wrap justify-content-start mt-2">
            <div class="badge bg-danger rounded-sm px-2 py-1 badge-custom me-2 mt-2 d-flex align-items-center">
                <span class="bi bi-calendar-event"></span>
                <span class="ms-2">{{ $berita->tanggal_berita }}</span>
            </div>
            <div class="badge bg-secondary rounded-sm px-2 py-1 badge-custom me-2 mt-2 d-flex align-items-center">
                <span class="bi bi-person-vcard-fill"></span>
                <span class="ms-2">{{ $berita->author }}</span>
            </div>
            <div class="badge bg-info rounded-sm px-2 py-1 d-flex align-items-center me-2 mt-2">
                <span class="bi bi-eye-fill"></span>
                <span class="ms-2">{{ $berita->klik }} kali</span>
            </div>
            <div class="badge bg-primary rounded-sm px-2 py-1 d-flex align-items-center me-2 mt-2">
                <span class="bi bi-newspaper"></span>
                <span class="ms-2">{{ $berita->kategoriBerita->nama_kategori_berita }}</span>
            </div>
        </span>

        {{-- Konten narasi berita --}}
        <div style="margin-top: 20px; text-align: justify;">
            <p>{{ strip_tags($berita->narasi_berita) }}</p>
        </div>
    </div>
</x-card>
