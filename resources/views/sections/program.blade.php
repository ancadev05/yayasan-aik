<section id="program" class="about section light-background">
    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
        <h2>Program</h2>
        <div><span>Daftar</span> <span class="description-title">Program Unggulan</span></div>
    </div><!-- End Section Title -->

    <div class="album">
        <div class="container" data-aos="fade-up" data-aos-delay="100">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
              @foreach ($programs as $item)
                <div class="col">
                    <div class="card shadow-sm">
                        <img src="{{ asset('public/gambar-program/' . $item->gambar_program) }}" class="img-fluid"
                            alt="...">
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
