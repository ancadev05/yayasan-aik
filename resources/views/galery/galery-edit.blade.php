@extends('templates.dashboard')

@section('title')
    Galery
@endsection

@section('content')
    <div class="container">
        <h3>Update Galery</h3>

        <section>
            <form action="{{ url('galery/' . $galery->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row mb-3">
                    <label for="title" class="col-sm-2 col-form-label">Judul Galery</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="title" name="title" value="{{ $galery->title }}"
                            required>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="deskripsi" class="col-sm-2 col-form-label">Deskripsi</label>
                    <div class="col-sm-10">
                        <textarea type="text" class="form-control" id="deskripsi" name="deskripsi" rows="5">{{ $galery->deskripsi }}</textarea>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="gambar-galery" class="col-sm-2 col-form-label">Gambar</label>
                    <div class="col-sm-10">
                        <input type="file" class="form-control" id="gambar-galery" name="gambar-galery[]" multiple>
                        <img id="preview_galery" src="#" alt="Image Preview"
                            style="display: none; width: 200px; height: auto;" class="mt-2">
                        
                    </div>
                </div>


                <a href="{{ url('/galery') }}" class="btn btn-sm btn-danger">Batal</a>
                <button type="submit" class="btn btn-sm btn-primary">Update</button>
            </form>

        </section>

        <div class="row my-3">
            <div class="d-flex">
                @foreach ($photos as $item)
                    <span class="border d-inline-block me-1 d-flex">
                        <img src="{{ asset('public/gambar-galery/' . $item->photo) }}" alt=""
                            width="80px">
                        <form action="{{ url('/photo/' . $item->id) }}" method="post"
                            class="d-inline-block">
                            @csrf
                            @method('delete')
                            <input type="hidden" name="galery_id" value="{{ $galery->id }}">
                            <button type="submit" class="btn btn-outline-secondary">x</button>
                        </form>
                    </span>
                @endforeach
            </div>
        </div>
    </div>
@endsection
