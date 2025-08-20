
{{-- resources/views/frontend/pages/blog/search.blade.php --}}
@extends('frontend.layouts.app')

@section('title', 'Search Results: ' . $query . ' - Blog - Online Finance Manager')

@section('content')
    <!-- page-title -->
    <section class="page-title">
        <div class="bg-layer" style="background-image: url({{ asset('assets/images/background/page-title.jpg') }});"></div>
        <div class="auto-container">
            <div class="content-box">
                <h1>Search Results</h1>
                <ul class="bread-crumb clearfix">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li><a href="{{ route('blog') }}">Blog</a></li>
                    <li>Search</li>
                </ul>
            </div>
        </div>
    </section>
    <!-- page-title end -->

    <!-- sidebar-page-container -->
    <section class="sidebar-page-container blog-list-one sec-pad">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="col-lg-8 col-md-12 col-sm-12 content-side">
                    <div class="blog-list-content">
                        <div class="search-info">
                            <h3>Search results for: "{{ $query }}"</h3>
                            <p>Found {{ $searchResults->count() }} result(s)</p>
                        </div>
                        
                        @forelse($searchResults as $post)
                            @include('frontend.pages.blog.post-item', ['post' => $post])
                        @empty
                            <div class="no-posts">
                                <h3>No posts found matching your search.</h3>
                                <p>Try different keywords or browse all posts.</p>
                                <a href="{{ route('blog') }}" class="theme-btn btn-two">View All Posts</a>
                            </div>
                        @endforelse
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