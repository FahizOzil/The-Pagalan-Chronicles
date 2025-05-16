{{-- resources/views/home.blade.php --}}
@extends('layouts.app')

@section('title', 'The Pagalan Chronicles - Epic Fantasy Book Series')

@section('styles')
    <style>
        /* slider   */
        /* Cinematic Hero Banner */
        .page-banner {
            background: linear-gradient(to bottom, rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.9)), url("{{ asset('images/pagalan-banner.jpg') }}");
            background-size: cover;
            background-position: center;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            overflow: hidden;
        }

        /* Film grain overlay */
        .page-banner::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url("{{ asset('images/characters/banner4.jpg') }}");
            background-size: cover;
            /* Changed from repeat to cover */
            opacity: 0.15;
            /* Reduced opacity for subtlety */
            pointer-events: none;
            animation: filmGrain 12s steps(10) infinite;
        }

        /* Improved film grain animation */
        @keyframes filmGrain {

            0%,
            100% {
                background-position: 0 0;
            }

            10% {
                background-position: -5% -5%;
            }

            20% {
                background-position: -10% 5%;
            }

            30% {
                background-position: 5% -10%;
            }

            40% {
                background-position: -5% -5%;
            }

            50% {
                background-position: -15% 15%;
            }

            60% {
                background-position: 15% 5%;
            }

            70% {
                background-position: 5% 10%;
            }

            80% {
                background-position: -10% 5%;
            }

            90% {
                background-position: 10% -5%;
            }
        }

        /* Cinematic lens flare effect */
        .page-banner::after {
            content: '';
            position: absolute;
            top: -150%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: linear-gradient(90deg,
                    transparent,
                    rgba(255, 255, 255, 0.03),
                    rgba(255, 255, 255, 0.1),
                    rgba(255, 255, 255, 0.03),
                    transparent);
            transform: rotate(45deg);
            animation: lensFlare 12s ease-in-out infinite;
            pointer-events: none;
        }

        @keyframes lensFlare {
            0% {
                transform: rotate(45deg) translateX(-150%);
                opacity: 0;
            }

            20% {
                opacity: 0;
            }

            30% {
                opacity: 1;
            }

            70% {
                opacity: 1;
            }

            80% {
                opacity: 0;
            }

            100% {
                transform: rotate(45deg) translateX(150%);
                opacity: 0;
            }
        }

        .banner-content {
            position: relative;
            z-index: 2;
            text-align: center;
            max-width: 900px;
            padding: 2rem;
        }

        /* Cinematic title entrance with depth */
        .page-title {
            font-size: 5.5rem;
            margin-top: 160px;
            color: white;
            margin-bottom: 1.5rem;
            font-weight: 800;
            letter-spacing: 2px;
            opacity: 1;
            transform: scale(1.2) translateY(-20px);
            animation: epicTitleEntrance 2.5s cubic-bezier(0.215, 0.610, 0.355, 1.000) forwards;
            text-shadow: 0 0 10px rgba(255, 184, 28, 0.5),
                0 0 30px rgba(255, 184, 28, 0.3),
                0 0 60px rgba(255, 120, 0, 0.2);
        }

        @keyframes epicTitleEntrance {
            0% {
                opacity: 0;
                transform: scale(1.2) translateY(-20px);
                text-shadow: 0 0 0 transparent;
            }

            20% {
                opacity: 0.2;
            }

            50% {
                opacity: 0.7;
                transform: scale(1.1) translateY(0);
                text-shadow: 0 0 15px rgba(255, 184, 28, 0.6),
                    0 0 40px rgba(255, 184, 28, 0.4);
            }

            75% {
                opacity: 0.9;
                transform: scale(1.05) translateY(0);
            }

            100% {
                opacity: 1;
                transform: scale(1) translateY(0);
                text-shadow: 0 0 10px rgba(255, 184, 28, 0.5),
                    0 0 30px rgba(255, 184, 28, 0.3),
                    0 0 60px rgba(255, 120, 0, 0.2);
            }
        }

        /* Dynamic title glow */
        .page-title {
            animation: titleGlow 4s ease-in-out infinite alternate;
        }

        @keyframes titleGlow {
            from {
                text-shadow: 0 0 10px rgba(255, 184, 28, 0.5),
                    0 0 30px rgba(255, 184, 28, 0.3),
                    0 0 60px rgba(255, 120, 0, 0.2);
            }

            to {
                text-shadow: 0 0 15px rgba(255, 184, 28, 0.6),
                    0 0 40px rgba(255, 184, 28, 0.4),
                    0 0 80px rgba(255, 120, 0, 0.3);
            }
        }

        /* Movie-like subtitle effect */
        .page-subtitle {
            font-size: 2rem;
            color: var(--light-color);
            margin-bottom: 2.5rem;
            letter-spacing: 3px;
            opacity: 1;
            transform: translateY(20px);
            animation: subtitleReveal 2s ease forwards 1s;
        }

        @keyframes subtitleReveal {
            0% {
                opacity: 0;
                transform: translateY(20px);
            }

            100% {
                opacity: 0.9;
                transform: translateY(0);
            }
        }

        /* Cinematic button effects */
        .cta-buttons {
            opacity: 1;
            animation: fadeIn 1.5s ease forwards 2.2s;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        .btn {
            transition: all 0.4s ease;
            position: relative;
            overflow: hidden;
            margin: 0 12px;
            padding: 12px 28px;
            border-radius: 4px;
            font-weight: 600;
            letter-spacing: 1px;
            text-transform: uppercase;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
        }

        .btn-primary {
            background: linear-gradient(135deg, #ff9a00, #ff5e00);
            border: none;
            color: white;
        }

        .btn-outline {
            background: transparent;
            border: 2px solid rgba(255, 255, 255, 0.7);
            color: white;
        }

        .btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 7px 20px rgba(0, 0, 0, 0.3),
                0 0 15px rgba(255, 184, 28, 0.5);
        }

        .btn::after {
            content: '';
            position: absolute;
            top: -100%;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg,
                    rgba(255, 255, 255, 0),
                    rgba(255, 255, 255, 0.2),
                    rgba(255, 255, 255, 0));
            transform: rotate(45deg);
            animation: buttonShine 4s ease-in-out infinite;
        }

        @keyframes buttonShine {
            0% {
                left: -100%;
                top: -100%;
            }

            20%,
            100% {
                left: 200%;
                top: 200%;
            }
        }

        /* Add vignette effect to the page banner */
        .page-banner {
            box-shadow: inset 0 0 200px rgba(0, 0, 0, 0.9);
        }

        /* Remove animate.css dependencies */
        .animate__animated,
        .animate__fadeInDown,
        .animate__fadeInUp,
        .animate__fadeIn,
        .animate__delay-1s,
        .animate__delay-2s {
            animation: none;
        }

        /* end slider  */
        /* Enhanced Book Showcase Styling */
        .book-showcase {
            background-color: #0e0b14;
            padding: 6rem 0;
            position: relative;
            width: 100%;
            overflow: hidden;
        }

        .book-showcase::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url("{{ asset('images/image.jpg') }}") repeat !important;
            opacity: 0.2;
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

        .section-title {
            text-align: center;
            margin-bottom: 3rem;
            font-size: 2.5rem;
            font-weight: 700;
            color: #e9e6ff;
            position: relative;
            text-shadow: 0 0 10px rgba(230, 159, 67, 0.411);
        }

        .section-title::after {
            content: "";
            position: absolute;
            bottom: -15px;
            left: 50%;
            transform: translateX(-50%);
            width: 100px;
            height: 3px;
            background: linear-gradient(90deg, rgba(106, 90, 205, 0), rgba(228, 141, 11, 1), rgba(106, 90, 205, 0));
        }

        .book-series {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            margin-top: 4rem;
            perspective: 1000px;
        }

        .book-card {
            background: rgba(15, 12, 22, 0.8);
            backdrop-filter: blur(10px);
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.3);
            transition: all 0.5s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            height: 100%;
            display: flex;
            flex-direction: column;
            border: 1px solid rgba(106, 90, 205, 0.3);
        }

        .book-card:hover {
            transform: translateY(-15px) rotateY(5deg);
            box-shadow: 0 20px 50px rgba(106, 90, 205, 0.4);
            border: 1px solid rgba(106, 90, 205, 0.6);
        }

        .book-cover {
            height: 420px;
            overflow: hidden;
            position: relative;
        }

        .book-cover::after {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(to bottom, rgba(0, 0, 0, 0) 80%, rgba(15, 12, 22, 1) 100%);
        }

        .book-cover img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: all 0.7s ease;
        }

        .book-card:hover .book-cover img {
            transform: scale(1.1);
        }

        .release-badge{
                background: rosybrown;
    padding: 3px;
    border-radius: 11%;
            }
        .book-info {
            padding: 2rem;
            flex-grow: 1;
            display: flex;
            flex-direction: column;
            background-color: rgba(15, 12, 22, 0.8);
            position: relative;
            z-index: 2;
        }

        .book-info h3 {
            font-size: 1.4rem;
            margin-bottom: 0.8rem;
            color: #e9e6ff;
            font-weight: 600;
            letter-spacing: 0.5px;
        }

        .release-date {
            color: #a395e9;
            font-size: 0.95rem;
            margin-bottom: 1.2rem;
            font-style: italic;
        }

        .book-info .btn {
            margin-top: auto;
            align-self: flex-start;
            background: linear-gradient(135deg, #4e1d17 0%, #100d1a 100%);
            color: white;
            border: none;
            padding: 0.7rem 1.5rem;
            border-radius: 50px;
            transition: all 0.4s ease;
            position: relative;
            overflow: hidden;
            z-index: 1;
        }

        .book-info .btn::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 0%;
            height: 100%;
            background: linear-gradient(135deg, #0e0b14 0%, #050407 100%);
            transition: all 0.4s ease;
            z-index: -1;
        }

        .book-info .btn:hover::before {
            width: 100%;
        }

        .book-info .btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 7px 20px rgba(22, 20, 26, 0.4);
        }

        /* Enhanced Hero Section */
        .hero-section {
            height: 100vh;
            min-height: 700px;
            position: relative;
            overflow: hidden;
            background: url("{{ asset('images/image.jpg') }}") center center no-repeat;
            background-size: cover;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .hero-backdrop {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(10, 8, 18, 0.7);
            z-index: 1;
        }

        .hero-content {
            position: relative;
            z-index: 2;
            text-align: center;
            padding: 0 2rem;
            max-width: 1000px;
        }

        .hero-content h1 {
            font-size: 4.5rem;
            font-weight: 800;
            color: #ffffff;
            margin-bottom: 1.5rem;
            letter-spacing: 2px;
            text-transform: uppercase;
            text-shadow: 0 0 30px rgba(26, 25, 36, 0.7);
        }

        .tagline {
            font-size: 1.5rem;
            color: #d6d1f8;
            margin-bottom: 3rem;
            max-width: 800px;
            margin-left: auto;
            margin-right: auto;
        }

        .cta-buttons {
            display: flex;
            justify-content: center;
            gap: 1.5rem;
        }

        .cta-buttons .btn {
            padding: 1rem 2.5rem;
            font-size: 1.1rem;
            border-radius: 50px;
            text-transform: uppercase;
            letter-spacing: 1px;
            font-weight: 600;
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        }

        .cta-buttons .btn-primary {
            background: linear-gradient(135deg, #0f0d14 0%, #100e16 100%);
            border: none;
            box-shadow: 0 10px 25px rgba(20, 15, 29, 0.5);
        }

        .cta-buttons .btn-primary:hover {
            transform: translateY(-7px);
            box-shadow: 0 15px 35px rgba(25, 21, 32, 0.7);
        }

        .cta-buttons .btn-outline {
            background: transparent;
            border: 2px solid #272046;
            color: #e9e6ff;
        }

        .cta-buttons .btn-outline:hover {
            background: rgba(106, 90, 205, 0.2);
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(106, 90, 205, 0.3);
        }

        /* Enhanced World Map Section */
        .world-map {
            background: linear-gradient(to bottom, #0e0b14 0%, #1a1436 100%);
            padding: 6rem 0;
            position: relative;
        }

        .world-map::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url("{{ asset('images/map/PagalanMap.jpg') }}") repeat;
            opacity: 0.15;
            animation: float 60s linear infinite;
        }

        @keyframes float {
            0% {
                background-position: 0 0;
            }

            100% {
                background-position: 500px -500px;
            }
        }

        .map-wrapper {
            position: relative;
            margin-top: 3rem;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 20px 80px rgba(0, 0, 0, 0.5);
        }

        .interactive-map {
            width: 100%;
            display: block;
            transition: all 0.8s ease;
        }

        .map-wrapper:hover .interactive-map {
            transform: scale(1.03);
        }

        .map-overlay {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: radial-gradient(circle, rgba(0, 0, 0, 0) 30%, rgba(10, 8, 18, 0.8) 100%);
            display: flex;
            align-items: center;
            justify-content: center;
            opacity: 0;
            transition: all 0.5s ease;
        }

        .map-wrapper:hover .map-overlay {
            opacity: 1;
        }

        .btn-glow {
            padding: 1rem 2.5rem;
            background: rgba(106, 90, 205, 0.3);
            color: #ffffff;
            border: 2px solid #7a5bce;
            border-radius: 50px;
            font-size: 1.2rem;
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
        }


        < !-- CSS -->.author-quote {
            /* background: linear-gradient(to bottom, #1a1436 0%, #0e0b14 100%); */
            padding: 5rem 0;
            position: relative;
            overflow: hidden;
        }

        .author-quote::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url("{{ asset('images/author/author.jpg') }}") no-repeat center center;
            background-size: cover;
            opacity: 0.1;
        }

        .quote-container {
            max-width: 900px;
            margin: 0 auto;
            display: flex;
            align-items: center;
            gap: 3rem;
        }

        .author-image {
            flex-shrink: 0;
            width: 150px;
            height: 150px;
            border-radius: 50%;
            border: 3px solid #15131b;
            overflow: hidden;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.3);
            position: relative;
            z-index: 2;
        }

        .author-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        blockquote {
            position: relative;
            padding: 2.5rem;
            background: rgba(15, 12, 22, 0.7);
            backdrop-filter: blur(10px);
            border-radius: 10px;
            border-left: 5px solid #7a5bce;
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.3);
            flex-grow: 1;
        }

        blockquote p {
            font-size: 1.8rem;
            line-height: 1.6;
            color: #e9e6ff;
            font-style: italic;
            margin-bottom: 1.5rem;
        }

        blockquote cite {
            display: block;
            text-align: right;
            font-size: 1.2rem;
            color: #a395e9;
            font-weight: 600;
        }

        blockquote::before {
            content: "" ";
     position: absolute;
            top: 0;
            left: 20px;
            font-size: 8rem;
            line-height: 1;
            color: rgba(106, 90, 205, 0.2);
        }

        /* Responsive adjustments */
        @media (max-width: 768px) {
            .quote-container {
                flex-direction: column;
                text-align: center;
                padding: 0 1rem;
            }

            blockquote {
                border-left: none;
                border-top: 5px solid #7a5bce;
            }

            blockquote cite {
                text-align: center;
            }
        }

        
        /* Responsive adjustments */
        @media (max-width: 991.98px) {
            .hero-content h1 {
                font-size: 3.5rem;
            }

            .tagline {
                font-size: 1.3rem;
            }

            .book-cover {
                height: 380px;
            }

            blockquote p {
                font-size: 1.5rem;
            }
        }

        @media (max-width: 767.98px) {
            .hero-content h1 {
                font-size: 2.8rem;
            }

            .tagline {
                font-size: 1.1rem;
            }

            .book-cover {
                height: 340px;
            }

            .section-title {
                font-size: 2rem;
            }

            blockquote p {
                font-size: 1.3rem;
            }

            .cta-buttons {
                flex-direction: column;
                gap: 1rem;
            }

            .cta-buttons .btn {
                width: 100%;
            }
        }

        @media (max-width: 575.98px) {
            .hero-content h1 {
                font-size: 2.2rem;
            }

            .tagline {
                font-size: 1rem;
                margin-bottom: 2rem;
            }

            .book-cover {
                height: 300px;
            }

            .book-info h3 {
                font-size: 1.1rem;
            }

            blockquote {
                padding: 2rem;
            }

            blockquote p {
                font-size: 1.1rem;
            }

            .subscribe-form .form-group {
                flex-direction: column;
                border-radius: 12px;
            }

            .subscribe-form input {
                width: 100%;
                border-bottom: 1px solid rgba(106, 90, 205, 0.3);
            }

            .subscribe-form button {
                width: 100%;
                border-radius: 0 0 12px 12px;
            }
           
        }
    </style>

    {{-- video trailer   --}}
    <style>
        /* Video Trailer Section Styling */
        .video-trailer {
            background: linear-gradient(to bottom, #07060e 0%, #0e0b14 100%);
            padding: 6rem 0;
            position: relative;
            overflow: hidden;
        }

        .video-trailer::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url("{{ asset('images/characters/banner2.jpg') }}") repeat;
            opacity: 0.2;
            animation: floatStars 120s linear infinite;
        }

        @keyframes floatStars {
            0% {
                background-position: 0 0;
            }

            100% {
                background-position: 1000px -1000px;
            }
        }

        .section-subtitle {
            text-align: center;
            color: #cc833f80;
            font-size: 1.3rem;
            margin-bottom: 3rem;
            max-width: 800px;
            margin-left: auto;
            margin-right: auto;
        }

        .trailer-wrapper {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            gap: 3rem;
            position: relative;
            z-index: 2;
        }

        .trailer-container {
            flex: 1;
            min-width: 300px;
            position: relative;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 20px 50px rgba(0, 0, 0, 0.5);
            aspect-ratio: 16/9;
        }

        .video-thumbnail {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            transition: opacity 0.5s ease;
            cursor: pointer;
        }

        .video-thumbnail img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .video-thumbnail::after {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, rgba(0, 0, 0, 0.3) 0%, rgba(0, 0, 0, 0.7) 100%);
        }

        .play-button {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 80px;
            height: 80px;
            background: rgba(106, 90, 205, 0.7);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            z-index: 2;
            transition: all 0.3s ease;
            box-shadow: 0 0 30px rgba(20, 18, 29, 0.5);
        }

        .play-button i {
            color: white;
            font-size: 2rem;
            margin-left: 5px;
        }

        .play-button:hover {
            transform: translate(-50%, -50%) scale(1.1);
            background: rgba(25, 23, 32, 0.9);
            box-shadow: 0 0 40px rgba(38, 36, 49, 0.7);
        }

        .video-player {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            opacity: 0;
            visibility: hidden;
            transition: opacity 0.5s ease, visibility 0.5s ease;
        }

        .video-player.active {
            opacity: 1;
            visibility: visible;
        }

        .video-player iframe {
            width: 100%;
            height: 100%;
        }

        .trailer-info {
            flex: 1;
            min-width: 300px;
            padding: 2rem;
            background: rgba(15, 12, 22, 0.7);
            backdrop-filter: blur(10px);
            border-radius: 12px;
            border: 1px solid rgba(10, 9, 17, 0.3);
        }

        .trailer-info h3 {
            font-size: 1.8rem;
            margin-bottom: 1.5rem;
            color: #e9e6ff;
            font-weight: 600;
        }

        .trailer-info p {
            color: #d6d1f8;
            font-size: 1.1rem;
            line-height: 1.7;
            margin-bottom: 2rem;
        }

        .trailer-features {
            display: flex;
            justify-content: space-between;
            margin-top: 2rem;
        }

        .trailer-features .feature {
            text-align: center;
            flex: 1;
            padding: 1rem;
            transition: all 0.3s ease;
        }

        .trailer-features .feature:hover {
            transform: translateY(-5px);
        }

        .trailer-features .feature i {
            font-size: 2rem;
            color: #b78019;
            margin-bottom: 1rem;
            display: block;
        }

        .trailer-features .feature span {
            color: #b78019;
            font-size: 1rem;
            font-weight: 600;
        }

        /* Audiobook Section Styling */
        .audiobook-section {
            background: linear-gradient(to bottom, #0e0b14 0%, #1a1436 100%);
            padding: 6rem 0;
            position: relative;
            overflow: hidden;
        }

        .audiobook-section::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url("{{ asset('images/characters/Morganuke2.jpg') }}") repeat;
            opacity: 0.1;
            animation: floatWaves 90s linear infinite;
        }

        @keyframes floatWaves {
            0% {
                background-position: 0 0;
            }

            100% {
                background-position: 1000px 0;
            }
        }

        .audiobook-wrapper {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            gap: 3rem;
            position: relative;
            z-index: 2;
        }

        .audiobook-showcase {
            flex: 1;
            min-width: 300px;
            background: rgba(15, 12, 22, 0.7);
            backdrop-filter: blur(10px);
            border-radius: 12px;
            border: 1px solid rgba(106, 90, 205, 0.3);
            padding: 2rem;
            box-shadow: 0 20px 50px rgba(0, 0, 0, 0.4);
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .audiobook-cover {
            width: 200px;
            height: 200px;
            object-fit: cover;
            border-radius: 10px;
            margin-bottom: 2rem;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.5);
            transition: all 0.3s ease;
        }

        .audiobook-cover:hover {
            transform: scale(1.05);
            box-shadow: 0 15px 40px rgba(106, 90, 205, 0.5);
        }

        .audio-player {
            width: 100%;
            padding: 1.5rem;
            background: rgba(10, 8, 18, 0.8);
            border-radius: 10px;
            border: 1px solid rgba(106, 90, 205, 0.2);
        }

        .audio-title {
            margin-bottom: 1.5rem;
            text-align: center;
        }

        .audio-title h4 {
            font-size: 1.2rem;
            color: #e9e6ff;
            margin-bottom: 0.5rem;
        }

        .audio-title p {
            color: #a395e9;
            font-size: 0.9rem;
        }

        .narrator {
            font-weight: 600;
        }

        .audio-controls {
            width: 100%;
        }

        .progress-container {
            margin-bottom: 1.5rem;
        }

        .progress-bar {
            height: 6px;
            background: rgba(106, 90, 205, 0.2);
            border-radius: 3px;
            cursor: pointer;
            position: relative;
            margin-bottom: 0.5rem;
        }

        .progress {
            height: 100%;
            background: linear-gradient(90deg, #4a2c82, #7a5bce);
            border-radius: 3px;
            width: 0%;
            position: relative;
            transition: width 0.1s linear;
        }

        .progress::after {
            content: "";
            position: absolute;
            right: -5px;
            top: 50%;
            transform: translateY(-50%);
            width: 10px;
            height: 10px;
            background: #e9e6ff;
            border-radius: 50%;
            box-shadow: 0 0 10px rgba(106, 90, 205, 0.7);
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .progress-bar:hover .progress::after {
            opacity: 1;
        }

        .time-display {
            display: flex;
            justify-content: flex-end;
            font-size: 0.8rem;
            color: #a395e9;
        }

        .control-buttons {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 1rem;
        }

        .control-btn {
            background: none;
            border: none;
            color: #a395e9;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .control-btn:hover {
            color: #e9e6ff;
            transform: scale(1.1);
        }

        .play-btn {
            width: 50px;
            height: 50px;
            background: rgba(106, 90, 205, 0.2);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.2rem;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
        }

        .play-btn:hover {
            background: rgba(106, 90, 205, 0.4);
            box-shadow: 0 8px 20px rgba(106, 90, 205, 0.4);
        }

        .volume-control {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            margin-left: 1rem;
        }

        .volume-control i {
            color: #a395e9;
            font-size: 0.9rem;
        }

        .volume-control input[type="range"] {
            width: 80px;
            height: 4px;
            background: rgba(106, 90, 205, 0.2);
            border-radius: 2px;
            -webkit-appearance: none;
        }

        .volume-control input[type="range"]::-webkit-slider-thumb {
            -webkit-appearance: none;
            width: 12px;
            height: 12px;
            border-radius: 50%;
            background: #7a5bce;
            cursor: pointer;
        }

        .audiobook-info {
            flex: 1;
            min-width: 300px;
            padding: 2rem;
            background: rgba(15, 12, 22, 0.7);
            backdrop-filter: blur(10px);
            border-radius: 12px;
            border: 1px solid rgba(106, 90, 205, 0.3);
        }

        .audiobook-info h3 {
            font-size: 1.8rem;
            margin-bottom: 1.5rem;
            color: #e9e6ff;
            font-weight: 600;
        }

        .audiobook-info p {
            color: #d6d1f8;
            font-size: 1.1rem;
            line-height: 1.7;
            margin-bottom: 2rem;
        }

        .audiobook-features {
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
            margin: 2rem 0;
        }

        .audiobook-features .feature {
            text-align: center;
            flex: 1;
            min-width: 120px;
            padding: 1rem;
            transition: all 0.3s ease;
        }

        .audiobook-features .feature:hover {
            transform: translateY(-5px);
        }

        .audiobook-features .feature i {
            font-size: 2rem;
            color: var(--primary-color);
            margin-bottom: 1rem;
            display: block;
        }

        .audiobook-features .feature span {
            color: var(--primary-color);
            font-size: 1rem;
            font-weight: 600;
        }

        .audiobook-platforms {
            margin: 2rem 0;
        }

        .audiobook-platforms h4 {
            color: #e9e6ff;
            font-size: 1.2rem;
            margin-bottom: 1rem;
        }

        .platform-logos {
            display: flex;
            gap: 1.5rem;
            flex-wrap: wrap;
        }

        .platform-logo {
            width: 100px;
            height: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: rgba(255, 255, 255, 0.05);
            border-radius: 8px;
            padding: 0.5rem;
            transition: all 0.3s ease;
        }

        .platform-logo img {
            max-width: 100%;
            max-height: 100%;
            filter: brightness(0.9);
            transition: all 0.3s ease;
        }

        .platform-logo:hover {
            background: rgba(255, 255, 255, 0.1);
            transform: translateY(-3px);
        }

        .platform-logo:hover img {
            filter: brightness(1);
        }

        .audiobook-btn {
            background: linear-gradient(135deg, var(--primary-color) 0%, var(--accent-color) 100%);
            color: white;
            border: none;
            padding: 1rem 2rem;
            border-radius: 50px;
            font-size: 1.1rem;
            font-weight: 600;
            display: inline-block;
            transition: all 0.4s ease;
            text-decoration: none;
            margin-top: 1rem;
        }

        .audiobook-btn:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(74, 44, 130, 0.5);
            background: linear-gradient(135deg, var(--secondary-color) 0%, var(--dark-color) 100%);
        }

        /* Responsive Styles */
        @media (max-width: 991.98px) {

            .trailer-wrapper,
            .audiobook-wrapper {
                flex-direction: column;
            }

            .trailer-info,
            .audiobook-info {
                order: 2;
            }

            .trailer-container,
            .audiobook-showcase {
                order: 1;
                width: 100%;
            }

            .audiobook-cover {
                width: 180px;
                height: 180px;
            }
        }

        @media (max-width: 767.98px) {
            .section-title {
                font-size: 2rem;
            }

            .section-subtitle {
                font-size: 1.1rem;
            }

            .trailer-info h3,
            .audiobook-info h3 {
                font-size: 1.5rem;
            }

            .trailer-features,
            .audiobook-features {
                flex-direction: column;
                gap: 1.5rem;
            }

            .trailer-features .feature,
            .audiobook-features .feature {
                padding: 0.5rem;
            }

            .play-button {
                width: 60px;
                height: 60px;
            }

            .play-button i {
                font-size: 1.5rem;
            }
        }

        @media (max-width: 575.98px) {

            .trailer-info h3,
            .audiobook-info h3 {
                font-size: 1.3rem;
            }

            .trailer-info p,
            .audiobook-info p {
                font-size: 1rem;
            }

            .audiobook-cover {
                width: 150px;
                height: 150px;
            }

            .platform-logos {
                justify-content: center;
            }
        }
    </style>

    {{-- avaible book css   --}}
    <style>
        /* Book Platforms Section Styling */
        .book-platforms {
            background: linear-gradient(to bottom, #1a1436 0%, #0e0b14 100%);
            padding: 6rem 0;
            position: relative;
            overflow: hidden;
        }

        .book-platforms::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url("{{ asset('images/characters/banner4.jpg') }}") repeat;
            opacity: 0.15;
            animation: floatStars 180s linear infinite;
        }

        @keyframes floatStars {
            0% {
                background-position: 0 0;
            }

            100% {
                background-position: 1000px -1000px;
            }
        }

        .platforms-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 2rem;
            margin: 4rem 0;
            position: relative;
            z-index: 2;
        }

        .platform-card {
            flex: 1;
            min-width: 250px;
            max-width: 300px;
            background: rgba(15, 12, 22, 0.8);
            backdrop-filter: blur(10px);
            border-radius: 12px;
            border: 1px solid rgba(106, 90, 205, 0.3);
            padding: 2.5rem 1.5rem;
            text-align: center;
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            position: relative;
            overflow: hidden;
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.3);
        }

        .platform-card::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: radial-gradient(circle, rgba(106, 90, 205, 0.1) 0%, rgba(106, 90, 205, 0) 70%);
            transform: rotate(45deg);
            transition: all 0.6s ease;
            z-index: 0;
            opacity: 0;
        }

        .platform-card:hover::before {
            opacity: 1;
            animation: platformGlow 2.5s ease-out infinite;
        }

        @keyframes platformGlow {
            0% {
                transform: rotate(45deg) scale(1);
                opacity: 0.4;
            }

            50% {
                transform: rotate(45deg) scale(1.2);
                opacity: 0.8;
            }

            100% {
                transform: rotate(45deg) scale(1);
                opacity: 0.4;
            }
        }

        .platform-card:hover {
            transform: translateY(-15px);
            border-color: rgba(106, 90, 205, 0.6);
            box-shadow: 0 25px 50px rgba(106, 90, 205, 0.3);
        }

        .platform-logo {
            height: 80px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 1.5rem;
            position: relative;
            z-index: 2;
        }

        .platform-logo img {
            max-height: 100%;
            max-width: 150px;
            filter: brightness(0.9);
            transition: all 0.4s ease;
        }

        .platform-card:hover .platform-logo img {
            filter: brightness(1.1);
            transform: scale(1.1);
        }

        .platform-card h3 {
            font-size: 1.5rem;
            color: #e9e6ff;
            margin-bottom: 1rem;
            position: relative;
            z-index: 2;
        }

        .platform-card p {
            color: var(--subtitle-color);
            font-size: 0.95rem;
            margin-bottom: 1.5rem;
            position: relative;
            z-index: 2;
        }

        .platform-hover {
            position: relative;
            z-index: 2;
            opacity: 0;
            transform: translateY(20px);
            transition: all 0.4s ease;
        }

        .platform-card:hover .platform-hover {
            opacity: 1;
            transform: translateY(0);
        }

        .platform-btn {
            display: inline-block;
            background: linear-gradient(135deg, #020105 0%, #7a5bce 100%);
            color: white;
            text-decoration: none;
            padding: 0.8rem 1.8rem;
            border-radius: 50px;
            font-weight: 600;
            transition: all 0.3s ease;
        }

        .platform-btn:hover {
            background: linear-gradient(135deg, #5d3ca3 0%, #8c6dd7 100%);
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(106, 90, 205, 0.4);
        }

        .discount-badge {
            position: absolute;
            top: -10px;
            right: 20px;
            background: linear-gradient(135deg, #ff4646 0%, #ff7676 100%);
            color: white;
            padding: 0.3rem 0.8rem;
            border-radius: 20px;
            font-size: 0.8rem;
            font-weight: 700;
            box-shadow: 0 5px 15px rgba(255, 70, 70, 0.4);
            transform: rotate(5deg);
        }

        /* Independent Bookstore Notice */
        .indie-notice {
            margin-top: 4rem;
            background: rgba(15, 12, 22, 0.7);
            backdrop-filter: blur(10px);
            border-radius: 12px;
            border: 1px solid rgba(106, 90, 205, 0.3);
            padding: 2rem;
            display: flex;
            align-items: center;
            gap: 2rem;
            position: relative;
            z-index: 2;
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.3);
        }

        .indie-icon {
            flex-shrink: 0;
            width: 80px;
            height: 80px;
            background: rgba(106, 90, 205, 0.2);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.4s ease;
        }

        .indie-icon i {
            font-size: 2.5rem;
            color: #7a5bce;
        }

        .indie-notice:hover .indie-icon {
            transform: rotateY(180deg);
            background: rgba(106, 90, 205, 0.3);
        }

        .indie-text {
            flex-grow: 1;
        }

        .indie-text h4 {
            font-size: 1.3rem;
            color: #e9e6ff;
            margin-bottom: 0.8rem;
        }

        .indie-text p {
            color: #a395e9;
            font-size: 1rem;
            margin-bottom: 1.2rem;
        }

        .find-store-btn {
            display: inline-block;
            background: transparent;
            border: 2px solid #7a5bce;
            color: #e9e6ff;
            text-decoration: none;
            padding: 0.6rem 1.5rem;
            border-radius: 50px;
            font-weight: 600;
            transition: all 0.3s ease;
        }

        .find-store-btn:hover {
            background: rgba(106, 90, 205, 0.2);
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(106, 90, 205, 0.3);
        }

        /* Responsive adjustments */
        @media (max-width: 991.98px) {
            .platforms-container {
                gap: 1.5rem;
            }

            .platform-card {
                min-width: 200px;
            }
        }

        @media (max-width: 767.98px) {
            .indie-notice {
                flex-direction: column;
                text-align: center;
                padding: 2rem 1.5rem;
            }

            .indie-icon {
                margin-bottom: 1rem;
            }
        }

        @media (max-width: 575.98px) {
            .platform-card {
                min-width: 100%;
            }

            .platform-hover {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>

@endsection

@section('content')
    <!-- Hero Section with Particles.js -->
    <div class="page-banner" id="top">
        <div class="banner-content">
            <h1 class="page-title animate__animated animate__fadeInDown">THE PAGALAN CHRONICLES</h1>
            <p class="page-subtitle animate__animated animate__fadeInUp animate__delay-1s">
                Embark on an extraordinary journey through the realms of Pagalan in this epic series of novels
            </p>
            <div class="cta-buttons animate__animated animate__fadeIn animate__delay-2s">
                <a href="{{ route('books') }}" class="btn btn-primary">Explore the Series</a>
                <a href="#subscribe" class="btn btn-outline">Join the Adventure</a>
            </div>
        </div>
    </div>

    <!-- Book Showcase with Enhanced Cards -->
    <section class="book-showcase" id="book-section">
        <div class="container">
            <h2 class="section-title">The Epic Journey Begins</h2>

            <div class="row book-series">
                @if (isset($books) && count($books) > 0)
                    @foreach ($books as $book)
                        <div class="col-lg-4 col-md-6 mb-5">
                            <div class="book-card">
                                <div class="book-cover">
                                    <img src="{{ asset($book->cover_image) }}"
                                        alt="Book {{ $book->book_number }} - {{ Str::of($book->slug)->replace('-', ' ')->title() }}">
                                </div>
                                <div class="book-info">
                                    <h3>Book {{ $book->book_number }}:
                                        {{ Str::of($book->slug)->replace('-', ' ')->title() }}</h3>
                                    {{-- <p class="release-date">Coming {{ $book->release_date }}</p> --}}
                                    <div class="book-release-info">
                                        <span class="release-badge {{ $book->status }}">
                                            @if($book->status == 'pre-order')
                                                Pre-order Now
                                            @elseif($book->status == 'published')
                                                Buy Now
                                            @else
                                                Coming Soon
                                            @endif
                                        </span>
                                        <p class="release-date">{{ $book->release_date }}</p>
                                    </div>
                                    {{-- <a href="{{ route('books.show', $book->slug) }}" class="btn">Get Now</a> --}}
                                    <a href="{{ route('books.show', $book->slug) }}" class="btn">
                                        @if($book->status == 'pre-order')
                                            Pre-order Now
                                        @elseif($book->status == 'published')
                                            Buy Now
                                        @else
                                            Learn More
                                        @endif
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @else
                    <!-- Fallback example books if no data is available -->
                    <div class="col-lg-4 col-md-6 mb-5">
                        <div class="book-card">
                            <div class="book-cover">
                                <img src="{{ asset('images/books/book1.jpg') }}" alt="Book 1 - The Awakening">
                            </div>
                            <div class="book-info">
                                <h3>Book 1: The Awakening</h3>
                                <p class="release-date">Coming Spring 2025</p>
                                <a href="#" class="btn">Get Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-5">
                        <div class="book-card">
                            <div class="book-cover">
                                <img src="{{ asset('images/books/book2.jpg') }}" alt="Book 2 - The Quest">
                            </div>
                            <div class="book-info">
                                <h3>Book 2: The Quest</h3>
                                <p class="release-date">Coming Fall 2025</p>
                                <a href="#" class="btn">Discover More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-5">
                        <div class="book-card">
                            <div class="book-cover">
                                <img src="{{ asset('images/books/book3.jpg') }}" alt="Book 3 - The Battle">
                            </div>
                            <div class="book-info">
                                <h3>Book 3: The Battle</h3>
                                <p class="release-date">Coming Spring 2026</p>
                                <a href="#" class="btn">Discover More</a>
                            </div>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </section>

    <!-- Interactive World Map Section -->
    <section class="world-map" id="map-section">
        <div class="container">
            <h2 class="section-title">Discover the Magical World of Pagalan</h2>
            <div class="map-wrapper">
                <img src="{{ asset('images/map/PagalanMap.jpg') }}" alt="World of Pagalan Map" class="interactive-map">
                <div class="map-overlay">
                    <a href="{{ route('world') }}" class="btn-glow">Explore HD Maps</a>
                </div>
            </div>
        </div>
    </section>


    <!-- Video Trailer Section -->
    <section class="video-trailer" id="trailer-section">
        <div class="container">
            <h2 class="section-title">Book Trailer</h2>
            <p class="section-subtitle">Experience the world of Pagalan come alive</p>

            <div class="trailer-wrapper">
                <div class="trailer-container">
                    <div class="video-thumbnail" id="video-thumbnail">
                        <img src="{{ asset('images/characters/bannerCharacters.jpg') }}" alt="Pagalan Chronicles Trailer">
                        <div class="play-button" id="play-button">
                             <i class="fas fa-play"></i>
                        </div>
                    </div>
                    <div class="video-player" id="video-player">
                        <iframe id="trailer-iframe" src="https://www.youtube.com/embed/Ay2Ii4QUOGg?si=r_QrluQ1icDskF6-"
                            frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                    </div>
                </div>
                <div class="trailer-info">
                    <h3>The Pagalan Chronicles: Official Trailer</h3>
                    <p>Step into a world where magic flows through ancient forests, forgotten kingdoms await rediscovery,
                        and prophesied heroes emerge from the shadows. This exclusive trailer offers a glimpse into the epic
                        adventure that awaits in The Pagalan Chronicles.</p>
                    <div class="trailer-features">
                        <div class="feature">
                            <i class="fas fa-dragon"></i>
                            <span>Mythical Creatures</span>
                        </div>
                        <div class="feature">
                            <i class="fas fa-hat-wizard"></i>
                            <span>Ancient Magic</span>
                        </div>
                        <div class="feature">
                            <i class="fas fa-crown"></i>
                            <span>Epic Battles</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Book Platforms Section -->
    <section class="book-platforms" id="platforms-section">
        <div class="container">
            <h2 class="section-title">Available On</h2>
            <p class="section-subtitle">Find The Pagalan Chronicles at your favorite retailer</p>

            <div class="platforms-container">
                <div class="platform-card" data-platform="amazon">
                    <div class="platform-logo">
                        {{-- <img src="{{ asset('images/platforms/amazon.png') }}" alt="Amazon"> --}}
                        <i class="fab fa-amazon" style="font-size: 3.5rem; color: #FF9900;"></i>
                    </div>
                    <h3>Amazon</h3>
                    <p>Available in Kindle, Paperback & Hardcover</p>
                    <div class="platform-hover">
                        <span class="discount-badge">10% OFF</span>
                        <a href="#book-section" class="platform-btn">Shop Now</a>
                    </div>
                </div>

                <div class="platform-card" data-platform="barnes">
                    <div class="platform-logo">
                        <img src="{{ asset('images/platforms/barnes.png') }}" alt="Barnes & Noble">
                    </div>
                    <h3>Barnes & Noble</h3>
                    <p>Exclusive B&N Edition with Bonus Chapter</p>
                    <div class="platform-hover">
                        <a href="#book-section" class="platform-btn">Shop Now</a>
                    </div>
                </div>

                <div class="platform-card" data-platform="bookshop">
                    <div class="platform-logo">
                        <i class="fa-solid fa-b" style="font-size: 3.5rem; color: #8e1bd1;"></i>
                        {{-- <img src="{{ asset('images/platforms/bookshop.png') }}" alt="Bookshop.org"> --}}
                    </div>
                    <h3>Bookshop.org</h3>
                    <p>Support your local independent bookstore</p>
                    <div class="platform-hover">
                        <a href="#book-section" class="platform-btn">Shop Now</a>
                    </div>
                </div>

                <div class="platform-card" data-platform="kobo">
                    <div class="platform-logo">
                        <img src="{{ asset('images/platforms/kobo.png') }}" alt="Kobo">
                    </div>
                    <h3>Kobo</h3>
                    <p>eBook & Audiobook formats available</p>
                    <div class="platform-hover">
                        <span class="discount-badge">FREE TRIAL</span>
                        <a href="#" class="platform-btn">Shop Now</a>
                    </div>
                </div>
            </div>

            {{-- <div class="indie-notice">
            <div class="indie-icon">
                <i class="fas fa-store"></i>
            </div>
            <div class="indie-text">
                <h4>Support Independent Bookstores</h4>
                <p>The Pagalan Chronicles is also available at independent bookstores worldwide. Request your copy at your local bookshop!</p>
                <a href="#" class="find-store-btn">Find a Store Near You</a>
            </div>
        </div> --}}
        </div>
    </section>

    <!-- Audiobook Section -->
    <section class="audiobook-section" id="audiobook-section">
        <div class="container">
            <h2 class="section-title">Audiobook Experience</h2>
            <p class="section-subtitle">Let the magic of Pagalan transport you through sound</p>

            <div class="audiobook-wrapper">
                <div class="audiobook-showcase">
                    <img src="{{ asset('images/characters/banner3.jpg') }}" alt="Pagalan Chronicles Audiobook"
                        class="audiobook-cover">

                    <div class="audio-player">
                        <div class="audio-title">
                            <h4>Sample: The Awakening - Chapter 1</h4>
                            <p>Narrated by <span class="narrator">James Westbrook</span></p>
                        </div>

                        <div class="audio-controls">
                            <div class="progress-container">
                                <div class="progress-bar" id="progress-bar">
                                    <div class="progress" id="progress"></div>
                                </div>
                                <div class="time-display">
                                    <span id="current-time">0:00</span>
                                    <span> / </span>
                                    <span id="duration">3:45</span>
                                </div>
                            </div>

                            <div class="control-buttons">
                                <button id="prev-btn" class="control-btn"><i class="fas fa-step-backward"></i></button>
                                <button id="play-audio-btn" class="control-btn play-btn"><i
                                        class="fas fa-play"></i></button>
                                <button id="next-btn" class="control-btn"><i class="fas fa-step-forward"></i></button>
                                <div class="volume-control">
                                    <i class="fas fa-volume-up"></i>
                                    <input type="range" id="volume" min="0" max="1" step="0.1"
                                        value="0.7">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="audiobook-info">
                    <h3>Listen to the Adventure</h3>
                    <p>Immerse yourself in the world of Pagalan with our professionally narrated audiobooks. Perfect for
                        experiencing the epic adventure during your commute, workout, or anytime you want to be transported
                        to another world.</p>

                    <div class="audiobook-features">
                        <div class="feature">
                            <i class="fas fa-headphones-alt"></i>
                            <span>Professional Narration</span>
                        </div>
                        <div class="feature">
                            <i class="fas fa-music"></i>
                            <span>Immersive Sound Effects</span>
                        </div>
                        <div class="feature">
                            <i class="fas fa-mobile-alt"></i>
                            <span>Available on All Devices</span>
                        </div>
                    </div>

                    <div class="audiobook-platforms">
                        <h4>Available On:</h4>
                        <div class="platform-logos">
                            <a href="#" class="platform-logo"><img
                                    src="{{ asset('images/platforms/audible.jpg') }}" alt="Audible"></a>
                            <a href="#" class="platform-logo"><img
                                    src="{{ asset('images/platforms/apple-books.png') }}" alt="Apple Books"></a>
                            <a href="#" class="platform-logo"><img
                                    src="{{ asset('images/platforms/google-play.png') }}" alt="Google Play"></a>
                        </div>
                    </div>

                    {{-- <a href="{{ route('audiobooks') }}" class="btn audiobook-btn">Explore All Audiobooks</a> --}}
                </div>
            </div>
        </div>
    </section>


   <x-adventure-subscribe  />

    <!-- Author Quote with Animation -->
    <section class="author-quote">
        <div class="container">
            <div class="quote-container">
                <div class="author-image">
                    <img src="{{ asset('images/author/author.jpg') }}" alt="Andrew Houlston">
                </div>
                <blockquote>
                    <p>"If we can stand together through adversity, no matter how severe that is, then there is always hope
                        that the glimmer becomes a beacon of light that outshines even the bleakest moments."</p>
                    <cite>- Andrew Houlston, Author of The Pagalan Chronicles</cite>
                </blockquote>
            </div>
        </div>
    </section>
@endsection

@section('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Initialize AOS animation library if available
            if (typeof AOS !== 'undefined') {
                AOS.init({
                    duration: 1200,
                    once: false,
                    mirror: true,
                    offset: 120,
                    easing: 'ease-out-cubic',
                    delay: 100
                });
                console.log('AOS initialized successfully');
            } else {
                console.warn('AOS library not found. Applying fallback animations.');
                applyFallbackAnimations();
            }

            // Interactive book cards with 3D effect
            const bookCards = document.querySelectorAll('.book-card');
            bookCards.forEach(card => {
                card.addEventListener('mousemove', function(e) {
                    const cardRect = card.getBoundingClientRect();
                    const cardCenterX = cardRect.left + cardRect.width / 2;
                    const cardCenterY = cardRect.top + cardRect.height / 2;
                    const mouseX = e.clientX - cardCenterX;
                    const mouseY = e.clientY - cardCenterY;

                    const rotateY = mouseX * 0.01;
                    const rotateX = -mouseY * 0.01;

                    card.style.transform =
                        `perspective(1000px) rotateX(${rotateX}deg) rotateY(${rotateY}deg) translateY(-5px)`;
                });

                card.addEventListener('mouseleave', function() {
                    card.style.transform =
                        'perspective(1000px) rotateX(0) rotateY(0) translateY(0)';
                });
            });

            // Helper function for fallback animations
            function applyFallbackAnimations() {
                // Add animate.css classes if needed
                const animatedElements = document.querySelectorAll('.page-title, .page-subtitle, .cta-buttons');
                animatedElements.forEach((el, index) => {
                    el.style.opacity = '0';
                    setTimeout(() => {
                        el.style.opacity = '1';
                        el.style.transition = 'opacity 0.5s ease-in-out';
                    }, index * 300);
                });

                // Add visibility to book cards with delay
                const bookCards = document.querySelectorAll('.book-card');
                bookCards.forEach((card, index) => {
                    card.style.opacity = '1';
                    card.style.transform = 'translateY(30px)';
                    setTimeout(() => {
                        card.style.opacity = '1';
                        card.style.transform = 'translateY(0)';
                        // card.style.transition = 'opacity 0.5s ease-in-out, transform 0.5s ease-in-out';
                    }, index * 1000);
                });
            }

            // Check if Particles.js is available and initialize
            if (typeof particlesJS !== 'undefined') {
                try {
                    particlesJS('particles-js', {
                        "particles": {
                            "number": {
                                "value": 120,
                                "density": {
                                    "enable": true,
                                    "value_area": 800
                                }
                            },
                            "color": {
                                "value": "#a395e9"
                            },
                            "shape": {
                                "type": "circle",
                                "stroke": {
                                    "width": 0,
                                    "color": "#000000"
                                }
                            },
                            "opacity": {
                                "value": 0.5,
                                "random": true,
                                "anim": {
                                    "enable": true,
                                    "speed": 1,
                                    "opacity_min": 0.1,
                                    "sync": false
                                }
                            },
                            "size": {
                                "value": 3,
                                "random": true,
                                "anim": {
                                    "enable": true,
                                    "speed": 2,
                                    "size_min": 0.1,
                                    "sync": false
                                }
                            },
                            "line_linked": {
                                "enable": true,
                                "distance": 150,
                                "color": "#ffffff",
                                "opacity": 0.4,
                                "width": 1
                            },
                            "move": {
                                "enable": true,
                                "speed": 6,
                                "direction": "none",
                                "random": false,
                                "straight": false,
                                "out_mode": "out",
                                "bounce": false,
                                "attract": {
                                    "enable": false,
                                    "rotateX": 600,
                                    "rotateY": 1200
                                }
                            }
                        },
                        "interactivity": {
                            "detect_on": "canvas",
                            "events": {
                                "onhover": {
                                    "enable": true,
                                    "mode": "repulse"
                                },
                                "onclick": {
                                    "enable": true,
                                    "mode": "push"
                                },
                                "resize": true
                            },
                            "modes": {
                                "grab": {
                                    "distance": 400,
                                    "line_linked": {
                                        "opacity": 1
                                    }
                                },
                                "bubble": {
                                    "distance": 400,
                                    "size": 40,
                                    "duration": 2,
                                    "opacity": 8,
                                    "speed": 3
                                },
                                "repulse": {
                                    "distance": 200,
                                    "duration": 0.4
                                },
                                "push": {
                                    "particles_nb": 4
                                },
                                "remove": {
                                    "particles_nb": 2
                                }
                            }
                        },
                        "retina_detect": true
                    });
                    console.log('Particles.js initialized successfully');
                } catch (error) {
                    console.error('Error initializing Particles.js:', error);
                }
            } else {
                console.warn('Particles.js library not found. Skipping particle effects.');
            }
        });
    </script>

    {{-- video trailler and audio book js   --}}
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Video Trailer Player Functionality
            const videoThumbnail = document.getElementById('video-thumbnail');
            const videoPlayer = document.getElementById('video-player');
            const trailerIframe = document.getElementById('trailer-iframe');
            const playButton = document.getElementById('play-button');

            if (videoThumbnail && videoPlayer && trailerIframe) {
                // Set your YouTube trailer URL here
                const trailerUrl = 'https://www.youtube.com/embed/Ay2Ii4QUOGg?si=r_QrluQ1icDskF6-';

                videoThumbnail.addEventListener('click', function() {
                    // Set the iframe src to load the video
                    trailerIframe.src = trailerUrl;

                    // Hide the thumbnail and show the video player
                    videoThumbnail.style.opacity = '0';
                    setTimeout(() => {
                        videoThumbnail.style.display = 'none';
                        videoPlayer.classList.add('active');
                    }, 500);
                });
            }

            // Audiobook Player Functionality
            const audioElement = new Audio('{{ asset('audio/sound-1.mp3') }}');
            const playAudioBtn = document.getElementById('play-audio-btn');
            const progressBar = document.getElementById('progress');
            const progressContainer = document.getElementById('progress-bar');
            const currentTimeEl = document.getElementById('current-time');
            const durationEl = document.getElementById('duration');
            const volumeControl = document.getElementById('volume');
            const prevBtn = document.getElementById('prev-btn');
            const nextBtn = document.getElementById('next-btn');

            // Sample audio tracks
            const audioTracks = [{
                    title: 'Sample: The Awakening - Chapter 1',
                    narrator: 'James Westbrook',
                    src: '{{ asset('audio/sound-1.mp3') }}'
                },
                {
                    title: 'Sample: The Quest - Prologue',
                    narrator: 'James Westbrook',
                    src: '{{ asset('audio/sound-1.mp3') }}'
                },
                {
                    title: 'Sample: The Battle - The Fallen Kingdom',
                    narrator: 'James Westbrook',
                    src: '{{ asset('audio/sound-1.mp3') }}'
                }
            ];

            let currentTrackIndex = 0;

            // Initialize audio player if elements exist
            if (playAudioBtn && progressBar && progressContainer) {
                // Set initial volume
                if (volumeControl) {
                    audioElement.volume = volumeControl.value;

                    volumeControl.addEventListener('input', function() {
                        audioElement.volume = this.value;
                    });
                }

                // Play/Pause functionality
                playAudioBtn.addEventListener('click', function() {
                    if (audioElement.paused) {
                        audioElement.play();
                        playAudioBtn.innerHTML = '<i class="fas fa-pause"></i>';
                    } else {
                        audioElement.pause();
                        playAudioBtn.innerHTML = '<i class="fas fa-play"></i>';
                    }
                });

                // Update progress bar
                audioElement.addEventListener('timeupdate', updateProgress);

                // Click on progress bar to seek
                progressContainer.addEventListener('click', function(e) {
                    const width = this.clientWidth;
                    const clickX = e.offsetX;
                    const duration = audioElement.duration;

                    audioElement.currentTime = (clickX / width) * duration;
                });

                // Previous track
                if (prevBtn) {
                    prevBtn.addEventListener('click', function() {
                        currentTrackIndex = (currentTrackIndex - 1 + audioTracks.length) % audioTracks
                            .length;
                        loadTrack(currentTrackIndex);
                    });
                }

                // Next track
                if (nextBtn) {
                    nextBtn.addEventListener('click', function() {
                        currentTrackIndex = (currentTrackIndex + 1) % audioTracks.length;
                        loadTrack(currentTrackIndex);
                    });
                }

                // Track ended
                audioElement.addEventListener('ended', function() {
                    playAudioBtn.innerHTML = '<i class="fas fa-play"></i>';
                    progressBar.style.width = '0%';
                    currentTimeEl.textContent = '0:00';

                    // Auto play next track option
                    // currentTrackIndex = (currentTrackIndex + 1) % audioTracks.length;
                    // loadTrack(currentTrackIndex);
                });

                // Load duration when metadata is loaded
                audioElement.addEventListener('loadedmetadata', function() {
                    const minutes = Math.floor(audioElement.duration / 60);
                    const seconds = Math.floor(audioElement.duration % 60).toString().padStart(2, '0');
                    durationEl.textContent = `${minutes}:${seconds}`;
                });

                // Initial load of first track
                // Uncomment this if you have actual audio files
                // loadTrack(currentTrackIndex);
            }

            // Helper function to update progress bar
            function updateProgress() {
                const duration = audioElement.duration;
                const currentTime = audioElement.currentTime;

                if (duration) {
                    // Update progress bar width
                    const progressPercent = (currentTime / duration) * 100;
                    progressBar.style.width = `${progressPercent}%`;

                    // Update current time display
                    const minutes = Math.floor(currentTime / 60);
                    const seconds = Math.floor(currentTime % 60).toString().padStart(2, '0');
                    currentTimeEl.textContent = `${minutes}:${seconds}`;
                }
            }

            // Helper function to load a track
            function loadTrack(trackIndex) {
                const track = audioTracks[trackIndex];

                // Update audio source
                audioElement.src = track.src;
                audioElement.load();

                // Update display info
                document.querySelector('.audio-title h4').textContent = track.title;
                document.querySelector('.narrator').textContent = track.narrator;

                // Reset UI
                progressBar.style.width = '0%';
                currentTimeEl.textContent = '0:00';
                playAudioBtn.innerHTML = '<i class="fas fa-play"></i>';

                // Auto play option (uncomment if desired)
                // audioElement.play();
                // playAudioBtn.innerHTML = '<i class="fas fa-pause"></i>';
            }

            // Add 3D tilt effect to audiobook cover
            const audiobookCover = document.querySelector('.audiobook-cover');
            if (audiobookCover) {
                audiobookCover.addEventListener('mousemove', function(e) {
                    const boundingRect = this.getBoundingClientRect();
                    const centerX = boundingRect.left + boundingRect.width / 2;
                    const centerY = boundingRect.top + boundingRect.height / 2;

                    const mouseX = e.clientX - centerX;
                    const mouseY = e.clientY - centerY;

                    const rotateY = mouseX * 0.05;
                    const rotateX = -mouseY * 0.05;

                    this.style.transform =
                        `perspective(1000px) rotateX(${rotateX}deg) rotateY(${rotateY}deg) scale(1.05)`;
                });

                audiobookCover.addEventListener('mouseleave', function() {
                    this.style.transform = 'perspective(1000px) rotateX(0) rotateY(0) scale(1)';
                });
            }
        });
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Platform cards hover effect enhancement
            const platformCards = document.querySelectorAll('.platform-card');

            platformCards.forEach(card => {
                card.addEventListener('mouseenter', function() {
                    // Create sparkle effect
                    const sparkle = document.createElement('div');
                    sparkle.classList.add('sparkle-effect');
                    this.appendChild(sparkle);

                    setTimeout(() => {
                        sparkle.remove();
                    }, 1000);
                });

                // Optional: Add click tracking
                card.addEventListener('click', function(e) {
                    if (e.target.classList.contains('platform-btn')) {
                        const platform = this.getAttribute('data-platform');
                        // You can add analytics tracking here
                        console.log(`Clicked on ${platform} platform`);
                    }
                });
            });

            // Add this additional CSS for the sparkle effect
            const style = document.createElement('style');
            style.textContent = `
            .sparkle-effect {
                position: absolute;
                width: 100%;
                height: 100%;
                top: 0;
                left: 0;
                background: radial-gradient(circle, rgba(255,255,255,0.8) 0%, rgba(255,255,255,0) 70%);
                opacity: 0;
                animation: sparkle 1s ease-out forwards;
                z-index: 1;
                pointer-events: none;
            }
            
            @keyframes sparkle {
                0% { transform: scale(0); opacity: 0.7; }
                100% { transform: scale(2); opacity: 0; }
            }
        `;
            document.head.appendChild(style);
        });
    </script>
@endsection



