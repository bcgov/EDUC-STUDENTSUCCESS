@extends('layout')
@section('subtitle'){{ $school->school_name }} {{ trans('esdr2.school_reports_label') }}@endsection

@section('content')

  @include('components.school-meta')

  <section class="aqua-bg py-4 border-bottom">
    <div class="container">
      <div class="d-flex justify-content-center justify-content-md-end">
        @if (!$school->independent)
          <a class="btn btn-light btn-lg px-4 shadow-sm fw-bold text-primary border" href="/school-district/{{ $school->sd }}">
            {{ trans('esdr2.about_sd_label') }} {{ Helper::removeLeadingZeros($school->sd) }}
          </a>
        @endif
      </div>
    </div>
  </section>

  <section class="bg-light">
    @include('components.school-charts-menu')
  </section>

@endsection
