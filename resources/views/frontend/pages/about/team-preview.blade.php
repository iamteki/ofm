{{-- resources/views/frontend/sections/about/team-preview.blade.php --}}
<section class="team-section about-page sec-pad">
    <div class="auto-container">
        <div class="sec-title">
            <span class="sub-title">Leadership</span>
            <h2>Team Behind Company</h2>
        </div>
        <div class="three-item-carousel owl-carousel owl-theme">
            @foreach($team as $member)
            <div class="team-block-one">
                <div class="inner-box">
                    <figure class="image-box"><img src="{{ asset($member['image']) }}" alt="{{ $member['name'] }}"></figure>
                    <div class="lower-content">
                        <div class="share-box">
                            <div class="share-icon"><i class="flaticon-share"></i></div>
                            <ul class="social-links clearfix">
                                <li><a href="{{ $member['social']['facebook'] }}"><i class="fa-brands fa-facebook"></i></a></li>
                                <li><a href="{{ $member['social']['twitter'] }}"><i class="fa-brands fa-square-twitter"></i></a></li>
                                <li><a href="{{ $member['social']['instagram'] }}"><i class="fa-brands fa-instagram-square"></i></a></li>
                            </ul>
                        </div>
                        <h3><a href="#">{{ $member['name'] }}</a></h3>
                        <p>{{ $member['bio'] }} <a href="#">Read...</a></p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="more-text centred">
            <h5><a href="{{ route('team') }}">View All Members<i class="flaticon-right-chevron"></i></a></h5>
        </div>
    </div>
</section>
