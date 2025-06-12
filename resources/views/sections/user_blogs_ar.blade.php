@extends('layouts.app')
@section('content')

<style>
  .modal-backdrop {
    z-index: 1040 !important;
  }
  .modal {
    z-index: 1050 !important;
  }

  .blog-boxes {
    flex-direction: row !important;
  }

  .blog-card {
    width: 33% !important;
    padding-right: 0;
   }

   .news-card-items .news-image {
        height: 229px;
    }

    .section-padding {
        padding: 49px 0;
    }

    @media  screen and (max-width: 600px) {
        .blog-boxes{
            flex-direction: column !important;
        }

        .blog-card{
            width: 100% !important;
        }
    }
</style>

<!-- News Section Start -->
<section class="news-section section-padding" style="background-color: #e9e9e9;">
    <div class="container">

    <div class="card shadow-sm rounded-4 p-4 d-flex flex-column flex-md-row align-items-center justify-content-between bg-white mb-4">
                 <button class="close-sidebar"><i class="fa fa-times"></i></button>
                <div class="d-flex align-items-center mb-3 mb-md-0">
                    <img 
                    src="{{ $user->photo ? asset('images/' . $user->photo) : asset('assets/img/user-image.png') }}"
                     alt="Profile Picture" class="rounded-circle me-3" style="width: 80px; height: 80px; object-fit: cover;">
                    
                    <div>
                        <h4 class="mb-1 fw-semibold text-dark">{{ $user->name ?? __('lang.unknown') }}</h4>
                        <u><a href="{{ route('localized.user-profile', ['lang' => app()->getLocale(), $user->id]) }}" class="mb-0 text-muted">{{ __('lang.View Profile') }}</a></u>
                    </div>
                </div>

                <div class="d-flex flex-column flex-md-row gap-2 back-arrow">
                    <a href="{{ route('localized.blog', ['lang' => app()->getLocale()])}}" style="background-color: #335214" class="btn btn-sm text-light px-4 py-2 rounded-pill d-flex align-items-center">
                        <i class="fa-solid fa-arrow-left"></i>
                    </a>
                </div>
                <button class="close-sidebar"><i class="fa fa-times"></i></button>
            </div>  

            
               

            <div class="row g-4 blog-boxes mt-1">
                
            <div class="single-sidebar-widget">
                <div class="popular-posts">
            @if($latestBlogs->count() > 0)
            @foreach($latestBlogs as $blog)

            <!-- Share Modal -->
            <div class="modal fade" id="shareModalTest" tabindex="-1">
                <div class="modal-dialog modal-dialog-centered" style="max-width: 320px;">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">{{ __('lang.Share this blog') }}</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>
                    <div id="copyMessage" style="color: green; display:none; position: absolute; top: 85px; right: 27px;">{{ __('lang.Link copied!') }}</div>

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


                    <div class="news-card-items style-2 mt-0" style="background-color: rgba(255, 255, 255, 0) !important; margin-bottom: 16px;">
                        <div class="author-section">
                            <div class="author-image">
                                <img 
                                src="{{ $blog->creater && $blog->creater->photo ? asset('images/' . $blog->creater->photo) : asset('assets/img/user-image.png') }}"
                                class="user-image" width="100%">
                            </div>
                            <div class="user-name">
                                <h3>{{ $blog->creater->name ?? "unknown"}}</h3>
                                <p>{{ $blog->created_at->format('F d, Y h:i A')}}</p>
                            </div>
                            
                        </div>
                     
                       
                    
                        <div class="single-post-item">
                            <a href="{{ route('localized.blog-details', ['lang' => app()->getLocale(), $blog->id]) }}">
                            <div class="thumb bg-cover" style="background-image: url('{{ asset('storage/' . $blog->thumb) }}');"></div></a>
                                <div class="post-content">
                                    <h5>
                                        <a href="{{ route('localized.blog-details', ['lang' => app()->getLocale(), $blog->id]) }}">
                                            {{$blog->title}}
                                        </a>
                                    </h5>
                                    <div class="post-date">
                                        <i class="far fa-calendar-alt"></i>{{$blog->created_at->format('F d, Y h:i A')}}
                                    </div>
                                </div>
                        </div>
                        <div class="post-footer mt-2 user-blog-footer">
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
                            {{__('lang.Share')}}  <i class="far fa-share-square" style="color: #335214;"></i> 
                        </button>

                    </div>
                    </div>
                    @endforeach
                </div>
                <a href="{{ route('localized.user-profile', ['lang' => app()->getLocale(), $user->id]) }}" class="text-center show-more-blogs">{{ __('lang.View all blogs') }}</a>
            </div>

            <!-- comment section -->
        
            @else
                <div class="col-12 text-center py-5">
                    <div class="no-blogs-message">
                        <i class="fa-solid fa-folder-open fa-3x mb-3" style="color: #335214;"></i>
                        <h3>{{ __('lang.No blogs found') }}</h3>
                        <p>{{ __('lang.This user has not published any blogs yet') }}</p>
                        <a href="{{ route('localized.blog', ['lang' => app()->getLocale()]) }}" class="btn btn-sm text-white mt-3" style="background-color: #335214;">
                            {{ __('lang.Return to all blogs') }}
                        </a>
                    </div>
                </div>
            @endif
        </div>
    </div>
</section>
@endsection