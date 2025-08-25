{{-- resources/views/frontend/sections/faq/content.blade.php --}}
<div class="faq-content">
    <span class="big-text">faq's</span>
    
    <div class="sec-title centred">
        <h2>Frequently Asked Questions</h2>
        <p>Find answers to the most common questions about our Online Finance Manager platform.</p>
    </div>
    
    <div class="accordion-content">
        <ul class="accordion-box">
            @foreach($faqs as $category => $items)
                @foreach($items as $index => $faq)
                <li class="accordion block {{ $faq['is_active'] ?? false ? 'active-block' : '' }}">
                    <div class="acc-btn {{ $faq['is_active'] ?? false ? 'active' : '' }}">
                        <div class="icon-box"><i class="flaticon-right-chevron"></i></div>
                        <h4>{{ $faq['question'] }}</h4>
                    </div>
                    <div class="acc-content {{ $faq['is_active'] ?? false ? 'current' : '' }}">
                        <p>{{ $faq['answer'] }}</p>
                    </div>
                </li>
                @endforeach
            @endforeach
        </ul>
    </div>
    
    <!-- Additional Help Section -->
    <div class="help-section">
        <h3>Still Have Questions?</h3>
        <p>If you couldn't find the answer you were looking for, please don't hesitate to contact us directly.</p>
        <div class="btn-box">
            <a href="{{ route('contact') ?? '#' }}" class="theme-btn btn-two">Contact Support</a>
            <a href="tel:+1 (307) 533-7005" class="theme-btn btn-one">
                <i class="flaticon-phone"></i> Call Us: +1 (307) 533-7005
            </a>
        </div>
    </div>
</div>