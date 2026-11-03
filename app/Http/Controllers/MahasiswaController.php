<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Storage;

class MahasiswaController extends Controller
{
    public function index()
    {
        $mahasiswa = Mahasiswa::all();

        return view('mahasiswa.index', compact('mahasiswa'));
    }
    public function create()
    {
        return view('mahasiswa.create');
    }

    public function store(Request $request)
    {
        // 1. Validasi DITAMBAH File
        $request->validate([
            'nim' => 'required|unique:mahasiswas|max:10',
            'nama' => 'required|min:3',
            'jurusan' => 'required',
            'foto' => 'nullable|image|max:2048',
        ], [
            'nim.unique' => 'NIM ini sudah terdaftar. Mohon gunakan NIM lain.',
            'nama.min' => 'Nama minimal 3 karakter.',
        ]);

        $data = $request->except('foto');

        // 2. Logika Upload File
        if ($request->hasFile('foto')) {
            // Menyimpan file ke disk 'public' secara eksplisit
            $path = $request->file('foto')->store('mahasiswa_fotos', 'public');

            // Simpan path relatif ke DB. ($path sudah bersih)
            $data['foto'] = $path;
        }

        // 3. Simpan Data ke DB
        Mahasiswa::create($data);
        return redirect('/mahasiswa')->with('success', 'Data mahasiswa berhasil ditambahkan!');
    }

    public function edit($id)
    {
        $mahasiswa = Mahasiswa::findOrFail($id);

        return view('mahasiswa.edit', compact('mahasiswa'));
    }

    public function update(Request $request, Mahasiswa $mahasiswa)
    {
        // 1. Validasi DITAMBAH File
        $request->validate([
            'nim' => 'required|max:10|unique:mahasiswas,nim,' . $mahasiswa->id,
            'nama' => 'required|min:3',
            'jurusan' => 'required',
            'foto' => 'nullable|image|max:2048',
        ], [
            'nim.unique' => 'NIM ini sudah terdaftar. Mohon gunakan NIM lain.',
            'nama.min' => 'Nama minimal 3 karakter.',
        ]);

        $data = $request->except('foto');

        // 2. Logika Ganti File
        if ($request->hasFile('foto')) {
            // Hapus foto lama JIKA ada
            if ($mahasiswa->foto) {
                // Storage::delete memerlukan prefix 'public/' untuk file yang berada di disk 'public'
                Storage::delete('public/' . $mahasiswa->foto);
            }

            // Simpan foto baru ke disk 'public'
            $path = $request->file('foto')->store('mahasiswa_fotos', 'public');
            $data['foto'] = $path;
        }

        // 3. Update Data ke DB
        $mahasiswa->update($data);
        return redirect('/mahasiswa')->with('success', 'Data mahasiswa berhasil diperbarui!');
    }

    public function destroy(Mahasiswa $mahasiswa)
    {
        // 1. Hapus File dari Storage
        if ($mahasiswa->foto) {
            // Hapus file dari folder storage/app/public/
            Storage::delete('public/' . $mahasiswa->foto);
        }

        if (!$mahasiswa) {
            abort(404, 'Data Mahasiswa tidak ditemukan.');
        }

        // 2. Hapus Record dari Database
        $mahasiswa->delete();
        return redirect('/mahasiswa')->with('success', 'Data mahasiswa berhasil dihapus!');
    }   

    public function show($id)
    {
        $mahasiswa = Mahasiswa::findOrFail($id);

        return view('mahasiswa.show', compact('mahasiswa'));
    }
    public function download(Mahasiswa $mahasiswa)
    {
        // Periksa apakah file ada dan tersedia
        if ($mahasiswa->foto && Storage::exists('public/' . $mahasiswa->foto)) {
            // Storage::download akan memaksa file untuk diunduh
            return Storage::download('public/' . $mahasiswa->foto, 'foto-profil-' . $mahasiswa->nim . '.jpg');
        }

        return redirect('/mahasiswa')->with('error', 'File tidak ditemukan atau belum diunggah.');
    }
}
