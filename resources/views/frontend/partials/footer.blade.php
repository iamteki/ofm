<!-- main-footer -->
<section class="main-footer">
    <div class="auto-container">
        <div class="footer-top">
           
        </div>
        <div class="widget-section">
            <div class="row clearfix">
                <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                    <div class="footer-widget logo-widget">
                        <figure class="footer-logo">
                            <a href="{{ route('home') }}">
                                <img src="{{ asset('assets/images/ofm.svg') }}" alt="Online Finance Manager" style="height: 80px; width: auto; max-width: 100%; object-fit: contain; display: block;">
                            </a>
                        </figure>
                        <div class="text-box">
                            <p>Provides advice & guidance to clients regarding their investments & manage their investment portfolios.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                    <div class="footer-widget links-widget">
                        <div class="widget-title">
                            <h3>Company</h3>
                        </div>
                        <div class="widget-content">
                            <ul class="links-list clearfix">
                                <li><a href="{{ route('home') }}">Home</a></li>
                                <li><a href="{{ route('about') ?? '#' }}">About Us</a></li>
                                <li><a href="{{ route('team') ?? '#' }}">Professionals</a></li>
                                <li><a href="{{ route('blog') ?? '#' }}">Insights</a></li>
                                <li><a href="{{ route('services') ?? '#' }}">Services</a></li>
                                <li><a href="#chooseus">Why Choose</a></li>
                                <li><a href="{{ route('contact') ?? '#' }}">Get in Touch</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                    <div class="footer-widget links-widget">
                        <div class="widget-title">
                            <h3>Essentials</h3>
                        </div>
                        <div class="widget-content">
                            <ul class="links-list clearfix">
                                <li><a href="#working">How it's Work</a></li>
                                <li><a href="#clients">Partners</a></li>
                                <li><a href="#testimonial">Testimonials</a></li>
                                <li><a href="{{ route('projects') ?? '#' }}">Case Studies</a></li>
                                <li><a href="{{ route('contact') ?? '#' }}">Free Quote</a></li>
                                <li><a href="{{ route('services') ?? '#' }}">Plan & Pricing</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                    <div class="footer-widget post-widget">
                        <div class="widget-title">
                            <h3>Popular Post</h3>
                        </div>
                        <div class="post-inner">
                            <div class="post">
                                <span class="category">Investment</span>
                                <h4><a href="{{ route('blog') ?? '#' }}">Revisiting Your Investment & Distribution Goals</a></h4>
                            </div>
                            <div class="post">
                                <span class="category">Business</span>
                                <h4><a href="{{ route('blog') ?? '#' }}">Dimensional Fund Advisors Interview with Director</a></h4>
                            </div>
                            <div class="link-box">
                                <a href="{{ route('blog') ?? '#' }}"><span>View All Post</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="auto-container">
            <div style="border-top: 1px solid #d1d5db; margin-bottom: 20px;"></div>
            <div class="bottom-inner">
                <div class="copyright-text">
                    <p style="margin: 0; color: #75727b; font-size: 14px; text-align: center; margin-bottom: 10px;">Copyright © {{ date('Y') }} <a href="https://creatxsoftware.com/" target="_blank" style="color: #4ec0fc; text-decoration: none;">CreatxSoftware</a>. All Rights Reserved.</p>
                </div>
                <div class="footer-links" style="text-align: center;">
                    <a href="#" style="color: #75727b; text-decoration: none; margin: 0 15px; font-size: 14px;">Terms & Conditions</a>
                    <a href="#" style="color: #75727b; text-decoration: none; margin: 0 15px; font-size: 14px;">Privacy Policy</a>
                    <a href="#" style="color: #75727b; text-decoration: none; margin: 0 15px; font-size: 14px;">Investor Rights</a>
                </div>
            </div>
            
            <style>
            @media (min-width: 768px) {
                .footer-bottom .bottom-inner {
                    display: flex;
                    justify-content: space-between;
                    align-items: center;
                    flex-wrap: wrap;
                }
                .footer-bottom .copyright-text {
                    text-align: left !important;
                }
                .footer-bottom .copyright-text p {
                    margin-bottom: 0 !important;
                }
                .footer-bottom .footer-links {
                    text-align: right !important;
                }
            }
            </style>
        </div>
    </div>
</section>
<!-- main-footer end -->