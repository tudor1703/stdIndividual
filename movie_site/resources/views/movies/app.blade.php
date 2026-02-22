<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie Site</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<style>
    html, body {
      height: 100%;
    }

    body {
      display: flex;
      flex-direction: column;
    }

    table tr:hover {
    background-color: #f8f9fa;
    transition: 0.2s;
    }
    
    
</style>
</head>
<body class="d-flex flex-column h-100">
<nav class="navbar navbar-dark bg-dark shadow-sm mb-4 sticky-top">
    <div class="container d-flex justify-content-between align-items-center">
        <!-- Logo / Brand -->
        <a class="navbar-brand fw-bold fs-4" href="{{ route('movies.index') }}">
            🎬 Movie Hub
        </a>

        <!-- Linkurile din navbar (mereu orizontale) -->
        <ul class="navbar-nav d-flex flex-row">
            <li class="nav-item me-3">
                <a class="nav-link text-white" href="{{ route('movies.index') }}">Home</a>
            </li>
            <li class="nav-item me-3">
                <a class="nav-link text-white" href="{{ route('movies.create') }}">Add Movie</a>
            </li>
            <li class="nav-item me-3">
                <a class="nav-link text-white" href="{{ route('about') }}">About</a>
            </li>
            <li class="nav-item me-3">
                <a class="nav-link text-white" href="{{ route('contact') }}">Contact</a>
            </li>
        </ul>
    </div>
</nav>

<main class="flex-grow-1">
    <div class="container">
        @yield('content')
    </div>
</main>

<div>
<footer class="bg-dark text-white mt-auto py-4">
    <div class="container">
        <div class="row">

            <!-- Despre site -->
            <div class="col-md-4 mb-3 mb-md-0">
                <h5 class="fw-bold">Movie Hub</h5>
                <p class="small">
                    Discover, add, and manage your favorite movies all in one place.
                </p>
            </div>

            <!-- Linkuri rapide -->
            <div class="col-md-4 mb-3 mb-md-0">
                <h5 class="fw-bold">Quick Links</h5>
                <ul class="list-unstyled">
                    <a class="nav-link text-white" href="{{ route('movies.index') }}">Home</a>
                    <a class="nav-link text-white" href="{{ route('movies.create') }}">Add Movie</a>
                    <a class="nav-link text-white" href="{{ route('about') }}">About</a>
                    <a class="nav-link text-white" href="{{ route('contact') }}">Contact</a>
                </ul>
            </div>

            <!-- Social media -->
            <div class="col-md-4">
                <h5 class="fw-bold">Follow Us</h5>
                <a href="https://facebook.com/YourPage" target="_blank" class="text-white me-3 fs-5">
                    <i class="bi bi-facebook"></i>
                </a>
                <a href="https://twitter.com/YourProfile" target="_blank" class="text-white me-3 fs-5">
                    <i class="bi bi-twitter"></i>
                </a>
                <a href="https://instagram.com/YourProfile" target="_blank" class="text-white me-3 fs-5">
                    <i class="bi bi-instagram"></i>
                </a>
                <a href="https://youtube.com/YourChannel" target="_blank" class="text-white fs-5">
                    <i class="bi bi-youtube"></i>
                </a>
            </div>

        </div>
        <hr class="bg-secondary mt-4">
        <p class="small mb-0 text-center">&copy; {{ date('Y') }} Movie Hub. All rights reserved.</p>
    </div>
</footer>
</div>
</body>
</html>