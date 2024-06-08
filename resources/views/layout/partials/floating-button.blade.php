{{-- <!-- load font awesome for icons -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />

<!-- add your custom CSS -->
<style>
    body {
        font-family: sans-serif;
    }

    /* Add WA floating button CSS */
    .floating {
        position: fixed;
        width: 60px;
        height: 60px;
        bottom: 40px;
        right: 40px;
        background-color: #25d366;
        color: #fff;
        border-radius: 50px;
        text-align: center;
        font-size: 30px;
        box-shadow: 2px 2px 3px #999;
        z-index: 100;
    }

    .fab-icon {
        margin-top: 16px;
    }
</style> --}}

<!-- render the button and direct it to wa.me -->
{{-- <a href="https://wa.me/6281228430523?text=Hi%20Qiscus" class="floating" target="_blank">
    <i class="fab fa-whatsapp fab-icon"></i>
</a> --}}

<!-- Floating Action Button like Google Material -->
<div class="menu pmd-floating-action" role="navigation">
    {{-- <a href="javascript:void(0);"
        class="pmd-floating-action-btn btn btn-sm pmd-btn-fab pmd-btn-raised pmd-ripple-effect btn-default"
        data-title="Supervisor Account">
        <span class="pmd-floating-hidden">Supervisor Account</span>
        <i class="material-icons">supervisor_account</i>
    </a> --}}
    <a href="/pengaduan"
        class="pmd-floating-action-btn btn btn-sm pmd-btn-fab pmd-btn-raised pmd-ripple-effect btn-default"
        data-title="Pengaduan"> <!-- Ubah data-title menjadi "Pengaduan" -->
        <span class="pmd-floating-hidden">Pengaduan</span> <!-- Ubah teks menjadi "Pengaduan" -->
        <!-- Gunakan ikon "report_problem" untuk melaporkan masalah -->
        <i class="material-icons">person</i>

    </a>


    <a href="/faq" class="pmd-floating-action-btn btn btn-sm pmd-btn-fab pmd-btn-raised pmd-ripple-effect btn-default"
        data-title="FAQ">
        <span class="pmd-floating-hidden">FAQ</span>
        <i class="fas fa-question"></i>
    </a>

    <a href="https://wa.me/+62895377758919?text=Halo%2C%20Saya%20butuh%20bantuan" target="_blank"
        class="pmd-floating-action-btn btn btn-sm pmd-btn-fab pmd-btn-raised pmd-ripple-effect btn-default"
        data-title="Live Chat">
        <span class="pmd-floating-hidden">Whatsapp</span>
        <i class="fab fa-whatsapp"></i>
    </a>
    <a class="pmd-floating-action-btn btn pmd-btn-fab pmd-btn-raised pmd-ripple-effect btn-primary"
        href="javascript:void(0);">
        <span class="pmd-floating-hidden">Primary</span>
        <i class="material-icons pmd-sm">help</i>
    </a>
</div>
