@extends('templete')
@section('main_content')
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact - BaazizTechno</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        body {
            padding-top: 76px;
            background-color: #f8f9fa;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        .contact-form-container {
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
            padding: 30px;
            margin-bottom: 30px;
        }
        .contact-sidebar {
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
            padding: 20px;
            margin-bottom: 20px;
        }
        .section-title {
            color: #1E90FF;
            border-bottom: 2px solid #1E90FF;
            padding-bottom: 10px;
            margin-bottom: 20px;
        }
        .form-control:focus {
            border-color: #1E90FF;
            box-shadow: 0 0 0 0.2rem rgba(30, 144, 255, 0.25);
        }
        .btn-primary {
            background-color: #1E90FF;
            border-color: #1E90FF;
        }
        .btn-primary:hover {
            background-color: #0078FF;
            border-color: #0078FF;
        }
        .contact-icon {
            width: 30px;
            text-align: center;
            margin-right: 10px;
            color: #1E90FF;
        }
        .feature-item {
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <div class="container py-5">
        <div class="row">
            <div class="col-lg-8">
                <div class="contact-form-container">
                    <h1 class="text-center section-title mb-4">Formulaire de contact</h1>
                    
                    @if(session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                    
                    <form method="POST" action="{{ route('contact.submit') }}" class="needs-validation" novalidate>
                        @csrf
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="name" class="form-label">Nom complet <span class="text-danger">*</span></label>
                                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') }}" required>
                                @error('name')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="email" class="form-label">Adresse email <span class="text-danger">*</span></label>
                                <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}" required>
                                @error('email')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="phone" class="form-label">Téléphone</label>
                                <input type="tel" class="form-control @error('phone') is-invalid @enderror" id="phone" name="phone" value="{{ old('phone') }}">
                                @error('phone')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="title" class="form-label">Objet <span class="text-danger">*</span></label>
                                <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{ old('title') }}" required>
                                @error('title')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="mb-4">
                            <label for="message" class="form-label">Message <span class="text-danger">*</span></label>
                            <textarea class="form-control @error('message') is-invalid @enderror" id="message" name="message" rows="8" required>{{ old('message') }}</textarea>
                            @error('message')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        
                        <div class="d-grid gap-2 col-md-6 mx-auto">
                            <button type="submit" class="btn btn-primary btn-lg">Envoyer</button>
                        </div>
                    </form>
                </div>
            </div>
            
            <div class="col-lg-4">
                <!-- Address Section -->
                <div class="contact-sidebar">
                    <h3 class="section-title">Adresse</h3>
                    <ul class="list-unstyled">
                        <li class="mb-3">
                            <div class="d-flex">
                                <span class="contact-icon"><i class="fas fa-map-marker-alt"></i></span>
                                <div>Lot Foutouh, Imm 177, App 3<br>Av De Caire, Temara</div>
                            </div>
                        </li>
                        <li class="mb-3">
                            <div class="d-flex">
                                <span class="contact-icon"><i class="fas fa-envelope"></i></span>
                                <a href="mailto:BaazizTechno@gmail.com" class="text-decoration-none">BaazizTechno@gmail.com</a>
                            </div>
                        </li>
                        <li class="mb-3">
                            <div class="d-flex">
                                <span class="contact-icon"><i class="fas fa-phone-alt"></i></span>
                                <a href="tel:+212628231901" class="text-decoration-none">+212 62 82 319 1</a>
                            </div>
                        </li>
                    </ul>
                </div>
                
                <!-- Hours Section -->
                <div class="contact-sidebar">
                    <h3 class="section-title">Heures d'ouverture</h3>
                    <ul class="list-unstyled">
                        <li class="mb-2">
                            <div class="d-flex">
                                <span class="contact-icon"><i class="fas fa-clock"></i></span>
                                <div><strong>Lundi - Samedi:</strong><br>9h00 - 18h00</div>
                            </div>
                        </li>
                    </ul>
                </div>
                
                <!-- Why Us Section -->
                <div class="contact-sidebar">
                    <h3 class="section-title">Pourquoi nous ?</h3>
                    <p>Notre entreprise se positionne comme un guichet unique pour répondre à tous vos besoins. Nous vous offrons une expertise complète en études et installations de fibre optique, ainsi qu'en services de conseil.</p>
                    <ul class="list-unstyled">
                        <li class="feature-item">
                            <div class="d-flex">
                                <span class="contact-icon"><i class="fas fa-check-circle"></i></span>
                                <div>Assistance 24 heures sur 24, 7 jours sur 7</div>
                            </div>
                        </li>
                        <li class="feature-item">
                            <div class="d-flex">
                                <span class="contact-icon"><i class="fas fa-check-circle"></i></span>
                                <div>Des ingénieurs éminents et expérimentés</div>
                            </div>
                        </li>
                        <li class="feature-item">
                            <div class="d-flex">
                                <span class="contact-icon"><i class="fas fa-check-circle"></i></span>
                                <div>Solution à tous vos problèmes techniques</div>
                            </div>
                        </li>
                    </ul>
                </div>
                
                <!-- Map Section (Optional) -->
                <div class="contact-sidebar">
                    <h3 class="section-title">Localisation</h3>
                    <div class="ratio ratio-4x3">
                        <!-- Replace with your actual Google Maps embed code -->
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13394.679786440362!2d-6.9245908302246105!3d33.920369899999996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xda76b871f0b06c1%3A0x1fd0b68c31639058!2sTamara!5e0!3m2!1sfr!2sma!4v1651234567890!5m2!1sfr!2sma" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Bootstrap JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
    <script>
        // Form validation script
        (function() {
            'use strict'
            
            // Fetch all forms that need validation
            var forms = document.querySelectorAll('.needs-validation')
            
            // Loop over them and prevent submission
            Array.prototype.slice.call(forms)
                .forEach(function(form) {
                    form.addEventListener('submit', function(event) {
                        if (!form.checkValidity()) {
                            event.preventDefault()
                            event.stopPropagation()
                        }
                        
                        form.classList.add('was-validated')
                    }, false)
                })
        })()
    </script>
</body>
</html>
@endsection