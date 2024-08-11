@extends('layouts.app')

@section('content')
{{-- <div class="container"> --}}
    <div class="row" style="width: 100%">
        <div class="col-md-2">
            <a href="{{ route('products.create') }}" class="btn btn-success button-kiri">Create Product</a>
            {{-- <button type="button" class="btn btn-secondary button-kiri">Create Product</button> --}}
        </div>
        <div class="col-md-5" >  
            <div class="input-group mb-3">
                <input type="text" class="form-control placeholdercari" placeholder="Cari produk..." name="query" value="{{ request('query') }}">
                <div class="input-group-append">
                    <button class="btn btn-outline-secondary" type="submit">Cari</button>
                    <a href="{{ route('products.index') }}" class="btn btn-outline-secondary">Clear</a>
                </div>
            </div>
        </div>
        <div class="col-md-1 d-flex flex-row-reverse" >
            <a href="{{ route('products.index', ['sort' => 'asc','order' => 'name']) }}">
                <i class="fa fa-2x fa-arrow-up"></i>
            </a>
            <span></span>
            <a href="{{ route('products.index', ['sort' => 'desc','order' => 'name']) }}">
                <i class="fa fa-2x fa-arrow-down"></i>
            </a>
        </div>
        <div class="col-md-4 d-flex flex-row-reverse select-kanan">
            <select class="form-select" aria-label="Default select example">
                <option selected>Select One</option>
                <option value="1">Name</option>
                <option value="2">Price</option>
                <option value="3">Stock</option>
            </select>
        </div>
        
       



            {{-- default home --}}
            {{-- <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div> --}}
        
    </div>
    
    <div class="row row-cols-md-3 g-4">
        @foreach ($products as $product)
        <div class="col">
            <div class="card h-100 text-center">
                {{-- <img src="..." class="card-img-top" alt="..."> --}}
                <div class="card-body">
                <h5 class="card-title">{{ $product->name }}</h5>
                <p class="card-text">Harga: {{ $product->price }}</p>
                <p class="card-text">Stock: {{ $product->stock }}</p>
                <div class="row" style="margin-top: 10px">
                    <div class="col-6 border">Hapus</div>
                    <div class="col-6 border">Edit</div>
                </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    
{{-- </div> --}}
@endsection
