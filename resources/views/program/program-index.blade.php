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
                            <img src="{{ asset('public/gambar-program/' . $item->gambar_program) }}" width="150px" alt="...">
                        </td>
                        <td>{{ $item->title }}</td>
                        <td>{!! Str::limit($item->deskripsi, 90, '...') !!}</td>
                        <td>
                            <a href="{{ url('/program/' . $item->id . '/edit') }}" class="btn btn-sm btn-warning shadow-sm">Edit</a>
                            <form action="{{ url('/program/' . $item->id) }}" method="post" class="d-inline">
                                @csrf
                                @method('delete')
                                <button class="btn btn-sm btn-danger shadow-sm" onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')">Hapus</button>
                            </form>
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