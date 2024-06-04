<!-- resources/views/profil.blade.php -->
@extends('layout.main')

@section('header')
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.css">
@endsection

@section('container')
    <main class="main">

        <!-- Page Title -->
        <div class="page-title" data-aos="fade">
            <div class="heading">
                <div class="container">
                    <div class="row d-flex justify-content-center text-center">
                        <div class="col-lg-8">
                            <h1 class="">PROFIL</h1>
                            {{-- <p class="mb-0">Pada halaman ini, Anda dapat melihat struktur organisasi,
                                maklumat pelayanan, profil penyelenggaran, pelaksanan layanan, serta motto, visi,
                                dan misi Dukcapil Trenggalek.
                            </p> --}}
                        </div>
                    </div>
                </div>
            </div>
            <nav class="breadcrumbs">
                <div class="container">
                    <ol>
                        <li><a href="index.html">Home</a></li>
                        <li class="current">Profil</li>
                    </ol>
                </div>
            </nav>
        </div><!-- End Page Title -->

        <!-- Service Details Section -->
        <section id="service-details" class="service-details section">
            <div class="container">
                <div class="row gy-5">
                    <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
                        @include('profil.partials.service-list')
                    </div>
                    <div class="col-lg-8 ps-lg-8" data-aos="fade-up" data-aos-delay="200">
                        <div class="card">
                            <div class="card-body">
                                <div id="service-content">
                                    @include('profil.struktur-organisasi')
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- /Service Details Section -->
    </main>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap4.min.js"></script>
    <script>
        document.querySelectorAll('.service-link').forEach(link => {
            link.addEventListener('click', function(e) {
                e.preventDefault();
                const url = this.href;
                fetch(url)
                    .then(response => response.text())
                    .then(html => {
                        document.getElementById('service-content').innerHTML = html;
                        // Log untuk memastikan fungsi callback dijalankan
                        console.log("Callback function executed after table content loaded.");
                        // Re-initiate DataTables after new content is loaded
                        initDataTable();
                    })
                    .catch(error => console.warn('Something went wrong.', error));
            });
        });

        function initDataTable() {
            $('#service-content').find('#dataTable').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": true, // Setel opsi autoWidth ke true
                "pageLength": 5,
                "scrollX": true,
                "scrollCollapse": true,
                "scrollY": '570px',
                "columnDefs": [{
                    "searchable": false,
                    "targets": 0
                }],
                "language": {
                    "paginate": {
                        "previous": "Sebelumnya",
                        "next": "Selanjutnya"
                    }
                },
                "pagingType": "simple_numbers"
            });
        }
    </script>
@endsection
