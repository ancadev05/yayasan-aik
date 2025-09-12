@extends('templates.landing-page')

@section('title')
    Pondok Tahfidz
@endsection

@section('content')
    <div class="container my-4" data-aos="fade-up" data-aos-delay="100">
        <!-- Nav Tabs -->
        <ul class="nav nav-tabs text-success" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link text-success fw-bold active" id="deskripsi-tab" data-bs-toggle="tab"
                    data-bs-target="#sejarah" type="button" role="tab">Sejarah</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link text-success fw-bold" id="tujuan-tab" data-bs-toggle="tab"
                    data-bs-target="#visi-misi" type="button" role="tab">Visi, Misi, Tujuan</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link text-success fw-bold" id="jadwal-tab" data-bs-toggle="tab"
                    data-bs-target="#struktur" type="button" role="tab">Struktur</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link text-success fw-bold" id="jadwal-tab" data-bs-toggle="tab" data-bs-target="#profil"
                    type="button" role="tab">Profil Lembaga</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link text-success fw-bold" id="jadwal-tab" data-bs-toggle="tab" data-bs-target="#galery"
                    type="button" role="tab">Galery</button>
            </li>
        </ul>

        <!-- Tab Content -->
        <div class="tab-content p-3 border border-top-0" id="myTabContent" data-aos="fade-up" data-aos-delay="100">
            <div class="tab-pane fade show active" id="sejarah" role="tabpanel">
                <p><i>“Sudah tidak diragukan lagi kemulian orang-orang yang menghafal Al-quran atau penghafal Al-quran
                        kemuliaannya sangat tinggi sekali di hadapan Allah Swt , dan pasti setiap diri manusia pasti
                        merindukan ingin bisa menjadi seorang penghafal Al-quran, atau minimal punya cita-cita agar
                        anak-anaknya kelak nanti jadi seorang penghafal Al-quran”</i></p>

                <h5>Sejarah Pesantren Darul Haq Makkaraeng</h5>

                <p>Pesantren Darul Haq Makkaraeng kelahirannya diawali dengan serangkaian perjalanan dakwah Ustad Muhammad
                    Natsir. yang lebih akrab disapa Abi, ulama muda kharismatik yang kemudian menjadi pendiri Lembaga
                    iniyang sampai sekarang Pesantren Darul Haq Makkaraeng berada di jalan poros kariango Dusun tenrigangkae
                    kecamatan mandai kabupaten maros provinsi Sulawesi selatan .</p>
                <p>Berawal dari majelis taklim rutin yang dibentuk oleh Ust. Muh. Natsir di Desa Tenrigangkae yang pada saat
                    itu warga sangat antusias mengikuti mejelis taklim. Kemudian pada tahun 2009, ust. Muh. Natsir dan
                    beberapa pengurus majelis taklim berinisiatif mendirikan yayasan dan Alhamdulillah Atas do’a restu serta
                    dukungan dari para kerabat, guru dan tokoh masyakat sehingga dipenghujung tahun tepatnya 31 Desember
                    2009 terbentuklah yayasan amal islam kariango.</p>
                <p>Pada tahun 2011, pengurus membentuk naungan yayasan amal islam kariango yaitu panti asuhan dan pembinaan
                    muallaf dirumah salah satu anggota majelis taklim yang bernama Ibu Nuhayati. </p>
                <p>Pada awal dibentuknya panti asuhan ini, santri pertama binaan ialah mereka merupakan muallaf yang
                    berjumalah 11 orang yang didatangkan oleh salah satu donator yang sampai saat ini tidak ingin disebutkan
                    namanya.</p>
                <p>Seiring berjalannya waktu, gedung asrama mengalami perkembangan yang signifikan ditambah dengan
                    kegiatan-kegiatan panti asuhan dan pembinaan muallaf ini semakin menarik perhatian masyarakat, maka
                    santri dipanti asuhan ini semakin bertambah, ada yang datang dari daerah bahkan dari luar daerah. </p>
                <p>Melihat semakin banyaknya binaan santri, maka para pengurus membuka Madrasah Ibtidaiyyah (MI) agar para
                    santri mendapatkan pendidikan formal, kemudian disusul dengan pendirian Madrasah Tsanawiyah (MTS),
                    termasuk di dalamnya adalah Pondok Pesantren Tahfidzul Qur’an Darul Haq Makkaraeng</p>
                <p>Berkat restu, dukungan keluarga, doa para guru Abi Natsir, Allah telah mengirim orang-orang yang
                    berpartisipasi membangun Gedung tersebut hingga Panti. Madrasah, pesantren bisa di tempati untuk
                    belajar.</p>
                <p>Alhamdulillah begitu juga dengan sejak berdirinya pondok Pesantren Darul Haq Makakraeng mulai dari tahun
                    2021 sampai sekarang santri tahfidz Darul Haq terus bertambah.</p>
                <p>Santri Tahfidz Pesantren Darul Haq Makakraeng Mereka banyak berasal dari wilayah Maros dan sekitarnya dan
                    dari luar kotapun mulai dikenal lewat melalui media sosial.</p>
                <p>Santri Thafidz untuk yang usia tingkat SD sering kami sebut dengan santri tahfidz shigor dan utnuk santri
                    usia jenjang SMP kami sebut dengan santri Tahfidz kibar.</p>
                <p>Alhamdulillah sampai saat sekarang ini santri Tahfidz Darul Haq Makakraeng hafalannya bervariatif ada
                    beberapa anak yang jumlah hafalan sudah selesai menghafal 30 juz, ada juga yang dapat 26 juz dan yang
                    lainnya banyak yg hafalannya sekitar belasan juz.</p>

            </div>
            <div class="tab-pane fade" id="visi-misi" role="tabpanel" data-aos="fade-up" data-aos-delay="100">
                <h5>Visi</h5>
                <p>Menjadikan santri Pondok Pesantren Darul Haq Makakraeng sebagai pengemban Al qur’an dan penyenang hati
                    orang tua dengan kebaikan akhlaknya.</p>

                <h5>Misi</h5>
                <p>Mengupayakan santri memiliki kepribadian yang islami. Baik pola fikir (Aqliyah Islamiyah) maupun pola
                    perilaku (Nafsiyah Aqliyah) sehingga santri memahami dan mampu melaksanakan Amar Ma’ruf Nahi Munkar.</p>

                <h5>Tujuan</h5>
                <ol type="1">
                    <li>Menjadi lembaga pendidikan profesional, unggul, terpercaya dan dicintai umat.</li>
                    <li>Membentuk generasi berkarakter yang islami yang memiliki kecerdasan intelektual, emosional dan
                        spiritual yang membanggakan.</li>
                    <li>Membangun silaturahmi dan komunikasi yang islami dan berdaya guna</li>
                    <li>Bermanfaat untuk pihak-pihak yang berkepentingan.</li>
                    <li>Tumbuh dan berkembang sesuai dengan kemampuan dan kebutuhan ummat.</li>
                    <li>Mencetak generasi qurani yang professional dalam ilmu pengetahuan.</li>
                </ol>
            </div>
            <div class="tab-pane fade" id="struktur" role="tabpanel">
                <img src="{{ asset('assets/img/foto-unit/pondok/struktur.jpg') }}" alt="" width="100%">
            </div>
            <div class="tab-pane fade" id="profil" role="tabpanel">
                <div class="text-center border-3 border-bottom border-success mb-3">
                    <h4>PROFIL LEMBAGA</h4>
                    <h4>PONDOK PESANTREN DARUL HAQ MAKKARAENG</h4>
                </div>

                <h5>A. Identitas Lembaga</h5>
                <div class="ms-5">
                    <table class="table table-sm">
                        <tr>
                            <td width="300px">Nama Lembaga</td>
                            <td>: Amal Islam</td>
                        </tr>
                        <tr>
                            <td>Jenis Lembaga</td>
                            <td>: LKSA</td>
                        </tr>
                        <tr>
                            <td>Tahun Berdiri</td>
                            <td>: 2011</td>
                        </tr>
                        <tr>
                            <td>Naungan</td>
                            <td>: Yayasan Amal Islam Kariango</td>
                        </tr>
                    </table>
                </div>

                <h5>B. Lokasi Lembaga</h5>
                <div class="ms-5">
                    <table class="table table-sm">
                        <tr>
                            <td width="300px">Alamat</td>
                            <td>: Jalan Poros Kariango</td>
                        </tr>
                        <tr>
                            <td>Desa/Kelurahan</td>
                            <td>: Tenrigangkae</td>
                        </tr>
                        <tr>
                            <td>Kecamatan</td>
                            <td>: Mandai</td>
                        </tr>
                        <tr>
                            <td>Kabupaten/Kota</td>
                            <td>: Maros</td>
                        </tr>
                        <tr>
                            <td>Provinsi</td>
                            <td>: Sulawesi Selatan</td>
                        </tr>
                        <tr>
                            <td>Kode Pos</td>
                            <td>: 90552</td>
                        </tr>
                        <tr>
                            <td>Telepon</td>
                            <td>: 085299001213</td>
                        </tr>
                    </table>
                </div>

                <h5>C. Identitas Kepala/Pimpinan</h5>
                <div class="ms-5">
                    <table class="table table-sm">
                        <tr>
                            <td width="300px">Nama Lengkap</td>
                            <td>: Muh. Natsir, S.Pd.</td>
                        </tr>
                        <tr>
                            <td>Jenis Kelamin</td>
                            <td>: Laki-laki</td>
                        </tr>
                        <tr>
                            <td>NIK</td>
                            <td>: 000000000000</td>
                        </tr>
                        <tr>
                            <td>Pendidikan Formal Terakhir</td>
                            <td>: S1</td>
                        </tr>
                        <tr>
                            <td>Lama Pendidikan Pesantrenr</td>
                            <td>: Lebih dari 15 Tahun </td>
                        </tr>
                        <tr>
                            <td>Nomor Telepon/HP</td>
                            <td>: 0821 9251 3997</td>
                        </tr>
                        <tr>
                            <td>Kewarganegaraan</td>
                            <td>: Warga Negara Indonesia</td>
                        </tr>
                    </table>
                </div>

                <h5>D. Data Rekening Bank dan NPWP Lembaga</h5>
                <div class="ms-5">
                    <table class="table table-sm">
                        <tr>
                            <td width="300px">Nomor Rekening</td>
                            <td>: 496801002888531</td>
                        </tr>
                        <tr>
                            <td>Atas Nama</td>
                            <td>: YayasanAmal Islam Kariango</td>
                        </tr>
                        <tr>
                            <td>Nama Bank</td>
                            <td>: BRI</td>
                        </tr>
                        <tr>
                            <td>NPWP</td>
                            <td>: 02.855.545.6-809.000</td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="tab-pane fade" id="galery" role="tabpanel">
                {{-- <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                    <div class="col"><img src="{{ asset('assets/img/foto-unit/pondok/1.jpeg') }}" alt=""
                            width="100%"></div>
                    <div class="col"><img src="{{ asset('assets/img/foto-unit/pondok/2.jpeg') }}" alt=""
                            width="100%"></div>
                    <div class="col"><img src="{{ asset('assets/img/foto-unit/pondok/3.jpeg') }}" alt=""
                            width="100%"></div>
                    <div class="col"><img src="{{ asset('assets/img/foto-unit/pondok/4.jpeg') }}" alt=""
                            width="100%"></div>
                    <div class="col"><img src="{{ asset('assets/img/foto-unit/pondok/5.jpeg') }}" alt=""
                            width="100%"></div>
                    <div class="col"><img src="{{ asset('assets/img/foto-unit/pondok/6.jpeg') }}" alt=""
                            width="100%"></div>
                    <div class="col"><img src="{{ asset('assets/img/foto-unit/pondok/7.jpeg') }}" alt=""
                            width="100%"></div>
                    <div class="col"><img src="{{ asset('assets/img/foto-unit/pondok/8.jpeg') }}" alt=""
                            width="100%"></div>
                    <div class="col"><img src="{{ asset('assets/img/foto-unit/pondok/9.jpeg') }}" alt=""
                            width="100%"></div>
                    <div class="col"><img src="{{ asset('assets/img/foto-unit/pondok/10.jpeg') }}" alt=""
                            width="100%"></div>
                </div> --}}

                <!-- Gallery Section -->
                <section id="gallery" class="gallery section">

                    <!-- Section Title -->
                    <div class="container section-title" data-aos="fade-up">
                        <h2>Gallery</h2>
                        <div><span>Check Our</span> <span class="description-title">Gallery</span></div>
                    </div><!-- End Section Title -->

                    <div class="container" data-aos="fade-up" data-aos-delay="100">

                        <div class="row g-0">

                            <div class="col-lg-3 col-md-4">
                                <div class="gallery-item">
                                    <a href="{{ asset('assets/img/foto-unit/pondok/1.jpeg') }}" class="glightbox"
                                        data-gallery="images-gallery">
                                        <img src="{{ asset('assets/img/foto-unit/pondok/1.jpeg') }}" alt="" class="img-fluid">
                                    </a>
                                </div>
                            </div><!-- End Gallery Item -->

                            <div class="col-lg-3 col-md-4">
                                <div class="gallery-item">
                                    <a href="{{ asset('assets/img/foto-unit/pondok/2.jpeg') }}" class="glightbox"
                                        data-gallery="images-gallery">
                                        <img src="{{ asset('assets/img/foto-unit/pondok/2.jpeg') }}" alt="" class="img-fluid">
                                    </a>
                                </div>
                            </div><!-- End Gallery Item -->

                            <div class="col-lg-3 col-md-4">
                                <div class="gallery-item">
                                    <a href="{{ asset('assets/img/foto-unit/pondok/3.jpeg') }}" class="glightbox"
                                        data-gallery="images-gallery">
                                        <img src="{{ asset('assets/img/foto-unit/pondok/3.jpeg') }}" alt="" class="img-fluid">
                                    </a>
                                </div>
                            </div><!-- End Gallery Item -->

                            <div class="col-lg-3 col-md-4">
                                <div class="gallery-item">
                                    <a href="{{ asset('assets/img/foto-unit/pondok/4.jpeg') }}" class="glightbox"
                                        data-gallery="images-gallery">
                                        <img src="{{ asset('assets/img/foto-unit/pondok/4.jpeg') }}" alt="" class="img-fluid">
                                    </a>
                                </div>
                            </div><!-- End Gallery Item -->

                            <div class="col-lg-3 col-md-4">
                                <div class="gallery-item">
                                    <a href="{{ asset('assets/img/foto-unit/pondok/5.jpeg') }}" class="glightbox"
                                        data-gallery="images-gallery">
                                        <img src="{{ asset('assets/img/foto-unit/pondok/5.jpeg') }}" alt="" class="img-fluid">
                                    </a>
                                </div>
                            </div><!-- End Gallery Item -->

                            <div class="col-lg-3 col-md-4">
                                <div class="gallery-item">
                                    <a href="{{ asset('assets/img/foto-unit/pondok/6.jpeg') }}" class="glightbox"
                                        data-gallery="images-gallery">
                                        <img src="{{ asset('assets/img/foto-unit/pondok/6.jpeg') }}" alt="" class="img-fluid">
                                    </a>
                                </div>
                            </div><!-- End Gallery Item -->

                            <div class="col-lg-3 col-md-4">
                                <div class="gallery-item">
                                    <a href="{{ asset('assets/img/foto-unit/pondok/7.jpeg') }}" class="glightbox"
                                        data-gallery="images-gallery">
                                        <img src="{{ asset('assets/img/foto-unit/pondok/7.jpeg') }}" alt="" class="img-fluid">
                                    </a>
                                </div>
                            </div><!-- End Gallery Item -->

                            <div class="col-lg-3 col-md-4">
                                <div class="gallery-item">
                                    <a href="{{ asset('assets/img/foto-unit/pondok/8.jpeg') }}" class="glightbox"
                                        data-gallery="images-gallery">
                                        <img src="{{ asset('assets/img/foto-unit/pondok/8.jpeg') }}" alt="" class="img-fluid">
                                    </a>
                                </div>
                            </div><!-- End Gallery Item -->

                            <div class="col-lg-3 col-md-4">
                                <div class="gallery-item">
                                    <a href="{{ asset('assets/img/foto-unit/pondok/9.jpeg') }}" class="glightbox"
                                        data-gallery="images-gallery">
                                        <img src="{{ asset('assets/img/foto-unit/pondok/9.jpeg') }}" alt="" class="img-fluid">
                                    </a>
                                </div>
                            </div><!-- End Gallery Item -->

                            <div class="col-lg-3 col-md-4">
                                <div class="gallery-item">
                                    <a href="{{ asset('assets/img/foto-unit/pondok/10.jpeg') }}" class="glightbox"
                                        data-gallery="images-gallery">
                                        <img src="{{ asset('assets/img/foto-unit/pondok/10.jpeg') }}" alt="" class="img-fluid">
                                    </a>
                                </div>
                            </div><!-- End Gallery Item -->

                        </div>

                    </div>

                </section><!-- /Gallery Section -->
            </div>
        </div>
    </div>
@endsection
