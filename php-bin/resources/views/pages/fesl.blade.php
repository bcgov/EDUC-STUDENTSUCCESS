@extends('layout')

@section('subtitle')
@section('content')

@push('css')
  <link rel="stylesheet" href="/css/fesl.css">
@endpush

<div class="fesl-banner text-center text-md-start">
    <div class="container restrain position-relative">
        <h1 class="display-6">Continuous Improvement Programs<br>for Enhancing Student Learning</h1>
        <div class="fesl-graphic-placeholder d-none d-md-flex"></div>
    </div>
</div>

<div class="container restrain py-5">
     @include('components.fesl.topics-to-explore')
</div>
@endsection
