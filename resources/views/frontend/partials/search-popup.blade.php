<!--Search Popup-->
<div id="search-popup" class="search-popup">
    <div class="popup-inner">
        <div class="upper-box clearfix">
            <figure class="logo-box pull-left">
                <a href="{{ route('home') }}">
                    <img src="{{ asset('assets/images/ofm.svg') }}" alt="OFM" style="width: 120px; height: auto;">
                </a>
            </figure>
            <div class="close-search pull-right"><i class="fa-solid fa-xmark"></i></div>
        </div>
        <div class="overlay-layer"></div>
        <div class="auto-container">
            <div class="search-form">
                <form method="get" action="{{ route('search') ?? '#' }}">
                    <div class="form-group">
                        <fieldset>
                            <input type="search" class="form-control" name="search-input" value="" placeholder="Type your keyword and hit" required>
                            <button type="submit"><i class="flaticon-loupe"></i></button>
                        </fieldset>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>