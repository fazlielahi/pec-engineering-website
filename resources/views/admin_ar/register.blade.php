@extends('layouts.app_en')

@section('title', __('lang.Register'))

@section('content')

<style>
    footer{
        display: none !important;
    }

    li{
        display: none !important;
    }
    .menu-thumb{
        display: inline-block !important;
    }

    .ScrollSmoother-content{
        padding: 46px 23px 10px 23px;
        width: 35%;
        margin: 97px auto;
        background: white;
        border: 1px solid #8080803b;
        border-radius: 10px;
    }
    

</style>
    
    <h2>{{ __('lang.Register') }}</h2>

    <!-- display validation errors -->

    @if($errors->any())
        <ul>

            @foreach($errors->all() as $error)
                <li style="color:red; display: block !important"> {{ $error }} </li>
            @endforeach

        </ul>
    @endif

    <!-- Registration form -->
     <form method="POST" action="{{route('localized.register', ['lang' => app()->getLocale()])}}" enctype="multipart/form-data">
        @csrf 

        <div class="form-group mt-3">
            <label for="name">{{ __('lang.Name') }}</label>
            <input type="text" name="name" id="" value="{{ old('name') }}" placeholder="{{ __('lang.Enter Your Name') }}" class="form-control">
        </div>

        <div class="form-group mt-3">
            <label for="email">{{ __('lang.Email') }}</label>
            <input type="text" name="email" id="" value="{{ old('email') }}" placeholder="{{ __('lang.Enter Your Email') }}" class="form-control">
        </div>

        <div class="form-group mt-3">
            <label for="password">{{ __('lang.Password') }}</label>
            <input type="password" name="password" placeholder="{{ __('lang.Enter Your Password') }}" class="form-control">
        </div>

        <div class="form-group mt-3">
            <label for="photo">Photo (Optional)</label>
            <input type="file" name="photo"  class="form-control">
        </div>

        <button type="submit" class="btn text-light btn-sm mt-3" style="background: #335214;">{{ __('lang.Register') }}</button>

        <p class="mt-3">{{ __('lang.Already have an account?') }} <a href="{{route('localized.login', ['lang' => app()->getLocale()])}}" style="color: #335214;">{{ __('lang.Login here.') }}</a></p> 

     </form>

@endsection