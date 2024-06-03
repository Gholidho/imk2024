@props(['results'])

<div class="container-fluid px-1 py-1">
    <div class="d-flex flex-column">
        @foreach ($results as $item)
            <div class="d-flex flex-row" data-aos="fade-up" data-aos-delay="200" style="border-bottom: 1px solid lightgrey">
                <div class="col-4">
                    <a href="{{ route('berita.detail', $item->id) }}">
                        <img class="img-fluid my-2 rounded" src="{{ asset($item->tumbnail_berita) }}" alt="Thumbnail">
                    </a>
                </div>
                <div class="col-8 d-flex flex-column py-2 px-3">
                    <a href="{{ route('berita.detail', $item->id) }}" style="color: var(--branding-secondary-color2);">
                        <h5><strong>{{ $item->judul }}</strong></h5>
                    </a>
                    <span class="small" style="color: var(--branding-secondary-color4);">
                        <i>{{ $item->tanggal_berita }}</i>
                    </span>
                    <span class="d-flex flex-wrap justify-content-start mt-2">
                        <div
                            class="badge bg-secondary rounded-sm px-2 py-1 badge-custom me-2 mt-2 d-flex align-items-center">
                            <span class="bi bi-person-vcard-fill"></span>
                            <span class="ms-2">{{ $item->author }}</span>
                        </div>
                        <div class="badge bg-info rounded-sm px-2 py-1 d-flex align-items-center me-2 mt-2">
                            <span class="bi bi-eye-fill"></span>
                            <span class="ms-2">{{ $item->klik }} kali</span>
                        </div>
                        <div class="badge bg-primary rounded-sm px-2 py-1 d-flex align-items-center me-2 mt-2">
                            <span class="bi bi-newspaper"></span>
                            <span class="ms-2">{{ $item->kategoriBerita->nama_kategori_berita }}</span>
                        </div>
                    </span>
                    <span class="small d-none d-lg-block d-md-block" style="color: var(--branding-secondary-color2);">
                        {!! $item->narasi_berita !!}
                    </span>
                </div>
            </div>
        @endforeach
    </div>

    {{-- Paginasi --}}
    <div class="d-flex justify-content-center mt-3">
        {{-- Pagination code --}}
    </div>
</div>
