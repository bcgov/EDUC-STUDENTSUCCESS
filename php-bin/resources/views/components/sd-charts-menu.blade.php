<!-- Section 1: School District Information -->
<div class="row align-items-center reports-row-container mb-5">
  <div class="col-lg-3 col-md-4 mb-4 mb-md-0 z-1">
    <h4 class="text-navy fw-bold underline-green d-inline-block lh-base mb-0">School District<br>Information</h4>
  </div>
  
  <div class="col-lg-9 col-md-8 position-relative">
    <div class="connecting-line-graphic d-none d-md-block"></div>
    
    <div class="row g-4 px-md-3 z-1">
        <div class="col-6 col-md-4">
          <a href="/school-district/{{ $school_district->sd }}/report/contextual-information" class="text-decoration-none">
            <div class="report-card navy-bg text-white p-3 p-xl-4 d-flex flex-column justify-content-center align-items-center shadow">
              <div class="report-icon mb-3">
                  <img src="/img/icon-characteristics-of-students.png" onerror="this.src='/img/charts/icon-demographic-information.jpg';" alt="Demographic Information" class="img-fluid" style="height: 50px; width: auto;">
              </div>
              <h6 class="fw-bold mb-0 text-center lh-sm text-white fs-6" style="min-height: 2.4rem;">Demographic<br>Information</h6>
            </div>
          </a>
        </div>
        
        <div class="col-6 col-md-4">
          <a href="/governance/{{ $school_district->sd }}" class="text-decoration-none">
            <div class="report-card light-blue-bg text-white p-3 p-xl-4 d-flex flex-column justify-content-center align-items-center shadow">
              <div class="report-icon mb-3">
                  <img src="/img/icon-governance-information.png" alt="Key Contacts" class="img-fluid" style="height: 50px; width: auto;">
              </div>
              <h6 class="fw-bold mb-0 text-center lh-sm text-white fs-6" style="min-height: 2.4rem;">Key<br>Contacts</h6>
            </div>
          </a>
        </div>
        
        <div class="col-6 col-md-4">
          <a href="/finance/{{ $school_district->sd }}" class="text-decoration-none">
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

<!-- Section 2: Intellectual Development -->
<div class="row align-items-center reports-row-container mb-5">
  <div class="col-lg-3 col-md-4 mb-4 mb-md-0 z-1">
    <h4 class="text-navy fw-bold underline-green d-inline-block lh-base mb-0">Intellectual<br>Development</h4>
  </div>
  
  <div class="col-lg-9 col-md-8 position-relative">
    <div class="connecting-line-graphic d-none d-md-block"></div>
    
    <div class="row g-4 px-md-3 z-1">
        <div class="col-6 col-md-3">
          <a href="/school-district/{{ $school_district->sd }}/report/completion-rates" class="text-decoration-none">
            <div class="report-card light-blue-bg text-white p-2 p-xl-3 d-flex flex-column justify-content-center align-items-center shadow">
              <div class="report-icon mb-3">
                  <img src="/img/icon-completion-rate.png" onerror="this.src='/img/charts/icon-completion-rate.jpg';" class="img-fluid" style="height: 40px; width: auto;">
              </div>
              <h6 class="fw-bold mb-0 text-center lh-sm text-white" style="min-height: 2.4rem; font-size: 0.85rem !important;">Completion<br>Rate</h6>
            </div>
          </a>
        </div>
        
        <div class="col-6 col-md-3">
          <a href="/school-district/{{ $school_district->sd }}/report/fsa" class="text-decoration-none">
            <div class="report-card navy-bg text-white p-2 p-xl-3 d-flex flex-column justify-content-center align-items-center shadow">
              <div class="report-icon mb-3">
                  <img src="/img/icons-foundation-skills-assessment.png" onerror="this.src='/img/charts/icon-foundation-skills-assessment.jpg';" class="img-fluid" style="height: 40px; width: auto;">
              </div>
              <h6 class="fw-bold mb-0 text-center lh-sm text-white" style="min-height: 2.4rem; font-size: 0.85rem !important;">Foundation Skills<br>Assessment</h6>
            </div>
          </a>
        </div>
        
        <div class="col-6 col-md-3">
          <a href="/school-district/{{ $school_district->sd }}/report/grade-to-grade-transitions" class="text-decoration-none">
            <div class="report-card light-blue-bg text-white p-2 p-xl-3 d-flex flex-column justify-content-center align-items-center shadow">
              <div class="report-icon mb-3">
                  <img src="/img/icon-grade-to-grade.png" onerror="this.src='/img/charts/icon-grade-to-grade-transitions.jpg';" class="img-fluid" style="height: 40px; width: auto;">
              </div>
              <h6 class="fw-bold mb-0 text-center lh-sm text-white" style="min-height: 2.4rem; font-size: 0.85rem !important;">Grade-to-Grade<br>Transitions</h6>
            </div>
          </a>
        </div>
        
        <div class="col-6 col-md-3">
          <a href="/school-district/{{ $school_district->sd }}/report/grad-assess" class="text-decoration-none">
            <div class="report-card navy-bg text-white p-2 p-xl-3 d-flex flex-column justify-content-center align-items-center shadow">
              <div class="report-icon mb-3">
                  <img src="/img/icon-provincial-examinations.png" onerror="this.src='/img/charts/icon-provincial-examinations.jpg';" class="img-fluid" style="height: 40px; width: auto;">
              </div>
              <h6 class="fw-bold mb-0 text-center lh-sm text-white" style="min-height: 2.4rem; font-size: 0.85rem !important;">Graduation<br>Assessments</h6>
            </div>
          </a>
        </div>
    </div>
  </div>
</div>

<!-- Section 3: Human and Social Development -->
<div class="row align-items-center reports-row-container mb-5">
  <div class="col-lg-3 col-md-4 mb-4 mb-md-0 z-1">
    <h4 class="text-navy fw-bold underline-green d-inline-block lh-base mb-0">Human and Social<br>Development</h4>
  </div>
  
  <div class="col-lg-9 col-md-8 position-relative">
    <div class="connecting-line-graphic d-none d-md-block"></div>
    
    <div class="row g-4 px-md-3 z-1">
        <div class="col-6 col-md-4">
          <a href="/school-district/{{ $school_district->sd }}/report/students-entering-school" class="text-decoration-none">
            <div class="report-card navy-bg text-white p-3 p-xl-4 d-flex flex-column justify-content-center align-items-center shadow">
              <div class="report-icon mb-3">
                  <img src="/img/icon-characteristics-of-students.png" onerror="this.src='/img/charts/icon-characteristicsistudents-entering-school.jpg';" class="img-fluid" style="height: 50px; width: auto;">
              </div>
              <h6 class="fw-bold mb-0 text-center lh-sm text-white" style="min-height: 2.4rem; font-size: 0.9rem !important;">Characteristics of<br>Students Entering<br>School</h6>
            </div>
          </a>
        </div>
        
        <div class="col-6 col-md-4">
          <a href="/school-district/{{ $school_district->sd }}/report/student-satisfaction" class="text-decoration-none">
            <div class="report-card light-blue-bg text-white p-3 p-xl-4 d-flex flex-column justify-content-center align-items-center shadow">
              <div class="report-icon mb-3">
                  <img src="/img/icons-satisfaction-survey.png" onerror="this.src='/img/charts/icon-student-satisfaction.jpg';" class="img-fluid" style="height: 50px; width: auto;">
              </div>
              <h6 class="fw-bold mb-0 text-center lh-sm text-white" style="min-height: 2.4rem; font-size: 0.9rem !important;">Student Learning<br>Survey</h6>
            </div>
          </a>
        </div>
    </div>
  </div>
</div>

<!-- Section 4: Career Development -->
<div class="row align-items-center reports-row-container mb-5">
  <div class="col-lg-3 col-md-4 mb-4 mb-md-0 z-1">
    <h4 class="text-navy fw-bold underline-green d-inline-block lh-base mb-0">Career<br>Development</h4>
  </div>
  
  <div class="col-lg-9 col-md-8 position-relative">
    <div class="connecting-line-graphic d-none d-md-block"></div>
    
    <div class="row g-4 px-md-3 z-1">
        @if ($school_district->sd != '075')
        <div class="col-6 col-md-4">
          <a href="/school-district/{{ $school_district->sd }}/report/post-secondary-career-prep" class="text-decoration-none">
            <div class="report-card navy-bg text-white p-3 p-xl-4 d-flex flex-column justify-content-center align-items-center shadow">
              <div class="report-icon mb-3">
                  <img src="/img/icons-post-secondary.png" onerror="this.src='/img/charts/icon-post-secondary-career-prep.jpg';" class="img-fluid" style="height: 50px; width: auto;">
              </div>
              <h6 class="fw-bold mb-0 text-center lh-sm text-white" style="min-height: 2.4rem; font-size: 0.9rem !important;">Post-Secondary<br>and Career Prep</h6>
            </div>
          </a>
        </div>
        @endif
        
        <div class="col-6 col-md-4">
          <a href="/school-district/{{ $school_district->sd }}/report/transition-to-post-secondary" class="text-decoration-none">
            <div class="report-card light-blue-bg text-white p-3 p-xl-4 d-flex flex-column justify-content-center align-items-center shadow">
              <div class="report-icon mb-3">
                  <img src="/img/icon-transition-post-secondary.png" onerror="this.src='/img/charts/icon-transition-bc-post-secondary.jpg';" class="img-fluid" style="height: 50px; width: auto;">
              </div>
              <h6 class="fw-bold mb-0 text-center lh-sm text-white" style="min-height: 2.4rem; font-size: 0.9rem !important;">Transition to B.C.<br>Post-Secondary</h6>
            </div>
          </a>
        </div>
    </div>
  </div>
</div>

<!-- Section 5: Particular Reports -->
<div class="row align-items-center reports-row-container mb-5">
  <div class="col-lg-3 col-md-4 mb-4 mb-md-0 z-1">
    <h4 class="text-navy fw-bold underline-green d-inline-block lh-base mb-0">{{ trans('esdr2.particular_reports_heading1') }}</h4>
  </div>
  
  <div class="col-lg-9 col-md-8 position-relative">
    <div class="connecting-line-graphic d-none d-md-block"></div>
    
    <div class="row g-4 px-md-3 z-1">
        <div class="col-6 col-md-4">
          @if ($school_district->sd != '099')
          <a id="ahawd-download-report-link" data-sd="{{ $school_district->sd }}" href="https://www2.gov.bc.ca/assets/gov/education/administration/kindergarten-to-grade-12/reports/ab-hawd/ab-hawd-school-district-{{ $school_district->sd }}.pdf" target="_blank" class="text-decoration-none">
          @else
          <a id="ahawd-download-report-link" data-sd="{{ $school_district->sd }}" href="https://www2.gov.bc.ca/assets/gov/education/administration/kindergarten-to-grade-12/reports/ab-hawd/ab-hawd-school-district-public.pdf" target="_blank" class="text-decoration-none">
          @endif
            <div class="report-card navy-bg text-white p-3 p-xl-4 d-flex flex-column justify-content-center align-items-center shadow">
              <div class="report-icon mb-3">
                  <img src="/img/charts/ahawd.png" onerror="this.src='/img/charts/HowWeDoingIcon.png';" class="img-fluid" style="height: 50px; width: auto;">
              </div>
              <h6 class="fw-bold mb-0 text-center lh-sm text-white" style="min-height: 2.4rem; font-size: 0.9rem !important;">Aboriginal Students:<br>How Are We Doing?</h6>
            </div>
          </a>
          <div class="text-center mt-2">
            @if ($school_district->sd != '099')
            <a href="https://www2.gov.bc.ca/assets/gov/education/administration/kindergarten-to-grade-12/reports/ab-hawd/ab-hawd-school-district-{{ $school_district->sd }}.xlsx" target="_blank" class="fw-bold text-navy" style="font-size:0.85rem;">Download XLSX</a>
            @else
            <a href="https://www2.gov.bc.ca/assets/download/CFC6AF49B7B04849B6164FF022A157D4" target="_blank" class="fw-bold text-navy" style="font-size:0.85rem;">Download XLSX</a>
            @endif
          </div>
        </div>
        
        @if ($school_district->sd == '099')
        <div class="col-6 col-md-4">
          <a id="ahawd-download-report-link" data-sd="{{ $school_district->sd }}" href="/assets/reports/cyic_hawd.pdf" target="_blank" class="text-decoration-none">
            <div class="report-card light-blue-bg text-white p-3 p-xl-4 d-flex flex-column justify-content-center align-items-center shadow">
              <div class="report-icon mb-3">
                  <img src="/img/charts/cyic-report-page-thumb.png" class="img-fluid" style="height: 50px; width: auto;">
              </div>
              <h6 class="fw-bold mb-0 text-center lh-sm text-white" style="min-height: 2.4rem; font-size: 0.9rem !important;">Children & Youth In Care:<br>How Are We Doing?</h6>
            </div>
          </a>
        </div>
        @endif
    </div>
  </div>
</div>