<footer class="app-main-footer bg-corporate-dark text-white pt-5 pb-3">
    <div class="container">
        <div class="row g-4">
            
            <div class="col-lg-7 col-md-12">
                <div class="footer-profile-info">
                    <h5 class="fw-black text-uppercase text-white mb-3 tracking-wide" style="font-size: 1.3rem;">
                        PT Readymix Beton Indonesia
                    </h5>
                    <p class="small text-muted-custom lh-relaxed mb-4" style="max-width: 550px;">
                        Solusi penyedia beton cor (*readymix concrete*) berkualitas tinggi standar SNI dan armada sewa pompa beton (*concrete pump*) prima untuk menunjang efisiensi proyek konstruksi skala besar maupun retail.
                    </p>
                    
                    <div class="footer-contact-list d-flex flex-column gap-2">
                        <div class="d-flex align-items-center gap-2 small text-muted-custom">
                            <i class="bi bi-geo-alt-fill text-red-accent" style="font-size: 1.1rem;"></i>
                            <span>Kantor Pusat: Jl. Raya Readymix Utama No. 88, Jakarta / Bekasi</span>
                        </div>
                        <a href="https://wa.me/6281212830218" target="_blank" class="d-flex align-items-center gap-2 small footer-interactive-link text-muted-custom">
                            <i class="bi bi-whatsapp text-success-accent" style="font-size: 1.1rem;"></i>
                            <span>Hotline WA: 0812-1283-0218 (Fast Response)</span>
                        </a>
                        <div class="d-flex align-items-center gap-2 small text-muted-custom">
                            <i class="bi bi-envelope-fill text-blue-accent" style="font-size: 1.1rem;"></i>
                            <span>Email: marketing@readymixbeton.co.id</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-5 col-md-12 text-lg-end">
                <div class="footer-system-nav">
                    <h5 class="fw-black text-uppercase text-white mb-3 tracking-wide" style="font-size: 1.3rem;">
                         Aplikasi Sistem Scanner
                    </h5>
                    <p class="small text-muted-custom mb-3">Akses cepat manajemen role kerja internal:</p>
                    
                    <div class="d-flex flex-wrap justify-content-lg-end gap-2 mb-4">
                        <span class="badge footer-role-badge badge-costing">
                            <i class="bi bi-calculator me-1"></i> Costing
                        </span>
                        <span class="badge footer-role-badge badge-engineering">
                            <i class="bi bi-gear-fill me-1"></i> Engineering
                        </span>
                        <span class="badge footer-role-badge badge-production">
                            <i class="bi bi-cpu-fill me-1"></i> Production
                        </span>
                    </div>

                    <div class="small text-muted-custom">
                        <i class="bi bi-clock-fill text-warning me-1"></i> Operational Hour: 24 Jam Non-Stop Service
                    </div>
                </div>
            </div>

        </div>

        <hr class="footer-divider my-4">
        
        <div class="row align-items-center">
            <div class="col-md-6 text-center text-md-start mb-2 mb-md-0">
                <p class="small text-muted-custom mb-0">
                    &copy; {{ date('Y') }} <span class="fw-bold text-white">ReadymixPro</span>. All Rights Reserved.
                </p>
            </div>
            <div class="col-md-6 text-center text-md-end">
                <span class="text-muted-custom style-build-tag">v2.1.0-Production</span>
            </div>
        </div>
        
    </div>
</footer>

<style>
    /* ==========================================================================
       ATURAN BASE & WARNA UTAMA FOOTER
       ========================================================================== */
    .app-main-footer, .app-main-footer * {
        box-sizing: border-box;
        font-family: "Nunito", sans-serif !important;
    }
    
    /* Warna Background Hitam Kebiruan Premium */
    .bg-corporate-dark {
        background-color: #0f172a !important; 
    }

    .fw-black { font-weight: 800 !important; }
    .tracking-wide { letter-spacing: 0.5px; }
    .text-muted-custom { color: #94a3b8 !important; }
    
    /* Warna Aksen Ikon */
    .text-red-accent { color: #e53935 !important; }
    .text-success-accent { color: #25d366 !important; }
    .text-blue-accent { color: #38bdf8 !important; }

    /* ==========================================================================
       STYLE INTERAKTIF UNTUK LINK KONTAK
       ========================================================================== */
    .footer-interactive-link {
        text-decoration: none;
        transition: color 0.15s ease-in-out;
        width: fit-content;
    }
    .footer-interactive-link:hover {
        color: #ffffff !important;
    }
    .footer-interactive-link:hover i {
        transform: scale(1.1);
    }
    .footer-interactive-link i {
        transition: transform 0.15s ease;
    }

    /* ==========================================================================
       STYLE UTAMA BADGE ROLE (BERFORMAT 3D BLOCK TIPIS)
       ========================================================================== */
    .footer-role-badge {
        font-size: 0.85rem !important;
        font-weight: 700 !important;
        padding: 8px 16px !important;
        border-radius: 6px !important;
        color: #ffffff !important;
        position: relative;
        top: 0;
        transition: all 0.1s ease-in-out;
    }
    .footer-role-badge:hover {
        top: 1px;
    }

    .badge-costing {
        background-color: #475569;
        border: 1px solid #334155;
        box-shadow: 0 3px 0px #334155;
    }
    .badge-costing:hover { box-shadow: 0 1px 0px #334155; }

    .badge-engineering {
        background-color: #1e88e5;
        border: 1px solid #1565c0;
        box-shadow: 0 3px 0px #1565c0;
    }
    .badge-engineering:hover { box-shadow: 0 1px 0px #1565c0; }

    .badge-production {
        background-color: #43a047;
        border: 1px solid #2e7d32;
        box-shadow: 0 3px 0px #2e7d32;
    }
    .badge-production:hover { box-shadow: 0 1px 0px #2e7d32; }

    /* ==========================================================================
       ORNAME PEMISAH & TAG TAMBAHAN
       ========================================================================== */
    .footer-divider {
        border-top: 1px solid rgba(148, 163, 184, 0.15) !important;
        opacity: 1;
    }
    
    .style-build-tag {
        font-size: 0.75rem;
        background-color: rgba(148, 163, 184, 0.08);
        padding: 4px 10px;
        border-radius: 4px;
        border: 1px solid rgba(148, 163, 184, 0.12);
    }
</style>