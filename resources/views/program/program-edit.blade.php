@extends('templates.dashboard')

@section('title')
    Edit Program
@endsection

@section('content')
    <div class="container">
        <h3 class="mb-3">Edit Program</h3>
        <form action="{{ url('program/' . $program->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row mb-3">
                <label for="title" class="col-sm-2 col-form-label">Nama Program</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="title" name="title"
                        value="{{ $program->title }}" required>
                </div>
            </div>

            <div class="row mb-3">
                <label for="deskripsi" class="col-sm-2 col-form-label">Deskripsi</label>
                <div class="col-sm-10">
                    <textarea type="text" class="form-control" id="deskripsi" name="deskripsi" rows="5" required>{{ old('deskripsi', $program->deskripsi) }}</textarea>
                    <script>
                        CKEDITOR.replace( 'deskripsi' );
                    </script>
                </div>
            </div>

            <div class="row mb-3">
                <label for="gambar-program" class="col-sm-2 col-form-label">Gambar</label>
                <div class="col-sm-10">
                    <input type="hidden" name="file_lama" value="{{ $program->gambar_program }}">
                    <input type="file" class="form-control" id="gambar-program" name="gambar-program">
                    <img id="preview_gambar" src="{{ asset('public/gambar-program/' . $program->gambar_program) }}" alt="Image Preview"
                    style="width: 200px; height: auto;" class="mt-2">
                </div>
            </div>
            <a href="{{ url('program') }}" class="btn btn-sm btn-danger">Batal</a>
            <button type="submit" class="btn btn-sm btn-primary">Update</button>
        </form>

    </div>
@endsection

@section('script')
    <script>
        $(document).ready(function() {
            // menampilkan preview foto
            $('#gambar-program').change(function() {
                console.log('ok');
                console.log(this.files[0]);
                
                
                const file = this.files[0];
                if (file) {
                    const reader = new FileReader();
                    reader.onload = function(e) {
                        $('#preview_gambar').attr('src', e.target.result).show();
                    };
                    reader.readAsDataURL(file);
                }
            });
        })
    </script>
@endsection
