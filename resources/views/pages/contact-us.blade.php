@extends('base')

@section('nomPage')
Property | Andora
@endsection

@section('css')

@endsection

@section('div_init')
<div class="main-header-area main-header-with-relative">

@endsection

@section('div_finish')
</div>
@endsection

@section('div_init2')
top-header-inner

@endsection

@section('div_init3')
<div class="row justify-content-center align-items-center">
                        
@endsection

@section('div_finish3')
</div>
@endsection

@section('content')


<!-- Start Page Banner Area -->
<div class="page-banner-area">
            <div class="container">
                <div class="page-banner-content">
                    <h2>Contact Us</h2>
                    <ul class="list">
                        <li>
                            <a href="{{ route('pages.acceuil') }}">Home</a>
                        </li>
                        <li>Contact Us</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- End Page Banner Area -->
        
        <!-- Start Contact Area -->
        <div class="contact-area ptb-120">
            <div class="container">
                <div class="row justify-content-center" data-cues="slideInUp">
                    <div class="col-lg-4 col-md-5">
                        <div class="contact-info-box">
                            <div class="box">
                                <div class="icon">
                                    <i class="ri-map-pin-line"></i>
                                </div>
                                <div class="info">
                                    <h4>Our Location</h4>
                                    <span>45/15 New alsala Avenew Booston town, Austria</span>
                                </div>
                            </div>
                            <div class="box">
                                <div class="icon">
                                    <i class="ri-phone-line"></i>
                                </div>
                                <div class="info">
                                    <h4>Phone Number</h4>
                                    <span>
                                        <a href="tel:00201068710594">+(002) 0106-8710-594</a>
                                    </span>
                                    <span>
                                        <a href="tel:00201068710588">+(002) 0106-8710-588</a>
                                    </span>
                                </div>
                            </div>
                            <div class="box">
                                <div class="icon">
                                    <i class="ri-mail-send-line"></i>
                                </div>
                                <div class="info">
                                    <h4>Our Email</h4>
                                    <span>
                                        <a href="https://templates.envytheme.com/cdn-cgi/l/email-protection#3d4e484d4d524f4954535b527d5c5359524f5c135e5250"><span class="__cf_email__" data-cfemail="66151316160914120f080009260708020914074805090b">[email&#160;protected]</span></a>
                                    </span>
                                    <span>
                                        <a href="https://templates.envytheme.com/cdn-cgi/l/email-protection#e0838f8e94818394a0898e868fce838f8d"><span class="__cf_email__" data-cfemail="b2d1dddcc6d3d1c6f2dbdcd4dd9cd1dddf">[email&#160;protected]</span></a>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-7">
                        <div class="contact-wrap-form">
                            <h3>Get In Touch</h3>
                            <form>
                                <div class="form-group">
                                    <label>Your Name</label>
                                    <input type="text" class="form-control" placeholder="Enter your name">
                                    <div class="icon">
                                        <i class="ri-user-3-line"></i>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Email Address</label>
                                    <input type="email" class="form-control" placeholder="Enter email address">
                                    <div class="icon">
                                        <i class="ri-mail-line"></i>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Your Phone</label>
                                    <input type="phone" class="form-control" placeholder="Enter your phone">
                                    <div class="icon">
                                        <i class="ri-phone-line"></i>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Your Subject</label>
                                    <input type="text" class="form-control" placeholder="Enter your subject">
                                    <div class="icon">
                                        <i class="ri-file-line"></i>
                                    </div>
                                </div>
                                <div class="form-group extra-top">
                                    <label>Your Message</label>
                                    <textarea class="form-control" placeholder="Your message here"></textarea>
                                    <div class="icon">
                                        <i class="ri-message-2-line"></i>
                                    </div>
                                </div>
                                <div class="contact-btn">
                                    <button type="submit" class="default-btn">Send Message</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Contact Area -->


@endsection

@section('script')



@endsection