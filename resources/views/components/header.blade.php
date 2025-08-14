<header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

        <a href="index.html" class="logo d-flex align-items-center">
            <!-- Uncomment the line below if you also wish to use an image logo -->
            <img src="{{ asset('/assets/img/logo-yayasan.png') }}" alt="" class="p-3">
            {{-- <img src="{{ asset('/bootslander/assets/img/logo.png') }}" alt=""> --}}
            {{-- <h1 class="sitename">Logo</h1> --}}
        </a>

        <nav id="navmenu" class="navmenu">
            <ul>
                <li><a href="{{ url('/') }}" class="{{ Request::is('/') ? 'active' : '' }}">Home</a></li>
                <li><a href="{{ url('/donasi') }}" class="{{ Request::is('donatur') ? 'active' : '' }}">Donasi</a></li>
                <li><a href="{{ url('/daftar-program') }}"
                        class="{{ Request::is('daftar-program') ? 'active' : '' }}">Program</a></li>
                {{-- <li><a href="{{ url('/galery') }}" class="{{ Request::is('galery') ? 'active' : '' }}">Galery</a></li> --}}
                {{-- <li><a href="#team">Team</a></li> --}}
                <li><a href="{{ url('/pengembangan') }}">Data Anak Yatim</a></li>
                {{-- <li class="dropdown"><a href="#"><span>Update Kegiatan</span> <i
                            class="bi bi-chevron-down toggle-dropdown"></i></a>
                    <ul>
                        <li><a href="#">Galeri Distribusi Fidyah</a></li>
                        <li><a href="#">Galeri Distribusi Wakaf Qur'an</a></li>
                        <li><a href="#">Galeri Kegiatan Santri</a></li>
                        <li class="dropdown"><a href="#"><span>Deep Dropdown</span> <i
                                    class="bi bi-chevron-down toggle-dropdown"></i></a>
                            <ul>
                                <li><a href="#">Deep Dropdown 1</a></li>
                                <li><a href="#">Deep Dropdown 2</a></li>
                                <li><a href="#">Deep Dropdown 3</a></li>
                                <li><a href="#">Deep Dropdown 4</a></li>
                                <li><a href="#">Deep Dropdown 5</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Dropdown 2</a></li>
                        <li><a href="#">Dropdown 3</a></li>
                        <li><a href="#">Dropdown 4</a></li>
                    </ul>
                </li> --}}
                <li><a href="{{ url('/about') }}" class="{{ Request::is('about') ? 'active' : '' }}">Tentang Kami</a>
                </li>
                <li><a href="{{ url('/contact') }}" class="{{ Request::is('contact') ? 'active' : '' }}">Kontak</a>
                </li>
            </ul>
            <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>

    </div>
</header>
