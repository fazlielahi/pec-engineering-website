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
        style="background-image: url('assets/img/breadcrumb.jpg');">
        <div class="container">
            <div class="page-heading">
                <h1 class="wow fadeInUp" data-wow-delay=".3s">Blog Details</h1>
                <ul class="breadcrumb-items wow fadeInUp" data-wow-delay=".5s">
                    <li>
                        <a href="index.html">
                            Home
                        </a>
                    </li>
                    <li>
                        <i class="fas fa-chevron-right"></i>
                    </li>
                    <li>
                        Blog Details
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
                                    <h2 class="mt-0">Crafting spaces that the <br> reflect your style</h2>
                                    <div class="post-meta mt-3">
                                        <span><i class="fal fa-user"></i>Shikhon .Ha</span>
                                        <span><i class="fal fa-comments"></i>15 Comments</span>
                                        <span><i class="fal fa-calendar-alt"></i>4th February 2024</span>
                                    </div>
                                    <p>
                                        With worldwide annual spend on digital advertising surpassing $325 billion, it’s
                                        no surprise that different
                                        approaches to online marketing are becoming available. One of these new
                                        approaches is performance marketing
                                        or digital performance marketing. Keep reading to learn all about performance
                                        marketing, from how it works
                                        to how it compares to digital marketing. Plus, get insight into the benefits and
                                        risks of performance
                                        marketing and how it can affect your company’s long-term success and
                                        profitability.
                                    </p>
                                </div>
                            </div>

                            <!-- comments section wrap start -->
                            <div class="comments-section-wrap">
                                <div class="comments-heading">
                                    <h3>03 Comments</h3>
                                </div>
                                <ul class="comments-item-list">

                                    <li class="single-comment-item">
                                        <div class="author-img">
                                            <img src="assets/img/news/author-2.jpg" alt="img">
                                        </div>
                                        <div class="author-info-comment">
                                            <div class="info">
                                                <h5><a href="#">Arista Williamson</a></h5>
                                                <span>21th Feb 2024</span>
                                            </div>
                                            <div class="comment-text">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                                    eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim
                                                    ad minim veniam, quis nostrud exercitation ullamco nisi ut aliquip
                                                    ex ea commodo consequat.</p>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="comment-form-wrap mt-40">
                                <h3>Post Comment</h3>
                                <form action="#" class="comment-form">
                                    <div class="single-form-input">
                                        <textarea placeholder="Type your comments...."></textarea>
                                    </div>
                                    <div class="single-form-input">
                                        <input type="text" placeholder="Type your name....">
                                    </div>
                                    <button class="theme-btn center" type="submit">
                                        <span><i class="fal fa-comments"></i>Post Comment</span>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4">
                        <div class="main-sidebar">

                            <div class="single-sidebar-widget">
                                <div class="wid-title">
                                    <h3>Popular Feeds</h3>
                                </div>
                                <div class="popular-posts">
                                    <div class="single-post-item">
                                        <div class="thumb bg-cover"
                                            style="background-image: url('assets/img/news/pp1.jpg');"></div>
                                        <div class="post-content">
                                            <h5><a href="news-details.html">Crafting spaces that reflect your style</a>
                                            </h5>
                                            <div class="post-date">
                                                <i class="far fa-calendar-alt"></i>24th March 2024
                                            </div>
                                        </div>
                                    </div>
                                    <div class="single-post-item">
                                        <div class="thumb bg-cover"
                                            style="background-image: url('assets/img/news/pp2.jpg');"></div>
                                        <div class="post-content">
                                            <h5><a href="news-details.html">Redefining the concept of the most
                                                    living</a></h5>
                                            <div class="post-date">
                                                <i class="far fa-calendar-alt"></i>25th March 2024
                                            </div>
                                        </div>
                                    </div>
                                    <div class="single-post-item">
                                        <div class="thumb bg-cover"
                                            style="background-image: url('assets/img/news/pp3.jpg');"></div>
                                        <div class="post-content">
                                            <h5><a href="news-details.html">Building dreams, one room at a the time</a>
                                            </h5>
                                            <div class="post-date">
                                                <i class="far fa-calendar-alt"></i>26th March 2024
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="single-sidebar-widget">
                                <div class="wid-title">
                                    <h3>Never Miss News</h3>
                                </div>
                                <div class="social-link">
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                    <a href="#"><i class="fab fa-youtube"></i></a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @endsection