@extends('layouts.app')

@section('content')
    <h1>Halaman Profil</h1>
    <p>Nama saya adalah <strong>{{ $nama }}</strong>.</p>
    <p>Saya kuliah di jurusan <strong>{{ $jurusan }}</strong>.</p>
@endsection