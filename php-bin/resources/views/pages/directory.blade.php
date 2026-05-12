@extends('layout')

{{-- Set page title. --}}
@section('subtitle'){{ trans('esdr2.district_directory_heading') }}@endsection

@push('css')
<link href="/css/directory.css" rel="stylesheet" type="text/css">
@endpush

@section('content')

<div class="bg-light border-bottom mb-4" style="padding-top: 2rem; padding-bottom: 2rem; margin-bottom: 1rem;">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6">
                <h2 id="directory-main-heading" class="text-navy fw-bold mb-0 slide-title">
                    {{ trans('esdr2.district_directory_heading') }}
                </h2>
            </div>
            {{-- <div class="col-md-6 mt-3 mt-md-0 text-md-end">
                <span id="directory-sort-wrapper" class="text-navy fw-semibold">
                    <span class="me-2">{{ trans('esdr2.sort_by_lable') }}:</span>
                    <a class="btn btn-outline-primary btn-sm me-1 {{ request('sortBy') == 'name' || !request('sortBy') ? 'active bg-navy text-white' : '' }}" href="?sortBy=name">{{ trans('esdr2.name_lable') }}</a>
                    <a class="btn btn-outline-primary btn-sm {{ request('sortBy') == 'number' ? 'active bg-navy text-white' : '' }}" href="?sortBy=number">{{ trans('esdr2.number_lable') }}</a>
                </span>
            </div> --}}
        </div>
    </div>
</div>

<section class="container mb-5">
    <div class="row">
        <div class="col-12">

        <div class="directory-wrapper">

            <?php

          // Check if this is a "school districts" directory page.
          if (isset($school_districts)) {

            // Check if we are sorting by School District number.
            if (request('sortBy') == 'number') {

              print '<div class="row g-4">';
              foreach($school_districts as $school_district) {
                print '<div class="col-md-6 col-lg-4 directory-numeric-section">';
                print '<div class="card h-100 shadow-sm border-0 directory-card">';
                print '<div class="card-body d-flex flex-column">';
                print '<h5 class="card-title fw-bold mb-1"><a href="/school-district/'.$school_district->sd.'" class="text-decoration-none text-navy hover-primary">'.trans('esdr2.sd_heading').' '.$school_district->sd.'</a></h5>';
                print '<h6 class="card-subtitle text-muted mb-3">'.$school_district->district_name.'</h6>';
                print '<div class="mt-auto">';
                print '<a class="btn btn-outline-primary border-navy text-navy w-100 view-report hover-primary" href="/school-district/'.$school_district->sd.'">'.trans('esdr2.view_report_lable').' '.Helper::formatCityForHuman($school_district->district_name).' <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>';
                print '</div></div></div></div>';
              }
              print '</div>';

            } else {

              // Determine which letters we have, and which letters we don't have.
              $letters = array();
              foreach ($school_districts as $school_district) {
                if (!in_array($school_district->district_name[0], $letters)) {
                  array_push($letters, $school_district->district_name[0]);
                }
              }

              // Push each school district to a keyed array of letters.
              $alpha_school_districts = array();
              print '<ul class="nav nav-pills directory-nav-pills directory-letter-nav justify-content-center mb-5">';
              foreach ($letters as $letter) {

                // And print our anchor links.
                print '<li class="nav-item"><a class="nav-link text-navy fw-bold" href="#'.$letter.'">'.$letter.'</a></li>';

                foreach ($school_districts as $school_district) {
                  if ($school_district->district_name[0] == $letter) {

                    $alpha_school_districts[$letter][] = array(
                      'district_name' => $school_district->district_name,
                      'sd' => $school_district->sd
                    );

                  }
                }

              }
              print '</ul>';

              // Provincial Results Section
              print '<div class="row mb-5">';
              print '<div class="col-12 directory-letter-section">';
              print '<div class="card bg-light provincial-card shadow-sm directory-card">';
              print '<div class="card-header bg-navy text-white fw-bold fs-5"><i class="fa fa-globe me-2" aria-hidden="true"></i>'.trans('esdr2.prov_results_label').'</div>';
              print '<div class="card-body">';
              print '<div class="d-flex flex-column flex-md-row justify-content-between align-items-md-center">';
              print '<a href="/school-district/099" class="text-decoration-none fw-bold fs-5 text-dark mb-3 mb-md-0 hover-primary">'.trans('esdr2.prov_school_district_label').'</a>';
              print '<a class="btn btn-outline-primary border-navy text-navy view-report hover-primary" href="/school-district/099">'.trans('esdr2.view_report_lable').' '.trans('esdr2.entire_province_label').' <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>';
              print '</div></div></div></div></div>';

              // Print out each letter and its respective school districts.
              print '<div class="row g-4">';
              foreach ($alpha_school_districts as $letter => $value) {

                print '<div class="col-md-6 col-lg-4 directory-letter-section" id="'.$letter.'">';
                print '<div class="card h-100 shadow-sm border-0 directory-card">';
                print '<div class="card-header bg-white border-bottom-0 fw-bold fs-2 text-navy">';
                if ($letter == '1') {
                  print '#';
                } else {
                  print $letter;
                }
                print '</div>';
                print '<ul class="list-group list-group-flush">';

                foreach ($value as $key => $values) {
                  print '<li class="list-group-item py-3">';
                  print '<div class="d-flex justify-content-between align-items-center mb-2">';
                  print '<a href="/school-district/'.$values['sd'].'" class="text-decoration-none fw-bold fs-6 text-dark hover-primary">'.Helper::formatCityForHuman($values['district_name']).'</a>';
                  print '<span class="badge bg-light text-secondary border">'.Helper::removeLeadingZeros($values['sd']).'</span>';
                  print '</div>';
                  print '<a class="btn btn-sm btn-outline-secondary w-100 view-report" href="/school-district/'.$values['sd'].'">'.trans('esdr2.view_report_lable').' '.Helper::formatCityForHuman($values['district_name']).' <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>';
                  print '</li>';
                }

                print '</ul></div></div>';

              }
              print '</div>'; // End row

            } // If request is not sorted by School District number.

          } //////////////////////////// END if school districts directory page.

        ?>

        </div><!-- /END ".directory-wrapper" -->

        </div>
    </div>
</section>

@endsection