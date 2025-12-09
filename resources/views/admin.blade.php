@extends('layouts.app')

@section('content')
<h2>Halaman Admin</h2>

<div class="alert alert-info">
    Anda login sebagai: <strong>{{ session('user.username') }}</strong>
</div>

<a href="{{ route('logout') }}" class="btn btn-danger">Logout</a>
@endsection