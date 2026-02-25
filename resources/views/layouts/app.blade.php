<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="@yield('meta_description', 'My Portfolio Website')">
    <title>@yield('title', 'Tanveer Hassan | Portfolio')</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">
    <!-- AOS Animation Library -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <style>
        :root {
            --primary-color: #0d1117;
            --secondary-color: #10b981;
            --accent-color: #22c55e;
            --dark-bg: #161b22;
            --card-bg: #21262d;
            --text-color: #e6edf3;
            --text-muted: #8b949e;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: var(--dark-bg);
            color: var(--text-color);
            overflow-x: hidden;
        }

        /* Navbar Animations */
        .navbar {
            background-color: var(--primary-color) !important;
            border-bottom: 1px solid #30363d;
            transition: all 0.3s ease;
        }

        .navbar.scrolled {
            padding: 0.5rem 1rem;
            box-shadow: 0 5px 20px rgba(0,0,0,0.5);
        }

        .navbar-brand {
            font-weight: bold;
            font-size: 1.5rem;
            color: var(--secondary-color) !important;
            transition: transform 0.3s ease;
        }

        .navbar-brand:hover {
            transform: scale(1.05);
        }

        .nav-link {
            color: var(--text-color) !important;
            position: relative;
            transition: all 0.3s ease;
        }

        .nav-link::after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            bottom: 0;
            left: 50%;
            background-color: var(--secondary-color);
            transition: all 0.3s ease;
            transform: translateX(-50%);
        }

        .nav-link:hover::after, .nav-link.active::after {
            width: 100%;
        }

        .nav-link:hover, .nav-link.active {
            color: var(--secondary-color) !important;
        }

        /* Hero Section */
        .hero-section {
            background: linear-gradient(135deg, var(--primary-color) 0%, #064e3b 100%);
            color: white;
            padding: 120px 0;
            position: relative;
            overflow: hidden;
        }

        .hero-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%2310b981' fill-opacity='0.05'%3E%3Cpath d='M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
            animation: float 20s ease-in-out infinite;
        }

        @keyframes float {
            0%, 100% { transform: translateY(0) rotate(0deg); }
            50% { transform: translateY(-20px) rotate(1deg); }
        }

        /* Profile Image Animation */
        .profile-img {
            animation: pulse-glow 2s ease-in-out infinite;
        }

        @keyframes pulse-glow {
            0%, 100% { box-shadow: 0 0 20px rgba(16, 185, 129, 0.3); }
            50% { box-shadow: 0 0 40px rgba(16, 185, 129, 0.6); }
        }

        /* Typing Effect */
        .typing-text {
            border-right: 3px solid var(--secondary-color);
            animation: blink 0.7s step-end infinite;
        }

        @keyframes blink {
            from, to { border-color: transparent; }
            50% { border-color: var(--secondary-color); }
        }

        .section {
            padding: 80px 0;
        }

        .section-title {
            margin-bottom: 50px;
            position: relative;
            color: var(--text-color);
        }

        .section-title::after {
            content: '';
            width: 60px;
            height: 3px;
            background: linear-gradient(90deg, var(--secondary-color), var(--accent-color));
            position: absolute;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            transition: width 0.3s ease;
        }

        .section-title:hover::after {
            width: 100px;
        }

        /* Card Animations */
        .card {
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            border: 1px solid #30363d;
            background-color: var(--card-bg);
            color: var(--text-color);
            box-shadow: 0 2px 15px rgba(0,0,0,0.3);
            position: relative;
            overflow: hidden;
        }

        .card::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(16, 185, 129, 0.1), transparent);
            transition: left 0.5s ease;
        }

        .card:hover::before {
            left: 100%;
        }

        .card:hover {
            transform: translateY(-10px) scale(1.02);
            box-shadow: 0 20px 40px rgba(16, 185, 129, 0.2);
            border-color: var(--secondary-color);
        }

        /* Icon Animations */
        .card .bi {
            transition: all 0.3s ease;
        }

        .card:hover .bi {
            transform: scale(1.2);
            color: var(--accent-color) !important;
        }

        /* Star Rating Animation */
        .text-warning .bi-star-fill {
            animation: star-pop 0.3s ease forwards;
            opacity: 0;
        }

        .text-warning .bi-star-fill:nth-child(1) { animation-delay: 0.1s; }
        .text-warning .bi-star-fill:nth-child(2) { animation-delay: 0.2s; }
        .text-warning .bi-star-fill:nth-child(3) { animation-delay: 0.3s; }
        .text-warning .bi-star-fill:nth-child(4) { animation-delay: 0.4s; }
        .text-warning .bi-star-fill:nth-child(5) { animation-delay: 0.5s; }

        @keyframes star-pop {
            0% { opacity: 0; transform: scale(0); }
            50% { transform: scale(1.3); }
            100% { opacity: 1; transform: scale(1); }
        }

        /* Badge Animations */
        .badge {
            transition: all 0.3s ease;
        }

        .badge:hover {
            transform: scale(1.1);
        }

        .skill-badge {
            transition: all 0.3s ease;
        }

        .skill-badge:hover {
            background-color: var(--secondary-color);
            color: #000;
            transform: translateY(-3px);
            box-shadow: 0 5px 15px rgba(16, 185, 129, 0.3);
        }

        .card-text {
            color: var(--text-muted);
        }

        .btn-primary {
            background-color: var(--secondary-color);
            border-color: var(--secondary-color);
            color: #000;
            font-weight: 500;
        }

        .btn-primary:hover {
            background-color: var(--accent-color);
            border-color: var(--accent-color);
            color: #000;
        }

        .btn-outline-primary {
            color: var(--secondary-color);
            border-color: var(--secondary-color);
        }

        .btn-outline-primary:hover {
            background-color: var(--secondary-color);
            border-color: var(--secondary-color);
            color: #000;
        }

        .btn-light {
            background-color: var(--text-color);
            color: var(--primary-color);
        }

        .btn-outline-light:hover {
            background-color: var(--text-color);
            color: var(--primary-color);
        }

        .social-links a {
            font-size: 1.5rem;
            margin: 0 10px;
            color: var(--text-muted);
            transition: all 0.3s ease;
            display: inline-block;
        }

        .social-links a:hover {
            color: var(--secondary-color);
            transform: translateY(-5px) scale(1.2);
        }

        /* Button Animations */
        .btn {
            position: relative;
            overflow: hidden;
            transition: all 0.3s ease;
        }

        .btn::after {
            content: '';
            position: absolute;
            top: 50%;
            left: 50%;
            width: 0;
            height: 0;
            background: rgba(255,255,255,0.2);
            border-radius: 50%;
            transform: translate(-50%, -50%);
            transition: width 0.6s ease, height 0.6s ease;
        }

        .btn:hover::after {
            width: 300px;
            height: 300px;
        }

        .btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(16, 185, 129, 0.3);
        }

        /* Floating Animation for Icons */
        .floating {
            animation: floating 3s ease-in-out infinite;
        }

        @keyframes floating {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-10px); }
        }

        /* Gradient Text */
        .gradient-text {
            background: linear-gradient(135deg, var(--secondary-color), var(--accent-color), #34d399);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        /* Glow Effect */
        .glow {
            text-shadow: 0 0 10px rgba(16, 185, 129, 0.5), 0 0 20px rgba(16, 185, 129, 0.3);
        }

        /* Progress Bar Animation */
        .progress-bar {
            animation: progress-fill 1.5s ease-out forwards;
            width: 0 !important;
        }

        @keyframes progress-fill {
            to { width: var(--progress-width); }
        }

        /* Counter Animation */
        .counter {
            animation: count-up 2s ease-out forwards;
        }

        footer {
            background-color: var(--primary-color);
            color: var(--text-color);
            padding: 30px 0;
            border-top: 1px solid #30363d;
        }

        .skill-badge {
            display: inline-block;
            padding: 8px 16px;
            margin: 5px;
            background-color: rgba(16, 185, 129, 0.15);
            color: var(--secondary-color);
            border: 1px solid var(--secondary-color);
            border-radius: 20px;
            font-size: 0.9rem;
        }

        .bg-light {
            background-color: var(--primary-color) !important;
        }

        .bg-primary {
            background-color: var(--secondary-color) !important;
        }

        .text-primary {
            color: var(--secondary-color) !important;
        }

        .text-muted {
            color: var(--text-muted) !important;
        }

        .progress {
            background-color: #30363d;
        }

        .progress-bar {
            background-color: var(--secondary-color) !important;
        }

        .form-control {
            background-color: var(--card-bg);
            border-color: #30363d;
            color: var(--text-color);
        }

        .form-control:focus {
            background-color: var(--card-bg);
            border-color: var(--secondary-color);
            color: var(--text-color);
            box-shadow: 0 0 0 0.25rem rgba(16, 185, 129, 0.25);
        }

        .form-label {
            color: var(--text-color);
        }

        .badge.bg-secondary {
            background-color: #30363d !important;
            color: var(--text-muted);
        }

        .badge.bg-primary {
            background-color: var(--secondary-color) !important;
            color: #000;
        }

        .badge.bg-success {
            background-color: #22c55e !important;
            color: #000;
        }

        .badge.bg-warning {
            background-color: #eab308 !important;
        }

        .card-subtitle {
            color: var(--text-muted) !important;
        }

        h1, h2, h3, h4, h5, h6 {
            color: var(--text-color);
        }

        .btn-outline-dark {
            color: var(--text-muted);
            border-color: #30363d;
        }

        .btn-outline-dark:hover {
            background-color: #30363d;
            border-color: #30363d;
            color: var(--text-color);
        }

        .rounded-circle.bg-primary {
            background-color: rgba(16, 185, 129, 0.15) !important;
            color: var(--secondary-color) !important;
        }
    </style>

    @stack('styles')
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark sticky-top">
        <div class="container">
            <a class="navbar-brand" href="{{ route('home') }}">
                <i class="bi bi-code-slash"></i> Tanveer Hassan
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}" href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('about') ? 'active' : '' }}" href="{{ route('about') }}">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('projects') ? 'active' : '' }}" href="{{ route('projects') }}">Projects</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('contact') ? 'active' : '' }}" href="{{ route('contact') }}">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    @yield('content')

    <!-- Footer -->
    <footer>
        <div class="container text-center">
            <div class="social-links mb-3">
                <a href="https://github.com/TanveerHsn" target="_blank"><i class="bi bi-github"></i></a>
                <a href="https://www.linkedin.com/in/tanveerhsn/" target="_blank"><i class="bi bi-linkedin"></i></a>
                <a href="mailto:tanveerhasan.liaqat@gmail.com"><i class="bi bi-envelope-fill"></i></a>
            </div>
            <p class="mb-0">&copy; {{ date('Y') }} Tanveer Hassan. All rights reserved.</p>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- AOS Animation Library -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <script>
        // Initialize AOS
        AOS.init({
            duration: 800,
            easing: 'ease-out-cubic',
            once: true,
            offset: 50
        });

        // Navbar scroll effect
        window.addEventListener('scroll', function() {
            const navbar = document.querySelector('.navbar');
            if (window.scrollY > 50) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }
        });

        // Smooth scroll for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({ behavior: 'smooth', block: 'start' });
                }
            });
        });

        // Trigger star animations when visible
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.querySelectorAll('.bi-star-fill').forEach(star => {
                        star.style.animationPlayState = 'running';
                    });
                }
            });
        }, { threshold: 0.5 });

        document.querySelectorAll('.text-warning').forEach(el => observer.observe(el));
    </script>

    @stack('scripts')
</body>
</html>
