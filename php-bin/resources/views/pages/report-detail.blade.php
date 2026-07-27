@extends('layout') @section('content')
<div class="container py-5">
    <nav aria-label="breadcrumb" class="mb-4">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Available Reports</a></li>
            <li class="breadcrumb-item active" aria-current="page">{{ ucwords($reportTitle) }}</li>
        </ol>
    </nav>
    <div class="row mb-4">
        <div class="col-12">
            <h1 class="reports-heading text-teal fw-bold">{{ ucwords($reportTitle) }}</h1>
            <hr>
            @if($embedUrl)
                <iframe title="{{ ucwords($reportTitle) }}"
                        style="width: 100%; height: auto; aspect-ratio: 16 / 9; border: none;"
                        src="{{ $embedUrl }}"
                        frameborder="0"
                        allowFullScreen="true"></iframe>
            @else
                <p>No report available yet.</p>
            @endif
        </div>
    </div>
</div>
@endsection