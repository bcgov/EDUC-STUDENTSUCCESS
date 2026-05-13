@push('css')
  <link href="/css/school-meta.css" rel="stylesheet" type="text/css">
@endpush

<section class="slide blue-bg school-meta-section py-5" style="@if(isset($report_slug)) min-height: 27rem;@endif">
    <div class="container">
        <div class="row align-items-center">

            <div class="col-lg-8 order-2 order-lg-1">
                <div class="mb-3">
                    <span class="badge bg-light text-dark px-3 py-2 shadow-sm rounded-pill border">
                        @if ($school->independent)
                        {{ trans('esdr2.inidi_school_lable') }}
                        @else
                        {{ trans('esdr2.public_school_lable') }}
                        @endif
                    </span>
                </div>

                <h2 class="ministry-blue fw-bold display-5 mb-4">{{ Helper::fixEcole($school->school_name) }}</h2>

                @if (isset($report_slug))
                    @include('components.report-meta-descriptions')
                @else
                    <ul class="list-unstyled school-meta-list mb-0">
                        @if ($school->phy_address_line_1)
                        <li><strong>{{ trans('esdr2.school_address_lable') }}:</strong> <a target="_blank" href="https://www.google.ca/maps/place/{{ str_replace(' ', '+', $school->present()->formatSchoolAddress) }}" class="text-decoration-underline">{{ $school->present()->formatSchoolAddress }}</a></li>
                        @endif

                        @if ($school->phone_number)
                        <li><strong>{{ trans('esdr2.phone_contact_label') }}:</strong> <a title="{{ trans('esdr2.telephone_school') }} {{ $school->school_name }} {{ trans('esdr2.sd_heading') }}" href="tel:{{ $school->present()->concatPhoneNumber }}" class="text-decoration-underline">{{ substr_replace(substr_replace($school->phone_number, ' ', 3, 0), '-', -4, 0) }}</a>
                            @if ($school->phone_number_extension)
                            ext. {{ $school->phone_number_extension }}
                            @endif
                        </li>
                        @endif

                        @if ($school->website)
                        <li><strong>{{ trans('esdr2.website_contact_label') }}:</strong> <a href="{{ $school->website }}" target="_blank" class="text-decoration-underline">{{ $school->present()->humanReadableWebsite }}</a></li>
                        @endif

                        @if ($school->email_address)
                        <li><strong>{{ trans('esdr2.email_contact_label') }}:</strong> <a title="{{ trans('esdr2.email_contact_label') }} {{ $school->school_name }} {{ trans('esdr2.sd_heading') }}." href="mailto:{{ $school->email_address }}?subject={{ trans('esdr2.email_subject') }}@if($school->principal_title)&body=Dear {{ $school->principal_title }}. {{ $school->principal_name }},@endif" class="text-decoration-underline">{{ $school->email_address }}</a></li>
                        @endif

                        @if ($school->principal_name && $school->principal_title)
                        <li><strong>{{ trans('esdr2.principal_lable') }}:</strong> {{ $school->principal_title }} {{ $school->principal_name }}</li>
                        @endif

                        @if ($district_name && $school->sd)
                        <li><strong>{{ trans('esdr2.sd_heading') }}:</strong> {{ $district_name }} ({{ Helper::removeLeadingZeros($school->sd) }})</li>
                        @endif

                        @if ($mincode && Helper::formatSchoolGradeRangeStr($mincode) != '')
                        <li><strong>{{ trans('esdr2.grade_level_label') }}:</strong> {{ Helper::formatSchoolGradeRangeStr($mincode) }}</li>
                        @endif

                        <li><strong>{{ trans('esdr2.mincode_label') }}:</strong> {{ $mincode }}</li>
                    </ul>
                @endif
            </div>

            @if (!$school->independent)
            <div class="col-lg-4 order-1 order-lg-2 mb-4 mb-lg-0 text-center text-lg-end">
                <img src="/img/maps/map_sd_{{ $school->sd }}.png" alt="{{ trans('esdr2.map_graphic_alt') }} {{ $school->sd }}." class="img-fluid rounded key-image-map">
            </div>
            @endif

        </div>
    </div>
</section>