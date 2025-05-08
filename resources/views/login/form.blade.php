@extends('templete')
@section('main_content')
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BAAZIZ-TECHNOLOGIES</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        body {
            background: linear-gradient(135deg, #6a11cb 0%, #2575fc 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .login-card {
            background-color: rgba(255, 255, 255, 0.95);
            border-radius: 15px;
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.2);
            overflow: hidden;
            max-width: 450px;
            width: 100%;
        }
        .login-header {
            background-color: #0d6efd;
            color: white;
            padding: 25px 20px;
            text-align: center;
            position: relative;
        }
        .company-logo {
            width: 50px;
            height: 50px;
            margin-bottom: 10px;
        }
        .login-title {
            margin: 0;
            font-weight: 600;
            letter-spacing: 1px;
        }
        .login-body {
            padding: 30px 25px;
        }
        .form-floating {
            margin-bottom: 20px;
        }
        .form-floating input {
            border-radius: 8px;
            border: 1px solid #ced4da;
            padding: 15px;
            height: 55px;
        }
        .btn-login {
            padding: 12px;
            font-weight: 600;
            letter-spacing: 0.5px;
            text-transform: uppercase;
            border-radius: 8px;
            transition: all 0.3s ease;
        }
        .btn-login:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(13, 110, 253, 0.4);
        }
        .btn-register {
            background-color: #198754;
            border-color: #198754;
            padding: 12px;
            font-weight: 600;
            letter-spacing: 0.5px;
            text-transform: uppercase;
            border-radius: 8px;
            transition: all 0.3s ease;
        }
        .btn-register:hover {
            transform: translateY(-2px);
            background-color: #157347;
            box-shadow: 0 5px 15px rgba(25, 135, 84, 0.4);
        }
        .alert {
            border-radius: 8px;
            padding: 15px;
            margin-bottom: 20px;
        }
        .input-group-text {
            cursor: pointer;
            background-color: transparent;
            border-left: none;
        }
        .form-icon {
            position: absolute;
            left: 15px;
            top: 17px;
            color: #6c757d;
        }
        .form-floating input {
            padding-left: 40px !important;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="login-card">
                    <div class="login-header">
                        <div class="text-center">
                            <!-- Placeholder logo - replace with your actual logo -->
                            <img src="/api/placeholder/80/80" class="company-logo" alt="BAAZIZ-TECHNOLOGIES">
                            <h2 class="login-title">BAAZIZ-TECHNOLOGIES</h2>
                        </div>
                    </div>
                    <div class="login-body">
                        @if(Session::has('error'))
                            <div class="alert alert-danger d-flex align-items-center" role="alert">
                                <i class="fas fa-exclamation-circle me-2"></i>
                                <div>{{ Session::get('error') }}</div>
                            </div>
                        @endif
                        
                        <h4 class="text-center mb-4">Connexion à votre compte</h4>
                        
                        <form action="{{ route('login') }}" method="POST">
                            @csrf
                            <div class="form-floating position-relative mb-4">
                                <i class="fas fa-envelope form-icon"></i>
                                <input type="email" name="email" class="form-control" id="email" placeholder="name@example.com" required>
                                <label for="email">Adresse email</label>
                            </div>
                            
                            <div class="form-floating position-relative mb-4">
                                <i class="fas fa-lock form-icon"></i>
                                <input type="password" name="password" class="form-control" id="password" placeholder="Mot de passe" required>
                                <label for="password">Mot de passe</label>
                            </div>
                            
                            <div class="form-check mb-4">
                                <input class="form-check-input" type="checkbox" value="" id="rememberMe">
                                <label class="form-check-label" for="rememberMe">
                                    Se souvenir de moi
                                </label>
                            </div>
                            
                            <div class="d-grid mb-3">
                                <button type="submit" class="btn btn-primary btn-login">
                                    <i class="fas fa-sign-in-alt me-2"></i>Se connecter
                                </button>
                            </div>
                            
                            <div class="d-grid">
                                <a href="{{ route('register') }}" class="btn btn-register">
                                    <i class="fas fa-user-plus me-2"></i>Créer un compte
                                </a>
                            </div>
                            
                            <div class="text-center mt-4">
                                <a href="#" class="text-decoration-none">Mot de passe oublié?</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Optional: Toggle password visibility
        document.addEventListener('DOMContentLoaded', function() {
            const togglePassword = document.createElement('span');
            togglePassword.innerHTML = '<i class="fas fa-eye"></i>';
            togglePassword.className = 'position-absolute end-0 top-50 translate-middle-y pe-3';
            togglePassword.style.cursor = 'pointer';
            togglePassword.style.zIndex = '10';
            
            const passwordField = document.getElementById('password');
            passwordField.parentElement.style.position = 'relative';
            passwordField.parentElement.appendChild(togglePassword);
            
            togglePassword.addEventListener('click', function() {
                const type = passwordField.getAttribute('type') === 'password' ? 'text' : 'password';
                passwordField.setAttribute('type', type);
                this.innerHTML = type === 'password' ? '<i class="fas fa-eye"></i>' : '<i class="fas fa-eye-slash"></i>';
            });
        });
    </script>
</body>
</html>
@endSection()