@extends('layouts.admin.app')

@section('content')
<div class="account-pages my-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6 col-xl-5">
                        <div class="card bg-pattern shadow-none">
                            <div class="card-body">
                                <div class="text-center mt-4">
                                    <div class="mb-3">
                                        Admin Login
                                    </div>
                                </div>
                                <div class="p-3"> 
                                    <h4 class="font-18 text-center">Likexpre</h4>
                                    <p class="text-muted text-center mb-4">Sign in to continue to Likexpre.</p>
                                    <div id="message_area" style="display: none"></div>
                                    <form id="kt_sign_in_form" class="form-horizontal" data-action="{{ route('login') }}" method="POST">
                        @csrf

                        <div class="form-group">
                            <label for="email" class="col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password" class=" col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            
                                <button type="submit" class="btn btn-primary btn-block waves-effect waves-light submit_button">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <div class="mt-4 text-center">
                                        <a href="{{ route('password.request') }}"><i class="mdi mdi-lock"></i>  {{ __('Forgot Your Password?') }}</a>
                                    </div>
                                @endif
                            
                        </div>
                    </form>
                
                
                                </div>
                    
                            </div>
                        </div>
                        <div class="mt-5 text-center text-white-50">
                            <p>Don't have an account ? <a href="{{url('/register')}}"  class="font-500 text-white"> Signup now </a> </p>
                            <p>© Copyright 2021 | All Rights Reserved | Privacy Policy</p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
@endsection
