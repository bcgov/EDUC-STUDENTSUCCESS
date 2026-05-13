@extends('layout')
@section('subtitle'){{ date('Y') }}@endsection

@section('content')
@include('components/hero')

<div class="delayed-components">
  @include('components/main-search')
  @include('components.intro-text')
  @include('components/about-this-website')
  @include('components.available-reports')
  @include('components.spotlight')
  @include('components.learn-more')
</div>

@endsection

@push('css')
  <style>
    .delayed-components {
      opacity: 0;
      visibility: hidden;
      animation: fadeInAnimation 0.5s ease-in forwards;
      animation-delay: 1s;
    }
    @keyframes fadeInAnimation {
      0% { opacity: 0; visibility: hidden; }
      1% { visibility: visible; }
      100% { opacity: 1; visibility: visible; }
    }
  </style>
  <link href="/css/easy-autocomplete.min.css" rel="stylesheet" type="text/css">
@endpush

@push('scripts')
  <script src="/js/jquery.easy-autocomplete.min.js"></script>
  <script src="/js/vega/promise.min.js"></script>
  <script src="/js/vega/symbol.min.js"></script>
  <script src="/js/vega/fetch.min.js"></script>
  <!--<script src="/js/vega/vega.min.js"></script>
  <script src="/js/vega/vega5.js"></script> -->
	<script src="/js/front.js{{ !App::environment('production', 'staging') ? '?cache_bust='.rand() : '' }}"></script>
@endpush
