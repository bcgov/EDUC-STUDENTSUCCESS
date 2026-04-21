<!-- Link to custom navigation CSS -->
<link href="/css/navigation.css" rel="stylesheet" type="text/css">

<header class="bg-white">
    <!-- Top Branding Area -->
    <div class="container py-3 d-flex justify-content-between align-items-center">
        <!-- Logo Section -->
        <div class="d-flex align-items-center">
            <!-- BC Logo Placeholder replacing the actual logo as requested -->
            <a href="http://www2.gov.bc.ca/" class="text-decoration-none">
                <div class="bc-logo-placeholder d-flex align-items-center justify-content-center text-center rounded">
                    BC Logo<br>Placeholder
                </div>
            </a>
        </div>
    </div>

    <!-- Notice/Announcement Banner (Recreated from image) -->
    <div class="notice-banner py-4 my-1">
        <div class="container d-flex justify-content-center position-relative">
            <div class="d-flex align-items-center text-center">
                <span class="me-2 text-warning fw-bold fs-5">&#9888;</span> <!-- Caution Icon Placeholder -->
                <span>Check out new insights for student transitions for 2024 to 2025!</span>
                <a href="#" class="ms-2 text-white fw-bold">More &rarr;</a>
            </div>
        </div>
    </div>

    <!-- Main Navigation Bar -->
    <nav class="navbar navbar-expand-lg bg-white shadow-sm py-0">
        <div class="container">
            <!-- Accessible Navigation Links -->
            <div class="justify-content-center" id="mainNavigation">
                <ul class="navbar-nav text-uppercase fw-bold align-items-center">
                    <li class="nav-item">
                        <a class="nav-link py-3 px-3 {{ request()->is('/') ? 'active-nav-link' : '' }}" href="/">Home</a>
                    </li>
                    <li class="nav-item   d-lg-block"><span class="nav-separator">|</span></li>

                    <li class="nav-item">
                        <a class="nav-link py-3 px-3 {{ request()->is('calendar') ? 'active-nav-link' : '' }}" href="/calendar">ChildCare</a>
                    </li>
                    <li class="nav-item   d-lg-block"><span class="nav-separator">|</span></li>

                    <li class="nav-item">
                        <a class="nav-link py-3 px-3 {{ request()->is('data-literacy') ? 'active-nav-link' : '' }}" href="/data-literacy">Data Literacy</a>
                    </li>
                    <li class="nav-item   d-lg-block"><span class="nav-separator">|</span></li>

                    <li class="nav-item">
                        <a class="nav-link py-3 px-3 {{ request()->is('enrolment') ? 'active-nav-link' : '' }}" href="/enrolment">In the Spotlight</a>
                    </li>
                    <li class="nav-item   d-lg-block"><span class="nav-separator">|</span></li>

                    <li class="nav-item">
                        <a class="nav-link py-3 px-3 {{ request()->is('reporting') ? 'active-nav-link' : '' }}" href="/reporting">Reports</a>
                    </li>
                    <li class="nav-item   d-lg-block"><span class="nav-separator">|</span></li>

                    <li class="nav-item">
                        <a class="nav-link py-3 px-3 {{ request()->is('all/school-districts') ? 'active-nav-link' : '' }}" href="/all/school-districts">School Districts</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>