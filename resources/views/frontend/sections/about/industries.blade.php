{{-- resources/views/frontend/sections/about/industries.blade.php --}}
<section class="industries-section">
    <div class="outer-container">
        <div class="bg-layer" style="background-image: url({{ asset('assets/images/background/industries-bg.jpg') }});"></div>
        <div class="auto-container">
            <div class="tabs-box">
                <div class="row clearfix">
                    <div class="col-lg-8 col-md-12 col-sm-12 content-column">
                        <div class="content-box">
                            <div class="sec-title light">
                                <span class="sub-title">We Work For</span>
                                <h2>Industries We Served</h2>
                            </div>
                            <div class="tab-btns tab-buttons clearfix">
                                @foreach($industries as $index => $industry)
                                <div class="tab-btn {{ $index === 0 ? 'active-btn' : '' }}" data-tab="#tab-{{ $industry['id'] }}">
                                    <span class="count-text">{{ str_pad($industry['id'], 2, '0', STR_PAD_LEFT) }}</span>
                                    <h3>{{ $industry['title'] }}</h3>
                                    <a href="{{ route('services') }}"><i class="flaticon-diagonal-arrow"></i></a>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12 inner-column">
                        <div class="tabs-content">
                            @foreach($industries as $index => $industry)
                            <div class="tab {{ $index === 0 ? 'active-tab' : '' }}" id="tab-{{ $industry['id'] }}">
                                <div class="inner-box">
                                    <h3>{{ $industry['title'] }}</h3>
                                    <p>{{ $industry['description'] }}</p>
                                    <ul class="list-item clearfix">
                                        @foreach($industry['points'] as $point)
                                        <li>{{ $point }}</li>
                                        @endforeach
                                    </ul>
                                    <a href="{{ route('services') }}" class="theme-btn btn-two">Explore More</a>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>