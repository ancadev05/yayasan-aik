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
                <label for="nama_program" class="col-sm-2 col-form-label">Nama Program</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="nama_program" name="nama_program" value="{{ old('nama_program') }}" required>
                </div>
            </div>

            <div class="row mb-3">
                <label for="deskripsi" class="col-sm-2 col-form-label">Deskripsi</label>
                <div class="col-sm-10">
                    <textarea type="text" class="form-control" id="deskripsi" name="deskripsi" rows="5" required>{{ old('deskripsi') }}</textarea>
                </div>
            </div>

            <div class="row mb-3">
                <label for="gambar_program" class="col-sm-2 col-form-label">Gambar</label>
                <div class="col-sm-10">
                    <input type="file" class="form-control" id="gambar_program" name="gambar_program">
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>

    </div>
@endsection
