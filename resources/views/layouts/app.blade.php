<!-- resources/views/layouts/app.blade.php -->
<!DOCTYPE html>
<html lang="id" style="scroll-behavior: smooth;">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Readymix Beton Indonesia</title>
    @vite(['resources/css/app.scss', 'resources/js/app.js'])
</head>
<body class="d-flex flex-column min-vh-100 bg-light"> 

    <!-- Navigasi / Header Menu -->
    @include('layouts.header')

    <!-- Konten Utama Landing Page (One-Page Scroll) -->
    <main class="flex-grow-1">
        
        @if(Request::is('/'))
            
            <!-- SECTION 1: Home (Tampilan Utama Sambutan) -->
            <div id="home">
                @include('layouts.home')
            </div>

            <!-- SECTION 2: Services / Layanan & Produk -->
            <!-- Di-komen sementara agar tidak error sebelum file layouts/services.blade.php dibuat -->
            <div id="services">
                {{-- @include('layouts.services') --}}
            </div>

            <!-- SECTION 3: About / Tentang PT (Profil Sejarah/Visi Misi) -->
            <div id="about">
                @include('layouts.about')
            </div>

            <!-- SECTION 4: Project / Portofolio Konstruksi -->
            <!-- Di-komen sementara agar tidak error sebelum file layouts/project.blade.php dibuat -->
            <div id="project">
                {{-- @include('layouts.project') --}}
            </div>

            <!-- SECTION 5: Contact / Form & Informasi Hubungi Kami -->
            <!-- Di-komen sementara agar tidak error sebelum file layouts/contact.blade.php dibuat -->
            <div id="contact">
                {{-- @include('layouts.contact') --}}
            </div>

        @else
            @yield('content')
        @endif

    </main>

    <!-- Kaki Halaman / Footer -->
    @include('layouts.footer')

</body>
</html>