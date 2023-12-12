@extends('layouts.app')
<style>

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
            background-color: #FFFFFF;  
        }
    
</style>
@section('content')

<div class="login-bg-section">
    <div class="container">

        <div class="login-container">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif

            <form method="POST" action="{{ route('password.email') }}">
                @csrf
                <h2 class="model-title">Forgot Password</h2>
                    <p class="model-text">Enter your email and we’ll send you a reset link</p>
                    <label for="email" class="label mt-24 d-block" style="text-align: left">Email</label>
                    <div class="position-relative">
                        <input id="email" placeholder="Enter email" type="email" class="input @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                        @error('email')
                            <span class="invalid-feedback" role="alert" style="text-align: left">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <button type="submit" class="btndanger mx-auto mt-4">
                        {{ __('Send Password Reset Link') }}
                    </button>
            </form>
        </div>
    </div>
</div>
   
@endsection
