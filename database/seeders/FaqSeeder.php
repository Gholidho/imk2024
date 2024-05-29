<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Faq;

class FaqSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Faq::insert([
            [
                'id_layanan' => 1, // Sesuaikan dengan id layanan yang sesuai
                'pertanyaan' => 'Apakah nama di akta kelahiran dapat dibetulkan?',
                'jawaban' => 'Dapat, dengan mengajukan Perubahan Nama pada Akta Kelahiran secara online (mandiri) melalui website klampid di klampid-dispendukcapil.surabaya.go.id atau di kelurahan / kecamatan sesuai domisili dengan melampirkan persyaratan yang diminta',
            ],

            [
                'id_layanan' => 2, // Sesuaikan dengan id layanan yang sesuai
                'pertanyaan' => 'Apakah nama di akta kematian dapat dibetulkan?',
                'jawaban' => 'Dapat, dengan mengajukan permohonan melalui sidang lontong balap untuk mendapatkan penetapan orang yang sama namun tidak mengubah akta kematian.',
            ],

            [
                'id_layanan' => 2, // Sesuaikan dengan id layanan yang sesuai
                'pertanyaan' => 'Bagaimana cara mengurus akta kematian yang hilang ?',
                'jawaban' => 'Pengajuan Kutipan Kedua Akta Kematian karena hilang dapat dilakukan secara online (mandiri) atau di kelurahan / kecamatan dengan melampirkan surat kehilangan dari kepolisian dan fotokopi akta kematian yang hilang.',
            ],

            [
                'id_layanan' => 3, // Akta Perkawinan
                'pertanyaan' => 'Bagaimana proses pencatatan perkawinan di Dispendukcapil?',
                'jawaban' => 'Pemohon mengajukan pencatatan perkawinan dapat dilakukan secara online (mandiri) dengan melampirkan persyaratan yang telah ditentukan paling lambat 14 hari sebelum tanggal pencatatan perkawinan. Pemohon akan dihubungi oleh Dispendukcapil untuk pencatatan yang dilakukan melalui zoom.',
            ],

            [
                'id_layanan' => 3, // Sesuaikan dengan id layanan yang sesuai
                'pertanyaan' => 'Siapakah yang dapat mengajukan permohonan pencatatan perkawinan atau pelaporan perkawinan luar negeri di Dispendukcapil?',
                'jawaban' => 'Penduduk Surabaya yang beragama non muslim yang sudah melaksanakan perkawinan dihadapan pemuka agama atau penghayat kepercayaan.',
            ],

            [
                'id_layanan' => 4, //Perceraian
                'pertanyaan' => 'Bagaimana proses pencatatan perceraian di Dispendukcapil?',
                'jawaban' => 'Pemohon mengajukan pencatatan perceraian dapat dilakukan secara online (mandiri) melalui website klampid pada alamat klampid- dispendukcapil.surabaya.go.id atau di kelurahan / kecamatan dengan melampirkan persyaratan yang telah ditentukan. Pemohon akan dihubungi oleh Dispendukcapil untuk hadir ke Dispendukcapil menandatangani register akta perceraian, sehingga dapat diterbitkan akta perceraian.',
            ],

            [
                'id_layanan' => 4, // Sesuaikan dengan id layanan yang sesuai
                'pertanyaan' => 'Apa saja Berkas Persyaratan Mengurus Akta Perceraian',
                'jawaban' => 'Berkas Persyaratan pengajuan Akta Perceraian :

1. Keputusan Pengadilan tentang penetapan perceraian yang mempunyai kekuatan hukum yang tetap (asli);

2. Fotocopy KK dan KTP dengan menunjukkan aslinya;

3. Fotocopy Kutipan Akta Kelahiran dengan menunjukkan aslinya (catatan pinggir bagi yang sudah berganti nama dan atau berubah kewarganegaraan);

4. Kutipan Akta Perkawinan (asli);

5. Fotocopy Surat Bukti Ganti Nama (bagi WNI keturunan yang sudah ganti nama) dengan menunjukkan aslinya;

6. Fotocopy Dokumen Imigrasi dan STLD (bagi Orang Asing) dengan menunjukkan aslinya;

7. Pas foto 3 x 4 cm sebanyak 3 lembar.',
            ],

            [
                'id_layanan' => 5, // kartu keluarga
                'pertanyaan' => 'Bagaimana cara mengubah elemen biodata pada Kartu Keluarga dan apa persyaratannya?',
                'jawaban' => 'Pengajuan Perubahan Biodata pada Kartu Keluarga dapat dilakukan secara online (mandiri) atau di kelurahan / kecamatan dengan melampirkan kartu keluarga yang lama, dan dokumen pendukung terkait (ijazah, buku nikah / akta nikah, dll).',
            ],

            [
                'id_layanan' => 5, // Sesuaikan dengan id layanan yang sesuai
                'pertanyaan' => 'Bagaimana bila Kartu Keluarga rusak atau hilang ?',
                'jawaban' => 'Pengajuan Cetak Ulang Kartu Keluarga karena rusak atau hilang dapat dilakukan secara online (mandiri) atau di kelurahan / kecamatan dengan melampirkan surat kehilangan dari kepolisian dan /atau kk yang rusak.',
            ],

            [
                'id_layanan' => 6, // ktp
                'pertanyaan' => 'Dimana warga dapat mendapatkan KTP-el baru ?',
                'jawaban' => 'Perekaman KTP-el bagi warga usia 17 tahun keatas atau sudah menikah dapat dilakukan di semua kantor kecamatan atau di Siola (Mall Pelayanan Publik), dicetak oleh Dinas Kependudukan dan Pencatatan Sipil dan dikirim ke kelurahan.',
            ],

            [
                'id_layanan' => 6, // Sesuaikan dengan id layanan yang sesuai
                'pertanyaan' => 'Bagaimana bila mengajukan Kartu Tanda Penduduk yang berubah elemen data, rusak, atau hilang ?',
                'jawaban' => 'Pengajuan cetak ulang KTP-el karena rusak, perubahan data, atau hilang dapat dilakukan secara online (mandiri) atau di kelurahan / kecamatan dengan melampirkan Surat Kehilangan, Kartu Keluarga terbaru, dan KTP-el lama untuk kemudian dicetak oleh Dinas Kependudukan dan Pencatatan Sipil dan dikirim ke kelurahan.',
            ],

            [
                'id_layanan' => 7, // kia
                'pertanyaan' => 'Bagaimana warga dapat mendapatkan Kartu Identitas Anak ?',
                'jawaban' => 'Kartu Identitas Anak terbagi atas 2, yaitu usia 0-5 tahun dan usia diatas 5 tahun (sekolah). Bagi anak usia 0-5 tahun akan dicetak oleh Dinas Kependudukan dan Pencatatan Sipil (tanpa foto). Sedangkan anak usia diatas 5 tahun dapat diajukan di sekolah masing-masing atau di kelurahan/kecamatan dengan melampirkan Akta kelahiran, Kartu Keluarga, Foto anak, dan Rapor/ dokumen sekolah (bagi anak yang bersekolah di luar Surabaya).',
            ],

            [
                'id_layanan' => 7, // Sesuaikan dengan id layanan yang sesuai
                'pertanyaan' => 'Bagaimana bila mengajukan cetak KIA karena perubahan data atau habis masa berlakunya ?',
                'jawaban' => 'Pengajuan KIA karena perubahan data atau habis masa berlakunya dapat dilakukan di Kecamatan melalui e-sulay (aplikasi surat layanan)',
            ],

            [
                'id_layanan' => 8, // permasalahan nik
                'pertanyaan' => 'Bagaimana jika NIK tidak ditemukan di Dukcapil sehingga terdapat kendala di layanan tertentu seperti vaksinasi, perbankan, bpjs ?',
                'jawaban' => 'Pemohon dapat mengajukan pengaduan pada website klampid menu pengaduan online, atau ke kelurahan/kecamatan untuk dibantu proses konsolidasi oleh Dispendukcapil.',
            ],

            [
                'id_layanan' => 8, // Sesuaikan dengan id layanan yang sesuai
                'pertanyaan' => 'Apa yang harus dilakukan jika sudah dilaporkan meninggal namun masih muncul sebagai penduduk aktif?',
                'jawaban' => 'Suami/Istri atau Anak Kandung atau Orang Tua atau ketua RT melaporkan atau mengajukan permohonan akta kematiannya',
            ],

            [
                'id_layanan' => 9, // pindah datang penduduk dari luar kota
                'pertanyaan' => 'Apa saja persyaratan untuk Pindah Datang?',
                'jawaban' => 'Untuk pemohon SKPWNI, SPTJM (form dari kelurahan), Berita Acara verifikasi tempat tinggal yang di ketahui RT dan di TTd oleh petugas Kelurahan (form dari kelurahan)',
            ],

            [
                'id_layanan' => 9, // Sesuaikan dengan id layanan yang sesuai
                'pertanyaan' => 'Apa pengurusuan Pindah Datang bisa datang langsung ke Dispendukcapil?',
                'jawaban' => 'Untuk saat ini pengurusan Pindah Datang hanya melalui Kelurahan, karena akan di online kan oleh petugas kelurahan, dan petugas kelurahan akan outreach ke rumah pemohon dan menemui pak RT, hasil berupa Berita Acara Verifikasi Tempat tinggal',
            ],

            [
                'id_layanan' => 10, // pindah keluar kota
                'pertanyaan' => 'Persyaratan pindah keluar apa saja ?',
                'jawaban' => 'KK Trenggalek dan ktp yang pindah , kalau manual diarahkan membawa berkas, tapi untuk berkas tidak diserah ke kelurahan',
            ],

            [
                'id_layanan' => 10, // Sesuaikan dengan id layanan yang sesuai
                'pertanyaan' => 'Jika yang pindah keluar istri dan anak saja karena ortu cerai persyaratannya apa saja?',
                'jawaban' => 'Jika pindah keluar istri dan anak saja karena ortu cerai harap pengajuan di menu pindah keluar dengan melampirkan akta cerai, penetapan hak asuh anak (di foto bagian mengadili) atau surat pernyataan kesepakatan dari kedua belah pihak anak ikut siapa, kk trenggalek dan ktp yang pindah pilih jenis kepindahan anggota keluarga.',
            ],

            [
                'id_layanan' => 11, //pindah dalam kota
                'pertanyaan' => 'Apa saja syarat mengurus pindah dalam kota ?',
                'jawaban' => 'Kartu Keluarga Pemohon, KTP, dan formulir SPTJM tentang tempat tinggal kemudian kelurahan melengkapi Berita Acara Verifikasi tempat tinggal.',
            ],

            [
                'id_layanan' => 11, // Sesuaikan dengan id layanan yang sesuai
                'pertanyaan' => 'Apakah saya bisa pindah kependudukan tetapi domisili saya tidak berada di alamat tersebut?',
                'jawaban' => 'Tidak bisa, dikarenakan pada berita acara verifikasi tempat tinggal petugas verifikator kelurahan harus memastikan pemohon pindah harus berada di alamat tersebut.',
            ],

            [
                'id_layanan' => 12, // pendataan penduduk non permanen
                'pertanyaan' => 'Apa saja persyaratan pelaporan penduduk non permanen?',
                'jawaban' => 'Surat pernyataan tidak keberatan dari pemilik rumah mengetahui RT, Surat keterangan bekerja (apabila bekerja) / Surat keterangan dari sekolah atau universitas (apabila bersekolah), atau Surat Keterangan dari RS (apabila terkait pengobatan)',
            ],

            [
                'id_layanan' => 12, // Sesuaikan dengan id layanan yang sesuai
                'pertanyaan' => 'Apa output dari pelaporan penduduk non permanen ?',
                'jawaban' => 'Tanda bukti pelaporan penduduk non permanen.',
            ],

            [
                'id_layanan' => 13, // pelayanan orang asing
                'pertanyaan' => 'Apakah OA yang sudah memiliki ITAS/ITAP dari luar kota dan sudah mengurus SKTT/KK, KTP OA dapat melakukan proses pindah datang?',
                'jawaban' => 'Bisa, pemohon diarahkan ke imigrasi untuk melakukan mutasi alamat terlebih dahulu, lalu diarahkan Dispendukcapil setempat untuk datanya dipindahkan kedaerah tujuan, yang kemudian akan diterbitkan SKPOA (Surat Keterangan Pindah Orang Asing).',
            ],

            [
                'id_layanan' => 13, // Sesuaikan dengan id layanan yang sesuai
                'pertanyaan' => 'Apa saja syarat pengurusan untuk SKTT?',
                'jawaban' => 'Berdasarkan Peraturan Daerah No.6 Tahun 2019 tentang Adminduk:
<ul>
    <li>Foto Passport</li>
    <li>Foto cap limited stay / tinggal terbatas yang terbaru di buku passport</li>
    <li>Foto ITAS</li>
    <li>Foto Bukti pembayaran (yg ada stempel pick up passport)</li>
    <li>Foto Notifikasi penggunaan Tenaga Kerja Asing (IMTA), RPTKA untuk yang bekerja / Surat Keputusan dari KEMENKUMHAM untuk INVESTMENT</li>
    <li>Foto STM / SKJ dari Kepolisian</li>
    <li>Surat Keterangan dari Sponsor (Perusahaan penjamin) yang mendatangkan Orang Asing / dari suami WNI/ istri WNI yang kawin secara tercatat dengan Orang Asing, Foto Akta Kawin, KK / KTP (Bagi OA yang bersuami / beristri WNI)</li>
    <li>Surat Pernyataan tidak keberatan penggunaan alamat dalam dokumen kependudukan dari pemilik rumah mengetahui RT, RW / Manajemen Apartemen</li>
    <li>Foto Orang Asing dengan memegang passport halaman depan yang ada fotonya dengan menggunakan aplikasi Geotag photo.</li>
    <li>Pas Foto background Merah (untuk tahun kelahiran ganjil) atau Biru (Untuk tahun kelahiran genap)</li>
    <li>SKTT lama bagi yang perpanjangan</li>
    <li>Upload semua dokumen yang sudah dijadikan 1 dalam format pdf</li>
</ul>',
            ],


            [
                'id_layanan' => 14, // SKPTI
                'pertanyaan' => 'Apakah untuk permohonan skpti bisa langsung di terbitkan nik ?',
                'jawaban' => 'Untuk hal ini, apabila pemohon sudah selesai cek biometrik dan proses wawancara, maka akan dibuatkan nota dinas, yang kemudian akan di disposisi oleh kadis untuk terbit skpti atau langsung terbit nik.',
            ],

            [
                'id_layanan' => 14, // Sesuaikan dengan id layanan yang sesuai
                'pertanyaan' => 'Apakah ada biaya selama mengurus skpti ?',
                'jawaban' => 'Untuk permohonan atau pengajuan skpti sendiri itu gratis tanpa dipungut biaya sama sekali',
            ],

            [
                'id_layanan' => 15, // pecah kk
                'pertanyaan' => 'Apa Saja Persyaratan Pecah Kartu Keluarga ?',
                'jawaban' => 'Melampirkan KK,KTP Buku/Akta Nikah Jika Sudah Menikah.',
            ],

            [
                'id_layanan' => 15, // Sesuaikan dengan id layanan yang sesuai
                'pertanyaan' => 'Bagaimana Cara Pengajuan Pecah Kartu Keluarga ?',
                'jawaban' => 'Pecah Kartu Keluarga Bisa Di Lakukan Dengan Datang Ke Kelurahan atau Kecamatan Setempat.',
            ],

        ]);

        // Tambahkan data lainnya sesuai kebutuhan
    }
}
