<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Mahasiswa</title>
    <link rel="stylesheet" href="{{ asset('css/mahasiswa.css') }}">
</head>
<body>
    <h1>Edit Data Mahasiswa</h1>
    <form action="/mahasiswa/{{ $mahasiswa->id }}" method="POST" enctype="multipart/form-data"> <!-- WAJIB ADA enctype -->
        @csrf
        @method('PUT')

        <div class="form-field">
            <label for="nim">NIM</label>
            <input id="nim" name="nim" type="text" required
                value="{{ old('nim', $mahasiswa->nim) }}"
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
                value="{{ old('nama', $mahasiswa->nama) }}"
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
                value="{{ old('jurusan', $mahasiswa->jurusan) }}"
                class="form-input @error('jurusan') is-invalid @enderror"
                aria-invalid="{{ $errors->has('jurusan') ? 'true' : 'false' }}"
                @error('jurusan') aria-describedby="jurusan-error" @enderror>
            @error('jurusan')
                <p id="jurusan-error" class="field-error" role="alert">{{ $message }}</p>
            @enderror
        </div>

        <div>
                <label for="foto">Foto Profil Baru (Max 2MB):</label>
                @if ($mahasiswa->foto)
                    <p>Foto saat ini: <img src="{{ asset('storage/' . $mahasiswa->foto) }}" style="width: 50px;"></p>
                @endif
                <input type="file" name="foto" id="foto">
                @error('foto')
                    <div style="color: red;">{{ $message }}</div>
                @enderror
        </div>

        <button type="submit">Simpan Perubahan</button>
    </form>
</body>
</html>
