@extends('layout.main')

@section('styles')
<style>
    .services-list {
        display: flex;
        flex-wrap: wrap;
        justify-content: flex-start;
    }

    .services-list a {
        width: 100%;
        display: flex;
        align-items: center;
    }

    .services-list a i {
        margin-right: 10px;
    }

    .services-list a span {
        text-align: left;
    }

    .faq-item {
        display: none;
    }

    .faq-item.active {
        display: block;
    }

    .services-list a.active {
        color: red;
    }
</style>
<!-- Vendor CSS Files -->
<link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" />
<link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet" />
<link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet" />
<link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet" />
<link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet" />
<link href="{{ asset('assets/css/main.css') }}" rel="stylesheet" />
@endsection

@section('container')
<main class="main">
    <div class="page-title" data-aos="fade">
        <div class="heading">
            <div class="row d-flex justify-content-center text-center">
                <section id="faq" class="faq section">
                    <div class="container section-title" data-aos="fade-up" style="padding-bottom:0;">
                        <h2>FAQ</h2>
                        <p>Frequently Asked Questions</p>
                    </div>
                    <div class="container">
                        <div class="row gy-4">
                            <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
                                <div class="service-details section" style="padding:0;">
                                    <div class="service-box">
                                        <h4>FAQ List</h4>
                                        <div class="services-list">
                                            @foreach($layananFaq as $layanan)
                                            <a href="#" onclick="showFaq('{{ $layanan->id }}')" @if($loop->first) class="active" @endif>
                                                <i class="bi bi-arrow-right-circle"></i>
                                                <span>{{ $layanan->layanan }}</span>
                                            </a>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-8" data-aos="fade-up" data-aos-delay="200" style="padding: 60px 0;">
                                <div class="faq-container">
                                    @php
                                    $faqsGroupedByLayanan = $faq->groupBy('id_layanan');
                                    @endphp

                                    @foreach($faqsGroupedByLayanan as $id_layanan => $faqs)
                                    @foreach($faqs as $key => $faq)
                                    <div class="faq-item" id="faq{{ $faq->id_layanan }}">
                                        <h3><span class="num">{{ $key + 1 }}.</span> <span>{{ $faq->pertanyaan }}</span></h3>
                                        <div class="faq-content">
                                            <p>{{ $faq->jawaban }}</p>
                                        </div>
                                        <i class="faq-toggle bi bi-chevron-right"></i>
                                    </div>
                                    @endforeach
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
</main>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        // Tampilkan faq-item pertama kali halaman dimuat
        var firstLayananId = '{{ $layananFaq->first()->id }}';
        showFaq(firstLayananId);
    });

    function showFaq(faqNumber) {
        // Sembunyikan semua faq-item
        var faqItems = document.querySelectorAll('.faq-item');
        faqItems.forEach(function(item) {
            item.classList.remove('active');
        });
        // Hilangkan kelas active dari semua link FAQ
        var faqLinks = document.querySelectorAll('.services-list a');
        faqLinks.forEach(function(link) {
            link.classList.remove('active');
        });
        // Tampilkan faq-item yang sesuai
        var faqItemsToShow = document.querySelectorAll('[id="faq' + faqNumber + '"]');
        faqItemsToShow.forEach(function(item) {
            item.classList.add('active');
        });
        // Tambahkan kelas active ke link yang diklik
        var clickedFaqLink = document.querySelector('.services-list a[onclick="showFaq(\'' + faqNumber + '\')"]');
        if (clickedFaqLink) {
            clickedFaqLink.classList.add('active');
        }
    }
</script>
@endsection