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
                                        <img src="{{ asset('services/850-567-Engineering project management-PEC.png') }}" style="width: 350px; height: 226px;" alt="about-img">
                                    </div>
                                </div>
                                <div class="col-lg-12 wow fadeInUp" data-wow-delay=".7s">
                                    <div class="about-image-2 bg-cover"
                                        style="background-image: url('{{ asset('services/Engineering project management-PEC-BANNER.png') }}'); width: 479px; height: 300px;">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 mt-5 mt-lg-0">
                        <div class="about-content">
                            <div class="section-title">
                                <h6 class="wow fadeInUp">{{ __('engineering-management.title') }}</h6>
                                <h2 class="splt-txt wow">{{ __('engineering-management.subtitle') }}</h2>
                            </div>
                            <p class="mt-3 mt-md-0 wow fadeInUp" data-wow-delay=".5s">
                                {{ __('engineering-management.introduction.content') }}
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
                                    <h3 class="splt-txt wow">{{ __('engineering-management.title') }}</h3>
                                    
                                    <h4>{{ __('engineering-management.introduction.title') }}</h4>
                                    <p class="mt-3">
                                        {{ __('engineering-management.introduction.content') }}
                                    </p>

                                    <h4 class="mt-4">{{ __('engineering-management.what_is_management.title') }}</h4>
                                    <p class="mt-3">
                                        {{ __('engineering-management.what_is_management.content') }}
                                    </p>

                                    <h4 class="mt-4">{{ __('engineering-management.services.title') }}</h4>
                                    <ul dir="rtl" class="mt-3">
                                        <li>{{ __('engineering-management.services.items.contracts') }}</li>
                                        <li>{{ __('engineering-management.services.items.schedule') }}</li>
                                        <li>{{ __('engineering-management.services.items.suppliers') }}</li>
                                        <li>{{ __('engineering-management.services.items.supervision') }}</li>
                                        <li>{{ __('engineering-management.services.items.progress') }}</li>
                                        <li>{{ __('engineering-management.services.items.problems') }}</li>
                                        <li>{{ __('engineering-management.services.items.coordination') }}</li>
                                        <li>{{ __('engineering-management.services.items.documentation') }}</li>
                                    </ul>

                                    <h4 class="mt-4">{{ __('engineering-management.objectives.title') }}</h4>
                                    <ul dir="rtl" class="mt-3">
                                        <li>{{ __('engineering-management.objectives.items.schedule') }}</li>
                                        <li>{{ __('engineering-management.objectives.items.costs') }}</li>
                                        <li>{{ __('engineering-management.objectives.items.quality') }}</li>
                                        <li>{{ __('engineering-management.objectives.items.safety') }}</li>
                                        <li>{{ __('engineering-management.objectives.items.satisfaction') }}</li>
                                    </ul>

                                    <h4 class="splt-txt wow mt-4">{{ __('engineering-management.pec_advantages.title') }}</h4>
                                    <ul dir="rtl">
                                        <li>{{ __('engineering-management.pec_advantages.items.team') }}</li>
                                        <li>{{ __('engineering-management.pec_advantages.items.systems') }}</li>
                                        <li>{{ __('engineering-management.pec_advantages.items.reports') }}</li>
                                        <li>{{ __('engineering-management.pec_advantages.items.experience') }}</li>
                                        <li>{{ __('engineering-management.pec_advantages.items.flexibility') }}</li>
                                    </ul>

                                    <h4 class="mt-4">{{ __('engineering-management.benefits.title') }}</h4>
                                    <ul dir="rtl" class="mt-3">
                                        <li>{{ __('engineering-management.benefits.items.execution') }}</li>
                                        <li>{{ __('engineering-management.benefits.items.monitoring') }}</li>
                                        <li>{{ __('engineering-management.benefits.items.reports') }}</li>
                                        <li>{{ __('engineering-management.benefits.items.management') }}</li>
                                        <li>{{ __('engineering-management.benefits.items.partner') }}</li>
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
