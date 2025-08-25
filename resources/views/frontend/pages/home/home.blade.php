@extends('frontend.layouts.app')

@section('title', 'Home - Counsolve Investment Consulting')

@section('content')
    <!-- Banner Section -->
    @include('frontend.pages.home.banner')

    <!-- About Section -->
    @include('frontend.pages.home.about')

    <!-- Video Section -->
    @include('frontend.pages.home.video')

    <!-- Service Section -->
    @include('frontend.pages.home.services')

    <!-- Growth Section -->
    @include('frontend.pages.home.growth')

    <!-- Choose Us Section -->
    @include('frontend.pages.home.chooseus')

    <!-- Working Section -->
    @include('frontend.pages.home.working')

    <!-- Project Section -->
    @include('frontend.pages.home.projects')

    <!-- Pricing Section -->
    @include('frontend.pages.home.pricing')

    <!-- News Section -->
    @include('frontend.pages.home.news')

    <!-- Testimonial Section -->
    @include('frontend.pages.home.testimonial')

    <!-- FAQ Section -->
    @include('frontend.pages.home.faq')

    <!-- Appointment Section -->
    @include('frontend.pages.home.appointment')
@endsection