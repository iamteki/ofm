
{{-- resources/views/frontend/sections/blog/post-item.blade.php --}}
<div class="news-block-two">
    <div class="inner-box">
        <div class="image-box">
            <figure class="image">
                <a href="{{ route('blog.detail', $post['slug']) }}">
                    <img src="{{ asset($post['image']) }}" alt="{{ $post['title'] }}">
                </a>
            </figure>
            <h6>{{ $post['category'] }}</h6>
        </div>
        <div class="content-box">
            <ul class="post-info clearfix">
                <li><span>On</span> {{ $post['date'] }}</li>
                <li><span>By</span> <a href="#">{{ $post['author'] }}</a></li>
            </ul>
            <h3><a href="{{ route('blog.detail', $post['slug']) }}">{{ $post['title'] }}</a></h3>
            <p>{{ $post['excerpt'] }}</p>
            <div class="link">
                <a href="{{ route('blog.detail', $post['slug']) }}"><span>Explore More</span></a>
            </div>
            <div class="share-box">
                <a href="#"><i class="flaticon-share"></i></a>
            </div>
        </div>
    </div>
</div>
