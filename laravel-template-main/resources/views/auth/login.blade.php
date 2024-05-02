<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f3f4f6;
        }

        .login-container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .login-form {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            padding: 30px;
            width: 320px;
            max-width: 90%;
        }

        .form-title {
            font-size: 1.5rem;
            font-weight: 600;
            margin-bottom: 20px;
            text-align: center;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-label {
            display: block;
            font-size: 0.875rem;
            font-weight: 500;
            margin-bottom: 5px;
        }

        .form-input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 0.875rem;
        }

        .form-input:focus {
            outline: none;
            border-color: #4c51bf;
            box-shadow: 0 0 0 3px rgba(76, 81, 191, 0.1);
        }

        .form-button {
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 4px;
            background-color: #4c51bf;
            color: #fff;
            font-size: 1rem;
            font-weight: 600;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .form-button:hover {
            background-color: #434190;
        }

        .form-link {
            font-size: 0.875rem;
            color: #4c51bf;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .form-link:hover {
            color: #434190;
        }

        .form-error {
            color: #e53e3e;
            font-size: 0.875rem;
            margin-top: 5px;
        }

        .form-footer {
            margin-top: 20px;
            text-align: center;
            font-size: 0.875rem;
            color: #6b7280;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <form class="login-form" method="POST" action="{{ route('login') }}">
            @csrf
            <h2 class="form-title">Login</h2>
            <div class="form-group">
                <label for="email" class="form-label">Email</label>
                <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus class="form-input">
                @error('email')
                    <p class="form-error">{{ $message }}</p>
                @enderror
            </div>
            <div class="form-group">
                <label for="password" class="form-label">Password</label>
                <input id="password" type="password" name="password" required autocomplete="current-password" class="form-input">
                @error('password')
                    <p class="form-error">{{ $message }}</p>
                @enderror
            </div>
            <button type="submit" class="form-button">Sign In</button>
            <p class="form-footer">&copy;{{ now()->year }} KLAJ. All rights reserved.</p>
        </form>
    </div>
</body>
</html>
