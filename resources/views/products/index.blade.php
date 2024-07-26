@extends('layouts.app')

@section('content')
    <h2>Daftar Produk</h2>
    <table class="table">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Harga (Rp.)</th>
                <th>Stock (pcs)</th>
                <th>Deskripsi</th>
                <th>Rating</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tBody>
            @foreach ($products as $product)
            <tr>
                <td>{{ $product->name }}</td>
                <td>{{ $product->price }}</td>
                <td>{{ $product->stock }}</td>
                <td>{{ $product->description }}</td>
                <td>{{ $product->rating }}</td>
                <td>
                    <a href="{{ route('products.show', $product->id)}}" class="btn btn-info">Detail</a>
                    <a href="{{ route('products.edit', $product->id) }}" class="btn btn-primary">Edit</a>
                    <form action="{{ route('products.destroy', $product->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus produk ini?')">Hapus</button>
                        </form>
                </td>
            </tr>
            @endforeach
        </tBody>
    </table>
    <a href="{{ route('products.create') }}" class="btn btn-success">Tambah Produk Baru</a>
    @endsection