<section class="work-process section-padding" id='services'>
    <div class="container">
        <div class="section-title text-center">
            <h6 class="wow fadeInUp">{{ __('lang.Our Services') }}</h6>
            <h2 class="splt-txt wow text-capitalize">
                {!! __('lang.engineering_services') !!}
            </h2>
        </div>
        <div class="row">
            <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                <a href="{{route('localized.engineering-management', ['lang' => app()->getLocale()])}}" class="text-decoration-none">
                    <div class="work-process-items active">
                        <h6>01</h6>
                        <h3 class="splt-txt wow">{{ __('lang.Engineering Project Management') }}</h3>
                        <p>
                            {!! __('lang.PEC provides efficient project management services by planning, executing, and monitoring projects with precision, with an emphasis on quality and timely achievement of goals.') !!}
                        </p>
                        <div class="icon">
                            <img src="{{asset('icon/reg.png')}}" alt="{{ __('lang.Engineering Project Management') }}">
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".5s">
                <a href="{{route('localized.engineering-supervision', ['lang' => app()->getLocale()])}}" class="text-decoration-none">
                    <div class="work-process-items">
                        <h6>02</h6>
                        <h3 class="splt-txt wow">{{ __('lang.Engineering Supervision') }}</h3>
                        <p>
                            {!! __('lang.Our engineering supervision services include monitoring construction quality and ensuring compliance with technical specifications and standards, with integrated coordination among all parties to achieve superior outcomes.') !!}
                        </p>
                        <div class="icon">
                            <img src="{{asset('icon/sf.png')}}" alt="{{ __('lang.Engineering Supervision') }}">
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".7s">
                <a href="{{route('localized.mechnical-design', ['lang' => app()->getLocale()])}}" class="text-decoration-none">
                    <div class="work-process-items">
                        <h6>03</h6>
                        <h3 class="splt-txt wow">{{ __('lang.Mechanical Designs') }}</h3>
                        <p>
                            {!! __('lang.We innovate advanced mechanical designs that showcase the installation of central air-conditioning units and other technical solutions, while taking economic and functional aspects into consideration.') !!}
                        </p>
                        <div class="icon">
                            <img src="{{asset('icon/mech.png')}}" alt="{{ __('lang.Mechanical Designs') }}">
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".7s">
                <a href="{{route('localized.structual-design', ['lang' => app()->getLocale()])}}" class="text-decoration-none">
                    <div class="work-process-items">
                        <h6>04</h6>
                        <h3 class="splt-txt wow">{{ __('lang.Structural Designs') }}</h3>
                        <p>
                            {!! __('lang.We transform architectural ideas into robust and safe concrete models, while preserving the aesthetic appeal and intricate details that meet both technical and economic requirements.') !!}
                        </p>
                        <div class="icon">
                            <img src="{{asset('icon/structure.png')}}" alt="{{ __('lang.Structural Designs') }}">
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".7s">
                <a href="{{route('localized.arch-design', ['lang' => app()->getLocale()])}}" class="text-decoration-none">
                    <div class="work-process-items">
                        <h6>05</h6>
                        <h3 class="splt-txt wow">{{ __('lang.Architectural Designs') }}</h3>
                        <p>
                            {!! __('lang.At PEC, we transform clients needs into unique architectural spaces that blend innovation with personalization, creating environments that inspire and highlight the identity of each project.') !!}
                        </p>
                        <div class="icon">
                            <img src="{{asset('icon/arc.png')}}" alt="{{ __('lang.Architectural Designs') }}">
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".7s">
                <a href="{{route('localized.electrical-design', ['lang' => app()->getLocale()])}}" class="text-decoration-none">
                    <div class="work-process-items">
                        <h6>06</h6>
                        <h3 class="splt-txt wow">{{ __('lang.Electrical Designs') }}</h3>
                        <p>
                            {!! __('lang.We articulate the architectural concept through meticulous electrical designs that include lighting distribution and power systems, in line with the client\'s needs and sustainability goals.') !!}
                        </p>
                        <div class="icon">
                            <img src="{{asset('icon/ele.png')}}" alt="{{ __('lang.Electrical Designs') }}">
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".7s">
                <a href="{{route('localized.interior-design', ['lang' => app()->getLocale()])}}" class="text-decoration-none">
                    <div class="work-process-items">
                        <h6>07</h6>
                        <h3 class="splt-txt wow">{{ __('lang.Interior Design') }}</h3>
                        <p>
                            {!! __('lang.We offer comprehensive interior design services that balance beauty and function, creating harmonious spaces that reflect your personality while ensuring comfort and practicality.') !!}
                        </p>
                        <div class="icon">
                            <img src="{{asset('icon/finsh.png')}}" alt="{{ __('lang.Interior Design') }}">
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".7s">
                <a href="{{route('localized.green-engineering', ['lang' => app()->getLocale()])}}" class="text-decoration-none">
                    <div class="work-process-items">
                        <h6>08</h6>
                        <h3 class="splt-txt wow">{{ __('lang.Green Engineering') }}</h3>
                        <p>
                            {!! __('lang.We implement sustainable engineering solutions that reduce environmental impact while optimizing energy efficiency and resource utilization in all our projects.') !!}
                        </p>
                        <div class="icon">
                            <img src="{{asset('icon/inte.png')}}" alt="{{ __('lang.Green Engineering') }}">
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".7s">
                <a href="{{route('localized.bms', ['lang' => app()->getLocale()])}}" class="text-decoration-none">
                    <div class="work-process-items">
                        <h6>09</h6>
                        <h3 class="splt-txt wow">{{ __('lang.Building Management System') }}</h3>
                        <p>
                            {!! __('lang.We provide advanced building management systems that integrate and control various building services, ensuring optimal performance, energy efficiency, and occupant comfort.') !!}
                        </p>
                        <div class="icon">
                            <img src="{{asset('icon/reg.png')}}" alt="{{ __('lang.Building Management System') }}">
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".7s">
                <a href="{{route('localized.risk-management', ['lang' => app()->getLocale()])}}" class="text-decoration-none">
                    <div class="work-process-items">
                        <h6>10</h6>
                        <h3 class="splt-txt wow">{{ __('lang.Risk Management') }}</h3>
                        <p>
                            {!! __('lang.Our risk management services help identify, assess, and mitigate potential risks in construction projects, ensuring successful delivery while maintaining safety and quality standards.') !!}
                        </p>
                        <div class="icon">
                            <img src="{{asset('icon/sf.png')}}" alt="{{ __('lang.Risk Management') }}">
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".7s">
                <a href="{{route('localized.aor', ['lang' => app()->getLocale()])}}" class="text-decoration-none">
                    <div class="work-process-items">
                        <h6>11</h6>
                        <h3 class="splt-txt wow">{{ __('lang.Authority of Requirements') }}</h3>
                        <p>
                            {!! __('lang.We assist in managing authority requirements and obtaining necessary approvals, ensuring compliance with local regulations and smooth project progression.') !!}
                        </p>
                        <div class="icon">
                            <img src="{{asset('icon/mech.png')}}" alt="{{ __('lang.Authority of Requirements') }}">
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".7s">
                <a href="{{route('localized.pmo', ['lang' => app()->getLocale()])}}" class="text-decoration-none">
                    <div class="work-process-items">
                        <h6>12</h6>
                        <h3 class="splt-txt wow">{{ __('lang.Project Management Office') }}</h3>
                        <p>
                            {!! __('lang.Our PMO services provide centralized management of project portfolios, ensuring consistent project execution, resource optimization, and strategic alignment with organizational goals.') !!}
                        </p>
                        <div class="icon">
                            <img src="{{asset('icon/mech.png')}}" alt="{{ __('lang.Project Management Office') }}">
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>