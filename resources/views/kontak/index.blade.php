@extends('layout.main')

@section('styles')
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.css">
<style>
  #complaintsTable {
    width: 100%;
    border-collapse: collapse;
    border-spacing: 0;
  }

  #complaintsTable th,
  #complaintsTable td {
    border: 1px solid #ddd;
    padding: 8px;
    text-align: left;
  }

  #complaintsTable th {
    background-color: #f2f2f2;
  }

  #complaintsTable tbody tr:nth-child(even) {
    background-color: #f2f2f2;
  }

  #complaintsTable tbody tr:hover {
    background-color: #ddd;
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
            <h1 class="">COMING SOON</h1>
            <p class="mb-0">Form Pengaduan bakal muncul disini</p>
          </div>
        </div>
      </div>
    </div>
  </div><!-- End Page Title -->

  <!-- Data Table -->
  <div class="container">
    <table id="complaintsTable">
      <thead>
        <tr>
          <th>Nomor</th>
          <th>Jabatan</th>
          <th>Nama</th>
          <th>Nomor Lengkap</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>1</td>
          <td>Manajer</td>
          <td>John Doe</td>
          <td>08123456789</td>
        </tr>
        <tr>
          <td>2</td>
          <td>Asisten Manajer</td>
          <td>Jane Smith</td>
          <td>08234567890</td>
        </tr>
        <!-- Tambahkan baris lain sesuai dengan kebutuhan -->
      </tbody>
    </table>
  </div><!-- End Data Table -->

</main>
@endsection

@section('scripts')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js"></script>
<script>
  $(document).ready(function() {
    $('#complaintsTable').DataTable();
  });
</script>
@endsection