@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Dashboard do Administrador</h1>

        <h2>Lista de Usuários</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>CEP</th>
                    <th>Logradouro</th>
                    <th>Bairro</th>
                    <th>Cidade</th>
                    <th>Estado</th>
                    <th>Acesso</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->cep }}</td>
                        <td>{{ $user->logradouro }}</td>
                        <td>{{ $user->bairro }}</td>
                        <td>{{ $user->cidade }}</td>
                        <td>{{ $user->estado }}</td>
                        <td>{{ $user->role }}</td>
                        <td>
                            <a href="{{ route('admin.editar-usuario', ['id' => $user->id]) }}" class="btn btn-primary">Editar</a>
                            <form action="{{ route('admin.apagar-usuario', ['id' => $user->id]) }}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Apagar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
