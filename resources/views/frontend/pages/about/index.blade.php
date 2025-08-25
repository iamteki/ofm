{{-- resources/views/frontend/pages/about/index.blade.php --}}
@extends('frontend.layouts.app')

@section('title', 'About Us - Online Finance Manager')

@section('content')
    <!-- page-title -->
    @include('frontend.pages.about.page-title')
    <!-- page-title end -->

    <!-- about-style-five -->
    @include('frontend.pages.about.about-intro')
    <!-- about-style-five end -->

    <!-- chooseus-style-five -->
    @include('frontend.pages.about.why-choose-us')
    <!-- chooseus-style-five end -->

    <!-- skills-section -->
    @include('frontend.pages.about.skills')
    <!-- skills-section end -->

    <!-- industries-section -->
    @include('frontend.pages.about.industries')
    <!-- industries-section end -->

    <!-- team-section -->
    @include('frontend.pages.about.team-preview')
    <!-- team-section end -->
@endsection