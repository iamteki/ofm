{{-- resources/views/frontend/sections/projects/projects-grid.blade.php --}}
<section class="project-page-section three-columns sec-pad">
    <div class="auto-container">
        <div class="sortable-masonry">
            <div class="filters centred">
                <ul class="filter-tabs filter-btns clearfix">
                    @foreach($categories as $key => $label)
                    <li class="{{ $key === 'all' ? 'active' : '' }} filter" 
                        data-role="button" 
                        data-filter="{{ $key === 'all' ? '.all' : '.' . $key }}">
                        {{ $label }}
                        @if(isset($categoryCounts[$key]))
                            <span>{{ $categoryCounts[$key] }}</span>
                        @endif
                    </li>
                    @endforeach
                </ul>
            </div>
            <div class="items-container row clearfix">
                @foreach($projects as $project)
                <div class="col-lg-4 col-md-6 col-sm-12 masonry-item small-column all {{ implode(' ', $project['tags']) }}">
                    <div class="project-block-one">
                        <div class="inner-box">
                            <figure class="image-box">
                                <img src="{{ asset($project['image']) }}" alt="{{ $project['title'] }}">
                            </figure>
                            <div class="content-inner">
                                <div class="text-box">
                                    <h6>{{ $project['category'] }}</h6>
                                    <h3><a href="{{ route('project.detail', $project['slug']) }}">{{ $project['title'] }}</a></h3>
                                </div>
                                <div class="link">
                                    <a href="{{ route('project.detail', $project['slug']) }}"><i class="flaticon-diagonal-arrow"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        
        @if($totalPages > 1)
        <div class="pagination-wrapper centred">
            <ul class="pagination clearfix">
                @if($currentPage > 1)
                <li class="prev-btn">
                    <a href="{{ route('projects', ['page' => $currentPage - 1]) }}">
                        <i class="flaticon-right-chevron"></i>Prev Page
                    </a>
                </li>
                @endif
                
                @for($i = 1; $i <= $totalPages; $i++)
                <li class="count-page">
                    <a href="{{ route('projects', ['page' => $i]) }}" 
                       class="{{ $i == $currentPage ? 'current' : '' }}">
                        <span>{{ str_pad($i, 2, '0', STR_PAD_LEFT) }}</span>
                    </a>
                </li>
                @endfor
                
                @if($currentPage < $totalPages)
                <li class="next-btn">
                    <a href="{{ route('projects', ['page' => $currentPage + 1]) }}">
                        Next Page <i class="flaticon-right-chevron"></i>
                    </a>
                </li>
                @endif
            </ul>
        </div>
        @endif
    </div>
</section>