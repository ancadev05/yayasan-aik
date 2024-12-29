@extends('templates.dashboard')

@section('title')
    Tambah Program
@endsection

@section('content')
    <div class="container">
        <h3 class="mb-3">Tambah Program</h3>
        <form action="{{ url('program') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row mb-3">
                <label for="title" class="col-sm-2 col-form-label">Nama Program</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="title" name="title"
                        value="{{ old('nama_program') }}" required>
                </div>
            </div>

            <div class="row mb-3">
                <label for="deskripsi" class="col-sm-2 col-form-label">Deskripsi</label>
                <div class="col-sm-10">
                    <textarea type="text" class="form-control" id="deskripsi" name="deskripsi" rows="5" required>{{ old('deskripsi') }}</textarea>
                    <script>
                        CKEDITOR.replace( 'deskripsi' );
                    </script>
                </div>
            </div>

            <div class="row mb-3">
                <label for="gambar-program" class="col-sm-2 col-form-label">Gambar</label>
                <div class="col-sm-10">
                    <input type="file" class="form-control" id="gambar-program" name="gambar-program">
                    <img id="preview_gambar" src="#" alt="Image Preview"
                        style="display: none; width: 200px; height: auto;" class="mt-2">
                </div>
            </div>
            <a href="{{ url('program') }}" class="btn btn-sm btn-danger">Batal</a>
            <button type="submit" class="btn btn-sm btn-primary">Tambah</button>
        </form>

    @endsection
