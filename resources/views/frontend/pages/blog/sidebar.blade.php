
{{-- resources/views/frontend/sections/blog/sidebar.blade.php --}}
<div class="blog-sidebar">
    <div class="sidebar-widget search-widget">
        <div class="search-inner">
            <form method="get" action="{{ route('blog.search') }}">
                <div class="form-group">
                    <input type="search" name="search" placeholder="Enter Keyword..." required>
                    <button type="submit"><img src="{{ asset('assets/images/icons/icon-32.png') }}" alt=""></button>
                </div>
            </form>
        </div>
    </div>
    
    <div class="sidebar-widget category-widget">
        <div class="widget-title">
            <h3>Categories</h3>
        </div>
        <div class="widget-content">
            <ul class="category-list clearfix">
                @foreach($categories as $category)
                <li>
                    <a href="{{ route('blog.category', $category['slug']) }}">{{ $category['name'] }}</a>
                    <div class="line"></div>
                    <span>{{ $category['count'] }}</span>
                </li>
                @endforeach
            </ul>
        </div>
    </div>
    
    <div class="sidebar-widget post-widget">
        <div class="widget-title">
            <h3>Popular Post</h3>
        </div>
        <div class="post-inner">
            @foreach($popularPosts as $popularPost)
            <div class="post">
                <figure class="post-thumb">
                    <a href="{{ route('blog.detail', $popularPost['slug']) }}">
                        <img src="{{ asset($popularPost['thumbnail']) }}" alt="{{ $popularPost['title'] }}">
                    </a>
                </figure>
                <h4>
                    <a href="{{ route('blog.detail', $popularPost['slug']) }}">
                        {{ Str::limit($popularPost['title'], 50) }}
                    </a>
                </h4>
            </div>
            @endforeach
        </div>
    </div>
    
    <div class="sidebar-widget tags-widget">
        <div class="widget-title">
            <h3>Popular Tags</h3>
        </div>
        <div class="widget-content">
            <ul class="tags-list clearfix">
                @foreach($tags as $tag)
                <li><a href="{{ route('blog.tag', Str::slug($tag)) }}">{{ $tag }}</a></li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
