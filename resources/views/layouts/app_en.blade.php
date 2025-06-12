@php use Illuminate\Support\Str; @endphp
<!DOCTYPE html>
<html lang="en">
<!--<< Header Area >>-->

<head>
    <!-- ========== Meta Tags ========== -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="modinatheme">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="PEC engineering">
    <!-- ======== Page title ============ -->
    <title>PEC Engineering</title>
    <!--<< Favicon >>-->
    <link rel="shortcut icon" href="{{ asset('pec.png') }}">
    <!--<< Bootstrap min.css >>-->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <!--<< Font Awesome.css >>-->
    <link rel="stylesheet" href="{{ asset('assets/css/font-awesome.css') }}">
    <!--<< Animate.css >>-->
    <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">
    <!--<< Splitting Animation.css >>-->
    <link rel="stylesheet" href="{{ asset('assets/css/splitting.css') }}">
    <!--<< Magnific Popup.css >>-->
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}">
    <!--<< MeanMenu.css >>-->
    <link rel="stylesheet" href="{{ asset('assets/css/meanmenu.css') }}">
    <!--<< Swiper Bundle.css >>-->
    <link rel="stylesheet" href="{{ asset('assets/css/swiper-bundle.min.css') }}">
    <!--<< Nice Select.css >>-->
    <link rel="stylesheet" href="{{ asset('assets/css/nice-select.css') }}">
    <!--<< Main.css >>-->
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
    <!--<< Style.css >>-->
    <link rel="stylesheet" href="{{ asset('style.css') }}">

    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-7160927113250453"
     crossorigin="anonymous"></script>
    
    @yield('css')

    <style>
        section{
            background-color: #f2f4f7;
        }
    </style>

</head>

<body>

    <!-- Back To Top Start -->
    <div class="scroll-up">
        <svg class="scroll-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>

    <!-- Preloader Start -->
    <div id="preloader" class="preloader">
        <div class="animation-preloader">
            <div class="spinner"></div>
            <div class="txt-loading">
                <span data-text-preloader="P" class="letters-loading">P</span>
                <span data-text-preloader="E" class="letters-loading">E</span>
                <span data-text-preloader="C" class="letters-loading">C</span>

            </div>
            <p class="text-center">Loading</p>
        </div>
        <div class="loader">
            <div class="row">
                <div class="col-3 loader-section section-left">
                    <div class="bg"></div>
                </div>
                <div class="col-3 loader-section section-left">
                    <div class="bg"></div>
                </div>
                <div class="col-3 loader-section section-right">
                    <div class="bg"></div>
                </div>
                <div class="col-3 loader-section section-right">
                    <div class="bg"></div>
                </div>
            </div>
        </div>
    </div>

    @include('layouts.header')
    <div class="ScrollSmoother-content">

        @yield('content')

        <!-- Footer Section Start -->
        @include('layouts.footer')
    </div>
    <!--<< All JS Plugins >>-->
    <script src="{{ asset('assets/js/jquery-3.7.1.min.js') }}"></script>
    <!--<< Viewport Js >>-->
    <script src="{{ asset('assets/js/viewport.jquery.js') }}"></script>
    <!--<< Bootstrap Js >>-->
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <!--<< Nice Select Js >>-->
    <script src="{{ asset('assets/js/jquery.nice-select.min.js') }}"></script>
    <!--<< Waypoints Js >>-->
    <script src="{{ asset('assets/js/jquery.waypoints.js') }}"></script>
    <!--<< Counterup Js >>-->
    <script src="{{ asset('assets/js/jquery.counterup.min.js') }}"></script>
    <!--<< Swiper Slider Js >>-->
    <script src="{{ asset('assets/js/swiper-bundle.min.js') }}"></script>
    <!--<< MeanMenu Js >>-->
    <script src="{{ asset('assets/js/jquery.meanmenu.min.js') }}"></script>
    <!--<< Splitting Js >>-->
    <script src="{{ asset('assets/js/splitting.js') }}"></script>
    <!--<< Magnific Popup Js >>-->
    <script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
    <!--<< Wow Animation Js >>-->
    <script src="{{ asset('assets/js/wow.min.js') }}"></script>
    <!--<< Splitting Animation Js >>-->
    <script src="{{ asset('assets/js/splitting-animation.js') }}"></script>
    <!-- Gsap -->
    <!-- <script src="{{ asset('assets/js/gsap/gsap.min.js') }}"></script>
    <script src="{{ asset('assets/js/gsap/ScrollTrigger.min.js') }}"></script>
    <script src="{{ asset('assets/js/gsap/ScrollSmoother.min.js') }}"></script> -->
    <!--<< Main.js >>-->
    <script src="{{ asset('assets/js/main.js') }}"></script>
    

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" rel="stylesheet">

    <script>
    document.querySelectorAll('.like-btn').forEach(btn => {
        btn.addEventListener('click', e => {
        e.preventDefault();
        const url = btn.dataset.url;
        const token = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

        fetch(url, {
            method: 'POST',
            headers: {
            'X-CSRF-TOKEN': token,
            'X-Requested-With': 'XMLHttpRequest',
            'Accept': 'application/json'
            }
        })
        .then(res => res.json())
        .then(data => {
            // Update the count
            btn.querySelector('.like-count').textContent = data.count;

            // Swap the heart icon
            const icon = btn.querySelector('.heart-icon');
            icon.classList.remove('fa-regular');
            icon.classList.add('fa-solid');
        })
        .catch(err => console.error('Like error:', err));
        });
    });

    
    </script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>

        $(document).ready(function () {
            $('.read-comments-btn').on('click', function (e) {
                e.preventDefault();
                const blogId = $(this).data('blog-id');

                $('#show-comments-' + blogId).stop(true, true).slideDown('slow');
                $('#blog-image-' + blogId).stop(true, true).slideUp('slow');
                $(this).closest('.read-comments-wrapper').fadeOut('fast');
            });

            // Reset when modal is hidden
            $('.modal').on('hidden.bs.modal', function () {
                const modal = $(this);

                // Find blog ID from modal ID (editModal{id})
                const blogIdMatch = modal.attr('id').match(/editModal(\d+)/);
                if (blogIdMatch) {
                    const blogId = blogIdMatch[1];

                    $('#show-comments-' + blogId).hide(); // Hide comments
                    $('#blog-image-' + blogId).slideDown('fast'); // Show image again
                    modal.find('.read-comments-wrapper').fadeIn('fast'); // Restore the button
                }
            });
        });

    </script>


    <script>

        // Add this to the existing JavaScript in your blog page
    // This replaces the modal code with a direct link to the user blogs page

    $(document).on('click', '.show-blogs', function(e) {
        e.preventDefault();
        var userId = $(this).data('user');
        var currentLang = document.documentElement.lang || 'en';
        // Only handle AJAX if sidebar exists
        if ($('.sidebar-right').length > 0) {
            // Show the sidebar
            $('.sidebar-right').addClass('active');
            // Show loading state
            $('#user-profile-container').html('<div class="text-center my-5"><i class="fa fa-spinner fa-spin fa-2x"></i><p class="mt-2">Loading user blogs...</p></div>');
            // Get user blogs via AJAX
            $.ajax({
                url: '/' + currentLang + '/user-blogs/' + userId,
                type: 'GET',
                dataType: 'html',
                success: function(response) {
                    var responseHTML = $(response);
                    var userProfile = responseHTML.find('.card.shadow-sm').first();
                    var userBlogs = responseHTML.find('.blog-boxes').html();
                    if (!userProfile.length || !userBlogs) {
                        userProfile = responseHTML.find('.d-flex.align-items-center.mb-3').closest('.card');
                        userBlogs = responseHTML.find('.single-sidebar-widget').html();
                    }
                    if(userProfile.length || userBlogs) {
                        var html = '';
                        if (userProfile.length) {
                            html += '<div class="user-profile-header mb-4">' + userProfile.html() + '</div>';
                        }
                        if (userBlogs) {
                            html += '<div class="row g-4">' + userBlogs + '</div>';
                        }
                        $('#user-profile-container').html(html);
                    } else {
                        var contentArea = responseHTML.find('.section-padding .container').html();
                        if (contentArea) {
                            $('#user-profile-container').html(contentArea);
                        } else {
                            $('#user-profile-container').html(
                                '<div class="alert alert-warning">' +
                                '<i class="fa fa-exclamation-circle me-2"></i>' +
                                'Could not load user blogs content' +
                                '</div>'
                            );
                        }
                    }
                },
                error: function(xhr, status, error) {
                    $('#user-profile-container').html(
                        '<div class="alert alert-danger">' +
                        '<i class="fa fa-exclamation-circle me-2"></i>' +
                        'Failed to load user blogs: ' + error +
                        '</div>'
                    );
                    console.error('AJAX error:', error);
                }
            });
        }
        // else: do nothing (no redirect)
    });
    
    // Close sidebar when clicking the close button
    $(document).on('click', '.close-sidebar', function(e) {
        // Hide the sidebar
        $('.sidebar-right').removeClass('active');
        
        // Clear the sidebar container contents after the animation completes
        setTimeout(function() {
            $('#user-profile-container').html('');
        }, 300);
    });
    </script>


    <script>
        // let english = document.getElementById('english');
        // let arabic = document.getElementById('arabic');
        // let lctn = document.querySelectorAll('#lctn');
        // let dir = document.querySelectorAll('#dir');
        // let home = document.querySelectorAll('#home');
        // let header = document.getElementById('header');
        // let abut = document.getElementById('abut');
        // let serv = document.querySelectorAll('#serv');

        // let epm = document.querySelectorAll('#epm');
        // let es = document.querySelectorAll('#es');
        // let md = document.querySelectorAll('#md');
        // let sd = document.querySelectorAll('#sd');
        // let ad = document.querySelectorAll('#ad');
        // let ed = document.querySelectorAll('#ed');
        // let fad = document.querySelectorAll('#fad');
        // let iaed = document.querySelectorAll('#iaed');

        // let cnt = document.getElementById('cnt');
        // let faqq = document.getElementById('faqq');
        // let blg = document.getElementById('blg');

        // let cntus = document.querySelectorAll('#cntus');


        // //slider
        // let slidersec = document.getElementById('slidersec');
        // let fnt = document.querySelectorAll('#fnt');
        // let submenu = document.querySelector('.submenu'); // Select the submenu
        // let items = submenu.querySelectorAll('li a');
        // let hpcs = document.getElementById('hpcs');

        // //about
        // let yofx = document.getElementById('yofx');
        // let abus = document.getElementById('abus');
        // let wpr = document.getElementById('wpr');
        // let specs = document.getElementById('specs');
        // let redmr = document.getElementById('redmr');
        // //services
        // let our_ser = document.getElementById('our_ser');
        // let woffs = document.getElementById('woffs');

        // let epm1s = document.getElementById('epm1s');
        // let pppr = document.getElementById('pppr');


        // let engswe = document.getElementById('engswe');
        // let ourspase = document.getElementById('ourspase');

        // let mdesb = document.getElementById('mdesb');
        // let weubbs = document.getElementById('weubbs');

        // let sdes = document.getElementById('sdes');
        // let wetranside = document.getElementById('wetranside');


        // let adesn = document.getElementById('adesn');
        // let apeclin = document.getElementById('apeclin');

        // let edens = document.getElementById('edens');
        // let weacdes = document.getElementById('weacdes');

        // let fndws = document.getElementById('fndws');
        // let wfadesasn = document.getElementById('wfadesasn');


        // let iadases = document.getElementById('iadases');
        // let wdeinter = document.getElementById('wdeinter');
        // //acheviement
        // let orac = document.getElementById('orac');
        // let wtprin = document.getElementById('wtprin');
        // let imouap = document.getElementById('imouap');
        // let omupal = document.getElementById('omupal');
        // let clienste = document.getElementById('clienste');
        // let pdone = document.getElementById('pdone');
        // let tmem = document.getElementById('tmem');
        // let clrev = document.getElementById('clrev');
        // let awnp = document.getElementById('awnp');

        // //porfolio
        // let ltprot = document.getElementById('ltprot');
        // let exterior = document.getElementById('exterior');
        // //testomonial

        // let ctn = document.getElementById('ctn');
        // let arinb = document.getElementById('arinb');
        // //Faq
        // let faqsfa = document.getElementById('faqsfa');
        // let atbtcc = document.getElementById('atbtcc');
        // let belowss = document.getElementById('belowss');
        // let pcc = document.getElementById('pcc');
        // let wtkpal = document.getElementById('wtkpal');
        // let whtser = document.getElementById('whtser');
        // let wspadran = document.getElementById('wspadran');
        // let iadesas = document.getElementById('iadesas');
        // let upalnad = document.getElementById('upalnad');
        // let encpre = document.getElementById('encpre');
        // let hdpechpe = document.getElementById('hdpechpe');
        // let ourapon = document.getElementById('ourapon');
        // let uyuv = document.getElementById('uyuv');
        // let cdepr = document.getElementById('cdepr');
        // let acdw = document.getElementById('acdw');
        // let whsetpec = document.getElementById('whsetpec');
        // let actpecof = document.getElementById('actpecof');
        // let bouncretive = document.getElementById('bouncretive');
        // let clienapr = document.getElementById('clienapr');
        // let ctoqpr = document.getElementById('ctoqpr');
        // let hlong = document.getElementById('hlong');
        // let ttrac = document.getElementById('ttrac');
        // let fincad = document.getElementById('fincad');
        // let clpnad = document.getElementById('clpnad');


        // //footer
        // let fbsdd = document.getElementById('fbsdd');
        // let qlin = document.getElementById('qlin');
        // let adafgs = document.getElementById('adafgs');
        // let sasss = document.getElementById('sasss');
        // let conse = document.querySelectorAll('#conse');
        // let bgsdd = document.getElementById('bgsdd');
        // let fqssas = document.getElementById('fqssas');
        // let adds = document.getElementById('adds');
        // let phnn = document.getElementById('phnn');
        // let emnn = document.getElementById('emnn');
        // let alr = document.getElementById('alr');

        // setLanguge('arabic');

        // let name = localStorage.getItem('lang');

        // arabic.onclick = () => {
        //     setLanguge('arabic');
        //     localStorage.setItem('lang', 'arabic');
        // }

        // english.onclick = () => {
        //     setLanguge('english');
        //     localStorage.setItem('lang', 'english');


        // }
        // onload = () => {
        //     setLanguge(name);
        // }

        // function setLanguge(getLanguge) {
        //     if (getLanguge == "arabic") {
        //         arabic.style.display = "none";
        //         english.style.display = "inline";


        //         lctn.forEach(lctns => {
        //             lctns.innerHTML = "طريق العروبة, برج توليب، الدور الثالث الرياض، السعودية";
        //             lctns.style.fontFamily = "Noto Kufi Arabic";
        //         });
        //         header.style.fontFamily = "Noto Kufi Arabic";
        //         dir.forEach(ex => {
        //             ex.style.direction = "rtl";
        //         });
        //         home.forEach(hm => {
        //             hm.innerHTML = "الرئيسية";
        //         });
        //         abut.innerHTML = "من نحن";


        //         serv.forEach(i => {
        //             i.innerHTML = "خدماتنا ";

        //         });
        //         epm.forEach(i => {
        //             i.innerHTML = "إدارة المشاريع الهندسية";

        //         });
        //         es.forEach(i => {
        //             i.innerHTML = "الإشراف الهندسي";


        //         });

        //         md.forEach(i => {
        //             i.innerHTML = "التصاميم الميكانيكية";
        //         });

        //         sd.forEach(i => {
        //             i.innerHTML = "التصاميم الإنشائية";

        //         });
        //         ad.forEach(i => {
        //             i.innerHTML = "لتصاميم المعمارية";


        //         });
        //         ed.forEach(i => {
        //             i.innerHTML = "التصاميم الكهربائية";
        //         });
        //         fad.forEach(i => {
        //             i.innerHTML = "الفرش والتصميم";

        //         });
        //         iaed.forEach(i => {
        //             i.innerHTML = "التصاميم الداخلية والخارجية";


        //         });

        //         cnt.innerHTML = "عملائنا";
        //         faqq.innerHTML = "الأسئلة الشائعة";
        //         blg.innerHTML = "مقالاتنا";
        //         cntus.innerHTML = "تواصل معنا";
        //         cntus.forEach(cntuss => {
        //             cntuss.innerHTML = "تواصل معنا";
        //         });
        //         fnt.forEach(font => {
        //             font.style.fontFamily = "Noto Kufi Arabic";
        //         });
        //         items.forEach(item => {
        //             item.style.textAlign = 'right'; // Set text alignment to right
        //         });
        //         //slider
        //         if (slidersec) {
        //             slidersec.innerHTML = "تصاميم  هندسية  <br/> تفوق  الخيال ";
        //             slidersec.style.fontFamily = "Noto Kufi Arabic";
        //             slidersec.style.textAlign = "center";
        //             slidersec.style.marginRight = "25px";

        //             hpcs.innerHTML = "اراء العملاء";
        //         }



        //         //about

        //         if (yofx) {
        //             yofx.innerHTML = "سنوات الخبرة"
        //             yofx.style.fontFamily = "Noto Kufi Arabic";
        //             abus.innerHTML = "من نحن";
        //             wpr.innerHTML = "في PEC نفخر بأننا أكثر من مجرد شركة تصميم هندسي";
        //             specs.innerHTML = "PEC هي شركة متخصصة في تقديم خدمات التصميم الهندسي المبتكر الذي يتخطى حدود التقليدي، مع تركيز دائم على تلبية احتياجات العميل بدقة وكفاءة. بفضل خبرتنا الواسعة وروح الإبداع المتجددة، نسعى دائمًا لتقديم حلول هندسية تلبي معايير الجودة العالمية وتساهم في إحداث فرق حقيقي في عالم التصميم.";
        //             redmr.innerHTML = "المزيد";
        //         }



        //         //servic
        //         if (our_ser) {
        //             our_ser.innerHTML = "خدماتنا";
        //             woffs.innerHTML = "في شركة PEC نقدم مجموعة متكاملة من الخدمات الهندسية";
        //             woffs.style.fontFamily = "Noto Kufi Arabic";
        //             epm1s.innerHTML = "إدارة المشاريع الهندسية";
        //             pppr.innerHTML = "شركة PEC تقدم خدمات إدارة المشاريع الهندسية بكفاءة عالية من خلال تخطيط وتنفيذ ومراقبة المشاريع بدقة، مع التركيز على الجودة وتحقيق الأهداف في الوقت المحدد.";
        //             engswe.innerHTML = "الإشراف الهندسي";
        //             ourspase.innerHTML = "خدمات الإشراف الهندسي لدينا تشمل متابعة جودة البناء وضمان مطابقة المواصفات والمعايير الفنية، مع تنسيق متكامل بين جميع الأطراف لتحقيق نتائج متفوقة.";
        //             mdesb.innerHTML = "التصاميم الميكانيكية";
        //             sdes.innerHTML = "التصاميم الإنشائية";
        //             wetranside.innerHTML = "نحول الأفكار المعمارية إلى نماذج خرسانية متينة وآمنة، مع الحفاظ على الطابع الجمالي والتفاصيل الدقيقة التي تلبي المتطلبات الفنية والاقتصادية.";
        //             adesn.innerHTML = "التصاميم المعمارية";
        //             apeclin.innerHTML = "في PEC، نحول احتياجات العملاء إلى مساحات معمارية فريدة تجمع بين الابتكار والخصوصية، لتوفير بيئات تلهم وتبرز هوية كل مشروع.";
        //             edens.innerHTML = "التصاميم الكهربائية";
        //             weacdes.innerHTML = "نوضح الفكرة المعمارية من خلال تصميمات كهربائية متقنة تشمل توزيع الإضاءة وأنظمة الطاقة، بما يتماشى مع احتياجات العميل ويحقق الاستدامة.";
        //             fndws.innerHTML = "الفرش والتصميم";
        //             wfadesasn.innerHTML = "نقدم مجموعة متنوعة من أنماط الأثاث والتصميم الداخلي التي تعكس ذوقك الخاص، لتتحول كل مساحة إلى بيئة تجمع بين الأناقة والراحة.";
        //             iadases.innerHTML = "التصاميم الداخلية والخارجية";
        //             wdeinter.innerHTML = "نصمم مساحات داخلية وخارجية تجمع بين الجمالية والوظيفية، مما يخلق بيئات متوازنة تعبر عن أسلوب حياة عصري ومبتكر";
        //             service_title9.innerHTML = "إصدار التراخيص";
        //             service_description9.innerHTML = "في PEC، نقدم خدمات متكاملة لإصدار التراخيص اللازمة لمشاريعكم بكفاءة عالية وسرعة في الإنجاز.";
        //             service_title10.innerHTML = "إعادة التدوير";
        //             service_description10.innerHTML = "تلتزم PEC بمبادئ الاستدامة من خلال تقديم حلول متطورة لإعادة تدوير مخلفات البناء والهدم.";
        //         }
        //         //achievement
        //         if (orac) {
        //             orac.innerHTML = "إنجازاتنا";
        //             wtprin.innerHTML = "<strong>في PEC، </strong>  نفخر بالمسيرة المميزة التي قطعناها في عالم التصميم الهندسي والابتكار.";
        //             imouap.innerHTML = "<strong>تنفيذ مشاريع معمارية مميزة: <br/></strong> قمنا بتصميم وتنفيذ مجموعة من المشاريع المعمارية التي تجمع بين الجمال والوظيفية، مما ساهم في تحسين جودة الحياة وتوفير بيئات عمل وسكن عصرية.";
        //             omupal.innerHTML = "<strong>ابتكارات في التخطيط الحضري: <br/></strong> شاركنا في تطوير خطط حضرية متكاملة ساعدت في إعادة تصور مساحات المدن وتوفير حلول مستدامة للتحديات العمرانية المعاصرة.";
        //             clienste.innerHTML = " <strong>تحقيق رضا العملاء: <br/></strong> نعتز برضا عملائنا وثقتهم بنا، حيث تلقينا العديد من الشهادات والتوصيات التي تؤكد نجاحنا في تحويل رؤاهم إلى واقع ملموس.";
        //             pdone.innerHTML = " مشروع منجز";
        //             tmem.innerHTML = "عضو بالفريق";
        //             clrev.innerHTML = " تقييم من العملاء";
        //             awnp.innerHTML = "جائزة فائزة";
        //         }
        //         //porfolio
        //         if (exterior) {
        //             exterior.innerHTML = "التصميم الخارجي";
        //             exterior.style.fontFamily = "Noto Kufi Arabic";
        //         }
        //         if (ltprot) {
        //             ltprot.innerHTML = "التصميم الداخلي ";
        //             ltprot.style.fontFamily = "Noto Kufi Arabic";

        //             ctn.innerHTML = "اراء العملاء";
        //             arinb.innerHTML = "اراء عملائنا الاعزاء من خرائط جوجل";
        //         }

        //         //faq
        //         if (faqsfa) {
        //             faqsfa.innerHTML = "الأسئلة الشائعة (FAQ)";
        //             atbtcc.innerHTML = "في PEC، نؤمن بأن التواصل الواضح هو أساس الشراكات الناجحة.";
        //             belowss.innerHTML = "فيما يلي قائمة ببعض الأسئلة الأكثر تكرارًا التي نتلقاها من عملائنا، مع إجاباتها التي توضح منهجنا وخدماتنا والتزامنا بالتميز. إذا كان لديك أي استفسارات أخرى، لا تتردد في التواصل معنا.";
        //             pcc.innerHTML = "مشروع منجز";
        //             wtkpal.innerHTML = "نفخر بإرث من التميز والابتكار. لقد زودتنا خبرتنا الواسعة في مختلف الصناعات بالقدرة على تقديم حلول مبتكرة وفعالة ومستدامة لكل تحدٍ نواجهه. كل مشروع يُعد شهادة على التزامنا بالجودة، والاهتمام بأدق التفاصيل، وفهمنا العميق لاحتياجات عملائنا.";
        //             whtser.innerHTML = "ما هي الخدمات التي تقدمها شركة PEC؟";
        //             wspadran.innerHTML = "نحن متخصصون في مجموعة واسعة من خدمات التصميم الهندسي، والتي تشمل:";
        //             iadesas.innerHTML = "<strong>التصميم المعماري المبتكر:</strong> تحويل الأفكار إلى حلول معمارية جذابة وعملية.";
        //             upalnad.innerHTML = "<strong>تخطيط المدن والتطوير الحضري:</strong> إنشاء مساحات حضرية مستدامة ومستقبلية.";
        //             encpre.innerHTML = "<strong>لاستشارات الهندسية:</strong>  تقديم الخبرة الفنية والدعم في جميع مراحل المشروع.";
        //             hdpechpe.innerHTML = "كيف تتعامل PEC مع كل مشروع؟";
        //             ourapon.innerHTML = "منهجنا يعتمد على التعاون والابتكار:";
        //             uyuv.innerHTML = "<strong>فهم رؤيتك:</strong> نبدأ بمناقشة أفكارك واحتياجاتك وتطلعاتك.";
        //             cdepr.innerHTML = "<strong>عملية تصميم مخصصة: </strong> يقوم فريقنا بتطوير خطة تصميم تناسب احتياجاتك الخاصة.";
        //             acdw.innerHTML = "<strong>الاهتمام بالتفاصيل:</strong> نضمن تنفيذ كل عنصر من عناصر مشروعك بأعلى معايير الجودة والدقة.";
        //             whsetpec.innerHTML = "ما الذي يميز PEC عن شركات التصميم الأخرى؟";
        //             whsetpec.style.textAlign = "right";
        //             actpecof.innerHTML = "نفخر في PEC بما نقدمه من:";
        //             bouncretive.innerHTML = "<strong>إبداع بلا حدود: </strong> نسعى دائمًا لتجاوز المألوف بتقديم تصاميم فريدة ومبتكرة.";
        //             clienapr.innerHTML = "<strong>نهج يركز على العميل:</strong> رؤيتك هي محور عملنا؛ نعمل عن كثب معك لتحويل أفكارك إلى واقع ملموس.";
        //             ctoqpr.innerHTML = "<strong>التزام بالجودة والدقة:  </strong>  نضمن تنفيذ مشاريعنا وفقًا لأعلى معايير الاحترافية والتفاني في العمل.";
        //             hlong.innerHTML = "كم يستغرق الوقت لإنجاز المشروع؟";
        //             ttrac.innerHTML = "تختلف المدة الزمنية لإتمام المشاريع حسب نطاق وتعقيد كل مشروع:";
        //             fincad.innerHTML = "<strong>من الاستشارة الأولية حتى التصميم النهائي:  </strong> قد تستغرق المشاريع الصغيرة بضعة أسابيع، في حين قد تحتاج المشاريع الكبيرة والمعقدة إلى عدة أشهر.";
        //             clpnad.innerHTML = "<strong>لتخطيط التعاوني:  </strong> نعمل معك خلال كافة مراحل المشروع لضمان تحقيق المعالم الزمنية المطلوبة والالتزام بالمواعيد المحددة.";
        //         }
        //         //footer
        //         fbsdd.innerHTML = "PEC هي شركة متخصصة في تقديم خدمات التصميم الهندسي المبتكر الذي يتخطى حدود التقليدي، مع تركيز دائم على تلبية احتياجات العميل بدقة وكفاءة. بفضل خبرتنا الواسعة وروح الإبداع المتجددة، نسعى دائمًا لتقديم حلول هندسية تلبي معايير الجودة العالمية وتساهم في إحداث فرق حقيقي في عالم التصميم.";
        //         qlin.innerHTML = "روابط سريعة";
        //         adafgs.innerHTML = "من نحن";
        //         sasss.innerHTML = "خدماتنا";
        //         conse.forEach(i => {
        //             i.innerHTML = 'تواصل معنا';
        //         });
        //         bgsdd.innerHTML = "مقالاتنا";
        //         fqssas.innerHTML = "الأسئلة الشائعة";
        //         adds.innerHTML = "العنوان";
        //         phnn.innerHTML = "الهاتف";
        //         emnn.innerHTML = "البريد الالكتروني";
        //         alr.innerHTML = "جميع الحقوق محفوظة";
        //     } else if (getLanguge == "english") {


        //         english.style.display = "none";
        //         arabic.style.display = "inline";
        //         lctn.innerHTML = " Al Orouba Road, Tulip Tower, Riyadh Saudi Arabia";
        //         lctn.forEach(lctns => {
        //             lctns.innerHTML = " Al Orouba Road, Tulip Tower, Riyadh Saudi Arabia";

        //         });
        //         dir.forEach(ex => {
        //             ex.style.direction = "ltr";
        //         });
        //         home.forEach(hm => {
        //             hm.innerHTML = "Home";
        //         });
        //         abut.innerHTML = "About Us ";


        //         serv.forEach(i => {
        //             i.innerHTML = "Our Services";


        //         });
        //         epm.forEach(i => {
        //             i.innerHTML = "Engineering Project Management";

        //         });
        //         es.forEach(i => {
        //             i.innerHTML = "Engineering Supervision";
        //         });

        //         md.forEach(i => {
        //             i.innerHTML = "Mechanical Designs";

        //         });

        //         sd.forEach(i => {
        //             i.innerHTML = "Structural Designs";


        //         });
        //         ad.forEach(i => {
        //             i.innerHTML = "Architectural Designs";



        //         });
        //         ed.forEach(i => {
        //             i.innerHTML = "Electrical Designs";

        //         });
        //         fad.forEach(i => {
        //             i.innerHTML = "Furnishing and Design";


        //         });
        //         iaed.forEach(i => {
        //             i.innerHTML = "Interior and Exterior Designs";



        //         });
        //         cnt.innerHTML = "Our Clients";
        //         faqq.innerHTML = "FAQ";
        //         blg.innerHTML = "Blogs";
        //         cntus.forEach(cntuss => {
        //             cntuss.innerHTML = "Contact Us";
        //         });
        //         //slider
        //         if (slidersec) {
        //             slidersec.innerHTML = " Engineering Designs <br> <span> Beyond Imagination</span>";
        //             slidersec.style.textAlign = "left";
        //             slidersec.style.marginRight = "5px";
        //             items.forEach(item => {
        //                 item.style.textAlign = 'left'; // Set text alignment to right
        //             });
        //             hpcs.innerHTML = "Happy Clients";
        //         }

        //         //about
        //         if (yofx) {
        //             yofx.innerHTML = "   Years Of <br> experience ";

        //             abus.innerHTML = "About US";
        //             wpr.innerHTML = " <strong>At PEC,</strong> we pride ourselves on being more than just an engineering design firm.";
        //             specs.innerHTML = "<strong>  PEC</strong> is a specialized company offering innovative engineering design services that go beyond the conventional, with a constant focus on accurately and efficiently meeting the client's needs. With our extensive experience and ever-renewing creative spirit, we always strive to provide engineering solutions that meet global quality standards and make a real difference in the world of design.";
        //             redmr.innerHTML = "Read More";
        //         }
        //         //service

        //         if (our_ser) {
        //             our_ser.innerHTML = "Our Services ";
        //             woffs.innerHTML = "  we offer a comprehensive <br /> range of engineering services";
        //             woffs.style.fontFamily = "Noto Kufi Arabic";

        //             epm1s.innerHTML = "Engineering Project Management";
        //             pppr.innerHTML = "<strong>PEC</strong> provides efficient project management services by planning, executing, and monitoring projects with precision, with an emphasis on quality and timely achievement of goals.";
        //             engswe.innerHTML = "Engineering Supervision";
        //             ourspase.innerHTML = "   Our engineering supervision services include monitoring construction quality and ensuring compliance with technical specifications and standards, with integrated coordination among all parties to achieve superior outcomes.";
        //             mdesb.innerHTML = "Mechanical Designs";
        //             weubbs.innerHTML = "   We innovate advanced mechanical designs that showcase the installation of central air-conditioning units and other technical solutions, while taking economic and functional aspects into consideration.";
        //             sdes.innerHTML = "Structural Designs";
        //             wetranside.innerHTML = "We transform architectural ideas into robust and safe concrete models, while preserving the aesthetic appeal and intricate details that meet both technical and economic requirements.";
        //             adesn.innerHTML = "Architectural Designs";
        //             apeclin.innerHTML = " At PEC, we transform clients' needs into unique architectural spaces that blend innovation with personalization, creating environments that inspire and highlight the identity of each project.";
        //             edens.innerHTML = "Electrical Designs";
        //             weacdes.innerHTML = "We articulate the architectural concept through meticulous electrical designs that include lighting distribution and power systems, in line with the client's needs and sustainability goals.";
        //             fndws.innerHTML = "Furnishing and Design";
        //             wfadesasn.innerHTML = "  We offer a diverse range of furniture styles and interior design options that reflect your personal taste, transforming every space into an environment that combines elegance with comfort.";
        //             iadases.innerHTML = "Interior and Exterior Designs";
        //             wdeinter.innerHTML = " We design interior and exterior spaces that combine aesthetics with functionality, creating balanced environments that express a modern and innovative lifestyle.";
        //             service_title9.innerHTML = "Licensing Issuance";
        //             service_description9.innerHTML = "At PEC, we provide integrated services for issuing necessary licenses for your projects with high efficiency and speed in completion.";
        //             service_title10.innerHTML = "Recycling";
        //             service_description10.innerHTML = "PEC is committed to sustainability principles by providing advanced solutions for recycling construction and demolition waste. ";
        //         }

        //         //achievement
        //         if (orac) {
        //             orac.innerHTML = "Our Achievement";
        //             wtprin.innerHTML = " <strong> At PEC, </strong> we take pride in the remarkable journey we have made in the world of engineering design and innovation.";
        //             imouap.innerHTML = "<strong> Implementation of Outstanding Architectural Projects: <br /> </strong> We have designed and executed a range of architectural projects that combine beauty with functionality, thereby enhancing quality of life and providing modern work and living environments.";
        //             omupal.innerHTML = "<strong> Innovations in Urban Planning: <br /> </strong> We have participated in developing comprehensive urban plans that have reimagined city spaces and provided sustainable solutions for contemporary urban challenges.";
        //             clienste.innerHTML = "<strong> Client Satisfaction: <br /> </strong> We cherish our clients' satisfaction and trust, having received numerous testimonials and recommendations that confirm our success in turning their visions into reality.";
        //             pdone.innerHTML = "Projects Done";
        //             tmem.innerHTML = "Team member";
        //             clrev.innerHTML = "Client review";
        //             awnp.innerHTML = "Awards Won";
        //             ltprot.innerHTML = "Interior design";
        //             exterior.innerHTML = "Exterior design";
        //             ctn.innerHTML = "Clients Review";
        //             arinb.innerHTML = "Dear Clients Review from Google Maps";
        //         }
        //         //faq
        //         if (faqsfa) {
        //             faqsfa.innerHTML = "Frequently Asked Questions (FAQ)";
        //             atbtcc.innerHTML = "  At PEC, we believe that clear communication is the foundation of successful partnerships.";
        //             belowss.innerHTML = "Below is a list of some of the most frequently asked questions from our clients, along with answers that clarify our approach, services, and commitment to excellence. If you have any further inquiries, please feel free to contact us.";
        //             pcc.innerHTML = "Project Completed";
        //             wtkpal.innerHTML = " We take pride in a legacy of excellence and innovation. Our extensive experience across various industries has empowered us to deliver innovative, effective, and sustainable solutions for every challenge we encounter. Each project stands as a testament to our commitment to quality, attention to the smallest details, and a deep understanding of our clients' needs.";
        //             whtser.innerHTML = "What services does PEC offer?";
        //             wspadran.innerHTML = "We specialize in a wide range of engineering design services, including:";
        //             iadesas.innerHTML = "<strong>Innovative Architectural Design: </strong> Turning ideas into attractive and practical architectural solutions.";
        //             upalnad.innerHTML = "<strong>Urban Planning and Development: </strong>Creating sustainable and forward-thinking urban spaces.";
        //             encpre.innerHTML = "<strong>Engineering Consultations: </strong>Providing technical expertise and support at all stages of the project.";
        //             hdpechpe.innerHTML = "How does PEC handle each project?";
        //             ourapon.innerHTML = " Our approach is based on collaboration and innovation:";
        //             uyuv.innerHTML = "<strong>Understanding Your Vision:</strong> We start by discussing your ideas, needs, and aspirations.";
        //             cdepr.innerHTML = "<strong>Customized Design Process: </strong>Our team develops a design plan tailored to your specific requirements";
        //             acdw.innerHTML = "<strong>Attention to Detail: </strong>We ensure that every aspect of your project is executed to the highest standards of quality and precision.";
        //             whsetpec.innerHTML = "What sets PEC apart from other design firms?";
        //             whsetpec.style.textAlign = "left";

        //             actpecof.innerHTML = "At PEC, we take pride in offering:";
        //             bouncretive.innerHTML = "<strong>Boundless Creativity:</strong> We continuously strive to go beyond the ordinary by delivering unique and innovative designs.";
        //             clienapr.innerHTML = "<strong>Client-Centered Approach: </strong>Your vision is at the heart of our work; we work closely with you to turn your ideas into reality.";
        //             ctoqpr.innerHTML = "<strong>Commitment to Quality and Precision: </strong>We ensure our projects are executed according to the highest standards of professionalism and dedication.";
        //             hlong.innerHTML = "How long does it take to complete a project?";
        //             ttrac.innerHTML = "    The time required to complete a project varies depending on its scope and complexity:";
        //             fincad.innerHTML = "trong>From Initial Consultation to Final Design: </strong> Small projects may take a few weeks, while larger, more complex projects may require several months.";
        //             clpnad.innerHTML = "<strong>Collaborative Planning: </strong>We work with you through every stage of the project to ensure that timeline milestones are met and deadlines are adhered to.";
        //         }
        //         //footer
        //         fbsdd.innerHTML = "At PEC, we take pride in delivering engineering designs that blend creativity and excellence to surpass our clients' expectations. We are your ideal partner in turning visions into tangible realities by merging innovation with technology to achieve stunning results in every project.";
        //         qlin.innerHTML = "Quick links";
        //         adafgs.innerHTML = " About Us";
        //         sasss.innerHTML = "Service";
        //         conse.forEach(i => {
        //             i.innerHTML = 'Contact Us';
        //         });
        //         bgsdd.innerHTML = "Blog";
        //         fqssas.innerHTML = "FAQ";
        //         adds.innerHTML = "Address";
        //         phnn.innerHTML = "Phone";
        //         emnn.innerHTML = "E-Mail";
        //         alr.innerHTML = "All Rights Reserved";
        //     } else {
        //         arabic.style.display = "none";
        //         english.style.display = "inline";


        //         lctn.forEach(lctns => {
        //             lctns.innerHTML = "طريق العروبة, برج توليب، الدور الثالث الرياض، السعودية";
        //             lctns.style.fontFamily = "Noto Kufi Arabic";
        //         });
        //         header.style.fontFamily = "Noto Kufi Arabic";
        //         dir.forEach(ex => {
        //             ex.style.direction = "rtl";
        //         });
        //         home.forEach(hm => {
        //             hm.innerHTML = "الرئيسية";
        //         });
        //         abut.innerHTML = "من نحن";

        //         serv.forEach(i => {
        //             i.innerHTML = "خدماتنا ";

        //         });
        //         epm.forEach(i => {
        //             i.innerHTML = "إدارة المشاريع الهندسية";

        //         });
        //         es.forEach(i => {
        //             i.innerHTML = "الإشراف الهندسي";


        //         });

        //         md.forEach(i => {
        //             i.innerHTML = "التصاميم الميكانيكية";
        //         });

        //         sd.forEach(i => {
        //             i.innerHTML = "التصاميم الإنشائية";

        //         });
        //         ad.forEach(i => {
        //             i.innerHTML = "لتصاميم المعمارية";


        //         });
        //         ed.forEach(i => {
        //             i.innerHTML = "التصاميم الكهربائية";
        //         });
        //         fad.forEach(i => {
        //             i.innerHTML = "الفرش والتصميم";

        //         });
        //         iaed.forEach(i => {
        //             i.innerHTML = "التصاميم الداخلية والخارجية";


        //         });


        //         cnt.innerHTML = "عملائنا";
        //         faqq.innerHTML = "الأسئلة الشائعة";
        //         blg.innerHTML = "مقالاتنا";
        //         cntus.innerHTML = "تواصل معنا";
        //         cntus.forEach(cntuss => {
        //             cntuss.innerHTML = "تواصل معنا";
        //         });
        //         fnt.forEach(font => {
        //             font.style.fontFamily = "Noto Kufi Arabic";
        //         });
        //         items.forEach(item => {
        //             item.style.textAlign = 'right'; // Set text alignment to right
        //         });
        //         //slider
        //         if (slidersec) {
        //             slidersec.innerHTML = "تصاميم  هندسية  <br/> تفوق  الخيال ";
        //             slidersec.style.fontFamily = "Noto Kufi Arabic";
        //             slidersec.style.textAlign = "center";
        //             slidersec.style.marginRight = "25px";

        //             hpcs.innerHTML = "اراء العملاء";
        //         }



        //         //about

        //         if (yofx) {
        //             yofx.innerHTML = "سنوات الخبرة"
        //             yofx.style.fontFamily = "Noto Kufi Arabic";
        //             abus.innerHTML = "من نحن";
        //             wpr.innerHTML = "في PEC نفخر بأننا أكثر من مجرد شركة تصميم هندسي";
        //             specs.innerHTML = "PEC هي شركة متخصصة في تقديم خدمات التصميم الهندسي المبتكر الذي يتخطى حدود التقليدي، مع تركيز دائم على تلبية احتياجات العميل بدقة وكفاءة. بفضل خبرتنا الواسعة وروح الإبداع المتجددة، نسعى دائمًا لتقديم حلول هندسية تلبي معايير الجودة العالمية وتساهم في إحداث فرق حقيقي في عالم التصميم.";
        //             redmr.innerHTML = "المزيد";
        //         }



        //         //servic
        //         if (our_ser) {
        //             our_ser.innerHTML = "خدماتنا";
        //             woffs.innerHTML = "في شركة PEC نقدم مجموعة متكاملة من الخدمات الهندسية";
        //             woffs.style.fontFamily = "Noto Kufi Arabic";
        //             epm1s.innerHTML = "إدارة المشاريع الهندسية";
        //             pppr.innerHTML = "شركة PEC تقدم خدمات إدارة المشاريع الهندسية بكفاءة عالية من خلال تخطيط وتنفيذ ومراقبة المشاريع بدقة، مع التركيز على الجودة وتحقيق الأهداف في الوقت المحدد.";
        //             engswe.innerHTML = "الإشراف الهندسي";
        //             ourspase.innerHTML = "خدمات الإشراف الهندسي لدينا تشمل متابعة جودة البناء وضمان مطابقة المواصفات والمعايير الفنية، مع تنسيق متكامل بين جميع الأطراف لتحقيق نتائج متفوقة.";
        //             mdesb.innerHTML = "التصاميم الميكانيكية";
        //             weubbs.innerHTML = "نبتكر تصميمات ميكانيكية متطورة تبرز كيفية تركيب وحدات التكييف المركزي والحلول الفنية الأخرى، مع مراعاة الجوانب الاقتصادية والوظيفية.";
        //             sdes.innerHTML = "التصاميم الإنشائية";
        //             wetranside.innerHTML = "نحول الأفكار المعمارية إلى نماذج خرسانية متينة وآمنة، مع الحفاظ على الطابع الجمالي والتفاصيل الدقيقة التي تلبي المتطلبات الفنية والاقتصادية.";
        //             adesn.innerHTML = "التصاميم المعمارية";
        //             apeclin.innerHTML = "في PEC، نحول احتياجات العملاء إلى مساحات معمارية فريدة تجمع بين الابتكار والخصوصية، لتوفير بيئات تلهم وتبرز هوية كل مشروع.";
        //             edens.innerHTML = "التصاميم الكهربائية";
        //             weacdes.innerHTML = "نوضح الفكرة المعمارية من خلال تصميمات كهربائية متقنة تشمل توزيع الإضاءة وأنظمة الطاقة، بما يتماشى مع احتياجات العميل ويحقق الاستدامة.";
        //             fndws.innerHTML = "الفرش والتصميم";
        //             wfadesasn.innerHTML = "نقدم مجموعة متنوعة من أنماط الأثاث والتصميم الداخلي التي تعكس ذوقك الخاص، لتتحول كل مساحة إلى بيئة تجمع بين الأناقة والراحة.";
        //             iadases.innerHTML = "التصاميم الداخلية والخارجية";
        //             wdeinter.innerHTML = "نصمم مساحات داخلية وخارجية تجمع بين الجمالية والوظيفية، مما يخلق بيئات متوازنة تعبر عن أسلوب حياة عصري ومبتكر";
        //         }
        //         //achievement
        //         if (orac) {
        //             orac.innerHTML = "إنجازاتنا";
        //             wtprin.innerHTML = "<strong>في PEC، </strong>  نفخر بالمسيرة المميزة التي قطعناها في عالم التصميم الهندسي والابتكار.";
        //             imouap.innerHTML = "<strong>تنفيذ مشاريع معمارية مميزة: <br/></strong> قمنا بتصميم وتنفيذ مجموعة من المشاريع المعمارية التي تجمع بين الجمال والوظيفية، مما ساهم في تحسين جودة الحياة وتوفير بيئات عمل وسكن عصرية.";
        //             omupal.innerHTML = "<strong>ابتكارات في التخطيط الحضري: <br/></strong> شاركنا في تطوير خطط حضرية متكاملة ساعدت في إعادة تصور مساحات المدن وتوفير حلول مستدامة للتحديات العمرانية المعاصرة.";
        //             clienste.innerHTML = " <strong>تحقيق رضا العملاء: <br/></strong> نعتز برضا عملائنا وثقتهم بنا، حيث تلقينا العديد من الشهادات والتوصيات التي تؤكد نجاحنا في تحويل رؤاهم إلى واقع ملموس.";
        //             pdone.innerHTML = " مشروع منجز";
        //             tmem.innerHTML = "عضو بالفريق";
        //             clrev.innerHTML = " تقييم من العملاء";
        //             awnp.innerHTML = "جائزة فائزة";
        //         }
        //         //porfolio
        //         if (exterior) {
        //             exterior.innerHTML = "التصميم الخارجي";
                
        //         }
        //         if (ltprot) {
        //             ltprot.innerHTML = "التصميم الداخلي";
        //             ltprot.style.fontFamily = "Noto Kufi Arabic";

        //             ctn.innerHTML = "اراء العملاء";
        //             arinb.innerHTML = "اراء عملائنا الاعزاء من خرائط جوجل";
        //         }

        //         //faq
        //         if (faqsfa) {
        //             faqsfa.innerHTML = "الأسئلة الشائعة (FAQ)";
        //             atbtcc.innerHTML = "في PEC، نؤمن بأن التواصل الواضح هو أساس الشراكات الناجحة.";
        //             belowss.innerHTML = "فيما يلي قائمة ببعض الأسئلة الأكثر تكرارًا التي نتلقاها من عملائنا، مع إجاباتها التي توضح منهجنا وخدماتنا والتزامنا بالتميز. إذا كان لديك أي استفسارات أخرى، لا تتردد في التواصل معنا.";
        //             pcc.innerHTML = "مشروع منجز";
        //             wtkpal.innerHTML = "نفخر بإرث من التميز والابتكار. لقد زودتنا خبرتنا الواسعة في مختلف الصناعات بالقدرة على تقديم حلول مبتكرة وفعالة ومستدامة لكل تحدٍ نواجهه. كل مشروع يُعد شهادة على التزامنا بالجودة، والاهتمام بأدق التفاصيل، وفهمنا العميق لاحتياجات عملائنا.";
        //             whtser.innerHTML = "ما هي الخدمات التي تقدمها شركة PEC؟";
        //             wspadran.innerHTML = "نحن متخصصون في مجموعة واسعة من خدمات التصميم الهندسي، والتي تشمل:";
        //             iadesas.innerHTML = "<strong>التصميم المعماري المبتكر:</strong> تحويل الأفكار إلى حلول معمارية جذابة وعملية.";
        //             upalnad.innerHTML = "<strong>تخطيط المدن والتطوير الحضري:</strong> إنشاء مساحات حضرية مستدامة ومستقبلية.";
        //             encpre.innerHTML = "<strong>لاستشارات الهندسية:</strong>  تقديم الخبرة الفنية والدعم في جميع مراحل المشروع.";
        //             hdpechpe.innerHTML = "كيف تتعامل PEC مع كل مشروع؟";
        //             ourapon.innerHTML = "منهجنا يعتمد على التعاون والابتكار:";
        //             uyuv.innerHTML = "<strong>فهم رؤيتك:</strong> نبدأ بمناقشة أفكارك واحتياجاتك وتطلعاتك.";
        //             cdepr.innerHTML = "<strong>عملية تصميم مخصصة: </strong> يقوم فريقنا بتطوير خطة تصميم تناسب احتياجاتك الخاصة.";
        //             acdw.innerHTML = "<strong>الاهتمام بالتفاصيل:</strong> نضمن تنفيذ كل عنصر من عناصر مشروعك بأعلى معايير الجودة والدقة.";
        //             whsetpec.innerHTML = "ما الذي يميز PEC عن شركات التصميم الأخرى؟";
        //             whsetpec.style.textAlign = "right";
        //             actpecof.innerHTML = "نفخر في PEC بما نقدمه من:";
        //             bouncretive.innerHTML = "<strong>إبداع بلا حدود: </strong> نسعى دائمًا لتجاوز المألوف بتقديم تصاميم فريدة ومبتكرة.";
        //             clienapr.innerHTML = "<strong>نهج يركز على العميل:</strong> رؤيتك هي محور عملنا؛ نعمل عن كثب معك لتحويل أفكارك إلى واقع ملموس.";
        //             ctoqpr.innerHTML = "<strong>التزام بالجودة والدقة:  </strong>  نضمن تنفيذ مشاريعنا وفقًا لأعلى معايير الاحترافية والتفاني في العمل.";
        //             hlong.innerHTML = "كم يستغرق الوقت لإنجاز المشروع؟";
        //             ttrac.innerHTML = "تختلف المدة الزمنية لإتمام المشاريع حسب نطاق وتعقيد كل مشروع:";
        //             fincad.innerHTML = "<strong>من الاستشارة الأولية حتى التصميم النهائي:  </strong> قد تستغرق المشاريع الصغيرة بضعة أسابيع، في حين قد تحتاج المشاريع الكبيرة والمعقدة إلى عدة أشهر.";
        //             clpnad.innerHTML = "<strong>لتخطيط التعاوني:  </strong> نعمل معك خلال كافة مراحل المشروع لضمان تحقيق المعالم الزمنية المطلوبة والالتزام بالمواعيد المحددة.";
        //         }
        //         //footer
        //         fbsdd.innerHTML = "PEC هي شركة متخصصة في تقديم خدمات التصميم الهندسي المبتكر الذي يتخطى حدود التقليدي، مع تركيز دائم على تلبية احتياجات العميل بدقة وكفاءة. بفضل خبرتنا الواسعة وروح الإبداع المتجددة، نسعى دائمًا لتقديم حلول هندسية تلبي معايير الجودة العالمية وتساهم في إحداث فرق حقيقي في عالم التصميم.";
        //         qlin.innerHTML = "روابط سريعة";
        //         adafgs.innerHTML = "من نحن";
        //         sasss.innerHTML = "خدماتنا";
        //         conse.forEach(i => {
        //             i.innerHTML = 'تواصل معنا';
        //         });
        //         bgsdd.innerHTML = "مقالاتنا";
        //         fqssas.innerHTML = "الأسئلة الشائعة";
        //         adds.innerHTML = "العنوان";
        //         phnn.innerHTML = "الهاتف";
        //         emnn.innerHTML = "البريد الالكتروني";
        //         alr.innerHTML = "جميع الحقوق محفوظة";
        //     }
        // }
    </script>
    @stack('scripts')
</body>

</html>