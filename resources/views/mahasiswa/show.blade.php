<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Detail Mahasiswa</title>
    <link rel="stylesheet" href="{{ asset('css/mahasiswa.css') }}">
</head>
<body>
    <div class="detail-page">

        <div class="detail-topbar">
            <h1>Detail Mahasiswa</h1>
            <a href="{{ route('mahasiswa.index') }}" class="detail-back">&larr; Kembali ke Daftar</a>
        </div>

        <div class="detail-card">

            {{-- Bagian Foto --}}
            <div class="detail-photo">
                <p class="detail-photo-label">Preview Foto</p>

                @if ($mahasiswa->foto)
                    <div class="detail-photo-frame">
                        <img src="{{ asset('storage/' . $mahasiswa->foto) }}"
                            alt="Foto {{ $mahasiswa->nama }}">
                    </div>

                    <a href="{{ route('mahasiswa.download', $mahasiswa->id) }}" class="detail-download">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M4 16v2a2 2 0 002 2h12a2 2 0 002-2v-2M7 10l5 5 5-5M12 15V3" />
                        </svg>
                        Download Foto
                    </a>
                @else
                    <div class="detail-photo-empty">
                        <span>📷</span>
                        <p>Belum ada foto profil.</p>
                    </div>
                @endif
            </div>

            {{-- Bagian Informasi --}}
            <div class="detail-info">
                <span class="detail-badge">{{ $mahasiswa->jurusan }}</span>
                <h2 class="detail-name">{{ $mahasiswa->nama }}</h2>

                <dl class="detail-list">
                    <div class="detail-item">
                        <dt>NIM</dt>
                        <dd>{{ $mahasiswa->nim }}</dd>
                    </div>
                    <div class="detail-item">
                        <dt>Nama Lengkap</dt>
                        <dd>{{ $mahasiswa->nama }}</dd>
                    </div>
                    <div class="detail-item">
                        <dt>Jurusan</dt>
                        <dd>{{ $mahasiswa->jurusan }}</dd>
                    </div>
                </dl>
            </div>

        </div>
    </div>
</body>
</html>