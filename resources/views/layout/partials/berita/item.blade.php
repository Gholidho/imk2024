@props(['berita'])

<div class="container-fluid px-2 py-3">
    <div class="d-flex flex-column" id="news-list">
        @foreach ($berita as $item)
            <div class="d-flex flex-row" data-aos="fade-up" data-aos-delay="200">
                <div class="col-4">
                    <a href="{{ route('home.detail-berita', $item->id) }}">
                        <img class="img-fluid my-2 rounded" src="{{ asset('storage/' . $item->tumbnail_berita) }}"
                            alt="Thumbnail">
                    </a>
                </div>
                <div class="col-8 d-flex flex-column py-2 px-3">
                    <a href="{{ route('home.detail-berita', $item->id) }}"
                        style="color: var(--branding-secondary-color2);">
                        <h5 style="color: #e84545"><strong>{{ $item->judul }}</strong></h5>
                    </a>
                    <span class="small" style="color: var(--branding-secondary-color4);">
                        <i>{{ $item->tanggal_berita }}</i>
                    </span>
                    <span class="d-flex justify-content-left mt-2">
                        <div class="badge bg-primary rounded-pill px-1 py-1">{{ $item->kategori_berita_id }}</div>
                        <div class="badge bg-secondary rounded-pill px-1 py-1">{{ $item->author }}</div>
                        <div class="badge bg-info rounded-pill px-1 py-1">{{ $item->klik }}</div>
                    </span>
                    <span class="small d-none d-lg-block d-md-block" style="color: var(--branding-secondary-color2);">
                        {!! $item->narasi_berita_singkat !!}
                    </span>
                    <div class="mt-2">
                        <span class="badge bg-secondary">Dilihat: {{ $item->klik }} kali</span>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    {{-- Paginasi --}}
    <div class="d-flex justify-content-center mt-3">
        {{-- Pagination code --}}
    </div>
</div>
