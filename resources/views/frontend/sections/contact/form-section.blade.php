{{-- resources/views/frontend/sections/contact/form-section.blade.php --}}
<section class="contact-style-two">
    <div class="outer-container sec-pad">
        <div class="pattern-layer">
            <div class="pattern-1"></div>
            <div class="pattern-2"></div>
        </div>
        <figure class="image-layer"><img src="{{ asset('assets/images/resource/contact-1.png') }}" alt=""></figure>
        <div class="auto-container">
            <div class="row clearfix">
                <div class="col-lg-6 col-md-12 col-sm-12 title-column">
                    <div class="sec-title light">
                        <span class="sub-title">Drop a Line</span>
                        <h2>Let's Talk!... <br />Send Your Message</h2>
                        <p>Fill in the form and let us know what you need.</p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                    <div class="content-box">
                        @if(session('success'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                {{ session('success') }}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @endif

                        @if($errors->any())
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <ul class="mb-0">
                                    @foreach($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @endif

                        <div class="form-inner">
                            <form method="post" action="{{ route('contact.store') }}" id="contact-form" class="default-form"> 
                                @csrf
                                <div class="row clearfix">
                                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                        <label>First Name</label>
                                        <input type="text" name="first_name" placeholder="Your first name" value="{{ old('first_name') }}" required>
                                        @error('first_name')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                        <label>Last Name</label>
                                        <input type="text" name="last_name" placeholder="Your last name" value="{{ old('last_name') }}" required>
                                        @error('last_name')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                        <label>Company</label>
                                        <input type="text" name="company" placeholder="Company name" value="{{ old('company') }}">
                                        @error('company')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                        <label>Phone</label>
                                        <input type="text" name="phone" placeholder="Phone number" value="{{ old('phone') }}" required>
                                        @error('phone')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                        <label>Email Address</label>
                                        <input type="email" name="email" placeholder="Official email address" value="{{ old('email') }}" required>
                                        @error('email')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                        <label>Are you interested in?</label>
                                        <div class="select-box">
                                            <select class="selectmenu" name="service" required>
                                                <option value="">Select a Service</option>
                                                <option value="financial-planning" {{ old('service') == 'financial-planning' ? 'selected' : '' }}>Financial Planning</option>
                                                <option value="investment-management" {{ old('service') == 'investment-management' ? 'selected' : '' }}>Investment Management</option>
                                                <option value="tax-consulting" {{ old('service') == 'tax-consulting' ? 'selected' : '' }}>Tax Consulting</option>
                                                <option value="retirement-planning" {{ old('service') == 'retirement-planning' ? 'selected' : '' }}>Retirement Planning</option>
                                                <option value="estate-planning" {{ old('service') == 'estate-planning' ? 'selected' : '' }}>Estate Planning</option>
                                                <option value="risk-management" {{ old('service') == 'risk-management' ? 'selected' : '' }}>Risk Management</option>
                                            </select>
                                        </div>
                                        @error('service')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                        <label>Message</label>
                                        <textarea name="message" placeholder="Message goes here..." required>{{ old('message') }}</textarea>
                                        @error('message')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                        <div class="check-box">
                                            <input class="check" type="checkbox" id="privacy_policy" name="privacy_policy" value="1" {{ old('privacy_policy') ? 'checked' : '' }} required>
                                            <label for="privacy_policy">Click here to confirm you have read our <a href="{{ route('privacy') ?? '#' }}" target="_blank">privacy policy</a>*</label>
                                        </div>
                                        @error('privacy_policy')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 form-group message-btn">
                                        <button class="theme-btn btn-two" type="submit"><span>Send Message</span></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>