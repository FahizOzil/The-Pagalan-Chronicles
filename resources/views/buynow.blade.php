@extends('layouts.app')

@section('title', 'Buy Now - The Pagalan Chronicles')

@section('styles')
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&family=Playfair+Display:wght@400;600;700&display=swap" rel="stylesheet">
<style>
:root {
    --primary-color: #b97b06; /* Purple theme for fantasy */
    --secondary-color: #1b78a7; /* Gold accent */
    --accent-color: #ffb81c;
    --dark-color: #1e1e2e;
    --light-color: #f8f9fa;
    --text-color: #333;
    --heading-font: 'Cinzel', serif;
    --body-font: 'Lato', sans-serif;
    --transition: all 0.3s ease;
}

  
</style>

@endsection

@section('content')
<div class="container">
    <div class="page-header">
        <h1>The Pagalan Chronicles</h1>
        <p>Embark on an extraordinary journey through the magical worlds of Pagalan. Pre-order now to be among the first to experience this epic fantasy series.</p>
        <div class="header-cta">
            <a href="#books" class="btn-main">Explore the Series</a>
        </div>
    </div>
    

    {{-- add new cards here --}}
    <div id="books" class="section-title">
        <div class="section-icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"></path><path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"></path></svg>
        </div>
        <h2>Available Books</h2>
        <p>Begin your adventure with these captivating tales from the world of Pagalan</p>
    </div>
    
    <div class="books-container">
        <!-- Book 1 -->
        <div class="book-card" data-aos="fade-up">
            <div class="book-inner">
                <div class="book-front">
                    <div class="book-badge">Book 1</div>
                    <div class="book-cover">
                        <img src="{{  asset('images/books/book1.jpg')  }}" alt="The Pagalan Chronicles Book 1 - Searching for Morganuke's Roots">
                    </div>
                    <div class="book-spine"></div>
                    <button class="details-trigger" aria-label="Show book details">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="9 18 15 12 9 6"></polyline>
                        </svg>
                    </button>
                </div>
                <div class="book-details">
                    <button class="close-details" aria-label="Close details">×</button>
                    <h3 class="book-title">Searching for Morganuke's Roots</h3>
                    <p class="book-description">Begin your journey through Pagalan in this first installment where unique characters face adversity and discover hope even in the bleakest moments.</p>
                    <div class="book-meta">
                        <div class="price-tag">
                            <span class="label">Softback</span>
                            <span class="price">£14</span>
                        </div>
                        <div class="price-tag">
                            <span class="label">Hardback</span>
                            <span class="price">£24</span>
                        </div>
                        <div class="release-date">
                            <span class="label">Release Date</span>
                            <span class="date">May 2025</span>
                        </div>
                    </div>
                    <div class="retailer-buttons">
                        <a href="#" class="retailer-btn amazon">
                            <span class="retailer-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M13.958 10.09c0 1.232.029 2.256-.591 3.351-.502.891-1.301 1.438-2.186 1.438-1.214 0-1.922-.924-1.922-2.292 0-2.692 2.415-3.182 4.7-3.182v.685zm3.186 7.705c-.209.189-.512.201-.745.074-1.052-.872-1.238-1.276-1.814-2.106-1.734 1.767-2.962 2.297-5.209 2.297-2.66 0-4.731-1.641-4.731-4.925 0-2.565 1.391-4.309 3.37-5.164 1.715-.754 4.11-.891 5.942-1.095v-.41c0-.753.06-1.642-.384-2.302-.385-.587-1.127-.83-1.775-.83-1.205 0-2.277.617-2.54 1.887-.056.313-.272.62-.567.636l-3.14-.336c-.263-.057-.557-.263-.481-.653.715-3.782 4.131-4.928 7.184-4.928 1.567 0 3.614.418 4.845 1.607 1.567 1.466 1.416 3.422 1.416 5.553v5.023c0 1.512.633 2.176 1.225 2.996.209.287.256.636-.01.849-.67.559-1.865 1.6-2.52 2.184l-.006-.008z"/></svg>
                            </span>
                            <span>Buy on Amazon</span>
                        </a>
                        <a href="#" class="retailer-btn barnes">
                            <span class="retailer-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M5 3v16h14V3H5zm12 14H7V5h10v12z"/><path d="M9.5 15h5a1.5 1.5 0 000-3H12v-1h2.5a1.5 1.5 0 000-3h-5v7z"/></svg>
                            </span>
                            <span>Barnes & Noble</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Repeat similar structure for Book 2 and 3 -->
    </div>

    
    <div class="content-section light-section preorder-section">
        <div class="section-icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>
        </div>
        <h2>Pre-Order Exclusive Bonuses</h2>
        <p>First-time buyers will receive these special additions to enhance your journey through the Pagalan world.</p>
        
        <div class="preorder-bonus">
            <div class="map-preview">
                <img src="/api/placeholder/350/250" alt="Map of Pagalan">
            </div>
            <div class="bonus-details">
                <h3>HD World Maps of Pagalan</h3>
                <p>Explore the fantastical world of Pagalan with beautifully illustrated maps that detail the lands, kingdoms, and territories your favorite characters will traverse throughout their adventures.</p>
                <ul class="bonus-features">
                    <li>Detailed terrain features and landmarks</li>
                    <li>Kingdom boundaries and political divisions</li>
                    <li>Important locations from all three books</li>
                    <li>Digital download in high resolution</li>
                </ul>
                <p class="bonus-cta">Available with your pre-order purchase!</p>
                <a href="#books" class="btn-secondary">Pre-order Now</a>
            </div>
        </div>
    </div>
    
    <div class="content-section accent-section">
        <div class="section-icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg>
        </div>
        <h2>Collector's Editions</h2>
        <p>For the true fans of the Pagalan universe, our limited collector's editions offer special features and exclusive content.</p>
        
        <div class="collectors-features">
            <div class="feature-card">
                <div class="feature-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect><line x1="9" y1="3" x2="9" y2="21"></line></svg>
                </div>
                <h3>Hardback with Dust Jacket</h3>
                <p>Premium cloth-bound hardbacks with gold foil embossing and custom dust jackets</p>
            </div>
            
            <div class="feature-card">
                <div class="feature-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path></svg>
                </div>
                <h3>Author Signatures</h3>
                <p>Each collector's edition comes hand-signed by the author</p>
            </div>
            
            <div class="feature-card">
                <div class="feature-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>
                </div>
                <h3>Bonus Chapter</h3>
                <p>Exclusive chapter not available in standard editions</p>
            </div>
        </div>
        
        <div class="collector-cta">
            <a href="#" class="btn-main">Learn More About Collector's Editions</a>
        </div>
    </div>
    
    <div class="newsletter-section">
        <div class="newsletter-content">
            <h2>Join the Pagalan Community</h2>
            <p>Subscribe to our newsletter to receive updates about The Pagalan Chronicles series, release dates, author events, and exclusive content.</p>
            
            <form class="signup-form" id="newsletter-form">
                <div class="form-group">
                    <label for="email">Email Address</label>
                    <input type="email" id="email" placeholder="Enter your email address" required>
                </div>
                <div class="form-group">
                    <label class="checkbox-container">
                        <input type="checkbox" required>
                        <span class="checkmark"></span>
                        I agree to receive newsletters about The Pagalan Chronicles
                    </label>
                </div>
                <button type="submit">Subscribe Now</button>
            </form>
            
            <div class="social-links">
                <p>Or follow us on social media:</p>
                <div class="social-icons">
                    <a href="#" class="social-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path></svg>
                    </a>
                    <a href="#" class="social-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line></svg>
                    </a>
                    <a href="#" class="social-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z"></path></svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
    
    <div class="content-section light-section">
        <div class="author-content">
            <div class="author-image">
                <img src="/api/placeholder/200/200" alt="Author of The Pagalan Chronicles">
            </div>
            <div class="author-bio">
                <h2>About the Author</h2>
                <p>The Pagalan Chronicles is written by an author with a passion for world-building and character-driven fantasy. Drawing inspiration from classic and contemporary fantasy literature, the author has crafted a unique universe filled with compelling characters and intricate plotlines.</p>
                <p>With a background in mythology and ancient history, the author brings depth and authenticity to the diverse cultures and societies within the Pagalan world.</p>
                <a href="#" class="btn-tertiary">Read Full Bio</a>
            </div>
        </div>
    </div>
    
    <div class="content-section light-section">
        <div class="section-title">
            <h2>Frequently Asked Questions</h2>
        </div>
        
        <div class="faq-container">
            <div class="faq-item">
                <div class="faq-question">
                    <h3>When will the books be released?</h3>
                    <span class="faq-toggle">+</span>
                </div>
                <div class="faq-answer">
                    <p>Book 1 will be released in May 2025, Book 2 in June 2025, and Book 3 in August 2025. Pre-orders are available now.</p>
                </div>
            </div>
            
            <div class="faq-item">
                <div class="faq-question">
                    <h3>Are digital versions available?</h3>
                    <span class="faq-toggle">+</span>
                </div>
                <div class="faq-answer">
                    <p>Yes, e-book versions will be available for all major platforms including Kindle, Apple Books, and Kobo. Audiobook versions are also in production.</p>
                </div>
            </div>
            
            <div class="faq-item">
                <div class="faq-question">
                    <h3>How do I claim my pre-order bonuses?</h3>
                    <span class="faq-toggle">+</span>
                </div>
                <div class="faq-answer">
                    <p>After completing your pre-order, you'll receive a confirmation email with instructions on how to register your purchase and claim your exclusive bonuses.</p>
                </div>
            </div>
            
            <div class="faq-item">
                <div class="faq-question">
                    <h3>Is international shipping available?</h3>
                    <span class="faq-toggle">+</span>
                </div>
                <div class="faq-answer">
                    <p>Yes, The Pagalan Chronicles is available for international shipping through most major retailers. Shipping costs and delivery times may vary by location.</p>
                </div>
            </div>
            
            <div class="faq-item">
                <div class="faq-question">
                    <h3>Will there be more books in the series?</h3>
                    <span class="faq-toggle">+</span>
                </div>
                <div class="faq-answer">
                    <p>Yes! The first three books form the initial trilogy, but additional books set in the Pagalan universe are already planned. Join our newsletter to be the first to hear about future releases.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    
</script>
@endsection

@section('scripts')
<script>
 // Smooth scroll functionality for anchor links 

document.addEventListener('DOMContentLoaded', function() {
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            e.preventDefault();
            
            const targetId = this.getAttribute('href');
            const targetElement = document.querySelector(targetId);
            
            if (targetElement) {
                window.scrollTo({
                    top: targetElement.offsetTop - 80, // Offset for fixed header if needed
                    behavior: 'smooth'
                });
            }
        });
    });
    
    // Newsletter form submission handler
    const newsletterForm = document.getElementById('newsletter-form');
    if (newsletterForm) {
        newsletterForm.addEventListener('submit', function(e) {
            e.preventDefault();
            const email = document.getElementById('email').value;
            
            // Simple validation
            if (email && email.includes('@')) {
                // Replace with actual form submission
                alert('Thank you for subscribing! You will receive updates about The Pagalan Chronicles.');
                this.reset();
            } else {
                alert('Please enter a valid email address.');
            }
        });
    }
    
    // Add animation for book cards on scroll
    const bookCards = document.querySelectorAll('.book-card');
    
    function checkScroll() {
        bookCards.forEach(card => {
            const cardPosition = card.getBoundingClientRect().top;
            const screenPosition = window.innerHeight / 1.3;
            
            if (cardPosition < screenPosition) {
                card.classList.add('animate-in');
            }
        });
    }
    
    // Initial check on page load
    checkScroll();
    
    // Check on scroll
    window.addEventListener('scroll', checkScroll);
    
    // Retailer button hover effects
    const retailerButtons = document.querySelectorAll('.retailer-btn');
    retailerButtons.forEach(button => {
        button.addEventListener('mouseenter', function() {
            this.classList.add('hover');
        });
        
        button.addEventListener('mouseleave', function() {
            this.classList.remove('hover');
        });
    });
});
</script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
    const bookCards = document.querySelectorAll('.book-card');
    
    // Intersection Observer for animation on scroll
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('animate-in');
                observer.unobserve(entry.target);
            }
        });
    }, {
        threshold: 0.2
    });
    
    bookCards.forEach(card => {
        observer.observe(card);
        
        // Flip card functionality
        const detailsTrigger = card.querySelector('.details-trigger');
        const closeDetails = card.querySelector('.close-details');
        
        detailsTrigger.addEventListener('click', () => {
            card.classList.add('is-flipped');
        });
        
        closeDetails.addEventListener('click', () => {
            card.classList.remove('is-flipped');
        });
        
        // Add escape key listener for flipped cards
        document.addEventListener('keydown', (e) => {
            if (e.key === 'Escape' && card.classList.contains('is-flipped')) {
                card.classList.remove('is-flipped');
            }
        });
    });
    
    // Smooth hover effect for retailer buttons
    const retailerButtons = document.querySelectorAll('.retailer-btn');
    retailerButtons.forEach(button => {
        button.addEventListener('mouseenter', function() {
            this.style.transform = 'translateY(-2px)';
        });
        
        button.addEventListener('mouseleave', function() {
            this.style.transform = 'translateY(0)';
        });
    });
});


</script>
@endsection
