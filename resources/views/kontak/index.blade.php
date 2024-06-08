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
    width: 80%;
    margin: 0 auto 1rem auto;
    /* Centering the table and adding margin-bottom */
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

  .tableBku td:nth-child(1),
  .tableBku td:nth-child(4) {
    text-align: center;
  }

  .section-title {
    text-align: center;
    /* Centering the section title */
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
          <div class="col-lg-12" style="padding: 0;">
            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up" style="margin-top:30px;">
              <h2>Kontak</h2>
              <p>Layanan pengaduan/pertanyaan dokumen kependudukan dapat diajukan melalui Whatsapp Pejabat Disdukcapil Trenggalek</p>
            </div><!-- End Section Title -->
            <nav class="breadcrumbs">
              <div class="container">
                <ol>
                  <li><a href="index.html">Home</a></li>
                  <li class="current">Kontak</li>
                </ol>
              </div>
            </nav>

          </div>
        </div>
      </div>
    </div>
  </div><!-- End Page Title -->

  <section id="contact" class="contact section">
    <div class="container-fluid" data-aos="fade-up" data-aos-delay="100" style="padding:0;"> <!-- Changed to container-fluid -->
      <div class="card shadow mb-4">
        <div class="card-body">
          <h3 style="font-size: 1.5rem; font-weight :bold; margin: 30px 0; text-align: center;">Daftar Nomor Whatsapp Pejabat Disdukcapil Trenggalek</h3>
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
                  <td>Sinta Amelia Pratiwi, S.Kom.</td>
                  <td>
                    <span>
                      <a href="https://wa.me/6281333735591" class="btn btn-whatsapp btn-user btn-circle btn-sm whatsapp-btn">
                        <i class="bi bi-whatsapp"></i> 081333735591
                      </a>
                    </span>
                  </td>
                </tr>
                <tr>
                  <td>8</td>
                  <td>Kasi Pendataan Penduduk</td>
                  <td>Pratiwi Pujihastuti, S.Kom.</td>
                  <td>
                    <span>
                      <a href="https://wa.me/6285236525606" class="btn btn-whatsapp btn-user btn-circle btn-sm whatsapp-btn">
                        <i class="bi bi-whatsapp"></i> 085236525606
                      </a>
                    </span>
                  </td>

                </tr>
                <tr>
                  <td>9</td>
                  <td>Kasi Kerjasama dan Inovasi Pelayanan</td>
                  <td>Agus Fian Novandia, S.H.</td>
                  <td>
                    <span>
                      <a href="https://wa.me/6282331751492" class="btn btn-whatsapp btn-user btn-circle btn-sm whatsapp-btn">
                        <i class="bi bi-whatsapp"></i> 082331751492
                      </a>
                    </span>
                  </td>
                </tr>
                <tr>
                  <td>10</td>
                  <td>Kabid Pelayanan Pencatatan Sipil</td>
                  <td>Rizqi Nur W, S.STP.</td>
                  <td>
                    <span>
                      <a href="https://wa.me/6282244957153" class="btn btn-whatsapp btn-user btn-circle btn-sm whatsapp-btn">
                        <i class="bi bi-whatsapp"></i> 082244957153
                      </a>
                    </span>
                  </td>
                </tr>
                <tr>
                  <td>11</td>
                  <td>Kasi Kelahiran Dan Kematian</td>
                  <td>Satriana Sulistyowati, SH</td>
                  <td>
                    <span>
                      <a href="https://wa.me/6282331751284" class="btn btn-whatsapp btn-user btn-circle btn-sm whatsapp-btn">
                        <i class="bi bi-whatsapp"></i> 082331751284
                      </a>
                    </span>
                  </td>
                </tr>
                <tr>
                  <td>12</td>
                  <td>Kasi Perkawinan, Perceraian, Perubahan Status Anak dan Pewarganegaraan</td>
                  <td>Edi Kurniawan, S.Sos.</td>
                  <td>
                    <span>
                      <a href="https://wa.me/6285734314515" class="btn btn-whatsapp btn-user btn-circle btn-sm whatsapp-btn">
                        <i class="bi bi-whatsapp"></i> 085734314515
                      </a>
                    </span>
                  </td>

                </tr>
                <tr>
                  <td>13</td>
                  <td>Kasi Perubahan Status Anak dan Pewarganegaraan</td>
                  <td>Glen Gueni Lajuli, SH.</td>
                  <td>
                    <span>
                      <a href="https://wa.me/6281334108486" class="btn btn-whatsapp btn-user btn-circle btn-sm whatsapp-btn">
                        <i class="bi bi-whatsapp"></i> 081334108486
                      </a>
                    </span>
                  </td>

                </tr>
                <tr>
                  <td>14</td>
                  <td>Kabid Pemanfaatan Data dan Inovasi Pelayanan</td>
                  <td>Frans Yuni A., S.STP., M.M.</td>
                  <td>
                    <span>
                      <a href="https://wa.me/6282331751276" class="btn btn-whatsapp btn-user btn-circle btn-sm whatsapp-btn">
                        <i class="bi bi-whatsapp"></i> 082331751276
                      </a>
                    </span>
                  </td>
                </tr>
                <tr>
                  <td>15</td>
                  <td>Kasi Pengolahan dan Penyajian Data Kependudukan</td>
                  <td>Ratna Sari, S.Kom.</td>
                  <td>
                    <span>
                      <a href="https://wa.me/6282344420332" class="btn btn-whatsapp btn-user btn-circle btn-sm whatsapp-btn">
                        <i class="bi bi-whatsapp"></i> 082344420332
                      </a>
                    </span>
                  </td>
                </tr>
                <tr>
                  <td>16</td>
                  <td>Kasi Pengembangan Aplikasi</td>
                  <td>Bagus Aryo Purnomo, S.Kom.</td>
                  <td>
                    <span>
                      <a href="https://wa.me/6281333852068" class="btn btn-whatsapp btn-user btn-circle btn-sm whatsapp-btn">
                        <i class="bi bi-whatsapp"></i> 081333852068
                      </a>
                    </span>
                  </td>

                </tr>
                <tr>
                  <td>17</td>
                  <td>Kasi Inovasi Pelayanan</td>
                  <td>Ade Sam Putri, S.STP., M.Si.</td>
                  <td>
                    <span>
                      <a href="https://wa.me/6282244957149" class="btn btn-whatsapp btn-user btn-circle btn-sm whatsapp-btn">
                        <i class="bi bi-whatsapp"></i> 082244957149
                      </a>
                    </span>
                  </td>
                </tr>
                <tr>
                  <td>18</td>
                  <td>Kabid Pemanfaatan Data dan Inovasi Pelayanan</td>
                  <td>Frans Yuni A., S.STP., M.M.</td>
                  <td>
                    <span>
                      <a href="https://wa.me/6282331751276" class="btn btn-whatsapp btn-user btn-circle btn-sm whatsapp-btn">
                        <i class="bi bi-whatsapp"></i> 082331751276
                      </a>
                    </span>
                  </td>
                </tr>
                <tr>
                  <td>19</td>
                  <td>Kasi Pengolahan dan Penyajian Data Kependudukan</td>
                  <td>Ratna Sari, S.Kom.</td>
                  <td>
                    <span>
                      <a href="https://wa.me/6282344420332" class="btn btn-whatsapp btn-user btn-circle btn-sm whatsapp-btn">
                        <i class="bi bi-whatsapp"></i> 082344420332
                      </a>
                    </span>
                  </td>
                </tr>
                <tr>
                  <td>20</td>
                  <td>Kasi Pengembangan Aplikasi</td>
                  <td>Bagus Aryo Purnomo, S.Kom.</td>
                  <td>
                    <span>
                      <a href="https://wa.me/6281333852068" class="btn btn-whatsapp btn-user btn-circle btn-sm whatsapp-btn">
                        <i class="bi bi-whatsapp"></i> 081333852068
                      </a>
                    </span>
                  </td>

                </tr>
                <tr>
                  <td>21</td>
                  <td>Kasi Inovasi Pelayanan</td>
                  <td>Ade Sam Putri, S.STP., M.Si.</td>
                  <td>
                    <span>
                      <a href="https://wa.me/6282244957149" class="btn btn-whatsapp btn-user btn-circle btn-sm whatsapp-btn">
                        <i class="bi bi-whatsapp"></i> 082244957149
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
  </section>

</main><!-- End #main -->
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