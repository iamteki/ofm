{{-- resources/views/frontend/sections/projects/cta.blade.php --}}
<section class="cta-section alternat-2">
    <div class="outer-container">
        <div class="pattern-layer" style="background-image: url({{ asset('assets/images/shape/shape-25.png') }});"></div>
        <div class="image-box-one">
            <figure class="image"><img src="{{ asset('assets/images/resource/cta-1.jpg') }}" alt=""></figure>
            <div class="phone"><h4>Call: <a href="tel:41888765432">(+41) 888.76.5432</a></h4></div>
        </div>
        <div class="image-box-two">
            <figure class="image"><img src="{{ asset('assets/images/resource/cta-2.jpg') }}" alt=""></figure>
            <div class="text-box">
                <h6>Have a <br />Project in <br />Mind?</h6>
            </div>
        </div>
        <div class="auto-container">
            <div class="row clearfix">
                <div class="col-lg-8 col-md-12 col-sm-12 offset-lg-2 content-column">
                    <div class="content-box">
                        <h2>Let's work together <br />on your next project</h2>
                        <div class="inner-box">
                            <figure class="image-box"><img src="{{ asset('assets/images/resource/cart-1.jpg') }}" alt=""></figure>
                            <p>Transform your financial vision into reality with our expert guidance and proven strategies.</p>
                            <a href="{{ route('contact') }}" class="theme-btn btn-two">Start Project</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>