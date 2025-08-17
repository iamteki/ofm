
{{-- resources/views/frontend/sections/contact/info-section.blade.php --}}
<section class="contact-section sec-pad">
    <div class="auto-container">
        <div class="row clearfix">
            <div class="col-lg-4 col-md-12 col-sm-12 title-column">
                <div class="sec-title">
                    <span class="sub-title">Contact</span>
                    <h2>Contact us <br />for Top-Notch Service.</h2>
                    <a href="#locations" class="theme-btn btn-two">Our Locations</a>
                </div>
            </div>
            <div class="col-lg-8 col-md-12 col-sm-12 content-column">
                <div class="content-box">
                    <div class="row clearfix">
                        <div class="col-lg-6 col-md-6 col-sm-12 info-column">
                            <div class="info-block-one">
                                <div class="inner-box">
                                    <div class="upper-box">
                                        <div class="light-icon"><i class="flaticon-customer-service-1"></i></div>
                                        <h3>Support</h3>
                                        <p>From our expert team</p>
                                    </div>
                                    <div class="lower-content">
                                        <div class="single-item">
                                            <div class="icon-box"><i class="flaticon-chat-2"></i></div>
                                            <h6>Phone</h6>
                                            <p>
                                                Finance: <a href="tel:{{ str_replace('.', '', $contactInfo['phone']['finance']) }}">{{ $contactInfo['phone']['finance'] }}</a><br />
                                                Operation: <a href="tel:{{ str_replace(['+', ' ', '.'], '', $contactInfo['phone']['operation']) }}">{{ $contactInfo['phone']['operation'] }}</a>
                                            </p>
                                        </div>
                                        <div class="single-item">
                                            <div class="icon-box"><i class="flaticon-mail"></i></div>
                                            <h6>Email</h6>
                                            <p><a href="mailto:{{ $contactInfo['email'] }}">{{ $contactInfo['email'] }}</a></p>
                                        </div>
                                        <div class="link">
                                            <a href="#contact-form"><span>Get Call Back</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 info-column">
                            <div class="info-block-one">
                                <div class="inner-box">
                                    <div class="upper-box">
                                        <div class="light-icon"><i class="flaticon-cityscape"></i></div>
                                        <h3>Address</h3>
                                        <p>To visiting our company</p>
                                    </div>
                                    <div class="lower-content">
                                        <div class="single-item">
                                            <div class="icon-box"><i class="flaticon-location-1"></i></div>
                                            <h6>Address</h6>
                                            <p>
                                                {{ $contactInfo['address']['street'] }}<br />
                                                {{ $contactInfo['address']['city'] }}, {{ $contactInfo['address']['country'] }}
                                            </p>
                                        </div>
                                        <div class="single-item">
                                            <div class="icon-box"><i class="flaticon-time-management"></i></div>
                                            <h6>Off. Hours</h6>
                                            <p>{{ $contactInfo['hours'] }}</p>
                                        </div>
                                        <div class="link">
                                            <a href="https://www.google.com/maps" target="_blank"><span>View On Map</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
