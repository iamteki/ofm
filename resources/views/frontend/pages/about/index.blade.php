{{-- resources/views/frontend/pages/about/index.blade.php --}}
@extends('frontend.layouts.app')

@section('title', 'About Us - Online Finance Manager')

@section('content')
    <!-- page-title -->
    @include('frontend.sections.about.page-title')
    <!-- page-title end -->

    <!-- about-style-five -->
    @include('frontend.sections.about.about-intro')
    <!-- about-style-five end -->

    <!-- chooseus-style-five -->
    @include('frontend.sections.about.why-choose-us')
    <!-- chooseus-style-five end -->

    <!-- skills-section -->
    @include('frontend.sections.about.skills')
    <!-- skills-section end -->

    <!-- industries-section -->
    @include('frontend.sections.about.industries')
    <!-- industries-section end -->

    <!-- team-section -->
    @include('frontend.sections.about.team-preview')
    <!-- team-section end -->

    <!-- cta-section -->
    @include('frontend.sections.about.cta')
    <!-- cta-section end -->
@endsection