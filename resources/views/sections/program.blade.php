<section id="program" class="about section light-background">
    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
        <h2>Program</h2>
        <div><span>Daftar</span> <span class="description-title">Program Unggulan</span></div>
    </div><!-- End Section Title -->

    <div class="container">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3 gy-3">
            <div class="col px-4" data-aos="fade-up" data-aos-delay="100">
                <div class="row bg-white shadow rounded p-3">
                    <div class="col-3 bg-warning shadow rounded d-flex align-items-center justify-content-center">
                        <img src="{{ asset('assets/img/icon-program/ambulance.png') }}" alt="" class="w-100">
                    </div>
                    <div class="col-9">
                        <div>
                            <h4 class="fw-bold">Ambulance Gratis</h4>
                            <span>Membantu masyarakat yang membutuhkan baik di dalam kabupaten Maros maupun luar</span>
                        </div>
                    </div>
                </div>
            </div>
            {{-- -- --}}
            <div class="col px-4" data-aos="fade-up" data-aos-delay="200">
                <div class="row bg-white shadow rounded p-3">
                    <div class="col-3 bg-warning shadow rounded d-flex align-items-center justify-content-center">
                        <img src="{{ asset('assets/img/icon-program/nasi-santri.png') }}" alt="" class="w-100">
                    </div>
                    <div class="col-9">
                        <div>
                            <h4 class="fw-bold">Nasi Santri</h4>
                            <span>Program distribusi nasi kotak oleh Yayasan Amal Islma kepada masyarakat kurang mampu dan pejuang nafkah dijalan</span>
                        </div>
                    </div>
                </div>
            </div>
            {{-- -- --}}
            <div class="col px-4" data-aos="fade-up" data-aos-delay="300">
                <div class="row bg-white shadow rounded p-3">
                    <div class="col-3 bg-warning shadow rounded d-flex align-items-center justify-content-center">
                        <img src="{{ asset('assets/img/icon-program/nasi-santri.png') }}" alt="" class="w-100">
                    </div>
                    <div class="col-9">
                        <div>
                            <h4 class="fw-bold">Beras Pesantren</h4>
                            <span>Program beras pesantren hadir untuk mencukupi kebutuhan konsumsi santri penghafal Qur'an yang tengah menimba ilmu di pondok pesantren</span>
                        </div>
                    </div>
                </div>
            </div>
            {{-- -- --}}
            <div class="col px-4" data-aos="fade-up" data-aos-delay="300">
                <div class="row bg-white shadow rounded p-3">
                    <div class="col-3 bg-warning shadow rounded d-flex align-items-center justify-content-center">
                        <img src="{{ asset('assets/img/icon-program/nasi-santri.png') }}" alt="" class="w-100">
                    </div>
                    <div class="col-9">
                        <div>
                            <h4 class="fw-bold">Santunan Anak Yatim/Piatu</h4>
                            <span>Santunan anak Yatim hadir sebagai bentuk kepedulian sekaligus penopang bagi anak-anak yang kehilangan sosok pencari nafkah diusia dini</span>
                        </div>
                    </div>
                </div>
            </div>
            {{-- -- --}}
            <div class="col px-4" data-aos="fade-up" data-aos-delay="300">
                <div class="row bg-white shadow rounded p-3">
                    <div class="col-3 bg-warning shadow rounded d-flex align-items-center justify-content-center">
                        <img src="{{ asset('assets/img/icon-program/nasi-santri.png') }}" alt="" class="w-100">
                    </div>
                    <div class="col-9">
                        <div>
                            <h4 class="fw-bold">Santunan Janda dan Dhuafa</h4>
                            <span>Program mulia yang menyalurkan bantuan berupa kebutuhan sembako untuk membanu keberlangsungan hidup para janda dan kaum dhuafa yang membutuhkan</span>
                        </div>
                    </div>
                </div>
            </div>
            {{-- -- --}}
            {{-- -- --}}
            <div class="col px-4" data-aos="fade-up" data-aos-delay="300">
                <div class="row bg-white shadow rounded p-3">
                    <div class="col-3 bg-warning shadow rounded d-flex align-items-center justify-content-center">
                        <img src="{{ asset('assets/img/icon-program/nasi-santri.png') }}" alt="" class="w-100">
                    </div>
                    <div class="col-9">
                        <div>
                            <h4 class="fw-bold">TPQ Amal Islam</h4>
                            <span>Pelopor Pendidikan Tahfidz Al-Qur'an yang meyenangkan untuk anak-anak yang belum bisa mengaji</span>
                        </div>
                    </div>
                </div>
            </div>
            {{-- -- --}}
            {{-- -- --}}
            <div class="col px-4" data-aos="fade-up" data-aos-delay="300">
                <div class="row bg-white shadow rounded p-3">
                    <div class="col-3 bg-warning shadow rounded d-flex align-items-center justify-content-center">
                        <img src="{{ asset('assets/img/icon-program/nasi-santri.png') }}" alt="" class="w-100">
                    </div>
                    <div class="col-9">
                        <div>
                            <h4 class="fw-bold">Beras Pesantren</h4>
                            <span></span>
                        </div>
                    </div>
                </div>
            </div>
            {{-- -- --}}

        </div>
    </div>

    <div class="album">
        <div class="container" data-aos="fade-up" data-aos-delay="100">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                @foreach ($programs as $item)
                    <div class="col">
                        <div class="card shadow-sm">
                            <img src="{{ asset('public/gambar-program/' . $item->gambar_program) }}"
                                class="img-fluid" alt="...">
                            <div class="card-body">
                                <h3 class="fw-bold">{{ $item->title }}</h3>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <a href="{{ url('/daftar-program/' . $item->slug) }}"
                                            class="btn btn-sm btn-outline-success">Lihat</a>
                                    </div>
                                    <small class="text-body-secondary"><i class="bi bi-share"></i> Share</small>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
