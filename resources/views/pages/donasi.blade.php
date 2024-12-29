@extends('templates.landing-page')

@section('title')
    Donatur
@endsection

@section('content')
    <section class="">
        <div class="container" data-aos="fade-up" data-aos-delay="100">
            <h3 class="fw-bold text-center">Salurkan Donasi Terbaik Anda</h3>
            <div class="card p-2">
                <div class="d-flex justify-content-center">
                    <img src="{{ asset('assets/img/rek-bri.svg') }}" alt="" srcset="" width="100px" class="me-3">
                     <div class="d-flex flex-column fw-bold">
                        <span>4968 0100 2888 531</span>
                        <span>Yayasan Amal Islam Kariango</span>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="light-background">
        <div class="container" data-aos="fade-up" data-aos-delay="100">
            <h5 class="fw-bold text-center">Silahkan bagi donatur yang ingin berdonasi menggunakan QR Code bisa scan dibawah ini: </h5>
            <div class="d-flex mt-3">
                <img src="{{ asset('assets/img/qris.jpeg') }}" alt="" srcset="" width="300px" class="me-3">
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
        <div class="container mt-5 border-bottom pb-2" data-aos="fade-up" data-aos-delay="100">
            <div class="d-flex justify-content-center">
                <a href="https://wa.me/6285299001213" target="_blank" class="btn btn-success"><i class="bi bi-whatsapp"></i> Konfirmasi Donasi</a>
            </div>
        </div>
        <div class="container mt-5" data-aos="fade-up" data-aos-delay="300">
            <h5 class="text-center">Terimakasih atas donasi terbaik anda yang telah dititipkan di Yayasan Amal Islam Kariango, Insyaallah akan berdampak manfaat besar untuk orang banyak</h5>
        </div>
    </section>

    {{-- <section> --}}
    {{-- </section> --}}
    @endsection