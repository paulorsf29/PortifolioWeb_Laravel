<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - {{ config('app.name') }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
    <style>
        .navbar-nav .nav-link.active {
            color: #fff !important;
            font-weight: bold;
        }
        .card {
            transition: transform 0.3s ease;
        }
        .card:hover {
            transform: translateY(-5px);
        }
    </style>
    @stack('styles')
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="{{ route('home') }}">
                <i class="bi bi-code-slash me-2"></i>{{ config('app.name') }}
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}" 
                           href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('projects.*') ? 'active' : '' }}" 
                           href="{{ route('projects.index') }}">Projetos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('about') ? 'active' : '' }}" 
                           href="{{ route('about') }}">Sobre</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('contact') ? 'active' : '' }}" 
                           href="{{ route('contact') }}">Contato</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <main class="py-4">
        <div class="container">
            @yield('content')
        </div>
    </main>

    <footer class="bg-dark text-white py-4 mt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center text-md-start">
                    <p>&copy; {{ date('Y') }} {{ config('app.name') }}. Todos os direitos reservados.</p>
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <a href="{{ route('home') }}" class="text-white text-decoration-none me-3">
                        <i class="bi bi-house"></i> Home
                    </a>
                    <a href="{{ route('projects.index') }}" class="text-white text-decoration-none me-3">
                        <i class="bi bi-briefcase"></i> Projetos
                    </a>
                    <a href="{{ route('contact') }}" class="text-white text-decoration-none">
                        <i class="bi bi-envelope"></i> Contato
                    </a>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Fechar alertas automaticamente após 5 segundos
        document.addEventListener('DOMContentLoaded', function() {
            var alerts = document.querySelectorAll('.alert');
            alerts.forEach(function(alert) {
                setTimeout(function() {
                    var bsAlert = new bootstrap.Alert(alert);
                    bsAlert.close();
                }, 5000);
            });
        });
    </script>
    @stack('scripts')
</body>
</html>