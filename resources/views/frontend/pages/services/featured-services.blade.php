
{{-- resources/views/frontend/sections/services/featured-services.blade.php --}}
<section class="service-page-section">
    <div class="outer-container sec-pad">
        <div class="pattern-layer" style="background-image: url({{ asset('assets/images/shape/shape-45.png') }});"></div>
        <div class="auto-container">
            <div class="sec-title centred light">
                <span class="sub-title">Our Services</span>
                <h2>Comprehensive Financial Solutions</h2>
            </div>
            <div class="row clearfix">
                @foreach($featuredServices as $index => $service)
                <div class="col-lg-4 col-md-6 col-sm-12 service-column">
                    <div class="service-block-one block-{{ ['one', 'two', 'three'][$index] ?? 'one' }}">
                        <div class="inner-box">
                            <div class="icon-box">
                                <div class="icon"><i class="{{ $service['icon'] }}"></i></div>
                                <span class="count-text">{{ str_pad($index + 1, 2, '0', STR_PAD_LEFT) }}</span>
                            </div>
                            <h3><a href="{{ route('service.detail', $service['slug']) }}">{{ $service['title'] }}</a></h3>
                            <div class="link"><a href="{{ route('service.detail', $service['slug']) }}"><span>Explore Service</span></a></div>
                            <p>{{ Str::limit($service['description'], 120) }}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
