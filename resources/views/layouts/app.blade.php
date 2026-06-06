<!DOCTYPE html>
<html lang="id" style="scroll-behavior: smooth;">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Readymix Beton Indonesia</title>
    @vite(['resources/css/app.scss', 'resources/js/app.js'])
</head>
<body class="d-flex flex-column min-vh-100 bg-light"> 

    @include('layouts.header')

    <main class="flex-grow-1">
        
        @if(Request::is('/'))
            
            <div id="home">
                @include('layouts.home')
            </div>

            <div id="about">
                @include('layouts.about')
            </div>

            <div id="services">
                @include('layouts.productlayanan')
            </div>

            <div id="how-to-order">
                @include('layouts.carapemesanan')
            </div>

            <div id="project">
                {{-- @include('layouts.project') --}}
            </div>

            <div id="contact">
                {{-- @include('layouts.contact') --}}
            </div>

        @else
            @yield('content')
        @endif

    </main>

    @include('layouts.footer')

</body>
</html>