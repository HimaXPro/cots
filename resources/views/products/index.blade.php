@extends('layouts.app')

@section('content')
<h2>Daftar Produk</h2>

<form method="GET" class="mb-3">
    <input type="text" name="search" class="form-control" placeholder="Cari produk..." value="{{ $keyword }}">
</form>

<a href="{{ route('products.create') }}" class="btn btn-primary mb-3">+ Tambah Produk</a>

<table class="table table-bordered">
    <thead>
        <tr>
            <th>Nama</th>
            <th>Harga</th>
            <th>Stok</th>
            <th>Deskripsi</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @forelse($products as $p)
        <tr>
            <td>{{ $p->name }}</td>
            <td>{{ $p->price }}</td>
            <td>{{ $p->stock }}</td>
            <td>{{ $p->description }}</td>
            <td>
                <a href="{{ route('products.edit', $p) }}" class="btn btn-warning btn-sm">Edit</a>
                <form action="{{ route('products.destroy', $p) }}" method="POST" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger btn-sm" onclick="return confirm('Hapus?')">Delete</button>
                </form>
            </td>
        </tr>
        @empty
        <tr>
            <td colspan="5">Tidak ada data</td>
        </tr>
        @endforelse
    </tbody>
</table>
@endsection