{{-- Enhanced resources/views/books/index.blade.php --}}
@extends('layouts.app')

@section('title', 'The Pagalan Chronicles - Books')

@section('styles')
    <style>
        /* Enchanted Banner Section */
        .page-banner {
            background: linear-gradient(to bottom, rgba(28, 28, 60, 0.8), rgba(78, 42, 132, 0.9)), url("{{ asset('images/pagalan-banner.jpg') }}");
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            overflow: hidden;
        }

        .page-banner::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url("{{ asset('images/image.jpg') }}") repeat;
            opacity: 0.3;
            animation: sparkleFloat 120s linear infinite;
        }

        @keyframes sparkleFloat {
            from {
                background-position: 0 0;
            }

            to {
                background-position: 1000px 1000px;
            }
        }

        .banner-content {
            position: relative;
            z-index: 2;
            text-align: center;
            max-width: 800px;
            padding: 2rem;
        }

        .page-title {
            font-size: 5.5rem;
            color: white;
            margin-bottom: 1rem;
            text-shadow: 0 0 10px rgba(255, 184, 28, 0.7);
            animation: glow 2s ease-in-out infinite alternate;
        }

        @keyframes glow {
            from {
                text-shadow: 0 0 10px rgba(255, 184, 28, 0.7);
            }

            to {
                text-shadow: 0 0 20px rgba(255, 184, 28, 0.9), 0 0 30px rgba(255, 184, 28, 0.5);
            }
        }

        .page-subtitle {
            font-size: 2rem;
            color: var(--light-color);
            margin-bottom: 2rem;
            letter-spacing: 3px;
        }

        .banner-cta .btn {
            padding: 1rem 2rem;
            font-size: 1.2rem;
            font-weight: 600;
            letter-spacing: 1px;
            text-transform: uppercase;
            border-radius: 50px;
            transition: all 0.3s ease;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
        }

        .banner-cta .btn-light {
            background: var(--light-color);
            color: var(--primary-color);
            border: none;
        }

        .banner-cta .btn-outline-light {
            hom background: transparent;
            color: var(--light-color);
            border: 2px solid var(--light-color);
        }

        .banner-cta .btn:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.3);
        }

        /* Floating 3D Books Section */
        .book-display-3d {
            perspective: 1000px;
            padding: 100px 0;
            background: linear-gradient(to bottom, #090806, #090816);
            position: relative;
            overflow: hidden;
        }

        .book-display-3d::before {
            content: '';
            position: absolute;
            width: 300px;
            height: 300px;
            background: radial-gradient(circle, var(--secondary-color) 0%, transparent 70%);
            top: -100px;
            left: -100px;
            opacity: 0.2;
        }

        .book-display-3d::after {
            content: '';
            position: absolute;
            width: 400px;
            height: 400px;
            background: radial-gradient(circle, var(--accent-color) 0%, transparent 70%);
            bottom: -200px;
            right: -200px;
            opacity: 0.15;
        }

        .book-card-3d {
            transform-style: preserve-3d;
            position: relative;
            height: 500px;
            width: 350px;
            margin: 0 auto;
            transition: transform 1s ease;
        }

        .book-card-3d:hover {
            transform: rotateY(35deg);
        }

        .book-cover {
            position: absolute;
            width: 100%;
            height: 100%;
            backface-visibility: hidden;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.3);
            transform: translateZ(0);
        }

        .book-spine {
            position: absolute;
            width: 50px;
            height: 100%;
            left: 0;
            transform: rotateY(90deg) translateZ(25px);
            background: var(--light-color);
            box-shadow: inset -5px 0 15px rgba(0, 0, 0, 0.2);
        }

        .book-spine-title {
            position: absolute;
            white-space: nowrap;
            transform: rotate(90deg) translateX(50%);
            transform-origin: left bottom;
            bottom: 120px;
            left: 25px;
            font-size: 1.5rem;
            color: white;
            text-shadow: 0 0 5px rgba(0, 0, 0, 0.5);
        }

        .book-info .btn{
            background: linear-gradient(135deg, var(--secondary-color) 0%, #b17d1c 100%) !important;
            align-self: center !important;
            }
            .book-info h3{
                color : white !important;
            }
        /* Animated Timeline Section */
        .series-timeline {
            padding: 100px 0;
            background: var(--dark-color);
            position: relative;
        }

        .timeline-container {
            position: relative;
            max-width: 1200px;
            margin: 0 auto;
        }

        .timeline-container::after {
            content: '';
            position: absolute;
            width: 6px;
            background: var(--accent-color);
            top: 0;
            bottom: 0;
            left: 50%;
            margin-left: -3px;
            box-shadow: 0 0 15px var(--accent-color);
        }

        .timeline-item {
            padding: 10px 40px;
            position: relative;
            width: 50%;
            box-sizing: border-box;
        }

        .timeline-item::after {
            content: '';
            position: absolute;
            width: 25px;
            height: 25px;
            background: var(--accent-color);
            border: 4px solid var(--dark-color);
            border-radius: 50%;
            top: 20px;
            z-index: 1;
            box-shadow: 0 0 10px var(--accent-color);
        }

        .timeline-left {
            left: 0;
        }

        .timeline-right {
            left: 50%;
        }

        .timeline-left::after {
            right: -17px;
        }

        .timeline-right::after {
            left: -17px;
        }

        .timeline-content {
            padding: 20px 30px;
            background: rgba(255, 255, 255, 0.05);
            border-radius: 10px;
            backdrop-filter: blur(10px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
            color: var(--light-color);
        }

        /* Interactive Map Improvements */
        .interactive-map-container {
            padding: 100px 0;
            background: #f0eef9;
        }

        .map-wrapper {
            position: relative;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 20px 50px rgba(0, 0, 0, 0.2);
        }

        .map-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(to bottom, rgba(76, 42, 132, 0.2), transparent);
        }

        .map-hotspot {
            position: absolute;
            transform: translate(-50%, -50%);
            z-index: 10;
        }

        .hotspot-dot {
            width: 30px;
            height: 30px;
            background: var(--accent-color);
            border-radius: 50%;
            border: 3px solid white;
            box-shadow: 0 0 0 rgba(255, 184, 28, 0.8);
            cursor: pointer;
            animation: pulse 2s infinite;
        }

        @keyframes pulse {
            0% {
                box-shadow: 0 0 0 0 rgba(255, 184, 28, 0.8);
            }

            70% {
                box-shadow: 0 0 0 20px rgba(255, 184, 28, 0);
            }

            100% {
                box-shadow: 0 0 0 0 rgba(255, 184, 28, 0);
            }
        }

        .hotspot-info {
            position: absolute;
            width: 250px;
            background: white;
            border-radius: 10px;
            padding: 15px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
            transform: translateY(20px);
            opacity: 0;
            visibility: hidden;
            transition: all 0.3s ease;
            z-index: 100;
        }

        .map-hotspot:hover .hotspot-info {
            transform: translateY(0);
            opacity: 1;
            visibility: visible;
        }

        /* Enhanced Chapter Preview Styles */
    .chapter-preview-section {
        padding: 100px 0;
        background: url("{{ asset('images/books/book1.jpg') }}") center center;
        background-size: cover;
        position: relative;
    }

    .chapter-preview-section::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: rgba(0, 0, 0, 0.75);
    }

    .chapter-container {
        max-width: 800px;
        margin: 0 auto;
        background-color: rgba(16, 14, 23, 0.85);
        border-radius: 15px;
        padding: 40px;
        box-shadow: 0 20px 50px rgba(0, 0, 0, 0.5);
        position: relative;
        border: 1px solid rgba(255, 184, 28, 0.3);
    }

    .book-page {
        position: relative;
        min-height: 500px;
        font-family: 'Crimson Text', serif;
        font-size: 1.1rem;
        line-height: 1.8;
        color: #c3c0c0;
    }

    .page-content {
        transition: all 0.5s ease;
    }

    .page-content h4 {
        font-family: 'Cinzel', serif;
        font-size: 2rem;
        margin-bottom: 1.5rem;
        color: var(--light-color);
        text-align: center;
        border-bottom: 1px solid rgba(255, 184, 28, 0.3);
        padding-bottom: 1rem;
    }

    .page-content p {
        margin-bottom: 1.5rem;
        opacity: 0.7;
        transition: all 0.8s ease;
        transform: translateY(10px);
    }

    /* Visual effect for active paragraph */
    .page-content p.active-paragraph {
        opacity: 1;
        transform: translateY(0);
        text-shadow: 0 0 5px rgba(255, 184, 28, 0.3);
    }

    /* New content section styling */
    .new-content-section {
        transition: opacity 0.8s ease;
    }

    /* Prevent content jumping */
    .page-content {
        transition: height 0.5s ease;
    }

    .page-turner {
        position: relative;
        text-align: center;
        margin-top: 2rem;
        padding-top: 1rem;
        border-top: 1px solid rgba(255, 184, 28, 0.3);
    }

    .page-turner .btn {
        background: var(--primary-color);
        color: white;
        border: none;
        padding: 0.75rem 2rem;
        border-radius: 50px;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
        transition: all 0.3s ease;
        font-weight: 600;
        letter-spacing: 1px;
    }

    .page-turner .btn:hover {
        transform: translateY(-3px);
        box-shadow: 0 8px 25px rgba(0, 0, 0, 0.3);
    }

    .page-turner .btn-warning {
        background: linear-gradient(135deg, #f5a623, #b17d1c);
        color: white;
    }

    /* Scrollbar styling for chapter container */
    .book-page::-webkit-scrollbar {
        width: 5px;
    }

    .book-page::-webkit-scrollbar-track {
        background: rgba(0, 0, 0, 0.1);
    }

    .book-page::-webkit-scrollbar-thumb {
        background: rgba(255, 184, 28, 0.5);
        border-radius: 10px;
    }

    /* Responsive styles */
    @media (max-width: 768px) {
        .chapter-container {
            padding: 25px;
        }

        .book-page {
            min-height: 400px;
            font-size: 1rem;
        }

        .page-content h4 {
            font-size: 1.6rem;
        }
    }

    @media (max-width: 576px) {
        .chapter-container {
            padding: 20px;
        }

        .book-page {
            min-height: 350px;
            font-size: 0.95rem;
        }

        .page-content h4 {
            font-size: 1.4rem;
        }
    }

        /* Animated Character Cards */
        /* .character-profiles {
                padding: 100px 0;
                background: linear-gradient(135deg, var(--dark-color), var(--primary-color));
            }

            .section-title {
                color: white;
                font-size: 2.5rem;
                margin-bottom: 3rem;
                text-align: center;
            }

            .character-card {
                border-radius: 15px;
                overflow: hidden;
                background: white;
                box-shadow: 0 15px 35px rgba(0, 0, 0, 0.3);
                transform-style: preserve-3d;
                transition: all 0.5s ease;
                height: 450px;
            }

            .character-card:hover {
                transform: rotateY(10deg) translateY(-20px);
                box-shadow: 0 25px 50px rgba(0, 0, 0, 0.5);
            }

            .character-card img {
                height: 300px;
                object-fit: cover;
                width: 100%;
                transition: all 0.5s ease;
            }

            .character-card:hover img {
                transform: scale(1.05);
            }

            .character-info {
                padding: 1.5rem;
            }

            .character-info h4 {
                font-size: 1.5rem;
                margin-bottom: 0.25rem;
                color: var(--primary-color);
            }

            .character-role {
                font-size: 0.9rem;
                color: var(--secondary-color);
                font-weight: 600;
                margin-bottom: 0.75rem;
            } */


        /* Countdown Timer */
        .countdown-section {
            padding: 100px 0;
            background: linear-gradient(to bottom, #090806, #090816);
            color: white;
            position: relative;
        }


        /* Floating Magic Particles */
        .magic-particle {
            position: absolute;
            width: 6px;
            height: 6px;
            background: white;
            border-radius: 50%;
            pointer-events: none;
        }

        /* Responsive styles */
        @media (max-width: 992px) {
            .page-title {
                font-size: 4rem;
            }

            .page-subtitle {
                font-size: 1.5rem;
            }

            .book-card-3d {
                height: 400px;
                width: 280px;
            }

            .timeline-container::after {
                left: 31px;
            }

            .timeline-item {
                width: 100%;
                padding-left: 70px;
                padding-right: 25px;
            }

            .timeline-item::after {
                left: 15px;
            }

            .timeline-right {
                left: 0;
            }
        }

        @media (max-width: 768px) {
            .page-title {
                font-size: 3rem;
            }

            .page-subtitle {
                font-size: 1.2rem;
            }

            .banner-cta .btn {
                padding: 0.75rem 1.5rem;
                font-size: 1rem;
            }

            .book-card-3d {
                height: 350px;
                width: 240px;
            }

            .character-card {
                height: auto;
            }

            .character-card img {
                height: 200px;
            }

            .subscription-box {
                padding: 30px;
            }

            .subscription-box h3 {
                font-size: 1.8rem;
            }


            /* book show case  */

        }
    </style>

    <style>
        /* XL screens (1200px and up) */
@media (min-width: 1200px) {
    .container {
        max-width: 1140px;
    }

    .book-card-3d {
        height: 500px;
        width: 350px;
    }
}

/* Large screens (992px to 1199px) */
@media (max-width: 1199px) {
    .container {
        max-width: 960px;
    }

    .book-card-3d {
        height: 450px;
        width: 320px;
    }

    .page-title {
        font-size: 4.5rem;
    }
}

/* Medium screens (768px to 991px) */
@media (max-width: 991px) {
    .container {
        max-width: 720px;
    }

    .banner-content {
        padding: 1rem;
    }

    .page-title {
        font-size: 3.5rem;
    }

    .page-subtitle {
        font-size: 1.8rem;
    }

    .book-card-3d {
        height: 400px;
        width: 280px;
    }

    .timeline-container {
        padding: 0 20px;
    }

    .testimonial-item {
        margin-bottom: 30px;
    }

    .subscription-box {
        padding: 30px;
    }
}

/* Small screens (576px to 767px) */
@media (max-width: 767px) {
    .container {
        max-width: 540px;
    }

    .page-banner {
        min-height: 80vh;
    }

    .page-title {
        font-size: 2.8rem;
    }

    .page-subtitle {
        font-size: 1.4rem;
    }

    .banner-cta .btn {
        display: block;
        width: 100%;
        margin: 10px 0;
    }

    .banner-cta .btn-outline-light {
        margin-left: 0 !important;
    }

    .book-card-3d {
        height: 350px;
        width: 250px;
        margin: 0 auto 30px;
    }

    .chapter-container {
        padding: 20px;
    }

    .book-page {
        min-height: auto;
    }

    .countdown-timer {
        flex-wrap: wrap;
    }

    .time-block {
        flex: 0 0 calc(50% - 20px);
        margin-bottom: 20px;
    }
}

/* Extra small screens (575px and down) */
@media (max-width: 575px) {
    .page-title {
        font-size: 2.2rem;
    }

    .page-subtitle {
        font-size: 1.2rem;
    }

    .book-card-3d {
        height: 300px;
        width: 220px;
    }

    .book-spine-title {
        font-size: 1.2rem;
        bottom: 100px;
    }

    .timeline-content {
        padding: 15px;
    }

    .timeline-content h3 {
        font-size: 1.2rem;
    }

    .subscription-box h3 {
        font-size: 1.5rem;
    }

    .subscribe-form input {
        height: 50px;
    }

    .subscribe-form button {
        position: static;
        width: 100%;
        margin-top: 10px;
    }
}

/* Touch device optimizations */
@media (hover: none) {
    .book-card-3d:hover {
        transform: none;
    }

    .book-card-3d {
        transform: rotateY(15deg);
    }

    .hotspot-info {
        opacity: 1;
        visibility: visible;
        transform: translateY(0);
    }
}

/* Landscape mode adjustments */
@media (max-height: 600px) and (orientation: landscape) {
    .page-banner {
        min-height: 100vh;
    }

    .page-title {
        font-size: 2.5rem;
    }

    .banner-cta {
        margin-top: 1rem;
    }
}

/* High-DPI screens */
@media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .book-cover img {
        image-rendering: -webkit-optimize-contrast;
    }
}
    </style>
@endsection

@section('content')
    <!-- Enhanced Magical Banner -->
    <div class="page-banner" id="top">
        <div class="banner-content">
            <h1 class="page-title animate__animated animate__fadeInDown">The Pagalan Chronicles</h1>
            <p class="page-subtitle animate__animated animate__fadeInUp animate__delay-1s">An Epic Fantasy Journey</p>
            <div class="banner-cta mt-4 animate__animated animate__fadeInUp animate__delay-2s">
                <a href="#books" class="btn btn-light btn-lg">Explore the Books</a>
                <a href="#subscribe" class="btn btn-outline-light btn-lg ms-3">Join the Adventure</a>
            </div>
        </div>
    </div>

    <!-- 3D Book Display Section -->
    <section class="book-display-3d" id="books">
        <div class="container">
            <h2 class="text-center mb-5 text-white" data-aos="fade-up">The Epic Trilogy</h2>
            <div class="row">

                @foreach ($books as $key => $book)
                    @php
                        $loop->iteration % 2 == 0 ? ($delay = 100) : ($delay = 0);
                    @endphp
                    <div class="col-md-4 mb-5" data-aos="fade-up" data-aos-delay="{{ $delay }}">
                        <div class="book-card-3d">
                            <div class="book-cover">
                                <img src="{{ asset($book->cover_image) }}" alt="{{ $book->title }} Cover"
                                    class="img-fluid h-100 w-100">
                            </div>
                            <div class="book-spine">
                                @if ($loop->index == 1)
                                @endif
                                <div class="book-spine-title">
                                    {{ Str::replace('The Pagalan Chronicles', '', $book->title) }} </div>
                            </div>
                        </div>
                        <div class="book-info text-center mt-4">
                            <h3>{{ $book->title }}</h3>
                            <p class="release-date">{{  ($book->release_date < now()) ? 'Released' : 'Coming ' }}  {{  \Carbon\Carbon::parse($book->release_date)->toFormattedDateString()  }}</p>
                            <a href="{{ route('books.show', $book->slug) }}" class="btn btn-primary mt-3"> {{  $book->release_date < now() ? 'Buy Now' : 'PRE-ORDER NOW'  }} </a>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </section>

    <!-- Animated Timeline Section -->
    <section class="series-timeline">
        <div class="container">
            <h2 class="text-center text-white mb-5" data-aos="fade-up">The Epic Journey</h2>
            <div class="timeline-container">
                <div class="timeline-item timeline-left" data-aos="fade-right">
                    <div class="timeline-content">
                        <h3>Book 1: Searching for Morganuke's Roots</h3>
                        <p>Follow Elian as he uncovers ancient secrets in the mysterious Morganuke Forest, facing challenges
                            that will test his courage and wisdom.</p>
                        <div class="timeline-date">May 2025</div>
                    </div>
                </div>

                <div class="timeline-item timeline-right" data-aos="fade-left">
                    <div class="timeline-content">
                        <h3>Book 2: Finding Denesthea</h3>
                        <p>The journey continues as our heroes search for the mythical land of Denesthea, encountering new
                            allies and formidable enemies.</p>
                        <div class="timeline-date">June 2025</div>
                    </div>
                </div>

                <div class="timeline-item timeline-left" data-aos="fade-right">
                    <div class="timeline-content">
                        <h3>Book 3: The Final Quest</h3>
                        <p>The climactic conclusion brings all paths together in an epic battle where the fate of Pagalan
                            hangs in the balance.</p>
                        <div class="timeline-date">August 2025</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<!-- Enhanced Chapter Preview Section -->
<section class="chapter-preview-section" id="preview">
    <div class="container">
        <h2 class="section-title text-center mb-5 text-white" data-aos="fade-up">Preview First Chapter</h2>
        <div class="chapter-preview" data-aos="fade-up">
            <div class="chapter-container">
                <div class="book-page">
                    <div class="page-content">
                        <!-- Dynamic content will be loaded here by JavaScript -->
                    </div>
                    <div class="page-turner text-center mt-4">
                        <!-- Dynamic buttons will be inserted here by JavaScript -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
    {{-- testimonials section --}}
    <!-- Testimonials -->
    <x-readers-reactions />

        <!-- Subscription Section -->
<x-adventure-subscribe />
@endsection

@section('scripts')

    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/8.4.5/swiper-bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <script>
        // Floating Magic Particles
        const magicParticles = document.querySelectorAll('.magic-particle');
        magicParticles.forEach(particle => {
            const x = Math.random() * window.innerWidth;
            const y = Math.random() * window.innerHeight;
            particle.style.left = `${x}px`;
            particle.style.top = `${y}px`;
        });
        setInterval(() => {
            magicParticles.forEach(particle => {
                const x = Math.random() * window.innerWidth;
                const y = Math.random() * window.innerHeight;
                particle.style.left = `${x}px`;
                particle.style.top = `${y}px`;
            });
        }, 5000);

        // read more chapter script
        const readMoreBtn = document.querySelector('.page-turner .btn');
        const chapterContent = document.querySelector('.page-content');
        const fullChapter = `
            <h4>Chapter 1: The Beginning</h4>
            <p>The mist hung low over Morganuke Forest as dawn broke, casting an ethereal glow across the ancient trees. Elian adjusted the pack on his shoulders, his eyes scanning the path ahead. The Council's warning echoed in his mind: "Find the Roots before the solstice, or all will be lost."</p>
            <p>He had spent three years preparing for this journey, studying the old texts, memorizing the maps, training his body for the trials ahead. But nothing could prepare him for what awaited in the depths of Morganuke.</p>
            <p>As he stepped deeper into the forest, the air thickened with magic, and the trees whispered secrets of ages past. Elian felt a shiver run down his spine. This was not just a quest for knowledge; it was a test of his very soul.</p>
            <p>With each step, he could feel the weight of destiny pressing down on him. The fate of Pagalan rested on his shoulders, and he was determined to uncover the truth hidden within the roots of Morganuke.</p>
        `;
        readMoreBtn.addEventListener('click', () => {
            chapterContent.innerHTML = fullChapter;
            readMoreBtn.style.display = 'none';
        });

        // Swiper for Testimonials
        const swiper = new Swiper('.swiper-testimonials', {
            slidesPerView: 1,
            spaceBetween: 30,
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
        });
        // Initialize Swiper for testimonials
        const swiperTestimonials = new Swiper('.swiper-testimonials', {
            loop: true,
            autoplay: {
                delay: 5000,
                disableOnInteraction: false,
            },
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
        });
    </script>

<script>
    // Touch event handlers for 3D book cards
document.querySelectorAll('.book-card-3d').forEach(card => {
    let touching = false;
    let startAngle = 15;

    card.addEventListener('touchstart', (e) => {
        touching = true;
        const touch = e.touches[0];
        const rect = card.getBoundingClientRect();
        const centerX = rect.left + rect.width / 2;
        const touchX = touch.clientX;
        const ratio = (touchX - centerX) / (rect.width / 2);
        const angle = startAngle + (ratio * 20);

        card.style.transform = `rotateY(${angle}deg)`;
    });

    card.addEventListener('touchmove', (e) => {
        if (!touching) return;

        const touch = e.touches[0];
        const rect = card.getBoundingClientRect();
        const centerX = rect.left + rect.width / 2;
        const touchX = touch.clientX;
        const ratio = (touchX - centerX) / (rect.width / 2);
        const angle = startAngle + (ratio * 20);

        card.style.transform = `rotateY(${angle}deg)`;
    });

    card.addEventListener('touchend', () => {
        touching = false;
        card.style.transform = `rotateY(${startAngle}deg)`;
    });
});

// Responsive navigation for timeline
const timelineItems = document.querySelectorAll('.timeline-item');
if (window.innerWidth <= 991) {
    timelineItems.forEach(item => {
        item.classList.remove('timeline-left', 'timeline-right');
    });
}

// Responsive handling for countdown timer
const countdownTimer = document.querySelector('.countdown-timer');
function adjustCountdownLayout() {
    if (window.innerWidth <= 767) {
        countdownTimer.style.flexWrap = 'wrap';
        document.querySelectorAll('.time-block').forEach(block => {
            block.style.flex = '0 0 calc(50% - 20px)';
            block.style.marginBottom = '20px';
        });
    } else {
        countdownTimer.style.flexWrap = 'nowrap';
        document.querySelectorAll('.time-block').forEach(block => {
            block.style.flex = '1';
            block.style.marginBottom = '0';
        });
    }
}

// Initialize and handle resize
window.addEventListener('load', adjustCountdownLayout);
window.addEventListener('resize', adjustCountdownLayout);

// Optimize animations for mobile
if (window.innerWidth <= 767) {
    document.querySelectorAll('[data-aos]').forEach(element => {
        element.setAttribute('data-aos-duration', '800');
    });
}

// Handle mobile menu interactions
document.addEventListener('DOMContentLoaded', function() {
    const menuToggle = document.querySelector('.navbar-toggler');
    const navigation = document.querySelector('.navbar-collapse');

    if (menuToggle && navigation) {
        menuToggle.addEventListener('click', function() {
            if (navigation.classList.contains('show')) {
                navigation.style.maxHeight = '0';
                setTimeout(() => {
                    navigation.classList.remove('show');
                }, 300);
            } else {
                navigation.classList.add('show');
                navigation.style.maxHeight = navigation.scrollHeight + 'px';
            }
        });

        // Close menu when clicking outside
        document.addEventListener('click', function(e) {
            if (!navigation.contains(e.target) && !menuToggle.contains(e.target)) {
                navigation.classList.remove('show');
                navigation.style.maxHeight = '0';
            }
        });
    }
});
</script>

{{-- ChapterPreview   --}}
<script>
   // Enhanced Chapter Preview with Dynamic Content Loading
document.addEventListener('DOMContentLoaded', function() {
    // Chapter content sections
   const chapterContent = [
    {
        title: "Chapter 1: The Island",
        content: `<p>Morganuke sat on the beach, listening to the waves crashing against the rocks and contemplating his life on the island of Banton. It was midday, and the sun felt warm on his pale young face. Seabirds circled above him, screeching their call.</p>
                 <p>He looked out over the bay and spotted a group of small fishing boats a little way out to sea. Fishing was necessary for the island, as it was the people's primary food source for the coastal homes engaged in fishing. The boats bobbed up and down as the waves washed beneath them. Morganuke was dancing to their tune. <em>What would it be like to sail on the open sea?</em> Morganuke thought. <em>There must be so many things and strange places to visit if I went to sea.</em></p>`
    },
    {
        content: `<p>He watched two children playing beside the sea further along the coast. They danced around the waves, laughing whilst they splashed each other with the salty water. He remembered when he was a boy doing similar things, although he was usually alone. He often would hunt for crabs in the rock pools close to where he was sitting. With a bucket in one hand and a small net in the other, he would look earnestly in each pool, hoping to find a crab or two to take home. He breathed a big sigh and tasted the salty air. Oh, what it was to live beside the sea and enjoy the sights and sounds of the beach life!</p>`
    },
    {
        content: `<p>Morganuke had lived on the beach for nearly eighteen years after being found abandoned as a baby by Fraytar, his friend and mentor. Not knowing Morganuke's origins or who his parents were, Fraytar had taken Morganuke to a kindly couple on the island. Stovin and Plarem could not have children of their own,</p>`
    }
];


    // Get DOM elements
    const pageContent = document.querySelector('.page-content');
    const pageTurner = document.querySelector('.page-turner');

    // Safety check - ensure elements exist before proceeding
    if (!pageContent || !pageTurner) {
        console.error('Required chapter preview elements not found');
        return;
    }

    // Initialize chapter view with only the first section
    let currentSection = 0;

    // Set initial content
    function initializeChapter() {
        // Create initial container with title
        const initialContainer = document.createElement('div');
        initialContainer.innerHTML = `<h4>${chapterContent[0].title}</h4>`;
        pageContent.appendChild(initialContainer);

        // Create container for first paragraphs with fade-in effect
        const firstContentSection = document.createElement('div');
        firstContentSection.className = 'new-content-section';
        firstContentSection.style.opacity = '0';
        firstContentSection.innerHTML = chapterContent[0].content;
        pageContent.appendChild(firstContentSection);

        // Fade in the content
        setTimeout(() => {
            firstContentSection.style.transition = 'opacity 0.8s ease';
            firstContentSection.style.opacity = '1';

            // Add active class to paragraphs
            setTimeout(() => {
                firstContentSection.querySelectorAll('p').forEach(p => {
                    p.classList.add('active-paragraph');
                });
            }, 500);
        }, 300);

        // Create Read More button
        updateButton("Read More", loadNextSection);
    }

    // Function to load next section
    function loadNextSection() {
        // Mark the current position relative to the bottom of the content
        const lastElement = pageContent.lastElementChild;
        const relativePosition = window.scrollY + window.innerHeight - lastElement.offsetTop;

        currentSection++;

        // Create a container for the new content to enable fade-in effect
        const newContentContainer = document.createElement('div');
        newContentContainer.className = 'new-content-section';
        newContentContainer.style.opacity = '0';
        newContentContainer.innerHTML = chapterContent[currentSection].content;

        // Append the container
        pageContent.appendChild(newContentContainer);

        // Calculate new position to maintain relative view
        const newLastElement = pageContent.lastElementChild;
        const newPosition = newLastElement.offsetTop - window.innerHeight + relativePosition;

        // Scroll to maintain position
        window.scrollTo(0, newPosition);

        // Fade in the new content
        setTimeout(() => {
            newContentContainer.style.transition = 'opacity 0.8s ease';
            newContentContainer.style.opacity = '1';

            // Smooth scroll to the new content
            setTimeout(() => {
                newContentContainer.scrollIntoView({ behavior: 'smooth', block: 'start' });
            }, 200);
        }, 50);

        // Add active-paragraph class to new paragraphs after they're visible
        setTimeout(() => {
            newContentContainer.querySelectorAll('p').forEach(p => {
                p.classList.add('active-paragraph');
            });
        }, 800);

        // If we're at the last section, show Amazon button
        if (currentSection >= chapterContent.length - 1) {
            updateButton("Buy on Amazon", redirectToAmazon);
        }
    }

    // Function to update the button text and action
    function updateButton(text, action) {
        // Clear existing buttons
        pageTurner.innerHTML = '';

        // Create new button
        const btn = document.createElement('a');
        btn.href = "javascript:void(0)"; // Use javascript:void(0) instead of # to prevent scroll jump
        btn.className = "btn";

        if (text === "Buy on Amazon") {
            btn.className = "btn btn-warning";
            btn.innerHTML = '<i class="fa fa-shopping-cart"></i> ' + text;
        } else {
            btn.className = "btn btn-primary";
            btn.textContent = text;
        }

        // Add animation class
        btn.classList.add('animate__animated', 'animate__pulse', 'animate__infinite');

        // Add event listener with explicit preventDefault
        btn.addEventListener('click', function(e) {
            e.preventDefault(); // Prevent default anchor behavior
            e.stopPropagation(); // Stop event propagation
            action();
            return false; // Extra precaution
        });

        // Add to page turner
        pageTurner.appendChild(btn);
    }

    // Function to redirect to Amazon
    function redirectToAmazon() {
        // You can replace this URL with your actual Amazon book link
        window.open('https://www.amazon.com/dp/PagalanChroniclesBook1', '_blank');
    }

    // Add visual effects when scrolling through chapter
    function addReadingEffects() {
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('active-paragraph');
                }
            });
        }, {
            threshold: 0.5
        });

        // Observe all paragraphs
        document.querySelectorAll('.page-content p').forEach(p => {
            observer.observe(p);
        });
    }

    // Initialize the chapter preview
    initializeChapter();

    // Add scroll effects with a slight delay
    setTimeout(addReadingEffects, 500);
});
</script>
@endsection
