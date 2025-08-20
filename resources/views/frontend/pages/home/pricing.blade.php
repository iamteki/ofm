<!-- pricing-section -->
<section class="pricing-section sec-pad">
    <div class="auto-container">
        <div class="sec-title centred">
            <span class="sub-title">Plan & pricing</span>
            <h2>Effective & Flexible Pricing</h2>
        </div>
        <div class="row clearfix">
            <div class="col-lg-4 col-md-6 col-sm-12 pricing-block">
                <div class="pricing-block-one">
                    <div class="pricing-table">
                        <div class="table-header">
                            <div class="icon-box"><i class="flaticon-idea"></i></div>
                            <h3>Basic <br />Package</h3>
                            <p>Pricing plan for small business</p>
                        </div>
                        <div class="table-content">
                            <ul class="feature-list clearfix">
                                <li>Traditional Consulting</li>
                                <li>Investment Management</li>
                                <li>Data Aggregation</li>
                                <li class="light">Tax Planning & Preparation</li>
                            </ul>
                            <h2>49 <span class="symble">$</span><span class="fraction">.99</span><span class="text">Billed Monthly</span></h2>
                            <a href="{{ route('contact') ?? '#' }}" class="theme-btn btn-two">Get Started Now</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 pricing-block">
                <div class="pricing-block-one active-block">
                    <div class="pricing-table">
                        <span class="discount-text">10% Discount, Start Today</span>
                        <div class="table-header">
                            <div class="icon-box"><i class="flaticon-star"></i></div>
                            <h3>Standard <br />Package</h3>
                            <p>Pricing plan for growing business</p>
                        </div>
                        <div class="table-content">
                            <ul class="feature-list clearfix">
                                <li>Traditional Consulting</li>
                                <li>Investment Management</li>
                                <li>Data Aggregation</li>
                                <li>Tax Planning & Preparation</li>
                            </ul>
                            <h2 class="pricing-active">129 <span class="symble">$</span><span class="fraction">.99</span><span class="text">Billed Monthly</span></h2>
                            <a href="{{ route('contact') ?? '#' }}" class="theme-btn btn-one">Get Started Now</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 pricing-block">
                <div class="pricing-block-one">
                    <div class="pricing-table">
                        <div class="table-header">
                            <div class="icon-box"><i class="flaticon-diamond"></i></div>
                            <h3>Pro <br />Package</h3>
                            <p>Pricing plan for enterprise</p>
                        </div>
                        <div class="table-content">
                            <ul class="feature-list clearfix">
                                <li>Traditional Consulting</li>
                                <li>Investment Management</li>
                                <li>Data Aggregation</li>
                                <li>Tax Planning & Preparation</li>
                            </ul>
                            <h2>189 <span class="symble">$</span><span class="fraction">.99</span><span class="text">Billed Monthly</span></h2>
                            <a href="{{ route('contact') ?? '#' }}" class="theme-btn btn-two">Get Started Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    /* Fix for pricing visibility in active block */
    .pricing-block-one.active-block .pricing-table h2,
    .pricing-block-one.active-block .pricing-table h2 .symble,
    .pricing-block-one.active-block .pricing-table h2 .fraction {
        color: #ffffff !important;
    }
    
    .pricing-block-one.active-block .pricing-table .theme-btn {
        background: #ffffff;
        color: #333333;
    }
    
    .pricing-block-one.active-block .pricing-table .theme-btn:hover {
        background: #f0f0f0;
        color: #000000;
    }
    
    /* Ensure feature list items are visible */
    .pricing-block-one.active-block .feature-list li {
        color: #ffffff;
    }
    
    .pricing-block-one.active-block .feature-list li:before {
        color: #ffffff;
    }
</style>
<!-- pricing-section end -->