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

        <div class="main-container">
            <div id="editor">
                <textarea name="" id="" cols="30" rows="10"></textarea>
                {{-- <p>Hello from CKEditor 5!</p> --}}
            </div>
        </div>

        <script type="importmap">
            {
                "imports": {
                    "ckeditor5": "{{ asset('vendor/ckeditor5/ckeditor5.js') }}",
                    "ckeditor5/": "../../assets/vendor/"
                }
            }
        </script>
        <script type="module">
            import {
                ClassicEditor,
                Essentials,
                Paragraph,
                Bold,
                Italic,
                Font
            } from 'ckeditor5';

            ClassicEditor
                .create(document.querySelector('#editor'), {
                    licenseKey: 'eyJhbGciOiJFUzI1NiJ9.eyJleHAiOjE3NjY2MjA3OTksImp0aSI6ImU0NGEyYThjLTc3NmUtNDQyZS04YzFiLTdkMGJjMzEzOThmMyIsImxpY2Vuc2VkSG9zdHMiOlsiMTI3LjAuMC4xIiwibG9jYWxob3N0IiwiMTkyLjE2OC4qLioiLCIxMC4qLiouKiIsIjE3Mi4qLiouKiIsIioudGVzdCIsIioubG9jYWxob3N0IiwiKi5sb2NhbCJdLCJ1c2FnZUVuZHBvaW50IjoiaHR0cHM6Ly9wcm94eS1ldmVudC5ja2VkaXRvci5jb20iLCJkaXN0cmlidXRpb25DaGFubmVsIjpbImNsb3VkIiwiZHJ1cGFsIl0sImxpY2Vuc2VUeXBlIjoiZGV2ZWxvcG1lbnQiLCJmZWF0dXJlcyI6WyJEUlVQIl0sInZjIjoiNWM5NGNiZWMifQ.-ZQ1GFwsQI0ag8ym_U-PMEpJ-yvJZxLc3Td5eaYAq58dMhsfnXeO2C7fPXo3B9vFzD57wW0My9CgZNRbgksL8w', // Or 'GPL'.
                    plugins: [Essentials, Paragraph, Bold, Italic, Font],
                    toolbar: [
                        'undo', 'redo', '|', 'bold', 'italic', '|',
                        'fontSize', 'fontFamily', 'fontColor', 'fontBackgroundColor'
                    ]
                })
                .then(editor => {
                    window.editor = editor;
                })
                .catch(error => {
                    console.error(error);
                });
        </script>
    @endsection
