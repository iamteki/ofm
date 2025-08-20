{{-- resources/views/frontend/sections/services/detail-content.blade.php --}}
<div class="service-details-content">
    <div class="content-one">
        <figure class="image-box">
            <img src="{{ asset($service['image']) }}" alt="{{ $service['title'] }}">
        </figure>
        <div class="text-box">
            <h2>{{ $service['title'] }}</h2>
            <p class="bold-text">{{ $service['highlight'] }}</p>
            <p>{{ $service['description'] }}</p>
        </div>
    </div>
    
    <div class="content-two">
        <div class="row clearfix">
            @foreach($service['features'] as $index => $feature)
            <div class="col-lg-6 col-md-6 col-sm-12 chooseus-block">
                <div class="chooseus-block-three">
                    <div class="inner-box">
                        <span class="count-text">{{ str_pad($index + 1, 2, '0', STR_PAD_LEFT) }}</span>
                        <h3>{!! $feature['title'] !!}</h3>
                        <p>{{ $feature['description'] }}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    
    <div class="content-three">
        <h3>{{ $service['section_title'] }}</h3>
        <p class="bold-text">{{ $service['section_subtitle'] }}</p>
        <div class="inner-box">
            @foreach($service['approach_items'] as $item)
            <div class="single-item">
                <h4>{{ $item['title'] }}:</h4> {{ $item['description'] }}
            </div>
            @endforeach
        </div>
    </div>
    
    <div class="content-four">
        <div class="upper-box">
            <h3>{{ $service['process_title'] }}</h3>
            <p>{{ $service['process_description'] }}</p>
        </div>
        <div class="tabs-box">
            <div class="tab-btns tab-buttons clearfix">
                @foreach($service['tabs'] as $index => $tab)
                <div class="tab-btn {{ $index === 0 ? 'active-btn' : '' }}" data-tab="#tab-{{ $index + 1 }}">
                    {{ $tab['title'] }}
                </div>
                @endforeach
            </div>
            <div class="tabs-content">
                @foreach($service['tabs'] as $index => $tab)
                <div class="tab {{ $index === 0 ? 'active-tab' : '' }}" id="tab-{{ $index + 1 }}">
                    <div class="text-box">
                        <p>{{ $tab['content'] }}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
