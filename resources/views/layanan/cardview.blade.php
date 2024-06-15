@extends('layout.main')

@section('styles')
  <style>
    .about .icon-box {
      padding: 20px;
      /* height: 15rem; */
      box-shadow: 0px 0px 10px 5px rgba(0, 0, 0, 0.1);
    }
    .about .icon-box i {
      margin-bottom: 0;
    }
    .about .icon-box h3 {
      font-size: 20px;
    }
    #about a {
      color: #e84545 !important;
      text-decoration: none;
    }
    #about a .icon-box:hover{
      background-color: #e84545;
      color: white;
    }
    .about .icon-box:hover i {
      background-color: white;
      color: #e84545;
    }
    section, .section{
      background-color: white;
    }
    .container a{
      color: #e84545;
    }
  </style>
@endsection

@section('container')
    <main class="main">

        <!-- Page Title -->
        <div class="page-title" data-aos="fade">
            <div class="heading">
                <div class="container">
                    <div class="row d-flex justify-content-center text-center">
                        <div class="col-lg-8">
                            <h1 class="">Layanan Informasi</h1>
                            <p class="mb-0">Layanan-layanan yang disediakan oleh Dukcapil Trenggalek</p>
                        </div>
                    </div>
                </div>
            </div>
            <nav class="breadcrumbs">
                <div class="container">
                    <ol>
                        <li><a href="index.html">Home</a></li>
                        <li class="current">Layanan</li>
                    </ol>
                </div>
            </nav>
        </div><!-- End Page Title -->

                            <section id="about" class="about section">
                                <div class="container justify-content-center text-center">
                                  <div class="row align-items-xl-center gy-5">
                                      <div class="row gy-4 icon-boxes">
                                        <div class="col-md-3" data-aos="fade-up" data-aos-delay="200">
                                          <a href="{{ route('layanan.detail')}}">
                                            <div class="icon-box">
                                              <i class="fas fa-baby"></i>
                                              <h3>Akta Pengesahan Anak</h3>
                                              {{-- <p>Magni repellendus vel ullam hic officia accusantium ipsa dolor omnis dolor voluptatem</p> --}}
                                            </div>
                                          </a>
                                        </div> <!-- End Icon Box -->
                          
                                        <div class="col-md-3" data-aos="fade-up" data-aos-delay="300">
                                          <a href="{{ route('layanan.detail')}}">
                                            <div class="icon-box">
                                              <i class="fas fa-hands-holding-child"></i>
                                              <h3>Akta Pengakuan Anak</h3>
                                              {{-- <p>Autem saepe animi et aut aspernatur culpa facere. Rerum saepe rerum voluptates quia</p> --}}
                                            </div>
                                          </a>
                                        </div> <!-- End Icon Box -->
                          
                                        <div class="col-md-3" data-aos="fade-up" data-aos-delay="400">
                                          <a href="{{ route('layanan.detail')}}">
                                            <div class="icon-box">
                                              <i class="fa-solid fa-heart-crack"></i>
                                              <h3>Akta Perceraian</h3>
                                              {{-- <p>Omnis perferendis molestias culpa sed. Recusandae quas possimus. Quod consequatur corrupti</p> --}}
                                            </div>
                                          </a>
                                        </div> <!-- End Icon Box -->
                          
                                        <div class="col-md-3" data-aos="fade-up" data-aos-delay="500">
                                          <a href="{{ route('layanan.detail')}}">
                                            <div class="icon-box">
                                              <i class="bi bi-arrow-through-heart"></i>
                                              <h3>Akta Perkawinan</h3>
                                              {{-- <p>Sint et dolor voluptas minus possimus nostrum. Reiciendis commodi eligendi omnis quideme lorenda</p> --}}
                                            </div>
                                          </a>
                                        </div> <!-- End Icon Box -->

                                        <div class="col-md-3" data-aos="fade-up" data-aos-delay="500">
                                          <a href="{{ route('layanan.detail')}}">
                                            <div class="icon-box">
                                              <i class="fa-solid fa-skull"></i>
                                              <h3>Akta Kematian</h3>
                                              {{-- <p>Sint et dolor voluptas minus possimus nostrum. Reiciendis commodi eligendi omnis quideme lorenda</p> --}}
                                            </div>
                                          </a>
                                        </div> <!-- End Icon Box -->
                                        
                                        <div class="col-md-3" data-aos="fade-up" data-aos-delay="500">
                                          <a href="{{ route('layanan.detail')}}">
                                            <div class="icon-box">
                                              <i class="fa-solid fa-cake-candles"></i>
                                              <h3>Akta Kelahiran</h3>
                                              {{-- <p>Sint et dolor voluptas minus possimus nostrum. Reiciendis commodi eligendi omnis quideme lorenda</p> --}}
                                            </div>
                                          </a>
                                        </div> <!-- End Icon Box -->

                                        <div class="col-md-3" data-aos="fade-up" data-aos-delay="500">
                                          <a href="{{ route('layanan.detail')}}">
                                            <div class="icon-box">
                                              <i class="fa-solid fa-child-reaching"></i>
                                              <h3>Surat Keterangan Pengangkatan Anak</h3>
                                              {{-- <p>Sint et dolor voluptas minus possimus nostrum. Reiciendis commodi eligendi omnis quideme lorenda</p> --}}
                                            </div>
                                          </a>
                                        </div> <!-- End Icon Box -->

                                        <div class="col-md-3" data-aos="fade-up" data-aos-delay="500">
                                          <a href="{{ route('layanan.detail')}}">
                                            <div class="icon-box">
                                              <i class="fa-solid fa-hand-holding-heart"></i>
                                              <h3>Surat Keterangan Pembatalan Perceraian</h3>
                                              {{-- <p>Sint et dolor voluptas minus possimus nostrum. Reiciendis commodi eligendi omnis quideme lorenda</p> --}}
                                            </div>
                                          </a>
                                        </div> <!-- End Icon Box -->

                                        <div class="col-md-3" data-aos="fade-up" data-aos-delay="500">
                                          <a href="{{ route('layanan.detail')}}">
                                            <div class="icon-box">
                                              <i class="fa-solid fa-ring"></i>
                                              <h3>Surat Keterangan Pembatalan Perkawinan</h3>
                                              {{-- <p>Sint et dolor voluptas minus possimus nostrum. Reiciendis commodi eligendi omnis quideme lorenda</p> --}}
                                            </div>
                                          </a>
                                        </div> <!-- End Icon Box -->

                                        <div class="col-md-3" data-aos="fade-up" data-aos-delay="500">
                                          <a href="{{ route('layanan.detail')}}">
                                            <div class="icon-box">
                                              <i class="fa-solid fa-skull"></i>
                                              <h3>Surat Keterangan Kematian untuk Orang Asing</h3>
                                              {{-- <p>Sint et dolor voluptas minus possimus nostrum. Reiciendis commodi eligendi omnis quideme lorenda</p> --}}
                                            </div>
                                          </a>
                                        </div> <!-- End Icon Box -->

                                        <div class="col-md-3" data-aos="fade-up" data-aos-delay="500">
                                          <a href="{{ route('layanan.detail')}}">
                                            <div class="icon-box">
                                              <i class="fa-solid fa-skull-crossbones"></i>
                                              <h3>Surat Keterangan Lahir Mati Untuk Orang Asing</h3>
                                              {{-- <p>Sint et dolor voluptas minus possimus nostrum. Reiciendis commodi eligendi omnis quideme lorenda</p> --}}
                                            </div>
                                          </a>
                                        </div> <!-- End Icon Box -->

                                        <div class="col-md-3" data-aos="fade-up" data-aos-delay="500">
                                          <a href="{{ route('layanan.detail')}}">
                                            <div class="icon-box">
                                              <i class="fa-solid fa-cake-candles"></i>
                                              <h3>Surat Keterangan Kelahiran Untuk Orang Asing</h3>
                                              {{-- <p>Sint et dolor voluptas minus possimus nostrum. Reiciendis commodi eligendi omnis quideme lorenda</p> --}}
                                            </div>
                                          </a>
                                        </div> <!-- End Icon Box -->

                                        <div class="col-md-3" data-aos="fade-up" data-aos-delay="500">
                                          <a href="{{ route('layanan.detail')}}">
                                            <div class="icon-box">
                                              <i class="fa-solid fa-house-chimney"></i>
                                              <h3>Surat Keterangan Tempat Tinggal Untuk Orang Asing</h3>
                                              {{-- <p>Sint et dolor voluptas minus possimus nostrum. Reiciendis commodi eligendi omnis quideme lorenda</p> --}}
                                            </div>
                                          </a>
                                        </div> <!-- End Icon Box -->

                                        <div class="col-md-3" data-aos="fade-up" data-aos-delay="500">
                                          <a href="{{ route('layanan.detail')}}">
                                            <div class="icon-box">
                                              <i class="fa-solid fa-truck-moving"></i>
                                              <h3>Surat Keterangan Pindah Datang Penduduk WNI Dalam Wilayah NKRI</h3>
                                              {{-- <p>Sint et dolor voluptas minus possimus nostrum. Reiciendis commodi eligendi omnis quideme lorenda</p> --}}
                                            </div>
                                          </a>
                                        </div> <!-- End Icon Box -->

                                        <div class="col-md-3" data-aos="fade-up" data-aos-delay="500">
                                          <a href="{{ route('layanan.detail')}}">
                                            <div class="icon-box">
                                              <i class="fa-solid fa-truck-ramp-box"></i>
                                              <h3>Surat Keterangan Pindah Penduduk WNI Dalam Wilayah NKRI</h3>
                                              {{-- <p>Sint et dolor voluptas minus possimus nostrum. Reiciendis commodi eligendi omnis quideme lorenda</p> --}}
                                            </div>
                                          </a>
                                        </div> <!-- End Icon Box -->

                                        <div class="col-md-3" data-aos="fade-up" data-aos-delay="500">
                                          <a href="{{ route('layanan.detail')}}">
                                            <div class="icon-box">
                                              <i class="fa-solid fa-address-card"></i>
                                              <h3>Kartu Identitas Anak</h3>
                                              {{-- <p>Sint et dolor voluptas minus possimus nostrum. Reiciendis commodi eligendi omnis quideme lorenda</p> --}}
                                            </div>
                                          </a>
                                        </div> <!-- End Icon Box -->

                                        <div class="col-md-3" data-aos="fade-up" data-aos-delay="500">
                                          <a href="{{ route('layanan.detail')}}">
                                            <div class="icon-box">
                                              <i class="fa-solid fa-id-card"></i>
                                              <h3>Kartu Tanda Penduduk Elektronik</h3>
                                              {{-- <p>Sint et dolor voluptas minus possimus nostrum. Reiciendis commodi eligendi omnis quideme lorenda</p> --}}
                                            </div>
                                          </a>
                                        </div> <!-- End Icon Box -->

                                        <div class="col-md-3" data-aos="fade-up" data-aos-delay="500">
                                          <a href="{{ route('layanan.detail')}}">
                                            <div class="icon-box">
                                              <i class="bi bi-card-heading"></i>
                                              <h3>Kartu Keluarga</h3>
                                              {{-- <p>Sint et dolor voluptas minus possimus nostrum. Reiciendis commodi eligendi omnis quideme lorenda</p> --}}
                                            </div>
                                          </a>
                                        </div> <!-- End Icon Box -->

                                        <div class="col-md-3" data-aos="fade-up" data-aos-delay="500">
                                          <a href="{{ route('layanan.detail')}}">
                                            <div class="icon-box">
                                              <i class="fa-solid fa-users-line"></i>
                                              <h3>Dokumen Biodata Penduduk</h3>
                                              {{-- <p>Sint et dolor voluptas minus possimus nostrum. Reiciendis commodi eligendi omnis quideme lorenda</p> --}}
                                            </div>
                                          </a>
                                        </div> <!-- End Icon Box -->

                                    </div>
                          
                                  </div>
                                </div>
                          
                              </section><!-- /About Section -->
                          
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- End Page Title -->
    </main>
    <script>
      function adjustIconBoxHeight() {
        // Ambil semua elemen dengan kelas .about .icon-box
        const iconBoxes = document.querySelectorAll('.about .icon-box');
        let maxHeight = 0;

        // Temukan tinggi maksimum
        iconBoxes.forEach(box => {
          const boxHeight = box.offsetHeight;
          if (boxHeight > maxHeight) {
            maxHeight = boxHeight;
          }
        });

        // Terapkan tinggi maksimum ke semua .icon-box
        iconBoxes.forEach(box => {
          box.style.height = `${maxHeight}px`;
        });
      }

      // Panggil fungsi adjustIconBoxHeight setelah DOM dimuat
      document.addEventListener('DOMContentLoaded', adjustIconBoxHeight);
    
      // Panggil fungsi adjustIconBoxHeight setelah perubahan ukuran jendela
      window.addEventListener('resize', adjustIconBoxHeight);

      // Panggil fungsi adjustIconBoxHeight setelah semua animasi selesai
      setTimeout(() => {
        adjustIconBoxHeight();
      }, 350); // Sesuaikan waktu sesuai durasi animasi
    </script>
@endsection
