@extends('layout')
@section('subtitle'){{ $school_district->district_name }} {{ trans('esdr2.sd_heading') }}@endsection

@section('content')

<link rel="stylesheet" href="/css/school-directory-results.css">

<style>
    .directory-masthead { display: none !important; }
</style>

<div class="school-district-header">
  <div class="sd-info-section text-white py-5">
    <div class="container restrain">
      <div class="row align-items-center">
        <div class="col-md-7 col-lg-8 mb-4 mb-md-0">
          <p class="mb-1 text-uppercase" style="font-size: 0.9rem; font-weight: 500;">School District</p>
          <h1 class="display-5 fw-bold mb-4">
              {{ Helper::formatCityForHuman($school_district->district_name) }} 
              @if ($school_district->sd != '099') ({{ Helper::removeLeadingZeros($school_district->sd) }}) @endif
          </h1>
          
          <ul class="list-unstyled mb-0" style="font-size: 0.95rem; line-height: 1.6;">
            @if ($school_district->sd != '099')
            <li><strong>District Office:</strong> {{ $school_district->phy_address_line_1 ? $school_district->phy_address_line_1 . ' , ' . $school_district->phy_city . ' , ' . $school_district->phy_province . ' ' . strtoupper($school_district->phy_postal_code) : '556 Boleskine Rd , Victoria , BC V8Z 1E8' }}</li>
            <li><strong>Phone:</strong> {{ $school_district->contact_phone ? $school_district->contact_phone : '2504754162' }}</li>
            <li><strong>Website:</strong> {{ $school_district->website ? $school_district->website : 'sd61.bc.ca' }}</li>
            <li><strong>Superintendent:</strong> {{ $school_district->superintendent ?? 'Deb Whitten' }}</li>
            @else
            <li><strong>Provincial Results</strong></li>
            @endif
          </ul>
        </div>
        <div class="col-md-5 col-lg-4 text-center position-relative">
          <div class="hexagon-map-container">
            <div class="hexagon-shape-outer"></div>
            <div class="hexagon-shape"></div>
            <img src="/img/maps/map_sd_{{ $school_district->sd }}.png" alt="Map of {{ $school_district->district_name }}" class="img-fluid hexagon-map" onerror="this.src='/img/maps/map_sd_099.png';">
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="sd-actions-section py-3">
    <div class="container restrain">
      <div class="row justify-content-center g-3">
        @if ($school_district->website)
        <div class="col-12 col-md-auto text-center">
          <a href="{{ 'http://' . str_replace(['http://', 'https://'], '', $school_district->website) }}" class="btn btn-navy px-5 py-2 fw-bold text-white shadow-sm w-100" target="_blank">District Website</a>
        </div>
        @endif
        <div class="col-12 col-md-auto text-center">
          <a id="main-download-report-link" data-sd="{{ $school_district->sd }}" href="/pdf/Enhanced-School-District-Report-for-SD{{ $school_district->sd }}.pdf" class="btn btn-navy px-5 py-2 fw-bold text-white shadow-sm w-100">Download Report (PDF)</a>
        </div>
        @if ($school_district->sd != '099')
        <div class="col-12 col-md-auto text-center">
          <a href="/schools/in-school-district/{{ $school_district->sd }}" class="btn btn-navy px-5 py-2 fw-bold text-white shadow-sm w-100">All SD {{ Helper::removeLeadingZeros($school_district->sd) }} Schools</a>
        </div>
        @endif
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
          <h2 class="text-navy mb-0 fs-3">Available Reports</h2>
        </div>
      </div>
      
      @include('components.sd-charts-menu')
      
    </div>
  </div>
</div>

<div class="reports-heading reports-heading-foot">
  <div class="container restrain">
    <div class="row">
      <div class="col-12 col-md-5">
        <img src="/img/reports-pic.png" alt="picture of reports" width="auto" height="190px">
      </div>
      <div class="col-12 col-md-7">
        <p><h3 class="dark-blue">FSA Item Analysis</h3></p>
        <p><img class="green-bar m-0 float-start" src="{{URL::to('/')}}/img/green-bar-2.png" alt=""/><br></p>
        <p>Reports for educators to help interpret and understand<br>
          students' results for the provincial Grades 4 and 7 Foundation<br>
          Skills Assessment.
        </p>
        <p><a class="btn btn-primary btn-lg rounded-0" href="/fsa/index.html">View the Data+</a></p>
      </div>
    </div>
  </div>
</div>

@endsection