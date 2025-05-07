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
    
    /* Amélioration du footer */
    .footer-section {
        background: linear-gradient(to right, #1e3c72, #2a5298);
        color: #fff;
        padding: 60px 0 30px;
        position: relative;
    }
    
    .footer-section::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 5px;
        background: DodgerBlue;
    }
    
    .footer-brand {
        font-size: 1.8rem;
        font-weight: 700;
        margin-bottom: 20px;
        color: DodgerBlue;
        text-transform: uppercase;
        letter-spacing: 1px;
    }
    
    .footer-links h5 {
        color: DodgerBlue;
        font-weight: 600;
        text-transform: uppercase;
        margin-bottom: 25px;
        position: relative;
        padding-bottom: 10px;
    }
    
    .footer-links h5::after {
        content: '';
        position: absolute;
        width: 50px;
        height: 3px;
        background-color: DodgerBlue;
        bottom: 0;
        left: 0;
    }
    
    .footer-links ul {
        list-style: none;
        padding: 0;
    }
    
    .footer-links ul li {
        margin-bottom: 15px;
    }
    
    .footer-links ul li a {
        color: #fff;
        text-decoration: none;
        transition: all 0.3s ease;
        display: block;
        position: relative;
        padding-left: 15px;
    }
    
    .footer-links ul li a:before {
        content: '\f105';
        font-family: 'Font Awesome 5 Free';
        font-weight: 900;
        position: absolute;
        left: 0;
        top: 50%;
        transform: translateY(-50%);
        color: DodgerBlue;
    }
    
    .footer-links ul li a:hover {
        color: DodgerBlue;
        transform: translateX(5px);
    }
    
    .footer-contact {
        margin-bottom: 20px;
    }
    
    .footer-contact p {
        margin-bottom: 15px;
        display: flex;
        align-items: center;
    }
    
    .footer-contact i {
        color: DodgerBlue;
        font-size: 18px;
        margin-right: 15px;
        width: 20px;
    }
    
    .social-links {
        margin-top: 30px;
    }
    
    .social-links a {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        width: 40px;
        height: 40px;
        border-radius: 50%;
        background-color: rgba(255, 255, 255, 0.1);
        color: #fff;
        margin-right: 10px;
        transition: all 0.3s ease;
    }
    
    .social-links a:hover {
        background-color: DodgerBlue;
        transform: translateY(-5px);
    }
    
    .footer-bottom {
        border-top: 1px solid rgba(255, 255, 255, 0.1);
        padding-top: 20px;
        margin-top: 30px;
    }
    
    .footer-bottom p {
        margin-bottom: 0;
    }
    
    /* Adaptation pour mobile */
    @media (max-width: 992px) {
        .navbar-nav .nav-link {
            margin: 5px 0;
            padding: 10px 15px;
        }
        
        .ml-5 {
            margin-left: 0 !important;
        }
        
        .footer-section {
            text-align: center;
        }
        
        .footer-links h5::after {
            left: 50%;
            transform: translateX(-50%);
        }
        
        .footer-links ul li a {
            padding-left: 0;
        }
        
        .footer-links ul li a:before {
            display: none;
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
                        <i class="bi bi-house-door mr-1"></i> Accueil
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
<!-- Enhanced Footer Section -->
<footer class="footer-section py-5">
    <div class="container">
        <!-- Top Footer with Wave Effect -->
        <div class="footer-wave">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 120" preserveAspectRatio="none" class="footer-wave-svg">
                <path fill="#ffffff" fill-opacity="1" d="M0,32L80,42.7C160,53,320,75,480,74.7C640,75,800,53,960,48C1120,43,1280,53,1360,58.7L1440,64L1440,0L1360,0C1280,0,1120,0,960,0C800,0,640,0,480,0C320,0,160,0,80,0L0,0Z"></path>
            </svg>
        </div>
        
        <!-- Main Footer Content -->
        <div class="row justify-content-between">
            <!-- Company Info Column -->
            <div class="col-lg-4 mb-5 mb-lg-0">
                <div class="footer-logo mb-4">
                    <img src="{{ asset('images/Picture1.png') }}" alt="BAAZIZ TECHNOLOGIES" class="img-fluid" style="max-width: 180px;">
                </div>
                <p class="footer-description">Votre partenaire de confiance en solutions technologiques de pointe. Nous offrons une expertise inégalée en études et installations de fibre optique ainsi qu'en services de conseil informatique.</p>
                <div class="footer-newsletter mt-4">
                    <h5 class="newsletter-title">Restez informé</h5>
                    <div class="input-group">
                        <input type="email" class="form-control" placeholder="Votre email..." aria-label="Email">
                        <div class="input-group-append">
                            <button class="btn btn-primary" type="button">
                                <i class="fas fa-paper-plane"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Services Column -->
            <div class="col-md-6 col-lg-2 mb-4 mb-md-0">
                <h5 class="footer-heading">Nos Services</h5>
                <ul class="footer-links list-unstyled">
                    <li><a href="#" class="footer-link"><i class="fas fa-chevron-right"></i> Étude de fibre</a></li>
                    <li><a href="#" class="footer-link"><i class="fas fa-chevron-right"></i> Installation réseau</a></li>
                    <li><a href="#" class="footer-link"><i class="fas fa-chevron-right"></i> Consulting IT</a></li>
                    <li><a href="#" class="footer-link"><i class="fas fa-chevron-right"></i> Intégration système</a></li>
                    <li><a href="#" class="footer-link"><i class="fas fa-chevron-right"></i> Support technique</a></li>
                </ul>
            </div>
            
            <!-- Quick Links Column -->
            <div class="col-md-6 col-lg-2 mb-4 mb-md-0">
                <h5 class="footer-heading">Liens rapides</h5>
                <ul class="footer-links list-unstyled">
                    <li><a href="{{ url('/') }}" class="footer-link"><i class="fas fa-chevron-right"></i> Accueil</a></li>
                    <li><a href="{{ url('post') }}" class="footer-link"><i class="fas fa-chevron-right"></i> Nos Services</a></li>
                    <li><a href="{{ url('about') }}" class="footer-link"><i class="fas fa-chevron-right"></i> À propos</a></li>
                    <li><a href="{{ url('contact') }}" class="footer-link"><i class="fas fa-chevron-right"></i> Contact</a></li>
                    <li><a href="#" class="footer-link"><i class="fas fa-chevron-right"></i> FAQ</a></li>
                </ul>
            </div>
            
            <!-- Contact Info Column -->
            <div class="col-lg-3">
                <h5 class="footer-heading">Contact</h5>
                <div class="footer-contact-info">
                    <div class="contact-item d-flex align-items-center mb-3">
                        <div class="contact-icon">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <div class="contact-text">
                            Lot Foutouh, Imm 177, App 3<br>Av De Caire, Temara
                        </div>
                    </div>
                    <div class="contact-item d-flex align-items-center mb-3">
                        <div class="contact-icon">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div class="contact-text">
                            <a href="mailto:BaazizTechno@gmail.com">BaazizTechno@gmail.com</a>
                        </div>
                    </div>
                    <div class="contact-item d-flex align-items-center mb-3">
                        <div class="contact-icon">
                            <i class="fas fa-phone-alt"></i>
                        </div>
                        <div class="contact-text">
                            <a href="tel:+212628231901">+212 62 82 319 1</a>
                        </div>
                    </div>
                    <div class="contact-item d-flex align-items-center">
                        <div class="contact-icon">
                            <i class="fas fa-clock"></i>
                        </div>
                        <div class="contact-text">
                            Lun - Sam: 9h00 - 18h00
                        </div>
                    </div>
                </div>
                
                <div class="social-media-icons mt-4">
                    <h5 class="footer-heading">Suivez-nous</h5>
                    <div class="social-icons d-flex">
                        <a href="https://web.facebook.com/profile.php?id=61561337622222" class="social-icon facebook">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="https://x.com/chkr_achraf" class="social-icon twitter">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="https://www.linkedin.com/in/achraf-chikrabane-850554291/" class="social-icon linkedin">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a href="https://www.instagram.com/achraf_chkr/" class="social-icon instagram">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="#" class="social-icon youtube">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Footer Bottom -->
    <div class="footer-bottom mt-5">
        <div class="container">
            <div class="footer-divider mb-4"></div>
            <div class="row align-items-center">
                <div class="col-md-6 mb-3 mb-md-0">
                    <p class="copyright-text">&copy; <script>document.write(new Date().getFullYear())</script> BAAZIZ TECHNOLOGIES. Tous droits réservés.</p>
                </div>
                <div class="col-md-6">
                    <div class="footer-links d-flex justify-content-md-end">
                        <a href="#" class="px-3">Conditions d'utilisation</a>
                        <a href="#" class="px-3">Politique de confidentialité</a>
                        <a href="#" class="px-3">Cookies</a>
                    </div>
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