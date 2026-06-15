<!DOCTYPE html>
<html lang="id" style="scroll-behavior: smooth;">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Readymix Beton Indonesia</title>
    
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/favicon-96x96.png">
    <link rel="icon" type="image/svg+xml" href="/favicon.svg">
    <link rel="shortcut icon" href="/favicon.ico">
    <link rel="manifest" href="/site.webmanifest">
    <meta name="apple-mobile-web-app-title" content="Readymixnh">
    <meta name="theme-color" content="#000000">

    @vite(['resources/css/app.scss', 'resources/js/app.js'])
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
                {{-- @include('sections.project') --}}
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