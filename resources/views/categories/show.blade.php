@extends('layouts.app')

@section('content')
    <h2>Detail Kategori</h2>
    <div>
        <strong>Nama:</strong> {{ $category->name }}<br>
        <strong>Gambar:</strong> {{ $category->image }}<br>
        
    </div>
    <br>
    <a href="{{ route('products.index') }}" class="btn btn-primary">Kembali ke Daftar Kategori</a>
@endsection