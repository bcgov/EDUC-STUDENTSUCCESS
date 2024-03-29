@extends('layout')
@section('subtitle'){{ trans('esdr2.glossary_heading') }}@endsection
@section('content')
<!-- Start of body -->
<div id="enrolment_subnav">
  <div class="navbar navbar-expand-lg fixed-top nav-bg" style="position:fixed;">

    <div class="navbar-toggler mx-auto" data-toggle="collapse" data-target="#navbarSupportedContent">
      <div class="icon">
        <span class="line top"></span>
        <span class="line middle"></span>
        <span class="line bottom"></span>
      </div>
    </div>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="#enrolment_model">The Model</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#demographics">Demographics</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#migration_overview">Migration</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#transition">Transition</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#retention">Retention</a>
        </li>
      </ul>
    </div>
  </div>
</div>

    
    
    
<div id="content_wrapper">
  <div class="container" id='intro'>
    <!-- Jumbotron / hero section, a component -->
    <div class="row pt-3">
      <div class="col-sm-12 col-md-5">
        <h2 class="intro_header">Enrolment Model</h2>
        <p style="font-size:16px">Explore the Ministry of Education’s enrolment model by interacting with the different sections that describe each of the four main student enrolment drivers. Student enrolment is influenced by demographics, migration,
          public-independent transition, and course load retention. All values are reported in funded <a
            href="https://studentsuccess.gov.bc.ca/glossary#79" target="_blank" class="fte_defin">Full-Time Equivalent
            (FTE)</a>.</p>
        <div class="cta_container mt-5">
          <a class="btn btn-primary btn-lg top-button" style="font-weight: lighter;font-size: 15px;padding: 9px 18px;border-radius: 0px;" href="#enrolment_model">EXPLORE  +</a>
          <a class="ghostBtn" style="font-weight: lighter;font-size: 15px;padding: 9px 18px;border-radius: 0px;"
            href="https://studentsuccess.gov.bc.ca/school-district/099/report/contextual-information"
            target="_blank">MORE REPORTS  +</a>
        </div>
        <!-- <p class="gradient_para"><i class="far fa-chart-bar"></i><span>An interactive dashboard exploring enrolment
            data</span></p> -->
      </div>
      <div class="col-sm-12 col-md-7">
        <img src="./assets/img/hero_isometric.png" class="isometric_img" alt="hero img">
      </div>
    </div>
  </div>

  <div class="container" id="enrolment_model">
    <div class="row">
      <div class="col-md-8 mx-auto driver_section">
        <h3 class="text-center"><span>Key Metrics and Impact</span></h3>
        <img class="green-bar center" style="margin-top:20px; margin-bottom:20px; margin-left: auto; margin-right: auto; display: block;" src="{{URL::to('/')}}/img/green-bar-2.png" alt=""/>
        <p style="font-size:16px">The Ministry of Education District Enrolment Model has been developed based on the Cohort
          Survival Method approach. This method takes into consideration the existing student population and
          calculates
          how many students will leave and enter the system in a given school year. These flows of students are
          grouped
          into
          the four enrolment drivers: Migration, Demographics, Independent-Public Student Transition, and Continuous
          Student Retention. Each of these drivers will be explained in more detail below and apply only to B.C Public
          School students.</p>
      </div>
      <div class="col-sm-12 col-md-8">
        <div id="modelContainer"></div>
      </div>

      <div class="col-sm-12 col-md-4">
        <div id='model_control'>
          <div class="controlSection">
            <h4 id="distName">SD99-Province</h4>
          </div>
          <div class="controlSection">
            <h5>Time Range</h5>
            <div id="model_slider"></div>
          </div>
          <div class="controlSection">
            <h5>School District</h5>
            <div id="model_distDropdown" class="dropDown">
              <span>SD99-Province</span>
              <div class="list"></div>
            </div>
          </div>
          <div class="controlSection">
            <h5>District Reports</h5>
            <a class="ghostBtn reportBtn" href="https://studentsuccess.gov.bc.ca/provincial-results"
              target="_blank">View Reports<i class="fa fa-angle-right ml-3"></i></a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="container" id="demographics">
    <div class="row">
      <div class="col-md-8 mx-auto driver_section">
        <h3 class="text-center"><span>Demographics</span></h3>
        <img class="green-bar center" style="margin-top:20px; margin-bottom:20px; margin-left: auto; margin-right: auto; display: block;" src="{{URL::to('/')}}/img/green-bar-2.png" alt=""/>
        <p style="font-size:16px">The demographics driver provides an indication of whether more kindergarten students are entering B.C.
          public
          schools relative to those leaving the school system through graduation. If the net demographics value is
          positive, it indicates that more five year olds are entering Kindergarten relative to the number of Grade 12
          students that are graduating.
        </p>
      </div>
      <div class="col-sm-12 col-md-8">
        <div id="demo_container"></div>
      </div>
      <div class="col-sm-12 col-md-4">
        <div id="demo_control">
          <div class="controlSection">
            <h5>Demographic Type</h5>
            <div id="demo_radio">
              <div>
                <input type="radio" id="ntk" name="demo-type" value="NEW_KINDERGARTEN" checked>
                <label for="ntk">New to Kindergarten</label>
              </div>
              <div>
                <input type="radio" id="grad" name="demo-type" value="GRADUATES">
                <label for="grad">Graduates</label>
              </div>
              <div>
                <input type="radio" id="net" name="demo-type" value="NET">
                <label for="net">Net Demographics</label>
              </div>
            </div>
          </div>
          <div class="controlSection">
            <h5>School District</h5>
            <button type="button" class="ghostBtn" data-toggle="modal" data-target="#demoModal">Add Districts<i
                class="fa fa-plus ml-3"></i></button>
          </div>
          <div id="demoModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg" role="document" style="top:196px">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Select Districts</h5>
                  <div id="demoModal_msg">(*Please select no more than 8 districts)</div>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                </div>
                <div class="modal-footer">
                  <div id="demo_deselect"><i class="fa fa-times mr-1"></i>Deselect All</div>
                  <button type="button" class="ghostBtn" data-dismiss="modal">Close</button>
                  <button id="demo_save" type="button" class="flatBtn" data-dismiss="modal">Save changes</button>
                </div>
              </div>
            </div>
          </div>

        </div>

        <div id="demo_legend"></div>
      </div>
    </div>
  </div>

  <div class="container" id='migration_overview'>
    <div class="row mb-5">
      <div class="col-sm-12 col-md-4">
        <h3 class="text-center"><span>Student Migration</span></h3>
        <img class="green-bar center" style="margin-top:20px; margin-bottom:20px; margin-left: auto; margin-right: auto; display: block;" src="{{URL::to('/')}}/img/green-bar-2.png" alt=""/>
        <p style="font-size:16px">The migration driver provides a measure of how many students are entering or leaving a district. It is
          further broken down into interprovincial migration, district to district migration, and international
          immigration. District to district migration is a transfer of students within the province, where as
          interprovincial or international migration involves students entering or exiting the Public School System
          external to B.C and external to Canada.
        </p>
        <p style="font-size:16px">The following migration visualizations address District to District Migration. These values represent
          students from all facility types.</p>
      </div>
      <div class="col-sm-12 col-md-8">
        <div id="aniContainer">
          <div id="animationMap">
          </div>
          <div id="ani_control" class="row">
            <div id="play-pause" class="play"></div>
            <div id="ani-slider" class="col-6"></div>
            <div id="ani_year">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="container" id="flow_map">
    <div class="row">
      <div class="col-sm-12 col-md-8">
        <div id="mapContainer">
          <div id="interactiveMap"></div>
        </div>
      </div>

      <div class="col-sm-12 col-md-4">
        <h3 class="text-center"><span>Where Students Go</span></h3>
        <img class="green-bar center" style="margin-top:20px; margin-bottom:20px; margin-left: auto; margin-right: auto; display: block;" src="{{URL::to('/')}}/img/green-bar-2.png" alt=""/>
        <div id='flow_control'>
          <div class="controlSection">
            <h5>School Year</h5>
            <div id="yearDropdown" class="dropDown" tabindex="1">
            <span>2020</span>
              <div class="list">
                <div data-value="2020">2020</div>
                <div data-value="2019">2019</div>
                <div data-value="2018">2018</div>
                <div data-value="2017">2017</div>
                <div data-value="2016">2016</div>
                <div data-value="2015">2015</div>
              </div>
            </div>
          </div>
          <div class="controlSection">
            <h5>School District</h5>
            <div id="distDropdown" class="dropDown" tabindex="1">
              <span>Select a school district</span>
              <div class="list"></div>
            </div>
          </div>
          <div class="controlSection">
            <h5>Migration Flow</h5>
            <div id="flow_type">
              <h6 class="mr-3">Type</h6>
              <button class="flowBtn selected" id="btn_all" value="all">All</button>
              <button class="flowBtn" id="btn_inflow" value="inflow">Inflow</button>
              <button class="flowBtn" id="btn_outflow" value="outflow">Outflow</button>
            </div>
            <div id="flow_switch">
              <h6>Top 5 Flow</h6>
              <input type="checkbox" id="flat_switch" />
              <label for="flat_switch"></label>
            </div>
            <img class="img-fluid" src="./assets/img/flow_legend2.png" alt="flow legend">
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="container" id="transition">
    <div class="row">
      <div class="col-md-8 mx-auto driver_section">
        <h3 class="text-center"><span>Public-Independent Student Transition</span></h3>
        <img class="green-bar center" style="margin-top:20px; margin-bottom:20px; margin-left: auto; margin-right: auto; display: block;" src="{{URL::to('/')}}/img/green-bar-2.png" alt=""/>
        <p style="font-size:16px">The transition driver measures how many students move from the Independent School system to the Public
          School
          system as a net positive inflow, and movement from the Public School system to the Independent School system
          as a net negative outflow.</p>
      </div>
      <div class="col-sm-12 col-md-5">
        <div id="trans_control">
          <h5>School Year</h5>
          <div id="trans_slider">
          </div>
        </div>

        <div id="graph_container">

          <h5 class="col-12 text-center trans_title">Transition Overview (% is of the total enrolment)</h5>
          <div id="school_graph">
            <div>
              <img id="public_school_icon" class="img-fluid" src="./assets/img/public2.png" alt="public school">
              <h6 class="text-center font-weight-bold">Public</h6>
            </div>
            <div id="trans_rate" class="col-3">
              <div id="pub_to_ind" class="text-center"></div>
              <div id="ind_to_pub" class="text-center"></div>
            </div>
            <div>
              <img id="independent_school_icon" class="img-fluid" src="./assets/img/independent2.png"
                alt="independent school">
              <h6 class="text-center font-weight-bold">Independent</h6>
            </div>
          </div>
        </div>
      </div>

      <div class="col-sm-12 col-md-7">
        <div id="trans_control_2">
          <div class="col-7">
            <h5>School District</h5>
            <div id="trans_dist_dropdown" class="dropDown" tabindex="1">
              <span>Top 5 districts</span>
              <div class="list">
              </div>
            </div>
          </div>
          <div class="col-5">
            <h5>Transition Type</h5>
            <div id="trans_type_dropdown" class="dropDown" tabindex="1">
              <span>Public entered</span>
              <div class="list">
                <div data-value="ENTER_PUBLIC">Public entered</div>
                <div data-value="LEAVE_PUBLIC">Public left</div>
                <div data-value="NET_INDEPENDENT">Net change</div>
              </div>
            </div>
          </div>
        </div>
        <div id="transition_container"></div>
      </div>
    </div>
  </div>

  <div class="container" id="retention">
    <div class="row">
      <div class="col-md-8 mx-auto driver_section">
        <h3 class="text-center"><span>Full-time and Part-time Retention</span></h3>
        <img class="green-bar center" style="margin-top:20px; margin-bottom:20px; margin-left: auto; margin-right: auto; display: block;" src="{{URL::to('/')}}/img/green-bar-2.png" alt=""/>
        <p style="font-size:16px">The retention driver provides an indication if students are moving from a full course load to a partial
          course load or vice-versa. It also provides insight into whether students are advancing to the next grade in
          succession or repeating a grade. If <b>net retention is positive</b>, this could mean that there is an
          <em>influx of
            students in the system compared</em> to the previous year, <em>students could be increasing their course
            loads </em> compared
          to the previous year, or <em>students are not advancing grades or graduating as expected</em>. <b>If net
            retention is
            negative</b>, this means that the <em>student population could be declining</em> compared to the previous
          year, <em>students
            could be decreasing their course load</em> compared to the previous year, or <em>students are graduating
            and advancing
            as expected</em>. Comparing a school district's retention rate trend to the provincial retention rate trend
          can help
          highlight changes in policies pertaining to course loads or interesting movements of students throughout the
          public system.</p>
      </div>
      <div class="col-sm-12 col-md-8">
        <div id="retention_control">
          <div class="row">
            <div class="controlSection col-7">
              <h5>School District</h5>
              <div id="retention_distDropdown" class="dropDown" tabindex="1">
                <span>SD05-Southeast Kootenay</span>
                <div class="list"></div>
              </div>
            </div>
          </div>
        </div>

        <div id="retention_container"></div>
      </div>

      <div class="col-sm-12 col-md-4 d-flex flex-wrap align-items-center">
        <img src="./assets/img/retention_img.png" class="isometric_img" alt="retention_dcr">
      </div>

    </div>
  </div>

  <div class="container" id="booklet">
    <div class="row">
      <div class="col-md-8 mx-auto  mb-5 text-center driver_section">
        <h3 class="text-center"><span>BC Provincial Student Enrolment Report</span></h3>
        <img class="green-bar center" style="margin-top:20px; margin-bottom:20px; margin-left: auto; margin-right: auto; display: block;" src="{{URL::to('/')}}/img/green-bar-2.png" alt=""/>
        <h5>For more data at the provincial and district levels. Please view the contextual reports on the student
          success website.</h5>
        <a class="btn btn-primary btn-lg top-button" style="font-weight: lighter;font-size: 15px;padding: 9px 18px;border-radius: 0px;"
          href="https://studentsuccess.gov.bc.ca/school-district/099/report/contextual-information" target="_blank">VIEW
          REPORTS  +</a>
      </div>
    </div>
  </div>
</div>
@endsection
@push('css')
<link href="/css/enrolmentCSS/styles-bootstrap4.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
  integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.min.css" /> @endpush
  @push('scripts') <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
  integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
</script>
<script src="/js/d3_js/d3.v4.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/babel-core/5.6.15/browser-polyfill.min.js"></script>
<script src="/js/d3_js/leaflet.js"></script>
<script src="/js/d3_js/popper.min.js"></script>
<script src="/js/d3_js/enrolment_model.js"></script>
<script src="/js/d3_js/demographics.js"></script>
<script src="/js/d3_js/migration_interactive_map.js"></script>
<script src="/js/d3_js/migration_overview.js"></script>
<script src="/js/d3_js/retention.js"></script>
<script src="/js/d3_js/transition.js"></script>
<script src="/js/d3_js/mobile_menu.js"></script>
@endpush