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
            
            <!-- GRID KIRI: KOTAK MERAH (LEBIH LEBAR - SEKARANG col-lg-6 BIAR FOTO BESAR & RAPIH) -->
            <div class="col-lg-6 d-flex flex-column justify-content-between">
                <div class="pe-lg-2 mb-4 mb-lg-0 d-flex flex-column h-100 justify-content-between">
                    <div class="p-3 services-3d-soft-box w-100 d-flex flex-column h-100 bg-white">
                        
                        <div class="services-flat-title-badge mb-3">
                            <i class="bi bi-shield-check me-2"></i> Aturan Mutu Struktur
                        </div>

                        <!-- Row Internal Dua Ukuran Poster Berdampingan Penuh -->
                        <div class="row g-2 flex-grow-1 align-items-stretch">
                            <!-- Poster Aturan Mutu Ukuran 1 -->
                            <div class="col-6 d-flex">
                                <div class="services-poster-container flex-grow-1 d-flex align-items-center justify-content-center bg-transparent border-0 p-0 m-0 position-relative overflow-hidden w-100">
                                    <img src="{{ asset('pic12.webp') }}" alt="Aturan Mutu Struktur Ukuran 1" class="img-fluid services-poster-img rounded w-100 h-100">
                                    
                                    <div class="services-poster-overlay d-flex flex-column flex-sm-row gap-2 align-items-center justify-content-center">
                                        <button type="button" class="btn btn-light btn-sm shadow-sm fw-bold px-2 py-1 small" data-bs-toggle="modal" data-bs-target="#previewPosterModal">
                                            <i class="bi bi-eye"></i> Preview
                                        </button>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Poster Aturan Mutu Ukuran 2 -->
                            <div class="col-6 d-flex">
                                <div class="services-poster-container flex-grow-1 d-flex align-items-center justify-content-center bg-transparent border-0 p-0 m-0 position-relative overflow-hidden w-100">
                                    <img src="{{ asset('pic13.webp') }}" alt="Aturan Mutu Struktur Ukuran 2" class="img-fluid services-poster-img rounded w-100 h-100">
                                    
                                    <div class="services-poster-overlay d-flex flex-column flex-sm-row gap-2 align-items-center justify-content-center">
                                        <button type="button" class="btn btn-light btn-sm shadow-sm fw-bold px-2 py-1 small" data-bs-toggle="modal" data-bs-target="#previewPoster2Modal">
                                            <i class="bi bi-eye"></i> Preview
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            
            <!-- GRID KANAN: KOTAK BIRU TUA -->
            <div class="col-lg-6 d-flex">
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

                        <!-- Responsive Table wrapper -->
                        <div class="table-responsive flex-grow-1 bg-white">
                            <table class="table table-bordered table-striped align-middle mb-0 small" style="border-color: #dee2e6; font-size: 0.78rem;">
                                <thead class="table-light text-dark fw-semibold text-center">
                                    <tr>
                                        <th scope="col" class="py-2 text-secondary" style="width: 8%;">NO.</th>
                                        <th scope="col" class="py-2 text-secondary" style="width: 32%;">MUTU K</th>
                                        <th scope="col" class="py-2 text-secondary" style="width: 35%;">MUTU FC (MPA)</th>
                                        <th scope="col" class="py-2 text-secondary" style="width: 25%;">KET.</th>
                                    </tr>
                                </thead>
                                <tbody class="text-dark">
                                    <tr>
                                        <td class="text-center text-muted fw-bold">1</td>
                                        <td class="fw-bold text-dark">K100</td>
                                        <td class="text-secondary"> (FA & NFA)</td>
                                        <td class="text-center"><span class="badge bg-success fw-bold">Ready</span></td>
                                    </tr>
                                    <tr>
                                        <td class="text-center text-muted fw-bold">2</td>
                                        <td class="fw-bold text-dark">K-150</td>
                                        <td class="text-secondary">(FA & NFA)</td>
                                        <td class="text-center"><span class="badge bg-success fw-bold">Ready</span></td>
                                    </tr>
                                    <tr>
                                        <td class="text-center text-muted fw-bold">3</td>
                                        <td class="fw-bold text-dark">K-175</td>
                                        <td class="text-secondary">(FA & NFA)</td>
                                        <td class="text-center"><span class="badge bg-success fw-bold">Ready</span></td>
                                    </tr>
                                    <tr>
                                        <td class="text-center text-muted fw-bold">4</td>
                                        <td class="fw-bold text-dark">K-200</td>
                                        <td class="text-secondary">(FA & NFA)</td>
                                        <td class="text-center"><span class="badge bg-success fw-bold">Ready</span></td>
                                    </tr>
                                    <tr class="services-row-highlight">
                                        <td class="text-center text-muted fw-bold">5</td>
                                        <td class="fw-bold text-dark">K-225</td>
                                        <td class="text-secondary">(FA & NFA)</td>
                                        <td class="text-center"><span class="badge bg-warning text-dark fw-bold">Best Seller</span></td>
                                    </tr>
                                    <tr class="services-row-highlight">
                                        <td class="text-center text-muted fw-bold">6</td>
                                        <td class="fw-bold text-dark">K-250</td>
                                        <td class="text-secondary">(FA & NFA)</td>
                                        <td class="text-center"><span class="badge bg-warning text-dark fw-bold">Best Seller</span></td>
                                    </tr>
                                    <tr class="services-row-highlight">
                                        <td class="text-center text-muted fw-bold">7</td>
                                        <td class="fw-bold text-dark">K-275</td>
                                        <td class="text-secondary">(FA & NFA)</td>
                                        <td class="text-center"><span class="badge bg-warning text-dark fw-bold">Best Seller</span></td>
                                    </tr>
                                    <tr class="services-row-highlight">
                                        <td class="text-center text-muted fw-bold">8</td>
                                        <td class="fw-bold text-dark">K-300</td>
                                        <td class="text-secondary">(FA & NFA)</td>
                                        <td class="text-center"><span class="badge bg-warning text-dark fw-bold">Best Seller</span></td>
                                    </tr>
                                    <tr>
                                        <td class="text-center text-muted fw-bold">9</td>
                                        <td class="fw-bold text-dark">K-350</td>
                                        <td class="text-secondary">(FA & NFA)</td>
                                        <td class="text-center"><span class="badge bg-success fw-bold">Ready</span></td>
                                    </tr>
                                    <tr>
                                        <td class="text-center text-muted fw-bold">10</td>
                                        <td class="fw-bold text-dark">K-400</td>
                                        <td class="text-secondary">(FA & NFA)</td>
                                        <td class="text-center"><span class="badge bg-success fw-bold">Ready</span></td>
                                    </tr>
                                    <tr>
                                        <td class="text-center text-muted fw-bold">11</td>
                                        <td class="fw-bold text-dark">K-450</td>
                                        <td class="text-secondary">(FA & NFA)</td>
                                        <td class="text-center"><span class="badge bg-success fw-bold">Ready</span></td>
                                    </tr>
                                    <tr>
                                        <td class="text-center text-muted fw-bold">12</td>
                                        <td class="fw-bold text-dark">K-500</td>
                                        <td class="text-secondary">(FA & NFA)</td>
                                        <td class="text-center"><span class="badge bg-success fw-bold">Ready</span></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <!-- ================= BARIS KEDUA: LIST PENJELASAN ARMADA & POSTER ORDER ================= -->
        <div class="row g-4 align-items-stretch">
            
            <!-- GRID KIRI: LIST PENJELASAN TANPA IKON -->
            <div class="col-lg-7 d-flex">
                <div class="p-3 p-sm-4 services-3d-dark-box w-100 bg-white d-flex flex-column justify-content-start gap-4">
                    
                    <div>
                        <div class="services-dark-title-badge mb-1">
                            <i class="bi bi-info-circle-fill me-2"></i> Klasifikasi Armada & Spesifikasi Pompa
                        </div>
                    </div>

                    <!-- 1. Klasifikasi Truk -->
                    <div class="services-info-item">
                        <h4 class="services-list-heading text-dark mb-3">
                            <span class="services-step-number">1</span> Klasifikasi Truk ( Readymix )
                        </h4>
                        
                        <div class="mb-4 ps-2 ps-sm-3 border-start border-2 border-primary-subtle">
                            <h5 class="services-list-subheading text-secondary mb-2">
                                a. Jenis Ukuran Truk (2 Ukuran):
                            </h5>
                            <ul class="list-unstyled ps-1 ps-sm-2 services-clean-list text-dark">
                                <li class="mb-2">- <strong>Truk Big Mix:</strong> Untuk alokasi pemenuhan proyek skala besar.</li>
                                <li class="mb-2">- <strong>Truk Mini Mix:</strong> Solusi armada jangkauan area jalan / gang sempit.</li>
                                <li class="mb-2">- <strong>Truk Pump:</strong> Truk penunjang jangkauan pompa beton.</li>
                            </ul>
                        </div>

                        <div class="ps-2 ps-sm-3 border-start border-2 border-primary-subtle">
                            <h5 class="services-list-subheading text-secondary mb-2">
                                b. Jenis Tipe Truk (3 Tipe):
                            </h5>
                            <ul class="list-unstyled ps-1 ps-sm-2 services-clean-list text-dark">
                                <li class="mb-2">- <strong>Truk Ready Mix:</strong> Truk mixer pengolah dan pengantar beton cor.</li>
                                <li class="mb-2">- <strong>Truk Pompa Beton:</strong> Armada khusus distribusi pompa cor di lokasi.</li>
                            </ul>
                        </div>
                    </div>

                    <hr class="my-0 opacity-10" style="border-color: #dee2e6;">

                    <!-- 2. Jenis Pompa -->
                    <div class="services-info-item">
                        <h4 class="services-list-heading text-dark mb-3">
                            <span class="services-step-number">2</span> Jenis Pompa Beton ( Concrete Pump )
                        </h4>
                        <div class="ps-2 ps-sm-3 border-start border-2 border-danger-subtle">
                            <ul class="list-unstyled services-clean-list text-dark mb-0">
                                <li>- Mini Standar</li>
                                <li>- Standar</li>
                                <li>- Longboom</li>
                                <li>- Super Longboom</li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>

            <!-- GRID KANAN: POSTER AYO ORDER !!! -->
            <div class="col-lg-5 d-flex">
                <div class="p-3 services-3d-soft-box w-100 d-flex flex-column h-100 bg-white">
                    
                    <div class="services-flat-title-badge mb-3 bg-danger text-center w-100 py-2 shadow-sm text-uppercase fw-black letter-spacing-1">
                        <i class="bi bi-cart-check-fill me-2 fs-5"></i> Ayo Order !!!
                    </div>

                    <div class="row g-2 flex-grow-1 align-items-stretch">
                        <!-- Poster Kanan 1 -->
                        <div class="col-6 d-flex">
                            <div class="services-poster-container flex-grow-1 d-flex align-items-center justify-content-center bg-transparent border-0 p-0 m-0 position-relative overflow-hidden w-100">
                                <img src="{{ asset('pic6.webp') }}" alt="Poster Order Konstruksi 1" class="img-fluid services-poster-img rounded w-100 h-100">
                                <div class="services-poster-overlay d-flex flex-column flex-sm-row gap-2 align-items-center justify-content-center">
                                        <button type="button" class="btn btn-light btn-sm shadow-sm fw-bold px-2 py-1 small" data-bs-toggle="modal" data-bs-target="#previewPosterOrder1Modal">
                                            <i class="bi bi-eye"></i> Preview
                                        </button>
                                    </div>
                            </div>
                        </div>
                        
                        <!-- Poster Kanan 2 -->
                        <div class="col-6 d-flex">
                            <div class="services-poster-container flex-grow-1 d-flex align-items-center justify-content-center bg-transparent border-0 p-0 m-0 position-relative overflow-hidden w-100">
                                <img src="{{ asset('pic7.webp') }}" alt="Poster Order Konstruksi 2" class="img-fluid services-poster-img rounded w-100 h-100">
                                <div class="services-poster-overlay d-flex flex-column flex-sm-row gap-2 align-items-center justify-content-center">
                                        <button type="button" class="btn btn-light btn-sm shadow-sm fw-bold px-2 py-1 small" data-bs-toggle="modal" data-bs-target="#previewPosterOrder2Modal">
                                            <i class="bi bi-eye"></i> Preview
                                        </button>
                                    </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>

    <!-- ==========================================================================
       MODAL REGION (POP-UP PREVIEW)
       ========================================================================== -->

    <!-- MODAL POP-UP PREVIEW POSTER ATURAN MUTU 1 -->
    <div class="modal fade" id="previewPosterModal" tabindex="-1" aria-labelledby="previewPosterModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content border-0 shadow-lg">
                <div class="modal-header bg-dark text-white py-2 px-3">
                    <h5 class="modal-title small fw-bold" id="previewPosterModalLabel"><i class="bi bi-image me-2"></i>Aturan Mutu Struktur - Ukuran 1</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body bg-dark p-1 text-center d-flex align-items-center justify-content-center">
                    <!-- 🔥 FIXED: src sudah menggunakan asset asli -->
                    <img src="{{ asset('pic12.webp') }}" alt="Preview Aturan Mutu Struktur 1" class="img-fluid rounded-1" style="max-height: 82vh; object-fit: contain;">
                </div>
                <div class="modal-footer bg-light py-2">
                    <!-- 🔥 FIXED: href untuk download sudah menggunakan asset asli -->
                    <a href="{{ asset('pic12.webp') }}" download="Aturan-Mutu-Struktur-1.png" class="btn btn-danger btn-sm fw-bold">
                        <i class="bi bi-download me-1"></i> Download File Asli
                    </a>
                    <button type="button" class="btn btn-secondary btn-sm fw-bold" data-bs-dismiss="modal">Tutup</button>
                </div>
            </div>
        </div>
    </div>

    <!-- MODAL POP-UP PREVIEW POSTER ATURAN MUTU 2 -->
    <div class="modal fade" id="previewPoster2Modal" tabindex="-1" aria-labelledby="previewPoster2ModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content border-0 shadow-lg">
                <div class="modal-header bg-dark text-white py-2 px-3">
                    <h5 class="modal-title small fw-bold" id="previewPoster2ModalLabel"><i class="bi bi-image me-2"></i>Aturan Mutu Struktur - Ukuran 2</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body bg-dark p-1 text-center d-flex align-items-center justify-content-center">
                    <!-- 🔥 FIXED: src sudah menggunakan asset asli -->
                    <img src="{{ asset('pic13.webp') }}" alt="Preview Aturan Mutu Struktur 2" class="img-fluid rounded-1" style="max-height: 82vh; object-fit: contain;">
                </div>
                <div class="modal-footer bg-light py-2">
                    <!-- 🔥 FIXED: href untuk download sudah menggunakan asset asli -->
                    <a href="{{ asset('pic13.webp') }}" download="Aturan-Mutu-Struktur-2.png" class="btn btn-danger btn-sm fw-bold">
                        <i class="bi bi-download me-1"></i> Download File Asli
                    </a>
                    <button type="button" class="btn btn-secondary btn-sm fw-bold" data-bs-dismiss="modal">Tutup</button>
                </div>
            </div>
        </div>
    </div>

    <!-- MODAL POP-UP PREVIEW POSTER ORDER 1 -->
    <div class="modal fade" id="previewPosterOrder1Modal" tabindex="-1" aria-labelledby="previewPosterOrder1ModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content border-0 shadow-lg">
                <div class="modal-header bg-dark text-white py-2 px-3">
                    <h5 class="modal-title small fw-bold" id="previewPosterOrder1ModalLabel"><i class="bi bi-image me-2"></i>Poster Order Konstruksi 1</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body bg-dark p-1 text-center d-flex align-items-center justify-content-center">
                    <img src="{{ asset('pic6.webp') }}" alt="Preview Poster Order Konstruksi 1" class="img-fluid rounded-1" style="max-height: 82vh; object-fit: contain;">
                </div>
                <div class="modal-footer bg-light py-2">
                    <a href="{{ asset('pic6.webp') }}" download="Poster-Order-1.png" class="btn btn-danger btn-sm fw-bold">
                        <i class="bi bi-download me-1"></i> Download File Asli
                    </a>
                    <button type="button" class="btn btn-secondary btn-sm fw-bold" data-bs-dismiss="modal">Tutup</button>
                </div>
            </div>
        </div>
    </div>

    <!-- MODAL POP-UP PREVIEW POSTER ORDER 2 -->
    <div class="modal fade" id="previewPosterOrder2Modal" tabindex="-1" aria-labelledby="previewPosterOrder2ModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content border-0 shadow-lg">
                <div class="modal-header bg-dark text-white py-2 px-3">
                    <h5 class="modal-title small fw-bold" id="previewPosterOrder2ModalLabel"><i class="bi bi-image me-2"></i>Poster Order Konstruksi 2</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body bg-dark p-1 text-center d-flex align-items-center justify-content-center">
                    <img src="{{ asset('pic7.webp') }}" alt="Preview Poster Order Konstruksi 2" class="img-fluid rounded-1" style="max-height: 82vh; object-fit: contain;">
                </div>
                <div class="modal-footer bg-light py-2">
                    <a href="{{ asset('pic7.webp') }}" download="Poster-Order-2.png" class="btn btn-danger btn-sm fw-bold">
                        <i class="bi bi-download me-1"></i> Download File Asli
                    </a>
                    <button type="button" class="btn btn-secondary btn-sm fw-bold" data-bs-dismiss="modal">Tutup</button>
                </div>
            </div>
        </div>
    </div>
</section>