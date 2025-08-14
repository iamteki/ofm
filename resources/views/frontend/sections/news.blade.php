<!-- news-section -->
<section class="news-section sec-pad">
    <div class="auto-container">
        <div class="sec-title centred">
            <span class="sub-title">Blog Post</span>
            <h2>Recent from News Room</h2>
        </div>
        <div class="row clearfix">
            @if(isset($news) && count($news) > 0)
                @foreach($news as $index => $article)
                    <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                        <div class="news-block-one wow fadeInUp animated" data-wow-delay="{{ $index * 300 }}ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <div class="upper-box">
                                    <span class="category">{{ $article['category'] }}</span>
                                    <ul class="post-info clearfix">
                                        <li><span>On</span> {{ $article['date'] }}</li>
                                        <li><span>By</span> <a href="{{ $article['link'] }}">{{ $article['author'] }}</a></li>
                                    </ul>
                                </div>
                                <div class="image-box">
                                    <figure class="image">
                                        <a href="{{ $article['link'] }}">
                                            <img src="{{ asset('assets/images/news/' . $article['image']) }}" alt="">
                                        </a>
                                    </figure>
                                    <div class="view-btn">
                                        <a href="{{ asset('assets/images/news/' . $article['image']) }}" class="lightbox-image" data-fancybox="gallery">
                                            <i class="flaticon-zoom-in"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="lower-box">
                                    <h3><a href="{{ $article['link'] }}">{{ $article['title'] }}</a></h3>
                                    <div class="link"><a href="{{ $article['link'] }}"><span>Explore More</span></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            @else
                <!-- Default news items -->
                <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                    <div class="news-block-one wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <div class="upper-box">
                                <span class="category">Investment</span>
                                <ul class="post-info clearfix">
                                    <li><span>On</span> Mar 14, 2023</li>
                                    <li><span>By</span> <a href="#">Justin Langer</a></li>
                                </ul>
                            </div>
                            <div class="image-box">
                                <figure class="image">
                                    <a href="#"><img src="{{ asset('assets/images/news/news-1.jpg') }}" alt=""></a>
                                </figure>
                                <div class="view-btn">
                                    <a href="{{ asset('assets/images/news/news-1.jpg') }}" class="lightbox-image" data-fancybox="gallery">
                                        <i class="flaticon-zoom-in"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="lower-box">
                                <h3><a href="#">Revisiting Your Investment & Distribution Goals</a></h3>
                                <div class="link"><a href="#"><span>Explore More</span></a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                    <div class="news-block-one wow fadeInUp animated" data-wow-delay="300ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <div class="upper-box">
                                <span class="category">Business</span>
                                <ul class="post-info clearfix">
                                    <li><span>On</span> Feb 26, 2023</li>
                                    <li><span>By</span> <a href="#">Colmin Neil</a></li>
                                </ul>
                            </div>
                            <div class="image-box">
                                <figure class="image">
                                    <a href="#"><img src="{{ asset('assets/images/news/news-2.jpg') }}" alt=""></a>
                                </figure>
                                <div class="view-btn">
                                    <a href="{{ asset('assets/images/news/news-2.jpg') }}" class="lightbox-image" data-fancybox="gallery">
                                        <i class="flaticon-zoom-in"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="lower-box">
                                <h3><a href="#">Dimensional Fund Advisors Interview with Director</a></h3>
                                <div class="link"><a href="#"><span>Explore More</span></a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                    <div class="news-block-one wow fadeInUp animated" data-wow-delay="600ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <div class="upper-box">
                                <span class="category">Financial Plan</span>
                                <ul class="post-info clearfix">
                                    <li><span>On</span> Feb 05, 2023</li>
                                    <li><span>By</span> <a href="#">Boone Gerardo</a></li>
                                </ul>
                            </div>
                            <div class="image-box">
                                <figure class="image">
                                    <a href="#"><img src="{{ asset('assets/images/news/news-3.jpg') }}" alt=""></a>
                                </figure>
                                <div class="view-btn">
                                    <a href="{{ asset('assets/images/news/news-3.jpg') }}" class="lightbox-image" data-fancybox="gallery">
                                        <i class="flaticon-zoom-in"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="lower-box">
                                <h3><a href="#">Interested in Giving Back this year? Here are some tips</a></h3>
                                <div class="link"><a href="#"><span>Explore More</span></a></div>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
        </div>
    </div>
</section>
<!-- news-section end -->