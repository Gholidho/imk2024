@extends('layout.main')

@section('styles')
<!-- Vendor CSS Files -->
<link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" />
<link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet" />
<link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet" />
<link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet" />
<link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet" />

<!-- Main CSS File -->
<link href="{{ asset('assets/css/main.css') }}" rel="stylesheet" />
@endsection

@section('container')
<main class="main">
    <!-- Page Title -->
    <div class="page-title" data-aos="fade">
        <div class="heading">
            <div class="row d-flex justify-content-center text-center">
                <!-- Service Box Section -->
                <section id="faq" class="faq section">
                    <!-- Section Title -->
                    <div class="container section-title" data-aos="fade-up">
                        <h2>FAQ</h2>
                        <p>Frequently Asked Questions</p>
                    </div><!-- End Section Title -->
                    <div class="container">
                        <div class="row gy-4">

                            <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
                                <div class="service-details section" style="padding:0;">
                                    <div class="service-box">
                                        <h4>FAQ List</h4>
                                        <div class="services-list">
                                            <a href="#" class="active"><i class="bi bi-arrow-right-circle"></i><span>Web Design</span></a>
                                            <a href="#"><i class="bi bi-arrow-right-circle"></i><span>Product Management</span></a>
                                            <a href="#"><i class="bi bi-arrow-right-circle"></i><span>Graphic Design</span></a>
                                            <a href="#"><i class="bi bi-arrow-right-circle"></i><span>Marketing</span></a>
                                        </div>
                                    </div>
                                    <!-- End Services List -->

                                    <div class="service-box">
                                        <h4>Download Catalog</h4>
                                        <div class="download-catalog">
                                            <a href="#"><i class="bi bi-filetype-pdf"></i><span>Catalog PDF</span></a>
                                            <a href="#"><i class="bi bi-file-earmark-word"></i><span>Catalog DOC</span></a>
                                        </div>
                                    </div>
                                    <!-- End Download Catalog -->

                                    <div class="help-box d-flex flex-column justify-content-center align-items-center">
                                        <i class="bi bi-headset help-icon"></i>
                                        <h4>Have a Question?</h4>
                                        <p class="d-flex align-items-center mt-2 mb-0">
                                            <i class="bi bi-telephone me-2"></i>
                                            <span>+1 5589 55488 55</span>
                                        </p>
                                        <p class="d-flex align-items-center mt-1 mb-0">
                                            <i class="bi bi-envelope me-2"></i>
                                            <a href="mailto:contact@example.com">contact@example.com</a>
                                        </p>
                                    </div>
                                </div>
                            </div>


                            <div class="col-lg-8" data-aos="fade-up" data-aos-delay="200" style="padding : 60px 0;">
                                <div class="faq-container">
                                    <div class="faq-item faq-active">
                                        <h3><span class="num">1.</span> <span>Non consectetur a erat nam at lectus urna duis?</span></h3>
                                        <div class="faq-content">
                                            <p>Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.</p>
                                        </div>
                                        <i class="faq-toggle bi bi-chevron-right"></i>
                                    </div><!-- End Faq item-->

                                    <div class="faq-item">
                                        <h3><span class="num">2.</span> <span>Feugiat scelerisque varius morbi enim nunc faucibus a pellentesque?</span></h3>
                                        <div class="faq-content">
                                            <p>Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.</p>
                                        </div>
                                        <i class="faq-toggle bi bi-chevron-right"></i>
                                    </div><!-- End Faq item-->

                                    <div class="faq-item">
                                        <h3><span class="num">3.</span> <span>Dolor sit amet consectetur adipiscing elit pellentesque?</span></h3>
                                        <div class="faq-content">
                                            <p>Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus. Urna molestie at elementum eu facilisis sed odio morbi quis</p>
                                        </div>
                                        <i class="faq-toggle bi bi-chevron-right"></i>
                                    </div><!-- End Faq item-->

                                    <div class="faq-item">
                                        <h3><span class="num">4.</span> <span>Ac odio tempor orci dapibus. Aliquam eleifend mi in nulla?</span></h3>
                                        <div class="faq-content">
                                            <p>Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.</p>
                                        </div>
                                        <i class="faq-toggle bi bi-chevron-right"></i>
                                    </div><!-- End Faq item-->

                                    <div class="faq-item">
                                        <h3><span class="num">5.</span> <span>Tempus quam pellentesque nec nam aliquam sem et tortor consequat?</span></h3>
                                        <div class="faq-content">
                                            <p>Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse in est ante in. Nunc vel risus commodo viverra maecenas accumsan. Sit amet nisl suscipit adipiscing bibendum est. Purus gravida quis blandit turpis cursus in</p>
                                        </div>
                                        <i class="faq-toggle bi bi-chevron-right"></i>
                                    </div><!-- End Faq item-->

                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- End Service Box Section -->
            </div>
        </div>
    </div><!-- End Page Title -->
</main>
@endsection