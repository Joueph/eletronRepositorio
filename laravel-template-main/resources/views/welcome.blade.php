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
            background: linear-gradient(to bottom right, #42a5f5, #66bb6a);
            margin: 0;
            padding: 0;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .container {
            text-align: center;
            padding: 20px;
            background-color: rgba(255, 255, 255, 0.9);
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .header {
            font-size: 32px;
            margin-bottom: 20px;
        }
        .cta-container {
            display: flex;
            justify-content: center;
        }
        .cta-btn {
            padding: 10px 20px;
            font-size: 18px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: all 0.3s ease;
            margin: 0 10px;
        }
        .login-btn {
            background-color: #007bff;
            color: #fff;
        }
        .register-btn {
            background-color: #28a745;
            color: #fff;
        }
        .cta-btn:hover {
            transform: translateY(-2px);
        }
        .cta-btn:hover {
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">Bem-vindo Super-CRUD!</div>
        <div class="cta-container">
            <a href="{{ route('login') }}" class="cta-btn login-btn">Login</a>
            <a href="{{ route('register') }}" class="cta-btn register-btn">Registrar</a>
        </div>
    </div>
</body>
</html>
