@extends('layouts.app')

@section('content')
    <h2>Daftar Kategori</h2>
    <table class="table">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Gambar</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tBody>
            @foreach ($categories as $category)
            <tr>
                <td>{{ $category->name }}</td>
                <td>{{ $category->image }}</td>
                
                <td>
                    <a href="{{ route('categories.show', $category->id)}}" class="btn btn-info">Detail</a>
                    <a href="{{ route('categories.edit', $category->id) }}" class="btn btn-primary">Edit</a>
                    <form action="{{ route('categories.destroy', $category->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus kategori ini?')">Hapus</button>
                        </form>
                </td>
            </tr>
            @endforeach
        </tBody>
    </table>
    <a href="{{ route('categories.create') }}" class="btn btn-success">Tambah Kategori Baru</a>
    @endsection