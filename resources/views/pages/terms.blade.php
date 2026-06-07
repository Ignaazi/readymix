<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Terms of Service - Pemesanan Ready Mix</title>
    
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

        /* UPDATE: Mengembalikan Judul Utama ke posisi tengah */
        .terms-header-title {
            font-size: 2.8rem;
            font-weight: 900;
            color: #0f172a;
            margin-bottom: 12px;
            text-align: center;
        }

        /* UPDATE: Mengembalikan Subtitle ke posisi tengah */
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
                <div class="terms-badge">Terakhir Diperbarui: 7 Juni 2026</div>
                <h1 class="terms-header-title">Terms of Service</h1>
                <p class="terms-subtitle">Ketentuan Layanan Pemesanan Pengiriman Beton Cor Ready Mix Resmi</p>
            </div>

            <h2 class="terms-section-title">
                <i class="bi bi-file-earmark-text-fill"></i> 1. Ketentuan Umum Pemesanan
            </h2>
            <p class="terms-text">
                Website ini berfungsi sebagai media informasi produk dan layanan pengadaan beton cor (Ready Mix). Segala bentuk transaksi, negosiasi harga, dan kesepakatan volume kubikasi ($m^3$) dilakukan secara langsung dengan menghubungi nomor telepon atau informasi kontak resmi yang tertera pada website ini.
            </p>

            <h2 class="terms-section-title">
                <i class="bi bi-truck"></i> 2. Akses Jalan & Armada Pengiriman
            </h2>
            <p class="terms-text">
                Pembeli wajib memastikan bahwa rute jalan menuju lokasi proyek pengecoran dapat dilalui oleh armada truk molen (baik ukuran standar maupun truk molen mini/colt diesel) tanpa hambatan fisik seperti portal yang terlalu rendah, kabel yang melintang rendah, ataupun jembatan dengan tonase rendah.
            </p>
            <ul class="terms-list">
                <li>Izin lingkungan, koordinasi dengan warga setempat, atau pungutan keamanan lokal sepenuhnya menjadi tanggung jawab pihak pembeli.</li>
                <li>Apabila truk molen tidak dapat mencapai titik bongkar akibat kendala akses yang belum dipersiapkan, kerugian waktu atau penurunan kualitas beton di luar tanggung jawab kami.</li>
            </ul>

            <div class="terms-flat-note">
                <i class="bi bi-exclamation-triangle-fill"></i>
                <span>Catatan Penting: Penambahan alat bantu seperti Concrete Pump (Pompa Beton) wajib dikoordinasikan terlebih dahulu saat menghubungi kontak kami.</span>
            </div>

            <h2 class="terms-section-title">
                <i class="bi bi-droplet-half"></i> 3. Mutu Beton & Pengujian di Lapangan
            </h2>
            <p class="terms-text">
                Mutu beton Ready Mix yang dikirimkan (misal: K-225, K-250, K-300, dll) diproduksi berdasarkan standar mutu formulasi yang ketat. Pembeli dilarang keras menambahkan air secara mandiri ke dalam tangki truk molen di lokasi proyek karena tindakan tersebut dapat menurunkan nilai kuat tekan beton secara drastis dan membatalkan garansi mutu kami.
            </p>

            <h2 class="terms-section-title">
                <i class="bi bi-telephone-inbound-fill"></i> 4. Informasi Kontak & Validasi Pembayaran
            </h2>
            <p class="terms-text">
                Segala komunikasi instruksi pembayaran DP (Down Payment) maupun pelunasan hanya dianggap sah jika bersumber dari instruksi nomor kontak atau rekening bank resmi perusahaan yang diberikan secara langsung melalui kanal informasi di website ini. Kami tidak bertanggung jawab atas transaksi yang mengatasnamakan pihak ketiga tanpa konfirmasi tertulis dari manajemen kami.
            </p>

            <h2 class="terms-section-title">
                <i class="bi bi-calendar-x-fill"></i> 5. Pembatalan & Perubahan Jadwal Pengecoran
            </h2>
            <p class="terms-text">
                Mengingat beton Ready Mix adalah material yang terikat waktu pengerasan, pembatalan atau penundaan jadwal pengecoran (misalnya akibat kendala cuaca buruk/hujan deras) wajib diinformasikan kepada layanan kontak kami selambat-lambatnya 1 (satu) hari sebelum jadwal pengiriman yang telah disepakati bersama.
            </p>

            <h2 class="terms-section-title">
                <i class="bi bi-shield-fill-check"></i> 6. Batasan Tanggung Jawab Pengembang Website
            </h2>
            <p class="terms-text">
                Website ini dikembangkan murni sebagai platform digital untuk menghubungkan calon konsumen ke nomor penyedia jasa Ready Mix. Pengembang website (*developer*) tidak bertanggung jawab atas sengketa kualitas material di lapangan, keterlambatan armada truk karena kemacetan lalu lintas, maupun kesepakatan harga sepihak antara konsumen dan pihak operasional pengelola beton.
            </p>

        </div>
    </div>

    @include('layouts.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>