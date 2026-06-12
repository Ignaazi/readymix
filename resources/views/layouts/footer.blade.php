<footer class="app-main-footer bg-corporate-dark text-white pt-5 pb-4">
    <div class="container">
        <!-- Grid Utama dengan jarak gap (g-5) yang lebih longgar dan rapi -->
        <div class="row gy-5 gx-4 mb-5">
            
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
