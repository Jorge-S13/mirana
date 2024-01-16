@extends('layouts.app')

@section('content')
    <section id="hero">
        <div class="container ">
            <h2 class="section-title light text-center my-5 py-5">Sign-up</h2>
        </div>
    </section>

    <section id="signup" class="padding-medium pt-0">
        <div class="container ">
            <div class="col-lg-8 offset-lg-2">

                <p class="mb-0">Sign-up With Social</p>
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


                <p class="mb-0">Or Sign-Up With Email</p>
                <hr class="my-1">

                <form id="register" class="form-group flex-wrap"  method="POST" action="{{route('register')}}">
                    <div class="form-input col-lg-12 my-4">
                        @csrf
                        @error('name')
                        <p>{{ $message }}</p>
                        @enderror
                        <label for="name">Name</label>
                        <input type="text" id="name" name="name" value="{{old('name')}}" placeholder="Your full name"
                                                         class="form-control bg-blue-trans placeholder-color p-4">
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
                        <input type="password" id="password" name="password" placeholder="Set your password"
                                                             class="form-control bg-blue-trans placeholder-color p-4"
                                                             aria-describedby="passwordHelpBlock">
                        @error('password_confirmation')
                        <p>{{ $message }}</p>
                        @enderror
                        <label for="password_confirmation">Password confirmation</label>
                        <input type="password" id="password_confirmation" name="password_confirmation" placeholder="Retype your password"
                                                                          class="form-control bg-blue-trans placeholder-color p-4"
                                                                          aria-describedby="passwordHelpBlock">

                        <label class="py-3 d-flex flex-wrap justify-content-between">

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
