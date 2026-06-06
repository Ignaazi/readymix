<!-- Import Google Font Nunito (Standar NiceAdmin) -->
<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800;900&display=swap" rel="stylesheet">
<!-- Import Bootstrap Icons untuk presisi ikon outline -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

<!-- Section Menggunakan Full-Width Hero dengan Background Gambar logo1.png -->
<section id="home" class="home-hero-section-fluid" style="background-image: url('/pic1.png');">
    <!-- Overlay dibuat tipis banget (0.35) biar tidak gelap dan gambar asli kelihatan jelas -->
    <div class="hero-overlay-light"></div>
    
    <div class="hero-container-fluid">
        <!-- Struktur Layout Flex Berdampingan (Kiri Teks, Kanan Kontak) -->
        <div class="hero-main-flex-layout">
            
            <!-- SISI KIRI: Area Teks Penjelasan -->
            <div class="hero-text-side">
                <!-- Headline menggunakan warna putih bersih tanpa bayangan teks -->
                <h1 class="hero-headline-fluid text-white">
                    Solusi Cor Beton Readymix Modern & Terpercaya
                </h1>
                
                <!-- Deskripsi putih transparan lembut tanpa bayangan teks -->
                <p class="hero-description-fluid text-white-80">
                    Readymixsolution hadir sebagai partner utama proyek konstruksi Anda. Kami menyediakan suplai beton cor berkualitas tinggi standar SNI, armada truk mixer instan, serta layanan sewa pompa beton (concrete pump) prima untuk memastikan proses pengecoran bangunan Anda berjalan cepat, presisi, dan kokoh tahan lama.
                </p>
            </div>

            <!-- SISI KANAN: Kotak Kontak Kaca Abu-Abu Transparan Blur -->
            <div class="hero-contact-side">
                <div class="hero-contact-card-box">
                    <h3 class="contact-card-title text-white">Hubungi kami disini:</h3>
                    <div class="hero-btn-group-fluid">
                        <!-- Mengarah ke WhatsApp dengan ikon WA (Nomor dikosongkan dulu) -->
                        <a href="https://wa.me/" target="_blank" class="btn-hero-fluid btn-fluid-whatsapp custom-hero-hover">
                            <i class="bi bi-whatsapp me-2"></i> Whatsapp
                        </a>
                        <!-- Diubah dari biru menjadi MERAH menyala untuk Telepon (Nomor dikosongkan dulu) -->
                        <a href="tel:" class="btn-hero-fluid btn-fluid-red custom-hero-hover">
                            <i class="bi bi-telephone-fill me-2"></i> Telepon
                        </a>
                    </div>
                </div>
            </div>

        </div>

        <!-- Bagian Tiga Ikon Statistik (Fixed: Warna tulisan dipaksa putih bersih) -->
        <div class="hero-stats-fluid">
            <!-- Stat 1: Years Experience -->
            <div class="stat-fluid-item">
                <span class="stat-fluid-icon text-red-accent">
                    <i class="bi bi-building-check"></i>
                </span>
                <div class="stat-fluid-text">
                    <span class="stat-fluid-num text-white"><span class="counter" data-target="25">1</span>+</span>
                    <!-- FIXED: Ditambahkan style warna inline agar tidak ter-override menjadi hitam -->
                    <span class="stat-fluid-lbl" style="color: rgba(255, 255, 255, 0.95) !important;">Years Experience</span>
                </div>
            </div>
            
            <!-- Stat 2: Projects Completed -->
            <div class="stat-fluid-item">
                <span class="stat-fluid-icon text-red-accent">
                    <i class="bi bi-trophy"></i>
                </span>
                <div class="stat-fluid-text">
                    <span class="stat-fluid-num text-white"><span class="counter" data-target="500">1</span>+</span>
                    <!-- FIXED: Ditambahkan style warna inline agar tidak ter-override menjadi hitam -->
                    <span class="stat-fluid-lbl" style="color: rgba(255, 255, 255, 0.95) !important;">Projects Completed</span>
                </div>
            </div>
            
            <!-- Stat 3: Satisfied Clients -->
            <div class="stat-fluid-item">
                <span class="stat-fluid-icon text-red-accent">
                    <i class="bi bi-people"></i>
                </span>
                <div class="stat-fluid-text">
                    <span class="stat-fluid-num text-white"><span class="counter" data-target="300">1</span>+</span>
                    <!-- FIXED: Ditambahkan style warna inline agar tidak ter-override menjadi hitam -->
                    <span class="stat-fluid-lbl" style="color: rgba(255, 255, 255, 0.95) !important;">Satisfied Clients</span>
                </div>
            </div>
        </div>

    </div>
</section>

<style>
    /* Layout Banner Memanjang Full Width */
    .home-hero-section-fluid {
        position: relative;
        min-height: 85vh;
        padding: 140px 0 80px 0;
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        font-family: "Nunito", sans-serif !important;
        display: flex;
        align-items: center;
        box-sizing: border-box;
        overflow: hidden;
    }
    .home-hero-section-fluid * {
        box-sizing: border-box;
        font-family: "Nunito", sans-serif !important;
    }

    /* Warna gelap kebiruan (Navy Tint) tipis transparan agar gambar tetap jelas */
    .hero-overlay-light {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: linear-gradient(90deg, rgba(15, 27, 50, 0.55) 0%, rgba(15, 27, 50, 0.4) 50%, rgba(15, 27, 50, 0.25) 100%);
        z-index: 1;
    }
    
    .hero-container-fluid {
        position: relative;
        width: 100%;
        max-width: 1320px; 
        margin-right: auto;
        margin-left: auto;
        padding-right: 24px;
        padding-left: 24px;
        z-index: 2;
    }

    /* Struktur Layout Flex Berdampingan (Kiri Teks, Kanan Kontak) */
    .hero-main-flex-layout {
        display: flex;
        flex-direction: column; 
        gap: 2.5rem;
        align-items: center;
        margin-bottom: 4rem;
        width: 100%;
    }

    .hero-text-side {
        width: 100%;
    }

    .hero-contact-side {
        width: 100%;
        display: flex;
        justify-content: flex-start;
    }

    /* Layar Desktop (Berdampingan Kiri & Kanan) */
    @media (min-width: 992px) {
        .hero-main-flex-layout {
            flex-direction: row; 
            justify-content: space-between;
            align-items: center;
        }
        .hero-text-side {
            width: 60%; 
        }
        .hero-contact-side {
            width: 35%; 
            justify-content: flex-end; 
        }
    }
    
    .hero-headline-fluid {
        font-size: 3.5rem;
        font-weight: 800;
        line-height: 1.2;
        margin-top: 0;
        margin-bottom: 1.5rem;
        letter-spacing: -0.5px;
    }

    @media (max-width: 768px) {
        .hero-headline-fluid {
            font-size: 2.3rem;
        }
    }

    .hero-description-fluid {
        font-size: 1.1rem;
        line-height: 1.7;
        margin-bottom: 0; 
    }

    /* Ukuran Kotak Kontak Kaca Abu-abu Transparan Blur */
    .hero-contact-card-box {
        background: rgba(120, 120, 120, 0.25); 
        backdrop-filter: blur(10px); 
        -webkit-backdrop-filter: blur(10px); 
        padding: 1.25rem 1.5rem; 
        border-radius: 14px;
        width: 100%;
        max-width: 360px; 
        border: 1px solid rgba(255, 255, 255, 0.2); 
    }

    .contact-card-title {
        font-size: 1.3rem;
        font-weight: 700;
        margin-top: 0;
        margin-bottom: 1.1rem;
    }

    .hero-btn-group-fluid {
        display: flex;
        flex-direction: column;
        gap: 0.85rem; 
    }
    
    .btn-hero-fluid {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        padding: 0.75rem 2rem; 
        font-weight: 700;
        text-decoration: none;
        border-radius: 10px; 
        font-size: 1rem;
        box-shadow: 0 4px 10px rgba(0,0,0,0.15);
        width: 100%; 
    }

    .btn-fluid-whatsapp {
        background-color: #00a884;
        border: 2px solid #00a884;
        color: #ffffff !important;
    }
    .btn-fluid-whatsapp:hover {
        background-color: #008f6f;
        border-color: #008f6f;
    }

    .btn-fluid-red {
        background-color: #e53935;
        border: 2px solid #e53935;
        color: #ffffff !important;
    }
    .btn-fluid-red:hover {
        background-color: #b71c1c;
        border-color: #b71c1c;
    }

    .btn-hero-fluid .bi {
        font-size: 1.2rem;
        line-height: 1;
    }

    /* CSS BLOK STATISTIK */
    .hero-stats-fluid {
        display: grid;
        grid-template-columns: 1fr; 
        gap: 2rem;
        border-top: 2px solid rgba(255, 255, 255, 0.5); 
        padding-top: 2.5rem;
        width: 100%;
    }

    /* Responsif Grid Statistik di HP medium ke atas & Tablet */
    @media (min-width: 576px) {
        .hero-stats-fluid {
            grid-template-columns: repeat(2, 1fr); 
            gap: 2.5rem;
        }
    }

    /* Kembali horizontal normal di layar besar Desktop */
    @media (min-width: 992px) {
        .hero-stats-fluid {
            display: flex;
            flex-direction: row;
            flex-wrap: wrap;
            gap: 4rem; 
        }
    }

    .stat-fluid-item {
        display: flex;
        align-items: center;
        gap: 1.2rem; 
    }
    
    .stat-fluid-icon {
        font-size: 2.8rem; 
        line-height: 1;
        display: flex;
        align-items: center;
        -webkit-text-stroke: 1px; 
    }

    .stat-fluid-text {
        display: flex;
        flex-direction: column;
    }

    .stat-fluid-num {
        font-size: 1.9rem; 
        font-weight: 900; 
        line-height: 1.1;
    }

    .stat-fluid-lbl {
        font-size: 0.9rem;
        margin-top: 3px;
        font-weight: 800; 
        letter-spacing: 0.3px;
    }

    /* Warna Aksentuasi */
    .text-red-accent { color: #ff5252 !important; }
    .text-white-80 { color: rgba(255, 255, 255, 0.95) !important; }

    .custom-hero-hover {
        transition: transform 0.2s ease, background-color 0.2s ease, box-shadow 0.2s ease, color 0.2s ease;
    }
    .custom-hero-hover:hover {
        transform: translateY(-2px);
    }
</style>

<!-- Script Animasi Angka Hitung Cepat (Counter) -->
<script>
    document.addEventListener("DOMContentLoaded", () => {
        const counters = document.querySelectorAll('.counter');
        const duration = 1000; 

        counters.forEach(counter => {
            const updateCount = () => {
                const target = +counter.getAttribute('data-target');
                const count = +counter.innerText;
                
                const increment = Math.ceil(target / (duration / 16));

                if (count < target) {
                    counter.innerText = count + increment > target ? target : count + increment;
                    setTimeout(updateCount, 16); 
                } else {
                    counter.innerText = target;
                }
            };
            updateCount();
        });
    });
</script>