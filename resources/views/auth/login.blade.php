@extends('layouts.app')

@section('content')
    <section id="hero">
        <div class="container ">
            <h2 class="section-title light text-center my-5 py-5">Login</h2>
        </div>
    </section>

    <section id="signup" class="padding-medium pt-0">
        <div class="container ">
            <div class="col-lg-8 offset-lg-2">

                <p class="mb-0">Login With Social</p>
                <hr class="my-1">
                <div class="row mt-4 mb-5">
                    <div class="d-grid col-md-6 my-2">
                        <a href="#" class="btn btn-outline-linear btn-medium m-0">
                            <div class="d-flex flex-wrap justify-content-center">
                                <iconify-icon icon="ion:logo-google" class="signup-social-icon me-2"></iconify-icon>
                                <p class="mb-0">Google</p>
                            </div>
                        </a>
                    </div>
                    <div class="d-grid col-md-6 my-2">
                        <a href="#" class="btn btn-outline-linear btn-medium m-0">
                            <div class="d-flex flex-wrap justify-content-center">
                                <iconify-icon icon="ion:logo-facebook" class="signup-social-icon me-2"></iconify-icon>
                                <p class="mb-0">Facebook</p>
                            </div>
                        </a>
                    </div>
                </div>


                <p class="mb-0">Or Login With Email</p>
                <hr class="my-1">

                <form id="login" class="form-group flex-wrap " method="POST" action="{{route('login')}}">
                    <div class="form-input col-lg-12 my-4">
                        @csrf
                        @error('email')
                        <p>{{ $message }}</p>
                        @enderror
                        <label for="email">Email</label>
                        <input type="text" id="email" name="email" value="{{old('email')}}" placeholder="Your email address"
                                                          class="form-control bg-blue-trans placeholder-color p-4">
                        @error('password')
                        <p>{{ $message }}</p>
                        @enderror
                        <label for="password">Password</label>
                        <input type="password" id="password" name="password" placeholder="Password"
                                                             class="form-control bg-blue-trans placeholder-color p-4"
                                                             aria-describedby="passwordHelpBlock">


                        <label class="py-3 d-flex flex-wrap justify-content-between" for="remember">
                            <div>
                                <input type="checkbox" class="d-inline" name="remember" id="remember">
                                <span class="label-body fw-medium">Remember Me</span>
                            </div>

                            <div id="passwordHelpBlock" class="form-text ">
                                <a href="{{route('password.request')}}" class="text-primary fw-medium"> Lost Your Password?</a>
                            </div>
                        </label>
                        <div class="d-grid my-3">
                            @csrf
                            <button type="submit" class="btn btn-linear btn-medium">Sign Up</button>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </section>
@endsection
