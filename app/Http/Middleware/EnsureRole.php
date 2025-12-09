<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class EnsureRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, $role)
    {
        $user = session('user');

        if (!$user || ($user['role'] !== $role)) {
            return redirect('/login')->with('error', 'Anda tidak punya akses!');
        }

        return $next($request);
    }
}
