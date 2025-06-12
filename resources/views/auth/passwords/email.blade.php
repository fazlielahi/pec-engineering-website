@extends('layouts.app_en')

@section('content')


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card my-5">
                <div class="card-header">{{ __('Update Password') }}</div>

                <div class="card-body">
                    @if (session('status'))
                         <span style="color: #335214;" role="alert">
                            {{ session('status') }}
                        </span>
                    @endif

                    <form method="POST" action="{{ route('password.email', ['lang' => app()->getLocale()]) }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6 email-field">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                
                            </div>
                        </div>

                        <div class="form-group row mb-0 mt-2">
                            <div class="">
                                <button type="submit" class="btn text-light" style="background: #335214;">
                                    {{ __('Send Password Update Link') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
