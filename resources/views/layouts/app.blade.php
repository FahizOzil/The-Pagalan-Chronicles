<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'The Pagalan Chronicles')</title>
    
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400;700&family=Lato:wght@300;400;700&display=swap" rel="stylesheet">
    
    <!-- CSS Libraries -->   
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/8.4.5/swiper-bundle.min.css">
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    
    @yield('styles')
</head>
<body>
    <header class="site-header">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
            <div class="container">
                <a class="navbar-brand d-flex align-items-center" href="{{ route('home') }}">
                    <svg class="book-icon me-2" width="40" height="40" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M4 19.5C4 18.837 4.26339 18.2011 4.73223 17.7322C5.20107 17.2634 5.83696 17 6.5 17H20" stroke="#e94560" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M6.5 2H20V22H6.5C5.83696 22 5.20107 21.7366 4.73223 21.2678C4.26339 20.7989 4 20.163 4 19.5V4.5C4 3.83696 4.26339 3.20107 4.73223 2.73223C5.20107 2.26339 5.83696 2 6.5 2Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                    <span class="logo-text fs-4">Pagalan Chronicles</span>
                </a>
                
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMain" aria-controls="navbarMain" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                
                <div class="collapse navbar-collapse" id="navbarMain">
                    <ul class="navbar-nav ms-auto align-items-center">
                        <li class="nav-item">
                            <a class="nav-link {{ Route::is('home') ? 'active' : '' }}" href="{{ route('home') }}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ Route::is('books*') ? 'active' : '' }}" href="{{ route('books') }}">Books</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ Route::is('world') ? 'active' : '' }}" href="{{ route('world') }}">World of Pagalan</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ Route::is('author') ? 'active' : '' }}" href="{{ route('author') }}">The Author</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ Route::is('contact') ? 'active' : '' }}" href="{{ route('contact') }}">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <main class="site-content">
        @yield('content')
    </main>

    <footer class="site-footer bg-dark text-white py-4">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 mb-3">
                    <div class="footer-brand">
                        <img src="{{ asset('images/pagalan-logo-light.png') }}" alt="The Pagalan Chronicles" class="footer-logo mb-3">
                        <p class="tagline">Follow the exciting stories and characters of Pagalan</p>
                    </div>
                </div>
                
                <div class="col-lg-4 mb-3">
                    <h4>Quick Links</h4>
                    <ul class="footer-links list-unstyled">
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li><a href="{{ route('books') }}">Books</a></li>
                        <li><a href="{{ route('world') }}">World of Pagalan</a></li>
                        <li><a href="{{ route('author') }}">The Author</a></li>
                        <li><a href="{{ route('contact') }}">Contact</a></li>
                    </ul>
                </div>
                
                <div class="col-lg-4">
                    <h4>Connect With Us</h4>
                    <div class="social-links d-flex gap-3">
                        <a href="https://www.facebook.com/andy.stonehold?locale=en_GB" target="_blank" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                        <a href="https://www.instagram.com/thepagalanchronicles" target="_blank" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                        <a href="https://www.tiktok.com/@stonehold55555?_t=8rORYh79Fo1" target="_blank" aria-label="TikTok"><i class="fab fa-tiktok"></i></a>
                        <a href="https://www.youtube.com/@andrewhoulston9925" target="_blank" aria-label="YouTube"><i class="fab fa-youtube"></i></a>
                        <a href="https://www.tumblr.com/blog/stonehold55555" target="_blank" aria-label="Tumblr"><i class="fab fa-tumblr"></i></a>
                        <a href="https://www.instagram.com/andrewhoulston232/profilecard/?igsh=MnIzc2F3ZzNkanpz" target="_blank" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
                        <a href="https://www.linkedin.com/in/andrew-houlston-5b296972?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app" target="_blank" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
            
            <div class="footer-bottom text-center mt-4">
                <p>&copy; {{ date('Y') }} The Pagalan Chronicles. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <!-- JavaScript Libraries -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.4/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.4/ScrollTrigger.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/vanilla-tilt/1.7.0/vanilla-tilt.min.js"></script>
    <!-- Custom JavaScript -->
    <script src="{{ asset('js/app.js') }}"></script>
    
    <script>
        // Initialize AOS Animation
        AOS.init();
    </script>
    
    @yield('scripts')
</body>
</html>