@extends('templates.landing-page')

@section('meta')
    <title>AIK | Wakaf Qur'an</title>

    {{-- audiends google --}}
    <meta name="description" content="Wakaf">
    <link rel="canonical" href="{{ $url }}">

    {{-- audiends sosial media --}}
    <meta property="og:title" content="Renovasi Gedung">
    <meta property="og:description" content="Ruangan Santri dan Masjid Butuh Perbaikan">
    <meta property="og:image" content="{{ asset('assets/img/foto-donasi/wakaf-quran/wakaf-quran.png') }}">
    <meta property="og:url" content="{{ $url }}">
@endsection

@section('content')
    <section>
        <div class="container">
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

    {{-- form biodata pewakaf --}}
    <section>
        <div class="container">

            <form action="" method="post" id="donatur-form">
                @csrf
                <input type="hidden" name="program_donasi_id" value="1">
                <div class="mb-3">
                    <label for="name" class="form-label fw-bold">Nama Lengkap</label>
                    <input type="text" class="form-control" name="name">
                </div>
                <div class="mb-3">
                    <label for="no_wa" class="form-label fw-bold">No. WhatsApp</label>
                    <input type="number" class="form-control" name="no_wa">
                </div>
                <div class="mb-3">
                    <label for="alamat" class="form-label fw-bold">Alamat</label>
                    <textarea name="alamat" id="" cols="30" rows="3" class="form-control"></textarea>
                </div>
                <div class="mb-3">
                    <label for="barang" class="form-label fw-bold">Pilih Jumlah Wakaf Mushaf Quran</label>
                    <select name="barang" id="" class="form-select">
                        <option value="">Jumlah Wakaf</option>
                        <option value="1 Qur'an A5 - Rp 50.000">1 Qur'an A5 - Rp 50.000</option>
                        <option value="2 Qur'an A5 - Rp 100.000">2 Qur'an A5 - Rp 100.000</option>
                        <option value="3 Qur'an A5 - Rp 150.000">3 Qur'an A5 - Rp 150.000</option>
                        <option value="4 Qur'an A5 - Rp 200.000">4 Qur'an A5 - Rp 200.000</option>
                        <option value="10 Qur'an A5 - Rp 500.000">10 Qur'an A5 - Rp 500.000</option>
                        <option value="20 Qur'an A5 - Rp 1.000.000">20 Qur'an A5 - Rp 1.000.000</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="" class="form-label fw-bold">Do'a Anda!</label>
                    <textarea name="doa" id="" cols="30" rows="10" class="form-control"></textarea>
                </div>
                <div class="mb-3">
                    <label for="ket" class="form-label fw-bold">Ket.</label>
                    <textarea name="ket" id="ket" cols="30" rows="5" class="form-control"></textarea>
                </div>
                <div class="mb-3">
                    <button class="btn btn-warning w-100">Bismillah, Saya niat wakaf Qur'an</button>
                </div>
            </form>

            <div id="statusMessage"></div>
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
    </section>

    <section class="">
        <div class="container" data-aos="fade-up" data-aos-delay="100">
            <h5 class="fw-bold text-center">Silahkan bagi donatur yang ingin berdonasi menggunakan QR Code bisa scan
                dibawah
                ini: </h5>
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
        <div class="container mt-5" data-aos="fade-up" data-aos-delay="300">
            <h5 class="text-center">Terimakasih atas donasi terbaik anda yang telah dititipkan di Yayasan Amal Islam
                Kariango, Insyaallah akan berdampak manfaat besar untuk orang banyak</h5>
        </div>
    </section>

    <section>
        <div class="container">
            <h4 class="text-center">Lokasi lahan yang akan dibangunkan asrama santri:</h4>
            {{-- <div class="d-flex flex-column align-items-center"> --}}
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
            {{-- </div> --}}

        </div>
    </section>

    <section class="w-00 w-100">
        <a href="https://wa.me/6285299001213">
            <div class="conainer position-fixed bottom-0 bg-success w-100">
                <h3 class="text-bg-success d-block text-center w-100 pt-2"><i class="bi bi-whatsapp"></i> CHAT ADMIN</h3>
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
        const API_ENDPOINT = "{{ env('API_URL') }}";
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

            // kirim data donatur ke aplikasi donatur
            // Menangani event submit pada form dengan ID "userForm"
            $("#donatur-form").submit(function(event) {
                // Mencegah form melakukan submit standar (refresh halaman)
                event.preventDefault();

                // Mengambil data dari form secara otomatis
                var formData = $(this).serialize();

                // Mengirim data menggunakan AJAX
                $.ajax({
                    url: API_ENDPOINT, // Ganti dengan URL API yang sesuai
                    type: 'POST',
                    data: formData, // Data yang akan dikirim
                    dataType: 'json', // Tipe data yang diharapkan dari server
                    headers: {
                        'Accept': 'application/json'
                    },

                    // Callback jika permintaan berhasil
                    success: function(response) {
                        // Tampilkan pesan sukses dari server
                        $("#statusMessage").removeClass('error').addClass('alert alert-success').text(
                            response.message);

                        // Kosongkan form setelah berhasil
                        $("#donatur-form")[0].reset();
                    },

                    // Callback jika permintaan gagal
                    error: function(xhr) {
                        var errorMessage = "Terjadi kesalahan. Silakan coba lagi.";

                        // Jika ada pesan error dari server (misalnya validasi)
                        if (xhr.responseJSON && xhr.responseJSON.errors) {
                            errorMessage = "Mohon periksa kembali input Anda.";
                            // Anda bisa menambahkan logika untuk menampilkan error spesifik per field
                            console.log(xhr.responseJSON.errors);
                        }

                        // Tampilkan pesan error
                        $("#statusMessage").removeClass('success').addClass('alert alert-danger').text(
                            errorMessage);
                    }
                });
            });
        });
    </script>
@endsection
