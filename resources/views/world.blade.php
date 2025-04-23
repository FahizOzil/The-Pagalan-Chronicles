@extends('layouts.app')

@section('title', 'The World of Pagalan - Maps & Lore')

@section('content')
    <!-- Parallax Hero Banner with 3D Effect -->
    <div class="page-banner world-banner parallax-banner">
        <div class="floating-particles"></div>
        <div class="container">
            <h1 class="page-title animate-text">The World of Pagalan</h1>
            <p class="page-subtitle animate-text-delayed">Maps, Lore & Cultures</p>
            <div class="scroll-indicator">
                <div class="mouse">
                    <div class="wheel"></div>
                </div>
                <div class="arrow-scroll">Scroll to Explore</div>
            </div>
        </div>
    </div>

    <!-- Enhanced World Intro with 3D Tilt Effect -->
    <section class="world-intro">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6" data-aos="fade-right">
                    <h2 class="section-title glowing-text">Discover Pagalan</h2>
                    <div class="magical-underline"></div>
                    <p class="lead enchanted-text">A unique fantasy world where ancient magic meets futuristic technology.
                    </p>
                    <p class="description-text">Pagalan is a world of contrasts, where medieval kingdoms exist alongside
                        advanced technological
                        societies. The landscape is as diverse as its inhabitants, featuring sprawling forests, towering
                        mountains, mysterious ancient ruins, and bustling modern cities.</p>
                    <div class="magic-stats">
                        <div class="stat-item" data-count="3">
                            <span class="stat-number">0</span>
                            <span class="stat-label">Major Continents</span>
                        </div>
                        <div class="stat-item" data-count="12">
                            <span class="stat-number">0</span>
                            <span class="stat-label">Unique Cultures</span>
                        </div>
                        <div class="stat-item" data-count="1000">
                            <span class="stat-number">0</span>
                            <span class="stat-label">Years of History</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6" data-aos="fade-left">
                    <div class="world-globe-container">
                        <div class="world-globe tilt-effect">
                            <div class="globe-markers">
                                <!-- Dynamic markers with enhanced tooltips -->
                                <div class="marker" style="--marker-x: 25%; --marker-y: 30%;">
                                    <div class="marker-pulse"></div>
                                    <div class="marker-label">Trebos</div>
                                </div>
                                <div class="marker" style="--marker-x: 62%; --marker-y: 45%;">
                                    <div class="marker-pulse"></div>
                                    <div class="marker-label">Lobos</div>
                                </div>
                                <div class="marker" style="--marker-x: 40%; --marker-y: 65%;">
                                    <div class="marker-pulse"></div>
                                    <div class="marker-label">Sirath</div>
                                </div>
                            </div>
                            <img src="{{ asset('images/map/PagalanMap.jpg') }}" alt="Pagalan Globe"
                                class="img-fluid rotating-globe">
                            <div class="globe-shadow"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Interactive 3D Map Section -->
    <section class="interactive-maps">
        <div class="container">
            <h2 class="section-title text-center">Interactive Maps</h2>
            <p class="section-description text-center">Explore the detailed maps of Pagalan's continents and key locations.
            </p>

            <div class="map-container" data-aos="zoom-in">
                <div class="map-navigation">
                    <div class="nav-scroll">
                        <button class="map-nav-btn active" data-map="main">
                            <i class="fas fa-map-marked-alt"></i>
                            <span>Main Continent</span>
                        </button>
                        <button class="map-nav-btn" data-map="eastern">
                            <i class="fas fa-compass"></i>
                            <span>Eastern Isles</span>
                        </button>
                        <button class="map-nav-btn" data-map="southern">
                            <i class="fas fa-mountain"></i>
                            <span>Southern Territories</span>
                        </button>
                        <button class="map-nav-btn" data-map="northern">
                            <i class="fas fa-snowflake"></i>
                            <span>Northern Lands</span>
                        </button>
                    </div>
                </div>

                <div class="map-viewer">
                    <div class="map-controls">
                        <button class="control-btn" id="zoomIn"><i class="fas fa-plus"></i></button>
                        <button class="control-btn" id="zoomOut"><i class="fas fa-minus"></i></button>
                        <button class="control-btn" id="resetView"><i class="fas fa-sync"></i></button>
                    </div>

                    <div class="map-image active" id="main-map">
                        <div class="map-canvas">
                            <div class="map-wrapper">
                                <img src="{{ asset('images/map/PagalanMap.jpg') }}" alt="Main Continent of Pagalan"
                                    class="img-fluid">

                                <!-- Dynamic Interactive Regions -->
                                <div class="map-region" id="region-trebos" data-region="Trebos">
                                    <svg class="region-svg" viewBox="0 0 100 100" preserveAspectRatio="none"
                                        style="position: absolute; top: 20%; left: 15%; width: 15%; height: 15%;">
                                        <path d="M10,10 L90,10 L90,90 L10,90 Z" class="region-path" />
                                    </svg>
                                </div>

                                <div class="map-region" id="region-lobos" data-region="Lobos">
                                    <svg class="region-svg" viewBox="0 0 100 100" preserveAspectRatio="none"
                                        style="position: absolute; top: 40%; left: 60%; width: 18%; height: 20%;">
                                        <path
                                            d="M10,10 C30,5 70,5 90,10 C95,30 95,70 90,90 C70,95 30,95 10,90 C5,70 5,30 10,10 Z"
                                            class="region-path" />
                                    </svg>
                                </div>

                                <div class="map-region" id="region-sirath" data-region="Sirath">
                                    <svg class="region-svg" viewBox="0 0 100 100" preserveAspectRatio="none"
                                        style="position: absolute; top: 60%; left: 35%; width: 22%; height: 25%;">
                                        <path d="M50,10 L90,40 L70,90 L30,90 L10,40 Z" class="region-path" />
                                    </svg>
                                </div>

                                <!-- Enhanced Interactive Hotspots -->
                                <div class="map-hotspot" style="top: 25%; left: 22%;" data-region="Trebos">
                                    <div class="hotspot-marker">
                                        <div class="ripple"></div>
                                    </div>
                                    <div class="hotspot-info">
                                        <div class="info-header">
                                            <h4>Trebos</h4>
                                            <span class="region-type">Peaceful Nation</span>
                                        </div>
                                        <div class="info-content">
                                            <p>Melinor's homeland. A rich society yet untouched by war. A peaceful nation
                                                governed by an elected council.</p>
                                            <div class="region-stats">
                                                <div class="stat">
                                                    <i class="fas fa-users"></i>
                                                    <span>Population: 2.5M</span>
                                                </div>
                                                <div class="stat">
                                                    <i class="fas fa-landmark"></i>
                                                    <span>Government: Council</span>
                                                </div>
                                            </div>
                                        </div>
                                        <button class="learn-more-btn">Learn More <i
                                                class="fas fa-arrow-right"></i></button>
                                    </div>
                                </div>

                                <div class="map-hotspot" style="top: 45%; left: 65%;" data-region="Lobos">
                                    <div class="hotspot-marker">
                                        <div class="ripple"></div>
                                    </div>
                                    <div class="hotspot-info">
                                        <div class="info-header">
                                            <h4>Lobos</h4>
                                            <span class="region-type">Warrior Kingdom</span>
                                        </div>
                                        <div class="info-content">
                                            <p>A powerful kingdom known for its fierce warriors and advanced military
                                                strategies. Has been in conflict with neighboring regions for centuries.</p>
                                            <div class="region-stats">
                                                <div class="stat">
                                                    <i class="fas fa-users"></i>
                                                    <span>Population: 4.8M</span>
                                                </div>
                                                <div class="stat">
                                                    <i class="fas fa-crown"></i>
                                                    <span>Government: Monarchy</span>
                                                </div>
                                            </div>
                                        </div>
                                        <button class="learn-more-btn">Learn More <i
                                                class="fas fa-arrow-right"></i></button>
                                    </div>
                                </div>

                                <div class="map-hotspot" style="top: 65%; left: 45%;" data-region="Sirath">
                                    <div class="hotspot-marker">
                                        <div class="ripple"></div>
                                    </div>
                                    <div class="hotspot-info">
                                        <div class="info-header">
                                            <h4>Sirath</h4>
                                            <span class="region-type">Magical Realm</span>
                                        </div>
                                        <div class="info-content">
                                            <p>Home to the most powerful mages in all of Pagalan. The landscape is infused
                                                with magical energy, creating extraordinary natural phenomena.</p>
                                            <div class="region-stats">
                                                <div class="stat">
                                                    <i class="fas fa-users"></i>
                                                    <span>Population: 1.2M</span>
                                                </div>
                                                <div class="stat">
                                                    <i class="fas fa-hat-wizard"></i>
                                                    <span>Government: Arcane Council</span>
                                                </div>
                                            </div>
                                        </div>
                                        <button class="learn-more-btn">Learn More <i
                                                class="fas fa-arrow-right"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Other map sections -->
                    <div class="map-image" id="eastern-map">
                        <div class="map-canvas">
                            <div class="map-wrapper">
                                <img src="{{ asset('images/map/EasternIsles.png') }}" alt="Eastern Isles of Pagalan"
                                    class="img-fluid">
                                <!-- Add Eastern Isles hotspots and regions here -->
                            </div>
                        </div>
                    </div>

                    <div class="map-image" id="southern-map">
                        <div class="map-canvas">
                            <div class="map-wrapper">
                                <img src="{{ asset('images/map/SouthernTerritories.png') }}"
                                    alt="Southern Territories of Pagalan" class="img-fluid">
                                <!-- Add Southern Territories hotspots and regions here -->
                            </div>
                        </div>
                    </div>

                    <div class="map-image" id="northern-map">
                        <div class="map-canvas">
                            <div class="map-wrapper">
                                <img src="{{ asset('images/map/NorthernLands.png') }}" alt="Northern Lands of Pagalan"
                                    class="img-fluid">
                                <!-- Add Northern Lands hotspots and regions here -->
                            </div>
                        </div>
                    </div>
                </div>

                <div class="map-legend">
                    <h4>Map Legend</h4>
                    <div class="legend-items">
                        <div class="legend-item">
                            <span class="legend-marker city"></span>
                            <span>Major Cities</span>
                        </div>
                        <div class="legend-item">
                            <span class="legend-marker landmark"></span>
                            <span>Landmarks</span>
                        </div>
                        <div class="legend-item">
                            <span class="legend-marker battle"></span>
                            <span>Battle Sites</span>
                        </div>
                        <div class="legend-item">
                            <span class="legend-marker magic"></span>
                            <span>Magic Hotspots</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Culture and Races Section -->
    <section class="culture-races">
        <div class="container">
            <h2 class="section-title text-center">Cultures & Races</h2>
            <p class="section-description text-center">Discover the diverse inhabitants and cultures that shape Pagalan.
            </p>

            <div class="race-carousel">
                <!-- Carousel items will be dynamically loaded -->
            </div>
        </div>
    </section>

@endsection

@section('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Initialize GSAP ScrollTrigger
            gsap.registerPlugin(ScrollTrigger);

            // Parallax Banner Effect
            gsap.to('.parallax-banner', {
                backgroundPosition: `50% ${innerHeight / 2}px`,
                ease: "none",
                scrollTrigger: {
                    trigger: '.parallax-banner',
                    start: "top top",
                    end: "bottom top",
                    scrub: true
                }
            });

            // Floating Particles Animation
            const particles = document.querySelector('.floating-particles');
            for (let i = 0; i < 50; i++) {
                const particle = document.createElement('div');
                particle.className = 'particle';
                particles.appendChild(particle);

                gsap.to(particle, {
                    x: 'random(-100, 100)',
                    y: 'random(-100, 100)',
                    opacity: 'random(0.3, 0.7)',
                    duration: 'random(2, 4)',
                    repeat: -1,
                    yoyo: true,
                    ease: 'none'
                });
            }

            // Stats Counter Animation
            const stats = document.querySelectorAll('.stat-item');
            stats.forEach(stat => {
                const target = parseInt(stat.dataset.count);
                const numberElement = stat.querySelector('.stat-number');

                gsap.to(numberElement, {
                    innerText: target,
                    duration: 2,
                    snap: {
                        innerText: 1
                    },
                    scrollTrigger: {
                        trigger: stat,
                        start: 'top center+=100',
                        once: true
                    }
                });
            });

            // Initialize Tilt Effect
            if (typeof VanillaTilt !== 'undefined') {
                VanillaTilt.init(document.querySelector(".tilt-effect"), {
                    max: 15,
                    speed: 400,
                    glare: true,
                    "max-glare": 0.5
                });
            }

            // Enhanced Map Interaction
            let currentScale = 1;
            const mapWrappers = document.querySelectorAll('.map-wrapper');
            let isDragging = false;
            let startPos = {
                x: 0,
                y: 0
            };
            let currentPos = {
                x: 0,
                y: 0
            };

            // Zoom Controls
            document.getElementById('zoomIn').addEventListener('click', () => {
                currentScale = Math.min(currentScale * 1.2, 3);
                updateMapTransform();
            });

            document.getElementById('zoomOut').addEventListener('click', () => {
                currentScale = Math.max(currentScale / 1.2, 1);
                updateMapTransform();
            });

            document.getElementById('resetView').addEventListener('click', () => {
                currentScale = 1;
                currentPos = {
                    x: 0,
                    y: 0
                };
                updateMapTransform();
            });

            function updateMapTransform() {
                const activeMap = document.querySelector('.map-image.active .map-wrapper');
                if (activeMap) {
                    activeMap.style.transform =
                        `translate(${currentPos.x}px, ${currentPos.y}px) scale(${currentScale})`;
                }
            }

            // Map Pan Functionality
            mapWrappers.forEach(wrapper => {
                wrapper.addEventListener('mousedown', (e) => {
                    isDragging = true;
                    startPos = {
                        x: e.clientX - currentPos.x,
                        y: e.clientY - currentPos.y
                    };
                    e.preventDefault();
                });
            });

            document.addEventListener('mousemove', (e) => {
                if (!isDragging) return;

                currentPos = {
                    x: e.clientX - startPos.x,
                    y: e.clientY - startPos.y
                };
                updateMapTransform();
            });

            document.addEventListener('mouseup', () => {
                isDragging = false;
            });

            // Map Navigation
            const mapNavButtons = document.querySelectorAll('.map-nav-btn');
            const mapImages = document.querySelectorAll('.map-image');

            mapNavButtons.forEach(btn => {
                btn.addEventListener('click', function() {
                    const mapId = this.getAttribute('data-map');

                    // Reset position and scale when switching maps
                    currentScale = 1;
                    currentPos = {
                        x: 0,
                        y: 0
                    };

                    // Update active states
                    mapNavButtons.forEach(b => b.classList.remove('active'));
                    this.classList.add('active');

                    mapImages.forEach(map => {
                        map.classList.remove('active');
                        if (map.id === `${mapId}-map`) {
                            map.classList.add('active');
                        }
                    });

                    // Reset map transform
                    updateMapTransform();
                });
            });

            // Interactive Map Regions
            const mapRegions = document.querySelectorAll('.map-region');

            mapRegions.forEach(region => {
                // Random color for each region
                const colors = [
                    '#3498db', '#2ecc71', '#e74c3c', '#f39c12', '#9b59b6', '#1abc9c'
                ];
                const randomColor = colors[Math.floor(Math.random() * colors.length)];

                const regionPath = region.querySelector('.region-path');
                regionPath.style.fill = randomColor;
                regionPath.style.fillOpacity = '0.2';
                regionPath.style.stroke = randomColor;
                regionPath.style.strokeWidth = '2';

                // Animation for hover
                region.addEventListener('mouseenter', function() {
                    const regionName = this.getAttribute('data-region');
                    gsap.to(this.querySelector('.region-path'), {
                        fillOpacity: 0.5,
                        duration: 0.3
                    });

                    // Highlight corresponding hotspot
                    const hotspot = document.querySelector(
                        `.map-hotspot[data-region="${regionName}"]`);
                    if (hotspot) {
                        gsap.to(hotspot.querySelector('.hotspot-marker'), {
                            scale: 1.5,
                            duration: 0.3
                        });

                        // Show hotspot info
                        gsap.to(hotspot.querySelector('.hotspot-info'), {
                            opacity: 1,
                            y: 0,
                            duration: 0.3,
                            ease: 'power2.out'
                        });
                    }
                });

                region.addEventListener('mouseleave', function() {
                    const regionName = this.getAttribute('data-region');
                    gsap.to(this.querySelector('.region-path'), {
                        fillOpacity: 0.2,
                        duration: 0.3
                    });

                    // Reset corresponding hotspot
                    const hotspot = document.querySelector(
                        `.map-hotspot[data-region="${regionName}"]`);
                    if (hotspot) {
                        gsap.to(hotspot.querySelector('.hotspot-marker'), {
                            scale: 1,
                            duration: 0.3
                        });

                        // Hide hotspot info
                        gsap.to(hotspot.querySelector('.hotspot-info'), {
                            opacity: 0,
                            y: 10,
                            duration: 0.3
                        });
                    }
                });
            });

            // Enhanced Hotspot Interactions
            const hotspots = document.querySelectorAll('.map-hotspot');
            hotspots.forEach(hotspot => {
                hotspot.addEventListener('mouseenter', function() {
                    const regionName = this.getAttribute('data-region');

                    gsap.to(this.querySelector('.hotspot-info'), {
                        opacity: 1,
                        y: 0,
                        duration: 0.3,
                        ease: 'power2.out'
                    });

                    gsap.to(this.querySelector('.hotspot-marker'), {
                        scale: 1.5,
                        duration: 0.3
                    });

                    // Ripple effect
                    gsap.to(this.querySelector('.ripple'), {
                        scale: 1.5,
                        opacity: 0,
                        duration: 1,
                        repeat: -1
                    });

                    // Highlight corresponding region
                    const region = document.querySelector(
                        `.map-region[data-region="${regionName}"]`);
                    if (region) {
                        gsap.to(region.querySelector('.region-path'), {
                            fillOpacity: 0.5,
                            duration: 0.3
                        });
                    }
                });

                hotspot.addEventListener('mouseleave', function() {
                    const regionName = this.getAttribute('data-region');

                    gsap.to(this.querySelector('.hotspot-info'), {
                        opacity: 0,
                        y: 10,
                        duration: 0.3
                    });

                    gsap.to(this.querySelector('.hotspot-marker'), {
                        scale: 1,
                        duration: 0.3
                    });

                    // Reset corresponding region
                    const region = document.querySelector(
                        `.map-region[data-region="${regionName}"]`);
                    if (region) {
                        gsap.to(region.querySelector('.region-path'), {
                            fillOpacity: 0.2,
                            duration: 0.3
                        });
                    }
                });
            });

            // Culture & Races Dynamic Content
            const races = [{
                    name: 'Humans',
                    image: 'humans.png',
                    description: 'Versatile and adaptable, humans have established diverse societies across Pagalan.'
                },
                {
                    name: 'Elves',
                    image: 'elves.png',
                    description: 'Ancient and magical beings with deep connections to nature and arcane knowledge.'
                },
                {
                    name: 'Dwarves',
                    image: 'dwarves.png',
                    description: 'Master craftsmen and miners who dwell in magnificent underground kingdoms.'
                },
                {
                    name: 'Orcs',
                    image: 'orcs.png',
                    description: 'Powerful warriors with rich tribal cultures and strong spiritual traditions.'
                }
            ];

            // Populate race carousel (implementation would depend on carousel library)
            const raceCarousel = document.querySelector('.race-carousel');

            races.forEach(race => {
                const raceCard = document.createElement('div');
                raceCard.className = 'race-card';

                raceCard.innerHTML = `
            <div class="race-image">
                <img src="{{ asset('images/races/${race.image}') }}" alt="${race.name}" class="img-fluid">
            </div>
            <div class="race-info">
                <h3>${race.name}</h3>
                <p>${race.description}</p>
                
            </div>
        `;

                raceCarousel.appendChild(raceCard);
            });

            // Initialize carousel (example using a fictional carousel)
            // This would depend on which carousel library you're using
            if (typeof Carousel !== 'undefined') {
                new Carousel('.race-carousel', {
                    slidesToShow: 3,
                    responsive: [{
                            breakpoint: 992,
                            settings: {
                                slidesToShow: 2
                            }
                        },
                        {
                            breakpoint: 576,
                            settings: {
                                slidesToShow: 1
                            }
                        }
                    ]
                });
            }

            // Mobile-friendly adjustments
            function adjustForMobile() {
                if (window.innerWidth < 768) {
                    // Make some adjustments for mobile
                    document.querySelectorAll('.map-hotspot').forEach(hotspot => {
                        hotspot.addEventListener('click', function(e) {
                            e.stopPropagation();

                            // Hide all other hotspot infos
                            document.querySelectorAll('.hotspot-info').forEach(info => {
                                if (info !== this.querySelector('.hotspot-info')) {
                                    gsap.to(info, {
                                        opacity: 0,
                                        y: 10,
                                        duration: 0.3
                                    });
                                }
                            });

                            // Toggle this hotspot info
                            const info = this.querySelector('.hotspot-info');
                            const isVisible = window.getComputedStyle(info).opacity > 0;

                            gsap.to(info, {
                                opacity: isVisible ? 0 : 1,
                                y: isVisible ? 10 : 0,
                                duration: 0.3
                            });
                        });
                    });

                    // Hide hotspot info when clicking elsewhere
                    document.addEventListener('click', function() {
                        document.querySelectorAll('.hotspot-info').forEach(info => {
                            gsap.to(info, {
                                opacity: 0,
                                y: 10,
                                duration: 0.3
                            });
                        });
                    });
                }
            }

            adjustForMobile();
            window.addEventListener('resize', adjustForMobile);
        });
    </script>

    <script>
        // Map Initialization Function
function initializeMap() {
    // Ensure the DOM is fully loaded
    console.log('Map initialization started');
    
    // Get active map container
    const mapContainer = document.querySelector('.map-container');
    if (!mapContainer) {
        console.error('Map container not found');
        return;
    }
    
    // Map state variables
    let currentScale = 1;
    let isDragging = false;
    let startPos = { x: 0, y: 0 };
    let currentPos = { x: 0, y: 0 };
    
    // Initialize map navigation buttons
    const mapNavButtons = document.querySelectorAll('.map-nav-btn');
    mapNavButtons.forEach(button => {
        button.addEventListener('click', () => {
            // Remove active class from all buttons and map images
            document.querySelectorAll('.map-nav-btn').forEach(btn => btn.classList.remove('active'));
            document.querySelectorAll('.map-image').forEach(map => map.classList.remove('active'));
            
            // Add active class to clicked button and corresponding map
            button.classList.add('active');
            const mapId = `${button.getAttribute('data-map')}-map`;
            const mapElement = document.getElementById(mapId);
            if (mapElement) {
                mapElement.classList.add('active');
                
                // Reset position and scale when switching maps
                currentScale = 1;
                currentPos = { x: 0, y: 0 };
                updateMapTransform();
            }
        });
    });
    
    // Setup map controls
    const zoomIn = document.getElementById('zoomIn');
    const zoomOut = document.getElementById('zoomOut');
    const resetView = document.getElementById('resetView');
    
    if (zoomIn) {
        zoomIn.addEventListener('click', () => {
            currentScale = Math.min(currentScale * 1.2, 3);
            updateMapTransform();
            console.log('Zoom in clicked. Scale:', currentScale);
        });
    } else {
        console.error('Zoom in button not found');
    }
    
    if (zoomOut) {
        zoomOut.addEventListener('click', () => {
            currentScale = Math.max(currentScale / 1.2, 0.5);
            updateMapTransform();
            console.log('Zoom out clicked. Scale:', currentScale);
        });
    } else {
        console.error('Zoom out button not found');
    }
    
    if (resetView) {
        resetView.addEventListener('click', () => {
            currentScale = 1;
            currentPos = { x: 0, y: 0 };
            updateMapTransform();
            console.log('Reset view clicked');
        });
    } else {
        console.error('Reset view button not found');
    }
    
    // Map dragging functionality
    function startDragging(e) {
        isDragging = true;
        const pos = getEventPosition(e);
        startPos = {
            x: pos.x - currentPos.x,
            y: pos.y - currentPos.y
        };
        e.preventDefault();
    }
    
    function handleDrag(e) {
        if (!isDragging) return;
        
        const pos = getEventPosition(e);
        currentPos = {
            x: pos.x - startPos.x,
            y: pos.y - startPos.y
        };
        updateMapTransform();
    }
    
    function stopDragging() {
        isDragging = false;
    }
    
    function getEventPosition(e) {
        if (e.touches && e.touches[0]) {
            return {
                x: e.touches[0].clientX,
                y: e.touches[0].clientY
            };
        }
        return {
            x: e.clientX,
            y: e.clientY
        };
    }
    
    // Add event listeners for map dragging
    document.querySelectorAll('.map-wrapper').forEach(wrapper => {
        wrapper.addEventListener('mousedown', startDragging);
        wrapper.addEventListener('touchstart', startDragging, { passive: false });
    });
    
    document.addEventListener('mousemove', handleDrag);
    document.addEventListener('touchmove', handleDrag, { passive: false });
    document.addEventListener('mouseup', stopDragging);
    document.addEventListener('touchend', stopDragging);
    
    // Update map transform
    function updateMapTransform() {
        const activeMap = document.querySelector('.map-image.active .map-wrapper');
        if (activeMap) {
            activeMap.style.transform = `translate(${currentPos.x}px, ${currentPos.y}px) scale(${currentScale})`;
        } else {
            console.warn('No active map found');
        }
    }
    
    // Initialize hotspot functionality
    const hotspots = document.querySelectorAll('.map-hotspot');
    hotspots.forEach(hotspot => {
        hotspot.addEventListener('click', () => {
            // Toggle active state
            document.querySelectorAll('.map-hotspot').forEach(h => {
                if (h !== hotspot) h.classList.remove('active');
            });
            hotspot.classList.toggle('active');
        });
    });
    
    // Initialize map regions
    const regions = document.querySelectorAll('.map-region');
    regions.forEach(region => {
        region.addEventListener('mouseenter', () => {
            const regionName = region.getAttribute('data-region');
            const tooltip = document.createElement('div');
            tooltip.className = 'region-tooltip';
            tooltip.textContent = regionName;
            region.appendChild(tooltip);
        });
        
        region.addEventListener('mouseleave', () => {
            const tooltip = region.querySelector('.region-tooltip');
            if (tooltip) region.removeChild(tooltip);
        });
        
        region.addEventListener('click', () => {
            const regionName = region.getAttribute('data-region');
            // Find and show the corresponding hotspot info
            const hotspot = document.querySelector(`.map-hotspot[data-region="${regionName}"]`);
            if (hotspot) {
                document.querySelectorAll('.map-hotspot').forEach(h => {
                    if (h !== hotspot) h.classList.remove('active');
                });
                hotspot.classList.add('active');
            }
        });
    });
    
    // Additional CSS for smooth transitions
    const style = document.createElement('style');
    style.textContent = `
        .map-wrapper {
            transition: transform 0.2s ease-out;
            transform-origin: center;
        }
        .map-hotspot.active .hotspot-info {
            display: block;
        }
        .region-tooltip {
            position: absolute;
            background: rgba(0,0,0,0.7);
            color: white;
            padding: 5px 10px;
            border-radius: 4px;
            z-index: 100;
            pointer-events: none;
            white-space: nowrap;
            top: -30px;
            left: 50%;
            transform: translateX(-50%);
        }
    `;
    document.head.appendChild(style);
    
    // Set initial state
    updateMapTransform();
    console.log('Map initialization completed');
}

// Run initialization on DOMContentLoaded
document.addEventListener('DOMContentLoaded', initializeMap);

// Add a backup initialization for cases where the script loads after DOMContentLoaded
if (document.readyState !== 'loading') {
    console.log('Document already ready, initializing map');
    initializeMap();
}
    </script>

    <script>
        class CultureCarousel {
            constructor(element, options = {}) {
                this.container = element;
                this.options = {
                    slidesToShow: 3,
                    autoplay: true,
                    autoplaySpeed: 5000,
                    ...options
                };

                this.currentSlide = 0;
                this.slides = [];
                this.init();
            }

            init() {
                // Create carousel structure
                this.container.innerHTML = `
            <div class="carousel-wrapper">
                <div class="carousel-track"></div>
                <button class="carousel-prev">&lt;</button>
                <button class="carousel-next">&gt;</button>
                <div class="carousel-dots"></div>
            </div>
        `;

                this.track = this.container.querySelector('.carousel-track');

                // Add races data
                this.addRaces();

                // Setup controls
                this.setupControls();

                // Start autoplay if enabled
                if (this.options.autoplay) {
                    this.startAutoplay();
                }

                // Handle resize
                window.addEventListener('resize', () => this.handleResize());
                this.handleResize();
            }

            addRaces() {
                const races = [{
                        name: 'Humans',
                        image: 'humans.jpg',
                        description: 'Versatile and adaptable, humans have established diverse societies across Pagalan.',
                        traits: ['Adaptable', 'Diplomatic', 'Innovative']
                    },
                    {
                        name: 'Elves',
                        image: 'elves.jpg',
                        description: 'Ancient and magical beings with deep connections to nature and arcane knowledge.',
                        traits: ['Magical', 'Long-lived', 'Nature-bound']
                    },
                    {
                        name: 'Dwarves',
                        image: 'dwarves.jpg',
                        description: 'Master craftsmen and miners who dwell in magnificent underground kingdoms.',
                        traits: ['Crafting', 'Mining', 'Resilient']
                    },
                    {
                        name: 'Orcs',
                        image: 'orcs.jpg',
                        description: 'Powerful warriors with rich tribal cultures and strong spiritual traditions.',
                        traits: ['Strong', 'Tribal', 'Spiritual']
                    }
                ];

                races.forEach(race => {
                    const slide = document.createElement('div');
                    slide.className = 'carousel-slide';
                    slide.innerHTML = `
                <div class="race-card">
                    <div class="race-image">
                        <img src="/images/races/${race.image}" alt="${race.name}" 
                             onerror="this.src='/images/races/placeholder.jpg'">
                    </div>
                    <div class="race-info">
                        <h3>${race.name}</h3>
                        <p>${race.description}</p>
                        <div class="race-traits">
                            ${race.traits.map(trait => `<span class="trait-tag">${trait}</span>`).join('')}
                        </div>
                        <button class="btn btn-outline-primary btn-learn-more">Learn More</button>
                    </div>
                </div>
            `;
                    this.track.appendChild(slide);
                    this.slides.push(slide);
                });
            }

            setupControls() {
                const prev = this.container.querySelector('.carousel-prev');
                const next = this.container.querySelector('.carousel-next');
                const dots = this.container.querySelector('.carousel-dots');

                // Create dots
                this.slides.forEach((_, index) => {
                    const dot = document.createElement('button');
                    dot.className = 'carousel-dot';
                    dot.addEventListener('click', () => this.goToSlide(index));
                    dots.appendChild(dot);
                });

                // Setup navigation
                prev.addEventListener('click', () => this.prevSlide());
                next.addEventListener('click', () => this.nextSlide());

                // Update active state
                this.updateSlides();
            }

            handleResize() {
                const width = window.innerWidth;
                if (width < 768) {
                    this.options.slidesToShow = 1;
                } else if (width < 1024) {
                    this.options.slidesToShow = 2;
                } else {
                    this.options.slidesToShow = 3;
                }
                this.updateSlides();
            }

            updateSlides() {
                const slideWidth = 100 / this.options.slidesToShow;
                this.slides.forEach((slide, index) => {
                    slide.style.width = `${slideWidth}%`;
                    slide.style.transform = `translateX(${(index - this.currentSlide) * 100}%)`;
                });

                // Update dots
                const dots = this.container.querySelectorAll('.carousel-dot');
                dots.forEach((dot, index) => {
                    dot.classList.toggle('active', index === this.currentSlide);
                });
            }

            nextSlide() {
                this.goToSlide((this.currentSlide + 1) % this.slides.length);
            }

            prevSlide() {
                this.goToSlide((this.currentSlide - 1 + this.slides.length) % this.slides.length);
            }

            goToSlide(index) {
                this.currentSlide = index;
                this.updateSlides();
            }

            startAutoplay() {
                this.autoplayInterval = setInterval(() => {
                    this.nextSlide();
                }, this.options.autoplaySpeed);
            }

            stopAutoplay() {
                if (this.autoplayInterval) {
                    clearInterval(this.autoplayInterval);
                }
            }
        }
    </script>

@endsection

@section('styles')
    <style>
        /* Base Variables */
        :root {
            --primary-color: #2c3e50;
            --secondary-color: #e74c3c;
            --accent-color: #3498db;
            --accent-color-hover: #2980b9;
            --dark-color: #2c3e50;
            --light-color: #ecf0f1;
            --magic-color: #9b59b6;
            --transition: all 0.3s ease;
            --font-primary: 'Montserrat', sans-serif;
            --font-secondary: 'Cinzel', serif;
            --font-text: 'Open Sans', sans-serif;
        }

        /* Import Google Fonts */
        @import url('https://fonts.googleapis.com/css2?family=Cinzel:wght@400;700&family=Montserrat:wght@300;400;700&family=Open+Sans:wght@400;600&display=swap');

        /* Base Typography */
        body {
            font-family: var(--font-text);
            color: var(--dark-color);
            line-height: 1.6;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-family: var(--font-secondary);
            font-weight: 700;
        }

        .page-title,
        .section-title {
            font-family: var(--font-secondary);
        }

        .page-subtitle,
        .section-description {
            font-family: var(--font-primary);
            font-weight: 300;
        }

        /* Parallax Banner */
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
            background: url("{{ asset('images/map/PagalanMap.jpg') }}") repeat;
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

        .floating-particles {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }

        .particle {
            position: absolute;
            width: 4px;
            height: 4px;
            background: rgba(255, 255, 255, 0.5);
            border-radius: 50%;
            box-shadow: 0 0 10px rgba(255, 255, 255, 0.8);
        }

        /* Animated Text */
        .animate-text {
            animation: slideUp 1s ease forwards;
            opacity: 0;
        }

        .animate-text-delayed {
            animation: slideUp 1s ease forwards 0.3s;
            opacity: 0;
        }

        @keyframes slideUp {
            from {
                transform: translateY(30px);
                opacity: 0;
            }

            to {
                transform: translateY(0);
                opacity: 1;
            }
        }

        /* Continuation of the styles */
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

        /* Scroll Indicator */
        .scroll-indicator {
            position: absolute;
            bottom: 30px;
            left: 50%;
            transform: translateX(-50%);
            text-align: center;
            color: white;
            font-family: var(--font-primary);
        }

        .mouse {
            width: 26px;
            height: 40px;
            border: 2px solid white;
            border-radius: 13px;
            margin: 0 auto 10px;
            position: relative;
        }

        .wheel {
            width: 4px;
            height: 8px;
            background: white;
            border-radius: 2px;
            position: absolute;
            top: 6px;
            left: 50%;
            transform: translateX(-50%);
            animation: scroll 1.5s infinite;
        }

        @keyframes scroll {
            0% {
                transform: translateX(-50%) translateY(0);
                opacity: 1;
            }

            100% {
                transform: translateX(-50%) translateY(15px);
                opacity: 0;
            }
        }

        /* World Intro Section */
        .world-intro {
            padding: 6rem 0;
            background: linear-gradient(to bottom, #1a1a2e, #16213e);
            color: white;
        }

        /* Enhanced Globe */
        .world-globe-container {
            perspective: 1000px;
            padding: 2rem;
        }

        .world-globe {
            position: relative;
            transform-style: preserve-3d;
            transition: transform 0.5s ease;
        }

        .rotating-globe {
            border-radius: 50%;
            box-shadow: 0 0 30px rgba(52, 152, 219, 0.5);
            animation: rotateGlobe 60s linear infinite;
        }

        @keyframes rotateGlobe {
            from {
                transform: rotateY(0deg);
            }

            to {
                transform: rotateY(360deg);
            }
        }

        .globe-shadow {
            position: absolute;
            bottom: -20px;
            left: 10%;
            width: 80%;
            height: 20px;
            background: radial-gradient(ellipse at center, rgba(0, 0, 0, 0.5) 0%, rgba(0, 0, 0, 0) 70%);
            border-radius: 50%;
            transform: rotateX(90deg);
        }

        .globe-markers {
            position: absolute;
            width: 100%;
            height: 100%;
            pointer-events: none;
            z-index: 10;
        }

        .marker {
            position: absolute;
            left: var(--marker-x);
            top: var(--marker-y);
            transform: translate(-50%, -50%);
            z-index: 5;
        }

        .marker-pulse {
            width: 16px;
            height: 16px;
            background: var(--accent-color);
            border-radius: 50%;
            position: relative;
            box-shadow: 0 0 0 rgba(52, 152, 219, 0.4);
            animation: pulse 2s infinite;
        }

        @keyframes pulse {
            0% {
                box-shadow: 0 0 0 0 rgba(52, 152, 219, 0.7);
            }

            70% {
                box-shadow: 0 0 0 10px rgba(52, 152, 219, 0);
            }

            100% {
                box-shadow: 0 0 0 0 rgba(52, 152, 219, 0);
            }
        }

        .marker-label {
            position: absolute;
            white-space: nowrap;
            background: rgba(0, 0, 0, 0.8);
            color: white;
            padding: 4px 8px;
            border-radius: 4px;
            font-size: 12px;
            transform: translateY(-120%);
            opacity: 0;
            transition: opacity 0.3s;
            font-family: var(--font-primary);
        }

        .marker:hover .marker-label {
            opacity: 1;
        }

        /* Magical Stats */
        .magic-stats {
            display: flex;
            gap: 2rem;
            margin-top: 2rem;
        }

        .stat-item {
            text-align: center;
        }

        .stat-number {
            font-size: 2.5rem;
            font-weight: bold;
            color: var(--accent-color);
            display: block;
            font-family: var(--font-secondary);
        }

        .stat-label {
            font-size: 0.9rem;
            opacity: 0.8;
            font-family: var(--font-primary);
        }

        /* Enchanted Text Effects */
        .glowing-text {
            position: relative;
            text-shadow: 0 0 10px rgba(52, 152, 219, 0.3);
        }

        .magical-underline {
            height: 2px;
            width: 0;
            background: linear-gradient(90deg, var(--accent-color), transparent);
            margin: -10px 0 20px;
            animation: expandUnderline 1s ease forwards 0.5s;
        }

        @keyframes expandUnderline {
            to {
                width: 100px;
            }
        }

        .enchanted-text {
            background: linear-gradient(90deg, var(--accent-color), var(--magic-color));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            color: transparent;
        }

        /* Interactive Maps Section */
        .interactive-maps {
            padding: 6rem 0;
            background: #121212;
            color: white;
        }

        .map-container {
            position: relative;
            margin-top: 3rem;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.5);
        }

        /* Map Navigation */
        .map-navigation {
            background: linear-gradient(to right, #2c3e50, #1a1a2e);
            padding: 0.5rem;
            overflow-x: auto;
            white-space: nowrap;
            scrollbar-width: thin;
            scrollbar-color: var(--accent-color) transparent;
        }

        .map-navigation::-webkit-scrollbar {
            height: 5px;
        }

        .map-navigation::-webkit-scrollbar-thumb {
            background: var(--accent-color);
            border-radius: 10px;
        }

        .nav-scroll {
            display: flex;
            gap: 1rem;
            padding: 1rem;
        }

        .map-nav-btn {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            padding: 0.75rem 1.5rem;
            background: rgba(255, 255, 255, 0.1);
            border: none;
            color: white;
            border-radius: 8px;
            transition: var(--transition);
            font-family: var(--font-primary);
        }

        .map-nav-btn i {
            font-size: 1.2rem;
        }

        .map-nav-btn.active {
            background: var(--accent-color);
            transform: translateY(-2px);
        }

        .map-nav-btn:hover:not(.active) {
            background: rgba(255, 255, 255, 0.2);
        }

        /* Map Canvas */
        .map-viewer {
            position: relative;
            height: 600px;
            overflow: hidden;
            border-radius: 12px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.5);
            background: #1a1a2e;
            transition: var(--transition);
        }

        .map-viewer:hover {
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.7);
        }

        .map-image {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            opacity: 0;
            transition: var(--transition);
        }

        .map-image.active {
            opacity: 1;
        }

        .map-canvas {
            position: relative;
            width: 100%;
            height: 100%;
            overflow: hidden;
        }

        .map-wrapper {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            transition: var(--transition);
        }

        .map-wrapper img {
            width: 100%;
            height: auto;
            display: block;
        }

        .map-hotspot {
            position: absolute;
            cursor: pointer;
            z-index: 10;
        }

        .hotspot-marker {
            width: 20px;
            height: 20px;
            background: var(--accent-color);
            border-radius: 50%;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            box-shadow: 0 0 10px rgba(52, 152, 219, 0.5);
        }

        .hotspot-marker:hover {
            transform: translate(-50%, -50%) scale(1.2);
            box-shadow: 0 0 20px rgba(52, 152, 219, 0.7);
        }

        .hotspot-info {
            position: absolute;
            top: 0;
            left: 50%;
            transform: translate(-50%, -100%);
            background: rgba(0, 0, 0, 0.8);
            color: white;
            padding: 1rem;
            border-radius: 8px;
            opacity: 0;
            transition: var(--transition);
            z-index: 20;
        }

        .hotspot-info h4 {
            margin: 0;
            font-family: var(--font-primary);
        }

        .hotspot-info span {
            font-size: 0.9rem;
            color: var(--accent-color);
            font-family: var(--font-primary);
        }

        .hotspot-info p {
            margin: 0.5rem 0;
            font-family: var(--font-text);
        }

        .hotspot-info .region-stats {
            display: flex;
            gap: 1rem;
            margin-top: 0.5rem;
        }

        .hotspot-info .stat {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            font-family: var(--font-primary);
        }

        .hotspot-info .stat i {
            color: var(--accent-color);
        }
    </style>

    <style>
        .carousel-wrapper {
            position: relative;
            overflow: hidden;
            padding: 2rem 0;
        }

        .carousel-track {
            display: flex;
            transition: transform 0.5s ease-in-out;
        }

        .carousel-slide {
            flex: 0 0 auto;
            padding: 0 1rem;
        }

        .race-card {
            background: rgba(255, 255, 255, 0.1);
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .race-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.3);
        }

        .race-image {
            position: relative;
            padding-top: 75%;
            overflow: hidden;
        }

        .race-image img {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }

        .race-card:hover .race-image img {
            transform: scale(1.1);
        }

        .race-info {
            padding: 1.5rem;
        }

        .race-info h3 {
            margin: 0 0 1rem;
            color: var(--accent-color);
            font-family: var(--font-secondary);
        }

        .race-traits {
            display: flex;
            flex-wrap: wrap;
            gap: 0.5rem;
            margin: 1rem 0;
        }

        .trait-tag {
            background: rgba(52, 152, 219, 0.2);
            color: var(--accent-color);
            padding: 0.25rem 0.75rem;
            border-radius: 15px;
            font-size: 0.875rem;
            font-family: var(--font-primary);
        }

        .carousel-prev,
        .carousel-next {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            background: rgba(0, 0, 0, 0.5);
            color: white;
            border: none;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .carousel-prev {
            left: 1rem;
        }

        .carousel-next {
            right: 1rem;
        }

        .carousel-prev:hover,
        .carousel-next:hover {
            background: var(--accent-color);
        }

        .carousel-dots {
            display: flex;
            justify-content: center;
            gap: 0.5rem;
            margin-top: 1rem;
        }

        .carousel-dot {
            width: 10px;
            height: 10px;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.3);
            border: none;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .carousel-dot.active {
            background: var(--accent-color);
            transform: scale(1.2);
        }
    </style>

    <style>
        /* Map Container Styles */
.map-container {
    position: relative;
    width: 100%;
    max-width: 1200px;
    margin: 0 auto;
    border-radius: 8px;
    overflow: hidden;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
}

/* Map Navigation Styles */
.map-navigation {
    background: #2c3e50;
    padding: 10px;
    overflow-x: auto;
}

.nav-scroll {
    display: flex;
    min-width: 100%;
}

.map-nav-btn {
    background: transparent;
    color: #ecf0f1;
    border: none;
    padding: 10px 20px;
    margin-right: 5px;
    border-radius: 5px;
    cursor: pointer;
    transition: all 0.3s ease;
    white-space: nowrap;
    display: flex;
    align-items: center;
}

.map-nav-btn i {
    margin-right: 8px;
}

.map-nav-btn.active {
    background: #3498db;
    color: white;
}

/* Map Viewer Styles */
.map-viewer {
    position: relative;
    width: 100%;
    height: 500px;
    background: #f5f5f5;
    overflow: hidden;
}

.map-controls {
    position: absolute;
    bottom: 20px;
    right: 20px;
    z-index: 10;
    display: flex;
    flex-direction: column;
    gap: 10px;
}

.control-btn {
    width: 40px;
    height: 40px;
    border-radius: 50%;
    background: rgba(255, 255, 255, 0.8);
    border: none;
    cursor: pointer;
    display: flex;
    align-items: center;
    justify-content: center;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
    transition: all 0.2s ease;
}

.control-btn:hover {
    background: white;
    transform: scale(1.1);
}

/* Map Image Styles */
.map-image {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    display: none;
}

.map-image.active {
    display: block;
}

.map-canvas {
    width: 100%;
    height: 100%;
    overflow: hidden;
    position: relative;
}

.map-wrapper {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    transform-origin: center;
    touch-action: none;
}

.map-wrapper img {
    width: 100%;
    height: 100%;
    object-fit: contain;
}

/* Map Regions and Hotspots */
.map-region {
    position: absolute;
    cursor: pointer;
}

.region-path {
    fill: rgba(52, 152, 219, 0.3);
    stroke: #3498db;
    stroke-width: 2;
    transition: all 0.3s ease;
}

.map-region:hover .region-path {
    fill: rgba(52, 152, 219, 0.5);
}

.map-hotspot {
    position: absolute;
    z-index: 5;
}

.hotspot-marker {
    width: 20px;
    height: 20px;
    border-radius: 50%;
    background: #e74c3c;
    position: relative;
    cursor: pointer;
    box-shadow: 0 0 0 2px white;
}

.ripple {
    position: absolute;
    width: 100%;
    height: 100%;
    border-radius: 50%;
    background: rgba(231, 76, 60, 0.4);
    animation: ripple 2s infinite;
}

@keyframes ripple {
    0% {
        transform: scale(1);
        opacity: 1;
    }
    100% {
        transform: scale(2.5);
        opacity: 0;
    }
}

.hotspot-info {
    position: absolute;
    width: 280px;
    background: white;
    border-radius: 8px;
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
    padding: 15px;
    top: 30px;
    left: -130px;
    z-index: 100;
    display: none;
}

.map-hotspot.active .hotspot-info {
    display: block;
}

.info-header {
    margin-bottom: 10px;
}

.info-header h4 {
    margin: 0 0 5px 0;
    color: #2c3e50;
}

.region-type {
    font-size: 0.8em;
    color: #7f8c8d;
    display: block;
}

.info-content p {
    font-size: 0.9em;
    margin-bottom: 10px;
}

.region-stats {
    display: flex;
    flex-wrap: wrap;
    gap: 10px;
    margin-bottom: 10px;
}

.stat {
    font-size: 0.8em;
    display: flex;
    align-items: center;
    background: #f5f7fa;
    padding: 5px 10px;
    border-radius: 15px;
}

.stat i {
    margin-right: 5px;
    color: #3498db;
}

.learn-more-btn {
    width: 100%;
    background: #3498db;
    color: white;
    border: none;
    padding: 8px;
    border-radius: 5px;
    cursor: pointer;
    transition: all 0.3s ease;
    font-size: 0.9em;
    display: flex;
    align-items: center;
    justify-content: center;
}

.learn-more-btn i {
    margin-left: 8px;
}

.learn-more-btn:hover {
    background: #2980b9;
}

/* Map Legend Styles */
.map-legend {
    background: white;
    padding: 15px;
    border-top: 1px solid #e1e1e1;
}

.map-legend h4 {
    margin-top: 0;
    margin-bottom: 10px;
    color: #2c3e50;
    font-size: 1em;
}

.legend-items {
    display: flex;
    flex-wrap: wrap;
    gap: 15px;
}

.legend-item {
    display: flex;
    align-items: center;
    font-size: 0.9em;
}

.legend-marker {
    width: 16px;
    height: 16px;
    border-radius: 50%;
    margin-right: 8px;
}

.legend-item span{
    color: #2c3e50 !important;
}

.legend-marker.city {
    background: #e74c3c;
}

.legend-marker.landmark {
    background: #f39c12;
}

.legend-marker.battle {
    background: #8e44ad;
}

.legend-marker.magic {
    background: #27ae60;
}

/* Responsive Styles */
@media (max-width: 768px) {
    .map-viewer {
        height: 400px;
    }
    
    .hotspot-info {
        width: 220px;
        left: -100px;
    }
}

@media (max-width: 480px) {
    .map-viewer {
        height: 300px;
    }
    
    .map-controls {
        bottom: 10px;
        right: 10px;
    }
    
    .control-btn {
        width: 34px;
        height: 34px;
    }
    
    .hotspot-info {
        width: 200px;
        left: -90px;
    }
}
    </style>
@endsection
