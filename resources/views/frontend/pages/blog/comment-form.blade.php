
{{-- resources/views/frontend/sections/blog/comment-form.blade.php --}}
<div class="comment-form-area">
    <div class="text-box">
        <h3>Leave Your Comments</h3>
        <p>Your email address will not be published. Required fields are marked *</p>
    </div>
    <div class="form-inner">
        <form action="{{ route('blog.comment') }}" method="post">
            @csrf
            <input type="hidden" name="post_id" value="{{ $post['id'] }}">
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                    <textarea name="message" placeholder="Comments" required></textarea>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 form-group">
                    <input type="text" name="name" placeholder="Name*" required>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 form-group">
                    <input type="email" name="email" placeholder="Email*" required>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                    <div class="check-box">
                        <input class="check" type="checkbox" id="checkbox1" name="save_info">
                        <label for="checkbox1">Save my name, email, and website in this browser for the next time I comment.</label>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 form-group message-btn">
                    <button type="submit" class="theme-btn btn-two">Post Comment</button>
                </div>
            </div>
        </form>
    </div>
</div>