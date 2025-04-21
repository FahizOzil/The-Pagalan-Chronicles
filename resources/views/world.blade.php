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
                    <p class="lead enchanted-text">A unique fantasy world where ancient magic meets futuristic technology.</p>
                    <p class="description-text">Pagalan is a world of contrasts, where medieval kingdoms exist alongside advanced technological
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
                                <!-- Add dynamic markers -->
                                <div class="marker" style="--marker-x: 25%; --marker-y: 30%;">
                                    <div class="marker-pulse"></div>
                                    <div class="marker-label">Trebos</div>
                                </div>
                                <div class="marker" style="--marker-x: 62%; --marker-y: 45%;">
                                    <div class="marker-pulse"></div>
                                    <div class="marker-label">Lobos</div>
                                </div>
                            </div>
                            <img src="{{ asset('images/map/PagalanMap.jpg') }}" alt="Pagalan Globe" class="img-fluid rotating-globe">
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
            <p class="section-description text-center">Explore the detailed maps of Pagalan's continents and key locations.</p>

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
                        <div class="map-wrapper">
                            <img src="{{ asset('images/map/PagalanMap.jpg') }}" alt="Main Continent of Pagalan" class="img-fluid">
                            
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
                                        <p>Melinor's homeland. A rich society yet untouched by war. A peaceful nation governed by an elected council.</p>
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
                                    <button class="learn-more-btn">Learn More <i class="fas fa-arrow-right"></i></button>
                                </div>
                            </div>


                            <!-- Similar enhanced hotspots for other regions -->
                            <!-- ... -->
                            
                        </div>
                    </div>

                    <!-- Other map sections with similar enhancements -->
                    <!-- ... -->
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
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Rest of the sections with similar enhancements -->
    <!-- ... -->

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
            snap: { innerText: 1 },
            scrollTrigger: {
                trigger: stat,
                start: 'top center+=100',
                once: true
            }
        });
    });

    // Initialize Tilt Effect
    VanillaTilt.init(document.querySelector(".tilt-effect"), {
        max: 15,
        speed: 400,
        glare: true,
        "max-glare": 0.5
    });

    // Enhanced Map Interaction
    let currentScale = 1;
    const mapWrapper = document.querySelector('.map-wrapper');
    let isDragging = false;
    let startPos = { x: 0, y: 0 };
    let currentPos = { x: 0, y: 0 };

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
        currentPos = { x: 0, y: 0 };
        updateMapTransform();
    });

    function updateMapTransform() {
        mapWrapper.style.transform = `translate(${currentPos.x}px, ${currentPos.y}px) scale(${currentScale})`;
    }

    // Map Pan Functionality
    mapWrapper.addEventListener('mousedown', (e) => {
        isDragging = true;
        startPos = {
            x: e.clientX - currentPos.x,
            y: e.clientY - currentPos.y
        };
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

    // Enhanced Hotspot Interactions
    const hotspots = document.querySelectorAll('.map-hotspot');
    hotspots.forEach(hotspot => {
        hotspot.addEventListener('mouseenter', function() {
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
        });

        hotspot.addEventListener('mouseleave', function() {
            gsap.to(this.querySelector('.hotspot-info'), {
                opacity: 0,
                y: 10,
                duration: 0.3
            });

            gsap.to(this.querySelector('.hotspot-marker'), {
                scale: 1,
                duration: 0.3
            });
        });
    });
});
</script>
@endsection

@section('styles')
<style>
/* Enhanced Visual Styles */
/* :root {
    --primary-color: #2c3e50;
    --secondary-color: #e74c3c;
    --accent-color: #3498db;
    --dark-color: #2c3e50;
    --light-color: #ecf0f1;
    --transition: all 0.3s ease;
} */

  /* slider   */
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


/* Parallax Banner */
.parallax-banner {
    height: 100vh;
    background-attachment: fixed;
    position: relative;
    overflow: hidden;
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

/* Scroll Indicator */
.scroll-indicator {
    position: absolute;
    bottom: 30px;
    left: 50%;
    transform: translateX(-50%);
    text-align: center;
    color: white;
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

/* Enhanced Globe */
.world-globe-container {
    perspective: 1000px;
    padding: 2rem;
}

.globe-markers {
    position: absolute;
    width: 100%;
    height: 100%;
    pointer-events: none;
}

.marker {
    position: absolute;
    left: var(--marker-x);
    top: var(--marker-y);
    transform: translate(-50%, -50%);
}

.marker-pulse {
    width: 16px;
    height: 16px;
    background: var(--accent-color);
    border-radius: 50%;
    position: relative;
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
}

.marker:hover .marker-label {
    opacity: 1;
}

/* Enhanced Map Navigation */
.nav-scroll {
    display: flex;
    gap: 1rem;
    padding: 1rem;
    overflow-x: auto;
    scrollbar-width: thin;
    scrollbar-color: var(--accent-color) transparent;
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
}

.map-nav-btn i {
    font-size: 1.2rem;
}

.map-nav-btn.active {
    background: var(--accent-color);
    transform: translateY(-2px);
}

/* Map Controls */
.map-controls {
    position: absolute;
    right: 20px;
    top: 20px;
    z-index: 10;
    display: flex;
    flex-direction: column;
    gap: 0.5rem;
}

.control-btn {
    width: 40px;
    height: 40px;
    border-radius: 50%;
    border: none;
    background: white;
    box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
    cursor: pointer;
    transition: var(--transition);
}

.control-btn:hover {
    background: var(--accent-color);
    color: white;
}

/* Enhanced Hotspots */
.hotspot-marker {
    position: relative;
}

.ripple {
    position: absolute;
    width: 100%;
    height: 100%;
    background: var(--accent-color);
    border-radius: 50%;
    transform: scale(1);
    opacity: 0.5;
}

.hotspot-info {
    width: 300px;
    background: white;
    border-radius: 12px;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
    overflow: hidden;
}

.info-header {
    background: var(--dark-color);
    color: white;
    padding: 1rem;
}

.region-type {
    font-size: 0.8rem;
    opacity: 0.8;
}

.info-content {
    padding: 1rem;
}

.region-stats {
    display: flex;
    gap: 1rem;
    margin-top: 1rem;
}

.stat {
    display: flex;
    align-items: center;
    gap: 0.5rem;
    font-size: 0.9rem;
}

.learn-more-btn {
    width: 100%;
    padding: 0.75rem;
    background: var(--accent-color);
    color: white;
    border: none;
    transition: var(--transition);
}

.learn-more-btn:hover {
    background: var(--dark-color);
}

/* Map Legend */
.map-legend {
    background: white;
    padding: 1rem;
    border-radius: 8px;
    margin-top: 1rem;
}

.legend-items {
    display: flex;
    gap: 1rem;
    flex-wrap: wrap;
    margin-top: 0.5rem;
}

.legend-item {
    display: flex;
    align-items: center;
    gap: 0.5rem;
}

.legend-marker {
    width: 12px;
    height: 12px;
    border-radius: 50%;
}

.legend-marker.city { background: var(--primary-color); }
.legend-marker.landmark { background: var(--secondary-color); }
.legend-marker.battle { background: var(--accent-color); }

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
}

.stat-label {
    font-size: 0.9rem;
    opacity: 0.8;
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
    background: linear-gradient(90deg, var(--primary-color), var(--accent-color));
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
}

/* Responsive Enhancements */
@media (max-width: 768px) {
    .magic-stats {
        flex-direction: column;
        gap: 1rem;
    }

    .map-navigation {
        overflow-x: auto;
    }

    .hotspot-info {
        width: 250px;
    }
}
</style>
@endsection