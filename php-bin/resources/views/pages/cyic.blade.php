@extends('layout')
@section('subtitle'){{ trans('esdr2.glossary_heading') }}@endsection

@section('content')

<link rel="stylesheet" href="/css/school-directory-results.css">
<link rel="stylesheet" href="/css/cyic.css">

<style>
    .directory-masthead { display: none !important; }
</style>

<div class="school-district-header">
  <div class="sd-info-section text-white py-5">
    <div class="container restrain">
      <div class="row align-items-center">
        <div class="col-md-7 col-lg-8 mb-4 mb-md-0">
          <p class="mb-1 text-uppercase" style="font-size: 0.9rem; font-weight: 500;">Provincial Report</p>
          <h1 class="display-5 fw-bold mb-4">Children and Youth In Care:<br>How Are We Doing 2022/2023</h1>
          
          <div style="font-size: 0.95rem; line-height: 1.6;">
            <p>This is the inaugural edition of an annual report on the educational assessments, experiences, and outcomes of students living outside of their parental homes under a legal arrangement in the British Columbia public K-12 and postsecondary education systems.</p>
            <p>This report was produced by the Ministry of Education and Child Care, the Ministry of Children and Family Development and the Ministry of Post-Secondary Education and Future Skills pursuant to Action 4.18 of the Declaration on the Rights of Indigenous Peoples Act Action Plan and the <a href="https://www2.gov.bc.ca/assets/download/86B78216AC474EB69329A0930389DBFC" class="text-white text-decoration-underline" target="_blank">First Nations Children and Youth in Care (PDF)</a> Protocol, to "co-develop and implement measures to support improved education outcomes of current and former First Nation children and youth in care, including meaningful data collection to inform policy planning and service delivery".</p>
          </div>
        </div>
        <div class="col-md-5 col-lg-4 text-center position-relative">
          <div class="hexagon-map-container">
            <div class="hexagon-shape-outer"></div>
            <div class="hexagon-shape"></div>
            <img src="/img/charts/child-care-top-hex-icon.png" alt="Small map graphic with School." class="img-fluid hexagon-map p-4" style="z-index: 2; position: relative;">
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="sd-actions-section py-3">
    <div class="container restrain">
      <div class="row justify-content-center g-3">
        <div class="col-12 col-md-auto text-center">
          <a href="/assets/reports/cyic_hawd.pdf" class="btn btn-navy px-5 py-2 fw-bold text-white shadow-sm w-100" target="_blank">Download Provincial Report (PDF)</a>
        </div>
      </div>
    </div>
  </div>

  <div class="sd-reports-section py-5 bg-light position-relative overflow-hidden">
    <!-- Background plus graphic -->
    <div class="position-absolute d-none d-lg-block" style="right: 5%; top: 45%; color: #b5ded8; font-family: monospace; font-size: 2rem; letter-spacing: 50px;">
        + + + +<br><br>+ + + +
    </div>

    <div class="container restrain position-relative z-1">
      <div class="row mb-5 align-items-center">
        <div class="col-12 d-flex align-items-center">
          <img src="/img/hero_hexagons.png" alt="" class="me-3" style="width: 70px; filter: grayscale(1); opacity: 0.15;">
          <h2 class="text-navy mb-0 fs-3">Webpage Overview</h2>
        </div>
      </div>
      
      <div class="row">
        <div class="col-12 text-center">
            <img src="/img/cyic-webpage.png" alt="Small map graphic with School." class="img-fluid border shadow-sm" style="max-width: 100%;">
        </div>
      </div>
      
    </div>
  </div>
</div>


@endsection