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


                <p class="mb-0">Enter your email address to reset your password</p>
                <hr class="my-1">

                <form id="login" class="form-group flex-wrap " method="POST" action="{{route('password.request')}}">
                    <div class="form-input col-lg-12 my-4">
                        @csrf
                        @error('email')
                        <p>{{ $message }}</p>
                        @enderror
                        <label for="email">Email</label>
                        <input type="text" id="email" name="email" value="{{old('email')}}" placeholder="Your email address"
                                                          class="form-control bg-blue-trans placeholder-color p-4">
                        @if (session('status'))
                            <div class="mb-4 font-medium text-sm text-green-600">
                                {{ session('status') }}
                            </div>
                        @endif

                        <div class="d-grid my-3">
                            @csrf
                            <button type="submit" class="btn btn-linear btn-medium">Reset password</button>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </section>
@endsection

