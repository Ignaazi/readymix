<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800;900&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

<section id="home" class="home-hero-section-fluid" style="background-image: url('/pic1.png');">
    <div class="hero-overlay-light"></div>
    
    <div class="hero-container-fluid">
        <div class="hero-main-flex-layout">
            
            <div class="hero-text-side">
                <h1 class="hero-headline-fluid text-white">
                    Produsen Beton Readymix JABODETABEK & Jasa Cor Pompa Beton Cikarang Bekasi Dan Sekitarnya
                </h1>
                
                <p class="hero-description-fluid text-white-80">
                    <strong>Readymix Nuhaldi</strong> hadir sebagai supplier material alam dan produsen terpercaya yang bergerak di bidang penyedia 
                    beton cor, readymix, jayamix, dan minimix. Kami melayani area JABODETABEK, Cikarang Selatan, hingga seluruh area Kabupaten Bekasi dengan dukungan armada penunjang lengkap seperti concrete pump, vibrator, dan trowel beton kualitas SNI.
                </p>

                <div class="hero-bottom-alignment-layout">
                    <div class="hero-stats-flat-row">
                        <div class="stat-flat-box">
                            <div class="stat-flat-icon text-yellow">
                                <i class="bi bi-building-check"></i>
                            </div>
                            <div class="stat-flat-text text-white">
                                <span class="stat-flat-num"><span class="counter" data-target="4">1</span>+</span>
                                <span class="stat-flat-lbl">Years Experience</span>
                            </div>
                        </div>
                        
                        <div class="stat-flat-box">
                            <div class="stat-flat-icon text-cyan">
                                <i class="bi bi-trophy"></i>
                            </div>
                            <div class="stat-flat-text text-white">
                                <span class="stat-flat-num"><span class="counter" data-target="200">1</span>+</span>
                                <span class="stat-flat-lbl">Projects Completed</span>
                            </div>
                        </div>
                        
                        <div class="stat-flat-box">
                            <div class="stat-flat-icon text-green">
                                <i class="bi bi-star-fill"></i>
                            </div>
                            <div class="stat-flat-text text-white">
                                <span class="stat-flat-num">4.9 / 5</span>
                                <span class="stat-flat-lbl">Google Maps Rating</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="hero-contact-side">
                <div class="hero-combined-contact-box">
                    <div class="combined-plain-header text-white">
                        Hubungi kami :
                    </div>
                    
                    <div class="hero-btn-group-mini">
                        <a href="https://wa.me/6281212830218" target="_blank" rel="nofollow noopener" class="btn-mini-fluid btn-mini-whatsapp">
                            <i class="bi bi-whatsapp"></i> Whatsapp
                        </a>
                        <a href="tel:081212830218" rel="nofollow" class="btn-mini-fluid btn-mini-blue">
                            <i class="bi bi-telephone-fill"></i> Telepon
                        </a>
                    </div>

                    <div class="manual-contact-list">
                        <div class="manual-contact-item-row">
                            <div class="contact-info-left">
                                <i class="bi bi-telephone-fill text-phone"></i>
                                <span><strong>Telp:</strong> <span class="copy-target">0812-1283-0218</span></span>
                            </div>
                            <button class="btn-copy-action" onclick="copyText(this)" title="Salin Nomor"><i class="bi bi-copy"></i></button>
                        </div>
                        
                        <div class="manual-contact-item-row">
                            <div class="contact-info-left">
                                <i class="bi bi-whatsapp text-wa"></i>
                                <span><strong>WA:</strong> <span class="copy-target">0812-1283-0218</span></span>
                            </div>
                            <button class="btn-copy-action" onclick="copyText(this)" title="Salin Nomor"><i class="bi bi-copy"></i></button>
                        </div>
                        
                        <div class="manual-contact-item-row">
                            <div class="contact-info-left">
                                <i class="bi bi-instagram text-ig"></i>
                                <span><strong>IG:</strong> <span class="copy-target">@jualreadymixcorrjabodetabek</span></span>
                            </div>
                            <button class="btn-copy-action" onclick="copyText(this)" title="Salin Username"><i class="bi bi-copy"></i></button>
                        </div>

                        <div class="manual-contact-item-row">
                            <div class="contact-info-left">
                                <i class="bi bi-tiktok text-tiktok"></i>
                                <span><strong>TikTok:</strong> <span class="copy-target">readymixpompacor</span></span>
                            </div>
                            <button class="btn-copy-action" onclick="copyText(this)" title="Salin Username"><i class="bi bi-copy"></i></button>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<style>
    .home-hero-section-fluid {
        position: relative;
        min-height: 100vh; /* Dikembalikan ke proporsi layar penuh standar */
        padding: 55px 0 40px 0;
        /* UPDATE DESKTOP: Menggunakan 'cover' agar full penuh display tanpa area kosong */
        background-size: cover;
        /* UPDATE DESKTOP: Digeser titik fokusnya ke 30% vertikal untuk nge-zoom sedikit dan mengangkat visual truk biar pas */
        background-position: center 30%;
        background-repeat: no-repeat;
        font-family: "Nunito", sans-serif !important;
        display: flex;
        align-items: center;
        box-sizing: border-box;
        overflow: hidden;
    }

    /* MOBILE VERSION RESPONSIVE ADJUSTMENTS */
    @media (max-width: 991px) {
        .home-hero-section-fluid {
            min-height: auto; 
            padding: 45px 0 35px 0;
            background-size: cover !important;
            /* MOBILE: Tetap terkunci di koordinat 38% agar matahari terbuang dan truk putih tetap di tengah display HP */
            background-position: 38% bottom !important; 
        }
        
        .hero-main-flex-layout {
            display: flex;
            flex-direction: column !important; 
        }
        .hero-text-side {
            order: 1; 
            width: 100%;
        }
        .hero-contact-side {
            order: 2; 
            width: 100%;
            display: flex;
            justify-content: center;
            margin-top: 1.5rem;
        }

        #mainNavbar .navbar-collapse {
            position: absolute;
            top: 100%;
            left: 0;
            width: 100%;
            background: #ffffff;
            padding-left: 20px;
            padding-right: 20px;
            padding-bottom: 20px;
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1);
            z-index: 9999 !important;
        }
    }

    @media (max-width: 576px) {
        .home-hero-section-fluid {
            background-size: cover !important;
            background-position: 38% bottom !important;
        }
    }

    .home-hero-section-fluid * {
        box-sizing: border-box;
        font-family: "Nunito", sans-serif !important;
    }
    .hero-overlay-light {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: linear-gradient(90deg, rgba(15, 27, 50, 0.65) 0%, rgba(15, 27, 50, 0.5) 50%, rgba(15, 27, 50, 0.4) 100%);
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
    .hero-main-flex-layout {
        display: flex;
        flex-direction: column; 
        gap: 2rem;
        align-items: center;
        width: 100%;
    }
    .hero-text-side { width: 100%; }
    .hero-contact-side { width: 100%; display: flex; justify-content: flex-start; }
    
    @media (min-width: 992px) {
        .hero-main-flex-layout { flex-direction: row; justify-content: space-between; align-items: flex-start; }
        .hero-text-side { width: 65%; }
        .hero-contact-side { width: 32%; justify-content: flex-end; }
    }
    
    .hero-headline-fluid {
        font-size: 3.2rem;
        font-weight: 800;
        line-height: 1.2;
        margin-top: 0;
        margin-bottom: 1.2rem;
        letter-spacing: -0.5px;
    }
    @media (max-width: 768px) { .hero-headline-fluid { font-size: 2.1rem; } }
    .hero-description-fluid { font-size: 1.05rem; line-height: 1.7; margin-bottom: 1.5rem; }

    /* BOX KONTAK GABUNGAN */
    .hero-combined-contact-box {
        background: rgba(15, 23, 42, 0.6); 
        backdrop-filter: blur(12px); 
        -webkit-backdrop-filter: blur(12px); 
        padding: 1rem; 
        border-radius: 12px;
        width: 100%;
        max-width: 320px; 
        border: 1px solid rgba(255, 255, 255, 0.12); 
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
    }
    .combined-plain-header {
        font-weight: 800;
        font-size: 0.95rem;
        margin-bottom: 0.75rem;
        letter-spacing: 0.5px;
    }
    
    .hero-btn-group-mini { display: flex; gap: 0.5rem; margin-bottom: 0.75rem; }
    .btn-mini-fluid {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        gap: 0.35rem;
        padding: 0.5rem 0.75rem; 
        font-weight: 700;
        text-decoration: none;
        border-radius: 8px; 
        font-size: 0.85rem;
        width: 50%;
        color: #ffffff !important;
        transition: transform 0.2s;
    }
    .btn-mini-fluid:hover { transform: translateY(-1px); }
    .btn-mini-whatsapp { background-color: #00a884; }
    .btn-mini-blue { background-color: #0284c7; }

    .manual-contact-list { display: flex; flex-direction: column; gap: 0.35rem; }
    .manual-contact-item-row { display: flex; align-items: center; justify-content: space-between; gap: 0.5rem; font-size: 0.8rem; color: #e2e8f0 !important; border-bottom: 1px dashed rgba(255,255,255,0.1); padding-bottom: 3px; }
    .manual-contact-item-row:last-child { border-bottom: none; padding-bottom: 0; }
    .contact-info-left { display: flex; align-items: center; gap: 0.4rem; }
    .contact-info-left i { font-size: 0.9rem; width: 14px; text-align: center; }
    
    .text-phone { color: #38bdf8; }
    .text-wa { color: #4ade80; }
    .text-ig { color: #f472b6; }
    .text-tiktok { color: #ffffff; } 
    
    .btn-copy-action { background: none; border: none; color: #94a3b8; padding: 2px 4px; border-radius: 4px; cursor: pointer; }
    .btn-copy-action:hover { color: #ffffff; }

    /* RATING FLAT */
    .hero-bottom-alignment-layout { width: 100%; display: flex; justify-content: flex-start; }
    .hero-stats-flat-row { display: flex; flex-direction: column; gap: 1.2rem; width: 100%; }
    
    @media (min-width: 576px) {
        .hero-stats-flat-row { flex-direction: row; flex-wrap: wrap; gap: 2.2rem; }
    }

    .stat-flat-box { display: flex; align-items: center; gap: 0.85rem; }
    .stat-flat-icon { font-size: 2.5rem; display: flex; align-items: center; justify-content: center; line-height: 1; }
    
    .text-yellow { color: #ffeb3b !important; filter: drop-shadow(0 2px 4px rgba(0,0,0,0.3)); }
    .text-cyan { color: #00e5ff !important; filter: drop-shadow(0 2px 4px rgba(0,0,0,0.3)); }
    .text-green { color: #69f0ae !important; filter: drop-shadow(0 2px 4px rgba(0,0,0,0.3)); }

    .stat-flat-text { display: flex; flex-direction: column; }
    .stat-flat-num { font-size: 1.55rem; font-weight: 900; line-height: 1.1; letter-spacing: 0.5px; }
    .stat-flat-lbl { font-size: 0.8rem; margin-top: 2px; font-weight: 700; opacity: 0.85; letter-spacing: 0.2px; text-transform: uppercase; }
    
    .text-white-80 { color: rgba(255, 255, 255, 0.9) !important; }
</style>

<script>
    function copyText(buttonElement) {
        const textToCopy = buttonElement.parentElement.querySelector('.copy-target').innerText;
        navigator.clipboard.writeText(textToCopy).then(() => {
            const icon = buttonElement.querySelector('i');
            icon.className = 'bi bi-check-lg text-success';
            setTimeout(() => { icon.className = 'bi bi-copy'; }, 1500);
        }).catch(err => { console.error('Gagal menyalin teks: ', err); });
    }

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
                } else { counter.innerText = target; }
            };
            updateCount();
        });
    });
</script>