@extends('templete')
@section('main_content')
<!-- Bootstrap CSS and JS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
<script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- Font Awesome for icons -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
<!-- Custom CSS -->
<style>
    .services-section {
        padding: 150px 0;
        background-color: #f8f9fa;
    }
    
    .section-title {
        position: relative;
        margin-bottom: 60px;
        font-weight: 700;
        color: #333;
    }
    
    .section-title::after {
        content: '';
        position: absolute;
        bottom: -15px;
        left: 50%;
        transform: translateX(-50%);
        width: 80px;
        height: 3px;
        background-color: #0d6efd;
    }
    
    .service-card {
        transition: all 0.3s ease;
        border: none;
        border-radius: 12px;
        overflow: hidden;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
    }
    
    .service-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 15px 30px rgba(0, 0, 0, 0.15);
    }
    
    .service-img {
        height: 220px;
        object-fit: cover;
        transition: all 0.5s ease;
    }
    
    .service-card:hover .service-img {
        transform: scale(1.05);
    }
    
    .service-title {
        font-size: 1.25rem;
        font-weight: 600;
        margin-bottom: 15px;
        color: #333;
        height: 48px;
        overflow: hidden;
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
    }
    
    .btn-view-details {
        padding: 8px 20px;
        border-radius: 50px;
        font-weight: 500;
        text-transform: uppercase;
        font-size: 0.85rem;
        letter-spacing: 0.5px;
        transition: all 0.3s ease;
    }
    
    .btn-view-details i {
        margin-right: 5px;
        transition: transform 0.3s ease;
    }
    
    .btn-view-details:hover i {
        transform: translateX(3px);
    }
    
    /* Animation for cards */
    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(20px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
    
    .animated-card {
        animation: fadeInUp 0.6s ease-out forwards;
    }
    
    /* Custom animation delay for each card */
    .delay-1 { animation-delay: 0.1s; }
    .delay-2 { animation-delay: 0.2s; }
    .delay-3 { animation-delay: 0.3s; }
    .delay-4 { animation-delay: 0.4s; }
    .delay-5 { animation-delay: 0.5s; }
    .delay-6 { animation-delay: 0.6s; }
    .delay-7 { animation-delay: 0.7s; }
    .delay-8 { animation-delay: 0.8s; }
    .delay-9 { animation-delay: 0.9s; }
    .delay-10 { animation-delay: 1s; }
    .delay-11 { animation-delay: 1.1s; }
    .delay-12 { animation-delay: 1.2s; }
</style>

<div class="services-section">
    <div class="container">
        <h2 class="section-title text-center">Nos Services</h2>
        
        <div class="row">
            @forelse($posts as $index => $item)
                <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                    <div class="card service-card animated-card delay-{{ $index + 1 }}">
                        <div class="overflow-hidden">
                            <img src="{{ asset('images') }}/{{ $item->image }}" 
                                 class="card-img-top service-img" 
                                 alt="{{ $item->title }}">
                        </div>
                        <div class="card-body d-flex flex-column">
                            <h4 class="service-title">{{ $item->title }}</h4>
                            <div class="mt-auto text-center">
                                <a href="{{ url('/post/'.$item->id) }}" class="btn btn-primary btn-view-details">
                                    <i class="fas fa-eye"></i> Voir détails
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-12 text-center py-5">
                    <div class="alert alert-info">
                        <i class="fas fa-info-circle me-2"></i> Aucun service disponible pour le moment.
                    </div>
                </div>
            @endforelse
        </div>
        
        <!-- Pagination if needed -->
        @if(isset($posts) && method_exists($posts, 'links'))
            <div class="d-flex justify-content-center mt-4">
                {{ $posts->links('pagination::bootstrap-5') }}
            </div>
        @endif
    </div>
</div>
@endsection