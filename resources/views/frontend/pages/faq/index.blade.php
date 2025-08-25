{{-- resources/views/frontend/pages/faq/index.blade.php --}}
@extends('frontend.layouts.app')

@section('title', 'Frequently Asked Questions - Online Finance Manager')

@section('content')
    <!-- page-title -->
    @include('frontend.pages.faq.page-title')
    <!-- page-title end -->

    <!-- faq-page-section -->
    <section class="faq-page-section sec-pad">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 content-side">
                    @include('frontend.pages.faq.content')
                </div>
            </div>
        </div>
    </section>
    <!-- faq-page-section end -->
@endsection

@push('scripts')
<script>
    // Accordion functionality
    $(document).ready(function() {
        $('.acc-btn').on('click', function() {
            if ($(this).hasClass('active')) {
                $(this).removeClass('active');
                $(this).parent('.accordion').removeClass('active-block');
                $(this).next('.acc-content').slideUp(300).removeClass('current');
            } else {
                $('.acc-btn').removeClass('active');
                $('.accordion').removeClass('active-block');
                $('.acc-content').slideUp(300).removeClass('current');
                
                $(this).addClass('active');
                $(this).parent('.accordion').addClass('active-block');
                $(this).next('.acc-content').slideDown(300).addClass('current');
            }
        });
    });
</script>
@endpush