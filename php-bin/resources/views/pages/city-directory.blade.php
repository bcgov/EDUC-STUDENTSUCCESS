@extends('layout')

{{-- Set page title. --}}
@section('subtitle'){{ trans('esdr2.city_directory_heading') }}@endsection

@push('css')
<link href="/css/directory.css" rel="stylesheet" type="text/css">
@endpush

@section('content')

<div class="bg-light border-bottom mb-4" style="padding-top: 2rem; padding-bottom: 2rem;">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12">
                <h2 id="directory-main-heading" class="text-navy fw-bold mb-0 slide-title">{{ trans('esdr2.city_directory_heading') }}</h2>
            </div>
        </div>
    </div>
</div>

<section class="container mb-5">
    <div class="row">
        <div class="col-12">

        <?php

          if (isset($cities)) {
            // print_r($cities);
            print '<div class="alpha_listing">';

            $letters = array();
            foreach ($cities as $city) {
              if (!in_array($city->phy_city[0], $letters)) {
                array_push($letters, $city->phy_city[0]);
              }
            }

            $alpha_schools = array();
            print '<ul class="nav nav-pills directory-nav-pills directory-letter-nav justify-content-center mb-4">';
            foreach ($letters as $letter) {

              if ($letter == '1') {
                print '<li class="nav-item"><a class="nav-link text-navy fw-bold" href="#1">&#35;</a></li>';
              } else {
                print '<li class="nav-item"><a class="nav-link text-navy fw-bold" href="#'.$letter.'">'.$letter.'</a></li>';
              }

              foreach ($cities as $city) {
                if ($city->phy_city[0] == $letter) {

                  $alpha_schools[$letter][] = array(
                    'city' => $city->phy_city,
                    'totalschools' => $city->totalschools
                  );

                }
              }

            }
            print '</ul>';
            $sd_html = '<div class="row g-4">';
            foreach ($alpha_schools as $letter => $value) {

              $sd_html .= '<div class="col-md-6 col-lg-4 directory-letter-section" id="'.$letter.'">';
              $sd_html .= '<div class="card h-100 shadow-sm border-0 directory-card">';
              $sd_html .= '<div class="card-header bg-navy text-white fw-bold fs-4">';
              if ($letter == '1') {
                $sd_html .= '&#35;';
              } else {
                $sd_html .= $letter;
              }
              $sd_html .= '</div>';
              $sd_html .= '<ul class="list-group list-group-flush">';

              foreach ($value as $key => $values) {
                // Sanitize the city string so str_slug and formatCityForHuman don't crash on malformed characters
                $cityStr = isset($values['city']) ? (string) $values['city'] : '';
                
                // Use Laravel's Str facade to prevent undefined function errors, with a fallback
                try {
                    $slug = \Illuminate\Support\Str::slug($cityStr, '-');
                } catch (\Exception $e) {
                    $slug = preg_replace('/[^A-Za-z0-9\-]/', '', str_replace(' ', '-', strtolower($cityStr)));
                }

                $humanCity = \App\Helpers\Helper::formatCityForHuman($cityStr);

                $sd_html .= '<li class="list-group-item d-flex justify-content-between align-items-center">';
                $sd_html .= '<a href="/schools/in/'.$slug.'" class="text-decoration-none text-dark fw-semibold hover-primary">'.$humanCity.'</a>';
                $label = $values['totalschools'] > 1 ? trans('esdr2.school_plural_label') : trans('esdr2.school_singular_label');
                $sd_html .= '<span class="badge badge-navy rounded-pill" title="'.$values['totalschools'].' '.$label.'">'.$values['totalschools'].'</span>';
                
                $sd_html .= '</li>';
              }

              $sd_html .= '</ul></div></div>';

            }

            print $sd_html;
            print '</div><!-- /.row --></div><!-- /.alpha_listing -->';

          } 

        ?>

        </div>
    </div>
</section>

@endsection
