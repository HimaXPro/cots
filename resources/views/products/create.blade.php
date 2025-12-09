@extends('layouts.app')

@section('content')
<h2>Tambah Produk</h2>

<form action="{{ route('products.store') }}" method="POST">
    @csrf

    <div class="mb-3">
        <label>Nama</label>
        <input type="text" name="name" class="form-control" value="{{ old('name') }}">
        @error('name') <small class="text-danger">{{ $message }}</small> @enderror
    </div>

    <div class="mb-3">
        <label>Harga</label>
        <input type="number" name="price" class="form-control" value="{{ old('price') }}">
        @error('price') <small class="text-danger">{{ $message }}</small> @enderror
    </div>

    <div class="mb-3">
        <label>Stok</label>
        <input type="number" name="stock" class="form-control" value="{{ old('stock') }}">
        @error('stock') <small class="text-danger">{{ $message }}</small> @enderror
    </div>

    <div class="mb-3">
        <label>Deskripsi</label>
        <textarea name="description" class="form-control">{{ old('description') }}</textarea>
    </div>

    <button class="btn btn-success">Simpan</button>
</form>
@endsection