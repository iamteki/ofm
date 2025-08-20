
{{-- resources/views/frontend/sections/contact/offices.blade.php --}}
@if(isset($offices) && count($offices) > 0)
<section class="offices-section sec-pad" id="locations">
    <div class="auto-container">
        <div class="sec-title centred">
            <span class="sub-title">Our Locations</span>
            <h2>Office Locations Worldwide</h2>
        </div>
        <div class="row clearfix">
            @foreach($offices as $office)
            <div class="col-lg-4 col-md-6 col-sm-12 office-block">
                <div class="office-block-one">
                    <div class="inner-box">
                        <h3>{{ $office['name'] }}</h3>
                        @if($office['is_main'])
                            <span class="badge">Main Office</span>
                        @endif
                        <ul class="info-list">
                            <li>
                                <i class="flaticon-location-1"></i>
                                {{ $office['address'] }}
                            </li>
                            <li>
                                <i class="flaticon-chat-2"></i>
                                <a href="tel:{{ str_replace(['+', ' ', '.'], '', $office['phone']) }}">{{ $office['phone'] }}</a>
                            </li>
                            <li>
                                <i class="flaticon-mail"></i>
                                <a href="mailto:{{ $office['email'] }}">{{ $office['email'] }}</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endif