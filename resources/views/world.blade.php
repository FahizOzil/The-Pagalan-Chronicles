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
                        <div class="stat-item" data-count="1">
                            <span class="stat-number">0</span>
                            <span class="stat-label">Major Continents</span>
                        </div>
                        <div class="stat-item" data-count="8">
                            <span class="stat-number">0</span>
                            <span class="stat-label">Unique Cultures</span>
                        </div>
                        {{-- <div class="stat-item" data-count="1000">
                            <span class="stat-number">0</span>
                            <span class="stat-label">Years of History</span>
                        </div> --}}
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

    <!-- Simplified Map Gallery Section -->
 <section class="relative py-20 px-4 bg-ancient-pattern">
        <!-- Decorative Background Elements -->
        <div class="absolute inset-0 overflow-hidden pointer-events-none">
            <div class="absolute top-10 left-10 w-32 h-32 bg-ancient-gold opacity-10 rounded-full animate-float"></div>
            <div class="absolute bottom-20 right-20 w-24 h-24 bg-mystical-blue opacity-10 rounded-full animate-float" style="animation-delay: -2s;"></div>
            <div class="absolute top-1/2 left-1/4 w-16 h-16 bg-deep-bronze opacity-10 rounded-full animate-float" style="animation-delay: -4s;"></div>
        </div>

        <div class="max-w-7xl mx-auto relative z-10">
            <!-- Section Header -->
            <div class="text-center mb-16">
                <div class="inline-block mb-4">
                    <h2 class="font-fantasy text-5xl md:text-6xl lg:text-7xl font-bold bg-gradient-to-r from-ancient-gold via-amber-600 to-deep-bronze  text-gray-950 animate-glow">
                        Maps of Pagalan
                    </h2>
                    <div class="h-1 w-32 bg-gradient-to-r from-transparent via-ancient-gold to-transparent mx-auto mt-4"></div>
                </div>
                <p class="font-elegant text-xl md:text-2xl text-gray-900 max-w-3xl mx-auto leading-relaxed">
                    Journey through the mystical realms and ancient territories that comprise the vast world of Pagalan.
                    Each region holds its own secrets, cultures, and legends waiting to be discovered.
                </p>
            </div>

            <!-- Maps Grid -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 lg:gap-12">

                <!-- Main Continent Card -->
                <div class="map-card group rounded-2xl p-8 shadow-2xl hover:shadow-3xl ornate-border">
                    <div class="relative">
                        <!-- Image Placeholder with Gradient -->
                        <div class="image-placeholder aspect-[4/3] rounded-xl mb-6 flex items-center justify-center text-white">
                            <div class="text-center">
                            <img src="{{ asset('images/map/PagalanMap.jpg') }}" alt="pagalan map">
                            </div>
                        </div>

                        <!-- Content -->
                        <div class="space-y-4">
                            <h3 class="font-fantasy text-3xl font-bold text-mystical-blue group-hover:text-ancient-gold transition-colors duration-300">
                                The Heart of Pagalan
                            </h3>
                            <p class="font-elegant text-lg text-shadow-gray leading-relaxed">
                                The central continent featuring the refined realm of <span class="font-semibold text-deep-bronze">Trebos</span>,
                                the cultural heart of <span class="font-semibold text-deep-bronze">Lobos</span>, and the mysterious lands of
                                <span class="font-semibold text-deep-bronze">Sirath</span>. Here, ancient civilizations flourish amidst
                                fertile valleys and marble cities.
                            </p>
                            <div class="flex flex-wrap gap-2 pt-2">
                                <span class="px-3 py-1 bg-ancient-gold bg-opacity-20 text-deep-bronze rounded-full text-sm font-elegant">Trebos</span>
                                <span class="px-3 py-1 bg-mystical-blue bg-opacity-20 text-mystical-blue rounded-full text-sm font-elegant">Lobos</span>
                                <span class="px-3 py-1 bg-deep-bronze bg-opacity-20 text-deep-bronze rounded-full text-sm font-elegant">Sirath</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Eastern Isles Card -->
                <div class="map-card group rounded-2xl p-8 shadow-2xl hover:shadow-3xl ornate-border">
                    <div class="relative">
                        <!-- Image Placeholder -->
                        <div class="image-placeholder aspect-[4/3] rounded-xl mb-6 flex items-center justify-center text-white" style="background: linear-gradient(135deg, #4f46e5 0%, #7c3aed 100%);">
                            <div class="text-center">
                              <img src="{{ asset('images/map/EasternIsles.png') }}" alt="Eastern Isles Map">
                                <p class="font-elegant text-lg">Eastern Isles Map</p>
                            </div>
                        </div>

                        <div class="space-y-4">
                            <h3 class="font-fantasy text-3xl font-bold text-mystical-blue group-hover:text-ancient-gold transition-colors duration-300">
                                Mysterious Eastern Isles
                            </h3>
                            <p class="font-elegant text-lg text-shadow-gray leading-relaxed">
                                A chain of enigmatic islands shrouded in ancient magic and forgotten secrets. Including the legendary
                                <span class="font-semibold text-deep-bronze">Ridge</span> and the mystical
                                <span class="font-semibold text-deep-bronze">Nebulee</span>, where reality itself seems to bend and twist.
                            </p>
                            <div class="flex flex-wrap gap-2 pt-2">
                                <span class="px-3 py-1 bg-purple-200 text-purple-800 rounded-full text-sm font-elegant">The Ridge</span>
                                <span class="px-3 py-1 bg-indigo-200 text-indigo-800 rounded-full text-sm font-elegant">The Nebulee</span>
                                <span class="px-3 py-1 bg-blue-200 text-blue-800 rounded-full text-sm font-elegant">Ancient Ruins</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Southern Territories Card -->
                <div class="map-card group rounded-2xl p-8 shadow-2xl hover:shadow-3xl ornate-border">
                    <div class="relative">
                        <!-- Image Placeholder -->
                        <div class="image-placeholder aspect-[4/3] rounded-xl mb-6 flex items-center justify-center text-white" style="background: linear-gradient(135deg, #0891b2 0%, #0369a1 100%);">
                            <div class="text-center">
                                <img src="{{ asset('images/map/SouthernTerritories.png') }}" alt="Southern Territories Map">
                                <p class="font-elegant text-lg">Southern Territories Map</p>
                            </div>
                        </div>

                        <div class="space-y-4">
                            <h3 class="font-fantasy text-3xl font-bold text-mystical-blue group-hover:text-ancient-gold transition-colors duration-300">
                                Far Southern Lands
                            </h3>
                            <p class="font-elegant text-lg text-shadow-gray leading-relaxed">
                                Harsh territories of eternal winter and ice-bound coasts, home to the resilient southern peoples.
                                The fortified settlement of <span class="font-semibold text-deep-bronze">Deleneos</span> stands as a
                                beacon of civilization against the frozen wilderness.
                            </p>
                            <div class="flex flex-wrap gap-2 pt-2">
                                <span class="px-3 py-1 bg-cyan-200 text-cyan-800 rounded-full text-sm font-elegant">Deleneos</span>
                                <span class="px-3 py-1 bg-blue-200 text-blue-800 rounded-full text-sm font-elegant">Ice Fields</span>
                                <span class="px-3 py-1 bg-slate-200 text-slate-800 rounded-full text-sm font-elegant">Frozen Coasts</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Northern Lands Card -->
                <div class="map-card group rounded-2xl p-8 shadow-2xl hover:shadow-3xl ornate-border">
                    <div class="relative">
                        <!-- Image Placeholder -->
                        <div class="image-placeholder aspect-[4/3] rounded-xl mb-6 flex items-center justify-center text-white" style="background: linear-gradient(135deg, #059669 0%, #047857 100%);">
                            <div class="text-center">
                                <img src="{{ asset('images/map/NorthernLands.png') }}" alt="Northern Lands Map">
                                <p class="font-elegant text-lg">Northern Lands Map</p>
                            </div>
                        </div>

                        <div class="space-y-4">
                            <h3 class="font-fantasy text-3xl font-bold text-mystical-blue group-hover:text-ancient-gold transition-colors duration-300">
                                Far Northern Islands
                            </h3>
                            <p class="font-elegant text-lg text-shadow-gray leading-relaxed">
                                Windswept archipelagos of hardy seafarers including <span class="font-semibold text-deep-bronze">Quinn</span>,
                                <span class="font-semibold text-deep-bronze">Pinto</span>, and the twin islands of
                                <span class="font-semibold text-deep-bronze">Crystalia Major & Minor</span>. These stoic peoples master the harsh northern seas.
                            </p>
                            <div class="flex flex-wrap gap-2 pt-2">
                                <span class="px-3 py-1 bg-emerald-200 text-emerald-800 rounded-full text-sm font-elegant">Quinn</span>
                                <span class="px-3 py-1 bg-teal-200 text-teal-800 rounded-full text-sm font-elegant">Pinto</span>
                                <span class="px-3 py-1 bg-green-200 text-green-800 rounded-full text-sm font-elegant">Crystalia Islands</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Special: Banton Island & Cadmun -->
                <div class="lg:col-span-2">
                    <div class="map-card group rounded-2xl p-8 shadow-2xl hover:shadow-3xl ornate-border">
                        <div class="grid md:grid-cols-2 gap-8 items-center">
                            <div class="space-y-6">
                                <h3 class="font-fantasy text-4xl font-bold text-mystical-blue group-hover:text-ancient-gold transition-colors duration-300">
                                    Strategic Realms
                                </h3>
                                <div class="space-y-4">
                                    <div>
                                        <h4 class="font-fantasy text-2xl font-semibold text-deep-bronze mb-2">Banton Island</h4>
                                        <p class="font-elegant text-lg text-shadow-gray">Morganuke's homeland - a hardy island of independent folk, shaped by sea winds and ancient traditions.</p>
                                    </div>
                                    <div>
                                        <h4 class="font-fantasy text-2xl font-semibold text-deep-bronze mb-2">Cadmun</h4>
                                        <p class="font-elegant text-lg text-shadow-gray">Maritime warriors with flame-red hair and fierce loyalty, masters of both sea and forge.</p>
                                    </div>
                                    <div>
                                        <h4 class="font-fantasy text-2xl font-semibold text-deep-bronze mb-2">Ventor</h4>
                                        <p class="font-elegant text-lg text-shadow-gray">The dark homeland of the Cordinen Empire - a realm of conquest and military supremacy.</p>
                                    </div>
                                </div>
                                <div class="flex flex-wrap gap-2 pt-4">
                                    <span class="px-4 py-2 bg-ancient-gold bg-opacity-20 text-deep-bronze rounded-full font-elegant">Allied Territories</span>
                                    <span class="px-4 py-2 bg-red-200 text-red-800 rounded-full font-elegant">Enemy Strongholds</span>
                                </div>
                            </div>

                            <div class="image-placeholder aspect-[4/3] rounded-xl flex items-center justify-center text-white" style="background: linear-gradient(135deg, #dc2626 0%, #991b1b 100%);">
                                <div class="text-center">
                                    <img src="{{ asset('images/map/StrategicRealmsMap.jpg') }}" alt="Strategic Realms Map">
                                    <p class="font-elegant text-xl">Strategic Realms Map</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </section>

    <!-- Cultures & Races Section -->
    <section class="py-16 bg-gradient-to-br from-slate-900 via-yellow-900 to-slate-900">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-4xl md:text-5xl font-bold text-black mb-4">
                    Cultures & Races of Pagalan
                </h2>
                <p class="text-xl text-gray-800 max-w-3xl mx-auto">
                    Discover the diverse peoples and civilizations that shape the world of Pagalan, from the hardy
                    islanders of Banton to the mysterious dwellers of The Nebulee.
                </p>
            </div>

            <!-- Navigation Tabs -->
            <div class="flex justify-center mb-12">
                <nav class="flex space-x-1 bg-gray-800 p-2 rounded-lg">
                    <button
                        class="tab-btn px-6 py-3 text-sm font-medium rounded-md text-white bg-purple-600 transition-all duration-200"
                        data-tab="peoples">
                        Peoples & Places
                    </button>
                    <button
                        class="tab-btn px-6 py-3 text-sm font-medium rounded-md text-gray-300 hover:text-white hover:bg-gray-700 transition-all duration-200"
                        data-tab="characters">
                        Key Characters
                    </button>
                    <button
                        class="tab-btn px-6 py-3 text-sm font-medium rounded-md text-gray-300 hover:text-white hover:bg-gray-700 transition-all duration-200"
                        data-tab="mysterious">
                        Mysterious Lands
                    </button>
                </nav>
            </div>

            <!-- Peoples & Places Tab -->
            <div id="peoples" class="tab-content active">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <!-- Banton Island -->
                    <div class="culture-card bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl">
                        <div class="h-48 bg-gradient-to-br from-blue-600 to-teal-600 flex items-center justify-center">
                            {{-- <div class="text-center text-white">
                                <h3 class="text-2xl font-bold mb-2">Banton Island</h3>
                                <p class="text-blue-100">The Bantonese People</p>
                            </div> --}}

                            <img src="{{ asset('images/map/Banton_Island.png') }}" alt="Banton Island" class="w-full h-full object-cover">
                        </div>
                        <div class="p-6">
                            <div class="flex items-center mb-3">
                                <span class="text-blue-600 font-semibold">Traits:</span>
                                <span class="ml-2 text-sm bg-blue-100 text-blue-800 px-2 py-1 rounded">Hardy &
                                    Independent</span>
                            </div>
                            <p class="text-gray-600 mb-4">
                                A resilient folk forged by sea winds and stony soil. Known for their stubborn
                                pragmatism, fierce local loyalty, and deep mistrust of distant rulers.
                            </p>
                            <div class="space-y-2">
                                <div class="flex items-center text-sm">
                                    <span class="w-2 h-2 bg-blue-500 rounded-full mr-2"></span>
                                    <span>Values: Honour, Work, and Land</span>
                                </div>
                                <div class="flex items-center text-sm">
                                    <span class="w-2 h-2 bg-blue-500 rounded-full mr-2"></span>
                                    <span>Governed by local traditions</span>
                                </div>
                                <div class="flex items-center text-sm">
                                    <span class="w-2 h-2 bg-blue-500 rounded-full mr-2"></span>
                                    <span>Morganuke's homeland</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Lobos - Epleon -->
                    <div class="culture-card bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl">
                        <div class="h-48 bg-gradient-to-br from-amber-600 to-orange-600 flex items-center justify-center">
                            {{-- <div class="text-center text-white">
                                <h3 class="text-2xl font-bold mb-2">Lobos</h3>
                                <p class="text-amber-100">The Epleon People</p>
                            </div> --}}
                            <img src="{{ asset('images/map/Lobos.png') }}" alt="Lobos - Epleon" class="w-full h-full object-cover">
                        </div>
                        <div class="p-6">
                            <div class="flex items-center mb-3">
                                <span class="text-amber-600 font-semibold">Traits:</span>
                                <span class="ml-2 text-sm bg-amber-100 text-amber-800 px-2 py-1 rounded">Refined &
                                    Sophisticated</span>
                            </div>
                            <p class="text-gray-600 mb-4">
                                The cultural heart of Pagalan, known for their love of excellence, honor, and the arts.
                                They balance pleasure with duty and legacy.
                            </p>
                            <div class="space-y-2">
                                <div class="flex items-center text-sm">
                                    <span class="w-2 h-2 bg-amber-500 rounded-full mr-2"></span>
                                    <span>Tripartite Government Structure</span>
                                </div>
                                <div class="flex items-center text-sm">
                                    <span class="w-2 h-2 bg-amber-500 rounded-full mr-2"></span>
                                    <span>Masters of art and governance</span>
                                </div>
                                <div class="flex items-center text-sm">
                                    <span class="w-2 h-2 bg-amber-500 rounded-full mr-2"></span>
                                    <span>Follow the Epleonic Code</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Cadmun -->
                    <div class="culture-card bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl">
                        <div class="h-48 bg-gradient-to-br from-emerald-600 to-teal-600 flex items-center justify-center">
                            {{-- <div class="text-center text-white">
                                <h3 class="text-2xl font-bold mb-2">Cadmun</h3>
                                <p class="text-emerald-100">The Cadmunese People</p>
                            </div> --}}
                            <img src="{{ asset('images/map/Cadmun.png') }}" alt="Cadmun" class="w-full h-full object-cover">
                        </div>
                        <div class="p-6">
                            <div class="flex items-center mb-3">
                                <span class="text-emerald-600 font-semibold">Traits:</span>
                                <span class="ml-2 text-sm bg-emerald-100 text-emerald-800 px-2 py-1 rounded">Proud &
                                    Seafaring</span>
                            </div>
                            <p class="text-gray-600 mb-4">
                                Red-haired warriors and sailors from windswept fjords. Known for their martial strength,
                                independence, and naval prowess.
                            </p>
                            <div class="space-y-2">
                                <div class="flex items-center text-sm">
                                    <span class="w-2 h-2 bg-emerald-500 rounded-full mr-2"></span>
                                    <span>Distinctive red hair and green eyes</span>
                                </div>
                                <div class="flex items-center text-sm">
                                    <span class="w-2 h-2 bg-emerald-500 rounded-full mr-2"></span>
                                    <span>Exceptional fighters and sailors</span>
                                </div>
                                <div class="flex items-center text-sm">
                                    <span class="w-2 h-2 bg-emerald-500 rounded-full mr-2"></span>
                                    <span>Governed by High Council</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Ventor - Cordinen -->
                    <div class="culture-card bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl">
                        <div class="h-48 bg-gradient-to-br from-red-600 to-red-800 flex items-center justify-center">
                            {{-- <div class="text-center text-white">
                                <h3 class="text-2xl font-bold mb-2">Ventor</h3>
                                <p class="text-red-100">The Cordinen People</p>
                            </div> --}}
                            <img src="{{ asset('images/map/Ventor.png') }}" alt="Ventor - Cordinen" class="w-full h-full object-cover">
                        </div>
                        <div class="p-6">
                            <div class="flex items-center mb-3">
                                <span class="text-red-600 font-semibold">Traits:</span>
                                <span class="ml-2 text-sm bg-red-100 text-red-800 px-2 py-1 rounded">Warlike &
                                    Dominating</span>
                            </div>
                            <p class="text-gray-600 mb-4">
                                A conquest-driven people built on domination and militarism. Their society revolves
                                around racial superiority and the divine right to rule by force.
                            </p>
                            <div class="space-y-2">
                                <div class="flex items-center text-sm">
                                    <span class="w-2 h-2 bg-red-500 rounded-full mr-2"></span>
                                    <span>Rigidly stratified military society</span>
                                </div>
                                <div class="flex items-center text-sm">
                                    <span class="w-2 h-2 bg-red-500 rounded-full mr-2"></span>
                                    <span>Maintain slave populations</span>
                                </div>
                                <div class="flex items-center text-sm">
                                    <span class="w-2 h-2 bg-red-500 rounded-full mr-2"></span>
                                    <span>Cities are barrack-hives</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Trebos -->
                    <div class="culture-card bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl">
                        <div class="h-48 bg-gradient-to-br from-purple-600 to-pink-600 flex items-center justify-center">
                            {{-- <div class="text-center text-white">
                                <h3 class="text-2xl font-bold mb-2">Trebos</h3>
                                <p class="text-purple-100">The Trebosian People</p>
                            </div> --}}
                            <img src="{{ asset('images/map/Trebos.png') }}" alt="Trebos" class="w-full h-full object-cover">
                        </div>
                        <div class="p-6">
                            <div class="flex items-center mb-3">
                                <span class="text-purple-600 font-semibold">Traits:</span>
                                <span class="ml-2 text-sm bg-purple-100 text-purple-800 px-2 py-1 rounded">Diplomatic &
                                    Neutral</span>
                            </div>
                            <p class="text-gray-600 mb-4">
                                Cultured and prosperous folk known for wealth, diplomacy, and neutrality. They value
                                reason over emotion and commerce over conquest.
                            </p>
                            <div class="space-y-2">
                                <div class="flex items-center text-sm">
                                    <span class="w-2 h-2 bg-purple-500 rounded-full mr-2"></span>
                                    <span>Governed by elected council</span>
                                </div>
                                <div class="flex items-center text-sm">
                                    <span class="w-2 h-2 bg-purple-500 rounded-full mr-2"></span>
                                    <span>Melinor Skoln's homeland</span>
                                </div>
                                <div class="flex items-center text-sm">
                                    <span class="w-2 h-2 bg-purple-500 rounded-full mr-2"></span>
                                    <span>Masters of arts and diplomacy</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Far Northern Islands -->
                    <div class="culture-card bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl">
                        <div class="h-48 bg-gradient-to-br from-blue-600 to-teal-600 flex items-center justify-center">
                            {{-- <div class="text-center text-white">
                                <h3 class="text-2xl font-bold mb-2">Far Northern Islands</h3>
                                <p class="text-cyan-100">Quinn, Pinto, Crystalia</p>
                            </div> --}}
                            <img src="{{ asset('images/map/North_Islands.png') }}" alt="Far Northern Islands" class="w-full h-full object-cover">
                        </div>
                        <div class="p-6">
                            <div class="flex items-center mb-3">
                                <span class="text-cyan-600 font-semibold">Traits:</span>
                                <span class="ml-2 text-sm bg-cyan-100 text-cyan-800 px-2 py-1 rounded">Stoic &
                                    Self-Reliant</span>
                            </div>
                            <p class="text-gray-600 mb-4">
                                Hardy folk shaped by harsh winters and salt-laden winds. Master seafarers who maintain
                                diplomatic neutrality through trade.
                            </p>
                            <div class="space-y-2">
                                <div class="flex items-center text-sm">
                                    <span class="w-2 h-2 bg-cyan-500 rounded-full mr-2"></span>
                                    <span>Pale skin, fair hair, sea-green eyes</span>
                                </div>
                                <div class="flex items-center text-sm">
                                    <span class="w-2 h-2 bg-cyan-500 rounded-full mr-2"></span>
                                    <span>Expert fishermen and traders</span>
                                </div>
                                <div class="flex items-center text-sm">
                                    <span class="w-2 h-2 bg-cyan-500 rounded-full mr-2"></span>
                                    <span>Politically neutral archipelago</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Key Characters Tab -->
            <div id="characters" class="tab-content">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    <!-- Morganuke -->
                    <div class="character-card bg-white rounded-xl shadow-lg p-6 border-l-4 border-purple-500">
                        <div class="flex items-center mb-4">
                            <div class="w-12 h-12 bg-purple-100 rounded-full flex items-center justify-center">
                               <img src="{{ asset("images/characters/Morganuke.png") }}" alt="Morganuke Beldere" class="w-10 h-10 rounded-full">
                            </div>
                            <div class="ml-4">
                                <h3 class="text-lg font-bold text-gray-800">Morganuke Beldere</h3>
                                <p class="text-sm text-purple-600">Main Character</p>
                            </div>
                        </div>
                        <p class="text-gray-600 text-sm mb-3">
                            The mysterious silver-haired, crimson-eyed boy from Banton Island, raised by humble farmers
                            but destined for greatness.
                        </p>
                        <div class="space-y-1 text-xs">
                            <div class="flex items-center">
                                <span class="w-2 h-2 bg-purple-400 rounded-full mr-2"></span>
                                <span>Unusual appearance: Silver hair, red eyes</span>
                            </div>
                            <div class="flex items-center">
                                <span class="w-2 h-2 bg-purple-400 rounded-full mr-2"></span>
                                <span>Unnaturally articulate from young age</span>
                            </div>
                            <div class="flex items-center">
                                <span class="w-2 h-2 bg-purple-400 rounded-full mr-2"></span>
                                <span>Seeks to uncover his true lineage</span>
                            </div>
                        </div>
                    </div>

                    <!-- Stovin & Plarem Beldere -->
                    <div class="character-card bg-white rounded-xl shadow-lg p-6 border-l-4 border-green-500">
                        <div class="flex items-center mb-4">
                            <div class="w-12 h-12 bg-green-100 rounded-full flex items-center justify-center">
                                <img src="{{ asset("images/characters/Stovin.png") }}" alt="Stovin & Plarem Beldere" class="w-10 h-10 rounded-full">
                            </div>
                            <div class="ml-4">
                                <h3 class="text-lg font-bold text-gray-800">Stovin & Plarem Beldere</h3>
                                <p class="text-sm text-green-600">Adopted Parents</p>
                            </div>
                        </div>
                        <p class="text-gray-600 text-sm mb-3">
                            The humble farming couple who raised Morganuke with love and strong values on Banton Island.
                        </p>
                        <div class="space-y-1 text-xs">
                            <div class="flex items-center">
                                <span class="w-2 h-2 bg-green-400 rounded-full mr-2"></span>
                                <span>Stovin: Weathered farmer, quiet wisdom</span>
                            </div>
                            <div class="flex items-center">
                                <span class="w-2 h-2 bg-green-400 rounded-full mr-2"></span>
                                <span>Plarem: Warm, resilient, taught kindness</span>
                            </div>
                            <div class="flex items-center">
                                <span class="w-2 h-2 bg-green-400 rounded-full mr-2"></span>
                                <span>Shaped Morganuke's moral compass</span>
                            </div>
                        </div>
                    </div>

                    <!-- Fraytar DeLance -->
                    <div class="character-card bg-white rounded-xl shadow-lg p-6 border-l-4 border-blue-500">
                        <div class="flex items-center mb-4">
                            <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center">
                                <img src="{{ asset("images/characters/Fraytar.png") }}" alt="Fraytar DeLance" class="w-10 h-10 rounded-full">
                            </div>
                            <div class="ml-4">
                                <h3 class="text-lg font-bold text-gray-800">Fraytar DeLance</h3>
                                <p class="text-sm text-blue-600">Seafarer & Mentor</p>
                            </div>
                        </div>
                        <p class="text-gray-600 text-sm mb-3">
                            The weathered seafarer who discovered Morganuke as an infant and became his mentor in
                            uncovering ancient secrets.
                        </p>
                        <div class="space-y-1 text-xs">
                            <div class="flex items-center">
                                <span class="w-2 h-2 bg-blue-400 rounded-full mr-2"></span>
                                <span>Found Morganuke in rune-marked container</span>
                            </div>
                            <div class="flex items-center">
                                <span class="w-2 h-2 bg-blue-400 rounded-full mr-2"></span>
                                <span>Maps ruins and forgotten ports</span>
                            </div>
                            <div class="flex items-center">
                                <span class="w-2 h-2 bg-blue-400 rounded-full mr-2"></span>
                                <span>Guides Morganuke's journey</span>
                            </div>
                        </div>
                    </div>

                    <!-- Calarel Francite -->
                    <div class="character-card bg-white rounded-xl shadow-lg p-6 border-l-4 border-orange-500">
                        <div class="flex items-center mb-4">
                            <div class="w-12 h-12 bg-orange-100 rounded-full flex items-center justify-center">
                                <img src="{{ asset("images/characters/Calarel.png") }}" alt="Calarel Francite" class="w-10 h-10 rounded-full">
                            </div>
                            <div class="ml-4">
                                <h3 class="text-lg font-bold text-gray-800">Calarel Francite</h3>
                                <p class="text-sm text-orange-600">Blacksmith's Daughter</p>
                            </div>
                        </div>
                        <p class="text-gray-600 text-sm mb-3">
                            Spirited and sharp-witted daughter of the village blacksmith, Morganuke's childhood rival
                            and first crush.
                        </p>
                        <div class="space-y-1 text-xs">
                            <div class="flex items-center">
                                <span class="w-2 h-2 bg-orange-400 rounded-full mr-2"></span>
                                <span>Bright hazel eyes, chestnut hair</span>
                            </div>
                            <div class="flex items-center">
                                <span class="w-2 h-2 bg-orange-400 rounded-full mr-2"></span>
                                <span>Fiercely independent spirit</span>
                            </div>
                            <div class="flex items-center">
                                <span class="w-2 h-2 bg-orange-400 rounded-full mr-2"></span>
                                <span>"I'll never be someone's shadow"</span>
                            </div>
                        </div>
                    </div>

                    <!-- Melinor Skoln -->
                    <div class="character-card bg-white rounded-xl shadow-lg p-6 border-l-4 border-pink-500">
                        <div class="flex items-center mb-4">
                            <div class="w-12 h-12 bg-pink-100 rounded-full flex items-center justify-center">
                                <img src="{{ asset("images/characters/Melinor.png") }}" alt="Melinor Skoln" class="w-10 h-10 rounded-full">
                            </div>
                            <div class="ml-4">
                                <h3 class="text-lg font-bold text-gray-800">Melinor Skoln</h3>
                                <p class="text-sm text-pink-600">From Trebos</p>
                            </div>
                        </div>
                        <p class="text-gray-600 text-sm mb-3">
                            A quietly resilient 17-year-old from Trebos with long black hair and deep brown eyes, whose
                            stillness hides strength.
                        </p>
                        <div class="space-y-1 text-xs">
                            <div class="flex items-center">
                                <span class="w-2 h-2 bg-pink-400 rounded-full mr-2"></span>
                                <span>Stunningly beautiful with olive skin</span>
                            </div>
                            <div class="flex items-center">
                                <span class="w-2 h-2 bg-pink-400 rounded-full mr-2"></span>
                                <span>Sister to young Alorie</span>
                            </div>
                            <div class="flex items-center">
                                <span class="w-2 h-2 bg-pink-400 rounded-full mr-2"></span>
                                <span>Quiet intensity and discipline</span>
                            </div>
                        </div>
                    </div>

                    <!-- Commander General Falcar Tradish -->
                    <div class="character-card bg-white rounded-xl shadow-lg p-6 border-l-4 border-red-500">
                        <div class="flex items-center mb-4">
                            <div class="w-12 h-12 bg-red-100 rounded-full flex items-center justify-center">
                                <img src="{{ asset("images/characters/Falcar.png") }}" alt="Falcar Tradish" class="w-10 h-10 rounded-full">
                            </div>
                            <div class="ml-4">
                                <h3 class="text-lg font-bold text-gray-800">Falcar Tradish</h3>
                                <p class="text-sm text-red-600">Alliance Commander</p>
                            </div>
                        </div>
                        <p class="text-gray-600 text-sm mb-3">
                            Towering Cadmun commander of the Banton-Cadmun Alliance, known for his flame-red hair and
                            strategic brilliance.
                        </p>
                        <div class="space-y-1 text-xs">
                            <div class="flex items-center">
                                <span class="w-2 h-2 bg-red-400 rounded-full mr-2"></span>
                                <span>Over six feet tall, warrior braids</span>
                            </div>
                            <div class="flex items-center">
                                <span class="w-2 h-2 bg-red-400 rounded-full mr-2"></span>
                                <span>Commands forward operations teams</span>
                            </div>
                            <div class="flex items-center">
                                <span class="w-2 h-2 bg-red-400 rounded-full mr-2"></span>
                                <span>Sees potential in Morganuke</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Mysterious Lands Tab -->
            <div id="mysterious" class="tab-content">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                    <!-- The Nebulee -->
                    <div class="bg-gradient-to-br from-blue-900 via-purple-900 to-gray-900 rounded-xl p-8 text-white">
                        <div class="flex items-center mb-6">
                            <div
                                class="w-16 h-16 bg-white bg-opacity-20 rounded-full flex items-center justify-center mr-4">
                                <span class="text-2xl">🌫️</span>
                            </div>
                            <div>
                                <h3 class="text-2xl font-bold">The Nebulee</h3>
                                <p class="text-gray-300">The Weeping Sea</p>
                            </div>
                        </div>
                        <p class="text-gray-200 mb-6">
                            A vast, ever-shifting maritime region veiled in eternal mist, where islands appear and
                            vanish like ghosts. Compasses spin aimlessly, stars vanish, and entire armadas have
                            disappeared without a trace.
                        </p>
                        <div class="space-y-3">
                            <div class="flex items-start">
                                <span class="w-2 h-2 bg-cyan-400 rounded-full mr-3 mt-2"></span>
                                <div>
                                    <h4 class="font-semibold text-cyan-200">The Patronese</h4>
                                    <p class="text-sm text-gray-300">Ancient race cloaked in vapor and time, possessing
                                        strange powers that defy known magic.</p>
                                </div>
                            </div>
                            <div class="flex items-start">
                                <span class="w-2 h-2 bg-cyan-400 rounded-full mr-3 mt-2"></span>
                                <div>
                                    <h4 class="font-semibold text-cyan-200">Morganuke's Dreams</h4>
                                    <p class="text-sm text-gray-300">Impossible spires, black obelisks with glowing
                                        runes, and an ancient voice calling his name.</p>
                                </div>
                            </div>
                            <div class="flex items-start">
                                <span class="w-2 h-2 bg-cyan-400 rounded-full mr-3 mt-2"></span>
                                <div>
                                    <h4 class="font-semibold text-cyan-200">The Drowned Reach</h4>
                                    <p class="text-sm text-gray-300">Where dense, shimmering mists rise eternally from dark
                                        waters, and the air is heavy with unnatural silence.</p>
                                </div>
                            </div>
                            <div class="bg-black bg-opacity-30 p-4 rounded-lg mt-4">
                                <p class="text-sm italic text-gray-300">
                                    "They speak not with words, nor light, nor dream. They wait beyond the world's
                                    breath, in the place where time forgets."
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- The Ridge -->
                    <div class="bg-gradient-to-br from-orange-600 to-red-700 rounded-xl p-8 text-white">
                        <div class="flex items-center mb-6">
                            <div
                                class="w-16 h-16 bg-white bg-opacity-20 rounded-full flex items-center justify-center mr-4">
                                <span class="text-2xl">🏔️</span>
                            </div>
                            <div>
                                <h3 class="text-2xl font-bold">The Ridge</h3>
                                <p class="text-gray-300">Fractured Archipelago</p>
                            </div>
                        </div>
                        <p class="text-gray-200 mb-6">
                            A treacherous region of volcanic islands and broken land between Pagalan and The Nebulee.
                            The scarred remnant of a cataclysmic event that shattered the world itself.
                        </p>
                        <div class="space-y-3">
                            <div class="flex items-start">
                                <span class="w-2 h-2 bg-orange-300 rounded-full mr-3 mt-2"></span>
                                <div>
                                    <h4 class="font-semibold text-orange-200">The Scission</h4>
                                    <p class="text-sm text-gray-300">An era-ending rift that broke the world's balance and
                                        sealed away something that should not have existed.</p>
                                </div>
                            </div>
                            <div class="flex items-start">
                                <span class="w-2 h-2 bg-orange-300 rounded-full mr-3 mt-2"></span>
                                <div>
                                    <h4 class="font-semibold text-orange-200">Volcanic Plumes</h4>
                                    <p class="text-sm text-gray-300">Subterranean heat boils the waters, and great stone
                                        arcs rear like the vertebrae of a titanic beast.</p>
                                </div>
                            </div>
                            <div class="flex items-start">
                                <span class="w-2 h-2 bg-orange-300 rounded-full mr-3 mt-2"></span>
                                <div>
                                    <h4 class="font-semibold text-orange-200">Twisted Reality</h4>
                                    <p class="text-sm text-gray-300">Magnetic fields go awry, time passes unevenly, and
                                        creatures appear from forgotten ages.</p>
                                </div>
                            </div>
                            <div class="bg-black bg-opacity-30 p-4 rounded-lg mt-4">
                                <p class="text-sm italic text-gray-300">
                                    "The geological strangeness is evidence of a world-shattering event that twisted the
                                    very nature of reality."
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Additional Mysterious Regions -->
                    <div class="bg-gradient-to-br from-teal-800 to-blue-900 rounded-xl p-8 text-white">
                        <div class="flex items-center mb-6">
                            <div
                                class="w-16 h-16 bg-white bg-opacity-20 rounded-full flex items-center justify-center mr-4">
                                <span class="text-2xl">❄️</span>
                            </div>
                            <div>
                                <h3 class="text-2xl font-bold">Far Southern Lands</h3>
                                <p class="text-gray-300">The Frost-Bound Edge</p>
                            </div>
                        </div>
                        <p class="text-gray-200 mb-6">
                            At the bleak southern edge of Pagalan, where winter dominates and the earth is iron-hard.
                            A place of perpetual grey skies and seas cold enough to kill within minutes.
                        </p>
                        <div class="space-y-3">
                            <div class="flex items-start">
                                <span class="w-2 h-2 bg-teal-300 rounded-full mr-3 mt-2"></span>
                                <div>
                                    <h4 class="font-semibold text-teal-200">Deleneos</h4>
                                    <p class="text-sm text-gray-300">The only true settlement, built from stone, packed
                                        snow, and whalebone overlooking the Southern Ice flow.</p>
                                </div>
                            </div>
                            <div class="flex items-start">
                                <span class="w-2 h-2 bg-teal-300 rounded-full mr-3 mt-2"></span>
                                <div>
                                    <h4 class="font-semibold text-teal-200">Ice Hunters</h4>
                                    <p class="text-sm text-gray-300">Stoic people who survive through seal hunting, whaling,
                                        and ice trapping in the harshest conditions.</p>
                                </div>
                            </div>
                            <div class="bg-black bg-opacity-30 p-4 rounded-lg mt-4">
                                <p class="text-sm italic text-gray-300">
                                    "Where the earth is often iron-hard, the skies perpetually grey, and the sea cold enough
                                    to kill within minutes."
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- The Far Northern Islands -->
                    <div class="bg-gradient-to-br from-indigo-700 to-slate-800 rounded-xl p-8 text-white">
                        <div class="flex items-center mb-6">
                            <div
                                class="w-16 h-16 bg-white bg-opacity-20 rounded-full flex items-center justify-center mr-4">
                                <span class="text-2xl">🏝️</span>
                            </div>
                            <div>
                                <h3 class="text-2xl font-bold">Far Northern Islands</h3>
                                <p class="text-gray-300">The Weathered Sentinels</p>
                            </div>
                        </div>
                        <p class="text-gray-200 mb-6">
                            A scattered archipelago of Quinn, Pinto, Crystalia Major, and Crystalia Minor, sitting like
                            weathered sentinels at the edge of the known world, shaped by harsh winters and salt-laden
                            winds.
                        </p>
                        <div class="space-y-3">
                            <div class="flex items-start">
                                <span class="w-2 h-2 bg-indigo-300 rounded-full mr-3 mt-2"></span>
                                <div>
                                    <h4 class="font-semibold text-indigo-200">Master Seafarers</h4>
                                    <p class="text-sm text-gray-300">Navigate icy waters aboard clinker-built vessels,
                                        trading across treacherous northern channels.</p>
                                </div>
                            </div>
                            <div class="flex items-start">
                                <span class="w-2 h-2 bg-indigo-300 rounded-full mr-3 mt-2"></span>
                                <div>
                                    <h4 class="font-semibold text-indigo-200">Neutral Traders</h4>
                                    <p class="text-sm text-gray-300">Maintain careful diplomatic neutrality, trading with
                                        both alliance and enemy forces.</p>
                                </div>
                            </div>
                            <div class="bg-black bg-opacity-30 p-4 rounded-lg mt-4">
                                <p class="text-sm italic text-gray-300">
                                    "Their survival depends on their ability to trade and remain diplomatically neutral in a
                                    world at war."
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>





@endsection

@section('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function () {
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
                btn.addEventListener('click', function () {
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
                region.addEventListener('mouseenter', function () {
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

                region.addEventListener('mouseleave', function () {
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
                hotspot.addEventListener('mouseenter', function () {
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

                hotspot.addEventListener('mouseleave', function () {
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
                        hotspot.addEventListener('click', function (e) {
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
                    document.addEventListener('click', function () {
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
document.addEventListener('DOMContentLoaded', function() {
    const tabButtons = document.querySelectorAll('.tab-btn');
    const tabContents = document.querySelectorAll('.tab-content');

    tabButtons.forEach(button => {
        button.addEventListener('click', function() {
            const targetTab = this.getAttribute('data-tab');

            // Remove active class from all buttons
            tabButtons.forEach(btn => {
                btn.classList.remove('bg-purple-600', 'text-white');
                btn.classList.add('text-gray-300', 'hover:text-white', 'hover:bg-gray-700');
            });

            // Add active class to clicked button
            this.classList.add('bg-purple-600', 'text-white');
            this.classList.remove('text-gray-300', 'hover:text-white', 'hover:bg-gray-700');

            // Hide all tab contents
            tabContents.forEach(content => {
                content.classList.remove('active');
                content.style.display = 'none';
            });

            // Show target tab content
            const targetContent = document.getElementById(targetTab);
            if (targetContent) {
                targetContent.classList.add('active');
                targetContent.style.display = 'block';
            }
        });
    });
});
</script>
@endsection

@section('styles')
    <style>
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

        .legend-item span {
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

    <style>
        .tab-content {
            display: none;
        }

        .tab-content.active {
            display: block;
        }

        .culture-card {
            transition: all 0.3s ease;
        }

        .culture-card:hover {
            transform: translateY(-5px);
        }

        .character-card {
            transition: all 0.3s ease;
        }

        .character-card:hover {
            transform: scale(1.02);
        }

        .gradient-bg {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        }

        .mysterious-bg {
            background: linear-gradient(135deg, #2d1b69 0%, #11998e 100%);
        }
    </style>
     <style>
        @import url('https://fonts.googleapis.com/css2?family=Cinzel:wght@400;600;700&family=Cormorant+Garamond:wght@300;400;600;700&display=swap');

        @keyframes float {
            0%, 100% { transform: translateY(0px) rotate(0deg); }
            50% { transform: translateY(-10px) rotate(1deg); }
        }

        @keyframes glow {
            from { box-shadow: 0 0 20px rgba(212, 175, 55, 0.3); }
            to { box-shadow: 0 0 30px rgba(212, 175, 55, 0.6), 0 0 40px rgba(212, 175, 55, 0.3); }
        }

        @keyframes shimmer {
            0% { background-position: -200% 0; }
            100% { background-position: 200% 0; }
        }

        .shimmer {
            background: linear-gradient(
                90deg,
                transparent,
                rgba(255, 255, 255, 0.2),
                transparent
            );
            background-size: 200% 100%;
            animation: shimmer 3s infinite;
        }

        .map-card {
            background: linear-gradient(135deg, rgba(244, 241, 232, 0.95) 0%, rgba(255, 255, 255, 0.9) 100%);
            backdrop-filter: blur(10px);
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .map-card:hover {
            transform: translateY(-8px) scale(1.02);
        }

        .image-placeholder {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            position: relative;
            overflow: hidden;
        }

        .image-placeholder::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(
                90deg,
                transparent,
                rgba(255, 255, 255, 0.3),
                transparent
            );
            transition: left 0.5s;
        }

        .map-card:hover .image-placeholder::before {
            left: 100%;
        }

        .ornate-border {
            position: relative;
        }

        .ornate-border::before {
            content: '';
            position: absolute;
            top: -2px;
            left: -2px;
            right: -2px;
            bottom: -2px;
            background: linear-gradient(45deg, #D4AF37, #F7E7CE, #D4AF37, #8B4513);
            border-radius: inherit;
            z-index: -1;
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .map-card:hover .ornate-border::before {
            opacity: 1;
        }
    </style>
    <style>
.tab-content {
    display: none;
}

.tab-content.active {
    display: block;
}

/* Make sure the first tab is visible by default */
#peoples {
    display: block;
}
</style>
@endsection
