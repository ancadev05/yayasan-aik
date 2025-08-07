@extends('templates.landing-page')

@section('title')
    Donatur
@endsection

@section('content')
    <section>
        <div class="container" data-aos="fade-up" data-aos-delay="100">
            <div class="alert alert-warning text-center mb-3">Hati-hati dari pihak yang tidak bertanggung jawab, Nomor
                rekenig resmi hanya menggunakan rekening a.n <b>Yayasan Amal Islam Kariango</b></div>
            <h3 class="fw-bold text-center mb-3">Salurkan Donasi Terbaik Anda</h3>
            <div class="d-flex flex-column align-items-center">
                <img src="{{ asset('assets/img/rek-bri.svg') }}" alt="" srcset="" width="200px" class="mb-3">
                <span style="font-size: 30px" class="fw-bold" id="account-number">4968 0100 2888 531</span>
                <button class="btn btn-sm btn-outline-secondary mb-3" id="copy-account">Copy No. Rekening</button>
                <span id="copy-notification" style="display:none; color:green; margin-left:10px;">Tersalin!</span>
                <span class="fw-bold">a.n. Yayasan Amal Islam Kariango</span>
            </div>
        </div>
    </section>

    <section class="light-background">
        <div class="container" data-aos="fade-up" data-aos-delay="100">
            <h5 class="fw-bold text-center">Silahkan bagi donatur yang ingin berdonasi menggunakan QR Code bisa scan dibawah
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
        <div class="container border-bottom pb-2" data-aos="fade-up" data-aos-delay="100">
            <div class="d-flex flex-column justify-content-center">
                <p class="text-center">Konfirmasi bukti transfer guna mempermudah kami melaporkan progres pembangunan
                    melalui website ataupun sosial media</p>
                <a href="https://wa.me/6285299001213" target="_blank" class="btn btn-success btn-lg"><i class="bi bi-whatsapp"></i>
                    Konfirmasi Donasi</a>
            </div>
        </div>
        <div class="container mt-5" data-aos="fade-up" data-aos-delay="300">
            <h5 class="text-center">Terimakasih atas donasi terbaik anda yang telah dititipkan di Yayasan Amal Islam
                Kariango, Insyaallah akan berdampak manfaat besar untuk orang banyak</h5>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="d-flex flex-column align-items-center">
                <h4>Lokasi pondok</h4>
                <div class="row">
                    <div class="col-sm-12 col-md-7">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d521.7521571386508!2d119.57137747202684!3d-5.0801269983699235!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dbefb74b780b49d%3A0x121dcb4d6e8e0bb6!2sMasjid%20At-Thohir%20Pondok%20Pesantren%20Tahfidzul%20Quran%20Darul%20Haq%20Makkaraeng!5e0!3m2!1sen!2sid!4v1754522969842!5m2!1sen!2sid" class="m-auto" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <section>
        {{-- <h1 class="text-bg-success position-fixed z-50 bottom-0">fjkdsl</h1> --}}
    </section>

@endsection

@section('script')
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
