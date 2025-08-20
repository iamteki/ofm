{{-- resources/views/frontend/sections/faq/sidebar.blade.php --}}
<div class="faq-sidebar">
    <div class="text-box">
        <h3>Ask your Question</h3>
        <p>Have a specific question? Send it to us and we'll get back to you promptly.</p>
    </div>
    
    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif
    
    <div class="form-inner">
        <form method="post" action="{{ route('faq.submit') }}">
            @csrf
            <div class="form-group">
                <input type="text" 
                       name="name" 
                       placeholder="Name *" 
                       value="{{ old('name') }}"
                       class="@error('name') is-invalid @enderror"
                       required>
                @error('name')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <input type="email" 
                       name="email" 
                       placeholder="Email *" 
                       value="{{ old('email') }}"
                       class="@error('email') is-invalid @enderror"
                       required>
                @error('email')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <div class="select-box">
                    <select name="category" class="selectmenu @error('category') is-invalid @enderror">
                        <option value="">Select Category</option>
                        @foreach($categories as $key => $category)
                            <option value="{{ $key }}" {{ old('category') == $key ? 'selected' : '' }}>
                                {{ $category }}
                            </option>
                        @endforeach
                    </select>
                </div>
                @error('category')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <textarea name="message" 
                          placeholder="Your question..."
                          class="@error('message') is-invalid @enderror">{{ old('message') }}</textarea>
                @error('message')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group message-btn">
                <button type="submit" class="theme-btn btn-two">Send Request</button>
            </div>
        </form>
    </div>
</div>