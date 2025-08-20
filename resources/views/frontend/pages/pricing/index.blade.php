{{-- resources/views/frontend/pages/pricing/index.blade.php --}}
@extends('frontend.layouts.app')

@section('title', 'Pricing Plans - Online Finance Manager')

@section('content')
    <!-- page-title -->
    @include('frontend.pages.pricing.page-title')
    <!-- page-title end -->

    <!-- pricing-section -->
    @include('frontend.pages.pricing.pricing-content')
    <!-- pricing-section end -->
@endsection