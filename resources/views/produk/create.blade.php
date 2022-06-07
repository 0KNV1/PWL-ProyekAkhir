@extends('layouts.app')

@section('content')

    <section class="section">
        <div class="section-header">
            <h1>Table</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                <div class="breadcrumb-item"><a href="#">Components</a></div>
                <div class="breadcrumb-item">Table</div>
            </div>
        </div>
        <div class="section-body">
            <h2 class="section-title">Tambah Produk</h2>

            <div class="card">
                <div class="card-header">
                    <h4>Validasi Tambah Data</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('produk.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="name">Produk Name</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name"
                                name="name" placeholder="Enter Produk Name">
                            @error('name')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="price">price</label>
                            <input type="number" class="form-control @error('price') is-invalid @enderror" id="price"
                                name="price" placeholder="Enter Product Price" value="{{ old('price') }}">
                            @error('price')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="image">Input Image</label>
                            <input type="file" class="form-control-file @error('image') is-invalid @enderror" id="image" name="image">
                            @error('image')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="desc">Deskripsi</label>
                            <textarea name="desc" id="desc" class="form-control @error('desc') is-invalid @enderror" placeholder="Product Description"></textarea>
                            @error('desc')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                </div>
                <div class="card-footer text-right">
                    <button class="btn btn-primary">Submit</button>
                    <a class="btn btn-secondary" href="{{ route('produk.index') }}">Cancel</a>
                </div>
                </form>
            </div>
        </div>
    </section>
@endsection


@push('customScript')
    $(document).ready(()=>{
        bsCustomFileInput.init()
    })

@endpush
