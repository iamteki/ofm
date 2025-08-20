{{-- resources/views/frontend/pages/projects/index.blade.php --}}
@extends('frontend.layouts.app')

@section('title', 'Our Projects - Online Finance Manager')

@section('content')
    <!-- page-title -->
    @include('frontend.pages.projects.page-title')
    <!-- page-title end -->

    <!-- project-page-section -->
    @include('frontend.pages.projects.projects-grid')
    <!-- project-page-section end -->

@endsection

@push('scripts')
<script src="{{ asset('assets/js/isotope.js') }}"></script>
<script>
    $(document).ready(function() {
        // Isotope initialization
        if ($('.sortable-masonry').length) {
            var $container = $('.items-container');
            $container.isotope({
                filter: '*',
                animationOptions: {
                    duration: 750,
                    easing: 'linear',
                    queue: false
                }
            });
            
            $('.filter-tabs li').click(function() {
                $('.filter-tabs li').removeClass('active');
                $(this).addClass('active');
                var selector = $(this).attr('data-filter');
                $container.isotope({
                    filter: selector,
                    animationOptions: {
                        duration: 750,
                        easing: 'linear',
                        queue: false
                    }
                });
                return false;
            });
        }
    });
</script>
@endpush