<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Http\Controllers\Controller;

class BerandaController extends Controller
{
    private function formatTanggalBerita($berita)
    {
        return $berita->map(function ($item) {
            $item->tanggal_berita = Carbon::parse($item->tanggal_berita)->translatedFormat('d F Y');
            $item->narasi_berita = Str::limit($item->narasi_berita, 100, '...');
            return $item;
        });
    }

    public function index()
    {
        $berita = Berita::with('kategoriBerita')
            ->orderBy('tanggal_berita', 'desc')
            ->take(3)
            ->get();
        // Memformat tanggal berita untuk setiap koleksi berita
        $berita = $this->formatTanggalBerita($berita);

        return view('home.index', [
            'berita' => $berita,
        ]);
    }
}
