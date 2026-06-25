<nav class="navbar navbar-expand-lg navbar-light bg-white sticky-top shadow-sm py-1" id="mainNavbar">
    <div class="container">
        <a class="navbar-brand d-flex align-items-center" href="{{ url('/') }}">
            <img src="{{ asset('logo.webp') }}" alt="NH Mitra Beton Logo" style="height: 48px; width: auto; object-fit: contain;">
        </a>
        <button class="navbar-toggler custom-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navContent" aria-controls="navContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="toggler-icon top-bar"></span>
            <span class="toggler-icon middle-bar"></span>
            <span class="toggler-icon bottom-bar"></span>
        </button>

        <div class="collapse navbar-collapse" id="navContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0 align-items-lg-center gap-2 custom-nav">
                <li class="nav-item"><a class="nav-link active" href="{{ url('/#home') }}" onclick="setActiveMenu(this)">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ url('/#about') }}" onclick="setActiveMenu(this)">About</a></li>
                
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle d-flex align-items-center gap-1" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Services <i class="bi bi-chevron-down dropdown-arrow"></i>
                    </a>
                    <ul class="dropdown-menu border-0 shadow-lg rounded-3 py-2">
                        <li><a class="dropdown-item py-2" href="{{ url('/#services') }}" onclick="setDropdownActive(this)">Product dan layanan</a></li>
                        <li><a class="dropdown-item py-2" href="{{ url('/#how-to-order') }}" onclick="setDropdownActive(this)">Cara Pemesanan</a></li>
                    </ul>
                </li>
                <li class="nav-item"><a class="nav-link" href="{{ url('/#project') }}" onclick="setActiveMenu(this)">Project</a></li>
                
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle d-flex align-items-center gap-1" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Pages <i class="bi bi-chevron-down dropdown-arrow"></i>
                    </a>
                    <ul class="dropdown-menu border-0 shadow-lg rounded-3 py-2">
                        <li><a class="dropdown-item py-2" href="{{ url('/#services') }}" onclick="setDropdownActive(this)">Service Details</a></li>
                        <li><a class="dropdown-item py-2" href="{{ url('/#project') }}" onclick="setDropdownActive(this)">Project Details</a></li>
                        <li><a class="dropdown-item py-2" href="{{ url('/term') }}">Term</a></li>
                        <li><a class="dropdown-item py-2" href="{{ url('/privacy') }}">Privacy</a></li>
                        <li><a class="dropdown-item py-2" href="{{ url('/404') }}">404</a></li>
                    </ul>
                </li>
                
                <li class="nav-item"><a class="nav-link" href="{{ url('/#contact') }}" onclick="setActiveMenu(this)">Contact</a></li>

                <li class="nav-item ms-lg-2 py-2 py-lg-0">
                    <div class="d-flex align-items-center phone-clicker" onclick="copyPhoneNumber()" style="cursor:pointer">
                        <div class="bg-red-light text-red d-flex align-items-center justify-content-center rounded-circle me-2" style="width: 35px; height: 35px;">
                            <i class="bi bi-telephone-fill fs-6"></i>
                        </div>
                        <span class="fw-bold text-red small header-phone-text" id="phoneNum">0812-1283-0218</span>
                    </div>
                </li>
                
                <li class="nav-item ms-lg-2 mt-2 mt-lg-0">
                    <a class="btn btn-red text-white fw-bold px-4 py-2 rounded-pill shadow-sm btn-get-readymix" href="{{ url('/#contact') }}">Get readymix</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
