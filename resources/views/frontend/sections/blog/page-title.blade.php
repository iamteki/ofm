{{-- resources/views/frontend/sections/blog/page-title.blade.php --}}
<section class="page-title">
    <div class="bg-layer" style="background-image: url({{ asset('assets/images/background/page-title.jpg') }});"></div>
    <div class="auto-container">
        <div class="content-box">
            <h1>Blog</h1>
            <ul class="bread-crumb clearfix">
                <li><a href="{{ route('home') }}">Home</a></li>
                <li>Blog</li>
                <li>List View</li>
            </ul>
        </div>
    </div>
</section>
