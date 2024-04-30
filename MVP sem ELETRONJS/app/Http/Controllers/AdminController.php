<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AdminController extends Controller
{
    public function dashboard()
    {
        // Lógica para recuperar os usuários e exibir o dashboard
        $users = User::all();
        return view('admin.dashboard', compact('users'));
    }

    public function editarUsuario($id)
    {
    // Encontrar o usuário pelo ID
    $user = User::findOrFail($id);
    
    // Retornar a view de edição do usuário, passando os detalhes do usuário
    return view('admin.editar-usuario', compact('user'));
    }

}

