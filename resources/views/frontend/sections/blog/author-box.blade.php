
{{-- resources/views/frontend/sections/blog/author-box.blade.php --}}
<div class="author-box">
    <figure class="author-thumb">
        <img src="{{ asset($authorDetails['image']) }}" alt="{{ $authorDetails['name'] }}">
    </figure>
    <h6>Post By</h6>
    <h3>{{ $authorDetails['name'] }}</h3>
    <p>{{ $authorDetails['bio'] }}</p>
    <h5><a href="#">Read All Post</a></h5>
    <ul class="social-links clearfix">
        <li><a href="{{ $authorDetails['social']['facebook'] }}"><i class="fab fa-facebook-f"></i></a></li>
        <li><a href="{{ $authorDetails['social']['twitter'] }}"><i class="fab fa-twitter"></i></a></li>
        <li><a href="{{ $authorDetails['social']['linkedin'] }}"><i class="fab fa-linkedin-in"></i></a></li>
        <li><a href="{{ $authorDetails['social']['instagram'] }}"><i class="fab fa-instagram"></i></a></li>
    </ul>
</div>
