@extends('templates.landing-page')

@section('title')
    Program
@endsection

@section('content')
    <section class="section">
        <div class="container" data-aos="fade-up" data-aos-delay="100">
            <div class="card shadow-sm">
                <img src="{{ asset('/bootslander/assets/img/gallery/gallery-1.jpg') }}" class="img-fluid" alt="...">
                <div class="card-body">
                    <h3 class="fw-bold mt-3">Wakaf Al Qur'an</h3>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Atque fuga mollitia reprehenderit a omnis praesentium odit quo ad consectetur minus? Aut eius ratione asperiores distinctio, ducimus ipsum sed delectus consequatur sequi animi eligendi aperiam perspiciatis, magni libero voluptatibus, at fuga?</p>
                </div>
            </div>

        </div>
    </section>
@endsection