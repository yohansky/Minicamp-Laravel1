@extends('layouts.app')

@section('content')
    <h2>Daftar Produk</h2>
        <form action="{{ route('products.search') }}" method="GET">
        <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Cari produk..." name="query" value="{{ request('query') }}">
            <div class="input-group-append">
                <button class="btn btn-outline-secondary" type="submit">Cari</button>
                <a href="{{ route('products.index') }}" class="btn btn-outline-secondary">Clear</a>
            </div>
        </div>
    </form>
    <table class="table">
        <thead>
            <tr>
                <th>Nama
                    <a href="{{ route('products.index', ['sort' => 'asc','order' => 'name']) }}">
                        <i class="fas fa-arrow-up"></i>
                    </a>
                    <a href="{{ route('products.index', ['sort' => 'desc','order' => 'name']) }}">
                        <i class="fas fa-arrow-down"></i>
                    </a>
                </th>
                <th>Harga (Rp.)
                    <a href="{{ route('products.index', ['sort' => 'asc','order' => 'price']) }}">
                        <i class="fas fa-arrow-up"></i>
                    </a>
                    <a href="{{ route('products.index', ['sort' => 'desc','order' => 'price']) }}">
                        <i class="fas fa-arrow-down"></i>
                    </a>
                </th>
                <th>Stock (pcs)
                    <a href="{{ route('products.index', ['sort' => 'asc','order' => 'stock']) }}">
                        <i class="fas fa-arrow-up"></i>
                    </a>
                    <a href="{{ route('products.index', ['sort' => 'desc','order' => 'stock']) }}">
                        <i class="fas fa-arrow-down"></i>
                    </a>
                </th>
                <th>Deskripsi</th>
                <th>Rating
                    <a href="{{ route('products.index', ['sort' => 'asc','order' => 'rating']) }}">
                        <i class="fas fa-arrow-up"></i>
                    </a>
                    <a href="{{ route('products.index', ['sort' => 'desc','order' => 'rating']) }}">
                        <i class="fas fa-arrow-down"></i>
                    </a>
                </th>
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

    {{ $products->links() }}

    <a href="{{ route('products.create') }}" class="btn btn-success">Tambah Produk Baru</a>
    @endsection