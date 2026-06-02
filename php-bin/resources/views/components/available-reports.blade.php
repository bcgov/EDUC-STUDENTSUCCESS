<link href="/css/available-reports.css" rel="stylesheet" type="text/css">

<section class="available-reports-section">
    <div class="container">
        
        <div class="mb-4 position-relative w-100 d-flex align-items-end" style="min-height: 70px;">
            <!-- Left side: Heading with highlight -->
            <div class="position-relative">
                <div class="position-absolute" style="background-color: #dff4f3; height: 20px; width: 140px; bottom: 4px; left: -4px; z-index: 0;"></div>
                <h2 class="spotlight-title m-0 position-relative" style="z-index: 1;">Available Reports</h2>
            </div>

 

            <!-- Right side: Decorative Graphic -->
            <div class="position-absolute end-0 bottom-0 d-none d-md-block" style="width: 100px; height: 60px; overflow: hidden; pointer-events: none;">
                <!-- Teal shape -->
                <div class="position-absolute" style="right: 0; bottom: 0; width: 60px; height: 60px; background-color: #61d4bd; border-top-left-radius: 100%;"></div>
                <!-- Orange bars -->
                <div class="position-absolute d-flex align-items-end" style="right: 15px; bottom: 0; gap: 6px;">
                    <div style="width: 14px; height: 32px; border: 1.5px solid #e2894b; border-bottom: none; background: transparent;"></div>
                    <div style="width: 14px; height: 55px; border: 1.5px solid #e2894b; border-bottom: none; background: transparent;"></div>
                    <div style="width: 14px; height: 42px; border: 1.5px solid #e2894b; border-bottom: none; background: transparent;"></div>
                </div>
            </div>
        </div>

        <div class="row mb-4">
            <div class="col-12 mb-3">
                <div class="d-flex justify-content-center align-items-center report-categories-title" style="color: #1a365d; font-weight: 600; font-size: 1.15rem;">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="#67d4be" stroke="none" class="me-2">
                        <rect x="2" y="14" width="5" height="10" rx="1"></rect>
                        <rect x="9" y="7" width="5" height="17" rx="1"></rect>
                        <rect x="16" y="2" width="5" height="22" rx="1"></rect>
                    </svg>
                    Report Categories
                </div>
            </div>
            <div class="col-12">
                <div class="reports-tabs-wrapper overflow-auto">
                    <ul class="nav nav-pills reports-tabs flex-nowrap w-100 justify-content-between text-center" id="reports-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="tab-all" data-category="all" type="button" role="tab" aria-selected="false">ALL</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="tab-district" data-category="district" type="button" role="tab" aria-selected="false">DISTRICT INFO</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="tab-intellectual" data-category="intellectual" type="button" role="tab" aria-selected="false">INTELLECTUAL</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="tab-human-social" data-category="human-social" type="button" role="tab" aria-selected="false">HUMAN + SOCIAL</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="tab-career" data-category="career" type="button" role="tab" aria-selected="false">CAREER</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="tab-focus" data-category="focus" type="button" role="tab" aria-selected="false">FOCUS POPULATIONS</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="tab-childcare" data-category="childcare" type="button" role="tab" aria-selected="false">CHILD CARE</button>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="reports-grid" id="reportsGrid">
            <div class="row">
                
                <!-- Calendar Card -->
                <div class="col-6 col-md-4 col-lg-1-5 mb-4 report-wrapper highlight" data-categories="all district intellectual human-social career focus childcare">
                    <div class="calendar-card h-100">
                        <div class="d-flex align-items-center justify-content-center mb-3" style="gap: 15px;">
                            <i class="fas fa-calendar-check fa-2x" style="color: #1a365d;"></i>
                            <p class="calendar-title m-0 text-start">Ministry data release<br>calendar 2025 / 2026</p>
                        </div>
                        <a href="#" class="search-btn-blue">SEE CALENDAR +</a>
                    </div>
                </div>

                <!-- District Cards -->
                <div class="col-6 col-md-4 col-lg-1-5 mb-4 report-wrapper highlight" data-categories="district intellectual">
                    <a href="/reports/demographic-information" class="report-card bg-gradient-teal">
                        <img src="https://placehold.co/50x50/transparent/ffffff?text=Icon" class="report-card-icon" alt="Icon">
                        <p class="report-card-title">Demographic<br>Information</p>
                    </a>
                </div>

                <div class="col-6 col-md-4 col-lg-1-5 mb-4 report-wrapper highlight" data-categories="district human-social">
                    <a href="/reports/key-contacts" class="report-card bg-gradient-teal">
                        <img src="https://placehold.co/50x50/transparent/ffffff?text=Icon" class="report-card-icon" alt="Icon">
                        <h3 class="report-card-title">Key<br>Contacts</h3>
                    </a>
                </div>

                <div class="col-6 col-md-4 col-lg-1-5 mb-4 report-wrapper highlight" data-categories="district">
                    <a href="/reports/financial-information" class="report-card bg-gradient-teal">
                        <img src="https://placehold.co/50x50/transparent/ffffff?text=Icon" class="report-card-icon" alt="Icon">
                        <h3 class="report-card-title">Financial<br>Information</h3>
                    </a>
                </div>

                <!-- Intellectual Cards (Pink) -->
                <div class="col-6 col-md-4 col-lg-1-5 mb-4 report-wrapper highlight" data-categories="intellectual career">
                    <a href="/reports/completion-rate" class="report-card bg-gradient-pink">
                        <img src="https://placehold.co/50x50/transparent/ffffff?text=Icon" class="report-card-icon" alt="Icon">
                        <h3 class="report-card-title">Completion<br>Rate</h3>
                    </a>
                </div>

                <div class="col-6 col-md-4 col-lg-1-5 mb-4 report-wrapper highlight" data-categories="intellectual">
                    <a href="/reports/foundation-skills-assessment" class="report-card bg-gradient-pink">
                        <img src="https://placehold.co/50x50/transparent/ffffff?text=Icon" class="report-card-icon" alt="Icon">
                        <h3 class="report-card-title">Foundation Skills<br>Assessment</h3>
                    </a>
                </div>

                <div class="col-6 col-md-4 col-lg-1-5 mb-4 report-wrapper highlight" data-categories="intellectual career">
                    <a href="/reports/grade-to-grade-transition" class="report-card bg-gradient-pink">
                        <img src="https://placehold.co/50x50/transparent/ffffff?text=Icon" class="report-card-icon" alt="Icon">
                        <h3 class="report-card-title">Grade-to-Grade<br>Transitions</h3>
                    </a>
                </div>
                
                <div class="col-6 col-md-4 col-lg-1-5 mb-4 report-wrapper highlight" data-categories="intellectual">
                    <a href="/reports/graduation-assessment" class="report-card bg-gradient-pink">
                        <img src="https://placehold.co/50x50/transparent/ffffff?text=Icon" class="report-card-icon" alt="Icon">
                        <h3 class="report-card-title">Graduation<br>Assessments</h3>
                    </a>
                </div>

                <!-- Other Cards -->
                <div class="col-6 col-md-4 col-lg-1-5 mb-4 report-wrapper highlight" data-categories="district focus">
                    <a href="/reports/students-entering-school" class="report-card bg-gradient-teal">
                        <img src="https://placehold.co/50x50/transparent/ffffff?text=Icon" class="report-card-icon" alt="Icon">
                        <h3 class="report-card-title">Student<br>Characteristics<br>Entering School</h3>
                    </a>
                </div>

                <div class="col-6 col-md-4 col-lg-1-5 mb-4 report-wrapper highlight" data-categories="intellectual human-social focus">
                    <a href="/reports/student-learning-survey" class="report-card bg-gradient-teal">
                        <img src="https://placehold.co/50x50/transparent/ffffff?text=Icon" class="report-card-icon" alt="Icon">
                        <h3 class="report-card-title">Student Learning<br>Survey</h3>
                    </a>
                </div>

                <div class="col-6 col-md-4 col-lg-1-5 mb-4 report-wrapper highlight" data-categories="career">
                    <a href="/reports/post-secondary-career-prep" class="report-card bg-gradient-teal">
                        <img src="https://placehold.co/50x50/transparent/ffffff?text=Icon" class="report-card-icon" alt="Icon">
                        <h3 class="report-card-title">Post-Secondary<br>+ Career Prep</h3>
                    </a>
                </div>

                <div class="col-6 col-md-4 col-lg-1-5 mb-4 report-wrapper highlight" data-categories="career">
                    <a href="/reports/transition-to-post-secondary" class="report-card bg-gradient-teal">
                        <img src="https://placehold.co/50x50/transparent/ffffff?text=Icon" class="report-card-icon" alt="Icon">
                        <h3 class="report-card-title">Transition to B.C.<br>Post-Secondary</h3>
                    </a>
                </div>

                <div class="col-6 col-md-4 col-lg-1-5 mb-4 report-wrapper highlight" data-categories="focus">
                    <a href="/reports/aboriginal-students" class="report-card bg-gradient-teal">
                        <img src="https://placehold.co/50x50/transparent/ffffff?text=Icon" class="report-card-icon" alt="Icon">
                        <h3 class="report-card-title">Aboriginal Students:<br>How Are We Doing?</h3>
                    </a>
                </div>
                
                <div class="col-6 col-md-4 col-lg-1-5 mb-4 report-wrapper highlight" data-categories="focus">
                    <a href="/reports/children-in-care" class="report-card bg-gradient-teal">
                        <img src="https://placehold.co/50x50/transparent/ffffff?text=Icon" class="report-card-icon" alt="Icon">
                        <h3 class="report-card-title">Children + Youth<br>In Care: How Are<br>We Doing?</h3>
                    </a>
                </div>
                
                <div class="col-6 col-md-4 col-lg-1-5 mb-4 report-wrapper highlight" data-categories="childcare">
                    <a href="/reports/child-care-spaces" class="report-card bg-gradient-teal">
                        <img src="https://placehold.co/50x50/transparent/ffffff?text=Icon" class="report-card-icon" alt="Icon">
                        <h3 class="report-card-title">Child Care<br>Spaces</h3>
                    </a>
                </div>

                <div class="col-6 col-md-4 col-lg-1-5 mb-4 report-wrapper highlight" data-categories="childcare">
                    <a href="/reports/supporting-families" class="report-card bg-gradient-teal">
                        <img src="https://placehold.co/50x50/transparent/ffffff?text=Icon" class="report-card-icon" alt="Icon">
                        <h3 class="report-card-title">Supporting<br>Families</h3>
                    </a>
                </div>
                
                <div class="col-6 col-md-4 col-lg-1-5 mb-4 report-wrapper highlight" data-categories="childcare">
                    <a href="/reports/supporting-workers" class="report-card bg-gradient-teal">
                        <img src="https://placehold.co/50x50/transparent/ffffff?text=Icon" class="report-card-icon" alt="Icon">
                        <h3 class="report-card-title">Supporting<br>Workers</h3>
                    </a>
                </div>

                <div class="col-6 col-md-4 col-lg-1-5 mb-4 report-wrapper highlight" data-categories="childcare">
                    <a href="/reports/accelerated-creation" class="report-card bg-gradient-teal">
                        <img src="https://placehold.co/50x50/transparent/ffffff?text=Icon" class="report-card-icon" alt="Icon">
                        <h3 class="report-card-title">Accelerated<br>Creation</h3>
                    </a>
                </div>                
                <div class="col-12 col-md-8 col-lg-2-5 mb-4 report-wrapper highlight" data-categories="childcare text-center">             
                    <img src="/img/refresh-img/available-reports-grey-icon-set.png" class="img-fluid w-100 rounded" style="object-fit: cover; max-height: 100%;">
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const tabs = document.querySelectorAll('.reports-tabs .nav-link');
        const cards = document.querySelectorAll('.report-wrapper');
        const grid = document.getElementById('reportsGrid');

        function applyFilter(category) {
            grid.classList.add('is-filtered');
            
            cards.forEach(card => {
                const cardCategories = card.getAttribute('data-categories');
                if (!cardCategories) return;
                
                if (category === 'all' || cardCategories.includes(category)) {
                    card.classList.add('highlight');
                } else {
                    card.classList.remove('highlight');
                }
            });
            
            if (category === 'all') {
               grid.classList.remove('is-filtered');
            }
        }

        tabs.forEach(tab => {
            tab.addEventListener('click', function(e) {
                e.preventDefault();
                // Remove active from all tabs
                tabs.forEach(t => t.classList.remove('active'));
                
                // Add active to clicked tab
                this.classList.add('active');
                
                const category = this.getAttribute('data-category');
                applyFilter(category);
            });
        });
        
        // Ensure default active tab is fully highlighted
        const defaultActive = document.querySelector('.reports-tabs .nav-link.active');
        if(defaultActive) {
            applyFilter(defaultActive.getAttribute('data-category'));
        }
    });
</script>
