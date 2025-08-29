@extends('templates.landing-page')

@section('meta')
    <title>Donasi Pembangunan Masjid Penghafal Qur’an</title>

    {{-- audiends google --}}
    <meta name="description"
        content="Bersama kita wujudkan Masjid Penghafal Qur’an. Setiap huruf yang dibaca para santri akan menjadi amal jariyah yang pahalanya mengalir untuk Anda. Mari berdonasi sekarang.">
    <link rel="canonical" href="{{ $url }}">

    {{-- audiends sosial media --}}
    <meta property="og:title" content="Donasi Pembangunan Masjid Penghafal Qur’an">
    <meta property="og:description"
        content="Bantu wujudkan Masjid Penghafal Qur’an. Amal jariyah tak terputus hingga hari akhir. Mari berdonasi sekarang.">
    <meta property="og:image" content="{{ asset('assets/img/foto-donasi/pembangunan-masjid/10.png') }}">
    <meta property="og:url" content="{{ $url }}">
@endsection

@section('content')
    <section class="container">
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
    </section>

    <div class="container">
        <div class="row row-cols-12 row-cols-md-10 g-4 mb-4">
            <div class="col d-flex justify-content-center">
                <div>
                    <h5 class="text-center">Gambar Masjid</h5>
                    <img src="{{ asset('assets/img/foto-donasi/pembangunan-masjid/4.jpeg') }}" class="img-fluid gallery-img"
                        alt="Deskripsi Gambar 1" data-bs-toggle="modal" data-bs-target="#imageModal"
                        onclick="showImage(this)">
                </div>
            </div>
        </div>

        <h5 class="text-center">Lokasi Pembangunan</h5>
        <div class="row row-cols-2 g-3">
            <div class="col">
                <img src="{{ asset('assets/img/foto-donasi/pembangunan-masjid/6.jpeg') }}" class="img-fluid gallery-img"
                    alt="Deskripsi Gambar 1" data-bs-toggle="modal" data-bs-target="#imageModal" onclick="showImage(this)">
            </div>
            <div class="col">
                <img src="{{ asset('assets/img/foto-donasi/pembangunan-masjid/7.jpeg') }}" class="img-fluid gallery-img"
                    alt="Deskripsi Gambar 1" data-bs-toggle="modal" data-bs-target="#imageModal" onclick="showImage(this)">
            </div>
            <div class="col">
                <img src="{{ asset('assets/img/foto-donasi/pembangunan-masjid/8.jpeg') }}" class="img-fluid gallery-img"
                    alt="Deskripsi Gambar 1" data-bs-toggle="modal" data-bs-target="#imageModal" onclick="showImage(this)">
            </div>
            <div class="col">
                <img src="{{ asset('assets/img/foto-donasi/pembangunan-masjid/9.jpeg') }}" class="img-fluid gallery-img"
                    alt="Deskripsi Gambar 1" data-bs-toggle="modal" data-bs-target="#imageModal" onclick="showImage(this)">
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
    </div>

    <section class="container">
        <h5>Detail Program:</h5>
        <p><b>“Bayangkan… setiap huruf Al-Qur’an yang dibaca oleh para penghafal Qur’an, pahalanya mengalir juga untuk
                Anda.”</b></p>
        <p>Saat ini kami sedang membangun sebuah <b>Masjid khusus untuk para penghafal Qur’an</b>, sebuah tempat suci di
            mana ribuan ayat akan dilantunkan setiap hari, dan doa-doa terbaik dipanjatkan.</p>
        <p>Masjid ini akan menjadi pusat pembinaan para calon huffazh, tempat anak-anak hingga orang dewasa menanamkan
            kalam Allah di hati mereka.</p>
        <p><b>Namun, kami tidak bisa mewujudkannya tanpa bantuan Anda.</b></p>
        <p>Mari bersama-sama kita dirikan rumah Allah ini. Satu batu bata, satu rupiah, satu doa dari Anda akan menjadi
            saksi amal jariyah yang tidak akan terputus, bahkan setelah kita tiada.</p>
        <p><i>“Barang siapa yang membangun masjid karena Allah, maka Allah akan bangunkan untuknya rumah di surga.”
            </i>(HR. Bukhari & Muslim)</p>

    </section>
    <div class="container">

        <h5 class="text-center">Total dana yang dibutuhkan</h5>
        <span class="d-block text-center" style="font-size: 30px;font-weight: bold">Rp 864.000.000,-</span>

        <hr>

        <h5 class="text-center">Sudah terkumpul:</h5>
        <span class="d-block text-center" style="font-size: 30px;font-weight: bold">Rp 0,-</span>

        {{-- bar progress --}}
        <div class="progress" role="progressbar" aria-label="Warning striped example" aria-valuenow="0.19" aria-valuemin="0"
            aria-valuemax="100">
            <div class="progress-bar progress-bar-striped bg-warning" style="width: 0.19%">0,19%</div>
        </div>



    </div>
    <section>
        <div class="container">
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
    </section>

    <section class="">
        <div class="container">
            <h5 class="fw-bold text-center">Silahkan bagi donatur yang ingin berdonasi menggunakan QR Code bisa scan
                dibawah
                ini: </h5>
            <div class="d-flex flex-column align-items-center mt-3">
                <img id="qris-image" src="{{ asset('assets/img/qris.jpeg') }}" alt="" srcset="" width="300px"
                    class="mb-3">
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
        <div class="container border-bottom pb-2">
            <div class="d-flex flex-column justify-content-center">
                <p class="text-center">Konfirmasi bukti transfer guna mempermudah kami melaporkan progres pembangunan
                    melalui website ataupun sosial media</p>
                <a href="https://wa.me/6285299001213" target="_blank" class="btn btn-success btn-lg"><i
                        class="bi bi-whatsapp"></i>
                    Konfirmasi Donasi</a>
            </div>
        </div>
        <div class="container mt-5">
            <h5 class="text-center">Terimakasih atas donasi terbaik anda yang telah dititipkan di Yayasan Amal Islam
                Kariango, Insyaallah akan berdampak manfaat besar untuk orang banyak</h5>
        </div>
    </section>

    <section>
        <div class="container">
            <h5>Lokasi pondok</h5>
            {{-- <div class="d-flex flex-column align-items-center"> --}}
            <div class="row g-3">
                {{-- <div class="d-flex align-items-center justify-content-center"> --}}
                <div class="col-sm-9 col-md-6">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d959.8996146328598!2d119.57118226955367!3d-5.081103999680981!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zNcKwMDQnNTIuMCJTIDExOcKwMzQnMTguNiJF!5e1!3m2!1sen!2sid!4v1754989133035!5m2!1sen!2sid"
                        class="m-auto" width="100%" height="450" style="border:0;" allowfullscreen=""
                        loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div class="col-sm-12 col-md-6">
                    <h5>Dokumen Legalitas</h5>
                    <img src="{{ asset('assets/img/dokumen-legalitas.png') }}" alt="" width="100%">
                </div>
                {{-- </div> --}}
            </div>
            {{-- </div> --}}

        </div>
    </section>

    <section class="w-00 w-100">
        <a href="https://wa.me/6285299001213">
            <div class="conainer position-fixed bottom-0 bg-success w-100">
                <h3 class="text-bg-success d-block text-center w-100 pt-2"><i class="bi bi-whatsapp"></i> MAU SEDEKAH</h3>
            </div>
        </a>
    </section>
@endsection

@section('script')
    {{-- tombol share --}}
    <script>
        // Fungsi untuk membagikan ke WhatsApp
        function shareToWhatsApp() {
            const text = 'Yuk beramal!';
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

    <script>
        // menampilkan galery
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
