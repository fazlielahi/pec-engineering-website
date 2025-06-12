    <!-- Offcanvas Area Start -->
    <div class="fix-area">
        
        <div class="offcanvas__info">
            <div class="offcanvas__wrapper">
                <div class="offcanvas__content">
                    <div class="offcanvas__top mb-5 d-flex justify-content-between align-items-center">
                        <div class="offcanvas__logo">
                            <a href="/">
                                <img src="{{asset('pec.png')}}" alt="logo-img">
                            </a>
                        </div>
                        <div class="offcanvas__close">
                            <button>
                                <i class="fas fa-times"></i>
                            </button>
                        </div>
                    </div>

                    <div class="mobile-menu fix mb-3"></div>
                    <div class="offcanvas__contact">
                        <h4>Contact Info</h4>
                        <ul>
                            <li class="d-flex align-items-center">
                                <div class="offcanvas__contact-icon">
                                    <i class="fal fa-map-marker-alt"></i>
                                </div>
                                <div class="offcanvas__contact-text">
                                    <a target="_blank" href="#"> {{ __('complete_address') }}</a>
                                </div>
                            </li>
                            <li class="d-flex align-items-center">
                                <div class="offcanvas__contact-icon mr-15">
                                    <i class="fal fa-envelope"></i>
                                </div>
                                <div class="offcanvas__contact-text">
                                    <a href="mailto:info@pec.com.sa"><span class="mailto:info@pec.com.sa">info@pec.com.sa</span></a>
                                </div>
                            </li>

                            <li class="d-flex align-items-center">
                                <div class="offcanvas__contact-icon mr-15">
                                    <i class="far fa-phone"></i>
                                </div>
                                <div class="offcanvas__contact-text">
                                    <a href="tel:+966540619691">0540619691</a>
                                </div>
                            </li>
                        </ul>
                        <div class="header-button mt-4">
                           
                            <a href="{{route('localized.contact', ['lang' => app()->getLocale()])}}" class="theme-btn text-center">
                                Contact Us
                            </a>
                        </div>
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
        </div>
    </div>
    <div class="offcanvas__overlay"></div>

    <!-- Header Top Start -->
    <div class="header-top-section section-bg fix">
        <div class="container">
            <div class="header-top-wrapper">
                <ul class="contact-list">
                    <li class="menu-thumb">
                        <i class="fas fa-map-marker-alt"></i>
                        {{ __('lang.Al Orouba Road, Tulip Tower, Riyadh Saudi Arabia')}}
                    </li>
                </ul>
                <div class="top-right">
                    <ul class="contact-list">
                        <li>
                            <a href="mailto:info@pec.com.sa" class="link">info@pec.com.sa</a>
                        </li>
                    </ul>
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
    </div>

    <!-- Header Area Start -->
    <header>
        <div id="header-sticky" class="header-1">
            <div class="container">
                <div class="mega-menu-wrapper">
                    <div class="header-main">
                        <div class="header-left">
                            <div class="logo">
                                <a href="/" class="header-logo-2">
                                    <img src="{{asset('pec.png')}}" alt="logo-img">
                                </a>
                            </div>
                            <div class="mean__menu-wrapper">
                                <div class="main-menu">
                                    <nav id="mobile-menu">
                                        <ul>
                                            <li class="has-dropdown active menu-thumb">
                                                <a href="/">
                                                    {{ __('lang.Home')}}
                                                </a>

                                            </li>
                                            <li class="has-dropdown active d-xl-none">
                                                <a href="/" class="border-none">
                                                  {{ __('lang.Home')}}
                                                </a>

                                            </li>
                                            <li>
                                                <a href="/#about">{{ __('lang.About')}}</a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    {{ __('lang.Our Services')}}
                                                    <i class="fas fa-angle-down"></i>
                                                </a>
                                                <ul class="submenu">
                                                    <li><a href="{{route('localized.engineering-management', ['lang' => app()->getLocale()])}}">{{ __('lang.Engineering Project Management')}}</a></li>
                                                    <li><a href="{{route('localized.engineering-supervision', ['lang' => app()->getLocale()])}}">{{ __('lang.Engineering Supervision')}}</a></li>
                                                    <li><a href="{{route('localized.mechnical-design', ['lang' => app()->getLocale()])}}">{{ __('lang.Mechanical Designs')}}</a></li>
                                                    <li><a href="{{route('localized.structual-design', ['lang' => app()->getLocale()])}}">{{ __('lang.Structural Designs')}}</a></li>
                                                    <li><a href="{{route('localized.arch-design', ['lang' => app()->getLocale()])}}">{{ __('lang.Architectural Designs')}}</a></li>
                                                    <li><a href="{{route('localized.electrical-design', ['lang' => app()->getLocale()])}}">{{ __('lang.Electrical Designs')}}</a></li>
                                                    <li><a href="{{route('localized.interior-design', ['lang' => app()->getLocale()])}}">{{ __('lang.Interior Design')}}</a></li>
                                                    <li><a href="{{route('localized.green-engineering', ['lang' => app()->getLocale()])}}">{{ __('lang.Green Engineering')}}</a></li>
                                                    <li><a href="{{route('localized.bms', ['lang' => app()->getLocale()])}}">{{ __('lang.Building Management System')}}</a></li>
                                                    <li><a href="{{route('localized.risk-management', ['lang' => app()->getLocale()])}}">{{ __('lang.Risk Management')}}</a></li>
                                                    <li><a href="{{route('localized.aor', ['lang' => app()->getLocale()])}}">{{ __('lang.Authority of Requirements')}}</a></li>
                                                    <li><a href="{{route('localized.pmo', ['lang' => app()->getLocale()])}}">{{ __('lang.Project Management Office')}}</a></li>
                                                </ul>
                                            </li>

                                            <li>
                                                <a href="/#clients">
                                                {{ __('lang.Our Clients')}}
                                                </a>

                                            </li>
                                            <li>
                                                <a href="/#faq">
                                                {{ __('lang.FAQ')}}
                                                </a>

                                            </li>
                                            <li>
                                                
                                                <a href="{{route('localized.blog', ['lang' => app()->getLocale()])}}">
                                                {{ __('lang.Blog')}}
                                                </a>

                                            </li>
                                            <li>
                                                
                                                <a href="{{route('localized.contact', ['lang' => app()->getLocale()])}}">{{ __('lang.Contact Us')}}</a>

                                            </li>
                                            <li class="menu-thumb">

                                                {{-- language switcher --}}
                                                @php 
                                                    // Get current locale
                                                    $locale = App::getLocale();
                                                @endphp  

                                                @if ($locale === 'en') 
                                                    <a href="{{ route('lang.switch', 'ar') }}">العربية</a>
                                                @else
                                                    <a href="{{ route('lang.switch', 'en') }}">English</a>
                                                    
                                                @endif

                                            </li>
                                          
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                        <div class="header-right d-flex justify-content-end align-items-center">

                            <div class="header-button">
                                @php 
                                    use App\User;
                                    $user = session()->has('user_id') ? \App\User::find(session('user_id')) : null;
                                @endphp

                                @if($user)
                                      <div class="dropdown">
                                                <button class="btn dropdown-toggle d-flex align-items-center justify-content-between w-100" 
                                                style="background-color:rgb(238, 238, 238);min-width: 159px !important; color: #444; justify-content: flex-end !important;"
                                                 type="button" id="userDropdown" 
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                    <span class="me-2">{{ $user->name }}</span>
                                                    <img
                                                     src="{{ $user->photo ? asset('images/' . $user->photo) : asset('assets/img/user-image.png') }}"
                                                     class="rounded-circle me-1" width="30" height="30" style="object-fit: cover; border-radius: 50%; border: 1px solid rgb(173, 172, 172);" >
                                                </button>
                                                <ul class="dropdown-menu w-100" aria-labelledby="userDropdown">
                                                    <li>
                                                        <a class="dropdown-item" href="{{ route('localized.profile', ['lang' => app()->getLocale()]) }}">
                                                            My Profile
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="{{ route('localized.logout', ['lang' => app()->getLocale()]) }}">
                                                            Logout
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                @else
                                    <a href="{{route('localized.register', ['lang' => app()->getLocale()])}}" class="btn btn-sm  bg-red-2">Sign Up</a>
                                    <a href="{{route('localized.login', ['lang' => app()->getLocale()])}}" class="btn btn-sm  bg-red-2">Login</a>
                                @endif
                            </div>

                            <div class="header__hamburger d-xl-none my-auto">
                                <div class="sidebar__toggle">
                                    <i class="far fa-bars"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    <!-- bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" defer></script>
    </header>