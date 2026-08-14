@extends('layout') @section('content')
<div class="container py-5">
    <nav aria-label="breadcrumb" class="mb-4">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Available Reports</a></li>
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
                                    data-page="{{ $pages[0]['pageName'] }}">
                                {{ $pages[0]['label'] }}
                            </button>
                            <button type="button"
                                    class="btn btn-fsa-toggle"
                                    data-page="{{ $pages[1]['pageName'] }}">
                                {{ $pages[1]['label'] }}
                            </button>
                        </div>
                        <iframe id="fsa-iframe-2"
                                title="{{ $pages[0]['label'] }}"
                                class="fsa-report-iframe"
                                src="{{ $baseEmbedUrl }}&pageName={{ $pages[0]['pageName'] }}"
                                frameborder="0"
                                allowFullScreen="true"></iframe>
                    </div>

                    {{-- Iframe 3: FSA Comparison --}}
                    <div class="fsa-iframe-section mb-5">
                        <div class="fsa-toggle-buttons mb-3" data-iframe-target="fsa-iframe-3">
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
                        <iframe id="fsa-iframe-3"
                                title="{{ $pages[2]['label'] }}"
                                class="fsa-report-iframe"
                                src="{{ $baseEmbedUrl }}&pageName={{ $pages[2]['pageName'] }}"
                                frameborder="0"
                                allowFullScreen="true"></iframe>
                    </div>

                </div>

            @else
                {{-- ===== Default: dropdown page selector + single iframe ===== --}}
                @if(!empty($pages) && count($pages) > 1)
                    <div class="mb-3">
                        <label for="page-selector" class="form-label fw-semibold">Select Page</label>
                        <select id="page-selector" class="form-select" style="max-width: 300px;">
                            @foreach($pages as $page)
                                <option value="{{ $page['pageName'] }}">{{ $page['label'] }}</option>
                            @endforeach
                        </select>
                    </div>
                @endif
                @if($embedUrl)
                    <iframe id="report-iframe"
                            title="{{ ucwords($reportTitle) }}"
                            style="width: 100%; height: auto; aspect-ratio: 16 / 9; border: none;"
                            src="{{ $embedUrl }}"
                            frameborder="0"
                            allowFullScreen="true"></iframe>
                @else
                    <p>No report available yet.</p>
                @endif
            @endif
        </div>
    </div>
</div>

{{-- ===== FSA toggle button script ===== --}}
@if($slug === 'foundation-skills-assessment' && !empty($pages) && count($pages) >= 4)
<style>
    .fsa-report-iframe {
        width: 100%;
        height: auto;
        aspect-ratio: 16 / 9;
        border: none;
    }

    .fsa-toggle-buttons {
        display: flex;
        gap: 0;
    }

    .btn-fsa-toggle {
        background-color: #f4f6f9;
        color: #003366;
        border: 1px solid #e0e0e0;
        padding: 10px 24px;
        font-weight: 600;
        font-size: 0.95rem;
        letter-spacing: 0.5px;
        text-transform: uppercase;
        transition: background-color 0.2s ease, color 0.2s ease;
        cursor: pointer;
    }

    .btn-fsa-toggle:first-child {
        border-radius: 3px 0 0 3px;
    }

    .btn-fsa-toggle:last-child {
        border-radius: 0 3px 16px 0;
    }

    .btn-fsa-toggle:hover {
        background-color: #e0fdfd;
        color: #003366;
    }

    .btn-fsa-toggle.active {
        background-color: #003366;
        color: #ffffff;
        border-color: #003366;
    }

    /* Show More / Hide collapsible */
    .fsa-collapsible {
        max-height: 0;
        overflow: hidden;
        transition: max-height 0.4s ease;
    }

    .fsa-collapsible.expanded {
        max-height: 5000px;
    }

    .btn-fsa-show-more {
        background-color: #003366;
        color: #ffffff;
        border: none;
        padding: 10px 30px;
        font-weight: 600;
        font-size: 0.95rem;
        letter-spacing: 0.5px;
        text-transform: uppercase;
        border-radius: 3px 3px 16px 3px;
        transition: background-color 0.2s ease;
        cursor: pointer;
    }

    .btn-fsa-show-more:hover {
        background-color: #0d2140;
        color: #ffffff;
    }

    .fsa-chevron-icon {
        display: inline-block;
        margin-left: 8px;
        font-size: 0.75rem;
        transition: transform 0.3s ease;
    }

    .fsa-chevron-icon.rotated {
        transform: rotate(180deg);
    }
</style>
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