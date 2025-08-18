{{-- resources/views/frontend/sections/projects/detail-content.blade.php --}}
<div class="project-details-content">
    <div class="content-one">
        <h2>{{ $project['title'] }}</h2>
        <div class="text-box">
            <p><span>{{ substr($project['full_description'], 0, 1) }}</span>{{ substr($project['full_description'], 1) }}</p>
            <p>{{ $project['description'] }}</p>
        </div>
        
        @if(!empty($project['gallery']))
        <div class="image-box">
            <div class="row clearfix">
                @foreach($project['gallery'] as $index => $image)
                <div class="col-lg-6 col-md-6 col-sm-12 image-column">
                    <figure class="image">
                        <a href="{{ asset($image) }}" class="lightbox-image" data-fancybox="gallery">
                            <img src="{{ asset($image) }}" alt="Project Gallery {{ $index + 1 }}">
                        </a>
                    </figure>
                </div>
                @endforeach
            </div>
        </div>
        @endif
        
        <div class="lower-text">
            <p>Our approach to this project involved comprehensive analysis and strategic planning to ensure optimal outcomes for our client. Through careful implementation and continuous monitoring, we achieved the desired results while maintaining the highest standards of professional service.</p>
        </div>
    </div>
    
    <div class="content-two">
        <div class="single-item">
            <div class="icon-box"><i class="flaticon-difficulties"></i></div>
            <h3>The Challenges</h3>
            <p>{{ $project['challenges'] }}</p>
            <h5>Key challenges we addressed:</h5>
            <ul class="list-item clearfix">
                <li>Complex regulatory requirements</li>
                <li>Market volatility and uncertainty</li>
                <li>Stakeholder alignment and communication</li>
            </ul>
        </div>
        <div class="single-item">
            <div class="icon-box"><i class="flaticon-achievement"></i></div>
            <h3>The Solution</h3>
            <p>{{ $project['solution'] }}</p>
            <p>Our comprehensive solution included strategic planning, risk assessment, and implementation of best practices tailored to the client's specific needs and objectives.</p>
        </div>
    </div>
</div>