@extends('layouts.app_en')

@section('title', __('lang.Login'))

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

    .login-form{
        padding: 46px 23px 10px 23px;
        width: 35%;
        margin: 97px auto;
        background: white;
        border: 1px solid #8080803b;
        border-radius: 10px;
    }
    

</style>
    <div class="login-form">
        <h2>{{ __('lang.Login') }}</h2>

        @if(session('success'))
            <p style="color: lightgreen">{{ session('success') }}</p>
        @endif

     @if (session('status'))
        <span style="color: #335214;" role="alert">
            {{ session('status') }}
        </span>
     @endif


     <!-- validation errors if any -->
      @if($errors->any())

        <ul>
            @foreach($errors->all() as $error)

            <li style="color:lighgreen"> {{ $error}} </li>

            @endforeach
        </ul>
     
      @endif

      
        <form method="post" action="{{route('localized.login', ['lang' => app()->getLocale()])}}">

            @csrf

            <div class="form-group mt-3">
                <label for="email">{{ __('lang.Email') }}</label>
                <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" placeholder="{{ __('lang.Enter Your Email') }}" >
            </div> 

            <div class="form-group mt-3">
                <label for="password">{{ __('lang.Password') }}</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="{{ __('lang.Enter Your Password') }}">
            </div> 

            <div class="form-check mt-3">
                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                <label for="remember">
                    Remember Me
                </label>
            </div>

            <div class="forgot-password d-flex" style="align-items: flex-start; justify-content: space-between">
                <button type="submit" class="btn text-light btn-sm mt-2" style="background: #335214;">{{ __('lang.Login') }}</button> 
                @if (Route::has('password.request'))
                    <a  style="color:rgb(20, 57, 82); font-size: small;" href="{{ route('password.request', ['lang' => app()->getLocale()]) }}">
                    {{ __('lang.Forgot Your Password?') }}
                    </a>
                @endif
            </div>

            <p class="mt-3">{{ __('lang.Dont have an account?') }} <a href="{{route('localized.register', ['lang' => app()->getLocale()])}}" style="color: #335214;">{{ __('lang.Register here.') }}</a>.</p>

        </form>
      </div>
   
@endsection
