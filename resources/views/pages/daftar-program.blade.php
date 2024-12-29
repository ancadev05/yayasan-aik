@extends('templates.landing-page')

@section('title')
    Program
@endsection

@section('content')
    {{-- <section>
        <div class="container" data-aos="fade-up" data-aos-delay="100">
            <div class="d-flex justify-content-center">
                <button class="btn btn-lg btn-warning" data-bs-toggle="modal" data-bs-target="#donasi">Donasi Sekarang</button>
            </div>
        </div>
    </section> --}}

    <section id="program" class="about section">
        <div class="container mb-5" data-aos="fade-up" data-aos-delay="100">
            <div class="d-flex justify-content-center">
                <a href="https://wa.me/6285299001213" target="_blank" class="btn btn-success"><i class="bi bi-whatsapp"></i> Hubungi Admin Untuk Donasi</a>
                {{-- <button class="btn btn-lg btn-warning" data-bs-toggle="modal" data-bs-target="#donasi">Donasi Sekarang</button> --}}
            </div>
        </div>
        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Program</h2>
            <div><span>Daftar</span> <span class="description-title">Program Unggulan</span></div>
        </div><!-- End Section Title -->

        <div class="album">
            <div class="container" data-aos="fade-up" data-aos-delay="100">
                <div class="row row-cols-2 row-cols-sm-2 row-cols-md-4 g-3">
                    @forelse ($programs as $item)
                        <div class="col">
                            <div class="card shadow-sm">
                                <img src="{{ asset('public/gambar-program/' . $item->gambar_program) }}" class="img-fluid"
                                    alt="...">
                                <div class="card-body">
                                    <h5 class="fw-bold">{{ $item->title }}</h5>
                                    {{-- <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p> --}}
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="btn-group">
                                            <a href="{{ url('/daftar-program/' . $item->slug) }}"
                                                class="btn btn-sm btn-outline-success">Lihat</a>
                                        </div>
                                        <button type="button" class="btn btn-sm btn-outline-secondary" data-bs-toggle="modal"
                                            data-bs-target="#share"><i class="bi bi-share"></i> Share</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @empty
                        <div class="alert alert-info">Tidak Ada Program</div>
                    @endforelse
                </div>
            </div>
        </div>
    </section>

    {{-- modal donasi --}}
    <div class="modal fade" id="donasi" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Data Donatur</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    {{-- <form action="" method="post"> --}}
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama">
                    </div>
                    <div class="mb-3">
                        <label for="alamat" class="form-label">Alamat</label>
                        <input type="text" class="form-control" id="alamat" name="alamat">
                    </div>
                    <div class="mb-3">
                        <label for="pekerjaan" class="form-label">Pekerjaan</label>
                        <input type="text" class="form-control" id="pekerjaan" name="pekerjaan">
                    </div>
                    <div class="mb-3">
                        <label for="nama" class="form-label">No. Handphone</label>
                        <input type="text" class="form-control" id="nama" name="nama">
                    </div>
                    {{-- </form> --}}
                </div>
                <div class="modal-footer">
                    {{-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> --}}
                    <button id="donasi" class="btn btn-warning" onclick="adminDonasi()">Submit</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal share -->
    <div class="modal fade" id="share" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Share</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="d-flex justify-content-center">
                        <button id="share-whatsapp" class="btn btn-lg btn-success"><i class="bi bi-whatsapp"></i></button>
                        <button id="share-instagram" class="btn btn-lg btn-danger mx-3"><i
                                class="bi bi-instagram"></i></button>
                        <button id="share-facebook" class="btn btn-lg btn-primary"><i
                                class="bi bi-facebook"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>
        function adminDonasi() {
            var nomorWA = "6285299001213";
            var nama = document.getElementById("nama").value;
            var pesan = "Bismillah, \nSaya *" + nama + "* tertarik dengan program ini : \n" + window.location.href;
            var url = "https://wa.me/" + nomorWA + "?text=" + encodeURIComponent(pesan);
            window.open(url, '_blank');
        }

        $(document).ready(function() {

            var url = window.location.href; // URL halaman yang akan dibagikan
            var title = document.title; // Judul halaman
            var message = 'Yuk tebar kebaikan: ' + url;

            $('#share-whatsapp').click(function() {
                var whatsappUrl = 'https://api.whatsapp.com/send?text=' + encodeURIComponent(message);
                window.open(whatsappUrl, '_blank');
            });

            $('#share-instagram').click(function() {
                var instagramUrl = 'https://www.instagram.com/share/link/?url=' + encodeURIComponent(url);
                window.open(instagramUrl, 'Share on Instagram', 'width=600,height=400');
            });

            $('#share-facebook').click(function() {
                var facebookUrl = 'https://www.facebook.com/sharer/sharer.php?u=' + encodeURIComponent(url);
                window.open(facebookUrl, 'Share on Facebook', 'width=600,height=400');
            });

            $('#share-twitter').click(function() {
                var twitterUrl = 'https://twitter.com/intent/tweet?url=' + encodeURIComponent(url) +
                    '&text=' + encodeURIComponent(title);
                window.open(twitterUrl, 'Share on Twitter', 'width=600,height=400');
            });
        });
    </script>
@endsection
