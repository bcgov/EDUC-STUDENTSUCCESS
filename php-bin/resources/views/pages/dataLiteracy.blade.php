@extends('layout')
@section('subtitle'){{ date('Y') }}@endsection

@section('content')
    @include('components.data-literacy.data-lit-banner')
    @include('components.data-literacy.using-student-data')
    @include('components.data-literacy.data-impacts')
    @include('components.data-literacy.our-partners')
    @include('components.data-literacy.data-lit-spotlight')
    @include('components.data-literacy.continue-conversation')
@endsection