{{-- resources/views/frontend/pages/services/index.blade.php --}}
@extends('frontend.layouts.app')

@section('title', 'Our Services - Online Finance Manager')

@section('content')
    <!-- page-title -->
    @include('frontend.sections.services.page-title')
    <!-- page-title end -->

    <!-- about-style-three -->
    @include('frontend.sections.services.about')
    <!-- about-style-three end -->

    <!-- service-page-section -->
    @include('frontend.sections.services.featured-services')
    <!-- service-page-section end -->

    <!-- service-style-five -->
    @include('frontend.sections.services.all-services')
    <!-- service-style-five end -->

    <!-- clients-style-two -->
    @include('frontend.sections.services.clients')
    <!-- clients-style-two end -->

    <!-- pricing-style-two -->
    @include('frontend.sections.services.pricing')
    <!-- pricing-style-two end -->

    <!-- cta-section -->
    @include('frontend.sections.services.cta')
    <!-- cta-section end -->
@endsection