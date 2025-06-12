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
                                        <img src="{{ asset('services/850-567-Interior design-pec.png') }}" style="width: 350px; height: 226px;" alt="about-img">
                                    </div>
                                </div>
                                <div class="col-lg-12 wow fadeInUp" data-wow-delay=".7s">
                                    <div class="about-image-2 bg-cover"
                                        style="background-image: url('{{ asset('services/Interior design-pec.png') }}'); width: 479px; height: 300px;">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 mt-5 mt-lg-0">
                        <div class="about-content">
                            <div class="section-title">
                                <h6 class="wow fadeInUp">{{ __('interior-design.title') }}</h6>
                                <h2 class="splt-txt wow">{{ __('interior-design.subtitle') }}</h2>
                            </div>
                            <p class="mt-3 mt-md-0 wow fadeInUp" data-wow-delay=".5s">
                                {{ __('interior-design.introduction.content') }}
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
                                    <h3 class="splt-txt wow">{{ __('interior-design.title') }}</h3>
                                    
                                    <h4>{{ __('interior-design.introduction.title') }}</h4>
                                    <p class="mt-3">
                                        {{ __('interior-design.introduction.content') }}
                                    </p>

                                    <h4 class="mt-4">{{ __('interior-design.what_is_interior.title') }}</h4>
                                    <p class="mt-3">
                                        {{ __('interior-design.what_is_interior.content') }}
                                    </p>

                                    <h4 class="mt-4">{{ __('interior-design.services.title') }}</h4>
                                    <ul dir="rtl" class="mt-3">
                                        <li>{{ __('interior-design.services.items.concept') }}</li>
                                        <li>{{ __('interior-design.services.items.planning') }}</li>
                                        <li>{{ __('interior-design.services.items.materials') }}</li>
                                        <li>{{ __('interior-design.services.items.lighting') }}</li>
                                        <li>{{ __('interior-design.services.items.furniture') }}</li>
                                        <li>{{ __('interior-design.services.items.drawings') }}</li>
                                        <li>{{ __('interior-design.services.items.specs') }}</li>
                                        <li>{{ __('interior-design.services.items.renderings') }}</li>
                                        <li>{{ __('interior-design.services.items.supervision') }}</li>
                                    </ul>

                                    <h4 class="mt-4">{{ __('interior-design.standards.title') }}</h4>
                                    <ul dir="rtl" class="mt-3">
                                        <li>{{ __('interior-design.standards.items.sbc') }}</li>
                                        <li>{{ __('interior-design.standards.items.sustainability') }}</li>
                                        <li>{{ __('interior-design.standards.items.client') }}</li>
                                        <li>{{ __('interior-design.standards.items.comfort') }}</li>
                                    </ul>

                                    <h4 class="splt-txt wow mt-4">{{ __('interior-design.pec_advantages.title') }}</h4>
                                    <ul dir="rtl">
                                        <li>{{ __('interior-design.pec_advantages.items.understanding') }}</li>
                                        <li>{{ __('interior-design.pec_advantages.items.identity') }}</li>
                                        <li>{{ __('interior-design.pec_advantages.items.solutions') }}</li>
                                        <li>{{ __('interior-design.pec_advantages.items.coordination') }}</li>
                                        <li>{{ __('interior-design.pec_advantages.items.supervision') }}</li>
                                    </ul>

                                    <h4 class="mt-4">{{ __('interior-design.benefits.title') }}</h4>
                                    <ul dir="rtl" class="mt-3">
                                        <li>{{ __('interior-design.benefits.items.environment') }}</li>
                                        <li>{{ __('interior-design.benefits.items.value') }}</li>
                                        <li>{{ __('interior-design.benefits.items.costs') }}</li>
                                        <li>{{ __('interior-design.benefits.items.time') }}</li>
                                        <li>{{ __('interior-design.benefits.items.results') }}</li>
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
