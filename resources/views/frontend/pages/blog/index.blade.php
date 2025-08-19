{{-- resources/views/frontend/pages/blog/index.blade.php --}}
@extends('frontend.layouts.app')

@section('title', 'Blog - Online Finance Manager')

@section('content')
    <!-- page-title -->
    @include('frontend.sections.blog.page-title')
    <!-- page-title end -->

    <!-- sidebar-page-container -->
    <section class="sidebar-page-container blog-list-one sec-pad">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="col-lg-8 col-md-12 col-sm-12 content-side">
                    <div class="blog-list-content">
                        @foreach($paginatedPosts as $post)
                            @include('frontend.sections.blog.post-item', ['post' => $post])
                        @endforeach
                        
                        <!-- Pagination -->
                        @include('frontend.sections.blog.pagination')
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-12 col-sm-12 sidebar-side">
                    @include('frontend.sections.blog.sidebar')
                </div>
            </div>
        </div>
    </section>
    <!-- sidebar-page-container end -->

@endsection