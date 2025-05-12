<!DOCTYPE html>
<html lang="pt-BR" class="h-100" data-bs-theme="light">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BAAZIZ-TECHNOLOGIES</title>
   
    <!-- darori -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- darori -->
    <link rel="stylesheet" href="includes/bootstrap-5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="includes/DataTables/dataTables.min.css">
    <link rel="stylesheet" href="includes/bootstrap-datepicker-1.10.0/css/bootstrap-datepicker.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon" href="{{ asset('images/Picture1.png') }}" type="image/icon type">
    <style>
    /* Styles améliorés pour le header */
    .navbar {
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        padding: 12px 0;
        transition: all 0.3s ease;
    }
    
    .navbar-brand img {
        transition: all 0.3s ease;
    }
    
    .navbar-brand:hover img {
        transform: scale(1.05);
    }
    
    .font-size-large {
        font-size: 18px;
        font-weight: 500;
        transition: all 0.2s ease;
    }
    
    .navbar-nav .nav-link {
        position: relative;
        margin: 0 10px;
        padding: 8px 5px;
    }
    
    .navbar-nav .nav-link::after {
        content: '';
        position: absolute;
        width: 0;
        height: 2px;
        bottom: 0;
        left: 0;
        background-color: DodgerBlue;
        transition: width 0.3s ease;
    }
    
    .navbar-nav .nav-link:hover {
        color: DodgerBlue !important;
        transform: translateY(-2px);
    }
    
    .navbar-nav .nav-link:hover::after {
        width: 100%;
    }
    
    .btn-primary {
        background-color: DodgerBlue;
        border-color: DodgerBlue;
        border-radius: 30px;
        padding: 8px 20px;
        font-weight: 500;
        transition: all 0.3s ease;
    }
    
    .btn-primary:hover {
        background-color: #0069d9;
        transform: translateY(-2px);
        box-shadow: 0 5px 15px rgba(30, 144, 255, 0.3);
    }
    
    .dropdown-menu {
        border: none;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        border-radius: 10px;
    }
    
    .dropdown-item {
        padding: 10px 20px;
        transition: all 0.2s ease;
    }
    
    .dropdown-item:hover {
        background-color: rgba(30, 144, 255, 0.1);
        color: DodgerBlue;
    }
    
    /* Ajout d'un effet de highlight pour la page active */
    .navbar-nav .nav-item.active .nav-link {
        color: DodgerBlue !important;
        font-weight: 600;
    }
    
    .navbar-nav .nav-item.active .nav-link::after {
        width: 100%;
    }

    /* Amélioration du système de pagination */
    .pagination-container {
        padding: 30px 0;
        background-color: #f8f9fa;
        border-radius: 10px;
        margin: 40px 0;
    }
    
    .pagination .page-item .page-link {
        color: #333;
        border: none;
        border-radius: 50%;
        margin: 0 5px;
        width: 40px;
        height: 40px;
        display: flex;
        align-items: center;
        justify-content: center;
        transition: all 0.3s ease;
    }
    
    .pagination .page-item .page-link:hover {
        background-color: DodgerBlue;
        color: white;
        transform: translateY(-2px);
        box-shadow: 0 4px 8px rgba(30, 144, 255, 0.2);
    }
    
    .pagination .page-item.active .page-link {
        background-color: DodgerBlue;
        color: white;
    }
    
    /* Amélioration de la section carte */
    .map_section {
        position: relative;
        padding: 0;
        margin: 50px 0;
    }
    
    .map_container {
        border-radius: 15px;
        overflow: hidden;
        box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
    }
    
    /* Styles du footer moderne */
    .footer-section {
        position: relative;
        background: linear-gradient(135deg, #1a2a6c, #2a5298, #294f92);
        color: rgba(255, 255, 255, 0.8);
        padding: 0 0 30px;
        overflow: hidden;
        margin-top: 50px;
    }
    
    .footer-wave {
        width: 100%;
        line-height: 0;
        margin-bottom: 20px;
    }
    
    .footer-logo {
        transition: all 0.3s ease;
        /* Suppression du filtre qui rend l'image blanche */
        /* filter: brightness(0) invert(1); */
    }
    
    .footer-logo:hover {
        transform: scale(1.05);
    }
    
    .footer-heading {
        position: relative;
        color: white;
        font-weight: 600;
        margin-bottom: 25px;
        font-size: 1.25rem;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        padding-bottom: 12px;
    }
    
    .footer-heading:after {
        content: '';
        position: absolute;
        left: 0;
        bottom: 0;
        height: 3px;
        width: 50px;
        background: DodgerBlue;
        border-radius: 5px;
    }
    
    .footer-links a {
        display: block;
        padding: 8px 0;
        color: rgba(255, 255, 255, 0.8);
        text-decoration: none;
        font-weight: 400;
        transition: all 0.3s ease;
    }
    
    .footer-links a:hover {
        color: DodgerBlue;
        transform: translateX(8px);
        padding-left: 5px;
    }
    
    .footer-links a i {
        margin-right: 8px;
        font-size: 12px;
        color: DodgerBlue;
    }
    
    .newsletter-box {
        background: rgba(255, 255, 255, 0.05);
        padding: 20px;
        border-radius: 10px;
        backdrop-filter: blur(5px);
    }
    
    .newsletter-box .form-control {
        background: rgba(255, 255, 255, 0.1);
        border: 1px solid rgba(255, 255, 255, 0.2);
        color: white;
        height: 45px;
        border-radius: 30px 0 0 30px;
    }
    
    .newsletter-box .form-control::placeholder {
        color: rgba(255, 255, 255, 0.6);
    }
    
    .newsletter-box .btn {
        height: 45px;
        border-radius: 0 30px 30px 0;
        background: DodgerBlue;
        border-color: DodgerBlue;
    }
    
    .newsletter-box .btn:hover {
        background: #0069d9;
    }
    
    .contact-icon {
        width: 35px;
        height: 35px;
        display: flex;
        align-items: center;
        justify-content: center;
        background: DodgerBlue;
        color: white;
        border-radius: 50%;
        font-size: 14px;
    }
    
    .contact-info p {
        font-size: 15px;
        color: rgba(255, 255, 255, 0.9);
    }
    
    .social-links {
        display: flex;
        gap: 12px;
    }
    
    .social-icon {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        width: 40px;
        height: 40px;
        background: rgba(255, 255, 255, 0.1);
        color: white;
        border-radius: 50%;
        transition: all 0.3s ease;
    }
    
    .social-icon:hover {
        background: DodgerBlue;
        color: white;
        transform: translateY(-5px);
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
    }
    
    .footer-bottom {
        background: rgba(0, 0, 0, 0.2);
        padding: 20px 0;
        margin-top: 30px;
    }
    
    .footer-bottom p {
        color: rgba(255, 255, 255, 0.7);
        font-size: 14px;
        margin-bottom: 0;
    }
    
    .footer-bottom-links a {
        color: rgba(255, 255, 255, 0.7);
        font-size: 14px;
        margin: 0 15px;
        text-decoration: none;
        transition: all 0.3s ease;
    }
    
    .footer-bottom-links a:hover {
        color: DodgerBlue;
    }
    
    @media (max-width: 767px) {
        .footer-section {
            text-align: center;
        }
        
        .footer-heading:after {
            left: 50%;
            transform: translateX(-50%);
        }
        
        .contact-info .d-flex {
            justify-content: center;
        }
        
        .footer-links a:hover {
            transform: none;
            padding-left: 0;
        }
        
        .social-links {
            justify-content: center;
        }
        
        .footer-bottom-links {
            margin-top: 15px;
        }
    }
</style>
</head>
<body> 
    
<nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top">
    <div class="container">
        <div class="navbar-brand"> 
            <a href="/">
                <img src="{{ asset('images/Picture1.png') }}" alt="BAAZIZ TECHNOLOGIES" class="img-fluid" style="max-width: 160px;">
            </a>
        </div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto"> 
                <li class="nav-item {{ Request::is('/') ? 'active' : '' }}">
                    <a class="nav-link text-dark font-size-large" href="{{ url('/') }}">
                        <i class="bi bi-house-door mr-1"></i> Accueill
                    </a> 
                </li>
                <li class="nav-item {{ Request::is('post') ? 'active' : '' }}">
                    <a class="nav-link text-dark font-size-large" href="{{ url('post') }}">
                        <i class="bi bi-gear mr-1"></i> Nos Services
                    </a> 
                </li>
                <li class="nav-item {{ Request::is('about') ? 'active' : '' }}">
                    <a class="nav-link text-dark font-size-large" href="{{ url('about') }}">
                        <i class="bi bi-info-circle mr-1"></i> À propos
                    </a> 
                </li>
                <li class="nav-item {{ Request::is('contact') ? 'active' : '' }}">
                    <a class="nav-link text-dark font-size-large" href="{{ url('contact') }}">
                        <i class="bi bi-envelope mr-1"></i> Contact
                    </a>
                </li>
            </ul>
            <div class="ml-auto">
                @if (Route::has('login'))  
                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                    <div class="dropdown"> 
                        <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="bi bi-person-fill mr-1"></i> Connexion
                        </button>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="{{ route('login') }}">
                                <i class="bi bi-box-arrow-in-right mr-2"></i> Se connecter
                            </a>
                            @if (Route::has('register'))
                            <a class="dropdown-item" href="{{ route('register') }}">
                                <i class="bi bi-person-plus mr-2"></i> S'inscrire
                            </a>
                            @endif
                        </div>
                    </div>
                </div>
                @endif
            </div>
        </div>
    </div>
</nav>

<!-- Contenu principal -->
@yield('main_content')

<!-- Système de pagination amélioré -->
<!-- <div class="container pagination-container">
    <div class="row">
        <div class="col-md-12">
            <nav aria-label="Navigation des pages">
                <ul class="pagination justify-content-center">
                    <li class="page-item {{ Request::is('/') ? 'active' : '' }}">
                        <a class="page-link" href="{{ url('/') }}" aria-label="Accueil">
                            <i class="bi bi-house-door"></i>
                        </a>
                    </li>
                    <li class="page-item {{ Request::is('post') ? 'active' : '' }}">
                        <a class="page-link" href="{{ url('post') }}" aria-label="Services">
                            <i class="bi bi-gear"></i>
                        </a>
                    </li>
                    <li class="page-item {{ Request::is('about') ? 'active' : '' }}">
                        <a class="page-link" href="{{ url('about') }}" aria-label="À propos">
                            <i class="bi bi-info-circle"></i>
                        </a>
                    </li>
                    <li class="page-item {{ Request::is('contact') ? 'active' : '' }}">
                        <a class="page-link" href="{{ url('contact') }}" aria-label="Contact">
                            <i class="bi bi-envelope"></i>
                        </a>
                    </li>
                    <li class="page-item {{ Request::is('login') ? 'active' : '' }}">
                        <a class="page-link" href="{{ route('login') }}" aria-label="Connexion">
                            <i class="bi bi-box-arrow-in-right"></i>
                        </a>
                    </li>
                    <li class="page-item {{ Request::is('register') ? 'active' : '' }}">
                        <a class="page-link" href="{{ route('register') }}" aria-label="Inscription">
                            <i class="bi bi-person-plus"></i>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</div> -->

<!-- Section carte améliorée -->
<section class="map_section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="map_container">
                    <div class="map-responsive">
                        <iframe src="https://www.google.com/maps/embed/v1/place?key=AIzaSyA0s1a7phLN0iaD6-UE7m4qP-z21pH0eSc&q=Lot,Foutouh,Av de Caire,Temara,Morocco" width="600" height="400" frameborder="0" style="border:0; width: 100%; height:400px" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Footer amélioré -->
<!-- Footer moderne et professionnel -->
<footer class="footer-section">
    <!-- Wave separator -->
    <div class="footer-wave">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 150">
            <path fill="#ffffff" fill-opacity="1" d="M0,96L60,85.3C120,75,240,53,360,64C480,75,600,117,720,128C840,139,960,117,1080,106.7C1200,96,1320,96,1380,96L1440,96L1440,0L1380,0C1320,0,1200,0,1080,0C960,0,840,0,720,0C600,0,480,0,360,0C240,0,120,0,60,0L0,0Z"></path>
        </svg>
    </div>
    
    <div class="container py-5">
        <div class="row g-5">
            <!-- Logo et info entreprise -->
            <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
                <div class="footer-logo-container mb-4">
                    <img src="{{ asset('images/Picture1.png') }}" alt="BAAZIZ TECHNOLOGIES" class="img-fluid footer-logo" style="max-width: 180px;">
                </div>
                <p class="text-light-emphasis mb-4">L'année en cours a été marquée par la nomination de M. Abdellatif Baaziz à la direction de Baaziz Technologies. Notre mission est de fournir des solutions technologiques innovantes qui transforment votre expérience numérique.</p>
                
                <!-- Newsletter subscription -->
                <div class="newsletter-box">
                    <h5 class="text-white mb-3">Abonnez-vous à notre newsletter</h5>
                    <div class="input-group mb-3">
                        <input type="email" class="form-control" placeholder="Votre email" aria-label="Email address">
                        <button class="btn btn-primary" type="button">
                            <i class="fas fa-paper-plane"></i>
                        </button>
                    </div>
                </div>
            </div>
            
            <!-- Services -->
            <div class="col-lg-2 col-md-4 col-6 mb-4 mb-md-0">
                <h5 class="footer-heading">Services</h5>
                <ul class="footer-links list-unstyled">
                    <li><a href="#"><i class="fas fa-angle-right"></i> Étude de fibre</a></li>
                    <li><a href="#"><i class="fas fa-angle-right"></i> Installation réseau</a></li>
                    <li><a href="#"><i class="fas fa-angle-right"></i> Consulting IT</a></li>
                    <li><a href="#"><i class="fas fa-angle-right"></i> Intégration système</a></li>
                    <li><a href="#"><i class="fas fa-angle-right"></i> Sécurité informatique</a></li>
                </ul>
            </div>
            
            <!-- Navigation rapide -->
            <div class="col-lg-2 col-md-4 col-6 mb-4 mb-md-0">
                <h5 class="footer-heading">Navigation</h5>
                <ul class="footer-links list-unstyled">
                    <li><a href="{{ url('/') }}"><i class="fas fa-angle-right"></i> Accueil</a></li>
                    <li><a href="{{ url('post') }}"><i class="fas fa-angle-right"></i> Nos Services</a></li>
                    <li><a href="{{ url('about') }}"><i class="fas fa-angle-right"></i> À propos</a></li>
                    <li><a href="{{ url('contact') }}"><i class="fas fa-angle-right"></i> Contact</a></li>
                    <li><a href="{{ route('login') }}"><i class="fas fa-angle-right"></i> Espace client</a></li>
                </ul>
            </div>
            
            <!-- Contact -->
            <div class="col-lg-4 col-md-4 mb-4 mb-md-0">
                <h5 class="footer-heading">Contact</h5>
                <div class="contact-info">
                    <div class="d-flex mb-3">
                        <div class="contact-icon">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <div class="ms-3">
                            <p class="mb-0">Temara, Lot Foutouh,</p>
                            <p class="mb-0">Avenue de Caire, Maroc</p>
                        </div>
                    </div>
                    <div class="d-flex mb-3">
                        <div class="contact-icon">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div class="ms-3">
                            <p class="mb-0">BaazizTechno@gmail.com</p>
                        </div>
                    </div>
                    <div class="d-flex mb-3">
                        <div class="contact-icon">
                            <i class="fas fa-phone-alt"></i>
                        </div>
                        <div class="ms-3">
                            <p class="mb-0">+212 62 82 319 1</p>
                            <p class="mb-0">+05 56 76 45 87</p>
                        </div>
                    </div>
                </div>
                
                <!-- Social media -->
                <div class="social-links mt-4">
                    <a href="https://web.facebook.com/profile.php?id=61561337622222" class="social-icon" aria-label="Facebook">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="https://x.com/chkr_achraf" class="social-icon" aria-label="Twitter">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="https://www.linkedin.com/in/achraf-chikrabane-850554291/" class="social-icon" aria-label="LinkedIn">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                    <a href="https://www.instagram.com/achraf_chkr/" class="social-icon" aria-label="Instagram">
                        <i class="fab fa-instagram"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Bottom bar -->
    <div class="footer-bottom">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 text-center text-md-start">
                    <p class="mb-md-0">&copy; <script>document.write(new Date().getFullYear())</script> BAAZIZ TECHNOLOGIES. Tous droits réservés.</p>
                </div>
                <div class="col-md-6">
                    <ul class="footer-bottom-links list-inline text-center text-md-end mb-0">
                        <li class="list-inline-item"><a href="#">Politique de confidentialité</a></li>
                        <li class="list-inline-item"><a href="#">Conditions d'utilisation</a></li>
                        <li class="list-inline-item"><a href="#">FAQ</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- Scripts -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>