<section class="about-section fix section-padding pt-0" id="about">
    <div class="container" style="direction: ltr;">
        <div class="about-wrapper">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="about-left-items">
                        <div class="dot-shape float-bob-y">
                            <img src="{{asset('assets/img/about/dot.png')}}" alt="shape-img">
                        </div>
                        <div class="row g-4">
                            <div class="col-lg-5 col-md-5 wow fadeInUp" data-wow-delay=".3s">
                                <div class="about-counter-items">
                                    <h2><span class="count">11</span>+</h2>
                                    <h5>
                                    {!! __('lang.Years Of experience') !!}
                                    </h5>
                                </div>
                            </div>
                            <div class="col-lg-7 col-md-7 wow fadeInUp" data-wow-delay=".5s">
                                <div class="about-image-1">
                                    <img src="{{asset('about/about-us-1.png')}}" alt="about-img">
                                </div>
                            </div>
                            <div class="col-lg-12 wow fadeInUp" data-wow-delay=".7s">
                                <div class="about-image-2 bg-cover" style="background-image: url('about/about-us-2.png');">
                                    <div class="client-items float-bob-y">
                                        <div class="content">
                                            <h4>{{ __('lang.PEC Engineering') }}</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mt-5 mt-lg-0">
                    <div class="about-content" style="direction: rtl;">
                        <div class="section-title">
                            <h6 class="wow fadeInUp">{{ __('lang.About US')}}</h6>

                        </div>
                        <p class="mt-3 mt-md-0 wow fadeInUp" data-wow-delay=".5s">
                            {!! __('lang.At PEC, we pride ourselves on being more than just an engineering design firm') !!}
                        </p>
                        <p class="mt-4 wow fadeInUp" data-wow-delay=".7s">
                        {!! __('lang.about_pec') !!}

                        </p>
                        <div class="about-button wow fadeInUp" data-wow-delay=".9s">
                            <a href="/profile.pdf" class="theme-btn">
                            {{ __('lang.Read More') }}
                                <i class="fas fa-long-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>