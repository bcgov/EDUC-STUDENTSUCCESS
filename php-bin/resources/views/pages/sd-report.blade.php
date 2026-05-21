
@extends('layout')
@section('content')

<link rel="stylesheet" href="/css/school-directory-results.css">

<style>
    .directory-masthead { display: none !important; }
    #report-subtitle { color: #b5ded8 !important; }
</style>

<div class="school-district-header">
  <div class="sd-info-section text-white py-5">
    <div class="container restrain">
      <div class="row align-items-center">
        <div class="col-md-7 col-lg-8 mb-4 mb-md-0">
          <p class="mb-1 text-uppercase" style="font-size: 0.9rem; font-weight: 500;">School District Report</p>
          <h1 class="display-5 fw-bold mb-4">
              {{ Helper::formatCityForHuman($school_district->district_name) }} 
              @if ($school_district->sd != '099') ({{ Helper::removeLeadingZeros($school_district->sd) }}) @endif
          </h1>
          
          <div class="report-meta-container mt-4">
            @include('components.report-meta-descriptions')
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
    
        @php
          $current_report_index = array_search($report_slug, $sd_report_slugs);
          // Map translated headings to report type.
          $report_headings = array(
            'contextual-information' => trans('esdr2.context_information_heading'),
            'students-entering-school' => trans('esdr2.characteristics_of_students_sm'),
            'completion-rates' => trans('esdr2.completion_rate_heading'),
            'fsa' => trans('esdr2.fsa_heading'),
            'grade-to-grade-transitions' => trans('esdr2.g2g_heading'),
            'student-satisfaction' => trans('esdr2.student_sat_heading'),
            'post-secondary-career-prep' => trans('esdr2.post_sec_heading'),
            'prov-exams' => trans('esdr2.prov_exam_heading'), 
            'grad-assess' => trans('esdr2.prov_exam_heading'),
            'transition-to-post-secondary' => trans('esdr2.transition_to_post_sec_heading')
          );
          $report_headings_keys = array_keys($report_headings);
        @endphp
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

      @if ($report_slug == 'contextual-information')
        @foreach ($labels as $key=>$label)
        <h3 class="slide-title light-blue">{{$label}}</h3>
        <div id="desktopView{{ $key }}" class="desktop"></div>
        <div id="tabletView{{ $key }}" class="tablet"></div>
        <div id="mobileView{{ $key++ }}" class="mobile"></div>
        
        <br>
        @endforeach

        @foreach ($mobileData as $key=>$data)
          <script type="text/javascript"> 
            var view;        
            var spec = {!! json_encode($data) !!};
            var viewVar = "#mobileView"+{{ $key++ }};
            console.log(viewVar);
            vegaEmbed(viewVar, spec, {"actions": false}).then(function(result) {
              // Access the Vega view instance (https://vega.github.io/vega/docs/api/view/) as result.view
            }).catch(console.error);                     
          </script>
        @endforeach
        @foreach ($desktopData as $key=>$data)
          <script type="text/javascript"> 
            var view;        
            var spec = {!! json_encode($data) !!};
            var viewVar = "#desktopView"+{{ $key++ }};
            console.log(viewVar);
            vegaEmbed(viewVar, spec, {"actions": false}).then(function(result) {
              // Access the Vega view instance (https://vega.github.io/vega/docs/api/view/) as result.view
            }).catch(console.error);                     
          </script>
        @endforeach
        @foreach ($tabletData as $key=>$data)
          <script type="text/javascript"> 
            var view;        
            var spec = {!! json_encode($data) !!};
            var viewVar = "#tabletView"+{{ $key++ }};
            console.log(viewVar);
            vegaEmbed(viewVar, spec, {"actions": false}).then(function(result) {
              // Access the Vega view instance (https://vega.github.io/vega/docs/api/view/) as result.view
            }).catch(console.error);                     
          </script>
        @endforeach
      @endif

      @if ($report_slug == 'students-entering-school')
        
        <h3 class="slide-title light-blue">{{ trans('esdr2.students_entering_school_heading') }}</h3>
        <iframe scrolling="no" id="frameId-8" class="tableau-embed" src="//public.tableau.com/views/ESDR1/4_EDI?:showVizHome=no&:display_share=no&:embed=true&:toolbar=no&:device=desktop&SD={{ $school_district->sd }}"></iframe>
        <div class="tableau-overlay-half"></div> 
      @endif

      @if ($report_slug == 'completion-rates')
        @include('components.chart-legend')
    
        @foreach ($labels as $key=>$label)
        <h3 class="slide-title light-blue">{{$label}}</h3>
        <div id="desktopView{{ $key }}" class="desktop"></div>
        <div id="tabletView{{ $key }}" class="tablet"></div>
        <div id="mobileView{{ $key++ }}" class="mobile"></div>
        
        <br>
        @endforeach

        @foreach ($mobileData as $key=>$data)
          <script type="text/javascript"> 
            var view;        
            var spec = {!! json_encode($data) !!};
            var viewVar = "#mobileView"+{{ $key++ }};
            console.log(viewVar);
            vegaEmbed(viewVar, spec, {"actions": false}).then(function(result) {
              // Access the Vega view instance (https://vega.github.io/vega/docs/api/view/) as result.view
            }).catch(console.error);                     
          </script>
        @endforeach
        @foreach ($desktopData as $key=>$data)
          <script type="text/javascript"> 
            var view;        
            var spec = {!! json_encode($data) !!};
            var viewVar = "#desktopView"+{{ $key++ }};
            console.log(viewVar);
            vegaEmbed(viewVar, spec, {"actions": false}).then(function(result) {
              // Access the Vega view instance (https://vega.github.io/vega/docs/api/view/) as result.view
            }).catch(console.error);                     
          </script>
        @endforeach
        @foreach ($tabletData as $key=>$data)
          <script type="text/javascript"> 
            var view;        
            var spec = {!! json_encode($data) !!};
            var viewVar = "#tabletView"+{{ $key++ }};
            console.log(viewVar);
            vegaEmbed(viewVar, spec, {"actions": false}).then(function(result) {
              // Access the Vega view instance (https://vega.github.io/vega/docs/api/view/) as result.view
            }).catch(console.error);                     
          </script>
        @endforeach
      @endif

      @if ($report_slug == 'fsa')
        
        @include('components.chart-legend')
        @foreach ($labels as $key=>$label)
        <h3 class="slide-title light-blue">{{$label}}</h3>
        <div id="desktopView{{ $key }}" class="desktop"></div>
        <div id="tabletView{{ $key }}" class="tablet"></div>
        <div id="mobileView{{ $key++ }}" class="mobile"></div>
        
        <br>
        @endforeach

        @foreach ($mobileData as $key=>$data)
          <script type="text/javascript"> 
            var view;        
            var spec = {!! json_encode($data) !!};
            var viewVar = "#mobileView"+{{ $key++ }};
            console.log(viewVar);
            vegaEmbed(viewVar, spec, {"actions": false}).then(function(result) {
              // Access the Vega view instance (https://vega.github.io/vega/docs/api/view/) as result.view
            }).catch(console.error);                     
          </script>
        @endforeach
        @foreach ($desktopData as $key=>$data)
          <script type="text/javascript"> 
            var view;        
            var spec = {!! json_encode($data) !!};
            var viewVar = "#desktopView"+{{ $key++ }};
            console.log(viewVar);
            vegaEmbed(viewVar, spec, {"actions": false}).then(function(result) {
              // Access the Vega view instance (https://vega.github.io/vega/docs/api/view/) as result.view
            }).catch(console.error);                     
          </script>
        @endforeach
        @foreach ($tabletData as $key=>$data)
          <script type="text/javascript"> 
            var view;        
            var spec = {!! json_encode($data) !!};
            var viewVar = "#tabletView"+{{ $key++ }};
            console.log(viewVar);
            vegaEmbed(viewVar, spec, {"actions": false}).then(function(result) {
              // Access the Vega view instance (https://vega.github.io/vega/docs/api/view/) as result.view
            }).catch(console.error);                     
          </script>
        @endforeach
      @endif

      @if ($report_slug == 'grade-to-grade-transitions')
        @foreach ($labels as $key=>$label)
          <h3 class="slide-title light-blue">{{$label}}</h3>
          <div id="desktopView{{ $key }}" class="desktop"></div>
          <div id="tabletView{{ $key }}" class="tablet"></div>
          <div id="mobileView{{ $key++ }}" class="mobile"></div>
          
          <br>
        @endforeach    
        @foreach ($mobileData as $key=>$data)
          <script type="text/javascript"> 
            var view;        
            var spec = {!! json_encode($data) !!};
            var viewVar = "#mobileView"+{{ $key++ }};
            console.log(viewVar);
            vegaEmbed(viewVar, spec, {"actions": false}).then(function(result) {
              // Access the Vega view instance (https://vega.github.io/vega/docs/api/view/) as result.view
            }).catch(console.error);                     
          </script>
        @endforeach
        @foreach ($desktopData as $key=>$data)
          <script type="text/javascript"> 
            var view;        
            var spec = {!! json_encode($data) !!};
            var viewVar = "#desktopView"+{{ $key++ }};
            console.log(viewVar);
            vegaEmbed(viewVar, spec, {"actions": false}).then(function(result) {
              // Access the Vega view instance (https://vega.github.io/vega/docs/api/view/) as result.view
            }).catch(console.error);                     
          </script>
        @endforeach
        @foreach ($tabletData as $key=>$data)
          <script type="text/javascript"> 
            var view;        
            var spec = {!! json_encode($data) !!};
            var viewVar = "#tabletView"+{{ $key++ }};
            console.log(viewVar);
            vegaEmbed(viewVar, spec, {"actions": false}).then(function(result) {
              // Access the Vega view instance (https://vega.github.io/vega/docs/api/view/) as result.view
            }).catch(console.error);                     
          </script>
        @endforeach

      @endif

      @if ($report_slug == 'student-satisfaction')

        @include('components.chart-legend')
        @foreach ($labels as $key=>$label)
          <h3 class="slide-title light-blue">{{$label}}</h3>
          <div id="desktopView{{ $key }}" class="desktop"></div>
          <div id="tabletView{{ $key }}" class="tablet"></div>
          <div id="mobileView{{ $key++ }}" class="mobile"></div>
          
          <br>
        @endforeach    
        @foreach ($mobileData as $key=>$data)
          <script type="text/javascript"> 
            var view;        
            var spec = {!! json_encode($data) !!};
            var viewVar = "#mobileView"+{{ $key++ }};
            console.log(viewVar);
            vegaEmbed(viewVar, spec, {"actions": false}).then(function(result) {
              // Access the Vega view instance (https://vega.github.io/vega/docs/api/view/) as result.view
            }).catch(console.error);                     
          </script>
        @endforeach
        @foreach ($desktopData as $key=>$data)
          <script type="text/javascript"> 
            var view;        
            var spec = {!! json_encode($data) !!};
            var viewVar = "#desktopView"+{{ $key++ }};
            console.log(viewVar);
            vegaEmbed(viewVar, spec, {"actions": false}).then(function(result) {
              // Access the Vega view instance (https://vega.github.io/vega/docs/api/view/) as result.view
            }).catch(console.error);                     
          </script>
        @endforeach
        @foreach ($tabletData as $key=>$data)
          <script type="text/javascript"> 
            var view;        
            var spec = {!! json_encode($data) !!};
            var viewVar = "#tabletView"+{{ $key++ }};
            console.log(viewVar);
            vegaEmbed(viewVar, spec, {"actions": false}).then(function(result) {
              // Access the Vega view instance (https://vega.github.io/vega/docs/api/view/) as result.view
            }).catch(console.error);                     
          </script>
        @endforeach

        @endif
      @if ($report_slug == 'post-secondary-career-prep')
        @include('components.chart-legend')
        @foreach ($labels as $key=>$label)
          <h3 class="slide-title light-blue">{{$label}}</h3>
          <div id="desktopView{{ $key }}" class="desktop"></div>
          <div id="tabletView{{ $key }}" class="tablet"></div>
          <div id="mobileView{{ $key++ }}" class="mobile"></div>
          
          <br>
        @endforeach    
        @foreach ($mobileData as $key=>$data)
          <script type="text/javascript"> 
            var view;        
            var spec = {!! json_encode($data) !!};
            var viewVar = "#mobileView"+{{ $key++ }};
            console.log(viewVar);
            vegaEmbed(viewVar, spec, {"actions": false}).then(function(result) {
              // Access the Vega view instance (https://vega.github.io/vega/docs/api/view/) as result.view
            }).catch(console.error);                     
          </script>
        @endforeach
        @foreach ($desktopData as $key=>$data)
          <script type="text/javascript"> 
            var view;        
            var spec = {!! json_encode($data) !!};
            var viewVar = "#desktopView"+{{ $key++ }};
            console.log(viewVar);
            vegaEmbed(viewVar, spec, {"actions": false}).then(function(result) {
              // Access the Vega view instance (https://vega.github.io/vega/docs/api/view/) as result.view
            }).catch(console.error);                     
          </script>
        @endforeach
        @foreach ($tabletData as $key=>$data)
          <script type="text/javascript"> 
            var view;        
            var spec = {!! json_encode($data) !!};
            var viewVar = "#tabletView"+{{ $key++ }};
            console.log(viewVar);
            vegaEmbed(viewVar, spec, {"actions": false}).then(function(result) {
              // Access the Vega view instance (https://vega.github.io/vega/docs/api/view/) as result.view
            }).catch(console.error);                     
          </script>
        @endforeach

      @endif

      @if ($report_slug == 'prov-exams')
        <h3 class="slide-title light-blue">{{ trans('esdr2.prov_exam_heading') }}</h3>
        @include('components.chart-legend')
        <iframe scrolling="no" id="frameId-12" class="tableau-embed" src="//public.tableau.com/views/ESDR1/13_Assessments?:showVizHome=no&:display_share=no&:embed=true&:toolbar=no&:device=desktop&SD={{ $school_district->sd }}"></iframe>
        <div class="tableau-overlay-full"></div> 
      @endif
      @if ($report_slug == 'grad-assess')
        @include('components.chart-legend')
       
        @foreach ($labels as $key=>$label)
        <h3 class="slide-title light-blue">{{$label}}</h3>
        @if($school_district->sd == '093')
          <h3 class="light-blue">English</h3>
        @endif
        <div id="desktopView{{ $key }}" class="desktop"></div>
        <div id="tabletView{{ $key }}" class="tablet"></div>
        <div id="mobileView{{ $key++ }}" class="mobile"></div>
        @if($school_district->sd == '093')
        <hr>
          <h3 class="light-blue">French</h3>
          <div id="frenchDesktopView" class="desktop"></div>
          <div id="frenchTabletView" class="tablet"></div>
          <div id="frenchMobileView" class="mobile"></div>
        @endif
        <br>
        @endforeach
        @foreach ($mobileData as $key=>$data)
          <script type="text/javascript"> 
            var view;        
            var spec = {!! json_encode($data) !!};
            var viewVar = "#mobileView"+{{ $key++ }};
            // console.log(viewVar);
            vegaEmbed(viewVar, spec, {"actions": false}).then(function(result) {
              // Access the Vega view instance (https://vega.github.io/vega/docs/api/view/) as result.view
            }).catch(console.error);                     
          </script>
        @endforeach
        @foreach ($desktopData as $key=>$data)
          <script type="text/javascript"> 
            var view;        
            var spec = {!! json_encode($data) !!};
            var viewVar = "#desktopView"+{{ $key++ }};
            // console.log(viewVar);
            // console.log(spec);
            vegaEmbed(viewVar, spec, {"actions": false}).then(function(result) {
              // Access the Vega view instance (https://vega.github.io/vega/docs/api/view/) as result.view
            }).catch(console.error);                     
          </script>
        @endforeach
        @foreach ($tabletData as $key=>$data)
          <script type="text/javascript"> 
            var view;        
            var spec = {!! json_encode($data) !!};
            var viewVar = "#tabletView"+{{ $key++ }};
            // console.log(viewVar);
            vegaEmbed(viewVar, spec, {"actions": false}).then(function(result) {
              // Access the Vega view instance (https://vega.github.io/vega/docs/api/view/) as result.view
            }).catch(console.error);                     
          </script>
        @endforeach
        @if($school_district->sd == '093')
        @foreach ($frenchMobileData as $key=>$data)
          <script type="text/javascript"> 
            var view;        
            var spec = {!! json_encode($data) !!};
            var viewVar = "#frenchMobileView";
            console.log(viewVar);
            console.log(spec);
            vegaEmbed(viewVar, spec, {"actions": false}).then(function(result) {
              // Access the Vega view instance (https://vega.github.io/vega/docs/api/view/) as result.view
            }).catch(console.error);                     
          </script>
        @endforeach
        @foreach ($frenchDesktopData as $key=>$data)
          <script type="text/javascript"> 
            var view;        
            var spec = {!! json_encode($data) !!};
            var viewVar = "#frenchDesktopView";
            console.log(viewVar);
            console.log(spec);
            vegaEmbed(viewVar, spec, {"actions": false}).then(function(result) {
              // Access the Vega view instance (https://vega.github.io/vega/docs/api/view/) as result.view
            }).catch(console.error);                     
          </script>
        @endforeach
        @foreach ($frenchTabletData as $key=>$data)
          <script type="text/javascript"> 
            var view;        
            var spec = {!! json_encode($data) !!};
            var viewVar = "#frenchTabletView";
            // console.log(viewVar);
            vegaEmbed(viewVar, spec, {"actions": false}).then(function(result) {
              // Access the Vega view instance (https://vega.github.io/vega/docs/api/view/) as result.view
            }).catch(console.error);                     
          </script>
        @endforeach
        @endif
      @endif

      @if ($report_slug == 'transition-to-post-secondary')
        @foreach ($labels as $key=>$label)
        <h3 class="slide-title light-blue">{{$label}}</h3>
        <div id="desktopView{{ $key }}" class="desktop"></div>
        <div id="tabletView{{ $key }}" class="tablet"></div>
        <div id="mobileView{{ $key++ }}" class="mobile"></div>
       
        <br>
        @endforeach
        @foreach ($mobileData as $key=>$data)
          <script type="text/javascript"> 
            var view;        
            var spec = {!! json_encode($data) !!};
            var viewVar = "#mobileView"+{{ $key++ }};
            console.log(viewVar);
            vegaEmbed(viewVar, spec, {"actions": false}).then(function(result) {
              // Access the Vega view instance (https://vega.github.io/vega/docs/api/view/) as result.view
            }).catch(console.error);                     
          </script>
        @endforeach
        @foreach ($desktopData as $key=>$data)
          <script type="text/javascript"> 
            var view;        
            var spec = {!! json_encode($data) !!};
            var viewVar = "#desktopView"+{{ $key++ }};
            console.log(viewVar);
            vegaEmbed(viewVar, spec, {"actions": false}).then(function(result) {
              // Access the Vega view instance (https://vega.github.io/vega/docs/api/view/) as result.view
            }).catch(console.error);                     
          </script>
        @endforeach
        @foreach ($tabletData as $key=>$data)
          <script type="text/javascript"> 
            var view;        
            var spec = {!! json_encode($data) !!};
            var viewVar = "#tabletView"+{{ $key++ }};
            console.log(viewVar);
            vegaEmbed(viewVar, spec, {"actions": false}).then(function(result) {
              // Access the Vega view instance (https://vega.github.io/vega/docs/api/view/) as result.view
            }).catch(console.error);                     
          </script>
        @endforeach
      @endif

    </div>
  </section>

@endsection

@section('subtitle'){{ $school_district->district_name }} {{ trans('esdr2.sd_heading') }}: {{ $report_headings[$sd_report_slugs[$current_report_index - 0]] }}@endsection
@push('css')
  <link href="/css/sd-report.css" rel="stylesheet" type="text/css">
@endpush
@push('scripts') 
	<script src="https://vega.github.io/vega/assets/promise.min.js"></script>
	<script src="https://vega.github.io/vega/assets/symbol.min.js"></script>
	<script src="https://vega.github.io/vega/assets/fetch.min.js"></script>
	<script src="https://vega.github.io/vega/vega.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/vega@5"></script>
@endpush