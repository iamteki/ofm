{{-- resources/views/frontend/sections/blog/detail-content.blade.php --}}
<div class="content-one">
    <div class="author-post">
        <figure class="author-thumb">
            <img src="{{ asset('assets/images/news/thumb-2.jpg') }}" alt="">
        </figure>
        <h6>{{ $post['category'] }}</h6>
        <ul class="post-info clearfix">
            <li><span>On</span> {{ $post['date'] }}</li>
            <li><span>By</span> <a href="#">{{ $post['author'] }}</a></li>
            <li><span>To</span> {{ $post['read_time'] }}</li>
        </ul>
    </div>
    <h2>{{ $post['title'] }}</h2>
    <div class="text-box">
        <p><span>T</span>{{ $post['content'] }}</p>
        <p>Five centuries, but also the leap into electronic typesetting, remaining essentially unchanged all it was popularised in the release of Letraset sheets.</p>
        <p>Obligations of business it will frequently occur pleasure have repudiated annoyances accept wise man therefore always holds in these matters beguiled and demoralized by the charms pleasure of the moment, so blinded by desire, that they cannot foresee right to find fault with a man chooses to enjoy a pleasure that has no annoying consequences.</p>
    </div>
    <figure class="image-box">
        <img src="{{ asset('assets/images/news/news-21.jpg') }}" alt="">
    </figure>
</div>

<div class="content-two">
    <h3>Expertise and Experience</h3>
    <p>Extremely painful or again is there anyone who loves or case pursues or desires these cases dislike perfectly simple and to distinguish.</p>
    <h5>We keep ourselves up to make your dreams come true,</h5>
    <div class="list-inner">
        <ul class="list-item clearfix">
            <li>Denounce with righteous indignation.</li>
            <li>Belongs to those who fail.</li>
            <li>Matters to this principle rejects pleasures.</li>
        </ul>
        <ul class="list-item clearfix">
            <li>The wise man therefore always hold.</li>
            <li>Obligations of business it will frequently.</li>
        </ul>
    </div>
    <blockquote>
        <div class="icon-box"><i class="flaticon-quote"></i></div>
        <h4>Contrary to popular belief, lorem ipsum is not simply random. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.</h4>
        <span class="designation">Franklin Joseph</span>
    </blockquote>
</div>

<div class="content-three">
    <h3>Final Thoughts</h3>
    <p>There are many variations of passages of lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing.</p>
    <div class="single-item">
        <p><span>Objectivity:</span> Extremely painful or again is there anyone who loves or case pursues or these cases are perfectly simple and to distinguish.</p>
    </div>
    <div class="single-item">
        <p><span>Strategic Planning:</span> Again is there anyone who loves or case pursues or desires all simple and to distinguish. A free hours when our power choice is nothing.</p>
    </div>
    <div class="post-tags">
        <ul class="tags-list clearfix">
            <li><h5><img src="{{ asset('assets/images/icons/icon-33.png') }}" alt="">Post Tags:</h5></li>
            @foreach($post['tags'] as $tag)
            <li><a href="{{ route('blog.tag', Str::slug($tag)) }}">{{ $tag }}</a></li>
            @endforeach
        </ul>
    </div>
</div>
