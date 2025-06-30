@extends('layouts.app')

@section('content')

<!-- Inner Banner Section -->
<section class="inner-banner">
    <div class="image-layer" style="background-image: url(assets/images/background/banner-image-4.jpg);"></div>
    <div class="auto-container">
        <div class="inner">
            <div class="subtitle"><span>sign up</span></div>
            <div class="pattern-image"><img src="assets/images/icons/separator.svg" alt="" title=""></div>
            <h1><span>Register</span></h1>
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
                    <h2>Sign up</h2>
                    <div class="text desc">Create an account
                    </div>
                </div>
                <div class="default-form reservation-form">
                    <form action="{{route('create-user')}}" method="POST">
                        @csrf
                        <div class="clearfix">
                            <div class="form-group">
                                <div class="text-left">
                                    <label class="label-title text-start">Name *</label>
                                    <input name="name" value="{{ old('name') }}" class="form-control"
                                        placeholder="Your Username" type="text">
                                    @error('name')
                                    <span class="text-danger" style="font-size: 10px;">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="text-left">
                                    <label class="label-title">Email address *</label>
                                    <input name="email" value="{{ old('email') }}" class="form-control"
                                        placeholder="Your Email address" type="email">
                                    @error('email')
                                    <span class="text-danger" style="font-size: 10px;">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="text-left">
                                    <label class="label-title">Password *</label>
                                    <input name="password" value="{{ old('password') }}" class="form-control "
                                        placeholder="Type Password" type="password">
                                    @error('password')
                                    <span class="text-danger" style="font-size: 10px;">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group ">
                                <div class="text-left">
                                    <label class="label-title">Confirm Password *</label>
                                    <input name="confirm_password" value="{{ old('confirm_password') }}"
                                        class="form-control " placeholder="Type Password" type="password">
                                    @error('confirm_password')
                                    <span class="text-danger" style="font-size: 10px;">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <button type="submit" class="theme-btn btn-style-one clearfix">
                                    <span class="btn-wrap">
                                        <span class="text-one">register</span>
                                        <span class="text-two">register</span>
                                    </span>
                                </button>
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
