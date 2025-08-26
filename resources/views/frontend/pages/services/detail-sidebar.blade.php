
{{-- resources/views/frontend/sections/services/detail-sidebar.blade.php --}}
<div class="service-sidebar">
    <div class="sidebar-widget category-widget">
        <ul class="category-list clearfix">
            @foreach($allServices as $svc)
            <li>
                <a href="{{ route('service.detail', $svc['slug']) }}" 
                   class="{{ $service['slug'] === $svc['slug'] ? 'current' : '' }}">
                    <span>{{ $svc['short_title'] }}</span>
                    <i class="flaticon-diagonal-arrow"></i>
                </a>
            </li>
            @endforeach
        </ul>
    </div>
    
    <div class="download-widget">
        <ul class="download-list clearfix">
            <li>
                <div class="icon"><i class="flaticon-download-pdf"></i></div>
                <h5>Service Brochure</h5>
                <button type="button"><i class="flaticon-download"></i></button>
            </li>
            <li>
                <div class="icon"><i class="flaticon-download-pdf"></i></div>
                <h5>Terms & Conditions</h5>
                <button type="button"><i class="flaticon-download"></i></button>
            </li>
        </ul>
    </div>
</div>