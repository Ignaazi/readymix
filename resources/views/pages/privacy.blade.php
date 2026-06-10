<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Privacy Policy - Pemesanan Ready Mix</title>
    
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <style>
        /* PANGGIL CSS KHUSUS NAVBAR (Disamakan dengan tema sistem) */
        #mainNavbar, #mainNavbar * { box-sizing: border-box; font-family: "Nunito", sans-serif !important; }
        #mainNavbar { box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06) !important; }
        .text-red { color: #e53935 !important; } .bg-red-light { background-color: #ffebee; }
        .btn-red { background-color: #e53935; border-color: #e53935; transition: all 0.2s ease; }
        .btn-red:hover { background-color: #b71c1c; color: white !important; }
        
        body { background-color: #f8f9fa; color: #334155; font-family: "Nunito", sans-serif; }
        
        .terms-wrapper {
            padding: 60px 20px;
            min-height: calc(100vh - 94px);
        }
        
        .terms-container {
            max-width: 1150px;
            margin: 0 auto;
            background: transparent;
            padding: 0;
            box-shadow: none;
        }

        /* Badge tanggal dibuat memusat di tengah */
        .terms-badge {
            background-color: #ffebee;
            color: #e53935;
            font-weight: 800;
            padding: 6px 20px;
            border-radius: 50px;
            display: inline-block;
            font-size: 0.85rem;
            margin-bottom: 20px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        /* Judul Utama posisi tengah */
        .terms-header-title {
            font-size: 2.8rem;
            font-weight: 900;
            color: #0f172a;
            margin-bottom: 12px;
            text-align: center;
        }

        /* Subtitle posisi tengah */
        .terms-subtitle {
            font-size: 1.1rem;
            color: #64748b;
            margin-bottom: 40px;
            text-align: center;
        }

        .terms-section-title {
            font-size: 1.4rem;
            font-weight: 800;
            color: #0f172a;
            margin-top: 35px;
            margin-bottom: 15px;
            display: flex;
            align-items: center;
            gap: 10px;
            text-align: left;
        }

        .terms-section-title i {
            color: #e53935;
            font-size: 1.3rem;
        }

        .terms-text {
            font-size: 1rem;
            line-height: 1.7;
            color: #475569;
            margin-bottom: 20px;
            text-align: justify;
        }

        .terms-list {
            list-style: none;
            padding-left: 0;
            margin-bottom: 25px;
        }

        .terms-list li {
            position: relative;
            padding-left: 28px;
            margin-bottom: 12px;
            font-size: 1rem;
            color: #475569;
            line-height: 1.6;
            text-align: left;
        }

        .terms-list li::before {
            content: "\f270"; 
            font-family: "bootstrap-icons";
            color: #e53935;
            font-size: 1.1rem;
            position: absolute;
            left: 0;
            top: 1px;
        }

        .terms-flat-note {
            padding: 15px 0;
            margin: 20px 0;
            border-top: 1px dashed #cbd5e1;
            border-bottom: 1px dashed #cbd5e1;
            color: #64748b;
            font-style: italic;
            font-size: 0.95rem;
            display: flex;
            align-items: center;
            gap: 10px;
            text-align: left;
        }
        
        .terms-flat-note i {
            color: #e53935;
            font-size: 1.2rem;
            font-style: normal;
        }

        @media (max-width: 768px) {
            .terms-header-title { font-size: 2.2rem; }
            .terms-section-title { font-size: 1.25rem; }
            .terms-text { text-align: left; }
        }
    </style>
</head>
<body>

    @include('layouts.header')

    <div class="terms-wrapper">
        <div class="terms-container">
            
            <div class="text-center mb-5">
                <div class="terms-badge">Terakhir Diperbarui: 10 Juni 2026</div>
                <h1 class="terms-header-title">Privacy Policy</h1>
                <p class="terms-subtitle">Kebijakan Privasi Perlindungan Data Pengguna Perlindungan Konsumen</p>
            </div>

            <h2 class="terms-section-title">
                <i class="bi bi-shield-lock-fill"></i> 1. Pengumpulan Informasi Pribadi
            </h2>
            <p class="terms-text">
                Kami sangat menghargai privasi Anda sebagai calon pelanggan kami. Saat Anda menggunakan layanan atau mengajukan penawaran harga melalui website ini, kami mengumpulkan data yang Anda berikan secara sukarela berupa nama, nomor telepon aktif (WhatsApp), lokasi/alamat proyek pengecoran, serta estimasi volume kebutuhan beton cor Ready Mix Anda.
            </p>

            <h2 class="terms-section-title">
                <i class="bi bi-eye-fill"></i> 2. Penggunaan Data Pengguna
            </h2>
            <p class="terms-text">
                Semua data pribadi yang kami kumpulkan dari Anda hanya akan digunakan untuk kepentingan operasional internal pemesanan beton cor, yang meliputi:
            </p>
            <ul class="terms-list">
                <li>Memproses kalkulasi total biaya dan pembuatan surat penawaran harga resmi beton Ready Mix.</li>
                <li>Melakukan validasi rute jalan armada truk molen serta menentukan rute pengiriman dari batching plant terdekat ke lokasi proyek Anda.</li>
                <li>Menghubungi Anda kembali terkait jadwal, perubahan waktu, atau konfirmasi ketersediaan alat bantu Concrete Pump di lokasi.</li>
            </ul>

            <div class="terms-flat-note">
                <i class="bi bi-shield-fill-check"></i>
                <span>Jaminan Keamanan: Kami berkomitmen penuh untuk tidak menjual, menyewakan, atau menyalahgunakan data kontak Anda kepada pihak iklan ketiga di luar manajemen kami.</span>
            </div>

            <h2 class="terms-section-title">
                <i class="bi bi-patch-check-fill"></i> 3. Keamanan Informasi Kontak Anda
            </h2>
            <p class="terms-text">
                Kami menerapkan langkah-langkah keamanan digital yang ketat untuk memastikan data nomor telepon dan alamat proyek Anda tidak diakses oleh pihak luar. Setiap komunikasi pengiriman invoice atau instruksi pembayaran hanya dilakukan melalui jalur nomor kontak resmi yang tertera langsung di website ini demi menghindari tindak penipuan.
            </p>

            <h2 class="terms-section-title">
                <i class="bi bi-cookie"></i> 4. Penggunaan Cookies Browser
            </h2>
            <p class="terms-text">
                Website ini dapat menggunakan fitur <em>cookies</em> untuk merekam sisa riwayat pencarian atau mengoptimalkan kecepatan akses halaman browser saat Anda berkunjung kembali. Fitur cookies ini tidak digunakan untuk mencuri data rahasia atau memata-matai aktivitas pribadi pada HP/laptop Anda.
            </p>

            <h2 class="terms-section-title">
                <i class="bi bi-exclamation-octagon-fill"></i> 5. Perubahan Kebijakan Privasi
            </h2>
            <p class="terms-text">
                Manajemen kami berhak untuk memperbarui halaman Kebijakan Privasi ini sewaktu-waktu seiring dengan perkembangan layanan sistem distribusi semen dan beton cor kami. Anda disarankan untuk memeriksa halaman ini secara berkala guna memastikan Anda selalu mengetahui komitmen perlindungan data terbaru dari kami.
            </p>

        </div>
    </div>

    @include('layouts.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>