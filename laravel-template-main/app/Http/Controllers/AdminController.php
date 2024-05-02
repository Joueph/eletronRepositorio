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

    public function updateUsuario(Request $request, $id)
{
    $updated = User::where('id', $id)->update([
        'name' => strtolower($request->input('name')),
        'email' => $request->input('email'),
        'cep' => $request->input('cep'),
        'logradouro' => $request->input('logradouro'),
        'bairro' => $request->input('bairro'),
        'estado' => $request->input('estado'),
        
    ]);


    if ($updated) {
        return redirect()->route('admin.dashboard')->with('success', 'Informações do usuário atualizadas com sucesso!');
    } else {
        return redirect()->back()->with('error', 'Falha ao atualizar as informações do usuário.');
    }
}

public function apagarUsuario($id)
{
    // Encontrar o usuário pelo ID
    $user = User::findOrFail($id);

    // Excluir o usuário do banco de dados
    $user->delete();

    // Redirecionar de volta com uma mensagem de sucesso
    return redirect()->route('admin.dashboard')->with('success', 'Usuário apagado com sucesso.');
}

}

