<!-- Mengubah bg-white menjadi background abu-abu terang khas AdminLTE agar selang-seling -->
<section id="project-section" class="py-5" style="background-color: #f4f6f9; overflow: hidden;">
    <div class="container py-md-4">
        
        <!-- ========================================== -->
        <!-- 1. SEKSI GRID FOTO PROYEK (MOBILE FULL WIDTH SQUARE) -->
        <!-- ========================================== -->
        <div class="row mb-4">
            <div class="col-12 text-center">
                <h2 class="about-main-title text-dark">
                    DOKUMENTASI PROYEK TERBARU
                </h2>
                <div class="about-title-line mx-auto" style="background-color: #ffcc00;"></div>
            </div>
        </div>

        <!-- Grid Foto: col-12 pas mobile (full), col-md-5 pas desktop -->
        <div class="row g-4 justify-content-center mb-5">
            
            <!-- Kiri Atas / Foto 1 (Garis Merah) -->
            <div class="col-12 col-md-5 d-flex justify-content-center justify-content-md-end">
                <div class="project-thumb-wrapper position-relative project-square-box border border-4 border-danger rounded-3" 
                     onclick="openAboutLightbox('/pic2.webp', 'Proyek Pengecoran Kiri Atas')">
                    <span class="project-number-badge bg-danger text-white">01</span>
                    <img src="/pic2.webp" alt="Proyek Nuhaldi Kiri Atas" class="w-100 h-100 style-project-img-flat">
                </div>
            </div>

            <!-- Kanan Atas / Foto 2 (Garis Biru) -->
            <div class="col-12 col-md-5 d-flex justify-content-center justify-content-md-start">
                <div class="project-thumb-wrapper position-relative project-square-box border border-4 border-primary rounded-3" 
                     onclick="openAboutLightbox('/pic3.webp', 'Proyek Pengecoran Kanan Atas')">
                    <span class="project-number-badge bg-primary text-white">02</span>
                    <img src="/pic3.webp" alt="Proyek Nuhaldi Kanan Atas" class="w-100 h-100 style-project-img-flat">
                </div>
            </div>

            <!-- Kiri Bawah / Foto 3 (Garis Merah) -->
            <div class="col-12 col-md-5 d-flex justify-content-center justify-content-md-end">
                <div class="project-thumb-wrapper position-relative project-square-box border border-4 border-danger rounded-3" 
                     onclick="openAboutLightbox('/pic4.webp', 'Proyek Pengecoran Kiri Bawah')">
                    <span class="project-number-badge bg-danger text-white">03</span>
                    <img src="/pic4.webp" alt="Proyek Nuhaldi Kiri Bawah" class="w-100 h-100 style-project-img-flat">
                </div>
            </div>

            <!-- Kanan Bawah / Foto 4 (Garis Biru) -->
            <div class="col-12 col-md-5 d-flex justify-content-center justify-content-md-start">
                <div class="project-thumb-wrapper position-relative project-square-box border border-4 border-primary rounded-3" 
                     onclick="openAboutLightbox('/pic5.webp', 'Proyek Pengecoran Kanan Bawah')">
                    <span class="project-number-badge bg-primary text-white">04</span>
                    <img src="/pic5.webp" alt="Proyek Nuhaldi Kanan Bawah" class="w-100 h-100 style-project-img-flat">
                </div>
            </div>

        </div>

        <!-- ========================================== -->
        <!-- 2. SEKSI TESTIMONI FLAT 3D DENGAN HOVER TIPIS -->
        <!-- ========================================== -->
        <div class="row mb-4">
            <div class="col-12 text-center">
                <h3 class="fw-bold text-dark mb-2" style="font-size: 2rem; font-weight: 800; letter-spacing: -0.5px;">
                    Apa Kata Mereka Tentang Layanan Kami?
                </h3>
                <div class="about-title-line mx-auto mb-4" style="background-color: #007bff;"></div>
            </div>
        </div>

        <!-- Grid 4 Kotak Komentar Berjejer Samping -->
        <div class="row g-3 align-items-stretch">
            
            <!-- Testimoni 1: KOTAK ORANJE -->
            <div class="col-sm-6 col-lg-3 d-flex">
                <div class="p-4 rounded-3 text-center w-100 text-white nuhaldi-3d-testi bg-testi-orange d-flex flex-column justify-content-between">
                    <div>
                        <div class="testi-bootstrap-icon-box mx-auto mb-3">
                            <i class="bi bi-person-workspace fs-3"></i>
                        </div>
                        <h5 class="fw-bold mb-1 fs-6 text-white">Mas Hendra</h5>
                        <span class="text-white-50 d-block mb-3 small-text">Kontraktor Ruko - Cikarang</span>
                        <p class="small mb-0 opacity-90 lh-base">"Beton readymix-nya dikirim tepat waktu ke area proyek. Mutunya presisi tinggi, mantap gak mengecewakan."</p>
                    </div>
                    <div class="text-warning mt-3 small">
                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                    </div>
                </div>
            </div>

            <!-- Testimoni 2: KOTAK KUNING -->
            <div class="col-sm-6 col-lg-3 d-flex">
                <div class="p-4 rounded-3 text-center w-100 text-dark nuhaldi-3d-testi bg-testi-yellow d-flex flex-column justify-content-between">
                    <div>
                        <div class="testi-bootstrap-icon-box mx-auto mb-3 text-dark border-dark-subtle">
                            <i class="bi bi-person-heart fs-3"></i>
                        </div>
                        <h5 class="fw-bold mb-1 fs-6 text-dark">Mbak Citra</h5>
                        <span class="text-muted d-block mb-3 small-text">Pemilik Rumah - Bekasi</span>
                        <p class="small mb-0 text-dark-50 lh-base">"Pesan jayamix buat nge-dak rumah lancar banget dari proses survei, dibantu sewa pompa beton long boom juga."</p>
                    </div>
                    <div class="text-dark mt-3 small">
                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                    </div>
                </div>
            </div>

            <!-- Testimoni 3: KOTAK BIRU BIASA -->
            <div class="col-sm-6 col-lg-3 d-flex">
                <div class="p-4 rounded-3 text-center w-100 text-white nuhaldi-3d-testi bg-testi-blue d-flex flex-column justify-content-between">
                    <div>
                        <div class="testi-bootstrap-icon-box mx-auto mb-3">
                            <svg class="bi bi-people-fill text-white" width="28" height="28" fill="currentColor" viewBox="0 0 16 16">
                                <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6m-5.784 6A2.24 2.24 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.3 6.3 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1zM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5"/>
                            </svg>
                        </div>
                        <h5 class="fw-bold mb-1 fs-6 text-white">Ibu Hj. Aminah</h5>
                        <span class="text-white-50 d-block mb-3 small-text">Pengurus Yayasan - Jakarta</span>
                        <p class="small mb-0 opacity-90 lh-base">"Alhamdulillah pengecoran lantai masjid berjalan sukses. Pelayanannya sangat ramah dan harganya bersahabat."</p>
                    </div>
                    <div class="text-warning mt-3 small">
                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                    </div>
                </div>
            </div>

            <!-- Testimoni 4: KOTAK BIRU STABILO -->
            <div class="col-sm-6 col-lg-3 d-flex">
                <div class="p-4 rounded-3 text-center w-100 text-dark nuhaldi-3d-testi bg-testi-cyan d-flex flex-column justify-content-between">
                    <div>
                        <div class="testi-bootstrap-icon-box mx-auto mb-3 text-dark border-dark-subtle">
                            <i class="bi bi-person-bounding-box fs-3"></i>
                        </div>
                        <h5 class="fw-bold mb-1 fs-6 text-dark">Pak Sarif</h5>
                        <span class="text-dark-50 d-block mb-3 small-text" style="opacity: 0.7;">Developer Senior - JABODETABEK</span>
                        <p class="small mb-0 text-dark lh-base" style="font-weight: 500;">"Sudah puluhan tahun main proyek bangunan, armada Nuhaldi ini termasuk yang paling sigap di lapangan."</p>
                    </div>
                    <div class="text-dark mt-3 small">
                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                    </div>
                </div>
            </div>

        </div>

    </div>
</section>

<!-- ========================================== -->
<!-- 3. CSS SELEKSI ADJUSTMENT                      -->
<!-- ========================================== -->
<style>
    .project-square-box {
        width: 100%;
        max-width: 440px; 
        aspect-ratio: 1 / 1;
        overflow: hidden;
        background-color: #ffffff; /* Diubah putih biar kontras dengan section yang sedikit gelap */
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.06);
    }
    
    .style-project-img-flat {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.3s ease;
    }
    .project-thumb-wrapper:hover .style-project-img-flat {
        transform: scale(1.03); 
    }

    .bg-testi-orange    { background-color: #ff6f00 !important; }
    .bg-testi-yellow    { background-color: #ffcc00 !important; }
    .bg-testi-blue      { background-color: #007bff !important; } 
    .bg-testi-cyan      { background-color: #00f0ff !important; } 

    .small-text { font-size: 0.75rem; }
    .text-dark-50 { color: rgba(17, 26, 46, 0.65); }

    .nuhaldi-3d-testi {
        border-bottom: 5px solid rgba(0, 0, 0, 0.22) !important;
        border-right: 2px solid rgba(0, 0, 0, 0.12) !important;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.05);
        transition: transform 0.2s ease, box-shadow 0.2s ease;
        cursor: default;
    }
    
    .nuhaldi-3d-testi:hover {
        transform: translateY(-4px); 
        box-shadow: 0 8px 16px rgba(17, 26, 46, 0.12);
    }

    .testi-bootstrap-icon-box {
        width: 60px;
        height: 60px;
        background: rgba(255, 255, 255, 0.2);
        border: 2px solid rgba(255, 255, 255, 0.4);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        box-shadow: inset 0 2px 4px rgba(0,0,0,0.08);
        transition: transform 0.2s ease;
    }
    .bg-testi-yellow .testi-bootstrap-icon-box,
    .bg-testi-cyan .testi-bootstrap-icon-box {
        background: rgba(17, 26, 46, 0.07);
        border: 2px solid rgba(17, 26, 46, 0.15);
    }

    .nuhaldi-3d-testi:hover .testi-bootstrap-icon-box {
        transform: scale(1.08);
    }

    @media (max-width: 576px) {
        .project-square-box {
            max-width: 100% !important; 
        }
    }
</style>