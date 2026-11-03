<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Symfony\Component\HttpFoundation\Response;

class LogAksesMahasiswa
{
    public function handle(Request $request, Closure $next): Response
    {
        // Dicatat sebelum permintaan diteruskan ke Controller.
        Log::info('Akses halaman Mahasiswa', [
            'method' => $request->method(),
            'url' => $request->url(),
            'waktu' => now()->toDateTimeString(),
        ]);

        return $next($request);
    }
}