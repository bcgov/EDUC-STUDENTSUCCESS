<link href="/css/available-reports.css" rel="stylesheet" type="text/css">

<section class="available-reports-section">
    <div class="container">
        
        <div class="mb-4">
            <h2 class="reports-heading">Available Reports</h2>
            <div class="mt-2 text-muted">
                <span class="report-categories-title d-inline-flex align-items-center">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#21a6a1" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="me-2"><line x1="12" y1="20" x2="12" y2="10"></line><line x1="18" y1="20" x2="18" y2="4"></line><line x1="6" y1="20" x2="6" y2="16"></line></svg>
                    Report Categories
                </span>
            </div>
        </div>

        <div class="row mb-4">
            <div class="col-12">
                <div class="reports-tabs-wrapper overflow-auto">
                    <ul class="nav nav-pills reports-tabs flex-nowrap w-100" id="reports-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="tab-all" data-category="all" type="button" role="tab" aria-selected="false">ALL</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="tab-district" data-category="district" type="button" role="tab" aria-selected="false">DISTRICT INFO</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="tab-intellectual" data-category="intellectual" type="button" role="tab" aria-selected="true">INTELLECTUAL</button>
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
                        <div class="text-center mb-3">
                            <img src="https://placehold.co/60x60/e0eaf5/1a365d?text=Cal" alt="Calendar Icon" class="img-fluid rounded">
                        </div>
                        <h3 class="calendar-title">Ministry data release<br>calendar 2025 / 2026</h3>
                        <a href="#" class="calendar-btn text-decoration-none mt-2">SEE CALENDAR +</a>
                    </div>
                </div>

                <!-- District Cards -->
                <div class="col-6 col-md-4 col-lg-1-5 mb-4 report-wrapper highlight" data-categories="district intellectual">
                    <a href="#" class="report-card bg-gradient-teal">
                        <img src="https://placehold.co/50x50/transparent/ffffff?text=Icon" class="report-card-icon" alt="Icon">
                        <h3 class="report-card-title">Demographic<br>Information</h3>
                    </a>
                </div>

                <div class="col-6 col-md-4 col-lg-1-5 mb-4 report-wrapper highlight" data-categories="district human-social">
                    <a href="#" class="report-card bg-gradient-teal">
                        <img src="https://placehold.co/50x50/transparent/ffffff?text=Icon" class="report-card-icon" alt="Icon">
                        <h3 class="report-card-title">Key<br>Contacts</h3>
                    </a>
                </div>

                <div class="col-6 col-md-4 col-lg-1-5 mb-4 report-wrapper highlight" data-categories="district">
                    <a href="#" class="report-card bg-gradient-teal">
                        <img src="https://placehold.co/50x50/transparent/ffffff?text=Icon" class="report-card-icon" alt="Icon">
                        <h3 class="report-card-title">Financial<br>Information</h3>
                    </a>
                </div>

                <!-- Intellectual Cards (Pink) -->
                <div class="col-6 col-md-4 col-lg-1-5 mb-4 report-wrapper highlight" data-categories="intellectual career">
                    <a href="#" class="report-card bg-gradient-pink">
                        <img src="https://placehold.co/50x50/transparent/ffffff?text=Icon" class="report-card-icon" alt="Icon">
                        <h3 class="report-card-title">Completion<br>Rate</h3>
                    </a>
                </div>

                <div class="col-6 col-md-4 col-lg-1-5 mb-4 report-wrapper highlight" data-categories="intellectual">
                    <a href="#" class="report-card bg-gradient-pink">
                        <img src="https://placehold.co/50x50/transparent/ffffff?text=Icon" class="report-card-icon" alt="Icon">
                        <h3 class="report-card-title">Foundation Skills<br>Assessment</h3>
                    </a>
                </div>

                <div class="col-6 col-md-4 col-lg-1-5 mb-4 report-wrapper highlight" data-categories="intellectual career">
                    <a href="#" class="report-card bg-gradient-pink">
                        <img src="https://placehold.co/50x50/transparent/ffffff?text=Icon" class="report-card-icon" alt="Icon">
                        <h3 class="report-card-title">Grade-to-Grade<br>Transitions</h3>
                    </a>
                </div>
                
                <div class="col-6 col-md-4 col-lg-1-5 mb-4 report-wrapper highlight" data-categories="intellectual">
                    <a href="#" class="report-card bg-gradient-pink">
                        <img src="https://placehold.co/50x50/transparent/ffffff?text=Icon" class="report-card-icon" alt="Icon">
                        <h3 class="report-card-title">Graduation<br>Assessments</h3>
                    </a>
                </div>

                <!-- Other Cards -->
                <div class="col-6 col-md-4 col-lg-1-5 mb-4 report-wrapper highlight" data-categories="district focus">
                    <a href="#" class="report-card bg-gradient-teal">
                        <img src="https://placehold.co/50x50/transparent/ffffff?text=Icon" class="report-card-icon" alt="Icon">
                        <h3 class="report-card-title">Student<br>Characteristics<br>Entering School</h3>
                    </a>
                </div>

                <div class="col-6 col-md-4 col-lg-1-5 mb-4 report-wrapper highlight" data-categories="intellectual human-social focus">
                    <a href="#" class="report-card bg-gradient-teal">
                        <img src="https://placehold.co/50x50/transparent/ffffff?text=Icon" class="report-card-icon" alt="Icon">
                        <h3 class="report-card-title">Student Learning<br>Survey</h3>
                    </a>
                </div>

                <div class="col-6 col-md-4 col-lg-1-5 mb-4 report-wrapper highlight" data-categories="career">
                    <a href="#" class="report-card bg-gradient-teal">
                        <img src="https://placehold.co/50x50/transparent/ffffff?text=Icon" class="report-card-icon" alt="Icon">
                        <h3 class="report-card-title">Post-Secondary<br>+ Career Prep</h3>
                    </a>
                </div>

                <div class="col-6 col-md-4 col-lg-1-5 mb-4 report-wrapper highlight" data-categories="career">
                    <a href="#" class="report-card bg-gradient-teal">
                        <img src="https://placehold.co/50x50/transparent/ffffff?text=Icon" class="report-card-icon" alt="Icon">
                        <h3 class="report-card-title">Transition to B.C.<br>Post-Secondary</h3>
                    </a>
                </div>

                <div class="col-6 col-md-4 col-lg-1-5 mb-4 report-wrapper highlight" data-categories="focus">
                    <a href="#" class="report-card bg-gradient-teal">
                        <img src="https://placehold.co/50x50/transparent/ffffff?text=Icon" class="report-card-icon" alt="Icon">
                        <h3 class="report-card-title">Aboriginal Students:<br>How Are We Doing?</h3>
                    </a>
                </div>
                
                <div class="col-6 col-md-4 col-lg-1-5 mb-4 report-wrapper highlight" data-categories="focus">
                    <a href="#" class="report-card bg-gradient-teal">
                        <img src="https://placehold.co/50x50/transparent/ffffff?text=Icon" class="report-card-icon" alt="Icon">
                        <h3 class="report-card-title">Children + Youth<br>In Care: How Are<br>We Doing?</h3>
                    </a>
                </div>
                
                <div class="col-6 col-md-4 col-lg-1-5 mb-4 report-wrapper highlight" data-categories="childcare">
                    <a href="#" class="report-card bg-gradient-teal">
                        <img src="https://placehold.co/50x50/transparent/ffffff?text=Icon" class="report-card-icon" alt="Icon">
                        <h3 class="report-card-title">Child Care<br>Spaces</h3>
                    </a>
                </div>

                <div class="col-6 col-md-4 col-lg-1-5 mb-4 report-wrapper highlight" data-categories="childcare">
                    <a href="#" class="report-card bg-gradient-teal">
                        <img src="https://placehold.co/50x50/transparent/ffffff?text=Icon" class="report-card-icon" alt="Icon">
                        <h3 class="report-card-title">Supporting<br>Families</h3>
                    </a>
                </div>
                
                <div class="col-6 col-md-4 col-lg-1-5 mb-4 report-wrapper highlight" data-categories="childcare">
                    <a href="#" class="report-card bg-gradient-teal">
                        <img src="https://placehold.co/50x50/transparent/ffffff?text=Icon" class="report-card-icon" alt="Icon">
                        <h3 class="report-card-title">Supporting<br>Workers</h3>
                    </a>
                </div>

                <div class="col-6 col-md-4 col-lg-1-5 mb-4 report-wrapper highlight" data-categories="childcare">
                    <a href="#" class="report-card bg-gradient-teal">
                        <img src="https://placehold.co/50x50/transparent/ffffff?text=Icon" class="report-card-icon" alt="Icon">
                        <h3 class="report-card-title">Accelerated<br>Creation</h3>
                    </a>
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
