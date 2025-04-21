{{-- resources/views/books/show.blade.php --}}
@extends('layouts.app')

@section('title', $book->title . ' - The Pagalan Chronicles')

@section('content')
<div class="book-hero" style="background-image: url('{{ asset($book->cover_image) }}')">
    <div class="overlay"></div>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-4 text-center" data-aos="fade-right">
                <div class="book-cover-wrapper">
                    <img src="{{ asset($book->cover_image) }}" alt="{{ $book->title }} book cover" class="book-cover-large">
                    <div class="book-shine"></div>  
                </div>
            </div>
            <div class="col-lg-8" data-aos="fade-left">
                <div class="book-hero-content">
                    <h1 class="book-title">{{ $book->title }}</h1>
                    <div class="book-subtitle">Book {{ $book->book_number }} of The Pagalan Chronicles</div>
                    <div class="book-meta">
                        <div class="meta-item">
                            <i class="fas fa-calendar" aria-hidden="true"></i> 
                            <span>Release Date: {{ $book->release_date }}</span>
                        </div>
                        <div class="meta-item">
                            <i class="fas fa-book" aria-hidden="true"></i> 
                            <span>{{ $book->page_count }} Pages</span>
                        </div>
                        <div class="meta-item">
                            <i class="fas fa-star" aria-hidden="true"></i> 
                            <span>{{ $book->category ?? 'Action' }}</span>
                        </div>
                    </div>
                    <div class="book-purchase">
                        <div class="book-price">
                            <div class="price-item">
                                <span class="format">Softback</span>
                                <span class="price">£14</span>
                            </div>
                            <div class="price-item">
                                <span class="format">Hardback</span>
                                <span class="price">£24</span>
                            </div>
                            <div class="price-item">
                                <span class="format">eBook</span>
                                <span class="price">£7.99</span>
                            </div>
                        </div>
                        <div class="purchase-options">
                            <h4>Available From</h4>
                            <div class="retailer-buttons">
                                <a href="{{ $book->amazon_link ?? '#' }}" class="btn btn-retailer amazon" target="_blank" rel="noopener noreferrer">
                                    <i class="fab fa-amazon" aria-hidden="true"></i> Amazon
                                </a>
                                <a href="{{ $book->barnes_noble_link ?? '#' }}" class="btn btn-retailer bn" target="_blank" rel="noopener noreferrer">
                                    <i class="fas fa-book" aria-hidden="true"></i> Barnes & Noble
                                </a>
                                <a href="{{ $book->kobo_link ?? '#' }}" class="btn btn-retailer kobo" target="_blank" rel="noopener noreferrer">
                                    <i class="fas fa-tablet-alt" aria-hidden="true"></i> Kobo
                                </a>
                            </div>
                            <div class="direct-purchase">
                                <a href="{{ route('books.purchase', $book->id) }}" class="btn btn-primary pre-order-btn">
                                    <i class="fas fa-shopping-cart" aria-hidden="true"></i> Pre-Order Direct
                                </a>
                                <button class="btn btn-outline notify-btn" data-bs-toggle="modal" data-bs-target="#notifyModal">
                                    <i class="fas fa-bell" aria-hidden="true"></i> Notify Me
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="book-overview">
    <div class="container">
        <div class="row">
            <div class="col-lg-8" data-aos="fade-up">
                <div class="section-header">
                    <h2>Overview</h2>
                </div>
                <div class="book-description">
                    {!! $book->description !!}
                </div>
                
                <div class="section-header mt-5">
                    <h2>Book Highlights</h2>
                </div>
                <div class="row highlights-row">
                    @forelse($book->highlights ?? [] as $highlight)
                    <div class="col-md-6 mb-4" data-aos="fade-up" data-aos-delay="{{ $loop->index * 100 }}">
                        <div class="highlight-card">
                            <div class="highlight-icon">
                                <i class="fas {{ $highlight->icon }}" aria-hidden="true"></i>
                            </div>
                            <h3>{{ $highlight->title }}</h3>
                            <p>{{ $highlight->content }}</p>
                        </div>
                    </div>
                    @empty
                    <div class="col-12">
                        <div class="alert alert-info">
                            Highlights for this book will be revealed soon!
                        </div>
                    </div>
                    @endforelse
                </div>
                
                <div class="section-header mt-5">
                    <h2>Key Characters</h2>
                </div>

                <div class="character-carousel swiper-container" data-aos="fade-up">
                    <div class="swiper-wrapper">
                        @forelse($characters as $character)
                        <div class="swiper-slide">
                            <div class="character-card">
                                <div class="character-image">
                                    <img src="{{ asset('images/characters/' . ($character['image'] ?? 'Morganuke.png')) }}" alt="{{ $character['name'] }} character portrait">
                                </div>
                                <div class="character-info">
                                    <h3>{{ $character['name'] }}</h3>
                                    <div class="character-role">{{ $character['role'] }}</div>
                                    <p>{{ $character['description'] }}</p>
                                </div>
                            </div>
                        </div>
                        @empty
                        <div class="swiper-slide">
                            <div class="character-card empty-card">
                                <div class="empty-content">
                                    <i class="fas fa-users" aria-hidden="true"></i>
                                    <p>Characters will be revealed soon!</p>
                                </div>
                            </div>
                        </div>
                        @endforelse
                    </div>
                    <div class="swiper-pagination"></div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
            </div>
            
            <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
                <div class="book-sidebar">
                    <div class="sidebar-widget author-widget">
                        <div class="widget-title">
                            <h3>About the Author</h3>
                        </div>
                        <div class="author-info">
                            <div class="author-image">
                                <img src="{{ asset('images/author/author.jpg') }}" alt="Andrew Houlston portrait">
                            </div>
                            <div class="author-bio">
                                <h4>Andrew Houlston</h4>
                                <p>Andrew Houlston is the creator of the world of Pagalan and author of The Pagalan Chronicles series.</p>
                                <a href="{{ route('author') }}" class="btn btn-sm">Learn More</a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="sidebar-widget series-widget">
                        <div class="widget-title">
                            <h3>The Series</h3>
                        </div>
                        <div class="series-books">
                            @forelse($seriesBooks ?? [] as $seriesBook)
                            <a href="{{ route('books.show', $seriesBook->id) }}" class="series-book-item {{ $seriesBook->id == $book->id ? 'active' : '' }}">
                                <div class="series-book-image">
                                    <img src="{{ asset($seriesBook->cover_image_small) }}" alt="{{ $seriesBook->title }} book cover">
                                </div>
                                <div class="series-book-info">
                                    <h4>Book {{ $seriesBook->book_number }}</h4>
                                    <div class="series-book-title">{{ $seriesBook->title }}</div>
                                </div>
                            </a>
                            @empty
                            <div class="empty-series">
                                <p>More books in this series coming soon!</p>
                            </div>
                            @endforelse
                        </div>
                    </div>
                    
                    <div class="sidebar-widget quote-widget">
                        <div class="quote-content">
                            <blockquote>
                                <p>"If we can stand together through adversity, no matter how severe that is, then there is always hope..."</p>
                                <cite>- The Pagalan Chronicles</cite>
                            </blockquote>
                        </div>
                    </div>
                    
                    <div class="sidebar-widget map-widget">
                        <div class="widget-title">
                            <h3>Explore Pagalan</h3>
                        </div>
                        <div class="map-preview">
                            <img src="{{ asset('images/map/PagalanMap.jpg') }}" alt="Map of Pagalan" class="map-thumbnail">
                            <div class="map-overlay">
                                <a href="{{ route('world') }}" class="btn btn-sm btn-primary">View Maps</a>
                            </div>
                        </div>
                    </div>

                    <div class="sidebar-widget formats-widget">
                        <div class="widget-title">
                            <h3>Available Formats</h3>
                        </div>
                        <div class="format-options">
                            <div class="format-option">
                                <div class="format-icon">
                                    <i class="fas fa-book" aria-hidden="true"></i>
                                </div>
                                <div class="format-details">
                                    <h4>Hardback</h4>
                                    <p>Premium quality hardcover edition</p>
                                    <span class="format-price">£24</span>
                                </div>
                            </div>
                            <div class="format-option">
                                <div class="format-icon">
                                    <i class="fas fa-book-open" aria-hidden="true"></i>
                                </div>
                                <div class="format-details">
                                    <h4>Softback</h4>
                                    <p>Flexible paperback edition</p>
                                    <span class="format-price">£14</span>
                                </div>
                            </div>
                            <div class="format-option">
                                <div class="format-icon">
                                    <i class="fas fa-tablet-alt" aria-hidden="true"></i>
                                </div>
                                <div class="format-details">
                                    <h4>eBook</h4>
                                    <p>Digital edition for all devices</p>
                                    <span class="format-price">£7.99</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="book-quotes parallax-section">
    <div class="container">
        <div class="book-quote-slider swiper-container" data-aos="fade-up">
            <div class="swiper-wrapper">
                @forelse($book->quotes ?? [] as $quote)
                <div class="swiper-slide">
                    <div class="book-quote">
                        <div class="quote-mark" aria-hidden="true">"</div>
                        <div class="quote-text">{{ $quote->text }}</div>
                        <div class="quote-character">— {{ $quote->character }}</div>
                    </div>
                </div>
                @empty
                <div class="swiper-slide">
                    <div class="book-quote">
                        <div class="quote-mark" aria-hidden="true">"</div>
                        <div class="quote-text">Adventure awaits in the world of Pagalan. Discover the complete story in this epic chronicle.</div>
                        <div class="quote-character">— The Pagalan Chronicles</div>
                    </div>
                </div>
                @endforelse
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>
</section>

<section class="review-section">
    <div class="container">
        <div class="section-header text-center" data-aos="fade-up">
            <h2>Reader Reviews</h2>
            <p>What readers are saying about The Pagalan Chronicles</p>
        </div>
        
        <div class="reviews-carousel swiper-container" data-aos="fade-up" data-aos-delay="200">
            <div class="swiper-wrapper">
                @forelse($reviews ?? [] as $review)
                <div class="swiper-slide">
                    <div class="review-card">
                        <div class="review-stars">
                            @for ($i = 0; $i < $review->rating; $i++)
                                <i class="fas fa-star" aria-hidden="true"></i>
                            @endfor
                        </div>
                        <div class="review-text">
                            <p>"{{ $review->content }}"</p>
                        </div>
                        <div class="reviewer-info">
                            <div class="reviewer-name">{{ $review->name }}</div>
                            <div class="review-source">{{ $review->source }}</div>
                        </div>
                    </div>
                </div>
                @empty
                <div class="swiper-slide">
                    <div class="review-card">
                        <div class="review-stars">
                            @for ($i = 0; $i < 5; $i++)
                                <i class="fas fa-star" aria-hidden="true"></i>
                            @endfor
                        </div>
                        <div class="review-text">
                            <p>"The world of Pagalan comes alive with rich detail and compelling characters. A must-read for fantasy enthusiasts!"</p>
                        </div>
                        <div class="reviewer-info">
                            <div class="reviewer-name">Fantasy Review</div>
                            <div class="review-source">Early Reader</div>
                        </div>
                    </div>
                </div>
                @endforelse
            </div>
            <div class="swiper-pagination"></div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </div>
</section>

<section class="related-books">
    <div class="container">
        <div class="section-header text-center" data-aos="fade-up">
            <h2>Continue Your Journey</h2>
            <p>Discover other books in The Pagalan Chronicles series</p>
        </div>
        
        <div class="related-books-slider swiper-container" data-aos="fade-up" data-aos-delay="200">
            <div class="swiper-wrapper">
                @forelse($relatedBooks ?? [] as $relatedBook)
                <div class="swiper-slide">
                    <div class="book-card">
                        <div class="book-cover">
                            <img src="{{ asset($relatedBook->cover_image) }}" alt="{{ $relatedBook->title }} book cover">
                        </div>
                        <div class="book-info">
                            <h3>{{ $relatedBook->title }}</h3>
                            <p class="release-date">Coming {{ $relatedBook->release_month }} 2025</p>
                            <a href="{{ route('books.show', $relatedBook->id) }}" class="btn btn-sm">Learn More</a>
                        </div>
                    </div>
                </div>
                @empty
                <div class="swiper-slide">
                    <div class="book-card empty-card">
                        <div class="empty-content">
                            <i class="fas fa-book" aria-hidden="true"></i>
                            <p>More books in the series coming soon!</p>
                        </div>
                    </div>
                </div>
                @endforelse
            </div>
            <div class="swiper-pagination"></div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </div>
</section>

<section class="subscribe-section" id="subscribe" data-aos="fade-up">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <h2 class="section-title">Stay Updated</h2>
                <p>Subscribe to receive updates about release dates, special offers, and exclusive content from the world of Pagalan.</p>
            </div>
            <div class="col-lg-6">
                <form action="{{ route('subscribe') }}" method="POST" class="subscribe-form">
                    @csrf
                    <div class="form-group">
                        <label for="subscribeEmail" class="visually-hidden">Email address</label>
                        <input type="email" name="email" id="subscribeEmail" placeholder="Your email address" required class="form-control">
                        <button type="submit" class="btn btn-primary">Subscribe</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<!-- Share Modal -->
<div class="modal fade" id="shareModal" tabindex="-1" aria-labelledby="shareModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="shareModalLabel">Share This Book</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Share "{{ $book->title }}" with your friends and fellow readers:</p>
                <div class="share-buttons">
                    <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(route('books.show', $book->id)) }}" class="btn btn-social facebook" target="_blank" rel="noopener noreferrer">
                        <i class="fab fa-facebook-f" aria-hidden="true"></i> Facebook
                    </a>
                    <a href="https://twitter.com/intent/tweet?text=Check out {{ urlencode($book->title) }}, Book {{ $book->book_number }} of The Pagalan Chronicles!&url={{ urlencode(route('books.show', $book->id)) }}" class="btn btn-social twitter" target="_blank" rel="noopener noreferrer">
                        <i class="fab fa-twitter" aria-hidden="true"></i> Twitter
                    </a>
                    <a href="mailto:?subject=Discover {{ $book->title }}: Book {{ $book->book_number }} of The Pagalan Chronicles&body=I thought you might be interested in this book: {{ route('books.show', $book->id) }}" class="btn btn-social email">
                        <i class="fas fa-envelope" aria-hidden="true"></i> Email
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Notify Modal -->
<div class="modal fade" id="notifyModal" tabindex="-1" aria-labelledby="notifyModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="notifyModalLabel">Get Notified</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Enter your email address to be notified when {{ $book->title }} is available for purchase.</p>
                {{-- <form action="{{ route('books.notify', $book->id) }}" method="POST" class="notify-form"> --}}
                    @csrf
                    <input type="hidden" name="book_id" value="{{ $book->id }}">
                    <div class="mb-3">
                        <label for="notifyEmail" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="notifyEmail" name="email" required>
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="subscribeToo" name="subscribe">
                        <label class="form-check-label" for="subscribeToo">Also subscribe to our newsletter</label>
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Notify Me</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Floating Action Buttons -->
<div class="floating-actions">
    <button class="floating-btn share-btn" data-bs-toggle="modal" data-bs-target="#shareModal" aria-label="Share this book">
        <i class="fas fa-share-alt" aria-hidden="true"></i>
    </button>
    <a href="#subscribe" class="floating-btn subscribe-btn" aria-label="Subscribe to newsletter">
        <i class="fas fa-envelope" aria-hidden="true"></i>
    </a>
</div>
@endsection

@section('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/swiper/8.4.5/swiper-bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.4/gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.4/ScrollTrigger.min.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Initialize Swipers
        const swiperElements = [
            {selector: '.character-carousel', options: {
                slidesPerView: 1,
                spaceBetween: 30,
                pagination: {
                    el: '.character-carousel .swiper-pagination',
                    clickable: true,
                },
                navigation: {
                    nextEl: '.character-carousel .swiper-button-next',
                    prevEl: '.character-carousel .swiper-button-prev',
                },
                breakpoints: {
                    576: {
                        slidesPerView: 1,
                    },
                    768: {
                        slidesPerView: 2,
                    },
                    992: {
                        slidesPerView: 3,
                    }
                },
                a11y: {
                    prevSlideMessage: 'Previous character',
                    nextSlideMessage: 'Next character',
                }
            }},
            {selector: '.book-quote-slider', options: {
                slidesPerView: 1,
                spaceBetween: 30,
                pagination: {
                    el: '.book-quote-slider .swiper-pagination',
                    clickable: true,
                },
                autoplay: {
                    delay: 5000,
                    disableOnInteraction: false,
                },
                a11y: {
                    prevSlideMessage: 'Previous quote',
                    nextSlideMessage: 'Next quote',
                }
            }},
            {selector: '.related-books-slider', options: {
                slidesPerView: 1,
                spaceBetween: 30,
                pagination: {
                    el: '.related-books-slider .swiper-pagination',
                    clickable: true,
                },
                navigation: {
                    nextEl: '.related-books-slider .swiper-button-next',
                    prevEl: '.related-books-slider .swiper-button-prev',
                },
                breakpoints: {
                    576: {
                        slidesPerView: 2,
                    },
                    992: {
                        slidesPerView: 3,
                    }
                },
                a11y: {
                    prevSlideMessage: 'Previous book',
                    nextSlideMessage: 'Next book',
                }
            }},
            {selector: '.reviews-carousel', options: {
                slidesPerView: 1,
                spaceBetween: 30,
                pagination: {
                    el: '.reviews-carousel .swiper-pagination',
                    clickable: true,
                },
                navigation: {
                    nextEl: '.reviews-carousel .swiper-button-next',
                    prevEl: '.reviews-carousel .swiper-button-prev',
                },
                breakpoints: {
                    768: {
                        slidesPerView: 2,
                    },
                    992: {
                        slidesPerView: 3,
                    }
                },
                a11y: {
                    prevSlideMessage: 'Previous review',
                    nextSlideMessage: 'Next review',
                }
            }}
        ];
        
        // Initialize all swipers if they exist
        swiperElements.forEach(item => {
            const element = document.querySelector(item.selector);
            if (element) {
                new Swiper(item.selector, item.options);
            }
        });
        
        // Book cover shine effect with IntersectionObserver optimization
        const bookCover = document.querySelector('.book-cover-wrapper');
        if (bookCover) {
            const shine = bookCover.querySelector('.book-shine');
            
            // Only register the event listeners when the element is visible in viewport
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        bookCover.addEventListener('mousemove', handleMouseMove);
                        bookCover.addEventListener('mouseleave', handleMouseLeave);
                    } else {
                        bookCover.removeEventListener('mousemove', handleMouseMove);
                        bookCover.removeEventListener('mouseleave', handleMouseLeave);
                    }
                });
            }, { threshold: 0.1 });
            
            observer.observe(bookCover);
            
            function handleMouseMove(e) {
                const rect = this.getBoundingClientRect();
                const x = (e.clientX - rect.left) / rect.width;
                const y = (e.clientY - rect.top) / rect.height;
                
                requestAnimationFrame(() => {
                    shine.style.opacity = '1';
                    shine.style.backgroundImage = `linear-gradient(
                        ${Math.round(x * 360)}deg, 
                        rgba(255,255,255,0) 0%,
                        rgba(255,255,255,0.5) 50%,
                        rgba(255,255,255,0) 100%
                    )`;
                });
            }
            
            function handleMouseLeave() {
                shine.style.opacity = '0';
            }
        }
        
        // Parallax effect for quotes section with IntersectionObserver
        const parallaxSection = document.querySelector('.parallax-section');
        if (parallaxSection) {
            const parallaxObserver = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        window.addEventListener('scroll', handleParallaxScroll);
                    } else {
                        window.removeEventListener('scroll', handleParallaxScroll);
                    }
                });
            }, { threshold: 0.1 });
            
            parallaxObserver.observe(parallaxSection);
            
            function handleParallaxScroll() {
                const scrollPosition = window.pageYOffset;
                const sectionRect = parallaxSection.getBoundingClientRect();
                const sectionOffset = sectionRect.top + window.pageYOffset;
                const scrollDifference = scrollPosition - sectionOffset;
                
                requestAnimationFrame(() => {
                    parallaxSection.style.backgroundPositionY = `${scrollDifference * 0.4}px`;
                });
            }
        }
        
        // GSAP animations
        if (typeof gsap !== 'undefined') {
            // Hero animations
            gsap.fromTo('.book-hero-content', {
                opacity: 0,
                y: 50
            }, {
                opacity: 1,
                y: 0,
                duration: 1,
                ease: 'power3.out'
            });
            
            gsap.fromTo('.book-cover-wrapper', {
                opacity: 0,
                scale: 0.8
            }, {
                opacity: 1,
                scale: 1,
                duration: 1,
                ease: 'back.out(1.7)'
            });
            
            // ScrollTrigger animations
            if (gsap.registerPlugin && typeof ScrollTrigger !== 'undefined') {
                gsap.registerPlugin(ScrollTrigger);
                
                // Highlight cards animation
                if (document.querySelector('.highlights-row')) {
                    gsap.from('.highlight-card', {
                        scrollTrigger: {
                            trigger: '.highlights-row',
                            start: 'top 80%'
                        },
                        y: 50,
                        opacity: 0,
                        duration: 0.8,
                        stagger: 0.2,
                        ease: 'power3.out'
                    });
                }
                
                // Section headers animation
                gsap.from('.section-header', {
                    scrollTrigger: {
                        trigger: '.section-header',
                        start: 'top 85%',
                        toggleActions: 'play none none none'
                    },
                    opacity: 0,
                    y: 20,
                    duration: 0.7,
                    ease: 'power2.out',
                    stagger: 0.2
                });
                
                // Sidebar animation
                if (document.querySelector('.sidebar-widget')) {
                    gsap.from('.sidebar-widget', {
                        scrollTrigger: {
                            trigger: '.book-sidebar',
                            start: 'top 80%'
                        },
                        opacity: 0,
                        y: 30,
                        duration: 0.8,
                        stagger: 0.2,
                        ease: 'power3.out'
                    });
                }
            }
        }
    });

</script>
        @endsection