<style>
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
</style>



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