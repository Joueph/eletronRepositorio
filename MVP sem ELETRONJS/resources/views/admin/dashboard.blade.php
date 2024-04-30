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
                        <td>
                            <a href="{{ route('admin.editar-usuario', ['id' => $user->id]) }}" class="btn btn-primary">Editar</a>
                        </td>

                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
