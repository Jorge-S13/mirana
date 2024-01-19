@extends('layouts.app')

@section('content')


    <section id="hero" class="pattern-blur">
        {{--    <div class="pattern-overlay pattern-blur-right right-side-pattern">--}}
        {{--        <img src="{{asset('images/pattern-blur-right.png')}}" fetchpriority="low" alt="">--}}
        {{--    </div>--}}
        <div class="container ">
            <h2 class="section-title light text-center mt-5 pt-5">Affiliate links</h2>
            <p class="light text-center mt-2 pt-2">Welcome to the Affiliate Links page! Here we share with you recommendations for products and services that have inspired us. It's important to note that some of the links shown here are affiliate links and we may receive a small percentage of the sale when you use them.</p>
        </div>
    </section>

    <section id="blog" class="padding-large pt-5">
        <div class="container">
            <div class="product-content">
                <div class="row">
                    @foreach($posts as $post)
                        <div class="col-md-3 col-sm-6">
                            <div class="product-item bg-blue-trans p-3 rounded-1 mb-3 ">
                                <div class="product-detail">
                                    <div class="clients-detail">
                                        <a href="{{route('affiliate-links.show',$post->slug)}}"> <img src="{{asset('storage/' . $post->main_image)}}" alt="{{$post->image_alt}}"> </a>
                                    </div>
                                    <div class="btn-card">
                                        <a href="{{route('affiliate-links.categories',$post->category->slug)}}" class="view-btn">{{$post->category_name}}</a>
                                    </div>
                                    <a href="{{route('affiliate-links.show',$post->slug)}}">
                                        <h3 class="block-title">{{$post->title}}</h3>
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            {{$posts->onEachSide(3)->links()}}
        </div>
    </section>


@endsection
