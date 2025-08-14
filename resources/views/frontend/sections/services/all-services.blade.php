
{{-- resources/views/frontend/sections/services/all-services.blade.php --}}
<section class="service-style-five sec-pad">
    <div class="auto-container">
        <div class="sec-title">
            <span class="sub-title">All Services</span>
            <h2>Growing with Smart Ideas</h2>
        </div>
        <div class="four-item-carousel owl-carousel owl-theme">
            @foreach($services as $service)
            <div class="service-block-two">
                <div class="inner-box">
                    <h3><a href="{{ route('service.detail', $service['slug']) }}">{{ $service['short_title'] }}</a></h3>
                    <figure class="image-box">
                        <img src="{{ asset($service['image']) }}" alt="{{ $service['title'] }}">
                    </figure>
                </div>
                <div class="link-box">
                    <a href="{{ route('service.detail', $service['slug']) }}"><i class="flaticon-right-arrow-1"></i></a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
