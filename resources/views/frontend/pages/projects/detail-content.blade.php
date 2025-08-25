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
                @foreach(array_slice($project['gallery'], 0, 2) as $index => $image)
                <div class="col-lg-6 col-md-6 col-sm-12 image-column">
                    <figure class="image">
                        <a href="{{ asset($image) }}" class="lightbox-image" data-fancybox="gallery">
                            <img src="{{ asset($image) }}" alt="Featured Image {{ $index + 1 }}" style="border-radius: 15px; width: 100%; height: 250px; object-fit: cover;">
                        </a>
                    </figure>
                </div>
                @endforeach
            </div>
        </div>
        @endif
        
    </div>
</div>