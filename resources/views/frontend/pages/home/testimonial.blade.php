<!-- testimonial-section -->
<section class="testimonial-section sec-pad">
    <div class="pattern-layer" style="background-image: url({{ asset('assets/images/shape/shape-11.png') }});"></div>
    <div class="auto-container">
        <div class="row clearfix">
            <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                <div class="content-box">
                    <div class="sec-title light">
                        <span class="sub-title">Testimonials</span>
                        <h2>Our Clients have been Extremely Satisfied by our Professionalism</h2>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 inner-column">
                <div class="testimonial-content">
                    <div class="testimonial-slider">
                        <div class="bxslider">
                            @if(isset($testimonials) && count($testimonials) > 0)
                                @foreach($testimonials as $testimonial)
                                    <div class="slider-content">
                                        <div class="testimonial-block-one">
                                            <figure class="thumb-box">
                                                <img src="{{ asset('assets/images/resource/' . $testimonial['image']) }}" alt="">
                                            </figure>
                                            <div class="inner-box">
                                                <div class="icon-box"><i class="flaticon-quote"></i></div>
                                                <h4>{{ $testimonial['title'] }}</h4>
                                                <p>{{ $testimonial['content'] }}</p>
                                                <h3>{{ $testimonial['name'] }}</h3>
                                                <span class="designation">{{ $testimonial['designation'] }}</span>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @else
                                <!-- Default testimonials -->
                                <div class="slider-content">
                                    <div class="testimonial-block-one">
                                        <figure class="thumb-box">
                                            <img src="{{ asset('assets/images/resource/testimonial-1.png') }}" alt="">
                                        </figure>
                                        <div class="inner-box">
                                            <div class="icon-box"><i class="flaticon-quote"></i></div>
                                            <h4>Great Experience!</h4>
                                            <p>I have been financially advised by counsolve investment Planners since 2022 I have had a very good experience. The sound financial advice they gave me helped me to achieve.</p>
                                            <h3>Nathan Felix</h3>
                                            <span class="designation">Director - Naxly Info tech</span>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- testimonial-section end -->