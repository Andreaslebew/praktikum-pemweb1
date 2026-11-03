<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas Praktikum Laravel</title>
    <!-- Menggunakan Tailwind CSS via CDN untuk styling instan -->
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .glass-effect {
            background: rgba(255, 255, 255, 0.05);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.1);
        }
    </style>
</head>
<body class="bg-slate-900 text-white font-sans antialiased min-h-screen flex flex-col justify-center items-center relative overflow-hidden">
    
    <!-- Dekorasi Background Latar Belakang -->
    <div class="absolute top-[-10%] left-[-10%] w-96 h-96 bg-blue-600 rounded-full mix-blend-multiply filter blur-[128px] opacity-40"></div>
    <div class="absolute bottom-[-10%] right-[-10%] w-96 h-96 bg-purple-600 rounded-full mix-blend-multiply filter blur-[128px] opacity-40"></div>

    <main class="z-10 w-full max-w-4xl p-6">
        <!-- Bagian Header/Judul -->
        <header class="text-center mb-12">
            <h1 class="text-5xl font-extrabold text-transparent bg-clip-text bg-linear-to-r from-blue-400 to-purple-400 mb-4 tracking-tight">
                Praktikum Pemrograman Web
            </h1>
            <p class="text-xl text-slate-400">Pengenalan Dasar Framework Laravel</p>
        </header>

        <!-- Kartu Identitas Mahasiswa -->
        <div class="glass-effect rounded-2xl p-8 mb-8 shadow-2xl transition transform hover:-translate-y-1 duration-300">
            <h2 class="text-2xl font-bold mb-6 border-b border-slate-700 pb-3 flex items-center gap-2">
                👨‍💻 Data Mahasiswa
            </h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 text-slate-300">
                <div>
                    <p class="text-xs tracking-wider text-slate-500 uppercase mb-1">Nama Lengkap</p>
                    <p class="text-lg font-semibold text-white">Andrean Satria Bagaskara</p>
                </div>
                <div>
                    <p class="text-xs tracking-wider text-slate-500 uppercase mb-1">NIM</p>
                    <p class="text-lg font-semibold text-white">251-111-012</p>
                </div>
                <div>
                    <p class="text-xs tracking-wider text-slate-500 uppercase mb-1">Program Studi</p>
                    <p class="text-lg font-semibold text-white">Informatika</p>
                </div>
                <div>
                    <p class="text-xs tracking-wider text-slate-500 uppercase mb-1">Perguruan Tinggi</p>
                    <p class="text-lg font-semibold text-white">Universitas Bhinneka Nusantara</p>
                </div>
            </div>
        </div>

        <!-- Bagian Fitur/Materi Pembelajaran -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="glass-effect rounded-xl p-6 text-center hover:bg-white/10 transition duration-300 border-t-4 border-t-blue-500">
                <div class="text-4xl mb-4">🚀</div>
                <h3 class="font-bold text-lg mb-2 text-white">Routing</h3>
                <p class="text-sm text-slate-400">Mempelajari alur lalu lintas URL dan navigasi pada aplikasi Laravel.</p>
            </div>
            <div class="glass-effect rounded-xl p-6 text-center hover:bg-white/10 transition duration-300 border-t-4 border-t-purple-500">
                <div class="text-4xl mb-4">🎨</div>
                <h3 class="font-bold text-lg mb-2 text-white">Blade Template</h3>
                <p class="text-sm text-slate-400">Menggunakan engine template bawaan Laravel yang mempermudah penulisan HTML.</p>
            </div>
            <div class="glass-effect rounded-xl p-6 text-center hover:bg-white/10 transition duration-300 border-t-4 border-t-emerald-500">
                <div class="text-4xl mb-4">⚙️</div>
                <h3 class="font-bold text-lg mb-2 text-white">MVC Concept</h3>
                <p class="text-sm text-slate-400">Memahami arsitektur Model, View, dan Controller dalam pengembangan web.</p>
            </div>
        </div>
    </main>
</body>
</html>