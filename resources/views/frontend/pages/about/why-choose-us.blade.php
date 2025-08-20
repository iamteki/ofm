{{-- resources/views/frontend/sections/about/why-choose-us.blade.php --}}
<section class="chooseus-style-five sec-pad">
    <div class="auto-container">
        <div class="sec-title centred light">
            <span class="sub-title">Why Choose Us</span>
            <h2>Reasons to Choose Online Finance Manager</h2>
        </div>
        <div class="four-item-carousel owl-carousel owl-theme owl-nav-none">
            @foreach($reasons as $reason)
            <div class="chooseus-block-three">
                <div class="inner-box">
                    <span class="count-text">{{ $reason['number'] }}</span>
                    <h3>{!! $reason['title'] !!}</h3>
                    <p>{{ $reason['description'] }}</p>
                </div>
            </div>
            @endforeach
            {{-- Duplicate items for continuous carousel --}}
            @foreach($reasons as $reason)
            <div class="chooseus-block-three">
                <div class="inner-box">
                    <span class="count-text">{{ $reason['number'] }}</span>
                    <h3>{!! $reason['title'] !!}</h3>
                    <p>{{ $reason['description'] }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>