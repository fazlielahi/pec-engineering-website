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
                                            {{ __('Years of') }} <br> {{ __('lang.Green Innovation') }}
                                        </h5>
                                    </div>
                                </div>
                                <div class="col-lg-7 col-md-7 wow fadeInUp" data-wow-delay=".5s">
                                    <div class="about-image-1">
                                        <img src="{{ asset('services/850-567-pec-risk-management.png') }}" style="width: 350px; height: 226px;" alt="about-img">
                                    </div>
                                </div>
                                <div class="col-lg-12 wow fadeInUp" data-wow-delay=".7s">
                                    <div class="about-image-2 bg-cover"
                                        style="background-image: url('{{ asset('services/pec-risk-management.png') }}'); width: 479px; height: 300px;">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 mt-5 mt-lg-0">
                        <div class="about-content">
                            <div class="section-title">
                                <h6 class="wow fadeInUp">{{ __('risk-management.title') }}</h6>
                                <h2 class="splt-txt wow">{{ __('risk-management.subtitle') }}</h2>
                            </div>
                            <p class="mt-3 mt-md-0 wow fadeInUp" data-wow-delay=".5s">
                                {{ __('risk-management.introduction.content') }}
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
                                    <h3 class="splt-txt wow">{{ __('risk-management.title') }}</h3>
                                    
                                    <h4>{{ __('risk-management.introduction.title') }}</h4>
                                    <p class="mt-3">
                                        {{ __('risk-management.introduction.content') }}
                                    </p>

                                    <h4 class="mt-4">{{ __('risk-management.what_is_risk_management.title') }}</h4>
                                    <p class="mt-3">
                                        {{ __('risk-management.what_is_risk_management.content') }}
                                    </p>

                                    <h4 class="mt-4">{{ __('risk-management.service_includes.title') }}</h4>
                                    <ul dir="rtl" class="mt-3">
                                        <li>{{ __('risk-management.service_includes.items.identification') }}</li>
                                        <li>{{ __('risk-management.service_includes.items.evaluation') }}</li>
                                        <li>{{ __('risk-management.service_includes.items.planning') }}</li>
                                        <li>{{ __('risk-management.service_includes.items.monitoring') }}</li>
                                        <li>{{ __('risk-management.service_includes.items.decision_making') }}</li>
                                    </ul>

                                    <h4 class="mt-4">{{ __('risk-management.risk_types.title') }}</h4>
                                    <ul dir="rtl" class="mt-3">
                                        <li>{{ __('risk-management.risk_types.items.design') }}</li>
                                        <li>{{ __('risk-management.risk_types.items.delays') }}</li>
                                        <li>{{ __('risk-management.risk_types.items.site_conditions') }}</li>
                                        <li>{{ __('risk-management.risk_types.items.accidents') }}</li>
                                        <li>{{ __('risk-management.risk_types.items.scope_changes') }}</li>
                                    </ul>

                                    <h4 class="mt-4">{{ __('risk-management.services.title') }}</h4>
                                    <ul dir="rtl" class="mt-3">
                                        <li>{{ __('risk-management.services.items.assessment') }}</li>
                                        <li>{{ __('risk-management.services.items.matrices') }}</li>
                                        <li>{{ __('risk-management.services.items.solutions') }}</li>
                                        <li>{{ __('risk-management.services.items.review') }}</li>
                                        <li>{{ __('risk-management.services.items.reports') }}</li>
                                    </ul>

                                    <h4 class="splt-txt wow mt-4">{{ __('risk-management.benefits.title') }}</h4>
                                    <ul dir="rtl">
                                        <li>{{ __('risk-management.benefits.items.safety') }}</li>
                                        <li>{{ __('risk-management.benefits.items.reduction') }}</li>
                                        <li>{{ __('risk-management.benefits.items.compliance') }}</li>
                                        <li>{{ __('risk-management.benefits.items.confidence') }}</li>
                                        <li>{{ __('risk-management.benefits.items.losses') }}</li>
                                    </ul>

                                    <h4 class="mt-4">{{ __('risk-management.results.title') }}</h4>
                                    <ul dir="rtl" class="mt-3">
                                        <li>{{ __('risk-management.results.items.stable') }}</li>
                                        <li>{{ __('risk-management.results.items.decisions') }}</li>
                                        <li>{{ __('risk-management.results.items.compliance') }}</li>
                                        <li>{{ __('risk-management.results.items.environment') }}</li>
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
