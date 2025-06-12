@extends('layouts.app_en')
@section('content')

<style>
    .modal-backdrop {
        z-index: 1040 !important;
    }

    .modal {
        z-index: 1050 !important;
    }

    section {
        display: flex;
    }
    
    .sidebar-right {
        transition: transform 0.3s ease;
        transform: translateX(100%);
    }
    
    .sidebar-right.active {
        transform: translateX(0);
    }
    
    .sidebar-right .blog-card {
        width: 100% !important;
    }
    
    .close-sidebar {
        background: none;
        border: none;
        font-size: 18px;
        cursor: pointer;
        color: #335214;
        position: absolute;
        right: 24px;
        top: 14px;
    }
    
    .user-profile-header {
        margin-bottom: 20px;
    }

    .user-blog-footer {
        display: none;
    }

    .popular-posts .single-post-item, .popular_posts .single-post-item {
        margin-bottom: 0px !important;
        padding-bottom: 0px !important;
    }

    footer {
        display: none;
    }

</style>

<!--<< Breadcrumb Section Start >>-->
<div class="breadcrumb-wrapper section-padding bg-cover"
    style="background-image: url('{{ asset('/assets/img/main-blog-banner.jpg') }}');">
    <div class="container">
        <div class="page-heading">
            <h1 class="wow fadeInUp" data-wow-delay=".3s">{{__('lang.Latest Blogs')}}</h1>
            <ul class="breadcrumb-items wow fadeInUp" data-wow-delay=".5s">
                <li>
                    <a href="index.html">
                        {{ __('lang.Home')}}
                    </a>
                </li>
                <li>
                    <i class="fas fa-chevron-right"></i>
                </li>
                <li>
                    {{ __('lang.Blog')}}
                </li>
            </ul>
        </div>
    </div>
</div>

<!-- News Section Start -->

<section class="news-section section-padding fix" style="padding-top: 50px !important;">

    <div class="container sidebar-left">
        <div class="w-full md:w-72 space-y-6">
            @include('sections.ads')
        </div>
    </div>
    <div class="container">
        <div class="row g-4 blog-boxes">
            @foreach($blogs->sortByDesc('id') as $blog)

            <!-- Share Modal -->
            <div class="modal fade" id="shareModalTest" tabindex="-1">
                <div class="modal-dialog modal-dialog-centered" style="max-width: 320px;">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">{{ __('lang.Share this blog') }}</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                        </div>
                        <div id="copyMessage" style="color: green; display:none; position: absolute; top: 85px; right: 27px;">Link copied!</div>

                        <div class="modal-body">
                            <a class="dropdown-item d-flex align-items-center gap-2 py-2" href="#" onclick="copyToClipboard('{{ route('localized.blog-details', ['lang' => app()->getLocale(), $blog->id]) }}')">
                                <i class="fa-regular fa-copy text-secondary"></i> {{ __('lang.Copy Link') }}
                            </a>
                        </div>
                        <div class="modal-body">
                            <a class="dropdown-item d-flex align-items-center gap-2 py-2" target="_blank" href="https://wa.me/?text={{ urlencode(route('localized.blog-details', ['lang' => app()->getLocale(), $blog->id])) }}">
                                <i class="fa-brands fa-whatsapp text-success"></i> {{ __('lang.Share on WhatsApp') }}
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp mb-3 blog-card" data-wow-delay=".7s">
                <div class="news-card-items style-2 mt-0">
                    <div class="author-section">
                        <div class="author-image">
                            <a href="#right-sidebar" class="show-blogs" data-user="{{ $blog->created_by }}">

                                <img
                                    src="{{ $blog->creater && $blog->creater->photo ? asset('images/' . $blog->creater->photo) : asset('assets/img/user-image.png') }}"
                                    alt="img" width="100%" class="user-image">
                            </a>
                        </div>
                        <div class="user-name">
                            <a href="#right-sidebar" class="show-blogs" data-user="{{ $blog->created_by }}">
                                <h3>{{ $blog->creater->name ?? "unknown"}}</h3>
                            </a>
                            <p>{{ $blog->created_at->format('F d, Y h:i A')}}</p>
                        </div>

                    </div>
                    <a href="{{ route('localized.blog-details', ['lang' => app()->getLocale(), $blog->id]) }}">
                        <div class="news-image custom-size" style="background-image: url('{{ asset('storage/' . $blog->thumb) }}');"> </div>
                    </a>
                    <div class="news-content">

                        <h3>
                            <a href="{{ route('localized.blog-details', ['lang' => app()->getLocale(), $blog->id]) }}">{{ $blog->title }}</a>
                        </h3>
                        <span>
                            {{ Str::limit(html_entity_decode(strip_tags($blog->content)), 80) }}... <a href="{{ route('localized.blog-details', ['lang' => app()->getLocale(), $blog->id]) }}" class="link-btn">
                                {{ __('lang.Read More')}} <i class="fa-brands fa-readme" style="color: #335214;"></i>
                            </a>
                        </span>
                        <div class="post-footer mt-2">
                            <button
                                class="like-btn"
                                data-url="{{ route('localized.blog.like', [app()->getLocale(), $blog->id]) }}">
                                @if(App\Likes::where('blog_id', $blog->id)->exists())
                                <i class="heart-icon fa-solid fa-heart" style="color: #335214;"></i>
                                @else
                                <i class="heart-icon fa-regular fa-heart" style="color: #335214;"></i>
                                @endif
                                <span class="like-count">{{ $blog->likes->count() }}</span>
                            </button>

                            <a href="#" class="link-btn" data-bs-toggle="modal" data-bs-target="#editModal{{ $blog->id }}">{{__('lang.Comment')}} <i class="fa-regular fa-comment" style="color: #335214;"></i></a>

                            <button type="button" data-bs-toggle="modal" class="link-btn" data-bs-target="#shareModalTest">
                                {{__('lang.Share')}} <i class="far fa-share-square" style="color: #335214;"></i>
                            </button>

                        </div>
                    </div>
                </div>
            </div>

            <!-- comment section -->

            <div class="modal fade" id="editModal{{ $blog->id }}" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog" style="max-width: 34% !important; height: 770px; overflow: auto;  scroll-behavior: smooth;">
                    <form method="POST" action="{{ route('localized.blog.comment', ['lang' => app()->getLocale(), $blog->id]) }}">
                        @csrf
                        <div class="modal-content">
                            <div class="modal-header pb-0 ">

                                <div class="news-card-items style-2 mt-0 py-0 mb-2">
                                    <div class="author-section">
                                        <div class="author-image">
                                            <img
                                                src="{{ $blog->creater && $blog->creater->photo ? asset('images/' . $blog->creater->photo) : asset('assets/img/user-image.png') }}"
                                                alt="img" width="100%" class="user-image">
                                        </div>
                                        <div class="user-name">
                                            <h3>{{ $blog->creater->name ?? "unknown"}}</h3>
                                            <p>{{ $blog->created_at->format('F d, Y h:i A')}}</p>
                                        </div>

                                    </div>
                                    <div class="news-image custom-size blog-image" id="blog-image-{{ $blog->id }}" style="background-image: url('{{ asset('storage/' . $blog->thumb) }}');"></div>
                                    <div class="news-content">

                                        <h3>
                                            <a href="{{ route('localized.blog-details', ['lang' => app()->getLocale(), $blog->id]) }}">{{ $blog->title }}</a>
                                        </h3>
                                        <span class="mb-0">
                                            {{ Str::limit(html_entity_decode(strip_tags($blog->content)), 80) }}...
                                            <a href="{{ route('localized.blog-details', ['lang' => app()->getLocale(), $blog->id]) }}" class="link-btn" style="color: #335214">
                                                {{__('lang.Read more')}}
                                            </a>
                                        </span>
                                    </div>
                                </div>

                                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                            </div>
                            <div class="modal-body">
                                @if((!isset($user) || !$user) && (!Cookie::get('visiter_token') || !\App\Comment::where('visiter_token', Cookie::get('visiter_token'))->exists()))
                                <div class="mb-3">
                                    <label for="title{{ $blog->id }}" class="form-label">{{__('lang.Your Name')}}</label>
                                    <input type="text" class="form-control" name="name" value="{{ old('name') }}" required>
                                </div>
                                @endif
                                <div class="mb-3">
                                    <textarea class="form-control" name="comment" rows="4" placeholder="{{__('lang.Add a comment')}}" required>{{ old('comment') }}</textarea>
                                </div>
                            </div>
                            <div class="modal-footer">
                                @if($blog->comments->count() < 1)
                                    <span>{{__('lang.Be the first to comment!')}}</span>
                                    @else
                                    <div class="read-comments-wrapper">
                                        <a class="read-comments-btn" href="#show-comments-{{ $blog->id }}" data-blog-id="{{ $blog->id }}" style="color: #335214;">
                                            {{__('lang.Read all comments')}} <i class="fa-solid fa-arrow-down-wide-short" style="color: #335214;"></i>
                                        </a>
                                    </div>
                                    @endif
                                    <div>
                                        <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">{{__('lang.Cancel')}}</button>
                                        <button type="submit" class="btn btn-sm text-light" style="background-color: #335214;">{{__('lang.Comment')}}</button>
                                    </div>

                            </div>

                            <div class="comments-list m-2" id="show-comments-{{ $blog->id }}" style="display: none;">

                                @foreach($blog->comments->sortByDesc('created_at') as $comment)
                                <div class="mb-3 p-3 border rounded">
                                    @php $user = $comment->user; @endphp
                                    <img
                                        src="{{ $user && $user->photo ? asset('images/' . $user->photo) : asset('assets/img/user-image.png') }}"
                                        alt="img" width="40" class="user-image">
                                    <strong>{{ $comment->name }}</strong><br>
                                    <p class="mb-0">{{ $comment->comment }}</p>
                                </div>
                                @endforeach

                            </div>

                        </div>
                    </form>
                </div>
            </div>

            @endforeach
        </div>
    </div>

    <div class="container sidebar-right" >
        <button class="close-sidebar"><i class="fa fa-times"></i></button>
        <div id="right-sidebar"></div>
        <div id="user-profile-container" style="width: 60%; float: right; margin-right: 10px;">
            <!-- User profile and blogs will be loaded here -->
        </div>
    </div>


    <!-- User Blogs Modal -->
    <div class="modal fade" id="userBlogsModal" tabindex="-1">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">{{ __('lang.User Blogs') }}</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body" id="userBlogsContent">
                    <!-- filtered cards will be injected here -->
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" data-bs-dismiss="modal">
                        {{ __('lang.Close') }}
                    </button>
                </div>
            </div>
        </div>
    </div>



</section>




@endsection

@section('scripts')
<script>

document.querySelectorAll('.show-blogs').forEach(link => {
    link.addEventListener('click', function (e) {
        // Optional: do not prevent default
        location.hash = 'right-sidebar'; // This updates the URL and scrolls
    });
});

$(document).ready(function() {
    // When clicking on a user name or image
    $(document).on('click', '.show-blogs', function(e) {
        e.preventDefault();
        
        var userId = $(this).data('user');
        var currentLang = document.documentElement.lang || 'en';
        
        // Show the sidebar
        $('.sidebar-right').addClass('active');
        
        // Show loading state
        $('#user-profile-container').html('<div class="text-center my-5"><i class="fa fa-spinner fa-spin fa-2x"></i><p class="mt-2">{{ __("lang.Loading user blogs") }}</p></div>');
        
        // Get user blogs via AJAX
        $.ajax({
            url: '/' + currentLang + '/user-blogs/' + userId,
            type: 'GET',
            success: function(response) {
                // Extract just the needed content from the response
                var userProfile = $(response).find('.card.shadow-sm').first();
                var userBlogs = $(response).find('.blog-boxes').html();
                
                // Populate the sidebar with the user profile and blogs
                $('#user-profile-container').html(
                    '<div class="user-profile-header mb-4">' + userProfile.html() + '</div>' +
                    '<div class="row g-4 blog-boxes">' + userBlogs + '</div>'
                );
            },
            error: function() {
                $('#user-profile-container').html(
                    '<div class="alert alert-danger">' +
                    '<i class="fa fa-exclamation-circle me-2"></i>' +
                    '{{__('lang.Failed to load user blogs')}}' +
                    '</div>'
                );
            }
        });
    });
    
    // Close sidebar when clicking the close button
    $(document).on('click', '.close-sidebar', function() {
        $('.sidebar-right').removeClass('active');
    });
});
</script>
@endsection