@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            margin-top: 50px;
        }
        h1 {
            font-size: 24px;
            margin-bottom: 20px;
            color: #333;
        }
        p {
            font-size: 16px;
            margin-bottom: 15px;
            color: #666;
        }
        a {
            display: inline-block;
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }
        a:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        @auth
            <h1>Olá, {{ Auth::user()->name }}, você está logado como 
                @if(Auth::user()->role == 0)
                    Cliente
                @else
                    Administrador
                @endif
            </h1>
            <p>O que deseja fazer hoje?</p>
            @if(Auth::user()->role == 0 || Auth::user()->role == 1)
                <a href="{{ route('admin.editar-usuario', ['id' => Auth::user()->id]) }}">Alterar minhas informações</a>
            @endif
            @if(Auth::user()->role == 1)
                <a href="{{ route('admin.dashboard') }}">Acessar dashboard</a>
            @endif
        @endauth
    </div>
</body>
</html>

@endsection
