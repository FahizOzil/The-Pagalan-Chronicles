{{-- resources/views/contact.blade.php --}}
@extends('layouts.app')

@section('title', 'Contact - The Pagalan Chronicles')

@section('styles')
    <style>
        .page-banner {
            position: relative;
            background: url('/images/characters/banner2.jpg') no-repeat center center;
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
            background: rgba(0, 0, 0, 0.5);
        }

        /* Contact Page Styles */
        .contact-section {
            background: linear-gradient(to bottom, #0e0b14 0%, #1a1436 100%);
            padding: 5rem 0;
            position: relative;
            overflow: hidden;
        }

        .contact-section::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('/images/books/book2.jpg') repeat;
            opacity: 0.15;
            animation: floatBackground 120s linear infinite;
        }

        @keyframes floatBackground {
            0% {
                background-position: 0 0;
            }

            100% {
                background-position: 1000px 1000px;
            }
        }

        .contact-info h2,
        .contact-form-wrapper h2 {
            color: #e9e6ff;
            margin-bottom: 1.5rem;
            font-weight: 600;
            font-size: 2rem;
            position: relative;
            padding-bottom: 0.8rem;
        }

        .contact-info h2::after,
        .contact-form-wrapper h2::after {
            content: "";
            position: absolute;
            bottom: 0;
            left: 0;
            width: 80px;
            height: 3px;
            background: linear-gradient(90deg, #7a5bce, rgba(106, 90, 205, 0));
        }

        .contact-info .lead {
            color: #d6d1f8;
            font-size: 1.1rem;
            margin-bottom: 2rem;
        }

        /* Info Cards */
        .info-cards {
            margin: 2.5rem 0;
        }

        .info-card {
            display: flex;
            align-items: center;
            margin-bottom: 1.8rem;
            padding: 1.2rem;
            background: rgba(15, 12, 22, 0.7);
            border-radius: 10px;
            border-left: 4px solid #7a5bce;
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.2);
            transition: all 0.3s ease;
        }

        .info-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 12px 30px rgba(106, 90, 205, 0.3);
        }

        .info-card .icon {
            width: 50px;
            height: 50px;
            background: rgba(106, 90, 205, 0.2);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 1rem;
        }

        .info-card .icon i {
            color: #a395e9;
            font-size: 1.5rem;
        }

        .info-card .details h4 {
            color: #e9e6ff;
            font-size: 1.1rem;
            margin-bottom: 0.3rem;
        }

        .info-card .details p {
            color: #a395e9;
            margin: 0;
        }

        /* Social Connect */
        .social-connect {
            margin-top: 2.5rem;
        }

        .social-connect h4 {
            color: #e9e6ff;
            font-size: 1.4rem;
            margin-bottom: 1rem;
        }

        .social-links {
            display: flex;
            flex-wrap: wrap;
            gap: 1rem;
        }

        .social-links a {
            width: 45px;
            height: 45px;
            background: rgba(15, 12, 22, 0.8);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #a395e9;
            font-size: 1.2rem;
            transition: all 0.3s ease;
            border: 1px solid rgba(106, 90, 205, 0.3);
        }

        .social-links a:hover {
            background: rgba(106, 90, 205, 0.7);
            color: white;
            transform: translateY(-5px);
            box-shadow: 0 8px 15px rgba(106, 90, 205, 0.4);
        }

        /* Contact Form */
        .contact-form-wrapper {
            background: rgba(15, 12, 22, 0.7);
            backdrop-filter: blur(10px);
            border-radius: 12px;
            padding: 2.5rem;
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.3);
            border: 1px solid rgba(106, 90, 205, 0.3);
        }

        .contact-form label {
            color: #d6d1f8;
            margin-bottom: 0.5rem;
            display: block;
            font-weight: 500;
        }

        .contact-form .form-control {
            background: rgba(15, 12, 22, 0.5);
            border: 1px solid rgba(106, 90, 205, 0.3);
            color: #e9e6ff;
            padding: 0.8rem 1rem;
            margin-bottom: 1.2rem;
            transition: all 0.3s ease;
        }

        .contact-form .form-control:focus {
            border-color: #7a5bce;
            box-shadow: 0 0 0 0.2rem rgba(106, 90, 205, 0.25);
            background: rgba(15, 12, 22, 0.7);
        }

        .contact-form .form-control::placeholder {
            color: rgba(163, 149, 233, 0.7);
        }

        .contact-form .form-check-input {
            background-color: rgba(15, 12, 22, 0.5);
            border-color: rgba(106, 90, 205, 0.5);
        }

        .contact-form .form-check-input:checked {
            background-color: #7a5bce;
            border-color: #7a5bce;
        }

        .contact-form .form-check-label {
            color: #a395e9;
            font-size: 0.95rem;
        }

        .contact-form button[type="submit"] {
            background: linear-gradient(135deg, #4a2c82 0%, #7a5bce 100%);
            color: white;
            border: none;
            padding: 1rem 2rem;
            font-size: 1.1rem;
            font-weight: 600;
            border-radius: 50px;
            transition: all 0.4s ease;
            margin-top: 1rem;
            position: relative;
            overflow: hidden;
            z-index: 1;
        }

        .contact-form button[type="submit"]::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 0%;
            height: 100%;
            background: linear-gradient(135deg, #7a5bce 0%, #4a2c82 100%);
            transition: all 0.4s ease;
            z-index: -1;
        }

        .contact-form button[type="submit"]:hover::before {
            width: 100%;
        }

        .contact-form button[type="submit"]:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(74, 44, 130, 0.4);
        }

        /* FAQ Section */
        .faq-section {
            background: linear-gradient(to bottom, #1a1436 0%, #0e0b14 100%);
            padding: 5rem 0;
        }

        .faq-section .section-title {
            text-align: center;
            margin-bottom: 3rem;
            font-size: 2.5rem;
            font-weight: 700;
            color: #e9e6ff;
            position: relative;
        }

        .faq-section .section-title::after {
            content: "";
            position: absolute;
            bottom: -15px;
            left: 50%;
            transform: translateX(-50%);
            width: 100px;
            height: 3px;
            background: linear-gradient(90deg, rgba(106, 90, 205, 0), rgba(106, 90, 205, 1), rgba(106, 90, 205, 0));
        }

        .accordion-item {
            background: rgba(15, 12, 22, 0.7);
            border: 1px solid rgba(106, 90, 205, 0.3);
            margin-bottom: 1rem;
            border-radius: 8px;
            overflow: hidden;
        }

        .accordion-button {
            background: rgba(15, 12, 22, 0.9);
            color: #e9e6ff;
            font-weight: 600;
            padding: 1.2rem 1.5rem;
            box-shadow: none;
        }

        .accordion-button:not(.collapsed) {
            background: rgba(74, 44, 130, 0.3);
            color: #e9e6ff;
        }

        .accordion-button:focus {
            box-shadow: none;
            border-color: rgba(106, 90, 205, 0.5);
        }

        .accordion-button::after {
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%23a395e9'%3e%3cpath fill-rule='evenodd' d='M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z'/%3e%3c/svg%3e");
        }

        .accordion-body {
            background: rgba(15, 12, 22, 0.5);
            color: #d6d1f8;
            padding: 1.5rem;
        }

        .accordion-body p,
        .accordion-body ul {
            margin-bottom: 1rem;
        }

        .accordion-body ul li {
            margin-bottom: 0.5rem;
        }

        /* Map Downloads Section */
        .map-downloads {
            background: linear-gradient(to bottom, #0e0b14 0%, #1a1436 100%);
            padding: 5rem 0;
        }

        .map-downloads .section-title {
            color: #e9e6ff;
            margin-bottom: 1.5rem;
        }

        .map-downloads p {
            color: #a395e9;
            font-size: 1.2rem;
            margin-bottom: 2.5rem;
        }

        .download-preview {
            max-width: 800px;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.3);
            transition: all 0.5s ease;
        }

        .download-preview:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 45px rgba(106, 90, 205, 0.4);
        }

        .download-preview img {
            transition: all 0.5s ease;
        }

        .download-preview:hover img {
            transform: scale(1.03);
        }

        .download-preview .overlay {
            background: radial-gradient(circle, rgba(0, 0, 0, 0) 30%, rgba(10, 8, 18, 0.8) 100%);
            border-radius: 12px;
            opacity: 0;
            transition: all 0.5s ease;
        }

        .download-preview:hover .overlay {
            opacity: 1;
        }

        .btn-glow {
            padding: 1rem 2rem;
            background: rgba(106, 90, 205, 0.3);
            color: #ffffff;
            border: 2px solid #7a5bce;
            border-radius: 50px;
            font-size: 1.1rem;
            font-weight: 600;
            letter-spacing: 1px;
            text-transform: uppercase;
            transition: all 0.4s ease;
            animation: pulse 2s infinite;
        }

        @keyframes pulse {
            0% {
                box-shadow: 0 0 0 0 rgba(106, 90, 205, 0.7);
            }

            70% {
                box-shadow: 0 0 0 15px rgba(106, 90, 205, 0);
            }

            100% {
                box-shadow: 0 0 0 0 rgba(106, 90, 205, 0);
            }
        }

        .btn-glow:hover {
            background: rgba(106, 90, 205, 0.7);
            transform: scale(1.05);
            color: #ffffff;
        }

        /* Map Modal */
        .modal-content.bg-dark {
            background-color: rgba(15, 12, 22, 0.95) !important;
            border: 1px solid rgba(106, 90, 205, 0.5);
        }

        .modal-header {
            border-bottom-color: rgba(106, 90, 205, 0.2);
        }

        .modal-title {
            color: #e9e6ff;
            font-weight: 600;
        }

        /* Responsive Styling */
        @media (max-width: 991.98px) {

            .contact-info,
            .contact-form-wrapper {
                padding: 2rem;
            }

            .info-card .icon {
                width: 40px;
                height: 40px;
            }

            .info-card .icon i {
                font-size: 1.2rem;
            }
        }

        @media (max-width: 767.98px) {
            .contact-section {
                padding: 3rem 0;
            }

            .contact-info h2,
            .contact-form-wrapper h2,
            .faq-section .section-title {
                font-size: 1.8rem;
            }

            .social-links a {
                width: 38px;
                height: 38px;
                font-size: 1rem;
            }

            .accordion-button {
                padding: 1rem;
                font-size: 1rem;
            }
        }

        @media (max-width: 575.98px) {
            .page-banner {
                height: 40vh;
                /* Smaller height for mobile */
            }

            .contact-form-wrapper {
                padding: 1.5rem;
            }

            .info-card {
                padding: 1rem;
            }

            .info-card .details h4 {
                font-size: 1rem;
            }

            .contact-form button[type="submit"] {
                padding: 0.8rem 1.5rem;
                font-size: 1rem;
            }

            .social-connect h4 {
                font-size: 1.2rem;
            }

            .download-preview img {
                max-width: 100%;
            }
        }
    </style>

    {{-- Add this to your styles section --}}
    <style>
        /* Enhanced Hero Banner Styles */
        .page-banner {
            position: relative;
            background: url('/images/characters/banner2.jpg') no-repeat center center;
            background-size: cover;
            height: 70vh;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #fff;
            text-align: center;
            overflow: hidden;
        }

        .banner-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(to bottom, rgba(10, 8, 18, 0.7) 0%, rgba(74, 44, 130, 0.6) 100%);
            z-index: 1;
        }

        .magical-particles {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image:
                radial-gradient(circle, rgba(255, 255, 255, 0.3) 1px, transparent 1px),
                radial-gradient(circle, rgba(255, 255, 255, 0.2) 1px, transparent 1px),
                radial-gradient(circle, rgba(255, 255, 255, 0.1) 1px, transparent 1px);
            background-size: 20px 20px, 30px 30px, 40px 40px;
            background-position: 0 0, 10px 10px, 20px 20px;
            animation: particleShimmer 15s linear infinite;
            z-index: 2;
        }

        @keyframes particleShimmer {
            0% {
                opacity: 0.3;
                transform: translateY(0);
            }

            50% {
                opacity: 0.7;
            }

            100% {
                opacity: 0.3;
                transform: translateY(-20px);
            }
        }

        .banner-content {
            position: relative;
            z-index: 3;
            padding: 2rem;
            max-width: 800px;
            margin: 0 auto;
        }

        .page-title {
            font-size: 3.5rem;
            font-weight: 700;
            margin-bottom: 1rem;
            text-shadow: 0 0 10px rgba(74, 44, 130, 0.8);
            font-family: 'Cinzel', serif;
            /* Fantasy-style font */
        }

        .banner-subtitle {
            font-size: 1.3rem;
            font-weight: 400;
            margin-bottom: 2rem;
            opacity: 0.9;
            text-shadow: 0 0 8px rgba(0, 0, 0, 0.7);
        }

        .banner-divider {
            width: 150px;
            height: 3px;
            background: linear-gradient(90deg, rgba(106, 90, 205, 0), rgba(106, 90, 205, 1), rgba(106, 90, 205, 0));
            margin: 1.5rem auto;
        }

        .animated-icon {
            margin-bottom: 1.5rem;
            animation: floatIcon 3s ease-in-out infinite;
        }

        @keyframes floatIcon {

            0%,
            100% {
                transform: translateY(0);
            }

            50% {
                transform: translateY(-15px);
            }
        }

        .banner-buttons .btn {
            padding: 0.8rem 2rem;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 1px;
            transition: all 0.3s ease;
            border-radius: 50px;
        }

        .banner-buttons .btn-outline-light {
            border: 2px solid rgba(255, 255, 255, 0.7);
        }

        .banner-buttons .btn-outline-light:hover {
            background: rgba(255, 255, 255, 0.2);
        }

        .banner-bottom-fade {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 100px;
            background: linear-gradient(to top, #0e0b14 0%, rgba(14, 11, 20, 0) 100%);
            z-index: 2;
        }

        /* Responsive styling */
        @media (max-width: 991.98px) {
            .page-title {
                font-size: 3rem;
            }
        }

        @media (max-width: 767.98px) {
            .page-banner {
                height: 60vh;
            }

            .page-title {
                font-size: 2.5rem;
            }

            .banner-subtitle {
                font-size: 1.1rem;
            }
        }

        @media (max-width: 575.98px) {
            .page-banner {
                height: 50vh;
            }

            .page-title {
                font-size: 2rem;
            }

            .banner-buttons .btn {
                padding: 0.7rem 1.5rem;
                font-size: 0.9rem;
            }
        }
    </style>
@endsection

@section('content')
    {{-- Enhanced Hero Section for Contact Page --}}
    <div class="page-banner" id="top">
        <div class="banner-overlay"></div>
        <div class="magical-particles"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="banner-content text-center">
                        <div class="scroll-icon animated-icon">
                            <i class="fas fa-scroll fa-2x text-warning"></i>
                        </div>
                        <h1 class="page-title animate__animated animate__fadeInDown">Contact the Chronicles</h1>
                        <div class="banner-divider"></div>
                        <p class="banner-subtitle animate__animated animate__fadeInUp">Send a message across the realms of
                            Pagalan</p>
                        <div class="banner-buttons animate__animated animate__fadeIn animate__delay-1s">
                            <a href="#contact-form" class="btn btn-glow me-3 mb-2 mb-md-0">Send a Message</a>
                            <a href="#faq-section" class="btn btn-outline-light">Read FAQs</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="banner-bottom-fade"></div>
    </div>

    <section class="contact-section" id="contact-form">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mb-5 mb-lg-0" data-aos="fade-right">
                    <div class="contact-info">
                        <h2>Get in Touch</h2>
                        <p class="lead">We'd love to hear from you! Whether you have questions about The Pagalan Chronicles,
                            are interested in collaboration opportunities, or simply want to share your thoughts about the
                            books, please reach out using the form or connect with us on social media.</p>

                        <div class="info-cards">
                            <div class="info-card">
                                <div class="icon">
                                    <i class="fas fa-envelope" aria-hidden="true"></i>
                                </div>
                                <div class="details">
                                    <h4>Email</h4>
                                    <p>andrew@thepagalanchronicles.com</p>
                                </div>
                            </div>

                            <div class="info-card">
                                <div class="icon">
                                    <i class="fas fa-globe" aria-hidden="true"></i>
                                </div>
                                <div class="details">
                                    <h4>Website</h4>
                                    <p>https://www.thepagalanchronicles.com/</p>
                                </div>
                            </div>

                            <div class="info-card">
                                <div class="icon">
                                    <i class="fas fa-clock" aria-hidden="true"></i>
                                </div>
                                <div class="details">
                                    <h4>Response Time</h4>
                                    <p>We aim to respond within 2 business days</p>
                                </div>
                            </div>
                        </div>

                        <div class="social-connect">
                            <h4>Connect With Us</h4>
                            <div class="social-links">
                                <a href="https://www.facebook.com/thepagalanchronicles" target="_blank"
                                    aria-label="Facebook"><i class="fab fa-facebook-f" aria-hidden="true"></i></a>
                                <a href="https://www.instagram.com/thepagalanchronicles" target="_blank"
                                    aria-label="Instagram"><i class="fab fa-instagram" aria-hidden="true"></i></a>
                                <a href="https://www.tiktok.com/@thepagalanchronicles" target="_blank"
                                    aria-label="TikTok"><i class="fab fa-tiktok" aria-hidden="true"></i></a>
                                <a href="https://www.youtube.com/thepagalanchronicles" target="_blank"
                                    aria-label="YouTube"><i class="fab fa-youtube" aria-hidden="true"></i></a>
                                <a href="https://www.tumblr.com/thepagalanchronicles" target="_blank" aria-label="Tumblr"><i
                                        class="fab fa-tumblr" aria-hidden="true"></i></a>
                                <a href="https://twitter.com/pagalanbooks" target="_blank" aria-label="Twitter"><i
                                        class="fab fa-x-twitter" aria-hidden="true"></i></a>
                                <a href="https://www.linkedin.com/company/thepagalanchronicles" target="_blank"
                                    aria-label="LinkedIn"><i class="fab fa-linkedin-in" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6" data-aos="fade-left">
                    <div class="contact-form-wrapper">
                        <h2>Send a Message</h2>

                        @if(session('success'))
                            <div class="alert alert-success" role="alert">
                                {{ session('success') }}
                            </div>
                        @endif

                        <form action="{{ route('contact.submit') }}" method="POST" class="contact-form" id="contactForm">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="name">Your Name</label>
                                        <input type="text" class="form-control @error('name') is-invalid @enderror"
                                            id="name" name="name" required value="{{ old('name') }}"
                                            aria-describedby="nameHelp">
                                        @error('name')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="email">Email Address</label>
                                        <input type="email" class="form-control @error('email') is-invalid @enderror"
                                            id="email" name="email" required value="{{ old('email') }}"
                                            aria-describedby="emailHelp">
                                        @error('email')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="subject">Subject</label>
                                <input type="text" class="form-control @error('subject') is-invalid @enderror" id="subject"
                                    name="subject" required value="{{ old('subject') }}">
                                @error('subject')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="message">Your Message</label>
                                <textarea class="form-control @error('message') is-invalid @enderror" id="message"
                                    name="message" rows="5" required>{{ old('message') }}</textarea>
                                @error('message')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <div class="form-check">
                                    <input class="form-check-input @error('subscribe') is-invalid @enderror" type="checkbox"
                                        id="subscribe" name="subscribe" value="1" {{ old('subscribe') ? 'checked' : '' }}>
                                    <label class="form-check-label" for="subscribe">
                                        Subscribe to our newsletter for updates about The Pagalan Chronicles
                                    </label>
                                    @error('subscribe')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary btn-block">Send Message</button>

                          <div class="form-success" id="formSuccess" style="display: none; margin-top: 20px;color: #28a745;">
                    <i class="fas fa-check-circle"></i>
                    <p>Your message has been sent successfully! Anne will get back to you soon.</p>
                </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="faq-section" id="faq-section" data-aos="fade-up">
        <div class="container">
            <h2 class="section-title">Frequently Asked Questions</h2>

            <div class="accordion" id="faqAccordion">
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faqOne"
                            aria-expanded="true" aria-controls="faqOne">
                            When will the next book be released?
                        </button>
                    </h2>
                    <div id="faqOne" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            <p>The schedule for The Pagalan Chronicles is as follows:</p>
                            <ul>
                                <li>Book 1: "Searching for Morganuke's Roots" - May 2025</li>
                                <li>Book 2: "Finding Denesthea" - June 2025</li>
                                <li>Book 3: "The Final Quest" - August 2025</li>
                            </ul>
                            <p>Subscribe to our newsletter to be notified when pre-orders become available!</p>
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#faqTwo" aria-expanded="false" aria-controls="faqTwo">
                            Where can I purchase the books?
                        </button>
                    </h2>
                    <div id="faqTwo" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            <p>The Pagalan Chronicles will be available through all major online retailers including Amazon,
                                Barnes & Noble, and more. We'll also be offering special signed editions directly through
                                our website. Make sure to subscribe to our newsletter to be notified when the books become
                                available for purchase.</p>
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#faqThree" aria-expanded="false" aria-controls="faqThree">
                            Are the books available as e-books or audiobooks?
                        </button>
                    </h2>
                    <div id="faqThree" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            <p>Yes! All books in The Pagalan Chronicles will be available in e-book format. Audiobook
                                versions are currently in production and will be announced closer to the release date. Stay
                                tuned for more details!</p>
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#faqFour" aria-expanded="false" aria-controls="faqFour">
                            I purchased the original editions. Should I buy the new releases?
                        </button>
                    </h2>
                    <div id="faqFour" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            <p>The new editions of Books 1 and 2 have been substantially revised and expanded, offering a
                                more immersive experience of the world of Pagalan. While the core story remains the same,
                                readers will discover new details, enhanced character development, and additional content
                                that provides a richer connection to Book 3. We recommend experiencing these new editions to
                                get the full Pagalan Chronicles experience.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="map-downloads text-center" data-aos="fade-up">
        <div class="container">
            <h2 class="section-title">Free HD Map Download</h2>
            <p>Download high-resolution color maps of the Pagalan world to enhance your reading experience!</p>

            <div class="download-preview position-relative d-inline-block">
                <img src="{{ asset('images/map/PagalanMap.jpg') }}" alt="Pagalan World Map Preview"
                    class="img-fluid rounded shadow">
                <div
                    class="overlay position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center">
                    <button class="btn btn-glow" data-bs-toggle="modal" data-bs-target="#mapModal">View & Download</button>
                </div>
            </div>
        </div>
    </section>

    {{-- Map Modal --}}
    <div class="modal fade" id="mapModal" tabindex="-1" aria-labelledby="mapModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content bg-dark text-white">
                <div class="modal-header border-0">
                    <h5 class="modal-title" id="mapModalLabel">Pagalan World Map</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body text-center">
                    <img src="{{ asset('images/map/PagalanMap.jpg') }}" alt="Pagalan World Map Full"
                        class="img-fluid rounded">
                    <a href="{{ asset('images/map/PagalanMap.jpg') }}" class="btn btn-primary mt-3" download>Download Full
                        Map</a>
                </div>
            </div>
        </div>
    </div>
@endsection


@section('scripts')
    <script>

        // Form submission
        function setupForm() {
            const form = document.getElementById('contactForm');
            const success = document.getElementById('formSuccess');

            if (form) {
                form.addEventListener('submit', async (e) => {
                    e.preventDefault();

                    try {
                        let res = await fetch(form.action, {
                            method: 'POST',
                            body: new FormData(form),
                        });

                        if (!res.ok) {
                            throw new Error('Form submission failed');
                        }

                        let result = await res.json();

                        // Success handling
                        form.reset();
                        success.style.display = 'block';

                        // Hide success message after 5 seconds
                        setTimeout(() => {
                            success.style.display = 'none';
                        }, 5000);

                    } catch (error) {
                        console.error('Error:', error);
                        alert('There was an error submitting the form. Please try again later.');
                    }
                });
            }
        }



         document.addEventListener('DOMContentLoaded', function () {
              setupForm();
            // Smooth scroll for anchor links
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function (e) {
                    e.preventDefault();
                    const targetId = this.getAttribute('href');
                    const targetElement = document.querySelector(targetId);

                    if (targetElement) {
                        window.scrollTo({
                            top: targetElement.offsetTop - 80, // Adjust for fixed header if needed
                            behavior: 'smooth'
                        });
                    }
                });
            });
        });



    </script>

@endsection
