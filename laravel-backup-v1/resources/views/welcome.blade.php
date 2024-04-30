<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seu Site - Login</title>
    <!-- Adicione seus estilos CSS aqui -->
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .container {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }
        .header {
            font-size: 24px;
            margin-bottom: 20px;
        }
        .cta-container {
            display: flex;
            justify-content: space-around;
            width: 50%;
        }
        .cta-btn {
            padding: 10px 20px;
            font-size: 18px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .login-btn {
            background-color: #007bff;
            color: #fff;
        }
        .register-btn {
            background-color: #28a745;
            color: #fff;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">Bem-vindo ao Seu Site</div>
        <div class="cta-container">
            <a href="{{ route('login') }}" class="cta-btn login-btn">Login</a>
            <a href="{{ route('register') }}" class="cta-btn register-btn">Registrar</a>
        </div>
    </div>
</body>
</html>
