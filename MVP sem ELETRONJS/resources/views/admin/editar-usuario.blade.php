@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Editar Usuário</h1>
        
        <form method="POST" action="{{ route('admin.editar-usuario', ['id' => $user->id]) }}">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="name" class="form-label">Nome</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $user->name }}">
            </div>
            
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" value="{{ $user->email }}">
            </div>
            
            <div class="mb-3">
                <label for="cep" class="form-label">CEP</label>
                <input type="text" class="form-control" id="cep" name="cep" value="{{ $user->cep }}">
            </div>
            
            <div class="mb-3">
                <label for="logradouro" class="form-label">Logradouro</label>
                <input type="text" class="form-control" id="logradouro" name="logradouro" value="{{ $user->logradouro }}">
            </div>
            
            <div class="mb-3">
                <label for="rua" class="form-label">Rua</label>
                <input type="text" class="form-control" id="rua" name="rua" value="{{ $user->rua }}">
            </div>
            
            <div class="mb-3">
                <label for="estado" class="form-label">Estado</label>
                <input type="text" class="form-control" id="estado" name="estado" value="{{ $user->estado }}">
            </div>
            
            <button type="submit" class="btn btn-primary">Salvar</button>
        </form>
    </div>
@endsection
