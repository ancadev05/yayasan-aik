@extends('templates.landing-page')

@section('title')
    Donatur
@endsection

@section('content')
    <section>
        <div class="container">
            <h5 class="text-center">Atau daftar menjadi donatur tetep</h5>
            <a href="#" class="btn btn-primary">DAFTAR</a>
        </div>
    </section>

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

    {{-- <section> --}}
    {{-- </section> --}}
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
