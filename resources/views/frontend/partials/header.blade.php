<!-- main header -->
<header class="main-header">
    <!-- header-top -->
    <div class="header-top">
        <div class="outer-container">
            <ul class="social-links clearfix ml-auto">
                <li><h5>Social Connect</h5></li>
                <li><a href="#"><i class="fa-brands fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa-brands fa-square-twitter"></i></a></li>
                <li><a href="#"><i class="fa-solid fa-basketball"></i></a></li>
                <li><a href="#"><i class="fa-brands fa-youtube"></i></a></li>
            </ul>
        </div>
    </div>
    
    <!-- header-upper -->
    <div class="header-upper">
        <div class="outer-container">
            <div class="left-column">
                <figure class="logo-box">
                    <a href="{{ route('home') }}">
                        <img src="{{ asset('assets/images/ofm.svg') }}" alt="Online Finance Manager" style="height: 60px; width: auto; max-width: 100%; object-fit: contain; display: block;">
                    </a>
                </figure>
                <div class="award-box">
                    <div class="award-image">
                        <img src="{{ asset('assets/images/icons/award-1.png') }}" alt="">
                    </div>
                    <h5>Leading providers of investment <br />advisory solutions.</h5>
                </div>
            </div>
            <div class="right-column">
                <div class="support-box">
                    <div class="icon-box"><i class="flaticon-headphone"></i></div>
                    <h5><a href="{{ route('faq') ?? '#' }}">Have <br />Question?</a></h5>
                </div>
                <div class="phone"><h3><a href="tel:4188822333">(+41) 888.22.333</a></h3></div>
                <div class="btn-box">
                    <a href="{{ route('contact') ?? '#' }}" class="theme-btn btn-one">Start Consult</a>
                </div>
            </div>
        </div>
    </div>
    
    <!-- header-lower -->
    <div class="header-lower">
        <div class="outer-container">
            <div class="outer-box">
                <div class="menu-area clearfix">
                    <!--Mobile Navigation Toggler-->
                    <div class="mobile-nav-toggler">
                        <i class="icon-bar"></i>
                        <i class="icon-bar"></i>
                        <i class="icon-bar"></i>
                    </div>
                    <nav class="main-menu navbar-expand-md navbar-light">
                        <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
                            <ul class="navigation clearfix">
                                <li class="current">
                                    <a href="{{ route('home') }}">Home</a>
                                </li>  
                                <li>
                                    <a href="{{ route('about') ?? '#' }}">About</a>
                                </li>
                                <li class="dropdown">
                                    <a href="{{ route('services') ?? '#' }}">Services</a>
                                    <ul>
                                        <li><a href="#">Financial Planning</a></li>
                                        <li><a href="#">Investment Management</a></li>
                                        <li><a href="#">Tax Planning</a></li>
                                        <li><a href="#">Retirement Planning</a></li>
                                        <li><a href="#">Risk Management</a></li>
                                        <li><a href="#">Estate Planning</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="{{ route('projects') ?? '#' }}">Projects</a>
                                </li>
                                <li>
                                    <a href="{{ route('pricing') ?? '#' }}">Pricing</a>
                                </li>
                                <li>
                                    <a href="{{ route('blog') ?? '#' }}">Blog</a>
                                </li>
                                <li>
                                    <a href="{{ route('contact') ?? '#' }}">Contact</a>
                                </li>
                                 <li>
                                    <a href="{{ route('faq') ?? '#' }}">Faq</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
                <div class="menu-right-content">
                    <div class="search-box">
                        <div class="search-box-outer search-toggler">
                            <img src="{{ asset('assets/images/icons/icon-2.png') }}" alt="">Search
                        </div>
                    </div>
                    <div class="nav-btn nav-toggler navSidebar-button clearfix">
                        <img src="{{ asset('assets/images/icons/ofm_icon.svg') }}" alt="" style="width: 50px; height: 50px; object-fit: contain; display: block;">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--sticky Header-->
    <div class="sticky-header">
        <div class="outer-container">
            <div class="outer-box">
                <div class="menu-area clearfix">
                    <nav class="main-menu clearfix">
                        <!--Keep This Empty / Menu will come through Javascript-->
                    </nav>
                </div>
                <div class="menu-right-content">
                    <div class="search-box">
                        <div class="search-box-outer search-toggler">
                            <img src="{{ asset('assets/images/icons/icon-2.png') }}" alt="">Search
                        </div>
                    </div>
                    <div class="nav-btn nav-toggler navSidebar-button clearfix">
                        <img src="{{ asset('assets/images/icons/ofm_icon.svg') }}" alt="" style="width: 50px; height: 50px; object-fit: contain; display: block;">
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- main-header end -->