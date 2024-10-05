<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class CheckLevel
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, $level): Response
    {
        // Memeriksa apakah pengguna memiliki level akses yang diizinkan
        if (Auth::check() && Auth::user()->level == $level) {
            return $next($request);
        }

        // Jika tidak memiliki akses, arahkan ke halaman lain atau tampilkan error
        return redirect('/home')->with('error', 'Anda tidak memiliki akses ke halaman ini');
    }
}
