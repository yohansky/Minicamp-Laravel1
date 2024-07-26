@extends('layouts.app')

@section('content')
    <h2>Tambah Produk Baru</h2>
    <form action="{{ route('products.update', $product->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="input-group mb-3 row">
            <label for="name" class="col-2">Nama Produk:</label>
            <input type="text" class="form-control col-10" name="name" id="name" value="{{ $product->name }}" required>
        </div>
        <div class="input-group mb-3 row">
            <label for="name" class="col-2">Harga:</label>
            <input type="number" class="form-control col-10" name="price" id="price" value="{{ $product->price }}" required>
        </div>
        <div class="input-group mb-3 row">
            <label for="name" class="col-2">Stock:</label>
            <input type="number" class="form-control col-10" name="stock" id="stock" value="{{ $product->stock }}" required>
        </div>
        <br>
        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
    </form>
    @endsection