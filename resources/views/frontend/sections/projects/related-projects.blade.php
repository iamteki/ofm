{{-- resources/views/frontend/sections/projects/related-projects.blade.php --}}
<section class="related-projects sec-pad">
    <div class="auto-container">
        <div class="sec-title">
            <span class="sub-title">Similar Work</span>
            <h2>Related Projects</h2>
        </div>
        <div class="row clearfix">
            @foreach($relatedProjects as $related)
            <div class="col-lg-4 col-md-6 col-sm-12 project-block">
                <div class="project-block-one">
                    <div class="inner-box">
                        <figure class="image-box">
                            <img src="{{ asset($related['image']) }}" alt="{{ $related['title'] }}">
                        </figure>
                        <div class="content-inner">
                            <div class="text-box">
                                <h6>{{ $related['category'] }}</h6>
                                <h3><a href="{{ route('project.detail', $related['slug']) }}">{{ $related['title'] }}</a></h3>
                            </div>
                            <div class="link">
                                <a href="{{ route('project.detail', $related['slug']) }}"><i class="flaticon-diagonal-arrow"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>