<!DOCTYPE html>
<html lang="pt-BR" class="h-100" data-bs-theme="light">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BAAZIZ--TECHNOLOGIES</title>
   
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
    
    /* Adaptation pour mobile */
    @media (max-width: 992px) {
        .navbar-nav .nav-link {
            margin: 5px 0;
            padding: 10px 15px;
        }
        
        .ml-5 {
            margin-left: 0 !important;
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



    @yield('main_content')

    <div class="container">
    <div class="container d-flex justify-content-center align-items-center">
        <ul class="pagination" style="margin-bottom: 0;" "padding:0;"> <!-- Modifier la valeur de margin-bottom à 0 -->
            <li class="page-item"><a class="page-link" href="{{ url('/') }}">1</a></li>
            <li class="page-item"><a class="page-link" href="{{ url('post') }}">2</a></li>
            <li class="page-item"><a class="page-link" href="{{ url('about') }}">3</a></li>
            <li class="page-item"><a class="page-link" href="{{ url('contact') }}">4</a></li>
            <li class="page-item"><a class="page-link" href="{{ route('login') }}">5</a></li>
            <li class="page-item"><a class="page-link" href="{{ route('register') }}">6</a></li>
            
        </ul>
        
    </div>
</div> <br> <br>
<section class="map_section">
            <!-- map section -->
            <div class="map_container">
                <div class="map-responsive">
                    <iframe src="https://www.google.com/maps/embed/v1/place?key=AIzaSyA0s1a7phLN0iaD6-UE7m4qP-z21pH0eSc&q=Lot,Foutouh,Av de Caire,Temara,Morocco" width="600" height="300" frameborder="0" style="border:0; width: 100%; height:400px" allowfullscreen></iframe>
                </div>
            </div>
            <!-- end map section -->
        </section>
<footer class="bg-dark text-white pt-5 pd-4">
    <div class="container text-center text-md-left">
        <div class="row text-center text-md-left">
            <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
                <h5 class="text-uppercase mb-4 font-weight-bold " style="color: DodgerBlue;">baaziz Technologies</h5>
                <p>L'année en cours a été marquée par la nomination de M. Abdellatif Baaziz à la direction de Baaziz Technologies. Sous sa direction, l'entreprise a initié une stratégie novatrice, recrutant des talents éminents et restructurant ses tarifs pour stimuler une croissance remarquable et maintenir un service de qualité supérieure.</p>
            </div>
             <div class="col-md-2 col-lg col-xl-2 mx-auto mt-3">
                <h5 class="text-uppercase mb-4 font-weight-bold " style="color: DodgerBlue;"> Service</h5>
                <p>
                    <a href="#" class="text-white" style="text-decoration:none;">Etude de fibre</a>
                </p>
                <p>
                    <a href="#" class="text-white" style="text-decoration:none;">installation</a>
                </p>
                <p>
                    <a href="#" class="text-white" style="text-decoration:none;">Consulting</a>
                </p>
                <p>
                    <a href="#" class="text-white" style="text-decoration:none;">intégration</a>
                </p>
             </div>
             <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
                <h5 class="text-uppercase mb-4 font-weight-bold " style="color: DodgerBlue;">Liens utiles</h5>
                <p>
                    <a href="{{ url('post') }}" class="text-white" style="text-decoration:none;">Service</a>
                </p>
                <p>
                    <a href="{{ url('aboute') }}" class="text-white" style="text-decoration:none;">À propos</a>
                </p>
                <p>
                    <a href="{{ route('login') }}" class="text-white" style="text-decoration:none;">Connecter</a>
                </p>
                <p>
                    <a  href="{{ url('contact') }}" class="text-white" style="text-decoration:none;">Contact</a>
                </p>
             </div>
             <div class="col-md-3 col-lg-2 col-xl-3 mx-auto mt-3">
                <h5 class="text-uppercase mb-4 font-weight-bold " style="color: DodgerBlue;">Contact</h5>
                <p>
                    <i class="fas fa-home mr-3"></i>Temara, Lot Foutouh
                </p>
                <p>
                    <i class="fas fa-envelope mr-3"></i>BaazizTechno@gmail.com
                </p>
                <p>
                    <i class="fas fa-phone mr-3"></i>+212 62 82 319 1
                </p>
                <p>
                    <i class="fas fa-print mr-3"></i>+05 56 76 45 87
                </p>
             </div>
        </div>
        <hr class="mb-4">
        <div class="row align-items-center">
            <div class="col-md-7 col-lg-8">
                <p>&copy; 2024 Mon Site. Tous droits réservés by:
                    <a href="#"style="text-decoration:none;">
                    <strong class=""style="color: DodgerBlue;">Privacy Policy</strong>
                </a></p>
            </div>
            <div class="col-md-5 col-lg-4">
                <div class="text-center text-md-right">
                    <ul class="list-unstyled list-inline">
                        <li class="list-inline-item">
                            <a href="#" class="btn-floating btn-sm text-white" style="font-size:23px"><i class="fab fa-facebook"></i></a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#" class="btn-floating btn-sm text-white" style="font-size:23px"><i class="fab fa-twitter"></i></a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#" class="btn-floating btn-sm text-white" style="font-size:23px"><i class="fab fa-google-plus"></i></a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#" class="btn-floating btn-sm text-white" style="font-size:23px"><i class="fab fa-linkedin-in"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

</footer>

</body> 
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</html>