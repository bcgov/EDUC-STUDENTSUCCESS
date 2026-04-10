<link href="/css/main-search.css" rel="stylesheet" type="text/css">

<section id="home-search-section">
  <div class="container" id="hero-search-wrapper">
    <!-- Search Input Area -->
    <div class="search-input-area">
      <input class="search" id="main-search" type="text" placeholder="{{ trans('esdr2.search_placeholder') }}" />
      <!-- Ensure original clear-search ID is preserved -->
      <span aria-hidden="true" title="{{ trans('esdr2.clear_search_label') }}" id="clear-search">
        <i class="fa fa-search"></i>
      </span>
    </div>

    <!-- Action Buttons Area -->
    <div class="search-action-buttons">
      <a href="/all/school-districts" class="search-btn-teal">
        View All School Districts
      </a>
      <a href="/all/cities" class="search-btn-blue">
        View All Cities
      </a>
    </div>

  </div>
</section>