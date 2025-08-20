
{{-- resources/views/frontend/sections/blog/pagination.blade.php --}}
<div class="pagination-wrapper centred">
    <ul class="pagination clearfix">
        @if($page > 1)
            <li class="prev-btn">
                <a href="{{ route('blog', ['page' => $page - 1]) }}">
                    <i class="flaticon-right-chevron"></i>Prev Page
                </a>
            </li>
        @endif
        
        @for($i = 1; $i <= $totalPages; $i++)
            <li class="count-page">
                <a href="{{ route('blog', ['page' => $i]) }}" class="{{ $i == $page ? 'current' : '' }}">
                    <span>{{ str_pad($i, 2, '0', STR_PAD_LEFT) }}</span>
                </a>
            </li>
        @endfor
        
        @if($page < $totalPages)
            <li class="next-btn">
                <a href="{{ route('blog', ['page' => $page + 1]) }}">
                    Next Page <i class="flaticon-right-chevron"></i>
                </a>
            </li>
        @endif
    </ul>
</div>
