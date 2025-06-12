@extends('layouts.profile')

@section('title', __('lang.Register'))

@section('content')

<style>
    .menu-thumb {
        display: inline-block !important;
    }
    .blog-boxes{
        flex-direction: row !important;
    }

    .form{
        width: 100% !important;
        background: white;
        padding: 11px;
        border-radius: 16px;
        padding-top: 20px;
        box-shadow: 0px 0px 5px 1px #3333331f;
        }

        .col-md-10 {
        flex: 0 0 auto;
        width: 79.333333%;
    }

    .remove-btn {
    position: absolute;
    top: 0;
    right: 5px;
    background: #fff;
    color: red;
    font-weight: bold;
    font-size: 18px;
    border-radius: 50%;
    padding: 0 6px;
    cursor: pointer;

}
.image-wrapper {
    position: relative;
    display: inline-block;
    margin-right: 10px;
}

       
</style>

<div class="col-12 col-md-10" style="display: flex; flex-direction: row; flex-wrap: wrap; gap: 10px; justify-content: flex-end !important;" dir="rtl" lang="ar">
    <div class="form mb-4">
        <h3>{{ __('lang.Edit Post') }}</h3>

        <!-- display validation errors -->
        <hr style="border-top: 1px dashed #424242; margin: 10px 0;">

        @if($errors->any())
        <ul>

            @foreach($errors->all() as $error)
            <li style="color:red; display: block !important"> {{ $error }} </li>
            @endforeach

        </ul>
        @endif

        <!-- Registration form -->

        <form action="{{ route('localized.admin.blog.update', ['lang' => app()->getLocale(), $blog->id]) }}" method="post" enctype="multipart/form-data">

            @csrf 
            @method('PUT')
           
            <div class="row clearfix">
            <div class="col-lg-12">
                <div class="card">
                    <div class="body">
                        
                        {{--Display validation errors if any--}}

                        @if($errors->any())

                            @foreach($errors->all() as $error)

                                <p class="text-danger">{{ $error }}</p>

                            @endforeach

                        @endif

                        <div class="form-group my-2">
                            <input type="text"  name="title" value="{{ old('title', $blog->title) }}" class="form-control" placeholder="{{ __('lang.Enter Blog title') }}" />
                        </div>
                        <div class="form-group my-2">
                            <label>{{ __('lang.Change Thumbnail') }} </label> <small id="fileHelp" class="form-text text-muted"> ({{ __('lang.Dimensions: 600x340') }})</small>
                            <input type="file"  name="thumb" class="image-input-thumb form-control-file d-block" value="{{ old('image', $blog->thumb) }}"  id="exampleInputFile" aria-describedby="fileHelp">
                            
                            <div id="thumb-preview-container" class="mt-2">

                                @if($blog->thumb)
                                    <img src="{{ asset('storage/' . $blog->thumb) }}" alt="Blog Thumbnail" width="100">
                                @endif
                            
                            </div>
                        </div>
                        <div class="form-group my-2">
                            <label>{{ __('lang.Change Main Image') }} </label> <small id="fileHelp" class="form-text text-muted"> ({{ __('lang.Dimensions: 1920x500') }})</small>
                            <input type="file"  name="image" class="image-input-main form-control-file d-block" value="{{ old('image', $blog->image) }}"  id="exampleInputFile" aria-describedby="fileHelp">
                            
                            <div id="image-preview-container">

                                @if($blog->image)
                                    <img src="{{ asset('storage/' . $blog->image) }}" alt="Blog Image" width="100">
                                @endif
                            
                            </div>
                        </div>
                        <textarea name="content" class="my-2">
                            {{ old('content', $blog->content) }}
                        </textarea>
                        
                        @if($user->type === 'super_admin')
                            <label class="mt-3">{{ __('lang.Status') }} </label>
                            <select name="status" class="form-control show-tick">
                                <option value="draft" @if($blog->status == 'draft') selected @endif>{{__('lang.Draft')}}</option>
                                <option disabled value="request" @if($blog->status == 'request') selected @endif>{{ __('lang.Request for review') }}</option>
                                <option value="published" @if($blog->status == 'published') selected @endif>{{__('lang.Published')}}</option>
                            </select>
                        @else
                            @if($blog->status === 'draft')
                            <label class="mt-3">{{ __('lang.Status') }} </label>
                            <select name="status" class="form-control show-tick">
                                <option value="draft" @if($blog->status == 'draft') selected @endif>{{__('lang.Draft')}}</option>
                                <option value="request" @if($blog->status == 'request') selected @endif>{{ __('lang.Request for review') }}</option>
                            </select>
                            @elseif($blog->status === 'request')
                                <label class="mt-3 text-danger d-block">{{ __('lang.The blog has been requested for review!') }} </label>
                                <input type="hidden" name="status" value="request">
                            @else
                                <input type="hidden" name="status" value="published">
                            @endif
                        @endif
                        <button type="submit" class="btn text-light btn-sm my-3" style="background: #335214;">{{ __('lang.Update') }}</button>
                    </div>
                </div>
            </div>            
            </div>
            </form>
    </div>
</div>


<script src="https://cdn.ckeditor.com/4.22.1/standard/ckeditor.js"></script>
<script>
       CKEDITOR.replace('content', {
            extraAllowedContent: 'img[width,height]{width,height}', // Allow width & height as attributes and styles
            removeFormatAttributes: '',
            image_prefillDimensions: true, 
            allowedContent: true, 
            filebrowserUploadUrl: "{{ route('localized.admin.ckeditor.upload', ['lang' => app()->getLocale()]) }}?_token={{ csrf_token() }}",
            filebrowserUploadMethod: 'form',
            filebrowserUploadMethod: 'xhr'
            
        });
</script>

<script>
    setupImagePreview('.image-input-thumb', 'thumb-preview-container');
    setupImagePreview('.image-input-main', 'image-preview-container');

    function setupImagePreview(inputSelector, previewContainerId) {
        const input = document.querySelector(inputSelector);
        const preview = document.getElementById(previewContainerId);

        input.addEventListener('change', e => {
            const file = e.target.files[0]; // Only one file
            if (!file) return;

            const reader = new FileReader();
            reader.onload = ev => {
                // Clear previous preview
                preview.innerHTML = '';

                const wrapper = document.createElement('div');
                wrapper.className = 'image-wrapper';

                wrapper.innerHTML = `
                    <img src="${ev.target.result}" class="preview-img" style="width: 100px; height: 100px; object-fit: cover;">
                    <span class="remove-btn">&times;</span>
                `;

                // Remove button resets the input and preview
                wrapper.querySelector('.remove-btn').onclick = () => {
                    input.value = ''; // Clear file input
                    preview.innerHTML = ''; // Clear preview
                };

                preview.appendChild(wrapper);
            };

            reader.readAsDataURL(file);
        });
    } 
</script>


@endsection