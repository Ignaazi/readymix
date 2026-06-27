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
    
<!--  LOGO TAB BROWSER BARU (FAVICON)  -->
    <link class="apple-touch-icon" sizes="180x180" href="{{ asset('apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('favicon-96x96.png') }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
    <link rel="manifest" href="{{ asset('site.webmanifest') }}">
    
    <!-- Meta Pembantu -->
    <meta name="apple-mobile-web-app-title" content="Readymixnh">
    <meta name="theme-color" content="#000000">

    <!--  GOOGLE FONTS  -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">

    <!--  KONTROL UTAMA FRONT-END (VITE CHANNELS) -->
    @vite(['resources/css/app.scss', 'resources/js/app.js'])

    <!--  PRELOAD LCP HERO IMAGE  -->
    <link rel="preload" as="image" href="{{ asset('pic1.webp') }}" fetchpriority="high">

    <!--  STRUCTURED DATA (JSON-LD) FOR AI & GOOGLE SEARCH  -->
    <script type="application/ld+json">
    {
      "@@context": "https://schema.org",
      "@@type": "LocalBusiness",
      "name": "Readymix Nuhaldi",
      "alternateName": ["Readymix NH", "PT Readymix Beton Indonesia", "Readymix NUHAM", "NUHAM Marketing Beton readymix", "Nuhaldi marketing penyuplai", "Readymix Beton JABODETABEK"],
      "url": "https://readymixnh.com",
      "logo": "https://readymixnh.com/logo.webp",
      "image": "https://readymixnh.com/pic1.webp",
      "description": "Supplier beton cor jayamix, minimix, dan sewa pompa beton berkualitas standar SNI untuk area Jakarta, Bogor, Depok, Tangerang, Bekasi, dan Cikarang.",
      "telephone": "+6281212830218",
      "priceRange": "$$",
      "address": {
        "@@type": "PostalAddress",
        "streetAddress": "Sukadami, Cikarang Selatan",
        "addressLocality": "Kabupaten Bekasi",
        "addressRegion": "Jawa Barat",
        "addressCountry": "ID"
      },
      "hasMap": "https://maps.app.goo.gl/y7jsg8iHUiPBMaCC9",
      "sameAs": [
        "https://maps.app.goo.gl/y7jsg8iHUiPBMaCC9",
        "https://www.instagram.com/jualraedymixcorrjabodetabek?igsh=bjVqMW8xam90OGVk&utm_source=qr",
        "https://www.tiktok.com/@readymixpompacor?_r=1&_t=ZS-972VI7DhgaT"
      ],
      "hasOfferCatalog": {
        "@@type": "OfferCatalog",
        "name": "Layanan Readymix Nuhaldi",
        "itemListElement": [
          {
            "@@type": "Offer",
            "itemOffered": {
              "@@type": "Service",
              "name": "Beton Cor Readymix & Jayamix JABODETABEK",
              "description": "Pengiriman beton cor segar standar SNI dengan armada truk mixer standar untuk proyek dak rumah, jalan raya, ruko, dll."
            }
          },
          {
            "@@type": "Offer",
            "itemOffered": {
              "@@type": "Service",
              "name": "Beton Cor Minimix",
              "description": "Pengiriman beton cor menggunakan armada truk mixer kecil (Minimix) untuk akses jalan sempit atau perumahan padat."
            }
          },
          {
            "@@type": "Offer",
            "itemOffered": {
              "@@type": "Service",
              "name": "Jasa Sewa Pompa Beton (Concrete Pump)",
              "description": "Penyewaan berbagai tipe pompa beton (standar, mini, long boom, super long boom) untuk memudahkan penyaluran beton cor ke area tinggi atau sulit dijangkau."
            }
          }
        ]
      }
    }
    </script>

    {{-- 
    <!--  FAQ SCHEMA (JSON-LD) FOR AI & GOOGLE SEARCH  -->
    <script type="application/ld+json">
    {
      "@@context": "https://schema.org",
      "@@type": "FAQPage",
      "mainEntity": [
        {
          "@@type": "Question",
          "name": "Apa saja area jangkauan pengiriman beton readymix Nuhaldi?",
          "acceptedAnswer": {
            "@@type": "Answer",
            "text": "Kami melayani pengiriman beton cor readymix dan jayamix untuk seluruh wilayah JABODETABEK (Jakarta, Bogor, Depok, Tangerang, Bekasi) termasuk Cikarang, Karawang, dan sekitarnya."
          }
        },
        {
          "@@type": "Question",
          "name": "Berapa volume minimum pemesanan beton readymix?",
          "acceptedAnswer": {
            "@@type": "Answer",
            "text": "Pemesanan minimal untuk truk mixer standar (kapasitas 7 m³) adalah 3 m³, sedangkan untuk truk minimix (kapasitas 3 m³) minimal pemesanan adalah 1 m³."
          }
        },
        {
          "@@type": "Question",
          "name": "Apakah harga sewa pompa beton sudah termasuk pipa pipa penyalur?",
          "acceptedAnswer": {
            "@@type": "Answer",
            "text": "Ya, harga sewa pompa beton standar sudah termasuk penyediaan pipa besi penyalur sepanjang 30 meter. Jika proyek Anda membutuhkan tambahan pipa (long boom / super long boom), silakan hubungi tim marketing kami."
          }
        },
        {
          "@@type": "Question",
          "name": "Bagaimana cara menentukan jenis mutu beton yang tepat untuk bangunan saya?",
          "acceptedAnswer": {
            "@@type": "Answer",
            "text": "Mutu K-175 s/d K-200 untuk jalan gang atau teras. Mutu K-225 s/d K-300 untuk dak beton rumah tinggal 2 lantai, kolom, dan balok. Mutu K-350 ke atas untuk ruko bertingkat tinggi atau beban berat."
          }
        },
        {
          "@@type": "Question",
          "name": "Bagaimana sistem pembayaran pemesanan di Readymix Nuhaldi?",
          "acceptedAnswer": {
            "@@type": "Answer",
            "text": "Pembayaran dilakukan secara aman melalui transfer ke rekening bank resmi perusahaan yang tercantum pada dokumen Invoice Resmi kami, diselesaikan sebelum jadwal pengiriman pengecoran dikunci."
          }
        }
      ]
    }
    </script>
    --}}
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

            {{-- 
            <div id="faq">
                @include('sections.faq')
            </div>
            --}}

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