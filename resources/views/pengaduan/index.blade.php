@extends('layout.main')

@section('styles')
<style>
    .contact .info-item {
        padding: 20px;
    }

    .contact .info-item .social-icon i {
        font-size: 10px;
    }

    .contact .info-item img {
        width: auto;
        height: 38px;
    }

    .social-icon a,
    .info-item a {
        color: #E84545;
    }

    .error-message {
        display: none;
        color: red;
        font-size: 14px;
    }

    .success-message {
        display: none;
        color: green;
        font-size: 14px;
    }
</style>
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
@endsection

@section('container')
<main class="main">
    <!-- Page Title -->
    <div class="page-title" data-aos="fade">
        <div class="heading">
            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Pengaduan</h2>
                <p>Layanan Aspirasi dan Pengaduan Online Rakyat</p>
            </div><!-- End Section Title -->
            <nav class="breadcrumbs">
                <div class="container">
                    <ol>
                        <li><a href="index.html">Home</a></li>
                        <li class="current">Pengaduan</li>
                    </ol>
                </div>
            </nav>

            <div class="container">
                <div class="row d-flex justify-content-center text-center">
                    <div class="col-lg-12">
                        <section id="contact" class="contact section">
                            <div class="container" data-aos="fade-up" data-aos-delay="100">
                                <div class="row gy-4">
                                    <div class="col-lg-6">
                                        <div class="row gy-4">
                                            <div class="col-md-6">
                                                <div class="info-item" data-aos="fade" data-aos-delay="200">
                                                    <i class="bi bi-geo-alt"></i>
                                                    <h3>Alamat</h3>
                                                    <p>Ngemplak, Sumbergedong</p>
                                                    <p>Kec. Trenggalek, Kab. Trenggalek</p>
                                                    <p>Jawa Timur, 66315</p>
                                                </div>
                                            </div><!-- End Info Item -->

                                            <div class="col-md-6">
                                                <div class="info-item" data-aos="fade" data-aos-delay="400">
                                                    <i class="bi bi-whatsapp"></i>
                                                    <h3>Sosial Media</h3>
                                                    <p class="social-icon"><a href="https://www.facebook.com/disdukcapil.trenggalek"><i class="fab fa-facebook-f"></i> disdukcapil.trenggalek</a></p>
                                                    <p class="social-icon"><a href="https://www.instagram.com/disdukcapil.trenggalek"><i class="fab fa-instagram"></i> disdukcapil.trenggalek</a></p>
                                                    <p class="social-icon"><a href="https://www.youtube.com/channel/UCEEESG__YcRnf9qXKIxcIwQ"><i class="fab fa-youtube"></i> disdukcapil trenggalek</a></p>
                                                </div>
                                            </div><!-- End Info Item -->

                                            <div class="col-md-6">
                                                <div class="info-item" data-aos="fade" data-aos-delay="300">
                                                    <i class="bi bi-telephone"></i>
                                                    <h3>Telepon</h3>
                                                    <p>+62 81 55959 5758</p>
                                                </div>
                                            </div><!-- End Info Item -->

                                            <div class="col-md-6">
                                                <div class="info-item" data-aos="fade" data-aos-delay="400">
                                                    <i class="bi bi-envelope"></i>
                                                    <h3>Alamat Email</h3>
                                                    <p><a href="mailto:disdukcapil.trenggalek@gmail.com">disdukcapil.trenggalek@gmail.com</a></p>
                                                </div>
                                            </div><!-- End Info Item -->

                                            <div class="col-md-6">
                                                <div class="info-item" data-aos="fade" data-aos-delay="400">
                                                    <img src="img/lapor.png" alt="Alternative text for the image">
                                                    <h3>Laporan Pengaduan</h3>
                                                    <p><a href="https://www.lapor.go.id/">Lapor.id</a></p><br>
                                                </div>
                                            </div><!-- End Info Item -->

                                            <div class="col-md-6">
                                                <div class="info-item" data-aos="fade" data-aos-delay="500">
                                                    <i class="bi bi-clock"></i>
                                                    <h3>Jam Buka</h3>
                                                    <p>Senin - Kamis : 07.30 - 15.30 WIB</p>
                                                    <p>Jumat : 07.00 - 15.30 WIB</p>
                                                </div>
                                            </div><!-- End Info Item -->
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <form id="contactForm" class="php-email-form" data-aos="fade-up" data-aos-delay="200" style="padding: 10px 20px;">
                                            <div class="row gy-4">
                                                <h3 style="font-size: 25px; font-weight: bold;">Form Aduan</h3>
                                                <div class="col-md-12">
                                                    <input type="text" name="name" class="form-control" placeholder="Nama" required>
                                                </div>

                                                <div class="col-md-12">
                                                    <input type="text" class="form-control" name="nik" placeholder="NIK" required pattern="[0-9]+" oninvalid="this.setCustomValidity('NIK hanya bisa diisi dengan angka')" oninput="this.setCustomValidity('')">
                                                </div>

                                                <div class="col-md-12">
                                                    <input type="text" class="form-control" name="phone" placeholder="Nomor HP" required pattern="[0-9]+" oninvalid="this.setCustomValidity('Nomor HP hanya bisa diisi dengan angka')" oninput="this.setCustomValidity('')">
                                                </div>

                                                <div class="col-md-12">
                                                    <input type="text" class="form-control" name="subject" placeholder="Persoalan" required>
                                                </div>

                                                <div class="col-md-12">
                                                    <textarea class="form-control" name="message" rows="6" placeholder="Deskripsi Aduan" required></textarea>
                                                </div>

                                                <div class="col-md-12">
                                                    <p id="error-message" class="error-message"></p>
                                                    <p id="success-message" class="success-message">Formulir Terkirim, Terima Kasih!</p>
                                                </div>

                                                <button type="submit" class="btn btn-primary">Kirim</button>
                                            </div>
                                        </form>
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
<script>
    function displayError(errorMessage) {
        var errorElement = document.getElementById('error-message');

        if (errorElement) {
            errorElement.textContent = errorMessage;
            errorElement.style.display = 'block';
        } else {
            console.error('Error: Element with ID "error-message" not found.');
        }
    }

    document.addEventListener('DOMContentLoaded', function() {
        var contactForm = document.getElementById('contactForm');

        if (contactForm) {
            contactForm.addEventListener('submit', function(event) {
                event.preventDefault(); // Mencegah pengiriman form secara default

                // Validasi formulir di sini
                var nameInput = document.querySelector('input[name="name"]');
                var nikInput = document.querySelector('input[name="nik"]');
                var phoneInput = document.querySelector('input[name="phone"]');
                var subjectInput = document.querySelector('input[name="subject"]');
                var messageInput = document.querySelector('textarea[name="message"]');
                var errorMessageElement = document.getElementById('error-message');
                var successMessageElement = document.getElementById('success-message');

                // Contoh validasi, pastikan semua field diisi
                if (!nameInput.value || !nikInput.value || !phoneInput.value || !subjectInput.value || !messageInput.value) {
                    if (errorMessageElement) {
                        errorMessageElement.textContent = 'Semua field harus diisi.';
                        errorMessageElement.style.display = 'block';
                    } else {
                        console.error('Error: Element with ID "error-message" not found.');
                    }
                } else {
                    // Jika validasi sukses, tampilkan pesan sukses
                    if (successMessageElement) {
                        successMessageElement.style.display = 'block';
                        successMessageElement.scrollIntoView({
                            behavior: 'smooth'
                        });

                        // Kosongkan form setelah sukses
                        contactForm.reset();
                    } else {
                        console.error('Error: Element with ID "success-message" not found.');
                    }

                    // Sembunyikan pesan error jika ada
                    if (errorMessageElement) {
                        errorMessageElement.style.display = 'none';
                    }
                }
            });
        } else {
            console.error('Error: Element with ID "contactForm" not found.');
        }
    });
</script>
@endsection