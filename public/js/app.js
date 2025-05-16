// public/js/app.js

document.addEventListener('DOMContentLoaded', function() {
    // Header scroll effect
    const header = document.querySelector('.site-header');
    
    function handleScroll() {
        if (window.scrollY > 100) {
            header.classList.add('scrolled');
        } else {
            header.classList.remove('scrolled');
        }
    }
    
    window.addEventListener('scroll', handleScroll);
    handleScroll(); // Initial check
    
    // Initialize AOS animation library
    AOS.init({
        duration: 1000,
        once: true,
        offset: 100
    });
    
    // GSAP animations for hero section
    gsap.from('.hero-content h1', {
        y: 50,
        opacity: 0,
        duration: 1,
        ease: 'power3.out'
    });
    
    gsap.from('.hero-content .tagline', {
        y: 50,
        opacity: 0,
        duration: 1,
        delay: 0.3,
        ease: 'power3.out'
    });
    
    gsap.from('.cta-buttons', {
        y: 50,
        opacity: 0,
        duration: 1,
        delay: 0.6,
        ease: 'power3.out'
    });
    
    // Scroll-based animations
    gsap.registerPlugin(ScrollTrigger);
    
    // Book cards staggered animation
    // gsap.from('.book-card', {
    //     scrollTrigger: {
    //         trigger: '.book-series',
    //         start: 'top 80%'
    //     },
    //     y: 100,
    //     opacity: 0,
    //     duration: 0.8,
    //     stagger: 0.2,
    //     ease: 'power3.out'
    // });
    
    // World map reveal animation
    gsap.from('.map-wrapper', {
        scrollTrigger: {
            trigger: '.world-map',
            start: 'top 70%'
        },
        scale: 0.8,
        opacity: 0,
        duration: 1,
        ease: 'back.out(1.7)'
    });
    
    // Quote animation
    gsap.from('.author-quote blockquote', {
        scrollTrigger: {
            trigger: '.author-quote',
            start: 'top 80%'
        },
        opacity: 0,
        x: -50,
        duration: 1,
        ease: 'power3.out'
    });
    
    gsap.from('.author-quote cite', {
        scrollTrigger: {
            trigger: '.author-quote',
            start: 'top 80%'
        },
        opacity: 0,
        x: 50,
        duration: 1,
        delay: 0.3,
        ease: 'power3.out'
    });
    
    // Subscribe form animation
    gsap.from('.subscribe-form', {
        scrollTrigger: {
            trigger: '.subscribe-section',
            start: 'top 80%'
        },
        y: 50,
        opacity: 0,
        duration: 1,
        ease: 'power3.out'
    });
    
    // Interactive elements
    const bookCards = document.querySelectorAll('.book-card');
    
    bookCards.forEach(card => {
        card.addEventListener('mouseenter', function() {
            gsap.to(this.querySelector('.book-cover img'), {
                scale: 1.05,
                duration: 0.5
            });
        });
        
        card.addEventListener('mouseleave', function() {
            gsap.to(this.querySelector('.book-cover img'), {
                scale: 1,
                duration: 0.5
            });
        });
    });
});


// adventure 

// Add this to your JS file
document.addEventListener('DOMContentLoaded', function() {
    const subscribeForm = document.getElementById('subscribeForm');
    
    if (subscribeForm) {
        subscribeForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            const form = this;
            const submitBtn = form.querySelector('button[type="submit"]');
            const originalBtnText = submitBtn.textContent;
            
            // Create form data object
            const formData = new FormData(form);
            
            // Configure the fetch request
            fetch(form.action, {
                method: form.method,
                body: formData,
                headers: {
                    'X-Requested-With': 'XMLHttpRequest'
                }
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    // Show success message
                    form.innerHTML = '<div class="alert alert-success">' + data.message + '</div>';
                }
            })
            .catch(error => {
                if (error.response && error.response.status === 422) {
                    // Handle validation errors
                    error.response.json().then(errorData => {
                        if (errorData.errors && errorData.errors.email) {
                            const emailInput = document.getElementById('subscriptionEmail');
                            emailInput.classList.add('is-invalid');
                            
                            const errorMessage = document.createElement('div');
                            errorMessage.className = 'invalid-feedback d-block';
                            errorMessage.textContent = errorData.errors.email[0];
                            form.appendChild(errorMessage);
                        }
                    });
                }
                
                submitBtn.disabled = false;
                submitBtn.textContent = originalBtnText;
            })
            .finally(() => {
                // Reset button state if needed
                if (submitBtn.disabled) {
                    submitBtn.disabled = false;
                    submitBtn.textContent = originalBtnText;
                }
            });
            
            // Update button state
            submitBtn.disabled = true;
            submitBtn.textContent = 'Subscribing...';
        });
    }
});