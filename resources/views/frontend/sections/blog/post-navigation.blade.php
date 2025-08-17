
{{-- resources/views/frontend/sections/blog/post-navigation.blade.php --}}
<div class="post-nav-btn">
    <div class="post-btn">
        @if($prevPost)
        <div class="single-btn prev-btn">
            <h6>Prev Post</h6>
            <h4>
                <a href="{{ route('blog.detail', $prevPost['slug']) }}">
                    {{ Str::limit($prevPost['title'], 60) }}
                </a>
            </h4>
        </div>
        @endif
        
        @if($nextPost)
        <div class="single-btn next-btn">
            <h6>Next Post</h6>
            <h4>
                <a href="{{ route('blog.detail', $nextPost['slug']) }}">
                    {{ Str::limit($nextPost['title'], 60) }}
                </a>
            </h4>
        </div>
        @endif
    </div>
    <div class="btn-box">
        <a href="{{ route('blog') }}"><span>Back to Blog Post</span></a>
    </div>
</div>
