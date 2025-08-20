{{-- resources/views/frontend/pages/contact/index.blade.php --}}
@extends('frontend.layouts.app')

@section('title', 'Contact Us - Online Finance Manager')

@section('content')
    <!-- page-title -->
    @include('frontend.pages.contact.page-title')
    <!-- page-title end -->

    <!-- contact-section -->
    @include('frontend.pages.contact.info-section')
    <!-- contact-section end -->

    <!-- contact-style-two -->
    @include('frontend.pages.contact.form-section')
    <!-- contact-style-two end -->
@endsection

@push('scripts')
<script>
    // Form validation and submission handling
    document.getElementById('contact-form')?.addEventListener('submit', function(e) {
        // Additional client-side validation if needed
    });
</script>
@endpush