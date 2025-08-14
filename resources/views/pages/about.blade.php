@extends('templates.landing-page')

@section('title')
    Tentang Kami
@endsection

@section('content')
    <section class="about section">
        <div class="container" data-aos="fade-up" data-aos-delay="100">
            <h3 class="fw-bold">Yayasan Amal Islam Kariango</h3>
            <p class="text-justify">Yayasan Amal islam kariango adalah lembaga nirlaba yang mengemban amanah untuk menghimpun, mengelola dan mendayagunakan dana sosial dan didedikasikan untuk membangun kemandirian masyarakat dengan inspirasi kepedulian, toleransi dan nilai – nilai ekonomi.</p>
            <p class="text-justify">Lembaga ini bersifat independen, mandiri dan tidak berpihak pada kepentingan kelompok tertentu dengan semangat pengabdian masyarakat. Dalam aktivitas program, Yayasan Amal Islam Karaingo Membangun bekerja sama dengan masyarakat melalui penghimpunan dana sosial masyarakat yang tidak mengikat dan Corporate Social Responsibility (CSR).</p>
            <p class="text-justify">Lembaga ini juga didukung oleh jaringan relawan dari seluruh Indonesia yang dapat selalu merespon dengan cepat persoalan sosial, kemiskinan dan isu-isu kebencanaan.</p>

            <h3 class="fw-bold">Visi</h3>
            <hr>
            {{-- <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolores, obcaecati.</p> --}}

            <h3 class="fw-bold">Misi</h3>
            <hr>
            {{-- <ul>
                <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos, est.</li>
                <li>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolores autem, dolorum facilis ducimus facere quaerat tempora neque accusamus nemo fuga.</li>
                <li>Lorem ipsum dolor sit amet.</li>
                <li>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Cumque quos nemo, voluptatibus tempore tempora unde!</li>
            </ul> --}}

            <h6 class="">Dokumen Legalitas</h6>
            <div class="row">
                <div class="col-md-6 col-sm-10">
                    <img src="{{ asset('assets/img/akte-yayasan.jpg') }}" alt="" width="100%">

                </div>
            </div>
        </div>
    </section>
@endsection
