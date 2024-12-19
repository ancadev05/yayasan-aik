@extends('templates.dashboard')

@section('title')
    Program
@endsection

@section('content')
<div class="container">
    <h3>Daftar Program</h3>
    <div class="mb-3 d-flex justify-content-end">
        <a href="{{ url('/program/create') }}" class="btn btn-sm btn-success">Tambah Program</a>
    </div>

    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Gambar</th>
                    <th>Nama Program</th>
                    <th>Deskripsi</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $i = 1;
                @endphp
                @forelse ($programs as $item)
                    <tr>
                        <td>{{ $i++ }}</td>
                        <td>
                            <img src="{{ asset('storage/gambar-program/' . $item->gambar_program) }}" width="150px" alt="...">
                        </td>
                        <td>{{ $item->title }}</td>
                        <td>{{ $item->deskripsi }}</td>
                        <td>
                            <button class="btn btn-sm btn-warning shadow-sm">Edit</button>
                            <button class="btn btn-sm btn-danger shadow-sm">Hapus</button>
                        </td>
                    </tr>
                @empty
                    <div class="alert alert-info">Tidak Ada Program</div>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection