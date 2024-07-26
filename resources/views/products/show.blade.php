@extends('layouts.app')

@section('content')
    <h2>Detail Produk</h2>
    <div>
        <strong>Nama:</strong> {{ $product->name }}<br>
        <strong>Harga:</strong> {{ $product->price }}<br>
        <strong>Stok:</strong> {{ $product->stock }}<br>
        <strong>Deskripsi:</strong> {{ $product->description }}<br>
        <strong>Rating:</strong> {{ $product->rating }}<br>
    </div>
    <br>
    <a href="{{ route('products.index') }}" class="btn btn-primary">Kembali ke Daftar Produk</a>
@endsection