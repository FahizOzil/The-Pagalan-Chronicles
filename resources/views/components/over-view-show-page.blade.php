<style>
     /* Overview Section */
        .section {
            padding: 6rem 0;
            position: relative;
            background-color: var(--dark-bg);
        }

        .section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 1px;
            background: linear-gradient(to right, transparent, var(--accent-color), transparent);
        }

        .section-title {
            font-size: 2.5rem;
            margin-bottom: 3rem;
            text-align: center;
            position: relative;
            padding-bottom: 1.2rem;
            color: var(--text-primary);
            font-family: var(--heading-font);
        }

        .section-title::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 100px;
            height: 3px;
            background: linear-gradient(to right, transparent, var(--accent-color), transparent);
        }

        .overview-grid {
            display: grid;
            grid-template-columns: 2fr 1fr;
            gap: 3rem;
        }

        .content-card {
            background-color: var(--dark-card);
            border-radius: var(--border-radius);
            box-shadow: var(--card-shadow);
            padding: 2.8rem;
            margin-bottom: 2.5rem;
            border: 1px solid var(--dark-border);
            position: relative;
            overflow: hidden;
        }

        .content-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 3px;
            height: 100%;
            background: linear-gradient(to bottom, var(--accent-color), transparent);
        }

        .content-title {
            font-size: 1.9rem;
            margin-bottom: 1.8rem;
            color: var(--text-primary);
            position: relative;
            padding-bottom: 0.8rem;
            font-family: var(--heading-font);
        }

        .content-title::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 60px;
            height: 2px;
            background-color: var(--accent-color);
        }

        .book-description {
            font-size: 1.05rem;
            line-height: 1.8;
            color: var(--text-secondary);
        }

        /* Characters Grid */
        .characters-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
            gap: 2rem;
            margin-top: 2.5rem;
        }

        .character-card {
            background-color: rgba(37, 37, 37, 0.5);
            border-radius: var(--border-radius);
            overflow: hidden;
            box-shadow: var(--card-shadow);
            transition: var(--transition);
            border: 1px solid var(--dark-border);
            position: relative;
        }

        .character-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.4), 0 0 15px rgba(156, 93, 255, 0.1);
            border-color: var(--accent-color);
        }

        .character-image {
            height: 220px;
            position: relative;
            overflow: hidden;
        }

        .character-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: var(--transition);
            filter: brightness(0.85) saturate(1.2);
        }

        .character-card:hover .character-image img {
            transform: scale(1.1);
            filter: brightness(1) saturate(1.3);
        }

        .character-info {
            padding: 1.8rem;
            position: relative;
        }
         .character-info p{
            color: var(--text-secondary) !important;
        }

        .character-info h3 {
            font-size: 1.5rem;
            margin-bottom: 0.4rem;
            color: var(--text-primary);
            font-family: var(--heading-font);
        }

        .character-role {
            color: var(--accent-color);
            font-size: 0.95rem;
            margin-bottom: 1.2rem;
            font-weight: 600;
            letter-spacing: 1px;
            text-transform: uppercase;
        }

        /* Sidebar */
        .sidebar {
            position: sticky;
            top: 2rem;
        }

        .sidebar-widget {
            background-color: var(--dark-card);
            border-radius: var(--border-radius);
            padding: 2rem;
            margin-bottom: 2.5rem;
            box-shadow: var(--card-shadow);
            border: 1px solid var(--dark-border);
            position: relative;
            overflow: hidden;
        }

        .sidebar-widget::before {
            content: '';
            position: absolute;
            top: 0;
            right: 0;
            width: 100px;
            height: 100px;
            background: radial-gradient(circle at top right, rgba(156, 93, 255, 0.1), transparent 70%);
        }

        .widget-title {
            font-size: 1.4rem;
            margin-bottom: 1.5rem;
            padding-bottom: 1rem;
            border-bottom: 2px solid rgba(255, 255, 255, 0.05);
            color: var(--text-primary);
            font-family: var(--heading-font);
            position: relative;
        }

        .widget-title::after {
            content: '';
            position: absolute;
            bottom: -2px;
            left: 0;
            width: 50px;
            height: 2px;
            background-color: var(--accent-color);
        }

        .author-info {
            display: flex;
            gap: 1.2rem;
            align-items: center;
        }

        .author-image {
            width: 90px;
            height: 90px;
            border-radius: 50%;
            overflow: hidden;
            border: 3px solid rgba(156, 93, 255, 0.3);
            box-shadow: 0 0 15px rgba(156, 93, 255, 0.2);
        }

        .author-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: var(--transition);
        }

        .author-image:hover img {
            transform: scale(1.1);
        }

        .author-bio h4 {
            margin-bottom: 0.5rem;
            font-size: 1.2rem;
            color: var(--text-primary);
        }

        .author-bio p {
            margin-bottom: 1.2rem;
            font-size: 0.95rem;
            color: var(--text-secondary);
        }

        .btn {
            padding: 0.6rem 1.2rem;
            border-radius: 4px;
            font-weight: 600;
            font-size: 0.9rem;
            transition: var(--transition);
            display: inline-block;
            text-decoration: none;
        }

        .btn-outline {
            border: 1px solid var(--accent-color);
            color: var(--accent-color);
            background-color: transparent;
        }

        .btn-outline:hover {
            background-color: var(--accent-color);
            color: white;
            transform: translateY(-2px);
            box-shadow: 0 4px 8px rgba(156, 93, 255, 0.2);
        }

        .btn-primary {
            background-color: var(--accent-color);
            color: white;
            border: none;
        }

        .btn-primary:hover {
            background-color: var(--accent-hover);
            transform: translateY(-2px);
            box-shadow: 0 4px 8px rgba(156, 93, 255, 0.3);
        }

        .quote-content {
            padding: 1.8rem;
            background-color: rgba(0, 0, 0, 0.2);
            border-left: 4px solid var(--accent-color);
            font-style: italic;
            position: relative;
            border-radius: 0 var(--border-radius) var(--border-radius) 0;
        }

        .quote-content::before {
            content: '"';
            font-size: 5rem;
            color: rgba(156, 93, 255, 0.1);
            position: absolute;
            top: -20px;
            left: 10px;
            font-family: Georgia, serif;
        }

        .quote-content p {
            position: relative;
            z-index: 1;
            color: var(--text-secondary);
            font-size: 1.1rem;
            line-height: 1.6;
        }

        .quote-content cite {
            display: block;
            margin-top: 1rem;
            font-style: normal;
            font-weight: 600;
            color: var(--accent-color);
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
            filter: brightness(0.8) saturate(1.2);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.3);
        }

        .map-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
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
            filter: brightness(0.9) saturate(1.4);
        }

</style>

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
