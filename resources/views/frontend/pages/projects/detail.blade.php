{{-- resources/views/frontend/pages/projects/detail.blade.php --}}
@extends('frontend.layouts.app')

@section('title', $project['title'] . ' - Online Finance Manager')

@section('content')
    <!-- page-title -->
    <section class="page-title">
        <div class="bg-layer" style="background-image: url({{ asset('assets/images/background/page-title.jpg') }});"></div>
        <div class="auto-container">
            <div class="content-box">
                <h1>Project Details</h1>
                <ul class="bread-crumb clearfix">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li><a href="{{ route('projects') }}">Projects</a></li>
                    <li>{{ $project['title'] }}</li>
                </ul>
            </div>
        </div>
    </section>
    <!-- page-title end -->

    <!-- project-details -->
    <section class="project-details">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="col-lg-4 col-md-12 col-sm-12 sidebar-side">
                    @include('frontend.sections.projects.detail-sidebar')
                </div>
                <div class="col-lg-8 col-md-12 col-sm-12 sidebar-side">
                    @include('frontend.sections.projects.detail-content')
                </div>
            </div>
        </div>
    </section>
    <!-- project-details end -->

    @if(count($relatedProjects) > 0)
    <!-- related-projects -->
    @include('frontend.sections.projects.related-projects')
    <!-- related-projects end -->
    @endif

@endsection

@push('scripts')
<script src="{{ asset('assets/js/jquery.fancybox.js') }}"></script>
@endpush