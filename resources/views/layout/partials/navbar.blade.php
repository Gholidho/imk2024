            <nav id="navmenu" class="navmenu">
                <ul>
                    <li><a href="{{ '/' }}" class="">Beranda</a></li>
                    <li><a href="{{ route('profil.struktur-organisasi') }}">Profil</a></li>
                    <li><a href="{{ '/berita' }}">Berita</a></li>
                    <li><a href="{{ route('layanan') }}">Layanan</a></li>
                    <li><a href="{{ route('publikasi') }}">Publikasi</a></li>
                    <li class="dropdown"><a href=""><span>Informasi</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                        <ul>
                            <li><a href="{{ route('statistik') }}">Statistik</a></li>
                            <li><a href="{{ '/faq' }}">FAQ</a></li>
                            <li><a href="{{ route('pengaduan') }}">Pengaduan</a></li>
                        </ul>
                    </li>
                    <li><a href="{{ route('kontak') }}">Kontak</a></li>
                </ul>
                <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
            </nav>