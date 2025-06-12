<footer class="footer-section footer-bg">
    <div class="container">
        <div class="footer-widgets-wrapper">
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                    <div class="single-footer-widget">
                        <div class="widget-head">
                            <a href="/">
                                <img src="{{asset('pec.png')}}" style="width: 50%;" alt="logo-img">
                            </a>
                        </div>
                        <div class="footer-content">
                            <p>
                            {{ __('lang.At PEC, we take pride in delivering engineering designs that blend creativity and excellence to surpass our clients\' expectations. We are your ideal partner in turning visions into tangible realities by merging innovation with technology to achieve stunning results in every project.') }}

                            </p>

                            <div class="social-icon d-flex align-items-center">
                                <a href="https://www.facebook.com/peccorporation"><i class="fab fa-facebook-f"></i></a>
                                <a href="https://twitter.com/pec_corporation"><i class="fab fa-twitter"></i></a>
                                <a href="https://www.linkedin.com/company/pec-sa/"><i class="fab fa-linkedin"></i></a>
                                <a href="https://www.instagram.com/pec.company/"><i class="fab fa-instagram"></i></a>
                                <a href="https://api.whatsapp.com/send/?phone=966540909020&text&type=phone_number&app_absent=0"><i class="fab fa-whatsapp"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".5s">
                    <div class="single-footer-widget ml-100">
                        <div class="widget-head">
                            <h3>{{ __('lang.Quick links')}}</h3>
                        </div>
                        <ul class="list-items">
                            <li>
                                <a href="/#about">
                                {{ __('lang.About US')}}
                                </a>
                            </li>
                            <li>
                                <a href="/#services">
                                {{ __('lang.Our Services')}}
                                </a>
                            </li>
                            <li>
                                <a href="/contact">
                                {{ __('lang.Contact Us')}}
                                </a>
                            </li>
                            <li>
                                <a href="/blog">
                                {{ __('lang.Blog')}} 
                                </a>
                            </li>
                            <li>
                                <a href="/#faq">
                                {{ __('lang.FAQ')}}
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".9s">
                    <div class="single-footer-widget">
                        <div class="widget-head">
                            <h3>{{ __('lang.Contact Us')}}</h3>
                        </div>
                        <div class="footer-content">
                            <div class="contact-info-area">
                                <div class="contact-items">
                                    <div class="icon">
                                        <i class="fas fa-map-marker-alt"></i>
                                    </div>
                                    <div class="content">
                                        <p>{{ __('lang.Address')}}</p>
                                        <h4> {{ __('lang.Al Orouba Road, Tulip Tower, Riyadh Saudi Arabia')}}</h4>
                                    </div>
                                </div>
                                <div class="contact-items">
                                    <div class="icon">
                                        <i class="fas fa-phone-alt"></i>
                                    </div>
                                    <div class="content">
                                        <p>{{ __('lang.Phone')}}</p>
                                        <h4><a href="tel:+966540619691">0540619691</a></h4>
                                    </div>
                                </div>
                                <div class="contact-items">
                                    <div class="icon">
                                        <i class="fal fa-envelope"></i>
                                    </div>
                                    <div class="content">
                                        <p>{{ __('lang.email')}}</p>
                                        <h4> <a href="mailto:info@pec.com.sa" class="link">info@pec.com.sa</a></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <div class="footer-wrapper d-flex align-items-center justify-content-between">
                <p class="wow fadeInLeft color-2" data-wow-delay=".3s">
                    © <a href="">{{ __('lang.PEC Engineering')}}</a> {{date("Y")}} | {{ __('lang.All Rights Reserved') }}

                </p>
                <ul class="footer-menu wow fadeInRight" data-wow-delay=".5s">
                    <li>
                        <a href="">
                        {{ __('lang.Terms & Conditions') }}

                        </a>
                    </li>
                    <li>
                        <a href="">
                        {{ __('lang.Privacy Policy') }}

                        </a>
                    </li>
                    <li>
                        <a href="">
                        {{ __('lang.Contact Us')}}
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer>