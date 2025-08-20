{{-- resources/views/frontend/pages/blog/detail.blade.php --}}
@extends('frontend.layouts.app')

@section('title', $post['title'] . ' - Online Finance Manager')

@section('content')
    <!-- page-title -->
    <section class="page-title">
        <div class="bg-layer" style="background-image: url({{ asset('assets/images/background/page-title.jpg') }});"></div>
        <div class="auto-container">
            <div class="content-box">
                <h1>Blog Post</h1>
                <ul class="bread-crumb clearfix">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li><a href="{{ route('blog') }}">Blog</a></li>
                    <li>{{ Str::limit($post['title'], 30) }}</li>
                </ul>
            </div>
        </div>
    </section>
    <!-- page-title end -->

    <!-- sidebar-page-container -->
    <section class="sidebar-page-container blog-details sec-pad">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="col-lg-8 col-md-12 col-sm-12 content-side">
                    <div class="blog-details-content">
                        @include('frontend.pages.blog.detail-content')
                        @include('frontend.pages.blog.author-box')
                        @include('frontend.pages.blog.post-navigation')
                        @include('frontend.pages.blog.comment-form')
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-12 col-sm-12 sidebar-side">
                    @include('frontend.pages.blog.sidebar')
                </div>
            </div>
        </div>
    </section>
    <!-- sidebar-page-container end -->

    <!-- cta-section -->
    @include('frontend.pages.blog.cta')
    <!-- cta-section end -->
@endsection