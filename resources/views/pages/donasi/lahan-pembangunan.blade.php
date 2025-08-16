@extends('templates.landing-page')

@section('meta')
    <title>Donasi Pembangunan Pondok Pesantren | Sedekah Jariyah</title>

    {{-- audiends google --}}
    <meta name="description"
        content="Bantu wujudkan pondok pesantren untuk generasi Qur’ani. Donasi Anda menjadi sedekah jariyah yang pahalanya mengalir hingga akhir zaman.">
    <link rel="canonical" href="{{ $url }}">

    {{-- audiends sosial media --}}
    <meta property="og:title" content="Donasi Pembangunan Pondok Pesantren | Sedekah Jariyah">
    <meta property="og:description"
        content="Mari bersama membangun pondok pesantren untuk generasi Qurani. Donasi Anda menjadi sedekah jariyah yang pahalanya terus mengalir.">
    <meta property="og:image" content="{{ asset('assets/img/foto-donasi/lahan-pembangunan/penimbunan-lahan.png') }}">
    <meta property="og:url" content="{{ $url }}">

    <!-- ======== Schema.org JSON-LD (DonateAction) ======== -->
    <script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "DonateAction",
  "name": "Donasi Pembangunan Pondok Pesantren",
  "description": "Bantu wujudkan pondok pesantren untuk generasi Qur’ani. Donasi Anda menjadi sedekah jariyah yang pahalanya mengalir hingga akhir zaman.",
  "url": "{{ $url }}",
  "image": "{{ asset('assets/img/foto-donasi/lahan-pembangunan/penimbunan-lahan.png') }}",
  "recipient": {
    "@type": "Organization",
    "name": "Yayasan Pesantren X",
    "url": "{{ $url }}"
  }
}
</script>
@endsection

@section('content')
    <section>
        <div class="container" data-aos="fade-up" data-aos-delay="100">
            <div class="bg-warning p-3">
                <span class="d-block text-center">Tak semua bisa berdonasi, tapi semua bisa berbagi. Yuk, bantu share
                    halaman ini!</span>
                <div class="d-flex justify-content-center mt-3">
                    <div class="btn-group">
                        <button class="btn btn-success" onclick="shareToWhatsApp()"><i class="bi bi-whatsapp"></i>
                            WhatsApp</button>
                        <button class="btn btn-primary" onclick="shareToFacebook()"><i class="bi bi-facebook"></i>
                            Facebook</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="">
        <div class="container" data-aos="fade-up" data-aos-delay="100">
            <h4 class="text-center">Mari Bersama Wujudkan Pondok Pesantren untuk Generasi Qur’ani Masa Depan</h4>
            <p class="text-center">Setiap rupiah yang Anda berikan adalah investasi pahala yang tak pernah putus.</p>
        </div>
    </section>

    <section>
        <div class="container" data-aos="fade-up" data-aos-delay="100">
            <h5>Kondisi Lahan:</h5>
            <div class="row">
                <div class="col-sm-12 col-md-4">
                    <iframe src="{{ asset('assets/img/foto-donasi/lahan-pembangunan/3.mp4') }}"
                        width="100%" height="500" frameborder="0" allowfullscreen></iframe>
                </div>
                <div class="col-sm-12 col-md-4">
                    <iframe src="{{ asset('assets/img/foto-donasi/lahan-pembangunan/1.mp4') }}" width="100%"
                        height="500" frameborder="0" allowfullscreen></iframe>
                </div>
                <div class="col-sm-12 col-md-4">
                    <iframe src="{{ asset('assets/img/foto-donasi/lahan-pembangunan/2.mp4') }}" width="100%"
                        height="500" frameborder="0" allowfullscreen></iframe>
                </div>
            </div>
        </div>

        <div class="container mt-5">
            <div class="row row-cols-2 row-cols-md-4 g-2">
                <div class="col">
                    <img src="{{ asset('assets/img/foto-donasi/lahan-pembangunan/1.jpeg') }}" class="img-fluid gallery-img"
                        alt="Deskripsi Gambar 1" data-bs-toggle="modal" data-bs-target="#imageModal"
                        onclick="showImage(this)">
                </div>
                <div class="col">
                    <img src="{{ asset('assets/img/foto-donasi/lahan-pembangunan/2.jpeg') }}" class="img-fluid gallery-img"
                        alt="Deskripsi Gambar 2" data-bs-toggle="modal" data-bs-target="#imageModal"
                        onclick="showImage(this)">
                </div>
                <div class="col">
                    <img src="{{ asset('assets/img/foto-donasi/lahan-pembangunan/3.jpeg') }}" class="img-fluid gallery-img"
                        alt="Deskripsi Gambar 3" data-bs-toggle="modal" data-bs-target="#imageModal"
                        onclick="showImage(this)">
                </div>
                <div class="col">
                    <img src="{{ asset('assets/img/foto-donasi/lahan-pembangunan/4.jpeg') }}" class="img-fluid gallery-img"
                        alt="Deskripsi Gambar 3" data-bs-toggle="modal" data-bs-target="#imageModal"
                        onclick="showImage(this)">
                </div>
                <div class="col">
                    <img src="{{ asset('assets/img/foto-donasi/lahan-pembangunan/5.jpeg') }}" class="img-fluid gallery-img"
                        alt="Deskripsi Gambar 3" data-bs-toggle="modal" data-bs-target="#imageModal"
                        onclick="showImage(this)">
                </div>
                <div class="col">
                    <img src="{{ asset('assets/img/foto-donasi/lahan-pembangunan/6.jpeg') }}" class="img-fluid gallery-img"
                        alt="Deskripsi Gambar 3" data-bs-toggle="modal" data-bs-target="#imageModal"
                        onclick="showImage(this)">
                </div>
                <div class="col">
                    <img src="{{ asset('assets/img/foto-donasi/lahan-pembangunan/7.jpeg') }}" class="img-fluid gallery-img"
                        alt="Deskripsi Gambar 3" data-bs-toggle="modal" data-bs-target="#imageModal"
                        onclick="showImage(this)">
                </div>
            </div>
        </div>

        <div class="modal fade" id="imageModal" tabindex="-1" aria-labelledby="imageModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-fullscreen">
                <div class="modal-content bg-transparent border-0">
                    <div class="modal-body d-flex justify-content-center align-items-center">
                        <button type="button" class="btn-close btn-close-white position-absolute top-0 end-0 m-3"
                            data-bs-dismiss="modal" aria-label="Close"></button>
                        <img src="" id="fullscreen-img" class="img-fluid" alt="">
                    </div>
                </div>
            </div>
        </div>

    </section>

    <section class=" ">
        <div class="container light-background" data-aos="fade-up" data-aos-delay="100">
            <p>Kami bermimpi menghadirkan pondok pesantren yang layak, nyaman, dan penuh keberkahan — tempat para santri
                menghafal Al-Qur’an, menuntut ilmu agama, dan kelak menjadi cahaya penerang di tengah masyarakat.</p>
            <p>Tetapi, mimpi ini membutuhkan dukungan besar dari hati-hati yang dermawan seperti Anda.</p>
        </div>
    </section>

    <section>
        <div class="container" data-aos="fade-up" data-aos-delay="100">
            <h5 class="text-center">Total dana yang dibutuhkan untuk penimbunan lahan</h5>
            <span class="d-block text-center" style="font-size: 30px;font-weight: bold">Rp 480.000.000,-</span>

            <hr>

            <h5 class="text-center">Sudah terkumpul:</h5>
            <span class="d-block text-center" style="font-size: 30px;font-weight: bold">Rp 0,-</span>

            {{-- bar progress --}}
            <div class="progress" role="progressbar" aria-label="Warning striped example" aria-valuenow="0"
                aria-valuemin="0" aria-valuemax="100">
                <div class="progress-bar progress-bar-striped bg-warning" style="width: 0%">0%</div>
            </div>
        </div>
    </section>


    <section>
        <div class="container" data-aos="fade-up" data-aos-delay="100">
            <div class="alert alert-warning text-center mb-3">Hati-hati dari pihak yang tidak bertanggung jawab, Nomor
                rekenig resmi hanya menggunakan rekening a.n <b>Yayasan Amal Islam Kariango</b></div>
            <h3 class="fw-bold text-center mb-3">Salurkan Donasi Terbaik Anda</h3>
            <div class="d-flex flex-column align-items-center">
                <img src="{{ asset('assets/img/rek-bri.svg') }}" alt="" srcset="" width="200px"
                    class="mb-3">
                <span style="font-size: 30px" class="fw-bold" id="account-number">4968 0100 2888 531</span>
                <button class="btn btn-sm btn-outline-secondary mb-3" id="copy-account">Copy No. Rekening</button>
                <span id="copy-notification" style="display:none; color:green; margin-left:10px;">Tersalin!</span>
                <span class="fw-bold">a.n. Yayasan Amal Islam Kariango</span>
            </div>
        </div>

         <div class="container" data-aos="fade-up" data-aos-delay="100">
             <p class="text-center">Silahkan bagi donatur yang ingin berdonasi menggunakan QR Code bisa scan
                dibawah
                ini: </p>
            <div class="d-flex flex-column align-items-center mt-3">
                <img id="qris-image" src="{{ asset('assets/img/qris.jpeg') }}" alt="" srcset=""
                    width="300px" class="mb-3">
                <button id="download-qris" class="btn btn-sm btn-outline-secondary mb-3">Download QRIS</button>
                <div class="d-flex flex-column">
                    <span class="fw-bold">BAYAR LEBIH MUDAH DENGAN QRIS</span>
                    <ul>
                        <li><b>BUKA APLIKASI:</b> Buka aplikasi bank atau e-wallet kamu (misal: GoPay, OVO, Dana).</li>
                        <li><b>PILIH QRIS:</b> Cari menu "QRIS" atau "Scan".</li>
                        <li><b>SCAN:</b> Arahkan kamera ponselmu ke kode QR Yayasan.</li>
                        <li><b>MASUKKAN NOMINAL:</b> Jika perlu, masukkan jumlah yang ingin dibayar.</li>
                        <li><b>KONFIRMASI:</b> Periksa kembali jumlah dan nama merchant, lalu konfirmasi pembayaran.</li>
                        <li><b>SELESAI:</b> Transaksi selesai!</li>
                    </ul>
                    <span class="fw-bold">TIPS:</span>
                    <ul>
                        <li>Pastikan koneksi internetmu stabil.</li>
                        <li>Simpan aplikasi pembayaranmu di layar utama untuk akses cepat.</li>
                        <li>Periksa kembali struk pembayaran sebagai bukti transaksi.</li>
                    </ul>
                </div>
            </div>

         </div>
    </section>

    <section>
        <div class="container border-bottom pb-2" data-aos="fade-up" data-aos-delay="100">
            <div class="d-flex flex-column justify-content-center">
                <p class="text-center">Konfirmasi bukti transfer guna mempermudah kami melaporkan progres pembangunan
                    melalui website ataupun sosial media</p>
                <a href="https://wa.me/6285299001213" target="_blank" class="btn btn-success btn-lg"><i
                        class="bi bi-whatsapp"></i>
                    Konfirmasi Donasi</a>
            </div>
        </div>
        <div class="container mt-3">
            <h6 class="text-center">Terimakasih atas donasi terbaik anda yang telah dititipkan di Yayasan Amal Islam
                Kariango, Insyaallah akan berdampak manfaat besar untuk orang banyak</h6>
        </div>
    </section>

    <section>
        <div class="container" data-aos="fade-up" data-aos-delay="100">
            <div class="row g-3">
                <div class="col-sm-12 col-md-6">
                    <h6 class="text-center">Lokasi pembangunan</h6>
                    <div class="row">
                        <div class="d-flex align-items-center justify-content-center">
                            <div class="col-sm-9 col-md-6">
                                <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d959.8996146328598!2d119.57118226955367!3d-5.081103999680981!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zNcKwMDQnNTIuMCJTIDExOcKwMzQnMTguNiJF!5e1!3m2!1sen!2sid!4v1754989133035!5m2!1sen!2sid"
                                    class="m-auto" width="100%" height="450" style="border:0;" allowfullscreen=""
                                    loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6">
                    <h6 class="text-center">Dokumen Legalitas</h6>
                    <img src="{{ asset('assets/img/dokumen-legalitas.png') }}" alt="" width="100%">
                </div>
            </div>

        </div>
    </section>

    <section class="w-00 w-100">
        <a href="https://wa.me/6285299001213">
            <div class="conainer position-fixed bottom-0 bg-success w-100">
                <h3 class="text-bg-success d-block text-center w-100 pt-2"><i class="bi bi-whatsapp"></i> SAYA INGIN
                    SEDEKAH</h3>
            </div>
        </a>
    </section>
@endsection

@section('script')
    {{-- tombol share --}}
    <script>
        // Fungsi untuk membagikan ke WhatsApp
        function shareToWhatsApp() {
            const text = 'Donasi Pembangunan Pondok Pesantren';
            const url = '{{ $url }}';
            const whatsappUrl = `https://wa.me/?text=${encodeURIComponent(text + ' ' + url)}`;
            window.open(whatsappUrl, '_blank');
        }

        // Fungsi untuk membagikan ke Facebook
        function shareToFacebook() {
            const url = '{{ $url }}';
            const facebookUrl = `https://www.facebook.com/sharer/sharer.php?u=${encodeURIComponent(url)}`;
            window.open(facebookUrl, '_blank', 'width=600,height=400');
        }
    </script>

    {{-- menampilkan galery --}}
    <script>
        function showImage(element) {
            const fullscreenImage = document.getElementById('fullscreen-img');
            fullscreenImage.src = element.src;
        }
    </script>

    <script>
        $(document).ready(function() {

            // salin no rekening
            $('#copy-account').click(function() {
                // Dapatkan nomor rekening dari elemen span
                // var accountNumber = $('#account-number').text().trim();
                var accountNumber = 496801002888531;

                // Buat elemen textarea sementara untuk menyalin teks
                var tempTextarea = $('<textarea>');
                $('body').append(tempTextarea);
                tempTextarea.val(accountNumber).select();

                try {
                    // Jalankan perintah salin
                    var successful = document.execCommand('copy');

                    // Tampilkan notifikasi
                    if (successful) {
                        $('#copy-notification').fadeIn().delay(1000).fadeOut();
                    }
                } catch (err) {
                    console.error('Gagal menyalin teks: ', err);
                }

                // Hapus textarea sementara
                tempTextarea.remove();
            });

            // download qr
            $('#download-qris').click(function() {
                // Dapatkan URL gambar
                var imageUrl = $('#qris-image').attr('src');

                // Buat nama file untuk unduhan
                var fileName = 'qris-yayasan-amal-silam-kariango.png'; // Anda bisa menyesuaikan nama file

                // Buat elemen anchor sementara
                var link = document.createElement('a');
                link.href = imageUrl;
                link.download = fileName;

                // Trigger klik pada anchor
                document.body.appendChild(link);
                link.click();
                document.body.removeChild(link);
            });
        });
    </script>
@endsection
