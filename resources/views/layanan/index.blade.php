@extends('layout.main')

@section('styles')
@endsection

@section('container')
    <main class="main">
    <div class="container">
        <div class="section-title">
            <h2>Jadwal Layanan</h2>
            <p>Berikut adalah jadwal layanan kami</p>
        </div>

        <div class="row">
            @foreach($services as $service)
                <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                    <div class="service-box">
                        <div class="icon-box">
                            <i class="bi bi-calendar-event"></i>
                        </div>
                        <h4><a href="">{{ $service['name'] }}</a></h4>
                        <p>{{ $service['weekday'] }}</p>
                        <p>{{ $service['saturday'] }}</p>
                    </div>
                </div>
            @endforeach
        </div>
        <!-- Page Title -->
        <!-- <div class="page-title" data-aos="fade">
            <div class="heading">
                <div class="container">
                    <div class="row d-flex justify-content-center text-center">
                        <div class="col-lg-8">
                            <h1 class="">COMING SOOON</h1>
                            <p class="mb-0">Layanan-layanan bakal muncul disini</p>
                        </div>
                    </div>
                </div>
            </div> 
        </div>--> <!-- End Page Title --> 
    </main>
@endsection
