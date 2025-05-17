@extends('templete')
@section('main_content')
<div class="container py-5" style="margin-top: 76px;">
    <div class="row">
        <div class="col-lg-8 mb-4">
            <div class="bg-white rounded shadow p-4">
                <h1 class="text-center text-primary border-bottom pb-3 mb-4">Formulaire de contact</h1>

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
                            @error('phon')
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
            <div class="bg-white rounded shadow p-3 mb-4">
                <h3 class="text-primary border-bottom pb-2 mb-3">Adresse</h3>
                <ul class="list-unstyled">
                    <li class="mb-3 d-flex align-items-start">
                        <i class="fas fa-map-marker-alt text-primary me-3 fs-5"></i>
                        <span>Lot Foutouh, Imm 177, App 3<br>Av De Caire, Temara</span>
                    </li>
                    <li class="mb-3 d-flex align-items-start">
                        <i class="fas fa-envelope text-primary me-3 fs-5"></i>
                        <a href="mailto:BaazizTechno@gmail.com" class="text-decoration-none">BaazizTechno@gmail.com</a>
                    </li>
                    <li class="mb-3 d-flex align-items-start">
                        <i class="fas fa-phone-alt text-primary me-3 fs-5"></i>
                        <a href="tel:+212628231901" class="text-decoration-none">+212 62 82 319 1</a>
                    </li>
                </ul>
            </div>

            <div class="bg-white rounded shadow p-3 mb-4">
                <h3 class="text-primary border-bottom pb-2 mb-3">Heures d'ouverture</h3>
                <div class="d-flex align-items-start mb-2">
                    <i class="fas fa-clock text-primary me-3 fs-5"></i>
                    <span><strong>Lundi - Samedi:</strong><br>9h00 - 18h00</span>
                </div>
            </div>

            <div class="bg-white rounded shadow p-3">
                <h3 class="text-primary border-bottom pb-2 mb-3">Pourquoi nous ?</h3>
                <p>Notre entreprise se positionne comme un guichet unique pour répondre à tous vos besoins.</p>
                <ul class="list-unstyled">
                    <li class="d-flex align-items-start mb-2">
                        <i class="fas fa-check-circle text-success me-2"></i>
                        <span>Assistance 24h/24 et 7j/7</span>
                    </li>
                    <li class="d-flex align-items-start mb-2">
                        <i class="fas fa-check-circle text-success me-2"></i>
                        <span>Ingénieurs expérimentés</span>
                    </li>
                    <li class="d-flex align-items-start mb-2">
                        <i class="fas fa-check-circle text-success me-2"></i>
                        <span>Solutions à tous vos problèmes techniques</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

<!-- Scripts Bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<!-- Validation JS -->
<script>
    (function () {
        'use strict'
        var forms = document.querySelectorAll('.needs-validation')
        Array.prototype.slice.call(forms).forEach(function (form) {
            form.addEventListener('submit', function (event) {
                if (!form.checkValidity()) {
                    event.preventDefault()
                    event.stopPropagation()
                }
                form.classList.add('was-validated')
            }, false)
        })
    })()
</script>
@endsection
