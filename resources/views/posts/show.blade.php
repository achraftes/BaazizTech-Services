@extends('templete')
@section('main_content')
<!-- Bootstrap CSS et JS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
<script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- Font Awesome pour les icônes -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
<!-- AOS Animation Library -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>

<style>
    :root {
        --primary-color: #1a73e8;
        --secondary-color: #f8f9fa;
        --accent-color: #fbbc04;
        --text-primary: #333;
        --text-secondary: #555;
        --card-shadow: 0 15px 35px rgba(0, 0, 0, 0.1);
        --transition: all 0.4s ease;
    }

    body {
        font-family: 'Segoe UI', Roboto, 'Helvetica Neue', sans-serif;
        color: var(--text-primary);
    }
    
    .detail-section {
        padding: 120px 0 80px;
        background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
        min-height: 100vh;
        position: relative;
    }
    
    .detail-section::before {
        content: '';
        position: absolute;
        top: 0;
        right: 0;
        width: 40%;
        height: 100%;
        background: linear-gradient(135deg, rgba(26, 115, 232, 0.05) 0%, rgba(66, 133, 244, 0.1) 100%);
        clip-path: polygon(100% 0, 0 0, 100% 100%);
        z-index: 0;
    }
    
    .page-title {
        position: relative;
        margin-bottom: 50px;
        font-weight: 700;
        color: var(--text-primary);
        letter-spacing: 0.5px;
    }
    
    .page-title::after {
        content: '';
        position: absolute;
        bottom: -15px;
        left: 50%;
        transform: translateX(-50%);
        width: 80px;
        height: 4px;
        background: linear-gradient(90deg, var(--primary-color) 0%, var(--accent-color) 100%);
        border-radius: 2px;
    }
    
    .detail-card {
        border: none;
        border-radius: 20px;
        overflow: hidden;
        box-shadow: var(--card-shadow);
        transition: var(--transition);
        background: white;
        position: relative;
        z-index: 10;
    }
    
    .detail-card:hover {
        box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15);
        transform: translateY(-5px);
    }
    
    .detail-image-container {
        position: relative;
        overflow: hidden;
        border-bottom: 1px solid rgba(0, 0, 0, 0.05);
    }
    
    .detail-image {
        width: 100%;
        height: 400px;
        object-fit: cover;
        transition: var(--transition);
    }
    
    .detail-card:hover .detail-image {
        transform: scale(1.05);
    }
    
    .service-badge {
        position: absolute;
        top: 20px;
        right: 20px;
        background: var(--primary-color);
        color: white;
        padding: 8px 15px;
        border-radius: 30px;
        font-weight: 600;
        font-size: 0.9rem;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.15);
        z-index: 20;
    }
    
    .detail-title {
        color: var(--primary-color);
        font-weight: 700;
        font-size: 2rem;
        margin-bottom: 15px;
        border-bottom: 2px solid #f0f0f0;
        padding-bottom: 15px;
    }
    
    .detail-subtitle {
        color: var(--text-secondary);
        font-weight: 600;
        font-size: 1.35rem;
        margin-bottom: 25px;
        font-style: italic;
    }
    
    .detail-content {
        color: var(--text-secondary);
        font-size: 1.1rem;
        line-height: 1.9;
        text-align: justify;
    }
    
    .content-wrapper {
        padding: 30px;
    }
    
    .back-button {
        position: fixed;
        top: 30px;
        left: 30px;
        background-color: var(--primary-color);
        color: white;
        width: 50px;
        height: 50px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
        transition: var(--transition);
        z-index: 1000;
    }
    
    .back-button:hover {
        transform: translateX(-5px);
        background-color: #0b5ed7;
        color: white;
    }
    
    .footer-actions {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 25px 30px;
        background: #f8fbff;
        border-top: 1px solid #eaeaea;
    }
    
    .btn-action {
        border-radius: 50px;
        padding: 10px 25px;
        font-weight: 600;
        letter-spacing: 0.5px;
        transition: var(--transition);
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    }
    
    .btn-action:hover {
        transform: translateY(-3px);
        box-shadow: 0 8px 15px rgba(0, 0, 0, 0.15);
    }
    
    .btn-primary {
        background: var(--primary-color);
        border-color: var(--primary-color);
    }
    
    .btn-outline-primary {
        color: var(--primary-color);
        border-color: var(--primary-color);
    }
    
    .btn-outline-primary:hover {
        background: var(--primary-color);
        color: white;
    }
    
    .social-share {
        display: flex;
        gap: 12px;
    }
    
    .social-icon {
        width: 40px;
        height: 40px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        transition: var(--transition);
    }
    
    .social-icon:hover {
        transform: translateY(-3px);
    }
    
    .facebook { background: #3b5998; }
    .twitter { background: #1da1f2; }
    .linkedin { background: #0077b5; }
    .whatsapp { background: #25d366; }
    
    .features-section {
        padding: 30px 0 0;
        margin-top: 20px;
    }
    
    .feature-item {
        display: flex;
        align-items: center;
        margin-bottom: 20px;
        padding: 15px;
        background: white;
        border-radius: 10px;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
        transition: var(--transition);
    }
    
    .feature-item:hover {
        transform: translateY(-3px);
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
    }
    
    .feature-icon {
        width: 50px;
        height: 50px;
        background: rgba(26, 115, 232, 0.1);
        color: var(--primary-color);
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 10px;
        margin-right: 15px;
        font-size: 1.2rem;
    }
    
    .feature-text {
        font-weight: 600;
        font-size: 1.1rem;
        color: var(--text-primary);
    }
    
    /* Styles responsifs */
    @media (max-width: 992px) {
        .detail-section {
            padding: 100px 0 60px;
        }
        
        .detail-image {
            height: 350px;
        }
    }
    
    @media (max-width: 768px) {
        .detail-section {
            padding: 90px 0 50px;
        }
        
        .detail-image {
            height: 300px;
        }
        
        .back-button {
            top: 20px;
            left: 20px;
            width: 45px;
            height: 45px;
        }
        
        .detail-title {
            font-size: 1.7rem;
        }
        
        .detail-subtitle {
            font-size: 1.2rem;
        }
        
        .footer-actions {
            flex-direction: column;
            gap: 20px;
        }
        
        .social-share {
            width: 100%;
            justify-content: center;
        }
    }
    
    @media (max-width: 576px) {
        .content-wrapper {
            padding: 20px;
        }
        
        .detail-image {
            height: 250px;
        }
        
        .feature-item {
            flex-direction: column;
            text-align: center;
        }
        
        .feature-icon {
            margin-right: 0;
            margin-bottom: 10px;
        }
    }
</style>

<div class="detail-section">
    <!-- Bouton retour à la page des services -->
    <a href="{{ url('/post') }}" class="back-button" title="Retour aux services">
        <i class="fas fa-arrow-left"></i>
    </a>
    
    <div class="container">
        <h2 class="page-title text-center" data-aos="fade-up">Détail du Service</h2>
        
        <div class="row justify-content-center">
            <div class="col-lg-9 col-md-10">
                <div class="card detail-card" data-aos="fade-up" data-aos-delay="100">
                    <div class="detail-image-container">
                        <img src="{{ asset('images') }}/{{ $posts->image }}" class="detail-image" alt="{{ $posts->title }}">
                        <div class="service-badge">Service Premium</div>
                    </div>
                    
                    <div class="content-wrapper">
                        <h3 class="detail-title">{{ $posts->title }}</h3>
                        <h4 class="detail-subtitle">{{ $posts->description }}</h4>
                        <div class="detail-content">{{ $posts->detail }}</div>
                        
                        <!-- Features section -->
                        <div class="features-section">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="feature-item" data-aos="fade-right" data-aos-delay="200">
                                        <div class="feature-icon">
                                            <i class="fas fa-check-circle"></i>
                                        </div>
                                        <div class="feature-text">Service de qualité supérieure</div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="feature-item" data-aos="fade-left" data-aos-delay="250">
                                        <div class="feature-icon">
                                            <i class="fas fa-clock"></i>
                                        </div>
                                        <div class="feature-text">Livraison rapide</div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="feature-item" data-aos="fade-right" data-aos-delay="300">
                                        <div class="feature-icon">
                                            <i class="fas fa-user-shield"></i>
                                        </div>
                                        <div class="feature-text">Satisfaction garantie</div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="feature-item" data-aos="fade-left" data-aos-delay="350">
                                        <div class="feature-icon">
                                            <i class="fas fa-headset"></i>
                                        </div>
                                        <div class="feature-text">Support 24/7</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="footer-actions">
                        <div>
                            <a href="{{ url('/post') }}" class="btn btn-primary btn-action">
                                <i class="fas fa-list me-2"></i> Tous les services
                            </a>
                            <a href="{{ url('contact') }}" class="btn btn-outline-primary btn-action ms-2">
                                <i class="fas fa-envelope me-2"></i> Contacter
                            </a>
                        </div>
                        
                        <div class="social-share">
                            <a href="https://web.facebook.com/profile.php?id=61561337622222" class="social-icon facebook" title="Partager sur Facebook">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a href="#" class="social-icon twitter" title="Partager sur Twitter">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a href="#" class="social-icon linkedin" title="Partager sur LinkedIn">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                            <a href="#" class="social-icon whatsapp" title="Partager sur WhatsApp">
                                <i class="fab fa-whatsapp"></i>
                            </a>
                        </div>
                    </div>
                </div>
                
                <!-- Bloc d'appel à l'action -->
                <div class="card mt-4 p-4 text-center" data-aos="fade-up" data-aos-delay="400">
                    <h4 class="mb-3">Besoin d'informations complémentaires?</h4>
                    <p class="mb-4">Contactez-nous pour obtenir un devis personnalisé ou pour toute question.</p>
                    <a href="#" class="btn btn-primary btn-lg">
                        <i class="fas fa-phone-alt me-2"></i> Nous contacter
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    // Initialisation des animations AOS
    document.addEventListener('DOMContentLoaded', function() {
        AOS.init({
            duration: 800,
            easing: 'ease-out',
            once: true
        });
    });
</script>
@endsection