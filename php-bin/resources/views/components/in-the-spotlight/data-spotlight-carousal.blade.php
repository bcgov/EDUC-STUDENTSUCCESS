<!-- Link to custom Data Spotlight Carousel CSS -->
<link href="/css/data-spotlight-carousal.css" rel="stylesheet" type="text/css">

<section class="container data-spotlight-section my-5" id="dataSpotlightCarousal">
    
    <!-- Row 1: Top Links -->
    <div class="row ds-top-links">
        <div class="col-12 d-flex flex-wrap gap-3">
            <a href="#" class="search-btn-blue">HEAR THE LATEST - JOIN OUR MAILING LIST +</a>
            <a href="#" class="search-btn-teal">
                <img src="https://placehold.co/20x20/transparent/ffffff?text=%" alt="Archive Icon" class="me-2" style="width: 20px;">
                IN THE SPOTLIGHT ARCHIVE &rarr;
            </a>
        </div>
    </div>

    <!-- Row 2: Carousel Content -->
    <div class="position-relative ds-carousel-wrapper">
        
        <!-- Left Arrow -->
        <button class="custom-ds-prev" type="button" onclick="dsGoToSlide('prev')" aria-label="Previous Slide">
            &larr;
        </button>
        
        <!-- Carousel Inner -->
        <div class="ds-carousel-inner">
            
            <!-- Slide 1 -->
            <div class="ds-item active">
                <div class="row align-items-center">
                    <!-- Left Column: Text Content -->
                    <div class="col-lg-6 pe-lg-5">
                        <div class="ds-title-wrapper">
                            <h2 class="ds-title">Data <span class="ds-highlight">Spotlight</span></h2>
                        </div>
                        <h3 class="ds-subtitle">Student Success has a fresh new look &ndash; shaped by you.</h3>
                        <p class="ds-paragraph">The Student Success website has a new look and feel &ndash; same great site, with updated dashboards, visual stories and insights designed to help everyone, from parents to policymakers, support student learning. Find out how we got here and future plans for the site.</p>
                        <a href="#" class="btn btn-ds-readmore">READ MORE +</a>
                    </div>
                    
                    <!-- Right Column: Image Content -->
                    <div class="col-lg-6 mt-4 mt-lg-0">
                        <div class="ds-image-container">
                            <img src="https://placehold.co/700x450/eeeeee/333333?text=Spotlight+Placeholder+Image" alt="Data Spotlight Reference" class="img-fluid ds-main-img">
                            
                            <!-- Decorative Elements -->
                            <div class="ds-decorative-text">New</div>
                            <div class="ds-decorative-icon">
                                <img src="https://placehold.co/40x40/40c4c4/ffffff?text=!" alt="Idea Icon">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Slide 2 -->
            <div class="ds-item">
                <div class="row align-items-center">
                    <div class="col-lg-6 pe-lg-5">
                        <div class="ds-title-wrapper">
                            <h2 class="ds-title">Data <span class="ds-highlight">Spotlight</span></h2>
                        </div>
                        <h3 class="ds-subtitle">Discover the newly updated interactive dashboards.</h3>
                        <p class="ds-paragraph">Explore student outcomes, demographic data, and achievement trends over time through our intuitive, refreshed data visualization tools. We have optimized them to perform better on mobile devices too.</p>
                        <a href="#" class="btn btn-ds-readmore">READ MORE +</a>
                    </div>
                    <div class="col-lg-6 mt-4 mt-lg-0">
                        <div class="ds-image-container">
                            <img src="https://placehold.co/700x450/e0fdfd/003366?text=Dashboards+Preview" alt="Dashboards Preview" class="img-fluid ds-main-img">
                        </div>
                    </div>
                </div>
            </div>

            <!-- Slide 3 -->
            <div class="ds-item">
                <div class="row align-items-center">
                    <div class="col-lg-6 pe-lg-5">
                        <div class="ds-title-wrapper">
                            <h2 class="ds-title">Data <span class="ds-highlight">Spotlight</span></h2>
                        </div>
                        <h3 class="ds-subtitle">New reporting tools for educators.</h3>
                        <p class="ds-paragraph">Dive deep into the new capabilities tailored for school district leaders to help analyze school-level data securely and effectively.</p>
                        <a href="#" class="btn btn-ds-readmore">READ MORE +</a>
                    </div>
                    <div class="col-lg-6 mt-4 mt-lg-0">
                        <div class="ds-image-container">
                            <img src="https://placehold.co/700x450/fff3e0/333333?text=Reporting+Tools" alt="Reporting Tools" class="img-fluid ds-main-img">
                        </div>
                    </div>
                </div>
            </div>

            <!-- Slide 4 -->
            <div class="ds-item">
                <div class="row align-items-center">
                    <div class="col-lg-6 pe-lg-5">
                        <div class="ds-title-wrapper">
                            <h2 class="ds-title">Data <span class="ds-highlight">Spotlight</span></h2>
                        </div>
                        <h3 class="ds-subtitle">Feedback drives continuous improvement.</h3>
                        <p class="ds-paragraph">Read about how community feedback shaped our current updates and what features are on the roadmap for the next academic year.</p>
                        <a href="#" class="btn btn-ds-readmore">READ MORE +</a>
                    </div>
                    <div class="col-lg-6 mt-4 mt-lg-0">
                        <div class="ds-image-container">
                            <img src="https://placehold.co/700x450/e8f5e9/333333?text=Community+Feedback" alt="Community Feedback" class="img-fluid ds-main-img">
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <!-- Right Arrow -->
        <button class="custom-ds-next" type="button" onclick="dsGoToSlide('next')" aria-label="Next Slide">
            &rarr;
        </button>
        
    </div>

    <!-- Pagination Dots -->
    <div class="row mt-4">
        <div class="col-12">
            <div class="ds-carousel-indicators d-flex justify-content-end gap-2 pr-4" style="padding-right: 20px;">
                <button type="button" class="active" onclick="dsGoToSlide(0)" aria-label="Slide 1"></button>
                <button type="button" onclick="dsGoToSlide(1)" aria-label="Slide 2"></button>
                <button type="button" onclick="dsGoToSlide(2)" aria-label="Slide 3"></button>
                <button type="button" onclick="dsGoToSlide(3)" aria-label="Slide 4"></button>
            </div>
        </div>
    </div>
</section>

<!-- Vanilla JS functionality for the carousel -->
<script>
    document.addEventListener("DOMContentLoaded", function() {
        let currentDsSlide = 0;
        const dsSlides = document.querySelectorAll('#dataSpotlightCarousal .ds-item');
        const dsIndicators = document.querySelectorAll('#dataSpotlightCarousal .ds-carousel-indicators button');
        const totalDsSlides = dsSlides.length;

        window.dsGoToSlide = function(target) {
            if(totalDsSlides === 0) return;
            
            // Remove active class from current
            dsSlides[currentDsSlide].classList.remove('active');
            dsIndicators[currentDsSlide].classList.remove('active');
            
            // Calculate next index
            if (target === 'prev') {
                currentDsSlide = (currentDsSlide - 1 + totalDsSlides) % totalDsSlides;
            } else if (target === 'next') {
                currentDsSlide = (currentDsSlide + 1) % totalDsSlides;
            } else {
                currentDsSlide = target;
            }
            
            // Add active class to new
            dsSlides[currentDsSlide].classList.add('active');
            dsIndicators[currentDsSlide].classList.add('active');
        };
    });
</script>
