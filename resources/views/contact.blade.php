@extends('templete')

@section('main_content') 
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-lg border-0">
                <div class="card-header bg-primary text-white text-center">
                    <h3 class="mb-0">Formulaire de Contact</h3>
                </div>
                <div class="card-body">
                    @if(session('success'))
                        <div class="alert alert-success">{{ session('success') }}</div>
                    @endif

                    <form method="POST" action="{{ route('contact.submit') }}">
                        @csrf
                        <div class="form-group">
                            <label for="name">Nom complet</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Votre nom" required>
                        </div>

                        <div class="form-group">
                            <label for="email">Adresse email</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="exemple@domaine.com" required>
                        </div>

                        <div class="form-group">
                            <label for="phone">Téléphone</label>
                            <input type="text" class="form-control" id="phone" name="phone" placeholder="+212 6 12 34 56 78">
                        </div>

                        <div class="form-group">
                            <label for="title">Sujet</label>
                            <input type="text" class="form-control" id="title" name="title" placeholder="Objet de votre message" required>
                        </div>

                        <div class="form-group">
                            <label for="message">Message</label>
                            <textarea class="form-control" id="message" name="message" rows="5" placeholder="Votre message ici..." required></textarea>
                        </div>

                        <div class="text-center">
                            <button type="submit" class="btn btn-primary btn-block">Envoyer</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    
        <div class="col-md-4 mt-4 mt-md-0">
            <div class="card border-0 shadow-sm mb-4">
                <div class="card-body">
                    <h5 class="text-primary">Adresse</h5>
                    <p><i class="fa fa-home text-primary"></i> Lot Foutouh, Imm 177, App 3 Av De Caire, Témara</p>
                    <p><i class="fa fa-envelope text-primary"></i> BaazizTechno@gmail.com</p>
                    <p><i class="fa fa-phone text-primary"></i> +212 62 82 319 1</p>
                </div>
            </div>

            <div class="card border-0 shadow-sm mb-4">
                <div class="card-body">
                    <h5 class="text-primary">Heures d’ouverture</h5>
                    <p><strong>Lundi - Samedi :</strong> 09h00 à 18h00</p>
                </div>
            </div>

            <div class="card border-0 shadow-sm">
                <div class="card-body">
                    <h5 class="text-primary">Pourquoi nous ?</h5>
                    <ul class="list-unstyled">
                        <li><i class="fa fa-check text-success"></i> Support 24/7</li>
                        <li><i class="fa fa-check text-success"></i> Ingénieurs expérimentés</li>
                        <li><i class="fa fa-check text-success"></i> Solutions rapides et fiables</li>
                    </ul>
                    <p>Notre entreprise est votre partenaire de confiance pour la fibre optique et le conseil technique.</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
