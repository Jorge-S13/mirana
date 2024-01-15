@extends('layouts.app')

@section('content')

    <section id="top-creators">

        <div class="container">
            <div class="product-item bg-blue-trans border-rounded my-5">
                <div class="product-detail text-center">
                    <h1 class="banner-title m-0">404</h1>
                    <h2 class="text-light display-3 fw-medium ">Page not found!</h2>
                    <p>Sorry! page that you are looking for is not available.</p>
                    <a href="{{route('home')}}" class="btn btn-linear btn-medium mt-4">Go Back To Home</a>

                </div>
            </div>
        </div>

    </section>

@endsection
