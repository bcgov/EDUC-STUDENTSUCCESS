@extends('layout')

@push('css')
<link href="/css/reporting.css" rel="stylesheet" type="text/css">
@endpush

@section('content')
<div class="reporting-page">
    <div class="reporting-hero">
        <img src="/img/bg-images/r-a-top-banner.png" alt="background image of hex boxes" class="reporting-hero-bg">
        <div class="container position-relative z-1 reporting-hero-content">
            <h1 class="display-5"><strong>The goal is to ensure data is used</strong></h1>
            <h1 class="display-5"><strong>&nbsp;&nbsp;&nbsp;as an <em>effective tool</em> in helping</strong></h1>
            <h1 class="display-5"><strong>&nbsp;&nbsp;&nbsp;&nbsp;all students succeed.</strong></h1>
        </div>
        <img src="/img/arrorw-down.png" alt="downward arrow" class="reporting-arrow-down">
    </div>

    <div class="container mb-5">
        <h2 class="fw-bold text-center mb-3 text-navy">Resources and Analytics</h2>
        <img class="green-separator" src="{{URL::to('/')}}/img/green-bar-2.png" alt="" />

        <div class="text-center my-5">
            <p class="lead">
                The following reports are available in PDF format and highlight the latest inquiries from the following
                categories. <strong><a href="mailto:educ.systemperformance@gov.bc.ca" class="text-decoration-none text-navy">Contact us</a></strong> if you
                would<br class="d-none d-md-block">
                &nbsp;&nbsp;&nbsp;like to request additional information, or if you are looking for previously annual
                reports published prior to 2023.
            </p>
        </div>

        <div class="row g-4 justify-content-center">
            <!-- Ab How are we doing Card -->
            <div class="col-12 col-md-6 col-lg-4">
                <div class="card reporting-card shadow-sm h-100">
                    <a id="ahawd-download-report-link-img" href="/ahawd" target="_blank">
                        <img alt="" class="card-img-top" src="/img/charts/ab-how-are-we-doing-panel-img.png" />
                    </a>
                    <div class="card-body">
                        <p id="indigenous" class="reporting-card-title">Indigenous</p>
                        <a id="ahawd-download-report-link" href="/ahawd" class="text-decoration-none text-dark">
                            <p class="card-text fw-semibold hover-text-primary">{{ trans('esdr2.abo_how_are_we_doing_heading') }}</p>
                        </a>
                    </div>
                </div>
            </div>

            <!-- FSA Card (Children and Youth in Care) -->
            <div class="col-12 col-md-6 col-lg-4">
                <div class="card reporting-card shadow-sm h-100">
                    <a id="cyic-report-link-img" href="/cyic" target="_blank">
                        <img alt="" class="card-img-top" src="/img/charts/cyic-report-thumb.png" />
                    </a>
                    <div class="card-body">
                        <p id="cyic" class="reporting-card-title">Children and Youth in Care</p>
                        <a id="cyic-report-link" href="/cyic" target="_blank" class="text-decoration-none text-dark">
                            <p class="card-text fw-semibold hover-text-primary">Children and Youth In Care: How Are We Doing?</p>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Learner Centered Card -->
            <div class="col-12 col-md-6 col-lg-4">
                <div class="card reporting-card shadow-sm h-100">
                    <a id="fsa-report-link-img" href="/fsa/index.html" target="_blank">
                        <img alt="" class="card-img-top" src="/img/charts/fsa-panel-img.png" />
                    </a>
                    <div class="card-body">
                        <p id="learner-centered" class="reporting-card-title">Learner Centered</p>
                        <a id="fsa-report-link" href="/fsa/index.html" target="_blank" class="text-decoration-none text-dark">
                            <p class="card-text fw-semibold hover-text-primary">Foundation Skills Assessment Reports</p>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Data Science Card -->
            <div class="col-12 col-md-6 col-lg-4">
                <div class="card reporting-card shadow-sm h-100">
                    <a id="surrey-class-size-download-report-link-img" href="/pdf/student-impacts-report-feb2021.pdf" target="_blank">
                        <img alt="" class="card-img-top" src="/img/covid19-student-impacts.PNG" />
                    </a>
                    <div class="card-body">
                        <p id="data-science" class="reporting-card-title">Data Science</p>
                        <a id="surrey-class-size-download-report-link" href="/pdf/student-impacts-report-feb2021.pdf" target="_blank" class="text-decoration-none text-dark">
                            <p class="card-text fw-semibold hover-text-primary">COVID-19 Student Impacts Report (PDF)</p>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Child Care Card -->
            <div class="col-12 col-md-6 col-lg-4">
                <div class="card reporting-card shadow-sm h-100">
                    <a id="childcare-report-image" href="/childcare" target="_blank">
                        <img alt="childcare thumbnail" class="card-img-top" src="/img/charts/ChildCareimage.png" />
                    </a>
                    <div class="card-body">
                        <p id="child-care" class="reporting-card-title">Child Care</p>
                        <a id="childcare-report-link" href="/childcare" target="_blank" class="text-decoration-none text-dark">
                            <p class="card-text fw-semibold hover-text-primary">Child Care Reports</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection