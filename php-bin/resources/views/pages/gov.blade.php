@extends('layout')

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
          <p class="mb-1 text-uppercase" style="font-size: 0.9rem; font-weight: 500;">School District Governance</p>
          <h1 class="display-5 fw-bold mb-4">
              {{ Helper::formatCityForHuman($school_district->district_name) }} 
              @if ($school_district->sd != '099') ({{ Helper::removeLeadingZeros($school_district->sd) }}) @endif
          </h1>
          
          <div class="report-meta-container mt-4">
            <p class="text-white mb-0" style="font-size: 0.95rem; line-height: 1.6;">
              The following is the most up to date contact information available for District Leadership, Board leaders,
              and the relevant Members of the Legislative Assembly for each School District.
            </p>
          </div>
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
      <div class="row justify-content-center align-items-center g-3">
        <div class="col-12 col-md-8 more-reports">
          <select id="dynamic_select" class="form-select report-select">
            <option value="" selected>Select another report</option>
            <option value="/school-district/{{ $school_district->sd }}/report/contextual-information">Demographic Information</option>
            <option value="/governance/{{ $school_district->sd }}">Key contacts</option>
            <option value="/finance/{{ $school_district->sd }}">Financial Information</option>
            <option value="/school-district/{{ $school_district->sd }}/report/completion-rates">Completion Rate</option>
            <option value="/school-district/{{ $school_district->sd }}/report/fsa">Foundation Skills Assessment</option>
            <option value="/school-district/{{ $school_district->sd }}/report/grade-to-grade-transitions">Grade-to-Grade Transitions</option>
            <option value="/school-district/{{ $school_district->sd }}/report/grad-assess">Graduation Assessments</option>
            <option value="/school-district/{{ $school_district->sd }}/report/students-entering-school">Characteristics of Students Entering School</option>
            <option value="/school-district/{{ $school_district->sd }}/report/student-satisfaction">Student Satisfaction and Wellness</option>
            <option value="/school-district/{{ $school_district->sd }}/report/post-secondary-career-prep">Post-Secondary and Career Preparation</option>
            <option value="/school-district/{{ $school_district->sd }}/report/transition-to-post-secondary">Transition to B.C. Post-Secondary</option>
          </select> 
        </div>
        <div class="col-12 col-md-4 more-reports text-center text-md-start">
          <a class="btn btn-navy px-4 py-2 fw-bold text-white shadow-sm w-100" href="/school-district/{{ $school_district->sd }}">View All Reports</a>
        </div>
      </div>
    </div>
  </div>
</div>

<script>
$(function() {
  // bind change event to select
  $('#dynamic_select').on('change', function() {
    var url = $(this).val(); // get selected value
    if (url) { // require a URL

      window.location = url; // redirect
    }
    return false;
  });
});
</script>

<section class="py-5 bg-light">
    <div class="container restrain">
        <h3 class="slide-title text-navy mb-4">Key contacts</h3>
        <div class="table-responsive">
            <table class="governance-results-table table table-striped table-hover align-middle shadow-sm rounded overflow-hidden">
                <thead class="table-dark">
                    <tr>
                        <th class="gov-head governance-position col-2">Position</th>
                        <th class="gov-head governance-name col-4">Name</th> 
                        <th class="gov-head governance-phone col-2">Phone</th>
                        <th class="gov-head governance-mobile col-2">Mobile</th>
                        <th class="gov-head governance-email col-2">Email</th>
                    </tr>
                </thead>  
                <tbody class="bg-white">  
                @foreach ($govInfos as $govInfo) 
                    <tr>
                        <td class="governance-position">{{ $govInfo->position }}</td>
                        <td class="governance-name fw-semibold">{{ $govInfo->name }}</td>
                        <td class="governance-phone">
                            @if($govInfo->phone)
                                <a href="tel:{{ preg_replace('/[^0-9]/', '', $govInfo->phone) }}" class="text-decoration-none">{{ $govInfo->phone }}</a>
                            @endif
                        </td>
                        <td class="governance-mobile">
                            @if($govInfo->mobile)
                                <a href="tel:{{ preg_replace('/[^0-9]/', '', $govInfo->mobile) }}" class="text-decoration-none">{{ $govInfo->mobile }}</a>
                            @endif
                        </td>
                        <td class="governance-email">
                            @if($govInfo->email)
                                <a href="mailto:{{ $govInfo->email }}" class="text-decoration-none">{{ $govInfo->email }}</a>
                            @endif
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</section>
@endsection
