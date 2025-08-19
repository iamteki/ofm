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
                                <img src="{{ asset('assets/images/logo.png') }}" alt="Online Finance Manager">
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
            <div class="bottom-inner" style="display: flex; justify-content: space-between; align-items: center; position: relative; flex-wrap: wrap; gap: 15px;">
                <div style="flex: 1; min-width: 0; display: none;" class="d-none d-md-block"></div>
                <div class="copyright-text" style="flex: 1; text-align: center; min-width: 250px; order: 1;">
                    <p style="margin: 0; font-size: 14px; line-height: 1.4;">Copyright &copy; {{ date('Y') }} <a href="{{ route('home') }}">Counsolve.</a> All Rights Reserved.</p>
                </div>
                <div style="flex: 1; display: flex; justify-content: flex-end; min-width: auto; order: 2;" class="d-none d-md-flex">
                    <button class="scroll-to-target" data-target="html">Back to Top<i class="flaticon-up-arrow"></i></button>
                </div>
                <div class="d-block d-md-none" style="width: 100%; text-align: center; order: 3; margin-top: 10px;">
                    <button class="scroll-to-target" data-target="html">Back to Top<i class="flaticon-up-arrow"></i></button>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- main-footer end -->