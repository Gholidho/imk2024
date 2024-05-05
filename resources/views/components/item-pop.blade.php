@props(['berita'])

<div class="container-fluid px-2 py-3">
    <div class="d-flex flex-column">
        @if ($berita && $berita->count() > 0)
            @foreach ($berita as $itemPop)
                <div class="d-flex flex-row">
                    <div class="col-4">
                        <a href="{{ route('berita.detail', $itemPop->id) }}">
                            <img class="img-fluid my-2" src="{{ asset('storage/' . $itemPop->tumbnail_berita) }}"
                                alt="{{ $itemPop->judul }}">
                        </a>
                    </div>
                    <div class="col-8 d-flex flex-column py-2 px-3">
                        <a href="{{ route('berita.detail', $itemPop->id) }}"
                            style="color: var(--branding-secondary-color2);">
                            <span><strong>{{ $itemPop->judul }}</strong></span>
                        </a>
                        <span class="small" style="color: var(--branding-secondary-color4);">
                            <i>{{ $itemPop->tanggal_berita }}</i>
                        </span>
                    </div>
                </div>
            @endforeach
        @else
            <p>No berita found.</p>
        @endif
    </div>
</div>
