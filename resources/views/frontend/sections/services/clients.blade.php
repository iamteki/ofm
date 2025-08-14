
{{-- resources/views/frontend/sections/services/clients.blade.php --}}
<section class="clients-style-two service-page">
    <div class="auto-container">
        <div class="sec-title centred light">
            <span class="sub-title">Our Clients</span>
            <h2>People Who Trusted Us</h2>
        </div>
        <div class="inner-container">
            <ul class="clients-list clearfix">
                @for($i = 11; $i <= 15; $i++)
                <li>
                    <figure class="clients-logo">
                        <a href="#"><img src="{{ asset('assets/images/clients/clients-' . $i . '.png') }}" alt=""></a>
                    </figure>
                </li>
                @endfor
            </ul>
            <ul class="clients-list clearfix">
                @for($i = 16; $i <= 20; $i++)
                <li>
                    <figure class="clients-logo">
                        <a href="#"><img src="{{ asset('assets/images/clients/clients-' . $i . '.png') }}" alt=""></a>
                    </figure>
                </li>
                @endfor
            </ul>
        </div>
        <div class="more-text centred">
            <h5>500+ Companies & Individuals Trusted Us. <a href="#"><i class="flaticon-right-chevron"></i>View All Clients</a></h5>
        </div>
    </div>
</section>
