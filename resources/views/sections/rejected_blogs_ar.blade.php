@extends('layouts.profile')
@section('content')

<style>

.news-card-items{
            min-height: 368px !important;
        }
</style>

<div class="col-12 col-md-10" style="display: flex; flex-direction: row; flex-wrap: wrap; gap: 10px;">
    @foreach($blogs->sortByDesc('created_at') as $blog)
    @if($blog->status === 'rejected' && $blog->created_by == $user->id)

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

                <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp mb-3 blog-card" data-wow-delay=".7s" style="display: flex; flex-direction: column; height: 100%;">
                    <div class="news-card-items style-2 mt-0 d-flex flex-column h-100">
                        <div class="author-section">
                            <div class="author-image">
                                <img 
                                src="{{ $blog->creater && $blog->creater->photo ? asset('images/' . $blog->creater->photo) : asset('assets/img/user-image.png') }}"
                                alt="img" width="100%" class="user-image">
                            </div>
                            <div class="user-name">
                                <h3>{{ $blog->creater->name ?? __('lang.unknown')}}</h3>
                                <p>{{ $blog->created_at->format('F d, Y h:i A')}}</p>
                            </div>
                            
                        </div>
                        <a href="{{ route('localized.blog-details', ['lang' => app()->getLocale(), $blog->id]) }}">
                            <div class="news-image custom-size"  style="background-image: url('{{ asset('storage/' . $blog->thumb) }}'); position: relative;"> 
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
                            </div>
                        </a>
                        <div class="news-content pt-1 flex-grow-1">
                        
                            <div style="display: block; font-size: 16px;">
                                <a href="{{ route('localized.blog-details', ['lang' => app()->getLocale(), $blog->id]) }}">{{ $blog->title }}</a>
                            </div>
                        </div>

                        <!-- Why Rejected Button -->
                        <div class="mt-auto">
                            <button type="button" class="btn btn-sm btn-warning w-100" data-bs-toggle="modal" data-bs-target="#whyRejectedModal{{ $blog->id }}">
                                {{ __('lang.Why Rejected?') }}
                            </button>
                        </div>

                        <!-- Why Rejected Modal -->
                        <div class="modal fade" id="whyRejectedModal{{ $blog->id }}" tabindex="-1" aria-labelledby="whyRejectedModalLabel{{ $blog->id }}" aria-hidden="true">
                          <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="whyRejectedModalLabel{{ $blog->id }}">{{ __('lang.Rejection Details') }}</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
                                <p><strong>{{ __('lang.Reason:') }}</strong> {{ $blog->rejection_message ?? __('lang.Unknown') }}</p>
                                <p><strong>{{ __('lang.Rejected By:') }}</strong> {{ $blog->rejected_by_user->name ?? __('lang.Unknown') }}</p>
                                <p><strong>{{ __('lang.Rejected At:') }}</strong> {{ $blog->updated_at ? $blog->updated_at->format('d/m/Y h:i A') : __('lang.Unknown') }}</p>
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">{{ __('lang.Close') }}</button>
                              </div>
                            </div>
                          </div>
                        </div>
                    </div>
                </div>

              
                @endif
                @endforeach
            </div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

@endsection