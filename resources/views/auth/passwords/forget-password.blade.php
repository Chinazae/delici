@extends('layouts.app')

@section('content')

<!-- Inner Banner Section -->
<section class="inner-banner">
    <div class="image-layer" style="background-image: url(assets/images/background/banner-image-4.jpg);"></div>
    <div class="auto-container">
        <div class="inner">
            <div class="subtitle"><span>welcome</span></div>
            <div class="pattern-image"><img src="assets/images/icons/separator.svg" alt="" title=""></div>
            <h1><span>Login</span></h1>
        </div>
    </div>
</section>
<!--End Banner Section -->

<div class="auto-container">
    <div class="c-page-form-box">
        <div class="row clearfix">
            <!--form Section-->
            <div class="loc-block col-lg-6 col-md-12 col-sm-12">
                <div class="title-box centered">
                    <h2>Forgot Password?</h2>
                    <div class="text desc">No worries, we will send you a verification code to reset your password
                    </div>
                </div>
                <div class="default-form reservation-form">
                    <form id="login" action="{{route('forgotPassword.email')}}" method="POST">
                        @csrf
                        <div class="clearfix">
                            <div class="form-group">
                                <div class="text-left">
                                    <label class="label-title">Email *</label>
                                    <input id="email" type="email"
                                        class="form-control @error('email') is-invalid @enderror" name="email"
                                        value="{{ old('email') }}" required autocomplete="email" autofocus>

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            {{-- <div class="form-group">
                                <div class="text-left">
                                    <label class="label-title">Password *</label>
                                    <input id="password" type="password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        required autocomplete="current-password">

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div> --}}
                            {{-- <div class="form-group ">
                                <div class="field-inner">
                                    <label class="label-title">Password *</label>
                                    <input name="password" value="{{ old('password') }}" class="form-control "
                                        placeholder="Type Password" type="password">
                                    @error('password')
                                    <span class="text-danger" style="font-size: 10px;">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group ">
                                <div class="field-inner">
                                    <label class="label-title">Confirm Password *</label>
                                    <input name="confirm_password" value="{{ old('confirm_password') }}"
                                        class="form-control " placeholder="Type Password" type="password">
                                    @error('confirm_password')
                                    <span class="text-danger" style="font-size: 10px;">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div> --}}

                            <div class="text-left">
                                <button type="submit" class="theme-btn btn-style-one clearfix">
                                    <span class="btn-wrap">
                                        <span class="text-one">submit</span>
                                        <span class="text-two">submit</span>
                                    </span>
                                </button>

                                {{-- <a href="" class="m-l5"><i class="fas fa-unlock-alt"></i>Forgot Password</a> --}}
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <!--form image Section-->
            <div class="loc-block col-lg-6 col-md-12 col-sm-12">
                <img src="assets/images/resource/restaurant.png" alt="">
            </div>
        </div>
    </div>
</div>

@endsection
