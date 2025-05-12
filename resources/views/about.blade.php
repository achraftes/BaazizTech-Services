@extends('templete')
@section('main_content')
<script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>

<!-- Hero Section -->
 
<section class="about-hero bg-light py-5 mt-5">
    <div class="container"> <br>
        <div class="row align-items-center">
            <div class="col-md-6">
                <h1 class="display-4 fw-bold text-primary mb-3">QUI SOMMES-NOUS</h1>
                <p class="lead">Experts en fibre optique et solutions de télécommunications depuis 2014.</p>
                <div class="d-flex mt-4">
                    <div class="me-4">
                        <h4 class="text-primary fw-bold">500+</h4>
                        <p>Projets réalisés</p>
                    </div>
                    <div class="me-4">
                        <h4 class="text-primary fw-bold">100%</h4>
                        <p>Satisfaction client</p>
                    </div>
                    <div>
                        <h4 class="text-primary fw-bold">20+</h4>
                        <p>Experts certifiés</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <img src="{{asset('images/about.jpg')}}" alt="Image à propos" class="img-fluid rounded shadow">
            </div>
        </div>
    </div>
</section>

<!-- Notre Mission Section -->
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <h2 class="text-center mb-4 position-relative">
                    <span class="badge bg-primary position-absolute" style="width: 50px; height: 4px; top: -10px; left: 50%; transform: translateX(-50%);"></span>
                    NOTRE MISSION
                </h2>
                <p class="lead" style="text-align: justify; font-size: 21px; color: black;">
                    Notre société se spécialise dans l'étude approfondie, l'installation efficace et le service de consultation dans le domaine des réseaux de fibre optique pour les télécommunications. Forts d'une expertise pointue et constamment à jour dans ce domaine en évolution, nous nous engageons à fournir des solutions de connectivité de premier plan.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Notre Approche Section -->
<section class="bg-light py-5">
    <div class="container">
        <div class="row mb-4">
            <div class="col-12 text-center">
                <h2 class="mb-4">NOTRE APPROCHE</h2>
                <p class="lead mb-5">Nous combinons expertise technique et vision stratégique pour offrir des solutions sur mesure</p>
            </div>
        </div>
        <div class="row g-4">
            <div class="col-md-4">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body text-center">
                        <div class="mb-4">
                            <i class="fas fa-search fa-3x text-primary"></i>
                        </div>
                        <h4 class="card-title">Étude Approfondie</h4>
                        <p class="card-text">En analysant minutieusement les besoins spécifiques de chaque projet, nous prenons en compte les exigences de bande passante, les contraintes géographiques et les normes de l'industrie.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body text-center">
                        <div class="mb-4">
                            <i class="fas fa-tools fa-3x text-primary"></i>
                        </div>
                        <h4 class="card-title">Installation Efficace</h4>
                        <p class="card-text">Grâce à l'utilisation de technologies de pointe et de pratiques d'installation optimisées, nous garantissons des réseaux de fibre optique robustes, rapides et fiables.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body text-center">
                        <div class="mb-4">
                            <i class="fas fa-comments fa-3x text-primary"></i>
                        </div>
                        <h4 class="card-title">Consultation Experte</h4>
                        <p class="card-text">Nos consultants expérimentés travaillent en étroite collaboration avec nos clients pour comprendre leurs objectifs commerciaux et technologiques, en proposant des recommandations stratégiques.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Notre Expertise Section -->
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-6 mb-4 mb-md-0">
                <h2 class="mb-4">NOTRE EXPERTISE</h2>
                <p style="text-align: justify; font-size: 18px; color: black;">
                    Notre service de consultation offre une expertise spécialisée, fournissant des conseils personnalisés et des solutions innovantes pour répondre aux besoins spécifiques de nos clients. Que ce soit pour optimiser les infrastructures existantes, développer de nouveaux réseaux ou explorer des technologies émergentes, notre service vise à fournir des solutions pratiques et rentables.
                </p>
                <div class="mt-4">
                    <div class="d-flex align-items-center mb-3">
                        <div class="me-3">
                            <i class="fas fa-check-circle text-primary fa-2x"></i>
                        </div>
                        <div>
                            <h5 class="mb-0">Réseaux FTTH et FTTB</h5>
                            <p class="mb-0 text-muted">Installation et maintenance de solutions résidentielles et professionnelles</p>
                        </div>
                    </div>
                    <div class="d-flex align-items-center mb-3">
                        <div class="me-3">
                            <i class="fas fa-check-circle text-primary fa-2x"></i>
                        </div>
                        <div>
                            <h5 class="mb-0">Solutions de Data Center</h5>
                            <p class="mb-0 text-muted">Conception et déploiement d'infrastructures haute performance</p>
                        </div>
                    </div>
                    <div class="d-flex align-items-center">
                        <div class="me-3">
                            <i class="fas fa-check-circle text-primary fa-2x"></i>
                        </div>
                        <div>
                            <h5 class="mb-0">Réseaux Backbone</h5>
                            <p class="mb-0 text-muted">Architecture et déploiement de solutions backbone nationales</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="progress-container mt-4">
                    <p class="fw-bold mb-2">Étude et conception</p>
                    <div class="progress mb-4" style="height: 10px;">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 95%;" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100">95%</div>
                    </div>
                    
                    <p class="fw-bold mb-2">Installation et déploiement</p>
                    <div class="progress mb-4" style="height: 10px;">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 90%;" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">90%</div>
                    </div>
                    
                    <p class="fw-bold mb-2">Consulting et optimisation</p>
                    <div class="progress mb-4" style="height: 10px;">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 85%;" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">85%</div>
                    </div>
                    
                    <p class="fw-bold mb-2">Support technique</p>
                    <div class="progress mb-4" style="height: 10px;">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 88%;" aria-valuenow="88" aria-valuemin="0" aria-valuemax="100">88%</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Notre Équipe Section -->
<section class="bg-light py-5">
    <div class="container">
        <div class="row mb-5">
            <div class="col-12 text-center">
                <h2 class="mb-3">NOTRE ÉQUIPE DE DIRECTION</h2>
                <p class="lead">Des experts passionnés au service de votre réussite</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="card border-0 shadow text-center h-100">
                    <div class="position-relative">
                        <div class="bg-primary" style="height: 100px;"></div>
                        <div class="position-absolute" style="top: 50px; left: 50%; transform: translateX(-50%);">
                            <div class="rounded-circle bg-white p-2" style="width: 120px; height: 120px; overflow: hidden;">
                                <div class="bg-secondary rounded-circle w-100 h-100 d-flex align-items-center justify-content-center text-white">
                                    <i class="fas fa-user fa-3x"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body pt-5 mt-4">
                        <h4 class="card-title">M. Abdellatif Baaziz</h4>
                        <p class="text-muted">Directeur Général</p>
                        <p class="card-text">Visionnaire et stratège, il dirige l'entreprise avec une passion pour l'innovation et l'excellence opérationnelle.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card border-0 shadow text-center h-100">
                    <div class="position-relative">
                        <div class="bg-primary" style="height: 100px;"></div>
                        <div class="position-absolute" style="top: 50px; left: 50%; transform: translateX(-50%);">
                            <div class="rounded-circle bg-white p-2" style="width: 120px; height: 120px; overflow: hidden;">
                                <div class="bg-secondary rounded-circle w-100 h-100 d-flex align-items-center justify-content-center text-white">
                                    <i class="fas fa-user fa-3x"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body pt-5 mt-4">
                        <h4 class="card-title">Mme. Sara Tazi</h4>
                        <p class="text-muted">Directrice Technique</p>
                        <p class="card-text">Avec plus de 15 ans d'expérience, elle supervise tous les aspects techniques de nos projets d'installation.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card border-0 shadow text-center h-100">
                    <div class="position-relative">
                        <div class="bg-primary" style="height: 100px;"></div>
                        <div class="position-absolute" style="top: 50px; left: 50%; transform: translateX(-50%);">
                            <div class="rounded-circle bg-white p-2" style="width: 120px; height: 120px; overflow: hidden;">
                                <div class="bg-secondary rounded-circle w-100 h-100 d-flex align-items-center justify-content-center text-white">
                                    <i class="fas fa-user fa-3x"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body pt-5 mt-4">
                        <h4 class="card-title">M. Karim Benali</h4>
                        <p class="text-muted">Directeur Commercial</p>
                        <p class="card-text">Expert en développement commercial, il élabore des stratégies adaptées pour répondre aux besoins de nos clients.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Témoignages Clients Section -->
<section class="py-5">
    <div class="container">
        <div class="row mb-5">
            <div class="col-12 text-center">
                <h2 class="mb-3">CE QUE DISENT NOS CLIENTS</h2>
                <p class="lead">Des partenariats basés sur la confiance et l'excellence</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="card border-0 shadow h-100">
                    <div class="card-body">
                        <div class="mb-3 text-warning">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <p class="card-text font-italic">"L'équipe de BAAZIZ TECHNOLOGIES a dépassé toutes nos attentes. Leur expertise technique et leur professionnalisme ont fait toute la différence dans notre projet de déploiement."</p>
                        <div class="d-flex align-items-center mt-4">
                            <div class="rounded-circle bg-primary text-white d-flex align-items-center justify-content-center" style="width: 50px; height: 50px;">
                                <span class="fw-bold">MR</span>
                            </div>
                            <div class="ms-3">
                                <h5 class="mb-0">Mohammed Rami</h5>
                                <p class="text-muted mb-0">Directeur IT, Groupe Telecom</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card border-0 shadow h-100">
                    <div class="card-body">
                        <div class="mb-3 text-warning">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <p class="card-text font-italic">"Un partenaire fiable et innovant qui a transformé notre infrastructure réseau. Je recommande vivement leurs services pour tout projet de fibre optique."</p>
                        <div class="d-flex align-items-center mt-4">
                            <div class="rounded-circle bg-primary text-white d-flex align-items-center justify-content-center" style="width: 50px; height: 50px;">
                                <span class="fw-bold">LB</span>
                            </div>
                            <div class="ms-3">
                                <h5 class="mb-0">Leila Bennani</h5>
                                <p class="text-muted mb-0">CEO, DataConnect Maroc</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card border-0 shadow h-100">
                    <div class="card-body">
                        <div class="mb-3 text-warning">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                        <p class="card-text font-italic">"Des experts qui comprennent réellement les enjeux techniques et commerciaux. Leur approche consultative nous a permis d'optimiser considérablement notre réseau."</p>
                        <div class="d-flex align-items-center mt-4">
                            <div class="rounded-circle bg-primary text-white d-flex align-items-center justify-content-center" style="width: 50px; height: 50px;">
                                <span class="fw-bold">OE</span>
                            </div>
                            <div class="ms-3">
                                <h5 class="mb-0">Omar El Fassi</h5>
                                <p class="text-muted mb-0">Directeur Technique, FiberNet</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Notre Vision Section -->
<section class="bg-primary text-white py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2 text-center">
                <h2 class="mb-4">NOTRE VISION</h2>
                <p class="lead" style="font-size: 21px;">
                    Nous aspirons à devenir le leader incontesté dans le domaine des solutions de connectivité avancées au Maroc et en Afrique du Nord. Notre vision est de contribuer à la transformation numérique de la région en fournissant des infrastructures de télécommunications de classe mondiale, accessibles et fiables pour tous.
                </p>
                <a href="{{ url('contact') }}" class="btn btn-light btn-lg mt-4">Contactez-nous pour en savoir plus</a>
            </div>
        </div>
    </div>
</section>

<!-- Nos Certifications Section -->
<section class="py-5">
    <div class="container">
        <div class="row mb-4">
            <div class="col-12 text-center">
                <h2 class="mb-3">NOS CERTIFICATIONS</h2>
                <p class="lead">Nous maintenons les plus hauts standards de qualité et d'expertise</p>
            </div>
        </div>
        <div class="row justify-content-center text-center">
            <div class="col-md-3 col-6 mb-4">
                <div class="p-3 border rounded shadow-sm h-100">
                    <i class="fas fa-certificate fa-3x text-primary mb-3"></i>
                    <h5>ISO 9001:2015</h5>
                    <p class="small text-muted mb-0">Management de la qualité</p>
                </div>
            </div>
            <div class="col-md-3 col-6 mb-4">
                <div class="p-3 border rounded shadow-sm h-100">
                    <i class="fas fa-shield-alt fa-3x text-primary mb-3"></i>
                    <h5>ISO 27001</h5>
                    <p class="small text-muted mb-0">Sécurité de l'information</p>
                </div>
            </div>
            <div class="col-md-3 col-6 mb-4">
                <div class="p-3 border rounded shadow-sm h-100">
                    <i class="fas fa-network-wired fa-3x text-primary mb-3"></i>
                    <h5>FTTH Council</h5>
                    <p class="small text-muted mb-0">Membre certifié</p>
                </div>
            </div>
            <div class="col-md-3 col-6 mb-4">
                <div class="p-3 border rounded shadow-sm h-100">
                    <i class="fas fa-award fa-3x text-primary mb-3"></i>
                    <h5>BICSI</h5>
                    <p class="small text-muted mb-0">Techniques d'infrastructure</p>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection