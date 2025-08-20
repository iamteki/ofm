{{-- resources/views/frontend/sections/faq/content.blade.php --}}
<div class="faq-content">
    <span class="big-text">faq's</span>
    
    @foreach($faqs as $category => $items)
    <div class="accordion-content">
        <h3>{{ $category }}</h3>
        <ul class="accordion-box">
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
        </ul>
    </div>
    @endforeach
    
    <!-- Additional Help Section -->
    <div class="help-section">
        <h3>Still Have Questions?</h3>
        <p>If you couldn't find the answer you were looking for, please don't hesitate to contact us directly.</p>
        <div class="btn-box">
            <a href="{{ route('contact') ?? '#' }}" class="theme-btn btn-two">Contact Support</a>
            <a href="tel:+14188822333" class="theme-btn btn-one">
                <i class="flaticon-phone"></i> Call Us: (+41) 888.22.333
            </a>
        </div>
    </div>
</div>