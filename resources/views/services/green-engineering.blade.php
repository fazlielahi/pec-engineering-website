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
                                        <img src="{{ asset('services/850-567-pec-green-building.png') }}" style="width: 350px; height: 226px;" alt="about-img">
                                    </div>
                                </div>
                                <div class="col-lg-12 wow fadeInUp" data-wow-delay=".7s">
                                    <div class="about-image-2 bg-cover"
                                        style="background-image: url('{{ asset('services/pec-GREEN-BUILDING.png') }}'); width: 479px; height: 300px;">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 mt-5 mt-lg-0">
                        <div class="about-content">
                            <div class="section-title">
                                <h6 class="wow fadeInUp">{{ __('lang.Green Engineering') }}</h6>
                                <h2 class="splt-txt wow">
                                    {{ __('lang.Sustainable Solutions') }} <br> {{ __('lang.for a Better Future') }}
                                </h2>
                            </div>
                            <p class="mt-3 mt-md-0 wow fadeInUp" data-wow-delay=".5s">
                                {{ __('lang.Green engineering represents our commitment to creating environmentally responsible and resource-efficient solutions throughout the entire lifecycle of a project. We integrate sustainable practices from initial design concepts to final construction and operation.') }}
                            </p>
                            <p class="mt-4 wow fadeInUp" data-wow-delay=".7s">
                                {{ __('lang.Our green engineering approach focuses on minimizing environmental impact while maximizing energy efficiency, utilizing renewable resources, and implementing innovative technologies that reduce carbon footprint and promote long-term sustainability.') }}
                            </p>
                            <p class="mt-4 wow fadeInUp" data-wow-delay=".9s">
                                {{ __('lang.We specialize in LEED-certified designs, solar energy integration, water conservation systems, and eco-friendly building materials that not only protect the environment but also provide cost-effective solutions for our clients.') }}
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
                                    <h3 class="splt-txt wow">{{ __('green-engineering.title') }}</h3>
                                    
                                    <h4>{{ __('green-engineering.introduction.title') }}</h4>
                                    <p class="mt-3">
                                        {{ __('green-engineering.introduction.content') }}
                                    </p>

                                    <h4 class="mt-4">{{ __('green-engineering.what_is_green_building.title') }}</h4>
                                    <p class="mt-3">
                                        {{ __('green-engineering.what_is_green_building.content') }}
                                    </p>

                                    <h4 class="mt-4">{{ __('green-engineering.collaboration.title') }}</h4>
                                    <p class="mt-3">
                                        {{ __('green-engineering.collaboration.intro') }}
                                    </p>
                                    <ul dir="rtl" class="mt-3">
                                        <li>{{ __('green-engineering.collaboration.stakeholders.architects') }}</li>
                                        <li>{{ __('green-engineering.collaboration.stakeholders.engineers') }}</li>
                                        <li>{{ __('green-engineering.collaboration.stakeholders.contractors') }}</li>
                                        <li>{{ __('green-engineering.collaboration.stakeholders.operators') }}</li>
                                    </ul>
                                    <p class="mt-3">
                                        {{ __('green-engineering.collaboration.conclusion') }}
                                    </p>

                                    <h4 class="splt-txt wow mt-4">{{ __('green-engineering.benefits.title') }}</h4>
                                    <ul dir="rtl">
                                        <li>{{ __('green-engineering.benefits.items.energy_efficiency') }}</li>
                                        <li>{{ __('green-engineering.benefits.items.emissions') }}</li>
                                        <li>{{ __('green-engineering.benefits.items.air_quality') }}</li>
                                        <li>{{ __('green-engineering.benefits.items.comfort') }}</li>
                                        <li>{{ __('green-engineering.benefits.items.costs') }}</li>
                                        <li>{{ __('green-engineering.benefits.items.value') }}</li>
                                    </ul>

                                    <h4 class="mt-4">{{ __('green-engineering.commitment.title') }}</h4>
                                    <p class="mt-3">
                                        {{ __('green-engineering.commitment.intro') }}
                                    </p>
                                    <div class="list-items" dir="rtl">
                                        <ul class="d-list">
                                            <li>
                                                <i class="far fa-chevron-double-left"></i>
                                                {{ __('green-engineering.commitment.principles.resources') }}
                                            </li>
                                            <li>
                                                <i class="far fa-chevron-double-left"></i>
                                                {{ __('green-engineering.commitment.principles.efficiency') }}
                                            </li>
                                            <li>
                                                <i class="far fa-chevron-double-left"></i>
                                                {{ __('green-engineering.commitment.principles.materials') }}
                                            </li>
                                            <li>
                                                <i class="far fa-chevron-double-left"></i>
                                                {{ __('green-engineering.commitment.principles.comfort') }}
                                            </li>
                                            <li>
                                                <i class="far fa-chevron-double-left"></i>
                                                {{ __('green-engineering.commitment.principles.standards') }}
                                            </li>
                                        </ul>
                                        <div class="icon-box">
                                            <i class="flaticon-balcony"></i>
                                            <h4>{{ __('green-engineering.title') }}</h4>
                                            <p>{{ __('lang.Sustainable Technology') }}</p>
                                        </div>
                                    </div>

                                    <h4 class="mt-4">{{ __('green-engineering.sustainability_dimensions.title') }}</h4>
                                    <ul class="mt-3" dir="rtl">
                                        <li><strong>{{ __('green-engineering.sustainability_dimensions.dimensions.planet.title') }}:</strong> {{ __('green-engineering.sustainability_dimensions.dimensions.planet.description') }}</li>
                                        <li><strong>{{ __('green-engineering.sustainability_dimensions.dimensions.people.title') }}:</strong> {{ __('green-engineering.sustainability_dimensions.dimensions.people.description') }}</li>
                                        <li><strong>{{ __('green-engineering.sustainability_dimensions.dimensions.profit.title') }}:</strong> {{ __('green-engineering.sustainability_dimensions.dimensions.profit.description') }}</li>
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
