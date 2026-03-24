@extends('layout')
@section('subtitle'){{ date('Y') }}@endsection

@section('content')
@include('components/hero')
@include('components/main-search')
@include('components/about-this-website')

@endsection

@push('css')
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
