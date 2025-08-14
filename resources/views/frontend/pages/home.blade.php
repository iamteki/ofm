@extends('frontend.layouts.app')

@section('title', 'Home - Counsolve Investment Consulting')

@section('content')
    <!-- Banner Section -->
    @include('frontend.sections.banner')

    <!-- About Section -->
    @include('frontend.sections.about')

    <!-- Video Section -->
    @include('frontend.sections.video')

    <!-- Service Section -->
    @include('frontend.sections.services')

    <!-- Growth Section -->
    @include('frontend.sections.growth')

    <!-- Choose Us Section -->
    @include('frontend.sections.chooseus')

    <!-- Industries Section -->
    @include('frontend.sections.industries')

    <!-- Working Section -->
    @include('frontend.sections.working')

    <!-- Project Section -->
    @include('frontend.sections.projects')

    <!-- Pricing Section -->
    @include('frontend.sections.pricing')

    <!-- News Section -->
    @include('frontend.sections.news')

    <!-- Testimonial Section -->
    @include('frontend.sections.testimonial')

    <!-- FAQ Section -->
    @include('frontend.sections.faq')

    <!-- Appointment Section -->
    @include('frontend.sections.appointment')
@endsection