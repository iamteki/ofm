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
                <span>Location</span>
                <h4>{{ $project['location'] }}</h4>
            </li>
        </ul>
        <div class="btn-box">
            <a href="{{ route('contact') }}" class="theme-btn btn-one">Yes! I'm Interested</a>
        </div>
    </div>
    <div class="project-share-option">
        <h5>Share this Project</h5>
        <ul class="social-links clearfix">
            <li><a href="#" onclick="shareOnFacebook(); return false;"><i class="fa-brands fa-facebook"></i></a></li>
            <li><a href="#" onclick="shareOnTwitter(); return false;"><i class="fa-brands fa-square-twitter"></i></a></li>
            <li><a href="#" onclick="shareOnLinkedIn(); return false;"><i class="fa-brands fa-linkedin"></i></a></li>
            <li><a href="#" onclick="shareOnPinterest(); return false;"><i class="fa-brands fa-square-pinterest"></i></a></li>
        </ul>
    </div>
</div>

@push('scripts')
<script>
function shareOnFacebook() {
    window.open('https://www.facebook.com/sharer/sharer.php?u=' + encodeURIComponent(window.location.href), '_blank');
}
function shareOnTwitter() {
    window.open('https://twitter.com/intent/tweet?url=' + encodeURIComponent(window.location.href) + '&text=' + encodeURIComponent('{{ $project["title"] }}'), '_blank');
}
function shareOnLinkedIn() {
    window.open('https://www.linkedin.com/sharing/share-offsite/?url=' + encodeURIComponent(window.location.href), '_blank');
}
function shareOnPinterest() {
    window.open('https://pinterest.com/pin/create/button/?url=' + encodeURIComponent(window.location.href) + '&description=' + encodeURIComponent('{{ $project["title"] }}'), '_blank');
}
</script>
@endpush