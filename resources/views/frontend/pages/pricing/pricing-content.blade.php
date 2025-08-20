<!-- pricing-section -->
<section class="pricing-section sec-pad">
    <div class="auto-container">
        <div class="sec-title centred">
            <span class="sub-title">Plan & pricing</span>
            <h2>Effective & Flexible Pricing</h2>
            <p>Choose between one-time payment or monthly billing options that best fit your business needs.</p>
        </div>

        <!-- Pricing Toggle -->
        <div class="pricing-toggle-wrapper centred">
            <div class="pricing-toggle">
                <span class="toggle-label monthly-label active">Monthly</span>
                <div class="toggle-switch">
                    <input type="checkbox" id="pricing-toggle" class="toggle-input">
                    <label for="pricing-toggle" class="toggle-slider"></label>
                </div>
                <span class="toggle-label onetime-label">One Time</span>
            </div>
        </div>

        <!-- Monthly Pricing Cards -->
        <div class="row clearfix pricing-plans-wrapper monthly-plans active">
            @if(isset($pricing_plans['monthly_plans']))
                @foreach($pricing_plans['monthly_plans'] as $planKey => $plan)
                    <div class="col-lg-4 col-md-6 col-sm-12 pricing-block">
                        <div class="pricing-block-one {{ $plan['is_popular'] ? 'active-block' : '' }}">
                            <div class="pricing-table">
                                @if(isset($plan['discount_text']))
                                    <span class="discount-text">{{ $plan['discount_text'] }}</span>
                                @endif
                                <div class="table-header">
                                    <h3>{!! str_replace(' ', ' <br />', $plan['name']) !!}</h3>
                                    <p>{{ $plan['description'] }}</p>
                                </div>
                                <div class="table-content">
                                    <ul class="feature-list clearfix">
                                        @foreach($plan['features'] as $feature => $status)
                                            @if(is_array($status) || $status === 'limited')
                                                <li class="light">{{ is_string($feature) ? $feature : $status }}</li>
                                            @else
                                                <li>{{ $status }}</li>
                                            @endif
                                        @endforeach
                                    </ul>
                                    <div class="price-box">
                                        <h2 class="{{ $plan['is_popular'] ? 'pricing-active' : '' }}">
                                            {{ number_format(floor($plan['price']['amount']), 0) }} 
                                            <span class="symble">{{ $plan['price']['currency'] }}</span>
                                            <span class="fraction">.{{ str_pad(round(($plan['price']['amount'] - floor($plan['price']['amount'])) * 100), 2, '0', STR_PAD_LEFT) }}</span>
                                            <span class="text">{{ $plan['price']['billing'] }}</span>
                                        </h2>
                                    </div>
                                    <a href="{{ route('contact') }}" class="{{ $plan['button_class'] }}">{{ $plan['button_text'] }}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            @else
                <!-- Fallback monthly cards -->
                <div class="col-lg-4 col-md-6 col-sm-12 pricing-block">
                    <div class="pricing-block-one">
                        <div class="pricing-table">
                            <div class="table-header">
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
                                <div class="price-box">
                                    <h2>49 <span class="symble">$</span><span class="fraction">.99</span><span class="text">Billed Monthly</span></h2>
                                </div>
                                <a href="{{ route('contact') }}" class="theme-btn btn-two">Get Started Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 pricing-block">
                    <div class="pricing-block-one active-block">
                        <div class="pricing-table">
                            <span class="discount-text">10% Discount, Start Today</span>
                            <div class="table-header">
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
                                <div class="price-box">
                                    <h2 class="pricing-active">129 <span class="symble">$</span><span class="fraction">.99</span><span class="text">Billed Monthly</span></h2>
                                </div>
                                <a href="{{ route('contact') }}" class="theme-btn btn-one">Get Started Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 pricing-block">
                    <div class="pricing-block-one">
                        <div class="pricing-table">
                            <div class="table-header">
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
                                <div class="price-box">
                                    <h2>189 <span class="symble">$</span><span class="fraction">.99</span><span class="text">Billed Monthly</span></h2>
                                </div>
                                <a href="{{ route('contact') }}" class="theme-btn btn-two">Get Started Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
        </div>

        <!-- One-time Pricing Cards (Shorter) -->
        <div class="row clearfix pricing-plans-wrapper onetime-plans">
            @if(isset($pricing_plans['onetime_plans']))
                @foreach($pricing_plans['onetime_plans'] as $planKey => $plan)
                    <div class="col-lg-4 col-md-6 col-sm-12 pricing-block">
                        <div class="pricing-block-one onetime-card {{ $plan['is_popular'] ? 'active-block' : '' }}">
                            <div class="pricing-table">
                                <div class="table-header">
                                    <h3>{!! str_replace(' ', ' <br />', $plan['name']) !!}</h3>
                                </div>
                                <div class="table-content">
                                    <ul class="feature-list clearfix mini-features">
                                        @foreach($plan['features'] as $feature)
                                            <li>{{ $feature }}</li>
                                        @endforeach
                                    </ul>
                                    <div class="price-box">
                                        <h2 class="{{ $plan['is_popular'] ? 'pricing-active' : '' }}">
                                            {{ number_format(floor($plan['price']['amount']), 0) }} 
                                            <span class="symble">{{ $plan['price']['currency'] }}</span>
                                            <span class="fraction">.{{ str_pad(round(($plan['price']['amount'] - floor($plan['price']['amount'])) * 100), 2, '0', STR_PAD_LEFT) }}</span>
                                            <span class="text">{{ $plan['price']['billing'] }}</span>
                                        </h2>
                                    </div>
                                    <a href="{{ route('contact') }}" class="{{ $plan['button_class'] }}">{{ $plan['button_text'] }}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            @else
                <!-- Fallback one-time cards (6 packages) -->
                <div class="col-lg-4 col-md-6 col-sm-12 pricing-block">
                    <div class="pricing-block-one onetime-card">
                        <div class="pricing-table">
                            <div class="table-header">
                                <h3>Starter <br />Package</h3>
                            </div>
                            <div class="table-content">
                                <ul class="feature-list clearfix mini-features">
                                    <li>Traditional Consulting</li>
                                    <li>Investment Management</li>
                                </ul>
                                <div class="price-box">
                                    <h2>299 <span class="symble">$</span><span class="fraction">.99</span><span class="text">One Time Payment</span></h2>
                                </div>
                                <a href="{{ route('contact') }}" class="theme-btn btn-two">Get Started Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 pricing-block">
                    <div class="pricing-block-one onetime-card active-block">
                        <div class="pricing-table">
                            <div class="table-header">
                                <h3>Standard <br />Package</h3>
                            </div>
                            <div class="table-content">
                                <ul class="feature-list clearfix mini-features">
                                    <li>Traditional Consulting</li>
                                    <li>Investment Management</li>
                                </ul>
                                <div class="price-box">
                                    <h2 class="pricing-active">899 <span class="symble">$</span><span class="fraction">.99</span><span class="text">One Time Payment</span></h2>
                                </div>
                                <a href="{{ route('contact') }}" class="theme-btn btn-one">Get Started Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 pricing-block">
                    <div class="pricing-block-one onetime-card">
                        <div class="pricing-table">
                            <div class="table-header">
                                <h3>Basic <br />Package</h3>
                            </div>
                            <div class="table-content">
                                <ul class="feature-list clearfix mini-features">
                                    <li>Traditional Consulting</li>
                                    <li>Investment Management</li>
                                </ul>
                                <div class="price-box">
                                    <h2>499 <span class="symble">$</span><span class="fraction">.99</span><span class="text">One Time Payment</span></h2>
                                </div>
                                <a href="{{ route('contact') }}" class="theme-btn btn-two">Get Started Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 pricing-block">
                    <div class="pricing-block-one onetime-card">
                        <div class="pricing-table">
                            <div class="table-header">
                                <h3>Pro <br />Package</h3>
                            </div>
                            <div class="table-content">
                                <ul class="feature-list clearfix mini-features">
                                    <li>Traditional Consulting</li>
                                    <li>Investment Management</li>
                                </ul>
                                <div class="price-box">
                                    <h2>1299 <span class="symble">$</span><span class="fraction">.99</span><span class="text">One Time Payment</span></h2>
                                </div>
                                <a href="{{ route('contact') }}" class="theme-btn btn-two">Get Started Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 pricing-block">
                    <div class="pricing-block-one onetime-card">
                        <div class="pricing-table">
                            <div class="table-header">
                                <h3>Premium <br />Package</h3>
                            </div>
                            <div class="table-content">
                                <ul class="feature-list clearfix mini-features">
                                    <li>Traditional Consulting</li>
                                    <li>Investment Management</li>
                                </ul>
                                <div class="price-box">
                                    <h2>1899 <span class="symble">$</span><span class="fraction">.99</span><span class="text">One Time Payment</span></h2>
                                </div>
                                <a href="{{ route('contact') }}" class="theme-btn btn-two">Get Started Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 pricing-block">
                    <div class="pricing-block-one onetime-card">
                        <div class="pricing-table">
                            <div class="table-header">
                                <h3>Enterprise <br />Package</h3>
                            </div>
                            <div class="table-content">
                                <ul class="feature-list clearfix mini-features">
                                    <li>Traditional Consulting</li>
                                    <li>Investment Management</li>
                                </ul>
                                <div class="price-box">
                                    <h2>2999 <span class="symble">$</span><span class="fraction">.99</span><span class="text">One Time Payment</span></h2>
                                </div>
                                <a href="{{ route('contact') }}" class="theme-btn btn-two">Get Started Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
        </div>
    </div>
</section>

@push('styles')
<style>
    /* Pricing Toggle Styles */
    .pricing-toggle-wrapper {
        margin-bottom: 50px;
    }
    
    .pricing-toggle {
        display: inline-flex;
        align-items: center;
        gap: 15px;
        background: #f8f9fa;
        padding: 10px 20px;
        border-radius: 50px;
        box-shadow: 0 2px 10px rgba(0,0,0,0.1);
    }
    
    .toggle-label {
        font-size: 16px;
        font-weight: 500;
        color: #666;
        transition: all 0.3s ease;
    }
    
    .toggle-label.active {
        color: #f7931e;
        font-weight: 600;
    }
    
    .toggle-switch {
        position: relative;
        width: 50px;
        height: 25px;
    }
    
    .toggle-input {
        opacity: 0;
        width: 0;
        height: 0;
    }
    
    .toggle-slider {
        position: absolute;
        cursor: pointer;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-color: #f7931e;
        border-radius: 25px;
        transition: 0.3s;
    }
    
    .toggle-slider:before {
        position: absolute;
        content: "";
        height: 19px;
        width: 19px;
        left: 3px;
        bottom: 3px;
        background-color: white;
        border-radius: 50%;
        transition: 0.3s;
    }
    
    .toggle-input:checked + .toggle-slider {
        background-color: #2196F3;
    }
    
    .toggle-input:checked + .toggle-slider:before {
        transform: translateX(25px);
    }
    
    /* Pricing Plans Toggle */
    .pricing-plans-wrapper {
        display: none;
        opacity: 0;
        transform: translateY(20px);
        transition: all 0.4s ease;
    }
    
    .pricing-plans-wrapper.active {
        display: flex;
        opacity: 1;
        transform: translateY(0);
    }
    
    /* One-time cards styling - shorter */
    .pricing-block-one.onetime-card {
        height: auto;
        min-height: 350px;
    }
    
    .pricing-block-one.onetime-card .pricing-table {
        padding: 25px 20px;
    }
    
    .pricing-block-one.onetime-card .table-header {
        margin-bottom: 20px;
        text-align: center;
    }
    
    .pricing-block-one.onetime-card .table-header p {
        display: none; /* Remove description for shorter cards */
    }
    
    .pricing-block-one.onetime-card .table-content {
        text-align: center;
    }
    
    .pricing-block-one.onetime-card .price-box {
        margin: 20px 0;
    }
    
    /* Mini features styling for one-time cards */
    .feature-list.mini-features {
        margin-bottom: 20px;
        text-align: center;
    }
    
    .feature-list.mini-features li {
        font-size: 14px;
        padding: 5px 0;
        color: #666;
        text-align: center;
        border: none;
        margin-bottom: 8px;
    }
    
    .feature-list.mini-features li:before {
        content: "✓";
        color: #f7931e;
        font-weight: bold;
        margin-right: 8px;
    }
    
    /* Active block mini features styling */
    .pricing-block-one.active-block .feature-list.mini-features li {
        color: rgba(255,255,255,0.9);
    }
    
    .pricing-block-one.active-block .feature-list.mini-features li:before {
        color: #ffffff;
    }
    
    /* Regular monthly cards */
    .monthly-plans .pricing-block-one {
        min-height: 500px;
    }
    
    /* Price box styling fix */
    .price-box {
        text-align: center;
        margin: 25px 0;
    }
    
    .price-box h2 {
        font-size: 48px;
        font-weight: 700;
        color: #252525;
        margin-bottom: 0;
        position: relative;
        line-height: 1.2;
    }
    
    .price-box h2 .symble {
        font-size: 24px;
        color: #f7931e;
        position: absolute;
        left: -15px;
        top: 10px;
        font-weight: 700;
    }
    
    .price-box h2 .fraction {
        font-size: 24px;
        color: #252525;
        font-weight: 600;
    }
    
    .price-box h2 .text {
        display: block;
        font-size: 16px;
        color: #777;
        font-weight: 400;
        margin-top: 8px;
        line-height: 1.2;
    }
    
    /* Fix for active block pricing visibility */
    .pricing-block-one.active-block .price-box h2,
    .pricing-block-one.active-block .price-box h2.pricing-active {
        color: #ffffff !important;
    }
    
    .pricing-block-one.active-block .price-box h2 .symble {
        color: #ffffff !important;
    }
    
    .pricing-block-one.active-block .price-box h2 .fraction {
        color: #ffffff !important;
    }
    
    .pricing-block-one.active-block .price-box h2 .text {
        color: rgba(255,255,255,0.8) !important;
    }
    
    .pricing-block-one.active-block .pricing-table .theme-btn {
        background: #ffffff;
        color: #333333;
        border: 2px solid #ffffff;
    }
    
    .pricing-block-one.active-block .pricing-table .theme-btn:hover {
        background: transparent;
        color: #ffffff;
        border: 2px solid #ffffff;
    }
    
    /* Ensure feature list items are visible */
    .pricing-block-one.active-block .feature-list li {
        color: #ffffff;
    }
    
    .pricing-block-one.active-block .feature-list li:before {
        color: #ffffff;
    }
    
    /* Animation for card switching */
    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(20px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
    
    .pricing-plans-wrapper.active {
        animation: fadeInUp 0.4s ease forwards;
    }

    /* Responsive adjustments */
    @media (max-width: 768px) {
        .pricing-toggle {
            flex-direction: column;
            gap: 10px;
            padding: 15px;
        }
        
        .toggle-switch {
            order: 2;
        }
        
        .pricing-block-one.onetime-card {
            min-height: 280px;
            margin-bottom: 30px;
        }
        
        .monthly-plans .pricing-block-one {
            min-height: 400px;
        }
        
        .feature-list.mini-features li {
            font-size: 12px;
            padding: 3px 0;
        }
        
        .price-box h2 {
            font-size: 36px;
        }
        
        .price-box h2 .symble {
            font-size: 20px;
            left: -12px;
        }
        
        .price-box h2 .fraction {
            font-size: 20px;
        }
    }
</style>
@endpush

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {
    const toggle = document.getElementById('pricing-toggle');
    const monthlyLabel = document.querySelector('.monthly-label');
    const onetimeLabel = document.querySelector('.onetime-label');
    const monthlyPlans = document.querySelector('.monthly-plans');
    const onetimePlans = document.querySelector('.onetime-plans');
    
    // Initialize with monthly pricing
    showMonthlyPlans();
    
    toggle.addEventListener('change', function() {
        if (this.checked) {
            showOnetimePlans();
        } else {
            showMonthlyPlans();
        }
    });
    
    function showMonthlyPlans() {
        // Update labels
        monthlyLabel.classList.add('active');
        onetimeLabel.classList.remove('active');
        
        // Show/hide plan cards with smooth transition
        if (onetimePlans) {
            onetimePlans.classList.remove('active');
            setTimeout(() => {
                if (monthlyPlans) {
                    monthlyPlans.classList.add('active');
                }
            }, 200); // Small delay for smooth transition
        } else if (monthlyPlans) {
            monthlyPlans.classList.add('active');
        }
    }
    
    function showOnetimePlans() {
        // Update labels
        monthlyLabel.classList.remove('active');
        onetimeLabel.classList.add('active');
        
        // Show/hide plan cards with smooth transition
        if (monthlyPlans) {
            monthlyPlans.classList.remove('active');
            setTimeout(() => {
                if (onetimePlans) {
                    onetimePlans.classList.add('active');
                }
            }, 200); // Small delay for smooth transition
        } else if (onetimePlans) {
            onetimePlans.classList.add('active');
        }
    }
    
    // Add smooth scroll to pricing section when toggle is used
    toggle.addEventListener('change', function() {
        setTimeout(() => {
            const pricingSection = document.querySelector('.pricing-section');
            if (pricingSection) {
                pricingSection.scrollIntoView({ 
                    behavior: 'smooth', 
                    block: 'center' 
                });
            }
        }, 300);
    });
});
</script>
@endpush

<!-- pricing-section end -->