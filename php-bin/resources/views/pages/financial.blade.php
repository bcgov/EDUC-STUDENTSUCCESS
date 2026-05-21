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
          <p class="mb-1 text-uppercase" style="font-size: 0.9rem; font-weight: 500;">School District Financial Information</p>
          <h1 class="display-5 fw-bold mb-4">
              {{ Helper::formatCityForHuman($school_district->district_name) }} 
              @if ($school_district->sd != '099') ({{ Helper::removeLeadingZeros($school_district->sd) }}) @endif
          </h1>
          
          <div class="report-meta-container mt-4">
            <p class="text-white mb-0" style="font-size: 0.95rem; line-height: 1.6;">
              Investment in the K-12 education system takes many forms. The ministry funds Schools Districts in two main ways: Operating and Capital. These investment are carefully monitored to ensure that Districts are operating as close to optimally as possible and that there is a high level of public trust in the system.
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
        <!-- <iframe width="1140" height="541.25" src="https://app.powerbi.com/reportEmbed?reportId=c1ac82c0-be1e-40c8-a3b2-69a2bf9a1c78&autoAuth=true&ctid=b9fec68c-c92d-461e-9a97-3d03a0f18b82&config=eyJjbHVzdGVyVXJsIjoiaHR0cHM6Ly93YWJpLXVzLW5vcnRoLWNlbnRyYWwtZi1wcmltYXJ5LXJlZGlyZWN0LmFuYWx5c2lzLndpbmRvd3MubmV0LyJ9" frameborder="0" allowFullScreen="true"></iframe> -->
        <h3 class="slide-title text-navy mb-4 mt-2">Capacity Utilization</h3>
        <iframe scrolling="no" id="frameId-96" class="tableau-embed w-100 rounded shadow-sm mb-5" style="min-height: 430px; border: none;"
            src="//public.tableau.com/views/ESDR1/15_Capacity_Utilization?:showVizHome=no&:display_share=no&:embed=true&:toolbar=no&:device=desktop&SD={{$school_district->sd}}"></iframe>

        <!-- <h3 class="slide-title light-blue">Enrolment and Funding</h3>
        <iframe scrolling="no" id="frameId-97" class="tableau-embed" style="min-height: 430px" src="//public.tableau.com/views/ESDR1/16_Enrolment_and_Funding?:showVizHome=no&:display_share=no&:embed=true&:toolbar=no&:device=desktop&SD={{$school_district->sd}}"></iframe>

        <h3 class="slide-title light-blue">Indigenous Education Finances</h3>
        <table class="finance-results-table table table-striped table-hover">
            <tbody>
            @foreach ($indiEducFinance as $indiEdFin)
                <tr>
                    <th class="gov-head finance-program" style="text-align: left;">Local Enhancement Agreements Signed (expressd as a fraction over total first nations in a school district)</th>
                    <td class="finance-status">{{ $indiEdFin->local_enhancement_agreements_signed }}</td>
                </tr>
                <tr>
                    <th class="gov-head finance-funding" style="text-align: left;">Indigenous Education Council (IEC)</th>
                    <td class="finance-completion-year">{{ $indiEdFin->indigenous_education_council }}</td>
                </tr>
            @endforeach
            </tbody>
        </table> -->

        <h3 class="slide-title text-navy mb-4">Financial Indicators</h3>
        <iframe scrolling="no" id="frameId-98" class="tableau-embed w-100 rounded shadow-sm mb-5" style="min-height: 617px; border: none;"
            src="//public.tableau.com/views/ESDR1/17_Capital_Projects_In_Progress?:showVizHome=no&:display_share=no&:embed=true&:toolbar=no&:device=desktop&SD={{$school_district->sd}}"></iframe>

        <h3 class="slide-title text-navy mb-4">Minor Capital Program Funding</h3>
        <div class="table-responsive mb-5">
            <table class="finance-results-table table table-striped table-hover align-middle shadow-sm rounded overflow-hidden">
                <thead class="table-dark">
                    <tr>
                        <th class="gov-head finance-program col-6 text-start">Program</th>
                        <th class="gov-head finance-funding col-6 text-start">Funding</th>
                    </tr>
                </thead>
                <tbody class="bg-white">
                    @foreach ($minor_capital as $mcap)
                    <tr>
                        <td class="finance-status">{{ $mcap->program }}</td>
                        <td class="finance-completion-year">{{ $mcap->funding }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <h3 class="slide-title text-navy mb-4">Capital Projects</h3>
        <!-- <iframe scrolling="no" id="frameId-99" width='100%' height='100%' src="//public.tableau.com/views/ESDR1/18_Capital_Projects_Completed?:showVizHome=no&:display_share=no&:embed=true&:toolbar=no&:device=desktop&SD={{$school_district->sd}}"></iframe>  -->
        <div class="table-responsive mb-4">
            <table class="finance-results-table table table-striped table-hover align-middle shadow-sm rounded overflow-hidden">
                <thead class="table-dark">
                    <tr>
                        <th class="gov-head finance-status text-start col-2">Status</th>
                        <th class="gov-head finance-completion-year text-start col-2">Completion Year</th>
                        <th class="gov-head finance-facility-name text-start col-3">School Name</th>
                        <th class="gov-head finance-project-details text-start col-3">Project Details</th>
                        <th class="gov-head finance-project-estimated-cost text-start col-2">Budget</th>
                    </tr>
                </thead>
                <tbody class="bg-white">
                    @foreach ($capital as $cap)
                    <tr>
                        <td class="finance-status">{{ $cap->status }}</td>
                        <td class="finance-completion-year">{{ $cap->completion_year }}</td>
                        <td class="finance-facility-name fw-semibold">{{ $cap->facility_name }}</td>
                        <td class="finance-project-details">{{ $cap->project_details }}</td>
                        <td class="finance-project-estimated-cost">{{ $cap->budget }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</section>
@endsection