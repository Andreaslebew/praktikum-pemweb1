@extends('layouts.app')

@section('title', 'Tambah Mahasiswa')

@section('content')
    <h2>Tambah Mahasiswa</h2>

    <form action="/mahasiswa" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="form-field">
            <label for="nim">NIM</label>
            <input id="nim" name="nim" type="text" required
                value="{{ old('nim') }}"
                class="form-input @error('nim') is-invalid @enderror"
                aria-invalid="{{ $errors->has('nim') ? 'true' : 'false' }}"
                @error('nim') aria-describedby="nim-error" @enderror>
            @error('nim')
                <p id="nim-error" class="field-error" role="alert">{{ $message }}</p>
            @enderror
        </div>

        <div class="form-field">
            <label for="nama">Nama</label>
            <input id="nama" name="nama" type="text" required
                value="{{ old('nama') }}"
                class="form-input @error('nama') is-invalid @enderror"
                aria-invalid="{{ $errors->has('nama') ? 'true' : 'false' }}"
                @error('nama') aria-describedby="nama-error" @enderror>
            @error('nama')
                <p id="nama-error" class="field-error" role="alert">{{ $message }}</p>
            @enderror
        </div>

        <div class="form-field">
            <label for="jurusan">Jurusan</label>
            <input id="jurusan" name="jurusan" type="text" required
                value="{{ old('jurusan') }}"
                class="form-input @error('jurusan') is-invalid @enderror"
                aria-invalid="{{ $errors->has('jurusan') ? 'true' : 'false' }}"
                @error('jurusan') aria-describedby="jurusan-error" @enderror>
            @error('jurusan')
                <p id="jurusan-error" class="field-error" role="alert">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label for="foto">Foto Profil (Max 2MB):</label>
            <input type="file" name="foto" id="foto">
            @error('foto')
                <div style="color: red;">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit">Simpan Data</button>
    </form>
@endsection
