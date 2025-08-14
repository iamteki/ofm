
{{-- resources/views/frontend/sections/services/pricing.blade.php --}}
<section class="pricing-style-two alternat-3 sec-pad">
    <div class="auto-container">
        <div class="row clearfix">
            <div class="col-lg-4 col-md-12 col-sm-12 content-column">
                <div class="content-box">
                    <div class="sec-title">
                        <span class="sub-title">Plan & Pricing</span>
                        <h2>Effective & Flexible Pricing</h2>
                    </div>
                    <div class="text-box">
                        <p>Choose the plan that best fits your financial needs.</p>
                        <ul class="list-item clearfix">
                            <li>Investment Strategy</li>
                            <li>Financial Planning</li>
                        </ul>
                        <h3>Get help to Choose Right Plan</h3>
                    </div>
                    <div class="author-box">
                        <figure class="author-thumb"><img src="{{ asset('assets/images/resource/author-1.png') }}" alt=""></figure>
                        <h3>Support Team</h3>
                        <span class="designation">Advisor</span>
                        <h4><i class="flaticon-whatsapp"></i><a href="tel:15557890123">+1 (555) 789.0123</a></h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 col-md-12 col-sm-12 inner-column">
                <div class="inner-content">
                    <div class="row clearfix">
                        <div class="col-lg-6 col-md-6 col-sm-12 pricing-block">
                            <div class="pricing-block-one">
                                <div class="pricing-table">
                                    <div class="table-header">
                                        <div class="icon-box"><i class="flaticon-idea"></i></div>
                                        <h3>Starter <br />Package</h3>
                                        <p>Perfect for individuals</p>
                                    </div>
                                    <div class="table-content">
                                        <ul class="feature-list clearfix">
                                            <li>Financial Planning</li>
                                            <li>Basic Investment Advice</li>
                                            <li>Monthly Reports</li>
                                            <li class="light">Tax Planning</li>
                                        </ul>
                                        <h2>49 <span class="symble">$</span><span class="fraction">.99</span><span class="text">Billed Monthly</span></h2>
                                        <a href="{{ route('contact') }}" class="theme-btn btn-two">Get Started Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 pricing-block">
                            <div class="pricing-block-one active-block">
                                <div class="pricing-table">
                                    <span class="discount-text">Most Popular</span>
                                    <div class="table-header">
                                        <div class="icon-box"><i class="flaticon-star"></i></div>
                                        <h3>Professional <br />Package</h3>
                                        <p>For growing businesses</p>
                                    </div>
                                    <div class="table-content">
                                        <ul class="feature-list clearfix">
                                            <li>Comprehensive Planning</li>
                                            <li>Portfolio Management</li>
                                            <li>Weekly Reports</li>
                                            <li>Tax Planning & Filing</li>
                                        </ul>
                                        <h2>129 <span class="symble">$</span><span class="fraction">.99</span><span class="text">Billed Monthly</span></h2>
                                        <a href="{{ route('contact') }}" class="theme-btn btn-two">Get Started Now</a>
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
