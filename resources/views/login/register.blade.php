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
    <div class="container py-5"> <br> <br> <br> <br> <br> <br> <br> 
        <div class="row justify-content-center">
            <!-- Main Card with Image and Form -->
            <div class="col-md-10">
                <div class="row bg-white rounded-3 shadow-lg overflow-hidden">
                    <!-- Left Image Column -->
                    <div class="col-md-6 p-0">
                        <img src="{{ asset('images/apple.jpg') }}" alt="Register Image" class="img-fluid h-100" style="object-fit: cover; object-position: center;">
                    </div>
                    
                    <!-- Right Form Column -->
                    <div class="col-md-6 p-0">
                        <!-- Registration Form Container -->
                        <div class="p-4 p-md-5">
                            <!-- Header with Logo -->
                            <div class="text-center mb-4">
                                <h3 class="fw-bold text-success mb-4">S'inscrire</h3>
                            </div>
                            
                            <!-- Success Alert -->
                            @if(Session::has('success'))
                                <div class="alert alert-success d-flex align-items-center" role="alert">
                                    <i class="fas fa-check-circle me-2"></i>
                                    <div>{{ Session::get('success') }}</div>
                                </div>
                            @endif
                            
                            <!-- Registration Form -->
                            <form action="{{ route('register') }}" method="POST">
                                @csrf
                                <!-- Name Field -->
                                <div class="mb-3">
                                    <label for="name" class="form-label fw-bold">
                                        <i class="fas fa-user me-2 text-success"></i>Nom complet
                                    </label>
                                    <input type="text" name="name" class="form-control form-control-lg rounded-3" id="name" placeholder="John Doe" required>
                                </div>
                                
                                <!-- Email Field -->
                                <div class="mb-3">
                                    <label for="email" class="form-label fw-bold">
                                        <i class="fas fa-envelope me-2 text-success"></i>Adresse email
                                    </label>
                                    <input type="email" name="email" class="form-control form-control-lg rounded-3" id="email" placeholder="name@example.com" required>
                                </div>
                                
                                <!-- Password Field -->
                                <div class="mb-3">
                                    <label for="password" class="form-label fw-bold">
                                        <i class="fas fa-lock me-2 text-success"></i>Mot de passe
                                    </label>
                                    <!-- Password Field -->
                                    <div class="input-group">
                                        <input type="password" name="password" class="form-control form-control-lg rounded-start-3" id="password" required>
                                        <span class="input-group-text bg-transparent rounded-end-3" id="togglePassword">
                                            <i class="fas fa-eye"></i>
                                        </span>
                                    </div>
                                    <div class="form-text">
                                        <i class="fas fa-info-circle me-1"></i>Le mot de passe doit contenir au moins 8 caractères
                                    </div>
                                </div>
                                
                               
                                    <input type="checkbox" class="form-check-input" id="agreeTerms" required>
                                    <label class="form-check-label" for="agreeTerms">
                                        J'accepte les <a href="#" class="text-decoration-none">termes et conditions</a>
                                    </label>
                                </div>
                                
                                <!-- Submit Buttons -->
                                <div class="d-grid gap-3">
                                    <button type="submit" class="btn btn-success btn-lg fw-bold">
                                        <i class="fas fa-user-plus me-2"></i>Créer mon compte
                                    </button> <div class="mb-3 form-check">
                                    
                                    <a href="{{ route('login') }}" class="btn btn-primary btn-lg fw-bold">
                                        <i class="fas fa-sign-in-alt me-2"></i>Se connecter
                                    </a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
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
                                <!-- Terms & Conditions -->
</body>
</html>
@endSection()
<div style="text-align: center; margin: 60px 20px;">
  <h2 style="color: #202124; font-family: Poppins, Helvetica, Arial, Lucida, sans-serif; font-size: 47px; font-weight: 500; letter-spacing: -2px; margin-bottom: 50px;">
    Obtenez le meilleur du web grâce à notre agence
  </h2>

  <div style="display: flex; flex-wrap: wrap; justify-content: center; gap: 40px;">

    <div style="text-align: center; max-width: 250px;">
      <img src="https://cdn-icons-png.flaticon.com/512/197/197560.png" alt="Tour Eiffel" style="width: 40px; height: 40px; margin-bottom: 10px;" />
      <p style="margin: 0; font-size: 14px; font-weight: 600; color: #202124;"><span style="font-size: 11px; letter-spacing: 1px;">FR</span> Qualité 100% française</p>
      <p style="margin-top: 5px; font-size: 14px; color: #5f6368;">Sites pro, fiables et impactants.</p>
    </div>

    <div style="text-align: center; max-width: 250px;">
      <img src="https://cdn-icons-png.flaticon.com/512/1828/1828884.png" alt="Badge" style="width: 40px; height: 40px; margin-bottom: 10px;" />
      <p style="margin: 0; font-size: 14px; font-weight: 600; color: #202124;">Performance & visibilité</p>
      <p style="margin-top: 5px; font-size: 14px; color: #5f6368;">UX fluide, SEO puissant, et mobile-friendly.</p>
    </div>

    <div style="text-align: center; max-width: 250px;">
      <img src="https://cdn-icons-png.flaticon.com/512/1041/1041870.png" alt="Graphique rentabilité" style="width: 40px; height: 40px; margin-bottom: 10px;" />
      <p style="margin: 0; font-size: 14px; font-weight: 600; color: #202124;">Un investissement rentable</p>
      <p style="margin-top: 5px; font-size: 14px; color: #5f6368;">Attirez plus de clients et maximisez vos résultats.</p>
    </div>

  </div>
</div>











</div>
<div style="display: flex; align-items: center; margin-bottom: 15px; padding: 12px 0; border-bottom: 1px solid #f0f0f0;">
<div style="width: 18px; height: 18px; background-color: #28a745; border-radius: 2px; margin-right: 12px; display: flex; align-items: center; justify-content: center; flex-shrink: 0;"><span style="color: white; font-size: 12px; font-weight: bold;">✓</span></div>
<p style="color: #333; font-size: 14px; line-height: 1.4; margin: 0;">Hébergement, maintenance & mises à jour inclus</p>

</div>
<div style="display: flex; align-items: center; margin-bottom: 15px; padding: 12px 0; border-bottom: 1px solid #f0f0f0;">
<div style="width: 18px; height: 18px; background-color: #28a745; border-radius: 2px; margin-right: 12px; display: flex; align-items: center; justify-content: center; flex-shrink: 0;"><span style="color: white; font-size: 12px; font-weight: bold;">✓</span></div>
<p style="color: #333; font-size: 14px; line-height: 1.4; margin: 0;">Assistance technique</p>

</div>
<div style="display: flex; align-items: center; margin-bottom: 15px; padding: 12px 0; border-bottom: none;">
<div style="width: 18px; height: 18px; background-color: #28a745; border-radius: 2px; margin-right: 12px; display: flex; align-items: center; justify-content: center; flex-shrink: 0;"><span style="color: white; font-size: 12px; font-weight: bold;">✓</span></div>
<p style="color: #333; font-size: 14px; line-height: 1.4; margin: 0;">SEO local de base</p>

</div>
<div style="display: flex; align-items: center; margin-bottom: 15px; padding: 12px 0; border-bottom: none;">
<div style="width: 18px; height: 18px; background-color: #28a745; border-radius: 2px; margin-right: 12px; display: flex; align-items: center; justify-content: center; flex-shrink: 0;"><span style="color: white; font-size: 12px; font-weight: bold;">✓</span></div>
<p style="color: #333; font-size: 14px; line-height: 1.4; margin: 0;">Fiche Google Business bien configurée</p>

</div>
<div style="background-color: #fff3cd; border: 1px solid #ffeaa7; border-radius: 6px; padding: 12px; margin-top: 15px; display: flex; align-items: flex-start;">

<span style="color: #e17055; font-size: 14px; margin-right: 10px; margin-top: 2px;">📌</span>
<p style="color: #856404; font-size: 14px; line-height: 1.4; margin: 0;">Idéal pour ceux qui veulent un site qui commence à être visible localement.</p>

</div>
</div>