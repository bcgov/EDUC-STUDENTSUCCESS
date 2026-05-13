@extends('layout')
@section('subtitle'){{ trans('esdr2.glossary_heading') }}@endsection

@push('css')
  <link href="/css/glossary.css" rel="stylesheet" type="text/css">
@endpush

@section('content')

  <div class="aqua-bg directory-masthead py-5">
    <div class="container">
      <h2 id="directory-main-heading" class="ministry-blue mb-0">{{ trans('esdr2.glossary_heading_long') }}</h2>
    </div>
  </div>

  <section class="py-5 bg-light">
    <div class="container" id="glossary">

      <div class="row justify-content-center mb-4">
        <div class="col-12 text-center">
          <ul class="directory_alpha_menu d-flex flex-wrap justify-content-center m-0 p-0">
            @foreach ($glossary_entries as $glossary_letter => $glossary_item)
              @if ($glossary_letter == '#')
                <li class="letter-selection"><a href="#1">{{ $glossary_letter }}</a></li>
              @else
                <li class="letter-selection"><a href="#{{ $glossary_letter }}">{{ $glossary_letter }}</a></li>
              @endif
            @endforeach
          </ul>
        </div>
      </div>

      <div class="row justify-content-center mb-5">
        <div class="col-md-8 col-lg-6">
          <div class="glossary-search-wrapper input-group shadow-sm position-relative">
            <input type="text" class="form-control form-control-lg border-0 rounded" placeholder="{{ trans('esdr2.search_glossary_lable') }}" id="glossarySearch">
            <span class="clear-search position-absolute" style="right: 15px; top: 50%; transform: translateY(-50%); cursor: pointer; z-index: 10;" aria-hidden="true" id="clear-search" title="{{ trans('esdr2.clear_search_label') }}">&times;</span>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-12">
          <ul class="glossary directory-wrapper list-unstyled">
            @foreach ($glossary_entries as $glossary_letter => $glossary_item)
              @if ($glossary_letter == '#')
                <li id="1" class="directory-letter-section">
              @else
                <li id="{{ $glossary_letter }}" class="directory-letter-section">
              @endif
                <span class="directory letter border-bottom border-primary border-3 d-block pb-2 mb-3 fs-2 fw-bold text-dark">{{ $glossary_letter }}</span>

                <ul class="row list-unstyled m-0">
                  @foreach ($glossary_item as $glossary_entry)
                    <li id="{{ $glossary_entry['gid'] }}" class="col-12 bg-white p-4 mb-4 rounded shadow-sm border">
                      <div class="d-flex align-items-center mb-3">
                        <h3 class="glossary-title mb-0 fs-4 text-primary fw-semibold">{{ $glossary_entry['title'] }}</h3>
                        <a title="{{ trans('esdr2.permalink_for') }} {{ $glossary_entry['title'] }}" href="#{{ $glossary_entry['gid'] }}" class="fa fa-link glossary-permalink ms-2 text-decoration-none" style="opacity: 0.5;"></a>
                      </div>
                      <div class="glossary-definition" style="line-height: 1.6;">{!! $glossary_entry['definition'] !!}</div>
                    </li>
                  @endforeach
                </ul>

              </li>
            @endforeach
          </ul>
        </div>
      </div>

    </div>
  </section>

@endsection

@push('scripts')

  <script>

    $(document).ready(function() {

      function resetGlossary() {
        $('.directory-letter-section, .directory-letter-section ul li').show();
      }

      // Click handler for the "clear" button.
      $('#clear-search').click(function() {
        $('#glossarySearch').val('');
        resetGlossary();
      });

      var searchForGlossaryTerms = debounce(function() {

        if ($('#glossarySearch').val() != '') {

          // Check if all the items are already hidden
          var allHidden = true;
          $('ul.glossary.directory-wrapper li.directory-letter-section').each(function() {

            if($(this).is(':visible')) {
              allHidden = false;
              return false;
            }

          });

          // If all items are hidden, reset the glossary and search again on the next keystroke
          if (allHidden) {
            resetGlossary();
          }
        
          var thisVal = $(this).val().toLowerCase();

          $('.glossary-title').each(function() {

            var searchTerm = $(this).text().toLowerCase();

            if (searchTerm.indexOf(thisVal) !== -1) {
              $(this).closest('li').show();
            } else {
              $(this).closest('li').hide();
            }

          });

          $('.directory-letter-section ul').each(function() {

            var hasSomethingToSay = false;
            
            $(this).children('li').each(function() {
              if($(this).is(':visible')) {
                hasSomethingToSay = true;
                // https://forum.jquery.com/topic/breaking-the-each-loop
                return false;
              }
            });

            if (hasSomethingToSay) {
              $(this).parent().show();
            } else {
              $(this).parent().hide();
            }

          });

        } else { 

          // Glossary search value is empty.
          resetGlossary();

        }
        
      }, 250); // END debounce() definition

      // Call debounce'd function on keyup
      $('#glossarySearch').on('keyup', searchForGlossaryTerms); // input change 

    }); // doc ready

  </script>

@endpush
