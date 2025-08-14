@extends('frontend.layouts.app')

@section('title', 'Page Under Construction - Counsolve')

@section('content')
    <!-- Page Title Section -->
    <section class="page-title centred" style="background-image: url({{ asset('assets/images/background/page-title.jpg') }});">
        <div class="auto-container">
            <div class="content-box">
                <h1>Page Under Construction</h1>
                <ul class="bread-crumb clearfix">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li>Coming Soon</li>
                </ul>
            </div>
        </div>
    </section>

    <!-- Coming Soon Section -->
    <section class="coming-soon-section sec-pad">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="col-lg-8 col-md-12 col-sm-12 offset-lg-2">
                    <div class="content-box text-center">
                        <div class="sec-title centred">
                            <span class="sub-title">Coming Soon</span>
                            <h2>This Page is Under Construction</h2>
                        </div>
                        <div class="text">
                            <p>We're working hard to bring you this page. Please check back soon!</p>
                        </div>
                        <div class="btn-box">
                            <a href="{{ route('home') }}" class="theme-btn btn-one">Back to Home</a>
                            <a href="{{ route('contact') }}" class="theme-btn btn-two">Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection