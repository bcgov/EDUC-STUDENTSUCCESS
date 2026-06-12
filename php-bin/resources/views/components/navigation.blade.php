<!-- Link to custom navigation CSS -->
<link href="/css/navigation.css" rel="stylesheet" type="text/css">

<header class="bg-white">
    <!-- Top Branding Area -->
    <div class="container d-flex justify-content-between align-items-center">
        <!-- Logo Section -->
        <div class="d-flex align-items-center">
            <!-- BC Logo Placeholder replacing the actual logo as requested -->
            <a href="http://www2.gov.bc.ca/" class="text-decoration-none">
                <img src="/img/BCID_H_RGB_pos.png" alt="BC Logo" height="70">
            </a>
        </div>
    </div>

    <!-- Notice/Announcement Banner (Recreated from image) -->
    <div class="notice-banner py-4 my-1">
        <div class="container d-flex justify-content-center position-relative">
            <div class="d-flex align-items-center text-center">
                <i class="fa-solid fa-triangle-exclamation me-2 fa-lg text-warning"></i>
                <span>Check out new insights for student transitions for 2024 to 2025!</span>
                <a href="#" class="ms-2 text-white fw-bold">More <i class="fa-solid fa-arrow-right"></i></a>
            </div>
        </div>
    </div>

    <!-- Main Navigation Bar -->
    <nav class="navbar navbar-expand-lg bg-white shadow-sm py-0">
        <div class="container">
            <!-- Hamburger Menu Button -->
            <button class="navbar-toggler w-100 border-0 py-3" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavigation" aria-controls="mainNavigation" aria-expanded="false" aria-label="Toggle navigation">
                <div class="d-flex justify-content-between align-items-center">
                    <span class="text-uppercase fw-bold text-secondary">Menu</span>
                    <span class="navbar-toggler-icon"></span>
                </div>
            </button>

            <!-- Accessible Navigation Links -->
            <div class="collapse navbar-collapse justify-content-start" id="mainNavigation">
                <ul class="navbar-nav text-uppercase fw-bold align-items-center">
                    <li class="nav-item">
                        <a class="nav-link py-3 px-3 {{ request()->is('/') ? 'active-nav-link' : '' }}" href="/">Home</a>
                    </li>
                    <li class="nav-item d-none d-lg-block"><span class="nav-separator">|</span></li>

                    <li class="nav-item">
                        <a class="nav-link py-3 px-3 {{ request()->is('calendar') ? 'active-nav-link' : '' }}" href="/calendar">Child Care</a>
                    </li>
                    <li class="nav-item d-none d-lg-block"><span class="nav-separator">|</span></li>

                    <li class="nav-item">
                        <a class="nav-link py-3 px-3 {{ request()->is('data-literacy') ? 'active-nav-link' : '' }}" href="/data-literacy">Data Literacy</a>
                    </li>
                    <li class="nav-item d-none d-lg-block"><span class="nav-separator">|</span></li>

                    <li class="nav-item">
                        <a class="nav-link py-3 px-3 {{ request()->is('in-the-spotlight') ? 'active-nav-link' : '' }}" href="/in-the-spotlight">In the Spotlight</a>
                    </li>
                    <li class="nav-item d-none d-lg-block"><span class="nav-separator">|</span></li>

                    <li class="nav-item">
                        <a class="nav-link py-3 px-3 {{ request()->is('reporting') ? 'active-nav-link' : '' }}" href="/reporting">Reports</a>
                    </li>
                    <li class="nav-item d-none d-lg-block"><span class="nav-separator">|</span></li>

                    <li class="nav-item">
                        <a class="nav-link py-3 px-3 {{ request()->is('all/school-districts') ? 'active-nav-link' : '' }}" href="/all/school-districts">School Districts</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>