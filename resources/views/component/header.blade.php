{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"> --}}
    {{-- <title>Cybrexus</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="Cybrexus">
    <meta name="description" content="We build a better future with the tech">

    <link rel="icon" href="{{ asset('img/favicon.ico') }}" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800&family=Rubik:wght@400;500;600;700&display=swap" rel="stylesheet">
--}}
    {{-- <!-- Bootstrap & Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">

    <!-- Custom Styles -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>
<body> --}}
    <!-- Navbar Start -->
    <nav class="  navbar navbar-expand-lg navbar-dark bg-dark py-2 sticky-top">
        <div class="container-fluid px-4">
            <a class="navbar-brand fw-bold fs-2" href="/">Cybrexus</a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="mainNavbar">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a href="/" class="nav-link {{ request()->is('/') ? 'active' : '' }}">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle {{ request()->is('services*') ? 'active' : '' }}" href="#" id="servicesDropdown" role="button" data-bs-toggle="dropdown">
                            Services
                        </a>
                        <ul class="dropdown-menu dropdown-menu-dark">
                            <li><a class="dropdown-item" href="{{ route('appdevelopment') }}">App Development</a></li>
                            <li><a class="dropdown-item" href="{{ route('bussiness_solutiom') }}">Business Solution</a></li>
                            <li><a class="dropdown-item" href="{{ route('bussiness_process') }}">Business Process</a></li>
                            <li><a class="dropdown-item" href="{{ route('cyber_security') }}">Cyber Security</a></li>
                            <li><a class="dropdown-item" href="{{ route('web_development') }}">Web Development</a></li>
                            <li><a class="dropdown-item" href="{{ route('iande_design') }}">Interior & Exterior Design</a></li>
                        </ul>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle {{ request()->is('pages*') ? 'active' : '' }}" href="#" id="pagesDropdown" role="button" data-bs-toggle="dropdown">
                            Pages
                        </a>
                        <ul class="dropdown-menu dropdown-menu-dark">
                            <li><a class="dropdown-item" href="{{ route('faq') }}">FAQ</a></li>
                            <li><a class="dropdown-item" href="{{ route('career') }}">Career</a></li>
                            <li><a class="dropdown-item" href="{{ route('blog') }}">Blog</a></li>
                            <li><a class="dropdown-item" href="{{ route('about') }}">About</a></li>
                        </ul>
                    </li>

                    <li class="nav-item">
                        <a href="{{ route('contact') }}" class="nav-link {{ request()->is('contact') ? 'active' : '' }}">Contact</a>
                    </li>

                    <li class="nav-item">
                        <a href="{{ route('dashboard') }}" class="nav-link">
                            <i class="fas fa-user"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->

    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
{{-- </body>
</html> --}}
