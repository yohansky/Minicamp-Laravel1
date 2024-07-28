@extends('layouts.app')

@section('content')
    <h2>Edit Kategori</h2>
    <form action="{{ route('categories.update', $category->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="input-group mb-3 row">
            <label for="name" class="col-2">Nama Kategori:</label>
            <input type="text" class="form-control col-10" name="name" id="name" value="{{ $category->name }}" required>
        </div>
        <div class="input-group mb-3 row">
            <label for="name" class="col-2">Gambar:</label>
            <input class="form-control col-10" type="file" name="price" id="price" value="{{ $category->price }}" required>
        </div>
        <br>
        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
    </form>
    @endsection