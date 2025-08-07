<section id="donasi" class="about section">
    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
        <h2>Donasi</h2>
        <div><span class="description-title">Program Donasi Sementara Berjalan</span></div>
    </div><!-- End Section Title -->

    <div class="container">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
            <div class="col" data-aos="fade-up" data-aos-delay="100">
                <div class="card shadow-sm">
                    <img src="{{ asset('assets/img/foto-donasi/a-4.jpeg') }}" alt="">
                    <div class="card-body">
                        <h5 class="fw-bold">Ruangan Santri dan Masjid Butuh Perbaikan</h5>
                        <span><b>Rp 4.700.000,-</b> <small>terkumpul</small></span>
                        <hr>
                        <div class="d-flex justify-content-between">
                            <a href="{{ route('gedung.santri') }}" class="btn btn-sm btn-warning">Donasi</a>
                            <div class=" btn-group">
                                <button class="btn btn-sm btn-success" onclick="shareToWhatsApp()"><i class="bi bi-whatsapp"></i></button>
                                <button class="btn btn-sm btn-primary" onclick="shareToFacebook()"><i class="bi bi-facebook"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>

