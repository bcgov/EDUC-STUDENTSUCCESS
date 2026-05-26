@push('css')
<link href="/css/data-lit-spotlight.css" rel="stylesheet" type="text/css">
@endpush

<section class="spotlight-section position-relative my-5" id="spotlightCarousel">
    
    <!-- Arrows -->
    <button class="spotlight-prev" onclick="spotlightPrevSlide()" aria-label="Previous slide">
        <i class="fa-solid fa-arrow-left fa-lg"></i>
    </button>
    
    <button class="spotlight-next" onclick="spotlightNextSlide()" aria-label="Next slide">
        <i class="fa-solid fa-arrow-right fa-lg"></i>   
    </button>

    <div class="spotlight-carousel">
        
        <!-- Slide 1 -->
        <div class="spotlight-item active" data-slide-index="0">
            <div class="spotlight-title-container">
                <h2 class="spotlight-title">In the Spotlight</h2>
                <span class="spotlight-title-highlight"></span>
            </div>
            
            <div class="row align-items-center">
                <div class="col-md-5 mb-4 mb-md-0">
                    <div class="spotlight-img-wrapper">
                        <!-- Curved corner image -->
                        <img src="https://via.placeholder.com/400x350/003366/ffffff.png?text=Spotlight+Image+1" alt="Spotlight Image" class="spotlight-img">
                        <!-- Cyan Pin & Orange Ring -->
                        <div class="spotlight-accent-pin"></div>
                        <div class="spotlight-accent-ring"></div>
                    </div>
                </div>
                
                <div class="col-md-7 ps-md-5">
                    <h3 class="spotlight-subheading">New</h3>
                    <p>Welcome to In the Spotlight — your go-to for something interesting and new at the Ministry of Education and Child Care. Here, we highlight the stories behind the numbers: recent presentations, insights from predictive analysis, and cool new projects our teams are exploring. You'll also find reports, quarterly features from data experts across the Ministry, offering perspectives, ideas, and conversations that bring data and analytics to life.</p>
                    <p>Whether you're curious, love data, or just want to see what we're up to, check it out.</p>
                    
                    <div class="spotlight-footer">
                        <a href="#" class="spotlight-btn-cta">FIND OUT MORE +</a>
                        
                        <div class="spotlight-indicators">
                            <button type="button" class="indicator-0 active" onclick="spotlightGoTo(0)" aria-label="Slide 1"></button>
                            <button type="button" class="indicator-1" onclick="spotlightGoTo(1)" aria-label="Slide 2"></button>
                            <button type="button" class="indicator-2" onclick="spotlightGoTo(2)" aria-label="Slide 3"></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Slide 2 -->
        <div class="spotlight-item" data-slide-index="1">
            <div class="spotlight-title-container">
                <h2 class="spotlight-title">In the Spotlight</h2>
                <span class="spotlight-title-highlight"></span>
            </div>
            
            <div class="row align-items-center">
                <div class="col-md-5 mb-4 mb-md-0">
                    <div class="spotlight-img-wrapper">
                        <img src="https://via.placeholder.com/400x350/00b4d8/ffffff.png?text=Spotlight+Image+2" alt="Spotlight Image 2" class="spotlight-img">
                        <div class="spotlight-accent-pin"></div>
                        <div class="spotlight-accent-ring"></div>
                    </div>
                </div>
                
                <div class="col-md-7 ps-md-5">
                    <h3 class="spotlight-subheading">Featured</h3>
                    <p>Dive into our most recent quarterly features exploring new data presentation standards. Discover how predictive models are shaping the future of policy and decision-making for educators and students across the province. Join us on this journey of improvement.</p>
                    <p>With data, we empower the educational process step by step.</p>
                    
                    <div class="spotlight-footer">
                        <a href="#" class="spotlight-btn-cta">FIND OUT MORE +</a>
                        
                        <div class="spotlight-indicators">
                            <button type="button" class="indicator-0" onclick="spotlightGoTo(0)" aria-label="Slide 1"></button>
                            <button type="button" class="indicator-1 active" onclick="spotlightGoTo(1)" aria-label="Slide 2"></button>
                            <button type="button" class="indicator-2" onclick="spotlightGoTo(2)" aria-label="Slide 3"></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Slide 3 -->
        <div class="spotlight-item" data-slide-index="2">
            <div class="spotlight-title-container">
                <h2 class="spotlight-title">In the Spotlight</h2>
                <span class="spotlight-title-highlight"></span>
            </div>
            
            <div class="row align-items-center">
                <div class="col-md-5 mb-4 mb-md-0">
                    <div class="spotlight-img-wrapper">
                        <img src="https://via.placeholder.com/400x350/7209b7/ffffff.png?text=Spotlight+Image+3" alt="Spotlight Image 3" class="spotlight-img">
                        <div class="spotlight-accent-pin"></div>
                        <div class="spotlight-accent-ring"></div>
                    </div>
                </div>
                
                <div class="col-md-7 ps-md-5">
                    <h3 class="spotlight-subheading">Events</h3>
                    <p>Join us at the upcoming Data Analytics Information Sharing Session. Engage directly with our team of data custodians and analysts. We'll be discussing the latest release cycles and reviewing interactive tools available to superintendents.</p>
                    <p>Review the calendar for our next presentation date.</p>
                    
                    <div class="spotlight-footer">
                        <a href="#" class="spotlight-btn-cta">FIND OUT MORE +</a>
                        
                        <div class="spotlight-indicators">
                            <button type="button" class="indicator-0" onclick="spotlightGoTo(0)" aria-label="Slide 1"></button>
                            <button type="button" class="indicator-1" onclick="spotlightGoTo(1)" aria-label="Slide 2"></button>
                            <button type="button" class="indicator-2 active" onclick="spotlightGoTo(2)" aria-label="Slide 3"></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        let currentSpotlightSlide = 0;
        const spotlightSlides = document.querySelectorAll('#spotlightCarousel .spotlight-item');
        const numSlides = spotlightSlides.length;
        let spotlightInterval;

        window.spotlightGoTo = function(index) {
            if(spotlightSlides.length === 0) return;
            
            // Remove active classes
            spotlightSlides[currentSpotlightSlide].classList.remove('active');
            updateIndicators(currentSpotlightSlide, false);
            
            // Set new current
            currentSpotlightSlide = index;
            
            // Add active classes
            spotlightSlides[currentSpotlightSlide].classList.add('active');
            updateIndicators(currentSpotlightSlide, true);
            
            resetSpotlightInterval();
        };

        window.spotlightNextSlide = function() {
            let next = (currentSpotlightSlide + 1) % numSlides;
            spotlightGoTo(next);
        };

        window.spotlightPrevSlide = function() {
            let prev = (currentSpotlightSlide - 1 + numSlides) % numSlides;
            spotlightGoTo(prev);
        };

        function updateIndicators(index, isActive) {
            // Find all indicators matching this index across all slides
            const indicators = document.querySelectorAll('#spotlightCarousel .indicator-' + index);
            indicators.forEach(ind => {
                if(isActive) {
                    ind.classList.add('active');
                } else {
                    ind.classList.remove('active');
                }
            });
        }

        function resetSpotlightInterval() {
            clearInterval(spotlightInterval);
            spotlightInterval = setInterval(window.spotlightNextSlide, 6000); // 6 seconds
        }

        if (numSlides > 1) {
            resetSpotlightInterval();
        }
    });
</script>
