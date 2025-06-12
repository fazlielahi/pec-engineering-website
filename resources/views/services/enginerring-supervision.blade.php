@extends('layouts.app')

@section('content')
    <!-- About Section Start -->
    <section class="about-section fix section-padding">
        <div class="container">
            <div class="about-wrapper mt-0">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="about-left-items">
                            <div class="dot-shape float-bob-y">
                                <img src="{{ asset('about/dot.png') }}" alt="shape-img">
                            </div>
                            <div class="row g-4">
                                <div class="col-lg-5 col-md-5 wow fadeInUp" data-wow-delay=".3s">
                                    <div class="about-counter-items">
                                        <h2><span class="count">10</span>+</h2>
                                        <h5>
                                            {{ __('lang.Years Of experience') }}
                                        </h5>
                                    </div>
                                </div>
                                <div class="col-lg-7 col-md-7 wow fadeInUp" data-wow-delay=".5s">
                                    <div class="about-image-1">
                                        <img src="{{ asset('services/850-567-Engineering supervision-pec.png') }}" style="width: 350px; height: 226px;" alt="about-img">
                                    </div>
                                </div>
                                <div class="col-lg-12 wow fadeInUp" data-wow-delay=".7s">
                                    <div class="about-image-2 bg-cover"
                                        style="background-image: url('{{ asset('services/PEC-PROJECTS-MANAGEMENT.png') }}'); width: 479px; height: 300px;">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 mt-5 mt-lg-0">
                        <div class="about-content">
                            <div class="section-title">
                                <h6 class="wow fadeInUp">{{ __('engineering-supervision.title') }}</h6>
                                <h2 class="splt-txt wow">{{ __('engineering-supervision.subtitle') }}</h2>
                            </div>
                            <p class="mt-3 mt-md-0 wow fadeInUp" data-wow-delay=".5s">
                                {{ __('engineering-supervision.introduction.content') }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="ScrollSmoother-content main-content">
        <!-- Service Details Section Start -->
        <section class="service-details-section fix">
            <div class="container">
                <div class="service-details-wrapper">
                    <div class="row g-5">
                        <div class="col-12 col-lg-8">
                            <div class="service-details-items">
                                <div class="single-sidebar-widget mb-0 d-md-none">
                                    <div class="download-service-doc">
                                        <a href="https://wa.me/966540909020" class="theme-btn text-center w-100 mb-3"><i
                                                class="fab fa-whatsapp"></i> تواصل معنا عبر واتساب</a>
                                        <a href="tel:+966540909020" class="theme-btn style-2 w-100 mb-3 text-center"><i
                                                class="fal fa-phone"></i> اتصل بنا</a>
                                    </div>
                                </div>
                                <div class="details-content">
                                    <h3 class="splt-txt wow">{{ __('engineering-supervision.title') }}</h3>
                                    
                                    <h4>{{ __('engineering-supervision.introduction.title') }}</h4>
                                    <p class="mt-3">
                                        {{ __('engineering-supervision.introduction.content') }}
                                    </p>

                                    <h4 class="mt-4">{{ __('engineering-supervision.what_is_supervision.title') }}</h4>
                                    <p class="mt-3">
                                        {{ __('engineering-supervision.what_is_supervision.content') }}
                                    </p>

                                    <h4 class="mt-4">{{ __('engineering-supervision.services.title') }}</h4>
                                    <ul dir="rtl" class="mt-3">
                                        <li>{{ __('engineering-supervision.services.items.review') }}</li>
                                        <li>{{ __('engineering-supervision.services.items.attendance') }}</li>
                                        <li>{{ __('engineering-supervision.services.items.inspection') }}</li>
                                        <li>{{ __('engineering-supervision.services.items.materials') }}</li>
                                        <li>{{ __('engineering-supervision.services.items.handover') }}</li>
                                        <li>{{ __('engineering-supervision.services.items.reports') }}</li>
                                        <li>{{ __('engineering-supervision.services.items.communication') }}</li>
                                        <li>{{ __('engineering-supervision.services.items.quality') }}</li>
                                    </ul>

                                    <h4 class="splt-txt wow mt-4">{{ __('engineering-supervision.pec_advantages.title') }}</h4>
                                    <ul dir="rtl">
                                        <li>{{ __('engineering-supervision.pec_advantages.items.team') }}</li>
                                        <li>{{ __('engineering-supervision.pec_advantages.items.reports') }}</li>
                                        <li>{{ __('engineering-supervision.pec_advantages.items.standards') }}</li>
                                        <li>{{ __('engineering-supervision.pec_advantages.items.documentation') }}</li>
                                        <li>{{ __('engineering-supervision.pec_advantages.items.reduction') }}</li>
                                    </ul>

                                    <h4 class="mt-4">{{ __('engineering-supervision.benefits.title') }}</h4>
                                    <ul dir="rtl" class="mt-3">
                                        <li>{{ __('engineering-supervision.benefits.items.reduction') }}</li>
                                        <li>{{ __('engineering-supervision.benefits.items.compliance') }}</li>
                                        <li>{{ __('engineering-supervision.benefits.items.reports') }}</li>
                                        <li>{{ __('engineering-supervision.benefits.items.delivery') }}</li>
                                        <li>{{ __('engineering-supervision.benefits.items.peace') }}</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-4">
                            <div class="main-sidebar">
                                <div class="single-sidebar-widget">
                                    <div class="download-service-doc">
                                        <a href="https://wa.me/966540909020" class="theme-btn text-center w-100 mb-3"><i
                                                class="fab fa-whatsapp"></i> تواصل معنا عبر واتساب</a>
                                        <a href="tel:+966540909020" class="theme-btn style-2 w-100 mb-3 text-center"><i
                                                class="fal fa-phone"></i> اتصل بنا</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Cta Section Start -->
        <section class="cta-banner-section-2">
            <div class="container">
                <div class="cta-banner-wrapper-2">
                    <div class="section-title-area">
                        <div class="section-title mb-0">
                            <h2 class="text-white wow fadeInUp" data-wow-delay=".5s">
                                {{ __('lang.We design spaces that reflect sustainability and quality') }}
                            </h2>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection

@section('scripts')
    <script>
        $(document).ready(function() {
            // Handle header visibility on scroll
            $(window).scroll(function() {
                var scrollTop = $(window).scrollTop();
                var header = $('header');

                // Show header when scrolled down 100px or more
                if (scrollTop > 100) {
                    header.addClass('show-header');
                } else {
                    header.removeClass('show-header');
                }
            });

            // Smooth scroll to content when clicking scroll indicator
            $('.scroll-indicator').click(function() {
                $('html, body').animate({
                    scrollTop: $('.main-content').offset().top
                }, 800);
            });
        });
    </script>
@endsection
