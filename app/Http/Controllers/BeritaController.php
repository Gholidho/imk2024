<?php

namespace App\Http\Controllers\Dashboard\Pubdok\Berita;

use Carbon\Carbon;
use App\Models\Menu;
use App\Models\Berita;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\UserMahasiswa;
use App\Models\KategoriBerita;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class BeritaController extends Controller
{
    private function formatTanggalBerita($berita)
    {
        return $berita->map(function ($item) {
            $item->tanggal_berita = Carbon::parse($item->tanggal_berita)->translatedFormat('d F Y');
            return $item;
        });
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $semuaBerita = Berita::orderBy('tanggal_berita', 'desc')->get();
        $artikel = Berita::where('kategori_berita_id', 'BR01')->orderBy('tanggal_berita', 'desc')->get();
        $beritaDaerah = Berita::where('kategori_berita_id', 'BR02')->orderBy('tanggal_berita', 'desc')->get();
        $beritaNasional = Berita::where('kategori_berita_id', 'BR03')->orderBy('tanggal_berita', 'desc')->get();
        $dokumenPerencanaan = Berita::where('kategori_berita_id', 'BR04')->orderBy('tanggal_berita', 'desc')->get();
        $infoPenting = Berita::where('kategori_berita_id', 'BR05')->orderBy('tanggal_berita', 'desc')->get();
        $pengumumanPerkawinan = Berita::where('kategori_berita_id', 'BR06')->orderBy('tanggal_berita', 'desc')->get();
        $renstra = Berita::where('kategori_berita_id', 'BR07')->orderBy('tanggal_berita', 'desc')->get();
        $populer = Berita::orderBy('klik', 'desc')
            ->take(5)
            ->get(['id', 'tumbnail_berita', 'judul', 'tanggal_berita']);

        // Memformat tanggal berita untuk setiap koleksi berita
        $semuaBerita = $this->formatTanggalBerita($semuaBerita);
        $artikel = $this->formatTanggalBerita($artikel);
        $beritaDaerah = $this->formatTanggalBerita($beritaDaerah);
        $beritaNasional = $this->formatTanggalBerita($beritaNasional);
        $dokumenPerencanaan = $this->formatTanggalBerita($dokumenPerencanaan);
        $infoPenting = $this->formatTanggalBerita($infoPenting);
        $pengumumanPerkawinan = $this->formatTanggalBerita($pengumumanPerkawinan);
        $renstra = $this->formatTanggalBerita($renstra);
        $populer = $this->formatTanggalBerita($populer);

        return view('berita.berita', [
            'semua_berita' => $semuaBerita,
            'artikel' => $artikel,
            'berita_daerah' => $beritaDaerah,
            'berita_nasional' => $beritaNasional,
            'dokumen_perencanaan' => $dokumenPerencanaan,
            'info_penting' => $infoPenting,
            'pengumuman_perkawinan' => $pengumumanPerkawinan,
            'renstra' => $renstra,
            'populer' => $populer,
        ]);
    }


    public function detail($id)
    {
        try {
            $berita = Berita::find($id);
            $semuaBerita = Berita::orderBy('tanggal_berita', 'desc')->get();
            $praBerita = Berita::where('kategori_berita_id', 'KB01')->orderBy('tanggal_berita', 'desc')->get();
            $pencacahanBerita = Berita::where('kategori_berita_id', 'KB02')->orderBy('tanggal_berita', 'desc')->get();
            $pascaBerita = Berita::where('kategori_berita_id', 'KB03')->orderBy('tanggal_berita', 'desc')->get();
            $populer = Berita::orderBy('klik', 'desc')
                ->take(5)
                ->get(['id', 'tumbnail_berita', 'judul', 'tanggal_berita']);


            if ($berita) {
                $berita->increment('klik');
            }

            $populer = Berita::orderBy('klik', 'desc')
                ->take(5)
                ->get(['id', 'tumbnail_berita', 'judul', 'tanggal_berita']);

            Log::info($populer);

            return view('home.berita.detail-berita', [
                'berita' => $berita,
                'populer' => $populer,
                'semua_berita' => $semuaBerita,
                'pra_pencacahan' => $praBerita,
                'pencacahan' => $pencacahanBerita,
                'pasca_pencacahan' => $pascaBerita,
                'populer' => $populer,
            ]);
        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
            // Handle the case when berita is not found
            return redirect()->back()->with('status.error', 'Berita not found.');
        }
    }
}
