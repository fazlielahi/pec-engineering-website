@php use Illuminate\Support\Str; @endphp
<!DOCTYPE html>
<html lang="ar">
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
    
    @yield('css')

    <style>

        body{
            direction: rtl;
        }

        .header-top-section, .contact-Info-section, .contact-section-4{
            direction: ltr !important;
        }
        
        .ScrollSmoother-content{
            background-color: #f2f4f7;
            padding-top: 20px
        }

        /* Sidebar navigation styles */
       

        .sidebar-nav-item {
            margin-bottom: 8px;
            border-radius: 6px;
            transition: all 0.3s ease;
            cursor: pointer;
            display: block;
            color: #333;
            text-decoration: none;
        }

        .sidebar-nav-item:hover {
            background-color: #f5f5f5;   
        }

        .sidebar-nav-item.active {
            background-color: #335214;
            color: #fff;
            padding: 12px 15px;
        }

        .sidebar-nav-item i {
            margin-right: 10px;
        }

        .sidebar-nav-item span {
            font-weight: 500;
        }

        .col-md-2 {
            width: 17.666667% !important;
        }

        .col-md-10 {
            width: 81.333333% !important;
            justify-content: flex-start !important;
        }

        .action {
            position: absolute;
            right: 7px;
            top: 7px;
        }

        .blog-card {
            width: 32% !important;
            padding-right: 0;
            margin-left: 6px;
        }

        .modal-backdrop {
            z-index: 1040 !important;
        }
        .modal {
            z-index: 1050 !important;
        }

        .blog-boxes {
            flex-direction: row !important;
        }

        .rounded-circle {
            margin-right: 0px !important;
            margin-left: 10px !important;
        }
        

        .news-card-items .news-image {
                height: 229px;
        }

        .news-card-items .news-image{
            max-height: 180px !important;
        }

        @media  screen and (max-width: 600px) {
            .blog-boxes{
                flex-direction: column !important;
            }

            .blog-card{
                width: 100% !important;
            }
        }

        .sidebar-nav-item {
            
            border: 1px solid #0000003d !important;
            padding: 2px 8px !important;
            margin: 9px 0px !important;
        }

        .end-0 {
            left: -10px !important;
            right: auto !important;
        }
        .top-0 {
            top: 10px !important;
        }

        .btn-close{
            right: auto !important;
            left: 30px !important;
        }

        .dropdown-toggle::after {
            content: none !important;
            display: none !important;
        }

        .dropdown-toggle::before {
            display: inline-block !important;
            margin-left: .255em !important;
            vertical-align: .255em !important;
            content: "" !important;
            border-top: .3em solid !important;
            border-right: .3em solid transparent !important;
            border-bottom: 0 !important;
            border-left: .3em solid transparent !important;
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
            <p class="text-center">{{ __('lang.Loading') }}</p>
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

@php
    use App\User;
    use App\Blog;
    $user = session()->has('user_id') ? \App\User::find(session('user_id')) : null;
    $rejectedCount = 0;
    if ($user) {
        $rejectedCount = \App\Blog::where('status', 'rejected')->where('created_by', $user->id)->count();
    }

    if(isset($blogs) && $user){
        $toastCount = $blogs->where('status', 'rejected')->where('created_by', $user->id)->count();
    }else{
        $toastCount = 0;
    }

@endphp

@if($toastCount > 0)
<div aria-live="polite" aria-atomic="true" class="position-relative">
    <div class="toast-container position-fixed top-0 end-0 p-3" style="z-index: 9999;">
        <div class="toast align-items-center text-bg-danger border-0" id="rejectedToast" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="d-flex">
                <div class="toast-body">
                    {{ trans_choice('lang.You have :count rejected post|You have :count rejected posts', $toastCount, ['count' => $toastCount]) }}
                </div>
                <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
        </div>
    </div>
</div>
@endif

@if($rejectedCount > 0)
<script>
    document.addEventListener('DOMContentLoaded', function () {
        var toastEl = document.getElementById('rejectedToast');
        if (toastEl) {
            var toast = new bootstrap.Toast(toastEl, { delay: 7000 });
            toast.show();
        }
    });
</script>
@endif
        
<!-- News Section Start -->
    <div class="container my-4">

        <!-- Profile Header End -->

            @php
                if($user && $user->photo)
                {
                    $user_photo = $user->photo;
                }
                else if($clickedUser && $clickedUser->photo)
                {
                    $user_photo = $clickedUser->photo;
                }
                else
                {
                    $user_photo = 'assets/img/user-image.png';
                }
            @endphp

        @if($user && $user->created_at)
        @php
            $member_since = $user->created_at->format('d/m/Y');
            $user_name = $user->name;
        @endphp
        @elseif($clickedUser && $clickedUser->created_at)
        @php
            $member_since = $clickedUser->created_at->format('d/m/Y');
            $user_name = $clickedUser->name;
        @endphp
        @endif      
        
        <div class="d-flex align-items-center mb-3 mb-md-0" style="justify-content: space-between !important;">

            @php
                if(isset($clickedUser) && $clickedUser && $clickedUser->id) {
                    $profile_photo = $clickedUser->photo ?? 'assets/img/user-image.png';
                    $profile_name = $clickedUser->name ?? 'Unknown';
                    $profile_since = $clickedUser->created_at ? $clickedUser->created_at->format('d/m/Y') : '';
                } else if($user && $user->id) {
                    $profile_photo = $user->photo ?? 'assets/img/user-image.png';
                    $profile_name = $user->name ?? 'Unknown';
                    $profile_since = $user->created_at ? $user->created_at->format('d/m/Y') : '';
                } else {
                    $profile_photo = 'assets/img/user-image.png';
                    $profile_name = 'Unknown';
                    $profile_since = '';
                }
            @endphp

            <div style="display: flex; align-items: center;">
                <img 
                src="{{ $profile_photo ? asset('images/' . $profile_photo) : asset('assets/img/user-image.png') }}"
                alt="Profile Picture" class="rounded-circle me-3" style="width: 80px; height: 80px; object-fit: cover;">
                <div>
                    <h2 class="fw-semibold text-dark">{{ $profile_name }}</h2>
                    <p class="mb-0 text-muted" style="font-size: 14px;">Member Since: <strong>{{ $profile_since }}</strong></p>
                </div>
            </div>

            <div class="d-flex flex-column flex-md-row gap-2">
                @if(isset($clickedUser) && $clickedUser && $clickedUser->id)
                    <a href="{{ route('localized.blog', ['lang' => app()->getLocale()])}}" class="btn sidebar-nav-item btn-outline-secondary text-dark px-4 py-2 rounded-pill d-flex align-items-center">
                        <i class="fa-solid fa-arrow-left mx-1"></i> {{ __('lang.Back') }}
                    </a>
                @elseif($user && $user->type == 'admin')
                    <a href="{{ route('localized.profile-edit', ['lang' => app()->getLocale()])}}" class="btn sidebar-nav-item btn-outline-secondary text-dark px-4 py-2 rounded-pill d-flex align-items-center">
                        <i class="fa-solid fa-user-pen mx-1"></i> {{ __('lang.Edit Profile') }}
                    </a>
                    <a href="{{ route('localized.blog-create', ['lang' => app()->getLocale()]) }}"
                        class="sidebar-nav-item active  px-4 py-2 rounded-pill d-flex align-items-center">
                        <i class="fa-solid fa-plus mx-1"></i> {{ __('lang.New Post') }}
                    </a>
                @elseif($user && $user->type == 'super_admin')
                    <a href="{{ route('localized.admin.dashboard', ['lang' => app()->getLocale()]) }}"
                        class="btn sidebar-nav-item btn-outline-secondary text-dark px-4 py-2 rounded-pill d-flex align-items-center">
                        <i class="fa-solid fa-user-pen mx-1"></i> Dashboard
                    </a>
                    <a href="{{ route('localized.profile', ['lang' => app()->getLocale()]) }}"
                        class="sidebar-nav-item active  px-4 py-2 rounded-pill d-flex align-items-center">
                        <i class="fa-solid fa-file-lines mx-1"></i> My Blogs
                    </a>
                @else
                    <a href="{{ route('localized.blog', ['lang' => app()->getLocale()])}}" class="btn sidebar-nav-item btn-outline-secondary text-dark px-4 py-2 rounded-pill d-flex align-items-center">
                        <i class="fa-solid fa-arrow-left mx-1"></i> {{ __('lang.Back') }}
                    </a>
                @endif
            </div>
        </div>

       

        <div class="row g-4 blog-boxes mt-1" style="justify-content: space-between !important;">
            @if($user && $user->type == 'admin')
            <div class="col-12 col-md-2">
               
                <div class="sidebar-nav">

                    {{-- Published Blogs --}}
                    <a href="{{ route('localized.profile', ['lang' => app()->getLocale()]) }}"
                       class="sidebar-nav-item {{ request()->routeIs('localized.profile') ? 'active' : '' }}">
                        <i class="fa-solid fa-file-lines"></i> {{ __('lang.Published Blogs') }}
                    </a>
                    
                   {{-- Draft Blogs --}}
                    <a href="{{ route('localized.profile-draft-blogs', ['lang' => app()->getLocale()]) }}"
                        class="sidebar-nav-item {{ request()->routeIs('localized.profile-draft-blogs') ? 'active' : '' }}">
                        <i class="fa-solid fa-pen-to-square"></i> {{ __('lang.Draft') }}
                    </a>
                    
                    {{-- Review Requests --}}
                    <a href="{{ route('localized.profile-request-blogs', ['lang' => app()->getLocale()]) }}"
                        class="sidebar-nav-item {{ request()->routeIs('localized.profile-request-blogs') ? 'active' : '' }}">
                        <i class="fa-solid fa-magnifying-glass"></i> {{ __('lang.Review Requests') }}
                    </a>
                    
                    
                    {{-- Rejected Blogs --}}
                    <div class="position-relative" style="display: inline-block; width: 100%;">
                        <a href="{{ route('localized.profile-rejected-blogs', ['lang' => app()->getLocale()]) }}"
                            class="sidebar-nav-item {{ request()->routeIs('localized.profile-rejected-blogs') ? 'active' : '' }}">
                            <i class="fa-solid fa-xmark-circle text-danger"></i> {{ __('lang.Rejected Blogs') }}
                        </a>
                        @if(isset($rejectedCount) && $rejectedCount > 0)
                            <span class="badge bg-danger position-absolute top-0 end-0 translate-middle-y" style="z-index:1; font-size: 0.75rem;">{{ $rejectedCount }}</span>
                        @endif
                    </div>
                  

                </div>
                

            </div>
            @endif

        @yield('content')

   
    </div>
</div>


        <!-- Footer Section Start -->
        @include('layouts.footer')
    </div>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        function confirmDelete(blogId) {
            Swal.fire({
                title: '{{ __('lang.Are you sure?') }}',
                text: "{{ __('lang.You won\'t be able to revert this!') }}",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#d33',
                cancelButtonColor: '#6c757d',
                confirmButtonText: '{{ __('lang.Yes, delete it!') }}',
                cancelButtonText: 'إلغاء'
            }).then((result) => {
                if (result.isConfirmed) {
                    document.getElementById('delete-form-' + blogId).submit();
                }
            });
        }
    </script>
    <!--<< All JS Plugins >>-->
    <script src="{{ asset('assets/js/jquery-3.7.1.min.js') }}"></script>
    <!--<< Viewport Js >>-->
    <script src="{{ asset('assets/js/viewport.jquery.js') }}"></script>
    <!--<< Bootstrap Js >>-->
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <!--<< Nice Select Js >>-->
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

    @yield('scripts')
</body>

</html>