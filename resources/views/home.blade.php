@extends('templete')
@section('main_content') 

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BAAZIZ-TECHNOLOGIES</title>
    
    <!-- Bootstrap & Font Awesome -->
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
    <link rel="icon" href="Picture1.png" type="image/icon type">
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Montserrat:wght@700;800;900&display=swap" rel="stylesheet">
   
    <style>
        :root {
            --primary-color: #0056b3;
            --secondary-color: #0091ff;
            --dark-color: #003366;
            --light-color: #f8f9fa;
            --accent-color: #00d4ff;
        }
        
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f9fafc;
            color: #333;
            padding-top: 56px;
        }
        
        h1, h2, h3, h4, h5, h6 {
            font-family: 'Montserrat', sans-serif;
        }
        
        /* Carousel Styles */
        .c-item {
            height: 85vh;
            position: relative;
        }

        .c-img {
            height: 100%;
            object-fit: cover;
            filter: brightness(0.5);
        }
        
        .carousel-caption {
            top: 50%;
            transform: translateY(-50%);
            bottom: initial;
        }
        
        .carousel-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(45deg, rgba(0,0,0,0.7) 0%, rgba(0,86,179,0.5) 100%);
            z-index: 1;
        }
        
        .carousel-caption {
            z-index: 2;
        }
        
        .display-1 {
            font-weight: 900;
            letter-spacing: -1px;
            margin-bottom: 1.5rem;
            text-shadow: 2px 2px 8px rgba(0,0,0,0.3);
        }
        
        .carousel-tagline {
            font-size: 1.2rem;
            max-width: 600px;
            margin: 0 auto 2rem auto;
        }
        
        /* Welcome Section */
        .welcomeSection {
            padding: 5rem 0;
        }
        
        .section-title {
            position: relative;
            margin-bottom: 2rem;
            font-weight: 800;
        }
        
        .section-title:after {
            content: '';
            display: block;
            width: 70px;
            height: 4px;
            background: var(--secondary-color);
            margin-top: 15px;
        }
        
        .welcome-image {
            position: relative;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 15px 35px rgba(0,0,0,0.1);
            transition: all 0.3s ease;
        }
        
        .welcome-image:hover {
            transform: translateY(-10px);
        }
        
        .welcome-image img {
            width: 100%;
            border-radius: 20px;
            transition: all 0.5s ease;
        }
        
        .welcome-image:hover img {
            transform: scale(1.05);
        }
        
        .welcome-text {
            padding-right: 2rem;
        }
        
        .btn-custom {
            padding: 12px 23px;
            font-weight: 500;
            border-radius: 30px;
            background: linear-gradient(45deg, var(--primary-color), var(--secondary-color));
            color: white;
            border: none;
            box-shadow: 0 4px 15px rgba(0,86,179,0.3);
            transition: all 0.3s ease;
            text-transform: uppercase;
            letter-spacing: 1px;
            font-size: 0.9rem;
        }
        
        .btn-custom:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 20px rgba(0,86,179,0.4);
            background: linear-gradient(45deg, var(--secondary-color), var(--primary-color));
        }
        
        /* Services Section */
        .services-section {
            background-color: #f0f6ff;
            padding: 5rem 0;
        }
        
        .service-card {
            background-color: white;
            padding: 2rem;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.05);
            height: 100%;
            transition: all 0.3s ease;
            border-bottom: 4px solid transparent;
        }
        
        .service-card:hover {
            transform: translateY(-10px);
            border-bottom: 4px solid var(--secondary-color);
        }
        
        .service-icon {
            width: 70px;
            height: 70px;
            background: linear-gradient(45deg, var(--primary-color), var(--secondary-color));
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 1.5rem;
            color: white;
            font-size: 1.8rem;
        }
        
        /* Scroll to top button style */
        #scrollBtn {
            position: fixed;
            bottom: 30px;
            right: 30px;
            z-index: 99;
            border: none;
            outline: none;
            background: linear-gradient(45deg, var(--primary-color), var(--secondary-color));
            color: white;
            cursor: pointer;
            padding: 15px;
            border-radius: 50%;
            box-shadow: 0 4px 15px rgba(0,86,179,0.3);
            display: none; /* Hidden initially */
            width: 50px;
            height: 50px;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.3s ease;
        }

        #scrollBtn:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 20px rgba(0,86,179,0.4);
        }
        
        /* Responsive Adjustments */
        @media (max-width: 992px) {
            .c-item {
                height: 70vh;
            }
            
            .welcome-text {
                padding-right: 0;
                margin-bottom: 3rem;
            }
        }
        
        @media (max-width: 768px) {
            .c-item {
                height: 60vh;
            }
            
            .display-1 {
                font-size: 2.5rem;
            }
        }
    </style>

</head>
<body>

<!-- Hero Carousel -->
<div id="hero-carousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#hero-carousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#hero-carousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#hero-carousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>

    <div class="carousel-inner">
        <div class="carousel-item active c-item">
            <div class="carousel-overlay"></div>
            <img src="images/0_05.webp" class="d-block w-100 c-img" alt="Slide 1">
            <div class="carousel-caption">
                <h3 class="fs-3 text-uppercase mb-3" style="color: var(--accent-color);">BIENVENUE À</h3>
                <h1 class="display-1 text-white mb-4">BAAZIZ TECHNOLOGIES</h1>
                <p class="carousel-tagline">Solutions innovantes en réseaux et télécommunications pour entreprises</p>
                <a href="#services" class="btn btn-custom">Découvrir nos services</a>
            </div>
        </div>
        <div class="carousel-item c-item">
            <div class="carousel-overlay"></div>
            <img src="images/e9.jpg" class="d-block w-100 c-img" alt="Slide 2">
            <div class="carousel-caption">
                <h3 class="fs-3 text-uppercase mb-3" style="color: var(--accent-color);">EXPERTISE</h3>
                <h1 class="display-1 text-white mb-4">RÉSEAUX & FIBRE OPTIQUE</h1>
                <p class="carousel-tagline">Expertise technique de pointe pour vos projets d'infrastructure réseau</p>
                <a href="{{ url('contact') }}" class="btn btn-custom">Contactez-nous</a>
            </div>
        </div>
        <div class="carousel-item c-item">
            <div class="carousel-overlay"></div>
            <img src="images/sup.jpg" class="d-block w-100 c-img" alt="Slide 3">
            <div class="carousel-caption">
                <h3 class="fs-3 text-uppercase mb-3" style="color: var(--accent-color);">SUPPORT</h3>
                <h1 class="display-1 text-white mb-4">SERVICE CLIENT DÉDIÉ</h1>
                <p class="carousel-tagline">Assistance technique professionnelle et réactive pour toutes vos problématiques</p>
                <a href="{{ url('about') }}" class="btn btn-custom">À propos de nous</a>
            </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#hero-carousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#hero-carousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>

<!-- Welcome Section -->
<div class="container welcomeSection">
    <div class="row align-items-center">
        <div class="col-lg-6 welcome-text">
            <h2 class="section-title">BIENVENUE À <span style="color: var(--secondary-color);"> BAAZIZ TECHNOLOGIES </span></h2>
            <p class="lead mb-4">Votre partenaire de confiance en solutions de réseaux et télécommunications depuis 2020.</p>
            <p class="mb-3">Établie en 2020, Baaziz Technologies est une entreprise de pointe spécialisée dans les réseaux informatiques et les télécommunications. Notre expertise se concentre sur la conception, l'installation et la maintenance de réseaux de fibre optique pour les entreprises et institutions.</p>
            <p class="mb-4">Chez Baaziz Technologies, nous croyons fermement à la recherche constante de l'excellence et à l'innovation technologique pour vous offrir des solutions adaptées à vos besoins spécifiques.</p> 
            <a href="{{ url('about') }}" class="btn btn-custom">En savoir plus</a>
        </div>
        <div class="col-lg-6">
            <div class="welcome-image">
                <img src="images/sp.jpg" alt="Baaziz Technologies" class="img-fluid">
            </div>
        </div>
    </div>
</div>

<!-- Services Section -->
<section class="services-section" id="services">
    <div class="container">
        <div class="row text-center mb-5">
            <div class="col-12">
                <h2 class="section-title mx-auto">NOS SERVICES</h2>
                <p class="lead">Solutions complètes pour vos besoins en réseaux et télécommunications</p>
            </div>
        </div>
        
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-network-wired"></i>
                    </div>
                    <h4>Réseaux informatiques</h4>
                    <p>Installation et maintenance de réseaux informatiques performants adaptés à vos besoins professionnels.</p>
                </div>
            </div>
            
            <div class="col-md-4 mb-4">
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-project-diagram"></i>
                    </div>
                    <h4>Fibre optique</h4>
                    <p>Expertise complète en solutions de connectivité fibre optique pour une transmission de données optimale.</p>
                </div>
            </div>
            
            <div class="col-md-4 mb-4">
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-headset"></i>
                    </div>
                    <h4>Support technique</h4>
                    <p>Service client dédié avec une assistance réactive pour résoudre tous vos problèmes techniques.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Bouton Scroll to Top -->
<button onclick="scrollToTop()" id="scrollBtn" title="Remonter" class="btn">
    <i class="fas fa-arrow-up"></i>
</button>

<script>
function scrollToTop() {
    window.scrollTo({ top: 0, behavior: 'smooth' });
}

// Show the button when the user scrolls down 100px
window.onscroll = function () {
    const scrollBtn = document.getElementById("scrollBtn");
    if (document.body.scrollTop > 300 || document.documentElement.scrollTop > 300) {
        scrollBtn.style.display = "flex";
    } else {
        scrollBtn.style.display = "none";
    }
};
</script>

</body>
</html>

@endsection