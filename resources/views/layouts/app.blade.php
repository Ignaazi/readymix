<!DOCTYPE html>
<html lang="id" style="scroll-behavior: smooth;">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Readymix Beton Indonesia</title>
    
<!-- 🚀 LOGO TAB BROWSER BARU (FAVICON) 🚀 -->
    <link class="apple-touch-icon" sizes="180x180" href="{{ asset('apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('favicon-96x96.png') }}">
    <link rel="icon" type="image/svg+xml" href="{{ asset('favicon.svg') }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
    <link rel="manifest" href="{{ asset('site.webmanifest') }}">
    
    <!-- Meta Pembantu -->
    <meta name="apple-mobile-web-app-title" content="Readymixnh">
    <meta name="theme-color" content="#000000">

    <!-- ⚡ KONTROL UTAMA FRONT-END (VITE CHANNELS) -->
    @vite(['resources/css/app.scss', 'resources/js/app.js'])

    {{-- ini buat cdn boostrp 1 --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body class="d-flex flex-column min-vh-100 bg-light"> 

    @include('layouts.header')

    <main class="flex-grow-1">
        
        @if(Request::is('/'))
            
            <div id="home">
                @include('sections.home')
            </div>

            <div id="about">
                @include('sections.about')
            </div>

            <div id="services">
                @include('sections.productlayanan')
            </div>

            <div id="how-to-order">
                @include('sections.carapemesanan')
            </div>

            
            <div id="project">
                @include('sections.project')
            </div>

            <div id="testimonial">
                @include('sections.testimonial')
            </div>

            <div id="contact">
                @include('sections.contact')
            </div>
        @else
            @yield('content')
        @endif

    </main>

    @include('layouts.footer')

</body>
</html>