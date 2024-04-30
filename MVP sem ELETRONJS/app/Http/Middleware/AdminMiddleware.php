<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class AdminMiddleware
{
    public function handle($request, Closure $next)
    {
        // Verifica se o usuário está autenticado
        if (Auth::check()) {
            // Verifica se o usuário é um administrador
            if (Auth::user()->role == 1) {
                // Verifica se a rota atual é do dashboard do administrador
                if ($request->route()->getName() === 'admin.dashboard' || $request->route()->getName() === 'admin.editar-usuario') {
                    // Verifica se o usuário autenticado é o mesmo usuário que deseja editar
                    $userId = $request->route('id');
                    if ($userId && Auth::user()->role == 0 && Auth::id() != $userId) {
                        return redirect()->route('admin.dashboard')->with('error', 'Você não tem permissão para acessar esta página.');
                    }
                    // Se for o próprio usuário ou não for uma rota de edição de usuário, permite o acesso
                    return $next($request);
                }
            }
            // Se não for administrador, verifica se é uma rota de edição do próprio usuário
            elseif ($request->route()->getName() === 'admin.editar-usuario' && Auth::id() == $request->route('id')) {
                return $next($request);
            }
        }

        // Se não for administrador ou o próprio usuário, redireciona para a página inicial
        return redirect('/home')->with('error', 'Você não tem permissão para acessar esta página.');
    }
}
