@extends('templete')
@section('main_content') 

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BAAZIZ-TECHNOLOGIES</title>
    
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>

    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon" href="Picture1.png" type="image/icon type">
   
    <style>
        .c-item {
            height: 480px;
        }

        .c-img {
            height: 100%;
            object-fit: cover;
            filter: brightness(0.6);
        }

        /* Scroll to top button style */
        #scrollBtn {
            position: fixed;
            bottom: 40px;
            right: 40px;
            z-index: 99;
            font-size: 18px;
            border: none;
            outline: none;
            background-color: #0b5ed7;
            color: white;
            cursor: pointer;
            padding: 12px 16px;
            border-radius: 50%;
            box-shadow: 0 4px 6px rgba(0,0,0,0.2);
        }

        #scrollBtn:hover {
            background-color: #0a53be;
        }
    </style>

</head>
<body style="padding-top: 56px;">

<div id="hero-carousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#hero-carousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#hero-carousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#hero-carousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>

    <div class="carousel-inner">
        <div class="carousel-item active c-item">
            <img src="images/0_05.webp" class="d-block w-100 c-img" alt="Slide 1">
            <div class="carousel-caption top-0 mt-4">
                <h3 class="mt-5 fs-3 text-uppercase" style="color: DodgerBlue;">BAAZIZ</h3>
                <h1 class="display-1 fw-bolder text-capitalize" style="color: DodgerBlue;">Technologies</h1>
            </div>
        </div>
        <div class="carousel-item c-item">
            <img src="images/e9.jpg" class="d-block w-100 c-img" alt="Slide 2">
            <div class="carousel-caption top-0 mt-4">
                <h3 class="text-uppercase fs-3 mt-5" style="color: DodgerBlue;">BAAZIZ</h3>
                <h1 class="display-1 fw-bolder text-capitalize" style="color: DodgerBlue;">Technologies</h1>
            </div>
        </div>
        <div class="carousel-item c-item">
            <img src="images/sup.jpg" class="d-block w-100 c-img" alt="Slide 3">
            <div class="carousel-caption top-0 mt-4">
                <h3 class="text-uppercase fs-3 mt-5" style="color: DodgerBlue;">BAAZIZ</h3>
                <h1 class="display-1 fw-bolder text-capitalize" style="color: DodgerBlue;">Technologies</h1>
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

<br><br>

<div class="container content-md welcomeSection">
    <div class="row section1">
        <div class="col-md-6" style="margin-bottom: 40px;">
            <h3 class="title-v2">BIENVENUE À <span style="color: DodgerBlue;"> BAAZIZ TECHNOLOGIES </span></h3> <br>
            <p style="text-align: justify; font-size: 15px;">Établie en 2020, Baaziz Technologies, est une entreprise de pointe spécialisée dans les réseaux informatiques et les télécommunications...</p>
            <p style="text-align: justify; font-size: 15px;">Notre expertise se concentre sur la conception, l'installation et la maintenance de réseaux de fibre optique...</p> 
            <p style="text-align: justify; font-size: 15px;">Chez Baaziz Technologies, nous croyons fermement à la recherche constante de l'excellence...</p> 
            <a href="{{ url('about') }}" class="btn-u btn-brd btn-brd-hover btn-primary" style="padding: 10px 20px;">Lire la suite</a>
        </div>
        <div class="col-md-6 overflow-h">
            <img style="border-radius: 30px; margin-left: 20px; max-width: 150%;" src="images/13.jpg" alt="">
        </div>
    </div>
</div>

<!-- Bouton Scroll to Top -->
<button onclick="scrollToTop()" id="scrollBtn" title="Remonter" class="btn">
    <i class="fa fa-arrow-up"></i>
</button>

<script>
function scrollToTop() {
    window.scrollTo({ top: 0, behavior: 'smooth' });
}
</script>

</body>
</html>

@endsection
