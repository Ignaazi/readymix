@extends('layouts.app')

@section('content')
<div class="error-container">
    <div class="error-layout-box">
        <div class="row align-items-center">
            
            <!-- Bagian Kiri: Visual Angka Kembar 404 Interaktif & Animasi Melayang -->
            <div class="col-md-5 text-center">
                <div class="visual-404-side">
                    <span class="huge-number">4</span>
                    
                    <!-- Lingkaran emoji yang melayang -->
                    <div class="emoji-circle-frame">
                        <i class="bi bi-emoji-dizzy-fill"></i>
                    </div>
                    
                    <span class="huge-number">4</span>
                </div>
                
                <!-- Tiga dot bulat dengan animasi stagger wave/bergelombang -->
                <div class="visual-dots">
                    <span class="dot"></span>
                    <span class="dot active"></span>
                    <span class="dot"></span>
                </div>
            </div>

            <!-- Bagian Kanan: Judul, Daftar Checklist Instruksi, & Tombol Kembali -->
            <div class="col-md-7">
                <div class="text-404-side">
                    <div class="error-top-badge">ERROR PAGE NOT FOUND</div>
                    <h1 class="main-error-title">Maaf, Halaman Yang Anda Cari Tidak Ditemukan!</h1>
                    
                    <ul class="checklist-error-instruction">
                        <li><i class="bi bi-check-circle-fill"></i> Periksa kembali pengetikan URL/link pada address bar browser Anda.</li>
                        <li><i class="bi bi-check-circle-fill"></i> Halaman mungkin telah dipindahkan, diubah namanya, atau sedang dinonaktifkan.</li>
                        <li><i class="bi bi-check-circle-fill"></i> Hubungi tim support @ajitech jika kendala ini terus berlanjut.</li>
                    </ul>

                    <!-- Tombol Kembali Ke Homepage yang Menarik -->
                    <a href="{{ url('/') }}" class="btn-back-home shadow-sm">
                        <i class="bi bi-house-door-fill"></i> Kembali ke Beranda
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection