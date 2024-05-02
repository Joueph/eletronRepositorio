<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
{
    public function handle($request, Closure $next)
    {
        // Verifica se o usuário está autenticado
        if (Auth::check()) {
            // Verifica se o usuário é um administrador
            if (Auth::user()->role == 1) {
                // Se for administrador, permite o acesso
                return $next($request);
            } else {
                // Verifica se é uma rota de edição de usuário
                if ($request->route()->getName() === 'admin.editar-usuario') {
                    $userId = $request->route('id');
                    // Permite que usuários com role != 0 editem apenas os próprios dados
                    if (Auth::id() == $userId) {
                        return $next($request);
                    }
                }
                // Redireciona para a página inicial se não for um administrador ou se o usuário não puder editar os dados
                return redirect('/home')->with('error', 'Você não tem permissão para acessar esta página.');
            }
        }

        // Se o usuário não estiver autenticado, redireciona para a página de login
        return redirect('/login')->with('error', 'Você precisa fazer login para acessar esta página.');
    }
}
