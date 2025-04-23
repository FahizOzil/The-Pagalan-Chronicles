@extends('layouts.app')
@section('title', $book->title . ' - The Pagalan Chronicles')
@section('styles')
    <style>
         :root {
            --primary-color: #b97b06;
            --secondary-color: #1b78a7;
            --accent-color: #ffb81c;
            --dark-color: #1e1e2e;
            --light-color: #f8f9fa;
            --subtitle-color: #e79120;
            --text-color: #333;
            --heading-font: 'Cinzel', serif;
            --body-font: 'Lato', sans-serif;
            --transition: all 0.3s ease;
            --card-shadow: 0 8px 30px rgba(0, 0, 0, 0.12);
            --border-radius: 12px;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: var(--body-font);
            color: var(--text-color);
            background-color: var(--light-color);
            line-height: 1.6;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-family: var(--heading-font);
            font-weight: 700;
            margin-bottom: 1rem;
        }

        p {
            margin-bottom: 1rem;
        }

        .container {
            width: 100%;
            max-width: 1300px;
            margin: 0 auto;
            padding: 0 20px;
        }

        .btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: 0.8rem 1.5rem;
            border-radius: 50px;
            font-weight: 600;
            transition: var(--transition);
            border: none;
            cursor: pointer;
            text-decoration: none;
            gap: 8px;
        }

        .btn-primary {
            background-color: var(--primary-color);
            color: white;
        }

        .btn-primary:hover {
            background-color: var(--secondary-color);
            transform: translateY(-3px);
        }

        .btn-outline {
            background: transparent;
            border: 2px solid var(--primary-color);
            color: var(--primary-color);
        }

        .btn-outline:hover {
            background-color: var(--primary-color);
            color: white;
        }

        .btn-sm {
            padding: 0.5rem 1rem;
            font-size: 0.9rem;
        }

        /* Hero Section */
        .hero-section {
            min-height: 85vh;
            display: flex;
            align-items: center;
            position: relative;
            background: linear-gradient(135deg, var(--dark-color) 0%, #2d2d44 100%);
            overflow: hidden;
        }

        .hero-bg {
            position: absolute;
            right: 0;
            top: 0;
            height: 100%;
            width: 50%;
            background-size: cover;
            background-position: center;
            opacity: 0.7;
            mask-image: linear-gradient(to left, rgba(0, 0, 0, 1), rgba(0, 0, 0, 0));
        }

        .hero-content {
            width: 100%;
            position: relative;
            z-index: 2;
            padding: 3rem 0;
        }

        .hero-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 3rem;
            align-items: center;
        }

        .book-cover-wrapper {
            position: relative;
            transform-style: preserve-3d;
            perspective: 1000px;
            max-width: 400px;
            margin: 0 auto;
        }

        .book-cover {
            width: 100%;
            border-radius: 10px;
            box-shadow: 0 20px 50px rgba(0, 0, 0, 0.3);
            transform: rotateY(10deg);
            transition: transform 0.5s ease;
        }

        .book-cover-wrapper:hover .book-cover {
            transform: rotateY(0deg);
        }

        .book-shine {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg,
                    rgba(255, 255, 255, 0.1) 0%,
                    rgba(255, 255, 255, 0) 60%);
            border-radius: 10px;
        }

        .book-details {
            color: white;
        }

        .book-title {
            font-size: 3.2rem;
            line-height: 1.1;
            margin-bottom: 0.5rem;
            background: linear-gradient(to right, #fff, var(--accent-color));
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
        }

        .book-subtitle {
            font-size: 1.2rem;
            color: var(--subtitle-color);
            margin-bottom: 1.5rem;
            font-family: var(--heading-font);
        }

        .book-meta {
            display: flex;
            flex-wrap: wrap;
            gap: 1.5rem;
            margin-bottom: 2rem;
        }

        .meta-item {
            display: flex;
            align-items: center;
            gap: 8px;
            font-size: 0.95rem;
            color: rgba(255, 255, 255, 0.9);
        }

        /* Purchase Options */
        .purchase-container {
            background-color: white;
            border-radius: var(--border-radius);
            padding: 2rem;
            box-shadow: var(--card-shadow);
            margin-top: 2rem;
        }

        .format-tabs {
            display: flex;
            gap: 1rem;
            border-bottom: 1px solid rgba(0, 0, 0, 0.1);
            margin-bottom: 1.5rem;
        }

        .format-tab {
            padding: 0.8rem 1.2rem;
            cursor: pointer;
            font-weight: 600;
            position: relative;
            color: #777;
            transition: var(--transition);
        }

        .format-tab.active {
            color: var(--primary-color);
        }

        .format-tab.active::after {
            content: '';
            position: absolute;
            bottom: -1px;
            left: 0;
            width: 100%;
            height: 3px;
            background-color: var(--primary-color);
        }

        .format-content {
            display: none;
        }

        .format-content.active {
            display: block;
        }

        .price-box {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 1.5rem;
        }

        .price {
            font-size: 2rem;
            font-weight: 700;
            color: var(--dark-color);
        }

        .retailer-buttons {
            display: flex;
            gap: 1rem;
            flex-wrap: wrap;
        }

        .btn-retailer {
            padding: 0.7rem 1.5rem;
            border-radius: 50px;
            display: inline-flex;
            align-items: center;
            gap: 8px;
            text-decoration: none;
            font-weight: 600;
            transition: var(--transition);
        }

        .amazon {
            background-color: #FF9900;
            color: black;
        }

        .amazon:hover {
            background-color: #e08600;
            transform: translateY(-3px);
        }

        .bn {
            background-color: #295A33;
            color: white;
        }

        .bn:hover {
            background-color: #1e4326;
            transform: translateY(-3px);
        }

        .kobo {
            background-color: #bf0000;
            color: white;
        }

        .kobo:hover {
            background-color: #a10000;
            transform: translateY(-3px);
        }

        /* Overview Section */
        .section {
            padding: 5rem 0;
        }

        .section-title {
            font-size: 2.2rem;
            margin-bottom: 2rem;
            text-align: center;
            position: relative;
            padding-bottom: 1rem;
        }

        .section-title::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 3px;
            background-color: var(--primary-color);
        }

        .overview-grid {
            display: grid;
            grid-template-columns: 2fr 1fr;
            gap: 3rem;
        }

        .content-card {
            background-color: white;
            border-radius: var(--border-radius);
            box-shadow: var(--card-shadow);
            padding: 2.5rem;
            margin-bottom: 2rem;
        }

        .content-title {
            font-size: 1.8rem;
            margin-bottom: 1.5rem;
            color: var(--primary-color);
        }

        .book-description {
            font-size: 1.05rem;
            line-height: 1.7;
        }

        /* Characters Grid */
        .characters-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
            gap: 2rem;
            margin-top: 2rem;
        }

        .character-card {
            background-color: white;
            border-radius: var(--border-radius);
            overflow: hidden;
            box-shadow: var(--card-shadow);
            transition: var(--transition);
        }

        .character-card:hover {
            transform: translateY(-10px);
        }

        .character-image {
            height: 200px;
            position: relative;
            overflow: hidden;
        }

        .character-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: var(--transition);
        }

        .character-card:hover .character-image img {
            transform: scale(1.1);
        }

        .character-info {
            padding: 1.5rem;
        }

        .character-info h3 {
            font-size: 1.4rem;
            margin-bottom: 0.3rem;
        }

        .character-role {
            color: var(--subtitle-color);
            font-size: 0.9rem;
            margin-bottom: 1rem;
            font-weight: 600;
        }

        /* Sidebar */
        .sidebar {
            position: sticky;
            top: 2rem;
        }

        .sidebar-widget {
            background-color: white;
            border-radius: var(--border-radius);
            padding: 1.8rem;
            margin-bottom: 2rem;
            box-shadow: var(--card-shadow);
        }

        .widget-title {
            font-size: 1.3rem;
            margin-bottom: 1.2rem;
            padding-bottom: 0.8rem;
            border-bottom: 2px solid rgba(0, 0, 0, 0.07);
            color: var(--primary-color);
        }

        .author-info {
            display: flex;
            gap: 1rem;
            align-items: center;
        }

        .author-image {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            overflow: hidden;
        }

        .author-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .author-bio h4 {
            margin-bottom: 0.5rem;
        }

        .author-bio p {
            margin-bottom: 1rem;
            font-size: 0.9rem;
        }

        .quote-content {
            padding: 1.5rem;
            background-color: #f7f7f7;
            border-left: 4px solid var(--accent-color);
            font-style: italic;
            position: relative;
        }

        .quote-content::before {
            content: '"';
            font-size: 4rem;
            color: rgba(0, 0, 0, 0.1);
            position: absolute;
            top: -15px;
            left: 10px;
            font-family: Georgia, serif;
        }

        .quote-content p {
            position: relative;
            z-index: 1;
        }

        .map-preview {
            position: relative;
            border-radius: var(--border-radius);
            overflow: hidden;
        }

        .map-thumbnail {
            width: 100%;
            display: block;
            transition: var(--transition);
            border-radius: var(--border-radius);
        }

        .map-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.4);
            display: flex;
            align-items: center;
            justify-content: center;
            opacity: 0;
            transition: var(--transition);
        }

        .map-preview:hover .map-overlay {
            opacity: 1;
        }

        .map-preview:hover .map-thumbnail {
            transform: scale(1.05);
        }

        /* Quote Slider */
        .quotes-section {
            padding: 6rem 0;
            background: linear-gradient(135deg, var(--dark-color) 0%, #2d2d44 100%);
            color: white;
            position: relative;
            overflow: hidden;
        }

        .quotes-bg {
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            background-size: cover;
            background-position: center;
            opacity: 0.1;
        }

        .quotes-container {
            position: relative;
            z-index: 2;
            max-width: 800px;
            margin: 0 auto;
        }

        .quote-slide {
            text-align: center;
            padding: 2rem;
        }

        .quote-text {
            font-size: 1.8rem;
            font-family: var(--heading-font);
            font-weight: 500;
            line-height: 1.4;
            margin-bottom: 1.5rem;
        }

        .quote-character {
            font-size: 1.1rem;
            color: var(--accent-color);
        }

        /* Subscription Section */
        .subscribe-section {
            padding: 5rem 0;
            background-color: white;
        }

        .subscribe-container {
            max-width: 900px;
            margin: 0 auto;
            text-align: center;
        }

        .subscribe-title {
            font-size: 2.2rem;
            margin-bottom: 1rem;
        }

        .subscribe-subtitle {
            font-size: 1.1rem;
            max-width: 600px;
            margin: 0 auto 2rem;
        }

        .subscribe-form {
            display: flex;
            max-width: 500px;
            margin: 0 auto;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            border-radius: 50px;
            overflow: hidden;
        }

        .subscribe-input {
            flex: 1;
            padding: 1.2rem 1.5rem;
            border: none;
            font-size: 1rem;
            background-color: #f7f7f7;
        }

        .subscribe-input:focus {
            outline: none;
        }

        .subscribe-button {
            background-color: var(--primary-color);
            color: white;
            border: none;
            padding: 0 2rem;
            font-weight: 600;
            cursor: pointer;
            transition: var(--transition);
        }

        .subscribe-button:hover {
            background-color: var(--secondary-color);
        }

        .subscribe-footer {
            margin-top: 1.5rem;
            font-size: 0.9rem;
            color: #777;
        }

        /* Back to Top Button */
        .back-to-top {
            position: fixed;
            bottom: 2rem;
            right: 2rem;
            width: 50px;
            height: 50px;
            background-color: var(--primary-color);
            color: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
            opacity: 0;
            transform: translateY(20px);
            transition: var(--transition);
            z-index: 10;
        }

        .back-to-top.visible {
            opacity: 1;
            transform: translateY(0);
        }

        /* Responsive */
        @media (max-width: 992px) {
            .hero-grid {
                grid-template-columns: 1fr;
                gap: 2rem;
            }

            .book-cover-wrapper {
                max-width: 300px;
            }

            .overview-grid {
                grid-template-columns: 1fr;
            }

            .sidebar {
                position: static;
            }

            .book-title {
                font-size: 2.5rem;
            }
        }

        @media (max-width: 768px) {
            .section {
                padding: 3rem 0;
            }

            .characters-grid {
                grid-template-columns: repeat(auto-fill, minmax(220px, 1fr));
            }

            .format-tabs {
                overflow-x: auto;
                white-space: nowrap;
                padding-bottom: 10px;
            }

            .quote-text {
                font-size: 1.4rem;
            }
        }

        @media (max-width: 576px) {
            .book-cover-wrapper {
                max-width: 220px;
            }

            .book-title {
                font-size: 2rem;
            }

            .content-card {
                padding: 1.5rem;
            }

            .subscribe-form {
                flex-direction: column;
                box-shadow: none;
                border-radius: 0;
            }

            .subscribe-input {
                border-radius: 50px;
                margin-bottom: 1rem;
                box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            }

            .subscribe-button {
                width: 100%;
                border-radius: 50px;
                padding: 1rem;
            }
        }
    </style>
@endsection

@section('content')
    <!-- Hero Section -->
<section class="hero-section">
    <div class="hero-bg" style="background-image: url('{{ asset($book->cover_image) }}')"></div>
    <div class="container">
        <div class="hero-content">
            <div class="hero-grid">
                <div class="book-cover-wrapper" data-aos="fade-right">
                    <img src="{{ asset($book->cover_image) }}" alt="{{ $book->title }} book cover" class="book-cover">
                    <div class="book-shine"></div>
                </div>
                <div class="book-details" data-aos="fade-left">
                    <h1 class="book-title">{{ $book->title }}</h1>
                    <div class="book-subtitle">Book {{ $book->book_number }} of The Pagalan Chronicles</div>
                    <div class="book-meta">
                        <div class="meta-item">
                            <i class="fas fa-calendar" aria-hidden="true"></i>
                            <span>Released: {{ $book->release_date }}</span>
                        </div>
                        <div class="meta-item">
                            <i class="fas fa-book" aria-hidden="true"></i>
                            <span>{{ $book->page_count }} Pages</span>
                        </div>
                        <div class="meta-item">
                            <i class="fas fa-star" aria-hidden="true"></i>
                            <span>{{ $book->category ?? 'Fantasy Adventure' }}</span>
                        </div>
                    </div>
                    <div class="purchase-container">
                        <div class="format-tabs">
                            <div class="format-tab active" data-format="hardback">Hardback</div>
                            <div class="format-tab" data-format="softback">Softback</div>
                            <div class="format-tab" data-format="ebook">eBook</div>
                        </div>
                        <div class="format-content active" id="hardback-content">
                            <div class="price-box">
                                <span class="price">£24</span>
                                <div class="retailer-buttons">
                                    <a href="{{ $book->amazon_link ?? '#' }}" class="btn-retailer amazon"
                                        target="_blank" rel="noopener noreferrer">
                                        <i class="fab fa-amazon" aria-hidden="true"></i> Amazon
                                    </a>
                                    <a href="{{ $book->barnes_noble_link ?? '#' }}" class="btn-retailer bn"
                                        target="_blank" rel="noopener noreferrer">
                                        <i class="fas fa-book" aria-hidden="true"></i> Barnes & Noble
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="format-content" id="softback-content">
                            <div class="price-box">
                                <span class="price">£14</span>
                                <div class="retailer-buttons">
                                    <a href="{{ $book->amazon_link ?? '#' }}" class="btn-retailer amazon"
                                        target="_blank" rel="noopener noreferrer">
                                        <i class="fab fa-amazon" aria-hidden="true"></i> Amazon
                                    </a>
                                    <a href="{{ $book->barnes_noble_link ?? '#' }}" class="btn-retailer bn"
                                        target="_blank" rel="noopener noreferrer">
                                        <i class="fas fa-book" aria-hidden="true"></i> Barnes & Noble
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="format-content" id="ebook-content">
                            <div class="price-box">
                                <span class="price">£7.99</span>
                                <div class="retailer-buttons">
                                    <a href="{{ $book->amazon_link ?? '#' }}" class="btn-retailer amazon"
                                        target="_blank" rel="noopener noreferrer">
                                        <i class="fab fa-amazon" aria-hidden="true"></i> Amazon
                                    </a>
                                    <a href="{{ $book->kobo_link ?? '#' }}" class="btn-retailer kobo" target="_blank"
                                        rel="noopener noreferrer">
                                        <i class="fas fa-tablet-alt" aria-hidden="true"></i> Kobo
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Overview Section -->
<section class="section">
    <div class="container">
        <div class="overview-grid">
            <div class="main-content">
                <!-- Book Description -->
                <div class="content-card" data-aos="fade-up">
                    <h2 class="content-title">Overview</h2>
                    <div class="book-description">
                        {!! $book->description !!}
                    </div>
                </div>

                <!-- Characters Grid -->
                <div class="content-card" data-aos="fade-up" data-aos-delay="200">
                    <h2 class="content-title">Key Characters</h2>
                    <div class="characters-grid">
                        @php
                            $characters = [
                                [
                                    'name' => 'Morganuke',
                                    'role' => 'The Guardian',
                                    'description' =>
                                        'A wise and powerful guardian of the realm with ancient knowledge of Pagalans secrets.',
                                    'image' => 'Morganuke2.jpg',
                                ],
                                [
                                    'name' => 'Eldrin',
                                    'role' => 'The Seeker',
                                    'description' =>
                                        'A brave adventurer searching for the truth behind the realms mysterious prophecies.',
                                    'image' => 'panel.jpg',
                                ],
                                [
                                    'name' => 'Lyra',
                                    'role' => 'The Enchantress',
                                    'description' =>
                                        'A skilled enchantress with a mysterious past and command over the elemental forces.',
                                    'image' => 'bannerCharacters.jpg',
                                ],
                                [
                                    'name' => 'Thorne',
                                    'role' => 'The Warrior',
                                    'description' =>
                                        'A fierce warrior with unmatched strength and loyalty to the realm of Pagalan.',
                                    'image' => 'banner3.jpg',
                                ],
                            ];
                        @endphp

                        @foreach ($characters as $character)
                            <div class="character-card" data-aos="fade-up" data-aos-delay="{{ $loop->index * 100 }}">
                                <div class="character-image">
                                    <img src="{{ asset('images/characters/' . ($character['image'] ?? 'default-character.png')) }}"
                                        alt="{{ $character['name'] }}" loading="lazy">
                                </div>
                                <div class="character-info">
                                    <h3>{{ $character['name'] }}</h3>
                                    <div class="character-role">{{ $character['role'] }}</div>
                                    <p>{{ $character['description'] }}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

            <!-- Sidebar -->
            <div class="sidebar" data-aos="fade-left">
                <!-- Author Widget -->
                <div class="sidebar-widget">
                    <h3 class="widget-title">About the Author</h3>
                    <div class="author-info">
                        <div class="author-image">
                            <img src="{{ asset('images/author/author.jpg') }}" alt="Andrew Houlston" loading="lazy">
                        </div>
                        <div class="author-bio">
                            <h4>Andrew Houlston</h4>
                            <p>Creator of the world of Pagalan and author of The Pagalan Chronicles series.</p>
                            <a href="{{ route('author') }}" class="btn btn-sm btn-outline">Learn More</a>
                        </div>
                    </div>
                </div>

                <!-- Quote Widget -->
                <div class="sidebar-widget">
                    <h3 class="widget-title">From the Pages</h3>
                    <div class="quote-content">
                        <p>"If we can stand together through adversity, no matter how severe that is, then there is
                            always hope..."</p>
                        <cite>- The Pagalan Chronicles</cite>
                    </div>
                </div>

                <!-- Map Widget -->
                <div class="sidebar-widget">
                    <h3 class="widget-title">Explore Pagalan</h3>
                    <div class="map-preview">
                        <img src="{{ asset('images/map/PagalanMap.jpg') }}" alt="Map of Pagalan"
                            class="map-thumbnail" loading="lazy">
                        <div class="map-overlay">
                            <a href="{{ route('world') }}" class="btn btn-sm btn-primary">View Maps</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Quote Slider Section -->
<section class="quotes-section">
    <div class="quotes-bg" style="background-image: url('{{ asset('images/author/author.jpg') }}')"></div>
    <div class="container">
        <div class="quotes-container" data-aos="fade-up">
            <div class="quote-slide">
                <div class="quote-text">"The darkness may be vast, but even the smallest light can guide the way to
                    salvation."</div>
                <div class="quote-character">— Morganuke, The Guardian</div>
            </div>
        </div>
    </div>
</section>

<!-- Subscription Section -->
<section class="subscribe-section" id="subscribe">
    <div class="container">
        <div class="subscribe-container" data-aos="fade-up">
            <h2 class="subscribe-title">Join the Adventure</h2>
            <p class="subscribe-subtitle">Subscribe to receive updates about release dates, special offers, and
                exclusive content from the world of Pagalan.</p>
            <form action="{{ route('subscribe') }}" method="POST" class="subscribe-form">
                @csrf
                <input type="email" name="email" placeholder="Your email address" required
                    class="subscribe-input">
                <button type="submit" class="subscribe-button">Subscribe</button>
            </form>
            <p class="subscribe-footer">By subscribing, you agree to receive updates about The Pagalan Chronicles.
            </p>
        </div>
    </div>
</section>

<!-- Back to Top Button -->
<div class="back-to-top" id="backToTop">
    <i class="fas fa-arrow-up"></i>
</div>
@endsection

@section('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Format tabs functionality
            const formatTabs = document.querySelectorAll('.format-tab');
            const formatContents = document.querySelectorAll('.format-content');

            formatTabs.forEach(tab => {
                tab.addEventListener('click', () => {
                    formatTabs.forEach(t => t.classList.remove('active'));
                    formatContents.forEach(c => c.classList.remove('active'));

                    tab.classList.add('active');
                    document.getElementById(`${tab.dataset.format}-content`).classList.add(
                        'active');
                });
            });

            // Back to top button functionality
            const backToTopBtn = document.getElementById('backToTop');

            window.addEventListener('scroll', () => {
                if (window.scrollY > 300) {
                    backToTopBtn.classList.add('visible');
                } else {
                    backToTopBtn.classList.remove('visible');
                }
            });
            backToTopBtn.addEventListener('click', () => {
                window.scrollTo({
                    top: 0,
                    behavior: 'smooth'
                });
            });
        });
    </script>
@endsection
