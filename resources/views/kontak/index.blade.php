@extends('layout.main')

@section('styles')
<style>
  .contact .info-item {
    padding: 10px;
    padding-top: 20px;
  }

  .contact .info-item .social-icon i {
    font-size: 10px;
  }

  .contact .info-item img {
    width: auto;
    height: 38px;
  }

  .tableBku {
    width: 100%;
    margin-bottom: 1rem;
  }

  .tableBku td,
  .tableBku th {
    padding: 0.7rem;
    font-size: 0.87rem;
    border-top: 1px solid #e3e6f0;
  }

  .tableBku th {
    background-color: #E84545;
    color: #fff;
    font-weight: 700;
  }

  .tableBku td {
    background-color: rgba(232, 69, 69, 0.05);
  }

  .tableBku thead th {
    vertical-align: middle;
    border-bottom: 2px solid #e3e6f0;
    text-align: center;
  }

  .tableBku tbody+tbody {
    border-top: 2px solid #e3e6f0;
  }

  .table-bordered {
    border: 1px solid #e3e6f0;
  }

  .table-bordered td,
  .table-bordered th {
    border: 1px solid #e3e6f0;
  }

  .table-bordered thead td,
  .table-bordered thead th {
    border-bottom-width: 2px;
  }

  .label {
    width: 100%;
    text-align: left;
  }

  .form-control {
    display: inline-block;
    width: 67%;
  }

  .kolomP {
    min-width: 14rem;
  }

  .kolomS {
    min-width: 9rem;
  }

  .kolomPS {
    min-width: 22rem;
  }

  .kolomSS {
    min-width: 3rem;
  }

  .table-responsive {
    overflow-x: auto;
    /* Ensure horizontal scrolling is enabled */
  }

  .Logo {
    width: 3rem;
  }

  .text-normalsiku-100 {
    color: #E84545;
    font-weight: 600;
  }

  .btn-whatsapp {
    background-color: #25D366;
    border-color: #25D366;
    color: white;
    display: flex;
    align-items: center;
    padding: 0.375rem 0.75rem;
    /* Kurangi padding */
    white-space: nowrap;
    /* Hindari teks membungkus */
    width: 200px;
    /* Tentukan lebar maksimum */
  }

  .btn-whatsapp i {
    margin-right: 0.5rem;
  }

  .btn-whatsapp:hover {
    background-color: #1EBE54;
    border-color: #1EBE54;
  }

  .tableBku td:nth-child(2),
  .tableBku td:nth-child(3) {
    text-align: left;
  }
</style>
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.datatables.net/2.0.7/css/dataTables.bootstrap4.css">
@endsection

@section('container')
<main class="main">

  <!-- Page Title -->
  <div class="page-title" data-aos="fade">
    <div class="heading" style="padding:0">
      <div class="container-fluid"> <!-- Changed to container-fluid -->
        <div class="row d-flex justify-content-center text-center">
          <div class="col-lg-12">
            <section id="contact" class="contact section">

              <!-- Section Title -->
              <div class="container section-title" data-aos="fade-up">
                <h2>Kontak</h2>
                <p>Layanan pengaduan/pertanyaan dokumen kependudukan dapat diajukan melalui Whatsapp Pejabat Disdukcapil Trenggalek</p>
              </div><!-- End Section Title -->

              <div class="container-fluid" data-aos="fade-up" data-aos-delay="100" style="padding:0;"> <!-- Changed to container-fluid -->
                <div class="card shadow mb-4">
                  <div class="card-body">
                    <h3 style="font-size: 1.5rem; font-weight :bold; margin-bottom:30px;">Daftar Nomor Whatsapp Pejabat Disdukcapil Trenggalek</h3>
                    <div class="table-responsive">
                      <table class="tableBku table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                          <tr>
                            <th class="kolomSS">NO.</th>
                            <th class="kolomPS">JABATAN</th>
                            <th class="kolomPS">NAMA</th>
                            <th style="min-width: 4.4rem">NOMOR TELEPON</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>1</td>
                            <td>Kepala Dinas</td>
                            <td>Suprapti, S.Si., M.Si.</td>
                            <td>
                              <span>
                                <a href="https://wa.me/6282244957255" class="btn btn-whatsapp btn-user btn-circle btn-sm whatsapp-btn">
                                  <i class="bi bi-whatsapp"></i> 082244957255
                                </a>
                              </span>
                            </td>
                          </tr>
                          <tr>
                            <td>2</td>
                            <td>Sekretaris</td>
                            <td>Ririn Eko Utoyo, S.Sos., M.T.</td>
                            <td>
                              <span>
                                <a href="https://wa.me/628125983922" class="btn btn-whatsapp btn-user btn-circle btn-sm whatsapp-btn">
                                  <i class="bi bi-whatsapp"></i> 08125983922
                                </a>
                              </span>
                            </td>
                          </tr>
                          <tr>
                            <td>3</td>
                            <td>Kasubbag Umum Dan Kepegawaian</td>
                            <td>Rina Takarina, S.Sos.</td>
                            <td>
                              <span>
                                <a href="https://wa.me/6285334896220" class="btn btn-whatsapp btn-user btn-circle btn-sm whatsapp-btn">
                                  <i class="bi bi-whatsapp"></i> 085334896220
                                </a>
                              </span>
                            </td>

                          </tr>
                          <tr>
                            <td>4</td>
                            <td>Kasubbag Perencanaan</td>
                            <td>Sri Widayati, S.E.</td>
                            <td>
                              <span>
                                <a href="https://wa.me/6282267882717" class="btn btn-whatsapp btn-user btn-circle btn-sm whatsapp-btn">
                                  <i class="bi bi-whatsapp"></i> 082267882717
                                </a>
                              </span>
                            </td>
                          </tr>
                          <tr>
                            <td>5</td>
                            <td>Kasubbag Keuangan</td>
                            <td>Sri Dwijah, S.E.</td>
                            <td>
                              <span>
                                <a href="https://wa.me/6285235902123" class="btn btn-whatsapp btn-user btn-circle btn-sm whatsapp-btn">
                                  <i class="bi bi-whatsapp"></i> 085235902123
                                </a>
                              </span>
                            </td>
                          </tr>
                          <tr>
                            <td>6</td>
                            <td>Kabid Pendaftaran Penduduk</td>
                            <td>Nur Zohainis R, S.STP.</td>
                            <td>
                              <span>
                                <a href="https://wa.me/6282244957154" class="btn btn-whatsapp btn-user btn-circle btn-sm whatsapp-btn">
                                  <i class="bi bi-whatsapp"></i> 082244957154
                                </a>
                              </span>
                            </td>

                          </tr>
                          <tr>
                            <td>7</td>
                            <td>Kasi Identitas Penduduk</td>
                            <td>Dedi Suhermanto, S.A.B.</td>
                            <td>
                              <span>
                                <a href="https://wa.me/6289516785093" class="btn btn-whatsapp btn-user btn-circle btn-sm whatsapp-btn">
                                  <i class="bi bi-whatsapp"></i> 089516785093
                                </a>
                              </span>
                            </td>

                          </tr>
                          <tr>
                            <td>8</td>
                            <td>Kasi Pindah Datang</td>
                            <td>Setyo Aji Santoso, S.E.</td>
                            <td>
                              <span>
                                <a href="https://wa.me/6285234383281" class="btn btn-whatsapp btn-user btn-circle btn-sm whatsapp-btn">
                                  <i class="bi bi-whatsapp"></i> 085234383281
                                </a>
                              </span>
                            </td>

                          </tr>
                          <tr>
                            <td>9</td>
                            <td>Kabid Pencatatan Sipil</td>
                            <td>Putut Sukrisno, S.E</td>
                            <td>
                              <span>
                                <a href="https://wa.me/6281335299862" class="btn btn-whatsapp btn-user btn-circle btn-sm whatsapp-btn">
                                  <i class="bi bi-whatsapp"></i> 081335299862
                                </a>
                              </span>
                            </td>

                          </tr>
                          <tr>
                            <td>10</td>
                            <td>Kasi Kelahiran Kematian</td>
                            <td>Santi Linudyawati, S.E.</td>
                            <td>
                              <span>
                                <a href="https://wa.me/6281234411898" class="btn btn-whatsapp btn-user btn-circle btn-sm whatsapp-btn">
                                  <i class="bi bi-whatsapp"></i> 081234411898
                                </a>
                              </span>
                            </td>

                          </tr>
                          <tr>
                            <td>11</td>
                            <td>Kasi Perkawinan Perceraian</td>
                            <td>Iwin Setyani, S.E.</td>
                            <td>
                              <span>
                                <a href="https://wa.me/6281259421121" class="btn btn-whatsapp btn-user btn-circle btn-sm whatsapp-btn">
                                  <i class="bi bi-whatsapp"></i> 081259421121
                                </a>
                              </span>
                            </td>

                          </tr>
                          <tr>
                            <td>12</td>
                            <td>Kabid Pengelolaan Informasi</td>
                            <td>Drs. R. Widi Sasmito Adi</td>
                            <td>
                              <span>
                                <a href="https://wa.me/6281359838665" class="btn btn-whatsapp btn-user btn-circle btn-sm whatsapp-btn">
                                  <i class="bi bi-whatsapp"></i> 081359838665
                                </a>
                              </span>
                            </td>

                          </tr>
                          <tr>
                            <td>13</td>
                            <td>Kasi Sistem Informasi</td>
                            <td>Asri Hariady, S.Sos.</td>
                            <td>
                              <span>
                                <a href="https://wa.me/6285655681813" class="btn btn-whatsapp btn-user btn-circle btn-sm whatsapp-btn">
                                  <i class="bi bi-whatsapp"></i> 085655681813
                                </a>
                              </span>
                            </td>

                          </tr>
                          <tr>
                            <td>14</td>
                            <td>Kasi Pengolahan Data</td>
                            <td>Vitasari Yustiasih, S.H.</td>
                            <td>
                              <span>
                                <a href="https://wa.me/628125979424" class="btn btn-whatsapp btn-user btn-circle btn-sm whatsapp-btn">
                                  <i class="bi bi-whatsapp"></i> 0081259794248
                                </a>
                              </span>
                            </td>

                          </tr>
                          <tr>
                            <td>15</td>
                            <td>Plt Kabid Pemanfaatan Data </td>
                            <td>Drs. R. Widi Sasmito Adi</td>
                            <td>
                              <span>
                                <a href="https://wa.me/6281359838665" class="btn btn-whatsapp btn-user btn-circle btn-sm whatsapp-btn">
                                  <i class="bi bi-whatsapp"></i> 081359838665
                                </a>
                              </span>
                            </td>

                          </tr>
                          <tr>
                            <td>16</td>
                            <td>Kasi Kerjasama Dan Inovasi</td>
                            <td>Dhandy Irawan, S.A.P.</td>
                            <td>
                              <span>
                                <a href="https://wa.me/6282244957156" class="btn btn-whatsapp btn-user btn-circle btn-sm whatsapp-btn">
                                  <i class="bi bi-whatsapp"></i> 082244957156
                                </a>
                              </span>
                            </td>

                          </tr>
                          <tr>
                            <td>17</td>
                            <td>Kasi Pemanfaatan Data</td>
                            <td>Jarot Suseno, S.E.</td>
                            <td>
                              <span>
                                <a href="https://wa.me/628977921817" class="btn btn-whatsapp btn-user btn-circle btn-sm whatsapp-btn">
                                  <i class="bi bi-whatsapp"></i> 08977921817
                                </a>
                              </span>
                            </td>

                          </tr>
                          <tr>
                            <td>18</td>
                            <td>Kepala Upt Munjungan</td>
                            <td>Hanik Masrifatin, S.I.P.</td>
                            <td>
                              <span>
                                <a href="https://wa.me/6282141742810" class="btn btn-whatsapp btn-user btn-circle btn-sm whatsapp-btn">
                                  <i class="bi bi-whatsapp"></i> 082141742810
                                </a>
                              </span>
                            </td>

                          </tr>
                          <tr>
                            <td>19</td>
                            <td>Kepala Upt Panggul</td>
                            <td>Titik Agustina, S.E.</td>
                            <td>
                              <span>
                                <a href="https://wa.me/6281335158988" class="btn btn-whatsapp btn-user btn-circle btn-sm whatsapp-btn">
                                  <i class="bi bi-whatsapp"></i> 081335158988
                                </a>
                              </span>
                            </td>

                          </tr>
                          <tr>
                            <td>20</td>
                            <td>Kepala Upt Watulimo</td>
                            <td>Suyatmi, S.E.</td>
                            <td>
                              <span>
                                <a href="https://wa.me/6282141335296" class="btn btn-whatsapp btn-user btn-circle btn-sm whatsapp-btn">
                                  <i class="bi bi-whatsapp"></i> 082141335296
                                </a>
                              </span>
                            </td>

                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>

            </section><!-- /Contact Section -->

          </div>
        </div>
      </div>
    </div>
  </div><!-- End Page Title -->
</main>
@endsection

@section('scripts')
<script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap4.min.js"></script>
<script>
  new DataTable('#dataTable', {
    scrollX: true,
    paging: true,
    scrollCollapse: true,
    scrollY: '570px',
    "columnDefs": [{
      "searchable": false,
      "targets": 0
    }]
  });
</script>
@endsection