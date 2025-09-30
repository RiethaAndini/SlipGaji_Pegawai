<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class cekRole {
    // Middleware untuk mengecek peran (role) pengguna sebelum mengakses suatu halaman
    public function handle(Request $request, Closure $next,  string $role): Response {
        //Mengecek apakah pengguna sudah login dan memiliki peran yang sesuai
        if (!$request->user() || $request->user()->role !== $role) {
            abort(430, 'Unauthorized'); //Jika tidak sesuai, hentikan proses dengan error 403 (Forbidden)
        }
        //Jika sesuai, lanjutkan ke request berikutnya
        return $next($request);
    }
}
