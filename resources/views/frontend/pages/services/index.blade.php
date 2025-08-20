{{-- resources/views/frontend/pages/services/index.blade.php --}}
@extends('frontend.layouts.app')

@section('title', 'Our Services - Online Finance Manager')

@section('content')
    <!-- page-title -->
    @include('frontend.pages.services.page-title')
    <!-- page-title end -->

    <!-- about-style-three -->
    @include('frontend.pages.services.about')
    <!-- about-style-three end -->

    <!-- service-page-section -->
    @include('frontend.pages.services.featured-services')
    <!-- service-page-section end -->

    <!-- service-style-five -->
    @include('frontend.pages.services.all-services')
    <!-- service-style-five end -->

    <!-- clients-style-two -->
    @include('frontend.pages.services.clients')
    <!-- clients-style-two end -->

    <!-- pricing-style-two -->
    @include('frontend.pages.services.pricing')
    <!-- pricing-style-two end -->

    <!-- cta-section -->
    @include('frontend.pages.services.cta')
    <!-- cta-section end -->
@endsection