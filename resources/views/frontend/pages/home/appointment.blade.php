<!-- appointment-section -->
<section class="appointment-section">
    <div class="outer-container sec-pad">
        <div class="image-layer">
            <img src="{{ asset('assets/images/resource/cat-1.png') }}" alt="">
        </div>
        <div class="image-layer">
            <img src="{{ asset('assets/images/icons/growth-1.png') }}" alt="">
        </div>
        <div class="auto-container">
            <div class="sec-title light">
                <span class="sub-title">Appointment</span>
                <h2>Send your Proposal to us</h2>
            </div>
            <div class="row clearfix">
                <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                    <div class="content-box">
                        <div class="form-inner">
                            <form method="post" action="{{ route('contact.store') ?? '#' }}" class="default-form">
                                @csrf
                                <div class="row clearfix">
                                    <div class="col-lg-6 col-md-6 col-sm-12 single-column">
                                        <div class="form-group">
                                            <input type="text" name="name" placeholder="Name *" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="email" name="email" placeholder="Email *" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="phone" placeholder="Phone *" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 single-column">
                                        <div class="form-group">
                                            <div class="select-box">
                                                <select name="subject" class="selectmenu">
                                                    <option value="">Subject</option>
                                                    <option value="traditional-consulting">Traditional Consulting</option>
                                                    <option value="portfolio-management">Portfolio Management</option>
                                                    <option value="asset-allocation">Asset Allocation</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <textarea name="message" placeholder="Message"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 form-group message-btn">
                                        <button type="submit" class="theme-btn btn-two">Send Request</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 inner-column">
                    <div class="inner-box">
                        <div class="shape"></div>
                        <div class="icon-box"><i class="flaticon-customer-service"></i></div>
                        <ul class="info-list clearfix">
                            <li>
                                <h6>Working Days</h6>
                                <h4>Mon to Fri - 08:30am To 06:00pm</h4>
                            </li>
                            <li>
                                <h6>Phone</h6>
                                <h4><a href="tel:+94716942349">+94 71 694 23 49</a></h4>
                            </li>
                            <li>
                                <h6>Email</h6>
                                <h4><a href="mailto:info@onlinefinancemanager.com">info@onlinefinancemanager.com</a></h4>
                            </li>
                        </ul>
                        <ul class="social-links clearfix">
                            <li><a href="#"><i class="fa-brands fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa-brands fa-square-twitter"></i></a></li>
                            <li><a href="#"><i class="fa-brands fa-youtube"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- appointment-section end -->