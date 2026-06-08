<link href="https://fonts.googleapis.com/css2?family=Nunito:wght=300;400;600;700;800&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

<footer class="app-main-footer bg-corporate-dark text-white pt-5 pb-4">
    <div class="container">
        <!-- Grid Utama dengan jarak gap (g-5) yang lebih longgar dan rapi -->
        <div class="row g-5 mb-5">
            
            <!-- KOLOM 1: Brand Profile (Grid Kotak Putih, Teks Item Lebih Besar) & Social Media -->
            <div class="col-lg-3 col-md-6">
                <div class="footer-brand-card p-4 rounded-3 mb-3 bg-white border-0 shadow-sm">
                    <div class="d-flex align-items-center gap-2 mb-3">
                        <img src="/logo.png" alt="Logo PT Readymix Beton Indonesia" class="footer-brand-logo img-fluid" style="max-height: 45px; width: auto;">
                    </div>
                    <p class="lh-relaxed mb-0 text-dark opacity-90" style="font-size: 0.95rem;">
                        Solusi penyedia Ready mix, Mini mix, Big mix, Concrete pump, Se JABODETABEK untuk membantu proyek anda 
                    </p>
                </div>
                
                <!-- Ikon Sosial Media Warna Asli Aplikasi -->
                <div class="footer-social-links d-flex gap-2.5 ps-1 pt-2">
                    <a href="https://wa.me/6281212830218" target="_blank" class="social-icon-btn brand-wa" title="WhatsApp"><i class="bi bi-whatsapp"></i></a>
                    <a href="#" class="social-icon-btn brand-ig" title="Instagram"><i class="bi bi-instagram"></i></a>
                    <a href="#" class="social-icon-btn brand-tiktok" title="TikTok"><i class="bi bi-tiktok"></i></a>
                </div>
            </div>

            <!-- KOLOM 2: Useful Links (Menggunakan Icon Tanda Panah Modern & Tulisan Lebih Gede) -->
            <div class="col-lg-3 col-md-6 ps-lg-5">
                <h5 class="text-white fw-bold mb-4 tracking-wide text-uppercase" style="font-size: 1.1rem;">
                    Useful Links
                </h5>
                <ul class="list-unstyled footer-links-list d-flex flex-column gap-3">
                    <li>
                        <a href="{{ url('/#home') }}">
                            <i class="bi bi-arrow-right-short footer-link-icon me-1"></i>Home
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('/#about') }}">
                            <i class="bi bi-arrow-right-short footer-link-icon me-1"></i>About Us
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('/#services') }}">
                            <i class="bi bi-arrow-right-short footer-link-icon me-1"></i>Services
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('/#project') }}">
                            <i class="bi bi-arrow-right-short footer-link-icon me-1"></i>Project
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('/#contact') }}">
                            <i class="bi bi-arrow-right-short footer-link-icon me-1"></i>Contact
                        </a>
                    </li>
                </ul>
            </div>

            <!-- KOLOM 3: Our Services (Tulisan Gede & Gap Rapi) -->
            <div class="col-lg-3 col-md-6">
                <h5 class="text-white fw-bold mb-4 tracking-wide text-uppercase" style="font-size: 1.1rem;">
                    Our Services
                </h5>
                <ul class="list-unstyled footer-links-list d-flex flex-column gap-3">
                    <li>
                        <a href="{{ url('/#services') }}">
                            <i class="bi bi-box-seam me-2 text-red-accent fs-6"></i>Product dan layanan
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('/#how-to-order') }}">
                            <i class="bi bi-cart-check me-2 text-red-accent fs-6"></i>Cara Pemesanan
                        </a>
                    </li>
                </ul>
            </div>

            <!-- KOLOM 4: Contact Us (Tulisan Gede & Gap Rapi) -->
            <div class="col-lg-3 col-md-6">
                <h5 class="text-white fw-bold mb-4 tracking-wide text-uppercase" style="font-size: 1.1rem;">
                    Contact Us
                </h5>
                <div class="footer-contact-list d-flex flex-column gap-3 text-muted-custom">
                    
                    <!-- Telephone -->
                    <div class="d-flex align-items-center gap-2.5 py-0.5">
                        <i class="bi bi-telephone-fill text-red-accent" style="font-size: 1.1rem;"></i>
                        <span>Telephone: 0812-1283-0218</span>
                    </div>
                    
                    <!-- Whatsapp -->
                    <a href="https://wa.me/6281212830218" target="_blank" class="d-flex align-items-center gap-2.5 footer-interactive-link text-muted-custom py-0.5">
                        <i class="bi bi-whatsapp text-success-accent" style="font-size: 1.1rem;"></i>
                        <span>Whatsapp: 0812-1283-0218</span>
                    </a>
                    
                    <!-- Instagram -->
<a href="#" target="_blank" class="d-flex align-items-center gap-2.5 footer-interactive-link text-muted-custom py-0.5">
    <i class="bi bi-instagram" style="color: #e1306c; font-size: 1.1rem;"></i>
    <!-- Ukuran teks disesuaikan menjadi lebih kecil agar muat rapi -->
    <span style="font-size: 0.80rem;">Instagram: @jualreadymixcorrjabodetabek</span>
</a>

                    <!-- Tiktok -->
                    <a href="#" target="_blank" class="d-flex align-items-center gap-2.5 footer-interactive-link text-muted-custom py-0.5">
                        <i class="bi bi-tiktok text-white" style="font-size: 1.1rem;"></i>
                        <span>Tiktok: readymixpompacor</span>
                    </a>

                </div>
            </div>

        </div>

        <!-- Bagian Garis Pemisah Akhir & Copyright -->
        <hr class="footer-divider my-4">
        
        <div class="row">
            <div class="col-12 text-center text-muted-custom" style="font-size: 0.9rem;">
                <p class="mb-1">
                    &copy; Copyright <span class="fw-bold text-white">Readymix Nuhaldi</span>. All Rights Reserved.
                </p>
                <p class="mb-0 style-build-text" style="font-size: 0.8rem; opacity: 0.5;">
                    Designed with by @ajitech
                </p>
            </div>
        </div>
        
    </div>
</footer>

<style>
    /* ==========================================================================
       BASE STYLE & TYPOGRAPHY
       ========================================================================== */
    .app-main-footer, .app-main-footer * {
        box-sizing: border-box;
        font-family: "Nunito", sans-serif !important;
    }
    
    .bg-corporate-dark {
        background-color: #0b1523 !important; 
    }

    .fw-black { font-weight: 800 !important; }
    .tracking-wide { letter-spacing: 0.5px; }
    .text-muted-custom { color: #a0aec0 !important; }
    .text-red-accent { color: #ef4444 !important; }
    .text-success-accent { color: #25d366 !important; }

    /* Gap kustom pendukung utilitas Bootstrap */
    .gap-2\.5 { gap: 0.75rem !important; }

    /* BUNGKUS KOTAK PROFILE LOGO PUTIH */
    .footer-brand-card {
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.12);
    }

    /* ==========================================================================
       STYLE TAUTAN NAVIGASI (LINKS GEDE & ANIMASI PANAH)
       ========================================================================== */
    .footer-links-list {
        padding-left: 0;
    }

    .footer-links-list a {
        color: #a0aec0;
        text-decoration: none;
        font-size: 0.98rem; /* Ukuran tulisan link ditingkatkan agar jelas */
        font-weight: 600;
        display: inline-flex;
        align-items: center;
        transition: color 0.25s ease-in-out, transform 0.25s ease;
    }
    
    /* Icon panah penunjuk menggantikan bundar-bundar lama */
    .footer-link-icon {
        font-size: 1.3rem;
        color: #a0aec0;
        line-height: 1;
        transition: color 0.25s ease, transform 0.25s ease;
    }

    /* Efek hover modern: tulisan muter putih, panah berubah merah dan maju */
    .footer-links-list a:hover {
        color: #ffffff !important;
        transform: translateX(4px);
    }
    
    .footer-links-list a:hover .footer-link-icon {
        color: #ef4444 !important; /* Berubah jadi merah aksen */
        transform: scale(1.1);
    }

    /* Teks Menu Kontak Interaktif */
    .footer-contact-list {
        font-size: 0.98rem;
        font-weight: 600;
    }

    .footer-interactive-link {
        color: #a0aec0;
        text-decoration: none;
        transition: color 0.2s ease;
    }
    .footer-interactive-link:hover {
        color: #ffffff !important;
    }

    /* ==========================================================================
       STYLE SOSIAL MEDIA BULAT PRESET WARNA
       ========================================================================== */
    .social-icon-btn {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        width: 38px;
        height: 38px;
        border-radius: 50%;
        background-color: rgba(255, 255, 255, 0.05);
        color: #a0aec0;
        font-size: 1.05rem;
        text-decoration: none;
        transition: all 0.2s ease-in-out;
    }
    
    .social-icon-btn.brand-wa:hover {
        background-color: #25d366 !important;
        color: #ffffff !important;
        transform: translateY(-2px);
        box-shadow: 0 4px 10px rgba(37, 211, 102, 0.3);
    }
    
    .social-icon-btn.brand-ig:hover {
        background-color: #e1306c !important;
        color: #ffffff !important;
        transform: translateY(-2px);
        box-shadow: 0 4px 10px rgba(225, 48, 108, 0.3);
    }
    
    .social-icon-btn.brand-tiktok:hover {
        background-color: #000000 !important;
        color: #ffffff !important;
        border: 1px solid #00f2fe;
        transform: translateY(-2px);
        box-shadow: 0 4px 10px rgba(0, 242, 254, 0.2);
    }

    /* ==========================================================================
       DIVIDER LINE
       ========================================================================== */
    .footer-divider {
        border-top: 1px solid rgba(255, 255, 255, 0.08) !important;
        opacity: 1;
    }
</style>