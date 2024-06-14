@extends('layout.main')

@section('styles')
  <style>
    .about .icon-box {
      padding: 20px;
      height: 15rem;
    }
    .about .icon-box i {
      margin-bottom: 0;
    }
    .about .icon-box h3 {
      font-size: 20px;
    }
    .accordion-button:not(.collapsed) {
      background-color: #e84545;
      color: #ffffff;
    }
    .accordion{
      --bs-accordion-btn-focus-box-shadow: 0;
    }
    #headingOne.accordion-header{
      margin-top: 0;
    }
    button.accordion-button{
      border-top: 1px solid #dee2e6;
    }
    .services-list{
      height: 300px;
      overflow-y: scroll;
    }
    .service-details .services-list a{
      padding: 10px 12px;
    }
    .service-details ol{
      list-style-type: decimal;
    }
    .service-details ol li{
      display: list-item;
    }
    .service-details ul{
      list-style-type: disc;
      margin-left: 5%;
    }
    .service-details ul li{
      display: list-item;
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
            <h1 class="">Akta Pengesahan Anak</h1>
            <p class="mb-0">Pengesahan anak merupakan pengesahan status seorang anak yang lahir dari perkawinan yang telah sah menurut hukum agama, pada saat pencatatan perkawinan dari kedua orang tua anak tersebut telah sah menurut hukum negara.</p>
          </div>
        </div>
      </div>
    </div>
    <nav class="breadcrumbs">
      <div class="container">
        <ol>
          <li><a href="{{ '/' }}">Home</a></li>
          <li><a href="{{ route('layanan') }}">Layanan</a></li>
          <li class="current">Akta Pengesahan Anak</li>
        </ol>
      </div>
    </nav>
  </div><!-- End Page Title -->

  <!-- Service Details Section -->
  <section id="service-details" class="service-details section">

    <div class="container">

      <div class="row gy-5">

        <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">

          <div class="service-box">
            <h4>Daftar Layanan</h4>
            <div class="services-list">
              <a href="#" class="active"><i class="bi bi-arrow-right-circle"></i><span>Akta Pengesahan Anak</span></a>
              <a href="#"><i class="bi bi-arrow-right-circle"></i><span>Akta Pengakuan Anak</span></a>
              <a href="#"><i class="bi bi-arrow-right-circle"></i><span>Akta Perceraian</span></a>
              <a href="#"><i class="bi bi-arrow-right-circle"></i><span>Akta Perkawinan</span></a>
              <a href="#"><i class="bi bi-arrow-right-circle"></i><span>Akta Kematian</span></a>
              <a href="#"><i class="bi bi-arrow-right-circle"></i><span>Akta Kelahiran</span></a>
              <a href="#"><i class="bi bi-arrow-right-circle"></i><span>Surat Keterangan Pengangkatan Anak</span></a>
              <a href="#"><i class="bi bi-arrow-right-circle"></i><span>Surat Keterangan Pembatalan Cerai</span></a>
              <a href="#"><i class="bi bi-arrow-right-circle"></i><span>Surat Keterangan Pembatalan Perkawinan</span></a>
              <a href="#"><i class="bi bi-arrow-right-circle"></i><span>Surat Keterangan Kematian untuk Orang Asing</span></a>
              <a href="#"><i class="bi bi-arrow-right-circle"></i><span>Surat Keterangan Tempat Tinggal untuk Orang Asing</span></a>
            </div>
          </div><!-- End Services List -->

          <div class="service-box">
            <h4>Form Download</h4>
            <div class="download-catalog">
              <a href="#"><i class="bi bi-filetype-pdf"></i><span>Permohonan Pengesahan Anak</span></a>
            </div>
          </div><!-- End Services List -->

          <div class="help-box d-flex flex-column justify-content-center align-items-center">
            <i class="bi bi-headset help-icon"></i>
            <h4>Ada pertanyaan?</h4>
            <p class="d-flex align-items-center mt-2 mb-0"><i class="bi bi-telephone me-2"></i> <span>0355791160</span></p>
            <p class="d-flex align-items-center mt-1 mb-0"><i class="bi bi-envelope me-2"></i> <a href="mailto:disdukcapil.trenggalek@gmail.com">disdukcapil.trenggalek@gmail.com</a></p>
          </div>

        </div>

        <div class="col-lg-8 ps-lg-5" data-aos="fade-up" data-aos-delay="200">
          <div class="accordion" id="accordionExample">
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                  Persyaratan
                </button>
              </h2>
              <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <ul>
                    <li>Daftar antrian online, pendaftaran melalui petugas registrasi desa atau pendaftaran pribadi mendesak tanpa daftar antrian (dengan rekom dari Instansi)</li>
                    <li>Daftar antrian online atau melalui petugas registrasi desa</li>
                    <li>Penduduk WNI di wilayah NKRI: 
                      <ol>
                        <li>Kutipan akta kelahiran</li>
                        <li>Kutipan akta perkawinan yang menerangkan terjadinya peristiwa perkawinan agama atau kepercayaan terhadap Tuhan Yang Maha Esa terjadi sebelum kelahiran anak</li>
                        <li>KK orang tua</li>
                        <li>KTP-el</li>
                      </ol>
                    </li>
                    <li>Penduduk Orang Asing di wilayah NKRI :
                      <ol>
                        <li>Kutipan akta kelahiran</li>
                        <li>Kutipan akta perkawinan yang menerangkan terjadinya peristiwa perkawinan agama atau kepercayaan terhadap Tuhan Yang Maha Esa terjadi sebelum kelahiran anak</li>
                        <li>KK orang tua</li>
                        <li>Dokumen Perjalanan bagi ayah atau ibu Orang Asing</li>
                      </ol>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingTwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                  Sistem, Mekanisme, Prosedur
                </button>
              </h2>
              <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <ol>
                    <li>Daftar antrian online, pendaftaran melalui petugas registrasi desa atau pendaftaran pribadi mendesak tanpa daftar antrian (dengan rekom dari Instansi)</li>
                    <li>Mengisi Formulir permohonan</li>
                    <li>Mengajukan permohonan secara tertulis dengan dilengkapi persyaratan sesuai dengan ketentuan lewat loket pelayanan.</li>
                    <li>Menerima dan memeriksa permohonan untuk disesuaikan dengan persyaratan yang telah ditentukan.</li>
                    <li>Petugas operator memproses permohonan Akta Pengesahan Anak tersebut.</li>
                    <li>Pemeriksaan akhir hasil print out operator.</li>
                    <li>Penandatanganan Akta Pengesahan Anak oleh Kepala Dinas Kependudukan dan Pencatatan Sipil Kabupaten Trenggalek.</li>
                  </ol>
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingThree">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                  Waktu Penyelesaian
                </button>
              </h2>
              <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <p>Selambat – lambatnya dalam waktu 14 (empat belas) hari sejak diterimanya berkas dan dinyatakan lengkap, pemohon dapat menerima Pencatatan Akta Pengesahan Anak.</p>
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingFour">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                  Biaya/Tarif
                </button>
              </h2>
              <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <p>Tidak dipungut biaya</p>
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingFive">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                  Produk Pelayanan
                </button>
              </h2>
              <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <p>Produk layanannya adalah kutipan Akta Pengesahan Anak</p>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </section><!-- /Service Details Section -->

</main>

@endsection
