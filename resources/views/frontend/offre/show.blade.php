<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <title>JobNews</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Inter:wght@700;800&display=swap" rel="stylesheet">
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('asset2s/lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('asset2s/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('asset2s/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('asset2s/css/style.css') }}" rel="stylesheet">
</head>

<body>
    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Navbar Start -->
        <nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
            <a href="index.html" class="navbar-brand d-flex align-items-center text-center py-0 px-4 px-lg-5">
                <h1 class="m-0 text-primary">JobNews</h1>
            </a>
            <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto p-4 p-lg-0">
                    <a href="index.html" class="nav-item nav-link active">Acceuil</a>
                    <a href="about.html" class="nav-item nav-link">A propos</a>
                    <div class="nav-item dropdown">
                        <a href="job-list.html" class="nav-item nav-link">Offres d'emploi</a>
                    </div>
                    <a href="contact.html" class="nav-item nav-link">Contact</a>
                </div>
            </div>
        </nav>
        <!-- Navbar End -->


        <!-- Header End -->
        <div class="container-xxl py-5 bg-dark page-header mb-5">
            <div class="container my-5 pt-5 pb-4">
                <h1 class="display-3 text-white mb-3 animated slideInDown">Job Detail</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb text-uppercase">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item text-white active" aria-current="page">Job Detail</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!-- Header End -->


        <!-- Job Detail Start -->
        <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="container">
                <div class="row gy-5 gx-4">
                    @foreach ($offres as $details )
                        <div class="col-lg-8">
                            <div class="d-flex align-items-center mb-5">
                                <div class="text-start ps-4">
                                    <h3 class="mb-3">{{ $details->titre }}</h3>
                                    <h6 class="text-primary mb-3">{{ $details->entreprise }}</h6>
                                    <span class="text-truncate me-3"><i class="fa fa-map-marker-alt text-primary me-2"></i>{{ $details->lieu }}</span>
                                </div>
                            </div>
    
                            <div class="mb-5">
                                <h4 class="mb-3">Description</h4>
                                <p>{!! $details->description !!}</p>
    
                                <h4 class="mb-3">Mission</h4>
                                <div>{!! $details->mission !!}</div>
    
                                <h4 class="mb-3">Profil recherché</h4>
                                <p>{!! $details->profil !!}</p>
    
                                <h4 class="mb-3">Dossiers à fournir</h4>
                                <p>{!! $details->dossier !!}</p>
    
                                <h6 class="mb-3">Lien</h6>
                                <p>{{ $details->lien }}</p>
                                
                                <h6 class="mb-3">Date limite</h6>
                                <p>{{ $details->date_lim }}</p>
                            </div>
    
                        </div>
                    @endforeach
                    
        
                    <div class="col-lg-4">
                        <div class="rounded p-6 mb-4 wow slideInUp" data-wow-delay="0.1s">
                            <img class="img-fluid w-100" src="{{ asset('asset2s/img/about-1.jpg') }}">
                        </div>
                        <div class="rounded p-6 wow slideInUp" data-wow-delay="0.1s">
                            <img class="img-fluid w-100" src="{{ asset('asset2s/img/about-2.jpg') }}">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Job Detail End -->


        <!-- Footer Start -->
        <div class="container-fluid bg-dark text-white-50 footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
            <div class="container py-5">
                <div class="row g-5">
                    <div class="col-lg-3 col-md-6">
                        <h5 class="text-white mb-4">JobNews</h5>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                            Nihil quae accusamus, amet aspernatur quia placeat ipsa 
                            mollitia exercitationem omnis, 
                        </p>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h5 class="text-white mb-4">Liens rapides</h5>
                        <a class="btn btn-link text-white-50" href="index.html">Accueil</a>
                        <a class="btn btn-link text-white-50" href="about.html">A propos</a>
                        <a class="btn btn-link text-white-50" href="job-list.html">Offres d'emploi</a>
                        <a class="btn btn-link text-white-50" href="contact.html">Contact</a>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h5 class="text-white mb-4">Contact</h5>
                        <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>123 Street, New York, USA</p>
                        <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+012 345 67890</p>
                        <p class="mb-2"><i class="fa fa-envelope me-3"></i>info@example.com</p>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h5 class="text-white mb-4">Newsletter</h5>
                        <p>Dolor amet sit justo amet elitr clita ipsum elitr est.</p>
                        <div class="position-relative mx-auto" style="max-width: 400px;">
                            <input class="form-control bg-transparent w-100 py-3 ps-4 pe-5" type="text" placeholder="Your email">
                            <button type="button" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">SignUp</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="copyright">
                    <div class="row">
                        <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                            &copy; <a class="border-bottom" href="index.html">JobNews</a>, Tous droits réservés. 
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('asset2s/lib/wow/wow.min.js') }}"></script>
    <script src="{{ asset('asset2s/lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('asset2s/lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('asset2s/lib/owlcarousel/owl.carousel.min.js') }}"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('asset2s/js/main.js') }}"></script>
</body>

</html>