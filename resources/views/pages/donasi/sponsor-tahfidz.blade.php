@extends('templates.landing-page')

@section('meta')
    <title>Sponsor Tahfidz</title>

    {{-- audiends google --}}
    <meta name="description"
        content="Kita hadir untuk meringankan beban mereka agar mereka tetap bisa belajar, menghafal, dan menuntut ilmu dengan tenang">
    <link rel="canonical" href="{{ $url }}">

    {{-- audiends sosial media --}}
    <meta property="og:title" content="Sponsor Tahfidz | Sedekah Jariyah Penuh Berkah">
    <meta property="og:description"
        content="Kita hadir untuk meringankan beban mereka agar mereka tetap bisa belajar, menghafal, dan menuntut ilmu dengan tenang">
    <meta property="og:image" content="{{ asset('assets/img/foto-donasi/sponsor-tahfidz/sponsor-tahfidz.png') }}">
    <meta property="og:url" content="{{ $url }}">

    <script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "DonateAction",
  "name": "Wakaf Al-Qur’an Online",
  "description": "Kita hadir untuk meringankan beban mereka agar mereka tetap bisa belajar, menghafal, dan menuntut ilmu dengan tenang",
  "url": "{{ $url }}",
  "image": "{{ asset('assets/img/foto-donasi/sponsor-tahfidz/sponsor-tahfidz.png') }}",
  "recipient": {
    "@type": "Organization",
    "name": "Yayasan Amal Islam Kariango Maros",
    "url": "https://yayasanamalislamkariango.com/"
  }
}
</script>
@endsection

@section('content')
    <div class="container my-3" data-aos="fade-up" data-aos-delay="300">

        {{-- <div class="card shadow-sm"> --}}
            {{-- <div class="card-body"> --}}
                {{-- <div class="container"> --}}
                    {{-- <h4 class="text-center fw-bold">ORANG TUA ASUH</h4>
                    <h4>Sponsor Tahfidz, Sponsor Pahala Tanpa Putus</h4>
                    <h5>Setiap hafalan mereka, pahala abadi untuk Anda.</h5> --}}
                    <img src="{{ asset('assets/img/foto-donasi/sponsor-tahfidz/sponsor-tahfidz.png') }}" alt=""
                        width="100%">
                {{-- </div> --}}
            {{-- </div> --}}

        {{-- </div> --}}
    </div>

    <div class="container mb-3" data-aos="fade-up" data-aos-delay="300">
        <div class="card shadow-sm">
            <div class="card-body">
                <h5 class="fw-bold">1. Latar Belakang</h5>
                <p>Di Pondok Tahfidz Darul Haq Makkaraeng, puluhan santri menapaki jalan mulia untuk menjadi penghafal
                    Al-Qur’an. Namun, di antara mereka ada anak-anak yatim dan dhuafa yang harus berjuang keras, bukan hanya
                    untuk menghafal ayat-ayat Allah, tapi juga untuk memenuhi kebutuhan hidup sehari-hari.</p>
                <p>Melalui <b>Program Sponsor Tahfidz Saya Peduli</b>, kita hadir untuk meringankan beban mereka. Agar
                    mereka tetap bisa belajar, menghafal, dan menuntut ilmu dengan tenang, tanpa dihantui kekhawatiran biaya
                    pendidikan maupun kebutuhan pokok.</p>
                <p>Dengan bimbingan ustadz dan ustadzah, para santri ditempa menjadi pribadi yang mandiri, berdisiplin,
                    serta berakhlak mulia. Mereka adalah generasi Qur’ani yang kelak akan menjadi cahaya penerang umat.</p>
                <p>Rasulullah SAW bersabda: <br>
                    <i>"Saya dan orang yang memelihara anak yatim itu di surga seperti ini,"</i> <br>
                    Beliau mengisyaratkan dengan jari telunjuk dan jari tengahnya, merapatkan keduanya. (HR. Bukhari)
                </p>

                <h5 class="fw-bold">2. Tujuan</h5>
                <p>Program ini hadir untuk:</p>
                <ul>
                    <li>Mendukung biaya pendidikan dan kebutuhan sehari-hari santri yatim/dhuafa.</li>
                    <li>Mengembangkan potensi mereka agar tumbuh menjadi hafidz Qur’an yang tangguh.</li>
                    <li>Membentuk generasi Qur’ani yang beriman, berilmu, dan berakhlak mulia.</li>
                </ul>

                <h5 class="fw-bold">3. Manfaat</h5>
                <p>Menjadi sponsor bukan sekadar berbagi harta, tapi juga membuka pintu pahala yang terus mengalir.
                    InsyaAllah, setiap ayat Al-Qur’an yang mereka baca, hafal, dan amalkan, menjadi pahala jariyah bagi
                    Anda.</p>
                <p>Selain itu, program ini membuka ruang kolaborasi, mempererat ukhuwah, dan menghadirkan citra positif di
                    tengah masyarakat.</p>
                <p>Mari bergabung dalam Sponsor Tahfidz Saya Peduli di Pondok Tahfidz Darul Haq Makkaraeng. Bersama-sama,
                    kita wujudkan generasi Qur’ani yang kuat, tangguh, dan membawa cahaya Al-Qur’an untuk umat.</p>
                <p>Zaid bin Khālid Al-Juhani -raḍiyallāhu 'anhu- meriwayatkan, Rasulullah SAW bersabda: <br>
                    <i>"Siapa yang mempersiapkan bekal untuk orang yang berjuang di jalan Allah, maka ia dianggap
                        benar-benar telah ikut berjuang."</i> <br>
                    (HR. Bukhari & Muslim)
                </p>

                <p>🌸 <i><b>Bersama, kita bisa bahagiakan mereka.</b></i></p>
                <p>🌸 <i><b>Bersama, kita bisa menjadi bagian dari pahala yang tak terputus.</b></i></p>

            </div>
        </div>
    </div>

    <div class="container mb-3" data-aos="fade-up" data-aos-delay="300">
        <div class="card shadow-sm">
            <div class="card-body">
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
                <hr>

                <div class="container">
                    <p class="fw-bold text-center">Bisa juga menggunakan QR Code berikut: </p>
                    <div class="d-flex flex-column align-items-center mt-3">
                        <img id="qris-image" src="{{ asset('assets/img/qris.jpeg') }}" alt="" srcset=""
                            width="300px" class="mb-3">
                        <button id="download-qris" class="btn btn-sm btn-outline-secondary mb-3">Download QRIS</button>
                        <span class="fw-bold text-center">TRANSFER LEBIH MUDAH DENGAN QRIS</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- konfirmasi donasi --}}
    <div class="container mb-3" data-aos="fade-up" data-aos-delay="300">
        <div class="card shadow-sm">
            <div class="card-body">
                <div class="d-flex flex-column justify-content-center mb-3">
                    <p class="text-center">Konfirmasi bukti transfer guna mempermudah kami melaporkan progres
                        pembangunan
                        melalui website ataupun sosial media</p>
                    <a href="https://wa.me/6285299001213" target="_blank" class="btn btn-success btn-lg"><i
                            class="bi bi-whatsapp"></i>
                        Konfirmasi Donasi</a>
                </div>
                <p class="text-center">Terimakasih atas donasi terbaik anda yang telah dititipkan di Yayasan Amal Islam
                    Kariango, Insyaallah akan berdampak manfaat besar untuk orang banyak</p>
            </div>
        </div>
    </div>

    {{-- alamat dan dokumen --}}
    <div class="container mb-3" data-aos="fade-up" data-aos-delay="300">
        <div class="card shadow-sm">
            <div class="card-body">
                <div class="row g-3">
                    <div class="col-sm-12 col-md-6">
                        <h6>Lokasi Pondok:</h6>
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d959.8996146328598!2d119.57118226955367!3d-5.081103999680981!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zNcKwMDQnNTIuMCJTIDExOcKwMzQnMTguNiJF!5e1!3m2!1sen!2sid!4v1754989133035!5m2!1sen!2sid"
                            class="m-auto" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    <div class="col-sm-12 col-md-6">
                        <h6>Dokumen Legalitas: </h6>
                        <img src="{{ asset('assets/img/dokumen-legalitas.png') }}" alt="" width="100%">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="w-100">
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
                        $("#statusMessage").removeClass('error').addClass('alert alert-success')
                            .text(
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
                        $("#statusMessage").removeClass('success').addClass(
                            'alert alert-danger').text(
                            errorMessage);
                    }
                });
            });
        });
    </script>
@endsection
