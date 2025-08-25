
{{-- resources/views/frontend/sections/about/about-intro.blade.php --}}
<section class="about-style-five sec-pad">
    <div class="auto-container">
        <div class="row align-items-center">
            <div class="col-lg-4 col-md-12 col-sm-12 content-column">
                <div class="content-box">
                    <div class="sec-title">
                        <span class="sub-title">About Us</span>
                        <h2>Experts in Providing Financial Management Services</h2>
                    </div>
                    <div class="text-box">
                        <h3>Service Since {{ $stats['founded'] ?? '2015' }}</h3>
                        <p>We've been helping individuals and businesses achieve their financial goals through expert guidance, strategic planning, and personalized solutions.</p>
                        <div class="btn-box">
                            <a href="#" class="theme-btn btn-two">Download Company Profile</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12 col-sm-12 image-column">
                <figure class="image-box"><img src="{{ asset('assets/images/resource/about-7.jpg') }}" alt=""></figure>
            </div>
            <div class="col-lg-4 col-md-12 col-sm-12 inner-column">
                <div class="inner-box">
                    <p>Committed to excellence, we provide comprehensive financial solutions that empower our clients to make informed decisions and achieve lasting success.</p>
                    <div class="single-item">
                        <div class="icon-box"><i class="flaticon-downloads"></i></div>
                        <h3>Our Mission</h3>
                        <p>To deliver exceptional financial management services that help our clients build, preserve, and transfer wealth effectively.</p>
                    </div>
                    <div class="single-item">
                        <div class="icon-box"><i class="flaticon-downloads"></i></div>
                        <h3>Our Vision</h3>
                        <p>To be the most trusted financial management partner, recognized for our expertise, integrity, and commitment to client success.</p>
                        <ul class="list-item clearfix">
                            <li>Client-focused approach</li>
                            <li>Innovative solutions</li>
                            <li>Long-term partnerships</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>