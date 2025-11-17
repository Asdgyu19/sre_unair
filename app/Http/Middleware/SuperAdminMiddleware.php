<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class SuperAdminMiddleware
{
    public function handle(Request $request, Closure $next): Response
    {
        // Pastikan user sudah login dan memiliki role 'admin' saja (bukan boend)
        if (!Auth::check() || Auth::user()->role !== 'admin') {
            abort(403, 'Unauthorized. Only Super Admin can access user management.'); 
        }

        return $next($request);
    }
}