<!DOCTYPE html>
<html lang="id" style="scroll-behavior: smooth;">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Produsen Beton Readymix JABODETABEK & Jasa Cor Pompa Beton | Readymix Nuhaldi')</title>

    <!-- SEO Meta Tags -->
    <meta name="description" content="Supplier beton cor jayamix, minimix, dan sewa pompa beton (concrete pump) berkualitas standar SNI untuk area Jakarta, Bogor, Depok, Tangerang, Bekasi, dan Cikarang.">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="{{ request()->url() }}">

    <!-- Open Graph / Facebook / WhatsApp -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ request()->url() }}">
    <meta property="og:title" content="Produsen Beton Readymix JABODETABEK | Readymix Nuhaldi">
    <meta property="og:description" content="Supplier beton cor jayamix, minimix, dan sewa pompa beton berkualitas SNI untuk area JABODETABEK dan sekitarnya. Hubungi kami untuk penawaran harga terbaik.">
    <meta property="og:image" content="{{ asset('logo.webp') }}">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="{{ request()->url() }}">
    <meta property="twitter:title" content="Produsen Beton Readymix JABODETABEK | Readymix Nuhaldi">
    <meta property="twitter:description" content="Supplier beton cor jayamix, minimix, dan sewa pompa beton berkualitas SNI untuk area JABODETABEK.">
    <meta property="twitter:image" content="{{ asset('logo.webp') }}">
    
<!-- 🚀 LOGO TAB BROWSER BARU (FAVICON) 🚀 -->
    <link class="apple-touch-icon" sizes="180x180" href="{{ asset('apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('favicon-96x96.png') }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
    <link rel="manifest" href="{{ asset('site.webmanifest') }}">
    
    <!-- Meta Pembantu -->
    <meta name="apple-mobile-web-app-title" content="Readymixnh">
    <meta name="theme-color" content="#000000">

    <!-- 🚀 GOOGLE FONTS 🚀 -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">

    <!-- ⚡ KONTROL UTAMA FRONT-END (VITE CHANNELS) -->
    @vite(['resources/css/app.scss', 'resources/js/app.js'])

    <!-- 🚀 PRELOAD LCP HERO IMAGE 🚀 -->
    <link rel="preload" as="image" href="{{ asset('pic1.webp') }}" fetchpriority="high">
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