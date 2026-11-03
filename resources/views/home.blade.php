@extends('layouts.app')

@section('title', 'Halaman Utama')

@section('content')
<!-- Script CDN Tailwind agar styling mirip dengan halaman welcome -->
<script src="https://cdn.tailwindcss.com"></script>
<style>
    .glass-effect {
        background: rgba(255, 255, 255, 0.05);
        backdrop-filter: blur(10px);
        border: 1px solid rgba(255, 255, 255, 0.1);
    }
</style>

<div class="min-h-[70vh] flex flex-col justify-center items-center text-white px-4 relative overflow-hidden">
    <!-- Dekorasi Background Latar Belakang (Mirip Welcome) -->
    <div class="absolute top-[-10%] left-[-10%] w-96 h-96 bg-blue-600 rounded-full mix-blend-multiply filter blur-[128px] opacity-30 pointer-events-none"></div>
    <div class="absolute bottom-[-10%] right-[-10%] w-96 h-96 bg-purple-600 rounded-full mix-blend-multiply filter blur-[128px] opacity-30 pointer-events-none"></div>

    <main class="z-10 w-full max-w-2xl p-8 text-center glass-effect rounded-2xl shadow-2xl">
        <!-- Isi asli file home Anda, tapi dipercantik dengan gaya font & warna Tailwind -->
        <h2 class="text-4xl font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-blue-400 to-purple-400 mb-4">
            Selamat Datang di Halaman Utama!
        </h2>
        <p class="text-lg text-slate-300">
            Ini adalah konten utama dari halaman home.
        </p>
    </main>
</div>
@endsection