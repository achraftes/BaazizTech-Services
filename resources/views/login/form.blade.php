@extends('templete')
@section('main_content')
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BAAZIZ-TECHNOLOGIES</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</head>
<body class="bg-light">
    <!-- Main Content -->
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-5">
                <!-- Logo Section -->
                <div class="text-center mb-4">
                    <img src="/api/placeholder/100/100" alt="BAAZIZ-TECHNOLOGIES" class="img-fluid rounded-circle shadow-sm mb-3" style="max-width: 100px;">
                    <h2 class="fw-bold text-primary">BAAZIZ-TECHNOLOGIES</h2>
                </div>
                
                <!-- Login Card -->
                <div class="card border-0 shadow-lg rounded-3">
                    <div class="card-header bg-primary text-white py-3">
                        <h3 class="card-title mb-0 fw-bold text-center">Connexion</h3>
                    </div>
                    <div class="card-body p-4">
                        <!-- Error Alert -->
                        @if(Session::has('error'))
                            <div class="alert alert-danger d-flex align-items-center" role="alert">
                                <i class="fas fa-exclamation-triangle me-2"></i>
                                <div>{{ Session::get('error') }}</div>
                            </div>
                        @endif
                        
                        <!-- Login Form -->
                        <form action="{{ route('login') }}" method="POST">
                            @csrf
                            <!-- Email Field -->
                            <div class="mb-4">
                                <label for="email" class="form-label fw-bold">
                                    <i class="fas fa-envelope me-2 text-primary"></i>Email address
                                </label>
                                <input type="email" name="email" class="form-control form-control-lg border-primary-subtle rounded-3 py-3" id="email" placeholder="name@example.com" required>
                            </div>
                            
                            <!-- Password Field -->
                            <div class="mb-4">
                                <label for="password" class="form-label fw-bold">
                                    <i class="fas fa-lock me-2 text-primary"></i>Password
                                </label>
                                <div class="input-group">
                                    <input type="password" name="password" class="form-control form-control-lg border-primary-subtle rounded-start-3 py-3" id="password" required>
                                    <span class="input-group-text border-primary-subtle bg-transparent rounded-end-3" id="togglePassword">
                                        <i class="fas fa-eye"></i>
                                    </span>
                                </div>
                            </div>
                            
                            <!-- Remember Me -->
                            <div class="mb-4 form-check">
                                <input type="checkbox" class="form-check-input" id="rememberMe">
                                <label class="form-check-label" for="rememberMe">Se souvenir de moi</label>
                                <a href="#" class="float-end text-decoration-none">Mot de passe oublié?</a>
                            </div>
                            
                            <!-- Submit Button -->
                            <div class="d-grid gap-3">
                                <button type="submit" class="btn btn-primary btn-lg fw-bold">
                                    <i class="fas fa-sign-in-alt me-2"></i>Se connecter
                                </button>
                                
                                <a href="{{ route('register') }}" class="btn btn-success btn-lg fw-bold">
                                    <i class="fas fa-user-plus me-2"></i>Créer un compte
                                </a>
                            </div>
                        </form>
                    </div>
                </div>
                
                <!-- Additional Info -->
                <!-- <div class="text-center mt-4 text-muted">
                    <p>© 2025 BAAZIZ-TECHNOLOGIES. Tous droits réservés.</p>
                </div> -->
            </div>
        </div>
    </div>

    <script>
        // Toggle password visibility
        document.addEventListener('DOMContentLoaded', function() {
            const togglePassword = document.getElementById('togglePassword');
            const password = document.getElementById('password');
            
            togglePassword.addEventListener('click', function() {
                const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
                password.setAttribute('type', type);
                this.querySelector('i').className = type === 'password' ? 'fas fa-eye' : 'fas fa-eye-slash';
            });
        });
    </script>
</body>
</html>
@endSection()