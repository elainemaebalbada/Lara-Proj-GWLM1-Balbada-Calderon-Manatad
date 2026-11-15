<!DOCTYPE html>
<html lang="en" data-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'Snappyboo | Camera Rental')</title>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Plus+Jakarta+Sans:wght@500;600;700;800&display=swap" rel="stylesheet">

    <!-- Shared Stylesheet -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <!-- Page-specific Styles -->
    @stack('styles')
</head>

<body>

    <!-- Navigation -->
    <header class="site-header">
        <div class="nav-container">

            <a href="{{ url('/') }}" class="brand">
                <img src="{{ asset('images/snappyboo-icon-light.png') }}"
                    class="brand-icon light-icon"
                    alt="Snappyboo logo">

                <img src="{{ asset('images/snappyboo-icon-dark.png') }}"
                    class="brand-icon dark-icon"
                    alt="Snappyboo logo">

                <div class="brand-text">
                    <span class="brand-name">SnappyBoo.</span>
                </div>
            </a>

            <nav class="main-nav">
                <a href="{{ url('/') }}"
                   class="{{ request()->is('/') ? 'active' : '' }}">
                    Home
                </a>

                <a href="{{ url('/about') }}"
                   class="{{ request()->is('about') ? 'active' : '' }}">
                    About
                </a>

                <a href="{{ url('/contact') }}"
                   class="{{ request()->is('contact') ? 'active' : '' }}">
                    Contact
                </a>
            </nav>

            <button type="button" class="theme-toggle" id="theme-toggle">
                <span id="theme-label">Dark Mode</span>
            </button>

        </div>
    </header>

    <!-- Main Page Content -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="site-footer">
        <div class="footer-container">

            <div class="footer-brand">
                <a href="{{ url('/') }}" class="brand-name">SnappyBoo.</a>
                <p>Little cameras, lasting memories.</p>
                <span>Butuan City, Philippines</span>
            </div>

            <div class="footer-group">
                <h3>Quick Links</h3>
                <a href="{{ url('/') }}">Home</a>
                <a href="{{ url('/about') }}">About</a>
                <a href="{{ url('/contact') }}">Contact</a>
            </div>

            <div class="footer-group">
                <h3>Connect With Us</h3>
                <a href="https://www.instagram.com/snappyboo.bxu/"
                   target="_blank"
                   rel="noopener noreferrer">
                    Instagram
                </a>
            </div>

        </div>

        <div class="footer-bottom">
            <p>
                &copy; {{ date('Y') }} SnappyBoo. All rights reserved.
            </p>

            <p class="footer-members">
                Elaine Mae M. Balbada · Kiesha Jae T. Calderon · Peter Paul S. Manatad Jr.
            </p>
        </div>
    </footer>

    <!-- Shared JavaScript -->
    <script src="{{ asset('js/theme.js') }}" defer></script>

    <!-- Page-specific JavaScript -->
    @stack('scripts')

</body>
</html>
