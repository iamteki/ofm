{{-- resources/views/frontend/sections/projects/detail-sidebar.blade.php --}}
<div class="project-sidebar">
    <div class="project-info-box">
        <h3>Project <br />Information</h3>
        <ul class="info-list clearfix">
            <li>
                <span>Client</span>
                <h4>{{ $project['client'] }}</h4>
            </li>
            <li>
                <span>Category</span>
                <h4>{{ $project['category'] }}</h4>
            </li>
            <li>
                <span>Date</span>
                <h4>{{ $project['date'] }}</h4>
            </li>
            <li>
                <span>Team</span>
                <h4>{{ $project['team'] }}</h4>
            </li>
        </ul>
        <div class="btn-box">
            <a href="{{ route('contact') }}" class="theme-btn btn-one project-sidebar-btn">Yes! I'm Interested</a>
        </div>
    </div>
</div>

@push('scripts')
<script>

</script>
@endpush