@extends('templates.dashboard')

@section('title')
    Program
@endsection

@section('content')
<div class="container">
    <h3>Daftar Program</h3>
    <div class="mb-3 d-flex justify-content-end">
        <a href="{{ url('/galery/create') }}" class="btn btn-sm btn-success">Tambah Galery</a>
    </div>

    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Judul</th>
                    <th>Foto</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $i = 1;
                @endphp
                @forelse ($galerys as $item)
                    <tr>
                        <td>{{ $i++ }}</td>
                        <td>{{ $item->title }}</td>
                        <td>
                            {{ $item->photo->photo }}
                            {{-- <img src="{{ asset('public/galery/' . $item->photo->photo[0]) }}" width="150px" alt="..."> --}}
                        </td>
                        <td>
                            <a href="{{ url('/galery/' . $item->id . '/edit') }}" class="btn btn-sm btn-warning shadow-sm">Edit</a>
                            <form action="{{ url('/galery/' . $item->id) }}" method="post" class="d-inline">
                                @csrf
                                @method('delete')
                                <button class="btn btn-sm btn-danger shadow-sm" onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <div class="alert alert-info">Tidak Ada Galery</div>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection