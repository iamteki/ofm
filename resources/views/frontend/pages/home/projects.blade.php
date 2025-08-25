<!-- project-section -->
<section class="project-section">
    <div class="auto-container">
        <div class="sec-title">
            <span class="sub-title">Case Studies</span>
            <h2>Thinking Forward for your Results</h2>
        </div>
        <div class="project-tab">
            <div class="shape" style="background-image: url({{ asset('assets/images/shape/shape-10.png') }});"></div>
            <div class="row clearfix">
                <div class="col-lg-3 col-md-12 col-sm-12 btn-column">
                    <div class="tab-btn-box">
                        <ul class="tab-btns project-tab-btns clearfix">
                            <li class="p-tab-btn active-btn" data-tab="#tab-5">View All Recents</li>
                            <li class="p-tab-btn" data-tab="#tab-6">Business</li>
                            <li class="p-tab-btn" data-tab="#tab-7">Consulting</li>
                            <li class="p-tab-btn" data-tab="#tab-8">Innovative</li>
                            <li class="p-tab-btn" data-tab="#tab-9">Investment</li>
                            <li class="p-tab-btn" data-tab="#tab-10">Management</li>
                        </ul>
                        <div class="btn-box" style="margin-top: 30px;">
                            <a href="{{ route('projects') }}" class="theme-btn btn-two">View More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9 col-md-12 col-sm-12 content-column">
                    <div class="p-tabs-content">
                        <div class="p-tab active-tab" id="tab-5">
                            <div class="four-item-carousel owl-carousel owl-theme">
                                @if(isset($projects) && count($projects) > 0)
                                    @foreach($projects as $project)
                                        <div class="project-block-one">
                                            <div class="inner-box">
                                                <figure class="image-box">
                                                    <img src="{{ asset('assets/images/project/' . $project['image']) }}" alt="">
                                                </figure>
                                                <div class="content-inner">
                                                    <div class="text-box">
                                                        <h6>{{ $project['category'] }}</h6>
                                                        <h3><a href="{{ $project['link'] }}">{{ $project['title'] }}</a></h3>
                                                    </div>
                                                    <div class="link">
                                                        <a href="{{ $project['link'] }}"><i class="flaticon-diagonal-arrow"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                @else
                                    <!-- Default projects -->
                                    <div class="project-block-one">
                                        <div class="inner-box">
                                            <figure class="image-box">
                                                <img src="{{ asset('assets/images/project/project-1.jpg') }}" alt="">
                                            </figure>
                                            <div class="content-inner">
                                                <div class="text-box">
                                                    <h6>Business</h6>
                                                    <h3><a href="#">Investing in Emerging Markets</a></h3>
                                                </div>
                                                <div class="link">
                                                    <a href="#"><i class="flaticon-diagonal-arrow"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="project-block-one">
                                        <div class="inner-box">
                                            <figure class="image-box">
                                                <img src="{{ asset('assets/images/project/project-2.jpg') }}" alt="">
                                            </figure>
                                            <div class="content-inner">
                                                <div class="text-box">
                                                    <h6>Investment</h6>
                                                    <h3><a href="#">Revisiting Your Investment Goals</a></h3>
                                                </div>
                                                <div class="link">
                                                    <a href="#"><i class="flaticon-diagonal-arrow"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="project-block-one">
                                        <div class="inner-box">
                                            <figure class="image-box">
                                                <img src="{{ asset('assets/images/project/project-3.jpg') }}" alt="">
                                            </figure>
                                            <div class="content-inner">
                                                <div class="text-box">
                                                    <h6>Business</h6>
                                                    <h3><a href="#">Dimensional Fund Advisors Interview</a></h3>
                                                </div>
                                                <div class="link">
                                                    <a href="#"><i class="flaticon-diagonal-arrow"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="project-block-one">
                                        <div class="inner-box">
                                            <figure class="image-box">
                                                <img src="{{ asset('assets/images/project/project-4.jpg') }}" alt="">
                                            </figure>
                                            <div class="content-inner">
                                                <div class="text-box">
                                                    <h6>Financial Plan</h6>
                                                    <h3><a href="#">Interested in Giving Back this year</a></h3>
                                                </div>
                                                <div class="link">
                                                    <a href="#"><i class="flaticon-diagonal-arrow"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            </div>
                        </div>
                        <!-- Other tabs content (tab-6 to tab-10) would follow similar pattern -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- project-section end -->