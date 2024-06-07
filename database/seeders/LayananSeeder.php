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
            ['id' => '1', 'icon' => 'https://img.icons8.com/parakeet-line/96/babys-room.png', 'judul_layanan' => 'Akta Pengesahan Anak', 'deskripsi' => 'Pengesahan anak merupakan pengesahan status seorang anak yang lahir dari perkawinan yang telah sah menurut hukum agama, pada saat pencatatan perkawinan dari kedua orang tua anak tersebut telah sah menurut hukum negara.'],
            ['id' => '2', 'icon' => 'https://img.icons8.com/windows/64/family--v1.png', 'judul_layanan' => 'Akta Pengakuan Anak', 'deskripsi' => 'Pengakuan anak merupakan pengakuan seorang ayah terhadap anaknya yang lahir dari perkawinan yang telah sah menurut hukum agama dan disetujui oleh ibu kandung anak tersebut.'],
            ['id' => '3', 'icon' => 'https://img.icons8.com/fluency-systems-filled/96/divorce.png', 'judul_layanan' => 'Akta Perceraian', 'deskripsi' => 'Akta perceraian adalah suatu akta yang dibuat dan diterbitkan oleh Dinas Kependudukan yang membuktikan secara pasti dan sah tentang Pencatatan Perceraian seseorang setelah adanya Penetapan Pengadilan Negeri'],
            ['id' => '4', 'icon' => 'https://img.icons8.com/windows/64/couple-man-woman.png', 'judul_layanan' => 'Akta Perkawinan', 'deskripsi' => 'Akta Perkawinan adalah dokumen resmi yang diterbitkan oleh Dinas Kependudukan dan Pencatatan Sipil atau Kantor Urusan Agama setelah seorang pria dan seorang wanita melangsungkan perkawinan secara sah'],
            ['id' => '5', 'icon' => 'https://img.icons8.com/windows/64/headstone.png', 'judul_layanan' => 'Akta Kematian', 'deskripsi' => 'Akta kematian adalah suatu akta yang dibuat dan diterbitkan oleh Dinas Kependudukan yang membuktikan secara pasti tentang kematian seseorang.'],
            ['id' => '6', 'icon' => 'https://img.icons8.com/external-others-pike-picture/100/external-baby-pediatrics-medical-others-pike-picture-18.png', 'judul_layanan' => 'Akta Kelahiran', 'deskripsi' => 'Akta Kelahiran adalah suatu dokumen identitas autentik yang wajib dimiliki setiap warga negara Indonesia.'],
            ['id' => '7', 'icon' => 'https://img.icons8.com/external-soleicons-line-amoghdesign/68/external-adopt-soleicons-line-vol-2-soleicons-line-amoghdesign.png', 'judul_layanan' => 'Surat Keterangan Pengangkatan Anak', 'deskripsi' => 'Pengangkatan anak adalah suatu perbuatan hukum yang mengalihkan seorang anak dari lingkungan kekuasaan orang tua, wali yang sah, atau orang lain yang bertanggung jawab atas perawatan, pendidikan dan membesarkan anak tersebut, ke dalam lingkungan keluarga orang tua angkat.'],
            ['id' => '8', 'icon' => 'https://img.icons8.com/ios/100/cancel-order.png', 'judul_layanan' => 'Surat Keterangan Pembatalan Perceraian', 'deskripsi' => 'Salinan putusan pengadilan yang telah mempunyai kekuatan hukum tetap, pencatatan pembatalan perceraian yang melampaui batas waktu 60 ( enam puluh ) hari sejak tanggal putusan pengadilan wajib dilegalisir'],
            ['id' => '9', 'icon' => 'https://img.icons8.com/ios/100/split-up.png', 'judul_layanan' => 'Surat Keterangan Pembatalan Perkawinan', 'deskripsi' => 'Pembatalan perkawinan ialah tindakan Pengadilan yang berupa putusan yang menyatakan perkawinan yang dilakukan itu dinyatakan tidak sah, sehingga perkawinan tersebut dianggap tidak pernah ada.'],
            ['id' => '10', 'icon' => 'https://img.icons8.com/external-others-pike-picture/100/external-Death-Certificate-funeral-others-pike-picture-2.png', 'judul_layanan' => 'Surat Keterangan Kematian Untuk Orang Asing', 'deskripsi' => 'Akta kematian merupakan dokumen yang diterbitkan Disdukcapil guna mencatat kematian seseorang.'],
            ['id' => '11', 'icon' => 'https://img.icons8.com/dotty/80/die-in-bed.png', 'judul_layanan' => 'Surat Keterangan Lahir Mati Untuk Orang Asing', 'deskripsi' => 'Lahir mati adalah kelahiran seorang bayi dari kandungan yg berumur paling sedikit 28 minggu, pada saat dilahirkan tidak menunjukkan tanda-tanda kehidupan'],
            ['id' => '12', 'icon' => 'https://img.icons8.com/ios/100/certificate--v1.png', 'judul_layanan' => 'Surat Keterangan Kelahiran Untuk Orang Asing', 'deskripsi' => 'Surat keterangan lahir diperuntukkan bagi warga yang tidak memiliki Akte Kelahiran dan ingin membuat akte kelahiran (untuk selanjutnya diteruskan ke Dinas Kependudukan dan Catatan Sipil).'],
            ['id' => '13', 'icon' => 'https://img.icons8.com/ios/150/home--v1.png', 'judul_layanan' => 'Surat Keterangan Tempat Tinggal Untuk Orang Asing', 'deskripsi' => 'SKTT merupakan identitas yang diterbitkan oleh Dinas Kependudukan dan Pencatatan Sipil yang diberikan kepada orang asing yang memiliki Kartu Izin Tinggal Terbatas (KITAS).'],
            ['id' => '14', 'icon' => 'https://img.icons8.com/external-bartama-outline-64-bartama-graphic/64/external-moving-real-estate-outline-bartama-outline-64-bartama-graphic.png', 'judul_layanan' => 'Surat Keterangan Pindah Datang Penduduk WNI Dalam Wilayah NKRI', 'deskripsi' => 'Surat keterangan pindah datang digunakan sebagai dasar proses perekaman dalam database kependudukan, perubahan KK bagi kepala/anggota keluarga yang tidak pindah.'],
            ['id' => '15', 'icon' => 'https://img.icons8.com/external-others-pike-picture/100/external-building-warehouse-and-storage-others-pike-picture-22.png', 'judul_layanan' => 'Surat Keterangan Pindah Penduduk WNI Dalam Wilayah NKRI', 'deskripsi' => 'Surat Keterangan Pindah Penduduk adalah dokumen yang diterbitkan Dinas Dukcapil sebagai informasi bahwa seseorang telah pindah domisili atau tempat tinggal ke suatu tempat yang baru.'],
            ['id' => '16', 'icon' => 'https://img.icons8.com/dotty/80/security-pass.png', 'judul_layanan' => 'Kartu Identitas Anak', 'deskripsi' => 'Kartu identitas anak digunakan sebagai identitas resmi anak sebagai bukti bahwa pemilik kartu adalah anak berusia di bawah 17 tahun dan belum menikah.'],
            ['id' => '17', 'icon' => 'https://img.icons8.com/wired/64/electronic-identity-card.png', 'judul_layanan' => 'Kartu Tanda Penduduk Elektronik', 'deskripsi' => 'Kartu Tanda Penduduk Elektronik (KTP-el) adalah identitas resmi seseorang sebagai bukti diri yang diterbitkan oleh Dinas Dukcapil Kabupaten/Kota dan berlaku di seluruh wilayah NKRI.'],
            ['id' => '18', 'icon' => 'https://img.icons8.com/ios/100/defend-family--v2.png', 'judul_layanan' => 'Kartu Keluarga (KK)', 'deskripsi' => 'Kartu keluarga adalah kartu identitas keluarga yang memuat data tentang susunan, hubungan dan jumlah anggota keluarga'],
            ['id' => '19', 'icon' => 'https://img.icons8.com/ios/100/demographics.png', 'judul_layanan' => 'Biodata Penduduk', 'deskripsi' => 'Biodata penduduk diterbitkan bagi warga yang berusia dibawah 17 (tujuh belas) tahun yang akan melaksanakan pernikahan.'],
        ]);
    }
}
