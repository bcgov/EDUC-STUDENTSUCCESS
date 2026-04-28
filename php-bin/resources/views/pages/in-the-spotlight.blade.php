@extends('layout')
@section('subtitle'){{ date('Y') }}@endsection

@section('content')
    @include('components.in-the-spotlight.in-the-spotlight-banner')
    @include('components.in-the-spotlight.data-spotlight-carousal')
    @include('components.in-the-spotlight.data-spotlight-news-update')
    @include('components.in-the-spotlight.analytics-and-insights')
    @include('components.in-the-spotlight.cool-new-stuff')
    @include('components.in-the-spotlight.what-you-like')
@endsection