{{-- resources/views/frontend/sections/about/skills.blade.php --}}
<section class="skills-section about-page"> 
    <div class="auto-container">
        <div class="row clearfix">
            <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                <div class="image-box">
                    <figure class="image image-1"><img src="{{ asset('assets/images/resource/skills-1.jpg') }}" alt=""></figure>
                    <figure class="image image-2"><img src="{{ asset('assets/images/resource/skills-2.jpg') }}" alt=""></figure>
                    <div class="chart-box">
                        <h3>Total Clients</h3>
                        <h5>Year 2024-2025</h5>
                        <h2>{{ $stats['clients'] ?? '500+' }}</h2>
                        <h4>+15% growth</h4>
                        <div class="graph"><img src="{{ asset('assets/images/icons/graph-2.png') }}" alt=""></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                <div class="content-box">
                    <div class="sec-title">
                        <span class="sub-title">Our Skills</span>
                        <h2>We keep ourselves <br />up to make your Dreams come true</h2>
                    </div>
                    <div class="text-box">
                        <p>Our team combines deep financial expertise with cutting-edge technology to deliver exceptional results for our clients.</p>
                        <p>We continuously invest in our people and systems to stay ahead of market trends.</p>
                    </div>
                    <div class="inner-box">
                        <div class="row clearfix">
                            <div class="col-lg-6 col-md-6 col-sm-12 single-column">
                                <div class="single-item">
                                    <div class="icon-box"><i class="flaticon-downloads"></i></div>
                                    <h3>{{ $skills['personal']['title'] }}</h3>
                                    <h5><a href="{{ route('services') }}">Explore Services</a></h5>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 skills-column">
                                <div class="progress-box">
                                    <p>{{ $skills['personal']['description'] }}</p>
                                    <h5>{{ $skills['personal']['percentage'] }}%</h5>
                                    <div class="bar">
                                        <div class="bar-inner count-bar" data-percent="{{ $skills['personal']['percentage'] }}%"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 single-column">
                                <div class="single-item">
                                    <div class="icon-box"><i class="flaticon-downloads"></i></div>
                                    <h3>{{ $skills['corporate']['title'] }}</h3>
                                    <h5><a href="{{ route('services') }}">Explore Services</a></h5>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 skills-column">
                                <div class="progress-box">
                                    <p>{{ $skills['corporate']['description'] }}</p>
                                    <h5>{{ $skills['corporate']['percentage'] }}%</h5>
                                    <div class="bar">
                                        <div class="bar-inner count-bar" data-percent="{{ $skills['corporate']['percentage'] }}%"></div>
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