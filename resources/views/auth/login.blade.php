@extends('layouts.app')
<style>

    .input-field {
        position: relative;
    }

    .field-icon {
        float: right;
        margin-right: 10px;
        margin-top: -32px;
        position: relative;
        z-index: 2;
        color: #989898;
    }

    .input {
        width: 100%;
        border-radius: 6px;
        border: 1px solid #BABABA;
        padding: 13.5px 16px;
        outline: none;
        font-size: 14px;
        font-weight: 400;
        line-height: normal;
        color: #202020;
    }

    .label {
        color: #202020;
        width: 100%;
        font-size: 14px;
        font-weight: 400;
        line-height: normal;
        padding-bottom: 6px;
        word-break: break-all;
    }

    .login-bg-section {
        width: 100%;
    }

    .login-bg-section .container {
        min-height: calc(100vh - 66px);
        display: flex;
        flex-direction: column;
        justify-content: center;
        /* padding-top: 20px; */
        gap: 20px;
    }

    .login-container {
        width: 100%;
        max-width: 506px;
        border-radius: 8px;
        background: #FFF;
        box-shadow: 0px 0px 10px 0px rgba(52, 84, 207, 0.07);
        padding: 32px 55px 62px;
        text-align: center;
        margin: auto;
    }

    .btndanger{
        padding-left: 30px;
        padding-right: 30px;
        height: 50px;
        display: flex;
        align-items: center;
        justify-content: center;
        background-color: #f4623a;
        border-radius: 6px;
        border: 1px solid #f4623a;
        font-size: 18px;
        line-height: 28px;
        font-weight: 400;
        color: #FFFFFF;
        }

        .btndanger:hover{
            color: #f4623a;
            border: 1px solid #f4623a;
        }
    
</style>
@section('content')
    <div class="login-bg-section">
        <div class="container">
            {{-- <div class="card-header">{{ __('Login') }}</div> --}}

            <div class="login-container">
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <h2 class="model-title">Login</h2>
                    <p class="model-text">Enter your email and password</p>
                    <label for="email" class="label mt-24 d-block" style="text-align: left">Email</label>
                    <div class="position-relative">
                        {{-- <input class="input" type="email" name="email" id="email" placeholder="Enter email" required> --}}
                        <input id="email" type="email" class="input @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Enter email" autofocus>

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                    </div>
                    <div class="input-field" style="margin-top: 16px">
                        <label for="conformPassword" class="label" style="text-align: left">Password</label>
                        {{-- <input id="password" placeholder="Enter password" type="password" class="input" name="password" style="padding-right:40pxx;"> --}}
                        <input id="password" type="password" class="input @error('password') is-invalid @enderror" name="password" placeholder="Enter password" required autocomplete="current-password" style="padding-right:40pxx;">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <span class="fa fa-fw fa-eye field-icon toggle-password"></span>
                    </div>
                    
                    {{-- <a href="{{route('forgetPassword')}}" class="label w-100 d-block mt-2" style="text-align:right">Forgot password?</a> --}}
                   <div class="d-flex flex-wrap justify-content-between mt-3 align-items-center">
                    <div class="form-check d-flex gap-2">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                        <label class="form-check-label" for="remember">
                            {{ __('Remember Me') }}
                        </label>
                    </div>
                    @if (Route::has('password.request'))
                        <a class="label d-inline-block" href="{{ route('password.request') }}" style="width:fit-content">
                            {{ __('Forgot Your Password?') }}
                        </a>
                    @endif
                   </div>
                    {{-- <button type="submit" class="btn btndanger mx-auto mt-4">Login</button> --}}
                    <button type="submit" class="mx-auto mt-4 btndanger">
                        {{ __('Login') }}
                    </button>

                    {{-- <div class="row mb-3">
                        <label for="email" class="col-md-4 col-form-label text-md-end">Email</label>

                        <div class="col-md-6">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div> --}}

                    {{-- <div class="row mb-3">
                        <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                        <div class="col-md-6">
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div> --}}
{{-- 
                    <div class="row mb-3">
                        <div class="col-md-6 offset-md-4">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                <label class="form-check-label" for="remember">
                                    {{ __('Remember Me') }}
                                </label>
                            </div>
                        </div>
                    </div> --}}

                    {{-- <div class="row mb-0">
                        <div class="col-md-8 offset-md-4">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Login') }}
                            </button>

                            @if (Route::has('password.request'))
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            @endif
                        </div>
                    </div> --}}
                </form>
            </div>
        </div>
    </div>
@endsection
