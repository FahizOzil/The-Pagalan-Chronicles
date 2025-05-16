@extends('layouts.app')
@section('title', $book->title . ' - The Pagalan Chronicles')
@section('styles')
  <style>
    /* ==== GLOBAL STYLES ==== */
    :root {
    --dark-bg: #121212;
    --dark-surface: #1e1e1e;
    --dark-card: #252525;
    --dark-border: #333333;
    --accent-color: #9c5dff;
    --accent-hover: #8a42ff;
    --text-primary: #ffffff;
    --text-secondary: #b0b0b0;
    --text-tertiary: #808080;
    --danger-color: #ff4d4d;
    --success-color: #4CAF50;
    --card-shadow: 0 8px 16px rgba(0, 0, 0, 0.5);
    --border-radius: 12px;
    --transition: all 0.3s ease;
    --heading-font: 'Cinzel', serif;
    }

    * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    }

    body {
    font-family: 'Poppins', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, sans-serif;
    color: var(--text-color);
    line-height: 1.6;
    }

    .container {
    width: 100%;
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 20px;
    }

    /* ==== HERO SECTION ==== */
    .hero-section {
    position: relative;
    min-height: 90vh;
    overflow: hidden;
    color: #fff;
    /* Add top padding to prevent content from hiding under navbar */
    padding: 80px 0 60px;
    /* Increased top padding */
    }

    .hero-bg {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-size: cover;
    background-position: center;
    z-index: -1;
    filter: brightness(0.5);
    }

    .hero-bg::after {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: linear-gradient(to bottom, rgba(0, 0, 0, 0.7) 0%, rgba(0, 0, 0, 0.5) 100%);
    }

    .hero-content {
    position: relative;
    z-index: 1;
    }

    .hero-grid {
    display: grid;
    grid-template-columns: 1fr 1.5fr;
    gap: 40px;
    align-items: center;
    }

    /* Book Cover Styles */
    .book-cover-wrapper {
    position: relative;
    perspective: 1000px;
    max-width: 400px;
    margin: 0 auto;
    transition: var(--transition);
    }

    .book-cover {
    width: 100%;
    height: auto;
    border-radius: 8px;
    box-shadow: 0 15px 30px rgba(0, 0, 0, 0.3);
    transform: rotateY(10deg);
    transition: transform 0.6s ease-in-out, box-shadow 0.6s ease;
    }

    .book-cover-wrapper:hover .book-cover {
    transform: rotateY(0deg);
    box-shadow: 0 20px 40px rgba(0, 0, 0, 0.4);
    }

    .book-shine {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: linear-gradient(135deg,
      rgba(255, 255, 255, 0.2) 0%,
      rgba(255, 255, 255, 0) 60%);
    border-radius: 8px;
    pointer-events: none;
    }

    .coming-soon-badge {
    position: absolute;
    top: -15px;
    right: -15px;
    background-color: var(--secondary-color);
    color: white;
    padding: 8px 16px;
    border-radius: 20px;
    font-weight: 600;
    font-size: 14px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    transform: rotate(5deg);
    z-index: 2;
    }

    /* Book Details */
    .book-details {
    display: flex;
    flex-direction: column;
    gap: 20px;
    }

    .book-title {
    font-size: 3rem;
    font-weight: 700;
    line-height: 1.2;
    margin-bottom: 5px;
    background: linear-gradient(to right, #fff, #ddd);
    -webkit-background-clip: text;
    background-clip: text;
    color: transparent;
    text-shadow: 0 2px 4px rgba(0, 0, 0, 0.3);
    }

    .book-subtitle {
    font-size: 1.2rem;
    color: rgba(255, 255, 255, 0.8);
    margin-bottom: 20px;
    }

    .book-meta {
    display: flex;
    flex-wrap: wrap;
    gap: 20px;
    margin-bottom: 20px;
    }

    .meta-item {
    display: flex;
    align-items: center;
    gap: 8px;
    font-size: 0.95rem;
    }

    .meta-item i {
    color: var(--accent-color);
    }

    /* Purchase Container */
    .purchase-container {
    background: rgba(0, 0, 0, 0.3);
    backdrop-filter: blur(10px);
    border-radius: var(--border-radius);
    padding: 20px;
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
    border: 1px solid rgba(255, 255, 255, 0.1);
    margin-top: 10px;
    /* Added margin to improve spacing */
    }

    /* Format Tabs */
    .format-tabs {
    display: flex;
    margin-bottom: 20px;
    border-bottom: 1px solid rgba(255, 255, 255, 0.2);
    overflow-x: auto;
    /* Allow scrolling on smaller screens */
    scrollbar-width: none;
    /* Hide scrollbar for Firefox */
    -ms-overflow-style: none;
    /* Hide scrollbar for IE and Edge */
    }

    /* Hide scrollbar for Chrome, Safari and Opera */
    .format-tabs::-webkit-scrollbar {
    display: none;
    }

    .format-tab {
    padding: 10px 20px;
    cursor: pointer;
    transition: var(--transition);
    font-weight: 500;
    position: relative;
    color: rgba(255, 255, 255, 0.7);
    white-space: nowrap;
    /* Prevent wrapping of tab text */
    }

    .format-tab:hover {
    color: white;
    }

    .format-tab.active {
    color: white;
    }

    .format-tab.active::after {
    content: '';
    position: absolute;
    bottom: -1px;
    left: 0;
    width: 100%;
    height: 3px;
    background-color: var(--accent-color);
    border-radius: 3px 3px 0 0;
    }

    /* Format Content */
    .format-content {
    display: none;
    }

    .format-content.active {
    display: block;
    animation: fadeIn 0.5s ease;
    }

    @keyframes fadeIn {
    from {
      opacity: 0;
      transform: translateY(5px);
    }

    to {
      opacity: 1;
      transform: translateY(0);
    }
    }

    /* Price Box */
    .price-box {
    display: flex;
    flex-direction: column;
    gap: 15px;
    }

    .price {
    font-size: 2rem;
    font-weight: 700;
    color: white;
    }

    /* Retailer Buttons */
    .retailer-buttons {
    display: flex;
    flex-wrap: wrap;
    gap: 12px;
    }

    .btn-retailer {
    flex: 1;
    min-width: 120px;
    padding: 12px 20px;
    border-radius: var(--border-radius);
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 8px;
    font-weight: 600;
    text-decoration: none;
    transition: var(--transition);
    color: white;
    }

    .btn-retailer.amazon {
    background-color: #ff9900;
    }

    .btn-retailer.bn {
    background-color: #2e7d32;
    }

    .btn-retailer.kobo {
    background-color: #00b6ff;
    }

    .btn-retailer.direct {
    background-color: #6200ea;
    }

    .btn-retailer.pre-order {
    background-color: var(--secondary-color);
    }

    .btn-retailer:hover {
    transform: translateY(-3px);
    box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2);
    }

    .btn-retailer[disabled] {
    opacity: 0.6;
    cursor: not-allowed;
    }

    /* Release Notification */
    .release-notification {
    margin-top: 25px;
    background: rgba(255, 255, 255, 0.1);
    padding: 15px;
    border-radius: var(--border-radius);
    border: 1px dashed rgba(255, 255, 255, 0.3);
    }

    .release-notification p {
    margin-bottom: 10px;
    font-size: 0.95rem;
    }

    .notification-form {
    display: flex;
    gap: 10px;
    }

    .notification-form input {
    flex: 1;
    padding: 12px 15px;
    border-radius: var(--border-radius);
    border: 1px solid rgba(255, 255, 255, 0.3);
    background: rgba(255, 255, 255, 0.1);
    color: white;
    font-size: 0.95rem;
    }

    .notification-form input::placeholder {
    color: rgba(255, 255, 255, 0.6);
    }

    .btn-notify {
    padding: 12px 20px;
    background-color: var(--accent-color);
    border: none;
    border-radius: var(--border-radius);
    color: white;
    font-weight: 600;
    cursor: pointer;
    transition: var(--transition);
    }

    .btn-notify:hover {
    background-color: #e67e22;
    transform: translateY(-2px);
    }

    /* Back to Top Button */
    .back-to-top {
    position: fixed;
    bottom: 30px;
    right: 30px;
    background: var(--primary-color);
    color: white;
    width: 50px;
    height: 50px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    cursor: pointer;
    opacity: 0;
    visibility: hidden;
    transition: all 0.3s ease;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
    z-index: 999;
    }

    .back-to-top.visible {
    opacity: 1;
    visibility: visible;
    }

    .back-to-top:hover {
    background: var(--secondary-color);
    transform: translateY(-3px);
    }

    /* ==== RESPONSIVE STYLES ==== */
    @media (max-width: 1024px) {
    .hero-grid {
      grid-template-columns: 1fr 1.2fr;
      gap: 30px;
    }

    .book-title {
      font-size: 2.5rem;
    }
    }

    @media (max-width: 768px) {
    .hero-section {
      padding: 120px 0 40px;
      /* Increased top padding for mobile */
      min-height: auto;
      /* Allow section to shrink as needed */
    }

    .hero-grid {
      grid-template-columns: 1fr;
      gap: 30px;
    }

    .book-cover-wrapper {
      max-width: 280px;
      /* Slightly smaller cover */
      margin: 0 auto 20px;
      order: -1;
      /* Display book first on mobile */
    }

    .book-title {
      font-size: 2.2rem;
      text-align: center;
    }

    .book-subtitle {
      font-size: 1.1rem;
      text-align: center;
    }

    .book-meta {
      justify-content: center;
      gap: 15px;
    }

    /* Format tabs for mobile */
    .format-tabs {
      justify-content: center;
      padding-bottom: 5px;
    }

    .format-tab {
      padding: 10px 15px;
      font-size: 0.95rem;
    }

    /* Vertical retailer buttons for mobile */
    .retailer-buttons {
      flex-direction: column;
    }

    .btn-retailer {
      width: 100%;
    }

    .notification-form {
      flex-direction: column;
      gap: 10px;
    }

    .btn-notify {
      width: 100%;
      padding: 14px;
    }
    }

    @media (max-width: 576px) {
    .hero-section {
      padding: 100px 0 30px;
      /* Adjusted padding for small mobile */
    }

    .book-cover-wrapper {
      max-width: 240px;
    }

    .book-title {
      font-size: 1.8rem;
    }

    .book-subtitle {
      font-size: 1rem;
    }

    .meta-item {
      font-size: 0.9rem;
    }

    .price {
      font-size: 1.7rem;
      text-align: center;
    }

    .format-tab {
      padding: 8px 12px;
      font-size: 0.9rem;
    }

    .back-to-top {
      bottom: 20px;
      right: 20px;
      width: 40px;
      height: 40px;
    }
    }

    /* Mobile-specific styles */
    @media (max-width: 480px) {
    .hero-section {
      padding: 90px 0 20px;
    }

    .book-title {
      font-size: 1.6rem;
    }

    .book-meta {
      flex-direction: column;
      align-items: center;
      gap: 10px;
    }

    .purchase-container {
      padding: 15px;
    }
    }
  </style>

  <style>
    .book-container {
    position: relative;
    padding-bottom: 2rem;
    }

    .book-bg {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-image: url("{{ asset('images/characters/banner2.jpg') }}");
    background-size: cover;
    background-position: center;
    opacity: 0.4;
    z-index: 1;
    }

    .book-content {
    position: relative;
    z-index: 2;
    display: flex;
    flex-direction: column;
    align-items: center;
    padding: 2rem 1rem;
    }

    .author-header {
    background-color: rgba(0, 0, 0, 0.7);
    padding: 0.5rem 2rem;
    border-radius: 20px;
    margin-bottom: 1rem;
    text-align: center;
    max-width: 90%;
    z-index: 3;
    }

    .book-display {
    display: flex;
    width: 100%;
    max-width: 800px;
    margin: 0 auto;
    }

    .book-cover {
    flex: 1;
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 1rem;
    perspective: 1000px;
    }

    .book {
    width: 100%;
    max-width: 280px;
    transform: rotateY(-10deg);
    transform-style: preserve-3d;
    transition: transform 0.5s;
    box-shadow: 5px 5px 20px rgba(0, 0, 0, 0.7);
    }

    .book img {
    width: 100%;
    height: auto;
    display: block;
    border-radius: 5px;
    }

    .book-info {
    flex: 1;
    padding: 1rem;
    display: flex;
    flex-direction: column;
    justify-content: center;
    }

    .book-title {
    font-size: 1.8rem;
    margin-bottom: 0.5rem;
    color: var(--primary-color);
    text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
    text-align: center;
    }

    .book-subtitle {
    font-size: 1.2rem;
    color: var(--text-color);
    margin-bottom: 1rem;
    text-align: center;
    }

    .book-details {
    list-style: none;
    margin: 1rem 0;
    }

    .book-details li {
    margin-bottom: 0.5rem;
    display: flex;
    align-items: center;
    }

    .book-details li::before {
    content: "■";
    color: var(--selected-color);
    margin-right: 0.5rem;
    }

    .format-selector {
    display: flex;
    justify-content: center;
    margin: 1.5rem 0;
    background-color: rgba(0, 0, 0, 0.3);
    border-radius: 25px;
    padding: 0.5rem;
    width: 100%;
    max-width: 400px;
    }

    .format-btn {
    flex: 1;
    padding: 0.5rem 1rem;
    background: transparent;
    border: none;
    color: var(--text-color);
    cursor: pointer;
    text-align: center;
    transition: all 0.3s;
    border-radius: 20px;
    }

    .format-btn.active {
    background-color: var(--selected-color);
    font-weight: bold;
    }

    .overview-section {
    background-color: var(--section-bg);
    padding: 2rem;
    width: 100%;
    }

    .overview-title {
    font-size: 2rem;
    text-align: center;
    margin-bottom: 1.5rem;
    text-transform: uppercase;
    letter-spacing: 2px;
    }

    /* Media Queries for Responsiveness */
    @media (max-width: 768px) {
    .book-display {
      flex-direction: column;
    }

    .book-cover {
      margin-bottom: 2rem;
    }

    .book {
      max-width: 220px;
    }

    .book-title {
      font-size: 1.5rem;
    }

    .format-selector {
      max-width: 300px;
    }
    }

    @media (max-width: 480px) {
    .header {
      padding: 1rem;
    }

    .author-header {
      padding: 0.3rem 1rem;
      font-size: 0.9rem;
    }

    .book-title {
      font-size: 1.3rem;
    }

    .book-subtitle {
      font-size: 1rem;
    }

    .book {
      max-width: 180px;
    }

    .format-selector {
      max-width: 280px;
    }

    .format-btn {
      padding: 0.3rem 0.5rem;
      font-size: 0.9rem;
    }

    .overview-title {
      font-size: 1.5rem;
    }
    }
  </style>
@endsection

@section('content')
  <!-- Improved Hero Section for Better Responsiveness -->
  {{-- <section class="hero-section">
    <div class="hero-bg" style="background-image: url('{{ asset('images/characters/banner4.jpg') }}')"></div>
    <div class="container">
    <div class="hero-content">
      <div class="hero-grid">
      <div class="book-cover-wrapper" data-aos="fade-right">
        <img src="{{ asset($book->cover_image) }}" alt="{{ $book->title }} book cover" class="book-cover">
        <div class="book-shine"></div>
        @if($book->is_upcoming)
        <div class="coming-soon-badge">Coming {{ $book->release_date }}</div>
        @endif
      </div>
      <div class="book-details" data-aos="fade-left">
        <h1 class="book-title">{{ $book->title }}</h1>
        <div class="book-subtitle">Book {{ $book->book_number }} of The Pagalan Chronicles</div>
        <div class="book-meta">
        <div class="meta-item">
          <i class="fas fa-calendar" aria-hidden="true"></i>
          <span>{{ $book->is_upcoming ? 'Releasing: ' : 'Released: ' }} {{ $book->release_date }}</span>
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

        <!-- Hardback Format -->
        <div class="format-content active" id="hardback-content">
          <div class="price-box">
          <span class="price">£24</span>
          <div class="retailer-buttons">
            <a href="{{ $book->amazon_link ?? '#' }}"
            class="btn-retailer amazon {{ $book->is_upcoming ? 'pre-order' : '' }}" target="_blank"
            rel="noopener noreferrer" {{ $book->amazon_link ? '' : 'disabled' }}>
            <i class="fab fa-amazon" aria-hidden="true"></i>
            {{ $book->is_upcoming ? 'Pre-order' : 'Amazon' }}
            </a>
            <a href="{{ $book->barnes_noble_link ?? '#' }}"
            class="btn-retailer bn {{ $book->is_upcoming ? 'pre-order' : '' }}" target="_blank"
            rel="noopener noreferrer" {{ $book->barnes_noble_link ? '' : 'disabled' }}>
            <i class="fas fa-book" aria-hidden="true"></i>
            {{ $book->is_upcoming ? 'Pre-order' : 'B&N' }}
            </a>
            <a href="{{ $book->direct_purchase_link ?? '#' }}"
            class="btn-retailer direct {{ $book->is_upcoming ? 'pre-order' : '' }}" target="_blank"
            rel="noopener noreferrer" {{ $book->direct_purchase_link ? '' : 'disabled' }}>
            <i class="fas fa-shopping-cart" aria-hidden="true"></i>
            {{ $book->is_upcoming ? 'Pre-order' : 'Direct' }}
            </a>
          </div>
          </div>
        </div>

        <!-- Softback Format -->
        <div class="format-content" id="softback-content">
          <div class="price-box">
          <span class="price">£14</span>
          <div class="retailer-buttons">
            <a href="{{ $book->amazon_link_soft ?? '#' }}"
            class="btn-retailer amazon {{ $book->is_upcoming ? 'pre-order' : '' }}" target="_blank"
            rel="noopener noreferrer" {{ $book->amazon_link_soft ? '' : 'disabled' }}>
            <i class="fab fa-amazon" aria-hidden="true"></i>
            {{ $book->is_upcoming ? 'Pre-order' : 'Amazon' }}
            </a>
            <a href="{{ $book->barnes_noble_link_soft ?? '#' }}"
            class="btn-retailer bn {{ $book->is_upcoming ? 'pre-order' : '' }}" target="_blank"
            rel="noopener noreferrer" {{ $book->barnes_noble_link_soft ? '' : 'disabled' }}>
            <i class="fas fa-book" aria-hidden="true"></i>
            {{ $book->is_upcoming ? 'Pre-order' : 'B&N' }}
            </a>
            <a href="{{ $book->direct_purchase_link_soft ?? '#' }}"
            class="btn-retailer direct {{ $book->is_upcoming ? 'pre-order' : '' }}" target="_blank"
            rel="noopener noreferrer" {{ $book->direct_purchase_link_soft ? '' : 'disabled' }}>
            <i class="fas fa-shopping-cart" aria-hidden="true"></i>
            {{ $book->is_upcoming ? 'Pre-order' : 'Direct' }}
            </a>
          </div>
          </div>
        </div>

        <!-- eBook Format -->
        <div class="format-content" id="ebook-content">
          <div class="price-box">
          <span class="price">£7.99</span>
          <div class="retailer-buttons">
            <a href="{{ $book->amazon_link_ebook ?? '#' }}"
            class="btn-retailer amazon {{ $book->is_upcoming ? 'pre-order' : '' }}" target="_blank"
            rel="noopener noreferrer" {{ $book->amazon_link_ebook ? '' : 'disabled' }}>
            <i class="fab fa-amazon" aria-hidden="true"></i>
            {{ $book->is_upcoming ? 'Pre-order' : 'Amazon' }}
            </a>
            <a href="{{ $book->kobo_link ?? '#' }}"
            class="btn-retailer kobo {{ $book->is_upcoming ? 'pre-order' : '' }}" target="_blank"
            rel="noopener noreferrer" {{ $book->kobo_link ? '' : 'disabled' }}>
            <i class="fas fa-tablet-alt" aria-hidden="true"></i>
            {{ $book->is_upcoming ? 'Pre-order' : 'Kobo' }}
            </a>
            <a href="{{ $book->direct_purchase_link_ebook ?? '#' }}"
            class="btn-retailer direct {{ $book->is_upcoming ? 'pre-order' : '' }}" target="_blank"
            rel="noopener noreferrer" {{ $book->direct_purchase_link_ebook ? '' : 'disabled' }}>
            <i class="fas fa-download" aria-hidden="true"></i>
            {{ $book->is_upcoming ? 'Pre-order' : 'Direct' }}
            </a>
          </div>
          </div>
        </div>

        @if($book->is_upcoming)
        <div class="release-notification">
          <p><i class="fas fa-bell" aria-hidden="true"></i> Get notified when this book releases:</p>
          <form action="{{ route('book.notify', $book->id) }}" method="POST" class="notification-form">
          @csrf
          <input type="email" name="email" placeholder="Your email" required>
          <button type="submit" class="btn-notify">Notify Me</button>
          </form>
        </div>
        @endif
        </div>
      </div>
      </div>
    </div>
    </div>
  </section> --}}

  <main class="book-container">
    <div class="book-bg"></div>
    <div class="book-content">
    <div class="author-header">
      <h2>Andrew Houlston</h2>
    </div>

    <div class="book-display">
      <div class="book-cover">
      <div class="book">
        <img src="{{ asset($book->cover_image) }}" alt="The Pagalan Chronicles Book Cover">
      </div>
      </div>

      <div class="book-info">
      <h1 class="book-title">THE PAGALAN CHRONICLES</h1>
      <h2 class="book-subtitle">{{ $book->slug }}</h2>
      <p class="book-subtitle">Book {{ $book->book_number }} of The Pagalan Chronicles</p>

      <ul class="book-details">
        <li>Released: {{ $book->release_date }}</li>
        <li>{{ $book->page_count }} Pages</li>
        <li>{{ $book->category ?? 'Fantasy Adventure' }}</li>
      </ul>

      <div class="purchase-container">
        <div class="format-tabs">
        <div class="format-tab active" data-format="hardback">Hardback</div>
        <div class="format-tab" data-format="softback">Softback</div>
        <div class="format-tab" data-format="ebook">eBook</div>
        </div>

        <!-- Hardback Format -->
        <div class="format-content active" id="hardback-content">
        <div class="price-box">
          <span class="price">£24</span>
          <div class="retailer-buttons">
          <a href="{{ $book->amazon_link ?? '#' }}"
            class="btn-retailer amazon {{ $book->is_upcoming ? 'pre-order' : '' }}" target="_blank"
            rel="noopener noreferrer" {{ $book->amazon_link ? '' : 'disabled' }}>
            <i class="fab fa-amazon" aria-hidden="true"></i>
            {{ $book->is_upcoming ? 'Pre-order' : 'Amazon' }}
          </a>
          <a href="{{ $book->barnes_noble_link ?? '#' }}"
            class="btn-retailer bn {{ $book->is_upcoming ? 'pre-order' : '' }}" target="_blank"
            rel="noopener noreferrer" {{ $book->barnes_noble_link ? '' : 'disabled' }}>
            <i class="fas fa-book" aria-hidden="true"></i>
            {{ $book->is_upcoming ? 'Pre-order' : 'B&N' }}
          </a>
          <a href="{{ $book->direct_purchase_link ?? '#' }}"
            class="btn-retailer direct {{ $book->is_upcoming ? 'pre-order' : '' }}" target="_blank"
            rel="noopener noreferrer" {{ $book->direct_purchase_link ? '' : 'disabled' }}>
            <i class="fas fa-shopping-cart" aria-hidden="true"></i>
            {{ $book->is_upcoming ? 'Pre-order' : 'Direct' }}
          </a>
          </div>
        </div>
        </div>

        <!-- Softback Format -->
        <div class="format-content" id="softback-content">
        <div class="price-box">
          <span class="price">£14</span>
          <div class="retailer-buttons">
          <a href="{{ $book->amazon_link_soft ?? '#' }}"
            class="btn-retailer amazon {{ $book->is_upcoming ? 'pre-order' : '' }}" target="_blank"
            rel="noopener noreferrer" {{ $book->amazon_link_soft ? '' : 'disabled' }}>
            <i class="fab fa-amazon" aria-hidden="true"></i>
            {{ $book->is_upcoming ? 'Pre-order' : 'Amazon' }}
          </a>
          <a href="{{ $book->barnes_noble_link_soft ?? '#' }}"
            class="btn-retailer bn {{ $book->is_upcoming ? 'pre-order' : '' }}" target="_blank"
            rel="noopener noreferrer" {{ $book->barnes_noble_link_soft ? '' : 'disabled' }}>
            <i class="fas fa-book" aria-hidden="true"></i>
            {{ $book->is_upcoming ? 'Pre-order' : 'B&N' }}
          </a>
          <a href="{{ $book->direct_purchase_link_soft ?? '#' }}"
            class="btn-retailer direct {{ $book->is_upcoming ? 'pre-order' : '' }}" target="_blank"
            rel="noopener noreferrer" {{ $book->direct_purchase_link_soft ? '' : 'disabled' }}>
            <i class="fas fa-shopping-cart" aria-hidden="true"></i>
            {{ $book->is_upcoming ? 'Pre-order' : 'Direct' }}
          </a>
          </div>
        </div>
        </div>

        <!-- eBook Format -->
        <div class="format-content" id="ebook-content">
        <div class="price-box">
          <span class="price">£7.99</span>
          <div class="retailer-buttons">
          <a href="{{ $book->amazon_link_ebook ?? '#' }}"
            class="btn-retailer amazon {{ $book->is_upcoming ? 'pre-order' : '' }}" target="_blank"
            rel="noopener noreferrer" {{ $book->amazon_link_ebook ? '' : 'disabled' }}>
            <i class="fab fa-amazon" aria-hidden="true"></i>
            {{ $book->is_upcoming ? 'Pre-order' : 'Amazon' }}
          </a>
          <a href="{{ $book->kobo_link ?? '#' }}"
            class="btn-retailer kobo {{ $book->is_upcoming ? 'pre-order' : '' }}" target="_blank"
            rel="noopener noreferrer" {{ $book->kobo_link ? '' : 'disabled' }}>
            <i class="fas fa-tablet-alt" aria-hidden="true"></i>
            {{ $book->is_upcoming ? 'Pre-order' : 'Kobo' }}
          </a>
          <a href="{{ $book->direct_purchase_link_ebook ?? '#' }}"
            class="btn-retailer direct {{ $book->is_upcoming ? 'pre-order' : '' }}" target="_blank"
            rel="noopener noreferrer" {{ $book->direct_purchase_link_ebook ? '' : 'disabled' }}>
            <i class="fas fa-download" aria-hidden="true"></i>
            {{ $book->is_upcoming ? 'Pre-order' : 'Direct' }}
          </a>
          </div>
        </div>
        </div>

        @if($book->is_upcoming)
      <div class="release-notification">
      <p><i class="fas fa-bell" aria-hidden="true"></i> Get notified when this book releases:</p>
      <form action="{{ route('book.notify', $book->id) }}" method="POST" class="notification-form">
        @csrf
        <input type="email" name="email" placeholder="Your email" required>
        <button type="submit" class="btn-notify">Notify Me</button>
      </form>
      </div>
      @endif
      </div>

      </div>
    </div>
    </div>
  </main>


  <x-over-view-show-page :book="$book" />
  <!-- Quote Slider Section -->
  <x-quote-slider />

  <!-- Subscription Section -->
  <x-adventure-subscribe />

  <!-- Back to Top Button -->
  <div class="back-to-top" id="backToTop">
    <i class="fas fa-arrow-up"></i>
  </div>
@endsection

@section('scripts')
  <script>
    document.addEventListener('DOMContentLoaded', function () {
    // Improved Format Tabs Functionality with Mobile Support
    const formatTabs = document.querySelectorAll('.format-tab');
    const formatContents = document.querySelectorAll('.format-content');

    formatTabs.forEach(tab => {
      tab.addEventListener('click', () => {
      // Update active tab
      formatTabs.forEach(t => t.classList.remove('active'));
      tab.classList.add('active');

      // Show content
      const format = tab.getAttribute('data-format');
      formatContents.forEach(content => content.classList.remove('active'));
      document.getElementById(`${format}-content`).classList.add('active');

      // If on mobile, scroll the clicked tab into view for better UX
      if (window.innerWidth <= 768) {
        tab.scrollIntoView({ behavior: 'smooth', block: 'nearest', inline: 'center' });
      }
      });
    });

    // Book Cover hover effect with touch device support
    const bookCover = document.querySelector('.book-cover-wrapper');
    if (bookCover) {
      // Only apply 3D effect on non-touch devices (desktop)
      if (window.matchMedia("(hover: hover)").matches) {
      bookCover.addEventListener('mousemove', function (e) {
        const xAxis = (window.innerWidth / 2 - e.pageX) / 25;
        const yAxis = (window.innerHeight / 2 - e.pageY) / 25;
        this.style.transform = `rotateY(${xAxis}deg) rotateX(${yAxis}deg)`;
      });

      bookCover.addEventListener('mouseenter', function () {
        this.style.transition = 'none';
      });

      bookCover.addEventListener('mouseleave', function () {
        this.style.transition = 'transform 0.5s ease';
        this.style.transform = 'rotateY(10deg) rotateX(0deg)';
      });
      }
    }

    // Back to Top Button
    const backToTopButton = document.getElementById('backToTop');

    function toggleBackToTopButton() {
      if (window.pageYOffset > 300) {
      backToTopButton.classList.add('visible');
      } else {
      backToTopButton.classList.remove('visible');
      }
    }

    // Initial check on page load
    toggleBackToTopButton();

    // Check on scroll
    window.addEventListener('scroll', toggleBackToTopButton);

    backToTopButton.addEventListener('click', function () {
      window.scrollTo({
      top: 0,
      behavior: 'smooth'
      });
    });

    // Form submission feedback
    const notificationForm = document.querySelector('.notification-form');
    if (notificationForm) {
      notificationForm.addEventListener('submit', function (e) {
      const button = this.querySelector('.btn-notify');
      button.innerHTML = '<i class="fas fa-spinner fa-spin"></i>';

      // Demo animation for visual feedback
      setTimeout(() => {
        button.innerHTML = '<i class="fas fa-check"></i> Subscribed';
        button.style.backgroundColor = '#27ae60';
      }, 1500);
      });
    }

    // Adjust layout based on screen size
    function adjustLayout() {
      // Add additional layout adjustments if needed
      const isPriceCenter = window.innerWidth <= 768;
      const prices = document.querySelectorAll('.price');

      prices.forEach(price => {
      price.style.textAlign = isPriceCenter ? 'center' : 'left';
      });
    }

    // Run on page load and resize
    adjustLayout();
    window.addEventListener('resize', adjustLayout);
    });
  </script>
@endsection
