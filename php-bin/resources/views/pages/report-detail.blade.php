@extends('layout') @section('content')
<link href="/css/report-detail.css" rel="stylesheet" type="text/css">
<div class="container py-5">
    <nav aria-label="breadcrumb" class="mb-4">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/#reports">Available Reports</a></li>
            <li class="breadcrumb-item active" aria-current="page">{{ ucwords($reportTitle) }}</li>
        </ol>
    </nav>
    <div class="row mb-4">
        <div class="col-12">
            <h1 class="reports-heading text-teal fw-bold">{{ ucwords($reportTitle) }}</h1>
            <hr>

            @if($slug === 'foundation-skills-assessment' && !empty($pages) && count($pages) >= 4)
                {{-- ===== FSA: 3 iframe sections with toggle buttons ===== --}}

                {{-- Iframe 1: FSA District --}}
                <div class="fsa-iframe-section mb-5">
                    <div class="fsa-toggle-buttons mb-3" data-iframe-target="fsa-iframe-1">
                        <button type="button"
                                class="btn btn-fsa-toggle active"
                                data-page="{{ $pages[0]['pageName'] }}">
                            {{ $pages[0]['label'] }}
                        </button>
                        <button type="button"
                                class="btn btn-fsa-toggle"
                                data-page="{{ $pages[1]['pageName'] }}">
                            {{ $pages[1]['label'] }}
                        </button>
                    </div>
                    <iframe id="fsa-iframe-1"
                            title="{{ $pages[0]['label'] }}"
                            class="fsa-report-iframe"
                            src="{{ $baseEmbedUrl }}&pageName={{ $pages[0]['pageName'] }}"
                            frameborder="0"
                            allowFullScreen="true"></iframe>
                </div>

                {{-- Show More / Hide toggle --}}
                <div class="text-center mb-4">
                    <button type="button" id="fsa-show-more-btn" class="btn btn-fsa-show-more">
                        <span id="fsa-show-more-text">Show More</span>
                        <span id="fsa-show-more-icon" class="fsa-chevron-icon">&#9660;</span>
                    </button>
                </div>

                {{-- Collapsible container for iframes 2 & 3 --}}
                <div id="fsa-extra-iframes" class="fsa-collapsible">

                    {{-- Iframe 2: FSA District (independent copy) --}}
                    <div class="fsa-iframe-section mb-5">
                        <div class="fsa-toggle-buttons mb-3" data-iframe-target="fsa-iframe-2">
                            <button type="button"
                                    class="btn btn-fsa-toggle active"
                                    data-page="{{ $pages[2]['pageName'] }}">
                                {{ $pages[2]['label'] }}
                            </button>
                            <button type="button"
                                    class="btn btn-fsa-toggle"
                                    data-page="{{ $pages[3]['pageName'] }}">
                                {{ $pages[3]['label'] }}
                            </button>
                        </div>
                        <iframe id="fsa-iframe-2"
                                title="{{ $pages[2]['label'] }}"
                                class="fsa-report-iframe"
                                src="{{ $baseEmbedUrl }}&pageName={{ $pages[2]['pageName'] }}"
                                frameborder="0"
                                allowFullScreen="true"></iframe>
                    </div>

                    {{-- Iframe 3: FSA Comparison --}}
                    <div class="fsa-iframe-section mb-5">
                        <div class="fsa-toggle-buttons mb-3" data-iframe-target="fsa-iframe-3">
                            <button type="button"
                                    class="btn btn-fsa-toggle active"
                                    data-page="{{ $pages[4]['pageName'] }}">
                                {{ $pages[4]['label'] }}
                            </button>
                            <button type="button"
                                    class="btn btn-fsa-toggle"
                                    data-page="{{ $pages[5]['pageName'] }}">
                                {{ $pages[5]['label'] }}
                            </button>
                        </div>
                        <iframe id="fsa-iframe-3"
                                title="{{ $pages[4]['label'] }}"
                                class="fsa-report-iframe"
                                src="{{ $baseEmbedUrl }}&pageName={{ $pages[4]['pageName'] }}"
                                frameborder="0"
                                allowFullScreen="true"></iframe>
                    </div>

                </div>

            @elseif($slug === 'graduation-assessment' && !empty($pages) && count($pages) >= 4)
                {{-- ===== Graduation Assessment: 2 iframe sections with toggle buttons ===== --}}

                {{-- Iframe 1: Grad Assessment District --}}
                <div class="ga-iframe-section mb-5">
                    <div class="ga-toggle-buttons mb-3" data-iframe-target="ga-iframe-1">
                        <button type="button"
                                class="btn btn-ga-toggle active"
                                data-page="{{ $pages[0]['pageName'] }}">
                            {{ $pages[0]['label'] }}
                        </button>
                        <button type="button"
                                class="btn btn-ga-toggle"
                                data-page="{{ $pages[1]['pageName'] }}">
                            {{ $pages[1]['label'] }}
                        </button>
                    </div>
                    <iframe id="ga-iframe-1"
                            title="{{ $pages[0]['label'] }}"
                            class="ga-report-iframe"
                            src="{{ $baseEmbedUrl }}&pageName={{ $pages[0]['pageName'] }}"
                            frameborder="0"
                            allowFullScreen="true"></iframe>
                </div>

                {{-- Show More / Hide toggle --}}
                <div class="text-center mb-4">
                    <button type="button" id="ga-show-more-btn" class="btn btn-ga-show-more">
                        <span id="ga-show-more-text">Show More</span>
                        <span id="ga-show-more-icon" class="ga-chevron-icon">&#9660;</span>
                    </button>
                </div>

                {{-- Collapsible container for iframe 2 --}}
                <div id="ga-extra-iframes" class="ga-collapsible">

                    {{-- Iframe 2: Grad Assessment District Split --}}
                    <div class="ga-iframe-section mb-5">
                        <div class="ga-toggle-buttons mb-3" data-iframe-target="ga-iframe-2">
                            <button type="button"
                                    class="btn btn-ga-toggle active"
                                    data-page="{{ $pages[2]['pageName'] }}">
                                {{ $pages[2]['label'] }}
                            </button>
                            <button type="button"
                                    class="btn btn-ga-toggle"
                                    data-page="{{ $pages[3]['pageName'] }}">
                                {{ $pages[3]['label'] }}
                            </button>
                        </div>
                        <iframe id="ga-iframe-2"
                                title="{{ $pages[2]['label'] }}"
                                class="ga-report-iframe"
                                src="{{ $baseEmbedUrl }}&pageName={{ $pages[2]['pageName'] }}"
                                frameborder="0"
                                allowFullScreen="true"></iframe>
                    </div>
                    {{-- Iframe 3: Grad Assessment Comparison --}}
                    <div class="ga-iframe-section mb-5">
                        <div class="ga-toggle-buttons mb-3" data-iframe-target="ga-iframe-3">
                            <button type="button"
                                    class="btn btn-ga-toggle active"
                                    data-page="{{ $pages[4]['pageName'] }}">
                                {{ $pages[4]['label'] }}
                            </button>
                            <button type="button"
                                    class="btn btn-ga-toggle"
                                    data-page="{{ $pages[5]['pageName'] }}">
                                {{ $pages[5]['label'] }}
                            </button>
                        </div>
                        <iframe id="ga-iframe-3"
                                title="{{ $pages[4]['label'] }}"
                                class="ga-report-iframe"
                                src="{{ $baseEmbedUrl }}&pageName={{ $pages[4]['pageName'] }}"
                                frameborder="0"
                                allowFullScreen="true"></iframe>
                    </div>

                </div>

            @else
                {{-- ===== Default: dropdown page selector + single iframe ===== --}}
                @if(!empty($pages) && count($pages) > 1)
                    <div class="mb-3">
                        <label for="page-selector" class="form-label fw-semibold">Select Page</label>
                        <select id="page-selector" class="form-select">
                            @foreach($pages as $page)
                                <option value="{{ $page['pageName'] }}">{{ $page['label'] }}</option>
                            @endforeach
                        </select>
                    </div>
                @endif
                @if($embedUrl)
                    <div id="report-iframe-wrapper">
                        <iframe id="report-iframe"
                                title="{{ ucwords($reportTitle) }}"
                                src="{{ $embedUrl }}"
                                frameborder="0"
                                allowFullScreen="true"></iframe>
                    </div>
                @else
                    <p>No report available yet.</p>
                @endif
            @endif
        </div>
    </div>
</div>

{{-- ===== FSA toggle button script ===== --}}
@if($slug === 'foundation-skills-assessment' && !empty($pages) && count($pages) >= 4)

<script>
    document.addEventListener('DOMContentLoaded', function () {
        var baseUrl = @json($baseEmbedUrl);

        document.querySelectorAll('.fsa-toggle-buttons').forEach(function (group) {
            var iframeId = group.getAttribute('data-iframe-target');
            var iframe   = document.getElementById(iframeId);
            var buttons  = group.querySelectorAll('.btn-fsa-toggle');

            buttons.forEach(function (btn) {
                btn.addEventListener('click', function () {
                    // Update active state within this button group
                    buttons.forEach(function (b) { b.classList.remove('active'); });
                    btn.classList.add('active');

                    // Switch the iframe src
                    iframe.src = baseUrl + '&pageName=' + btn.getAttribute('data-page');
                    iframe.title = btn.textContent.trim();
                });
            });
        });

        // Show More / Hide toggle
        var showMoreBtn  = document.getElementById('fsa-show-more-btn');
        var extraIframes = document.getElementById('fsa-extra-iframes');
        var showMoreText = document.getElementById('fsa-show-more-text');
        var showMoreIcon = document.getElementById('fsa-show-more-icon');

        showMoreBtn.addEventListener('click', function () {
            var isExpanded = extraIframes.classList.toggle('expanded');
            showMoreText.textContent = isExpanded ? 'Hide' : 'Show More';
            showMoreIcon.classList.toggle('rotated', isExpanded);
        });
    });
</script>

{{-- ===== Graduation Assessment toggle button script ===== --}}
@elseif($slug === 'graduation-assessment' && !empty($pages) && count($pages) >= 4)

<script>
    document.addEventListener('DOMContentLoaded', function () {
        var baseUrl = @json($baseEmbedUrl);

        document.querySelectorAll('.ga-toggle-buttons').forEach(function (group) {
            var iframeId = group.getAttribute('data-iframe-target');
            var iframe   = document.getElementById(iframeId);
            var buttons  = group.querySelectorAll('.btn-ga-toggle');

            buttons.forEach(function (btn) {
                btn.addEventListener('click', function () {
                    // Update active state within this button group
                    buttons.forEach(function (b) { b.classList.remove('active'); });
                    btn.classList.add('active');

                    // Switch the iframe src
                    iframe.src = baseUrl + '&pageName=' + btn.getAttribute('data-page');
                    iframe.title = btn.textContent.trim();
                });
            });
        });

        // Show More / Hide toggle
        var showMoreBtn  = document.getElementById('ga-show-more-btn');
        var extraIframes = document.getElementById('ga-extra-iframes');
        var showMoreText = document.getElementById('ga-show-more-text');
        var showMoreIcon = document.getElementById('ga-show-more-icon');

        showMoreBtn.addEventListener('click', function () {
            var isExpanded = extraIframes.classList.toggle('expanded');
            showMoreText.textContent = isExpanded ? 'Hide' : 'Show More';
            showMoreIcon.classList.toggle('rotated', isExpanded);
        });
    });
</script>

{{-- ===== Default dropdown script ===== --}}
@elseif(!empty($pages) && count($pages) > 1)
<script>
    document.addEventListener('DOMContentLoaded', function () {
        var selector = document.getElementById('page-selector');
        var iframe   = document.getElementById('report-iframe');
        var baseUrl  = @json($baseEmbedUrl);

        selector.addEventListener('change', function () {
            iframe.src = baseUrl + '&pageName=' + this.value;
        });
    });
</script>
@endif
@endsection