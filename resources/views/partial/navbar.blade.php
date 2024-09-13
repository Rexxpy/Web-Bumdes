<header>

    <nav class="navbar navbar-expand-md">

    <div class="container-fluid">
        <a class="navbar-brand">
        <img src="../image/logo mojo.png" alt="logo" width="15%">
        BUMDES TAWAR
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-expanded="true" aria-controls="offcanvasNavbar">
        <span class="navbar-toggler-icon"></span>
        </button>

        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
        
        <div class="offcanvas-header">
            <h1 class="offcanvas-title" id="offcanvasNavbarLabel">Menu</h5>
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>

        <div class="offcanvas-body" id="navbarNav">
            <ul class="navbar-nav ms-auto">
            <li class="nav-item">
                <a class="nav-link" aria-current="page" href="/">Home</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle mx-lg-2" href="#" id="navbarDropdown" role="button"data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Profil
                </a>
                <div class="dropdown-menu">
                <a class="dropdown-item" href="/tentang">Tentang Bumdes</a>
                <a class="dropdown-item" href="/sto">Struktur Organisasi</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle mx-lg-2" href="#" id="navbarDropdown" role="button"data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        UMKM
                </a>
                <div class="dropdown-menu">
                <a class="dropdown-item" href="/produk">Produk</a>
                <a class="dropdown-item" href="/jasa">Jasa</a>
                <a class="dropdown-item" href="/wisata">Wisata</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link mx-lg-2" aria-current="page" href="/kegiatan">Kegiatan</a>
            </li>
            <li class="nav-item">
                <a class="nav-link mx-lg-2" aria-current="page" href="/kontak">Kontak</a>
            </li>        
            </ul>
        </div>
        </div>

    </div>
    </nav>

    <nav aria-label="breadcrumb">      
        <ol class="breadcrumb breadcrumb-chevron p-3">
            <li class="breadcrumb-item">
                <a class="link-body-emphasis" href="/">
                    Home
                </a>
            </li>
            @if(str_contains(Route::currentRouteName(), 'deskripsi'))
                <li class="breadcrumb-item fw-semibold active" aria-current="page">
                    <a href="{{ url()->previous() }}">
                        {{$navData}}
                    </a>
                </li>
            @else
                <li class="breadcrumb-item fw-semibold active" aria-current="page">
                    {{$navData}}
                </li>
            @endif
            
            @isset($navData2)
                <li class="breadcrumb-item fw-semibold active" aria-current="page">
                    {{$navData2}}
                </li>
            @endisset
        </ol>
    </nav>

</header>