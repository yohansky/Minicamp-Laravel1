@extends('layouts.app')

@section('content')
    <h2>Tambah Kategori Baru</h2>
    <form action="{{ route('categories.store') }}" method="POST">
        @csrf
        <div class="input-group mb-3 row">
            <label for="name" class="col-2">Nama Kategori:</label>
            <input type="text" class="form-control col-10" name="name" id="name" required>
        </div>
        <div class="input-group mb-3 row">
            <label for="name" class="col-2">Gambar:</label>
            <input class="form-control col-10" type="file" name="price" id="price" required>
        </div>
        <br>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
    <br>
    <a href="{{ route('categories.index') }}" class="btn btn-danger">Kembali</a>
    @endsection