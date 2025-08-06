@extends('templates.landing-page')

@section('title')
    Ambulance Gratis
@endsection

@section('content')
    <section class="section">
        <div class="container" data-aos="fade-up" data-aos-delay="100">
            <div class="row">
                <div class="col-md-8 col-sm-12">
                    <div class="card alert alert-success p-3 mb-3">
                        <img src="{{ asset('assets/img/gambar-program/ambulance.jpg') }}" alt="" class="w-50">
                    </div>
                    <h4 class="border-3 border-bottom">Deskripsi</h4>
                    <p>Ambulance Kariango adalah layanan kesehatan berbentuk mobil ambulance <b>GRATIS</b> bagi masyarakat yang
                        membutuhkan pertolongan darurat. Layanan ini disediakan oleh Yayasan Amal Islam Kariango untuk membantu
                        penanganan kegawatdaruratan bagi masyarakat sekitar.</p>
                    <p>Layanan ambulance gratis ini diperuntukkan bagi dhuafa dan seluruh lapisan masyarakat tanpa membedakan suku,
                        ras, agama, atau golongan. Harapannya, selain memberikan bantuan kesehatan secara cuma-cuma, layanan ini
                        juga menjadi wujud ukhuwah islamiyah dan kepedulian sosial.</p>
                    <p>Ambulance Kariango mengedepankan sistem pelayanan yang ramah, cepat, tanggap, dan profesional. Saat ini,
                        yayasan telah mengoperasikan 1 unit mobil ambulance gratis dan berkomitmen untuk terus berkembang demi
                        menjangkau lebih banyak masyarakat. Ambulance ini didukung oleh tenaga kesehatan tersertifikasi, driver
                        terlatih, serta peralatan medis standar seperti:</p>
                    <p>Emergency Kit</p>
                    <ul>
                        <li>Tabung oksigen</li>
                        <li>Alat Pengaman Diri (APD)</li>
                        <li>Peralatan medis pendukung lainnya</li>
                    </ul>
                    <p>Dengan motto "Melayani dengan Ikhlas", Ambulance Kariango terus berupaya memberikan bantuan bagi masyarakat
                        yang membutuhkan, terutama dalam situasi darurat.</p>

                        <h4 class="border-3 border-bottom">Layanan Kami</h4>

                        <h6>4. Pengantaran Jenazah</h6>
                        <p class="alert alert-warning">Pelayanan mobil ambulance GRATIS Alfatihah jenis ini ialah pelayanan yang berfokus pada masalah pemulasaraan jenazah. Termasuk didalamnya pelayanan pengantaran jenazah dari rumah sakit menuju rumah duka.</p>
                </div>
                <div class="col-md-4 col-sm-12">
                    <div class="alert alert-info position-sticky top-0">
                        <h4>Ambulance</h4>
                        <ul>
                            <li>Siaga 24 jam</li>
                            <li>Standar Medic</li>
                            <li>Sterilisasi Ambulance</li>
                            <li>Tersedia Tabung Oksigen</li>
                            <li>Unit Eksklusif</li>
                        </ul>

                        <a href="#" class="btn btn-sm btn-success"><span class="text-white"><i class="bi bi-whatsapp"> </i>WhatsApp</span></a>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
