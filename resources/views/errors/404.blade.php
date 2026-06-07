<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404 - Halaman Tidak Ditemukan</title>
    
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <style>
        /* PANGGIL CSS KHUSUS NAVBAR BIAR TIDAK DUPLIKAT DI SINI */
        #mainNavbar, #mainNavbar * { box-sizing: border-box; font-family: "Nunito", sans-serif !important; }
        #mainNavbar { box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06) !important; }
        .text-red { color: #e53935 !important; } .bg-red-light { background-color: #ffebee; }
        .btn-red { background-color: #e53935; border-color: #e53935; transition: all 0.2s ease; }
        .btn-red:hover { background-color: #b71c1c; color: white !important; }
        .custom-nav .nav-link { font-size: 0.95rem; font-weight: 600; color: #495057 !important; padding: 0.5rem 0.75rem !important; position: relative; transition: all 0.3s ease; }
        .custom-nav .nav-link.active { color: #e53935 !important; }
        .custom-nav .nav-link.active::after { content: ''; position: absolute; bottom: 5px; left: 0.75rem; width: calc(100% - 1.5rem); height: 2px; background-color: #e53935; border-radius: 2px; }
        .dropdown-toggle::after { display: none !important; } .dropdown-arrow { font-size: 0.7rem; transition: transform 0.2s; }
        .show .dropdown-arrow { transform: rotate(180deg); color: #e53935; } .dropdown-menu { min-width: 200px; margin-top: 10px !important; }
        .dropdown-item { transition: all 0.2s; color: #495057; } .dropdown-item:hover { background-color: #ffebee; color: #e53935; }
        .custom-toggler { border: 1px solid #dee2e6 !important; background: transparent; padding: 10px 12px; border-radius: 6px; display: flex; flex-direction: column; gap: 5px; cursor: pointer; outline: none; transition: all 0.2s ease-in-out; }
        .custom-toggler:focus { box-shadow: 0 0 0 0.25rem rgba(229, 57, 53, 0.2); } .toggler-icon { display: block; width: 22px; height: 2px; background-color: #495057; transition: all 0.3s ease-in-out; }
        .custom-toggler:not(.collapsed), .custom-toggler:hover { border-color: #e53935 !important; } .custom-toggler:not(.collapsed) .toggler-icon, .custom-toggler:hover .toggler-icon { background-color: #e53935; }
        .custom-toggler:not(.collapsed) .top-bar { transform: rotate(45deg) translate(5px, 5px); } .custom-toggler:not(.collapsed) .middle-bar { opacity: 0; } .custom-toggler:not(.collapsed) .bottom-bar { transform: rotate(-45deg) translate(5px, -5px); }
        @media (max-width: 991px) { .navbar-nav { padding-top: 1rem; padding-bottom: 0.5rem; } .custom-nav .nav-link.active::after { bottom: 0px; left: 0.5rem; width: 40px; } .custom-nav .nav-link { padding: 0.6rem 0.5rem !important; } .dropdown-menu { background-color: #f8f9fa; border-radius: 8px !important; margin-top: 5px !important; padding-left: 10px; box-shadow: none !important; } .dropdown-item:active, .dropdown-item:hover { background-color: #ffebee !important; color: #e53935 !important; border-left: 3px solid #e53935; padding-left: 12px !important; } }

        /* Style Konten Box Error 404 Sesuai Foto Contoh */
        body { background-color: #f8f9fa; color: #495057; }
        
        .error-container { 
            min-height: calc(100vh - 94px); 
            display: flex; 
            align-items: center; 
            justify-content: center; 
            padding: 60px 20px; 
        }

        .error-layout-box {
            max-width: 1050px;
            width: 100%;
        }

        .visual-404-side {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
        }

        .huge-number {
            font-size: 9rem;
            font-weight: 900;
            color: #e53935;
            line-height: 1;
            letter-spacing: -2px;
        }

        /* MODIFIKASI: Ditambahkan animasi floating/melayang halus pada lingkaran emoji */
        .emoji-circle-frame {
            width: 130px;
            height: 130px;
            background-color: #ffebee;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #e53935;
            font-size: 4.5rem;
            line-height: 1;
            animation: floatEmoji 3s ease-in-out infinite;
        }

        /* MODIFIKASI: Ditambahkan efek putaran pusing ritmis pada mata/wajah ikon */
        .emoji-circle-frame i {
            display: inline-block;
            animation: dizzyRoll 6s linear infinite;
        }

        .visual-dots {
            display: flex;
            justify-content: center;
            gap: 8px;
            margin-top: 25px;
        }

        /* MODIFIKASI: Tiga bulatan dikasih efek stagger wave (gerak naik-turun bergantian) */
        .dot {
            width: 10px;
            height: 10px;
            border-radius: 50%;
            background-color: #ffebee;
            animation: waveDots 1.5s ease-in-out infinite;
        }
        .dot.active {
            background-color: #e53935;
        }
        /* Penundaan (delay) animasi biar efeknya bergelombang teratur */
        .dot:nth-child(1) { animation-delay: 0s; }
        .dot:nth-child(2) { animation-delay: 0.2s; }
        .dot:nth-child(3) { animation-delay: 0.4s; }

        /* ==========================================================================
           LOGIKA KEYFRAMES ANIMASI GERAK INTERAKTIF
           ========================================================================== */
        /* 1. Animasi Melayang untuk Lingkaran Tengah */
        @keyframes floatEmoji {
            0% { transform: translateY(0px); }
            50% { transform: translateY(-12px); }
            100% { transform: translateY(0px); }
        }

        /* 2. Animasi Goyang Kepala / Pusing Halus untuk Ikon Muka */
        @keyframes dizzyRoll {
            0% { transform: rotate(0deg); }
            25% { transform: rotate(5deg); }
            75% { transform: rotate(-5deg); }
            100% { transform: rotate(0deg); }
        }

        /* 3. Animasi Bergelombang untuk Tiga Bulatan Di Bawah */
        @keyframes waveDots {
            0%, 100% { transform: translateY(0); opacity: 0.6; }
            50% { transform: translateY(-8px); opacity: 1; }
        }

        /* Sisi Kanan: Keterangan Teks & List Checklist */
        .text-404-side { padding-left: 30px; }
        .error-top-badge { background-color: #ffebee; color: #e53935; font-weight: 800; padding: 6px 18px; border-radius: 50px; display: inline-block; font-size: 0.85rem; letter-spacing: 0.5px; margin-bottom: 20px; }
        .main-error-title { font-size: 2.3rem; font-weight: 900; color: #0f172a; line-height: 1.2; margin-bottom: 20px; }
        .checklist-error-instruction { list-style: none; padding-left: 0; margin-bottom: 30px; }
        .checklist-error-instruction li { margin-bottom: 12px; font-size: 1rem; color: #475569; display: flex; align-items: center; gap: 10px; }
        .checklist-error-instruction li i { color: #e53935; font-size: 1.2rem; }

        .btn-back-home {
            background-color: #e53935; color: #ffffff !important; border: 1px solid #c62828; border-radius: 8px; padding: 12px 28px; font-weight: 700; font-size: 0.95rem; box-shadow: 0 4px 0px #c62828; transition: all 0.1s ease; text-decoration: none; display: inline-flex; align-items: center; gap: 8px;
        }
        .btn-back-home:hover { transform: translateY(2px); box-shadow: 0 2px 0px #c62828; }

        @media (max-width: 767px) {
            .error-container { padding: 40px 15px; }
            .text-404-side { padding-left: 0; text-align: center; margin-top: 40px; }
            .checklist-error-instruction li { justify-content: center; text-align: left; }
            .huge-number { font-size: 6.5rem; }
            .emoji-circle-frame { width: 95px; height: 95px; font-size: 3.2rem; }
            .main-error-title { font-size: 1.8rem; }
        }
    </style>
</head>
<body>

    @include('layouts.header')

    <div class="error-container">
        <div class="error-layout-box">
            <div class="row align-items-center">
                
                <div class="col-md-6 text-center">
                    <div class="visual-404-side">
                        <div class="huge-number">4</div>
                        <div class="emoji-circle-frame">
                            <i class="bi bi-emoji-dizzy"></i>
                        </div>
                        <div class="huge-number">4</div>
                    </div>
                    
                    <div class="visual-dots">
                        <div class="dot"></div>
                        <div class="dot active"></div>
                        <div class="dot"></div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="text-404-side">
                        <div class="error-top-badge">ERROR 404</div>
                        
                        <h1 class="main-error-title">
                            Kami tidak dapat menemukan halaman yang Anda cari
                        </h1>
                        
                        <p class="text-muted mb-4 small lh-relaxed">
                            Maaf, tautan atau URL sistem yang Anda tuju kemungkinan salah ketik, sudah dihapus, atau sedang dipindahkan ke alamat menu internal yang baru.
                        </p>

                        <ul class="checklist-error-instruction">
                            <li>
                                <i class="bi bi-check-circle-fill"></i>
                                Pastikan penulisan alamat URL sudah benar dan teliti
                            </li>
                            <li>
                                <i class="bi bi-check-circle-fill"></i>
                                Kembali ke dasbor beranda utama dan navigasi ulang
                            </li>
                            <li>
                                <i class="bi bi-check-circle-fill"></i>
                                Hubungi tim operasional sistem jika terjadi kendala teknis
                            </li>
                        </ul>

                        <div>
                            <a href="{{ url('/') }}" class="btn-back-home">
                                <i class="bi bi-house-door-fill"></i> Kembali ke Dashboard Utama
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    @include('layouts.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        function setActiveMenu(element) {
            document.querySelectorAll('.nav-link').forEach(link => link.classList.remove('active'));
            element.classList.add('active');
        }
        function setDropdownActive(element) {
            document.querySelectorAll('.nav-link').forEach(link => link.classList.remove('active'));
            const parentDropdown = element.closest('.dropdown').querySelector('.dropdown-toggle');
            if (parentDropdown) { parentDropdown.classList.add('active'); }
        }
        function copyPhoneNumber() {
            const phoneText = document.getElementById('phoneNum').innerText;
            navigator.clipboard.writeText(phoneText);
            alert("Nomor telepon berhasil disalin!");
        }
    </script>
</body>
</html>