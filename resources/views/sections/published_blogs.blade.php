@extends('layouts.profile_en')
@section('content')

@php
$user = session()->has('user_id') ? \App\User::find(session('user_id')) : null;
@endphp

<div class="col-12 @if($user && $user->type == 'admin') col-md-10 @else col-md-12 @endif" style="display: flex; flex-direction: row; flex-wrap: wrap; gap: 10px;">
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
                                <img 
                                src="{{ $blog->creater && $blog->creater->photo ? asset('images/' . $blog->creater->photo) : asset('assets/img/user-image.png') }}"
                                alt="img" width="100%" class="user-image">
                            </div>
                            <div class="user-name">
                                <h3>{{ $blog->creater->name ?? "unknown"}}</h3>
                                <p>{{ $blog->created_at->format('F d, Y h:i A')}}</p>
                            </div>
                            
                        </div>
                        <a href="{{ route('localized.blog-details', ['lang' => app()->getLocale(), $blog->id]) }}">
                            @php
                              $user = session()->has('user_id') ? \App\User::find(session('user_id')) : null;
                            @endphp

                            <div class="news-image custom-size"  style="background-image: url('{{ asset('storage/' . $blog->thumb) }}'); position: relative;"> 

                                @if(( $user && $user->id == $blog->created_by))
                                <div class="action">
                                    
                                    <a class="btn btn-icon btn-info" href="{{ route('localized.admin.blog.edit', ['lang' => app()->getLocale(), $blog->id]) }}"><i class="fa fa-edit"></i></a>
                                    
                                    <form id="delete-form-{{ $blog->id }}" 
                                        action="{{ route('localized.admin.blog.destroy', ['lang' => app()->getLocale(), $blog->id]) }}" 
                                        method="POST" 
                                        style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="button" class="btn btn-icon btn-danger" onclick="confirmDelete({{ $blog->id }})"><i class="fa fa-trash"></i></button>
                                    </form>
                                </div>
                                @endif
                            </div>
                        </a>
                        <div class="news-content pt-1">
                        
                            <div style="display: block; font-size: 16px;">
                                <a href="{{ route('localized.blog-details', ['lang' => app()->getLocale(), $blog->id]) }}">{{ $blog->title }}</a>
                            </div>
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
                                {{__('lang.Share')}}  <i class="far fa-share-square" style="color: #335214;"></i> 
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
                            <div class="modal-header pb-0">
                                        
                    <div class="news-card-items style-2 mt-0 py-0">
                        <div class="author-section">
                            <div class="author-image">
                                <img src="{{ asset('assets/img/user-image.png') }}" alt="img" width="100%">
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
                                {{ Str::limit(html_entity_decode(strip_tags($blog->content)), 115) }}...
                                <a href="{{ route('localized.blog-details', ['lang' => app()->getLocale(), $blog->id]) }}" class="link-btn" style="color: #335214" >
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
         


<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


@endsection