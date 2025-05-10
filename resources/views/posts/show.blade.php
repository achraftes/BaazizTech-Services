@extends('templete')
@section('main_content')
<!-- Bootstrap CSS et JS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
<script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- Font Awesome pour les icônes -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

<style>
    .detail-section {
        padding: 80px 0;
        background-color: #f8f9fa;
        min-height: 100vh;
    }
    
    .page-title {
        position: relative;
        margin-bottom: 50px;
        font-weight: 700;
        color: #333;
    }
    
    .page-title::after {
        content: '';
        position: absolute;
        bottom: -15px;
        left: 50%;
        transform: translateX(-50%);
        width: 80px;
        height: 3px;
        background-color: #0d6efd;
    }
    
    .detail-card {
        border: none;
        border-radius: 15px;
        overflow: hidden;
        box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
        animation: fadeIn 0.8s ease-out forwards;
    }
    
    @keyframes fadeIn {
        from {
            opacity: 0;
            transform: translateY(20px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
    
    .detail-image {
        width: 100%;
        height: 350px;
        object-fit: cover;
        border-bottom: 1px solid rgba(0, 0, 0, 0.1);
    }
    
    .detail-title {
        color: #0d6efd;
        font-weight: 700;
        font-size: 1.75rem;
        margin-bottom: 15px;
        border-bottom: 2px solid #f0f0f0;
        padding-bottom: 15px;
    }
    
    .detail-subtitle {
        color: #555;
        font-weight: 600;
        font-size: 1.35rem;
        margin-bottom: 20px;
        font-style: italic;
    }
    
    .detail-content {
        color: #666;
        font-size: 1.1rem;
        line-height: 1.8;
        text-align: justify;
    }
    
    .back-button {
        position: fixed;
        top: 100px;
        left: 30px;
        background-color: #0d6efd;
        color: white;
        width: 45px;
        height: 45px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.15);
        transition: all 0.3s ease;
        z-index: 1000;
    }
    
    .back-button:hover {
        transform: translateX(-5px);
        background-color: #0b5ed7;
        color: white;
    }
    
    /* Styles responsifs */
    @media (max-width: 768px) {
        .detail-image {
            height: 250px;
        }
        
        .back-button {
            top: 80px;
            left: 20px;
            width: 40px;
            height: 40px;
        }
    }
</style>

<div class="detail-section">
    <!-- Bouton retour à la page des services -->
    <a href="{{ url('/services') }}" class="back-button" title="Retour aux services">
        <i class="fas fa-arrow-left"></i>
    </a>
    
    <div class="container">
        <h2 class="page-title text-center">Détail du Service</h2>
        
        <div class="row justify-content-center">
            <div class="col-lg-8 col-md-10">
                <div class="card detail-card">
                    <img src="{{ asset('images') }}/{{ $posts->image }}" class="detail-image" alt="{{ $posts->title }}">
                    <div class="card-body p-4">
                        <h3 class="detail-title">{{ $posts->title }}</h3>
                        <h4 class="detail-subtitle">{{ $posts->description }}</h4>
                        <div class="detail-content">{{ $posts->detail }}</div>
                    </div>
                    <div class="card-footer bg-white p-4 text-center">
                        <a href="{{ url('/services') }}" class="btn btn-primary">
                            <i class="fas fa-list me-2"></i> Voir tous les services
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection