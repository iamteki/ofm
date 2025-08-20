{{-- resources/views/frontend/pages/services/detail.blade.php --}}
@extends('frontend.layouts.app')

@section('title', $service['title'] . ' - Online Finance Manager')

@section('content')
    <!-- page-title -->
    <section class="page-title">
        <div class="bg-layer" style="background-image: url({{ asset('assets/images/background/page-title.jpg') }});"></div>
        <div class="auto-container">
            <div class="content-box">
                <h1>{{ $service['title'] }}</h1>
                <ul class="bread-crumb clearfix">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li><a href="{{ route('services') }}">Services</a></li>
                    <li>{{ $service['short_title'] }}</li>
                </ul>
            </div>
        </div>
    </section>
    <!-- page-title end -->

    <!-- service-details -->
    <section class="service-details sec-pad">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="col-lg-8 col-md-12 col-sm-12 content-side">
                    @include('frontend.pages.services.detail-content')
                </div>
                
                <div class="col-lg-4 col-md-12 col-sm-12 sidebar-side">
                    @include('frontend.pages.services.detail-sidebar')
                </div>
            </div>
        </div>
    </section>
    <!-- service-details end -->

    <!-- cta-section -->
    @include('frontend.pages.services.cta')
    <!-- cta-section end -->
@endsection