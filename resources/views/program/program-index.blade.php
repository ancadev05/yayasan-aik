@extends('templates.dashboard')

@section('title')
    Program
@endsection

@section('content')
<div class="container">
    <h3>Daftar Program</h3>
    <a href="{{ url('/program/create') }}" class="btn btn-sm btn-success">Tambah Program</a>

    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Gambar</th>
                    <th>Nama Program</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>
                        <img src="{{ asset('/bootslander/assets/img/gallery/gallery-1.jpg') }}" width="150px" alt="...">
                    </td>
                    <td>Wakaf Al Qur'an</td>
                    <td>
                        <button class="btn btn-sm btn-warning shadow-sm">Edit</button>
                        <button class="btn btn-sm btn-danger shadow-sm">Hapus</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection