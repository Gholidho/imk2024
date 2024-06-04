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
    .accordion-button:focus{
      outline: none;
    }
    .accordion-button{
      outline: none;
    }
    .button:focus:not(:focus-visible){
      outline: none;
    }
    .accordion{
      --bs-accordion-btn-focus-box-shadow: 0;
    }
    [id^="headingOne"].accordion-header{
      margin-top: 0;
    }
    button.accordion-button{
      border-top: 1px solid #dee2e6;
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
                            <h1 class="">Publikasi/Unduhan</h1>
                            <p class="mb-0">Odio et unde deleniti. Deserunt numquam exercitationem. Officiis quo odio
                                sint voluptas consequatur ut a odio voluptatem. Sit dolorum debitis veritatis natus
                                dolores. Quasi ratione sint. Sit quaerat ipsum dolorem.</p>
                        </div>
                    </div>
                </div>
            </div>
            <nav class="breadcrumbs">
                <div class="container">
                    <ol>
                        <li><a href="index.html">Home</a></li>
                        <li class="current">Publikasi</li>
                    </ol>
                </div>
            </nav>
        </div><!-- End Page Title -->
                            <!-- Portfolio Section -->
                            <section id="portfolio" class="portfolio section">
                                <div class="container">
                        
                                <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">
                        
                                    <ul class="portfolio-filters isotope-filters" data-aos="fade-up" data-aos-delay="100">
                                      <li data-filter="*" class="filter-active">Semua</li>
                                      <li data-filter=".filter-dasarhukum">Dasar Hukum</li>
                                      <li data-filter=".filter-renja">Rencana Kerja</li>
                                      <li data-filter=".filter-lakip">LAKIP</li>
                                      <li data-filter=".filter-renstra">Rencana Strategis</li>
                                      <li data-filter=".filter-kinerja">Perjanjian Kinerja</li>
                                      <li data-filter=".filter-konsultasi">Laporan Forum Konsultasi Publik</li>
                                      <li data-filter=".filter-ikm">Laporan Survei IKM</li>
                                    </ul><!-- End Portfolio Filters -->
                        
                                    <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">
                        
                                    <div class="col-lg-12 col-md-12 portfolio-item isotope-item filter-dasarhukum">
                                      <div class="accordion" id="accordionExampleDasarHukum">
                                        <div class="accordion-item">
                                          <h2 class="accordion-header" id="headingOneDasarHukum">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOneDasarHukum" aria-expanded="true" aria-controls="collapseOneDasarHukum">
                                              Undang-undang
                                            </button>
                                          </h2>
                                          <div id="collapseOneDasarHukum" class="accordion-collapse collapse show" aria-labelledby="headingOneDasarHukum" data-bs-parent="#accordionExampleDasarHukum">
                                            <div class="accordion-body">
                                              <ul>
                                                <li></li>
                                              </ul>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="accordion-item">
                                          <h2 class="accordion-header" id="headingTwoDasarHukum">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwoDasarHukum" aria-expanded="false" aria-controls="collapseTwoDasarHukum">
                                              Peraturan Pemerintah
                                            </button>
                                          </h2>
                                          <div id="collapseTwoDasarHukum" class="accordion-collapse collapse" aria-labelledby="headingTwoDasarHukum" data-bs-parent="#accordionExampleDasarHukum">
                                            <div class="accordion-body">
                                              Konten dari Accordion Item #2.
                                            </div>
                                          </div>
                                        </div>
                                        <div class="accordion-item">
                                          <h2 class="accordion-header" id="headingTreeDasarHukum">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTreeDasarHukum" aria-expanded="false" aria-controls="collapseTreeDasarHukum">
                                              Peraturan Presiden
                                            </button>
                                          </h2>
                                          <div id="collapseTreeDasarHukum" class="accordion-collapse collapse" aria-labelledby="headingTreeDasarHukum" data-bs-parent="#accordionExampleDasarHukum">
                                            <div class="accordion-body">
                                              Konten dari Accordion Item #2.
                                            </div>
                                          </div>
                                        </div>
                                        <div class="accordion-item">
                                          <h2 class="accordion-header" id="headingFourDasarHukum">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFourDasarHukum" aria-expanded="false" aria-controls="collapseFourDasarHukum">
                                              Keputusan Presiden
                                            </button>
                                          </h2>
                                          <div id="collapseFourDasarHukum" class="accordion-collapse collapse" aria-labelledby="headingFourDasarHukum" data-bs-parent="#accordionExampleDasarHukum">
                                            <div class="accordion-body">
                                              Konten dari Accordion Item #2.
                                            </div>
                                          </div>
                                        </div>
                                        <div class="accordion-item">
                                          <h2 class="accordion-header" id="headingFiveDasarHukum">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFiveDasarHukum" aria-expanded="false" aria-controls="collapseFiveDasarHukum">
                                              Peraturan Menteri Dalam Negeri
                                            </button>
                                          </h2>
                                          <div id="collapseFiveDasarHukum" class="accordion-collapse collapse" aria-labelledby="headingFiveDasarHukum" data-bs-parent="#accordionExampleDasarHukum">
                                            <div class="accordion-body">
                                              Konten dari Accordion Item #2.
                                            </div>
                                          </div>
                                        </div>
                                        <div class="accordion-item">
                                          <h2 class="accordion-header" id="headingSixDasarHukum">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSixDasarHukum" aria-expanded="false" aria-controls="collapseSixDasarHukum">
                                              Peraturan Daerah
                                            </button>
                                          </h2>
                                          <div id="collapseSixDasarHukum" class="accordion-collapse collapse" aria-labelledby="headingSixDasarHukum" data-bs-parent="#accordionExampleDasarHukum">
                                            <div class="accordion-body">
                                              Konten dari Accordion Item #2.
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div><!-- End Portfolio Item -->
                        
                                    <div class="col-lg-12 col-md-12 portfolio-item isotope-item filter-renja">
                                        <div class="accordion" id="accordionExampleRenja">
                                            <div class="accordion-item">
                                              <h2 class="accordion-header" id="headingOneRenja">
                                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOneRenja" aria-expanded="true" aria-controls="collapseOneRenja">
                                                  Rencana Kerja 2018
                                                </button>
                                              </h2>
                                              <div id="collapseOneRenja" class="accordion-collapse collapse show" aria-labelledby="headingOneRenja" data-bs-parent="#accordionExampleRenja">
                                                <div class="accordion-body">
                                                  Konten dari Accordion Item #1.
                                                </div>
                                              </div>
                                            </div>
                                            <div class="accordion-item">
                                              <h2 class="accordion-header" id="headingTwoRenja">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwoRenja" aria-expanded="false" aria-controls="collapseTwoRenja">
                                                  Rencana Kerja 2019
                                                </button>
                                              </h2>
                                              <div id="collapseTwoRenja" class="accordion-collapse collapse" aria-labelledby="headingTwoRenja" data-bs-parent="#accordionExampleRenja">
                                                <div class="accordion-body">
                                                  Konten dari Accordion Item #2.
                                                </div>
                                              </div>
                                            </div>
                                            <div class="accordion-item">
                                              <h2 class="accordion-header" id="headingTreeRenja">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTreeRenja" aria-expanded="false" aria-controls="collapseTreeRenja">
                                                  Rencana Kerja 2020
                                                </button>
                                              </h2>
                                              <div id="collapseTreeRenja" class="accordion-collapse collapse" aria-labelledby="headingTreeRenja" data-bs-parent="#accordionExampleRenja">
                                                <div class="accordion-body">
                                                  Konten dari Accordion Item #2.
                                                </div>
                                              </div>
                                            </div>    
                                            <div class="accordion-item">
                                              <h2 class="accordion-header" id="headingFourRenja">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFourRenja" aria-expanded="false" aria-controls="collapseFourRenja">
                                                  Rencana Kerja 2021
                                                </button>
                                              </h2>
                                              <div id="collapseFourRenja" class="accordion-collapse collapse" aria-labelledby="headingFourRenja" data-bs-parent="#accordionExampleRenja">
                                                <div class="accordion-body">
                                                  Konten dari Accordion Item #2.
                                                </div>
                                              </div>
                                            </div>    
                                            <div class="accordion-item">
                                              <h2 class="accordion-header" id="headingFiveRenja">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFiveRenja" aria-expanded="false" aria-controls="collapseFiveRenja">
                                                  Rencana Kerja 2022
                                                </button>
                                              </h2>
                                              <div id="collapseFiveRenja" class="accordion-collapse collapse" aria-labelledby="headingFiveRenja" data-bs-parent="#accordionExampleRenja">
                                                <div class="accordion-body">
                                                  Konten dari Accordion Item #2.
                                                </div>
                                              </div>
                                            </div>    
                                            <div class="accordion-item">
                                              <h2 class="accordion-header" id="headingSixRenja">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSixRenja" aria-expanded="false" aria-controls="collapseSixRenja">
                                                  Rencana Kerja 2023
                                                </button>
                                              </h2>
                                              <div id="collapseSixRenja" class="accordion-collapse collapse" aria-labelledby="headingSixRenja" data-bs-parent="#accordionExampleRenja">
                                                <div class="accordion-body">
                                                  Konten dari Accordion Item #2.
                                                </div>
                                              </div>
                                            </div>
                                        </div>
                                    </div><!-- End Portfolio Item -->
                        
                                    <div class="col-lg-12 col-md-12 portfolio-item isotope-item filter-lakip">
                                        <div class="accordion" id="accordionExampleLakip">
                                          <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingOneLakip">
                                              <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOneLakip" aria-expanded="true" aria-controls="collapseOneLakip">
                                                Laporan Akuntabilitas Kinerja Instansi Pemerintah 2017
                                              </button>
                                            </h2>
                                            <div id="collapseOneLakip" class="accordion-collapse collapse show" aria-labelledby="headingOneLakip" data-bs-parent="#accordionExampleLakip">
                                              <div class="accordion-body">
                                                Konten dari Accordion Item #1.
                                              </div>
                                            </div>
                                          </div>
                                          <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingTwoLakip">
                                              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwoLakip" aria-expanded="true" aria-controls="collapseTwoLakip">
                                                Laporan Akuntabilitas Kinerja Instansi Pemerintah 2018
                                              </button>
                                            </h2>
                                            <div id="collapseTwoLakip" class="accordion-collapse collapse" aria-labelledby="headingTwoLakip" data-bs-parent="#accordionExampleLakip">
                                              <div class="accordion-body">
                                                Konten dari Accordion Item #1.
                                              </div>
                                            </div>
                                          </div>
                                          <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingThreeLakip">
                                              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThreeLakip" aria-expanded="true" aria-controls="collapseThreeLakip">
                                                Laporan Akuntabilitas Kinerja Instansi Pemerintah 2019
                                              </button>
                                            </h2>
                                            <div id="collapseThreeLakip" class="accordion-collapse collapse" aria-labelledby="headingThreeLakip" data-bs-parent="#accordionExampleLakip">
                                              <div class="accordion-body">
                                                Konten dari Accordion Item #1.
                                              </div>
                                            </div>
                                          </div>
                                          <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingFourLakip">
                                              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFourLakip" aria-expanded="true" aria-controls="collapseFourLakip">
                                                Laporan Akuntabilitas Kinerja Instansi Pemerintah 2020
                                              </button>
                                            </h2>
                                            <div id="collapseFourLakip" class="accordion-collapse collapse" aria-labelledby="headingFourLakip" data-bs-parent="#accordionExampleLakip">
                                              <div class="accordion-body">
                                                Konten dari Accordion Item #1.
                                              </div>
                                            </div>
                                          </div>
                                          <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingFiveLakip">
                                              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFiveLakip" aria-expanded="true" aria-controls="collapseFiveLakip">
                                                Laporan Akuntabilitas Kinerja Instansi Pemerintah 2021
                                              </button>
                                            </h2>
                                            <div id="collapseFiveLakip" class="accordion-collapse collapse" aria-labelledby="headingFiveLakip" data-bs-parent="#accordionExampleLakip">
                                              <div class="accordion-body">
                                                Konten dari Accordion Item #1.
                                              </div>
                                            </div>
                                          </div>
                                          <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingSixLakip">
                                              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSixLakip" aria-expanded="true" aria-controls="collapseSixLakip">
                                                Laporan Akuntabilitas Kinerja Instansi Pemerintah 2022
                                              </button>
                                            </h2>
                                            <div id="collapseSixLakip" class="accordion-collapse collapse" aria-labelledby="headingSixLakip" data-bs-parent="#accordionExampleLakip">
                                              <div class="accordion-body">
                                                Konten dari Accordion Item #1.
                                              </div>
                                            </div>
                                          </div>
                                          <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingSevenLakip">
                                              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSevenLakip" aria-expanded="true" aria-controls="collapseSevenLakip">
                                                Laporan Akuntabilitas Kinerja Instansi Pemerintah 2023
                                              </button>
                                            </h2>
                                            <div id="collapseSevenLakip" class="accordion-collapse collapse" aria-labelledby="headingSevenLakip" data-bs-parent="#accordionExampleLakip">
                                              <div class="accordion-body">
                                                Konten dari Accordion Item #1.
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                    </div><!-- End Portfolio Item -->
                        
                                    <div class="col-lg-12 col-md-12 portfolio-item isotope-item filter-renstra">
                                        <div class="accordion" id="accordionExampleRenstra">
                                          <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingOneRenstra">
                                              <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOneRenstra" aria-expanded="true" aria-controls="collapseOneRenstra">
                                                Rencana Strategis 2016-2021
                                              </button>
                                            </h2>
                                            <div id="collapseOneRenstra" class="accordion-collapse collapse show" aria-labelledby="headingOneRenstra" data-bs-parent="#accordionExampleRenstra">
                                              <div class="accordion-body">
                                                Konten dari Accordion Item #1.
                                              </div>
                                            </div>
                                          </div>
                                          <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingTwoRenstra">
                                              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwoRenstra" aria-expanded="true" aria-controls="collapseTwoRenstra">
                                                Rencana Strategis 2021-2026
                                              </button>
                                            </h2>
                                            <div id="collapseTwoRenstra" class="accordion-collapse collapse" aria-labelledby="headingTwoRenstra" data-bs-parent="#accordionExampleRenstra">
                                              <div class="accordion-body">
                                                Konten dari Accordion Item #1.
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                    </div><!-- End Portfolio Item -->
                        
                                    <div class="col-lg-12 col-md-12 portfolio-item isotope-item filter-kinerja">
                                        <div class="accordion" id="accordionExampleKinerja">
                                          <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingOneKinerja">
                                              <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOneKinerja" aria-expanded="true" aria-controls="collapseOneKinerja">
                                                Perjanjian Kinerja 2020
                                              </button>
                                            </h2>
                                            <div id="collapseOneKinerja" class="accordion-collapse collapse show" aria-labelledby="headingOneKinerja" data-bs-parent="#accordionExampleKinerja">
                                              <div class="accordion-body">
                                                Konten dari Accordion Item #1.
                                              </div>
                                            </div>
                                          </div>
                                          <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingTwoKinerja">
                                              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwoKinerja" aria-expanded="true" aria-controls="collapseTwoKinerja">
                                                Perjanjian Kinerja 2021
                                              </button>
                                            </h2>
                                            <div id="collapseTwoKinerja" class="accordion-collapse collapse" aria-labelledby="headingTwoKinerja" data-bs-parent="#accordionExampleKinerja">
                                              <div class="accordion-body">
                                                Konten dari Accordion Item #1.
                                              </div>
                                            </div>
                                          </div>
                                          <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingThreeKinerja">
                                              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThreeKinerja" aria-expanded="true" aria-controls="collapseThreeKinerja">
                                                Perjanjian Kinerja 2022
                                              </button>
                                            </h2>
                                            <div id="collapseThreeKinerja" class="accordion-collapse collapse" aria-labelledby="headingThreeKinerja" data-bs-parent="#accordionExampleKinerja">
                                              <div class="accordion-body">
                                                Konten dari Accordion Item #1.
                                              </div>
                                            </div>
                                          </div>
                                          <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingFourKinerja">
                                              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFourKinerja" aria-expanded="true" aria-controls="collapseFourKinerja">
                                                Perjanjian Kinerja 2023
                                              </button>
                                            </h2>
                                            <div id="collapseFourKinerja" class="accordion-collapse collapse" aria-labelledby="headingFourKinerja" data-bs-parent="#accordionExampleKinerja">
                                              <div class="accordion-body">
                                                Konten dari Accordion Item #1.
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                    </div><!-- End Portfolio Item -->
                        
                                    <div class="col-lg-12 col-md-12 portfolio-item isotope-item filter-konsultasi">
                                        <div class="accordion" id="accordionExampleKonsultasi">
                                            <div class="accordion-item">
                                              <h2 class="accordion-header" id="headingOneKonsultasi">
                                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOneKonsultasi" aria-expanded="true" aria-controls="collapseOneKonsultasi">
                                                  Laporan Forum Konsultasi Publik 2019
                                                </button>
                                              </h2>
                                              <div id="collapseOneKonsultasi" class="accordion-collapse collapse show" aria-labelledby="headingOneKonsultasi" data-bs-parent="#accordionExampleKonsultasi">
                                                <div class="accordion-body">
                                                  Konten dari Accordion Item #1.
                                                </div>
                                              </div>
                                            </div>
                                        </div>
                                    </div><!-- End Portfolio Item -->
                        
                                    <div class="col-lg-12 col-md-12 portfolio-item isotope-item filter-ikm">
                                        <div class="accordion" id="accordionExampleIKM">
                                          <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingOneIKM">
                                              <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOneIKM" aria-expanded="true" aria-controls="collapseOneIKM">
                                                Laporan Hasil Survei Indeks Kepuasan Masyarakat 2017
                                              </button>
                                            </h2>
                                            <div id="collapseOneIKM" class="accordion-collapse collapse show" aria-labelledby="headingOneIKM" data-bs-parent="#accordionExampleIKM">
                                              <div class="accordion-body">
                                                Konten dari Accordion Item #1.
                                              </div>
                                            </div>
                                          </div>
                                          <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingTwoIKM">
                                              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwoIKM" aria-expanded="true" aria-controls="collapseTwoIKM">
                                                Laporan Hasil Survei Indeks Kepuasan Masyarakat 2018
                                              </button>
                                            </h2>
                                            <div id="collapseTwoIKM" class="accordion-collapse collapse" aria-labelledby="headingTwoIKM" data-bs-parent="#accordionExampleIKM">
                                              <div class="accordion-body">
                                                Konten dari Accordion Item #1.
                                              </div>
                                            </div>
                                          </div>
                                          <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingThreeIKM">
                                              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThreeIKM" aria-expanded="true" aria-controls="collapseThreeIKM">
                                                Laporan Hasil Survei Indeks Kepuasan Masyarakat 2019
                                              </button>
                                            </h2>
                                            <div id="collapseThreeIKM" class="accordion-collapse collapse" aria-labelledby="headingThreeIKM" data-bs-parent="#accordionExampleIKM">
                                              <div class="accordion-body">
                                                Konten dari Accordion Item #1.
                                              </div>
                                            </div>
                                          </div>
                                          <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingFourIKM">
                                              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFourIKM" aria-expanded="true" aria-controls="collapseFourIKM">
                                                Laporan Hasil Survei Indeks Kepuasan Masyarakat 2020
                                              </button>
                                            </h2>
                                            <div id="collapseFourIKM" class="accordion-collapse collapse" aria-labelledby="headingFourIKM" data-bs-parent="#accordionExampleIKM">
                                              <div class="accordion-body">
                                                Konten dari Accordion Item #1.
                                              </div>
                                            </div>
                                          </div>
                                          <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingFiveIKM">
                                              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFiveIKM" aria-expanded="true" aria-controls="collapseFiveIKM">
                                                Laporan Hasil Survei Indeks Kepuasan Masyarakat 2021
                                              </button>
                                            </h2>
                                            <div id="collapseFiveIKM" class="accordion-collapse collapse" aria-labelledby="headingFiveIKM" data-bs-parent="#accordionExampleIKM">
                                              <div class="accordion-body">
                                                Konten dari Accordion Item #1.
                                              </div>
                                            </div>
                                          </div>
                                          <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingSixIKM">
                                              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSixIKM" aria-expanded="true" aria-controls="collapseSixIKM">
                                                Laporan Hasil Survei Indeks Kepuasan Masyarakat 2023
                                              </button>
                                            </h2>
                                            <div id="collapseSixIKM" class="accordion-collapse collapse" aria-labelledby="headingSixIKM" data-bs-parent="#accordionExampleIKM">
                                              <div class="accordion-body">
                                                Konten dari Accordion Item #1.
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                    </div><!-- End Portfolio Item -->
                        
                                    
                                    </div><!-- End Portfolio Container -->
                        
                                </div>
                        
                                </div>
                        
                            </section><!-- /Portfolio Section -->
    </main>
@endsection
