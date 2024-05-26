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
    border-radius: 2%;
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
                <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
              </div><!-- End Section Title -->

              <div class="container-fluid" data-aos="fade-up" data-aos-delay="100" style="padding:0;"> <!-- Changed to container-fluid -->
                <div class="card shadow mb-4">
                  <div class="card-body">
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
                            <td>11</td>
                            <td>KASUBAG</td>
                            <td>Wiedyanto Andri Kusumo, S.Pi, MSE</td>
                            <td><span><a href="#" class="btn btn-primary btn-user btn-circle btn-sm" style="margin-right: 0.1rem"><i class="bi bi-pencil-square"></i></a><a href="#" class="btn btn-danger btn-user btn-circle btn-sm"><i class="bi bi-trash"></i></a></span></td>
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