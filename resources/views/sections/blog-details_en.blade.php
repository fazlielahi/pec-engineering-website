@extends('layouts.app_en')
@section('content')

<style>

    .blog-boxes .single-sidebar-widget {
        border: 0px solid #ededed !important;
        box-sizing: border-box;
        padding: 5px !important;
        margin-bottom: 40px;
    }

    .user-blog-footer {
        display: none;
    }

    .popular-posts .single-post-item, .popular_posts .single-post-item {
        margin-bottom: 10px !important;
        padding-bottom: 10px !important;
    }

</style>

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

<!-- Header Area Start -->


<div class="ScrollSmoother-content">
    <!--<< Breadcrumb Section Start >>-->
                         
        <div class="breadcrumb-wrapper section-padding bg-cover"
            style="background-image: url('{{ asset('storage/' . $blog->image) }}');">
            <div class="container">
                <div class="page-heading">
                    <h1 class="wow fadeInUp" data-wow-delay=".3s">{{ __('lang.Blog Details')}}</h1>
                    <ul class="breadcrumb-items wow fadeInUp" data-wow-delay=".5s">
                        <li>
                            <a href="{{ route('localized.blog', ['lang' => app()->getLocale()])}}">
                                {{ __('lang.Blogs')}}
                            </a>
                        </li>
                        <li>
                            <i class="fas fa-chevron-right"></i>
                        </li>
                        <li>
                            {{ __('lang.Blog Details')}}
                        </li>
                    </ul>
                </div>
            </div>
        </div>

    <!--<< Blog Wrapper Here >>-->
    <section class="blog-wrapper news-wrapper section-padding">
        <div class="container">
            <div class="news-area">
                <div class="row">
                    <div class="col-12 col-lg-8">
                        <div class="blog-post-details border-wrap mt-0">
                            <div class="single-blog-post post-details mt-0">
                                <div class="post-content pt-0">
                                    <h2 class="mt-0">{{ $blog->title }}</h2>
                                    <div class="post-meta mt-3 d-flex align-items-center">
                                        <span>
                                            <a href="{{ route('localized.user-blogs', ['lang' => app()->getLocale(), 'id' => $blog->creater->id]) }}" class="show-blogs" data-user="{{ $blog->creater->id }}" style="display: inline-flex; align-items: center; text-decoration: none; color: inherit;">
                                                <img src="{{ $blog->creater && $blog->creater->photo ? asset('images/' . $blog->creater->photo) : asset('assets/img/user-image.png') }}" alt="profile" style="width:31px; height:31px; border-radius:50%; object-fit:cover; margin-right:6px; vertical-align:middle;">
                                                {{ $blog->creater->name ?? "unknown"}}
                                            </a>
                                        </span>
                                        <span><i class="fal fa-comments"></i>{{$blog->comments->count()}} {{ __('lang.Comments')}}</span>
                                        <span><i class="fal fa-calendar-alt"></i>{{$blog->created_at->format('F d, Y h:i A')}}</span>
                                    </div>
                                    <div>
                                        {!! $blog->content !!}    
                                    </div>
                                </div>
                            </div>

                            <!-- comments section wrap start -->
                            <div class="comments-section-wrap">
                                <div class="comments-heading">
                                    <h3>{{$blog->comments->count()}} {{ __('lang.Comments')}}</h3>
                                </div>
                                <ul class="comments-item-list">
                                @if($blog->comments->count() < 1)
                                    <a href="#comment" style="margin: 20px 0; display:block; text-decoration: underline">{{ __('lang.Be the first to comment!')}}</a>
                                @else
                                    @foreach($blog->comments->sortByDesc('created_at') as $comment)
                                        @php $user = $comment->user; @endphp
                                        <li class="single-comment-item">
                                            <div class="author-img">
                                               <img
                                        src="{{ $user && $user->photo ? asset('images/' . $user->photo) : asset('assets/img/user-image.png') }}"
                                        alt="img" width="100%" class="user-image">
                                            </div>
                                            <div class="author-info-comment">
                                                <div class="info">
                                                    <h5><a href="#">{{ $comment->name }}</a></h5>
                                                    <span>{{ $comment->created_at->format('F d, Y h:i A')}}</span>
                                                </div>
                                                <div class="comment-text">
                                                    <p>{{ $comment->comment}}</p>
                                                </div>
                                            </div>
                                        </li>
                                    @endforeach
                                @endif
                                
                                <div id="comment"></div>
                                </ul>
                            </div>
                            
                            <div class="comment-form-wrap mt-40" >
                                <h3>{{ __('lang.Post Comment')}}</h3>
                                <form method="POST" action="{{ route('localized.blog.comment', ['lang' => app()->getLocale(), $blog->id]) }}" class="comment-form">
                                    @csrf
                                    <div class="single-form-input">
                                        <textarea name="comment" placeholder="{{ __('lang.Add a comment')}}">{{ old('comment') }}</textarea>
                                    </div>
                                     @if(!Cookie::get('visiter_token') || !\App\Comment::where('visiter_token', Cookie::get('visiter_token'))->exists())
                                        <div class="single-form-input">
                                            <input type="text" class="form-control" name="name" value="{{ old('name') }}" required placeholder="Type your name')}}">
                                        </div>
                                    @endif
                                    <button class="theme-btn center" type="submit">
                                        <span><i class="fal fa-comments"></i>{{ __('lang.Post Comment')}}</span>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4">
                        <div class="main-sidebar">

                            <div class="single-sidebar-widget" id="popular-feeds-widget" style="height: 949px; overflow-y: auto;">
                                <div class="wid-title">
                                    <h3>{{ __('lang.Popular Feeds')}}</h3>
                                </div>
                                <div class="popular-posts">
                                    @foreach($popular_blogs as $popular_blog)
                                    <div class="single-post-item">
                                        <a href="{{ route('localized.blog-details', ['lang' => app()->getLocale(), $popular_blog->id]) }}">
                                        <div class="thumb bg-cover"
                                           style="background-image: url('{{ asset('storage/' . $popular_blog->thumb) }}');"></div></a>
                                        <div class="post-content">
                                            <h5>
                                                <a href="{{ route('localized.blog-details', ['lang' => app()->getLocale(), $popular_blog->id]) }}">
                                                    {{$popular_blog->title}}
                                                </a>
                                            </h5>
                                            <div class="post-date">
                                                <i class="far fa-calendar-alt"></i>{{$popular_blog->created_at->format('F d, Y h:i A')}}
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>

                            <div class="single-sidebar-widget">
                                <div class="wid-title">
                                    <h3>{{ __('lang.Never Miss News')}}</h3>
                                </div>
                                <div class="social-link">
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
        </div>
    </section>

    @endsection

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {
    document.body.addEventListener('click', function(e) {
        var target = e.target;
        // Traverse up if the click is on the image or child
        while (target && !target.classList.contains('show-blogs') && target !== document.body) {
            target = target.parentElement;
        }
        if (target && target.classList.contains('show-blogs')) {
            e.preventDefault();
            var userId = target.getAttribute('data-user');
            var currentLang = document.documentElement.lang || 'en';
            var widget = document.getElementById('popular-feeds-widget');
            if(widget) {
                widget.innerHTML = '<div class="text-center my-5"><i class="fa fa-spinner fa-spin fa-2x"></i><p class="mt-2">Loading user profile...</p></div>';
                fetch('/' + currentLang + '/user-blogs/' + userId)
                    .then(response => response.text())
                    .then(html => {
                        var tempDiv = document.createElement('div');
                        tempDiv.innerHTML = html;
                        var userProfile = tempDiv.querySelector('.card.shadow-sm');
                        var userBlogs = tempDiv.querySelector('.blog-boxes');
                        var result = '';
                        if(userProfile) {
                            result += '<div class="user-profile-header mb-4">' + userProfile.outerHTML + '</div>';
                        }
                        if(userBlogs) {
                            result += '<div class="row g-4 blog-boxes">' + userBlogs.innerHTML + '</div>';
                        }
                        if(result) {
                            widget.innerHTML = result;
                        } else {
                            widget.innerHTML = '<div class="alert alert-warning">Could not load user profile content</div>';
                        }
                    })
                    .catch(function() {
                        widget.innerHTML = '<div class="alert alert-danger">Failed to load user profile</div>';
                    });
            }
        }
    });
});
</script>
@endpush