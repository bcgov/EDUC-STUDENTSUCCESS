<!-- Link to custom Hero CSS -->
<link href="/css/hero.css" rel="stylesheet" type="text/css">

<section class="custom-hero-carousel" id="vanillaHeroCarousel">
        
    <!-- Carousel Indicators (The dots at the bottom right) -->
    <div class="custom-carousel-indicators">
        <button type="button" class="active" onclick="bcGovGoToSlide(0)" aria-label="Slide 1"></button>
        <button type="button" onclick="bcGovGoToSlide(1)" aria-label="Slide 2"></button>
        <button type="button" onclick="bcGovGoToSlide(2)" aria-label="Slide 3"></button>
    </div>

    <!-- Carousel Slides/Inner Content -->
    <div class="custom-hero-inner">
        
        <!-- Slide 1 -->
        <div class="custom-hero-item active">
            <!-- Placeholder Image -->
            <img src="https://placehold.co/1920x400/003366/FFFFFF?text=Hero+Banner+1" class="placeholder-img" alt="First slide placeholder">
            
            <!-- Slide Content -->
            <div class="custom-carousel-caption d-none d-md-block">
                <h2>Using data and insights to support student success.</h2>
                <p>Placeholder descriptive text for the first slide.</p>
            </div>
        </div>
        
        <!-- Slide 2 -->
        <div class="custom-hero-item">
            <!-- Placeholder Image -->
            <img src="https://placehold.co/1920x400/00b4d8/FFFFFF?text=Hero+Banner+2" class="placeholder-img" alt="Second slide placeholder">
            
            <div class="custom-carousel-caption d-none d-md-block">
                <h2>Data Impacts What Happens in the Classroom</h2>
                <p>Placeholder descriptive text for the second slide.</p>
            </div>
        </div>
        
        <!-- Slide 3 -->
        <div class="custom-hero-item">
            <!-- Placeholder Image -->
            <img src="https://placehold.co/1920x400/7209b7/FFFFFF?text=Hero+Banner+3" class="placeholder-img" alt="Third slide placeholder">
            
            <div class="custom-carousel-caption d-none d-md-block">
                <h2>Continuous Improvement Program</h2>
                <p>Placeholder descriptive text for the third slide.</p>
            </div>
        </div>
        
    </div>

</section>

<!-- Vanilla JS functionality for the carousel -->
<script>
    document.addEventListener("DOMContentLoaded", function() {
        let currentSlide = 0;
        const slides = document.querySelectorAll('#vanillaHeroCarousel .custom-hero-item');
        const indicators = document.querySelectorAll('#vanillaHeroCarousel .custom-carousel-indicators button');
        const totalSlides = slides.length;
        let slideInterval;

        window.bcGovGoToSlide = function(index) {
            // Remove active class from current
            slides[currentSlide].classList.remove('active');
            indicators[currentSlide].classList.remove('active');
            
            // Update index
            currentSlide = index;
            
            // Add active class to new
            slides[currentSlide].classList.add('active');
            indicators[currentSlide].classList.add('active');
            
            // Reset the auto-scroll timer
            resetInterval();
        };

        function nextSlide() {
            let next = (currentSlide + 1) % totalSlides;
            window.bcGovGoToSlide(next);
        }

        function resetInterval() {
            clearInterval(slideInterval);
            // Switch automatically every 5 seconds
            slideInterval = setInterval(nextSlide, 5000);
        }

        // Initialize auto-scroll
        if (totalSlides > 1) {
            resetInterval();
        }
    });
</script>
