<section id="donasi" class="about section">
    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
        <h2>Donasi</h2>
        <div><span class="description-title">Program Donasi Sementara Berjalan</span></div>
    </div><!-- End Section Title -->

    <div class="container">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
            {{-- perbaikan gedung --}}
            <div class="col" data-aos="fade-up" data-aos-delay="100">
                <div class="card shadow-sm">
                    <img src="{{ asset('assets/img/foto-donasi/a-4.png') }}" alt="">
                    <div class="card-body">
                        <h5 class="fw-bold">Bantu Perbaiki Ruang Belajar Santri</h5>
                        <span><b>Rp 4.700.000,-</b> <small>terkumpul</small></span>
                        <hr>
                        <div class="d-flex justify-content-between">
                            <a href="{{ route('gedung.santri') }}" class="btn btn-sm btn-warning">Selengkapnya</a>
                            {{-- <div class=" btn-group">
                                <button class="btn btn-sm btn-success" onclick="shareToWhatsApp()"><i
                                        class="bi bi-whatsapp"></i></button>
                                <button class="btn btn-sm btn-primary" onclick="shareToFacebook()"><i
                                        class="bi bi-facebook"></i></button>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
            {{-- lahan pembangunan --}}
            <div class="col" data-aos="fade-up" data-aos-delay="200">
                <div class="card shadow-sm">
                    <img src="{{ asset('assets/img/foto-donasi/lahan-pembangunan/penimbunan-lahan.png') }}"
                        alt="" class="w-100">
                    <div class="card-body">
                        <h5 class="fw-bold">Yuk! Wakaf Timbunan Pesantren Gratis</h5>
                        <span><b>Rp 0,-</b> <small>terkumpul</small></span>
                        <hr>
                        <div class="d-flex justify-content-between">
                            <a href="{{ route('pembebasan.lahan') }}" class="btn btn-sm btn-warning">Selengkapnya</a>
                            {{-- <div class=" btn-group">
                                <button class="btn btn-sm btn-success" onclick="shareToWhatsApp()"><i
                                        class="bi bi-whatsapp"></i></button>
                                <button class="btn btn-sm btn-primary" onclick="shareToFacebook()"><i
                                        class="bi bi-facebook"></i></button>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
            {{-- wakaf qur'an --}}
            <div class="col" data-aos="fade-up" data-aos-delay="300">
                <div class="card shadow-sm">
                    <img src="{{ asset('assets/img/foto-donasi/wakaf-quran/wakaf-quran.png') }}" alt="">
                    <div class="card-body">
                        <h5 class="fw-bold">WAKAF QUR'AN ATAS NAMA ORANG TUA</h5>
                        <span><b>Rp 0,-</b> <small>terkumpul</small></span>
                        <hr>
                        <div class="d-flex justify-content-between">
                            <a href="{{ route('wakaf.quran') }}" class="btn btn-sm btn-warning">Selengkapnya</a>
                            {{-- <div class=" btn-group">
                                <button class="btn btn-sm btn-success" onclick="shareToWhatsApp()"><i
                                        class="bi bi-whatsapp"></i></button>
                                <button class="btn btn-sm btn-primary" onclick="shareToFacebook()"><i
                                        class="bi bi-facebook"></i></button>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>

            {{-- pembangunan masjid --}}
            <div class="col" data-aos="fade-up" data-aos-delay="100">
                <div class="card shadow-sm">
                    <img src="{{ asset('assets/img/foto-donasi/pembangunan-masjid/10.png') }}" alt="">
                    <div class="card-body">
                        <h5 class="fw-bold">Pembangunan Masjid Pesantren Gratis Penghafal Qur'an</h5>
                        <span><b>Rp 0,-</b> <small>terkumpul</small></span>
                        <hr>
                        <div class="d-flex justify-content-between">
                            <a href="{{ route('pembangunan.masjid') }}" class="btn btn-sm btn-warning">Selengkapnya</a>
                            {{-- <div class=" btn-group">
                                <button class="btn btn-sm btn-success" onclick="shareToWhatsApp()"><i
                                        class="bi bi-whatsapp"></i></button>
                                <button class="btn btn-sm btn-primary" onclick="shareToFacebook()"><i
                                        class="bi bi-facebook"></i></button>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>

            {{-- guru ngaji berdaya --}}
            <div class="col" data-aos="fade-up" data-aos-delay="200">
                <div class="card shadow-sm">
                    <img src="{{ asset('assets/img/foto-donasi/guru-ngaji/guru-ngaji.png') }}" alt="">
                    <div class="card-body">
                        <h5 class="fw-bold">Guru Ngaji Berdaya</h5>
                        <span><b>Rp 0,-</b> <small>terkumpul</small></span>
                        <hr>
                        <div class="d-flex justify-content-between">
                            <a href="#" class="btn btn-sm btn-warning">Selengkapnya</a>
                            {{-- <div class=" btn-group">
                                <button class="btn btn-sm btn-success" onclick="shareToWhatsApp()"><i
                                        class="bi bi-whatsapp"></i></button>
                                <button class="btn btn-sm btn-primary" onclick="shareToFacebook()"><i
                                        class="bi bi-facebook"></i></button>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

</section>
