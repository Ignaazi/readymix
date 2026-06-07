<section id="services" class="py-5" style="overflow: hidden; background-color: #f8f9fa;">
    <div class="container py-md-4">
        
        <!-- HEADER UTAMA -->
        <div class="row mb-5">
            <div class="col-12 text-center">
                <h2 class="services-main-title text-dark">
                    PRODUCT DAN LAYANAN KAMI
                </h2>
                <div class="services-title-line mx-auto"></div>
            </div>
        </div>

        <!-- ================= BARIS PERTAMA: MUTU STRUKTUR & TABEL ================= -->
        <div class="row g-4 align-items-stretch mb-5">
            
            <!-- GRID KIRI: KOTAK MERAH (POSTER ATURAN MUTU) -->
            <div class="col-lg-4 d-flex flex-column justify-content-between">
                <div class="pe-lg-2 mb-4 mb-lg-0 d-flex flex-column h-100 justify-content-between">
                    <div class="p-3 services-3d-soft-box w-100 d-flex flex-column h-100 bg-white">
                        
                        <div class="services-flat-title-badge mb-3">
                            <i class="bi bi-shield-check me-2"></i> Aturan Mutu Struktur
                        </div>

                        <div class="services-poster-container flex-grow-1 d-flex align-items-center justify-content-center bg-transparent border-0 p-0 m-0 position-relative overflow-hidden w-100">
                            <img src="{{ asset('pic12.png') }}" alt="Aturan Mutu Struktur" class="img-fluid services-poster-img rounded w-100 h-100">
                            
                            <div class="services-poster-overlay d-flex flex-column flex-sm-row gap-2 align-items-center justify-content-center">
                                <button type="button" class="btn btn-light btn-sm shadow-sm fw-bold px-3" data-bs-toggle="modal" data-bs-target="#previewPosterModal">
                                    <i class="bi bi-eye me-1"></i> Preview
                                </button>
                                <a href="{{ asset('pic12.png') }}" download="Aturan-Mutu-Struktur.png" class="btn btn-danger btn-sm shadow-sm fw-bold px-3">
                                    <i class="bi bi-download me-1"></i> Download
                                </a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            
            <!-- GRID KANAN: KOTAK BIRU TUA (TABEL DATA MUTU) -->
            <div class="col-lg-8 d-flex">
                <div id="tableAreaToDownload" class="p-3 services-3d-dark-box w-100 d-flex flex-column justify-content-between gap-3 bg-white">
                    <div class="d-flex flex-column h-100 w-100">
                        <div class="d-flex flex-column flex-sm-row justify-content-between align-items-start align-items-sm-center gap-2 mb-3">
                            <div class="services-dark-title-badge">
                                <i class="bi bi-grid-3x3-gap me-2"></i> Daftar Mutu Karakteristik FA & NFA
                            </div>
                            <button type="button" onclick="downloadTableAsImage()" class="btn text-white btn-sm fw-bold px-3 shadow-sm services-png-btn" style="background-color: #1e3a8a; border-color: #1e3a8a;">
                                <i class="bi bi-camera me-1"></i> Download Table
                            </button>
                        </div>

                        <div class="table-responsive flex-grow-1 bg-white">
                            <table class="table table-bordered table-striped align-middle mb-0 small" style="border-color: #dee2e6;">
                                <thead class="table-light text-dark fw-semibold text-center">
                                    <tr>
                                        <th scope="col" class="py-2 text-secondary" style="width: 8%;">NO.</th>
                                        <th scope="col" class="py-2 text-secondary" style="width: 32%;">MUTU K</th>
                                        <th scope="col" class="py-2 text-secondary" style="width: 35%;">MUTU FC (MPA)</th>
                                        <th scope="col" class="py-2 text-secondary" style="width: 25%;">KETERANGAN</th>
                                    </tr>
                                </thead>
                                <tbody class="text-dark">
                                    <tr>
                                        <td class="text-center text-muted fw-bold">1</td>
                                        <td class="fw-bold text-dark">K100</td>
                                        <td class="text-secondary">7.4 MPa (FA & NFA)</td>
                                        <td class="text-center"><span class="badge bg-success fw-bold">Ready</span></td>
                                    </tr>
                                    <tr>
                                        <td class="text-center text-muted fw-bold">2</td>
                                        <td class="fw-bold text-dark">K-150</td>
                                        <td class="text-secondary">12.45 MPa (FA & NFA)</td>
                                        <td class="text-center"><span class="badge bg-success fw-bold">Ready</span></td>
                                    </tr>
                                    <tr>
                                        <td class="text-center text-muted fw-bold">3</td>
                                        <td class="fw-bold text-dark">K-175</td>
                                        <td class="text-secondary">14.53 MPa (FA & NFA)</td>
                                        <td class="text-center"><span class="badge bg-success fw-bold">Ready</span></td>
                                    </tr>
                                    <tr>
                                        <td class="text-center text-muted fw-bold">4</td>
                                        <td class="fw-bold text-dark">K-200</td>
                                        <td class="text-secondary">16.60 MPa (FA & NFA)</td>
                                        <td class="text-center"><span class="badge bg-success fw-bold">Ready</span></td>
                                    </tr>
                                    <tr class="services-row-highlight">
                                        <td class="text-center text-muted fw-bold">5</td>
                                        <td class="fw-bold text-dark">K-225</td>
                                        <td class="text-secondary">18.68 MPa (FA & NFA)</td>
                                        <td class="text-center"><span class="badge bg-warning text-dark fw-bold"><i class="bi bi-star-fill me-1 text-dark"></i>Best Seller</span></td>
                                    </tr>
                                    <tr class="services-row-highlight">
                                        <td class="text-center text-muted fw-bold">6</td>
                                        <td class="fw-bold text-dark">K-250</td>
                                        <td class="text-secondary">20.75 MPa (FA & NFA)</td>
                                        <td class="text-center"><span class="badge bg-warning text-dark fw-bold"><i class="bi bi-star-fill me-1 text-dark"></i>Best Seller</span></td>
                                    </tr>
                                    <tr class="services-row-highlight">
                                        <td class="text-center text-muted fw-bold">7</td>
                                        <td class="fw-bold text-dark">K-275</td>
                                        <td class="text-secondary">22.83 MPa (FA & NFA)</td>
                                        <td class="text-center"><span class="badge bg-warning text-dark fw-bold"><i class="bi bi-star-fill me-1 text-dark"></i>Best Seller</span></td>
                                    </tr>
                                    <tr class="services-row-highlight">
                                        <td class="text-center text-muted fw-bold">8</td>
                                        <td class="fw-bold text-dark">K-300</td>
                                        <td class="text-secondary">24.90 MPa (FA & NFA)</td>
                                        <td class="text-center"><span class="badge bg-warning text-dark fw-bold"><i class="bi bi-star-fill me-1 text-dark"></i>Best Seller</span></td>
                                    </tr>
                                    <tr>
                                        <td class="text-center text-muted fw-bold">9</td>
                                        <td class="fw-bold text-dark">K-350</td>
                                        <td class="text-secondary">29.05 MPa (FA & NFA)</td>
                                        <td class="text-center"><span class="badge bg-success fw-bold">Ready</span></td>
                                    </tr>
                                    <tr>
                                        <td class="text-center text-muted fw-bold">10</td>
                                        <td class="fw-bold text-dark">K-400</td>
                                        <td class="text-secondary">33.20 MPa (FA & NFA)</td>
                                        <td class="text-center"><span class="badge bg-success fw-bold">Ready</span></td>
                                    </tr>
                                    <tr>
                                        <td class="text-center text-muted fw-bold">11</td>
                                        <td class="fw-bold text-dark">K-450</td>
                                        <td class="text-secondary">37.35 MPa (FA & NFA)</td>
                                        <td class="text-center"><span class="badge bg-success fw-bold">Ready</span></td>
                                    </tr>
                                    <tr>
                                        <td class="text-center text-muted fw-bold">12</td>
                                        <td class="fw-bold text-dark">K-500</td>
                                        <td class="text-secondary">41.50 MPa (FA & NFA)</td>
                                        <td class="text-center"><span class="badge bg-success fw-bold">Ready</span></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <!-- ================= BARIS KEDUA: LIST PENJELASAN ARMADA (TEXT BESAR & NOMOR) & POSTER ORDER ================= -->
        <div class="row g-4 align-items-stretch">
            
            <!-- GRID KIRI: LIST PENJELASAN TANPA IKON (TEMA BIRU TUA ABOUT) -->
            <div class="col-lg-7 d-flex">
                <div class="p-4 services-3d-dark-box w-100 bg-white d-flex flex-column justify-content-start gap-4">
                    
                    <div>
                        <div class="services-dark-title-badge mb-1">
                            <i class="bi bi-info-circle-fill me-2"></i> Klasifikasi Armada & Spesifikasi Pompa
                        </div>
                    </div>

                    <!-- 1. Klasifikasi Truk -->
                    <div class="services-info-item">
                        <h4 class="services-list-heading text-dark mb-3">
                            <span class="services-step-number">1</span> Klasifikasi Truk
                        </h4>
                        
                        <!-- Sub Bagian: Ukuran Truk -->
                        <div class="mb-4 ps-3 border-start border-2 border-primary-subtle">
                            <h5 class="services-list-subheading text-secondary mb-2">
                                a. Jenis Ukuran Truk (2 Ukuran):
                            </h5>
                            <ul class="list-unstyled ps-2 services-clean-list text-dark">
                                <li class="mb-2">- <strong>Truk Big Mix:</strong> Untuk alokasi pemenuhan proyek skala besar.</li>
                                <li class="mb-2">- <strong>Truk Mini Mix:</strong> Solusi armada jangkauan area jalan / gang sempit.</li>
                                <li class="mb-2">- <strong>Truk Pump:</strong> Truk penunjang jangkauan pompa beton.</li>
                            </ul>
                        </div>

                        <!-- Sub Bagian: Tipe Truk -->
                        <div class="ps-3 border-start border-2 border-primary-subtle">
                            <h5 class="services-list-subheading text-secondary mb-2">
                                b. Jenis Tipe Truk (3 Tipe):
                            </h5>
                            <ul class="list-unstyled ps-2 services-clean-list text-dark">
                                <li class="mb-2">- <strong>Truk Ready Mix:</strong> Truk mixer pengolah dan pengantar beton cor.</li>
                                <li class="mb-2">- <strong>Truk Pompa Beton:</strong> Armada khusus distribusi pompa cor di lokasi.</li>
                            </ul>
                        </div>
                    </div>

                    <!-- Divider Tipis Bersih -->
                    <hr class="my-0 opacity-10" style="border-color: #dee2e6;">

                    <!-- 2. Jenis Pompa -->
                    <div class="services-info-item">
                        <h4 class="services-list-heading text-dark mb-3">
                            <span class="services-step-number">2</span> Jenis Pompa Beton
                        </h4>
                        <div class="ps-3 border-start border-2 border-danger-subtle">
                            <ul class="list-unstyled services-clean-list services-grid-list text-dark mb-0">
                                <li class="mb-2">- Mini Standar</li>
                                <li class="mb-2">- Standar</li>
                                <li class="mb-2">- Longboom</li>
                                <li class="mb-2">- Super Longboom</li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>

            <!-- GRID KANAN: POSTER AYO ORDER !!! -->
            <div class="col-lg-5 d-flex">
                <div class="p-3 services-3d-soft-box w-100 d-flex flex-column h-100 bg-white">
                    
                    <!-- Lencana Judul AYO ORDER !!! -->
                    <div class="services-flat-title-badge mb-3 bg-danger text-center w-100 py-2 shadow-sm text-uppercase fw-black letter-spacing-1">
                        <i class="bi bi-cart-check-fill me-2 fs-5"></i> Ayo Order !!! <i class="bi bi-fire ms-1"></i>
                    </div>

                    <!-- Row Internal Menampilkan Dua Poster Berdampingan Penuh -->
                    <div class="row g-2 flex-grow-1 align-items-stretch">
                        <!-- Poster Kanan 1: pic6.png -->
                        <div class="col-6 d-flex">
                            <div class="services-poster-container flex-grow-1 d-flex align-items-center justify-content-center bg-transparent border-0 p-0 m-0 position-relative overflow-hidden w-100">
                                <img src="{{ asset('pic6.png') }}" alt="Poster Order Konstruksi 1" class="img-fluid services-poster-img rounded w-100 h-100">
                                <div class="services-poster-overlay d-flex flex-column gap-2 align-items-center justify-content-center">
                                    <a href="{{ asset('pic6.png') }}" download="Poster-Order-1.png" class="btn btn-danger btn-sm shadow-sm fw-bold px-2 py-1 small">
                                        <i class="bi bi-download"></i> Download
                                    </a>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Poster Kanan 2: pic7.png -->
                        <div class="col-6 d-flex">
                            <div class="services-poster-container flex-grow-1 d-flex align-items-center justify-content-center bg-transparent border-0 p-0 m-0 position-relative overflow-hidden w-100">
                                <img src="{{ asset('pic7.png') }}" alt="Poster Order Konstruksi 2" class="img-fluid services-poster-img rounded w-100 h-100">
                                <div class="services-poster-overlay d-flex flex-column gap-2 align-items-center justify-content-center">
                                    <a href="{{ asset('pic7.png') }}" download="Poster-Order-2.png" class="btn btn-danger btn-sm shadow-sm fw-bold px-2 py-1 small">
                                        <i class="bi bi-download"></i> Download
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>

    <!-- MODAL POP-UP PREVIEW POSTER ATURAN MUTU -->
    <div class="modal fade" id="previewPosterModal" tabindex="-1" aria-labelledby="previewPosterModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content border-0 shadow-lg">
                <div class="modal-header bg-dark text-white py-2 px-3">
                    <h5 class="modal-title small fw-bold" id="previewPosterModalLabel"><i class="bi bi-image me-2"></i>Aturan Mutu Struktur</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body bg-dark p-1 text-center d-flex align-items-center justify-content-center">
                    <img src="{{ asset('pic12.png') }}" alt="Preview Aturan Mutu Struktur" class="img-fluid rounded-1" style="max-height: 82vh; object-fit: contain;">
                </div>
                <div class="modal-footer bg-light py-2">
                    <a href="{{ asset('pic12.png') }}" download="Aturan-Mutu-Struktur.png" class="btn btn-danger btn-sm fw-bold">
                        <i class="bi bi-download me-1"></i> Download File Asli
                    </a>
                    <button type="button" class="btn btn-secondary btn-sm fw-bold" data-bs-dismiss="modal">Tutup</button>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- PUSTAKA HTML2CANVAS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>
<script>
    function downloadTableAsImage() {
        const element = document.getElementById('tableAreaToDownload');
        const downloadBtn = element.querySelector('.services-png-btn');
        if(downloadBtn) downloadBtn.style.visibility = 'hidden';

        html2canvas(element, {
            scale: 2,
            backgroundColor: '#ffffff',
            useCORS: true
        }).then(canvas => {
            if(downloadBtn) downloadBtn.style.visibility = 'visible';
            const link = document.createElement('a');
            link.download = 'Daftar-Mutu-Karakteristik-Tabel.png';
            link.href = canvas.toDataURL('image/png');
            link.click();
        }).catch(err => {
            if(downloadBtn) downloadBtn.style.visibility = 'visible';
            console.error('Gagal memproses unduhan tabel:', err);
        });
    }
</script>

<style>
    /* Sinkronisasi Font & Reset Global Sesuai Section About */
    #services, #services * {
        box-sizing: border-box;
        font-family: "Nunito", sans-serif !important;
    }

    /* Style Judul Sesuai Section About */
    .services-main-title {
        font-size: 2.6rem;
        font-weight: 900;
        letter-spacing: 0.5px;
        text-transform: uppercase;
        margin-bottom: 0.75rem;
    }
    .services-title-line {
        width: 100px;
        height: 4px;
        background-color: #e53935; 
        border-radius: 2px;
    }

    @media (max-width: 768px) {
        .services-main-title { font-size: 1.8rem; }
        .services-title-line { width: 70px; }
    }

    /* KOTAK KIRI/MERAH (TEMA MERAH TIMBUL ABOUT) */
    .services-3d-soft-box {
        background: #ffffff !important; 
        border-radius: 12px; 
        border: 1px solid #e53935; 
        box-shadow: 0 5px 0px #e53935; 
        position: relative;
        top: 0;
        transition: all 0.15s ease-in-out;
    }
    .services-3d-soft-box:hover {
        top: 2px;
        box-shadow: 0 3px 0px #e53935; 
    }
    .services-flat-title-badge {
        background-color: #e53935; 
        color: #ffffff !important; 
        padding: 5px 12px;
        border-radius: 6px;
        font-weight: 700;
        font-size: 0.9rem;
        display: inline-block;
    }

    /* KONTANER POSTER UTUH PAS DENGAN AREA CONTAINER */
    .services-poster-container {
        position: relative;
        overflow: hidden;
        max-width: 100%;
        height: auto;
        min-height: 380px;
    }
    .services-poster-img {
        object-fit: contain;
        width: 100%;
        height: 100%;
        max-height: 470px;
        transition: transform 0.3s ease;
    }
    .services-poster-overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.45);
        opacity: 0;
        transition: opacity 0.25s ease-in-out;
        z-index: 3;
    }
    .services-poster-container:hover .services-poster-overlay {
        opacity: 1;
    }
    .services-poster-container:hover .services-poster-img {
        transform: scale(1.02);
    }

    /* KOTAK KANAN/BIRU (TEMA BIRU TUA TIMBUL ABOUT) */
    .services-3d-dark-box {
        background: #ffffff !important; 
        border-radius: 12px; 
        border: 1px solid #1e3a8a; 
        box-shadow: 0 5px 0px #1e3a8a; 
        position: relative;
        top: 0;
        transition: all 0.15s ease-in-out;
    }
    .services-3d-dark-box:hover {
        top: 2px;
        box-shadow: 0 3px 0px #1e3a8a; 
    }
    .services-dark-title-badge {
        background-color: #1e3a8a; 
        color: #ffffff !important; 
        padding: 5px 12px;
        border-radius: 6px;
        font-weight: 700;
        font-size: 0.9rem;
        display: inline-block;
    }

    /* KUSTOMISASI UKURAN TEKS DAN ANGKA BULAT */
    .services-list-heading {
        font-size: 1.35rem; /* Diperbesar dari versi sebelumnya */
        font-weight: 800;
        display: flex;
        align-items: center;
        letter-spacing: -0.2px;
    }
    .services-step-number {
        background-color: #1e3a8a;
        color: #fff;
        width: 28px; /* Sedikit diperbesar agar seimbang dengan font */
        height: 28px;
        border-radius: 50%;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        font-size: 0.85rem;
        font-weight: 800;
        margin-right: 12px;
    }
    .services-list-subheading {
        font-size: 1.05rem; /* Teks subjudul klasifikasi diperbesar */
        font-weight: 800;
        color: #495057 !important;
    }
    .services-clean-list li {
        font-size: 0.98rem; /* Ukuran utama isi list diperbesar untuk kenyamanan membaca */
        line-height: 1.6;
        color: #212529 !important;
    }
    .services-grid-list {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 10px 20px;
    }

    /* Tombol Unduh Kustomisasi */
    .services-png-btn {
        font-size: 0.82rem;
        border-radius: 6px;
        transition: opacity 0.15s ease, transform 0.15s ease;
    }
    .services-png-btn:hover {
        transform: translateY(-1px);
        opacity: 0.9;
        color: #ffffff !important;
    }

    /* Styling Data Tabel */
    .table-bordered th, .table-bordered td {
        padding: 0.55rem 0.75rem !important;
        font-size: 0.82rem;
    }
    .table-striped tbody tr:nth-of-type(odd) {
        background-color: rgba(0, 0, 0, 0.015);
    }
    .services-row-highlight {
        background-color: rgba(255, 193, 7, 0.04) !important;
    }

    /* Responsive adjustments */
    @media (max-width: 991.98px) {
        .services-poster-container {
            min-height: 280px;
        }
        .services-grid-list {
            grid-template-columns: 1fr;
        }
    }
</style>