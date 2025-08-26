{{-- resources/views/frontend/sections/services/tools.blade.php --}}
<section class="tools-style-two service-page">
    <div class="auto-container">
        <div class="sec-title centred light">
            <span class="sub-title">Our Trusted Tools</span>
            <h2>Powerful solutions for seamless accounting</h2>
        </div>
        <div class="inner-container">
            <ul class="tools-list clearfix">
                @for($i = 11; $i <= 15; $i++)
                <li>
                    <figure class="tools-logo">
                        <a href="#"><img src="{{ asset('assets/images/clients/clients-' . $i . '.png') }}" alt=""></a>
                    </figure>
                </li>
                @endfor
            </ul>
            <ul class="tools-list clearfix">
                @for($i = 16; $i <= 20; $i++)
                <li>
                    <figure class="tools-logo">
                        <a href="#"><img src="{{ asset('assets/images/clients/clients-' . $i . '.png') }}" alt=""></a>
                    </figure>
                </li>
                @endfor
            </ul>
        </div>
        <div class="more-text centred">
            <h5>500+ Companies & Individuals Trusted Us. <a href="#"><i class="flaticon-right-chevron"></i>View All Tools</a></h5>
        </div>
    </div>
</section>