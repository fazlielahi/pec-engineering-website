@extends('layouts.app')
@section('content')
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
                            <i class="fas fa-chevron-left"></i>
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
                                    <div class="post-meta mt-3">
                                        <span><i class="fal fa-user"></i>  {{ $blog->creater->name ?? "unknown"}}</span>
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
                                        <li class="single-comment-item">
                                            <div class="author-img">
                                               <img src="{{ asset('assets/img/user-image.png') }}" alt="img" width="100%">
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

                            <div class="single-sidebar-widget" style="height: 949px; overflow-y: auto;" >
                                <div class="wid-title">
                                    <h3>{{ __('lang.Popular Feeds')}}</h3>
                                </div>
                                <div class="popular-posts">
                                    @foreach($popular_blogs as $popular_blog)
                                    <div class="single-post-item pb-3 mb-3 border-bottom">
                                        <div class="thumb bg-cover"
                                           style="background-image: url('{{ asset('storage/' . $popular_blog->thumb) }}');"></div>
                                        <div class="post-content">
                                            <h5><a href="news-details.html">{{$popular_blog->title}}</a>
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