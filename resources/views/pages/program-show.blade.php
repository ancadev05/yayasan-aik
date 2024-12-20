@extends('templates.landing-page')

@section('title')
    Program
@endsection

@section('content')
    <section class="section">
        <div class="container" data-aos="fade-up" data-aos-delay="100">
            <div class="card shadow-sm">
                <img src="{{ asset('public/gambar-program/' . $program->gambar_program) }}" class="img-fluid" alt="...">
                <div class="card-body">
                    <h3 class="fw-bold mt-3">{{ $program->title }}</h3>
                    <p>{{ $program->deskripsi }}</p>
                </div>
            </div>

            <div class="container mt-5" data-aos="fade-up" data-aos-delay="100">
                <div class="d-flex justify-content-center">
                    <a href="https://wa.me/6285299001213" target="_blank" class="btn btn-success"><i class="bi bi-whatsapp"></i> Hubungi Admin Untuk Donasi</a>
                    {{-- <button class="btn btn-lg btn-warning" data-bs-toggle="modal" data-bs-target="#donasi">Donasi Sekarang</button> --}}
                </div>
            </div>

        </div>
    </section>
@endsection