<link rel="stylesheet" href="/css/school-directory-results.css">

<!-- Hide original masthead to replace with this new design -->
<style>
    .directory-masthead { display: none !important; }
</style>

<div class="school-district-header">
  <div class="sd-info-section text-white py-5">
    <div class="container restrain">
      <div class="row align-items-center">
        <div class="col-md-7 col-lg-8 mb-4 mb-md-0">
          <p class="mb-1 text-uppercase" style="font-size: 0.9rem; font-weight: 500;">School District</p>
          <h1 class="display-5 fw-bold mb-4">{{ $district_name }} ({{ Helper::removeLeadingZeros($sdID) }})</h1>
          
          @php
            $sd = App\SchoolDistrict::where('sd', $sdID)->first();
          @endphp
          
          <ul class="list-unstyled mb-0" style="font-size: 0.95rem; line-height: 1.6;">
            <li><strong>District Office:</strong> {{ $sd && $sd->phy_address_line_1 ? $sd->phy_address_line_1 . ' , ' . $sd->phy_city . ' , ' . $sd->phy_province . ' ' . strtoupper($sd->phy_postal_code) : '556 Boleskine Rd , Victoria , BC V8Z 1E8' }}</li>
            <li><strong>Phone:</strong> {{ $sd && $sd->contact_phone ? $sd->contact_phone : '2504754162' }}</li>
            <li><strong>Website:</strong> {{ $sd && $sd->website ? $sd->website : 'sd61.bc.ca' }}</li>
            <li><strong>Superintendent:</strong> {{ $sd->superintendent ?? 'Deb Whitten' }}</li>
          </ul>
        </div>
        <div class="col-md-5 col-lg-4 text-center position-relative">
          <div class="hexagon-map-container">
            <div class="hexagon-shape-outer"></div>
            <div class="hexagon-shape"></div>
            <img src="/img/maps/map_sd_{{ $sdID }}.png" alt="Map of {{ $district_name }}" class="img-fluid hexagon-map" onerror="this.src='/img/maps/map_sd_099.png';">
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="sd-actions-section py-3">
    <div class="container restrain">
      <div class="row justify-content-center g-3">
        <div class="col-12 col-md-auto text-center">
          <a href="{{ $sd && $sd->website ? 'http://' . str_replace(['http://', 'https://'], '', $sd->website) : '#' }}" class="btn btn-navy px-5 py-2 fw-bold text-white shadow-sm w-100" target="_blank">District Website</a>
        </div>
        <div class="col-12 col-md-auto text-center">
          <a href="#" class="btn btn-navy px-5 py-2 fw-bold text-white shadow-sm w-100">Download Report (PDF)</a>
        </div>
        <div class="col-12 col-md-auto text-center">
          <a href="#schools" class="btn btn-navy px-5 py-2 fw-bold text-white shadow-sm w-100">All SD {{ Helper::removeLeadingZeros($sdID) }} Schools</a>
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
          <h2 class="text-navy mb-0 fs-3">Available Reports</h2>
        </div>
      </div>
      
      <div class="row align-items-center reports-row-container">
        <div class="col-lg-3 col-md-4 mb-4 mb-md-0 z-1">
          <h4 class="text-navy fw-bold underline-green d-inline-block lh-base mb-0">School District<br>Information</h4>
        </div>
        
        <div class="col-lg-9 col-md-8 position-relative">
          <div class="connecting-line-graphic d-none d-md-block"></div>
          
          <div class="row g-4 px-md-3 z-1">
             <div class="col-6 col-md-4">
                <a href="/school-district/{{ $sdID }}/report/demographic-information" class="text-decoration-none">
                  <div class="report-card navy-bg text-white p-3 p-xl-4 d-flex flex-column justify-content-center align-items-center shadow">
                    <div class="report-icon mb-3">
                       <img src="/img/icon-characteristics-of-students.png" alt="Demographic Information" class="img-fluid" style="height: 50px; width: auto;">
                    </div>
                    <h6 class="fw-bold mb-0 text-center lh-sm text-white fs-6" style="min-height: 2.4rem;">Demographic<br>Information</h6>
                  </div>
                </a>
             </div>
             
             <div class="col-6 col-md-4">
                <a href="/governance/{{ $sdID }}" class="text-decoration-none">
                  <div class="report-card light-blue-bg text-white p-3 p-xl-4 d-flex flex-column justify-content-center align-items-center shadow">
                    <div class="report-icon mb-3">
                       <img src="/img/icon-governance-information.png" alt="Key Contacts" class="img-fluid" style="height: 50px; width: auto;">
                    </div>
                    <h6 class="fw-bold mb-0 text-center lh-sm text-white fs-6" style="min-height: 2.4rem;">Key<br>Contacts</h6>
                  </div>
                </a>
             </div>
             
             <div class="col-6 col-md-4">
                <a href="/finance/{{ $sdID }}" class="text-decoration-none">
                  <div class="report-card navy-bg text-white p-3 p-xl-4 d-flex flex-column justify-content-center align-items-center shadow">
                    <div class="report-icon mb-3">
                       <img src="/img/icon-finance-information.png" alt="Financial Information" class="img-fluid" style="height: 50px; width: auto;">
                    </div>
                    <h6 class="fw-bold mb-0 text-center lh-sm text-white fs-6" style="min-height: 2.4rem;">Financial<br>Information</h6>
                  </div>
                </a>
             </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <div id="schools" class="container restrain py-5">
    @if ($w_public || $w_indi)
        <h3 class="ministry-blue slide-title directory-table-heading mb-4 text-center">Schools in {{ $district_name }}</h3>
    @endif

    @if ($w_public)
      <h4 class="ministry-blue mb-3 fw-bold">{{ trans('esdr2.public_school_lable_plural') }}</h4>
      <div class="table-responsive mb-5 shadow-sm bg-white p-3 rounded">
          <table class="table table-hover directory-results-table mb-0 w-100">
            <thead class="table-light">
                <tr>
                  <th class="school-name border-top-0">{{ trans('esdr2.name_lable') }}</th>
                  <th class="school-grade-range border-top-0">{{ trans('esdr2.grade_level_label') }}</th> 
                  <th class="school-address border-top-0">{{ trans('esdr2.address_label') }}</th>
                </tr>
            </thead>
            <tbody class="border-top-0">
            @foreach ($schools as $school) 
              @if (!$school->independent)
                <tr>
                  <td class="school-name align-middle"><a href="/school/{{ $school->mincode }}" class="text-decoration-none fw-bold" style="color: #5190cd;">{{ Helper::fixEcole($school->school_name) }}</a></td>
                  <td class="school-grade-range align-middle text-muted">{{ Helper::formatSchoolGradeRangeStr($school->mincode) }}</td>
                  <td class="school-address align-middle"><a target="_blank" href="https://www.google.ca/maps/place/{{ str_replace(' ', '+', $school->present()->formatSchoolAddress) }}" class="text-decoration-none text-secondary"><small>{{ $school->present()->formatSchoolAddress }}</small></a></td>
                </tr>
              @endif
            @endforeach
            </tbody>
          </table>
      </div>
    @endif
    
    @if ($w_indi) 
      <h4 class="ministry-blue mb-3 fw-bold">{{ trans('esdr2.inidi_school_lable_plural') }}</h4>
      <div class="table-responsive shadow-sm bg-white p-3 rounded">
          <table class="table table-hover directory-results-table mb-0 w-100">
            <thead class="table-light">
                <tr>
                  <th class="school-name border-top-0">{{ trans('esdr2.name_lable') }}</th>
                  <th class="school-grade-range border-top-0">{{ trans('esdr2.grade_level_label') }}</th> 
                  <th class="school-address border-top-0">{{ trans('esdr2.address_label') }}</th>
                </tr>
            </thead>
            <tbody class="border-top-0">
            @foreach ($schools as $school) 
              @if ($school->independent)
                <tr>
                  <td class="school-name align-middle"><a href="/school/{{ $school->mincode }}" class="text-decoration-none fw-bold" style="color: #5190cd;">{{ Helper::fixEcole($school->school_name) }}</a></td>
                  <td class="school-grade-range align-middle text-muted">{{ Helper::formatSchoolGradeRangeStr($school->mincode) }}</td>
                  <td class="school-address align-middle"><a target="_blank" href="https://www.google.ca/maps/place/{{ str_replace(' ', '+', $school->present()->formatSchoolAddress) }}" class="text-decoration-none text-secondary"><small>{{ $school->present()->formatSchoolAddress }}</small></a></td>
                </tr>
              @endif
            @endforeach
            </tbody>
          </table>
      </div>
    @endif
  </div>

</div>
