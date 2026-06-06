<!-- Google Fonts: Nunito (NiceAdmin Style) -->
<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

<nav class="navbar navbar-expand-lg navbar-light bg-white sticky-top shadow-sm py-3" id="mainNavbar">
    <div class="container">
        <a class="navbar-brand d-flex align-items-center" href="#">
            <img src="/logo.png" alt="NH Mitra Beton Logo" style="height: 60px; width: auto; object-fit: contain;">
        </a>
        <button class="navbar-toggler custom-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navContent" aria-controls="navContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="toggler-icon top-bar"></span>
            <span class="toggler-icon middle-bar"></span>
            <span class="toggler-icon bottom-bar"></span>
        </button>

        <div class="collapse navbar-collapse" id="navContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0 align-items-lg-center gap-2 custom-nav">
                <li class="nav-item"><a class="nav-link active" href="#home" onclick="setActiveMenu(this)">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="#about" onclick="setActiveMenu(this)">About</a></li>
                
                <!-- FIX: Services murni membuka dropdown saat diklik, sub-menu mengarah ke #services -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle d-flex align-items-center gap-1" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Services <i class="bi bi-chevron-down dropdown-arrow"></i>
                    </a>
                    <ul class="dropdown-menu border-0 shadow-lg rounded-3 py-2">
                        <li><a class="dropdown-item py-2" href="#services" onclick="setDropdownActive(this)">Product dan layanan</a></li>
                        <li><a class="dropdown-item py-2" href="#how-to-order" onclick="setDropdownActive(this)">Cara Pemesanan</a></li>
                    </ul>
                </li>
                <li class="nav-item"><a class="nav-link" href="#project" onclick="setActiveMenu(this)">Project</a></li>
                
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle d-flex align-items-center gap-1" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Pages <i class="bi bi-chevron-down dropdown-arrow"></i>
                    </a>
                    <ul class="dropdown-menu border-0 shadow-lg rounded-3 py-2">
                        <li><a class="dropdown-item py-2" href="#services" onclick="setDropdownActive(this)">Service Details</a></li>
                        <li><a class="dropdown-item py-2" href="#project" onclick="setDropdownActive(this)">Project Details</a></li>
                    </ul>
                </li>
                
                <li class="nav-item"><a class="nav-link" href="#contact" onclick="setActiveMenu(this)">Contact</a></li>

                <li class="nav-item ms-lg-2 py-2 py-lg-0">
                    <div class="d-flex align-items-center phone-clicker" onclick="copyPhoneNumber()" style="cursor:pointer">
                        <div class="bg-red-light text-red d-flex align-items-center justify-content-center rounded-circle me-2" style="width: 35px; height: 35px;">
                            <i class="bi bi-telephone-fill fs-6"></i>
                        </div>
                        <span class="fw-bold text-red small" id="phoneNum">0812-1283-0218</span>
                    </div>
                </li>
                
                <li class="nav-item ms-lg-2 mt-2 mt-lg-0">
                    <a class="btn btn-red text-white fw-bold px-4 py-2 rounded-pill shadow-sm" href="#contact">Get readymix</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<style>
    /* Menggunakan font Nunito untuk seluruh komponen navbar */
    #mainNavbar, #mainNavbar * {
        box-sizing: border-box;
        font-family: "Nunito", sans-serif !important;
    }

    /* Navbar Shadow tetap tegas */
    #mainNavbar {
        box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06) !important;
    }

    /* Master Skema Warna Merah Baru */
    .text-red { color: #e53935 !important; }
    .bg-red-light { background-color: #ffebee; }
    .btn-red { background-color: #e53935; border-color: #e53935; transition: all 0.2s ease; }
    .btn-red:hover { background-color: #b71c1c; color: white !important; }

    /* Nav Link Merah Minimalis */
    .custom-nav .nav-link {
        font-size: 0.95rem; font-weight: 600; color: #495057 !important;
        padding: 0.5rem 0.75rem !important;
        position: relative;
        transition: all 0.3s ease;
    }

    /* Garis bawah merah untuk menu aktif */
    .custom-nav .nav-link.active {
        color: #e53935 !important;
    }

    .custom-nav .nav-link.active::after {
        content: '';
        position: absolute;
        bottom: 5px;
        left: 0.75rem;
        width: calc(100% - 1.5rem);
        height: 2px;
        background-color: #e53935;
        border-radius: 2px;
    }

    /* Dropdown Settings (Desktop) */
    .dropdown-toggle::after { display: none !important; }
    .dropdown-arrow { font-size: 0.7rem; transition: transform 0.2s; }
    .show .dropdown-arrow { transform: rotate(180deg); color: #e53935; }
    
    .dropdown-menu { min-width: 200px; margin-top: 10px !important; }
    .dropdown-item { transition: all 0.2s; color: #495057; }
    .dropdown-item:hover { background-color: #ffebee; color: #e53935; }

    /* Toggler Hamburger dengan Bingkai Garis di Pojok */
    .custom-toggler {
        border: 1px solid #dee2e6 !important; 
        background: transparent;
        padding: 10px 12px;
        border-radius: 6px;
        display: flex;
        flex-direction: column;
        gap: 5px;
        cursor: pointer;
        outline: none;
        transition: all 0.2s ease-in-out;
    }
    .custom-toggler:focus {
        box-shadow: 0 0 0 0.25rem rgba(229, 57, 53, 0.2);
    }
    
    /* Batang Garis Didalam Hamburger */
    .toggler-icon {
        display: block;
        width: 22px;
        height: 2px;
        background-color: #495057;
        transition: all 0.3s ease-in-out;
    }

    /* Efek Menyala Merah Saat Aktif/Hover */
    .custom-toggler:not(.collapsed),
    .custom-toggler:hover {
        border-color: #e53935 !important; 
    }
    .custom-toggler:not(.collapsed) .toggler-icon,
    .custom-toggler:hover .toggler-icon {
        background-color: #e53935; 
    }

    /* Animasi Silang (X) */
    .custom-toggler:not(.collapsed) .top-bar {
        transform: rotate(45deg) translate(5px, 5px);
    }
    .custom-toggler:not(.collapsed) .middle-bar {
        opacity: 0;
    }
    .custom-toggler:not(.collapsed) .bottom-bar {
        transform: rotate(-45deg) translate(5px, -5px);
    }

    /* Pengaturan Kerapihan & List Dropdown di Mobile */
    @media (max-width: 991px) {
        .navbar-nav { 
            padding-top: 1rem; 
            padding-bottom: 0.5rem;
        }
        .custom-nav .nav-link.active::after {
            bottom: 0px;
            left: 0.5rem;
            width: 40px;
        }
        .custom-nav .nav-link {
            padding: 0.6rem 0.5rem !important;
        }

        .dropdown-menu {
            background-color: #f8f9fa;
            border-radius: 8px !important;
            margin-top: 5px !important;
            padding-left: 10px;
            box-shadow: none !important;
        }

        /* Saat item list dropdown diklik/di-hover di mobile, menyala merah */
        .dropdown-item:active, 
        .dropdown-item:hover {
            background-color: #ffebee !important;
            color: #e53935 !important;
            border-left: 3px solid #e53935;
            padding-left: 12px !important;
        }
    }
</style>

<script>
    // Fungsi mengubah menu aktif untuk tombol link biasa
    function setActiveMenu(element) {
        document.querySelectorAll('.nav-link').forEach(link => link.classList.remove('active'));
        element.classList.add('active');
    }

    // Fungsi khusus saat sub-menu di dalam dropdown diklik
    function setDropdownActive(element) {
        document.querySelectorAll('.nav-link').forEach(link => link.classList.remove('active'));
        // Mencari elemen induk .dropdown lalu mengaktifkan tombol toggle utamanya (Services / Pages)
        const parentDropdown = element.closest('.dropdown').querySelector('.dropdown-toggle');
        if (parentDropdown) {
            parentDropdown.classList.add('active');
        }
    }

    function copyPhoneNumber() {
        const phoneText = document.getElementById('phoneNum').innerText;
        navigator.clipboard.writeText(phoneText);
        alert("Nomor telepon berhasil disalin!");
    }
</script>