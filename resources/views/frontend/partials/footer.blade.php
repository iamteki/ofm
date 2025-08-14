<!-- main-footer -->
<section class="main-footer">
    <div class="auto-container">
        <div class="footer-top">
            <div class="row clearfix">
                <div class="col-lg-6 col-md-12 col-sm-12 footer-column">
                    <div class="logo-widget">
                        <figure class="footer-logo">
                            <a href="{{ route('home') }}">
                                <img src="{{ asset('assets/images/logo.png') }}" alt="">
                            </a>
                        </figure>
                        <div class="copyright">
                            <h5>Copyright &copy; {{ date('Y') }} <a href="{{ route('home') }}">Counsolve.</a> All Rights Reserved.</h5>
                        </div>
                        <div class="text-box">
                            <p>Provides advice & guidance to clients regarding their investments & manage their investment portfolios.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 footer-column">
                    <div class="newsletter-widget">
                        <div class="icon-box">
                            <img src="{{ asset('assets/images/icons/icon-8.png') }}" alt="">
                        </div>
                        <h3>Newsletter</h3>
                        <p>By submitting this form, you consent to receive marketing updates from Counsolve.</p>
                        <div class="form-inner">
                            <form method="post" action="{{ route('newsletter.subscribe') ?? '#' }}">
                                @csrf
                                <div class="form-group">
                                    <input type="email" name="email" placeholder="Enter Email Address..." required>
                                    <button type="submit" class="theme-btn btn-one">Subscribe</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="widget-section">
            <div class="row clearfix">
                <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                    <div class="footer-widget contact-widget">
                        <div class="widget-title">
                            <h3>Office Location</h3>
                        </div>
                        <div class="widget-content">
                            <h4><span>Over 30 Offices in more</span><br /> <span>than 16 Countries</span></h4>
                            <h5>Head Office</h5>
                            <p>280 Granite Run Drive Suite <br />Hobert, LA 90010, <br />United States.</p>
                            <div class="map-box">
                                <div class="icon-box"><i class="fas fa-map-location"></i></div>
                                <h6><a href="https://www.google.com/maps/@23.235815,89.5731704,17.1z" target="_blank">Google Map</a></h6>
                            </div>
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
            <div class="bottom-inner">
                <ul class="footer-nav">
                    <li><a href="{{ route('terms') ?? '#' }}">Terms & Conditions</a></li>
                    <li><a href="{{ route('privacy') ?? '#' }}">Privacy Policy</a></li>
                    <li><a href="{{ route('sitemap') ?? '#' }}">Sitemap</a></li>
                    <li><a href="{{ route('investor-policy') ?? '#' }}">Investor Policy</a></li>
                </ul>
                <button class="scroll-to-target" data-target="html">Back to Top<i class="flaticon-up-arrow"></i></button>
            </div>
        </div>
    </div>
</section>
<!-- main-footer end -->