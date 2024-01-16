@extends('layouts.app')

@section('content')
    <section id="hero">
        <div class="container ">
            <h2 class="section-title light text-center my-5 py-5">Password reset</h2>
        </div>
    </section>

    <section id="signup" class="padding-medium pt-0">
        <div class="container ">
            <div class="col-lg-8 offset-lg-2">

                <p class="mb-0">Fill in the fields to change your password</p>
                <hr class="my-1">

                <form id="register" class="form-group flex-wrap"  method="POST" action="{{route('password.update')}}">
                    <div class="form-input col-lg-12 my-4">
                        @csrf
                        <input type="hidden" name="token" value="{{ request()->route('token') }}">
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

                        <div class="d-grid my-3">
                            @csrf
                            <button type="submit" class="btn btn-linear btn-medium">Change password</button>
                        </div>
                        @if (session('status'))
                            <div class="mb-4 font-medium text-sm text-green-600">
                                {{ session('status') }}
                            </div>
                    @endif
                </form>
            </div>

        </div>
    </section>
@endsection
