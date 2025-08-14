{{-- resources/views/frontend/pages/about/team.blade.php --}}
@extends('frontend.layouts.app')

@section('title', 'Our Team - Online Finance Manager')

@section('content')
    <!-- page-title -->
    <section class="page-title">
        <div class="bg-layer" style="background-image: url({{ asset('assets/images/background/page-title.jpg') }});"></div>
        <div class="auto-container">
            <div class="content-box">
                <h1>Our Team</h1>
                <ul class="bread-crumb clearfix">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li><a href="{{ route('about') }}">About</a></li>
                    <li>Team</li>
                </ul>
            </div>
        </div>
    </section>
    <!-- page-title end -->

    <!-- team-section -->
    @include('frontend.sections.about.team-full')
    <!-- team-section end -->

    <!-- cta-section -->
    @include('frontend.sections.about.cta')
    <!-- cta-section end -->
@endsection