<?php

namespace Database\Seeders;

use App\Models\Layanan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LayananSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Layanan::insert([
            ['id' => '1', 'icon' => 'fas fa-baby', 'judul_layanan' => 'Akta Pengesahan Anak', 'deskripsi' => 'Pengesahan anak merupakan pengesahan status seorang anak yang lahir dari perkawinan yang telah sah menurut hukum agama, pada saat pencatatan perkawinan dari kedua orang tua anak tersebut telah sah menurut hukum negara.'],
            ['id' => '2', 'icon' => 'fas fa-hands-holding-child', 'judul_layanan' => 'Akta Pengakuan Anak', 'deskripsi' => 'Pengakuan anak merupakan pengakuan seorang ayah terhadap anaknya yang lahir dari perkawinan yang telah sah menurut hukum agama dan disetujui oleh ibu kandung anak tersebut.'],
            ['id' => '3', 'icon' => 'fa-solid fa-heart-crack', 'judul_layanan' => 'Akta Perceraian', 'deskripsi' => 'Akta perceraian adalah suatu akta yang dibuat dan diterbitkan oleh Dinas Kependudukan yang membuktikan secara pasti dan sah tentang Pencatatan Perceraian seseorang setelah adanya Penetapan Pengadilan Negeri'],
            ['id' => '4', 'icon' => 'bi bi-arrow-through-heart', 'judul_layanan' => 'Akta Perkawinan', 'deskripsi' => 'Akta Perkawinan adalah dokumen resmi yang diterbitkan oleh Dinas Kependudukan dan Pencatatan Sipil atau Kantor Urusan Agama setelah seorang pria dan seorang wanita melangsungkan perkawinan secara sah'],
            ['id' => '5', 'icon' => 'fa-solid fa-skull', 'judul_layanan' => 'Akta Kematian', 'deskripsi' => 'Akta kematian adalah suatu akta yang dibuat dan diterbitkan oleh Dinas Kependudukan yang membuktikan secara pasti tentang kematian seseorang.'],
            ['id' => '6', 'icon' => 'fa-solid fa-cake-candles', 'judul_layanan' => 'Akta Kelahiran', 'deskripsi' => 'Akta Kelahiran adalah suatu dokumen identitas autentik yang wajib dimiliki setiap warga negara Indonesia.'],
            ['id' => '7', 'icon' => 'fa-solid fa-child-reaching', 'judul_layanan' => 'Surat Keterangan Pengangkatan Anak', 'deskripsi' => 'Pengangkatan anak adalah suatu perbuatan hukum yang mengalihkan seorang anak dari lingkungan kekuasaan orang tua, wali yang sah, atau orang lain yang bertanggung jawab atas perawatan, pendidikan dan membesarkan anak tersebut, ke dalam lingkungan keluarga orang tua angkat.'],
            ['id' => '8', 'icon' => 'fa-solid fa-hand-holding-heart', 'judul_layanan' => 'Surat Keterangan Pembatalan Perceraian', 'deskripsi' => 'Salinan putusan pengadilan yang telah mempunyai kekuatan hukum tetap, pencatatan pembatalan perceraian yang melampaui batas waktu 60 ( enam puluh ) hari sejak tanggal putusan pengadilan wajib dilegalisir'],
            ['id' => '9', 'icon' => 'fa-solid fa-ring', 'judul_layanan' => 'Surat Keterangan Pembatalan Perkawinan', 'deskripsi' => 'Pembatalan perkawinan ialah tindakan Pengadilan yang berupa putusan yang menyatakan perkawinan yang dilakukan itu dinyatakan tidak sah, sehingga perkawinan tersebut dianggap tidak pernah ada.'],
            ['id' => '10', 'icon' => 'fa-solid fa-skull', 'judul_layanan' => 'Surat Keterangan Kematian Untuk Orang Asing', 'deskripsi' => 'Akta kematian merupakan dokumen yang diterbitkan Disdukcapil guna mencatat kematian seseorang.'],
            ['id' => '11', 'icon' => 'fa-solid fa-skull-crossbones', 'judul_layanan' => 'Surat Keterangan Lahir Mati Untuk Orang Asing', 'deskripsi' => 'Lahir mati adalah kelahiran seorang bayi dari kandungan yg berumur paling sedikit 28 minggu, pada saat dilahirkan tidak menunjukkan tanda-tanda kehidupan'],
            ['id' => '12', 'icon' => 'fa-solid fa-cake-candles', 'judul_layanan' => 'Surat Keterangan Kelahiran Untuk Orang Asing', 'deskripsi' => 'Surat keterangan lahir diperuntukkan bagi warga yang tidak memiliki Akte Kelahiran dan ingin membuat akte kelahiran (untuk selanjutnya diteruskan ke Dinas Kependudukan dan Catatan Sipil).'],
            ['id' => '13', 'icon' => 'fa-solid fa-house-chimney', 'judul_layanan' => 'Surat Keterangan Tempat Tinggal Untuk Orang Asing', 'deskripsi' => 'SKTT merupakan identitas yang diterbitkan oleh Dinas Kependudukan dan Pencatatan Sipil yang diberikan kepada orang asing yang memiliki Kartu Izin Tinggal Terbatas (KITAS).'],
            ['id' => '14', 'icon' => 'fa-solid fa-truck-moving', 'judul_layanan' => 'Surat Keterangan Pindah Datang Penduduk WNI Dalam Wilayah NKRI', 'deskripsi' => 'Surat keterangan pindah datang digunakan sebagai dasar proses perekaman dalam database kependudukan, perubahan KK bagi kepala/anggota keluarga yang tidak pindah.'],
            ['id' => '15', 'icon' => 'fa-solid fa-truck-ramp-box', 'judul_layanan' => 'Surat Keterangan Pindah Penduduk WNI Dalam Wilayah NKRI', 'deskripsi' => 'Surat Keterangan Pindah Penduduk adalah dokumen yang diterbitkan Dinas Dukcapil sebagai informasi bahwa seseorang telah pindah domisili atau tempat tinggal ke suatu tempat yang baru.'],
            ['id' => '16', 'icon' => 'fa-solid fa-address-card', 'judul_layanan' => 'Kartu Identitas Anak', 'deskripsi' => 'Kartu identitas anak digunakan sebagai identitas resmi anak sebagai bukti bahwa pemilik kartu adalah anak berusia di bawah 17 tahun dan belum menikah.'],
            ['id' => '17', 'icon' => 'fa-solid fa-id-card', 'judul_layanan' => 'Kartu Tanda Penduduk Elektronik', 'deskripsi' => 'Kartu Tanda Penduduk Elektronik (KTP-el) adalah identitas resmi seseorang sebagai bukti diri yang diterbitkan oleh Dinas Dukcapil Kabupaten/Kota dan berlaku di seluruh wilayah NKRI.'],
            ['id' => '18', 'icon' => 'bi bi-card-heading', 'judul_layanan' => 'Kartu Keluarga (KK)', 'deskripsi' => 'Kartu keluarga adalah kartu identitas keluarga yang memuat data tentang susunan, hubungan dan jumlah anggota keluarga'],
            ['id' => '19', 'icon' => 'fa-solid fa-users-line', 'judul_layanan' => 'Biodata Penduduk', 'deskripsi' => 'Biodata penduduk diterbitkan bagi warga yang berusia dibawah 17 (tujuh belas) tahun yang akan melaksanakan pernikahan.'],
        ]);
    }
}
