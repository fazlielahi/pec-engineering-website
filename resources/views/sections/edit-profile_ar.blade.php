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

       
</style>

<div class="col-12 col-md-10" style="display: flex; flex-direction: row; flex-wrap: wrap; gap: 10px; justify-content: flex-end !important;" dir="rtl" lang="ar">
    <div class="form mb-4">
        <h3>{{ __('lang.Edit Profile') }}</h3>

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

        <form method="POST" action="{{route('localized.profile-update', ['lang' => app()->getLocale()])}}" enctype="multipart/form-data" >
            @csrf

            <div class="form-group my-3">
                <label for="name">{{ __('lang.Name') }}</label>
                <input type="text" name="name" id="" value="{{ old('name', $user->name) }}" placeholder="{{ __('lang.Enter Your Name') }}" class="form-control">
            </div>

            <div id="photo-preview">
            
                @if($user->photo)
                    <img src="{{ asset('images/' . $user->photo) }}" alt="{{ __('lang.Your Current Photo') }}" width="100">
                @endif
                                    
            </div>

            <div class="form-group mt-1">
                <label for="photo">{{ __('lang.Change Photo') }}</label>
                <input type="file" name="photo" class="form-control" id="photo">
            </div>

            <button type="submit" class="btn text-light btn-sm mt-3" style="background: #335214;">{{ __('lang.Update') }}</button>

            <p class="mt-3" style="font-size: 14px;">
                <a href="{{ route('password.request', ['lang' => app()->getLocale()]) }}" style="color: #335214; font-weight: 500; text-decoration: underline;">
                    {{ __('lang.Change password') }}
                </a>
            </p>


        </form>
    </div>
</div>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const input = document.querySelector('#photo'); // input field for photo
        const preview = document.getElementById('photo-preview'); // preview container

        if (!input || !preview) return;

        input.addEventListener('change', function (e) {
            const file = e.target.files[0];
            if (!file) return;

            const reader = new FileReader();
            reader.onload = function (ev) {
                preview.innerHTML = ''; // Clear previous preview

                const wrapper = document.createElement('div');
                wrapper.className = 'image-wrapper';

                wrapper.innerHTML = `
                    <img src="${ev.target.result}" class="preview-img" style="max-width: 150px; border-radius: 8px;" width="100">
                    <span class="remove-btn" style="cursor: pointer; color: red; margin-left: 10px; font-size: 24px;">&times;</span>
                `;

                wrapper.querySelector('.remove-btn').onclick = function () {
                    input.value = '';
                    preview.innerHTML = '';
                };

                preview.appendChild(wrapper);
            };

            reader.readAsDataURL(file);
        });
    });
</script>


@endsection