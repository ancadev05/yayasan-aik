@extends('templates.landing-page')

@section('title')
    Tentang Kami
@endsection

@section('content')
    <section id="kontak">
        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Kontak</h2>
            <div><span class="description-title">Hubungi Kami</span></div>
        </div><!-- End Section Title -->

        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="row gy-4">

                <div class="col-lg-7">
                    <div class="info-wrap">
                        <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="200">
                            <h4><i class="bi bi-geo-alt flex-shrink-0 me-2"></i></h4>
                            <div>
                                <h4 class="fw-bold">Alamat</h4>
                                <p>Jl. Poros Kariango, Tenrigangkae, Kec. Mandai, Kabupaten Maros, Sulawesi Selatan 90552
                                </p>
                            </div>
                        </div><!-- End Info Item -->

                        <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
                            <h4><i class="bi bi-whatsapp flex-shrink-0 me-2"></i></h4>
                            <div>
                                <h4 class="fw-bold">No. WhatsApp</h4>
                                <p><a href="https://wa.me/6285299001213" target="_blank">0852-9900-1213</a></p>
                            </div>
                        </div><!-- End Info Item -->

                        <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
                            <h4><i class="bi bi-envelope flex-shrink-0 me-2"></i></h4>
                            <div>
                                <h4 class="fw-bold">Email</h4>
                                <p>yayasanamalislamkariangomaros@gmail.com</p>
                            </div>
                        </div><!-- End Info Item -->

                        <hr>

                        <div class="info-item" data-aos="fade-up" data-aos-delay="300">
                            <h4 class="fw-bold">Media Sosial</h4>
                            <div class="" style="font-size: 30px">
                                <a href="https://web.facebook.com/darulhaqmakkaraeng?mibextid=ZbWKwL&_rdc=1&_rdr#"
                                    target="_blank"><i class="bi bi-facebook"></i></a>
                                <a href="https://www.instagram.com/pesantrendarulhaqmakkaraeng?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw=="
                                    target="_blank"><i class="bi bi-instagram"></i></a>
                                <a href="https://www.youtube.com/@pesantrendarulhaqmakkaraeng" target="_blank"><i
                                        class="bi bi-youtube"></i></a>
                            </div>
                        </div><!-- End Info Item -->
                    </div>
                </div>

                <div class="col-lg-5">
                    <div data-aos="fade-up" data-aos-delay="300">
                        <h4 class="fw-bold">Maps</h4>
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3974.1607230845343!2d119.56844417386121!3d-5.077685051521785!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dbefb6477e3664b%3A0x3308aa069bf80442!2sPanti%20Asuhan%20Amal%20Islam%20Kariango!5e0!3m2!1sen!2sid!4v1734256718587!5m2!1sen!2sid"
                            width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade" class="shadow-sm"></iframe>
                    </div>
                </div><!-- End Contact Form -->

            </div>

        </div>

    </section>
@endsection
