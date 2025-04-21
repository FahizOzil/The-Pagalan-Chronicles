{{-- resources/views/author.blade.php --}}
@extends('layouts.app')

@section('title', 'Andrew Houlston - Author of The Pagalan Chronicles')

@section('styles')
    <style>
        /* Core styling improvements */
        .author-section {
            padding: 5rem 0;
            background: linear-gradient(to right, #110a0a, #0f0909);
        }
        
        .page-banner {
            position: relative;
            background: url('{{ asset('images/panel.jpg') }}') no-repeat center center;
            background-size: cover;
            height: 50vh;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #fff;
            text-align: center;
            overflow: hidden;
        }
        
        .page-banner::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0,0,0,0.5);
        }
        
        .page-banner .container {
            position: relative;
            z-index: 2;
        }
        
        .page-banner h1 {
            font-size: 4rem;
            font-weight: 700;
            margin-bottom: 1rem;
            text-shadow: 2px 2px 8px rgba(0,0,0,0.6);
            letter-spacing: 2px;
        }

        /* Author section styling */
        .author-bio h2 {
            font-size: 2.5rem;
            margin-bottom: 0.5rem;
            position: relative;
            display: inline-block;
        }
        
        .author-bio h2::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 0;
            width: 80%;
            height: 3px;
            background: linear-gradient(to right, #141118, var(--primary-color));
        }
        
        .author-bio .lead {
            font-size: 1.4rem;
            color: #555;
            margin-bottom: 1.5rem;
        }
        
        .author-image {
            position: relative;
            overflow: hidden;
            border-radius: 10px;
            box-shadow: 0 15px 30px rgba(0,0,0,0.15);
        }
        
        .author-image img {
            transition: transform 0.5s ease;
        }
        
        .author-image:hover img {
            transform: scale(1.03);
        }
        
        .author-image::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            box-shadow: inset 0 0 20px rgba(0,0,0,0.2);
            border-radius: 10px;
        }

        /* Journey/Timeline styling */
        .author-journey {
            padding: 6rem 0;
            background-color: #0f0f0f;
            position: relative;
            overflow: hidden;
        }
        
        .author-journey::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url('{{ asset('images/image.jpg') }}') repeat;
            opacity: 0.1;
        }
        
        .timeline {
            position: relative;
            max-width: 1000px;
            margin: 3rem auto;
            padding: 2rem 0;
        }
        
        .timeline::before {
            content: '';
            position: absolute;
            top: 0;
            left: 50%;
            width: 3px;
            height: 100%;
            background: linear-gradient(to bottom, black , white);
            transform: translateX(-50%);
        }
        
        .timeline-item {
            position: relative;
            margin-bottom: 3rem;
            width: 100%;
            display: flex;
        }
        
        .timeline-item:nth-child(odd) {
            flex-direction: row;
        }
        
        .timeline-item:nth-child(even) {
            flex-direction: row-reverse;
        }
        
        .timeline-dot {
            position: absolute;
            left: 50%;
            width: 20px;
            height: 20px;
            background: var(--primary-color);
            border-radius: 50%;
            transform: translateX(-50%);
            z-index: 2;
            border: 3px solid #fff;
            box-shadow: 0 0 0 4px rgba(37, 117, 252, 0.2);
        }
        
        .timeline-content {
            width: 45%;
            padding: 1.5rem;
            background: #fff;
            border-radius: 10px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            position: relative;
        }
        
        .timeline-content::after {
            content: '';
            position: absolute;
            top: 20px;
            width: 20px;
            height: 20px;
            background: #fff;
            transform: rotate(45deg);
        }
        
        .timeline-item:nth-child(odd) .timeline-content::after {
            right: -10px;
        }
        
        .timeline-item:nth-child(even) .timeline-content::after {
            left: -10px;
        }
        
        .timeline-content h3 {
            color: var(--primary-color);
            margin-bottom: 1rem;
            font-weight: 600;
        }

        /* Q&A section styling */
        .author-qa {
            padding: 6rem 0;
            background: linear-gradient(135deg, #050708 0%, #090c0f 100%);
        }
        
        .accordion-item {
            border: none;
            margin-bottom: 1rem;
            border-radius: 10px !important;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
        }
        
        .accordion-button {
            padding: 1.25rem 1.5rem;
            font-weight: 600;
            font-size: 1.1rem;
            background: #fff;
            color: #333;
        }
        
        .accordion-button:not(.collapsed) {
            background: linear-gradient(to right, black , white);
            color: #fff;
        }
        
        .accordion-button:focus {
            box-shadow: none;
        }
        
        .accordion-body {
            padding: 1.5rem;
            background: #fff;
        }

        /* Connect section styling */
        .author-connect {
            padding: 6rem 0;
            background: url('{{ asset('images/author/author.jpg') }}') center center;
            background-size: cover;
            position: relative;
            color: #fff;
        }
        
        .author-connect::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, rgb(19, 16, 16) , rgb(12, 7, 7));
        }
        
        .author-connect .container {
            position: relative;
            z-index: 2;
        }
        
        .section-title {
            position: relative;
            padding-bottom: 1rem;
            margin-bottom: 2rem;
            text-align: center;
            font-weight: 700;
        }
        
        .section-title::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 3px;
            background: linear-gradient(to right, black , white);
        }
        
        .author-connect .section-title::after {
            background: #fff;
        }

        /* Social links styling */
        .social-links-large {
            margin-top: 2rem;
        }
        
        .social-links-large .social-btn {
            display: inline-block;
            margin: 0.5rem;
            padding: 0.8rem 1.5rem;
            border-radius: 30px;
            background: var(--primary-color);
            backdrop-filter: blur(5px);
            color: #fff;
            transition: all 0.3s ease;
            font-weight: 500;
            border: 1px solid var(--primary-color);
        }
        
        .social-links-large .social-btn:hover {
            background: var(--primary-color);
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.1);
            text-decoration: none;
        }
        
        .social-links-large .social-btn i {
            margin-right: 8px;
        }

        /* Subscribe section styling */
        .subscribe-section {
            padding: 6rem 0;
            background: linear-gradient(to right, #f9f9f9, #ffffff);
            text-align: center;
        }
        
        .subscribe-form {
            max-width: 500px;
            margin: 2rem auto 0;
        }
        
        .subscribe-form .form-group {
            display: flex;
            gap: 10px;
            flex-wrap: wrap;
        }
        
        .subscribe-form input[type="email"] {
            flex-grow: 1;
            padding: 0.8rem 1.5rem;
            border-radius: 30px;
            border: 1px solid #ddd;
            box-shadow: 0 3px 10px rgba(0,0,0,0.05);
            transition: all 0.3s ease;
        }
        
        .subscribe-form input[type="email"]:focus {
            border-color: var(--primary-color);
            box-shadow: 0 5px 15px rgba(37, 117, 252, 0.2);
            outline: none;
        }
        
        .subscribe-form button {
            padding: 0.8rem 2rem;
            border-radius: 30px;
            background: linear-gradient(to right, black , white);
            border: none;
            color: #fff;
            font-weight: 500;
            transition: all 0.3s ease;
        }
        
        .subscribe-form button:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(37, 117, 252, 0.3);
        }

        /* Floating book element */
        .floating-book {
            position: absolute;
            width: 150px;
            right: 5%;
            top: 100px;
            animation: float 6s ease-in-out infinite;
            z-index: 10;
            filter: drop-shadow(0 10px 20px rgba(0,0,0,0.3));
        }
        
        @keyframes float {
            0% { transform: translateY(0) rotate(0deg); }
            50% { transform: translateY(-20px) rotate(5deg); }
            100% { transform: translateY(0) rotate(0deg); }
        }

        /* Animation classes */
        .fade-up {
            opacity: 0;
            transform: translateY(30px);
            transition: opacity 0.6s ease, transform 0.6s ease;
        }
        
        .fade-up.active {
            opacity: 1 !important;
            transform: translateY(0);
        }
        
        .fade-in {
            opacity: 0;
            transition: opacity 0.6s ease;
        }
        
        .fade-in.active {
            opacity: 1 !important;
        }
        
        .slide-in-left {
            opacity: 0;
            transform: translateX(-50px);
            transition: opacity 0.6s ease, transform 0.6s ease;
        }
        
        .slide-in-left.active {
            opacity: 1 !important;
            transform: translateX(0);
        }
        
        .slide-in-right {
            opacity: 0;
            transform: translateX(50px);
            transition: opacity 0.6s ease, transform 0.6s ease;
        }
        
        .slide-in-right.active {
            opacity: 1 !important;
            transform: translateX(0);
        }
        
        .scale-in {
            opacity: 0;
            transform: scale(0.8);
            transition: opacity 0.6s ease, transform 0.6s ease;
        }
        
        .scale-in.active {
            opacity: 1 !important;
            transform: scale(1);
        }

        /* Parallax text effect */
        .parallax-text {
            position: relative;
            overflow: hidden;
            padding: 4rem 0;
            background: #1a1a1a;
            color: #fff;
            text-align: center;
        }
        
        .parallax-text .parallax-quote {
            font-size: 2rem;
            font-style: italic;
            line-height: 1.6;
            max-width: 800px;
            margin: 0 auto;
        }
        
        .parallax-text .author-signature {
            margin-top: 2rem;
            font-size: 1.2rem;
            font-weight: 300;
        }

        /* Media queries */
        @media (max-width: 991px) {
            .timeline::before {
                left: 30px;
            }
            
            .timeline-item {
                flex-direction: row !important;
                justify-content: flex-start;
            }
            
            .timeline-dot {
                left: 30px;
            }
            
            .timeline-content {
                width: calc(100% - 60px);
                margin-left: 60px;
            }
            
            .timeline-content::after {
                left: -10px !important;
                right: auto !important;
            }
        }
        
        @media (max-width: 767px) {
            .page-banner h1 {
                font-size: 3rem;
            }
            
            .author-bio h2 {
                font-size: 2rem;
            }
            
            .parallax-text .parallax-quote {
                font-size: 1.5rem;
            }
            
            .floating-book {
                display: none;
            }
        }
    </style>

<style>

.banner-parallax-bg {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: url("{{ asset('images/pagalan-banner.jpg') }}") no-repeat center center;
    background-size: cover;
    z-index: 0;
    transform: translateZ(0);
}

.page-banner::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.4));
    z-index: 1;
}

.page-banner .container {
    position: relative;
    z-index: 2;
}

.page-title {
    font-size: 4.5rem;
    font-weight: 800;
    text-shadow: 2px 2px 4px rgba(0,0,0,0.6);
    margin-bottom: 0.5rem;
    letter-spacing: 1px;
    transform: translateY(20px);
    opacity: 0;
    animation: fadeInUp 1s forwards 0.3s;
}

.page-subtitle {
    font-size: 1.8rem;
    text-shadow: 1px 1px 3px rgba(0,0,0,0.6);
    font-weight: 300;
    letter-spacing: 2px;
    transform: translateY(20px);
    opacity: 0;
    animation: fadeInUp 1s forwards 0.6s;
}

.banner-cta {
    transform: translateY(20px);
    opacity: 0;
    animation: fadeInUp 1s forwards 0.9s;
}

@keyframes fadeInUp {
    to {
        transform: translateY(0);
        opacity: 1;
    }
}

/* Floating magical particles effect */
.page-banner::after {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-image: url("{{ asset('images/particles.png') }}");
    background-repeat: repeat;
    opacity: 0.1;
    animation: floatingParticles 60s linear infinite;
    z-index: 1;
}

@keyframes floatingParticles {
    from {
        background-position: 0 0;
    }
    to {
        background-position: 100% 100%;
    }
}

/* Responsive adjustments */
@media (max-width: 768px) {
    .page-banner {
        padding: 120px 0 80px;
    }
    
    .page-title {
        font-size: 3rem;
    }
    
    .page-subtitle {
        font-size: 1.3rem;
    }
    
    .banner-cta .btn {
        padding: 0.5rem 1rem;
        font-size: 0.9rem;
    }
}
</style>
@endsection



@section('content')
     <!-- page-banner HTML -->
<div class="page-banner">
    <div class="banner-parallax-bg"></div>
    <div class="container">
        <div class="banner-content" data-aos="fade-up">
            <h1 class="page-title">Andrew Houlston</h1>
            <p class="page-subtitle">Creator of The Pagalan Chronicles</p>
        </div>
    </div>
</div>

    <section class="author-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 mb-4 mb-lg-0">
                    <div class="author-image fade-up">
                        <img src="{{ asset('images/author/author.jpg') }}" alt="Author Andrew Houlston" class="img-fluid rounded">
                    </div>
                </div>

                <div class="col-lg-7">
                    <div class="author-bio fade-up">
                        <h2>Andrew Houlston</h2>
                        <p class="lead">Creator of The Pagalan Chronicles</p>
                        <div class="bio-content">
                            <p>I grew up in a small village community in Devon, England. I left home at nineteen to join the
                                Royal Air Force as an airfield technician, where my life significantly changed. Having been
                                used to a close-knit and closed community lifestyle, I now ventured into the big wide world.
                                After serving in the Air Force for nine years, I continued my career and post graduate
                                qualification in technology, initially in defence and subsequently in commercial projects.
                                This took me to many different places and cultures in our world.</p>

                            <p>I got married to the most amazing, beautiful, intelligent woman and we had three children
                                together. Our children, who are now grown up and have families of their own, have been a
                                great inspiration for my writing.</p>

                            <p>As I became older and wiser, I chose to spend some of my busy life reading science fiction
                                and fantasy novels as a welcome break from the challenges of future technology. It inspired
                                me to create imaginary worlds of my own based on pure imagination and my own life
                                experiences. World full of interesting and divers characters facing problems that would not
                                look out of place today in our world. I always wanted to write my own stories about these
                                worlds, but there was never the time. After retiring from the fast-paced profession in the
                                high-tech industry, I focused on finding a way for others to share those worlds with me. My
                                story telling seemed an ideal way to do that.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="parallax-text">
        <div class="container">
            <div class="parallax-quote fade-in">
                "Through all the darkness and challenges that life throws at us, there is still a glimmer of light. If we stand together through adversity, that glimmer becomes a beacon that outshines even the bleakest moments."
            </div>
            <div class="author-signature fade-in">
                - Andrew Houlston
            </div>
        </div>
    </section>

    <section class="author-journey">
        <img src="{{ asset('images/image.jpg') }}" alt="Book Cover" class="floating-book">
        <div class="container">
            <h2 class="section-title fade-up">The Journey of Creation</h2>

            <div class="timeline">
                @php
                    $journey = [
                        [
                            'title' => 'The Beginning',
                            'content' => "The world of Pagalan first sparked in Andrew's imagination during his travels around the world. Different cultures and perspectives became the foundation for a richly diverse fantasy universe.",
                            'year' => '2005'
                        ],
                        [
                            'title' => 'First Publication', 
                            'content' => 'After years of development, the first book in The Pagalan Chronicles was published to an enthusiastic audience, drawing readers into a world where magic and technology collide.',
                            'year' => '2018'
                        ],
                        [
                            'title' => 'Expanding the Universe',
                            'content' => 'Following the positive reception of the first book, Andrew delved deeper into the history and cultures of Pagalan, creating an intricate tapestry of interconnected stories and characters.',
                            'year' => '2020'
                        ],
                        [
                            'title' => 'The New Chapter',
                            'content' => 'Now, Andrew is preparing to relaunch the series with enhanced editions and exciting new content, inviting both longtime fans and new readers to experience the magic of Pagalan.',
                            'year' => '2025'
                        ],
                    ];
                @endphp

                @foreach ($journey as $index => $item)
                    <div class="timeline-item">
                        <div class="timeline-dot" data-year="{{ $item['year'] }}"></div>
                        <div class="timeline-content {{ $index % 2 === 0 ? 'slide-in-left' : 'slide-in-right' }}">
                            <span class="timeline-year">{{ $item['year'] }}</span>
                            <h3>{{ $item['title'] }}</h3>
                            <p>{{ $item['content'] }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="author-qa bg-light">
        <div class="container">
            <h2 class="section-title fade-up">In the Author's Words</h2>

            <div class="accordion" id="authorQA">
                @php
                    $qa = [
                        [
                            'q' => 'What inspired the world of Pagalan?',
                            'a' => 'The world of Pagalan emerged from my fascination with how societies at different technological levels might interact. I wanted to create a universe where magic and technology exist side by side, neither completely dominating the other. My travels to various cultures around the world showed me how different perspectives can coexist, and I wanted to capture that diversity in my fictional world.'
                        ],
                        [
                            'q' => 'Who is your favorite character in the series?',
                            'a' => 'While I love all the characters as theyre all parts of myself in some ways, I have a special fondness for Morganuke. His journey from uncertainty to discovery mirrors my own life in many ways. He faces challenges with a combination of determination and vulnerability that I find deeply human. His growth throughout the series has been particularly rewarding to write.'
                        ],
                        [
                            'q' => 'What can readers expect from the upcoming third book?',
                            'a' => '"The Final Quest" will bring together the threads from the first two books in unexpected ways. Readers will finally discover the true nature of the ancient prophecy and how it connects to our modern world. There are revelations that I`ve been building toward since the very first chapter of the series, and I can`t wait for readers to experience them.'
                        ],
                        [
                            'q' => 'Do you have plans beyond the trilogy?',
                            'a' => 'Absolutely! The Pagalan Chronicles is envisioned as an ennealogy—a nine-book series. The first trilogy focuses on the discovery of Pagalan, while the second will explore the consequences of that discovery, and the final trilogy will resolve the ultimate conflict that has been brewing since the beginning. Additionally, I have plans for companion novels exploring different parts of the Pagalan universe.'
                        ],
                    ];
                @endphp

                @foreach ($qa as $index => $item)
                    <div class="accordion-item scale-in">
                        <h2 class="accordion-header">
                            <button class="accordion-button {{ $index !== 0 ? 'collapsed' : '' }}" type="button"
                                data-bs-toggle="collapse" data-bs-target="#collapse{{ $index }}">
                                {{ $item['q'] }}
                            </button>
                        </h2>
                        <div id="collapse{{ $index }}"
                            class="accordion-collapse collapse {{ $index === 0 ? 'show' : '' }}" data-bs-parent="#authorQA">
                            <div class="accordion-body">
                                <p>{{ $item['a'] }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="author-connect text-center">
        <div class="container">
            <h2 class="section-title fade-up">Connect With Andrew</h2>
            <p class="fade-up">Follow Andrew Houlston on social media for updates, behind-the-scenes content, and discussions about The
                Pagalan Chronicles.</p>

            <div class="social-links-large fade-up">
                <a href="https://www.facebook.com/thepagalanchronicles" target="_blank" class="social-btn">
                    <i class="fab fa-facebook-f"></i> Facebook
                </a>
                <a href="https://www.instagram.com/thepagalanchronicles" target="_blank" class="social-btn">
                    <i class="fab fa-instagram"></i> Instagram
                </a>
                <a href="https://twitter.com/pagalanbooks" target="_blank" class="social-btn">
                    <i class="fab fa-x-twitter"></i> X/Twitter
                </a>
            </div>
        </div>
    </section>

    <section class="subscribe-section" id="subscribe">
        <div class="container">
            <h2 class="section-title fade-up">Join the Adventure</h2>
            <p class="fade-up">Subscribe to receive updates, author messages, and be the first to know about new releases in The Pagalan
                Chronicles series.</p>

            <form action="{{ route('subscribe') }}" method="POST" class="subscribe-form fade-up">
                @csrf
                <div class="form-group">
                    <input type="email" name="email" placeholder="Your email address" required class="form-control">
                    <button type="submit" class="btn btn-primary">Subscribe</button>
                </div>
            </form>
        </div>
    </section>
@endsection

@section('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // GSAP animations
            gsap.registerPlugin(ScrollTrigger);
            
            // Hero banner animation
            gsap.to('.page-banner', {
                scrollTrigger: {
                    trigger: '.page-banner',
                    start: 'top top',
                    end: 'bottom top',
                    scrub: true
                },
                backgroundPosition: '50% 100%',
                ease: 'none'
            });
            
            // Floating book animation
            gsap.to('.floating-book', {
                y: 20,
                rotation: 5,
                duration: 3,
                ease: 'power1.inOut',
                repeat: -1,
                yoyo: true
            });
            
            // Author image reveal
            gsap.from('.author-image', {
                scrollTrigger: {
                    trigger: '.author-section',
                    start: 'top 70%',
                    toggleActions: 'play none none none'
                },
                x: -50,
                opacity: 0,
                duration: 1,
            });
            
            // Author bio text reveal
            gsap.from('.author-bio', {
                scrollTrigger: {
                    trigger: '.author-section',
                    start: 'top 70%',
                    toggleActions: 'play none none none'
                },
                x: 50,
                opacity: 0,
                duration: 1,
                delay: 0.3
            });
            
            // Parallax quote effect
            gsap.to('.parallax-quote', {
                scrollTrigger: {
                    trigger: '.parallax-text',
                    start: 'top bottom',
                    end: 'bottom top',
                    scrub: true
                },
                y: -50,
                ease: 'none'
            });
            
            // Reveal animations for elements with classes
            const revealElements = document.querySelectorAll('.fade-up, .fade-in, .slide-in-left, .slide-in-right, .scale-in');
            
            revealElements.forEach(element => {
                ScrollTrigger.create({
                    trigger: element,
                    start: 'top 85%',
                    onEnter: () => element.classList.add('active'),
                    once: true
                });
            });
            
            // Timeline animation
            const timelineItems = document.querySelectorAll('.timeline-item');
            
            timelineItems.forEach((item, index) => {
                const delay = index * 0.2;
                
                gsap.from(item.querySelector('.timeline-dot'), {
                    scrollTrigger: {
                        trigger: item,
                        start: 'top 80%',
                        toggleActions: 'play none none none'
                    },
                    scale: 0,
                    opacity: 0,
                    duration: 0.6,
                    delay: delay
                });
                
                gsap.from(item.querySelector('.timeline-content'), {
                    scrollTrigger: {
                        trigger: item,
                        start: 'top 80%',
                        toggleActions: 'play none none none'
                    },
                    x: index % 2 === 0 ? -50 : 50,
                    opacity: 0,
                    duration: 0.8,
                    delay: delay + 0.2
                });
            });
            
            // Accordion item reveal
            const accordionItems = document.querySelectorAll('.accordion-item');
            
            accordionItems.forEach((item, index) => {
                gsap.from(item, {
                    scrollTrigger: {
                        trigger: '.author-qa',
                        start: 'top 70%',
                        toggleActions: 'play none none none'
                    },
                    y: 30,
                    opacity: 0,
                    duration: 0.6,
                    delay: 0.1 * index
                });
            });
            
            // Social buttons hover effect
            const socialBtns = document.querySelectorAll('.social-btn');
            
            socialBtns.forEach(btn => {
                btn.addEventListener('mouseenter', () => {
                    gsap.to(btn, {
                        y: -5,
                        duration: 0.3,
                        ease: 'power2.out'
                    });
                });
                
                btn.addEventListener('mouseleave', () => {
                    gsap.to(btn, {
                        y: 0,
                        duration: 0.3,
                        ease: 'power2.out'
                    });
                });
            });
            
            // Subscribe form animation
            gsap.from('.subscribe-form', {
                scrollTrigger: {
                    trigger: '.subscribe-section',
                    start: 'top 70%',
                    toggleActions: 'play none none none'
                },
                y: 30,
                opacity: 0,
                duration: 0.8,
                delay: 0.3
            });
            
            // Interactive timeline year display
            const timelineDots = document.querySelectorAll('.timeline-dot');
            
            timelineDots.forEach(dot => {
                const year = dot.getAttribute('data-year');
                
                // Create year label
                const yearLabel = document.createElement('div');
                yearLabel.classList.add('timeline-year-label');
                yearLabel.textContent = year;
                yearLabel.style.position = 'absolute';
                yearLabel.style.top = '-25px';
                yearLabel.style.left = '50%';
                yearLabel.style.transform = 'translateX(-50%)';
                yearLabel.style.fontSize = '0.8rem';
                yearLabel.style.fontWeight = 'bold';
                yearLabel.style.color = 'var(--primary-color);';
                yearLabel.style.opacity = '0';
                yearLabel.style.transition = 'opacity 0.3s ease';
                
                dot.appendChild(yearLabel);
                
                dot.addEventListener('mouseenter', () => {
                    yearLabel.style.opacity = '1';
                });
                
                dot.addEventListener('mouseleave', () => {
                    yearLabel.style.opacity = '0';
                });
            });
        });
    </script>

<script>
    // Updated JavaScript for page-banner
document.addEventListener('DOMContentLoaded', function() {
    // Parallax effect for banner
    const bannerBg = document.querySelector('.banner-parallax-bg');
    
    window.addEventListener('scroll', function() {
        let scrollPosition = window.pageYOffset;
        if (bannerBg) {
            bannerBg.style.transform = 'translateY(' + scrollPosition * 0.4 + 'px)';
        }
    });
    
    // Magical particles effect (optional)
    const banner = document.querySelector('.page-banner');
    if (banner) {
        for (let i = 0; i < 50; i++) {
            const particle = document.createElement('div');
            particle.classList.add('magical-particle');
            particle.style.left = Math.random() * 100 + '%';
            particle.style.top = Math.random() * 100 + '%';
            particle.style.animationDelay = (Math.random() * 5) + 's';
            particle.style.opacity = Math.random() * 0.5;
            banner.appendChild(particle);
        }

        // Add this CSS for the particles
        const style = document.createElement('style');
        style.innerHTML = `
            .magical-particle {
                position: absolute;
                width: 3px;
                height: 3px;
                background: white;
                border-radius: 50%;
                pointer-events: none;
                z-index: 2;
                animation: float 20s linear infinite;
            }
            
            @keyframes float {
                0% { transform: translateY(0) rotate(0deg); }
                50% { transform: translateY(-100px) rotate(180deg); }
                100% { transform: translateY(0) rotate(360deg); }
            }
        `;
        document.head.appendChild(style);
    }
});
</script>
@endsection