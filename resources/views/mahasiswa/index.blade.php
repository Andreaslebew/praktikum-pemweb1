<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
    <link rel="stylesheet" href="{{ asset('css/mahasiswa.css') }}">
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    @if (session('success'))
        <div class="alert alert-success" role="status">
            {{ session('success') }}
        </div>
    @endif
    <p>
        <a href="{{ route('mahasiswa.create') }}" class="btn-tambah">
            Tambah Data Mahasiswa
        </a>
    </p>
    <table border="1" cellpadding="10">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>NIM</th>
                <th>Jurusan</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($mahasiswa as $mhs)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $mhs->nama }}</td>
                    <td>{{ $mhs->nim }}</td>
                    <td>{{ $mhs->jurusan }}</td>
                    <td>
                        <div class="actions">
                            <a href="{{ route('mahasiswa.show', $mhs->id) }}"
                            class="btn btn-detail btn-sm">Detail</a>

                            <a href="{{ route('mahasiswa.edit', $mhs->id) }}"
                            class="btn btn-edit btn-sm">Edit</a>

                            <form action="{{ route('mahasiswa.destroy', $mhs->id) }}"
                                method="POST"
                                class="inline-form"
                                onsubmit="return confirm('Yakin ingin menghapus data mahasiswa ini?')">
                                @csrf
                                @method('DELETE')

                                <button type="submit" class="btn btn-danger btn-sm">
                                    Hapus
                                </button>
                            </form>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>