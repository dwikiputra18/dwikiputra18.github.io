<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - Portfolio</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <style>
        /* Navbar Fixed */
        .navbar {
            position: fixed;
            width: 100%;
            top: 0;
            left: 0;
            z-index: 1000;
            transition: background-color 0.3s ease, box-shadow 0.3s ease;
            padding: 10px 0;
        }

        /* Tambahkan tinggi navbar */
        body {
            padding-top: 70px; /* Sesuaikan dengan tinggi navbar */
        }

        /* Saat di-scroll, navbar menjadi transparan */
        .navbar.scrolled {
            background-color: rgba(255, 255, 255, 0.8); /* Transparan */
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        /* Warna navbar ketika tidak di-scroll */
        .navbar:not(.scrolled) {
            background-color: rgba(255, 255, 255, 1);
        }

        /* Ubah warna ikon toggler */
        .navbar-toggler {
            border: none;
            outline: none;
        }
        
        .navbar-toggler-icon {
            filter: invert(1); /* Warna ikon toggler putih */
        }
    </style>
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                <img src="{{ asset('images/logo.png') }}" alt="Logo" height="40">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="{{ url('/') }}">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('/about') }}">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('/portfolio') }}">Portfolio</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('/services') }}">Services</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('/contact') }}">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>

        @yield('content')
    <div class="footer bg-dark text-white text-center p-4">
    &copy; {{ date('Y') }} All rights reserved.
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            let navbar = document.querySelector(".navbar");

            window.addEventListener("scroll", function () {
                if (window.scrollY > 50) {
                    navbar.classList.add("scrolled");
                } else {
                    navbar.classList.remove("scrolled");
                }
            });
        });
    </script>
</body>
</html>
