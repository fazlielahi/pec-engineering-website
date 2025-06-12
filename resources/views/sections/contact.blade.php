@extends('layouts.app')
@section('content')
<!--<< Breadcrumb Section Start >>-->
<div class="breadcrumb-wrapper section-padding bg-cover">
    <div class="container">
        <div class="page-heading">
            <h1 class="wow fadeInUp" data-wow-delay=".3s">{{ __('lang.Contact Us')}}</h1>
            <ul class="breadcrumb-items wow fadeInUp" data-wow-delay=".5s">
                <li>
                    <a href="index.html">
                     {{ __('lang.Home')}}
                    </a>
                </li>
                <li>
                    <i class="fas fa-chevron-right"></i>
                </li>
                <li>
                {{ __('lang.Contact Us')}}
                </li>
            </ul>
        </div>
    </div>
</div>

<!-- Contact Info Section Start -->
<section class="contact-Info-section section-padding pb-80 fix">
    <div class="container">
        <div class="contact-info-wrapper">
            <div class="row g-0">
                <div class="col-xl-6 col-lg-6">
                    <div class="google-map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d4440947.125493038!2d46.662522!3d24.717377!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e2f0318d9e03573%3A0xfff80a19ff68aadd!2sPEC%20Engineering%20Consultancy!5e1!3m2!1sen!2sus!4v1739874903840!5m2!1sen!2sus&z=15" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="contact-info-content">
                        <h2 class="splt-txt wow" >{{ __('lang.Contact Info')}}</h2>
                        <p class="wow fadeInUp" data-wow-delay=".5s">{{ __('lang.PEC is a leading engineering consulting company that provides innovative and specialized solutions in the fields of civil, electrical, and mechanical engineering, thanks to a qualified and specialized work team that always strives to achieve the highest standards of quality and professionalism.')}}

                        </p>
                        <div class="contact-info-area">
                            <div class="row g-4">
                                <div class="col-lg-6 wow fadeInUp" data-wow-delay=".2s">
                                    <div class="contact-info-items">
                                        <div class="icon">
                                            <i class="fas fa-phone-alt"></i>
                                        </div>
                                        <div class="content">
                                            <h3 class="splt-txt wow" >{{ __('lang.Phone')}}</h3>
                                            <h6><a href="tel:++966540619691" class="me-3">0540619691</a></h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 wow fadeInUp" data-wow-delay=".4s">
                                    <div class="contact-info-items">
                                        <div class="icon">
                                            <i class="fas fa-envelope"></i>
                                        </div>
                                        <div class="content">
                                            <h3 class="splt-txt wow" >{{ __('lang.email')}}</h3>
                                            <h6><a href="mailto:info@example.com"
                                                    class="link">info@pec.com.sa</a></h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 wow fadeInUp" data-wow-delay=".6s">
                                    <div class="contact-info-items">
                                        <div class="icon">
                                            <i class="fas fa-map-marker-alt"></i>
                                        </div>
                                        <div class="content">
                                            <h3 class="splt-txt wow" >{{ __('lang.Location')}}</h3>
                                            <h6>{{ __('lang.Al Orouba Road, Tulip Tower, Riyadh Saudi Arabia')}}</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 wow fadeInUp" data-wow-delay=".8s">
                                    <div class="contact-info-items">
                                        <div class="icon">
                                            <i class="fas fa-link"></i>
                                        </div>
                                        <div class="content">
                                            <h3 class="splt-txt wow">{{ __('lang.Website')}}</h3>
                                            <h6>www.pec.com.sa</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Contact Section Start -->
<section class="contact-section-4 fix section-padding pt-80">
    <div class="container">
        <div class="contact-wrapper-3">
            <div class="row">
                <div class="col-lg-6">
                    <div class="contact-content">
                        <div class="section-title">
                            <h6 class="wow fadeInUp">{{ __('lang.Contact Us')}}</h6>
                            <h2 class="splt-txt wow" >{{ __('lang.Get In Touch')}}</h2>
                        </div>
                        <form action="/contact" id="contact-form" method="GET"
                            class="contact-form-items mt-4 mt-md-0">
                            <div class="row g-4">
                                <div class="col-lg-6 wow fadeInUp">
                                    <div class="form-clt">
                                        <input type="text" name="name" id="name" placeholder="{{ __('lang.Your Name')}}">
                                    </div>
                                </div>
                                <div class="col-lg-6 wow fadeInUp">
                                    <div class="form-clt">
                                        <input type="text" name="email" id="email" placeholder="{{ __('lang.Your Email')}}">
                                    </div>
                                </div>
                                <div class="col-lg-6 wow fadeInUp">
                                    <div class="form-clt">
                                        <input type="text" name="number" id="number" placeholder="{{ __('lang.Phone Number')}}">
                                    </div>
                                </div>
                                <div class="col-lg-6 wow fadeInUp">
                                    <div class="form-clt">
                                        <input type="text" name="subject" id="subject" placeholder="{{ __('lang.Subject')}}">
                                    </div>
                                </div>
                                <div class="col-lg-12 wow fadeInUp">
                                    <div class="form-clt">
                                        <textarea name="message" id="message"
                                            placeholder="{{ __('lang.Message here...')}}"></textarea>
                                    </div>
                                </div>
                                <div class="col-lg-7 wow fadeInUp">
                                    <button type="submit" class="theme-btn padding-style">
                                    {{ __('lang.Submit Now')}} <i class="fas fa-long-arrow-right"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection