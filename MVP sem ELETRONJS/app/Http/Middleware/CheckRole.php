<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next, $role)
    {
        // Verificar se o usuário tem a role adequada
        if ($request->user() && $request->user()->role == $role) {
            return $next($request);
        }

        // Redirecionar se não tiver permissão
        return redirect()->route('home')->with('error', 'Unauthorized.');
    }
}
